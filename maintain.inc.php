<?php

if(!defined("NBC_UserAdvManager_PATH"))
  define('NBC_UserAdvManager_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

include_once (NBC_UserAdvManager_PATH.'include/constants.php');

function plugin_install()
{
	global $conf;
	
  $q = '
    INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
    VALUES ("nbc_UserAdvManager","true;false;false;-1;-1;-1;false;false;;-1;;;false;;","Parametres du plugin nbc UserAdvManager")
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
}

function plugin_activate()
{
	  global $conf;
	
/* Check for upgrade */
	  $query = '
    SELECT *
		FROM '.CONFIG_TABLE.'
    WHERE param = "nbc_UserAdvManager_ConfirmMail"
  ;';
  $count = mysql_num_rows(pwg_query($query)); 
  
  /* upgrade from branch 2.10 */
	if ($count == 0)
	{
		upgrade_UserAdvManager();
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
}

function upgrade_UserAdvManager()
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
}
?>