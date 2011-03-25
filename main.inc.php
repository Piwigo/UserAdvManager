<?php
/*
Plugin Name: NBC UserAdvManager
Version: 2.12.0
Description: Permet de renforcer les possibilités de gestion des utilisateurs - Enforce users management
Plugin URI: http://fr.piwigo.org/ext/extension_view.php?eid=216
Author: Nicco, Eric
Author URI: http://gallery-nicco.no-ip.org, http://www.infernoweb.net
*/

/*
 ***** Plugin history (branch 2.10)*****

-- 2.10.0-beta : Initial beta release for Piwigo compatibility
-- 2.10.1-beta : Small correction on generated path
-- 2.10.2-beta : Bug resolved on register validation page

-- 2.10.3 : Final and fully functional release
						Bug resolved on plugin activation

-- 2.10.4 : Bug fixed on profiles update

-- 2.10.5 : Improved code on profiles update

-- 2.10.6 : Old language packs (iso) deleted (forget from PWG 1.7.x version)

-- 2.10.7 : Bug fixed on user's validation email sending

-- 2.10.8 : ConfirmMail page looks better (Sylvia theme only)
						Improved code for checking author on guest comments

-- 2.10.9 : Bug fixed - Missing english translation
						Bug fixed - Notice on forbidden characters function use
						Bug fixed - Audit on forbidden characters in username didn't work
						Adding of email provider exclusion (like *@hotmail.com) - Warning ! -> Known bug : This feature doesn't work on user profile page. So, already registered users can change their email address to a forbiden one.

-- 2.10.9a : Email provider exclusion is no longer case sensitive

-- 2.10.9b : Bug fixed - Home icon wasn't linked to gallery url in ConfirmMail page. If GALLERY_URL is not set, Home icon gets the pwg root path.

-- 2.10.9c : Bug fixed - If Email provider exclusion is set off, new registered user will have a PHP notice on "Undefined variable: ncsemail"

-- 2.10.9d : Code simplification - need no more ""template"" sub-directory in plugin directory for enhance "back link" icon in ConfirMail.tpl

-- 2.10.9e : Compatibility improvement with PHP 5.3 - Some old functions will be deprecated like :
							ereg replaced by preg_match
							eregi replace by preg_match with "i" moderator
							split replace by preg_split
				
-- 2.10.9f : Compatibility bug fixed when used with DynamicRecentPeriod plugin 

-- 2.11.0 : New tabsheet menu to manage ConfirMail functions (setting a timeout without validation, Cleanup expired user's accounts, Force confirmation, Renew validation key, list unvalidated users,...)
						Beautify plugin's main admin panel
						
-- 2.11.1 : Bug fixed with install and upgrade functions
						Language files correction

-- 2.11.2 : Bug fixed on bad query for unvalidated users display in unvalidated users list
						Bug fixed : Sql syntax error on plugin activation

-- 2.11.3 : On Patricia's request (french forum and bug 1173), the unvalidated users management tab shows users according with the settings of unvalidated group and / or unvalidated status.
						Feature 1172 added : Email providers exclusion list can be set with CR/LF between each entry. The comma seperator (,) is still mandatory.
						Bug 1175 fixed : Bad translation tag in french language file.
						Improvement of unvalidated users management tab (feature 1174)- Expired users are displayed in red color text.

-- 2.11.4 : Bug 1177 fixed : Width of excluded email providers list reset to ancient value (80 col)
						Bug 1179 fixed : Adding a notice in plugin inline documentation for use of validation groups and status. A default group must be set in Piwigo's groups settings and the "Guest" (or another user) must be set as default for status values.
						Bug 1182 fixed : Language tag missing in confirmation email generation 

-- 2.11.5 : Bug 1195 fixed : Registration displays the good title

-- pre 2.12.0 : Bug 1206 fixed : All plugin functionnalities work in user's profile page
                Plugin's core code and admin panel refactoring
                Password control and enforcement : A complexity score is computed on user registration. If this score is less than the goal set by admin, the password choosen is rejected.
                Feature 1194 "Ghost Tracker" added : New plugin tab displays users who don't comes back to the gallery since x days. Ability to send email reminders and to delete reminded but "dead" users. It's the reason why this feature is called "Ghost Tracker".
*/

