<?php
include_once (UAM_PATH.'include/constants.php');
load_language('plugin.lang', UAM_PATH);


/**
 * Triggered on get_admin_plugin_menu_links
 * 
 * Plugin's administration menu 
 */
function UAM_admin_menu($menu)
{
// +-----------------------------------------------------------------------+
// |                      Getting plugin name                              |
// +-----------------------------------------------------------------------+
  $plugin =  PluginInfos(UAM_PATH);
  $name = $plugin['name'];
  
  array_push($menu,
    array(
    		'NAME' => $name,
    		'URL' => get_root_url().'admin.php?page=plugin-'.basename(UAM_PATH)
    )
  );

  return $menu;
}


/**
 * Triggered on loc_begin_admin_page
 * 
 * Check options compatibility
 */
function UAM_check_compat()
{
  global $conf, $page;
  
  $conf_UAM = unserialize($conf['UserAdvManager']);
 
  // Check mandatory email address for email exclusion
  if (!$conf['obligatory_user_mail_address'] and $conf_UAM['MAILEXCLUSION'] == 'true')
  {
    array_push($page['warnings'], l10n('UAM_mail_exclusion_error'));
  }
}


/**
 * Triggered on loc_begin_index
 * 
 * Initiating GhostTracker - Perform user logout after registration if not validated
 */
function UAM_Init()
{
  global $conf, $user;

  include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');

  $conf_UAM = unserialize($conf['UserAdvManager']);

  // Admins, Guests and Adult_Content users are not tracked for Ghost Tracker or Users Tracker
  // -----------------------------------------------------------------------------------------
  if (!is_admin() and !is_a_guest() and $user['username'] != "16" and $user['username'] != "18")
  {
    if ((isset($conf_UAM['GHOSTRACKER']) and $conf_UAM['GHOSTRACKER'] == 'true') or (isset($conf_UAM['ADDLASTVISIT']) and $conf_UAM['ADDLASTVISIT'] == 'true'))
    {
      $userid = get_userid($user['username']);
     	  
      // Looking for existing entry in last visit table
      // ----------------------------------------------
      $query = '
SELECT *
FROM '.USER_LASTVISIT_TABLE.'
WHERE user_id = '.$userid.'
;';

      $count = pwg_db_num_rows(pwg_query($query));

      if ($count == 0)
      {
        // If not, data are inserted in table
        // ----------------------------------
        $query = '
INSERT INTO '.USER_LASTVISIT_TABLE.' (user_id, lastvisit, reminder)
VALUES ('.$userid.', now(), "false")
;';
        pwg_query($query);
      }
      else if ($count > 0)
      {
        // If yes, data are updated in table
        // ---------------------------------
        $query = '
UPDATE '.USER_LASTVISIT_TABLE.'
SET lastvisit = now(), reminder = "false"
WHERE user_id = '.$userid.'
LIMIT 1
;';
        pwg_query($query);
      }
    }

    // Perform user logout after registration if not validated
    if ((isset($conf_UAM['REJECTCONNECT']) and $conf_UAM['REJECTCONNECT'] == 'true') and !UAM_UsrReg_Verif($user['id']) and !is_admin() and !is_webmaster() )
    {
      invalidate_user_cache();
      logout_user();
      if ( $conf['guest_access'] )
      {
        redirect( make_index_url().'?UAM_msg=rejected', 0);
      }
      else
      {
        redirect( get_root_url().'identification.php?UAM_msg=rejected' , 0);
      }
    }
  }
}


/**
 * Triggered on register_user
 * 
 * Additional controls on user registration
 */
function UAM_Adduser($register_user)
{
  global $conf;

  $conf_UAM = unserialize($conf['UserAdvManager']);

  // Exclusion of Adult_Content users
  // --------------------------------
  if ($register_user['username'] != "16" and $register_user['username'] != "18")
  {
    $passwd = (isset($_POST['password'])) ? $_POST['password'] : '';

    // --------------------------------------------------------------------------------------------------------------------
    // Workflow when admins have to validate registrations (CONFIRM_MAIL = local)
    // No validation needed when admins add users if ADMINCONFMAIL is set to OFF - users are considered as valid by default
    // Else a notification email with validation link is send to admins
    // Finally when a user registers himself, a notification email with validation link is send to admins
    // --------------------------------------------------------------------------------------------------------------------
    if (isset($conf_UAM['CONFIRM_MAIL']) and $conf_UAM['CONFIRM_MAIL'] == 'local')
    {
      if (is_admin() and isset($conf_UAM['ADMINCONFMAIL']) and $conf_UAM['ADMINCONFMAIL'] == 'true')
      {
        SendMail2User(1, $register_user['id'], $register_user['username'], $passwd, $register_user['email'], true); 
      }
      elseif (is_admin() and isset($conf_UAM['ADMINCONFMAIL']) and $conf_UAM['ADMINCONFMAIL'] == 'false')
      {
        SendMail2User(1, $register_user['id'], $register_user['username'], $passwd, $register_user['email'], false);
      }
      elseif (!is_admin())
      {
        SendMail2User(1, $register_user['id'], $register_user['username'], $passwd, $register_user['email'], true);
      }
    }
    // --------------------------------------------------------------------------------------------------------------------
    // Workflow when users have to validate their registration (CONFIRM_MAIL = true)
    // No validation needed when admins add users if ADMINCONFMAIL is set to OFF - users are considered as valid by default
    // Else an email with validation link is send to user
    // Finally when a user registers himself, an email with validation link is send to him
    // --------------------------------------------------------------------------------------------------------------------
    elseif (isset($conf_UAM['CONFIRM_MAIL']) and $conf_UAM['CONFIRM_MAIL'] == 'true')
    {
      if (is_admin() and isset($conf_UAM['ADMINCONFMAIL']) and $conf_UAM['ADMINCONFMAIL'] == 'true')
      {
        SendMail2User(1, $register_user['id'], $register_user['username'], $passwd, $register_user['email'], true); 
      }
      elseif (is_admin() and isset($conf_UAM['ADMINCONFMAIL']) and $conf_UAM['ADMINCONFMAIL'] == 'false')
      {
        SendMail2User(1, $register_user['id'], $register_user['username'], $passwd, $register_user['email'], false);
      }
      elseif (!is_admin())
      {
        SendMail2User(1, $register_user['id'], $register_user['username'], $passwd, $register_user['email'], true);
      }
    }
  }
}


/**
 * Triggered on delete_user
 * 
 * Database cleanup on user deletion
 */
function UAM_Deluser($user_id)
{
  // Cleanup for ConfirmMail table
  // -----------------------------
  DeleteConfirmMail($user_id);
  // Cleanup for LastVisit table
  // ---------------------------
  DeleteLastVisit($user_id);
  // Cleanup Redirection settings
  // ----------------------------
  DeleteRedir($user_id);
}


/**
 * Triggered on register_user_check
 * 
 * Additional controls on user registration check
 */
function UAM_RegistrationCheck($errors, $user)
{
  global $conf;

  // Exclusion of Adult_Content users
  // --------------------------------
  if ($user['username'] != "16" and $user['username'] != "18")
  {
    load_language('plugin.lang', UAM_PATH);

    $PasswordCheck = 0;

    $conf_UAM = unserialize($conf['UserAdvManager']);

    // Password enforcement control
    // ----------------------------
    if (isset($conf_UAM['PASSWORDENF']) and $conf_UAM['PASSWORDENF'] == 'true' and !empty($conf_UAM['PASSWORD_SCORE']))
    {
      if (!empty($user['password']) and !is_admin())
      {
        $PasswordCheck = testpassword($user['password']);
  
        if ($PasswordCheck < $conf_UAM['PASSWORD_SCORE'])
        {
          $message = get_l10n_args('UAM_reg_err_login4_%s', $PasswordCheck);
          $lang['reg_err_pass'] = l10n_args($message).$conf_UAM['PASSWORD_SCORE'];
          array_push($errors, $lang['reg_err_pass']);
        }
      }
      else if (!empty($user['password']) and is_admin() and isset($conf_UAM['ADMINPASSWENF']) and $conf_UAM['ADMINPASSWENF'] == 'true')
      {
        $PasswordCheck = testpassword($user['password']);
  
        if ($PasswordCheck < $conf_UAM['PASSWORD_SCORE'])
        {
          $message = get_l10n_args('UAM_reg_err_login4_%s', $PasswordCheck);
          $lang['reg_err_pass'] = l10n_args($message).$conf_UAM['PASSWORD_SCORE'];
          array_push($errors, $lang['reg_err_pass']);
        }
      }
    }

    // Username without forbidden keys
    // -------------------------------
    if (isset($conf_UAM['USERNAME_CHAR']) and $conf_UAM['USERNAME_CHAR'] == 'true' and !empty($user['username']) and ValidateUsername($user['username']) and !is_admin())
    {
      $lang['reg_err_login1'] = l10n('UAM_reg_err_login2')."'".$conf_UAM['USERNAME_CHAR_LIST']."'";
      array_push($errors, $lang['reg_err_login1']);
    }

    // Email without forbidden domains
    // -------------------------------
    if (isset($conf_UAM['MAILEXCLUSION']) and $conf_UAM['MAILEXCLUSION'] == 'true' and !empty($user['email']) and ValidateEmailProvider($user['email']) and !is_admin())
    {
      $lang['reg_err_login1'] = l10n('UAM_reg_err_login5')."'".$conf_UAM['MAILEXCLUSION_LIST']."'";
      array_push($errors, $lang['reg_err_login1']);
    }
    return $errors;
  }
}


/**
 * Triggered on loc_begin_profile
 */
function UAM_Profile_Init()
{
  global $conf, $user, $template;

  $conf_UAM = unserialize($conf['UserAdvManager']);

  // Update first redirection parameter
  // ----------------------------------
  if ((isset($conf_UAM['REDIRTOPROFILE']) and $conf_UAM['REDIRTOPROFILE'] == 'true'))
  {
    $user_idsOK = array();
    if (!UAM_check_profile($user['id'], $user_idsOK))
    {
      $user_idsOK[] = $user['id'];

      $query = '
UPDATE '.CONFIG_TABLE.'
SET value = "'.implode(',', $user_idsOK).'"
WHERE param = "UserAdvManager_Redir";';
          
      pwg_query($query);
    }
  }

  // Special message display for password reset
  // ------------------------------------------
  if ((isset($conf_UAM['PWDRESET']) and $conf_UAM['PWDRESET'] == 'true'))
  {
    if (UAM_check_pwgreset($user['id']))
    {
      $template->append('errors', l10n('UAM_Password_Reset_Msg'));
    }
  }

  // Controls on profile page submission
  // -----------------------------------
  if (isset($_POST['validate']) and !is_admin())
  {
    // Email without forbidden domains
    // -------------------------------
    if (isset($conf_UAM['MAILEXCLUSION']) and $conf_UAM['MAILEXCLUSION'] == 'true' and !empty($_POST['mail_address']))
    {
      if (ValidateEmailProvider($_POST['mail_address']))
      {
        $template->append('errors', l10n('UAM_reg_err_login5')."'".$conf_UAM['MAILEXCLUSION_LIST']."'");
        unset($_POST['validate']);
      }
    }

    // Password reset control
    // ----------------------
    if (isset($conf_UAM['PWDRESET']) and $conf_UAM['PWDRESET'] == 'true' and UAM_check_pwgreset($user['id']))
    {
      // if password not changed then pwdreset field = true else pwdreset field = false
      // ------------------------------------------------------------------------------
      if (!empty($_POST['use_new_pwd']))
      {
        $query = '
UPDATE '.USERS_TABLE.'
SET UAM_pwdreset = "false"
WHERE id = '.$user['id'].'
LIMIT 1
;';
        pwg_query($query);
      }
    }

    $typemail = 3; // Only information email send to user on user profile update if checked

    if (!empty($_POST['use_new_pwd']))
    {
      $typemail = 2; // Confirmation email on user profile update - With information email

      // Password enforcement control
      // ----------------------------
      if (isset($conf_UAM['PASSWORDENF']) and $conf_UAM['PASSWORDENF'] == 'true' and !empty($conf_UAM['PASSWORD_SCORE']))
      {
        $PasswordCheck = testpassword($_POST['use_new_pwd']);

        if ($PasswordCheck < $conf_UAM['PASSWORD_SCORE'])
        {
          $message = get_l10n_args('UAM_reg_err_login4_%s', $PasswordCheck);
          $template->append('errors', l10n_args($message).$conf_UAM['PASSWORD_SCORE']);
          unset($_POST['use_new_pwd']);
          unset($_POST['validate']);
        }
      }
    }

    // Sending registration confirmation by email
    // ------------------------------------------
    if ((isset($conf_UAM['CONFIRM_MAIL']) and $conf_UAM['CONFIRM_MAIL'] == 'true') or (isset($conf_UAM['CONFIRM_MAIL']) and $conf_UAM['CONFIRM_MAIL'] == 'local'))
    {
      $confirm_mail_need = false;

      if (!empty($_POST['mail_address']))
      {
        $query = '
SELECT '.$conf['user_fields']['email'].' AS email
FROM '.USERS_TABLE.'
WHERE '.$conf['user_fields']['id'].' = \''.$user['id'].'\'
;';

        list($current_email) = pwg_db_fetch_row(pwg_query($query));

        // This is to send a new validation key
        // ------------------------------------
        if ($_POST['mail_address'] != $current_email and (isset($conf_UAM['CONFIRM_MAIL']) and $conf_UAM['CONFIRM_MAIL'] == 'true'))
        {
          SetPermission($user['id']);// Set to "waiting" group or status until user validation
          SetUnvalidated($user['id']); // Set UAM_validated field to false in #_users table
          $confirm_mail_need = true;
        }

        // This is to set the user to "waiting" group or status until admin validation
        // ---------------------------------------------------------------------------
        elseif ($_POST['mail_address'] != $current_email and (isset($conf_UAM['CONFIRM_MAIL']) and $conf_UAM['CONFIRM_MAIL'] == 'local'))
        {
          SetPermission($user['id']);// Set to "waiting" group or status until admin validation
          SetUnvalidated($user['id']); // Set UAM_validated field to false in #_users table
          $confirm_mail_need = false;
        }       
      }

      if (((!empty($_POST['use_new_pwd']) and (isset($conf_UAM['MAIL_INFO']) and $conf_UAM['MAIL_INFO'] == 'true')) or $confirm_mail_need))
      {
        $query = '
SELECT '.$conf['user_fields']['username'].'
FROM '.USERS_TABLE.'
WHERE '.$conf['user_fields']['id'].' = \''.$user['id'].'\'
;';

        list($username) = pwg_db_fetch_row(pwg_query($query));
        SendMail2User($typemail, $user['id'], $username, $_POST['use_new_pwd'], $_POST['mail_address'], $confirm_mail_need);
      }
    }
  }
}


