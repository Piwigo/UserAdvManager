<?php
include_once (NBC_UserAdvManager_PATH.'include/constants.php');
load_language('plugin.lang', NBC_UserAdvManager_PATH);

/* Function called from main.inc.php to send validation email */
function SendMail2User($typemail, $id, $username, $password, $email, $confirm)
{
  global $conf;
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
  
	include_once(PHPWG_ROOT_PATH.'include/functions_mail.inc.php');
  
	$infos1_perso = "";
  $infos2_perso = "";

  switch($typemail)
  {
    case 1:
      $subject = '['.$conf['gallery_title'].'] '.l10n_args(get_l10n_args('Add of %s', $username));
      $password = $password <> '' ? $password : l10n('UserAdvManager_empty_pwd');
      
      if ( function_exists('get_user_language_desc') and isset($conf_nbc_UserAdvManager[10]) and $conf_nbc_UserAdvManager[10] <> '' )
        $infos1_perso = get_user_language_desc($conf_nbc_UserAdvManager[10])."\n\n";
      
      break;
      
    case 2:
      $subject = '['.$conf['gallery_title'].'] '.l10n_args(get_l10n_args('Update of %s', $username));
      $password = $password <> '' ? $password : l10n('UserAdvManager_empty_pwd');

      break;
        
    case 3:
      $subject = '['.$conf['gallery_title'].'] '.l10n_args(get_l10n_args('Update of %s', $username));
      $password = $password <> '' ? $password : l10n('UserAdvManager_no_update_pwd');

      break;
  }

  if ( isset($conf_nbc_UserAdvManager[0]) and $conf_nbc_UserAdvManager[0] == 'true' )
  {
    $infos1 = array(
      get_l10n_args('infos_mail %s', $username),
      get_l10n_args('User: %s', $username),
      get_l10n_args('Password: %s', $password),
      get_l10n_args('Email: %s', $email),
      get_l10n_args('', ''),
    );
  }


  if ( isset($conf_nbc_UserAdvManager[2]) and $conf_nbc_UserAdvManager[2] == 'true' and $confirm)
  {
    $infos2 = array
    (
      get_l10n_args('Link: %s', AddConfirmMail($id, $email)),
      get_l10n_args('', ''),
    );

    if ( function_exists('get_user_language_desc') and isset($conf_nbc_UserAdvManager[11]) and $conf_nbc_UserAdvManager[11] <> '' )
      $infos2_perso = get_user_language_desc($conf_nbc_UserAdvManager[11])."\n\n";
  }

  pwg_mail($email, array(
    'subject' => $subject,
    'content' => (isset($infos1) ? $infos1_perso.l10n_args($infos1)."\n\n" : "").(isset($infos2) ? $infos2_perso.l10n_args($infos2)."\n\n" : "").get_absolute_root_url(),
  ));

/* ********************** */
/* Email sending debugger */
/* This is only to trace  */
/* the send of emails for */
/* debugging              */
/* ********************** */  
//  MailLog($email,$subject);
/* ********************** */
}


/* Email sending debugger function */
//function MailLog  ($to, $subject)
//{
//   $fo=fopen (NBC_UserAdvManager_PATH.'admin/maillog.txt','a') ;
//   fwrite($fo,"======================\n") ;
//   fwrite($fo,'le ' . date('D, d M Y H:i:s') . "\r\n");
//   fwrite($fo,$to . "\n" . $subject . "\r\n") ;
//   fclose($fo) ;
   //return mail ($to,$subject) ;
//}


