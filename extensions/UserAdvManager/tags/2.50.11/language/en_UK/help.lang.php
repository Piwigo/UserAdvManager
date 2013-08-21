<?php

$lang['UAM_carexcTitle_d'] = 'It may be interesting to prohibit certain characters in usernames (example: refuse login names containing @). This option allows to exclude characters or sequence of characters, events.<br>
NB: The option can also exclude whole words.
<br><br>
<b style=&quot;color: red;&quot;>Warning: This option has no effect on the user names created prior to its activation.</b>';
$lang['UAM_passwTitle_d'] = 'Enabling this option makes mandatory the seizure of a password upon registration, and requires the password chosen by the visitor to meet a minimum level of complexity. If the threshold is not reached, the score achieved and the minimum score to be achieved are displayed, along with recommendations to increase the value of this score.<br><br>
There is field test to measure the complexity of a password, and can afford to get an idea of the score to define complex custom.<br><br>
Note: The score of a password is calculated based on several parameters: length, type of characters used (letters, digits, uppercase, lowercase, special characters). A score below 100 is considered low, from 100 to 500, the complexity is average; beyond 500, the security is excellent.';
$lang['UAM_passwtestTitle'] = 'Testing the complexity of a password';
$lang['UAM_passwtestTitle_d'] = 'Enter the password to test and then click on &quot;Score calculation&quot; to see the result.';
$lang['UAM_passwadmTitle_d'] = 'An administrator can create a user account with or without application of the rule of computing complexity.<br><br>
Note: If the user account created wants to change password and strengthening passwords for users is active, it will be subject to the rule set.';
$lang['UAM_infomailTitle_d'] = 'This option allows to automate sending an information email to a user when he changes his password or email address in his profile page.<br><br>
The content of the message sent is composed of a customizable part to introduce a little welcome note and a fixed part indicating the login name, password and email address of the user.';
$lang['UAM_remailtxt1Title'] = 'Reminder email with new key generated';
$lang['UAM_remailtxt2Title'] = 'Reminder email without new key generated';
$lang['UAM_tipsTitle_d'] = 'Tips and various examples of use';

$lang['UAM_adminconfmailTitle_d'] = 'You can disable this confirmation only for user accounts created by the administrator via Piwigo\'s users management interface.<br><br>
By activating this option, email confirmation for registration will be sent to each user created by admin.<br><br>
By disabling this option (default), only the email information is sent (if &quot;Information email to user&quot; is enabled). In addition, the user created will be <b>considered validated</b> by default.';


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_restricTitle_d'] = '
- Characters exclusion<br>
- Password enforcement<br>
- Email domains exclusion<br>
...
';
$lang['UAM_gtTitle_d'] = 'When Ghost Tracker is enabled and initialized, you will find below the list of registered visitors who have not returned since x days. &quot;x&quot; is the number of days configured in the General Setup tab. In addition, you will find a column indicating whether an email reminder has been sent to targeted visitors. So, you can see at a glance and treat visitors who have not taken account of the reminder.<br><br>In this view, you can:
<br><br>
- Manually delete accounts <b>(manual drain)</b>
<br>
- Generate email reminder <b>with resetting the last visit date</b>. This allows to give a wildcard to targeted visitors. If the visitor has already received a reminder, nothing prevents to resent a new mail which will reset again, in fact, the last visit date.
<br><br>
<b>Table Sorting Function</b>: You can sort the data displayed by clicking on the column headers. Hold the SHIFT key to sort up to 4 simultaneous columns.';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.15.6
$lang['UAM_RedirTitle_d'] = 'This option automatically redirect a registered user to his customization page only at his first connection to the gallery.<br><br>
Please note: This feature does not apply to all registered users. Those with &quot;admin&quot;, &quot;webmaster&quot; or &quot;generic&quot; status are excluded.';
// --------- End: New or revised $lang ---- from version 2.15.6


