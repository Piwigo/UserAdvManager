<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();

$lang['infos_mail %s'] = '%s, please find here your information to login the gallery :';
$lang['Password: %s'] = 'Password: %s';
$lang['Add of %s'] = 'Add of %s';
$lang['Update of %s'] = 'Update of %s';

$lang['Link: %s'] = 'Please, click on this link to confirm your regsitration : %s';

$lang['title_confirm_mail'] = 'Validate your registration';
$lang['confirm_mail_page_title'] = 'Validate your registration';
$lang['confirm_mail_ok'] = '<br/><br/><br/>Thank you to have confirmed your email address and your registration on the gallery. Have fun !<br/><br/><br/><br/>';
$lang['confirm_mail_bad'] = '<br/><br/><br/>Your validation key is broken or you haven\'t validated your registration. Please contact the gallery\'s webmaster to check this issue.<br/><br/><br/><br/>';

$lang['Title'] = 'UserAdvManager';
$lang['UserAdvManager_Title'] = 'Advanced users settings';

$lang['UserAdvManager_Mail_Info'] = 'Mail information user';
$lang['UserAdvManager_Mail_Info_true'] = 'Send a information mail to the user when he registering or updating his profile.';
$lang['UserAdvManager_Mail_Info_false'] = 'Turns off the sending of mail.';
$lang['UserAdvManager_MailInfo_Text'] = 'Text used to introduce the email sent to user on his registration or at his profile update.<br>(!!! <blink>WARNING</blink> You can use the multi language tags from Extended Description plugin. This will work only if this plugin is activated !!!)';
$lang['UserAdvManager_No_Casse'] = 'User insensitive';
$lang['UserAdvManager_No_Casse_true'] = 'Make the user account insensitive at the registration and the identification step';
$lang['UserAdvManager_No_Casse_false'] = 'Let the user-sensitive.';
$lang['UserAdvManager_Username_Char'] = 'Limited charset for unsername';
$lang['UserAdvManager_Username_Char_true'] = ' The following characters will be forbidden for username choice à regsitration == ';
$lang['UserAdvManager_Username_Char_false'] = ' Use the default username charset control.';
$lang['UserAdvManager_Confirm_Mail'] = 'Email address confirmation';
$lang['UserAdvManager_Confirm_Mail_true'] = ' Send an email to user to allow him to validate his email and his registration.';
$lang['UserAdvManager_Confirm_Mail_false'] = ' Use the default Piwigo registration system (without registration validation).';
$lang['UserAdvManager_ConfirmMail_Text'] = 'Text used to introduce the email sent to user to allow him to validate his email address<br>(!!! <blink>WARNING</blink> You can use the multi language tags from Extended Description plugin. This will work only if this plugin is activated !!!)';
$lang['UserAdvManager_No_Confirm_Group'] = 'Group to use for the users who haven\'t validated their email address.';
$lang['UserAdvManager_Validated_Group'] = 'Group to use for the users who have validated their email address.';
$lang['UserAdvManager_No_Confirm_Status'] = 'Status to use for the users who haven\'t validated their email address.';
$lang['UserAdvManager_Validated_Status'] = 'Status to use for the users who have validated their email address. Let ------- for using default Piwigo values';
$lang['UserAdvManager_No_Comment_Anonymous'] = 'Nickname are mandatory for comments';
$lang['UserAdvManager_No_Comment_Anonymous_true'] = ' The author field have to be filled to send a comment.';
$lang['UserAdvManager_No_Comment_Anonymous_false'] = ' Use the default Piwigo settings on comments sending.';
$lang['UserAdvManager_MailExclusion'] = 'Email provider exclusion';
$lang['UserAdvManager_MailExclusion_true'] = ' Set the email provider exclusion ON (i.e. : @hotmail.* or @msn.*)';
$lang['UserAdvManager_MailExclusion_false'] = ' Set the email provider exclusion OFF.';
$lang['UserAdvManager_MailExclusion_List'] = ' If email provider exclusion is set to ON, fill the email domains to exclude below. You have to use the following format :<br/>@[domaine_name].[domaine_extension] - Example : @hotmail.com<br/>Seperate the different domains with a comma (,)<br/>';

$lang['audit'] = 'Audit';
$lang['submit'] = 'Submit';

$lang['Err_audit_no_casse'] = '<b>These accounts are identical to the case closely :</b> ';
$lang['Err_audit_username_char'] = '<b>This account uses one or more forbidden characters :</b> ';
$lang['Err_audit_email_forbidden'] = '<b>This account uses a forbidden email provider :</b> ';
$lang['Err_audit_advise'] = '<b>you make a correction to comply with new rules that you have activated.<br>use a utility géstion database to correct user accounts directly in the table ### _USERS';
$lang['UserAdvManager_audit_ok'] = 'Audit OK';
$lang['UserAdvManager_save_config'] ='Configuration registered.';

$lang['UserAdvManager_Empty Author'] = 'The author field have to be filled to send a comment.';

if ( isset($conf_UserAdvManager[1]) and $conf_UserAdvManager[1] == 'true' )
  $lang['reg_err_login5'] = 'user name is already taken, attention name is insensitive (Shift = Tiny).';
$lang['reg_err_login6'] = 'Username does not contain the following characters: ';
$lang['reg_err_login7'] = 'Your email provider is banned for registration. Banned email providers are: ';

$lang['invalid_pwd'] = 'User name or password invalid !';

$lang['UserAdvManager_empty_pwd'] = '[empty password]';
$lang['UserAdvManager_no_update_pwd'] = '[profile updated without password changed]';
?>