/**
 * Triggered on login_success
 * 
 * Triggers scheduled tasks at login
 * Redirects a visitor (except for admins, webmasters and generic statuses) to his profile.php page (Thx to LucMorizur)
 * 
 */
function UAM_LoginTasks()
{
  global $conf, $user;

  include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');

  $conf_UAM = unserialize($conf['UserAdvManager']);

  // Performing GhostTracker scheduled tasks
  // ---------------------------------------
  if ((isset($conf_UAM['GTAUTO']) and $conf_UAM['GTAUTO'] == 'true'))
  {
    UAM_GT_ScheduledTasks();
  }

  // Performing User validation scheduled tasks
  // ------------------------------------------
  if ((isset($conf_UAM['USRAUTO']) and $conf_UAM['USRAUTO'] == 'true'))
  {
    UAM_USR_ScheduledTasks();
  }

  // Avoid login into public galleries until registration confirmation is done
  if ((isset($conf_UAM['REJECTCONNECT']) and $conf_UAM['REJECTCONNECT'] == 'false') or ((isset($conf_UAM['REJECTCONNECT']) and $conf_UAM['REJECTCONNECT'] == 'true') and UAM_UsrReg_Verif($user['id'])) or  (!is_admin() and !is_webmaster()))
  {
    // Performing redirection to profile page on first login
    // -----------------------------------------------------
    if ((isset($conf_UAM['REDIRTOPROFILE']) and $conf_UAM['REDIRTOPROFILE'] == 'true'))
    {
      $query ='
SELECT user_id, status
FROM '.USER_INFOS_TABLE.'
WHERE user_id = '.$user['id'].'
;';
      $data = pwg_db_fetch_assoc(pwg_query($query));

      if ($data['status'] <> "admin" and $data['status'] <> "webmaster" and $data['status'] <> "generic") // Exclusion of specific accounts
      {
        $user_idsOK = array();
        if (!UAM_check_profile($user['id'], $user_idsOK))
          redirect(PHPWG_ROOT_PATH.'profile.php');
      }
    }

    // Performing redirection to profile page for password reset
    // ---------------------------------------------------------
    if ((isset($conf_UAM['PWDRESET']) and $conf_UAM['PWDRESET'] == 'true'))
    {
      $query ='
SELECT user_id, status
FROM '.USER_INFOS_TABLE.'
WHERE user_id = '.$user['id'].'
;';
      $data = pwg_db_fetch_assoc(pwg_query($query));

      if ($data['status'] <> "webmaster" and $data['status'] <> "generic") // Exclusion of specific accounts
      {
        if (UAM_check_pwgreset($user['id']))
        {
          redirect(PHPWG_ROOT_PATH.'profile.php');
        }
      }
    }
  }
  elseif ((isset($conf_UAM['REJECTCONNECT']) and $conf_UAM['REJECTCONNECT'] == 'true') and !UAM_UsrReg_Verif($user['id']) and !is_admin() and !is_webmaster())
  {
    // Logged-in user cleanup, session destruction and redirected to custom page
    // -------------------------------------------------------------------------
    invalidate_user_cache();
    logout_user();
    if ( $conf['guest_access'] )
    {
      redirect( make_index_url().'?UAM_msg=rejected', 0);
    }
    else
    {
      redirect( get_root_url().'identification.php?UAM_msg=rejected' , 0);
    }
  }
}


/**
 * Adds a new module settable in PWG_Stuffs - Triggered on get_stuffs_modules in main.inc.php
 * Useful to inform unvalidated user for their status
 * 
 */
function register_UAM_stuffs_module($modules)
{
  array_push($modules, array(
    'path' => UAM_PATH.'/stuffs_module',
    'name' => l10n('UAM_Stuffs_Title'),
    'description' => l10n('UAM_Stuffs_Desc'),
    )
  );
  return $modules;
}


/**
 * Triggered on UAM_LoginTasks()
 * 
 * Executes optional post-login tasks for Ghost users
 * 
 */
function UAM_GT_ScheduledTasks()
{
  global $conf, $user, $page;

  if (!defined('PHPWG_ROOT_PATH'))
  {
    die('Hacking attempt!');
  }

  include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');

  $conf_UAM = unserialize($conf['UserAdvManager']);

  $collection = array();
  $reminder = false;

  $page['filtered_users'] = get_ghosts_autotasks();

  foreach($page['filtered_users'] as $listed_user)
  {
    array_push($collection, $listed_user['id']);
  }

  // Auto group, status or privacy level downgrade and autodeletion if user already reminded
  // ---------------------------------------------------------------------------------------
  if ((isset($conf_UAM['GTAUTO']) and $conf_UAM['GTAUTO'] == 'true') and ((isset($conf_UAM['DOWNGRADE_GROUP']) and $conf_UAM['DOWNGRADE_GROUP'] <> -1) or (isset($conf_UAM['DOWNGRADE_STATUS']) and $conf_UAM['DOWNGRADE_STATUS'] <> -1) or (isset($conf_UAM['DOWNGRADE_LEVEL']) and $conf_UAM['DOWNGRADE_LEVEL'] <> -1)))
  {
    if (count($collection) > 0)
    {
      // Process if a non-admin nor webmaster user is logged
      // ---------------------------------------------------
      if (in_array($user['id'], $collection))
 			{
        // Check lastvisit reminder state
        // ------------------------------
        $query = '
SELECT reminder
FROM '.USER_LASTVISIT_TABLE.'
WHERE user_id = '.$user['id'].';';

        $result = pwg_db_fetch_assoc(pwg_query($query));

        if (isset($result['reminder']) and $result['reminder'] == 'true')
        {
          $reminder = true;
        }
        else
        {
          $reminder = false;
        }

        // If user already reminded for ghost account
        // ------------------------------------------
        if ($reminder)
        {
          // Delete account
          // --------------
          delete_user($user['id']);

          // Logged-in user cleanup, session destruction and redirected to custom page
          // -------------------------------------------------------------------------
          invalidate_user_cache();
          logout_user();
          redirect(make_index_url().'?UAM_msg=deleted', 0);
        }
      }
      else // Process if an admin or webmaster user is logged
      {
        foreach ($collection as $user_id)
        {
          // Check lastvisit reminder state
          // ------------------------------
          $query = '
SELECT reminder
FROM '.USER_LASTVISIT_TABLE.'
WHERE user_id = '.$user_id.';';

          $result = pwg_db_fetch_assoc(pwg_query($query));

          if (isset($result['reminder']) and $result['reminder'] == 'true')
          {
            $reminder = true;
          }
          else
          {
            $reminder = false;
          }

          // If never reminded before
          // ------------------------
          if (!$reminder)
          {
            // Reset of lastvisit date
            // -----------------------
            $dbnow = date("Y-m-d H:i:s");

		        $query = '
UPDATE '.USER_LASTVISIT_TABLE.'
SET lastvisit="'.$dbnow.'"
WHERE user_id = '.$user_id.'
;';
            pwg_query($query);

          // Auto change group and / or status
          // ---------------------------------
            // Delete user from all groups
            // ---------------------------
            if ($conf_UAM['NO_CONFIRM_GROUP'] <> -1 and $conf_UAM['VALIDATED_GROUP'] <> -1)
            {
            		$query = '
DELETE FROM '.USER_GROUP_TABLE.'
WHERE user_id = '.$user_id.'
  AND (
    group_id = '.$conf_UAM['NO_CONFIRM_GROUP'].'
  OR 
    group_id = '.$conf_UAM['VALIDATED_GROUP'].'
  )
;';
            		pwg_query($query);
            }

            // Change user status
            // ------------------
            if ($conf_UAM['DOWNGRADE_STATUS'] <> -1)
            {
              $query = '
UPDATE '.USER_INFOS_TABLE.'
SET status = "'.$conf_UAM['DOWNGRADE_STATUS'].'"
WHERE user_id = '.$user_id.'
;';
              pwg_query($query);
            }

            // Change user group
            // -----------------
            if ($conf_UAM['DOWNGRADE_GROUP'] <> -1)
            {
              $query = '
INSERT INTO '.USER_GROUP_TABLE.'
  (user_id, group_id)
VALUES
  ('.$user_id.', "'.$conf_UAM['DOWNGRADE_GROUP'].'")
;';
              pwg_query($query);
            }

            // Change user privacy level
            // -------------------------
            if ($conf_UAM['DOWNGRADE_LEVEL'] <> -1)
            {
              $query = '
UPDATE '.USER_INFOS_TABLE.'
SET level = "'.$conf_UAM['DOWNGRADE_LEVEL'].'"
WHERE user_id = '.$user_id.'
;';
              pwg_query($query);
            }

            // Auto send email notification on group / status downgrade
            // --------------------------------------------------------
            if (isset($conf_UAM['GTAUTOMAIL']) and $conf_UAM['GTAUTOMAIL'] == 'true')
            {
              // Set reminder true
              // -----------------
              $query = '
UPDATE '.USER_LASTVISIT_TABLE.'
SET reminder = "true"
WHERE user_id = '.$user_id.'
;';
              pwg_query($query);
            
              // Reset confirmed user status to unvalidated
              // ------------------------------------------
              $query = '
UPDATE '.USER_CONFIRM_MAIL_TABLE.'
SET date_check = NULL
WHERE user_id = '.$user_id.'
;';
              pwg_query($query);

              // Get users information for email notification
              // --------------------------------------------
              $query = '
SELECT id, username, mail_address
FROM '.USERS_TABLE.'
WHERE id = '.$user_id.'
;';
              $data = pwg_db_fetch_assoc(pwg_query($query));

              demotion_mail($user_id, $data['username'], $data['mail_address']);
            }
          }
          elseif ($reminder) // If user already reminded for ghost account
          {
            // Delete account
            // --------------
            delete_user($user_id);
          }
        }
      }
    }
  }
}


/**
 * Triggered on UAM_LoginTasks()
 * 
 * Executes optional post-login tasks for unvalidated users
 * 
 */
function UAM_USR_ScheduledTasks()
{
  global $conf, $user, $page;

  if (!defined('PHPWG_ROOT_PATH'))
  {
    die('Hacking attempt!');
  }

  include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');

  $conf_UAM = unserialize($conf['UserAdvManager']);

  $collection = array();
  $reminder = false;

  $page['filtered_users'] = get_unvalid_user_autotasks();

  foreach($page['filtered_users'] as $listed_user)
  {
    array_push($collection, $listed_user['id']);
  }

  // Unvalidated accounts auto email sending and autodeletion if user already reminded
  // ---------------------------------------------------------------------------------
  if ((isset($conf_UAM['USRAUTO']) and $conf_UAM['USRAUTO'] == 'true'))
  {
    if (count($collection) > 0)
  		{
      // Process if a non-admin nor webmaster user is logged
      // ---------------------------------------------------
      if (in_array($user['id'], $collection))
      {
        // Check ConfirmMail reminder state
        // --------------------------------
        $query = '
SELECT reminder
FROM '.USER_CONFIRM_MAIL_TABLE.'
WHERE user_id = '.$user['id'].';';

        $result = pwg_db_fetch_assoc(pwg_query($query));

        if (isset($result['reminder']) and $result['reminder'] == 'true')
        {
          $reminder = true;
        }
        else
        {
          $reminder = false;
        }

        // If never reminded before, send reminder and set reminder True
        // -------------------------------------------------------------
        if (!$reminder and isset($conf_UAM['USRAUTOMAIL']) and $conf_UAM['USRAUTOMAIL'] == 'true')
        {
          $typemail = 1;

          // Get current user information
          // ----------------------------
          $query = '
SELECT id, username, mail_address
FROM '.USERS_TABLE.'
WHERE id = '.$user['id'].'
;';
          $data = pwg_db_fetch_assoc(pwg_query($query));

          ResendMail2User($typemail,$user['id'],stripslashes($data['username']),$data['mail_address'],true);
        }

        // If already reminded before, delete user
        // ---------------------------------------
        if ($reminder)
        {
          // delete account
          delete_user($user['id']);

          // Logged-in user cleanup, session destruction and redirected to custom page
          // -------------------------------------------------------------------------
          invalidate_user_cache();
          logout_user();
          redirect(make_index_url().'?UAM_msg=deleted', 0);
        }
      }
      else // Process if an admin or webmaster user is logged
      {
        foreach ($collection as $user_id)
        {
          // Check reminder state
          // --------------------
          $query = '
SELECT reminder
FROM '.USER_CONFIRM_MAIL_TABLE.'
WHERE user_id = '.$user_id.';';

          $result = pwg_db_fetch_assoc(pwg_query($query));

          if (isset($result['reminder']) and $result['reminder'] == 'true')
          {
            $reminder = true;
          }
          else
          {
            $reminder = false;
          }

          // If never reminded before, send reminder and set reminder True
          // -------------------------------------------------------------
          if (!$reminder and isset($conf_UAM['USRAUTOMAIL']) and $conf_UAM['USRAUTOMAIL'] == 'true')
          {
            $typemail = 1;
          
            // Get current user information
            // ----------------------------
            $query = '
SELECT id, username, mail_address
FROM '.USERS_TABLE.'
WHERE id = '.$user_id.'
;';
            $data = pwg_db_fetch_assoc(pwg_query($query));

            ResendMail2User($typemail,$user_id,stripslashes($data['username']),$data['mail_address'],true);
          }
          elseif ($reminder) // If user already reminded for account validation
          {
            // Delete account
            // --------------
            delete_user($user_id);
          }
        }
      }
    }
  }
}


