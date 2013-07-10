<?php
/*
Plugin Name: UserAdvManager
Version: auto
Description: Renforcer la gestion des utilisateurs - Enforce users management
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=216
Author: Nicco, Eric
Author URI: http://gallery-nicco.no-ip.org, http://www.infernoweb.net
*/

/* History:  UAM_PATH.'Changelog.txt.php' */

/*
 ***** TODO List *****
See project bugtracker: http://piwigo.org/bugs/my_view_page.php
*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
if (!defined('UAM_PATH')) define('UAM_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

global $conf;

include_once (UAM_PATH.'include/constants.php');
include_once (UAM_PATH.'include/functions.inc.php');

load_language('plugin.lang', UAM_PATH);
load_language('help.lang', UAM_PATH);
$conf_UAM = unserialize($conf['UserAdvManager']);


// Plugin administration panel
// ---------------------------
add_event_handler('get_admin_plugin_menu_links', 'UAM_admin_menu');

// Features and controls on user connexion
// ---------------------------------------
add_event_handler('loc_begin_index', 'UAM_Init');

// User creation
// -------------
add_event_handler('register_user', 'UAM_Adduser');

// User deletion
// -------------
add_event_handler('delete_user', 'UAM_Deluser');

// Check users registration
// ------------------------
add_event_handler('register_user_check', 'UAM_RegistrationCheck', EVENT_HANDLER_PRIORITY_NEUTRAL, 2);

if (script_basename() == 'profile')
{
  add_event_handler('loc_begin_profile', 'UAM_Profile_Init');
}

// Redirection to profile page
// ---------------------------
add_event_handler('login_success', 'UAM_LoginTasks',EVENT_HANDLER_PRIORITY_NEUTRAL, 1);

// Adding customized text to lost password email
// ---------------------------------------------
add_event_handler('render_lost_password_mail_content', 'UAM_lost_password_mail_content');

// *** Important ! This is necessary to make email exclusion work in admin's users management panel ***
// ----------------------------------------------------------------------------------------------------
add_event_handler('init', 'UAM_InitPage');


// PWG_Stuffs module
// -----------------
if (isset($conf_UAM['STUFFS']) and $conf_UAM['STUFFS'] == 'true')
{
  add_event_handler('get_stuffs_modules', 'register_UAM_stuffs_module');
}

// Add new feature in user_list - Password Reset
// ---------------------------------------------
if (isset($conf_UAM['PWDRESET']) and $conf_UAM['PWDRESET'] == 'true')
{
  // Add new column on user_list
  // ---------------------------
  add_event_handler('loc_visible_user_list', 'UAM_loc_visible_user_list');

  // Add prefilter on user_list
  // --------------------------
  add_event_handler('loc_begin_admin', 'UAM_PwdReset_Action',60);

  /**
   * UAM_PwdReset_Action - Triggered on UAM_PwdReset_Action
   * Handle password reset action in user_list.php
   */
  function UAM_PwdReset_Action()
  {
    global $conf, $user, $template, $lang, $errors;

    $page['errors'] = array();
    $page['infos'] = array();
    $page['filtered_users'] = array();

    if (isset($_POST['pwdreset']))
    {
      $collection = array();

      switch ($_POST['target'])
      {
        case 'all' :
        {
          foreach($page['filtered_users'] as $local_user)
          {
            array_push($collection, $local_user['id']);
          }
          break;
        }
        case 'selection' :
        {
          if (isset($_POST['selection']))
          {
            $collection = $_POST['selection'];
          }
          break;
        }
      }

      if (count($collection) == 0)
      {
        array_push($page['errors'], l10n('Select at least one user'));
      }
    }

    if (isset($_POST['pwdreset']) and count($collection) > 0)
    {
      if (in_array($conf['guest_id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_Guest cannot be pwdreset'));
        $template->append('errors', l10n('UAM_Guest cannot be pwdreset'));
      }
      if (($conf['guest_id'] != $conf['default_user_id']) and
        in_array($conf['default_user_id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_Default user cannot be pwgreset'));
        $template->append('errors', l10n('UAM_Default user cannot be pwgreset'));
      }
      if (in_array($conf['webmaster_id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_Webmaster cannot be pwdreset'));
        $template->append('errors', l10n('UAM_Webmaster cannot be pwdreset'));
      }
      if (in_array($user['id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_You cannot pwdreset your account'));
        $template->append('errors', l10n('UAM_You cannot pwdreset your account'));
      }

      // Generic accounts exclusion (including Adult_Content generic users)
      // ------------------------------------------------------------------
      $query ='
SELECT u.id
FROM '.USERS_TABLE.' AS u
INNER JOIN '.USER_INFOS_TABLE.' AS ui
  ON u.id = ui.user_id
WHERE ui.status = "generic"
;';

	    $result = pwg_query($query);

      while ($row = pwg_db_fetch_assoc($result))
      {
        if (in_array($row['id'], $collection))
        {
          array_push($page['errors'], l10n('UAM_Generic cannot be pwdreset'));
          $errors = l10n('UAM_Generic cannot be pwdreset');
        }
      }

      // Admins accounts exclusion
      // --------------------------
      $query ='
SELECT u.id
FROM '.USERS_TABLE.' AS u
INNER JOIN '.USER_INFOS_TABLE.' AS ui
  ON u.id = ui.user_id
WHERE ui.status = "admin"
;';

	    $result = pwg_query($query);

      while ($row = pwg_db_fetch_assoc($result))
      {
        if (in_array($row['id'], $collection))
        {
          array_push($page['errors'], l10n('UAM_Admins cannot be pwdreset'));
          $errors = l10n('UAM_Admins cannot be pwdreset');
        }
      }

      $template->append('errors', $errors);

      if (count($page['errors']) == 0)
      {
        if (isset($_POST['confirm_pwdreset']) and 1 == $_POST['confirm_pwdreset'])
        {
          foreach ($collection as $user_id)
          {
            UAM_Set_PwdReset($user_id);
          }
          array_push(
            $page['infos'],
            l10n_dec(
              'UAM %d user pwdreseted', 'UAM %d users pwdreseted',
              count($collection)
              )
            );
          $template->append('infos', l10n_dec(
              'UAM %d user pwdreseted', 'UAM %d users pwdreseted',
              count($collection)));
          foreach ($page['filtered_users'] as $filter_key => $filter_user)
          {
            if (in_array($filter_user['id'], $collection))
            {
              unset($page['filtered_users'][$filter_key]);
            }
          }
        }
        else
        {
          array_push($page['errors'], l10n('UAM_You need to confirm pwdreset'));
          $template->append('errors', l10n('UAM_You need to confirm pwdreset'));
        }
      }
    }
    $template->set_prefilter('user_list', 'UAM_PwdReset_Prefilter');
  }

  /**
   * UAM_PwdReset_Prefilter
   * Adds action field for password reset in user_list.tpl
   */
  function UAM_PwdReset_Prefilter($content, &$smarty)
  {
    $search = '
<fieldset>
  <legend>{\'Deletions\'|@translate}</legend>
  <label><input type="checkbox" name="confirm_deletion" value="1"> {\'confirm\'|@translate}</label>
  <input class="submit" type="submit" value="{\'Delete selected users\'|@translate}" name="delete">
</fieldset>
';
 
    $addon = '
<fieldset>
  <legend>{\'UAM_PwdReset\'|@translate}</legend>
  <label><input type="checkbox" name="confirm_pwdreset" value="1"> {\'confirm\'|@translate}</label>
  <input class="submit" type="submit" value="{\'UAM_Password reset selected users\'|@translate}" name="pwdreset">
</fieldset>
';

    $replacement = $addon.$search;

    return str_replace($search, $replacement, $content);
  }
}


// Check options compatibility between UAM and Piwigo at admin page load
// ---------------------------------------------------------------------
add_event_handler('loc_begin_admin_page', 'UAM_check_compat');
?>