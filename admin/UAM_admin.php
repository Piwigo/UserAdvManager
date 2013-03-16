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

load_language('plugin.lang', UAM_PATH);
load_language('help.lang', UAM_PATH);


// +-----------------------------------------------------------------------+
// |                   Variables initialization                            |
// +-----------------------------------------------------------------------+
$my_base_url = get_admin_plugin_menu_link(__FILE__);

$page['global'] = array();
$error = array();
$pattern = '/;/';
$replacement = '.';

$UAM_Password_Test_Score = 0;
$UAM_Exclusionlist_Error = false;
$UAM_Illegal_Flag_Error1 = false;
$UAM_Illegal_Flag_Error2 = false;
$UAM_Illegal_Flag_Error3 = false;
$UAM_Email_Mandatory_Check = false;

$dump_download = '';

// +-----------------------------------------------------------------------+
// |                            Tabssheet                                  |
// +-----------------------------------------------------------------------+
if (!isset($_GET['tab']))
	$page['tab'] = 'global';
else
 $page['tab'] = $_GET['tab'];

$tabsheet = new tabsheet();
$tabsheet->add('global',
               l10n('UAM_Tab_Global'),
               $my_base_url.'&amp;tab=global');
$tabsheet->add('userlist',
               l10n('UAM_Tracking registered users'),
               $my_base_url.'&amp;tab=userlist');
$tabsheet->add('usermanager',
               l10n('UAM_Tracking confirmations'),
               $my_base_url.'&amp;tab=usermanager');
