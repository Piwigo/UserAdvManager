<?php

global $lang,$conf;

$conf_UAM = unserialize($conf['UserAdvManager']);


/* UserManager Tab */
$lang['Registration_Date'] = 'Registration date';


/* Mailing */
$lang['infos_mail %s'] = '%s, please find here your information to login the gallery :';
$lang['User: %s'] = 'User : %s';
$lang['Password: %s'] = 'Password: %s';
$lang['Link: %s'] = 'Please, click on this link to confirm your registration : %s';


/* Email confirmation page */
$lang['title_confirm_mail'] = 'Validate your registration';
$lang['confirm_mail_page_title'] = 'Validate your registration';


/* Errors and Warnings */
$lang['UAM_audit_ok'] = 'Audit OK';
$lang['Err_audit_no_casse'] = '<b>These accounts are identical to the case closely :</b> ';
$lang['Err_audit_username_char'] = '<b>This account uses one or more forbidden characters :</b> ';
$lang['Err_audit_email_forbidden'] = '<b>This account uses a forbidden email provider :</b> ';
$lang['Err_audit_advise'] = '<b>you have to perform corrections to comply with new rules that you have activated.<br>Use a database management utility to correct user accounts directly in the table ###_USERS';
$lang['UAM_Empty Author'] = 'The author field have to be filled to send a comment.';
if ( isset($conf_UAM[1]) and $conf_UAM[1] == 'true' )
	$lang['reg_err_login5'] = 'Username already exist, WARNING name is case insensitive (Shift = Tiny).';
$lang['reg_err_login6'] = 'Username does not have to match the following characters: ';
$lang['reg_err_login7'] = 'Your email provider is banned for registration. Banned email providers are: ';
$lang['UAM_empty_pwd'] = '[empty password]';
$lang['UAM_no_update_pwd'] = '[profile updated without password changed]';
$lang['invalid_pwd'] = 'Invalid username or password !';
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




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['PasswordTest'] = 'Score calculation';
/* Ghost Tracker Tab */
$lang['Tab_GhostTracker'] = 'Ghost Tracker';
$lang['Reminder'] = 'Email reminder';
$lang['Reminder_Sent_OK'] = 'YES';
$lang['Reminder_Sent_NOK'] = 'NO';
/* Errors and Warnings */
$lang['UAM_save_config'] ='Configuration saved.';
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
/* Action button names */
$lang['audit'] = 'Audit settings';
$lang['submit'] = 'Save settings';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Errors and Warnings */
$lang['GhostTracker_Init_OK'] = 'Ghost Tracker reset done !';
/* Action button names */
$lang['GT_Reset'] = 'Reset Ghost Tracker';
// --------- End: New or revised $lang ---- from version 2.12.2


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['mail_exclusionlist_error'] = 'Warning! You have entered a new line (CR-LF) at the begining of email exclusion list (shown in red below). Although this new line is not visible, it is still present and may cause malfunction of the plugin. Please re-type in your exclusion list in a manner that does not begin with a newline.';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.0
/* UserList Tab */
$lang['UserList_Title'] = 'Monitoring registered users';
// --------- End: New or revised $lang ---- from version 2.13.0


// --------- Starting below: New or revised $lang ---- from version 2.13.4
$lang['uam_no_unlink'] = '\'unlink\' function is not available';
$lang['uam_unlink_errors'] = 'Errors occurred when deleting files';
/* Global Configuration Tab */
$lang['Title_Tab'] = 'UserAdvManager - Version : ';
$lang['SubTitle1'] = 'Plugin configuration';
$lang['Tab_Global'] = 'Configuration';
$lang['UAM_Title1'] = 'Setting restrictions for registrations';
$lang['UAM_Title2'] = 'Setting confirmations and validations of registration';
$lang['UAM_Title3'] = 'Setting the followed registrations and other options';
$lang['UAM_Title4'] = 'Tips and examples of use';
$lang['UAM_No_Casse'] = 'Usernames: Case sensitivity';
$lang['UAM_No_Casse_true'] = ' Enable';
$lang['UAM_No_Casse_false'] = ' Disable (default)';
$lang['UAM_Username_Char'] = 'Usernames: Exclusion of characters';
$lang['UAM_Username_Char_true'] = ' Banning characters:<br>(Use a comma to separate each character)<br><br>';
$lang['UAM_Username_Char_false'] = ' Permit all (default)';
$lang['UAM_Password_Enforced'] = 'Strengthening the security level of passwords';
$lang['UAM_Password_Enforced_true'] = ' Enable. Minimum Score: ';
$lang['UAM_Password_Enforced_false'] = ' Disable (default)';
$lang['UAM_AdminPassword_Enforced'] = 'Applying to administrators';
$lang['UAM_AdminPassword_Enforced_true'] = ' Enable';
$lang['UAM_AdminPassword_Enforced_false'] = ' Disable (default)';
$lang['UAM_PasswordTest'] = 'Password test: ';
$lang['UAM_ScoreTest'] = 'Result: ';
$lang['UAM_MailExclusion'] = 'Email domains exclusion';
$lang['UAM_MailExclusion_true'] = ' Exclude the following domains:<br>(Use a comma to separate each domain)';
$lang['UAM_MailExclusion_false'] = ' Disable (default)';

