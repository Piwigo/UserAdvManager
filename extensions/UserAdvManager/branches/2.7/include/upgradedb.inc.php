<?php
/**
 * @author Eric@piwigo.org
 *  
 * Upgrade processes for old plugin version
 * Called from maintain.inc.php on plugin activation
 * 
 */

if(!defined('UAM_PATH'))
{
  define('UAM_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');
}

include_once (UAM_PATH.'include/constants.php');
include_once (UAM_PATH.'include/functions.inc.php');

// +----------------------------------------------------------+
// |       Upgrading database from old plugin versions        |
// +----------------------------------------------------------+


/* *************************************** */
/* Update plugin version in conf table     */
/* Used everytime a new version is updated */
/* even if no database upgrade is needed   */
/* *************************************** */

function UAM_version_update()
{
  // Get current plugin version
  // --------------------------
  $plugin =  PluginInfos(UAM_PATH);
  $version = $plugin['version'];

  // Update plugin version in #_config table
  // ---------------------------------------
  $query = '
UPDATE '.CONFIG_TABLE.'
SET value="'.$version.'"
WHERE param="UserAdvManager_Version"
LIMIT 1
;';

  pwg_query($query);


// Check #_plugin table consistency
// Only useful if a previous version upgrade has not worked correctly (rare case)
// ------------------------------------------------------------------------------
  $query = '
SELECT version
  FROM '.PLUGINS_TABLE.'
WHERE id = "UserAdvManager"
;';
  
  $data = pwg_db_fetch_assoc(pwg_query($query));
  
  if (empty($data['version']) or $data['version'] <> $version)
  {
    $query = '
UPDATE '.PLUGINS_TABLE.'
SET version="'.$version.'"
WHERE id = "UserAdvManager"
LIMIT 1
;';

    pwg_query($query);
  }
}


/* upgrade from branch 2.10 to 2.11 */
/* ******************************** */
function upgrade_210_211()
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

  upgrade_211_212();
}


/* upgrade from branch 2.11 to 2.12 */
/* ******************************** */
function upgrade_211_212()
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

    conf_update_param('nbc_UserAdvManager', pwg_db_real_escape_string($upgrade_UAM));
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

  upgrade_212_213();
}


/* upgrade from branch 2.12 to 2.13 */
/* ******************************** */
function upgrade_212_213()
{
  // Create missing table
  // --------------------
  $query = '
ALTER TABLE '.USER_CONFIRM_MAIL_TABLE.'
ADD reminder ENUM("true", "false") NULL DEFAULT NULL
;';
  
  pwg_query($query);

  // Upgrade plugin configuration
  // ----------------------------
	global $conf;

  $conf_UAM = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();

  if ((!isset($conf_UAM[20])))
  {
    $upgrade_UAM = $conf_UAM[0].';'.$conf_UAM[1].';'.$conf_UAM[2].';'.$conf_UAM[3].';'.$conf_UAM[4].';'.$conf_UAM[5].';'.$conf_UAM[6].';'.$conf_UAM[7].';'.$conf_UAM[8].';'.$conf_UAM[9].';'.$conf_UAM[10].';'.$conf_UAM[11].';'.$conf_UAM[12].';'.$conf_UAM[13].';'.$conf_UAM[14].';'.$conf_UAM[15].';'.$conf_UAM[16].';'.$conf_UAM[17].';'.$conf_UAM[18].';'.$conf_UAM[19].';false';
		
		conf_update_param('nbc_UserAdvManager', pwg_db_real_escape_string($upgrade_UAM));
    
    upgrade_213_214();
  }
}