/**
 * Triggered on init
 * 
 * Check for forbidden email domains in admin's users management panel
 */
function UAM_InitPage()
{
  load_language('plugin.lang', UAM_PATH);
  global $conf, $template, $page, $lang, $errors;

  $conf_UAM = unserialize($conf['UserAdvManager']);

// Admin user management
// ---------------------
  if (script_basename() == 'admin' and isset($_GET['page']) and $_GET['page'] == 'user_list')
  {
    if (isset($_POST['submit_add']))
    {
      // Email without forbidden domains
      // -------------------------------
      if (isset($conf_UAM['MAILEXCLUSION']) and $conf_UAM['MAILEXCLUSION'] == 'true' and !empty($_POST['email']) and ValidateEmailProvider($_POST['email']))
      {
        $template->append('errors', l10n('UAM_reg_err_login5')."'".$conf_UAM['MAILEXCLUSION_LIST']."'");
        unset($_POST['submit_add']);
      }
    }
  }
  if( isset($_GET['UAM_msg']))
  {
    UAM_DisplayMsg();
  }
  elseif (isset($_GET['key']) and isset($_GET['userid']))
  {
    UAM_ConfirmMail();
  }
}


/**
 * Triggered on init
 * 
 * Display a message according to $_GET['UAM_msg']
 */
function UAM_DisplayMsg()
{
  if( isset($_GET['UAM_msg']))
  {
    global $user, $lang, $conf, $page;
    $conf_UAM = unserialize($conf['UserAdvManager']);

    // Connexion rejected until validation
    if (isset($conf_UAM['REJECTCONNECT_TEXT']) and !empty($conf_UAM['REJECTCONNECT_TEXT']) and $_GET['UAM_msg']=="rejected")
    {
      // Management of Extension flags ([mygallery], [myurl])
      // ---------------------------------------------------
      $patterns[] = '#\[mygallery\]#i';
      $replacements[] = $conf['gallery_title'];
      $patterns[] = '#\[myurl\]#i';
      $replacements[] = get_gallery_home_url();

      if (function_exists('get_user_language_desc'))
      {
        $custom_text = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['REJECTCONNECT_TEXT']));
      }
      else $custom_text = l10n(preg_replace($patterns, $replacements, $conf_UAM['REJECTCONNECT_TEXT']));

      $page["errors"][]=$custom_text;
    }

    // User account deleted after validation deadline - Triggered by any other user
    elseif (isset($conf_UAM['GTAUTODEL']) and !empty($conf_UAM['GTAUTODEL']) and $_GET['UAM_msg']=="deleted")
    {
      // Management of Extension flags ([mygallery], [myurl]) - [username] flag can't be used here
      // -----------------------------------------------------------------------------------------
      $patterns[] = '#\[mygallery\]#i';
      $replacements[] = $conf['gallery_title'];
      $patterns[] = '#\[myurl\]#i';
      $replacements[] = get_gallery_home_url();

      if (function_exists('get_user_language_desc'))
      {
        $custom_text = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['GTAUTODEL']));
      }
      else $custom_text = l10n(preg_replace($patterns, $replacements, $conf_UAM['GTAUTODEL']));

      $page["errors"][]=$custom_text;
    }

    // User account deleted after validation deadline - Triggered by user himself
    elseif (isset($conf_UAM['USRAUTODEL']) and !empty($conf_UAM['USRAUTODEL']) and $_GET['UAM_msg']=="deleted")
    {
      // Management of Extension flags ([mygallery], [myurl]) - [username] flag can't be used here
      // -----------------------------------------------------------------------------------------
      $patterns[] = '#\[mygallery\]#i';
      $replacements[] = $conf['gallery_title'];
      $patterns[] = '#\[myurl\]#i';
      $replacements[] = get_gallery_home_url();

      if (function_exists('get_user_language_desc'))
      {
        $custom_text = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['USRAUTODEL']));
      }
      else $custom_text = l10n(preg_replace($patterns, $replacements, $conf_UAM['USRAUTODEL']));

      $page["errors"][]=$custom_text;
    }
  }
}


/**
 * Triggered on init
 * 
 * Check the key and display a message
 */
function UAM_ConfirmMail()
{
  global $conf;
  include_once(PHPWG_ROOT_PATH.'include/functions_mail.inc.php');

  if (isset($_GET['key']) and isset($_GET['userid']))
  {
    global $user, $lang, $conf, $page;

    $key = $_GET['key'];
    $userid = $_GET['userid'];
    
    $conf_UAM_ConfirmMail = unserialize($conf['UserAdvManager_ConfirmMail']);
    $conf_UAM = unserialize($conf['UserAdvManager']);

    $query = '
SELECT '.USERS_TABLE.'.username
FROM '.USERS_TABLE.'
WHERE ('.USERS_TABLE.'.id ='.$userid.')
;';
    $result = pwg_db_fetch_assoc(pwg_query($query));

    if (VerifyConfirmMail($key))
    {
      if (isset($conf_UAM['CONFIRM_MAIL']) and $conf_UAM['CONFIRM_MAIL'] == 'local')
      {
        validation_mail($userid);
      }
  // We have to get the user's language in database
  // ----------------------------------------------
      $query = '
SELECT language
FROM '.USER_INFOS_TABLE.'
WHERE '.USER_INFOS_TABLE.'.user_id ='.$userid.'
;';
      $data = pwg_db_fetch_assoc(pwg_query($query));

  // Check if user is already registered (profile changing) - If not (new registration), language is set to current gallery language
  // -------------------------------------------------------------------------------------------------------------------------------
      if (empty($data))
      {
  // And switch gallery to this language before using personalized and multilangual contents
  // ---------------------------------------------------------------------------------------
        $language = pwg_get_session_var('lang_switch', $user['language']);
        switch_lang_to($language);
      }
      else
      {
  // And switch gallery to this language before using personalized and multilangual contents
  // ---------------------------------------------------------------------------------------
        switch_lang_to($data['language']);
        load_language('plugin.lang', UAM_PATH);
      }

      if (isset($conf_UAM_ConfirmMail['CONFIRMMAIL_CUSTOM_TXT1']) and !empty($conf_UAM_ConfirmMail['CONFIRMMAIL_CUSTOM_TXT1']))
      {
        // Management of Extension flags ([username], [mygallery], [myurl])
        // ----------------------------------------------------------------
        $patterns[] = '#\[username\]#i';
        $replacements[] = $result['username'];
        $patterns[] = '#\[mygallery\]#i';
        $replacements[] = $conf['gallery_title'];
        $patterns[] = '#\[myurl\]#i';
        $replacements[] = get_gallery_home_url();

        if (function_exists('get_user_language_desc'))
        {
          $custom_text = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM_ConfirmMail['CONFIRMMAIL_CUSTOM_TXT1']));
        }
        else
        {
          $custom_text = l10n(preg_replace($patterns, $replacements, $conf_UAM_ConfirmMail['CONFIRMMAIL_CUSTOM_TXT1']));
        }
        $page['infos'][]=$custom_text;
      }
    }  
    else
    {
      if (isset($conf_UAM_ConfirmMail['CONFIRMMAIL_CUSTOM_TXT2']) and !empty($conf_UAM_ConfirmMail['CONFIRMMAIL_CUSTOM_TXT2']))
      {
        // Management of Extension flags ([username], [mygallery], [myurl])
        // ----------------------------------------------------------------
        $patterns[] = '#\[username\]#i';
        $replacements[] = $result['username'];
        $patterns[] = '#\[mygallery\]#i';
        $replacements[] = $conf['gallery_title'];
        $patterns[] = '#\[myurl\]#i';
        $replacements[] = get_gallery_home_url();

        if (function_exists('get_user_language_desc'))
        {
          $custom_text = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM_ConfirmMail['CONFIRMMAIL_CUSTOM_TXT2']));
        }
        else
        {
          $custom_text = l10n(preg_replace($patterns, $replacements, $conf_UAM_ConfirmMail['CONFIRMMAIL_CUSTOM_TXT2']));
        }

        $page['errors'][]=$custom_text;
      }
    }
  }
}


/**
 * Triggered on render_lost_password_mail_content
 * 
 * Adds a customized text in lost password email content
 * Added text is inserted before users login name and new password
 *
 * @param : Standard Piwigo email content
 * 
 * @return : Customized content added to standard content
 * 
 */
function UAM_lost_password_mail_content($infos)
{
  global $conf;

  load_language('plugin.lang', UAM_PATH);

  $conf_UAM = unserialize($conf['UserAdvManager']);

  if (isset($conf_UAM['CUSTOMPASSWRETR']) and $conf_UAM['CUSTOMPASSWRETR'] == 'true')
  {
    // Management of Extension flags ([mygallery], [myurl])
    $patterns[] = '#\[mygallery\]#i';
    $replacements[] = $conf['gallery_title'];
    $patterns[] = '#\[myurl\]#i';
    $replacements[] = get_gallery_home_url();

    $infos = preg_replace($patterns, $replacements, $conf_UAM['CUSTOMPASSWRETR_TEXT'])."\n"."\n".$infos;
  }
  return $infos;
}


/**
 * Function called from main.inc.php to send validation email
 *
 * @param : Type of email, user id, username, email address, confirmation (optional)
 * 
 */
