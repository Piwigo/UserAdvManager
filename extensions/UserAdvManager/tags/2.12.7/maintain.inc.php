<?php

if(!defined("NBC_UserAdvManager_PATH"))
  define('NBC_UserAdvManager_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

include_once (NBC_UserAdvManager_PATH.'include/constants.php');
include_once (NBC_UserAdvManager_PATH.'include/functions_UserAdvManager.inc.php');

function plugin_install()
{
	global $conf;
	
  $q = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("nbc_UserAdvManager","true;false;false;-1;-1;-1;false;false;;-1;;;false;;false;100;false;false;10;Hello.
	
This is a reminder because a very long time passed since your last visit on our gallery. If you do not want anymore to use your access account, please let us know by replying to this email. Your account will be deleted.

On receipt of this message and no new visit within 15 days, we would be obliged to automatically delete your account.

Best regards,

The admin of the gallery.","Parametres du plugin nbc UserAdvManager")
  ;';
  pwg_query($q);

  $q = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("nbc_UserAdvManager_ConfirmMail","false;5;Hello.
		
This is a reminder message because you registered on our gallery but you do not validate your registration and your validation key has expired. To still allow you to access to our gallery, your validation period has been reset. You have again 5 days to validate your registration.

Note: After this period, your account will be permanently deleted.;false;Hello.

This is a reminder message because you registered on our gallery but you do not validate your registration and your validation key will expire. To allow you access to our gallery, you have 2 days to confirm your registration by clicking on the link in the message you should have received when you registered.

Note: After this period, your account will be permanently deleted.","Parametres nbc_UserAdvManager - ConfirmMail")
  ;';
  pwg_query($q);

	$q = "
CREATE TABLE IF NOT EXISTS ".USER_CONFIRM_MAIL_TABLE." (
  id varchar(50) NOT NULL default '',
  user_id smallint(5) NOT NULL default '0',
  mail_address varchar(255) default NULL,
  status enum('webmaster','admin','normal','generic','guest') default NULL,
  date_check datetime default NULL,
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
	
/* Check for upgrade from 2.10 */
	  $query = '
SELECT *
  FROM '.CONFIG_TABLE.'
WHERE param = "nbc_UserAdvManager_ConfirmMail"
;';
  $count = mysql_num_rows(pwg_query($query)); 
  
  /* upgrade from branch 2.10 */
	if ($count == 0)
	{
		upgrade_210();
	}

/* Check for upgrade from 2.11 */
  if (!table_exist(USER_LASTVISIT_TABLE))
  {
    /* upgrade from branch 2.11 */
		upgrade_211();
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

/* upgrade from branch 2.10 */
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

/* upgrade from branch 2.11 */
function upgrade_211()
{
	global $conf;

  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();

  if ((!isset($conf_nbc_UserAdvManager[14]) and !isset($conf_nbc_UserAdvManager[15])) and !isset($conf_nbc_UserAdvManager[16]) and !isset($conf_nbc_UserAdvManager[17]))
  {
    $upgrade_nbc_UserAdvManager = $conf_nbc_UserAdvManager[0].';'.$conf_nbc_UserAdvManager[1].';'.$conf_nbc_UserAdvManager[2].';'.$conf_nbc_UserAdvManager[3].';'.$conf_nbc_UserAdvManager[4].';'.$conf_nbc_UserAdvManager[5].';'.$conf_nbc_UserAdvManager[6].';'.$conf_nbc_UserAdvManager[7].';'.$conf_nbc_UserAdvManager[8].';'.$conf_nbc_UserAdvManager[9].';'.$conf_nbc_UserAdvManager[10].';'.$conf_nbc_UserAdvManager[11].';'.$conf_nbc_UserAdvManager[12].';'.$conf_nbc_UserAdvManager[13].';false;100;false;false;10;Hello.
	
This is a reminder because a very long time passed since your last visit on our gallery. If you do not want anymore to use your access account, please let us know by replying to this email. Your account will be deleted.

On receipt of this message and no new visit within 15 days, we would be obliged to automatically delete your account.

Best regards,

The admin of the gallery.';
		
		$query = '
UPDATE '.CONFIG_TABLE.'
SET value="'.$upgrade_nbc_UserAdvManager.'"
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
}
?>