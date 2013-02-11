<?php

if(!defined('UAM_PATH'))
{
  define('UAM_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');
}

include_once (UAM_PATH.'include/constants.php');
include_once (UAM_PATH.'include/functions.inc.php');

load_language('plugin.lang', UAM_PATH);


function plugin_install()
{
	global $conf;

/* ****************************************************************** */
/* **************** BEGIN - Data preparation in vars **************** */
/* ****************************************************************** */

  $defaultUAM = array();
  $defaultConfirmMail = array();

  // Default global parameters for UserAdvManager conf
  // -------------------------------------------------
  $defaultUAM[0] = 'false';                                         // UAM_MAIL_INFO_TRUE/FALSE
  $defaultUAM[1] = 'false';                                         // UAM_CONFIRM_MAIL_TRUE/FALSE
  $defaultUAM[2] = '-1';                                            // UAM_No_Confirm_Group
  $defaultUAM[3] = '-1';                                            // UAM_Validated_Group
  $defaultUAM[4] = '-1';                                            // UAM_Validated_Status
  $defaultUAM[5] = 'false';                                         // UAM_USERNAME_CHAR_TRUE
  $defaultUAM[6] = '';                                              // UAM_USERNAME_CHAR_LIST
  $defaultUAM[7] = '-1';                                            // UAM_No_Confirm_Status
  $defaultUAM[8] = l10n('UAM_Default_InfoMail_Txt');                // UAM_MAILINFO_TEXT
  $defaultUAM[9] = l10n('UAM_Default_ConfirmMail_Txt');             // UAM_CONFIRMMAIL_TEXT
  $defaultUAM[10] = 'false';                                        // UAM_MAILEXCLUSION_TRUE/FALSE
  $defaultUAM[11] = '';                                             // UAM_MAILEXCLUSION_LIST
  $defaultUAM[12] = 'false';                                        // UAM_PASSWORDENF_TRUE/FALSE
  $defaultUAM[13] = '100';                                          // UAM_PASSWORD_SCORE
  $defaultUAM[14] = 'false';                                        // UAM_ADMINPASSWENF_TRUE/FALSE
  $defaultUAM[15] = 'false';                                        // UAM_GHOSTRACKER_TRUE/FALSE
  $defaultUAM[16] = '10';                                           // UAM_GHOSTRACKER_DAYLIMIT
  $defaultUAM[17] = l10n('UAM_Default_GhstReminder_Txt');           // UAM_GHOSTRACKER_REMINDERTEXT
  $defaultUAM[18] = 'false';                                        // UAM_ADDLASTVISIT_TRUE/FALSE
  $defaultUAM[19] = 'false';                                        // UAM_ADMINCONFMAIL_TRUE/FALSE
  $defaultUAM[20] = 'false';                                        // UAM_REDIRTOPROFILE_TRUE/FALSE
  $defaultUAM[21] = 'false';                                        // UAM_GTAUTO_TRUE/FALSE
  $defaultUAM[22] = 'false';                                        // UAM_GTAUTOMAIL_TRUE/FALSE
  $defaultUAM[23] = l10n('UAM_Default_GhstDeletion_Txt');           // UAM_GTAUTODEL_TEXT
  $defaultUAM[24] = l10n('UAM_Default_GhstDemotion_Txt');           // UAM_GTAUTOMAILTEXT
  $defaultUAM[25] = '-1';                                           // UAM_Downgrade_Group
  $defaultUAM[26] = '-1';                                           // UAM_Downgrade_Status
  $defaultUAM[27] = l10n('UAM_Default_AdminValidation_Txt');        // UAM_ADMINVALIDATIONMAIL_TEXT
  $defaultUAM[28] = 'false';                                        // UAM_CUSTOMPASSWRETR_TRUE/FALSE
  $defaultUAM[29] = l10n('UAM_Default_PwdRequest_Txt');             // UAM_CUSTOMPASSWRETR_TEXT
  $defaultUAM[30] = 'false';                                        // UAM_USRAUTO_TRUE/FALSE
  $defaultUAM[31] = l10n('UAM_Default_ValidationTimeout_Txt');      // UAM_USRAUTODEL_TEXT
  $defaultUAM[32] = 'false';                                        // UAM_USRAUTOMAIL_TRUE/FALSE
  $defaultUAM[33] = 'false';                                        // UAM_STUFFS_TRUE/FALSE
  $defaultUAM[34] = 'false';                                        // UAM_HIDEPASSW_TRUE/FALSE
  $defaultUAM[35] = '-1';                                           // UAM_NO_VALID_LEVEL
  $defaultUAM[36] = '-1';                                           // UAM_VALID_LEVEL
  $defaultUAM[37] = '-1';                                           // UAM_DOWNGRADE_LEVEL
  $defaultUAM[38] = 'false';                                        // UAM_PWDRESET_TRUE/FALSE
  $defaultUAM[39] = 'false';                                        // UAM_REJECTCONNECT_TRUE/FALSE
  $defaultUAM[40] = l10n('UAM_Default_RejectConnexion_Txt');        // UAM_REJECTCONNECT_TEXT
  $defaultUAM[41] = l10n('UAM_Default_ConfirmMail_Subject');        // UAM_CONFIRMMAIL_SUBJECT
  $defaultUAM[42] = l10n('UAM_Default_ConfirmMail_Remail_Subject'); // UAM_CONFIRMMAIL_REMAIL_SUBJECT
  $defaultUAM[43] = l10n('UAM_Default_InfoMail_Subject');           // UAM_INFOMAIL_SUBJECT
  $defaultUAM[44] = l10n('UAM_Default_GTAutoMail_Subject');         // UAM_GTAUTOMAIL_SUBJECT
  $defaultUAM[45] = l10n('UAM_Default_GTReminder_Subject');         // UAM_GTREMINDER_SUBJECT
  $defaultUAM[46] = l10n('UAM_Default_AdminValidationMail_Subject');// UAM_ADMINVALIDATIONMAIL_SUBJECT
  
  // Default specific parameters for UserAdvManager ConfirmMail conf
  // ---------------------------------------------------------------
  $defaultConfirmMail[0] = 'false';                                 // UAM_CONFIRMMAIL_TIMEOUT_TRUE/FALSE
  $defaultConfirmMail[1] = '5';                                     // UAM_CONFIRMMAIL_DELAY
  $defaultConfirmMail[2] = l10n('UAM_Default_CfmMail_Remail_Txt1'); // UAM_CONFIRMMAIL_REMAIL_TXT1
  $defaultConfirmMail[3] = 'false';                                 // UAM_CONFIRMMAIL_REMAIL_TRUE/FALSE
  $defaultConfirmMail[4] = l10n('UAM_Default_CfmMail_Remail_Txt2'); // UAM_CONFIRMMAIL_REMAIL_TXT2
  $defaultConfirmMail[5] = l10n('UAM_Default_CfmMail_Custom_Txt1'); // UAM_CONFIRMMAIL_CUSTOM_TXT1
  $defaultConfirmMail[6] = l10n('UAM_Default_CfmMail_Custom_Txt2'); // UAM_CONFIRMMAIL_CUSTOM_TXT2
  
  // Set current plugin version in config table
  // ------------------------------------------
  $plugin =  PluginInfos(UAM_PATH);
  $version = $plugin['version'];

/* **************************************************************** */
/* **************** END - Data preparation in vars **************** */
/* **************************************************************** */


/* ***************************************************************************** */
/* **************** BEGIN - Database actions and initialization **************** */
/* ***************************************************************************** */

  // Create UserAdvManager conf if not already exists
  // ------------------------------------------------
	$query = '
SELECT param
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager"
;';
  $count = pwg_db_num_rows(pwg_query($query));
  
  if ($count == 0)
  {
    $q = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("UserAdvManager","'.pwg_db_real_escape_string(serialize($defaultUAM)).'","UAM parameters")
  ;';
    pwg_query($q);
  }

  // Create UserAdvManager_ConfirmMail conf if not already exists
  // ------------------------------------------------------------
	$query = '
SELECT param
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager_ConfirmMail"
;';
  $count = pwg_db_num_rows(pwg_query($query));
  
  if ($count == 0)
  {
    $q = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("UserAdvManager_ConfirmMail","'.pwg_db_real_escape_string(serialize($defaultConfirmMail)).'","UAM ConfirmMail parameters")
  ;';
    pwg_query($q);
  }

  // Create UserAdvManager_Redir conf if not already exists
  // ------------------------------------------------------
	$query = '
SELECT param
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager_Redir"
;';
  $count = pwg_db_num_rows(pwg_query($query));
  
  if ($count == 0)
  {
    $q = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("UserAdvManager_Redir","0","UAM Redirections")
  ;';
    pwg_query($q);
  }

  // Create UserAdvManager_Version conf if not already exists
  // --------------------------------------------------------
	$query = '
SELECT param
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager_Version"
;';
  $count = pwg_db_num_rows(pwg_query($query));
  
  if ($count == 0)
  {
    $q = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("UserAdvManager_Version","'.$version.'","UAM version check")
  ;';
    pwg_query($q);
  }

  // Create USER_CONFIRM_MAIL_TABLE
  // ------------------------------
	$q = "
CREATE TABLE IF NOT EXISTS ".USER_CONFIRM_MAIL_TABLE." (
  id varchar(50) NOT NULL default '',
  user_id smallint(5) NOT NULL default '0',
  mail_address varchar(255) default NULL,
  status enum('webmaster','admin','normal','generic','guest') default NULL,
  date_check datetime default NULL,
  reminder ENUM('true','false') NULL,
PRIMARY KEY  (id)
  )
ENGINE=MyISAM;";
  pwg_query($q);

  // Create USER_LASTVISIT_TABLE
  // ---------------------------
	$q = "
CREATE TABLE IF NOT EXISTS ".USER_LASTVISIT_TABLE." (
  user_id SMALLINT(5) NOT NULL DEFAULT '0',
  lastvisit DATETIME NULL DEFAULT NULL,
  reminder ENUM('true','false') NULL,
PRIMARY KEY (`user_id`)
  )
ENGINE=MyISAM;";
  pwg_query($q);

  // Piwigo's native tables modifications for password reset function - Add pwdreset column if not already exists
  // ------------------------------------------------------------------------------------------------------------
  $query = '
SHOW COLUMNS FROM '.USERS_TABLE.'
LIKE "UAM_pwdreset"
;';
  
  $result = pwg_query($query);

  if(!pwg_db_fetch_row($result))
  {
    $q = '
ALTER TABLE '.USERS_TABLE.'
ADD UAM_pwdreset enum("true","false") 
;';
    pwg_query($q);
  }

  // Piwigo's native tables modifications for validation status
  // ----------------------------------------------------------
  $query = '
SHOW COLUMNS FROM '.USERS_TABLE.'
LIKE "UAM_validated"
;';
  
  $result = pwg_query($query);

  if(!pwg_db_fetch_row($result))
  {
    $q = '
ALTER TABLE '.USERS_TABLE.'
ADD UAM_validated enum("true","false") 
;';
    pwg_query($q);
  }

/* *************************************************************************** */
/* **************** END - Database actions and initialization **************** */
/* *************************************************************************** */
}