/* upgrade from branch 2.13 to 2.14 */
/* ******************************** */
function upgrade_213_214()
{
	global $conf;
  
  $conf_UAM = explode(';', $conf['nbc_UserAdvManager']);

  $upgrade_UAM = array($conf_UAM[0],$conf_UAM[1],$conf_UAM[2],$conf_UAM[3],$conf_UAM[4],$conf_UAM[5],$conf_UAM[6],$conf_UAM[7],$conf_UAM[8],$conf_UAM[9],$conf_UAM[10],$conf_UAM[11],$conf_UAM[12],$conf_UAM[13],$conf_UAM[14],$conf_UAM[15],$conf_UAM[16],$conf_UAM[17],$conf_UAM[18],$conf_UAM[19],$conf_UAM[20],'false');

  $query = '
UPDATE '.CONFIG_TABLE.'
  SET value = "'.pwg_db_real_escape_string(serialize($upgrade_UAM)).'"
  WHERE param = "nbc_UserAdvManager"
;';
  pwg_query($query);
  
  if (unserialize($conf['nbc_UserAdvManager_ConfirmMail']) === false)
  {
    $data = explode(';', $conf['nbc_UserAdvManager_ConfirmMail']);

    conf_update_param('nbc_UserAdvManager_ConfirmMail', pwg_db_real_escape_string(serialize($data)));
    
    upgrade_214_215();
  }
}


/* upgrade from branch 2.14 to 2.15 */
/* ******************************** */
function upgrade_214_215()
{
  global $conf;

  // Changing parameter name
  // -----------------------
  $q = '
UPDATE '.CONFIG_TABLE.'
SET param = "UserAdvManager"
WHERE param = "nbc_UserAdvManager"
;';
  pwg_query($q);
  
  $q = '
UPDATE '.CONFIG_TABLE.'
SET param = "UserAdvManager_ConfirmMail"
WHERE param = "nbc_UserAdvManager_ConfirmMail"
;';
  pwg_query($q);

  // Upgrading ConfirmMail options
  // -----------------------------
  $query = '
SELECT value
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager_ConfirmMail"
;';

  $result = pwg_query($query);
  $conf_UAM_ConfirmMail = pwg_db_fetch_assoc($result);
    
  $conf_ConfirmMail = unserialize($conf_UAM_ConfirmMail['value']);
  
  $conf_ConfirmMail[5] ='Thank you to have confirmed your email address and your registration on the gallery. Have fun !';
  $conf_ConfirmMail[6] ='Your activation key is incorrect or expired or you have already validated your account, please contact the webmaster to fix this problem.';
  
  $update_conf = serialize($conf_ConfirmMail);
  
  conf_update_param('UserAdvManager_ConfirmMail', pwg_db_real_escape_string($update_conf));
    
  upgrade_2153_2154();
}


/* upgrade from 2.15.3 to 2.15.4 */
/* ***************************** */
function upgrade_2153_2154()
{
  global $conf;

  // Upgrading options
  // -----------------
  $query = '
SELECT value
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager"
;';

  $result = pwg_query($query);
  $conf_UAM = pwg_db_fetch_assoc($result);
    
  $Newconf_UAM = unserialize($conf_UAM['value']);
  
  $Newconf_UAM[0] = $Newconf_UAM[0];
  $Newconf_UAM[1] = $Newconf_UAM[2];
  $Newconf_UAM[2] = $Newconf_UAM[3];
  $Newconf_UAM[3] = $Newconf_UAM[4];
  $Newconf_UAM[4] = $Newconf_UAM[5];
  $Newconf_UAM[5] = $Newconf_UAM[6];
  $Newconf_UAM[6] = $Newconf_UAM[7];
  $Newconf_UAM[7] = $Newconf_UAM[8];
  $Newconf_UAM[8] = $Newconf_UAM[9];
  $Newconf_UAM[9] = $Newconf_UAM[10];
  $Newconf_UAM[10] = $Newconf_UAM[11];
  $Newconf_UAM[11] = $Newconf_UAM[12];
  $Newconf_UAM[12] = $Newconf_UAM[13];
  $Newconf_UAM[13] = $Newconf_UAM[14];
  $Newconf_UAM[14] = $Newconf_UAM[15];
  $Newconf_UAM[15] = $Newconf_UAM[16];
  $Newconf_UAM[16] = $Newconf_UAM[17];
  $Newconf_UAM[17] = $Newconf_UAM[18];
  $Newconf_UAM[18] = $Newconf_UAM[19];
  $Newconf_UAM[19] = $Newconf_UAM[20];
  $Newconf_UAM[20] = $Newconf_UAM[21];
  $Newconf_UAM[21] = 'false';
  
  $update_conf = serialize($Newconf_UAM);
  
  conf_update_param('UserAdvManager', pwg_db_real_escape_string($update_conf));

  $query = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("UserAdvManager_Redir","0","UAM Redirections")
  ;';
  
  pwg_query($query);
}


