<?php
/*
Plugin Name: UserAdvManager
Version: 2.15.9
Description: Renforcer la gestion des utilisateurs - Enforce users management
Plugin URI: http://fr.piwigo.org/ext/extension_view.php?eid=216
Author: Nicco, Eric
Author URI: http://gallery-nicco.no-ip.org, http://www.infernoweb.net
*/

/* History:  UAM_PATH.'Changelog.txt.php' */

/*
 ***** TODO List *****
See project bugtracker: http://piwigo.org/bugs/my_view_page.php
*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
if (!defined('UAM_DIR')) define('UAM_DIR' , basename(dirname(__FILE__)));
if (!defined('UAM_PATH')) define('UAM_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

include_once (UAM_PATH.'include/constants.php');
include_once (UAM_PATH.'include/functions.inc.php');

load_language('plugin.lang', UAM_PATH);


/* Plugin admin */
add_event_handler('get_admin_plugin_menu_links', 'UAM_admin_menu');

function UAM_admin_menu($menu)
{
// +-----------------------------------------------------------------------+
// |                      Getting plugin name                              |
// +-----------------------------------------------------------------------+
  $plugin =  PluginInfos(UAM_PATH);
  $name = $plugin['name'];
  
  array_push($menu,
    array(
      'NAME' => $name,
      'URL'  => get_admin_plugin_menu_link(UAM_PATH.'/admin/UAM_admin.php')
    )
  );

  return $menu;
}

/* Lastvisit table feed for Ghost Tracker */
add_event_handler('loc_begin_index', 'UAM_GhostTracker');

function UAM_GhostTracker()
{
  global $conf, $user;

  $conf_UAM = unserialize($conf['UserAdvManager']);

  /* Admins, Guests and Adult_Content users are not tracked for Ghost Tracker or Users Tracker */
  if (!is_admin() and !is_a_guest() and $user['username'] != "16" and $user['username'] != "18")
  {
    if ((isset($conf_UAM[16]) and $conf_UAM[16] == 'true') or (isset($conf_UAM[19]) and $conf_UAM[19] == 'true'))
    {

      $userid = get_userid($user['username']);
     	  
      /* Looking for existing entry in last visit table */
      $query = '
SELECT *
  FROM '.USER_LASTVISIT_TABLE.'
WHERE user_id = '.$userid.'
;';
        
      $count = pwg_db_num_rows(pwg_query($query));
         
      if ($count == 0)
      {
        /* If not, data are inserted in table */
        $query = '
INSERT INTO '.USER_LASTVISIT_TABLE.' (user_id, lastvisit, reminder)
VALUES ('.$userid.', now(), "false")
;';
        pwg_query($query);
      }
      else if ($count > 0)
      {
        /* If yes, data are updated in table */
        $query = '
UPDATE '.USER_LASTVISIT_TABLE.'
SET lastvisit = now(), reminder = "false"
WHERE user_id = '.$userid.'
LIMIT 1
;';
        pwg_query($query);
      }
    }
  }
}


/* User creation */
add_event_handler('register_user', 'UAM_Adduser');

