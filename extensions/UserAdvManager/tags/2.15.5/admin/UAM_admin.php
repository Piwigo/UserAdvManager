<?php

global $user, $lang, $conf, $errors;

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+
check_status(ACCESS_ADMINISTRATOR);

if (!defined('UAM_PATH')) define('UAM_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', true);

include_once(PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');
include_once (PHPWG_ROOT_PATH.'/include/constants.php');
$my_base_url = get_admin_plugin_menu_link(__FILE__);

load_language('plugin.lang', UAM_PATH);
load_language('help/plugin.lang', UAM_PATH);

$page['global'] = array();
$error = array();
$pattern = '/;/';
$replacement = '.';

$UAM_Password_Test_Score = 0;
$UAM_Exclusionlist_Error = false;

// +-----------------------------------------------------------------------+
// |                            Tabssheet                                  |
// +-----------------------------------------------------------------------+
if (!isset($_GET['tab']))
	$page['tab'] = 'global';
else
  $page['tab'] = $_GET['tab'];

$tabsheet = new tabsheet();
$tabsheet->add('global',
               l10n('Tab_Global'),
               $my_base_url.'&amp;tab=global');
  $tabsheet->add('userlist',
                 l10n('Tab_UserList'),
                 $my_base_url.'&amp;tab=userlist');
$tabsheet->add('usermanager',
               l10n('Tab_UserManager'),
               $my_base_url.'&amp;tab=usermanager');
$tabsheet->add('ghosttracker',
               l10n('Tab_GhostTracker'),
               $my_base_url.'&amp;tab=ghosttracker');
$tabsheet->select($page['tab']);
$tabsheet->assign();


// +-----------------------------------------------------------------------+
// |                      Getting plugin version                           |
// +-----------------------------------------------------------------------+
$plugin =  PluginInfos(UAM_PATH);
$version = $plugin['version'];


// +----------------------------------------------------------+
// |            FCK Editor for email text fields              |
// +----------------------------------------------------------+

/* Available only for ConfirmMail return page customization */
$toolbar = 'Basic';
$width = '750px';
$height = '300px';
$areas = array();
array_push( $areas,'UAM_ConfirmMail_Custom_Txt1','UAM_ConfirmMail_Custom_Txt2');

if (function_exists('set_fckeditor_instance'))
{
  $fcke_config = unserialize($conf['FCKEditor']);
  foreach($areas as $area)
  {
    if (!isset($fcke_config[$area]))
    {
      $fcke_config[$area] = false;
    }
  }
  $conf['FCKEditor'] = serialize($fcke_config);

  set_fckeditor_instance($areas, $toolbar, $width, $height);
}


// +-----------------------------------------------------------------------+
// |                            Tabssheet select                           |
// +-----------------------------------------------------------------------+

switch ($page['tab'])
{
// *************************************************************************
// +-----------------------------------------------------------------------+
// |                           Global Config                               |
// +-----------------------------------------------------------------------+
// *************************************************************************
  case 'global':

	if (isset($_POST['submit']) and !is_adviser() and isset($_POST['UAM_Mail_Info']) and isset($_POST['UAM_Username_Char']) and isset($_POST['UAM_Confirm_Mail']) and isset($_POST['UAM_No_Comment_Anonymous']) and isset($_POST['UAM_Password_Enforced']) and isset($_POST['UAM_AdminPassword_Enforced']) and isset($_POST['UAM_GhostUser_Tracker']) and isset($_POST['UAM_Admin_ConfMail']) and isset($_POST['UAM_RedirToProfile']))
  {

/* General configuration settings */
		$_POST['UAM_MailInfo_Text'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_MailInfo_Text'])));
    
		$_POST['UAM_ConfirmMail_Text'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_ConfirmMail_Text'])));

    $_POST['UAM_GhostTracker_ReminderText'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_GhostTracker_ReminderText'])));


/* Check if CR-LF exist at begining and end of mail exclusion list - If yes, removes them */
    if (preg_match('/^[\s]+/', $_POST['UAM_MailExclusion_List']))
    {
      array_push($page['errors'], l10n('mail_exclusionlist_error'));
      $UAM_Exclusionlist_Error = true;
    }

		$newconf_UAM = array(
      $_POST['UAM_Mail_Info'],
      $_POST['UAM_Confirm_Mail'],
      (isset($_POST['UAM_No_Confirm_Group'])?$_POST['UAM_No_Confirm_Group']:''),
      (isset($_POST['UAM_Validated_Group'])?$_POST['UAM_Validated_Group']:''),
      (isset($_POST['UAM_Validated_Status'])?$_POST['UAM_Validated_Status']:''),
      $_POST['UAM_No_Comment_Anonymous'],
      $_POST['UAM_Username_Char'],
      $_POST['UAM_Username_List'],
      (isset($_POST['UAM_No_Confirm_Status'])?$_POST['UAM_No_Confirm_Status']:''),
      $_POST['UAM_MailInfo_Text'],
      $_POST['UAM_ConfirmMail_Text'],
      $_POST['UAM_MailExclusion'],
      $_POST['UAM_MailExclusion_List'],
      $_POST['UAM_Password_Enforced'],
      $_POST['UAM_Password_Score'],
      $_POST['UAM_AdminPassword_Enforced'],
      $_POST['UAM_GhostUser_Tracker'],
      $_POST['UAM_GhostTracker_DayLimit'],
      $_POST['UAM_GhostTracker_ReminderText'],
      $_POST['UAM_Add_LastVisit_Column'],
      $_POST['UAM_Admin_ConfMail'],
      $_POST['UAM_RedirToProfile']);

    $conf['UserAdvManager'] = serialize($newconf_UAM);

		$query = '
	  	UPDATE '.CONFIG_TABLE.'
	  	SET value="'.addslashes($conf['UserAdvManager']).'"
	  	WHERE param="UserAdvManager"
	  	LIMIT 1
	  	;';
		
		pwg_query($query);

/* Email confirmation settings */
    $_POST['UAM_ConfirmMail_ReMail_Txt1'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_ConfirmMail_ReMail_Txt1'])));

    $_POST['UAM_ConfirmMail_ReMail_Txt2'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_ConfirmMail_ReMail_Txt2'])));
    
    $_POST['UAM_ConfirmMail_Custom_Txt1'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_ConfirmMail_Custom_Txt1'])));
    
    $_POST['UAM_ConfirmMail_Custom_Txt2'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_ConfirmMail_Custom_Txt2'])));
    
	  $newconf_UAM_ConfirmMail = array (
      $_POST['UAM_ConfirmMail_TimeOut'],
      $_POST['UAM_ConfirmMail_Delay'],
      $_POST['UAM_ConfirmMail_ReMail_Txt1'],
      $_POST['UAM_ConfirmMail_Remail'],
      $_POST['UAM_ConfirmMail_ReMail_Txt2'],
      $_POST['UAM_ConfirmMail_Custom_Txt1'],
      $_POST['UAM_ConfirmMail_Custom_Txt2']);

    $conf['UserAdvManager_ConfirmMail'] = serialize($newconf_UAM_ConfirmMail);
    
	  $query = '
      UPDATE '.CONFIG_TABLE.'
			SET value="'.addslashes($conf['UserAdvManager_ConfirmMail']).'"
			WHERE param="UserAdvManager_ConfirmMail"
			LIMIT 1
		;';

		pwg_query($query);

		array_push($page['infos'], l10n('UAM_save_config'));
  }


/* Testing password enforcement */
  if (isset($_POST['PasswordTest']) and !is_adviser() and isset($_POST['UAM_Password_Test']) and !empty($_POST['UAM_Password_Test']))
  {
    $UAM_Password_Test_Score = testpassword($_POST['UAM_Password_Test']);
  }
  else if (isset($_POST['PasswordTest']) and !is_adviser() and empty($_POST['UAM_Password_Test']))
  {
    array_push($page['errors'], l10n('reg_err_login3'));
  }

  $conf_UAM = unserialize($conf['UserAdvManager']);

/* Group setting for unvalidated and validated users */
  $groups[-1] = '---------';
  $No_Valid = -1;
  $Valid = -1;
	
/* Check groups list in database  */
  $query = '
SELECT id, name
FROM '.GROUPS_TABLE.'
ORDER BY name ASC
;';
	
  $result = pwg_query($query);
	
  while ($row = pwg_db_fetch_assoc($result))
  {
    $groups[$row['id']] = $row['name'];
/* configuration value for unvalidated users */
    if (isset($conf_UAM[2]) and $conf_UAM[2] == $row['id'])
    {
	  	$No_Valid = $row['id'];
		}
/* configuration value for validated users */
    if (isset($conf_UAM[3]) and $conf_UAM[3] == $row['id'])
		{
	  	$Valid = $row['id'];
		}
  }
	
/* Template initialization for unvalidated users group */
  $template->assign(
    'No_Confirm_Group',
   	array(
	  	'group_options'=> $groups,
	  	'group_selected' => $No_Valid
			)
 		);
/* Template initialization for validated users group */
  $template->assign(
    'Validated_Group',
		array(
      'group_options'=> $groups,
      'group_selected' => $Valid
			)
  	);
	
/* Status setting for unvalidated and validated users */
  $status_options[-1] = '------------';
  $No_Valid_Status = -1;
  $Valid_Status = -1;
	
/* Get status values */
  foreach (get_enums(USER_INFOS_TABLE, 'status') as $status)
  {
	  $status_options[$status] = l10n('user_status_'.$status);
	  if (isset($conf_UAM[8]) and $conf_UAM[8] == $status)
	  {
	    $No_Valid_Status = $status;
	  }
	  
/* Template initialization for unvalidated users group */
      $template->assign(
        'No_Confirm_Status',
        array(
					'Status_options' => $status_options,
		  		'Status_selected' => $No_Valid_Status
					)
	  		);
  }
  
/* Get status values */
  foreach (get_enums(USER_INFOS_TABLE, 'status') as $status)
  {
	  $status_options[$status] = l10n('user_status_'.$status);
	  if (isset($conf_UAM[4]) and $conf_UAM[4] == $status)
		{
		  $Valid_Status = $status;
		}
		
/* Template initialization for unvalidated users group */
      $template->assign(
	    'Confirm_Status',
	    array(
		    'Status_options' => $status_options,
		    'Status_selected' => $Valid_Status
		    )
	    );
	}

/* Save last opened paragraph in configuration tab */
  $nb_para=(isset($_POST["nb_para"])) ? $_POST["nb_para"]:"";
  $nb_para2=(isset($_POST["nb_para2"])) ? $_POST["nb_para2"]:"";

  $conf_UAM_ConfirmMail = unserialize($conf['UserAdvManager_ConfirmMail']);
  
  $template->assign(
    array(
    'nb_para'                        => $nb_para,
    'nb_para2'                       => $nb_para2,
    'UAM_VERSION'                    => $version,
    'UAM_PATH'                       => UAM_PATH,
		'UAM_MAIL_INFO_TRUE'             => $conf_UAM[0]=='true' ?  'checked="checked"' : '' ,
		'UAM_MAIL_INFO_FALSE'            => $conf_UAM[0]=='false' ?  'checked="checked"' : '' ,
		'UAM_MAILINFO_TEXT'              => $conf_UAM[9],
		'UAM_USERNAME_CHAR_TRUE'         => $conf_UAM[6]=='true' ?  'checked="checked"' : '' ,
		'UAM_USERNAME_CHAR_FALSE'        => $conf_UAM[6]=='false' ?  'checked="checked"' : '' ,
		'UAM_USERNAME_CHAR_LIST'         => $conf_UAM[7],
		'UAM_CONFIRM_MAIL_TRUE'          => $conf_UAM[1]=='true' ?  'checked="checked"' : '' ,
		'UAM_CONFIRM_MAIL_FALSE'         => $conf_UAM[1]=='false' ?  'checked="checked"' : '' ,
    'UAM_CONFIRM_MAIL_LOCAL'         => $conf_UAM[1]=='local' ?  'checked="checked"' : '' ,
		'UAM_CONFIRMMAIL_TEXT'           => $conf_UAM[10],
		'UAM_No_Confirm_Group'           => $conf_UAM[2],
		'UAM_Validated_Group'            => $conf_UAM[3],
		'UAM_No_Confirm_Status'          => $conf_UAM[8],
		'UAM_Validated_Status'           => $conf_UAM[4],
		'UAM_NO_COMMENT_ANO_TRUE'        => $conf_UAM[5]=='true' ?  'checked="checked"' : '' ,
		'UAM_NO_COMMENT_ANO_FALSE'       => $conf_UAM[5]=='false' ?  'checked="checked"' : '' ,
		'UAM_MAILEXCLUSION_TRUE'         => $conf_UAM[11]=='true' ?  'checked="checked"' : '' ,
		'UAM_MAILEXCLUSION_FALSE'        => $conf_UAM[11]=='false' ?  'checked="checked"' : '' ,
		'UAM_MAILEXCLUSION_LIST'         => $conf_UAM[12],
		'UAM_PASSWORDENF_TRUE'           => $conf_UAM[13]=='true' ?  'checked="checked"' : '' ,
		'UAM_PASSWORDENF_FALSE'          => $conf_UAM[13]=='false' ?  'checked="checked"' : '' ,
		'UAM_PASSWORD_SCORE'             => $conf_UAM[14],
    'UAM_ADMINPASSWENF_TRUE'         => $conf_UAM[15]=='true' ?  'checked="checked"' : '' ,
		'UAM_ADMINPASSWENF_FALSE'        => $conf_UAM[15]=='false' ?  'checked="checked"' : '' ,
    'UAM_GHOSTRACKER_TRUE'           => $conf_UAM[16]=='true' ?  'checked="checked"' : '' ,
		'UAM_GHOSTRACKER_FALSE'          => $conf_UAM[16]=='false' ?  'checked="checked"' : '' ,
    'UAM_GHOSTRACKER_DAYLIMIT'       => $conf_UAM[17],
    'UAM_GHOSTRACKER_REMINDERTEXT'   => $conf_UAM[18],
    'UAM_ADDLASTVISIT_TRUE'          => $conf_UAM[19]=='true' ?  'checked="checked"' : '' ,
    'UAM_ADDLASTVISIT_FALSE'         => $conf_UAM[19]=='false' ?  'checked="checked"' : '' ,
    'UAM_ADMINCONFMAIL_TRUE'         => $conf_UAM[20]=='true' ?  'checked="checked"' : '' ,
    'UAM_ADMINCONFMAIL_FALSE'        => $conf_UAM[20]=='false' ?  'checked="checked"' : '' ,
    'UAM_REDIRTOPROFILE_TRUE'        => $conf_UAM[21]=='true' ?  'checked="checked"' : '' ,
    'UAM_REDIRTOPROFILE_FALSE'       => $conf_UAM[21]=='false' ?  'checked="checked"' : '' ,
		'UAM_PASSWORD_TEST_SCORE'        => $UAM_Password_Test_Score,
    'UAM_ERROR_REPORTS4'             => $UAM_Exclusionlist_Error,
		'UAM_CONFIRMMAIL_TIMEOUT_TRUE'	 => $conf_UAM_ConfirmMail[0]=='true' ?  'checked="checked"' : '' ,
		'UAM_CONFIRMMAIL_TIMEOUT_FALSE'  => $conf_UAM_ConfirmMail[0]=='false' ?  'checked="checked"' : '' ,
		'UAM_CONFIRMMAIL_DELAY'					 => $conf_UAM_ConfirmMail[1],
    'UAM_CONFIRMMAIL_REMAIL_TRUE'		 => $conf_UAM_ConfirmMail[3]=='true' ? 'checked="checked"' : '',
    'UAM_CONFIRMMAIL_REMAIL_FALSE'	 => $conf_UAM_ConfirmMail[3]=='false' ? 'checked="checked"' : '',
    'UAM_CONFIRMMAIL_REMAIL_TXT1'		 => $conf_UAM_ConfirmMail[2],
    'UAM_CONFIRMMAIL_REMAIL_TXT2'		 => $conf_UAM_ConfirmMail[4],
    'UAM_CONFIRMMAIL_CUSTOM_TXT1'		 => $conf_UAM_ConfirmMail[5],
    'UAM_CONFIRMMAIL_CUSTOM_TXT2'		 => $conf_UAM_ConfirmMail[6],
    )
  );

  if (isset($_POST['audit']))
	{
		$msg_error1 = '';
		
/* username insensible a la casse */
    if (isset($conf_UAM[2]) and $conf_UAM[2] == 'true')
	  {
			$query = "
SELECT ".$conf['user_fields']['username']."
  FROM ".USERS_TABLE." p1
WHERE EXISTS(
  SELECT ".$conf['user_fields']['username']."
	 FROM ".USERS_TABLE." p2
	WHERE p1.".$conf['user_fields']['id']." <> p2.".$conf['user_fields']['id']."
	 AND LOWER(p1.".$conf['user_fields']['username'].") = LOWER(p2.".$conf['user_fields']['username'].")
	)
;";
			  
		  $result = pwg_query($query);
			
		  while($row = pwg_db_fetch_assoc($result))
	  	{
				$msg_error1 .= (($msg_error1 <> '') ? '<br>' : '') . l10n('Err_audit_no_casse').stripslashes($row['username']);
			}
		}

		$msg_error2 = '';
		
/* Username without forbidden keys */
    if ( isset($conf_UAM[6]) and $conf_UAM[6] == 'true' )
	  {
			$query = "
SELECT ".$conf['user_fields']['username'].", ".$conf['user_fields']['email']."
  FROM ".USERS_TABLE."
;";
			  
			$result = pwg_query($query);
			
			while($row = pwg_db_fetch_assoc($result))
			{
				if (!ValidateUsername(stripslashes($row['username'])))
					$msg_error2 .= (($msg_error2 <> '') ? '<br>' : '') . l10n('Err_audit_username_char').stripslashes($row['username']);
			}
		}

		$msg_error3 = '';
		
/* Email without forbidden domain */
    if ( isset($conf_UAM[11]) and $conf_UAM[11] == 'true' )
	  {
			$query = "
SELECT ".$conf['user_fields']['username'].", ".$conf['user_fields']['email']."
  FROM ".USERS_TABLE."
;";
			  
		  $result = pwg_query($query);
			
		  while($row = pwg_db_fetch_assoc($result))
		  {
			  $conf_MailExclusion = preg_split("/[\s,]+/",$conf_UAM[12]);
			  for ($i = 0 ; $i < count($conf_MailExclusion) ; $i++)
			  {
					$pattern = '/'.$conf_MailExclusion[$i].'/';
				  if (preg_match($pattern, $row['mail_address']))
				  {
						$msg_error3 .=  (($msg_error3 <> '') ? '<br>' : '') . l10n('Err_audit_email_forbidden').stripslashes($row['username']).' ('.$row['mail_address'].')';
					}
				}
			}
		}
		
    if ($msg_error1 <> '')
			$errors[] = $msg_error1.'<br><br>';
		
		if ($msg_error2 <> '')
			$errors[] = $msg_error2.'<br><br>';
		
		if ($msg_error3 <> '')
	  	$errors[] = $msg_error3.'<br><br>';
		
		if ($msg_error1 <> '' or $msg_error2 <> '' or $msg_error3 <> '')
	  	array_push($page['errors'], l10n('Err_audit_advise'));
		else
    	array_push($page['infos'], l10n('UAM_audit_ok'));
	}


// +-----------------------------------------------------------------------+
// |                             errors display                            |
// +-----------------------------------------------------------------------+
  if (isset ($errors) and count($errors) != 0)
  {
	  $template->assign('errors',array());
	  foreach ($errors as $error)
	  {
		  array_push($page['errors'], $error);
		}
	}  

// +-----------------------------------------------------------------------+
// |                           templates display                           |
// +-----------------------------------------------------------------------+
  $template->set_filename('plugin_admin_content', dirname(__FILE__) . '/template/global.tpl');
  $template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');

  break;


// *************************************************************************
// +-----------------------------------------------------------------------+
// |                           Users list page                             |
// +-----------------------------------------------------------------------+
// *************************************************************************
  case 'userlist':
  
  $conf_UAM = unserialize($conf['UserAdvManager']);
  
  if (isset($conf_UAM[19]) and $conf_UAM[19]=='true')
  {
// +-----------------------------------------------------------------------+
// |                           initialization                              |
// +-----------------------------------------------------------------------+

		if (!defined('PHPWG_ROOT_PATH'))
    {
    	die('Hacking attempt!');
    }
          
    include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');

// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+
		check_status(ACCESS_ADMINISTRATOR);


// +-----------------------------------------------------------------------+
// |                               user list                               |
// +-----------------------------------------------------------------------+

		$page['filtered_users'] = get_user_list();

// +-----------------------------------------------------------------------+
// |                           Template Init                               |
// +-----------------------------------------------------------------------+
		/*$base_url = PHPWG_ROOT_PATH.'admin.php?page=user_list';

    if (isset($_GET['start']) and is_numeric($_GET['start']))
    {
      $start = $_GET['start'];
    }
    else
    {
      $start = 0;
    }*/

// +-----------------------------------------------------------------------+
// |                            navigation bar                             |
// +-----------------------------------------------------------------------+

/*$url = PHPWG_ROOT_PATH.'admin.php'.get_query_string_diff(array('start'));

$navbar = create_navigation_bar(
  $url,
  count($page['filtered_users']),
  $start,
  $conf['users_page']
  );

$template->assign('navbar', $navbar);*/

// +-----------------------------------------------------------------------+
// |                               user list                               |
// +-----------------------------------------------------------------------+

    $visible_user_list = array();
    foreach ($page['filtered_users'] as $num => $local_user)
    {
// simulate LIMIT $start, $conf['users_page']
			/*if ($num < $start)
      {
        continue;
      }
      if ($num >= $start + $conf['users_page'])
      {
        break;
      }*/

      $visible_user_list[] = $local_user;
		}

		foreach ($visible_user_list as $local_user)
    {
      // dates formating and compare
      $today = date("d-m-Y"); // Get today's date
      list($day, $month, $year) = explode('-', $today); // explode date of today						 
      $daytimestamp = mktime(0, 0, 0, $month, $day, $year);// Generate UNIX timestamp
	  	
      list($regdate, $regtime) = explode(' ', $local_user['lastvisit']); // Explode date and time from registration date
      list($regyear, $regmonth, $regday) = explode('-', $regdate); // Explode date from registration date
      $regtimestamp = mktime(0, 0, 0, $regmonth, $regday, $regyear);// Generate UNIX timestamp
			
      $deltasecs = $daytimestamp - $regtimestamp;// Compare the 2 UNIX timestamps	
      $deltadays = floor($deltasecs / 86400);// Convert result from seconds to days
      
      if (isset($conf_UAM[16]) and $conf_UAM[16]=='true' and $conf_UAM[17] <> '')
      {
        if ($deltadays <= ($conf_UAM[17]/2))
        {
          $display = 'green';
        }
        
        if (($deltadays > ($conf_UAM[17]/2)) and ($deltadays < $conf_UAM[17]))
        {
          $display = 'orange';
        }
        
        if ($deltadays >= $conf_UAM[17])
        {
          $display = 'red';
        }
      }
      else $display = '';

   		$template->append(
     		'users',
       	array(
       		'ID'          => $local_user['id'],
         	'USERNAME'    => stripslashes($local_user['username']),
					'EMAIL'       => get_email_address_as_display_text($local_user['email']),
          'LASTVISIT'   => $local_user['lastvisit'],
          'DAYS'        => $deltadays,
          'DISPLAY'     => $display,
				)
			);
		}
    /* Plugin version inserted */
    $template->assign(
      array(
        'UAM_VERSION'  => $version,
        'UAM_PATH'     => UAM_PATH,
      )
    );    
// +-----------------------------------------------------------------------+
// |                             errors display                            |
// +-----------------------------------------------------------------------+
		if ( isset ($errors) and count($errors) != 0)
		{
	  	$template->assign('errors',array());
			foreach ($errors as $error)
	  	{
				array_push($page['errors'], $error);
	  	}
 		}  

// +-----------------------------------------------------------------------+
// |                           templates display                           |
// +-----------------------------------------------------------------------+
		$template->set_filename('plugin_admin_content', dirname(__FILE__) . '/template/userlist.tpl');
    $template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');		
  }
  else
  {
		array_push($page['errors'], l10n('Err_Userlist_Settings'));
  }
  break;


// *************************************************************************
// +-----------------------------------------------------------------------+
// |                           Users manager page                          |
// +-----------------------------------------------------------------------+
// *************************************************************************
  case 'usermanager':

  $conf_UAM = unserialize($conf['UserAdvManager']);

  $conf_UAM_ConfirmMail = unserialize($conf['UserAdvManager_ConfirmMail']);
	
  if (isset($conf_UAM[1]) and ($conf_UAM[1]=='true' or $conf_UAM[1]=='local') and ((isset($conf_UAM[2]) and $conf_UAM[2] <> '-1') or (isset($conf_UAM[8]) and $conf_UAM[8] <> '-1')))
  {   
// +-----------------------------------------------------------------------+
// |                           initialization                              |
// +-----------------------------------------------------------------------+

		if (!defined('PHPWG_ROOT_PATH'))
    {
    	die('Hacking attempt!');
    }
          
    include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');

// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+
		check_status(ACCESS_ADMINISTRATOR);

// +-----------------------------------------------------------------------+
// |                               user list                               |
// +-----------------------------------------------------------------------+

		$page['filtered_users'] = get_unvalid_user_list();

// +-----------------------------------------------------------------------+
// |                            selected users                             |
// +-----------------------------------------------------------------------+
		if (isset($_POST['Del_Selected']))
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

// +-----------------------------------------------------------------------+
// |                             delete users                              |
// +-----------------------------------------------------------------------+
		if (isset($_POST['Del_Selected']) and count($collection) > 0)
  	{
  		if (in_array($conf['guest_id'], $collection))
   		{
    		array_push($page['errors'], l10n('Guest cannot be deleted'));
    	}
    	if (($conf['guest_id'] != $conf['default_user_id']) and
    		in_array($conf['default_user_id'], $collection))
    	{
    		array_push($page['errors'], l10n('Default user cannot be deleted'));
    	}
    	if (in_array($conf['webmaster_id'], $collection))
    	{
    		array_push($page['errors'], l10n('Webmaster cannot be deleted'));
    	}
    	if (in_array($user['id'], $collection))
    	{
    		array_push($page['errors'], l10n('You cannot delete your account'));
    	}

			if (count($page['errors']) == 0)
    	{
    		foreach ($collection as $user_id)
      	{
      		delete_user($user_id);
      	}
     		array_push(
      		$page['infos'],
        	l10n_dec(
        	'%d user deleted', '%d users deleted',
        	count($collection)
        	)
      	);

      	foreach ($page['filtered_users'] as $filter_key => $filter_user)
      	{
      		if (in_array($filter_user['id'], $collection))
        	{
        		unset($page['filtered_users'][$filter_key]);
        	}
     		}
			}
		}

// +-----------------------------------------------------------------------+
// |                 Resend new validation key to users                    |
// +-----------------------------------------------------------------------+
// +-----------------------------------------------------------------------+
// |                            selected users                             |
// +-----------------------------------------------------------------------+
		if (isset($_POST['Mail_With_Key']))
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
// +-----------------------------------------------------------------------+
// |                 Resend new validation key to users                    |
// +-----------------------------------------------------------------------+
		if (isset($_POST['Mail_With_Key']) and count($collection) > 0)
		{
			if (in_array($conf['guest_id'], $collection))
   		{
    		array_push($page['errors'], l10n('No_validation_for_Guest'));
    	}
    	if (($conf['guest_id'] != $conf['default_user_id']) and
    		in_array($conf['default_user_id'], $collection))
    	{
    		array_push($page['errors'], l10n('No_validation_for_default_user'));
    	}
   		if (in_array($conf['webmaster_id'], $collection))
    	{
    		array_push($page['errors'], l10n('No_validation_for_Webmaster'));
    	}
    	if (in_array($user['id'], $collection))
    	{
    		array_push($page['errors'], l10n('No_validation_for_your_account'));
    	}

    	if (count($page['errors']) == 0)
    	{
    		foreach ($collection as $user_id)
      	{     	
      		$typemail = 1;
				  $query = "
SELECT id, username, mail_address
  FROM ".USERS_TABLE."
WHERE id = '".$user_id."'
;";
					$data = pwg_db_fetch_assoc(pwg_query($query));
				
      		ResendMail2User($typemail,$user_id,stripslashes($data['username']),$data['mail_address'],true);
      	}
      	array_push(
      		$page['infos'],
        	l10n_dec(
        		'%d_Mail_With_Key', '%d_Mails_With_Key',
        	count($collection)
        	)
      	);
      	
				$page['filtered_users'] = get_unvalid_user_list();
			}
		}

// +-----------------------------------------------------------------------+
// |             Send reminder without new key to users                    |
// +-----------------------------------------------------------------------+
// +-----------------------------------------------------------------------+
// |                            selected users                             |
// +-----------------------------------------------------------------------+
		if (isset($_POST['Mail_Without_Key']))
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
// +-----------------------------------------------------------------------+
// |             Send reminder without new key to users                    |
// +-----------------------------------------------------------------------+
		if (isset($_POST['Mail_Without_Key']) and count($collection) > 0)
		{
			if (in_array($conf['guest_id'], $collection))
   		{
    		array_push($page['errors'], l10n('No_validation_for_Guest'));
    	}
    	if (($conf['guest_id'] != $conf['default_user_id']) and
    		in_array($conf['default_user_id'], $collection))
    	{
    		array_push($page['errors'], l10n('No_validation_for_default_user'));
    	}
   		if (in_array($conf['webmaster_id'], $collection))
    	{
    		array_push($page['errors'], l10n('No_validation_for_Webmaster'));
    	}
    	if (in_array($user['id'], $collection))
    	{
    		array_push($page['errors'], l10n('No_validation_for_your_account'));
    	}

    	if (count($page['errors']) == 0)
    	{
    		foreach ($collection as $user_id)
      	{
      		$typemail = 2;
				  $query = "
SELECT id, username, mail_address
  FROM ".USERS_TABLE."
WHERE id = '".$user_id."'
;";
					
					$data = pwg_db_fetch_assoc(pwg_query($query));
				
      		ResendMail2User($typemail,$user_id,stripslashes($data['username']),$data['mail_address'],false);				
      	}
      	array_push(
      		$page['infos'],
        	l10n_dec(
        		'%d_Reminder_Sent', '%d_Reminders_Sent',
       		count($collection)
        	)
      	);
        
				$page['filtered_users'] = get_unvalid_user_list();
			}
		}

// +-----------------------------------------------------------------------+
// |             								Force validation					                 |
// +-----------------------------------------------------------------------+
// +-----------------------------------------------------------------------+
// |                            selected users                             |
// +-----------------------------------------------------------------------+
		if (isset($_POST['Force_Validation']))
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
// +-----------------------------------------------------------------------+
// |             								Force validation					                 |
// +-----------------------------------------------------------------------+
		if (isset($_POST['Force_Validation']) and count($collection) > 0)
		{
			if (in_array($conf['guest_id'], $collection))
   		{
    		array_push($page['errors'], l10n('No_validation_for_Guest'));
    	}
    	if (($conf['guest_id'] != $conf['default_user_id']) and
    		in_array($conf['default_user_id'], $collection))
    	{
    		array_push($page['errors'], l10n('No_validation_for_default_user'));
    	}
   		if (in_array($conf['webmaster_id'], $collection))
    	{
    		array_push($page['errors'], l10n('No_validation_for_Webmaster'));
    	}
    	if (in_array($user['id'], $collection))
    	{
    		array_push($page['errors'], l10n('No_validation_for_your_account'));
    	}

    	if (count($page['errors']) == 0)
    	{
    		foreach ($collection as $user_id)
      	{
				  $query = "
SELECT id, username, mail_address
  FROM ".USERS_TABLE."
WHERE id = '".$user_id."'
;";
					
					$data = pwg_db_fetch_assoc(pwg_query($query));
				
      		ForceValidation($data['id']);				
      	}
      	array_push(
      		$page['infos'],
        	l10n_dec(
        		'%d_Validated_User', '%d_Validated_Users',
       		count($collection)
        	)
      	);

				$page['filtered_users'] = get_unvalid_user_list();
			}
		}
		

// +-----------------------------------------------------------------------+
// |                              groups list                              |
// +-----------------------------------------------------------------------+

		$groups[-1] = '------------';

    $query = '
SELECT id, name
  FROM '.GROUPS_TABLE.'
ORDER BY name ASC
;';

		$result = pwg_query($query);
          
    while ($row = pwg_db_fetch_assoc($result))
    {
      $groups[$row['id']] = $row['name'];
    }

// +-----------------------------------------------------------------------+
// |                           Template Init                               |
// +-----------------------------------------------------------------------+
		/*$base_url = PHPWG_ROOT_PATH.'admin.php?page=user_list';

    if (isset($_GET['start']) and is_numeric($_GET['start']))
    {
      $start = $_GET['start'];
    }
    else
    {
      $start = 0;
    }*/

/* Hide radio-button if not allow to assign adviser */
		if ($conf['allow_adviser'])
    	{
      	$template->assign('adviser', true);
    	}

// +-----------------------------------------------------------------------+
// |                            navigation bar                             |
// +-----------------------------------------------------------------------+

/*$url = PHPWG_ROOT_PATH.'admin.php'.get_query_string_diff(array('start'));

$navbar = create_navigation_bar(
  $url,
  count($page['filtered_users']),
  $start,
  $conf['users_page']
  );

$template->assign('navbar', $navbar);*/

// +-----------------------------------------------------------------------+
// |                               user list                               |
// +-----------------------------------------------------------------------+

		$profile_url = get_root_url().'admin.php?page=profile&amp;user_id=';
		$perm_url = get_root_url().'admin.php?page=user_perm&amp;user_id=';

    $visible_user_list = array();
    foreach ($page['filtered_users'] as $num => $local_user)
    {
/* simulate LIMIT $start, $conf['users_page'] */
			/*if ($num < $start)
      {
        continue;
      }
      if ($num >= $start + $conf['users_page'])
      {
        break;
      }*/

      $visible_user_list[] = $local_user;
		}

		foreach ($visible_user_list as $local_user)
    {
      $groups_string = preg_replace(
      	'/(\d+)/e',
        "\$groups['$1']",
        implode(
        	', ',
            $local_user['groups']
         )
			);

      $query = '
SELECT user_id, reminder
FROM '.USER_CONFIRM_MAIL_TABLE.'
WHERE user_id = '.$local_user['id'].'
;';
      $result = pwg_query($query);
      
      $row = pwg_db_fetch_assoc($result);
    
      if (isset($row['reminder']) and $row['reminder'] == 'true')
      {
        $reminder = l10n('Reminder_Sent_OK');
      }
      else if ((isset($row['reminder']) and $row['reminder'] == 'false') or !isset($row['reminder']))
      {
        $reminder = l10n('Reminder_Sent_NOK');
      }


	  	if (isset($_POST['pref_submit'])
    		and isset($_POST['selection'])
      	and in_array($local_user['id'], $_POST['selection']))
	  	{
				$checked = 'checked="checked"';
	  	}
			else
    	{
    		$checked = '';
    	}

    	$properties = array();
    	if ( $local_user['level'] != 0 )
			{
    		$properties[] = l10n( sprintf('Level %d', $local_user['level']) );
			}
    	$properties[] =
    		(isset($local_user['enabled_high']) and ($local_user['enabled_high'] == 'true'))
      		? l10n('is_high_enabled') : l10n('is_high_disabled');

			$expiration = expiration($local_user['id']);
      
   		$template->append(
     		'users',
       	array(
       		'ID'               => $local_user['id'],
         	'CHECKED'          => $checked,
         	'U_PROFILE'        => $profile_url.$local_user['id'],
         	'U_PERM'           => $perm_url.$local_user['id'],
         	'USERNAME'         => stripslashes($local_user['username'])
                                  .($local_user['id'] == $conf['guest_id']
                                  ? '<BR>['.l10n('is_the_guest').']' : '')
                                  .($local_user['id'] == $conf['default_user_id']
                                  ? '<BR>['.l10n('is_the_default').']' : ''),
                                  'STATUS' => l10n('user_status_'
                                  .$local_user['status']).(($local_user['adviser'] == 'true')
                                  ? '<BR>['.l10n('adviser').']' : ''),
					'EMAIL'            => get_email_address_as_display_text($local_user['email']),
         	'GROUPS'           => $groups_string,
         	'REGISTRATION'     => $local_user['registration_date'],
          'REMINDER'         => $reminder,    
         	'EXPIRATION'       => $expiration,
				)
			);
		}   

    // Check if validation of register is made by admin or visitor 
    // If visitor, $Confirm_Local is used to mask useless buttons
    $Confirm_Local = "";
    
    if ($conf_UAM[1] == 'local')
    {
      $Confirm_Local = $conf_UAM[1];
    }
    else
    {
      $Confirm_Local = "";
    } 
    
    /* Plugin version inserted */
    $template->assign(
      array(
        'CONFIRM_LOCAL'=> $Confirm_Local,
        'UAM_VERSION'  => $version,
        'UAM_PATH'     => UAM_PATH,
      )
    );

// +-----------------------------------------------------------------------+
// |                             errors display                            |
// +-----------------------------------------------------------------------+
		if ( isset ($errors) and count($errors) != 0)
		{
	  	$template->assign('errors',array());
			foreach ($errors as $error)
	  	{
				array_push($page['errors'], $error);
	  	}
		}  

// +-----------------------------------------------------------------------+
// |                           templates display                           |
// +-----------------------------------------------------------------------+
		$template->set_filename('plugin_admin_content', dirname(__FILE__) . '/template/usermanager.tpl');
    $template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');		
	}
  else
  {
		array_push($page['errors'], l10n('Err_UserManager_Settings'));
  }
  break;


// *************************************************************************
// +-----------------------------------------------------------------------+
// |                           Ghost Tracker page                          |
// +-----------------------------------------------------------------------+
// *************************************************************************
  case 'ghosttracker':

  $conf_UAM = unserialize($conf['UserAdvManager']);
	
  if (isset($conf_UAM[16]) and $conf_UAM[16]=='true')
  {
// +-----------------------------------------------------------------------+
// |                           initialization                              |
// +-----------------------------------------------------------------------+

		if (!defined('PHPWG_ROOT_PATH'))
    {
    	die('Hacking attempt!');
    }
          
    include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');

// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+
		check_status(ACCESS_ADMINISTRATOR);

// +-----------------------------------------------------------------------+
// |                               user list                               |
// +-----------------------------------------------------------------------+

		$page['filtered_users'] = get_ghost_user_list();

// +-----------------------------------------------------------------------+
// |                            selected users                             |
// +-----------------------------------------------------------------------+
		if (isset($_POST['Del_Selected']))
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

// +-----------------------------------------------------------------------+
// |                             delete users                              |
// +-----------------------------------------------------------------------+
		if (isset($_POST['Del_Selected']) and count($collection) > 0)
  	{
  		if (in_array($conf['guest_id'], $collection))
   		{
    		array_push($page['errors'], l10n('Guest cannot be deleted'));
    	}
    	if (($conf['guest_id'] != $conf['default_user_id']) and
    		in_array($conf['default_user_id'], $collection))
    	{
    		array_push($page['errors'], l10n('Default user cannot be deleted'));
    	}
    	if (in_array($conf['webmaster_id'], $collection))
    	{
    		array_push($page['errors'], l10n('Webmaster cannot be deleted'));
    	}
    	if (in_array($user['id'], $collection))
    	{
    		array_push($page['errors'], l10n('You cannot delete your account'));
    	}

			if (count($page['errors']) == 0)
    	{
    		foreach ($collection as $user_id)
      	{
      		delete_user($user_id);
      	}
     		array_push(
      		$page['infos'],
        	l10n_dec(
        	'%d user deleted', '%d users deleted',
        	count($collection)
        	)
      	);

      	foreach ($page['filtered_users'] as $filter_key => $filter_user)
      	{
      		if (in_array($filter_user['id'], $collection))
        	{
        		unset($page['filtered_users'][$filter_key]);
        	}
     		}
			}
		}

// +-----------------------------------------------------------------------+
// |                          Send ghost reminder                          |
// +-----------------------------------------------------------------------+
// +-----------------------------------------------------------------------+
// |                            selected users                             |
// +-----------------------------------------------------------------------+
		if (isset($_POST['Reminder_Email']))
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
// +-----------------------------------------------------------------------+
// |                         Send ghost reminder                           |
// +-----------------------------------------------------------------------+
		if (isset($_POST['Reminder_Email']) and count($collection) > 0)
		{
			if (in_array($conf['guest_id'], $collection))
   		{
    		array_push($page['errors'], l10n('No_reminder_for_Guest'));
    	}
    	if (($conf['guest_id'] != $conf['default_user_id']) and
    		in_array($conf['default_user_id'], $collection))
    	{
    		array_push($page['errors'], l10n('No_reminder_for_default_user'));
    	}
   		if (in_array($conf['webmaster_id'], $collection))
    	{
    		array_push($page['errors'], l10n('No_reminder_for_Webmaster'));
    	}
    	if (in_array($user['id'], $collection))
    	{
    		array_push($page['errors'], l10n('No_reminder_for_your_account'));
    	}

    	if (count($page['errors']) == 0)
    	{
    		foreach ($collection as $user_id)
      	{
				  $query = "
SELECT id, username, mail_address
  FROM ".USERS_TABLE."
WHERE id = '".$user_id."'
;";
					
					$data = pwg_db_fetch_assoc(pwg_query($query));
				
      		ghostreminder($user_id,stripslashes($data['username']),$data['mail_address']);				
      	}
      	array_push(
      		$page['infos'],
        	l10n_dec(
        		'%d_Reminder_Sent', '%d_Reminders_Sent',
       		count($collection)
        	)
      	);
      	
				$page['filtered_users'] = get_ghost_user_list();
			}
		}
    
    if (isset($_POST['GhostTracker_Init']))
    {
      /* Reset is only allowed for admins ! */
      if (is_admin() and !is_adviser())
      {
        $query1 = '
SELECT *
  FROM '.USER_LASTVISIT_TABLE.';';

        $count = pwg_db_num_rows(pwg_query($query1));

        if ($count <> 0)
        {
          $query = '
SELECT DISTINCT u.id,
                ui.status AS status
FROM '.USERS_TABLE.' AS u
  INNER JOIN '.USER_INFOS_TABLE.' AS ui
    ON u.id = ui.user_id
WHERE u.id NOT IN (SELECT user_id FROM '.USER_LASTVISIT_TABLE.')
  AND status != "webmaster"
  AND status != "guest"
  AND status != "admin"
ORDER BY u.id ASC
;';

          $result = pwg_query($query);
          
          while ($row = pwg_db_fetch_assoc($result))
          {
            list($dbnow) = pwg_db_fetch_row(pwg_query('SELECT NOW();'));
            
            $query = "
INSERT INTO ".USER_LASTVISIT_TABLE." (user_id, lastvisit, reminder)
VALUES ('".$row['id']."','".$dbnow."','false')
;";
            pwg_query($query);
          }
        }
        else if ($count == 0)
        {
          $query = '
SELECT DISTINCT u.id,
                ui.status AS status
FROM '.USERS_TABLE.' AS u
  INNER JOIN '.USER_INFOS_TABLE.' AS ui
    ON u.id = ui.user_id
WHERE status != "webmaster"
  AND status != "guest"
  AND status != "admin"
ORDER BY u.id ASC
;';

          $result = pwg_query($query);
          
          while($row = pwg_db_fetch_assoc($result))
          {
            list($dbnow) = pwg_db_fetch_row(pwg_query('SELECT NOW();'));
            
            $query = "
INSERT INTO ".USER_LASTVISIT_TABLE." (user_id, lastvisit, reminder)
VALUES ('".$row['id']."','".$dbnow."','false')
;";
            pwg_query($query);
          }
        }
        
        array_push($page['infos'], l10n('GhostTracker_Init_OK'));
      }
    }

// +-----------------------------------------------------------------------+
// |                           Template Init                               |
// +-----------------------------------------------------------------------+
		/*$base_url = PHPWG_ROOT_PATH.'admin.php?page=user_list';

    if (isset($_GET['start']) and is_numeric($_GET['start']))
    {
      $start = $_GET['start'];
    }
    else
    {
      $start = 0;
    }*/

/* Hide radio-button if not allow to assign adviser */
		if ($conf['allow_adviser'])
    {
      $template->assign('adviser', true);
   	}

// +-----------------------------------------------------------------------+
// |                            navigation bar                             |
// +-----------------------------------------------------------------------+

/*$url = PHPWG_ROOT_PATH.'admin.php'.get_query_string_diff(array('start'));

$navbar = create_navigation_bar(
  $url,
  count($page['filtered_users']),
  $start,
  $conf['users_page']
  );

$template->assign('navbar', $navbar);*/

// +-----------------------------------------------------------------------+
// |                               user list                               |
// +-----------------------------------------------------------------------+

    $visible_user_list = array();
    foreach ($page['filtered_users'] as $num => $local_user)
    {
/* simulate LIMIT $start, $conf['users_page'] */
			/*if ($num < $start)
      {
        continue;
      }
      if ($num >= $start + $conf['users_page'])
      {
        break;
      }*/

      $visible_user_list[] = $local_user;
		}

/* Plugin version inserted */
      $template->assign(
        array(
          'UAM_VERSION'  => $version,
          'UAM_PATH'     => UAM_PATH,
        )
      );

		foreach ($visible_user_list as $local_user)
    {
      $reminder = '';
    
      if (isset($local_user['reminder']) and $local_user['reminder'] == 'true')
      {
        $reminder = l10n('Reminder_Sent_OK');
      }
      else if (isset($local_user['reminder']) and $local_user['reminder'] == 'false')
      {
        $reminder = l10n('Reminder_Sent_NOK');
      }
    
      if (isset($_POST['pref_submit']) and isset($_POST['selection']) and in_array($local_user['id'], $_POST['selection']))
	  	{
				$checked = 'checked="checked"';
	  	}
			else
    	{
    		$checked = '';
    	}

      $template->append(
     	  'users',
       	array(
       		'ID'          => $local_user['id'],
         	'CHECKED'     => $checked,
         	'USERNAME'    => stripslashes($local_user['username']),
					'EMAIL'       => get_email_address_as_display_text($local_user['email']),
          'LASTVISIT'   => $local_user['lastvisit'],
          'REMINDER'    => $reminder,
				)
			);
		}

// +-----------------------------------------------------------------------+
// |                             errors display                            |
// +-----------------------------------------------------------------------+
		if ( isset ($errors) and count($errors) != 0)
		{
	  	$template->assign('errors',array());
			foreach ($errors as $error)
	  	{
				array_push($page['errors'], $error);
	  	}
		}  

// +-----------------------------------------------------------------------+
// |                           templates display                           |
// +-----------------------------------------------------------------------+
		$template->set_filename('plugin_admin_content', dirname(__FILE__) . '/template/ghosttracker.tpl');
    $template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');		
	}
  else
  {
		array_push($page['errors'], l10n('Err_GhostTracker_Settings'));
  }

  break;
}
?>