/*

 ***** TODO List *****

++ No validation needed for admins users comments (new trigger needed in comments.php ?)

++ No single email check for admins (new trigger needed in functions_user.inc.php ?)

++ Password control and enforcement
  ?? Can not be the same as username -> Could password score control be sufficient ? 
  
++ Security : Blocking brut-force attacks !

++ Opportunity to copy a registered user for new user creation
  ++ new copied user will (or not) belong to the same groups
  ++ new copied user will (or not) get the same status (visitor, admin, webmaster, guest (??))
  ++ new copied user will (or not) get the same properties
  ++ new copied user will (or not) get the same language
  ... and so on
  
*/


if (!defined('PHPWG_ROOT_PATH'))
{
  die('Hacking attempt!');
}

define('NBC_UserAdvManager_DIR' , basename(dirname(__FILE__)));
define('NBC_UserAdvManager_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

include_once (NBC_UserAdvManager_PATH.'include/constants.php');
include_once (NBC_UserAdvManager_PATH.'include/functions_UserAdvManager.inc.php');

load_language('plugin.lang', NBC_UserAdvManager_PATH);


/* Plugin admin */
add_event_handler('get_admin_plugin_menu_links', 'nbc_UserAdvManager_admin_menu');

function nbc_UserAdvManager_admin_menu($menu)
{
  array_push($menu,
    array(
      'NAME' => 'UserAdvManager',
      'URL'  => get_admin_plugin_menu_link(NBC_UserAdvManager_PATH.'/admin/UserAdvManager_admin.php')
    )
  );

  return $menu;
}


add_event_handler('loc_begin_index', 'UserAdvManager_GhostTracker');

function UserAdvManager_GhostTracker()
{
  global $conf, $user;
  
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();

  if (isset($conf_nbc_UserAdvManager[17]) and $conf_nbc_UserAdvManager[17] == 'true' and !is_admin() and !is_a_guest())
  {

    $userid = get_userid($user['username']);
     	  
    /* Looking for existing entry in last visit table */
    $query = '
SELECT *
FROM '.USER_LASTVISIT_TABLE.'
WHERE user_id = '.$userid.'
;';
        
    $count = mysql_num_rows(pwg_query($query));
         
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


/* User creation */
add_event_handler('register_user', 'UserAdvManager_Adduser');

function UserAdvManager_Adduser($register_user)
{
  global $conf;
  
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
  
  /* Sending registration confirmation by email */
  if ((isset($conf_nbc_UserAdvManager[0]) and $conf_nbc_UserAdvManager[0] == 'true') or (isset($conf_nbc_UserAdvManager[2]) and $conf_nbc_UserAdvManager[2] == 'true'))
  {
    SendMail2User(1, $register_user['id'], $register_user['username'], $_POST['password'], $register_user['email'], true);
  }
}



/* User deletion */
add_event_handler('delete_user', 'UserAdvManager_Deluser');

function UserAdvManager_Deluser($user_id)
{
  DeleteConfirmMail($user_id);
}


/* Check users registration */
add_event_handler('register_user_check', 'UserAdvManager_RegistrationCheck', EVENT_HANDLER_PRIORITY_NEUTRAL, 2);

function UserAdvManager_RegistrationCheck($err, $user)
{
  global $errors, $conf;

  $PasswordCheck = 0;
  
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();

  /* Password enforcement control */
  if (isset($conf_nbc_UserAdvManager[14]) and $conf_nbc_UserAdvManager[14] == 'true' and !empty($conf_nbc_UserAdvManager[15]))
  {
    if (!empty($user['password']) and !is_admin())
    {
      $PasswordCheck = testpassword($user['password']);
  
      if ($PasswordCheck < $conf_nbc_UserAdvManager[15])
      {
        $message = get_l10n_args('reg_err_login4_%s', $PasswordCheck);
        return($lang['reg_err_pass'] = l10n_args($message).$conf_nbc_UserAdvManager[15]);
      }
    }
    else if (!empty($user['password']) and is_admin() and isset($conf_nbc_UserAdvManager[16]) and $conf_nbc_UserAdvManager[16] == 'true')
    { 
      $PasswordCheck = testpassword($user['password']);
  
      if ($PasswordCheck < $conf_nbc_UserAdvManager[15])
      {
        $message = get_l10n_args('reg_err_login4_%s', $PasswordCheck);
        return($lang['reg_err_pass'] = l10n_args($message).$conf_nbc_UserAdvManager[15]);
      }
    }
  }

  /* Username non case sensitive */
  if (isset($conf_nbc_UserAdvManager[1]) and $conf_nbc_UserAdvManager[1] == 'true')
  {
    $new_username =  NotSensibleSearchUsername($_POST['login']);
    $_POST['login'] = $new_username == '' ? $_POST['login'] : $new_username;
  }

  /* Username without forbidden keys */
  if (isset($conf_nbc_UserAdvManager[7]) and $conf_nbc_UserAdvManager[7] == 'true' and !empty($_POST['login']) and !ValidateUsername($_POST['login']))
  {
    $_POST['login'] = '';
    return($lang['reg_err_login1'] = l10n('reg_err_login6')."'".$conf_nbc_UserAdvManager[8]."'");
  }

  /* Email without forbidden domains */
  if (isset($conf_nbc_UserAdvManager[12]) and $conf_nbc_UserAdvManager[12] == 'true' and !empty($_POST['mail_address']) and !ValidateEmailProvider($_POST['mail_address']))
  {
    $_POST['login'] = '';
    return($lang['reg_err_login1'] = l10n('reg_err_login7')."'".$conf_nbc_UserAdvManager[13]."'");
  }
}


if (script_basename() == 'profile')
{
  add_event_handler('loc_begin_profile', 'UserAdvManager_Profile_Init');

  function UserAdvManager_Profile_Init()
  {
    global $conf, $user, $template;

    $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();

    if (isset($_POST['validate']))
    {
      /* Email without forbidden domains */
      if (isset($conf_nbc_UserAdvManager[12]) and $conf_nbc_UserAdvManager[12] == 'true' and !empty($_POST['mail_address']))
      {
        if (!ValidateEmailProvider($_POST['mail_address']))
        {
          $template->append('errors', l10n('reg_err_login7')."'".$conf_nbc_UserAdvManager[13]."'");
          unset($_POST['validate']);
        }
      }

      $typemail = 3;
      
      if (!empty($_POST['use_new_pwd']))
      {
        $typemail = 2;
        
        /* Password enforcement control */
        if (isset($conf_nbc_UserAdvManager[14]) and $conf_nbc_UserAdvManager[14] == 'true' and !empty($conf_nbc_UserAdvManager[15]))
        {
          $PasswordCheck = testpassword($_POST['use_new_pwd']);
         
          if ($PasswordCheck < $conf_nbc_UserAdvManager[15])
          {
            $message = get_l10n_args('reg_err_login4_%s', $PasswordCheck);
            $template->append('errors', l10n_args($message).$conf_nbc_UserAdvManager[15]);
            unset($_POST['use_new_pwd']);
            unset($_POST['validate']);
          }
        }
      }
      
      /* Sending registration confirmation by email */
      if (( isset($conf_nbc_UserAdvManager[0]) and $conf_nbc_UserAdvManager[0] == 'true') or ( isset($conf_nbc_UserAdvManager[2]) and $conf_nbc_UserAdvManager[2] == 'true'))
      {
        $confirm_mail_need = false;
              
        if (!empty($_POST['mail_address']) and ValidateEmailProvider($_POST['mail_address']))
        {
          $query = '
SELECT '.$conf['user_fields']['email'].' AS email
FROM '.USERS_TABLE.'
WHERE '.$conf['user_fields']['id'].' = \''.$user['id'].'\'
;';
          
          list($current_email) = mysql_fetch_row(pwg_query($query));
      
          if ( $_POST['mail_address'] != $current_email and ( isset($conf_nbc_UserAdvManager[2]) and $conf_nbc_UserAdvManager[2] == 'true') )
        
            $confirm_mail_need = true;
        }
        
        if ((!empty($_POST['use_new_pwd']) and ( isset($conf_nbc_UserAdvManager[0]) and $conf_nbc_UserAdvManager[0] == 'true') or $confirm_mail_need) )
        {
          $query = '
SELECT '.$conf['user_fields']['username'].'
FROM '.USERS_TABLE.'
WHERE '.$conf['user_fields']['id'].' = \''.$user['id'].'\'
;';
        
          list($username) = mysql_fetch_row(pwg_query($query));

          SendMail2User($typemail, $user['id'], $username, $_POST['use_new_pwd'], $_POST['mail_address'], $confirm_mail_need);
        }
      }
    }
  }
}


add_event_handler('init', 'UserAdvManager_InitPage');
 
function UserAdvManager_InitPage()
{
  load_language('plugin.lang', NBC_UserAdvManager_PATH);
  global $conf, $template, $page, $lang, $errors;

  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
  
  /* Username non case sensitive */
  if (isset($conf_nbc_UserAdvManager[1]) and $conf_nbc_UserAdvManager[1] == 'true')
  {
    $lang['reg_err_login5'] = l10n('reg_err_login5');
  }
  

 
/* User identification */
  if (script_basename() == 'identification')
  {
    if (isset($_POST['login']))
    {
      /* User non case sensitive */
      if (isset($conf_nbc_UserAdvManager[1]) and $conf_nbc_UserAdvManager[1] == 'true' )
      {
        $new_username =  NotSensibleSearchUsername($_POST['username']);
        $_POST['username'] = $new_username == '' ? $_POST['username'] : $new_username;
      }
    }
  }


/* Admin user management */
  if (script_basename() == 'admin' and isset($_GET['page']) and $_GET['page'] == 'user_list')
  {
    if (isset($_POST['submit_add']))
    {
      /* User non case sensitive */
      if (isset($conf_nbc_UserAdvManager[1]) and $conf_nbc_UserAdvManager[1] == 'true' )
      {
        $new_username =  NotSensibleSearchUsername($_POST['login']);
        $_POST['login'] = $new_username == '' ? $_POST['login'] : $new_username;
      }

      /* Username without forbidden keys */
      if (isset($conf_nbc_UserAdvManager[7]) and $conf_nbc_UserAdvManager[7] == 'true' and !empty($_POST['login']) and !ValidateUsername($_POST['login']))
      {
        $template->append('errors', l10n('reg_err_login6')."'".$conf_nbc_UserAdvManager[8]."'");
        unset($_POST['submit_add']);
      }

      /* Email without forbidden domains */
      if (isset($conf_nbc_UserAdvManager[12]) and $conf_nbc_UserAdvManager[12] == 'true' and !empty($_POST['email']) and !ValidateEmailProvider($_POST['email']))
      {
        $template->append('errors', l10n('reg_err_login7')."'".$conf_nbc_UserAdvManager[13]."'");
        unset($_POST['submit_add']);
      }
    }
  }
}


add_event_handler('user_comment_check', 'UserAdvManager_CheckEmptyCommentAuthor', 50, 2);

function UserAdvManager_CheckEmptyCommentAuthor($comment_action, $comm)
{
  load_language('plugin.lang', NBC_UserAdvManager_PATH);
  global $infos, $conf, $template;

  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();

/* User creation OR update */
  if (isset($conf_nbc_UserAdvManager[6]) and $conf_nbc_UserAdvManager[6] == 'true' and $conf['comments_forall'] == 'true' and $comm['author'] == 'guest')
  {
    $comment_action = 'reject';

    array_push($infos, l10n('UserAdvManager_Empty Author'));
  }

  return $comment_action;
}

?>