/* Function called from UserAdvManager_admin.php to resend validation email with or without new validation key */
function ResendMail2User($typemail, $user_id, $username, $email, $confirm)
{
  global $conf;
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
	$conf_nbc_UserAdvManager_ConfirmMail = isset($conf['nbc_UserAdvManager_ConfirmMail']) ? explode(";" , $conf['nbc_UserAdvManager_ConfirmMail']) : array();
  
	include_once(PHPWG_ROOT_PATH.'include/functions_mail.inc.php');
  
	$infos1_perso = "";
  $infos2_perso = "";

  switch($typemail)
  {
    case 1:
      $subject = '['.$conf['gallery_title'].'] '.l10n_args(get_l10n_args('Reminder_with_key_of_%s', $username));
      
      if (function_exists('get_user_language_desc') and isset($conf_nbc_UserAdvManager_ConfirmMail[2]) and $conf_nbc_UserAdvManager_ConfirmMail[2] <> '' and isset($conf_nbc_UserAdvManager_ConfirmMail[3]) and $conf_nbc_UserAdvManager_ConfirmMail[3] == 'true' and $confirm)
      {
				$infos1 = get_user_language_desc($conf_nbc_UserAdvManager_ConfirmMail[2])."\n\n";
			
				$infos2 = array
				(
					get_l10n_args('Link: %s', ResetConfirmMail($user_id)),
					get_l10n_args('', ''),
				);
			}
		break;
      
    case 2:
      $subject = '['.$conf['gallery_title'].'] '.l10n_args(get_l10n_args('Reminder_without_key_of_%s', $username));
      
      if (function_exists('get_user_language_desc') and isset($conf_nbc_UserAdvManager_ConfirmMail[2]) and $conf_nbc_UserAdvManager_ConfirmMail[2] <> '' and isset($conf_nbc_UserAdvManager_ConfirmMail[3]) and $conf_nbc_UserAdvManager_ConfirmMail[3] == 'true' and !$confirm)
      {
				$infos1 = get_user_language_desc($conf_nbc_UserAdvManager_ConfirmMail[2])."\n\n";
      }
    break;
	}
  pwg_mail($email, array(
    'subject' => $subject,
    'content' => ($infos1."\n\n").(isset($infos2) ? l10n_args($infos2)."\n\n" : "").get_absolute_root_url(),
  ));

/* ********************** */
/* Email sending debugger */
/* This is only to trace  */
/* the send of emails for */
/* debugging              */
/* ********************** */  
//  MailLog($email,$subject);
/* ********************** */
}


/* Function called from functions AddConfirmMail and ResetConfirmMail for validation key generation */
function FindAvailableConfirmMailID()
{
  while (true)
  {
    $id = generate_key(16);
    $query = "
      SELECT COUNT(*)
      FROM ".USER_CONFIRM_MAIL_TABLE."
      WHERE id = '".$id."'
    ;";
    list($count) = mysql_fetch_row(pwg_query($query));

    if ($count == 0)
      return $id;
  }
}


/* Function called from functions SendMail2User to process unvalidated users and generate validation key link */
function AddConfirmMail($user_id, $email)
{
  global $conf;
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
  $Confirm_Mail_ID = FindAvailableConfirmMailID();

  list($dbnow) = mysql_fetch_row(pwg_query('SELECT NOW();'));
  
  if (isset($Confirm_Mail_ID))
  {
    $query = "
      SELECT status
      FROM ".USER_INFOS_TABLE."
      WHERE user_id = '".$user_id."'
    ;";
    list($status) = mysql_fetch_row(pwg_query($query));
    
    $query = "
      INSERT INTO ".USER_CONFIRM_MAIL_TABLE."
      (id, user_id, mail_address, status, date_check)
      VALUES
      ('".$Confirm_Mail_ID."', '".$user_id."', '".$email."', '".$status."', null)
    ;";
    pwg_query($query);

    $query = "
      DELETE FROM ".USER_GROUP_TABLE."
      WHERE user_id = '".$user_id."'
      AND (
        group_id = '".$conf_nbc_UserAdvManager[3]."'
			OR 
        group_id = '".$conf_nbc_UserAdvManager[4]."'
      )
    ;";
    pwg_query($query);

    if (!is_admin() and $conf_nbc_UserAdvManager[9] <> -1)
    {
      $query = "
        UPDATE ".USER_INFOS_TABLE."
        SET status = '".$conf_nbc_UserAdvManager[9]."'
        WHERE user_id = '".$user_id."'
      ;";
      pwg_query($query);
    }

    if ( $conf_nbc_UserAdvManager[3] <> -1 )
    {
      $query = "
        INSERT INTO ".USER_GROUP_TABLE."
        (user_id, group_id)
        VALUES
        ('".$user_id."', '".$conf_nbc_UserAdvManager[3]."')
      ;";
      pwg_query($query);
    }
    
    return get_absolute_root_url().NBC_UserAdvManager_PATH.'ConfirmMail.php?key='.$Confirm_Mail_ID;
  }
}