function SendMail2User($typemail, $id, $username, $password, $email, $confirm)
{
  global $conf;

  $conf_UAM = unserialize($conf['UserAdvManager']);
  $conf_UAM_ConfirmMail = unserialize($conf['UserAdvManager_ConfirmMail']);

  include_once(PHPWG_ROOT_PATH.'include/functions_mail.inc.php');

	$infos1_perso = "";
  $infos2_perso = "";
  $subject = "";

// We have to get the user's language in database
// ----------------------------------------------
  $query ='
SELECT user_id, language
FROM '.USER_INFOS_TABLE.'
WHERE user_id = '.$id.'
;';
  $data = pwg_db_fetch_assoc(pwg_query($query));

// Check if user is already registered (profile changing) - If not (new registration), language is set to current gallery language
// -------------------------------------------------------------------------------------------------------------------------------
  if (empty($data))
  {
// And switch gallery to this language before using personalized and multilangual contents
// ---------------------------------------------------------------------------------------
    $language = pwg_get_session_var( 'lang_switch', $user['language'] );
    switch_lang_to($language);
  }
  else
  {
// And switch gallery to this language before using personalized and multilangual contents
// ---------------------------------------------------------------------------------------
    //$language = $data['language']; // Usefull for debugging
    switch_lang_to($data['language']);
    load_language('plugin.lang', UAM_PATH);
  }

  switch($typemail)
  {
    case 1: // Confirmation email on user registration - Without information email (already managed by Piwigo)
      if (isset($conf_UAM['CONFIRMMAIL_SUBJECT']) and !empty($conf_UAM['CONFIRMMAIL_SUBJECT']))
      {
        // Management of Extension flags ([username], [mygallery])
        // -------------------------------------------------------
        $patterns[] = '#\[username\]#i';
        $replacements[] = $username;
        $patterns[] = '#\[mygallery\]#i';
        $replacements[] = $conf['gallery_title'];

        if (function_exists('get_user_language_desc'))
        {
          $subject = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['CONFIRMMAIL_SUBJECT']))."\n\n";
        }
        else $subject = l10n(preg_replace($patterns, $replacements, $conf_UAM['CONFIRMMAIL_SUBJECT']))."\n\n"; 
      }

      break;

    case 2: // Confirmation email on user profile update - With information email if modification done in user profile
      if (isset($conf_UAM['CONFIRMMAIL_SUBJECT']) and !empty($conf_UAM['CONFIRMMAIL_SUBJECT']))
      {
        // Management of Extension flags ([username], [mygallery])
        // -------------------------------------------------------
        $patterns[] = '#\[username\]#i';
        $replacements[] = $username;
        $patterns[] = '#\[mygallery\]#i';
        $replacements[] = $conf['gallery_title'];

        if (function_exists('get_user_language_desc'))
        {
          $subject = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['CONFIRMMAIL_SUBJECT']))."\n\n";
        }
        else $subject = l10n(preg_replace($patterns, $replacements, $conf_UAM['CONFIRMMAIL_SUBJECT']))."\n\n"; 
      }

      $password = !empty($password) ? $password : l10n('UAM_empty_pwd');

      if (isset($conf_UAM['MAILINFO_TEXT']) and !empty($conf_UAM['MAILINFO_TEXT']))
      {
        // Management of Extension flags ([username], [mygallery], [myurl])
        // ----------------------------------------------------------------
        $patterns[] = '#\[username\]#i';
        $replacements[] = $username;
        $patterns[] = '#\[mygallery\]#i';
        $replacements[] = $conf['gallery_title'];
        $patterns[] = '#\[myurl\]#i';
        $replacements[] = get_gallery_home_url();

        if (function_exists('get_user_language_desc'))
        {
          $infos1_perso = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['MAILINFO_TEXT']))."\n\n";
        }
        else $infos1_perso = l10n(preg_replace($patterns, $replacements, $conf_UAM['MAILINFO_TEXT']))."\n\n"; 
      }

      if (isset($conf_UAM['MAIL_INFO']) and $conf_UAM['MAIL_INFO'] == 'true')
      {
        if (isset($conf_UAM['HIDEPASSW']) and $conf_UAM['HIDEPASSW'] == 'true') // Allow display of clear password in email
        {
          $infos1 = array(
            get_l10n_args('UAM_infos_mail %s', stripslashes($username)),
            get_l10n_args('UAM_User: %s', stripslashes($username)),
            get_l10n_args('UAM_Password: %s', $password),
            get_l10n_args('Email: %s', $email),
            get_l10n_args('', ''),
          );
        }
        else // Do not allow display of clear password in email
        {
          $infos1 = array(
            get_l10n_args('UAM_infos_mail %s', stripslashes($username)),
            get_l10n_args('UAM_User: %s', stripslashes($username)),
            get_l10n_args('Email: %s', $email),
            get_l10n_args('', ''),
          );
        }
      }

      break;

    case 3: // Only information email send to user if checked
      if (isset($conf_UAM['INFOMAIL_SUBJECT']) and !empty($conf_UAM['INFOMAIL_SUBJECT']))
      {
        // Management of Extension flags ([username], [mygallery])
        // -------------------------------------------------------
        $patterns[] = '#\[username\]#i';
        $replacements[] = $username;
        $patterns[] = '#\[mygallery\]#i';
        $replacements[] = $conf['gallery_title'];

        if (function_exists('get_user_language_desc'))
        {
          $subject = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['INFOMAIL_SUBJECT']))."\n\n";
        }
        else $subject = l10n(preg_replace($patterns, $replacements, $conf_UAM['INFOMAIL_SUBJECT']))."\n\n"; 
      }

      $password = !empty($password) ? $password : l10n('UAM_no_update_pwd');

      if (isset($conf_UAM['MAILINFO_TEXT']) and !empty($conf_UAM['MAILINFO_TEXT']))
      {
        // Management of Extension flags ([username], [mygallery], [myurl])
        // ----------------------------------------------------------------
        $patterns[] = '#\[username\]#i';
        $replacements[] = $username;
        $patterns[] = '#\[mygallery\]#i';
        $replacements[] = $conf['gallery_title'];
        $patterns[] = '#\[myurl\]#i';
        $replacements[] = get_gallery_home_url();

        if (function_exists('get_user_language_desc'))
        {
          $infos1_perso = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['MAILINFO_TEXT']))."\n\n";
        }
        else $infos1_perso = l10n(preg_replace($patterns, $replacements, $conf_UAM['MAILINFO_TEXT']))."\n\n"; 
      }

      if (isset($conf_UAM['MAIL_INFO']) and $conf_UAM['MAIL_INFO'] == 'true')
      {
        if (isset($conf_UAM['HIDEPASSW']) and $conf_UAM['HIDEPASSW'] == 'true') // Allow display of clear password in email
        {
          $infos1 = array(
            get_l10n_args('UAM_infos_mail %s', stripslashes($username)),
            get_l10n_args('UAM_User: %s', stripslashes($username)),
            get_l10n_args('UAM_Password: %s', $password),
            get_l10n_args('Email: %s', $email),
            get_l10n_args('', ''),
          );
        }
        else // Do not allow display of clear password in email
        {
          $infos1 = array(
            get_l10n_args('UAM_infos_mail %s', stripslashes($username)),
            get_l10n_args('UAM_User: %s', stripslashes($username)),
            get_l10n_args('Email: %s', $email),
            get_l10n_args('', ''),
          );
        }
      }

      break;
  }

  if ((isset($conf_UAM['CONFIRM_MAIL']) and ($conf_UAM['CONFIRM_MAIL'] == 'true')) and $confirm) // Add confirmation link ?
  {
    $infos2 = array(
      get_l10n_args('UAM_Link: %s', AddConfirmMail($id, $email)),
      get_l10n_args('', ''),
    );

    if (isset($conf_UAM['CONFIRMMAIL_TEXT']) and !empty($conf_UAM['CONFIRMMAIL_TEXT'])) // Add personal text in confirmation email ?
    {
      // Management of Extension flags ([username], [mygallery], [myurl], [Kdays])
      // -------------------------------------------------------------------------
      $patterns[] = '#\[username\]#i';
      $replacements[] = $username;
      $patterns[] = '#\[mygallery\]#i';
      $replacements[] = $conf['gallery_title'];
      $patterns[] = '#\[myurl\]#i';
      $replacements[] = get_gallery_home_url();

      if (isset($conf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT']) and $conf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT'] == 'true') // [Kdays] replacement only if related option is active
      {
        $patterns[] = '#\[Kdays\]#i';
        $replacements[] = $conf_UAM_ConfirmMail['CONFIRMMAIL_DELAY'];
      }

      if (function_exists('get_user_language_desc'))
      {
        $infos2_perso = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['CONFIRMMAIL_TEXT']))."\n\n";
      }
      else $infos2_perso = l10n(preg_replace($patterns, $replacements, $conf_UAM['CONFIRMMAIL_TEXT']))."\n\n";
    }
  }

// Sending the email with subject and contents
// -------------------------------------------
  if ((isset($conf_UAM['CONFIRM_MAIL']) and $conf_UAM['CONFIRM_MAIL'] == 'local') and $confirm)
	{
    switch_lang_to(get_default_language());

  	load_language('plugin.lang', UAM_PATH);
  	$subject = get_l10n_args('UAM_Subject admin validation for %s',$username);

		$content = array(
  	 get_l10n_args('UAM_Manual_validation_needed_for %s', stripslashes($username)),
     get_l10n_args('', ''),
     get_l10n_args('UAM_Link: %s', AddConfirmMail($id, $email)),
    );

    UAM_mail_notification_admins($subject, $content);
  }
	elseif ((isset($conf_UAM['CONFIRM_MAIL']) and $conf_UAM['CONFIRM_MAIL'] == 'true') and $confirm)
	{
    pwg_mail($email, array(
      'subject' => $subject,
    	'content' => (isset($infos1) ? $infos1_perso.l10n_args($infos1)."\n\n" : "").(isset($infos2) ? $infos2_perso.l10n_args($infos2)."\n\n" : "").get_absolute_root_url(),
    ));
	}
// Switching back to default language
// ----------------------------------
switch_lang_back();
}


/**
 * Function called from SendMail2User in functions.inc.php to notify admins on user registration validation with validation key
 *
 * @param:
 *   - keyargs_subject: mail subject on l10n_args format
 *   - keyargs_content: mail content on l10n_args format
 *
 * @return boolean (Ok or not)
 */
function UAM_mail_notification_admins($keyargs_subject, $keyargs_content)
{
  global $conf, $user;

  // Check arguments
  if (empty($keyargs_subject) or empty($keyargs_content))
  {
    return false;
  }

  $return = true;

  $admins = array();

  $query = '
SELECT
    u.username AS username,
    u.mail_address AS mail_address
  FROM '.USERS_TABLE.' AS u
    JOIN '.USER_INFOS_TABLE.' AS i ON i.user_id = id
  WHERE i.status in (\'webmaster\',  \'admin\')
    AND mail_address IS NOT NULL
    AND i.user_id = id
  ORDER BY username
;';

  $datas = pwg_query($query);
  if (!empty($datas))
  {
    while ($admin = pwg_db_fetch_assoc($datas))
    {
      if (!empty($admin['mail_address']))
      {
        array_push($admins, format_email($admin['username'], $admin['mail_address']));
      }
    }
  }

  if (count($admins) > 0)
  {
    $content = l10n_args($keyargs_content)."\n";

    $return = pwg_mail(
      implode(', ', $admins),
      array(
        'subject' => '['.$conf['gallery_title'].'] '.l10n_args($keyargs_subject),
        'content' => $content,
        'content_format' => 'text/plain',
        'email_format' => 'text/plain',
        )
      );
  }

  return $return;
}


/**
 * Function called from UAM_admin.php to resend validation email with or without new validation key
 *
 * @param : Type of email, user id, username, email address, confirmation (optional)
 * 
 */
function ResendMail2User($typemail, $user_id, $username, $email, $confirm)
{
  global $conf;
  
  $subject = "";

  $conf_UAM = unserialize($conf['UserAdvManager']);

  $conf_UAM_ConfirmMail = unserialize($conf['UserAdvManager_ConfirmMail']);
  
  include_once(PHPWG_ROOT_PATH.'include/functions_mail.inc.php');
  
// We have to get the user's language in database
// ----------------------------------------------
  $query ='
SELECT user_id, language
FROM '.USER_INFOS_TABLE.'
WHERE user_id = '.$user_id.'
;';
  $data = pwg_db_fetch_assoc(pwg_query($query));
  $language = $data['language'];

// And switch gallery to this language before using personalized and multilangual contents
// ---------------------------------------------------------------------------------------
  switch_lang_to($data['language']);

  load_language('plugin.lang', UAM_PATH);

  switch($typemail)
  {
    case 1: //Generating email content for remind with a new key
      if (isset($conf_UAM['CONFIRMMAIL_REMAIL_SUBJECT']) and !empty($conf_UAM['CONFIRMMAIL_REMAIL_SUBJECT']))
      {
        // Management of Extension flags ([username], [mygallery])
        // -------------------------------------------------------
        $patterns[] = '#\[username\]#i';
        $replacements[] = $username;
        $patterns[] = '#\[mygallery\]#i';
        $replacements[] = $conf['gallery_title'];

        if (function_exists('get_user_language_desc'))
        {
          $subject = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['CONFIRMMAIL_REMAIL_SUBJECT']))."\n\n";
        }
        else $subject = l10n(preg_replace($patterns, $replacements, $conf_UAM['CONFIRMMAIL_REMAIL_SUBJECT']))."\n\n"; 
      }

      if (isset($conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL_TXT1']) and !empty($conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL_TXT1']) and isset($conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL']) and $conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL'] == 'true' and $confirm)
      {
    		// Management of Extension flags ([username], [mygallery], [myurl], [Kdays])
        // -------------------------------------------------------------------------
        $patterns[] = '#\[username\]#i';
        $replacements[] = $username;
        $patterns[] = '#\[mygallery\]#i';
        $replacements[] = $conf['gallery_title'];
        $patterns[] = '#\[myurl\]#i';
        $replacements[] = get_gallery_home_url();

        if (isset($conf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT']) and $conf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT'] == 'true') // [Kdays] replacement only if related option is active
        {
          $patterns[] = '#\[Kdays\]#i';
          $replacements[] = $conf_UAM_ConfirmMail['CONFIRMMAIL_DELAY'];
        }

        if (function_exists('get_user_language_desc'))
        {
          $infos1 = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL_TXT1']))."\n\n";
        }
				else $infos1 = l10n(preg_replace($patterns, $replacements, $conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL_TXT1']))."\n\n";

        $infos2 = array
        (
          get_l10n_args('UAM_Link: %s', ResetConfirmMail($user_id)),
          get_l10n_args('', ''),
        );
      }

// Set reminder true 
// -----------------     
      $query = '
UPDATE '.USER_CONFIRM_MAIL_TABLE.'
SET reminder = "true"
WHERE user_id = '.$user_id.'
;';
      pwg_query($query);

      break;

    case 2: //Generating email content for remind without a new key
      if (isset($conf_UAM['CONFIRMMAIL_REMAIL_SUBJECT']) and !empty($conf_UAM['CONFIRMMAIL_REMAIL_SUBJECT']))
      {
        // Management of Extension flags ([username], [mygallery])
        // -------------------------------------------------------
        $patterns[] = '#\[username\]#i';
        $replacements[] = $username;
        $patterns[] = '#\[mygallery\]#i';
        $replacements[] = $conf['gallery_title'];
    
        if (function_exists('get_user_language_desc'))
        {
          $subject = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['CONFIRMMAIL_REMAIL_SUBJECT']))."\n\n";
        }
        else $subject = l10n(preg_replace($patterns, $replacements, $conf_UAM['CONFIRMMAIL_REMAIL_SUBJECT']))."\n\n"; 
      }

      if (isset($conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL_TXT2']) and !empty($conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL_TXT2']) and isset($conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL']) and $conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL'] == 'true' and !$confirm)
      {
        // Management of Extension flags ([username], [mygallery], [myurl], [Kdays])
        // -------------------------------------------------------------------------
        $patterns[] = '#\[username\]#i';
        $replacements[] = $username;
        $patterns[] = '#\[mygallery\]#i';
        $replacements[] = $conf['gallery_title'];
        $patterns[] = '#\[myurl\]#i';
        $replacements[] = get_gallery_home_url();

        if (isset($conf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT']) and $conf_UAM_ConfirmMail['CONFIRMMAIL_TIMEOUT'] == 'true') // [Kdays] replacement only if related option is active
        {
          $patterns[] = '#\[Kdays\]#i';
          $replacements[] = $conf_UAM_ConfirmMail['CONFIRMMAIL_DELAY'];
        }

        if (function_exists('get_user_language_desc'))
        {
          $infos1 = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL_TXT2']))."\n\n";
        }
        else $infos1 = l10n(preg_replace($patterns, $replacements, $conf_UAM_ConfirmMail['CONFIRMMAIL_REMAIL_TXT2']))."\n\n";
      }

// Set reminder true
// -----------------
      $query = '
UPDATE '.USER_CONFIRM_MAIL_TABLE.'
SET reminder = "true"
WHERE user_id = '.$user_id.'
;';
      pwg_query($query);
      
    break;
	}
  
  pwg_mail($email, array(
    'subject' => $subject,
    'content' => ($infos1."\n\n").(isset($infos2) ? l10n_args($infos2)."\n\n" : "").get_absolute_root_url(),
  ));

		// Switching back to default language
		// ----------------------------------
		switch_lang_back();
}


/**
 * Function called from UAM_admin.php to send a reminder mail for ghost users
 *
 * @param : User id, username, email address
 * 
 */
