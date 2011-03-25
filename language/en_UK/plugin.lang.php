<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();


/* Global Configuration Tab */
$lang['Tab_Global'] = 'General Setup';
$lang['UserAdvManager_Mail_Info'] = ' Mail information to user:';
$lang['UserAdvManager_Mail_Info_true'] = ' Send mail to the user by taking over its connection information when registering or updating their profile.';
$lang['UserAdvManager_Mail_Info_false'] = ' Turns off the mail sending. (default)';
$lang['UserAdvManager_MailInfo_Text'] = ' Text used to introduce the email sent to user to allow him to validate his email address<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Text modification is available ONLY if Mail information user is enabled. Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';
$lang['UserAdvManager_No_Casse'] = ' User name case insensitive';
$lang['UserAdvManager_No_Casse_false'] = ' Let the user case sensitive. (default)';
$lang['UserAdvManager_Username_Char'] = ' Limited charset for username';
$lang['UserAdvManager_Username_Char_false'] = ' Use the default username charset control. (default)';
$lang['UserAdvManager_Confirm_Mail'] = 'Email address confirmation:';
$lang['UserAdvManager_Confirm_Mail_true'] = ' Send an email to user to allow him to validate his email and his registration.';
$lang['UserAdvManager_Confirm_Mail_false'] = ' Use the default Piwigo registration system (without registration validation). (default)';
$lang['UserAdvManager_ConfirmMail_Text'] = ' Text used to introduce the email sent to user to allow him to validate his email address<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Text modification is available ONLY if Email address confirmation is enabled. Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';
$lang['UserAdvManager_Confirm_Group_Notice'] = 'WARNING : Using validation groups requires that you have created at least one user group and is defined "by default" in Piwigo\'s user groups management.';
$lang['UserAdvManager_No_Confirm_Group'] = 'Group to use for the users who haven\'t validated their email address.';
$lang['UserAdvManager_Validated_Group'] = 'Group to use for the users who have validated their email address.';
$lang['UserAdvManager_Confirm_Status_Notice'] = 'WARNING : The use of status validation requires that you have kept the "Guest" user with default setting (as user template) for new registered. Note you can set any other user as a template for new registered. Please refer to the Piwigo\'s documentation for more details.';
$lang['UserAdvManager_No_Confirm_Status'] = 'Status to use for the users who haven\'t validated their email address.';
$lang['UserAdvManager_Validated_Status'] = 'Status to use for the users who have validated their email address. Let ------- for using default Piwigo values';
$lang['UserAdvManager_No_Comment_Anonymous_true'] = ' The author field have to be filled to send a comment.';
$lang['UserAdvManager_No_Comment_Anonymous_false'] = ' Use the default Piwigo settings on comments sending. (default)';
$lang['UserAdvManager_MailExclusion'] = 'Email provider exclusion:';
$lang['UserAdvManager_MailExclusion_true'] = ' Set the email provider exclusion ON (i.e. : @hotmail.* or @msn.*)';
$lang['UserAdvManager_MailExclusion_false'] = ' Set the email provider exclusion OFF. (default)';
$lang['UserAdvManager_MailExclusion_List'] = ' If email provider exclusion is set to ON, fill the email domains to exclude below. You have to use the following format :<br>@[domaine_name].[domaine_extension] - Example : @hotmail.com<br>Seperate the different domains with a comma (,)<br>';


