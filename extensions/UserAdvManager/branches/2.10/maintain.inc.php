<?php

if(!defined("NBC_UserAdvManager_PATH"))
  define('NBC_UserAdvManager_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

include_once (NBC_UserAdvManager_PATH.'include/constants.php');

function plugin_install()
{
  $q = '
    INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
    VALUES ("nbc_UserAdvManager","true;false;false;-1;-1;-1;false;false;;-1;;;false;;","Parametres du plugin nbc UserAdvManager")
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


  $q = 'DROP TABLE '.USER_CONFIRM_MAIL_TABLE.';';
  pwg_query( $q );
}
?>