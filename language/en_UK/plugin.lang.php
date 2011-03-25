<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();


/* Global Configuration Tab */
$lang['Title_Tab1'] = 'UserAdvManager - Global Configuration';
$lang['Tab_Global'] = 'Global Configuration';
$lang['UserAdvManager_Title'] = 'Advanced users settings';
$lang['UserAdvManager_Mail_Info'] = ' Mail information user';
$lang['UserAdvManager_Mail_Info_true'] = ' Send an information mail to the user when he registes or updates his profile.';
$lang['UserAdvManager_Mail_Info_false'] = ' Turns off the sending of mail.';
$lang['UserAdvManager_MailInfo_Text'] = ' Text used to introduce the email sent to user to allow him to validate his email address<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';
$lang['UserAdvManager_No_Casse'] = ' User insensitive';
$lang['UserAdvManager_No_Casse_true'] = ' Make the user account insensitive at the registration and the identification step';
$lang['UserAdvManager_No_Casse_false'] = ' Let the user-sensitive.';
$lang['UserAdvManager_Username_Char'] = ' Limited charset for unsername';
$lang['UserAdvManager_Username_Char_true'] = ' The following characters will be forbidden for username choice';
$lang['UserAdvManager_Username_Char_false'] = ' Use the default username charset control.';
$lang['UserAdvManager_Confirm_Mail'] = 'Email address confirmation';
$lang['UserAdvManager_Confirm_Mail_true'] = ' Send an email to user to allow him to validate his email and his registration.';
$lang['UserAdvManager_Confirm_Mail_false'] = ' Use the default Piwigo registration system (without registration validation).';
$lang['UserAdvManager_ConfirmMail_Text'] = ' Text used to introduce the email sent to user to allow him to validate his email address<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';
$lang['UserAdvManager_Confirm_Group_Notice'] = 'WARNING : Using validation groups requires that you have created at least one user group and is defined "by default" in Piwigo\'s user groups management.';
$lang['UserAdvManager_No_Confirm_Group'] = 'Group to use for the users who haven\'t validated their email address.';
$lang['UserAdvManager_Validated_Group'] = 'Group to use for the users who have validated their email address.';
$lang['UserAdvManager_Confirm_Status_Notice'] = 'WARNING : The use of status validation requires that you have kept the "Guest" user with default setting (as user template) for new registered. Note you can set any other user as a template for new registered. Please refer to the Piwigo\'s documentation for more details.';
$lang['UserAdvManager_No_Confirm_Status'] = 'Status to use for the users who haven\'t validated their email address.';
$lang['UserAdvManager_Validated_Status'] = 'Status to use for the users who have validated their email address. Let ------- for using default Piwigo values';
$lang['UserAdvManager_No_Comment_Anonymous'] = 'Nickname are mandatory for comments';
$lang['UserAdvManager_No_Comment_Anonymous_true'] = ' The author field have to be filled to send a comment.';
$lang['UserAdvManager_No_Comment_Anonymous_false'] = ' Use the default Piwigo settings on comments sending.';
$lang['UserAdvManager_MailExclusion'] = 'Email provider exclusion';
$lang['UserAdvManager_MailExclusion_true'] = ' Set the email provider exclusion ON (i.e. : @hotmail.* or @msn.*)';
$lang['UserAdvManager_MailExclusion_false'] = ' Set the email provider exclusion OFF.';
$lang['UserAdvManager_MailExclusion_List'] = ' If email provider exclusion is set to ON, fill the email domains to exclude below. You have to use the following format :<br>@[domaine_name].[domaine_extension] - Example : @hotmail.com<br>Seperate the different domains with a comma (,)<br>';
$lang['audit'] = 'Audit';
$lang['submit'] = 'Submit';


/* ConfirmMail Configuration Tab */
$lang['ConfirmMail_Title'] = 'Advanced management and settings of register confirmation by mail';
$lang['Title_Tab2'] = 'UserAdvManager - ConfirmMail Settings';
$lang['Tab_ConfirmMail'] = 'ConfirmMail Settings';
$lang['UserAdvManager_ConfirmMail_Info'] = 'Time limitation for validation of registration :<br>If you enable this option, select the desired time (x) )in the field below. Visitors who register will then have x days to validate their registration. After this period the validation link they have received by mail will be expired.<br>';
$lang['UserAdvManager_ConfirmMail_TimeOut_true'] = 'Enable limiting the registration deadline.';
$lang['UserAdvManager_ConfirmMail_TimeOut_false'] = 'Disable limiting the registration deadline.';
$lang['UserAdvManager_ConfirmMail_TimeOut'] = 'Validation delay :';
$lang['UserAdvManager_ConfirmMail_Delay_Info'] = 'Enter the number of days before expiry of the registration validation : ';
/* This function can't work due to no access to server's cron functionnalities */
//$lang['UserAdvManager_ConfirmMail_AutoDel'] = 'Suppression automatique des comptes non validés après le délai d\'expiration : ';
//$lang['UserAdvManager_ConfirmMail_AutoDel_true'] = 'Activer la suppression automatique - <b style="text-decoration: blink underline;">ATTENTION !</b> La suppression est aveugle et sans notification.';
//$lang['UserAdvManager_ConfirmMail_AutoDel_false'] = 'Désactiver la suppression automatique.';
$lang['UserAdvManager_ConfirmMail_Remail'] = 'Enable or disable email reminder of unvalidated registers :';
$lang['UserAdvManager_ConfirmMail_Remail_true'] = 'Enable email reminder';
$lang['UserAdvManager_ConfirmMail_Remail_false'] = 'Disable email reminder';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt1'] = 'Custom content of the recall message with regeneration of validation key.<br>If left blank, the recall mail will include only the validation link. It is therefore strongly advised to take a little explanatory text. (NB: The text pre-filled with the installation of the plugin is given as an example)<br><br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Text modification is available ONLY if email reminder is enabled. Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt2'] = 'Custom content of the recall message without regeneration of validation key.<br>If left blank, the recall mail will include only the validation link. It is therefore strongly advised to take a little explanatory text. (NB: The text pre-filled with the installation of the plugin is given as an example)<br><br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Text modification is available ONLY if email reminder is enabled. Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';