/* upgrade from 2.15.x to 2.16.0 */
/* ***************************** */
function upgrade_215_2160()
{
  global $conf;

  // Upgrading options
  // -----------------
  $query = '
SELECT value
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager"
;';

  $result = pwg_query($query);
  $conf_UAM = pwg_db_fetch_assoc($result);
    
  $Newconf_UAM = unserialize($conf_UAM['value']);
  
  $Newconf_UAM[22] = 'false';
  $Newconf_UAM[23] = 'false';
  $Newconf_UAM[24] = 'Sorry, your account has been deleted due to a too long time passed since your last visit.';
  $Newconf_UAM[25] = 'Sorry, your account has been deprecated due to a too long time passed since your last visit. Please, use the following link to revalidate your account.';
  $Newconf_UAM[26] = '-1';
  $Newconf_UAM[27] = '-1';
  $Newconf_UAM[28] = 'Thank you to have registered the gallery. Your account has been manually validated by admin. You can now visit all the gallery for free !';
  
  $update_conf = serialize($Newconf_UAM);
  
  conf_update_param('UserAdvManager', pwg_db_real_escape_string($update_conf));

  // Insert a new config entry for futur plugin's version check
  // ----------------------------------------------------------
  $query = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("UserAdvManager_Version","2.16.0","UAM version check")
  ;';
  
  pwg_query($query);
}


/* upgrade from 2.16.x to 2.20.0 */
/* ***************************** */
function upgrade_216_220()
{
  global $conf;

  // Upgrading options
  // -----------------
  $query = '
SELECT value
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager"
;';

  $result = pwg_query($query);
  $conf_UAM = pwg_db_fetch_assoc($result);
    
  $Newconf_UAM = unserialize($conf_UAM['value']);
  
  $Newconf_UAM[29] = 'false';
  $Newconf_UAM[30] = 'You have requested a password reset on our gallery. Please, find below your new connection settings.';
  $Newconf_UAM[31] = 'false';
  $Newconf_UAM[32] = 'Sorry, your account has been deleted because you have not validated your registration in requested time. Please, try registration with a valid and non blocked email account.';
  $Newconf_UAM[33] = 'false';
  $Newconf_UAM[34] = 'false';
  
  $update_conf = serialize($Newconf_UAM);
  
  conf_update_param('UserAdvManager', pwg_db_real_escape_string($update_conf));

  // Create new UAM entry in plugins table
  // -------------------------------------
  $uam_new_version = "2.20.0";

  $query = '
INSERT INTO '.PLUGINS_TABLE.' (id, state, version)
VALUES ("UserAdvManager","active","'.$uam_new_version.'")
;';
  
  pwg_query($query);

  // Delete old plugin entry in plugins table
  // ----------------------------------------
  $query = '
DELETE FROM '.PLUGINS_TABLE.'
WHERE id="NBC_UserAdvManager"
LIMIT 1
;';
  
  pwg_query($query);

  // Rename directory
  // ----------------
  if (!rename(PHPWG_PLUGINS_PATH.'NBC_UserAdvManager', PHPWG_PLUGINS_PATH.'UserAdvManager'))
  {
    die('Fatal error on plugin upgrade process : Unable to rename directory ! Please, rename manualy the plugin directory name from ../plugins/NBC_UserAdvManager to ../plugins/UserAdvManager.');
  }
}

/* upgrade from 2.20.3 to 2.20.4 */
/* ***************************** */
function upgrade_2203_2204()
{
  global $conf;

  // Upgrading options
  // -----------------
  $query = '
SELECT value
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager"
;';

  $result = pwg_query($query);
  $conf_UAM = pwg_db_fetch_assoc($result);
    
  $Newconf_UAM = unserialize($conf_UAM['value']);
  
  $Newconf_UAM[35] = 'false';
  
  $update_conf = serialize($Newconf_UAM);
  
  conf_update_param('UserAdvManager', pwg_db_real_escape_string($update_conf));
}