function ghostreminder($user_id, $username, $email)
{
  global $conf;

  $conf_UAM = unserialize($conf['UserAdvManager']);
  $subject = "";

  include_once(PHPWG_ROOT_PATH.'include/functions_mail.inc.php');

// We have to get the user's language in database
// ----------------------------------------------
  $query ='
SELECT user_id, language
FROM '.USER_INFOS_TABLE.'
WHERE user_id = '.$user_id.'
;';
  $data = pwg_db_fetch_assoc(pwg_query($query));
  $language = $data['language'];

// And switch gallery to this language before using personalized and multilangual contents
// ---------------------------------------------------------------------------------------
  switch_lang_to($data['language']);

  load_language('plugin.lang', UAM_PATH);

  if (isset($conf_UAM['GTREMINDER_SUBJECT']) and !empty($conf_UAM['GTREMINDER_SUBJECT']))
  {
    // Management of Extension flags ([username], [mygallery])
    // -------------------------------------------------------
    $patterns[] = '#\[username\]#i';
    $replacements[] = $username;
    $patterns[] = '#\[mygallery\]#i';
    $replacements[] = $conf['gallery_title'];

    if (function_exists('get_user_language_desc'))
    {
      $subject = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['GTREMINDER_SUBJECT']))."\n\n";
    }
    else $subject = l10n(preg_replace($patterns, $replacements, $conf_UAM['GTREMINDER_SUBJECT']))."\n\n"; 
  }

  if (isset($conf_UAM['GHOSTRACKER_REMINDERTEXT']) and !empty($conf_UAM['GHOSTRACKER_REMINDERTEXT']) and isset($conf_UAM['GHOSTRACKER']) and $conf_UAM['GHOSTRACKER'] == 'true')
  {
    // Management of Extension flags ([username], [mygallery], [myurl], [days])
    // ------------------------------------------------------------------------
    $patterns[] = '#\[username\]#i';
    $replacements[] = $username;
    $patterns[] = '#\[mygallery\]#i';
    $replacements[] = $conf['gallery_title'];
    $patterns[] = '#\[myurl\]#i';
    $replacements[] = get_gallery_home_url();
    $patterns[] = '#\[days\]#i';
    $replacements[] = $conf_UAM['GHOSTRACKER_DAYLIMIT'];

    if (function_exists('get_user_language_desc'))
    {
      $infos1 = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['GHOSTRACKER_REMINDERTEXT']))."\n\n";
    }
    else
    {
      $infos1 = l10n(preg_replace($patterns, $replacements, $conf_UAM['GHOSTRACKER_REMINDERTEXT']))."\n\n";
    }

    resetlastvisit($user_id);
  }

  pwg_mail($email, array(
    'subject' => $subject,
    'content' => $infos1.get_absolute_root_url(),
  ));

		// Switching back to default language
		// ----------------------------------
		switch_lang_back();
}


/**
 * Function called from functions.inc.php to send notification email when user have been downgraded
 *
 * @param : user id, username, email address
 * 
 */
function demotion_mail($id, $username, $email)
{
  global $conf;

  $conf_UAM = unserialize($conf['UserAdvManager']);

  include_once(PHPWG_ROOT_PATH.'include/functions_mail.inc.php');
  
	$custom_txt = "";
	$subject = "";

// We have to get the user's language in database
// ----------------------------------------------
  $query = '
SELECT user_id, language
FROM '.USER_INFOS_TABLE.'
WHERE user_id = '.$id.'
;';

  $data = pwg_db_fetch_assoc(pwg_query($query));

// Check if user is already registered (profile changing) - If not (new registration), language is set to current gallery language
// -------------------------------------------------------------------------------------------------------------------------------
  if (empty($data))
  {
// And switch gallery to this language before using personalized and multilangual contents
// ---------------------------------------------------------------------------------------
    $language = pwg_get_session_var( 'lang_switch', $user['language'] );
    switch_lang_to($language);
  }
  else
  {
// And switch gallery to this language before using personalized and multilangual contents
// ---------------------------------------------------------------------------------------
    $language = $data['language']; // Usefull for debugging
    switch_lang_to($data['language']);
    load_language('plugin.lang', UAM_PATH);
  }

  if (isset($conf_UAM['GTAUTOMAIL_SUBJECT']) and !empty($conf_UAM['GTAUTOMAIL_SUBJECT']))
  {
    // Management of Extension flags ([username], [mygallery])
    // -------------------------------------------------------
    $patterns[] = '#\[username\]#i';
    $replacements[] = $username;
    $patterns[] = '#\[mygallery\]#i';
    $replacements[] = $conf['gallery_title'];

    if (function_exists('get_user_language_desc'))
    {
      $subject = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['GTAUTOMAIL_SUBJECT']))."\n\n";
    }
    else $subject = l10n(preg_replace($patterns, $replacements, $conf_UAM['GTAUTOMAIL_SUBJECT']))."\n\n"; 
  }

  if (isset($conf_UAM['GTAUTOMAILTEXT']) and !empty($conf_UAM['GTAUTOMAILTEXT']))
  {
    // Management of Extension flags ([username], [mygallery], [myurl])
    // ----------------------------------------------------------------
    $patterns[] = '#\[username\]#i';
    $replacements[] = stripslashes($username);
    $patterns[] = '#\[mygallery\]#i';
    $replacements[] = $conf['gallery_title'];
    $patterns[] = '#\[myurl\]#i';
    $replacements[] = get_gallery_home_url();

    if (function_exists('get_user_language_desc'))
    {
      $custom_txt = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['GTAUTOMAILTEXT']))."\n\n";
    }
    else $custom_txt = l10n(preg_replace($patterns, $replacements, $conf_UAM['GTAUTOMAILTEXT']))."\n\n"; 
  }

  $infos1 = array(
    get_l10n_args('UAM_User: %s', stripslashes($username)),
    get_l10n_args('Email: %s', $email),
    get_l10n_args('', ''),
  );

  $infos2 = array
  (
    get_l10n_args('UAM_Link: %s', ResetConfirmMail($id)),
    get_l10n_args('', ''),
  ); 

  resetlastvisit($id);

// Sending the email with subject and contents
// -------------------------------------------
  pwg_mail($email, array(
    'subject' => $subject,
    'content' => ($custom_txt.l10n_args($infos1)."\n\n".l10n_args($infos2)."\n\n").get_absolute_root_url(),
  ));

		// Switching back to default language
		// ----------------------------------
		switch_lang_back();
}


/**
 * Function called from UAM_admin.php to send notification email when user registration have been manually validated by admin
 *
 * @param : user id
 * 
 */
function validation_mail($id)
{
  global $conf;

  $conf_UAM = unserialize($conf['UserAdvManager']);

  include_once(PHPWG_ROOT_PATH.'include/functions_mail.inc.php');

	$custom_txt = "";
  $subject = "";

// We have to get the user's language in database
// ----------------------------------------------
  $query ='
SELECT user_id, language
FROM '.USER_INFOS_TABLE.'
WHERE user_id = '.$id.'
;';

  $data = pwg_db_fetch_assoc(pwg_query($query));

// Check if user is already registered (profile changing) - If not (new registration), language is set to current gallery language
// -------------------------------------------------------------------------------------------------------------------------------
  if (empty($data))
  {
// And switch gallery to this language before using personalized and multilangual contents
// ---------------------------------------------------------------------------------------
    $language = pwg_get_session_var( 'lang_switch', $user['language'] );
    switch_lang_to($language);
  }
  else
  {
// And switch gallery to this language before using personalized and multilangual contents
// ---------------------------------------------------------------------------------------
    $language = $data['language']; // Usefull for debugging
    switch_lang_to($data['language']);
    load_language('plugin.lang', UAM_PATH);
  }

// Retreive users email and user name from id
// ------------------------------------------
  $query ='
SELECT id, username, mail_address
FROM '.USERS_TABLE.'
WHERE id = '.$id.'
;';

  $result = pwg_db_fetch_assoc(pwg_query($query));

  if (isset($conf_UAM['ADMINVALIDATIONMAIL_SUBJECT']) and !empty($conf_UAM['ADMINVALIDATIONMAIL_SUBJECT']))
  {
    // Management of Extension flags ([username], [mygallery])
    // -------------------------------------------------------
    $patterns[] = '#\[username\]#i';
    $replacements[] = $result['username'];
    $patterns[] = '#\[mygallery\]#i';
    $replacements[] = $conf['gallery_title'];

    if (function_exists('get_user_language_desc'))
    {
      $subject = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['ADMINVALIDATIONMAIL_SUBJECT']))."\n\n";
    }
    else $subject = l10n(preg_replace($patterns, $replacements, $conf_UAM['ADMINVALIDATIONMAIL_SUBJECT']))."\n\n";
  }

  if (isset($conf_UAM['ADMINVALIDATIONMAIL']) and !empty($conf_UAM['ADMINVALIDATIONMAIL']))
  {
    // Management of Extension flags ([username], [mygallery], [myurl])
    // ----------------------------------------------------------------
    $patterns[] = '#\[username\]#i';
    $replacements[] = $result['username'];
    $patterns[] = '#\[mygallery\]#i';
    $replacements[] = $conf['gallery_title'];
    $patterns[] = '#\[myurl\]#i';
    $replacements[] = get_gallery_home_url();
    if (function_exists('get_user_language_desc'))
    {
      $custom_txt = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM['ADMINVALIDATIONMAIL']))."\n\n";
    }
    else $custom_txt = l10n(preg_replace($patterns, $replacements, $conf_UAM['ADMINVALIDATIONMAIL']))."\n\n";
  }

  $infos = array(
    get_l10n_args('UAM_User: %s', stripslashes($result['username'])),
    get_l10n_args('Email: %s', $result['mail_address']),
    get_l10n_args('', ''),
  );

// Sending the email with subject and contents
// -------------------------------------------
  pwg_mail($result['mail_address'], array(
    'subject' => $subject,
    'content' => (l10n_args($infos)."\n\n".$custom_txt),
  ));

		// Switching back to default language
		// ----------------------------------
		switch_lang_back();
}


/**
 * Function called from functions AddConfirmMail and ResetConfirmMail for validation key generation
 * 
 * @return : validation key
 * 
 */
function FindAvailableConfirmMailID()
{
  while (true)
  {
    $id = generate_key(16);

    $query = '
SELECT COUNT(*)
FROM '.USER_CONFIRM_MAIL_TABLE.'
WHERE id = "'.$id.'"
;';
    list($count) = pwg_db_fetch_row(pwg_query($query));

    if ($count == 0)
      return $id;
  }
}


/**
 * Function called from functions SendMail2User to process unvalidated users and generate validation key link
 *
 * @param : User id, email address
 * 
 * @return : Build validation key in URL
 * 
 */
function AddConfirmMail($user_id, $email)
{
  global $conf;

  $conf_UAM = unserialize($conf['UserAdvManager']);
  $Confirm_Mail_ID = FindAvailableConfirmMailID();

  $dbnow = date("Y-m-d H:i:s");

  if (isset($Confirm_Mail_ID))
  {
    $query = "
SELECT status
  FROM ".USER_INFOS_TABLE."
WHERE user_id = '".$user_id."'
;";
    list($status) = pwg_db_fetch_row(pwg_query($query));

    // Insert $Confirm_Mail_ID in USER_CONFIRM_MAIL_TABLE
    $query = "
INSERT INTO ".USER_CONFIRM_MAIL_TABLE."
  (id, user_id, mail_address, status, date_check, reminder)
VALUES
  ('".$Confirm_Mail_ID."', '".$user_id."', '".$email."', '".$status."', null, 'false')
;";
    pwg_query($query);

    // Set user permissions
    // --------------------
    SetPermission($user_id);

    // Set UAM_validated field to false in #_users table
    // -------------------------------------------------
    SetUnvalidated($user_id);

    if ($conf['guest_access'])
    {
      return(get_absolute_root_url().'?key='.$Confirm_Mail_ID.'&userid='.$user_id);
    }
    else
    {
      return(get_absolute_root_url().'identification.php?key='.$Confirm_Mail_ID.'&userid='.$user_id);
    }
  }
}


/**
 * Function called from UAM_Adduser() to set group/status/level to new users if manual validation is set
 *
 * @param : User id
 * 
 * 
 */
function SetPermission($user_id)
{
  global $conf;

  $conf_UAM = unserialize($conf['UserAdvManager']);

// Groups cleanup
// --------------
  $query = '
DELETE FROM '.USER_GROUP_TABLE.'
WHERE user_id = '.$user_id.'
  AND (
    group_id = '.$conf_UAM['NO_CONFIRM_GROUP'].'
  OR 
    group_id = '.$conf_UAM['VALIDATED_GROUP'].'
  )
;';

  pwg_query($query);

  if ($conf_UAM['NO_CONFIRM_STATUS'] <> -1) // Set status
  {
    $query = '
UPDATE '.USER_INFOS_TABLE.'
SET status = "'.$conf_UAM['NO_CONFIRM_STATUS'].'"
WHERE user_id = '.$user_id.'
;';

    pwg_query($query);
  }

  if ($conf_UAM['NO_CONFIRM_GROUP'] <> -1) // Set group
  {
    $query = '
INSERT INTO '.USER_GROUP_TABLE.'
  (user_id, group_id)
VALUES
  ('.$user_id.', '.$conf_UAM['NO_CONFIRM_GROUP'].')
;';

    pwg_query($query);
  }

  if ($conf_UAM['NO_VALID_LEVEL'] <> -1) // Set privacy level
  {
    $query = '
INSERT INTO '.USER_INFOS_TABLE.'
  (user_id, level)
VALUES
  ('.$user_id.', "'.$conf_UAM['NO_VALID_LEVEL'].'")
;';

    pwg_query($query);
  }
}