/* Function called from UserAdvManager_admin.php to reset validation key */
function ResetConfirmMail($user_id)
{
  global $conf;
  
  $Confirm_Mail_ID = FindAvailableConfirmMailID();

  list($dbnow) = mysql_fetch_row(pwg_query('SELECT NOW();'));
  
  if (isset($Confirm_Mail_ID))
  { 
    $query = "
			UPDATE ".USER_CONFIRM_MAIL_TABLE."
			SET id = '".$Confirm_Mail_ID."'
			WHERE user_id = '".$user_id."'
    ;";
    pwg_query($query);

		$query = "
    	UPDATE ".USER_INFOS_TABLE."
      SET registration_date = '".$dbnow."'
      WHERE user_id = '".$user_id."'
      ;";
		pwg_query($query);
    
    return get_absolute_root_url().NBC_UserAdvManager_PATH.'ConfirmMail.php?key='.$Confirm_Mail_ID;
  }
}


/* Function called from main.inc.php - Triggered on user deletion */
function DeleteConfirmMail($user_id)
{
  $query = "
    DELETE FROM ".USER_CONFIRM_MAIL_TABLE."
    WHERE user_id = '".$user_id."'
  ;";
  pwg_query($query);
}


/* Function called from ConfirmMail.php to verify validation key used by user according time limit */
function VerifyConfirmMail($id)
{
  global $conf;

  include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');
  
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
  $conf_nbc_UserAdvManager_ConfirmMail = isset($conf['nbc_UserAdvManager_ConfirmMail']) ? explode(";" , $conf['nbc_UserAdvManager_ConfirmMail']) : array();

  $query = "
    SELECT COUNT(*)
    FROM ".USER_CONFIRM_MAIL_TABLE."
    WHERE id = '".$id."'
  ;";
  list($count) = mysql_fetch_row(pwg_query($query));

  if ($count == 1)
  {
    $query = "
      SELECT user_id, status, date_check
      FROM ".USER_CONFIRM_MAIL_TABLE."
      WHERE id = '".$id."'
    ;";
    $data = mysql_fetch_array(pwg_query($query));
        
    if (!empty($data) and isset($data['user_id']) and !isset($data['date_check']))
    {
      $query = "
        SELECT registration_date
        FROM ".USER_INFOS_TABLE."
        WHERE user_id = '".$data['user_id']."'
      ;";
      list($registration_date) = mysql_fetch_row(pwg_query($query));

/*              Time limit process              */
/* ****************** begin ******************* */  
      if (!empty($registration_date))
      {
				// Verify Confirmmail with time limit ON
				if (isset ($conf_nbc_UserAdvManager_ConfirmMail[1]))
				{
					// dates formating and compare
					$today = date("d-m-Y"); // Get today's date
					list($day, $month, $year) = explode('-', $today); // explode date of today						 
 					$daytimestamp = mktime(0, 0, 0, $month, $day, $year);// Generate UNIX timestamp
	  		
	  			list($regdate, $regtime) = explode(' ', $registration_date); // Explode date and time from registration date
					list($regyear, $regmonth, $regday) = explode('-', $regdate); // Explode date from registration date
					$regtimestamp = mktime(0, 0, 0, $regmonth, $regday, $regyear);// Generate UNIX timestamp
			
					$deltasecs = $daytimestamp - $regtimestamp;// Compare the 2 UNIX timestamps	
					$deltadays = floor($deltasecs / 86400);// Convert result from seconds to days

					// Condition with the value set for time limit
					if ($deltadays <= $conf_nbc_UserAdvManager_ConfirmMail[1]) // If Nb of days is less than the limit set
					{
						list($dbnow) = mysql_fetch_row(pwg_query('SELECT NOW();'));

						$query = '
							UPDATE '.USER_CONFIRM_MAIL_TABLE.'
							SET date_check="'.$dbnow.'"
							WHERE id = "'.$id.'"
						;';
						pwg_query($query);
      
						if ($conf_nbc_UserAdvManager[3] <> -1)
						{
							$query = "
								DELETE FROM ".USER_GROUP_TABLE."
								WHERE user_id = '".$data['user_id']."'
								AND group_id = '".$conf_nbc_UserAdvManager[3]."'
							;";
							pwg_query($query);
						}
	    
						if ($conf_nbc_UserAdvManager[4] <> -1) // Change user's group 
						{
							$query = "
								DELETE FROM ".USER_GROUP_TABLE."
								WHERE user_id = '".$data['user_id']."'
								AND group_id = '".$conf_nbc_UserAdvManager[4]."'
							;";
							pwg_query($query);
	
							$query = "
								INSERT INTO ".USER_GROUP_TABLE."
									(user_id, group_id)
								VALUES
									('".$data['user_id']."', '".$conf_nbc_UserAdvManager[4]."')
								;";
							pwg_query($query);
						}

						if (($conf_nbc_UserAdvManager[5] <> -1 or isset($data['status']))) // Change user's status
						{
							$query = "
								UPDATE ".USER_INFOS_TABLE."
								SET status = '".(isset($data['status']) ? $data['status'] : $conf_nbc_UserAdvManager[5])."'
								WHERE user_id = '".$data['user_id']."'
							;";
							pwg_query($query);
						}
						// Refresh user's category cache
						invalidate_user_cache();
  
						return true;
					}
					elseif ($deltadays > $conf_nbc_UserAdvManager_ConfirmMail[1]) // If timelimit exeeds
					{
						return false;
					}
				}
				// Verify Confirmmail with time limit OFF
				else
				{
					list($dbnow) = mysql_fetch_row(pwg_query('SELECT NOW();'));

					$query = '
						UPDATE '.USER_CONFIRM_MAIL_TABLE.'
						SET date_check="'.$dbnow.'"
						WHERE id = "'.$id.'"
					;';
					pwg_query($query);
      
					if ($conf_nbc_UserAdvManager[3] <> -1)
					{
						$query = "
							DELETE FROM ".USER_GROUP_TABLE."
							WHERE user_id = '".$data['user_id']."'
							AND group_id = '".$conf_nbc_UserAdvManager[3]."'
						;";
						pwg_query($query);
					}
    
					if ($conf_nbc_UserAdvManager[4] <> -1)
					{
						$query = "
							DELETE FROM ".USER_GROUP_TABLE."
							WHERE user_id = '".$data['user_id']."'
							AND group_id = '".$conf_nbc_UserAdvManager[4]."'
						;";
						pwg_query($query);

						$query = "
							INSERT INTO ".USER_GROUP_TABLE."
								(user_id, group_id)
							VALUES
								('".$data['user_id']."', '".$conf_nbc_UserAdvManager[4]."')
						;";
						pwg_query($query);
					}

					if (($conf_nbc_UserAdvManager[5] <> -1 or isset($data['status'])))
					{
						$query = "
							UPDATE ".USER_INFOS_TABLE."
							SET status = '".(isset($data['status']) ? $data['status'] : $conf_nbc_UserAdvManager[5])."'
							WHERE user_id = '".$data['user_id']."'
						;";
						pwg_query($query);
					}
					// Refresh user's category cache
					invalidate_user_cache();
  
					return true;
				}
			}
		}
	}
  else
    return false;
}

