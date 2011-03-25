<?php
/*
Plugin Name: NBC UserAdvManager
Version: 2.11.4
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
						Feature 1172 : Email providers exclusion list can be set with CR/LF between each entry. The comma seperator (,) is still mandatory.
						Bug 1175 fixed : Bad translation tag in french language file.
						Improvement of unvalidated users management tab (feature 1174)- Expired users are displayed in red color text.

-- 2.11.4 : Bug 1177 fixed : Width of excluded email providers list reset to ancient value (80 col)
						Bug 1179 fixed : Adding a notice in plugin inline documentation for use of validation groups and status. A default group must be set in Piwigo's groups settings and the "Guest" (or another user) must be set as default for status values.
						Bug 1182 fixed : Language tag missing in confirmation email generation 

*/

/*

 ***** TODO List *****

++ No validation needed for admins users comments (new trigger needed in comments.php)

++ No single email check for admins (new trigger needed in (functions_user.inc.php ?))

++ Password control and enforcement
  -- Empty password (done in Piwigo 2.x)
  ++ Can not be the same as username
  ++ complexity of the password (Numbers+Lettrers+Low and high case+Special+minimal length)
  
++ Security : Blocking brut-force attacks !

++ Opportunity to copy a registered user for new user creation
  ++ new copied user will (or not) belong to the same groups
  ++ new copied user will (or not) get the same status (visitor, admin, webmaster, guest (??))
  ++ new copied user will (or not) get the same properties
  ++ new copied user will (or not) get the same language
  ... and so on
  
*/


if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

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



/* User creation */
add_event_handler('register_user', 'UserAdvManager_Adduser');

function UserAdvManager_Adduser($register_user)
{
  global $conf;
  
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();

  if (( isset($conf_nbc_UserAdvManager[0]) and $conf_nbc_UserAdvManager[0] == 'true') or ( isset($conf_nbc_UserAdvManager[2]) and $conf_nbc_UserAdvManager[2] == 'true'))
	
	SendMail2User(1, $register_user['id'], $register_user['username'], $_POST['password'], $register_user['email'], true);
}



/* User deletion */
add_event_handler('delete_user', 'UserAdvManager_Deluser');

function UserAdvManager_Deluser($user_id)
{

  DeleteConfirmMail($user_id);

}



add_event_handler('init', 'UserAdvManager_InitPage');
 
function UserAdvManager_InitPage()
{
  load_language('plugin.lang', NBC_UserAdvManager_PATH);
  global $conf, $template, $page, $lang;

  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
  

  if ( isset($conf_nbc_UserAdvManager[1]) and $conf_nbc_UserAdvManager[1] == 'true' )
    $lang['reg_err_login5'] = l10n('reg_err_login5');
  

 
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
        $lang['reg_err_login1'] = l10n('reg_err_login6')."'".$conf_nbc_UserAdvManager[8]."'";
        $_POST['login'] = '';
      }

      /* Email without forbidden domains */
      /* This don't work on call of ValidateEmailProvider() function - Why ?? -> Due to the "return = false|true" in function ?*/
      //if (isset($conf_nbc_UserAdvManager[12]) and $conf_nbc_UserAdvManager[12] == 'true' and !empty($_POST['email']) and !ValidateEmailProvider($_POST['email']))
      //{
      //  $lang['reg_err_login1'] = l10n('reg_err_login7')."'".$conf_nbc_UserAdvManager[13]."'";
	  //  $_POST['login'] = '';
	  //}
      /* This work with a code copy of ValidateEmailProvider() function */
			if (isset($conf_nbc_UserAdvManager[12]) and $conf_nbc_UserAdvManager[12] == 'true' and !empty($_POST['email']))
			{
		  	$ncsemail = strtolower($_POST['email']);
		  	$conf_nbc_MailExclusion = preg_split("/[\s,]+/",$conf_nbc_UserAdvManager[13]);
		  	for ($i = 0 ; $i < count($conf_nbc_MailExclusion) ; $i++)
		    {
	    	  $pattern = '/'.$conf_nbc_MailExclusion[$i].'/';
			  	if (preg_match($pattern, $ncsemail))
	    		{
		      	$lang['reg_err_login1'] = l10n('reg_err_login7')."'".$conf_nbc_UserAdvManager[13]."'";
		        $_POST['login'] = '';
					}
				}
			}
    }
  }

