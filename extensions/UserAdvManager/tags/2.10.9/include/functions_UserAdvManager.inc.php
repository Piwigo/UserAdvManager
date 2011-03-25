<?php
include_once (NBC_UserAdvManager_PATH.'include/constants.php');
include_once (NBC_UserAdvManager_PATH.'include/functions_UserAdvManager.inc.php');
load_language('plugin.lang', NBC_UserAdvManager_PATH);

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
}



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



function AddConfirmMail($user_id, $email)
{
  global $conf;
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();
  $Confirm_Mail_ID = FindAvailableConfirmMailID();

  list($dbnow) = mysql_fetch_row(pwg_query('SELECT NOW();'));
  
  if ( isset($Confirm_Mail_ID) )
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

    if ( !is_admin() and $conf_nbc_UserAdvManager[9] <> -1 )
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



function DeleteConfirmMail($user_id)
{
  $query = "
    DELETE FROM ".USER_CONFIRM_MAIL_TABLE."
    WHERE user_id = '".$user_id."'
  ;";
  pwg_query($query);
}



function VerifyConfirmMail($id)
{
  global $conf;

  include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');
  
  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();

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
  
      if (!empty($registration_date))
      {
// Time limit process
      }
      
      list($dbnow) = mysql_fetch_row(pwg_query('SELECT NOW();'));
  
      $query = '
        UPDATE '.USER_CONFIRM_MAIL_TABLE.'
        SET date_check="'.$dbnow.'"
        WHERE id = "'.$id.'"
      ;';
      pwg_query($query);
      
      if ( $conf_nbc_UserAdvManager[3] <> -1 )
      {
        $query = "
          DELETE FROM ".USER_GROUP_TABLE."
          WHERE user_id = '".$data['user_id']."'
          AND group_id = '".$conf_nbc_UserAdvManager[3]."'
        ;";
        pwg_query($query);
      }
    
      if ( $conf_nbc_UserAdvManager[4] <> -1 )
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

      if ( ( $conf_nbc_UserAdvManager[5] <> -1 or isset($data['status']) ) )
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
  else
    return false;
  
}

function NotSensibleSearchUsername($username)
{
  global $conf;
  
  if ( isset($username) )
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

function SearchMail($email)
{
  global $conf, $lang;
  
  if ( isset($email) )
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

function ValidateUsername($login)
{
  global $conf;

  $conf_nbc_UserAdvManager = isset($conf['nbc_UserAdvManager']) ? explode(";" , $conf['nbc_UserAdvManager']) : array();

  if ( isset($login) and isset($conf_nbc_UserAdvManager[8]) and $conf_nbc_UserAdvManager[8] <> '' )
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
?>