<?php

/* UserManager Tab */
$lang['UAM_Registration_Date'] = 'Registration date';


/* Mailing */
$lang['UAM_infos_mail %s'] = '%s, please find here your information to log in the gallery :';
$lang['UAM_User: %s'] = 'User : %s';
$lang['UAM_Password: %s'] = 'Password: %s';
$lang['UAM_Link: %s'] = 'Please, click on this link to confirm the registration : %s';


/* Errors and Warnings */
$lang['UAM_audit_ok'] = 'Audit OK';
$lang['UAM_Err_audit_username_char'] = '<b>This account uses one or more forbidden characters :</b> ';
$lang['UAM_Err_audit_email_forbidden'] = '<b>This account uses a forbidden email provider :</b> ';
$lang['UAM_Err_audit_advise'] = '<b>you have to perform corrections to comply with new rules that you have activated.<br>Use a database management utility to correct user accounts directly in the table ###_USERS';
$lang['UAM_reg_err_login2'] = 'Username does not have to match the following characters: ';
$lang['UAM_reg_err_login5'] = 'Your email provider is banned for registration. Banned email providers are: ';
$lang['UAM_empty_pwd'] = '[empty password]';
$lang['UAM_no_update_pwd'] = '[profile updated without password changed]';
$lang['UAM_No_validation_for_Guest'] = 'The "Guest" account is not subject to confirmation';
$lang['UAM_No_validation_for_default_user'] = 'The default account is not subject to confirmation';
$lang['UAM_No_validation_for_Webmaster'] = 'The "Webmaster" account is not subject to confirmation';
$lang['UAM_No_validation_for_your_account'] = 'Your personnal admin account is not subject to confirmation';


/* Processing messages */
$lang['UAM_%d_Mail_With_Key'] = '%d message with key renewal was sent';
$lang['UAM_%d_Mails_With_Key'] = '%d messages with key renewal were sent';
$lang['UAM_%d_Reminder_Sent'] = '%d reminder message was sent';
$lang['UAM_%d_Reminders_Sent'] = '%d reminder messages were sent';


/* Action button names */
$lang['UAM_Delete_selected'] = 'Delete';
$lang['UAM_Mail_without_key'] = 'Reminder without key';
$lang['UAM_Mail_with_key'] = 'Reminder with key';




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['UAM_PasswordTest'] = 'Score calculation';
/* Ghost Tracker Tab */
$lang['UAM_Tab_GhostTracker'] = 'Ghost Tracker';
$lang['UAM_Reminder'] = 'Email reminder';
$lang['UAM_Reminder_Sent_OK'] = 'YES';
$lang['UAM_Reminder_Sent_NOK'] = 'NO';
/* Errors and Warnings */
$lang['UAM_save_config'] ='Configuration saved.';
$lang['UAM_reg_err_login3'] = 'Security : Password is mandatory !';
$lang['UAM_reg_err_login4_%s'] = 'Security : A control system calculates a score on the chosen passwords complexity. The complexity of your password is too low (score = %s). Please, choose a new password more secure by following these rules:<br>
- Use letters and numbers<br>
- Use lowercase and uppercase<br>
- Increase its length (number of characters)<br>
The minimum passwords score required by the administrator is: ';
$lang['UAM_No_reminder_for_Guest'] = 'The "Guest" account is not subject to receive reminders from GhostTracker';
$lang['UAM_No_reminder_for_default_user'] = 'The default account is not subject to receive reminders from GhostTracker';
$lang['UAM_No_reminder_for_Webmaster'] = 'The "Webmaster" account is not subject to receive reminders from GhostTracker';
$lang['UAM_No_reminder_for_your_account'] = 'You personnal admin account is not subject to receive reminders from GhostTracker';
/* Action button names */
$lang['UAM_audit'] = 'Audit settings';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Errors and Warnings */
$lang['UAM_GhostTracker_Init_OK'] = 'Ghost Tracker reset done !';
/* Action button names */
$lang['UAM_GT_Reset'] = 'Reset Ghost Tracker';
// --------- End: New or revised $lang ---- from version 2.12.2


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['UAM_mail_exclusionlist_error'] = 'Warning! You have entered a new line (CR-LF) at the begining of email exclusion list (shown in red below). Although this new line is not visible, it is still present and may cause malfunction of the plugin. Please re-type in your exclusion list in a manner that does not begin with a newline.';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.4
/* Global Configuration Tab */
$lang['UAM_Title_Tab'] = 'UserAdvManager - Version : ';
$lang['UAM_SubTitle1'] = 'Plugin configuration';
$lang['UAM_Tab_Global'] = 'Configuration';
$lang['UAM_Title4'] = 'Tips and examples of use';
$lang['UAM_No_Casse'] = 'Usernames: Case sensitivity';
$lang['UAM_Username_Char'] = 'Usernames: Exclusion of characters';
$lang['UAM_Username_Char_true'] = ' Banning characters:<br>(Use a comma to separate each character)<br><br>';
$lang['UAM_Username_Char_false'] = ' Permit all (default)';
$lang['UAM_Password_Enforced'] = 'Strengthening the security level of passwords';
$lang['UAM_Password_Enforced_true'] = ' Enable. Minimum Score: ';
$lang['UAM_AdminPassword_Enforced'] = 'Applying to administrators';
$lang['UAM_PasswordTest'] = 'Password test: ';
$lang['UAM_ScoreTest'] = 'Result: ';
$lang['UAM_MailExclusion'] = 'Email domains exclusion';
$lang['UAM_MailExclusion_true'] = ' Exclude the following domains:<br>(Use a comma to separate each domain)';