function plugin_activate()
{
  global $conf;

/* Cleaning obsolete files */
/* *********************** */
  clean_obsolete_files();
  
  include_once (UAM_PATH.'include/upgradedb.inc.php');

/* Check if old version is < 2.15 */
/* ****************************** */
	$query = '
SELECT param
  FROM '.CONFIG_TABLE.'
WHERE param = "nbc_UserAdvManager"
;';
  $count1 = pwg_db_num_rows(pwg_query($query));
  
  $query = '
SELECT *
  FROM '.CONFIG_TABLE.'
WHERE param = "nbc_UserAdvManager_ConfirmMail"
;';
  $count2 = pwg_db_num_rows(pwg_query($query)); 

/* If old params exist an upgrade is needed */
/* **************************************** */
  if ($count1 == 1)
  {
/* Check for upgrade from 2.10 to 2.11 */
/* *********************************** */
    if ($count1 == 1 and $count2 == 0)
    {
    /* upgrade from branch 2.10 to 2.11 */
    /* ******************************** */
      upgrade_210_211();
    }


/* Check for upgrade from 2.11 to 2.12 */
/* *********************************** */
    if (!table_exist(USER_LASTVISIT_TABLE))
    {
    /* upgrade from branch 2.11 to 2.12 */
    /* ******************************** */
  		upgrade_211_212();
    }


/* Check for upgrade from 2.12 to 2.13 */
/* *********************************** */
    $fields = mysql_list_fields($conf['db_base'],USER_CONFIRM_MAIL_TABLE);
    $nb_fields = mysql_num_fields($fields); 

    if ($nb_fields < 6)
    {
    /* upgrade from branch 2.12 to 2.13 */
    /* ******************************** */
      upgrade_212_213();
    }


/* Serializing conf parameters - Available since 2.14.0 */
/* **************************************************** */
    if (unserialize($conf['nbc_UserAdvManager']) === false)
    {
    /* upgrade from branch 2.13 to 2.14 */
    /* ******************************** */
      upgrade_213_214();
    }
    
    /* upgrade from branch 2.14 to 2.15 */
    /* ******************************** */
      upgrade_214_215();
  }

/* Old version is > 2.15 */
/* ********************* */
	$query = '
SELECT param
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager_Redir"
;';
  $count = pwg_db_num_rows(pwg_query($query));
  
  if ($count == 0)
  {
    upgrade_2153_2154();
  }

/* Check for upgrade from 2.15 to 2.16 */
/* *********************************** */
	$query = '
SELECT param
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager_Version"
;';
  $count = pwg_db_num_rows(pwg_query($query));
  
  if ($count == 0)
  {
    /* upgrade from branch 2.15 to 2.16 */
    /* ******************************** */
    upgrade_215_2160();
  }

/* Check database upgrade since version 2.16.0 */
/* ******************************************* */
  if (isset($conf['UserAdvManager_Version']))
  {
    if (version_compare($conf['UserAdvManager_Version'], '2.20.0') < 0)
    {
    /* upgrade from branch 2.16 to 2.20 */
    /* ******************************** */
      upgrade_216_220();
    }
    
    if (version_compare($conf['UserAdvManager_Version'], '2.20.4') < 0)
    {
    /* upgrade from version 2.20.3 to 2.20.4 */
    /* ************************************* */
      upgrade_2203_2204();
    }
    
    if (version_compare($conf['UserAdvManager_Version'], '2.20.7') < 0)
    {
    /* upgrade from version 2.20.4 to 2.20.7 */
    /* ************************************* */
      upgrade_2204_2207();
    }

    if (version_compare($conf['UserAdvManager_Version'], '2.20.8') < 0)
    {
    /* upgrade from version 2.20.7 to 2.20.8 */
    /* ************************************* */
      upgrade_2207_2208();
    }

    if (version_compare($conf['UserAdvManager_Version'], '2.30.0') < 0)
    {
    /* upgrade from version 2.20.8 to 2.30.0 */
    /* ************************************* */
      upgrade_2208_2300();
    }

    if (version_compare($conf['UserAdvManager_Version'], '2.30.2') < 0)
    {
    /* upgrade from version 2.30.x to 2.30.2 */
    /* ************************************* */
      upgrade_2300_2302();
    }

    if (version_compare($conf['UserAdvManager_Version'], '2.40.0') < 0)
    {
    /* upgrade from version 2.30.x to 2.40.0 */
    /* ************************************* */
      upgrade_2300_2400();
    }

    if (version_compare($conf['UserAdvManager_Version'], '2.41.0') < 0)
    {
    /* upgrade from version 2.40.x to 2.41.0 */
    /* ************************************* */
      upgrade_2400_2410();
    }
  }

  // Update plugin version number in #_config table and check consistency of #_plugins table
  // ---------------------------------------------------------------------------------------
  UAM_version_update();

  load_conf_from_db('param like \'UserAdvManager\\_%\'');
}