// --------- Starting below: New or revised $lang ---- from version 2.16.0
$lang['UAM_ghosttrackerTitle_d'] = 'Also called &quot;Ghost Tracker&quot;, when this function is activated, you can manage your visitors depending on the frequency of their visits. 2 operating modes are available:<br><br>
- Manual management : When the time between 2 visits is reached,, the visitor appears in the &quot;Ghost Tracker&quot; table where you will be able to remind visitors via email or delete him.<br><br>
- Automated management : When the period between 2 successive visits is reached, the visitor is automatically deleted or moved into a wait group and/or status. In this second case, an information email can be sent to him.<br><br>
<b style=&quot;color: red;&quot;>Important note : If you enable this feature for the first time or you have reactivated after a long period off during which new visitors are registered, you must initialize or reset the Ghost Tracker (see corresponding instructions on &quot;Ghost Tracker&quot; tab).</b>';
$lang['UAM_GTAutoTitle_d'] = 'This option allows to apply rules for automated management of ghosts users.
<br><br>Basic Principle: A user who reaches the maximum time between visits <b><u>and</u></b> has already been notified by email is considered as expired. Then you can apply automated processing rules such as automatic deletion of expired accounts or demotion by restricting access to the gallery (switch automatically to a restricted group and/or status).
<br><br>The triggering of these automation is achieved when connecting users (any user!) to the gallery.';
$lang['UAM_GTAutoDelTitle'] = 'Custom message on deleted account';
// --------- End: New or revised $lang ---- from version 2.16.0


// --------- Starting below: New or revised $lang ---- from version 2.20.4
$lang['UAM_HidePasswTitle_d'] = 'Choose here if you want to display the password chosen by the visitor in the information email. If you enable the option, the password will then appear in clear text. If you disable the password will not appear at all.';
// --------- End: New or revised $lang ---- from version 2.20.4


// --------- Starting below: New or revised $lang ---- from version 2.20.11
$lang['UAM_gttextTitle_d'] = 'Enter the text you want to appear in the email reminder to prompt the user to return to visit your gallery (NB: The text pre-filled with the installation of the plugin is provided as an example).
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.<br>
- <b style=&quot;color: red;&quot;>[days]</b> to insert the maximum numbers of days between two visits.
<br><br>
To use multiple languages, you can use the Extended description plugin\'s tags if it is active.';
$lang['UAM_infotxtTitle_d'] = 'Enter the introductory text that you want to appear in the information email.
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.
<br><br>
To use multiple languages, you can use the Extended description plugin\'s tags if it is active.';
$lang['UAM_confirmmail_custom1_d'] = 'When the option &quot;Confirmation of registration&quot; is active, this field allows you to customize the <b><u>acceptance text</u></b> on the registration confirmation page displayed when user clicks the confirmation link that was received by email.
<br><br>
After installing the plugin, a standard text is set as an example.
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the related user name.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.
<br><br>
This field is compatible with the FCK Editor and, for multi-languages, you can use the tags [lang] of the plugin Extended description if it\'s active.';
$lang['UAM_confirmmail_custom2_d'] = 'When the option &quot;Confirmation of registration&quot; is active, this field allows you to customize the <b><u>rejectance text</u></b> on the registration confirmation page displayed when user clicks the confirmation link that was received by email.
<br><br>
After installing the plugin, a standard text is set as an example.
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the related user name.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.
<br><br>
This field is compatible with the FCK Editor and, for multi-languages, you can use the tags [lang] of the plugin Extended description if it\'s active.';
$lang['UAM_GTAutoDelTitle_d'] = 'This is only valid when the user whose account has expired itself triggers the deletion mechanism (rare but possible). he\'s then disconnected of the gallery and redirected to a page showing the deletion of his account and, possibly, the reasons for this deletion.
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.<br>
<b style=&quot;color: red;&quot;>[username]</b> is not available here because concerned user has been deleted.
<br><br>
Custom text for the redirect page can be entered in this field that is compatible with the FCK Editor and, for multi-languages, you can use the tags [lang] of the plugin Extended description if it\'s active.';
$lang['UAM_CustomPasswRetrTitle_d'] = 'By default, when a user has lost his password and selects the option of recovery, he receives an email containing only his username and his new password.
<br><br>
Here, you can add text of your choice to be inserted <b><u>before</u></b> the standard information.
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.
<br><br>
To use multiple languages, you can use the Extended description plugin\'s tags if it is active.';
$lang['UAM_USRAutoDelTitle_d'] = 'This is only valid when the user whose account has expired itself triggers the deletion mechanism (rare but possible). he\'s then disconnected of the gallery and redirected to a page showing the deletion of his account and, possibly, the reasons for this deletion.
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.<br>
<b style=&quot;color: red;&quot;>[username]</b> is not available here because concerned user has been deleted.
<br><br>
Custom text for the redirect page can be entered in this field that is compatible with the FCK Editor and, for multi-languages, you can use the tags [lang] of the plugin Extended description if it\'s active.';
// --------- End: New or revised $lang ---- from version 2.20.11