/* upgrade from 2.20.4 to 2.20.7 */
/* ***************************** */
function upgrade_2204_2207()
{
  global $conf;

  // Upgrading options
  // -----------------
  $query = '
SELECT value
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager"
;';

  $result = pwg_query($query);
  $conf_UAM = pwg_db_fetch_assoc($result);
    
  $Newconf_UAM = unserialize($conf_UAM['value']);
  
  $Newconf_UAM[36] = 'false';
  $Newconf_UAM[37] = '-1';
  
  $update_conf = serialize($Newconf_UAM);

  conf_update_param('UserAdvManager', pwg_db_real_escape_string($update_conf));
}

/* upgrade from 2.20.7 to 2.20.8 */
/* ***************************** */
function upgrade_2207_2208()
{
  global $conf;

  // Upgrading options
  // -----------------
  $query = '
SELECT value
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager"
;';

  $result = pwg_query($query);
  $conf_UAM = pwg_db_fetch_assoc($result);
    
  $Newconf_UAM = unserialize($conf_UAM['value']);

  // Refactoring all configuration options
  // -------------------------------------
  $Newconf_UAM[0] = $Newconf_UAM[0];
  $Newconf_UAM[1] = $Newconf_UAM[1];
  $Newconf_UAM[2] = $Newconf_UAM[2];
  $Newconf_UAM[3] = $Newconf_UAM[3];
  $Newconf_UAM[4] = $Newconf_UAM[4];
  $Newconf_UAM[5] = $Newconf_UAM[6]; //remove osolete anonymus comments option
  $Newconf_UAM[6] = $Newconf_UAM[7];
  $Newconf_UAM[7] = $Newconf_UAM[8];
  $Newconf_UAM[8] = $Newconf_UAM[9];
  $Newconf_UAM[9] = $Newconf_UAM[10];
  $Newconf_UAM[10] = $Newconf_UAM[11];
  $Newconf_UAM[11] = $Newconf_UAM[12];
  $Newconf_UAM[12] = $Newconf_UAM[13];
  $Newconf_UAM[13] = $Newconf_UAM[14];
  $Newconf_UAM[14] = $Newconf_UAM[15];
  $Newconf_UAM[15] = $Newconf_UAM[16];
  $Newconf_UAM[16] = $Newconf_UAM[17];
  $Newconf_UAM[17] = $Newconf_UAM[18];
  $Newconf_UAM[18] = $Newconf_UAM[19];
  $Newconf_UAM[19] = $Newconf_UAM[20];
  $Newconf_UAM[20] = $Newconf_UAM[21];
  $Newconf_UAM[21] = $Newconf_UAM[22];
  $Newconf_UAM[22] = $Newconf_UAM[23];
  $Newconf_UAM[23] = $Newconf_UAM[24];
  $Newconf_UAM[24] = $Newconf_UAM[25];
  $Newconf_UAM[25] = $Newconf_UAM[26];
  $Newconf_UAM[26] = $Newconf_UAM[27];
  $Newconf_UAM[27] = $Newconf_UAM[28];
  $Newconf_UAM[28] = $Newconf_UAM[29];
  $Newconf_UAM[29] = $Newconf_UAM[30];
  $Newconf_UAM[30] = $Newconf_UAM[31];
  $Newconf_UAM[31] = $Newconf_UAM[32];
  $Newconf_UAM[32] = $Newconf_UAM[33];
  $Newconf_UAM[33] = $Newconf_UAM[34];
  $Newconf_UAM[34] = $Newconf_UAM[35];
  
  // unset obsolete conf
  // -------------------
  unset ($Newconf_UAM[35]);
  unset ($Newconf_UAM[36]);
  unset ($Newconf_UAM[37]);
  
  $update_conf = serialize($Newconf_UAM);

  conf_update_param('UserAdvManager', pwg_db_real_escape_string($update_conf));
}


