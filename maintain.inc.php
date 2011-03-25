<?php

if(!defined('UAM_PATH'))
{
  define('UAM_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');
}
if (!defined('UAM_ROOT'))
{
  define('UAM_ROOT', dirname(__FILE__).'/');
}

include_once (UAM_PATH.'include/constants.php');
include_once (UAM_PATH.'include/functions.inc.php');


function plugin_install()
{
	global $conf;
	
  $default1 = array('false','false',-1,-1,-1,'false','false','',-1,'','','false','','false',100,'false','false',10,'Hello.
	
This is a reminder because a very long time passed since your last visit on our gallery. If you do not want anymore to use your access account, please let us know by replying to this email. Your account will be deleted.

On receipt of this message and no new visit within 15 days, we would be obliged to automatically delete your account.

Best regards,

The admin of the gallery.','false','false','false');

  $q = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("UserAdvManager","'.addslashes(serialize($default1)).'","UAM parameters")
  ;';
  pwg_query($q);


  $default2 = array('false',5,'Hello.
		
This is a reminder message because you registered on our gallery but you do not validate your registration and your validation key has expired. To still allow you to access to our gallery, your validation period has been reset. You have again 5 days to validate your registration.

Note: After this period, your account will be permanently deleted.','false','Hello.

This is a reminder message because you registered on our gallery but you do not validate your registration and your validation key will expire. To allow you access to our gallery, you have 2 days to confirm your registration by clicking on the link in the message you should have received when you registered.

Note: After this period, your account will be permanently deleted.','Thank you to have confirmed your email address and your registration on the gallery. Have fun !','Your activation key is incorrect or expired or you have already validated your account, please contact the webmaster to fix this problem.');

  $q = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("UserAdvManager_ConfirmMail","'.addslashes(serialize($default2)).'","UAM ConfirmMail parameters")
  ;';
  pwg_query($q);
  
  $q = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("UserAdvManager_Redir","0","UAM Redirections")
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
    

/* Check for upgrade from 2.14 to 2.15 */
/* *********************************** */
    //if ($count1 == 1 or $count2 == 1)
    //{
    /* upgrade from branch 2.14 to 2.15 */
    /* ******************************** */
      upgrade_214_215();
    //}
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

  $q = 'DROP TABLE '.USER_CONFIRM_MAIL_TABLE.';';
  pwg_query( $q );

  $q = 'DROP TABLE '.USER_LASTVISIT_TABLE.';';
  pwg_query( $q );
}
?>