function plugin_uninstall()
{
  global $conf;

  if (isset($conf['UserAdvManager']))
  {
    $q = '
DELETE FROM '.CONFIG_TABLE.'
WHERE param="UserAdvManager"
;';

    pwg_query($q);
  }

  if (isset($conf['UserAdvManager_ConfirmMail']))
  {
    $q = '
DELETE FROM '.CONFIG_TABLE.'
WHERE param="UserAdvManager_ConfirmMail"
;';

    pwg_query($q);
  }

  if (isset($conf['UserAdvManager_Redir']))
  {
    $q = '
DELETE FROM '.CONFIG_TABLE.'
WHERE param="UserAdvManager_Redir"
;';

    pwg_query($q);
  }

  if (isset($conf['UserAdvManager_Version']))
  {
    $q = '
DELETE FROM '.CONFIG_TABLE.'
WHERE param="UserAdvManager_Version"
;';

    pwg_query($q);
  }

  $q = '
DROP TABLE '.USER_CONFIRM_MAIL_TABLE.'
;';
  pwg_query( $q );

  $q = '
DROP TABLE '.USER_LASTVISIT_TABLE.'
;';
  pwg_query( $q );

  $q = '
ALTER TABLE '.USERS_TABLE.'
DROP UAM_pwdreset 
;';
  pwg_query($q);

  $q = '
ALTER TABLE '.USERS_TABLE.'
DROP UAM_validated 
;';
  pwg_query($q);
}
?>