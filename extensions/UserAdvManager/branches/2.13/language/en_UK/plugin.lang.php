<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();


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
$lang['confirm_mail_ok'] = '<br><br><br>Thank you to have confirmed your email address and your registration on the gallery. Have fun !<br><br><br><br>';


/* Errors and Warnings */
$lang['UserAdvManager_audit_ok'] = 'Audit OK';
$lang['Err_audit_no_casse'] = '<b>These accounts are identical to the case closely :</b> ';
$lang['Err_audit_username_char'] = '<b>This account uses one or more forbidden characters :</b> ';
$lang['Err_audit_email_forbidden'] = '<b>This account uses a forbidden email provider :</b> ';
$lang['Err_audit_advise'] = '<b>you have to perform corrections to comply with new rules that you have activated.<br>Use a database management utility to correct user accounts directly in the table ###_USERS';
$lang['UserAdvManager_Empty Author'] = 'The author field have to be filled to send a comment.';
if ( isset($conf_UserAdvManager[1]) and $conf_UserAdvManager[1] == 'true' )
	$lang['reg_err_login5'] = 'Username already exist, WARNING name is case insensitive (Shift = Tiny).';
$lang['reg_err_login6'] = 'Username does not have to match the following characters: ';
$lang['reg_err_login7'] = 'Your email provider is banned for registration. Banned email providers are: ';
$lang['UserAdvManager_empty_pwd'] = '[empty password]';
$lang['UserAdvManager_no_update_pwd'] = '[profile updated without password changed]';
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
$lang['LastVisit_Date'] = 'Last visit';
$lang['Reminder'] = 'Email reminder';
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


// --------- Starting below: New or revised $lang ---- from version 2.12.7
/* Errors and Warnings */
$lang['mail_text_error'] = '<b>Warning!</b> - Semicolons (;) are not allowed in addtionnal email text. This Character have been automatically replaced by a dot (.). For information, the amended text(s) is(are) shown in red in the corresponding field(s). Please, check it(them) out.';
// --------- End: New or revised $lang ---- from version 2.12.7


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['mail_exclusionlist_error'] = 'Warning! You have entered a new line (CR-LF) at the begining of email exclusion list (shown in red below). Although this new line is not visible, it is still present and may cause malfunction of the plugin. Please re-type in your exclusion list in a manner that does not begin with a newline.';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.0
/* UserList Tab */
$lang['UserList_Title'] = 'Monitoring registered users';
$lang['Nb_Days'] = 'Number of days<br>since last visit';
// --------- End: New or revised $lang ---- from version 2.13.0


// --------- Starting below: New or revised $lang ---- from version 2.13.4
$lang['uam_no_unlink'] = '\'unlink\' function is not available';
$lang['uam_unlink_errors'] = 'Errors occurred when deleting files';
/* Global Configuration Tab */
$lang['Title_Tab'] = 'UserAdvManager - Version : ';
$lang['SubTitle1'] = 'Plugin configuration';
$lang['Tab_Global'] = 'Configuration';
$lang['UserAdvManager_Title1'] = 'Setting restrictions for registrations';
$lang['UserAdvManager_Title2'] = 'Setting confirmations and validations of registration';
$lang['UserAdvManager_Title3'] = 'Setting the followed registrations and other options';
$lang['UserAdvManager_Title4'] = 'Tips and examples of use';
$lang['UserAdvManager_No_Casse'] = 'Usernames: Case sensitivity';
$lang['UserAdvManager_No_Casse_true'] = ' Enable';
$lang['UserAdvManager_No_Casse_false'] = ' Disable (default)';
$lang['UserAdvManager_Username_Char'] = 'Usernames: Exclusion of characters';
$lang['UserAdvManager_Username_Char_true'] = ' Banning characters:<br>(Use a comma to separate each character)<br><br>';
$lang['UserAdvManager_Username_Char_false'] = ' Permit all (default)';
$lang['UserAdvManager_Password_Enforced'] = 'Strengthening the security level of passwords';
$lang['UserAdvManager_Password_Enforced_true'] = ' Enable. Minimum Score: ';
$lang['UserAdvManager_Password_Enforced_false'] = ' Disable (default)';
$lang['UserAdvManager_AdminPassword_Enforced'] = 'Applying to administrators';
$lang['UserAdvManager_AdminPassword_Enforced_true'] = ' Enable';
$lang['UserAdvManager_AdminPassword_Enforced_false'] = ' Disable (default)';
$lang['UserAdvManager_PasswordTest'] = 'Password test: ';
$lang['UserAdvManager_ScoreTest'] = 'Result: ';
$lang['UserAdvManager_MailExclusion'] = 'Email domains exclusion';
$lang['UserAdvManager_MailExclusion_true'] = ' Exclude the following domains:<br>(Use a comma to separate each domain)';
$lang['UserAdvManager_MailExclusion_false'] = ' Disable (default)';