/* ConfirmMail Configuration Tab */
$lang['UserAdvManager_ConfirmMail_Info'] = 'Time limitation for validation of registration :<br>If you enable this option, select the desired time (x) in the field below. Visitors who register will then have x days to validate their registration. After this period the validation link they have received by mail will be expired.<br>';
$lang['UserAdvManager_ConfirmMail_TimeOut_true'] = 'Enable limiting the registration deadline.';
$lang['UserAdvManager_ConfirmMail_TimeOut_false'] = 'Disable limiting the registration deadline. (Default)';
$lang['UserAdvManager_ConfirmMail_TimeOut'] = 'Validation delay :';
$lang['UserAdvManager_ConfirmMail_Delay_Info'] = 'Enter the number of days before expiry of the registration validation : ';
$lang['UserAdvManager_ConfirmMail_Remail'] = 'Enable or disable email reminder of unvalidated registers :';
$lang['UserAdvManager_ConfirmMail_Remail_true'] = 'Enable email reminder';
$lang['UserAdvManager_ConfirmMail_Remail_false'] = 'Disable email reminder. (Default)';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt1'] = 'Custom content of the reminder message with regeneration of validation key.<br>If left blank, the reminder email will include only the validation link. It is therefore strongly advised to take a little explanatory text. (NB: The text pre-filled at the plugin installation is given as an example)<br><br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Text modification is available ONLY if email reminder is enabled. Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt2'] = 'Custom content of the reminder message without regeneration of validation key.<br>If left blank, the reminder email will include only the validation link. It is therefore strongly advised to take a little explanatory text. (NB: The text pre-filled at the plugin installation is given as an example)<br><br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Text modification is available ONLY if email reminder is enabled. Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';


/* UserManager Tab */
$lang['Registration_Date'] = 'Registration date';


/* Mailing */
$lang['infos_mail %s'] = '%s, please find here your information to login the gallery :';
$lang['User: %s'] = 'User : %s';
$lang['Password: %s'] = 'Password: %s';
$lang['Add of %s'] = 'Add of %s';
$lang['Update of %s'] = 'Update of %s';
$lang['Link: %s'] = 'Please, click on this link to confirm your registration : %s';
$lang['Reminder_with_key_of_%s'] = '%s, your validation key has been renewed';
$lang['Reminder_without_key_of_%s'] = '%s, your validation key will expire';
$lang['Ghost_remainder_of_%s'] = '%s, this is a reminder email';


/* Email confirmation page */
$lang['title_confirm_mail'] = 'Validate your registration';
$lang['confirm_mail_page_title'] = 'Validate your registration';
$lang['confirm_mail_ok'] = '<br><br><br>Thank you to have confirmed your email address and your registration on the gallery. Have fun !<br><br><br><br>';
$lang['confirm_mail_bad'] = '<br><br><br>Your activation key is incorrect or expired or you have already validated your account, please contact the webmaster to fix this problem.<br><br><br><br>';


/* Errors and Warnings */
$lang['UserAdvManager_audit_ok'] = 'Audit OK';
$lang['Err_audit_no_casse'] = '<b>These accounts are identical to the case closely :</b> ';
$lang['Err_audit_username_char'] = '<b>This account uses one or more forbidden characters :</b> ';
$lang['Err_audit_email_forbidden'] = '<b>This account uses a forbidden email provider :</b> ';
$lang['Err_audit_advise'] = '<b>you have to perform corrections to comply with new rules that you have activated.<br>Use a database management utility to correct user accounts directly in the table ### _USERS';
$lang['UserAdvManager_Empty Author'] = 'The author field have to be filled to send a comment.';
if ( isset($conf_UserAdvManager[1]) and $conf_UserAdvManager[1] == 'true' )
	$lang['reg_err_login5'] = 'Username already exist, WARNING name is case insensitive (Shift = Tiny).';