/* Function called from UserAdvManager_admin.php to force users validation by admin */
function ForceValidation($id)
{
  global $conf;

  include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');
  
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
        
  $query = "
    SELECT COUNT(*)
    FROM ".USER_CONFIRM_MAIL_TABLE."
    WHERE user_id = '".$id."'
  ;";
  list($count) = mysql_fetch_row(pwg_query($query));

  if ($count == 1)
  {
    $query = "
      SELECT user_id, status, date_check
      FROM ".USER_CONFIRM_MAIL_TABLE."
      WHERE user_id = '".$id."'
    ;";
    $data = mysql_fetch_array(pwg_query($query));

    if (!empty($data) and isset($data['user_id']) and !isset($data['date_check']))
    {      
			list($dbnow) = mysql_fetch_row(pwg_query('SELECT NOW();'));

			$query = "
				UPDATE ".USER_CONFIRM_MAIL_TABLE."
				SET date_check='".$dbnow."'
				WHERE user_id = '".$data['user_id']."'
			;";
			pwg_query($query);
	     
			if ($conf_nbc_UserAdvManager[3] <> -1)
			{
				$query = "
					DELETE FROM ".USER_GROUP_TABLE."
					WHERE user_id = '".$data['user_id']."'
					AND group_id = '".$conf_nbc_UserAdvManager[3]."'
				;";
				pwg_query($query);
			}
  
			if ($conf_nbc_UserAdvManager[4] <> -1)
			{
				$query = "
					DELETE FROM ".USER_GROUP_TABLE."
					WHERE user_id = '".$data['user_id']."'
					AND group_id = '".$conf_nbc_UserAdvManager[4]."'
				;";
				pwg_query($query);
	
				$query = "
					INSERT INTO ".USER_GROUP_TABLE."
						(user_id, group_id)
					VALUES
						('".$data['user_id']."', '".$conf_nbc_UserAdvManager[4]."')
				;";
				pwg_query($query);
			}

			if (($conf_nbc_UserAdvManager[5] <> -1 or isset($data['status'])))
			{
				$query = "
					UPDATE ".USER_INFOS_TABLE."
					SET status = '".(isset($data['status']) ? $data['status'] : $conf_nbc_UserAdvManager[5])."'
					WHERE user_id = '".$data['user_id']."'
				;";
				pwg_query($query);
			}
			// Refresh user's category cache
			invalidate_user_cache();
			return true;
		}
	}
}