/* User creation */
  if (script_basename() == 'register')
  {
    if (isset($_POST['submit']))
    {
      /* Username non case sensitive */
      if (isset($conf_nbc_UserAdvManager[1]) and $conf_nbc_UserAdvManager[1] == 'true')
      {
        $new_username =  NotSensibleSearchUsername($_POST['login']);
        $_POST['login'] = $new_username == '' ? $_POST['login'] : $new_username;
      }


      /* Username without forbidden keys */
      if (isset($conf_nbc_UserAdvManager[7]) and $conf_nbc_UserAdvManager[7] == 'true' and !empty($_POST['login']) and !ValidateUsername($_POST['login']))
      {
        $lang['reg_err_login1'] = l10n('reg_err_login6')."'".$conf_nbc_UserAdvManager[8]."'";
        $_POST['login'] = '';
      }


      /* Email without forbidden domains */
      /* This don't work on call of ValidateEmailProvider() function - Why ?? -> Due to the "return = false|true" in function ?*/
      //if (isset($conf_nbc_UserAdvManager[12]) and $conf_nbc_UserAdvManager[12] == 'true' and !empty($_POST['mail_address']) and !ValidateEmailProvider($_POST['mail_address']))
      //{
      //  $lang['reg_err_mail_address'] = l10n('reg_err_login7')."'".$conf_nbc_UserAdvManager[13]."'";
      //  $_POST['mail_address'] = '';
      //}
      /* This work with a code copy of ValidateEmailProvider() function */
			if (isset($conf_nbc_UserAdvManager[12]) and $conf_nbc_UserAdvManager[12] == 'true' and !empty($_POST['mail_address']))
		  {
		  	$ncsemail = strtolower($_POST['mail_address']);
		    $conf_nbc_MailExclusion = preg_split("/[\s,]+/",$conf_nbc_UserAdvManager[13]);
				for ($i = 0 ; $i < count($conf_nbc_MailExclusion) ; $i++)
			  {
 	  			$pattern = '/'.$conf_nbc_MailExclusion[$i].'/';
			  	if (preg_match($pattern, $ncsemail))
				  {
				  	$lang['reg_err_login1'] = l10n('reg_err_login7')."'".$conf_nbc_UserAdvManager[13]."'";
						$_POST['login'] = '';
				  }
			  }
		  }
    }
  }

/* User profile update */
  if (script_basename() == 'profile')
  {
    if (isset($_POST['validate']))
    {
      /* Sending email to user */
      if (( isset($conf_nbc_UserAdvManager[0]) and $conf_nbc_UserAdvManager[0] == 'true') or ( isset($conf_nbc_UserAdvManager[2]) and $conf_nbc_UserAdvManager[2] == 'true'))
      {
      	global $conf, $user ;
        $errors = array();
  
        $int_pattern = '/^\d+$/';
        if (empty($_POST['nb_image_line'])
            or (!preg_match($int_pattern, $_POST['nb_image_line'])))
        {
          $errors[] = l10n('nb_image_line_error');
        }
      
        if (empty($_POST['nb_line_page'])
            or (!preg_match($int_pattern, $_POST['nb_line_page'])))
        {
          $errors[] = l10n('nb_line_page_error');
        }
      
        if ($_POST['maxwidth'] != ''
            and (!preg_match($int_pattern, $_POST['maxwidth'])
                 or $_POST['maxwidth'] < 50))
        {
          $errors[] = l10n('maxwidth_error');
        }
        if ($_POST['maxheight']
             and (!preg_match($int_pattern, $_POST['maxheight'])
                   or $_POST['maxheight'] < 50))
        {
          $errors[] = l10n('maxheight_error');
        }

        if (isset($_POST['mail_address']))
        {
          $mail_error = validate_mail_address($user['id'], $_POST['mail_address']);
          if (!empty($mail_error))
          {
            $errors[] = $mail_error;
          }
          
					if (isset($conf_nbc_UserAdvManager[12]) and $conf_nbc_UserAdvManager[12] == 'true' and !empty($_POST['mail_address']))
		  		{
		  			$ncsemail = strtolower($_POST['mail_address']);
		    		$conf_nbc_MailExclusion = preg_split("/[\s,]+/",$conf_nbc_UserAdvManager[13]);
						for ($i = 0 ; $i < count($conf_nbc_MailExclusion) ; $i++)
			  		{
 	  					$pattern = '/'.$conf_nbc_MailExclusion[$i].'/';
			  			if (preg_match($pattern, $ncsemail))
				  		{
				    		$mail_error = l10n('reg_err_login7')."'".$conf_nbc_UserAdvManager[13]."'";
				  		}
			  		}
		  		}
	      	if (!empty($mail_error))
          {
            $errors[] = $mail_error;
          }
        }

        $typemail = 3;
        
        if (!empty($_POST['use_new_pwd']))
        {
          $typemail = 2;

          // password must be the same as its confirmation
          if ($_POST['use_new_pwd'] != $_POST['passwordConf'])
          {
            $errors[] = l10n('New password confirmation does not correspond');
          }
      
          if ( !defined('IN_ADMIN') )
          {// changing password requires old password
            $query = '
              SELECT '.$conf['user_fields']['password'].' AS password
              FROM '.USERS_TABLE.'
              WHERE '.$conf['user_fields']['id'].' = \''.$user['id'].'\'
            ;';
            list($current_password) = mysql_fetch_row(pwg_query($query));
        
            if ($conf['pass_convert']($_POST['password']) != $current_password)
            {
              $errors[] = l10n('Current password is wrong');
            }
          }
        }
        
        $confirm_mail_need = false;
              
        if (!empty($_POST['mail_address']))
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

        if (count($errors) == 0 and (!empty($_POST['use_new_pwd']) and ( isset($conf_nbc_UserAdvManager[0]) and $conf_nbc_UserAdvManager[0] == 'true') or $confirm_mail_need) )
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