$lang['reg_err_login6'] = 'Username does not have to match the following characters: ';
$lang['reg_err_login7'] = 'Your email provider is banned for registration. Banned email providers are: ';
$lang['UserAdvManager_empty_pwd'] = '[empty password]';
$lang['UserAdvManager_no_update_pwd'] = '[profile updated without password changed]';
$lang['invalid_pwd'] = 'Invalid username or password !';
$lang['Err_ConfirmMail_Settings'] = 'This page will be available only if "Email address confirmation" is activated in "General Setup" tab.';
$lang['Err_UserManager_Settings'] = 'This page is available only if "Enable limiting the registration deadline" is active in the "ConfirmMail Settings" tab and an unvalidated users group is set in "General Setup" tab.';
$lang['No_validation_for_Guest'] = 'The "Guest" account is not subject to validation';
$lang['No_validation_for_default_user'] = 'The default account is not subject to validation';
$lang['No_validation_for_Webmaster'] = 'The "Webmaster" account is not subject to validation';
$lang['No_validation_for_your_account'] = 'Your personnal admin account is not subject to validation';
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
$lang['Reminder_Email'] = 'Email reminder';




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['UserAdvManager_Title1'] = 'Users registration management';
$lang['UserAdvManager_Title2'] = 'Registration validation and groups / status management';
$lang['UserAdvManager_Password_Enforced'] = 'Strengthening passwords - Enabling this option makes the seizure of the password required for visitors registration. Also, the password entered by the visitor will meet with a score of complexity (<b style="color: green;">activate and save settings to display more informations</b>).';
$lang['UserAdvManager_Password_Enforced_Info'] = '<b style="text-decoration: underline; color: green;">Explanations:</b> <b style="color: green;">A password score is calculated on the basic parameters: length, type of characters used (letters, digits, uppercase, lowercase, special characters). If the password of the user does not score, the score reached is displayed with the minimal score to reach and an indication to increase the value of this score. To give you an idea, a score below 100 is considered "low complexity". Between 100 and 500, the complexity is increased and average. Beyond 500, that\'s Fort Knox! ;-)<br>You can do your passwords complexity tests by using the field below. This will allow you to get an idea of the score to define a custom complexity.</b>';
$lang['UserAdvManager_PasswordTest'] = 'Password to test : ';
$lang['UserAdvManager_ScoreTest'] = 'Score : ';
$lang['PasswordTest'] = 'Score calculation';
$lang['UserAdvManager_Password_Enforced_true'] = ' Strong password required - Enter the minimum score (floor value) of passwords complexity == ';
$lang['UserAdvManager_Password_Enforced_false'] = ' Do not strengthen passwords. (default)';
$lang['UserAdvManager_AdminPassword_Enforced'] = 'Apply also the passwords complexity control when an administrator create a user? Note: If the created user wishes to change his password and strengthening passwords for users is active, he will be subject to the rules set.';
$lang['UserAdvManager_AdminPassword_Enforced_true'] = 'Enable strengthening passwords for admins.';
$lang['UserAdvManager_AdminPassword_Enforced_false'] = 'Disable strengthening passwords for admins. (default)';
$lang['UserAdvManager_GhostTracker'] = 'Ghost Tracker - Allows to manage registered users according their last visit date :';
$lang['UserAdvManager_GhostTracker_true'] = ' Enable Ghost Tracker.';
$lang['UserAdvManager_GhostTracker_false'] = ' Disable Ghost Tracker. (Default)';
$lang['UserAdvManager_GhostTracker_DayLimit'] = ' Type in here the maximum limit, in days, between two visits of a visitor. When this limit is reached, this visitor will appear in the table on "Ghost Tracker" tab.';
$lang['UserAdvManager_GhostTracker_ReminderText'] = ' Text used in the email reminder sent to encourage visitors to come back to the gallery (NB: The text pre-filled at the plugin installation is given as an example).<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Text modification is available ONLY if Ghost Tracker is enabled. Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';
/* Ghost Tracker Tab */
$lang['GhostTracker_Title'] = 'Advanced ghost visitors management';
$lang['Title_Tab4'] = 'UserAdvManager - Ghost Tracker';
$lang['Tab_GhostTracker'] = 'Ghost Tracker';
$lang['LastVisit_Date'] = 'Last visit';
$lang['Ghost_Reminder'] = 'Email reminder';
$lang['Reminder_Sent_OK'] = 'YES';
$lang['Reminder_Sent_NOK'] = 'NO';
/* Errors and Warnings */
$lang['UserAdvManager_save_config'] ='Configuration saved.';
$lang['reg_err_login3'] = 'Security : Password is mandatory !';
$lang['reg_err_login4_%s'] = 'Security : A control system calculates a score on the chosen passwords complexity. The complexity of your password is too low (score = %s). Please, choose a new password more secure by following these rules:<br>
- Use letters and numbers<br>
- Use lowercase and uppercase<br>
- Increase its length (number of characters)<br>
The minimum passwords score required by the administrator is: ';
$lang['No_reminder_for_Guest'] = 'The "Guest" account is not subject to receive reminders from GhostTracker';
$lang['No_reminder_for_default_user'] = 'The default account is not subject to receive reminders from GhostTracker';
$lang['No_reminder_for_Webmaster'] = 'The "Webmaster" account is not subject to receive reminders from GhostTracker';
$lang['No_reminder_for_your_account'] = 'You personnal admin account is not subject to receive reminders from GhostTracker';
$lang['Err_GhostTracker_Settings'] = 'This page is available only if "Ghost Tracker" is active in the "General Setup" tab.';
/* Action button names */
$lang['audit'] = 'Audit settings';
$lang['submit'] = 'Save settings';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1

// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Global Configuration Tab */
$lang['UserAdvManager_GhostTracker_Notice'] = 'When the Ghost Tracker feature is enabled, you can manage your visitors depending on the frequency of their visits. <b style="color: red;">IMPORTANT : If you enable this feature for the first time or you have reactivated after a long period off during which new visitors are registered, visit the Ghost Tracker tab and follow the instructions for Ghost Tracker initialization.</b>';
/* Ghost Tracker Tab */
$lang['UserAdvManager_GhostTracker_Init'] = 'If you enable this feature for the first time or you have reactivated after a long period off during which new visitors are registered, you must initialize or reset the Ghost Tracker. This action is done only after activation or reactivation of the option. Please click <u>once</u> the reset button below.';
$lang['UserAdvManager_GhostTracker_User_List'] = 'When Ghost Tracker is enabled and initialized, you will find below the list of registered visitors who have not returned since x days. "x" is the number of days configured in the General Setup tab. In addition, you will find a column indicating whether an email reminder has been sent to targeted visitors. So, you can see at a glance and treat visitors who have not taken account of the reminder.<br><br>In this view, you can:
<br><br>
- Manually delete accounts <b>(manual drain)</b>
<br>
- Generate email reminder <b>with resetting the last visit date</b>. This allows to give a wildcard to targeted visitors. If the visitor has already received a reminder, nothing prevents to resent a new mail which will reset again, in fact, the last visit date.
<br>';
/* Errors and Warnings */
$lang['GhostTracker_Init_OK'] = 'Ghost Tracker reset done !';
/* Action button names */
$lang['GT_Reset'] = 'Reset Ghost Tracker';
// --------- End: New or revised $lang ---- from version 2.12.2

// --------- Starting below: New or revised $lang ---- from version 2.12.6
/* Global Configuration Tab */
$lang['UserAdvManager_No_Casse_true'] = ' Make the user account case insensitive at the registration and the identification step (USER = user = User = usER...).';
// --------- End: New or revised $lang ---- from version 2.12.6

// --------- Starting below: New or revised $lang ---- from version 2.12.7
/* Errors and Warnings */
$lang['mail_text_error'] = '<b>Warning!</b> - Semicolons (;) are not allowed in addtionnal email text. This Character have been automatically replaced by a dot (.). For information, the amended text(s) is(are) shown in red in the corresponding field(s). Please, check it(them) out.';
// --------- End: New or revised $lang ---- from version 2.12.7

// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['mail_exclusionlist_error'] = 'Warning! You have entered a new line (CR-LF) at the begining of email exclusion list (shown in red below). Although this new line is not visible, it is still present and may cause malfunction of the plugin. Please re-type in your exclusion list in a manner that does not begin with a newline.';
// --------- End: New or revised $lang ---- from version 2.12.8