function UAM_Adduser($register_user)
{
  global $conf;

  $conf_UAM = unserialize($conf['UserAdvManager']);

  // Exclusion of Adult_Content users
  if ($register_user['username'] != "16" and $register_user['username'] != "18")
  {
    if ((isset($conf_UAM[0]) and $conf_UAM[0] == 'true') and (isset($conf_UAM[1]) and $conf_UAM[1] == 'local'))
    {
      /* This is to send an information email and set user to "waiting" group or status until admin validation */
      $passwd = (isset($_POST['password'])) ? $_POST['password'] : '';
      SendMail2User(1, $register_user['id'], $register_user['username'], $passwd, $register_user['email'], false);
      setgroup($register_user['id']);// Set to "waiting" group or status until admin validation
    }
    elseif ((isset($conf_UAM[0]) and $conf_UAM[0] == 'false') and (isset($conf_UAM[1]) and $conf_UAM[1] == 'local'))
    {
      /* This is to set user to "waiting" group or status until admin validation */
      setgroup($register_user['id']);// Set to "waiting" group or status until admin validation
    }
    elseif ((isset($conf_UAM[0]) and $conf_UAM[0] == 'true') and (isset($conf_UAM[1]) and $conf_UAM[1] == 'false'))
    {
      /* This is to send an information email without validation key */
      $passwd = (isset($_POST['password'])) ? $_POST['password'] : '';
      SendMail2User(1, $register_user['id'], $register_user['username'], $passwd, $register_user['email'], false);
    }
    /* Sending registration confirmation by email */
    elseif ((isset($conf_UAM[0]) and $conf_UAM[0] == 'true' or $conf_UAM[0] == 'false') and (isset($conf_UAM[1]) and $conf_UAM[1] == 'true'))
    {
      if (is_admin() and isset($conf_UAM[20]) and $conf_UAM[20] == 'true')
      {
        $passwd = (isset($_POST['password'])) ? $_POST['password'] : '';
        SendMail2User(1, $register_user['id'], $register_user['username'], $passwd, $register_user['email'], true); 
      }
      elseif (is_admin() and isset($conf_UAM[20]) and $conf_UAM[20] == 'false')
      {
        $passwd = (isset($_POST['password'])) ? $_POST['password'] : '';
        SendMail2User(1, $register_user['id'], $register_user['username'], $passwd, $register_user['email'], false);
      }
      elseif (!is_admin())
      {
        $passwd = (isset($_POST['password'])) ? $_POST['password'] : '';
        SendMail2User(1, $register_user['id'], $register_user['username'], $passwd, $register_user['email'], true);
      }
    }
  }
}


/* User deletion */
add_event_handler('delete_user', 'UAM_Deluser');

function UAM_Deluser($user_id)
{
  /* Cleanup for ConfirmMail table */
  DeleteConfirmMail($user_id);
  /* Cleanup for LastVisit table */
  DeleteLastVisit($user_id);
  /* Cleanup Redirection settings */
  DeleteRedir($user_id);
}


// Check users registration
add_event_handler('register_user_check', 'UAM_RegistrationCheck', EVENT_HANDLER_PRIORITY_NEUTRAL, 2);

