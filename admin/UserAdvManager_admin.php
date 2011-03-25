<?php

global $user, $lang, $conf, $errors;

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+
check_status(ACCESS_ADMINISTRATOR);

//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', true);

include_once (PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');
include_once (PHPWG_ROOT_PATH.'/include/constants.php');
$my_base_url = get_admin_plugin_menu_link(__FILE__);

load_language('plugin.lang', NBC_UserAdvManager_PATH);

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
$tabsheet->add('confirmmail',
               l10n('Tab_ConfirmMail'),
               $my_base_url.'&amp;tab=confirmmail');
$tabsheet->add('usermanager',
               l10n('Tab_UserManager'),
               $my_base_url.'&amp;tab=usermanager');
$tabsheet->add('ghosttracker',
               l10n('Tab_GhostTracker'),
               $my_base_url.'&amp;tab=ghosttracker');
$tabsheet->select($page['tab']);
$tabsheet->assign();

$page['global'] = array();
$error = array();
$UserAdvManager_Password_Test_Score = 0;

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
	
	if (isset($_POST['submit']) and !is_adviser() and isset($_POST['UserAdvManager_Mail_Info']) and isset($_POST['UserAdvManager_No_Casse']) and isset($_POST['UserAdvManager_Username_Char']) and isset($_POST['UserAdvManager_Confirm_Mail']) and isset($_POST['UserAdvManager_No_Comment_Anonymous']) and isset($_POST['UserAdvManager_Password_Enforced']) and isset($_POST['UserAdvManager_AdminPassword_Enforced']) and isset($_POST['UserAdvManager_GhostUser_Tracker']))
  {
		$_POST['UserAdvManager_MailInfo_Text'] = str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UserAdvManager_MailInfo_Text']));
		$_POST['UserAdvManager_ConfirmMail_Text'] = str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UserAdvManager_ConfirmMail_Text']));

  $_POST['UserAdvManager_GhostTracker_ReminderText'] = str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UserAdvManager_GhostTracker_ReminderText']));
		
		$newconf_nbc_UserAdvManager = $_POST['UserAdvManager_Mail_Info'].';'.$_POST['UserAdvManager_No_Casse'].';'.$_POST['UserAdvManager_Confirm_Mail'].';'.(isset($_POST['UserAdvManager_No_Confirm_Group'])?$_POST['UserAdvManager_No_Confirm_Group']:'').';'.(isset($_POST['UserAdvManager_Validated_Group'])?$_POST['UserAdvManager_Validated_Group']:'').';'.(isset($_POST['UserAdvManager_Validated_Status'])?$_POST['UserAdvManager_Validated_Status']:'').';'.$_POST['UserAdvManager_No_Comment_Anonymous'].';'.$_POST['UserAdvManager_Username_Char'].';'.$_POST['UserAdvManager_Username_List'].';'.(isset($_POST['UserAdvManager_No_Confirm_Status'])?$_POST['UserAdvManager_No_Confirm_Status']:'').';'.$_POST['UserAdvManager_MailInfo_Text'].';'.$_POST['UserAdvManager_ConfirmMail_Text'].';'.$_POST['UserAdvManager_MailExclusion'].';'.$_POST['UserAdvManager_MailExclusion_List'].';'.$_POST['UserAdvManager_Password_Enforced'].';'.$_POST['UserAdvManager_Password_Score'].';'.$_POST['UserAdvManager_AdminPassword_Enforced'].';'.$_POST['UserAdvManager_GhostUser_Tracker'].';'.$_POST['UserAdvManager_GhostTracker_DayLimit'].';'.$_POST['UserAdvManager_GhostTracker_ReminderText'];
		
		$conf['nbc_UserAdvManager'] = $newconf_nbc_UserAdvManager;
		
		$query = '
	  	UPDATE '.CONFIG_TABLE.'
	  	SET value="'.$newconf_nbc_UserAdvManager.'"
	  	WHERE param="nbc_UserAdvManager"
	  	LIMIT 1
	  	;';
		
		pwg_query($query);
		
		array_push($page['infos'], l10n('UserAdvManager_save_config'));
  }

  if (isset($_POST['PasswordTest']) and !is_adviser() and isset($_POST['UserAdvManager_Password_Test']) and !empty($_POST['UserAdvManager_Password_Test']))
  {
    $UserAdvManager_Password_Test_Score = testpassword($_POST['UserAdvManager_Password_Test']);
  }
  else if (isset($_POST['PasswordTest']) and !is_adviser() and empty($_POST['UserAdvManager_Password_Test']))
  {
    array_push($page['errors'], l10n('reg_err_login3'));
  }
	
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
	
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
	
  while ($row = mysql_fetch_array($result))
  {
    $groups[$row['id']] = $row['name'];
/* configuration value for unvalidated users */
    if (isset($conf_nbc_UserAdvManager[3]) and $conf_nbc_UserAdvManager[3] == $row['id'])
    {
	  	$No_Valid = $row['id'];
		}
/* configuration value for validated users */
    if (isset($conf_nbc_UserAdvManager[4]) and $conf_nbc_UserAdvManager[4] == $row['id'])
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
	  if (isset($conf_nbc_UserAdvManager[9]) and $conf_nbc_UserAdvManager[9] == $status)
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
	  if (isset($conf_nbc_UserAdvManager[5]) and $conf_nbc_UserAdvManager[5] == $status)
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
	
  $template->assign(
    array(
		'UserAdvManager_MAIL_INFO_TRUE'           => $conf_nbc_UserAdvManager[0]=='true' ?  'checked="checked"' : '' ,
		'UserAdvManager_MAIL_INFO_FALSE'          => $conf_nbc_UserAdvManager[0]=='false' ?  'checked="checked"' : '' ,
		'UserAdvManager_MAILINFO_TEXT'            => $conf_nbc_UserAdvManager[10],
		'UserAdvManager_NO_CASSE_TRUE'            => $conf_nbc_UserAdvManager[1]=='true' ?  'checked="checked"' : '' ,
		'UserAdvManager_NO_CASSE_FALSE'           => $conf_nbc_UserAdvManager[1]=='false' ?  'checked="checked"' : '' ,
		'UserAdvManager_USERNAME_CHAR_TRUE'       => $conf_nbc_UserAdvManager[7]=='true' ?  'checked="checked"' : '' ,
		'UserAdvManager_USERNAME_CHAR_FALSE'      => $conf_nbc_UserAdvManager[7]=='false' ?  'checked="checked"' : '' ,
		'UserAdvManager_USERNAME_CHAR_LIST'       => $conf_nbc_UserAdvManager[8],
		'UserAdvManager_CONFIRM_MAIL_TRUE'        => $conf_nbc_UserAdvManager[2]=='true' ?  'checked="checked"' : '' ,
		'UserAdvManager_CONFIRM_MAIL_FALSE'       => $conf_nbc_UserAdvManager[2]=='false' ?  'checked="checked"' : '' ,
		'UserAdvManager_CONFIRMMAIL_TEXT'         => $conf_nbc_UserAdvManager[11],
		'UserAdvManager_No_Confirm_Group'         => $conf_nbc_UserAdvManager[3],
		'UserAdvManager_Validated_Group'          => $conf_nbc_UserAdvManager[4],
		'UserAdvManager_No_Confirm_Status'        => $conf_nbc_UserAdvManager[9],
		'UserAdvManager_Validated_Status'         => $conf_nbc_UserAdvManager[5],
		'UserAdvManager_NO_COMMENT_ANO_TRUE'      => $conf_nbc_UserAdvManager[6]=='true' ?  'checked="checked"' : '' ,
		'UserAdvManager_NO_COMMENT_ANO_FALSE'     => $conf_nbc_UserAdvManager[6]=='false' ?  'checked="checked"' : '' ,
		'UserAdvManager_MAILEXCLUSION_TRUE'       => $conf_nbc_UserAdvManager[12]=='true' ?  'checked="checked"' : '' ,
		'UserAdvManager_MAILEXCLUSION_FALSE'      => $conf_nbc_UserAdvManager[12]=='false' ?  'checked="checked"' : '' ,
		'UserAdvManager_MAILEXCLUSION_LIST'       => $conf_nbc_UserAdvManager[13],
		'UserAdvManager_PASSWORDENF_TRUE'         => $conf_nbc_UserAdvManager[14]=='true' ?  'checked="checked"' : '' ,
		'UserAdvManager_PASSWORDENF_FALSE'        => $conf_nbc_UserAdvManager[14]=='false' ?  'checked="checked"' : '' ,
		'UserAdvManager_PASSWORD_SCORE'           => $conf_nbc_UserAdvManager[15],
    'UserAdvManager_ADMINPASSWENF_TRUE'       => $conf_nbc_UserAdvManager[16]=='true' ?  'checked="checked"' : '' ,
		'UserAdvManager_ADMINPASSWENF_FALSE'      => $conf_nbc_UserAdvManager[16]=='false' ?  'checked="checked"' : '' ,
    'UserAdvManager_GHOSTRACKER_TRUE'         => $conf_nbc_UserAdvManager[17]=='true' ?  'checked="checked"' : '' ,
		'UserAdvManager_GHOSTRACKER_FALSE'        => $conf_nbc_UserAdvManager[17]=='false' ?  'checked="checked"' : '' ,
    'UserAdvManager_GHOSTRACKER_DAYLIMIT'     => $conf_nbc_UserAdvManager[18],
    'UserAdvManager_GHOSTRACKER_REMINDERTEXT' => $conf_nbc_UserAdvManager[19],
		'UserAdvManager_PASSWORD_TEST_SCORE'      => $UserAdvManager_Password_Test_Score,
    )
  );
	

  if (isset($_POST['audit']))
	{
		$msg_error1 = '';
		
/* username insensible a la casse */
    if (isset($conf_nbc_UserAdvManager[3]) and $conf_nbc_UserAdvManager[3] == 'true')
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
			
		  while($row = mysql_fetch_array($result))
	  	{
				$msg_error1 .= (($msg_error1 <> '') ? '<br/>' : '') . l10n('Err_audit_no_casse').$row['username'];
			}
		}

		$msg_error2 = '';
		
/* Username without forbidden keys */
    if ( isset($conf_nbc_UserAdvManager[7]) and $conf_nbc_UserAdvManager[7] == 'true' )
	  {
			$query = "
SELECT ".$conf['user_fields']['username'].", ".$conf['user_fields']['email']."
  FROM ".USERS_TABLE."
;";
			  
			$result = pwg_query($query);
			
			while($row = mysql_fetch_array($result))
			{
				if (!ValidateUsername($row['username']))
					$msg_error2 .= (($msg_error2 <> '') ? '<br/>' : '') . l10n('Err_audit_username_char').$row['username'];
			}
		}

		$msg_error3 = '';
		
/* Email without forbidden domain */
    if ( isset($conf_nbc_UserAdvManager[12]) and $conf_nbc_UserAdvManager[12] == 'true' )
	  {
			$query = "
SELECT ".$conf['user_fields']['username'].", ".$conf['user_fields']['email']."
  FROM ".USERS_TABLE."
;";
			  
		  $result = pwg_query($query);
			
		  while($row = mysql_fetch_array($result))
		  {
				$conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
			  $conf_nbc_MailExclusion = preg_split('/,/',$conf_nbc_UserAdvManager[13]);
			  for ($i = 0 ; $i < count($conf_nbc_MailExclusion) ; $i++)
			  {
					$pattern = '/'.$conf_nbc_MailExclusion[$i].'/';
				  if (preg_match($pattern, $row['mail_address']))
				  {
						$msg_error3 .=  (($msg_error3 <> '') ? '<br/>' : '') . l10n('Err_audit_email_forbidden').$row['username'].' ('.$row['mail_address'].')';
					}
				}
			}
		}
		
    if ($msg_error1 <> '')
			$errors[] = $msg_error1.'<br/><br/>';
		
		if ($msg_error2 <> '')
			$errors[] = $msg_error2.'<br/><br/>';
		
		if ($msg_error3 <> '')
	  	$errors[] = $msg_error3.'<br/><br/>';
		
		if ($msg_error1 <> '' or $msg_error2 <> '' or $msg_error3 <> '')
	  	array_push($page['errors'], l10n('Err_audit_advise'));
		else
    	array_push($page['infos'], l10n('UserAdvManager_audit_ok'));
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
  $template->set_filename('plugin_admin_content', dirname(__FILE__) . '/global.tpl');
  $template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');

  break;

// *************************************************************************
// +-----------------------------------------------------------------------+
// |                           ConfirmMail Config                          |
// +-----------------------------------------------------------------------+
// *************************************************************************
  case 'confirmmail':
	
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
	
  if (isset($conf_nbc_UserAdvManager[2]) and $conf_nbc_UserAdvManager[2]=='true')
  {
    if ( isset($_POST['submit']) and !is_adviser() and isset($_POST['UserAdvManager_ConfirmMail_TimeOut']) )
		{
	  	$_POST['UserAdvManager_ConfirmMail_ReMail_Txt1'] = str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UserAdvManager_ConfirmMail_ReMail_Txt1']));
	  	$_POST['UserAdvManager_ConfirmMail_ReMail_Txt2'] = str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UserAdvManager_ConfirmMail_ReMail_Txt2']));
   		  
	  	$newconf_nbc_UserAdvManager_ConfirmMail = $_POST['UserAdvManager_ConfirmMail_TimeOut'].';'.$_POST['UserAdvManager_ConfirmMail_Delay'].';'.$_POST['UserAdvManager_ConfirmMail_ReMail_Txt1'].';'.$_POST['UserAdvManager_ConfirmMail_Remail'].';'.$_POST['UserAdvManager_ConfirmMail_ReMail_Txt2'];
		  
//NODO:Adding new option [Auto deletion : True | False] - No access to cron functionnalities

	  	$conf['nbc_UserAdvManager_ConfirmMail'] = $newconf_nbc_UserAdvManager_ConfirmMail;
		
	  	$query = '
	    	UPDATE '.CONFIG_TABLE.'
				SET value="'.$newconf_nbc_UserAdvManager_ConfirmMail.'"
				WHERE param="nbc_UserAdvManager_ConfirmMail"
				LIMIT 1
			;';
		
			pwg_query($query);
		
			array_push($page['infos'], l10n('UserAdvManager_save_config'));
		}
	
		$conf_nbc_UserAdvManager_ConfirmMail = isset($conf['nbc_UserAdvManager_ConfirmMail']) ? explode(";" , $conf['nbc_UserAdvManager_ConfirmMail']) : array();		

	  $template->assign(
	  array(
		'UserAdvManager_CONFIRMMAIL_TIMEOUT_TRUE'		=> $conf_nbc_UserAdvManager_ConfirmMail[0]=='true' ?  'checked="checked"' : '' ,
		'UserAdvManager_CONFIRMMAIL_TIMEOUT_FALSE'	=> $conf_nbc_UserAdvManager_ConfirmMail[0]=='false' ?  'checked="checked"' : '' ,
		'UserAdvManager_CONFIRMMAIL_DELAY'					=> $conf_nbc_UserAdvManager_ConfirmMail[1],
    'UserAdvManager_CONFIRMMAIL_REMAIL_TRUE'		=> $conf_nbc_UserAdvManager_ConfirmMail[3]=='true' ? 'checked="checked"' : '',
    'UserAdvManager_CONFIRMMAIL_REMAIL_FALSE'		=> $conf_nbc_UserAdvManager_ConfirmMail[3]=='false' ? 'checked="checked"' : '',
    'UserAdvManager_CONFIRMMAIL_REMAIL_TXT1'		=> $conf_nbc_UserAdvManager_ConfirmMail[2],
    'UserAdvManager_CONFIRMMAIL_REMAIL_TXT2'		=> $conf_nbc_UserAdvManager_ConfirmMail[4],
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
		$template->set_filename('plugin_admin_content', dirname(__FILE__) . '/confirmmail.tpl');
    $template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');		
  }
  else
  {
		array_push($page['infos'], l10n('Err_ConfirmMail_Settings'));
  }
  break;


// *************************************************************************
// +-----------------------------------------------------------------------+
// |                           Users manager page                          |
// +-----------------------------------------------------------------------+
// *************************************************************************
  case 'usermanager':
  
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
  $conf_nbc_UserAdvManager_ConfirmMail = isset($conf['nbc_UserAdvManager_ConfirmMail']) ? explode(";" , $conf['nbc_UserAdvManager_ConfirmMail']) : array();
	
  if (isset($conf_nbc_UserAdvManager[2]) and $conf_nbc_UserAdvManager[2]=='true' and ((isset($conf_nbc_UserAdvManager[3]) and $conf_nbc_UserAdvManager[3] <> '-1') or (isset($conf_nbc_UserAdvManager[9]) and $conf_nbc_UserAdvManager[9] <> '-1')) and isset($conf_nbc_UserAdvManager_ConfirmMail[0]) and $conf_nbc_UserAdvManager_ConfirmMail[0]=='true')
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

    $page['order_by_items'] = array(
      'id' => l10n('registration_date'),
      'username' => l10n('Username'),
      'level' => l10n('Privacy level'),
      'language' => l10n('language'),
    );

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
					$data = mysql_fetch_array(pwg_query($query));
				
      		ResendMail2User($typemail,$user_id,$data['username'],$data['mail_address'],true);
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
					
					$data = mysql_fetch_array(pwg_query($query));
				
      		ResendMail2User($typemail,$user_id,$data['username'],$data['mail_address'],false);				
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
					
					$data = mysql_fetch_array(pwg_query($query));
				
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
          
    while ($row = mysql_fetch_array($result))
    {
      $groups[$row['id']] = $row['name'];
    }

// +-----------------------------------------------------------------------+
// |                           Template Init                               |
// +-----------------------------------------------------------------------+
		$base_url = PHPWG_ROOT_PATH.'admin.php?page=user_list';

    if (isset($_GET['start']) and is_numeric($_GET['start']))
    {
      $start = $_GET['start'];
    }
    else
    {
      $start = 0;
    }

    $template->assign(
      array(
        'F_ADD_ACTION' => $base_url,
        'F_USERNAME' => @htmlentities($_GET['username']),
        'F_FILTER_ACTION' => get_root_url().'admin.php'
        )
   	  );

/* Hide radio-button if not allow to assign adviser */
		if ($conf['allow_adviser'])
    	{
      	$template->assign('adviser', true);
    	}
	
// +-----------------------------------------------------------------------+
// |                               user list                               |
// +-----------------------------------------------------------------------+

		$profile_url = get_root_url().'admin.php?page=profile&amp;user_id=';
		$perm_url = get_root_url().'admin.php?page=user_perm&amp;user_id=';

    $visible_user_list = array();
    foreach ($page['filtered_users'] as $num => $local_user)
    {
/* simulate LIMIT $start, $conf['users_page'] */
			if ($num < $start)
      {
        continue;
      }
      if ($num >= $start + $conf['users_page'])
      {
        break;
      }

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
       		'ID' => $local_user['id'],
         	'CHECKED' => $checked,
         	'U_PROFILE' => $profile_url.$local_user['id'],
         	'U_PERM' => $perm_url.$local_user['id'],
         	'USERNAME' => $local_user['username']
						.($local_user['id'] == $conf['guest_id']
						? '<BR />['.l10n('is_the_guest').']' : '')
           	.($local_user['id'] == $conf['default_user_id']
           	? '<BR />['.l10n('is_the_default').']' : ''),
					'STATUS' => l10n('user_status_'.
						$local_user['status']).(($local_user['adviser'] == 'true')
           	? '<BR />['.l10n('adviser').']' : ''),
					'EMAIL' => get_email_address_as_display_text($local_user['email']),
         	'GROUPS' => $groups_string,
         	'REGISTRATION' => $local_user['registration_date'],
         	'EXPIRATION' => $expiration,
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
		$template->set_filename('plugin_admin_content', dirname(__FILE__) . '/usermanager.tpl');
    $template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');		
	}
  else
  {
		array_push($page['infos'], l10n('Err_UserManager_Settings'));
  }
  break;


// *************************************************************************
// +-----------------------------------------------------------------------+
// |                           Ghost Tracker page                          |
// +-----------------------------------------------------------------------+
// *************************************************************************
  case 'ghosttracker':
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
	
  if (isset($conf_nbc_UserAdvManager[17]) and $conf_nbc_UserAdvManager[17]=='true')
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

    $page['order_by_items'] = array(
      'id' => l10n('registration_date'),
      'username' => l10n('Username'),
      'level' => l10n('Privacy level'),
      'language' => l10n('language'),
    );

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
					
					$data = mysql_fetch_array(pwg_query($query));
				
      		ghostreminder($user_id,$data['username'],$data['mail_address']);				
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

        $count = mysql_num_rows(pwg_query($query1));

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
          
          while ($row = mysql_fetch_array($result))
          {
            list($dbnow) = mysql_fetch_row(pwg_query('SELECT NOW();'));
            
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
          
          while($row = mysql_fetch_array($result))
          {
            list($dbnow) = mysql_fetch_row(pwg_query('SELECT NOW();'));
            
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
		$base_url = PHPWG_ROOT_PATH.'admin.php?page=user_list';

    if (isset($_GET['start']) and is_numeric($_GET['start']))
    {
      $start = $_GET['start'];
    }
    else
    {
      $start = 0;
    }

    $template->assign(
      array(
        'F_ADD_ACTION' => $base_url,
        'F_USERNAME' => @htmlentities($_GET['username']),
        'F_FILTER_ACTION' => get_root_url().'admin.php'
        )
   	  );

/* Hide radio-button if not allow to assign adviser */
		if ($conf['allow_adviser'])
    	{
      	$template->assign('adviser', true);
    	}

	
// +-----------------------------------------------------------------------+
// |                               user list                               |
// +-----------------------------------------------------------------------+

    $visible_user_list = array();
    foreach ($page['filtered_users'] as $num => $local_user)
    {
/* simulate LIMIT $start, $conf['users_page'] */
			if ($num < $start)
      {
        continue;
      }
      if ($num >= $start + $conf['users_page'])
      {
        break;
      }

      $visible_user_list[] = $local_user;
		}

    $reminder = '';
    if (isset($local_user['reminder']) and $local_user['reminder'] == 'true')
    {
      $reminder = l10n('Reminder_Sent_OK');
    }
    else if (isset($local_user['reminder']) and $local_user['reminder'] == 'false')
    {
      $reminder = l10n('Reminder_Sent_NOK');
    }

		foreach ($visible_user_list as $local_user)
    {
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

   		$template->append(
     		'users',
       	array(
       		'ID' => $local_user['id'],
         	'CHECKED' => $checked,
         	'USERNAME' => $local_user['username']
						.($local_user['id'] == $conf['guest_id']
						? '<BR />['.l10n('is_the_guest').']' : '')
           	.($local_user['id'] == $conf['default_user_id']
           	? '<BR />['.l10n('is_the_default').']' : ''),
					'EMAIL' => get_email_address_as_display_text($local_user['email']),
          'LASTVISIT' => $local_user['lastvisit'],
          'REMINDER' => $reminder,
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
		$template->set_filename('plugin_admin_content', dirname(__FILE__) . '/ghosttracker.tpl');
    $template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');		
	}
  else
  {
		array_push($page['infos'], l10n('Err_GhostTracker_Settings'));
  }
  break;
}
?>