$lang['UAM_Mail_Info'] = 'Information email to user:';
$lang['UAM_MailInfo_Text'] = ' Customizing the information email:';
$lang['UAM_Confirm_Mail'] = 'Confirmation of registration:';
$lang['UAM_ConfirmMail_Text'] = ' Customizing the confirmation email:';
$lang['UAM_ValidationLimit_Info'] = 'Deadline for registration confirmation limited';
$lang['UAM_ConfirmMail_TimeOut_true'] = ' Enable. Number of days until expiration: ';
$lang['UAM_ConfirmMail_ReMail_Txt1'] = 'Customizing the reminder message <b><u>with</u></b> new regeneration of confirmation key.';
$lang['UAM_ConfirmMail_ReMail_Txt2'] = 'Customizing the reminder message <b><u>without</u></b> regeneration of confirmation key.';

$lang['UAM_GhostTracker'] = 'Ghost visitors management (Ghost Tracker)';
$lang['UAM_GhostTracker_true'] = ' Enable. Maximum period in days between two visits: ';
$lang['UAM_GhostTracker_ReminderText'] = 'Customizing Ghost Tracker\'s reminder message';

/* Ghost Tracker Tab */
$lang['UAM_SubTitle4'] = 'Ghost Tracker';
$lang['UAM_GT_Init'] = 'Initializing Ghost Tracker';
$lang['UAM_GhostTracker_Title'] = 'Ghost visitors management';
$lang['UAM_GhostTracker_Init'] = 'If you enable this feature for the first time or you have reactivated after a long period off during which new visitors are registered, you must initialize or reset the Ghost Tracker. This action is done only after activation or reactivation of the option. Please click <u>once</u> the reset button below.';
/* Mailing */
$lang['UAM_Add of %s'] = 'Profile created for %s';
$lang['UAM_Update of %s'] = 'Profile %s updated';
$lang['UAM_Ghost_reminder_of_%s'] = '%s, this is a reminder email';
$lang['UAM_Reminder_with_key_of_%s'] = '%s, your confirmation key has been renewed';
$lang['UAM_Reminder_without_key_of_%s'] = '%s, your confirmation key will expire';
/* Errors and Warnings */
$lang['UAM_Err_GhostTracker_Settings'] = 'This page is available only if "Ghost Tracker" is active in "Setting the registrations followed and other options".';
$lang['UAM_Err_Userlist_Settings'] = 'This page is available only if "Monitoring registered users" is active in the "Setting the registrations followed and other options".';
// --------- End: New or revised $lang ---- from version 2.13.4


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_AdminConfMail'] = 'Confirmation of registration for admins';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.0
$lang['UAM_confirmmail_custom_Txt1'] = 'Text of the confirmation page - Confirmation accepted';
$lang['UAM_confirmmail_custom_Txt2'] = 'Text of the confirmation page - Confirmation rejected';
$lang['UAM_LastVisit_Date'] = 'Last visit';
$lang['UAM_Nb_Days'] = 'Difference in days';
// --------- End: New or revised $lang ---- from version 2.15.0