$tabsheet->add('ghosttracker',
               l10n('UAM_Tab_GhostTracker'),
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
$toolbar = 'Basic';
$width = '750px';
$height = '300px';
$areas = array();
array_push( $areas,'UAM_ConfirmMail_Custom_Txt1','UAM_ConfirmMail_Custom_Txt2','UAM_GTAutoDelText','UAM_USRAutoDelText','UAM_CustomRejectConnexion_Text');

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

  if (isset($_POST['submit']) and isset($_POST['UAM_Mail_Info']) and isset($_POST['UAM_Username_Char']) and isset($_POST['UAM_Confirm_Mail']) and isset($_POST['UAM_Password_Enforced']) and isset($_POST['UAM_AdminPassword_Enforced']) and isset($_POST['UAM_GhostUser_Tracker']) and isset($_POST['UAM_Admin_ConfMail']) and isset($_POST['UAM_RedirToProfile']) and isset($_POST['UAM_GTAuto']) and isset($_POST['UAM_GTAutoMail']) and isset($_POST['UAM_CustomPasswRetr']) and isset($_POST['UAM_USRAuto']) and isset($_POST['UAM_USRAutoMail']) and isset($_POST['UAM_Stuffs']) and isset($_POST['UAM_HidePassw']) and isset($_POST['UAM_PwdReset']) and isset($_POST['UAM_RejectConnexion']))
  {

  // Render email contents fields
  // ----------------------------
    $_POST['UAM_MailInfo_Text'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_MailInfo_Text'])));

    $_POST['UAM_ConfirmMail_Text'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_ConfirmMail_Text'])));

    $_POST['UAM_GhostTracker_ReminderText'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_GhostTracker_ReminderText'])));

    $_POST['UAM_GTAutoDelText'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_GTAutoDelText'])));

    $_POST['UAM_GTAutoMailText'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_GTAutoMailText'])));

    $_POST['UAM_AdminValidationMail_Text'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_AdminValidationMail_Text'])));

    $_POST['UAM_CustomPasswRetr_Text'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_CustomPasswRetr_Text'])));

    $_POST['UAM_USRAutoDelText'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_GTAutoDelText'])));

    $_POST['UAM_CustomRejectConnexion_Text'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_CustomRejectConnexion_Text'])));

  // Render email subjects fields
  // ---------------------------
    $_POST['UAM_ConfirmMail_Subject'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_ConfirmMail_Subject'])));

    $_POST['UAM_ConfirmMail_Remail_Subject'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_ConfirmMail_Remail_Subject'])));

    $_POST['UAM_InfoMail_Subject'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_InfoMail_Subject'])));

    $_POST['UAM_GTAutoMail_Subject'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_GTAutoMail_Subject'])));

    $_POST['UAM_GTReminder_Subject'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_GTReminder_Subject'])));

    $_POST['UAM_AdminValidationMail_Subject'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_AdminValidationMail_Subject'])));


  // Check if emails are mandatory for registrations (needed for email exclusion option)
	// -----------------------------------------------------------------------------------
    if ($conf['obligatory_user_mail_address'])
    {
      // Check if CR-LF exist at begining and end of mail exclusion list - If yes, removes them
      // --------------------------------------------------------------------------------------
      if (preg_match('/^[\s]+/', $_POST['UAM_MailExclusion_List']))
      {
        array_push($page['errors'], l10n('UAM_mail_exclusionlist_error'));
        $UAM_Exclusionlist_Error = true;
      }
    }
    elseif (!$conf['obligatory_user_mail_address'])
    {
      $_POST['UAM_MailExclusion_List'] = '';
    }

    // Consistency check between ConfirmMail and AutoMail - We cannot use GTAutoMail if ConfirmMail is disabled
    // ---------------------------------------------------------------------------------------------------------
    $conf_UAM = unserialize($conf['UserAdvManager']);
    $conf_UAM_ConfirmMail = unserialize($conf['UserAdvManager_ConfirmMail']);
    
    if (((isset($conf_UAM['1']) and ($conf_UAM['1'] == 'false' or $conf_UAM['1'] == 'local')) or ($_POST['UAM_Confirm_Mail'] == 'false' or $_POST['UAM_Confirm_Mail'] == 'local')) and $_POST['UAM_GTAutoMail'] == 'true')
    {
      $newvalue = 'false';
      $_POST['UAM_GTAutoMail'] = $newvalue;
      array_push($page['errors'], l10n('UAM_Error_GTAutoMail_cannot_be_set_without_ConfirmMail'));
    }

    // Check if [Kdays] flag is used in a legal way (ConfirmMail Time out have to be set)
    // ----------------------------------------------------------------------------------
    if (isset($conf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT']) and $conf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT'] == 'false' and preg_match('#\[Kdays\]#i',$_POST['UAM_ConfirmMail_Text']) != 0)
    {
      $UAM_Illegal_Flag_Error1 = true;
      array_push($page['errors'], l10n('UAM_Error_Using_illegal_Kdays'));
    }

    // Save global UAM configuration
    // -----------------------------
    $newconf_UAM['MAIL_INFO'] = (isset($_POST['UAM_Mail_Info']) ? $_POST['UAM_Mail_Info'] : 'false');
    $newconf_UAM['CONFIRM_MAIL'] = (isset($_POST['UAM_Confirm_Mail']) ? $_POST['UAM_Confirm_Mail'] : 'false');
    $newconf_UAM['NO_CONFIRM_GROUP'] = (isset($_POST['UAM_No_Confirm_Group']) ? $_POST['UAM_No_Confirm_Group'] : '');
    $newconf_UAM['VALIDATED_GROUP'] = (isset($_POST['UAM_Validated_Group']) ? $_POST['UAM_Validated_Group'] : '');
    $newconf_UAM['VALIDATED_STATUS'] = (isset($_POST['UAM_Validated_Status'])?$_POST['UAM_Validated_Status'] : '');
    $newconf_UAM['USERNAME_CHAR'] = $_POST['UAM_Username_Char'];
    $newconf_UAM['USERNAME_CHAR_LIST'] = (isset($_POST['UAM_Username_List']) ? $_POST['UAM_Username_List'] : '');
    $newconf_UAM['NO_CONFIRM_STATUS'] = (isset($_POST['UAM_No_Confirm_Status']) ? $_POST['UAM_No_Confirm_Status'] : '');
    $newconf_UAM['MAILINFO_TEXT'] = (isset($_POST['UAM_MailInfo_Text']) ? $_POST['UAM_MailInfo_Text'] : l10n('UAM_Default_InfoMail_Txt'));
    $newconf_UAM['CONFIRMMAIL_TEXT'] = (isset($_POST['UAM_ConfirmMail_Text']) ? $_POST['UAM_ConfirmMail_Text'] : l10n('UAM_Default_ConfirmMail_Txt'));
    $newconf_UAM['MAILEXCLUSION'] = (isset($_POST['UAM_MailExclusion']) ? $_POST['UAM_MailExclusion'] : 'false');
    $newconf_UAM['MAILEXCLUSION_LIST'] = (isset($_POST['UAM_MailExclusion_List']) ? $_POST['UAM_MailExclusion_List'] : '');
    $newconf_UAM['PASSWORDENF'] = (isset($_POST['UAM_Password_Enforced']) ? $_POST['UAM_Password_Enforced'] : 'false');
    $newconf_UAM['PASSWORD_SCORE'] = (isset($_POST['UAM_Password_Score']) ? $_POST['UAM_Password_Score'] : '100');
    $newconf_UAM['ADMINPASSWENF'] = (isset($_POST['UAM_AdminPassword_Enforced']) ? $_POST['UAM_AdminPassword_Enforced'] : 'false');
    $newconf_UAM['GHOSTRACKER'] = (isset($_POST['UAM_GhostUser_Tracker']) ? $_POST['UAM_GhostUser_Tracker'] : 'false');
    $newconf_UAM['GHOSTRACKER_DAYLIMIT'] = (isset($_POST['UAM_GhostTracker_DayLimit']) ? $_POST['UAM_GhostTracker_DayLimit'] : '10');
    $newconf_UAM['GHOSTRACKER_REMINDERTEXT'] = (isset($_POST['UAM_GhostTracker_ReminderText']) ? $_POST['UAM_GhostTracker_ReminderText'] : l10n('UAM_Default_GhstReminder_Txt'));
    $newconf_UAM['ADDLASTVISIT'] = (isset($_POST['UAM_Add_LastVisit_Column']) ? $_POST['UAM_Add_LastVisit_Column'] : 'false');
    $newconf_UAM['ADMINCONFMAIL'] = (isset($_POST['UAM_Admin_ConfMail']) ? $_POST['UAM_Admin_ConfMail'] : 'false');
    $newconf_UAM['REDIRTOPROFILE'] = (isset($_POST['UAM_RedirToProfile']) ? $_POST['UAM_RedirToProfile'] : 'false');
    $newconf_UAM['GTAUTO'] = (isset($_POST['UAM_GTAuto']) ? $_POST['UAM_GTAuto'] : 'false');
    $newconf_UAM['GTAUTOMAIL'] = (isset($_POST['UAM_GTAutoMail']) ? $_POST['UAM_GTAutoMail'] : 'false');
    $newconf_UAM['GTAUTODEL'] = (isset($_POST['UAM_GTAutoDelText']) ? $_POST['UAM_GTAutoDelText'] : l10n('UAM_Default_GhstDeletion_Txt'));
    $newconf_UAM['GTAUTOMAILTEXT'] = (isset($_POST['UAM_GTAutoMailText']) ? $_POST['UAM_GTAutoMailText'] : l10n('UAM_Default_GhstDemotion_Txt'));
    $newconf_UAM['DOWNGRADE_GROUP'] = (isset($_POST['UAM_Downgrade_Group']) ? $_POST['UAM_Downgrade_Group'] : '');
    $newconf_UAM['DOWNGRADE_STATUS'] = (isset($_POST['UAM_Downgrade_Status']) ? $_POST['UAM_Downgrade_Status'] : '');
    $newconf_UAM['ADMINVALIDATIONMAIL'] = (isset($_POST['UAM_AdminValidationMail_Text']) ? $_POST['UAM_AdminValidationMail_Text'] : l10n('UAM_Default_AdminValidation_Txt'));
    $newconf_UAM['CUSTOMPASSWRETR'] = (isset($_POST['UAM_CustomPasswRetr']) ? $_POST['UAM_CustomPasswRetr'] : 'false');
    $newconf_UAM['CUSTOMPASSWRETR_TEXT'] = (isset($_POST['UAM_CustomPasswRetr_Text']) ? $_POST['UAM_CustomPasswRetr_Text'] : l10n('UAM_Default_PwdRequest_Txt'));
    $newconf_UAM['USRAUTO'] = (isset($_POST['UAM_USRAuto']) ? $_POST['UAM_USRAuto'] : 'false');
    $newconf_UAM['USRAUTODEL'] = (isset($_POST['UAM_USRAutoDelText']) ? $_POST['UAM_USRAutoDelText'] : l10n('UAM_Default_ValidationTimeout_Txt'));
    $newconf_UAM['USRAUTOMAIL'] = (isset($_POST['UAM_USRAutoMail']) ? $_POST['UAM_USRAutoMail'] : 'false');
    $newconf_UAM['STUFFS'] = (isset($_POST['UAM_Stuffs']) ? $_POST['UAM_Stuffs'] : 'false');
    $newconf_UAM['HIDEPASSW'] = (isset($_POST['UAM_HidePassw']) ? $_POST['UAM_HidePassw'] : 'false');
    $newconf_UAM['NO_VALID_LEVEL'] = (isset($_POST['UAM_No_Valid_Level']) ? $_POST['UAM_No_Valid_Level'] : '');
    $newconf_UAM['VALID_LEVEL'] = (isset($_POST['UAM_Valid_Level']) ? $_POST['UAM_Valid_Level'] : '');
    $newconf_UAM['DOWNGRADE_LEVEL'] = (isset($_POST['UAM_Downgrade_Level']) ? $_POST['UAM_Downgrade_Level'] : '');
    $newconf_UAM['PWDRESET'] = (isset($_POST['UAM_PwdReset']) ? $_POST['UAM_PwdReset'] : 'false');
    $newconf_UAM['REJECTCONNECT'] = (isset($_POST['UAM_RejectConnexion']) ? $_POST['UAM_RejectConnexion'] : 'false');
    $newconf_UAM['REJECTCONNECT_TEXT'] = (isset($_POST['UAM_CustomRejectConnexion_Text']) ? $_POST['UAM_CustomRejectConnexion_Text'] : l10n('UAM_Default_RejectConnexion_Txt'));
    $newconf_UAM['CONFIRMMAIL_SUBJECT'] = (isset($_POST['UAM_ConfirmMail_Subject']) ? $_POST['UAM_ConfirmMail_Subject'] : l10n('UAM_Default_ConfirmMail_Subject'));
    $newconf_UAM['CONFIRMMAIL_REMAIL_SUBJECT'] = (isset($_POST['UAM_ConfirmMail_Remail_Subject']) ? $_POST['UAM_ConfirmMail_Remail_Subject'] : l10n('UAM_Default_ConfirmMail_Remail_Subject'));
    $newconf_UAM['INFOMAIL_SUBJECT'] = (isset($_POST['UAM_InfoMail_Subject']) ? $_POST['UAM_InfoMail_Subject'] : l10n('UAM_Default_InfoMail_Subject'));
    $newconf_UAM['GTAUTOMAIL_SUBJECT'] = (isset($_POST['UAM_GTAutoMail_Subject']) ? $_POST['UAM_GTAutoMail_Subject'] : l10n('UAM_Default_GTAutoMail_Subject'));
    $newconf_UAM['GTREMINDER_SUBJECT'] = (isset($_POST['UAM_GTReminder_Subject']) ? $_POST['UAM_GTReminder_Subject'] : l10n('UAM_Default_GTReminder_Subject'));
    $newconf_UAM['ADMINVALIDATIONMAIL_SUBJECT'] = (isset($_POST['UAM_AdminValidationMail_Subject']) ? $_POST['UAM_AdminValidationMail_Subject'] : l10n('UAM_Default_AdminValidationMail_Subject'));

    $conf['UserAdvManager'] = serialize($newconf_UAM);

    conf_update_param('UserAdvManager', pwg_db_real_escape_string($conf['UserAdvManager'])); 

    // Email confirmation settings
    // --------------------------
    $_POST['UAM_ConfirmMail_ReMail_Txt1'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_ConfirmMail_ReMail_Txt1'])));

    $_POST['UAM_ConfirmMail_ReMail_Txt2'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_ConfirmMail_ReMail_Txt2'])));

    $_POST['UAM_ConfirmMail_Custom_Txt1'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_ConfirmMail_Custom_Txt1'])));

    $_POST['UAM_ConfirmMail_Custom_Txt2'] = str_replace('\"', '"', str_replace("\'", "'", str_replace("\\\\", "\\", $_POST['UAM_ConfirmMail_Custom_Txt2'])));

    // Check if [Kdays] flag is used in a legal way (ConfirmMail Time out have to be set)
    // ----------------------------------------------------------------------------------
    if (isset($conf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT']) and $conf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT'] == 'false' and preg_match('#\[Kdays\]#i',$_POST['UAM_ConfirmMail_ReMail_Txt1']) == 1)
    {
      $UAM_Illegal_Flag_Error2 = true;
      array_push($page['errors'], l10n('UAM_Error_Using_illegal_flag'));
    }
    elseif (isset($conf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT']) and $conf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT'] == 'false' and preg_match('#\[Kdays\]#i',$_POST['UAM_ConfirmMail_ReMail_Txt2']) == 1)
    {
      $UAM_Illegal_Flag_Error3 = true;
      array_push($page['errors'], l10n('UAM_Error_Using_illegal_flag'));
    }

    // Save ConfirmMail settings
    // -------------------------
    $newconf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT'] = (isset($_POST['UAM_ConfirmMail_TimeOut']) ? $_POST['UAM_ConfirmMail_TimeOut'] : 'false');
    $newconf_UAM_ConfirmMail['CONFIRMMAIL_DELAY'] = (isset($_POST['UAM_ConfirmMail_Delay']) ? $_POST['UAM_ConfirmMail_Delay'] : '5');
    $newconf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL_TXT1'] = (isset($_POST['UAM_ConfirmMail_ReMail_Txt1']) ? $_POST['UAM_ConfirmMail_ReMail_Txt1'] : l10n('UAM_Default_CfmMail_Remail_Txt1'));
    $newconf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL'] = (isset($_POST['UAM_ConfirmMail_Remail']) ? $_POST['UAM_ConfirmMail_Remail'] : 'false');
    $newconf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL_TXT2'] = (isset($_POST['UAM_ConfirmMail_ReMail_Txt2']) ? $_POST['UAM_ConfirmMail_ReMail_Txt2'] : l10n('UAM_Default_CfmMail_Remail_Txt2'));
    $newconf_UAM_ConfirmMail['CONFIRMMAIL_CUSTOM_TXT1'] = (isset($_POST['UAM_ConfirmMail_Custom_Txt1']) ? $_POST['UAM_ConfirmMail_Custom_Txt1'] : l10n('UAM_Default_CfmMail_Custom_Txt1'));
    $newconf_UAM_ConfirmMail['CONFIRMMAIL_CUSTOM_TXT2'] = (isset($_POST['UAM_ConfirmMail_Custom_Txt2']) ? $_POST['UAM_ConfirmMail_Custom_Txt2'] : l10n('UAM_Default_CfmMail_Custom_Txt2'));

    $conf['UserAdvManager_ConfirmMail'] = serialize($newconf_UAM_ConfirmMail);

    conf_update_param('UserAdvManager_ConfirmMail', pwg_db_real_escape_string($conf['UserAdvManager_ConfirmMail']));

    array_push($page['infos'], l10n('UAM_save_config'));
  }

  // Saving UAM tables and configuration settings
  // --------------------------------------------
  if (isset($_POST['save']))
  {
    $dump_download = (isset($_POST['dump_download'])) ? 'true' : 'false';
    
    if(UAM_dump($dump_download) and $dump_download == 'false')
    {
      array_push($page['infos'], l10n('UAM_Dump_OK'));
    }
    else
    {
      array_push($page['errors'], l10n('UAM_Dump_NOK'));
    }
  }

  // Restoring UAM tables and configuration settings
  // -----------------------------------------------
  if (isset($_POST['restore']))
  {
    $Backup_File = UAM_PATH.'/include/backup/UAM_dbbackup.sql';

    if (file_exists($Backup_File) and $file = file($Backup_File, FILE_IGNORE_NEW_LINES) and !empty($file))
    {
      // Check backup file version
      // -------------------------
      if ($file[0] == "-- ".$version." --")
      {
        $restore = UAM_Restore_backup_file();
        if(empty($restore))
        {
          array_push($page['infos'], l10n('UAM_Restoration_OK'));
        }
        else
        {
          array_push($page['errors'], l10n('UAM_Restoration_NOK'));
        }
      }
      else array_push($page['errors'], l10n('UAM_Bad_version_backup'));
    }
    else
    {
      array_push($page['errors'], l10n('UAM_No_Backup_File'));
    }
  }

  // Testing password enforcement
  // ----------------------------
  if (isset($_POST['PasswordTest']) and isset($_POST['UAM_Password_Test']) and !empty($_POST['UAM_Password_Test']))
  {
    $UAM_Password_Test_Score = testpassword($_POST['UAM_Password_Test']);
  }
  else if (isset($_POST['PasswordTest']) and empty($_POST['UAM_Password_Test']))
  {
    array_push($page['errors'], l10n('UAM_reg_err_login3'));
  }

  $conf_UAM = unserialize($conf['UserAdvManager']);

  // Group setting for unvalidated, validated users and downgrade group
  // ------------------------------------------------------------------
  $groups[-1] = '---------';
  $No_Valid = -1;
  $Valid = -1;
  $Downgrade = -1;
	
  // Get groups list in database
  // ---------------------------
  $query = '
SELECT id, name
FROM '.GROUPS_TABLE.'
ORDER BY name ASC
;';
	
  $result = pwg_query($query);
	
  while ($row = pwg_db_fetch_assoc($result))
  {
    $groups[$row['id']] = $row['name'];
    //configuration value for unvalidated users
    if (isset($conf_UAM['NO_CONFIRM_GROUP']) and $conf_UAM['NO_CONFIRM_GROUP'] == $row['id'])
    {
      $No_Valid = $row['id'];
    }
    //configuration value for validated users
    if (isset($conf_UAM['VALIDATED_GROUP']) and $conf_UAM['VALIDATED_GROUP'] == $row['id'])
    {
      $Valid = $row['id'];
    }
    //configuration value for downgrade users
    if (isset($conf_UAM['DOWNGRADE_GROUP']) and $conf_UAM['DOWNGRADE_GROUP'] == $row['id'])
    {
      $Downgrade = $row['id'];
    }
  }
	
  // Template initialization for unvalidated users group
  // ---------------------------------------------------
  $template->assign(
    'No_Confirm_Group',
      array(
        'group_options'=> $groups,
        'group_selected' => $No_Valid
      )
    );

  // Template initialization for validated users group
  // -------------------------------------------------
  $template->assign(
    'Validated_Group',
      array(
        'group_options'=> $groups,
        'group_selected' => $Valid
      )
    );

  // Template initialization for downgrade group
  // -------------------------------------------
  $template->assign(
    'Downgrade_Group',
      array(
        'group_options'=> $groups,
        'group_selected' => $Downgrade
      )
  	);
	
  // Status setting for unvalidated, validated users and downgrade status
  // --------------------------------------------------------------------
  $status_options[-1] = '------------';
  $No_Valid_Status = -1;
  $Valid_Status = -1;
  $Downgrade_Status = -1;
	
  // Get unvalidate status values
  // ----------------------------
  foreach (get_enums(USER_INFOS_TABLE, 'status') as $status)
  {
	  $status_options[$status] = l10n('user_status_'.$status);
	  if (isset($conf_UAM['NO_CONFIRM_STATUS']) and $conf_UAM['NO_CONFIRM_STATUS'] == $status)
	  {
	    $No_Valid_Status = $status;
	  }
	  
    // Template initialization for unvalidated users status
    // ----------------------------------------------------
    $template->assign(
      'No_Confirm_Status',
        array(
          'Status_options' => $status_options,
          'Status_selected' => $No_Valid_Status
        )
      );
  }
  
  // Get validate status values
  // --------------------------
  foreach (get_enums(USER_INFOS_TABLE, 'status') as $status)
  {
    $status_options[$status] = l10n('user_status_'.$status);
    if (isset($conf_UAM['VALIDATED_STATUS']) and $conf_UAM['VALIDATED_STATUS'] == $status)
    {
      $Valid_Status = $status;
    }
		
    // Template initialization for validated users status
    // --------------------------------------------------
    $template->assign(
      'Confirm_Status',
        array(
          'Status_options' => $status_options,
          'Status_selected' => $Valid_Status
        )
      );
  }

  // Get downgrade status values
  // ---------------------------
  foreach (get_enums(USER_INFOS_TABLE, 'status') as $status)
  {
    $status_options[$status] = l10n('user_status_'.$status);
    if (isset($conf_UAM['DOWNGRADE_STATUS']) and $conf_UAM['DOWNGRADE_STATUS'] == $status)
    {
      $Downgrade_Status = $status;
    }
		
    // Template initialization for validated users status
    // --------------------------------------------------
    $template->assign(
      'Downgrade_Status',
        array(
          'Status_options' => $status_options,
          'Status_selected' => $Downgrade_Status
        )
      );
  }


  // Level setting for unvalidated, validated users and downgrade level
  // ------------------------------------------------------------------
  $level_options[-1] = '------------';
  $No_Valid_Level = -1;
  $Valid_Level = -1;
  $Downgrade_Level = -1;

  // Get unvalidated privacy levels values
  // -------------------------------------
  foreach ($conf['available_permission_levels'] as $level)
  {
    $level_options[$level] = l10n(sprintf('Level %d', $level));
    if (isset($conf_UAM['NO_VALID_LEVEL']) and $conf_UAM['NO_VALID_LEVEL'] == $level)
    {
      $No_Valid_Level = $level;
    }

    // Template initialization for unvalidated users level
    // ---------------------------------------------------
    $template->assign(
      'No_Valid_Level',
        array(
          'Level_options' => $level_options,
          'Level_selected' => $No_Valid_Level
        )
      );
  }

  // Get validated privacy levels values
  // -----------------------------------
  foreach ($conf['available_permission_levels'] as $level)
  {
    $level_options[$level] = l10n(sprintf('Level %d', $level));
    if (isset($conf_UAM['VALID_LEVEL']) and $conf_UAM['VALID_LEVEL'] == $level)
    {
      $Valid_Level = $level;
    }

    // Template initialization for unvalidated users level
    // ---------------------------------------------------
    $template->assign(
      'Valid_Level',
        array(
          'Level_options' => $level_options,
          'Level_selected' => $Valid_Level
        )
      );
  }

  // Get downgrade privacy levels values
  // -----------------------------------
  foreach ($conf['available_permission_levels'] as $level)
  {
    $level_options[$level] = l10n(sprintf('Level %d', $level));
    if (isset($conf_UAM['DOWNGRADE_LEVEL']) and $conf_UAM['DOWNGRADE_LEVEL'] == $level)
    {
      $Downgrade_Level = $level;
    }

    // Template initialization for unvalidated users level
    // ---------------------------------------------------
    $template->assign(
      'Downgrade_Level',
        array(
          'Level_options' => $level_options,
          'Level_selected' => $Downgrade_Level
        )
      );
  }

  // Check if emails are mandatory for registrations (needed for email exclusion option)
  // -----------------------------------------------------------------------------------
  if (!$conf['obligatory_user_mail_address'])
  {
    $UAM_Email_Mandatory_Check = true;
  }

  // Save last opened paragraph in configuration tab
  // -----------------------------------------------
  $nb_para=(isset($_POST["nb_para"])) ? $_POST["nb_para"]:"";
  $nb_para2=(isset($_POST["nb_para2"])) ? $_POST["nb_para2"]:"";

  $conf_UAM_ConfirmMail = unserialize($conf['UserAdvManager_ConfirmMail']);

  // ------------------------------------------
  // Template initialization for forms and data
  // ------------------------------------------
  $themeconf=$template->get_template_vars('themeconf');
  $UAM_theme=$themeconf['id'];

  $template->assign(
    array(
						'nb_para'                           => $nb_para,
            'nb_para2'                          => $nb_para2,
            'UAM_VERSION'                       => $version,
            'UAM_PATH'                          => UAM_PATH,
            'UAM_DUMP_DOWNLOAD'                 => $dump_download,
            'UAM_THEME'                         => $UAM_theme,
						'UAM_MAIL_INFO_TRUE'                => $conf_UAM['MAIL_INFO']=='true' ? 'checked="checked"' : '' ,
						'UAM_MAIL_INFO_FALSE'               => $conf_UAM['MAIL_INFO']=='false' ? 'checked="checked"' : '' ,
						'UAM_MAILINFO_TEXT'                 => $conf_UAM['MAILINFO_TEXT'],
						'UAM_USERNAME_CHAR_TRUE'            => $conf_UAM['USERNAME_CHAR']=='true' ? 'checked="checked"' : '' ,
						'UAM_USERNAME_CHAR_FALSE'           => $conf_UAM['USERNAME_CHAR']=='false' ? 'checked="checked"' : '' ,
						'UAM_USERNAME_CHAR_LIST'            => $conf_UAM['USERNAME_CHAR_LIST'],
						'UAM_CONFIRM_MAIL_TRUE'             => $conf_UAM['CONFIRM_MAIL']=='true' ? 'checked="checked"' : '' ,
						'UAM_CONFIRM_MAIL_FALSE'            => $conf_UAM['CONFIRM_MAIL']=='false' ? 'checked="checked"' : '' ,
            'UAM_CONFIRM_MAIL_LOCAL'            => $conf_UAM['CONFIRM_MAIL']=='local' ? 'checked="checked"' : '' ,
						'UAM_CONFIRMMAIL_TEXT'              => $conf_UAM['CONFIRMMAIL_TEXT'],
						'UAM_No_Confirm_Group'              => $conf_UAM['NO_CONFIRM_GROUP'],
						'UAM_Validated_Group'               => $conf_UAM['VALIDATED_GROUP'],
						'UAM_No_Confirm_Status'             => $conf_UAM['NO_CONFIRM_STATUS'],
						'UAM_Validated_Status'              => $conf_UAM['VALIDATED_STATUS'],
						'UAM_MAILEXCLUSION_TRUE'            => $conf_UAM['MAILEXCLUSION']=='true' ? 'checked="checked"' : '' ,
						'UAM_MAILEXCLUSION_FALSE'           => $conf_UAM['MAILEXCLUSION']=='false' ? 'checked="checked"' : '' ,
						'UAM_MAILEXCLUSION_LIST'            => $conf_UAM['MAILEXCLUSION_LIST'],
						'UAM_PASSWORDENF_TRUE'              => $conf_UAM['PASSWORDENF']=='true' ? 'checked="checked"' : '' ,
						'UAM_PASSWORDENF_FALSE'             => $conf_UAM['PASSWORDENF']=='false' ? 'checked="checked"' : '' ,
						'UAM_PASSWORD_SCORE'                => $conf_UAM['PASSWORD_SCORE'],
            'UAM_ADMINPASSWENF_TRUE'            => $conf_UAM['ADMINPASSWENF']=='true' ? 'checked="checked"' : '' ,
						'UAM_ADMINPASSWENF_FALSE'           => $conf_UAM['ADMINPASSWENF']=='false' ? 'checked="checked"' : '' ,
            'UAM_GHOSTRACKER_TRUE'              => $conf_UAM['GHOSTRACKER']=='true' ? 'checked="checked"' : '' ,
						'UAM_GHOSTRACKER_FALSE'             => $conf_UAM['GHOSTRACKER']=='false' ? 'checked="checked"' : '' ,
            'UAM_GHOSTRACKER_DAYLIMIT'          => $conf_UAM['GHOSTRACKER_DAYLIMIT'],
            'UAM_GHOSTRACKER_REMINDERTEXT'      => $conf_UAM['GHOSTRACKER_REMINDERTEXT'],
            'UAM_ADDLASTVISIT_TRUE'             => $conf_UAM['ADDLASTVISIT']=='true' ? 'checked="checked"' : '' ,
            'UAM_ADDLASTVISIT_FALSE'            => $conf_UAM['ADDLASTVISIT']=='false' ? 'checked="checked"' : '' ,
            'UAM_ADMINCONFMAIL_TRUE'            => $conf_UAM['ADMINCONFMAIL']=='true' ? 'checked="checked"' : '' ,
            'UAM_ADMINCONFMAIL_FALSE'           => $conf_UAM['ADMINCONFMAIL']=='false' ? 'checked="checked"' : '' ,
            'UAM_REDIRTOPROFILE_TRUE'           => $conf_UAM['REDIRTOPROFILE']=='true' ? 'checked="checked"' : '' ,
            'UAM_REDIRTOPROFILE_FALSE'          => $conf_UAM['REDIRTOPROFILE']=='false' ? 'checked="checked"' : '' ,
            'UAM_GTAUTO_TRUE'                   => $conf_UAM['GTAUTO']=='true' ? 'checked="checked"' : '' ,
            'UAM_GTAUTO_FALSE'                  => $conf_UAM['GTAUTO']=='false' ? 'checked="checked"' : '' ,
            'UAM_GTAUTOMAIL_TRUE'               => $conf_UAM['GTAUTOMAIL']=='true' ? 'checked="checked"' : '' ,
            'UAM_GTAUTOMAIL_FALSE'              => $conf_UAM['GTAUTOMAIL']=='false' ? 'checked="checked"' : '' ,
            'UAM_GTAUTODEL_TEXT'                => $conf_UAM['GTAUTODEL'],
            'UAM_GTAUTOMAILTEXT'                => $conf_UAM['GTAUTOMAILTEXT'],
						'UAM_Downgrade_Group'               => $conf_UAM['DOWNGRADE_GROUP'],
						'UAM_Downgrade_Status'              => $conf_UAM['DOWNGRADE_STATUS'],
            'UAM_ADMINVALIDATIONMAIL_TEXT'      => $conf_UAM['ADMINVALIDATIONMAIL'],
            'UAM_CUSTOMPASSWRETR_TRUE'          => $conf_UAM['CUSTOMPASSWRETR']=='true' ? 'checked="checked"' : '' ,
            'UAM_CUSTOMPASSWRETR_FALSE'         => $conf_UAM['CUSTOMPASSWRETR']=='false' ? 'checked="checked"' : '' ,
            'UAM_CUSTOMPASSWRETR_TEXT'          => $conf_UAM['CUSTOMPASSWRETR_TEXT'],
            'UAM_USRAUTO_TRUE'                  => $conf_UAM['USRAUTO']=='true' ? 'checked="checked"' : '' ,
            'UAM_USRAUTO_FALSE'                 => $conf_UAM['USRAUTO']=='false' ? 'checked="checked"' : '' ,
            'UAM_USRAUTODEL_TEXT'               => $conf_UAM['USRAUTODEL'],
            'UAM_USRAUTOMAIL_TRUE'              => $conf_UAM['USRAUTOMAIL']=='true' ? 'checked="checked"' : '' ,
            'UAM_USRAUTOMAIL_FALSE'             => $conf_UAM['USRAUTOMAIL']=='false' ? 'checked="checked"' : '' ,
            'UAM_STUFFS_TRUE'                   => $conf_UAM['STUFFS']=='true' ? 'checked="checked"' : '' ,
            'UAM_STUFFS_FALSE'                  => $conf_UAM['STUFFS']=='false' ? 'checked="checked"' : '' ,
            'UAM_HIDEPASSW_TRUE'                => $conf_UAM['HIDEPASSW']=='true' ? 'checked="checked"' : '' ,
            'UAM_HIDEPASSW_FALSE'               => $conf_UAM['HIDEPASSW']=='false' ? 'checked="checked"' : '' ,
						'UAM_NO_VALID_LEVEL'                => $conf_UAM['NO_VALID_LEVEL'],
						'UAM_VALID_LEVEL'                   => $conf_UAM['VALID_LEVEL'],
            'UAM_DOWNGRADE_LEVEL'               => $conf_UAM['DOWNGRADE_LEVEL'],
            'UAM_PWDRESET_TRUE'                 => $conf_UAM['PWDRESET']=='true' ? 'checked="checked"' : '' ,
            'UAM_PWDRESET_FALSE'                => $conf_UAM['PWDRESET']=='false' ? 'checked="checked"' : '' ,
            'UAM_REJECTCONNECT_TRUE'            => $conf_UAM['REJECTCONNECT']=='true' ? 'checked="checked"' : '' ,
            'UAM_REJECTCONNECT_FALSE'           => $conf_UAM['REJECTCONNECT']=='false' ? 'checked="checked"' : '' ,
            'UAM_REJECTCONNECT_TEXT'            => $conf_UAM['REJECTCONNECT_TEXT'],
            'UAM_CONFIRMMAIL_SUBJECT'           => $conf_UAM['CONFIRMMAIL_SUBJECT'],
            'UAM_CONFIRMMAIL_REMAIL_SUBJECT'    => $conf_UAM['CONFIRMMAIL_REMAIL_SUBJECT'],
            'UAM_INFOMAIL_SUBJECT'              => $conf_UAM['INFOMAIL_SUBJECT'],
            'UAM_GTAUTOMAIL_SUBJECT'            => $conf_UAM['GTAUTOMAIL_SUBJECT'],
            'UAM_GTREMINDER_SUBJECT'            => $conf_UAM['GTREMINDER_SUBJECT'],
            'UAM_ADMINVALIDATIONMAIL_SUBJECT'   => $conf_UAM['ADMINVALIDATIONMAIL_SUBJECT'],
						'UAM_PASSWORD_TEST_SCORE'           => $UAM_Password_Test_Score,
            'UAM_ERROR_REPORTS1'                => $UAM_Exclusionlist_Error,
            'UAM_ERROR_REPORTS2'                => $UAM_Illegal_Flag_Error1,
            'UAM_ERROR_REPORTS3'                => $UAM_Illegal_Flag_Error2,
            'UAM_ERROR_REPORTS4'                => $UAM_Illegal_Flag_Error3,
            'UAM_EMAIL_MANDATORY'               => $UAM_Email_Mandatory_Check,
						'UAM_CONFIRMMAIL_TIMEOUT_TRUE'      => $conf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT']=='true' ? 'checked="checked"' : '' ,
						'UAM_CONFIRMMAIL_TIMEOUT_FALSE'     => $conf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT']=='false' ? 'checked="checked"' : '' ,
						'UAM_CONFIRMMAIL_DELAY'             => $conf_UAM_ConfirmMail['CONFIRMMAIL_DELAY'],
            'UAM_CONFIRMMAIL_REMAIL_TRUE'       => $conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL']=='true' ? 'checked="checked"' : '',
            'UAM_CONFIRMMAIL_REMAIL_FALSE'      => $conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL']=='false' ? 'checked="checked"' : '',
            'UAM_CONFIRMMAIL_REMAIL_TXT1'       => $conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL_TXT1'],
            'UAM_CONFIRMMAIL_REMAIL_TXT2'       => $conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL_TXT2'],
            'UAM_CONFIRMMAIL_CUSTOM_TXT1'       => $conf_UAM_ConfirmMail['CONFIRMMAIL_CUSTOM_TXT1'],
            'UAM_CONFIRMMAIL_CUSTOM_TXT2'       => $conf_UAM_ConfirmMail['CONFIRMMAIL_CUSTOM_TXT2'],
    )
  );

  if (isset($_POST['audit']))
  {
    $msg_error1 = '';
		
    // Username without forbidden keys
    // -------------------------------
    if ( isset($conf_UAM['USERNAME_CHAR']) and $conf_UAM['USERNAME_CHAR'] == 'true' )
	  {
      $query = '
SELECT '.$conf['user_fields']['username'].', '.$conf['user_fields']['email'].'
FROM '.USERS_TABLE.'
;';

      $result = pwg_query($query);

      while($row = pwg_db_fetch_assoc($result))
      {
        if (!ValidateUsername(stripslashes($row['username'])))
          $msg_error1 .= (($msg_error1 <> '') ? '<br>' : '').l10n('UAM_Err_audit_username_char').stripslashes($row['username']);
      }
    }

    $msg_error2 = '';
		
    // Email without forbidden domain
    // ------------------------------
    if ( isset($conf_UAM['MAILEXCLUSION']) and $conf_UAM['MAILEXCLUSION'] == 'true' )
    {
      $query = '
SELECT '.$conf['user_fields']['username'].', '.$conf['user_fields']['email'].'
FROM '.USERS_TABLE.'
;';

      $result = pwg_query($query);

      while($row = pwg_db_fetch_assoc($result))
      {
        $conf_MailExclusion = preg_split("/[\s,]+/",$conf_UAM['MAILEXCLUSION_LIST']);
        for ($i = 0 ; $i < count($conf_MailExclusion) ; $i++)
        {
          $pattern = '/'.$conf_MailExclusion[$i].'/';
          if (preg_match($pattern, $row['mail_address']))
          {
            $msg_error2 .=  (($msg_error2 <> '') ? '<br>' : '').l10n('UAM_Err_audit_email_forbidden').stripslashes($row['username']).' ('.$row['mail_address'].')';
          }
        }
      }
    }

    if ($msg_error1 <> '')
    $errors[] = $msg_error1.'<br><br>';

    if ($msg_error2 <> '')
      $errors[] = $msg_error2.'<br><br>';

    if ($msg_error1 <> '' or $msg_error2 <> '')
      array_push($page['errors'], l10n('UAM_Err_audit_advise'));
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
  
  if (isset($conf_UAM['ADDLASTVISIT']) and $conf_UAM['ADDLASTVISIT']=='true')
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
// |                               user list                               |
// +-----------------------------------------------------------------------+

      $visible_user_list = array();
  		foreach ($page['filtered_users'] as $num => $local_user)
  		{
        $visible_user_list[] = $local_user;
      }

			foreach ($visible_user_list as $local_user)
      {
        // dates formating and compare
    		// ---------------------------
    		$today = date("d-m-Y"); // Get today's date
    		list($day, $month, $year) = explode('-', $today); // explode date of today						 
    		$daytimestamp = mktime(0, 0, 0, $month, $day, $year);// Generate UNIX timestamp

    		list($regdate, $regtime) = explode(' ', $local_user['lastvisit']); // Explode date and time from registration date
    		list($regyear, $regmonth, $regday) = explode('-', $regdate); // Explode date from registration date
    		$regtimestamp = mktime(0, 0, 0, $regmonth, $regday, $regyear);// Generate UNIX timestamp

        $deltasecs = $daytimestamp - $regtimestamp;// Compare the 2 UNIX timestamps	
    		$deltadays = floor($deltasecs / 86400);// Convert result from seconds to days
  
        if (isset($conf_UAM['GHOSTRACKER']) and $conf_UAM['GHOSTRACKER']=='true' and !empty($conf_UAM['GHOSTRACKER_DAYLIMIT']))
    		{
          if ($deltadays <= ($conf_UAM['GHOSTRACKER_DAYLIMIT']/2))
      		{
            $display = 'green';
      		}

          if (($deltadays > ($conf_UAM['GHOSTRACKER_DAYLIMIT']/2)) and ($deltadays < $conf_UAM['GHOSTRACKER_DAYLIMIT']))
      		{
            $display = 'orange';
      		}

      		if ($deltadays >= $conf_UAM['GHOSTRACKER_DAYLIMIT'])
      		{
            $display = 'red';
     			}
        }
    		else $display = '';

    		// Template initialization
    		// -----------------------
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

      // Plugin version inserted
  		// -----------------------
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
    array_push($page['errors'], l10n('UAM_Err_Userlist_Settings'));
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
	
  if (isset($conf_UAM['CONFIRM_MAIL']) and ($conf_UAM['CONFIRM_MAIL']=='true' or $conf_UAM['CONFIRM_MAIL']=='local'))
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
        array_push($page['errors'], l10n('UAM_No_validation_for_Guest'));
      }
      if (($conf['guest_id'] != $conf['default_user_id']) and
        in_array($conf['default_user_id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_No_validation_for_default_user'));
      }
      if (in_array($conf['webmaster_id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_No_validation_for_Webmaster'));
      }
      if (in_array($user['id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_No_validation_for_your_account'));
      }

      if (count($page['errors']) == 0)
      {
        foreach ($collection as $user_id)
        {
          $typemail = 1;
          $query = '
SELECT id, username, mail_address
FROM '.USERS_TABLE.'
WHERE id = '.$user_id.'
;';
          $data = pwg_db_fetch_assoc(pwg_query($query));

          ResendMail2User($typemail,$user_id,stripslashes($data['username']),$data['mail_address'],true);
        }
        array_push(
          $page['infos'],
          l10n_dec(
            'UAM_%d_Mail_With_Key', 'UAM_%d_Mails_With_Key',
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
        array_push($page['errors'], l10n('UAM_No_validation_for_Guest'));
      }
      if (($conf['guest_id'] != $conf['default_user_id']) and
        in_array($conf['default_user_id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_No_validation_for_default_user'));
      }
      if (in_array($conf['webmaster_id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_No_validation_for_Webmaster'));
      }
      if (in_array($user['id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_No_validation_for_your_account'));
      }

      if (count($page['errors']) == 0)
      {
        foreach ($collection as $user_id)
        {
          $typemail = 2;
          $query = '
SELECT id, username, mail_address
FROM '.USERS_TABLE.'
WHERE id = '.$user_id.'
;';
					
          $data = pwg_db_fetch_assoc(pwg_query($query));

          ResendMail2User($typemail,$user_id,stripslashes($data['username']),$data['mail_address'],false);				
        }
        array_push(
          $page['infos'],
          l10n_dec(
            'UAM_%d_Reminder_Sent', 'UAM_%d_Reminders_Sent',
       			count($collection)
          )
        );

        $page['filtered_users'] = get_unvalid_user_list();
      }
    }

// +-----------------------------------------------------------------------+
// |             								 Manual validation	by admins              |
// +-----------------------------------------------------------------------+
// +-----------------------------------------------------------------------+
// |                            selected users                             |
// +-----------------------------------------------------------------------+
    if (isset($_POST['Manual_Validation']))
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
    if (isset($_POST['Manual_Validation']) and count($collection) > 0)
    {
      if (in_array($conf['guest_id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_No_validation_for_Guest'));
      }
      if (($conf['guest_id'] != $conf['default_user_id']) and
        in_array($conf['default_user_id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_No_validation_for_default_user'));
      }
      if (in_array($conf['webmaster_id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_No_validation_for_Webmaster'));
      }
      if (in_array($user['id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_No_validation_for_your_account'));
      }

      if (count($page['errors']) == 0)
      {
        foreach ($collection as $user_id)
        {
          ManualValidation($user_id);
          validation_mail($user_id);
        }
        array_push(
          $page['infos'],
          l10n_dec(
            'UAM_%d_Validated_User', 'UAM_%d_Validated_Users',
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
// |                               user list                               |
// +-----------------------------------------------------------------------+

    $profile_url = get_root_url().'admin.php?page=profile&amp;user_id=';
    $perm_url = get_root_url().'admin.php?page=user_perm&amp;user_id=';

    $visible_user_list = array();
    foreach ($page['filtered_users'] as $num => $local_user)
    {
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
        $reminder = l10n('UAM_Reminder_Sent_OK');
      }
      else if ((isset($row['reminder']) and $row['reminder'] == 'false') or !isset($row['reminder']))
      {
        $reminder = l10n('UAM_Reminder_Sent_NOK');
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

      if ($local_user['level'] != 0)
      {
        $properties[] = l10n( sprintf('Level %d', $local_user['level']) );
      }

      $properties[] = (isset($local_user['enabled_high']) and ($local_user['enabled_high'] == 'true'))
        ? l10n('is_high_enabled') : l10n('is_high_disabled');

      $expiration = expiration($local_user['id']);

      // Template initialization
      // -----------------------
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
                                .$local_user['status']),
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
    // -----------------------------------------------------------
    $Confirm_Local = "";
    
    if ($conf_UAM['CONFIRM_MAIL'] == 'local')
    {
      $Confirm_Local = $conf_UAM['CONFIRM_MAIL'];
    }
    else
    {
      $Confirm_Local = "";
    } 
    
    // Plugin version inserted
    // -----------------------
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
    array_push($page['errors'], l10n('UAM_Err_UserManager_Settings'));
  }
  break;


// *************************************************************************
// +-----------------------------------------------------------------------+
// |                           Ghost Tracker page                          |
// +-----------------------------------------------------------------------+
// *************************************************************************
  case 'ghosttracker':

  $conf_UAM = unserialize($conf['UserAdvManager']);
	
  if (isset($conf_UAM['GHOSTRACKER_DAYLIMIT']) and $conf_UAM['GHOSTRACKER']=='true')
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
        array_push($page['errors'], l10n('UAM_No_reminder_for_Guest'));
      }
      if (($conf['guest_id'] != $conf['default_user_id']) and
        in_array($conf['default_user_id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_No_reminder_for_default_user'));
      }
      if (in_array($conf['webmaster_id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_No_reminder_for_Webmaster'));
      }
      if (in_array($user['id'], $collection))
      {
        array_push($page['errors'], l10n('UAM_No_reminder_for_your_account'));
      }

      if (count($page['errors']) == 0)
      {
        foreach ($collection as $user_id)
        {
          $query = '
SELECT id, username, mail_address
FROM '.USERS_TABLE.'
WHERE id = '.$user_id.'
;';
					
          $data = pwg_db_fetch_assoc(pwg_query($query));

          ghostreminder($user_id,stripslashes($data['username']),$data['mail_address']);				
        }

        array_push(
          $page['infos'],
          l10n_dec(
            'UAM_%d_Reminder_Sent', 'UAM_%d_Reminders_Sent',
            count($collection)
          )
        );

        $page['filtered_users'] = get_ghost_user_list();
      }
    }

    if (isset($_POST['GhostTracker_Init']) and is_admin()) //Reset is only allowed for admins !
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
          $dbnow = date("Y-m-d H:i:s");
            
          $query = '
INSERT INTO '.USER_LASTVISIT_TABLE.'
				(user_id, lastvisit, reminder)
VALUES ('.$row['id'].',"'.$dbnow.'","false")
;';
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
          $dbnow = date("Y-m-d H:i:s");

          $query = '
INSERT INTO '.USER_LASTVISIT_TABLE.'
    (user_id, lastvisit, reminder)
VALUES ('.$row['id'].',"'.$dbnow.'","false")
;';
          pwg_query($query);
        }
      }

      array_push($page['infos'], l10n('UAM_GhostTracker_Init_OK'));
    }

// +-----------------------------------------------------------------------+
// |                               user list                               |
// +-----------------------------------------------------------------------+

    $visible_user_list = array();
    foreach ($page['filtered_users'] as $num => $local_user)
    {
      $visible_user_list[] = $local_user;
    }

    foreach ($visible_user_list as $local_user)
   	{
      $reminder = '';

      if (isset($local_user['reminder']) and $local_user['reminder'] == 'true')
      {
        $reminder = l10n('UAM_Reminder_Sent_OK');
      }
      else if (isset($local_user['reminder']) and $local_user['reminder'] == 'false')
      {
        $reminder = l10n('UAM_Reminder_Sent_NOK');
      }

      if (isset($_POST['pref_submit']) and isset($_POST['selection']) and in_array($local_user['id'], $_POST['selection']))
      {
        $checked = 'checked="checked"';
      }
      else
      {
        $checked = '';
      }

      // Template initialization
      // -----------------------
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

    // Plugin version inserted
    // -----------------------
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
    $template->set_filename('plugin_admin_content', dirname(__FILE__) . '/template/ghosttracker.tpl');
    $template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');		
  }
  else
  {
    array_push($page['errors'], l10n('UAM_Err_GhostTracker_Settings'));
  }

  break;
}
?>