/* UserManager Tab */
$lang['UserManager_Title'] = 'Advanced settings of unvalidated registered users';
$lang['Title_Tab3'] = 'UserAdvManager - Visitors management';
$lang['Tab_UserManager'] = 'Visitors management';
$lang['UserAdvManager_ConfirmMail_User_List'] = 'When limiting the deadline for registration is enabled, you will find below the list of users awaiting validation, <b style="text-decoration: underline;">whether or not</b> they are in time to validate.<br><br>In this view, you can:
<br><br>
- Manually delete accounts <b>(manual drain)</b>
<br>
- Generate email reminder <b>without</b> generating a new key. Warning: Send an email reminder to targeted visitors. This function does not reset the date of registration of targeted visitors and the timeout is still valid.
<br>
- Generate email reminder <b>with</b> generating a new key. Warning : Send an email reminder to targeted visitors. This function also resets the date of registration of targeted visitors which equates to extend the deadline for validation.<br>
- Submit a registration awaiting validation manually even if the expiry date has passed <b>(forcing validation)</b>.
<br>';
$lang['Registration_Date'] = 'Registration date';


/* Mailing */
$lang['infos_mail %s'] = '%s, please find here your information to login the gallery :';
$lang['User: %s'] = 'User : %s';
$lang['Password: %s'] = 'Password: %s';
$lang['Add of %s'] = 'Add of %s';
$lang['Update of %s'] = 'Update of %s';
$lang['Link: %s'] = 'Please, click on this link to confirm your regsitration : %s';
$lang['Reminder_with_key_of_%s'] = '%s, your validation key has been renewed';
$lang['Reminder_without_key_of_%s'] = '%s, your validation key will expire';


/* Email confirmation page */
$lang['title_confirm_mail'] = 'Validate your registration';
$lang['confirm_mail_page_title'] = 'Validate your registration';
$lang['confirm_mail_ok'] = '<br><br><br>Thank you to have confirmed your email address and your registration on the gallery. Have fun !<br><br><br><br>';
$lang['confirm_mail_bad'] = '<br><br><br>Your activation key is incorrect or expired or you have already validated your account, please contact the webmaster to fix this problem.<br><br><br><br>';


/* Errors and Warnings */
$lang['UserAdvManager_audit_ok'] = 'Audit OK';
$lang['UserAdvManager_save_config'] ='Configuration saved.';
$lang['Err_audit_no_casse'] = '<b>These accounts are identical to the case closely :</b> ';
$lang['Err_audit_username_char'] = '<b>This account uses one or more forbidden characters :</b> ';
$lang['Err_audit_email_forbidden'] = '<b>This account uses a forbidden email provider :</b> ';
$lang['Err_audit_advise'] = '<b>you have to perform corrections to comply with new rules that you have activated.<br>Use a database management utility to correct user accounts directly in the table ### _USERS';
$lang['UserAdvManager_Empty Author'] = 'The author field have to be filled to send a comment.';
if ( isset($conf_UserAdvManager[1]) and $conf_UserAdvManager[1] == 'true' )
	$lang['reg_err_login5'] = 'Username already exist, WARNING name is case insensitive (Shift = Tiny).';
$lang['reg_err_login6'] = 'Username does not match the following characters: ';
$lang['reg_err_login7'] = 'Your email provider is banned for registration. Banned email providers are: ';
$lang['UserAdvManager_empty_pwd'] = '[empty password]';
$lang['UserAdvManager_no_update_pwd'] = '[profile updated without password changed]';
$lang['invalid_pwd'] = 'Invalid username or password !';
$lang['Err_ConfirmMail_Settings'] = 'This page will be available only if "Email address confirmation" is activated in tab "Global Configuration".';
$lang['Err_UserManager_Settings'] = 'This page is available only if "Enable limiting the registration deadline" is active in the "ConfirmMail Settings" tab and an unvalidated users group is set in "Global Configuration" tab.';
$lang['No_validation_for_Guest'] = 'The "Guest" account is not subject to validation';
$lang['No_validation_for_default_user'] = 'The default account is not subject to validation';
$lang['No_validation_for_Webmaster'] = 'The "Webmaster" account is not subject to validation';
$lang['No_validation_for_your_account'] = 'You personnal admin account is not subject to validation';
$lang['Database_Error'] = '<b><u>Warning! Critical integrity error in your database.</u></b><br><br>Please check the integrity of the #_user_confirm_mail table.';


/* Processing messages */
$lang['%d_Mail_With_Key'] = '%d message with key renewal was sent';
$lang['%d_Mails_With_Key'] = '%d messages with key renewal were sent';
$lang['%d_Reminder_Sent'] = '%d reminder message was sent';
$lang['%d_Reminders_Sent'] = '%d reminder messages were sent';
$lang['%d_Validated_User'] = '%d User validated manually';
$lang['%d_Validated_Users'] = '%d Users validated manually';


/* Action button names */
$lang['Delete_selected'] = 'Delete';
$lang['Mail_without_key'] = 'Reminder without key';
$lang['Mail_with_key'] = 'Reminder with key';
$lang['Force_Validation'] = 'Forced validation';
?>