/**
 * Function called from UAM_admin.php to reset validation key
 *
 * @param : User id
 * 
 * @return : Build validation key in URL
 * 
 */
function ResetConfirmMail($user_id)
{
  global $conf;

  $Confirm_Mail_ID = FindAvailableConfirmMailID();

  $dbnow = date("Y-m-d H:i:s");

  if (isset($Confirm_Mail_ID))
  { 
    $query = '
UPDATE '.USER_CONFIRM_MAIL_TABLE.'
SET id = "'.$Confirm_Mail_ID.'"
WHERE user_id = '.$user_id.'
;';

    pwg_query($query);

    $query = '
UPDATE '.USER_INFOS_TABLE.'
SET registration_date = "'.$dbnow.'"
WHERE user_id = '.$user_id.'
;';

    pwg_query($query);

    if ( $conf['guest_access'] )
    {
      return(get_absolute_root_url().'?key='.$Confirm_Mail_ID.'&userid='.$user_id);
    }
    else
    {
      return(get_absolute_root_url().'identification.php?key='.$Confirm_Mail_ID.'&userid='.$user_id);
    }
  }
}


/**
 * Function called from functions.inc.php to reset last visit date after sending a reminder
 *
 * @param : User id
 * 
 */
function resetlastvisit($user_id)
{
  global $conf;

  $dbnow = date("Y-m-d H:i:s");

  $query = '
UPDATE '.USER_LASTVISIT_TABLE.'
SET lastvisit = "'.$dbnow.'", reminder = "true"
WHERE user_id = '.$user_id.'
;';

  pwg_query($query);
}


/**
 * Function called from main.inc.php - Triggered on user deletion
 * 
 */
function DeleteConfirmMail($user_id)
{
  $query = '
DELETE FROM '.USER_CONFIRM_MAIL_TABLE.'
WHERE user_id = '.$user_id.'
;';

  pwg_query($query);
}


/**
 * Function called from main.inc.php - Triggered on user deletion
 * 
 */
function DeleteLastVisit($user_id)
{
  $query = '
DELETE FROM '.USER_LASTVISIT_TABLE.'
WHERE user_id = '.$user_id.'
;';

  pwg_query($query);
}


/**
 * Function called from main.inc.php - Triggered on user deletion
 *
 * @param : User id
 * 
 */
function DeleteRedir($user_id)
{
  $tab = array();

  $query = '
SELECT value
FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager_Redir"
;';

  $tab = pwg_db_fetch_row(pwg_query($query));

  $values = explode(',', $tab[0]);

  unset($values[array_search($user_id, $values)]);

  $query = '
UPDATE '.CONFIG_TABLE.'
SET value = "'.implode(',', $values).'"
WHERE param = "UserAdvManager_Redir";';

  pwg_query($query);
}


/**
 * Function called from ConfirmMail.php to verify validation key used by user according time limit
 * Return true is key validation is OK else return false
 *
 * @param : User id
 * 
 * @return : Bool
 * 
 */
function VerifyConfirmMail($id)
{
  global $conf;

  include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');

  $conf_UAM = unserialize($conf['UserAdvManager']);

  $conf_UAM_ConfirmMail = unserialize($conf['UserAdvManager_ConfirmMail']);

  $query = '
SELECT COUNT(*)
FROM '.USER_CONFIRM_MAIL_TABLE.'
WHERE id = "'.$id.'"
;';

  list($count) = pwg_db_fetch_row(pwg_query($query));

  if ($count == 1)
  {
    $query = '
SELECT user_id, status, date_check
FROM '.USER_CONFIRM_MAIL_TABLE.'
WHERE id = "'.$id.'"
;';
    $data = pwg_db_fetch_assoc(pwg_query($query));

    if (!empty($data) and isset($data['user_id']) and is_null($data['date_check']))
    {
      $query = '
SELECT registration_date
FROM '.USER_INFOS_TABLE.'
WHERE user_id = '.$data['user_id'].'
;';

      list($registration_date) = pwg_db_fetch_row(pwg_query($query));

//              Time limit process             
// ********************************************  
      if (!empty($registration_date))
      {
        // Verify Confirmmail with time limit ON
    		// -------------------------------------
				if (isset ($conf_UAM_ConfirmMail['CONFIRMMAIL_DELAY']))
        {
				  // Dates formating and compare
     			// ---------------------------
					$today = date("d-m-Y"); // Get today's date
					list($day, $month, $year) = explode('-', $today); // explode date of today						 
 					$daytimestamp = mktime(0, 0, 0, $month, $day, $year);// Generate UNIX timestamp

	  			list($regdate, $regtime) = explode(' ', $registration_date); // Explode date and time from registration date
					list($regyear, $regmonth, $regday) = explode('-', $regdate); // Explode date from registration date
					$regtimestamp = mktime(0, 0, 0, $regmonth, $regday, $regyear);// Generate UNIX timestamp

          $deltasecs = $daytimestamp - $regtimestamp;// Compare the 2 UNIX timestamps	
					$deltadays = floor($deltasecs / 86400);// Convert result from seconds to days

					// Condition with the value set for time limit
     			// -------------------------------------------
					if ($deltadays <= $conf_UAM_ConfirmMail['CONFIRMMAIL_DELAY']) // If Nb of days is less than the limit set
          {
            $dbnow = date("Y-m-d H:i:s");

        		// Update ConfirmMail table
        		// ------------------------
						$query = '
UPDATE '.USER_CONFIRM_MAIL_TABLE.'
SET date_check="'.$dbnow.'", reminder="false"
WHERE id = "'.$id.'"
;';
						pwg_query($query);

        		// Update LastVisit table - Force reminder field to false
        		// Usefull when a user has been automatically downgraded and revalidate its registration
        		// -------------------------------------------------------------------------------------
						$query = '
UPDATE '.USER_LASTVISIT_TABLE.'
SET reminder="false"
WHERE user_id = "'.$data['user_id'].'"
;';
						pwg_query($query);
      
						if ($conf_UAM['NO_CONFIRM_GROUP'] <> -1) // Delete user from unvalidated users group
						{
              $query = '
DELETE FROM '.USER_GROUP_TABLE.'
WHERE user_id = '.$data['user_id'].'
  AND group_id = '.$conf_UAM['NO_CONFIRM_GROUP'].'
;';
							pwg_query($query);
            }

						if ($conf_UAM['VALIDATED_GROUP'] <> -1) // Add user to validated users group 
						{
              $query = '
INSERT INTO '.USER_GROUP_TABLE.'
  (user_id, group_id)
VALUES
  ('.$data['user_id'].', '.$conf_UAM['VALIDATED_GROUP'].')
;';
							pwg_query($query);
            }

						if ($conf_UAM['VALIDATED_STATUS'] <> -1) // Change user's status
						{
              $query = '
UPDATE '.USER_INFOS_TABLE.'
SET status = "'.$conf_UAM['VALIDATED_STATUS'].'"
WHERE user_id = '.$data['user_id'].'
;';
							pwg_query($query);
            }

						if ($conf_UAM['VALID_LEVEL'] <> -1) // Change user's privacy level
						{
              $query = '
UPDATE '.USER_INFOS_TABLE.'
SET level = "'.$conf_UAM['VALID_LEVEL'].'"
WHERE user_id = '.$data['user_id'].'
;';
							pwg_query($query);
            }

						// Set UAM_validated field to True in #_users table
            SetValidated($data['user_id']);

						// Refresh user's category cache
            // -----------------------------
						invalidate_user_cache();

						return true;
          }
          elseif ($deltadays > $conf_UAM_ConfirmMail['CONFIRMMAIL_DELAY']) // If timelimit exeeds
          {
            return false;
          }
        }
        // Verify Confirmmail with time limit OFF
        // --------------------------------------
        else
        {
          $dbnow = date("Y-m-d H:i:s");

          // Update ConfirmMail table
          // ------------------------
					$query = '
UPDATE '.USER_CONFIRM_MAIL_TABLE.'
SET date_check="'.$dbnow.'"
WHERE id = "'.$id.'"
;';
					pwg_query($query);

          // Update LastVisit table - Force reminder field to false
          // Usefull when a user has been automatically downgraded and revalidate its registration
          // -------------------------------------------------------------------------------------
          $query = '
UPDATE '.USER_LASTVISIT_TABLE.'
SET reminder="false"
WHERE user_id = "'.$data['user_id'].'"
;';
          pwg_query($query);

          if ($conf_UAM['NO_CONFIRM_GROUP'] <> -1) // Delete user from unvalidated users group
          {
            $query = '
DELETE FROM '.USER_GROUP_TABLE.'
WHERE user_id = '.$data['user_id'].'
AND group_id = '.$conf_UAM['NO_CONFIRM_GROUP'].'
;';
            pwg_query($query);
          }

          if ($conf_UAM['VALIDATED_GROUP'] <> -1)
          {
            $query = '
DELETE FROM '.USER_GROUP_TABLE.'
WHERE user_id = '.$data['user_id'].'
AND group_id = '.$conf_UAM['VALIDATED_GROUP'].'
;';
            pwg_query($query);

            $query = '
INSERT INTO '.USER_GROUP_TABLE.'
  (user_id, group_id)
VALUES
  ('.$data['user_id'].', '.$conf_UAM['VALIDATED_GROUP'].')
;';
            pwg_query($query);
          }

          if ($conf_UAM['VALIDATED_STATUS'] <> -1) // Change user's status
          {
            $query = '
UPDATE '.USER_INFOS_TABLE.'
SET status = "'.$conf_UAM['VALIDATED_STATUS'].'"
WHERE user_id = '.$data['user_id'].'
;';
            pwg_query($query);
          }

          if ($conf_UAM['VALID_LEVEL'] <> -1) // Change user's privacy level
          {
            $query = '
UPDATE '.USER_INFOS_TABLE.'
SET level = "'.$conf_UAM['VALID_LEVEL'].'"
WHERE user_id = '.$data['user_id'].'
;';
            pwg_query($query);
          }

          // Set UAM_validated field to True in #_users table
          SetValidated($data['user_id']);

          // Refresh user's category cache
          // -----------------------------
          invalidate_user_cache();

          return true;
        }
      }
    }
    else if (!empty($data) and !is_null($data['date_check']))
    {
      return false;
    }
  }
  else
    return false;
}


/**
 * Function called from UAM_admin.php for manual validation by admin
 *
 * @param : User id
 * 
 */
function ManualValidation($id)
{
		global $conf;

		$conf_UAM = unserialize($conf['UserAdvManager']);

		if (isset($conf_UAM['CONFIRM_MAIL']) and $conf_UAM['CONFIRM_MAIL'] == 'true') // Set date of validation
		{
      $dbnow = date("Y-m-d H:i:s");

			$query = '
UPDATE '.USER_CONFIRM_MAIL_TABLE.'
SET date_check="'.$dbnow.'"
WHERE user_id = '.$id.'
;';
			pwg_query($query);
		}

		if ($conf_UAM['NO_CONFIRM_GROUP'] <> -1) // Delete user from waiting group
		{
				$query = '
DELETE FROM '.USER_GROUP_TABLE.'
WHERE user_id = '.$id.'
		AND group_id = '.$conf_UAM['NO_CONFIRM_GROUP'].'
;';
				pwg_query($query);
		}

		if ($conf_UAM['VALIDATED_GROUP'] <> -1) // Set user's valid group
		{
      $query = '
DELETE FROM '.USER_GROUP_TABLE.'
WHERE user_id = '.$id.'
		AND group_id = '.$conf_UAM['VALIDATED_GROUP'].'
;';
      pwg_query($query);

      $query = '
INSERT INTO '.USER_GROUP_TABLE.'
		(user_id, group_id)
VALUES
		('.$id.', '.$conf_UAM['VALIDATED_GROUP'].')
;';
      pwg_query($query);
		}

		if ($conf_UAM['VALIDATED_STATUS'] <> -1) // Set user's valid status
		{
      $query = '
UPDATE '.USER_INFOS_TABLE.'
SET status = "'.$conf_UAM['VALIDATED_STATUS'].'"
WHERE user_id = '.$id.'
;';
      pwg_query($query);
		}

		if ($conf_UAM['VALID_LEVEL'] <> -1) // Set user's valid privacy level
		{
      $query = '
UPDATE '.USER_INFOS_TABLE.'
SET level = "'.$conf_UAM['VALID_LEVEL'].'"
WHERE user_id = '.$id.'
;';
      pwg_query($query);
		}

		// Set UAM_validated field to True in #_users table
		SetValidated($id);
}


/**
 * Function called from functions.inc.php - Check if username matches forbidden characters
 *
 * @param : User login
 * 
 * @return : Bool
 * 
 */
function ValidateUsername($login)
{
  global $conf;

  $conf_UAM = unserialize($conf['UserAdvManager']);

  if (isset($login) and isset($conf_UAM['USERNAME_CHAR_LIST']) and !empty($conf_UAM['USERNAME_CHAR_LIST']))
  {
    $conf_CharExclusion = preg_split("/,/",$conf_UAM['USERNAME_CHAR_LIST']);
    for ($i = 0 ; $i < count($conf_CharExclusion) ; $i++)
    {
      //Detect meta-characters (# ! ^ $ ( ) [ ] { } ? + * . \ -) for special pattern
      if ($conf_CharExclusion[$i] == "#"
       or $conf_CharExclusion[$i] == "$"
       or $conf_CharExclusion[$i] == "!"
       or $conf_CharExclusion[$i] == "^"
       or $conf_CharExclusion[$i] == "*"
       or $conf_CharExclusion[$i] == "?"
       or $conf_CharExclusion[$i] == "+"
       or $conf_CharExclusion[$i] == "."
       or $conf_CharExclusion[$i] == "\\"
       or $conf_CharExclusion[$i] == "|"
       or $conf_CharExclusion[$i] == "["
       or $conf_CharExclusion[$i] == "]"
       or $conf_CharExclusion[$i] == "("
       or $conf_CharExclusion[$i] == ")"
       or $conf_CharExclusion[$i] == "{"
       or $conf_CharExclusion[$i] == "}"
       or $conf_CharExclusion[$i] == "-")
      {
        $pattern = '/[][^$.\*+?(){}#|-]/i';
      }
      else
      {
        $pattern = '/'.$conf_CharExclusion[$i].'/i';
      }

      if (preg_match($pattern, $login))
      {
        return true;
      }
    }
  }
  else
  {
    return false;
  }
}


