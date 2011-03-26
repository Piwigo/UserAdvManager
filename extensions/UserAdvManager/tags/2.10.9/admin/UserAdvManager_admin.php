<?php

global $user, $lang, $conf, $errors;

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+
check_status(ACCESS_ADMINISTRATOR);

load_language('plugin.lang', NBC_UserAdvManager_PATH);

$error = array();

if ( isset($_POST['submit']) and !is_adviser() and isset($_POST['UserAdvManager_Mail_Info']) and isset($_POST['UserAdvManager_No_Casse']) and isset($_POST['UserAdvManager_Username_Char']) and isset($_POST['UserAdvManager_Confirm_Mail']) and isset($_POST['UserAdvManager_No_Comment_Anonymous']) )
{
  $_POST['UserAdvManager_MailInfo_Text'] = str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UserAdvManager_MailInfo_Text']));
  $_POST['UserAdvManager_ConfirmMail_Text'] = str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UserAdvManager_ConfirmMail_Text']));

    $newconf_nbc_UserAdvManager = $_POST['UserAdvManager_Mail_Info'].';'.$_POST['UserAdvManager_No_Casse'].';'.$_POST['UserAdvManager_Confirm_Mail'].';'.(isset($_POST['UserAdvManager_No_Confirm_Group'])?$_POST['UserAdvManager_No_Confirm_Group']:'').';'.(isset($_POST['UserAdvManager_Validated_Group'])?$_POST['UserAdvManager_Validated_Group']:'').';'.(isset($_POST['UserAdvManager_Validated_Status'])?$_POST['UserAdvManager_Validated_Status']:'').';'.$_POST['UserAdvManager_No_Comment_Anonymous'].';'.$_POST['UserAdvManager_Username_Char'].';'.$_POST['UserAdvManager_Username_List'].';'.(isset($_POST['UserAdvManager_No_Confirm_Status'])?$_POST['UserAdvManager_No_Confirm_Status']:'').';'.$_POST['UserAdvManager_MailInfo_Text'].';'.$_POST['UserAdvManager_ConfirmMail_Text'].';'.$_POST['UserAdvManager_MailExclusion'].';'.$_POST['UserAdvManager_MailExclusion_List'];

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
      ));
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
      ));
}


$template->assign(
  array(
    'UserAdvManager_MAIL_INFO_TRUE'       => $conf_nbc_UserAdvManager[0]=='true' ?  'checked="checked"' : '' ,
    'UserAdvManager_MAIL_INFO_FALSE'      => $conf_nbc_UserAdvManager[0]=='false' ?  'checked="checked"' : '' ,
    'UserAdvManager_MAILINFO_TEXT'        => $conf_nbc_UserAdvManager[10],
    'UserAdvManager_NO_CASSE_TRUE'        => $conf_nbc_UserAdvManager[1]=='true' ?  'checked="checked"' : '' ,
    'UserAdvManager_NO_CASSE_FALSE'       => $conf_nbc_UserAdvManager[1]=='false' ?  'checked="checked"' : '' ,
    'UserAdvManager_USERNAME_CHAR_TRUE'   => $conf_nbc_UserAdvManager[7]=='true' ?  'checked="checked"' : '' ,
    'UserAdvManager_USERNAME_CHAR_FALSE'  => $conf_nbc_UserAdvManager[7]=='false' ?  'checked="checked"' : '' ,
    'UserAdvManager_USERNAME_CHAR_LIST'   => $conf_nbc_UserAdvManager[8],
    'UserAdvManager_CONFIRM_MAIL_TRUE'    => $conf_nbc_UserAdvManager[2]=='true' ?  'checked="checked"' : '' ,
    'UserAdvManager_CONFIRM_MAIL_FALSE'   => $conf_nbc_UserAdvManager[2]=='false' ?  'checked="checked"' : '' ,
    'UserAdvManager_CONFIRMMAIL_TEXT'     => $conf_nbc_UserAdvManager[11],
    'UserAdvManager_No_Confirm_Group'     => $conf_nbc_UserAdvManager[3],
    'UserAdvManager_Validated_Group'      => $conf_nbc_UserAdvManager[4],
    'UserAdvManager_No_Confirm_Status'    => $conf_nbc_UserAdvManager[9],
    'UserAdvManager_Validated_Status'     => $conf_nbc_UserAdvManager[5],
    'UserAdvManager_NO_COMMENT_ANO_TRUE'  => $conf_nbc_UserAdvManager[6]=='true' ?  'checked="checked"' : '' ,
    'UserAdvManager_NO_COMMENT_ANO_FALSE' => $conf_nbc_UserAdvManager[6]=='false' ?  'checked="checked"' : '' ,
    'UserAdvManager_MAILEXCLUSION_TRUE'   => $conf_nbc_UserAdvManager[12]=='true' ?  'checked="checked"' : '' ,
    'UserAdvManager_MAILEXCLUSION_FALSE'  => $conf_nbc_UserAdvManager[12]=='false' ?  'checked="checked"' : '' ,
    'UserAdvManager_MAILEXCLUSION_LIST'   => $conf_nbc_UserAdvManager[13],
  )
);


if ( isset($_POST['audit']) or isset($_POST['submit']) )
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
      if ( !ValidateUsername($row['username']) )
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
if ( isset ($errors) and count($errors) != 0)
{
  $template->assign('errors',array());
  foreach ($errors as $error)
  {
  	array_push($page['errors'], $error);
  }
}

$template->set_filenames(array('plugin_admin_content' => dirname(__FILE__) . '/UserAdvManager_admin.tpl'));
$template->assign_var_from_handle( 'ADMIN_CONTENT', 'plugin_admin_content');
?>