// --------- Starting below: New or revised $lang ---- from version 2.15.1
$lang['UAM_Support_txt'] = 'The official support on this plugin is only on these Piwigo forum topic:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=15015" onclick="window.open(this.href);return false;">English forum - http://piwigo.org/forum/viewtopic.php?id=15015</a><br><br>
Also available, the project\'s bugtracker: <a href="http://piwigo.org/bugs/" onclick="window.open(this.href);return false;">http://piwigo.org/bugs/</a>';
// --------- End: New or revised $lang ---- from version 2.15.1


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_Manual_Validation'] = 'Manual confirmation';
$lang['UAM_Confirm_Mail_true'] = ' Enable - Confirmation by user';
$lang['UAM_Confirm_Mail_local'] = ' Enable - Confirmation by admin';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.16.0
$lang['UAM_Expired_Group'] = '<b>Group</b> for user\'s registration has expired<br>';
$lang['UAM_Expired_Status'] = '<b>Status</b> for user\'s registration has expired<br>';
$lang['UAM_GTAuto'] = 'Automatic management of ghosts users';
$lang['UAM_GTAutoDel'] = 'Automatic deletion of accounts';
$lang['UAM_Error_GTAutoMail_cannot_be_set_without_ConfirmMail'] = 'Consistency error in the chosen configuration:
<br><br>
"Setting the registered users monitoring and other options > Ghost visitors management (Ghost Tracker) > Automatic management of ghosts users > Automatically sending an email when changing group / status" can not be activated if "Setting confirmations of registration > Confirmation of registration - Confirmation by user" is not enabled at first.
<br><br>
To ensure consistency, the option "Automatically sending an email when changing group / status" was automatically repositioned "disabled".
<br><br>';
$lang['UAM_Demotion of %s'] = 'Demotion of %s';
$lang['UAM_AdminValidationMail_Text'] = 'Notification of manual confirmation of registration';
$lang['UAM_Validation of %s'] = 'Confirmation of %s';
// --------- End: New or revised $lang ---- from version 2.16.0


// --------- Starting below: New or revised $lang ---- from version 2.20.0
$lang['UAM_CustomPasswRetr'] = 'Customize lost password email content';
$lang['UAM_USRAutoDel'] = 'Custom message on deleted account';
$lang['UAM_USRAutoMail'] = 'Automated email reminder';
$lang['UAM_Disable'] = ' Disable (default)';
$lang['UAM_Enable'] = ' Enable ';
$lang['UAM_No_Ghosts'] = 'No ghosts visitors for the moment';
$lang['UAM_No_Userlist'] = 'No visitors to list for the moment';
$lang['UAM_Stuffs_Title'] = 'UAM block';
$lang['UAM_Stuffs'] = 'PWG Stuffs block';
// --------- End: New or revised $lang ---- from version 2.20.0


// --------- Starting below: New or revised $lang ---- from version 2.20.3
$lang['UAM_Dump_Download'] = 'To download the backup file, please check this box:';
$lang['UAM_Save'] = 'Run backup';
$lang['UAM_Dump_OK'] = 'Backup file created successfully';
$lang['UAM_Dump_NOK'] = 'Error: Unable to create backup file !';
// --------- End: New or revised $lang ---- from version 2.20.3


// --------- Starting below: New or revised $lang ---- from version 2.20.4
$lang['UAM_HidePassw'] = 'Password in clear text in the information email';
// --------- End: New or revised $lang ---- from version 2.20.4