/* upgrade from 2.20.8 to 2.30.0 */
/* ***************************** */
function upgrade_2208_2300()
{
  global $conf;

  // Upgrading options
  // -----------------
  $query = '
SELECT value
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager"
;';

  $result = pwg_query($query);
  $conf_UAM = pwg_db_fetch_assoc($result);
    
  $Newconf_UAM = unserialize($conf_UAM['value']);
  
  $Newconf_UAM[35] = '-1';
  $Newconf_UAM[36] = '-1';
  $Newconf_UAM[37] = '-1';
  $Newconf_UAM[38] = 'false';

  $update_conf = serialize($Newconf_UAM);

  conf_update_param('UserAdvManager', pwg_db_real_escape_string($update_conf));

  // Piwigo's native tables modifications for password reset function - Add pwdreset column
  // --------------------------------------------------------------------------------------
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
}


/* upgrade from 2.30.x to 2.30.2 */
/* ***************************** */
function upgrade_2300_2302()
{
  global $conf;
  
  load_language('plugin.lang', UAM_PATH);

  // Upgrading options
  // -----------------
  $query = '
SELECT value
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager"
;';

  $result = pwg_query($query);
  $conf_UAM = pwg_db_fetch_assoc($result);
    
  $Newconf_UAM = unserialize($conf_UAM['value']);
  
  $Newconf_UAM[39] = 'false';
  $Newconf_UAM[40] = l10n('UAM_Default_RejectConnexion_Txt');

  $update_conf = serialize($Newconf_UAM);

  conf_update_param('UserAdvManager', pwg_db_real_escape_string($update_conf));
}


/* upgrade from 2.30.x to 2.40.0 */
/* ***************************** */
function upgrade_2300_2400()
{
  global $conf;
  
  load_language('plugin.lang', UAM_PATH);

  // Upgrading options
  // -----------------
  $query = '
SELECT value
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager"
;';

  $result = pwg_query($query);
  $conf_UAM = pwg_db_fetch_assoc($result);
    
  $Newconf_UAM = unserialize($conf_UAM['value']);

  $Newconf_UAM[41] = l10n('UAM_Default_ConfirmMail_Subject');        // UAM_CONFIRMMAIL_SUBJECT
  $Newconf_UAM[42] = l10n('UAM_Default_ConfirmMail_Remail_Subject'); // UAM_CONFIRMMAIL_REMAIL_SUBJECT
  $Newconf_UAM[43] = l10n('UAM_Default_InfoMail_Subject');           // UAM_INFOMAIL_SUBJECT
  $Newconf_UAM[44] = l10n('UAM_Default_GTAutoMail_Subject');         // UAM_GTAUTOMAIL_SUBJECT
  $Newconf_UAM[45] = l10n('UAM_Default_GTReminder_Subject');         // UAM_GTREMINDER_SUBJECT
  $Newconf_UAM[46] = l10n('UAM_Default_AdminValidationMail_Subject');// UAM_ADMINVALIDATIONMAIL_SUBJECT

  $update_conf = serialize($Newconf_UAM);

  conf_update_param('UserAdvManager', pwg_db_real_escape_string($update_conf));
}


/* upgrade from 2.40.x to 2.41.0 */
/* ***************************** */
function upgrade_2400_2410()
{
  global $conf;
  $conf_UAM = unserialize($conf['UserAdvManager']);
  
  // Piwigo's native tables modifications for validation status - Add UAM_validated column
  // -------------------------------------------------------------------------------------
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

  // Fill UAM_validated column with correct information for registered and validated  users
  // --------------------------------------------------------------------------------------
		
		// It goes for everybody registered in the gallery except for Guest and AC users (16 and 18)
  $query = '
SELECT DISTINCT u.id AS id, u.username AS username
FROM '.USERS_TABLE.' AS u
		INNER JOIN '.USER_INFOS_TABLE.' AS ui
				ON u.id = ui.user_id
		LEFT JOIN '.USER_GROUP_TABLE.' AS ug
				ON u.id = ug.user_id
WHERE u.id != 2
		AND u.username != \'16\'
		AND u.username != \'18\'';

		if ($conf_UAM[3] <> '-1' and $conf_UAM[4] == '-1')
		{
				$query.= '
AND ug.group_id = '.$conf_UAM[3];
		}
		if ($conf_UAM[3] == '-1' and $conf_UAM[4] <> '-1')
		{
				$query.= '
AND ui.status = \''.$conf_UAM[4]."'";
		}
		if ($conf_UAM[3] <> '-1' and $conf_UAM[4] <> '-1')
		{
				$query.= '
AND ug.group_id = '.$conf_UAM[3];
		}
		$query.= ';';

		$result = pwg_query($query);

		while($row = pwg_db_fetch_assoc($result))
		{
				$query = '
UPDATE '.USERS_TABLE.'
SET UAM_validated=true
WHERE id = '.$row['id'].'
;';
				pwg_query($query);
		}

		// It goes to Webmaster too
		$query = '
UPDATE '.USERS_TABLE.'
SET UAM_validated=true
WHERE id = 1
;';
		pwg_query($query);
}