/* Function called from main.inc.php - Get username case insensitive */
function NotSensibleSearchUsername($username)
{
  global $conf;
  
  if (isset($username))
  {
    $query = "
      SELECT ".$conf['user_fields']['username']."
      FROM ".USERS_TABLE."
      WHERE LOWER(".$conf['user_fields']['username'].") = '".strtolower($username)."'
    ;";
    list($username) = mysql_fetch_row(pwg_query($query));

    return isset($username) ? $username : '';
  }
}


/* Obsolete function - Check for single email in database */
function SearchMail($email)
{
  global $conf, $lang;
  
  if (isset($email))
  {
    $query = "
      SELECT COUNT(*)
      FROM ".USERS_TABLE."
      WHERE ".$conf['user_fields']['email']." = '".$email."'
    ;";
    list($nbr_mail) = mysql_fetch_row(pwg_query($query));
  
    return isset($nbr_mail) ? $nbr_mail : 0;
  }
}


/* Function called from main.inc.php - Check if username matches forbidden caracters */
function ValidateUsername($login)
{
  global $conf;

  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();

  if (isset($login) and isset($conf_nbc_UserAdvManager[8]) and $conf_nbc_UserAdvManager[8] <> '')
  {
  	$pattern = '/'.$conf_nbc_UserAdvManager[8].'/';
    if ( preg_match($pattern, $login) )
      return false;
    else
      return true;
  }
  else
  {
    return true;
  }
}


/* Obsolete function - Check for no forbidden email provider */
/* This don't work on function call */
function ValidateEmailProvider($email)
{
  global $conf;

	$conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
	if (isset($conf_nbc_UserAdvManager[12]))
	{
		$ncsemail = strtolower($email);
		$conf_nbc_MailExclusion = preg_split('/,/',$conf_nbc_UserAdvManager[13]);
		for ($i = 0 ; $i < count($conf_nbc_MailExclusion) ; $i++)
		{
			$pattern = '/'.$conf_nbc_MailExclusion[$i].'/';
			if (preg_match($pattern, $ncsemail))
        		return false;
        	else
      			return true;
		}
	}
}