// --------- Starting below: New or revised $lang ---- from version 2.20.11
$lang['UAM_Error_Using_illegal_flag'] = 'Syntax error ! The [Kdays] AutoText flag is used as the "Deadline for registration confirmation limited" option was not activated. Please activate the option or correct the text field(s) colored in red.';
// --------- End: New or revised $lang ---- from version 2.20.11


// --------- Starting below: New or revised $lang ---- from version 2.30.0
$lang['UAM_Confirm_grpstat_notice'] = 'Caution: It is advisable to use either the group or the confirmation statutes and not both simultaneously. The privacy level can be used in conjunction with a group or status assignment.';
$lang['UAM_Confirm_Group'] = 'Groups<br>(leave ------- to not affect group)';
$lang['UAM_Confirm_Status'] = 'Statutes<br>(leave ------- to keep the Piwigo\'s default)';
$lang['UAM_Confirm_Level'] = 'Privacy level<br>(leave ------- to keep the Piwigo\'s default)';
$lang['UAM_GTAutoGp'] = 'Automatic change of group / status / privacy level';
$lang['UAM_Expired_Level'] = '<b>Privacy level</b> for user\'s registration has expired<br>';
$lang['UAM_MiscOptions'] = 'Other miscellaneous options';
$lang['UAM_Title3'] = 'Ghost users management';
$lang['UAM_Title5'] = 'Miscellaneous options';
$lang['UAM_Password_Reset_Msg'] = 'Please, change your password!';
$lang['UAM_PwdReset'] = 'Password renewal';
$lang['UAM_Password reset selected users'] = 'Request password renewal for selected users';
$lang['UAM_Guest cannot be pwdreset'] = 'Password renewal can\'t be set for guests account!';
$lang['UAM_Default user cannot be pwgreset'] = 'Password renewal can\'t be set for default user account!';
$lang['UAM_Webmaster cannot be pwdreset'] = 'Password renewal can\'t be set for the webmaster account!';
$lang['UAM_You cannot pwdreset your account'] = 'Password renewal can\'t be set for your own account!';
$lang['UAM_You need to confirm pwdreset'] = 'You must confirm password renewal (check box)!';
$lang['UAM_PwdReset_Todo'] = 'Password to be renewed';
$lang['UAM_PwdReset_Done'] = 'Password renewed';
$lang['UAM_PwdReset_NA'] = 'Original password';
$lang['UAM %d user pwdreseted'] = 'Password renewal required for %d user';
$lang['UAM %d users pwdreseted'] = 'Password renewal required for %d users';
$lang['UAM_Error_Using_illegal_Kdays'] = 'Using the [Kdays] tag is allowed only if the deadline for registration confirmation limited is active. Refer to the text field in red to correct the problem.';
$lang['UAM_Default_InfoMail_Txt'] = 'Hello [username]!

You made significant changes in your profile on the gallery [mygallery]. Please, find below your new settings:';
$lang['UAM_Default_ConfirmMail_Txt'] = 'Hello [username]! Thank you to have register on [mygallery].

To complete the process and be able to browse through the pictures, thank you kindly confirm your registration by clicking on the link in this message.';
$lang['UAM_Default_GhstReminder_Txt'] = 'Hello [username].
	
This is a reminder because a very long time passed since your last visit on our gallery [mygallery]. If you do not want anymore to use your access account, please let us know by replying to this email. Your account will be deleted.

On receipt of this message and no new visit within [days] days, we would be obliged to automatically delete your account.

Best regards,

The admin of the gallery [mygallery] - [myurl]';
$lang['UAM_Default_GhstDeletion_Txt'] = 'Sorry [username], your account has been deleted due to a too long time passed since your last visit at [mygallery]. Please register again.';
$lang['UAM_Default_PwdRequest_Txt'] = 'You have requested a password reset on our gallery. Please, find below your new connection settings.';
$lang['UAM_Default_CfmMail_Custom_Txt1'] = '[username] account successfully validated!';
$lang['UAM_DumpTxt'] = 'Backup and restore your configuration';
$lang['UAM_Restore'] = 'To restore the backup file of your configuration. Only the saved file on the server is taken into account.
<br><br>
<b style="color: red;">Beware of the backup version!<br>A backup made from one version of the plugin can only be restored on the same version.</b>';
$lang['UAM_Restore_File'] = 'Restore Configuration';
$lang['UAM_No_Backup_File'] = 'No backup file available!';
$lang['UAM_Restoration_NOK'] = 'An error occurred while restoring the configuration. Please check the validity of your backup file.';
$lang['UAM_Restoration_OK'] = 'Restoring your configuration completed successfully! Please reload UAM\'s administration page to view the restored settings.';
// --------- End: New or revised $lang ---- from version 2.30.0