function UAM_RegistrationCheck($err, $user)
{
  global $errors, $conf;

  // Exclusion of Adult_Content users
  if ($user['username'] != "16" and $user['username'] != "18")
  {
// ***********************************************************
// We need to reset the standard Piwigo's register controls   
// because the call of register_user_check trigger resets them
// ***********************************************************
  // **********************************
  // Standard Piwigo's username control
  // **********************************
    if ($_POST['login'] == '')
    {
      return l10n('reg_err_login1');
    }
    if (preg_match('/^.* $/', $_POST['login']))
    {
      return l10n('reg_err_login2');
    }
    if (preg_match('/^ .*$/', $_POST['login']))
    {
      return l10n('reg_err_login3');
    }
    if (get_userid($_POST['login']))
    {
      return l10n('reg_err_login5');
    }
  
    if (script_basename() == 'admin' and isset($_GET['page']) and $_GET['page'] == 'user_list') // not the same email variable if we are on users registration page or on admin's user registration page
    {
    // Email doblons check
      $atom   = '[-a-z0-9!#$%&\'*+\\/=?^_`{|}~]';   // before  arobase
      $domain = '([a-z0-9]([-a-z0-9]*[a-z0-9]+)?)'; // domain name
      $regex = '/^' . $atom . '+' . '(\.' . $atom . '+)*' . '@' . '(' . $domain . '{1,63}\.)+' . $domain . '{2,63}$/i';
  
      if (!preg_match($regex, $_POST['email']))
      {
        return l10n('reg_err_mail_address');
      }
    
      $query = '
SELECT count(*)
FROM '.USERS_TABLE.'
WHERE upper('.$conf['user_fields']['email'].') = upper(\''.$_POST['email'].'\')
;';
      list($count) = pwg_db_fetch_row(pwg_query($query));
      if ($count != 0)
      {
        return l10n('reg_err_mail_address_dbl');
      }
    }

    if (script_basename() == 'register') // not the same email variable if we are on users registration page or on admin's user registration page
    {
  // Email doblons check
      $atom   = '[-a-z0-9!#$%&\'*+\\/=?^_`{|}~]';   // before  arobase
      $domain = '([a-z0-9]([-a-z0-9]*[a-z0-9]+)?)'; // domain name
      $regex = '/^' . $atom . '+' . '(\.' . $atom . '+)*' . '@' . '(' . $domain . '{1,63}\.)+' . $domain . '{2,63}$/i';
  
      if (!preg_match($regex, $_POST['mail_address']))
      {
        return l10n('reg_err_mail_address');
      }
    
      $query = '
SELECT count(*)
FROM '.USERS_TABLE.'
WHERE upper('.$conf['user_fields']['email'].') = upper(\''.$_POST['mail_address'].'\')
;';
      list($count) = pwg_db_fetch_row(pwg_query($query));
      if ($count != 0)
      {
        return l10n('reg_err_mail_address_dbl');
      }
    }
// ******************************************
// End of Piwigo's standard register controls
// ******************************************


// ******************************************
// Here begins the advanced register controls
// ******************************************
    $PasswordCheck = 0;

    $conf_UAM = unserialize($conf['UserAdvManager']);

    // Password enforcement control
    if (isset($conf_UAM[13]) and $conf_UAM[13] == 'true' and !empty($conf_UAM[14]))
    {
      if (!empty($user['password']) and !is_admin())
      {
        $PasswordCheck = testpassword($user['password']);
  
        if ($PasswordCheck < $conf_UAM[14])
        {
          $message = get_l10n_args('reg_err_login4_%s', $PasswordCheck);
          return($lang['reg_err_pass'] = l10n_args($message).$conf_UAM[14]);
        }
      }
      else if (!empty($user['password']) and is_admin() and isset($conf_UAM[15]) and $conf_UAM[15] == 'true')
      {
        $PasswordCheck = testpassword($user['password']);
  
        if ($PasswordCheck < $conf_UAM[14])
        {
          $message = get_l10n_args('reg_err_login4_%s', $PasswordCheck);
          return($lang['reg_err_pass'] = l10n_args($message).$conf_UAM[14]);
        }
      }
    }

    // Username without forbidden keys
    if (isset($conf_UAM[6]) and $conf_UAM[6] == 'true' and !empty($_POST['login']) and ValidateUsername($_POST['login']) and !is_admin())
    {
      $_POST['login'] = '';
      return($lang['reg_err_login1'] = l10n('reg_err_login6')."'".$conf_UAM[7]."'");
    }

    // Email without forbidden domains
    if (isset($conf_UAM[11]) and $conf_UAM[11] == 'true' and !empty($_POST['mail_address']) and ValidateEmailProvider($_POST['mail_address']) and !is_admin())
    {
      $_POST['mail_address'] = '';
      return($lang['reg_err_login1'] = l10n('reg_err_login7')."'".$conf_UAM[12]."'");
    }
  }
}


if (script_basename() == 'profile')
{
  add_event_handler('loc_begin_profile', 'UAM_Profile_Init');

  function UAM_Profile_Init()
  {
    global $conf, $user, $template;

    $conf_UAM = unserialize($conf['UserAdvManager']);
    
    if ((isset($conf_UAM[21]) and $conf_UAM[21] == 'true'))
    {
      $user_idsOK = array();
      if (!check_consult($user['id'], $user_idsOK))
      {
        $user_idsOK[] = $user['id'];
        
        $query = "
          UPDATE ".CONFIG_TABLE."
          SET value = \"".implode(',', $user_idsOK)."\"
          WHERE param = 'UserAdvManager_Redir';";
          
        pwg_query($query);
      }
    }

    if (isset($_POST['validate']) and !is_admin())
    {
      /* Email without forbidden domains */
      if (isset($conf_UAM[11]) and $conf_UAM[11] == 'true' and !empty($_POST['mail_address']))
      {
        if (ValidateEmailProvider($_POST['mail_address']))
        {
          $template->append('errors', l10n('reg_err_login7')."'".$conf_UAM[12]."'");
          unset($_POST['validate']);
        }
      }

      $typemail = 3;
      
      if (!empty($_POST['use_new_pwd']))
      {
        $typemail = 2;
        
        /* Password enforcement control */
        if (isset($conf_UAM[13]) and $conf_UAM[13] == 'true' and !empty($conf_UAM[14]))
        {
          $PasswordCheck = testpassword($_POST['use_new_pwd']);
         
          if ($PasswordCheck < $conf_UAM[14])
          {
            $message = get_l10n_args('reg_err_login4_%s', $PasswordCheck);
            $template->append('errors', l10n_args($message).$conf_UAM[14]);
            unset($_POST['use_new_pwd']);
            unset($_POST['validate']);
          }
        }
      }
      
      /* Sending registration confirmation by email */
      if ((isset($conf_UAM[0]) and $conf_UAM[0] == 'true') or (isset($conf_UAM[1]) and $conf_UAM[1] == 'true') or (isset($conf_UAM[1]) and $conf_UAM[1] == 'local'))
      {
        $confirm_mail_need = false;
              
        if (!empty($_POST['mail_address']))
        {
          $query = '
SELECT '.$conf['user_fields']['email'].' AS email
FROM '.USERS_TABLE.'
WHERE '.$conf['user_fields']['id'].' = \''.$user['id'].'\'
;';
          
          list($current_email) = pwg_db_fetch_row(pwg_query($query));

          /* This is to send a new validation key */
          if ($_POST['mail_address'] != $current_email and (isset($conf_UAM[1]) and $conf_UAM[1] == 'true'))
        
            $confirm_mail_need = true;

          /* This is to set the user to "waiting" group or status until admin validation */
          if ($_POST['mail_address'] != $current_email and (isset($conf_UAM[1]) and $conf_UAM[1] == 'local'))
        
            setgroup($register_user['id']);// Set to "waiting" group or status until admin validation
            $confirm_mail_need = false;
        }
        
        if ((!empty($_POST['use_new_pwd']) and (isset($conf_UAM[0]) and $conf_UAM[0] == 'true') or $confirm_mail_need))
        {
          $query = '
SELECT '.$conf['user_fields']['username'].'
FROM '.USERS_TABLE.'
WHERE '.$conf['user_fields']['id'].' = \''.$user['id'].'\'
;';
        
          list($username) = pwg_db_fetch_row(pwg_query($query));

          SendMail2User($typemail, $user['id'], $username, $_POST['use_new_pwd'], $_POST['mail_address'], $confirm_mail_need);
        }
      }
    }
  }
}


// RedirectToProfile - Thx to LucMorizur
// redirects a visitor (except for admins, webmasters and generic statuses) to his
// profile.php page
//
// no variable, no return
add_event_handler('login_success', 'RedirectToProfile');

function RedirectToProfile()
{
  global $conf, $user;
  
  $conf_UAM = unserialize($conf['UserAdvManager']);
  
  $query ='
SELECT user_id, status
FROM '.USER_INFOS_TABLE.'
WHERE user_id = '.$user['id'].'
;';
  $data = pwg_db_fetch_assoc(pwg_query($query));
  
  if ($data['status'] <> "admin" and $data['status'] <> "webmaster" and $data['status'] <> "generic")
  {
    if ((isset($conf_UAM[21]) and $conf_UAM[21] == 'true'))
    {
      $user_idsOK = array();
      if (!check_consult($user['id'], $user_idsOK))
        redirect(PHPWG_ROOT_PATH.'profile.php');
    }
  }
}


add_event_handler('init', 'UAM_InitPage');
/* *** Important ! This is necessary to make email exclusion work in admin's users management panel *** */
function UAM_InitPage()
{
  load_language('plugin.lang', UAM_PATH);
  global $conf, $template, $page, $lang, $errors;

  $conf_UAM = unserialize($conf['UserAdvManager']);

/* Admin user management */
  if (script_basename() == 'admin' and isset($_GET['page']) and $_GET['page'] == 'user_list')
  {
    if (isset($_POST['submit_add']))
    {
      /* Email without forbidden domains */
      if (isset($conf_UAM[11]) and $conf_UAM[11] == 'true' and !empty($_POST['email']) and ValidateEmailProvider($_POST['email']))
      {
        $template->append('errors', l10n('reg_err_login7')."'".$conf_UAM[12]."'");
        unset($_POST['submit_add']);
      }
    }
  }
}


add_event_handler('user_comment_check', 'UAM_CheckEmptyCommentAuthor', 50, 2);

function UAM_CheckEmptyCommentAuthor($comment_action, $comm)
{
  load_language('plugin.lang', UAM_PATH);
  global $infos, $conf, $template;

  $conf_UAM = unserialize($conf['UserAdvManager']);

/* User creation OR update */
  if (isset($conf_UAM[5]) and $conf_UAM[5] == 'true' and $conf['comments_forall'] == 'true' and $comm['author'] == 'guest')
  {
    $comment_action = 'reject';

    array_push($infos, l10n('UAM_Empty Author'));
  }

  return $comment_action;
}
?>