$lang['UserAdvManager_Mail_Info'] = 'Information email to user:';
$lang['UserAdvManager_Mail_Info_true'] = ' Enable';
$lang['UserAdvManager_Mail_Info_false'] = ' Disable (default)';
$lang['UserAdvManager_MailInfo_Text'] = ' Customizing the information email:';
$lang['UserAdvManager_Confirm_Mail'] = 'Confirmation of registration:';
$lang['UserAdvManager_Confirm_Mail_true'] = ' Enable';
$lang['UserAdvManager_Confirm_Mail_false'] = ' Disable (default)';
$lang['UserAdvManager_ConfirmMail_Text'] = ' Customizing the confirmation email:';
$lang['UserAdvManager_Confirm_grpstat_notice'] = 'Caution: It is advisable to use either the group or the validation statutes and not both simultaneously.';
$lang['UserAdvManager_Confirm_Group'] = 'Validation Groups<br>(leave ------- to not affect group)';
$lang['UserAdvManager_Confirm_Status'] = 'Validation Statutes<br>(leave ------- to keep the Piwigo\'s default)';
$lang['UserAdvManager_No_Confirm_Group'] = 'Group for users who have not validated their registration<br>';
$lang['UserAdvManager_Validated_Group'] = 'Group for users who have validated their registration<br>';
$lang['UserAdvManager_No_Confirm_Status'] = 'Status for users who have not validated their registration<br>';
$lang['UserAdvManager_Validated_Status'] = 'Status for users who have validated their registration<br>';
$lang['UserAdvManager_ValidationLimit_Info'] = 'Deadline for registration validation limited';
$lang['UserAdvManager_ConfirmMail_TimeOut_true'] = ' Enable. Number of days until expiration: ';
$lang['UserAdvManager_ConfirmMail_TimeOut_false'] = ' Disable (default)';
$lang['UserAdvManager_ConfirmMail_Remail'] = 'Remind unvalidated users';
$lang['UserAdvManager_ConfirmMail_Remail_true'] = ' Enable';
$lang['UserAdvManager_ConfirmMail_Remail_false'] = ' Disable (default)';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt1'] = 'Customizing the reminder message <b><u>with</u></b> new regeneration of key validation.';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt2'] = 'Customizing the reminder message <b><u>without</u></b> regeneration of key validation.';

$lang['UserAdvManager_GhostTracker'] = 'Ghost visitors management (Ghost Tracker)';
$lang['UserAdvManager_GhostTracker_true'] = ' Enable. Maximum period in days between two visits: ';
$lang['UserAdvManager_GhostTracker_false'] = ' Disable (default)';
$lang['UserAdvManager_GhostTracker_ReminderText'] = 'Customizing Ghost Tracker\'s reminder message';
$lang['UserAdvManager_LastVisit'] = ' Tracking registered users';
$lang['UserAdvManager_LastVisit_true'] = ' Enable';
$lang['UserAdvManager_LastVisit_false'] = ' Disable (default)';
$lang['UserAdvManager_No_Comment_Anonymous'] = 'Nickname mandatory for guests comments';
$lang['UserAdvManager_No_Comment_Anonymous_true'] = ' Enable';
$lang['UserAdvManager_No_Comment_Anonymous_false'] = ' Disable (default)';

$lang['UserAdvManager_Tips1'] = 'Registrations with email validation and warning message on the Piwigo\'s homepage';
$lang['UserAdvManager_Tips1_txt'] = '
          <ul>
            <li>
Ingredients needed:<br>
- 2 Piwigo\'s user groups at least: &quot;Waiting&quot; for visitors awaiting validation and &quot;Validated&quot; for visitors who have validated their registration<br>
- NBC_UAM plugin<br>
- PWG Stuffs plugin<br>
- Possibly Extended Description plugin (to support multi-lingual)
            </li>