// --------- Starting below: New or revised $lang ---- from version 2.30.1
$lang['UAM_submit'] = 'Submit settings';
$lang['UAM_Generic cannot be pwdreset'] = 'Password renewal can\'t be set for generic accounts!';
$lang['UAM_Admins cannot be pwdreset'] = 'Password renewal can\'t be set for admins account!';
$lang['UAM_Bad_version_backup'] = 'The version of the backup file does not match the version of the plugin! The restoration was not performed.';
// --------- End: New or revised $lang ---- from version 2.30.1

// --------- Starting below: New or revised $lang ---- from version 2.30.2
$lang['UAM_RedirToProfile'] = 'Redirect to Customization page';
$lang['UAM_Title1'] = 'Restrictions for registrations';
$lang['UAM_Title2'] = 'Confirmations of registration';
$lang['UAM_GTAutoMail'] = 'Automatically sending an email when changing group / status / privacy level';
$lang['UAM_NewFeature'] = 'New feature !';
$lang['UAM_RejectConnexion_Custom_Txt'] = 'Customize rejection text';
// --------- End: New or revised $lang ---- from version 2.30.2


// --------- Starting below: New or revised $lang ---- from version 2.30.3
$lang['UAM_MailExclusion_No'] = 'Email domains exclusion - Not available because emails are not mandatory for registrations !';
$lang['UAM_USRAuto'] = 'Automatic management of unconfirmed users';
$lang['UAM_ConfirmMail_Remail'] = 'Remind unconfirmed users';
$lang['UAM_No_Usermanager'] = 'No unconfirmed registers to list for the moment';
$lang['UAM_Stuffs_Desc'] = 'Adds an information block for unconfirmed users';
/* Email confirmation page */
$lang['UAM_%d_Validated_User'] = '%d User confirmed manually';
$lang['UAM_%d_Validated_Users'] = '%d Users confirmed manually';
$lang['UAM_No_Confirm_Group'] = 'Group for users who have not confirmed their registration<br>';
$lang['UAM_Validated_Group'] = 'Group for users who have confirmed their registration<br>';
$lang['UAM_No_Confirm_Status'] = 'Status for users who have not confirmed their registration<br>';
$lang['UAM_Validated_Status'] = 'Status for users who have confirmed their registration<br>';
$lang['UAM_No_Valid_Level'] = 'Privacy level for users who have not confirmed their registration<br>';
$lang['UAM_Valid_Level'] = 'Privacy level for users who have confirmed their registration<br>';
$lang['UAM_Err_UserManager_Settings'] = 'This page is available only if "Confirmation of registration" is active and if a group of visitors not confirmed is configured in "Setting confirmations of registration".';
$lang['UAM_Tips1'] = 'Information of unconfirmed registration with UAM and PWG_Stuffs';
$lang['UAM_Tips1_txt'] = '
          <ul>
            <li>
            Goals: Inform the visitor that the registration is awaiting approval by displaying a personal block on the home page of the gallery, and this, as registration is not approved.
            <br><br>
            <b>Recall: In standard operation, the "Guest" only sees the public categories, without information message.</b>
            </li><br><br>
            <li>
Prerequisite:<br>
- A gallery with all or some private categories, visible only by registered users<br>
- At least 2 following Piwigo\'s users groups: "Waiting," without permission on private categories, and "Confirmed" with all the permissions on the private categories<br>
- UAM plugin<br>
- PWG Stuffs plugin, for adding a special UAM module<br>
- Optionally, the plugin Extended Description to support multi-languages<br>
            </li><br><br>
            <li>