// --------- Starting below: New or revised $lang ---- from version 2.30.0
$lang['UAM_confirmTitle_d'] = '
- Information email generation<br>
- Register confirmation email generation<br>
- Groups, status or privacy level auto joining<br>
- Deadline for confirmation of registration<br>
- Reminder email generation<br>
...
';
$lang['UAM_confirmgrpTitle'] = 'Groups';
$lang['UAM_confirmstatTitle'] = 'Statutes';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>WARNING : Using groups on confirmation requires that you have created at least one users group and is defined &quot;by default&quot; in Piwigo\'s user groups management.</b><br><br>
The groups are validated for use in conjunction with the &quot;Confirmation of registration&quot;';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>WARNING : The use of statuses on confirmation requires that you have kept the &quot;Guest&quot; user with default setting (as user template) for new registered. Note you can set any other user as a template for new registered. Please refer to the Piwigo\'s documentation for more details.</b><br><br>
The Statutes are validated for use in conjunction with the &quot;Confirmation of registration&quot;';
$lang['UAM_confirmlevelTitle'] = 'Privacy level';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>WARNING : The use of privacy level requires that you have used them with your pictures. Please refer to the Piwigo\'s documentation for more details.</b><br><br>
The privacy level is validated for use in conjunction with the &quot;Confirmation of registration&quot;';
$lang['UAM_GTAutoGpTitle_d'] = 'The automatic change of group, status or privacy level is like a demotion of the accounts involved and working on the same principle as the group, status or privacy level of confirmation (see &quot;Setting confirmations of registration&quot;). Therefore be to define a group, status and / or level demoting access to the gallery. If this has already been defined with the use of registration confirmation function, you can use the same group / status / level.<br><br>
<b style=&quot;color: red;&quot;>Important note :</b> If a ghost user still has not heard from after the time limit and despite the automatic notification by email (if enabled), he\'s automatically deleted from the database.';
$lang['UAM_GT_MainTitle_d'] = '
- Automatic or manual management of ghost users<br>
- E-mailing<br>
...
';
$lang['UAM_miscTitle_d'] = '
- Registered users monitoring<br>
- Nickname mandatory for guests comments<br>
...
';
$lang['UAM_PwdResetTitle_d'] = 'Enabling this option will add a new feature in the Piwigo\'s user management panel (Users> Manage) that can apply to renew the password for selected users. In addition, a new column is added to show the status of passwords for each of them with the following values:<br>
- Password to be renewed: A password renewal request has been planned.<br>
- Password renewed: The password has been renewed after a request.<br>
- Original Password: The original password chosen at account creation and has never been required for a renewal.<br>
Webmaster, generic and guest accounts are excluded from this function.<br>
These users will be automatically redirected to their customization page at each of their connections until they changed their password and an explicit message will be displayed on this page.';
$lang['UAM_DumpTitle_d'] = 'This allows you to save the entire configuration of the plugin in a file so you can restore it if something goes wrong (wrong manipulation or before an update, for example). By default, the file is stored in this folder ../plugins/UserAdvManager/include/backup/ and is called &quot;UAM_dbbackup.sql&quot;.
<br><br>
<b style=&quot;color: red;&quot;>Warning: The file is overwritten each backup action!</b>
<br><br>
It can sometimes be useful to retrieve the backup file on your computer. For example: To restore to another database, to outsource or to keep multiple save files. To do this, just check the box to download the file.
<br><br>
The recovery from this interface is available only for the local backup file (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql). Downloaded backup file can\'t be restored by this way. To do this, please use your dedicated database management tool (like PhpMyAdmin for MySql database).
<br><br>
<b style=&quot;color: red;&quot;>Warning: After the restore, it is necessary to reload the administration page of the plugin to see the restored settings!</b>';
// --------- End: New or revised $lang ---- from version 2.30.0