/**
 * Function called from main.inc.php - Check if user's email is in excluded email providers list
 * Doesn't work on call - Must be copied in main.inc.php to work
 *
 * @param : Email address
 * 
 * @return : Bool
 * 
 */
function ValidateEmailProvider($email)
{
  global $conf;

  $conf_UAM = unserialize($conf['UserAdvManager']);

		if (isset($email) and isset($conf_UAM['MAILEXCLUSION_LIST']) and !empty($conf_UAM['MAILEXCLUSION_LIST']))
		{
      $conf_MailExclusion = preg_split("/[\s,]+/",$conf_UAM['MAILEXCLUSION_LIST']);
      for ($i = 0 ; $i < count($conf_MailExclusion) ; $i++)
      {
        $pattern = '/'.$conf_MailExclusion[$i].'/i';
        if (preg_match($pattern, $email))
        {
          return true;
        }
      }
    }
    else
    {
      return false;
    }
}


/**
 * Function called from UAM_admin.php - Get unvalidated users according time limit
 * 
 * @return : List of users
 * 
 */
function get_unvalid_user_list()
{
  global $conf, $page;

  // Get ConfirmMail configuration
  // -----------------------------
  $conf_UAM_ConfirmMail = unserialize($conf['UserAdvManager_ConfirmMail']);
  // Get UAM configuration
  // ---------------------
  $conf_UAM = unserialize($conf['UserAdvManager']);

  $users = array();

  // Search users depending expiration date
  // --------------------------------------
  $query = '
SELECT DISTINCT u.'.$conf['user_fields']['id'].' AS id,
                u.'.$conf['user_fields']['username'].' AS username,
                u.'.$conf['user_fields']['email'].' AS email,
                ui.status,
                ui.enabled_high,
                ui.level,
                ui.registration_date
FROM '.USERS_TABLE.' AS u
  INNER JOIN '.USER_INFOS_TABLE.' AS ui
    ON u.'.$conf['user_fields']['id'].' = ui.user_id
  LEFT JOIN '.USER_GROUP_TABLE.' AS ug
    ON u.'.$conf['user_fields']['id'].' = ug.user_id
WHERE u.'.$conf['user_fields']['id'].' >= 3
  AND u.'.$conf['user_fields']['id'].' <> '.$conf['default_user_id'].'
  AND (TO_DAYS(NOW()) - TO_DAYS(ui.registration_date) >= "'.$conf_UAM_ConfirmMail['CONFIRMMAIL_DELAY'].'"
  OR TO_DAYS(NOW()) - TO_DAYS(ui.registration_date) < "'.$conf_UAM_ConfirmMail['CONFIRMMAIL_DELAY'].'")
		AND u.UAM_validated = "false"
ORDER BY ui.registration_date ASC
;';

  $result = pwg_query($query);

  while ($row = pwg_db_fetch_assoc($result))
  {
    $user = $row;
    $user['groups'] = array();

    array_push($users, $user);
  }

  // Add groups list
  // ---------------
  $user_ids = array();
  foreach ($users as $i => $user)
  {
    $user_ids[$i] = $user['id'];
  }

		$user_nums = array_flip($user_ids);

  if (count($user_ids) > 0)
  {
    $query = '
SELECT user_id, group_id
  FROM '.USER_GROUP_TABLE.'
WHERE user_id IN ('.implode(',', $user_ids).')
;';
        
    $result = pwg_query($query);
        
    while ($row = pwg_db_fetch_assoc($result))
    {
      array_push(
        $users[$user_nums[$row['user_id']]]['groups'],
        $row['group_id']
      );
    }
  }

  return $users;
}


/**
 * Function called from functions.inc.php - Get all users who haven't validate their registration in configured time
 * to delete or remail them automatically
 * 
 * @return : List of users
 * 
 */
function get_unvalid_user_autotasks()
{
  global $conf, $page;

  // Get ConfirmMail configuration
  // -----------------------------
  $conf_UAM_ConfirmMail = unserialize($conf['UserAdvManager_ConfirmMail']);

  $users = array();

  // search users depending expiration date
  // --------------------------------------
  $query = '
SELECT DISTINCT u.'.$conf['user_fields']['id'].' AS id,
                ui.registration_date
FROM '.USERS_TABLE.' AS u
  INNER JOIN '.USER_INFOS_TABLE.' AS ui
    ON u.'.$conf['user_fields']['id'].' = ui.user_id
WHERE u.'.$conf['user_fields']['id'].' >= 3
  AND u.'.$conf['user_fields']['id'].' <> '.$conf['default_user_id'].'
  AND (TO_DAYS(NOW()) - TO_DAYS(ui.registration_date) >= "'.$conf_UAM_ConfirmMail['CONFIRMMAIL_DELAY'].'")
ORDER BY ui.registration_date ASC;';

  $result = pwg_query($query);

  while ($row = pwg_db_fetch_assoc($result))
  {
    array_push($users, $row);
  }

  return $users;
}


/**
 * Function called from UAM_admin.php - Get ghost users
 * 
 * @return : List of users
 * 
 */
function get_ghost_user_list()
{
  global $conf, $page;

  $conf_UAM = unserialize($conf['UserAdvManager']);

  $users = array();

  // Search users depending expiration date
  // --------------------------------------
  $query = '
SELECT DISTINCT u.'.$conf['user_fields']['id'].' AS id,
                u.'.$conf['user_fields']['username'].' AS username,
                u.'.$conf['user_fields']['email'].' AS email,
                lv.lastvisit,
                lv.reminder
FROM '.USERS_TABLE.' AS u
  INNER JOIN '.USER_LASTVISIT_TABLE.' AS lv
    ON u.'.$conf['user_fields']['id'].' = lv.user_id
WHERE (TO_DAYS(NOW()) - TO_DAYS(lv.lastvisit) >= "'.$conf_UAM['GHOSTRACKER_DAYLIMIT'].'")
AND u.'.$conf['user_fields']['id'].' <> '.$conf['default_user_id'].'
ORDER BY lv.lastvisit ASC;';

  $result = pwg_query($query);
      
  while ($row = pwg_db_fetch_assoc($result))
  {
    $user = $row;
    $user['groups'] = array();

    array_push($users, $user);
  }

  // Add groups list
  // ---------------
  $user_ids = array();
  foreach ($users as $i => $user)
  {
  	$user_ids[$i] = $user['id'];
  }

  return $users;
}


/**
 * Function called from functions.inc.php - Get all ghost users to delete or downgrade automatically on any user login
 * 
 * @return : List of users to delete or downgrade automatically
 * 
 */
function get_ghosts_autotasks()
{
  global $conf, $page;

  $conf_UAM = unserialize($conf['UserAdvManager']);

  $users = array();
  
  // Search users depending expiration date and reminder sent
  // --------------------------------------------------------
  $query = '
SELECT DISTINCT u.'.$conf['user_fields']['id'].' AS id,
                lv.lastvisit
FROM '.USERS_TABLE.' AS u
  INNER JOIN '.USER_LASTVISIT_TABLE.' AS lv
    ON u.'.$conf['user_fields']['id'].' = lv.user_id
WHERE (TO_DAYS(NOW()) - TO_DAYS(lv.lastvisit) >= "'.$conf_UAM['GHOSTRACKER_DAYLIMIT'].'")
AND u.'.$conf['user_fields']['id'].' <> '.$conf['default_user_id'].'
ORDER BY lv.lastvisit ASC;';

  $result = pwg_query($query);
      
  while ($row = pwg_db_fetch_assoc($result))
  {
    array_push($users, $row);
  }

  return $users;
}


/**
 * Function called from UAM_admin.php - Get all users to display the number of days since their last visit
 * 
 * @return : List of users
 * 
 */
function get_user_list()
{
  global $conf, $page;

  $users = array();

  // Search users depending expiration date with exclusion of Adult_Content generic users
  // ------------------------------------------------------------------------------------
  $query = '
SELECT DISTINCT u.'.$conf['user_fields']['id'].' AS id,
                u.'.$conf['user_fields']['username'].' AS username,
                u.'.$conf['user_fields']['email'].' AS email,
                ug.lastvisit
FROM '.USERS_TABLE.' AS u
  INNER JOIN '.USER_LASTVISIT_TABLE.' AS ug
    ON u.'.$conf['user_fields']['id'].' = ug.user_id
WHERE u.'.$conf['user_fields']['id'].' >= 3
  AND u.'.$conf['user_fields']['id'].' <> '.$conf['default_user_id'].'
  AND u.username NOT LIKE "16"
  AND u.username NOT LIKE "18"
ORDER BY ug.lastvisit DESC
;';

  $result = pwg_query($query);
      
  while ($row = pwg_db_fetch_assoc($result))
  {
    $user = $row;
    $user['groups'] = array();

    array_push($users, $user);
  }

  // Add groups list
  // ---------------
  $user_ids = array();
  foreach ($users as $i => $user)
  {
    $user_ids[$i] = $user['id'];
  }

  return $users;
}


/**
 * Function called from UAM_admin.php - to determine who is expired or not and giving a different display color
 *
 * @param : user id
 * 
 * @return : Bool
 * 
 */
function expiration($id)
{
	global $conf, $page;

  // Get ConfirmMail configuration
  // -----------------------------
  $conf_UAM_ConfirmMail = unserialize($conf['UserAdvManager_ConfirmMail']);
          
  // Get UAM configuration
  // ---------------------
  $conf_UAM = unserialize($conf['UserAdvManager']);

  $query = '
SELECT registration_date
  FROM '.USER_INFOS_TABLE.'
WHERE user_id = '.$id.'
;';
  list($registration_date) = pwg_db_fetch_row(pwg_query($query));

//              Time limit process             
// ********************************************  
  if (!empty($registration_date))
  {
    // Dates formating and compare
    // ---------------------------
    $today = date("d-m-Y"); // Get today's date
    list($day, $month, $year) = explode('-', $today); // explode date of today						 
    $daytimestamp = mktime(0, 0, 0, $month, $day, $year);// Generate UNIX timestamp

    list($regdate, $regtime) = explode(' ', $registration_date); // Explode date and time from registration date
    list($regyear, $regmonth, $regday) = explode('-', $regdate); // Explode date from registration date
    $regtimestamp = mktime(0, 0, 0, $regmonth, $regday, $regyear);// Generate UNIX timestamp

    $deltasecs = $daytimestamp - $regtimestamp;// Compare the 2 UNIX timestamps	
    $deltadays = floor($deltasecs / 86400);// Convert result from seconds to days

    // Condition with the value set for time limit
    // -------------------------------------------
    if ($deltadays <= $conf_UAM_ConfirmMail['CONFIRMMAIL_DELAY']) // If Nb of days is less than the limit set
    {
      return false;
    }
    else
    {
      return true;
    }
  }
}


/**
 * Returns a password's score for password complexity check
 *
 * @param : password filled by user
 * 
 * @return : Score calculation
 * 
 * Thanx to MathieuGut from http://m-gut.developpez.com
 */
function testpassword($password) // $password given by user
{

  // Variables initiation
  // --------------------
  $points = 0;
  $point_lowercase = 0;
  $point_uppercase = 0;
  $point_numbers = 0;
  $point_characters = 0;

  // Getting password lengh
  // ----------------------
  $length = strlen($password);

  // Loop to read password characters
  for($i = 0; $i < $length; $i++)
  {
    // Select each letters
    // $i is 0 at first turn
    // ---------------------
    $letters = $password[$i];

    if ($letters>='a' && $letters<='z')
    {
      // Adding 1 point to score for a lowercase
      // ---------------------------------------
		  		$points = $points + 1;

      // Adding bonus points for lowercase
      // ---------------------------------
		  $point_lowercase = 1;
    }
    else if ($letters>='A' && $letters <='Z')
    {
      // Adding 2 points to score for uppercase
      // --------------------------------------
      $points = $points + 2;

      // Adding bonus points for uppercase
      // ---------------------------------
      $point_uppercase = 2;
    }
    else if ($letters>='0' && $letters<='9')
    {
      // Adding 3 points to score for numbers
      // ------------------------------------
      $points = $points + 3;

      // Adding bonus points for numbers
      // -------------------------------
      $point_numbers = 3;
    }
    else
    {
      // Adding 5 points to score for special characters
      // -----------------------------------------------
      $points = $points + 5;
		
      // Adding bonus points for special characters
      // ------------------------------------------
      $point_characters = 5;
    }
  }

  // Calculating the coefficient points/length
  // -----------------------------------------
  $step1 = $points / $length;

  // Calculation of the diversity of character types...
  // --------------------------------------------------
  $step2 = $point_lowercase + $point_uppercase + $point_numbers + $point_characters;

  // Multiplying the coefficient of diversity with that of the length
  // ----------------------------------------------------------------
  $score = $step1 * $step2;

  // Multiplying the result by the length of the string
  // --------------------------------------------------
  $finalscore = $score * $length;

  return $finalscore;
}


/**
 * UAM_check_profile - Thx to LucMorizur
 * checks if a user id is registered as having already
 * visited his profile page.
 * 
 * @uid        : the user id
 * 
 * @user_idsOK : (returned) array of all users ids having already visited
 *               their profile.php pages
 * 
 * @returns    : true or false whether the users has already visited his
 *               profile.php page or not
 * 
 */