Stages:<br><br>
A. In plugin UAM:
              <ol>
                <li>Enable registration confirmation</li>
                <li>Enable PWG Stuffs module option</li>
                <li>Enter text for additional explanation which will be attached to mail registration confirmation. If the plugin Extended Description is activated, the language tags can be used</li>
                <li>Select the "Waiting" group under "For users who have not confirmed their registration"</li>
                <li>Select the "Confirmed" group under "For users who have confirmed their registration"</li>
                <li>Save the plugin configuration</li>
              </ol>
<br>
B. In plugin PWG Stuffs :
              <ol>
                <li>Go to tab "Add a new module"</li>
                <li>Choose "UAM Module"</li>
                <li>Configure the module, indicating the title (eg "Registration pending confirmation") and its description, and only check "Waiting" in the list of groups allowed</li>
                <li>Complete content of the module with the message information to be displayed to users not confirmed. As UAM, languages markup may be used if the plugin is enabled Extended Description</li>
                <li>Check "Display the module on the homepage of the site"</li>
                <li>Validate the configuration of the module</li>
              </ol>
            </li>
          </ul>';
$lang['UAM_Tips2'] = 'Information of unconfirmed registration with UAM and Additional Pages';
$lang['UAM_Tips2_txt'] = '
          <ul>
            <li>
            Goals: Inform the visitor that the registration is awaiting confirmation by posting an additional page replacing the standard index page gallery at each of these connections, and this, as registration is not approved.
            <br><br>
            Advantages over the method with PWG_Stuffs: Allow formatting information and displaying the information immediately upon registration of visitors.
            </li><br><br>
            <li>
Prerequisite:<br>
- A gallery with all or some private categories, visible only by registered users<br>
- At least 2 following Piwigo\'s users groups: "Waiting," without permission on private categories, and "Confirmed" with all the permissions on the private categories<br>
- UAM plugin<br>
- Additional Pages plugin for adding and managing an additional page to replace the default index page of the gallery<br>
- Optionally, the plugin Extended Description to support multi-languages<br>
            </li><br><br>
            <li>
Stages:<br><br>
A. In plugin UAM:
              <ol>
                <li>Enable registration confirmation</li>
                <li>Enter text for additional explanation which will be attached to mail registration confirmation. If the plugin Extended Description is activated, the language tags can be used</li>
                <li>Select the "Waiting" group under "For users who have not confirmed their registration"</li>
                <li>Select the "Confirmed" group under "For users who have confirmed their registration"</li>
                <li>Save the plugin configuration</li>
              </ol>
<br>
B. In plugin Additional Pages:<br>
                <b>NOTE : The management of access rights for groups on Additional Pages must be turned on (see plugin configuration settings).</b>
                <br>
              <ol>
                <li>Add a new page with at least the following parameters:</li>
                <ul>
                  <li>Page name: The name you wish to give to the additional page (ie: Registration not confirmed)</li>
                  <li>Set as homepage checked</li>
                  <li>Groups allowed: Check the box corresponding to the group "Waiting" configured in UAM</li>
                  <li>Content: The text you want to use for visitors.</li>
                </ul>
                <br>
                <li>And that\'s it! Only visitors registered and whose registration has not been confirmed will see this additional index page.</li>
              </ol>
            </li>
          </ul>';
$lang['UAM_Default_GhstDemotion_Txt'] = 'Sorry [username], your account has been deprecated due to a too long time passed since your last visit at [mygallery]. Please, use the following link to reconfirm your account:';
$lang['UAM_Default_AdminValidation_Txt'] = 'Hello [username]! Thank you for registering and welcome to [mygallery].

Your account has been manually confirmed by the webmaster of [mygallery]. You may now log in at [myurl] and make any appropriate changes to your profile.';
$lang['UAM_Default_ValidationTimeout_Txt'] = 'Sorry, your account has been deleted because you have not confirmed your registration in requested time ([Kdays] days). Please, retry registration with a valid and non blocked email account.';
$lang['UAM_Default_CfmMail_Remail_Txt1'] = 'Hello [username].
		
This is a reminder message because you registered on our gallery [mygallery] but you do not confirm your registration and your confirmation key has expired. To still allow you to access to our gallery, your confirmation period has been reset. You have again x days to confirm your registration.