// --------- Starting below: New or revised $lang ---- from version 2.30.3
$lang['UAM_mailexcTitle_d'] = 'By default, Piwigo accepts all email addresses in the format xxx@yyy.zz. Enabling this option allows you to exclude certain domains in the format: @ [domain_name].[domain_extension].<br><br>
Examples :<br>
@hotmail.com -> excluding addresses *@hotmail.com<br>
@hotmail -> excluding all addresses *@hotmail*<br><br>
<b style=&quot;color: red;&quot;>Warning - This feature works only if emails are mandatory for registrations! Please see Piwigo\'s configuration options.</b>';
$lang['UAM_userlistTitle_d'] = 'This page is for information to the administrator. It displays a list of all users registered on the gallery showing the date and number of days since their last visit. The list is sorted in ascending order of number of days.
<br><br>
<b><u>Only when the Ghost Tracker is active</u></b>, the number of days without a visit appears as the following color code, according to the maximum set in the Ghost Tracker options:
<br>
- <b style=&quot;color: lime;&quot;>Green</b> : When the user has visited the gallery <b style=&quot;color: lime;&quot;><u>less than 50%</u></b> of the maximum indicated in the Ghost Tracker.<br>
- <b style=&quot;color: orange;&quot;>Orange</b> : When the user has visited the gallery <b style=&quot;color: orange;&quot;><u> between 50% and 99% </u></b> of the maximum indicated in the Ghost Tracker.<br>
- <b style=&quot;color: red;&quot;>Red</b> : When the user has visited the gallery <b style=&quot;color: red;&quot;><u>for more than 100%</u></b> of the maximum indicated in the Ghost Tracker. <b><u>In this case, the user must also appear in the Ghost Tracker table.</u></b><br>
<br>
Example :
<br>
The maximum period of Ghost Tracker is configured to 100 days.
<br>
A user will appear in green if he visited the gallery for less than 50 days, in orange if his last visit took place between 50 and 99 days and red for 100 days and above.
<br><br>
<b>NOTE</b>: The list does not display who have not confirmed their registration (if the option of confirming the registration is activated). These users are then managed in a special way in the &quot;Tracking confirmations&quot; tab.
<br><br>
<b>Table Sorting Function</b>: You can sort the data displayed by clicking on the column headers. Hold the SHIFT key to sort up to 4 simultaneous columns.';
$lang['UAM_usermanTitle_d'] = 'When limiting the deadline for registration is enabled, you will find below the list of users whose confirmation of registration is expected, <b style=&quot;text-decoration: underline;&quot;>whether or not</b> they are in time to confirm.<br><br>
The registration date is displayed in green when the user concerned is below the time limit to confirm his registration. In this case, the confirmation key is still valid and we can send an email with or without a new confirmation key.<br><br>
When the registration date appears in red, the confirmation period has expired. In this case, you must send an email with regeneration of confirmation key if you want to enable the user to confirm their registration.<br><br>
In all cases, it is possible to manually force the confirmation.<br><br>
In this view, you can:
<br><br>
- Manually delete accounts <b>(manual drain)</b>
<br>
- Generate email reminder <b>without</b> generating a new key. Warning: Send an email reminder to targeted visitors. This function does not reset the date of registration of targeted visitors and the timeout is still valid.
<br>
- Generate email reminder <b>with</b> generating a new key. Warning : Send an email reminder to targeted visitors. This function also resets the date of registration of targeted visitors which equates to extend the deadline for confirmation.
<br>
- Submit a registration awaiting confirmation manually even if the expiry date has passed <b>(forcing confirmation)</b>.
<br><br>
<b>Table Sorting Function</b>: You can sort the data displayed by clicking on the column headers. Hold the SHIFT key to sort up to 4 simultaneous columns.';
$lang['UAM_confirmmailTitle_d'] = 'This option allows a user to either confirm registration by clicking on a link received in an email sent upon registration or administrators to manually activate the registration.
<br><br>
In first case, the e-mail is composed of a customizable part to introduce a little welcome note and a fixed part containing the activation link that is generated from a random key that can possibly regenerate through the &quot;Tracking confirmations&quot; tab.
<br><br>
In second case, the validation link is send to the gallery administrators. Visitors have to wait until an administrator confirm them himself by using the validation link or in &quot;confirmation tracking&quot; tab.
<br>
<b style=&quot;color: red;&quot;>NB: Options &quot;Deadline for confirmation of registration limited&quot; and &quot;Remind unconfirmed users  &quot; have to be set to off when admin\'s manual confirmation is enabled.</b>
<br><br>
This option is generally used with the automatic assignment of group and/or statutes. For example, a user who has not confirmed their registration will be set in a specific group of users (with or without restrictions on the gallery) while a user who confirmed his registration shall be set in a &quot;normal&quot; group.';
$lang['UAM_validationlimitTitle_d'] = 'This option allows to limit the validity of confirmation key email sent to new registrants. Visitors who register will have x days of time to confirm their registration. After this period the confirmation link will expire.
<br><br>
This option is used in conjunction with the &quot;Confirmation of registration&quot;
<br><br>
If this option and the option &quot;Remind unconfirmed users&quot; are activated, new options will appear below in this section to enable the automation of unconfirmed users management.';
$lang['UAM_remailTitle_d'] = 'This option allows you to send a reminder email to users registered but have not confirmed their registration on time. It therefore works in conjunction with the &quot;Confirmation of registration&quot;
<br><br>
2 types of emails can be sent: With or without regeneration of the confirmation key. As appropriate, the content of emails can be customized.
<br><br>
Refer to the &quot;Tracking confirmations&quot; tab.
<br><br>
If this option and the option &quot;Deadline for registration confirmation limited&quot; are activated, new options will appear below in this section to enable the automation of unconfirmed users management.';
$lang['UAM_USRAutoTitle_d'] = 'Automatic handling of unconfirmed visitors is triggered each time you connect to the gallery and works as follows:
<br><br>
- Automatic deletion of accounts not confirmed in the allowed time without sending automatic email reminder -> &quot;Deadline for registration confirmation limited&quot; <b><u>enabled</u></b> and &quot;Remind unconfirmed users&quot; <b><u>disabled</u></b>.
<br><br>
- Automatically sending a reminder message with a new generation of confirmation key and automatic deletion of accounts not confirmed in the time after sending the reminder -> &quot;Deadline for registration confirmation limited&quot; <b><u>enabled</u></b> et &quot;Remind unconfirmed users&quot; <b><u>enabled</u></b>.';
$lang['UAM_USRAutoMailTitle_d'] = 'When activated, this function will automatically send personalized content in &quot;Reminder email with new key generated&quot; to visitors who match criteria.';
$lang['UAM_StuffsTitle_d'] = 'This enables an additional UAM block in PWG Stuffs plugin (if installed) to inform your visitors who did not confirm their registration about their condition.
<br><br>
Please refer to the <b>Tips and Examples of Use</b> at the bottom of this page for details.';
$lang['UAM_confirmtxtTitle_d'] = 'Enter the introductory text that you want to appear in the email confirmation of registration.
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> to insert the number of days limit to confirm a registration (&quot;Deadline for registration confirmation limited;&quot; have to be enabled).
<br><br>
To use multiple languages, you can use the Extended description plugin\'s tags if it is active.';
$lang['UAM_remailtxt1Title_d'] = 'Enter the introductory text that you want to appear in the reminder email, in addition to the confirmation key regenerated.
<br><br>
If left blank, the mail reminder will include only the confirmation link. It is therefore strongly advised to take a little explanatory text. (NB: The text pre-filled with the installation of the plugin is provided as an example).
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> to insert the number of days limit to confirm a registration (&quot;Deadline for registration confirmation limited;&quot; have to be enabled).
<br><br>
To use multiple languages, you can use the Extended description plugin\'s tags if it is active.';
$lang['UAM_remailtxt2Title_d'] = 'Enter the introductory text that you want to appear in the reminder email without a confirmation key regenerated.
<br><br>
If left blank, the mail reminder will be empty. It is therefore strongly advised to take a little explanatory text. (NB: The text pre-filled with the installation of the plugin is provided as an example).
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> to insert the number of days limit to confirm a registration (&quot;Deadline for registration confirmation limited; have to be enabled).
<br><br>
To use multiple languages, you can use the Extended description plugin\'s tags if it is active.';
$lang['UAM_AdminValidationMail_d'] = 'When an administrator or Webmaster of the gallery manually confirm registration pending, a notification email is automatically sent to the user. Enter here the text that appears in this email.
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.
<br><br>
To use multiple languages, you can use the Extended description plugin\'s tags if it is active.';
$lang['UAM_RejectConnexion_d'] = 'If activated, new registered users who have not confirm their registration won\'t be able to connect to the gallery. They will be redirected to a special page to inform them of this state.<br><br>
<b style=&quot;color: red;&quot;>Warning - This feature works only in conjunction with confirmation groups! See below to set the groups as required.</b>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Customize here your explanation text for inform unconfirmed users that they won\'t be able to connect the gallery until they have confirmed their registration.
<br><br>
This field is compatible with the FCK Editor and, for multi-languages, you can use the [lang] tags of the Extended description plugin if it\'s active.';
$lang['UAM_Tracking registered users_d'] = 'This activates a table in the &quot;Tracking registered users&quot; tab where are listed registered users on the gallery with the date of their last visit and time spent (in days) since their last visit. Monitoring is purely informative for the administrator of the gallery.';
// --------- End: New or revised $lang ---- from version 2.30.3