<br><br>
            <li>
La recette :<br>
            <ul>
              <li>
Preamble: It\'s located in the case of a private gallery or semi-private (ie only a small part of categories is available by Guests and registered can see everything). We consider that the required plugins are installed (does it remind you?).<br><br>
              </li>
              <li>
Attribute group &quot;Waiting&quot; no permission on private categories<br><br>
              </li>
              <li>
Attribute group &quot;Validated&quot; all permissions on the private categories<br><br>
              </li>
              <li>
In NBC_UAM plugin:
              <ol>
                <li>Enable registration confirmation</li>
                <li>In the field below &quot;Customizing the confirmation email&quot;, enter text for additional explanation will be attached to email registration confirmation. Possibly, it is possible to use markup language implemented by the plugin Extended Description</li>
                <li>In the &quot;Group for users who have not validated their registration&quot;, select group &quot;Waiting&quot;</li>
                <li>In the &quot;Group for users who have validated their registration&quot;, select group &quot;Validated&quot;</li>
                <li>Save the plugin configuration</li>
              </ol>
              </li>
<br><br>
              <li>
In PWG Stuff plugin:
              <ol>
                <li>Add a new module personal block like an edito</li>
                <li>In the module\'s configuration, in addition to its title (eg &quot;Registration pending validation&quot;) and its description, check only the authorized group &quot;Waiting&quot;</li>
                <li>In the content module, enter the message text which sought information will be visible as invalid user. Again, ability to manage multi-language through Extended Description\'s tags</li>
                <li>Validate module</li>
                <li>Define its place on the main page of the gallery</li>
              </ol>
              </li>
            </ul>
            </li>
<br><br>
            <li>
              The result:<br>
              - A "Guest" arrives on the gallery, he sees nothing other than the public categories and no information message.<br>
              - He registers. This generates an email validation and automatic membership to the group &quot;Waiting&quot;.<br>
              - At the end, he\'s redirected to the gallery homepage and a message indicating the waiting of validate its registration<br><br>
              He received his email validation, following the link provided for that purpose in the mail, releases the group &quot;Waiting&quot; and takes place in the group &quot;Validated&quot;. By clicking the &quot;Home&quot;, then he\'s connected to the gallery with full access to private groups and without the information message.
            </li>
          </ul>';

$lang['Tab_UserManager'] = 'Tracking validations';

/* UserManager Tab */
$lang['SubTitle3'] = 'Tracking validations';
$lang['UserManager_Title'] = 'Tracking validations';
/* Ghost Tracker Tab */
$lang['SubTitle4'] = 'Ghost Tracker';
$lang['GT_Init'] = 'Initializing Ghost Tracker';
$lang['GhostTracker_Title'] = 'Ghost visitors management';
$lang['UserAdvManager_GhostTracker_Init'] = 'If you enable this feature for the first time or you have reactivated after a long period off during which new visitors are registered, you must initialize or reset the Ghost Tracker. This action is done only after activation or reactivation of the option. Please click <u>once</u> the reset button below.';
/* UserList Tab */
$lang['SubTitle5'] = 'Tracking users';
$lang['Tab_UserList'] = 'Tracking users';
/* Mailing */
$lang['Add of %s'] = 'Profile created for %s';
$lang['Update of %s'] = 'Profile %s updated';
/* Email confirmation page */
$lang['confirm_mail_bad'] = '<br><br><br>Your activation key is incorrect or expired or you have already validated your account, please contact the webmaster to fix this problem.<br><br><br><br>';
/* Mailing */
$lang['Ghost_reminder_of_%s'] = '%s, this is a reminder email';
$lang['Reminder_with_key_of_%s'] = '%s, your validation key has been renewed';
$lang['Reminder_without_key_of_%s'] = '%s, your validation key will expire';
/* Errors and Warnings */
$lang['Err_UserManager_Settings'] = 'This page is available only if "Deadline for registration validation limited" is active and an unvalidated users group is set in "Setting confirmations and validations of registration".';
$lang['Err_GhostTracker_Settings'] = 'This page is available only if "Ghost Tracker" is active in "Setting the registrations followed and other options".';
$lang['Err_Userlist_Settings'] = 'This page is available only if "Monitoring registered users" is active in the "Setting the registrations followed and other options".';
// --------- End: New or revised $lang ---- from version 2.13.4
?>