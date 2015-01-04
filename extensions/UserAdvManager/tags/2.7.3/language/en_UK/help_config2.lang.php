<?php
// ConfirmMail options section
$lang['UAM_confirmTitle_d'] = '
- Information email generation<br/>
- Register confirmation email generation<br/>
- Groups, status or privacy level auto joining<br/>
- Deadline for confirmation of registration<br/>
- Reminder email generation<br/>
...
';
$lang['UAM_confirmmailTitle_d'] = 'This option allows a user to either confirm registration by clicking on a link received in an email sent upon registration or administrators to manually activate the registration.
<br/><br/>
In first case, the e-mail is composed of a customizable part to introduce a little welcome note and a fixed part containing the activation link that is generated from a random key that can possibly regenerate through the &quot;Tracking confirmations&quot; tab.
<br/><br/>
In second case, the validation link is send to the gallery administrators. Visitors have to wait until an administrator confirm them himself by using the validation link or in &quot;confirmation tracking&quot; tab.
<br/>
<b style=&quot;color: red;&quot;>NB: Options &quot;Deadline for confirmation of registration limited&quot; and &quot;Remind unconfirmed users  &quot; have to be set to off when admin\'s manual confirmation is enabled.</b>
<br/><br/>
This option is generally used with the automatic assignment of group and/or statutes. For example, a user who has not confirmed their registration will be set in a specific group of users (with or without restrictions on the gallery) while a user who confirmed his registration shall be set in a &quot;normal&quot; group.';
$lang['UAM_StuffsTitle_d'] = 'This enables an additional UAM block in PWG Stuffs plugin (if installed) to inform your visitors who did not confirm their registration about their condition.
<br/><br/>
Please refer to the <b>Tips and Examples of Use</b> at the bottom of this page for details.';
$lang['UAM_adminconfmailTitle_d'] = 'You can disable this confirmation only for user accounts created by the administrator via Piwigo\'s users management interface.<br/><br/>
By activating this option, email confirmation for registration will be sent to each user created by admin.<br/><br/>
By disabling this option (default), only the email information is sent (if &quot;Information email to user&quot; is enabled). In addition, the user created will be <b>considered validated</b> by default.';
$lang['UAM_AdminValidationMail_Subject_d'] = 'When an administrator or Webmaster of the gallery manually confirm registration pending, a notification email is automatically sent to the user. Enter here your customized manual validation email subject.<br/>
By default, the field has a generic text in English but you can change it and use the translation tags [lang =?] of the Extended Description plugin if installed.
<br/><br/>
The following additional customizations tags are available without using the Extended Description plugin:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
';
$lang['UAM_AdminValidationMail_d'] = 'When an administrator or Webmaster of the gallery manually confirm registration pending, a notification email is automatically sent to the user. Enter here the text that appears in this email.
<br/><br/>
Further customize the content with special inserted tags:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.
<br/><br/>
To use multiple languages, you can use the Extended description plugin\'s tags if it is active.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Enter here your customized registration confirmation email subject.<br/>
By default, the field has a generic text in English but you can change it and use the translation tags [lang =?] of the Extended Description plugin if installed.
<br/><br/>
The following additional customizations tags are available without using the Extended Description plugin:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
';
$lang['UAM_confirmtxtTitle_d'] = 'Enter the introductory text that you want to appear in the email confirmation of registration.
<br/><br/>
Further customize the content with special inserted tags:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b> to insert the number of days limit to confirm a registration (&quot;Deadline for registration confirmation limited;&quot; have to be enabled).
<br/><br/>
To use multiple languages, you can use the Extended description plugin\'s tags if it is active.';
$lang['UAM_confirmmail_custom1_d'] = 'When the option &quot;Confirmation of registration&quot; is active, this field allows you to customize the <b><u>acceptance text</u></b> on the registration confirmation page displayed when user clicks the confirmation link that was received by email.
<br/><br/>
After installing the plugin, a standard text is set as an example.
<br/><br/>
Further customize the content with special inserted tags:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the related user name.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.
<br/><br/>
This field is compatible with the FCK Editor and, for multi-languages, you can use the tags [lang] of the plugin Extended description if it\'s active.';
$lang['UAM_confirmmail_custom2_d'] = 'When the option &quot;Confirmation of registration&quot; is active, this field allows you to customize the <b><u>rejectance text</u></b> on the registration confirmation page displayed when user clicks the confirmation link that was received by email.
<br/><br/>
After installing the plugin, a standard text is set as an example.
<br/><br/>
Further customize the content with special inserted tags:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the related user name.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.
<br/><br/>
This field is compatible with the FCK Editor and, for multi-languages, you can use the tags [lang] of the plugin Extended description if it\'s active.';
$lang['UAM_RejectConnexion_d'] = 'If activated, new registered users who have not confirm their registration won\'t be able to connect to the gallery. They will be redirected to a special page to inform them of this state.<br/><br/>
<b style=&quot;color: red;&quot;>Warning - This feature works only in conjunction with confirmation groups! See below to set the groups as required.</b>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Customize here your explanation text for inform unconfirmed users that they won\'t be able to connect the gallery until they have confirmed their registration.
<br/><br/>
This field is compatible with the FCK Editor and, for multi-languages, you can use the [lang] tags of the Extended description plugin if it\'s active.';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>WARNING : Using groups on confirmation requires that you have created at least one users group and is defined &quot;by default&quot; in Piwigo\'s user groups management.</b><br/><br/>
The groups are validated for use in conjunction with the &quot;Confirmation of registration&quot;';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>WARNING : The use of statuses on confirmation requires that you have kept the &quot;Guest&quot; user with default setting (as user template) for new registered. Note you can set any other user as a template for new registered. Please refer to the Piwigo\'s documentation for more details.</b><br/><br/>
The Statutes are validated for use in conjunction with the &quot;Confirmation of registration&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>WARNING : The use of privacy level requires that you have used them with your pictures. Please refer to the Piwigo\'s documentation for more details.</b><br/><br/>
The privacy level is validated for use in conjunction with the &quot;Confirmation of registration&quot;';
$lang['UAM_validationlimitTitle_d'] = 'This option allows to limit the validity of confirmation key email sent to new registrants. Visitors who register will have x days of time to confirm their registration. After this period the confirmation link will expire.
<br/><br/>
This option is used in conjunction with the &quot;Confirmation of registration&quot;
<br/><br/>
If this option and the option &quot;Remind unconfirmed users&quot; are activated, new options will appear below in this section to enable the automation of unconfirmed users management.';
$lang['UAM_remailTitle_d'] = 'This option allows you to send a reminder email to users registered but have not confirmed their registration on time. It therefore works in conjunction with the &quot;Confirmation of registration&quot;
<br/><br/>
2 types of emails can be sent: With or without regeneration of the confirmation key. As appropriate, the content of emails can be customized.
<br/><br/>
Refer to the &quot;Tracking confirmations&quot; tab.
<br/><br/>
If this option and the option &quot;Deadline for registration confirmation limited&quot; are activated, new options will appear below in this section to enable the automation of unconfirmed users management.';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Enter here your customized registration confirmation reminder email subject (with or without new key generation).<br/>
By default, the field has a generic text in English but you can change it and use the translation tags [lang =?] of the Extended Description plugin if installed.
<br/><br/>
The following additional customizations tags are available without using the Extended Description plugin:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
';
$lang['UAM_remailtxt1Title_d'] = 'Enter the introductory text that you want to appear in the reminder email, in addition to the confirmation key regenerated.
<br/><br/>
If left blank, the mail reminder will include only the confirmation link. It is therefore strongly advised to take a little explanatory text. (NB: The text pre-filled with the installation of the plugin is provided as an example).
<br/><br/>
Further customize the content with special inserted tags:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b> to insert the number of days limit to confirm a registration (&quot;Deadline for registration confirmation limited;&quot; have to be enabled).
<br/><br/>
To use multiple languages, you can use the Extended description plugin\'s tags if it is active.';
$lang['UAM_remailtxt2Title_d'] = 'Enter the introductory text that you want to appear in the reminder email without a confirmation key regenerated.
<br/><br/>
If left blank, the mail reminder will be empty. It is therefore strongly advised to take a little explanatory text. (NB: The text pre-filled with the installation of the plugin is provided as an example).
<br/><br/>
Further customize the content with special inserted tags:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b> to insert the number of days limit to confirm a registration (&quot;Deadline for registration confirmation limited; have to be enabled).
<br/><br/>
To use multiple languages, you can use the Extended description plugin\'s tags if it is active.';
$lang['UAM_USRAutoTitle_d'] = 'Automatic handling of unconfirmed visitors is triggered each time you connect to the gallery and works as follows:
<br/><br/>
- Automatic deletion of accounts not confirmed in the allowed time without sending automatic email reminder -> &quot;Deadline for registration confirmation limited&quot; <b><u>enabled</u></b> and &quot;Remind unconfirmed users&quot; <b><u>disabled</u></b>.
<br/><br/>
- Automatically sending a reminder message with a new generation of confirmation key and automatic deletion of accounts not confirmed in the time after sending the reminder -> &quot;Deadline for registration confirmation limited&quot; <b><u>enabled</u></b> et &quot;Remind unconfirmed users&quot; <b><u>enabled</u></b>.';
$lang['UAM_USRAutoDelTitle_d'] = 'This is only valid when the user whose account has expired itself triggers the deletion mechanism (rare but possible). he\'s then disconnected of the gallery and redirected to a page showing the deletion of his account and, possibly, the reasons for this deletion.
<br/><br/>
Further customize the content with special inserted tags:<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.<br/>
<b style=&quot;color: red;&quot;>[username]</b> is not available here because concerned user has been deleted.
<br/><br/>
Custom text for the redirect page can be entered in this field that is compatible with the FCK Editor and, for multi-languages, you can use the tags [lang] of the plugin Extended description if it\'s active.';
$lang['UAM_USRAutoMailTitle_d'] = 'When activated, this function will automatically send personalized content in &quot;Reminder email with new key generated&quot; to visitors who match criteria.';
?>