Note: After this period, your account will be permanently deleted.';
$lang['UAM_Default_CfmMail_Remail_Txt2'] = 'Hello [username].

This is a reminder message because you registered on our gallery [mygallery] but you do not confirm your registration and your confirmation key will expire. To allow you access to our gallery, you have x days to confirm your registration by clicking on the link in the message you should have received when you registered.

Note: After this period, your account will be permanently deleted.';
$lang['UAM_Default_CfmMail_Custom_Txt2'] = 'Incorrect / expired activation key or account already validated.';
$lang['UAM_RejectConnexion'] = 'Reject user\'s connexion until registration is confirmed';
$lang['UAM_Default_RejectConnexion_Txt'] = 'Sorry, your registration is not validated yet, so you can\'t connect the gallery now.';
$lang['UAM_Tracking registered users'] = 'Tracking registered users';
$lang['UAM_Tracking confirmations'] = 'Tracking confirmations';
// --------- End: New or revised $lang ---- from version 2.30.3


// --------- Starting below: New or revised $lang ---- from version 2.40
$lang['UAM_AdminValidationMail_Subject'] = 'Customize manual validation email subject';
$lang['UAM_ConfirmMail_Subject'] = 'Customize registration confirmation email subject';
$lang['UAM_ConfirmMail_ReMail_Subject'] = 'Customize registration confirmation reminder email subject';
$lang['UAM_GTReminder_Subject'] = 'Customize manual Ghost Tracker reminder email subject';
$lang['UAM_GTAutomail_Subject'] = 'Customize automatic Ghost Tracker demotion email subject';
$lang['UAM_GTAutomail_Text'] = 'Customize demotion email text';
$lang['UAM_MailInfo_Subject'] = 'Customize information email subject';
$lang['UAM_Default_ConfirmMail_Subject'] = '[username] registration confirmation on [mygallery]';
$lang['UAM_Default_ConfirmMail_Remail_Subject'] = 'Reminder - [username] registration confirmation on [mygallery]';
$lang['UAM_Default_InfoMail_Subject'] = '[username] - Your registration information on [mygallery]';
$lang['UAM_Default_GTAutoMail_Subject'] = '[username] - Your account has been demoted on [mygallery]';
$lang['UAM_Default_GTReminder_Subject'] = '[username] - A long time passed since your last visit on [mygallery]';
$lang['UAM_Default_AdminValidationMail_Subject'] = '[username] - Registration validated on [mygallery]';
// --------- End: New or revised $lang ---- from version 2.40


// --------- Starting below: New or revised $lang ---- from version 2.40.4 and 2.30.7
$lang['UAM_mail_exclusion_error'] = 'The Piwigo\'s option "The email address is mandatory for all users" has been disabled while the UserAdvancedManager\'s (UAM) plugin option "Exclusion of mail domains" remained active. This combination is illogical and not compatible!<br><br>
Please, Reactivate the Piwigo\'s option "The email address is mandatory for all users" to be able then to disable UAM\'s option "Exclusion of mail domains" if that\'s what you want.<br><br>
Note: This message will disappear after you have made the necessary correction and reloaded the admin page.<br><br>';
// --------- End: New or revised $lang ---- from version 2.40.4 and 2.30.7


// --------- Starting below: New or revised $lang ---- from version 2.41.0
$lang['UAM_Subject admin validation for %s'] = 'Registration of %s waits for validation';
$lang['UAM_Manual_validation_needed_for %s'] = 'The user %s has registered and awaits for manual validation by an admin.';
$lang['UAM_Customize_messagesandmails'] = 'Customize the messages and mails';
$lang['UAM_Change'] = 'Change the Group/Status/Privacy Level of the users who have been confirmed';
// --------- End: New or revised $lang ---- from version 2.41.0

$lang['UAM_group "%s" updated'] = 'For best performance, the group %s was automatically set as the default group.';
$lang['personal_content'] = 'Content';

$lang['UAM_AddURL2Mail'] = 'Add the URL of the gallery at the end of emails (like a signature)';
?>