<?php
// GhostTracker Options section
$lang['UAM_GT_MainTitle_d'] = '
- Automatic or manual management of ghost users<br/>
- E-mailing<br/>
...
';
$lang['UAM_ghosttrackerTitle_d'] = 'Also called &quot;Ghost Tracker&quot;, when this function is activated, you can manage your visitors depending on the frequency of their visits. 2 operating modes are available:<br/><br/>
- Manual management : When the time between 2 visits is reached,, the visitor appears in the &quot;Ghost Tracker&quot; table where you will be able to remind visitors via email or delete him.<br/><br/>
- Automated management : When the period between 2 successive visits is reached, the visitor is automatically deleted or moved into a wait group and/or status. In this second case, an information email can be sent to him.<br/><br/>
<b style=&quot;color: red;&quot;>Important note : If you enable this feature for the first time or you have reactivated after a long period off during which new visitors are registered, you must initialize or reset the Ghost Tracker (see corresponding instructions on &quot;Ghost Tracker&quot; tab).</b>';
$lang['UAM_GTReminder_Subject_d'] = 'Enter here your customized manual Ghost Tracker reminder email subject.<br/>
By default, the field has a generic text in English but you can change it and use the translation tags [lang =?] of the Extended Description plugin if installed.
<br/><br/>
The following additional customizations tags are available without using the Extended Description plugin:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
';
$lang['UAM_gttextTitle_d'] = 'Enter the text you want to appear in the email reminder to prompt the user to return to visit your gallery (NB: The text pre-filled with the installation of the plugin is provided as an example).
<br/><br/>
Further customize the content with special inserted tags:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.<br/>
- <b style=&quot;color: red;&quot;>[days]</b> to insert the maximum numbers of days between two visits.
<br/><br/>
To use multiple languages, you can use the Extended description plugin\'s tags if it is active.';
$lang['UAM_GTAutoTitle_d'] = 'This option allows to apply rules for automated management of ghosts users.
<br/><br/>Basic Principle: A user who reaches the maximum time between visits <b><u>and</u></b> has already been notified by email is considered as expired. Then you can apply automated processing rules such as automatic deletion of expired accounts or demotion by restricting access to the gallery (switch automatically to a restricted group and/or status).
<br/><br/>The triggering of these automation is achieved when connecting users (any user!) to the gallery.';
$lang['UAM_GTAutoDelTitle_d'] = 'This is only valid when the user whose account has expired itself triggers the deletion mechanism (rare but possible). he\'s then disconnected of the gallery and redirected to a page showing the deletion of his account and, possibly, the reasons for this deletion.
<br/><br/>
Further customize the content with special inserted tags:<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.<br/>
<b style=&quot;color: red;&quot;>[username]</b> is not available here because concerned user has been deleted.
<br/><br/>
Custom text for the redirect page can be entered in this field that is compatible with the FCK Editor and, for multi-languages, you can use the tags [lang] of the plugin Extended description if it\'s active.';
$lang['UAM_GTAutoGpTitle_d'] = 'The automatic change of group, status or privacy level is like a demotion of the accounts involved and working on the same principle as the group, status or privacy level of confirmation (see &quot;Setting confirmations of registration&quot;). Therefore be to define a group, status and / or level demoting access to the gallery. If this has already been defined with the use of registration confirmation function, you can use the same group / status / level.<br/><br/>
<b style=&quot;color: red;&quot;>Important note :</b> If a ghost user still has not heard from after the time limit and despite the automatic notification by email (if enabled), he\'s automatically deleted from the database.';
$lang['UAM_GTAutoMailTitle_d'] = 'When an account is expired (group / status / privacy level change demoting the visitor), an email information can be sent to clarify the reasons for this change and the means to recover the initial access to the gallery.
<br/>To do this, a link to reconfirmation of registration is attached to the email (automatic generation of a new confirmation key).<b style=&quot;color: red;&quot;>If the user has already been notified, his account is automatically destroyed.</b> 
<br/><br/>
<b style=&quot;color: red;&quot;>Warning: The use of this function is intimately associated with the confirmation of registration by the user (confirmation by mail) and can not be activated without this option.</b>';
$lang['UAM_GTAutomail_Subject_d'] = 'Enter here your customized automatic Ghost Tracker demotion email subject.<br/>
By default, the field has a generic text in English but you can change it and use the translation tags [lang =?] of the Extended Description plugin if installed.
<br/><br/>
The following additional customizations tags are available without using the Extended Description plugin:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
';
$lang['UAM_GTAutomail_Text_d'] = 'Enter the custom text that also explain the reasons for the demotion, to accompany the confirmation link. The custom text is not mandatory but strongly recommended. In fact, your visitors will not appreciate receiving an email containing only a single link without further explanation. ;-)
<br/><br/>
Further customize the content with special inserted tags:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.
<br/><br/>
To use multiple languages, you can use the Extended description plugin\'s tags if it is active.';
?>