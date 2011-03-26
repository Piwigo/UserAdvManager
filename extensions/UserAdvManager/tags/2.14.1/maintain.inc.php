<?php

if(!defined("NBC_UAM_PATH")) define('NBC_UAM_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');
if (!defined('NBC_UAM_ROOT')) {
  define('NBC_UAM_ROOT',     dirname(__FILE__).'/');
}

include_once (NBC_UAM_PATH.'include/constants.php');
include_once (NBC_UAM_PATH.'include/functions.inc.php');


function plugin_install()
{
	global $conf;
	
  $default1 = array('false','false','false',-1,-1,-1,'false','false','',-1,'','','false','','false',100,'false','false',10,'Hello.
	
This is a reminder because a very long time passed since your last visit on our gallery. If you do not want anymore to use your access account, please let us know by replying to this email. Your account will be deleted.

On receipt of this message and no new visit within 15 days, we would be obliged to automatically delete your account.

Best regards,

The admin of the gallery.','false','false');

  $q = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("nbc_UserAdvManager","'.addslashes(serialize($default1)).'","NBC_UAM parameters")
  ;';
  pwg_query($q);


  $default2 = array('false',5,'Hello.
		
This is a reminder message because you registered on our gallery but you do not validate your registration and your validation key has expired. To still allow you to access to our gallery, your validation period has been reset. You have again 5 days to validate your registration.

Note: After this period, your account will be permanently deleted.','false','Hello.

This is a reminder message because you registered on our gallery but you do not validate your registration and your validation key will expire. To allow you access to our gallery, you have 2 days to confirm your registration by clicking on the link in the message you should have received when you registered.

Note: After this period, your account will be permanently deleted.');

  $q = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("nbc_UserAdvManager_ConfirmMail","'.addslashes(serialize($default2)).'","NBC_UAM ConfirmMail parameters")
  ;';
  pwg_query($q);


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
;";
  pwg_query($q);

	$q = "
CREATE TABLE IF NOT EXISTS ".USER_LASTVISIT_TABLE." (
  user_id SMALLINT(5) NOT NULL DEFAULT '0',
  lastvisit DATETIME NULL DEFAULT NULL,
  reminder ENUM('true','false') NULL,
PRIMARY KEY (`user_id`)
  )
;";
  pwg_query($q);
}


function plugin_activate()
{
  global $conf;

/* Cleaning obsolete files */
/* *********************** */
  clean_obsolete_files();


/* Check for upgrade from 2.10 to 2.11 */
/* *********************************** */
	$query = '
SELECT *
  FROM '.CONFIG_TABLE.'
WHERE param = "nbc_UserAdvManager_ConfirmMail"
;';
  $count = mysql_num_rows(pwg_query($query)); 
  
	if ($count == 0)
	{
  /* upgrade from branch 2.10 to 2.11 */
  /* ******************************** */
		upgrade_210();
	}


/* Check for upgrade from 2.11 to 2.12 */
/* *********************************** */
  if (!table_exist(USER_LASTVISIT_TABLE))
  {
  /* upgrade from branch 2.11 to 2.12 */
  /* ******************************** */
		upgrade_211();
  }


/* Check for upgrade from 2.12 to 2.13 */
/* *********************************** */
  $query = '
SELECT *
FROM '.USER_CONFIRM_MAIL_TABLE.'
;';

  $result = pwg_query($query);
	
	$numfields = mysql_num_fields($result);

  if ($numfields < 6)
  {
  /* upgrade from branch 2.12 to 2.13 */
  /* ******************************** */
    upgrade_212();
  }


/* Serializing conf parameters - Available since 2.14.0 */
/* **************************************************** */
  if (unserialize($conf['nbc_UserAdvManager']) === false)
  {
  /* upgrade from branch 2.13 to 2.14 */
  /* ******************************** */
    upgrade_213();
  }
}


function plugin_uninstall()
{
  global $conf;

  if (isset($conf['nbc_UserAdvManager']))
  {
    $q = '
DELETE FROM '.CONFIG_TABLE.'
WHERE param="nbc_UserAdvManager"
;';

    pwg_query($q);
  }

  if (isset($conf['nbc_UserAdvManager_ConfirmMail']))
  {
    $q = '
DELETE FROM '.CONFIG_TABLE.'
WHERE param="nbc_UserAdvManager_ConfirmMail"
;';

    pwg_query($q);
  }

  $q = 'DROP TABLE '.USER_CONFIRM_MAIL_TABLE.';';
  pwg_query( $q );

  $q = 'DROP TABLE '.USER_LASTVISIT_TABLE.';';
  pwg_query( $q );
}


// +----------------------------------------------------------+
// |       Upgrading database from old plugin versions        |
// +----------------------------------------------------------+

/* upgrade from branch 2.10 to 2.11 */
/* ******************************** */
function upgrade_210()
{
	global $conf;
	  
  $q = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("nbc_UserAdvManager_ConfirmMail","false;5;Hello.
		
This is a reminder message because you registered on our gallery but you do not validate your registration and your validation key has expired. To still allow you to access to our gallery, your validation period has been reset. You have again 5 days to validate your registration.

Note: After this period, your account will be permanently deleted.;false;Hello.

This is a reminder message because you registered on our gallery but you do not validate your registration and your validation key will expire. To allow you access to our gallery, you have 2 days to confirm your registration by clicking on the link in the message you should have received when you registered.

Note: After this period, your account will be permanently deleted.","Parametres nbc_UserAdvManager - ConfirmMail")
  ;';
  pwg_query($q);

  upgrade_211();
}


/* upgrade from branch 2.11 to 2.12 */
/* ******************************** */
function upgrade_211()
{
	global $conf;

  $conf_UAM = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();

  if ((!isset($conf_UAM[14]) and !isset($conf_UAM[15])) and !isset($conf_UAM[16]) and !isset($conf_UAM[17]))
  {
    $upgrade_UAM = $conf_UAM[0].';'.$conf_UAM[1].';'.$conf_UAM[2].';'.$conf_UAM[3].';'.$conf_UAM[4].';'.$conf_UAM[5].';'.$conf_UAM[6].';'.$conf_UAM[7].';'.$conf_UAM[8].';'.$conf_UAM[9].';'.$conf_UAM[10].';'.$conf_UAM[11].';'.$conf_UAM[12].';'.$conf_UAM[13].';false;100;false;false;10;Hello.
	
This is a reminder because a very long time passed since your last visit on our gallery. If you do not want anymore to use your access account, please let us know by replying to this email. Your account will be deleted.

On receipt of this message and no new visit within 15 days, we would be obliged to automatically delete your account.

Best regards,

The admin of the gallery.';
		
		$query = '
UPDATE '.CONFIG_TABLE.'
SET value="'.$upgrade_UAM.'"
WHERE param="nbc_UserAdvManager"
LIMIT 1
;';
		pwg_query($query);
  }
  
	$q = "
CREATE TABLE IF NOT EXISTS ".USER_LASTVISIT_TABLE." (
  user_id SMALLINT(5) NOT NULL DEFAULT '0',
  lastvisit DATETIME NULL DEFAULT NULL,
  reminder ENUM('true','false') NULL,
PRIMARY KEY (`user_id`)
  )
;";
  pwg_query($q);

  upgrade_212();
}


/* upgrade from branch 2.12 to 2.13 */
/* ******************************** */
function upgrade_212()
{
/* Create missing table */
  $query = "
ALTER TABLE ".USER_CONFIRM_MAIL_TABLE."
ADD reminder ENUM('true', 'false') NULL DEFAULT NULL
;";
  
  pwg_query($query);

/* Upgrade plugin configuration */
	global $conf;

  $conf_UAM = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();

  if ((!isset($conf_UAM[20])))
  {
    $upgrade_UAM = $conf_UAM[0].';'.$conf_UAM[1].';'.$conf_UAM[2].';'.$conf_UAM[3].';'.$conf_UAM[4].';'.$conf_UAM[5].';'.$conf_UAM[6].';'.$conf_UAM[7].';'.$conf_UAM[8].';'.$conf_UAM[9].';'.$conf_UAM[10].';'.$conf_UAM[11].';'.$conf_UAM[12].';'.$conf_UAM[13].';'.$conf_UAM[14].';'.$conf_UAM[15].';'.$conf_UAM[16].';'.$conf_UAM[17].';'.$conf_UAM[18].';'.$conf_UAM[19].';false';
		
		$query = '
UPDATE '.CONFIG_TABLE.'
SET value="'.$upgrade_UAM.'"
WHERE param="nbc_UserAdvManager"
LIMIT 1
;';
		pwg_query($query);
    
    upgrade_213();
  }
}


/* upgrade from branch 2.13 to 2.14 */
/* ******************************** */
function upgrade_213()
{
	global $conf;
  
  $conf_UAM = explode(';', $conf['nbc_UserAdvManager']);

  $upgrade_UAM = array($conf_UAM[0],$conf_UAM[1],$conf_UAM[2],$conf_UAM[3],$conf_UAM[4],$conf_UAM[5],$conf_UAM[6],$conf_UAM[7],$conf_UAM[8],$conf_UAM[9],$conf_UAM[10],$conf_UAM[11],$conf_UAM[12],$conf_UAM[13],$conf_UAM[14],$conf_UAM[15],$conf_UAM[16],$conf_UAM[17],$conf_UAM[18],$conf_UAM[19],$conf_UAM[20],'false');

  $query = '
UPDATE '.CONFIG_TABLE.'
  SET value = "'.addslashes(serialize($upgrade_UAM)).'"
  WHERE param = "nbc_UserAdvManager"
;';
  pwg_query($query);
  
  if (unserialize($conf['nbc_UserAdvManager_ConfirmMail']) === false)
  {
    $data = explode(';', $conf['nbc_UserAdvManager_ConfirmMail']);

    $query = '
UPDATE '.CONFIG_TABLE.'
  SET value = "'.addslashes(serialize($data)).'"
  WHERE param = "nbc_UserAdvManager_ConfirmMail"
;';
    pwg_query($query);
  }
}
?>