<?php
/*
Plugin Name: UserAdvManager
Version: auto
Description: Renforcer la gestion des utilisateurs - Enforce users management
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=216
Author: Nicco, Eric
Author URI: http://gallery-nicco.no-ip.org, http://www.infernoweb.net
*/

/* History:  UAM_PATH.'Changelog.txt.php' */

/*
 ***** TODO List *****
See project bugtracker: http://piwigo.org/bugs/my_view_page.php
*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
if (!defined('UAM_PATH')) define('UAM_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

global $conf;

include_once (UAM_PATH.'include/constants.php');
include_once (UAM_PATH.'include/functions.inc.php');

load_language('plugin.lang', UAM_PATH);
load_language('help.lang', UAM_PATH);
$conf_UAM = unserialize($conf['UserAdvManager']);


// Plugin administration panel
// ---------------------------
add_event_handler('get_admin_plugin_menu_links', 'UAM_admin_menu');

// Features and controls on user connexion
// ---------------------------------------
add_event_handler('loc_begin_index', 'UAM_Init');

// User creation
// -------------
add_event_handler('register_user', 'UAM_Adduser');

// User deletion
// -------------
add_event_handler('delete_user', 'UAM_Deluser');

// Check users registration
// ------------------------
add_event_handler('register_user_check', 'UAM_RegistrationCheck', EVENT_HANDLER_PRIORITY_NEUTRAL, 2);

if (script_basename() == 'profile')
{
  add_event_handler('loc_begin_profile', 'UAM_Profile_Init');
}

// Redirection to profile page
// ---------------------------
add_event_handler('login_success', 'UAM_LoginTasks',EVENT_HANDLER_PRIORITY_NEUTRAL, 1);

// Adding customized text to lost password email
// ---------------------------------------------
add_event_handler('render_lost_password_mail_content', 'UAM_lost_password_mail_content');

// *** Important ! This is necessary to make email exclusion work in admin's users management panel ***
// ----------------------------------------------------------------------------------------------------
add_event_handler('init', 'UAM_InitPage');


// PWG_Stuffs module
// -----------------
if (isset($conf_UAM['STUFFS']) and $conf_UAM['STUFFS'] == 'true')
{
  add_event_handler('get_stuffs_modules', 'register_UAM_stuffs_module');
}


// Check options compatibility between UAM and Piwigo at admin page load
// ---------------------------------------------------------------------
add_event_handler('loc_begin_admin_page', 'UAM_check_compat');
?>