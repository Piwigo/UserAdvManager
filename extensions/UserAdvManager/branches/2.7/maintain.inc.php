<?php

if(!defined('UAM_PATH'))
{
  define('UAM_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');
}

include_once (UAM_PATH.'include/constants.php');
include_once (UAM_PATH.'include/functions.inc.php');

load_language('plugin.lang', UAM_PATH);


function plugin_install($id, $version, &$errors)
{
	global $conf;

/* ****************************************************************** */
/* **************** BEGIN - Data preparation in vars **************** */
/* ****************************************************************** */

  // Default global parameters for UserAdvManager conf
  // -------------------------------------------------
  $defaultUAM = array(
    'MAIL_INFO'                   => 'false',
    'CONFIRM_MAIL'                => 'false',
    'NO_CONFIRM_GROUP'            => '-1',
    'VALIDATED_GROUP'             => '-1',
    'VALIDATED_STATUS'            => '-1',
    'USERNAME_CHAR'               => 'false',
    'USERNAME_CHAR_LIST'          => '',
    'NO_CONFIRM_STATUS'           => '-1',
    'MAILINFO_TEXT'               => l10n('UAM_Default_InfoMail_Txt'),
    'CONFIRMMAIL_TEXT'            => l10n('UAM_Default_ConfirmMail_Txt'),
    'MAILEXCLUSION'               => 'false',
    'MAILEXCLUSION_LIST'          => '',
    'ADMINPASSWENF'               => 'false',
    'GHOSTRACKER'                 => 'false',
    'GHOSTRACKER_DAYLIMIT'        => '10',
    'GHOSTRACKER_REMINDERTEXT'    => l10n('UAM_Default_GhstReminder_Txt'),
    'ADDLASTVISIT'                => 'false',
    'ADMINCONFMAIL'               => 'false',
    'REDIRTOPROFILE'              => 'false',
    'GTAUTO'                      => 'false',
    'GTAUTOMAIL'                  => 'false',
    'GTAUTODEL'                   => l10n('UAM_Default_GhstDeletion_Txt'),
    'GTAUTOMAILTEXT'              => l10n('UAM_Default_GhstDemotion_Txt'),
    'DOWNGRADE_GROUP'             => '-1',
    'DOWNGRADE_STATUS'            => '-1',
    'ADMINVALIDATIONMAIL'         => l10n('UAM_Default_AdminValidation_Txt'),
    'CUSTOMPASSWRETR'             => 'false',
    'CUSTOMPASSWRETR_TEXT'        => l10n('UAM_Default_PwdRequest_Txt'),
    'USRAUTO'                     => 'false',
    'USRAUTODEL'                  => l10n('UAM_Default_ValidationTimeout_Txt'),
    'USRAUTOMAIL'                 => 'false',
    'STUFFS'                      => 'false',
    'HIDEPASSW'                   => 'false',
    'NO_VALID_LEVEL'              => '-1',
    'VALID_LEVEL'                 => '-1',
    'DOWNGRADE_LEVEL'             => '-1',
    'REJECTCONNECT'               => 'false',
    'REJECTCONNECT_TEXT'          => l10n('UAM_Default_RejectConnexion_Txt'),
    'CONFIRMMAIL_SUBJECT'         => l10n('UAM_Default_ConfirmMail_Subject'),
    'CONFIRMMAIL_REMAIL_SUBJECT'  => l10n('UAM_Default_ConfirmMail_Remail_Subject'),
    'INFOMAIL_SUBJECT'            => l10n('UAM_Default_InfoMail_Subject'),
    'GTAUTOMAIL_SUBJECT'          => l10n('UAM_Default_GTAutoMail_Subject'),
    'GTREMINDER_SUBJECT'          => l10n('UAM_Default_GTReminder_Subject'),
    'ADMINVALIDATIONMAIL_SUBJECT' => l10n('UAM_Default_AdminValidationMail_Subject'),
    'ADD_GALLERY_URL_TO_EMAILS'   => 'false',
    'EMAILS_COPY_TO_ADMINS'       => 'false'
  );
  
  // Default specific parameters for UserAdvManager ConfirmMail conf
  // ---------------------------------------------------------------
  $defaultConfirmMail = array(
    'CONFIRMMAIL_TIMEOUT'     => 'false',
    'CONFIRMMAIL_DELAY'       => '5',
    'CONFIRMMAIL_REMAIL_TXT1' => l10n('UAM_Default_CfmMail_Remail_Txt1'),
    'CONFIRMMAIL_REMAIL'      => 'false',
    'CONFIRMMAIL_REMAIL_TXT2' => l10n('UAM_Default_CfmMail_Remail_Txt2'),
    'CONFIRMMAIL_CUSTOM_TXT1' => l10n('UAM_Default_CfmMail_Custom_Txt1'),
    'CONFIRMMAIL_CUSTOM_TXT2' => l10n('UAM_Default_CfmMail_Custom_Txt2')
  );
  
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
	$q = '
CREATE TABLE IF NOT EXISTS '.USER_CONFIRM_MAIL_TABLE.' (
  id varchar(50) NOT NULL default "",
  user_id smallint(5) NOT NULL default "0",
  mail_address varchar(255) default NULL,
  status enum("webmaster","admin","normal","generic","guest") default NULL,
  date_check datetime default NULL,
  reminder ENUM("true","false") NULL,
PRIMARY KEY  (id)
  )
ENGINE=MyISAM;';
  pwg_query($q);

  // Create USER_LASTVISIT_TABLE
  // ---------------------------
	$q = '
CREATE TABLE IF NOT EXISTS '.USER_LASTVISIT_TABLE.' (
  user_id SMALLINT(5) NOT NULL DEFAULT "0",
  lastvisit DATETIME NULL DEFAULT NULL,
  reminder ENUM("true","false") NULL,
PRIMARY KEY (`user_id`)
  )
ENGINE=MyISAM;';
  pwg_query($q);


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


function plugin_activate($id, $version, &$errors)
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
    $fields = pwg_query('SHOW COLUMNS FROM '.USER_CONFIRM_MAIL_TABLE.';');
    $nb_fields = pwg_db_num_rows($fields);

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

    if (version_compare($conf['UserAdvManager_Version'], '2.50.0') < 0)
    {
    /* upgrade from version 2.41.x to 2.50.0 */
    /* ************************************* */
      upgrade_2410_2500();
    }

    if (version_compare($conf['UserAdvManager_Version'], '2.50.11') < 0)
    {
    /* upgrade from version 2.50.x to 2.50.11 */
    /* ************************************** */
      upgrade_2500_25011();
    }

    if (version_compare($conf['UserAdvManager_Version'], '2.51.0') < 0)
    {
    /* upgrade from version 2.50.x to 2.51.0 */
    /* ************************************* */
      upgrade_2500_2510();
    }

    if (version_compare($conf['UserAdvManager_Version'], '2.70.3') < 0)
    {
    /* upgrade from version 2.51.0 to 2.70.3 */
    /* ************************************* */
      upgrade_2510_2703();
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
DROP UAM_validated 
;';
  pwg_query($q);
}
?>