function UAM_check_profile($uid, &$user_idsOK)
{
  $t = array();
  $v = false;

  $query = '
SELECT value
FROM '.CONFIG_TABLE.'
WHERE param = "UserAdvManager_Redir"
;';

  if ($v = (($t = pwg_db_fetch_row(pwg_query($query))) !== false))
  {
    $user_idsOK = explode(',', $t[0]);
    $v = (in_array($uid, $user_idsOK));
  }
  return $v;
}


/**
 * UAM_check_pwdreset
 * checks if a user id is registered as having already
 * changed his password.
 * 
 * @uid        : the user id
 * 
 * @returns    : true or false whether the users has already changed his password
 * 
 */
function UAM_check_pwgreset($uid)
{
  $query = '
SELECT UAM_pwdreset
FROM '.USERS_TABLE.'
WHERE id='.$uid.'
;';

  $result = pwg_db_fetch_assoc(pwg_query($query));

  if($result['UAM_pwdreset'] == 'true')
  {
    return true;
  }
  else return false; 
}


/**
 * UAM_UsrReg_Verif
 * Check if the user who logged-in have validate his registration
 * 
 * @returns : True if validation is OK else False
 */
function UAM_UsrReg_Verif($user_id)
{
  global $conf;

  $query = '
SELECT UAM_validated
FROM '.USERS_TABLE.'
WHERE id='.$user_id.'
;';

  $result = pwg_db_fetch_assoc(pwg_query($query));

  if($result['UAM_validated'] == 'true' or is_null($result['UAM_validated']))
  {
    return true;
  }
  else return false;
}


/**
 * SetUnvalidated
 * Set UAM_validated field to false in #_users table
 * 
 **/
function SetUnvalidated($user_id)
{
  $query ='
UPDATE '.USERS_TABLE.'
SET UAM_validated = "false"
WHERE id = '.$user_id.'
LIMIT 1
;';

  pwg_query($query);
}


/**
 * SetValidated
 * Set UAM_validated field to true in #_users table
 * 
 **/
function SetValidated($user_id)
{
  $query ='
UPDATE '.USERS_TABLE.'
SET UAM_validated = "true"
WHERE id = '.$user_id.'
LIMIT 1
;';

  pwg_query($query);
}


/**
 * UAM_Set_PwdReset
 * Action in user_list to set a password reset for a user
 */
function UAM_Set_PwdReset($uid)
{
  $query ='
UPDATE '.USERS_TABLE.'
SET UAM_pwdreset = "true"
WHERE id = '.$uid.'
LIMIT 1
;';

  pwg_query($query);
}


/**
 * UAM_loc_visible_user_list
 * Adds a new feature in user_list to allow password reset for selected users by admin
 * 
 */
function UAM_loc_visible_user_list($visible_user_list)
{
  global $template;

  $template->append('plugin_user_list_column_titles', l10n('UAM_PwdReset'));

  $user_ids = array();

  foreach ($visible_user_list as $i => $user)
  {
    $user_ids[$i] = $user['id'];
  }

  $user_nums = array_flip($user_ids);

  // Query to get information in database
  // ------------------------------------
  if (!empty($user_ids))
  {
    $query = '
SELECT DISTINCT id, UAM_pwdreset
  FROM '.USERS_TABLE.'
  WHERE id IN ('.implode(',', $user_ids).')
;';
    $result = pwg_query($query);

    while ($row = pwg_db_fetch_assoc($result))
    {
      if ($row['UAM_pwdreset'] == 'false')
      {
        $pwdreset = l10n('UAM_PwdReset_Done');
      }
      else if ($row['UAM_pwdreset'] == 'true')
      {
        $pwdreset = l10n('UAM_PwdReset_Todo');
      }
      else $pwdreset = l10n('UAM_PwdReset_NA');

		  $visible_user_list[$user_nums[$row['id']]]['plugin_columns'][] = $pwdreset; // Shows users password state in user_list
    }
  }
  return $visible_user_list;
}


/**
 * UAM specific database dump (only for MySql !)
 * Creates an SQL dump of UAM specific tables and configuration settings
 * 
 * @returns  : Boolean to manage appropriate message display
 * 
 */
function UAM_dump($download)
{
  global $conf;

  $plugin =  PluginInfos(UAM_PATH);
  $version = $plugin['version'];

  // Initial backup folder creation and file initialisation
  // ------------------------------------------------------
  if (!is_dir(UAM_PATH.'/include/backup'))
    mkdir(UAM_PATH.'/include/backup');

  $Backup_File = UAM_PATH.'/include/backup/UAM_dbbackup.sql';

  $fp = fopen($Backup_File, 'w');

  // Writing plugin version
  $insertions = "-- ".$version." --\n\n";
  fwrite($fp, $insertions);

  // Saving UAM specific tables
  // --------------------------
  $ListTables = array(USER_CONFIRM_MAIL_TABLE, USER_LASTVISIT_TABLE);
  $j=0;

  while($j < count($ListTables))
  {
    $sql = 'SHOW CREATE TABLE '.$ListTables[$j];
    $res = pwg_query($sql);

    if ($res)
    {
      $insertions = "-- -------------------------------------------------------\n";
      $insertions .= "-- Create ".$ListTables[$j]." table\n";
      $insertions .= "-- ------------------------------------------------------\n\n";

      $insertions .= "DROP TABLE IF EXISTS ".$ListTables[$j].";\n\n";

      $array = pwg_db_fetch_row($res);
      $array[1] .= ";\n\n";
      $insertions .= $array[1];

      $req_table = pwg_query('DESCRIBE '.$ListTables[$j].';') or die(my_error());
      $nb_fields = pwg_db_num_rows($req_table);
      $req_table2 = pwg_query('SELECT * FROM '.$ListTables[$j]) or die(my_error());

      while ($line = pwg_db_fetch_row($req_table2))
      {
        $insertions .= 'INSERT INTO '.$ListTables[$j].' VALUES (';
        for ($i=0; $i<$nb_fields; $i++)
        {
          $insertions .= '\'' . pwg_db_real_escape_string($line[$i]) . '\', ';
        }
        $insertions = substr($insertions, 0, -2);
        $insertions .= ");\n";
      }
      $insertions .= "\n\n";
    }

    fwrite($fp, $insertions);    
    $j++;
  }

  // Saving UAM configuration
  // ------------------------
  $insertions = "-- -------------------------------------------------------\n";
  $insertions .= "-- Insert UAM configuration in ".CONFIG_TABLE."\n";
  $insertions .= "-- ------------------------------------------------------\n\n";

  fwrite($fp, $insertions);

  $pattern = "UserAdvManager%";
  $req_table = pwg_query('SELECT * FROM '.CONFIG_TABLE.' WHERE param LIKE "'.$pattern.'";') or die(my_error());
  $nb_fields = pwg_db_num_rows($req_table);
  $nb_fields = $nb_fields - 1;  // Fix the number of fields because pwg_db_num_rows() returns a bad number

  while ($line = pwg_db_fetch_row($req_table))
  {
    $insertions = 'INSERT INTO '.CONFIG_TABLE.' VALUES (';
    for ($i=0; $i<$nb_fields; $i++)
    {
      $insertions .= '\'' . pwg_db_real_escape_string($line[$i]) . '\', ';
    }
    $insertions = substr($insertions, 0, -2);
    $insertions .= ");\n";

    fwrite($fp, $insertions);
  }

  fclose($fp);

  // Download generated dump file
  // ----------------------------
  if ($download == 'true')
  {
    if (@filesize($Backup_File))
    {
      $http_headers = array(
        'Content-Length: '.@filesize($Backup_File),
        'Content-Type: text/x-sql',
        'Content-Disposition: attachment; filename="UAM_dbbackup.sql";',
        'Content-Transfer-Encoding: binary',
        );

      foreach ($http_headers as $header)
      {
        header($header);
      }

      @readfile($Backup_File);
      exit();
    }
  }

  return true;
}


/**
 * UAM_Restore_backup_file
 * Restore backup database file
 * 
 * @returns : Boolean
 */
function UAM_Restore_backup_file() 
{
  global $prefixeTable, $dblayer, $conf;

  define('DEFAULT_PREFIX_TABLE', 'piwigo_');

  $Backup_File = UAM_PATH.'/include/backup/UAM_dbbackup.sql';

  // Cleanup database before restoring
  // ---------------------------------

  // Delete UserAdvManager global config in #_config table
  $q = '
DELETE FROM '.CONFIG_TABLE.'
WHERE param="UserAdvManager"
;';

  pwg_query($q);

  // Delete UserAdvManager_ConfirmMail global config in #_config table
  $q = '
DELETE FROM '.CONFIG_TABLE.'
WHERE param="UserAdvManager_ConfirmMail"
;';

  pwg_query($q);

  // Delete UserAdvManager_Redir config in #_config table
  $q = '
DELETE FROM '.CONFIG_TABLE.'
WHERE param="UserAdvManager_Redir"
;';

  pwg_query($q);

  // Delete UserAdvManager_Version config in #_config table
  $q = '
DELETE FROM '.CONFIG_TABLE.'
WHERE param="UserAdvManager_Version"
;';

  pwg_query($q);

  // Restore sql backup file - DROP TABLE queries are executed
  // ---------------------------------------------------------
  UAM_execute_sqlfile(
    $Backup_File,
    DEFAULT_PREFIX_TABLE,
    $prefixeTable,
    $dblayer
  );
}


/**
 * loads an sql file and executes all queries / Based on Piwigo's original install file
 *
 * Before executing a query, $replaced is... replaced by $replacing. This is
 * useful when the SQL file contains generic words.
 *
 * @param string filepath
 * @param string replaced
 * @param string replacing
 * @return void
 */
function UAM_execute_sqlfile($filepath, $replaced, $replacing, $dblayer)
{
  $sql_lines = file($filepath);
  $query = '';
  foreach ($sql_lines as $sql_line)
  {
    $sql_line = trim($sql_line);
    if (preg_match('/(^--|^$)/', $sql_line))
    {
      continue;
    }

    $query.= ' '.$sql_line;

    // if we reached the end of query, we execute it and reinitialize the
    // variable "query"
    if (preg_match('/;$/', $sql_line))
    {
      $query = trim($query);
      $query = str_replace($replaced, $replacing, $query);
      if ('mysql' == $dblayer)
      {
        if (preg_match('/^(CREATE TABLE .*)[\s]*;[\s]*/im', $query, $matches))
        {
          $query = $matches[1].' DEFAULT CHARACTER SET utf8'.';';
        }
      }
      pwg_query($query);
      $query = '';
    }
  }
}


/**
 * Delete obsolete files on plugin upgrade
 * Obsolete files are listed in file obsolete.list
 *
 */
function clean_obsolete_files()
{
  if (file_exists(UAM_PATH.'obsolete.list')
    and $old_files = file(UAM_PATH.'obsolete.list', FILE_IGNORE_NEW_LINES)
    and !empty($old_files))
  {
    array_push($old_files, 'obsolete.list');
    foreach($old_files as $old_file)
    {
      $path = UAM_PATH.$old_file;
      if (is_file($path))
      {
        @unlink($path);
      }
      elseif (is_dir($path))
      {
        @rmdir($path);
      }
    }
  }
}


/**
 * Function called from maintain.inc.php - to check if database upgrade is needed
 * 
 * @param : table name
 * 
 * @return : boolean
 * 
 */
function table_exist($table)
{
  $query = 'DESC '.$table.';';
  return (bool)($res=pwg_query($query));
}


/**
 * Function called from UAM_admin.php and main.inc.php to get the plugin version and name
 *
 * @param : plugin directory
 * 
 * @return : plugin's version and name
 * 
 */
function PluginInfos($dir)
{
  $path = $dir;

  $plg_data = implode( '', file($path.'main.inc.php') );
  if ( preg_match("|Plugin Name: (.*)|", $plg_data, $val) )
  {
    $plugin['name'] = trim( $val[1] );
  }
  if (preg_match("|Version: (.*)|", $plg_data, $val))
  {
    $plugin['version'] = trim($val[1]);
  }
  if ( preg_match("|Plugin URI: (.*)|", $plg_data, $val) )
  {
    $plugin['uri'] = trim($val[1]);
  }
  if ($desc = load_language('description.txt', $path.'/', array('return' => true)))
  {
    $plugin['description'] = trim($desc);
  }
  elseif ( preg_match("|Description: (.*)|", $plg_data, $val) )
  {
    $plugin['description'] = trim($val[1]);
  }
  if ( preg_match("|Author: (.*)|", $plg_data, $val) )
  {
    $plugin['author'] = trim($val[1]);
  }
  if ( preg_match("|Author URI: (.*)|", $plg_data, $val) )
  {
    $plugin['author uri'] = trim($val[1]);
  }
  if (!empty($plugin['uri']) and strpos($plugin['uri'] , 'extension_view.php?eid='))
  {
    list( , $extension) = explode('extension_view.php?eid=', $plugin['uri']);
    if (is_numeric($extension)) $plugin['extension'] = $extension;
  }
// IMPORTANT SECURITY !
// --------------------
  $plugin = array_map('htmlspecialchars', $plugin);

  return $plugin ;
}


/**
 * Useful for debugging - 4 vars can be set
 * Output result to log.txt file
 *
 */
function UAMLog($var1, $var2, $var3, $var4)
{
   $fo=fopen (UAM_PATH.'log.txt','a') ;
   fwrite($fo,"======================\n") ;
   fwrite($fo,'le ' . date('D, d M Y H:i:s') . "\r\n");
   fwrite($fo,$var1 ."\r\n") ;
   fwrite($fo,$var2 ."\r\n") ;
   fwrite($fo,$var3 ."\r\n") ;
   fwrite($fo,$var4 ."\r\n") ;
   fclose($fo) ;
}

?>