/* upgrade from 2.41.x to 2.50.0 */
/* ***************************** */
function upgrade_2410_2500()
{
  global $conf;
  
  load_language('plugin.lang', UAM_PATH);

  // Upgrading options - Changing config variables to assoc array
  // ------------------------------------------------------------
  
  // Upgrade $conf_UAM options
  $conf_UAM = unserialize($conf['UserAdvManager']);

  $Newconf_UAM = array(
    'MAIL_INFO'                   => $conf_UAM[0],
    'CONFIRM_MAIL'                => $conf_UAM[1],
    'NO_CONFIRM_GROUP'            => $conf_UAM[2],
    'VALIDATED_GROUP'             => $conf_UAM[3],
    'VALIDATED_STATUS'            => $conf_UAM[4],
    'USERNAME_CHAR'               => $conf_UAM[5],
    'USERNAME_CHAR_LIST'          => $conf_UAM[6],
    'NO_CONFIRM_STATUS'           => $conf_UAM[7],
    'MAILINFO_TEXT'               => $conf_UAM[8],
    'CONFIRMMAIL_TEXT'            => $conf_UAM[9],
    'MAILEXCLUSION'               => $conf_UAM[10],
    'MAILEXCLUSION_LIST'          => $conf_UAM[11],
    'PASSWORDENF'                 => $conf_UAM[12],
    'PASSWORD_SCORE'              => $conf_UAM[13],
    'ADMINPASSWENF'               => $conf_UAM[14],
    'GHOSTRACKER'                 => $conf_UAM[15],
    'GHOSTRACKER_DAYLIMIT'        => $conf_UAM[16],
    'GHOSTRACKER_REMINDERTEXT'    => $conf_UAM[17],
    'ADDLASTVISIT'                => $conf_UAM[18],
    'ADMINCONFMAIL'               => $conf_UAM[19],
    'REDIRTOPROFILE'              => $conf_UAM[20],
    'GTAUTO'                      => $conf_UAM[21],
    'GTAUTOMAIL'                  => $conf_UAM[22],
    'GTAUTODEL'                   => $conf_UAM[23],
    'GTAUTOMAILTEXT'              => $conf_UAM[24],
    'DOWNGRADE_GROUP'             => $conf_UAM[25],
    'DOWNGRADE_STATUS'            => $conf_UAM[26],
    'ADMINVALIDATIONMAIL'         => $conf_UAM[27],
    'CUSTOMPASSWRETR'             => $conf_UAM[28],
    'CUSTOMPASSWRETR_TEXT'        => $conf_UAM[29],
    'USRAUTO'                     => $conf_UAM[30],
    'USRAUTODEL'                  => $conf_UAM[31],
    'USRAUTOMAIL'                 => $conf_UAM[32],
    'STUFFS'                      => $conf_UAM[33],
    'HIDEPASSW'                   => $conf_UAM[34],
    'NO_VALID_LEVEL'              => $conf_UAM[35],
    'VALID_LEVEL'                 => $conf_UAM[36],
    'DOWNGRADE_LEVEL'             => $conf_UAM[37],
    'PWDRESET'                    => $conf_UAM[38],
    'REJECTCONNECT'               => $conf_UAM[39],
    'REJECTCONNECT_TEXT'          => $conf_UAM[40],
    'CONFIRMMAIL_SUBJECT'         => $conf_UAM[41],
    'CONFIRMMAIL_REMAIL_SUBJECT'  => $conf_UAM[42],
    'INFOMAIL_SUBJECT'            => $conf_UAM[43],
    'GTAUTOMAIL_SUBJECT'          => $conf_UAM[44],
    'GTREMINDER_SUBJECT'          => $conf_UAM[45],
    'ADMINVALIDATIONMAIL_SUBJECT' => $conf_UAM[46]
  );

  // unset obsolete conf
  // -------------------
  for ($i = 0; $i <= 46; $i++)
  {
    unset ($conf_UAM[$i]);
  }

  $update_conf = serialize($Newconf_UAM);

  conf_update_param('UserAdvManager', pwg_db_real_escape_string($update_conf));


  // Upgrade $conf_UAM_ConfirmMail
  $conf_UAM_ConfirmMail = unserialize($conf['UserAdvManager_ConfirmMail']);

  $Newconf_UAM_ConfirmMail = array (
    'CONFIRMMAIL_TIMEOUT'     => $conf_UAM_ConfirmMail[0],
    'CONFIRMMAIL_DELAY'       => $conf_UAM_ConfirmMail[1],
    'CONFIRMMAIL_REMAIL_TXT1' => $conf_UAM_ConfirmMail[2],
    'CONFIRMMAIL_REMAIL'      => $conf_UAM_ConfirmMail[3],
    'CONFIRMMAIL_REMAIL_TXT2' => $conf_UAM_ConfirmMail[4],
    'CONFIRMMAIL_CUSTOM_TXT1' => $conf_UAM_ConfirmMail[5],
    'CONFIRMMAIL_CUSTOM_TXT2' => $conf_UAM_ConfirmMail[6]
  );

  // unset obsolete conf
  // -------------------
  for ($i = 0; $i <= 6; $i++)
  {
    unset ($conf_UAM_ConfirmMail[$i]);
  }

  $update_conf = serialize($Newconf_UAM_ConfirmMail);

  conf_update_param('UserAdvManager_ConfirmMail', pwg_db_real_escape_string($update_conf));
}