// --------- Starting below: New or revised $lang ---- from version 2.40
$lang['UAM_AdminValidationMail_Subject_d'] = 'When an administrator or Webmaster of the gallery manually confirm registration pending, a notification email is automatically sent to the user. Enter here your customized manual validation email subject.<br>
By default, the field has a generic text in English but you can change it and use the translation tags [lang =?] of the Extended Description plugin if installed.
<br><br>
The following additional customizations tags are available without using the Extended Description plugin:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
';
$lang['UAM_ConfirmMail_Subject_d'] = 'Enter here your customized registration confirmation email subject.<br>
By default, the field has a generic text in English but you can change it and use the translation tags [lang =?] of the Extended Description plugin if installed.
<br><br>
The following additional customizations tags are available without using the Extended Description plugin:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Enter here your customized registration confirmation reminder email subject (with or without new key generation).<br>
By default, the field has a generic text in English but you can change it and use the translation tags [lang =?] of the Extended Description plugin if installed.
<br><br>
The following additional customizations tags are available without using the Extended Description plugin:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
';
$lang['UAM_GTReminder_Subject_d'] = 'Enter here your customized manual Ghost Tracker reminder email subject.<br>
By default, the field has a generic text in English but you can change it and use the translation tags [lang =?] of the Extended Description plugin if installed.
<br><br>
The following additional customizations tags are available without using the Extended Description plugin:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
';
$lang['UAM_GTAutomail_Subject_d'] = 'Enter here your customized automatic Ghost Tracker demotion email subject.<br>
By default, the field has a generic text in English but you can change it and use the translation tags [lang =?] of the Extended Description plugin if installed.
<br><br>
The following additional customizations tags are available without using the Extended Description plugin:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
';
$lang['UAM_GTAutoMailTitle_d'] = 'When an account is expired (group / status / privacy level change demoting the visitor), an email information can be sent to clarify the reasons for this change and the means to recover the initial access to the gallery.
<br>To do this, a link to reconfirmation of registration is attached to the email (automatic generation of a new confirmation key).<b style=&quot;color: red;&quot;>If the user has already been notified, his account is automatically destroyed.</b> 
<br><br>
<b style=&quot;color: red;&quot;>Warning: The use of this function is intimately associated with the confirmation of registration by the user (confirmation by mail) and can not be activated without this option.</b>';
$lang['UAM_GTAutomail_Text_d'] = 'Enter the custom text that also explain the reasons for the demotion, to accompany the confirmation link. The custom text is not mandatory but strongly recommended. In fact, your visitors will not appreciate receiving an email containing only a single link without further explanation. ;-)
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.
<br><br>
To use multiple languages, you can use the Extended description plugin\'s tags if it is active.';
$lang['UAM_MailInfo_Subject_d'] = 'Enter here your customized information email subject.<br>
By default, the field has a generic text in English but you can change it and use the translation tags [lang =?] of the Extended Description plugin if installed.
<br><br>
The following additional customizations tags are available without using the Extended Description plugin:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
';
// --------- End: New or revised $lang ---- from version 2.40

$lang['UAM_AddURL2Mail_d'] = 'Enabling this option will add the URL of your gallery at the end of emails generated by the plugin, like a signature.';
?>