$lang['UAM_Mail_Info'] = 'Information email to user:';
$lang['UAM_Mail_Info_true'] = ' Enable';
$lang['UAM_Mail_Info_false'] = ' Disable (default)';
$lang['UAM_MailInfo_Text'] = ' Customizing the information email:';
$lang['UAM_Confirm_Mail'] = 'Confirmation of registration:';
$lang['UAM_Confirm_Mail_true'] = ' Enable';
$lang['UAM_Confirm_Mail_false'] = ' Disable (default)';
$lang['UAM_ConfirmMail_Text'] = ' Customizing the confirmation email:';
$lang['UAM_Confirm_grpstat_notice'] = 'Caution: It is advisable to use either the group or the validation statutes and not both simultaneously.';
$lang['UAM_Confirm_Group'] = 'Validation Groups<br>(leave ------- to not affect group)';
$lang['UAM_Confirm_Status'] = 'Validation Statutes<br>(leave ------- to keep the Piwigo\'s default)';
$lang['UAM_No_Confirm_Group'] = 'Group for users who have not validated their registration<br>';
$lang['UAM_Validated_Group'] = 'Group for users who have validated their registration<br>';
$lang['UAM_No_Confirm_Status'] = 'Status for users who have not validated their registration<br>';
$lang['UAM_Validated_Status'] = 'Status for users who have validated their registration<br>';
$lang['UAM_ValidationLimit_Info'] = 'Deadline for registration validation limited';
$lang['UAM_ConfirmMail_TimeOut_true'] = ' Enable. Number of days until expiration: ';
$lang['UAM_ConfirmMail_TimeOut_false'] = ' Disable (default)';
$lang['UAM_ConfirmMail_Remail'] = 'Remind unvalidated users';
$lang['UAM_ConfirmMail_Remail_true'] = ' Enable';
$lang['UAM_ConfirmMail_Remail_false'] = ' Disable (default)';
$lang['UAM_ConfirmMail_ReMail_Txt1'] = 'Customizing the reminder message <b><u>with</u></b> new regeneration of key validation.';
$lang['UAM_ConfirmMail_ReMail_Txt2'] = 'Customizing the reminder message <b><u>without</u></b> regeneration of key validation.';

$lang['UAM_GhostTracker'] = 'Ghost visitors management (Ghost Tracker)';
$lang['UAM_GhostTracker_true'] = ' Enable. Maximum period in days between two visits: ';
$lang['UAM_GhostTracker_false'] = ' Disable (default)';
$lang['UAM_GhostTracker_ReminderText'] = 'Customizing Ghost Tracker\'s reminder message';
$lang['UAM_LastVisit'] = ' Tracking registered users';
$lang['UAM_LastVisit_true'] = ' Enable';
$lang['UAM_LastVisit_false'] = ' Disable (default)';
$lang['UAM_No_Comment_Anonymous'] = 'Nickname mandatory for guests comments';
$lang['UAM_No_Comment_Anonymous_true'] = ' Enable';
$lang['UAM_No_Comment_Anonymous_false'] = ' Disable (default)';

$lang['UAM_Tips1'] = 'Registrations with email validation and warning message on the Piwigo\'s homepage';

$lang['Tab_UserManager'] = 'Tracking validations';