/* upgrade from 2.50.x to 2.50.11 */
/* ***************************** */
function upgrade_2500_25011()
{
  global $conf;
  
  load_language('plugin.lang', UAM_PATH);

  // Upgrading options
  // -----------------
  $query = '
SELECT value
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager"
;';

  $result = pwg_query($query);
  $conf_UAM = pwg_db_fetch_assoc($result);
    
  $Newconf_UAM = unserialize($conf_UAM['value']);

  $Newconf_UAM['ADD_GALLERY_URL_TO_EMAILS'] = 'false';

  $update_conf = serialize($Newconf_UAM);

  conf_update_param('UserAdvManager', pwg_db_real_escape_string($update_conf));
}


/* upgrade from 2.50.x to 2.51.0 */
/* ***************************** */
function upgrade_2500_2510()
{
  global $conf;
  
  load_language('plugin.lang', UAM_PATH);

  // Upgrade $conf_UAM options
  $conf_UAM = unserialize($conf['UserAdvManager']);

  unset ($conf_UAM['PASSWORDENF']);
  unset ($conf_UAM['PASSWORD_SCORE']);
  unset ($conf_UAM['ADMINPASSWENF']);
  unset ($conf_UAM['PWDRESET']);

  $update_conf = serialize($conf_UAM);

  conf_update_param('UserAdvManager', pwg_db_real_escape_string($update_conf));

  // Cleanup obsolete database modification
  $q = '
ALTER TABLE '.USERS_TABLE.'
DROP UAM_pwdreset 
;';
  pwg_query($q);
}


/* upgrade from 2.51.x to 2.70.3 */
/* ***************************** */
function upgrade_2510_2703()
{
  global $conf;
  
  load_language('plugin.lang', UAM_PATH);

  // Upgrading options
  // -----------------
  $query = '
SELECT value
  FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager"
;';

  $result = pwg_query($query);
  $conf_UAM = pwg_db_fetch_assoc($result);
    
  $Newconf_UAM = unserialize($conf_UAM['value']);

  // Add "send a copy of all emails to admins" new option
  $Newconf_UAM['EMAILS_COPY_TO_ADMINS'] = 'false';

  $update_conf = serialize($Newconf_UAM);

  conf_update_param('UserAdvManager', pwg_db_real_escape_string($update_conf));
}
?>