/* Function called from UserAdvManager.php - Get unvalidated users according time limit */
function get_unvalid_user_list()
{
	global $conf, $page;
          
	/* Get ConfirmMail configuration */
	$conf_nbc_UserAdvManager_ConfirmMail = isset($conf['nbc_UserAdvManager_ConfirmMail']) ? explode(";" , $conf['nbc_UserAdvManager_ConfirmMail']) : array();
          
	/* Get UserAdvManager configuration */
	$conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();  
  
  $users = array();

	/* search users depending expiration date */
  $query = '
		SELECT DISTINCT u.'.$conf['user_fields']['id'].' AS id,
										u.'.$conf['user_fields']['username'].' AS username,
										u.'.$conf['user_fields']['email'].' AS email,
										ui.status,
										ui.adviser,
										ui.enabled_high,
										ui.level,
										ui.registration_date
		FROM '.USERS_TABLE.' AS u
    INNER JOIN '.USER_INFOS_TABLE.' AS ui
      ON u.'.$conf['user_fields']['id'].' = ui.user_id
    LEFT JOIN '.USER_GROUP_TABLE.' AS ug
      ON u.'.$conf['user_fields']['id'].' = ug.user_id
		WHERE u.'.$conf['user_fields']['id'].' >= 3
		AND (TO_DAYS(NOW()) - TO_DAYS(ui.registration_date) >= "'.$conf_nbc_UserAdvManager_ConfirmMail[1].'"
			OR TO_DAYS(NOW()) - TO_DAYS(ui.registration_date) < "'.$conf_nbc_UserAdvManager_ConfirmMail[1].'")';

	if ($conf_nbc_UserAdvManager[3] <> '-1' and $conf_nbc_UserAdvManager[9] == '-1')
  {
    $query.= '
    AND ug.group_id = '.$conf_nbc_UserAdvManager[3];
  }
  if ($conf_nbc_UserAdvManager[3] == '-1' and $conf_nbc_UserAdvManager[9] <> '-1')
  {
    $query.= '
    AND ui.status = \''.$conf_nbc_UserAdvManager[9]."'";
  }
  if ($conf_nbc_UserAdvManager[3] <> '-1' and $conf_nbc_UserAdvManager[9] <> '-1')
  {
    $query.= '
    AND ug.group_id = \''.$conf_nbc_UserAdvManager[3]."'";
  }
  $query.= '
  ORDER BY id ASC
;';

	$result = pwg_query($query);
      
  while ($row = mysql_fetch_array($result))
  {
  	$user = $row;
    $user['groups'] = array();

    array_push($users, $user);
	}

	/* add group lists */
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
        
    while ($row = mysql_fetch_array($result))
    {
    	array_push(
      	$users[$user_nums[$row['user_id']]]['groups'],
        $row['group_id']
			);
		}
	}

	return $users;
}

/* Function called from UserAdvManager.php - to determine who is expired or not and giving a different display color */
function expiration($id)
{
	global $conf, $page;
          
	/* Get ConfirmMail configuration */
	$conf_nbc_UserAdvManager_ConfirmMail = isset($conf['nbc_UserAdvManager_ConfirmMail']) ? explode(";" , $conf['nbc_UserAdvManager_ConfirmMail']) : array();
          
	/* Get UserAdvManager configuration */
	$conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array(); 
	
	$query = "
  	SELECT registration_date
    FROM ".USER_INFOS_TABLE."
    WHERE user_id = '".$id."'
    ;";
	list($registration_date) = mysql_fetch_row(pwg_query($query));

/*              Time limit process              */
/* ****************** begin ******************* */  
	if (!empty($registration_date))
  {
		// dates formating and compare
		$today = date("d-m-Y"); // Get today's date
		list($day, $month, $year) = explode('-', $today); // explode date of today						 
 		$daytimestamp = mktime(0, 0, 0, $month, $day, $year);// Generate UNIX timestamp
	  	
	  list($regdate, $regtime) = explode(' ', $registration_date); // Explode date and time from registration date
		list($regyear, $regmonth, $regday) = explode('-', $regdate); // Explode date from registration date
		$regtimestamp = mktime(0, 0, 0, $regmonth, $regday, $regyear);// Generate UNIX timestamp
			
		$deltasecs = $daytimestamp - $regtimestamp;// Compare the 2 UNIX timestamps	
		$deltadays = floor($deltasecs / 86400);// Convert result from seconds to days

		// Condition with the value set for time limit
		if ($deltadays <= $conf_nbc_UserAdvManager_ConfirmMail[1]) // If Nb of days is less than the limit set
		{
			return false;
		}
		else
		{
			return True;
		}
	}
}
?>