/* UserManager Tab */
$lang['SubTitle3'] = 'Tracking validations';
$lang['UserManager_Title'] = 'Tracking validations';
/* Ghost Tracker Tab */
$lang['SubTitle4'] = 'Ghost Tracker';
$lang['GT_Init'] = 'Initializing Ghost Tracker';
$lang['GhostTracker_Title'] = 'Ghost visitors management';
$lang['UAM_GhostTracker_Init'] = 'If you enable this feature for the first time or you have reactivated after a long period off during which new visitors are registered, you must initialize or reset the Ghost Tracker. This action is done only after activation or reactivation of the option. Please click <u>once</u> the reset button below.';
/* UserList Tab */
$lang['SubTitle5'] = 'Tracking users';
$lang['Tab_UserList'] = 'Tracking users';
/* Mailing */
$lang['Add of %s'] = 'Profile created for %s';
$lang['Update of %s'] = 'Profile %s updated';

/* Mailing */
$lang['Ghost_reminder_of_%s'] = '%s, this is a reminder email';
$lang['Reminder_with_key_of_%s'] = '%s, your validation key has been renewed';
$lang['Reminder_without_key_of_%s'] = '%s, your validation key will expire';
/* Errors and Warnings */
$lang['Err_GhostTracker_Settings'] = 'This page is available only if "Ghost Tracker" is active in "Setting the registrations followed and other options".';
$lang['Err_Userlist_Settings'] = 'This page is available only if "Monitoring registered users" is active in the "Setting the registrations followed and other options".';
// --------- End: New or revised $lang ---- from version 2.13.4


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_AdminConfMail'] = 'Confirmation of registration for admins';
$lang['UAM_Admin_ConfMail_true'] = ' Enable';
$lang['UAM_Admin_ConfMail_false'] = ' Disable (default)';
$lang['UAM_Tips1_txt'] = '
          <ul>
            <li>
            Goals:<br>
            - On his arrival at the gallery: To inform the visitor that he has to register to access private photos<br>
            - At registration: Generate an email validation with direct link, inform the new user of its non-validation and integrate him to the group "Waiting"<br>
            - At validation: Switch automatically group "Waiting" to group "Validated", which provides access to private categories<br><br>
            <b>Recall: In standard operation, the "Guest" only sees the public categories, without information message.</b>
            </li><br><br>
            <li>
Prerequisite:<br>
- A gallery with all or some private categories, visible only by registered users<br>
- At least 2 following Piwigo\'s users groups: "Waiting," without permission on private categories, and "Validated" with all the permissions on the private categories<br>
- UAM plugin<br>
- PWG Stuffs plugin, for adding a module type "Personal Block"<br>
- Optionally, the plugin Extended Description to support multi-languages<br>
            </li><br><br>
            <li>
Stages:<br><br>
A. In plugin UAM:
              <ol>
                <li>Enable registration confirmation</li>
                <li>Enter text for additional explanation which will be attached to mail registration confirmation. If the plugin Extended Description is activated, the language tags can be used</li>
                <li>Select the "Waiting" group under "For users who have not validated their registration"</li>
                <li>Select the "Validated" group under "For users who have validated their registration"</li>
                <li>Save the plugin configuration</li>
              </ol>
<br>
B. In plugin PWG Stuffs :
              <ol>
                <li>Add a new module type "Personal block: Shows a block staff (eg an editorial)"</li>
                <li>Configure the module, indicating the title (eg "Registration pending validation") and its description, and only check "Waiting" in the list of groups allowed</li>
                <li>Complete content of the module with the message information to be displayed to users not validated. As UAM, languages markup may be used if the plugin is enabled Extended Description</li>
                <li>Check "Display the module on the homepage of the site"</li>
                <li>Validate the configuration of the module</li>
              </ol>
            </li>
          </ul>';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.0
$lang['UAM_confirmmail_custom_Txt1'] = 'Text of the confirmation page - Confirmation accepted';
$lang['UAM_confirmmail_custom_Txt2'] = 'Text of the confirmation page - Confirmation rejected';
$lang['LastVisit_Date'] = 'Last visit';
$lang['Nb_Days'] = 'Difference in days';
$lang['Err_UserManager_Settings'] = 'This page is available only if "Confirmation of registration" is active and if a group of visitors not validated is configured in "Setting confirmations and validations of registration".';
// --------- End: New or revised $lang ---- from version 2.15.0
?>