// --------- Starting below: New or revised $lang ---- from version 2.13.0
/* Global Configuration Tab */
$lang['UserAdvManager_Add_LastVisit_Column'] = ' View user monitoring record (date of last visit, time spent (in days) since their last visit ,...). Monitoring is purely informative for the administrator of the gallery.';
$lang['UserAdvManager_Add_LastVisit_Column_true'] = ' Enable user monitoring list.';
$lang['UserAdvManager_Add_LastVisit_Column_false'] = ' Disable user monitoring list (Default).';
/* ConfirmMail Configuration Tab */
$lang['ConfirmMail_Title'] = 'Advanced settings for validation of registries';
$lang['Tab_ConfirmMail'] = 'Register validation settings';
/* UserList Tab */
$lang['Title_Tab5'] = 'UserAdvManager - User Information';
$lang['UserList_Title'] = 'Monitoring registered users';
$lang['Tab_UserList'] = 'Monitor users';
$lang['UserAdvManager_User_List'] = 'This page is for information to the administrator. It displays a list of all users registered on the gallery showing the date and number of days since their last visit. The list is sorted in ascending order of number of days.
<br><br>
When the Ghost Tracker is active, the number of days without a visit appears as the following color code, according to the maximum set in the Ghost Tracker options:
<br>
- <b style="color: lime;">Green</b> : When the user has visited the gallery <b style="color: lime;"><u>less than 50%</u></b> of the maximum indicated in the Ghost Tracker.<br>
- <b style="color: orange;">Orange</b> : When the user has visited the gallery <b style="color: orange;"><u> between 50% and 99% </u></b> of the maximum indicated in the Ghost Tracker.<br>
- <b style="color: red;">Red</b> : When the user has visited the gallery <b style="color: red;"><u>for more than 100%</u></b> of the maximum indicated in the Ghost Tracker. <b><u>In this case, the user must also appear in the Ghost Tracker table.</u></b><br>
<br>
Example :
<br>
The maximum period of Ghost Tracker is configured to 100 days.
<br>
A user will appear in green if he visited the gallery for less than 50 days, in orange if his last visit took place between 50 and 99 days and red for 100 days and above.
<br><br>
<b>NOTE</b> : The list does not display who have not validated their registration (if the option of validating the registration is activated). These users are then managed in a special way in the "Validation management".';
$lang['Nb_Days'] = 'Number of days<br>since last visit';
/* UserManager Tab */
$lang['UserAdvManager_ConfirmMail_User_List'] = 'When limiting the deadline for registration is enabled, you will find below the list of users whose validation registration is expected, <b style="text-decoration: underline;">whether or not</b> they are in time to validate.<br><br>The registration date is displayed in green when the user concerned is below the time limit to validate his registration. In this case, the validation key is still valid and we can send an email with or without a new validation key.<br><br>When the registration date appears in red, the validation period has expired. In this case, you must send an email with regeneration of validation key if you want to enable the user to validate their registration. <br><br>In all cases, it is possible to manually force the validation.<br><br>In this view, you can:
<br><br>
- Manually delete accounts <b>(manual drain)</b>
<br>
- Generate email reminder <b>without</b> generating a new key. Warning: Send an email reminder to targeted visitors. This function does not reset the date of registration of targeted visitors and the timeout is still valid.
<br>
- Generate email reminder <b>with</b> generating a new key. Warning : Send an email reminder to targeted visitors. This function also resets the date of registration of targeted visitors which equates to extend the deadline for validation.
<br>
- Submit a registration awaiting validation manually even if the expiry date has passed <b>(forcing validation)</b>.
<br>';
$lang['UserManager_Title'] = 'Advanced management of unvalidated';
$lang['Title_Tab3'] = 'UserAdvManager - Management of registration validations';
$lang['Tab_UserManager'] = 'Validations management';
/* Ghost Tracker Tab */
$lang['Reminder'] = 'Email Reminder';
/* Errors and Warnings */
$lang['Err_Userlist_Settings'] = 'This page is available only if "Users monitoring" is active in the "General Setup" tab.';
// --------- End: New or revised $lang ---- from version 2.13.0
// --------- Starting below: New or revised $lang ---- from version 2.13.1
/* Global Configuration Tab */
$lang['Title_Tab1'] = 'UserAdvManager 2.13.1 - General Setup';
/* ConfirmMail Configuration Tab */
$lang['Title_Tab2'] = 'UserAdvManager 2.13.1 - Register validation settings';
// --------- End: New or revised $lang ---- from version 2.13.1
// --------- Starting below: New or revised $lang ---- from version 2.13.3
/* Global Configuration Tab */
$lang['UserAdvManager_Username_Char_true'] = ' The following characters <b style="color: green;">(separate values with commas ","!)</b> will be forbidden for username choice == ';
$lang['UserAdvManager_No_Comment_Anonymous'] = 'Nickname are mandatory for comments. <b style="color: red;">Enable this only if you have given permission for non-registered visitors to post comments (Piwigo\'s admin panel > Settings > General, Comments tab> "Comments for all")</b>';
// --------- End: New or revised $lang ---- from version 2.13.3
?>