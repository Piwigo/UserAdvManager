<?php
// GhostTracker Tab
$lang['UAM_gtTitle_d'] = 'When Ghost Tracker is enabled and initialized, you will find below the list of registered visitors who have not returned since x days. &quot;x&quot; is the number of days configured in the General Setup tab. In addition, you will find a column indicating whether an email reminder has been sent to targeted visitors. So, you can see at a glance and treat visitors who have not taken account of the reminder.<br/><br/>In this view, you can:
<br/><br/>
- Manually delete accounts <b>(manual drain)</b>
<br/>
- Generate email reminder <b>with resetting the last visit date</b>. This allows to give a wildcard to targeted visitors. If the visitor has already received a reminder, nothing prevents to resent a new mail which will reset again, in fact, the last visit date.
<br/><br/>
<b>Table Sorting Function</b>: You can sort the data displayed by clicking on the column headers. Hold the SHIFT key to sort up to 4 simultaneous columns.';


// Userlist tab
$lang['UAM_userlistTitle_d'] = 'This page is for information to the administrator. It displays a list of all users registered on the gallery showing the date and number of days since their last visit. The list is sorted in ascending order of number of days.
<br/><br/>
<b><u>Only when the Ghost Tracker is active</u></b>, the number of days without a visit appears as the following color code, according to the maximum set in the Ghost Tracker options:
<br/>
- <b style=&quot;color: lime;&quot;>Green</b> : When the user has visited the gallery <b style=&quot;color: lime;&quot;><u>less than 50%</u></b> of the maximum indicated in the Ghost Tracker.<br/>
- <b style=&quot;color: orange;&quot;>Orange</b> : When the user has visited the gallery <b style=&quot;color: orange;&quot;><u> between 50% and 99% </u></b> of the maximum indicated in the Ghost Tracker.<br/>
- <b style=&quot;color: red;&quot;>Red</b> : When the user has visited the gallery <b style=&quot;color: red;&quot;><u>for more than 100%</u></b> of the maximum indicated in the Ghost Tracker. <b><u>In this case, the user must also appear in the Ghost Tracker table.</u></b><br/>
<br/>
Example :
<br/>
The maximum period of Ghost Tracker is configured to 100 days.
<br/>
A user will appear in green if he visited the gallery for less than 50 days, in orange if his last visit took place between 50 and 99 days and red for 100 days and above.
<br/><br/>
<b>NOTE</b>: The list does not display who have not confirmed their registration (if the option of confirming the registration is activated). These users are then managed in a special way in the &quot;Tracking confirmations&quot; tab.
<br/><br/>
<b>Table Sorting Function</b>: You can sort the data displayed by clicking on the column headers. Hold the SHIFT key to sort up to 4 simultaneous columns.';


// UserManagement tab
$lang['UAM_usermanTitle_d'] = 'When limiting the deadline for registration is enabled, you will find below the list of users whose confirmation of registration is expected, <b style=&quot;text-decoration: underline;&quot;>whether or not</b> they are in time to confirm.<br/><br/>
The registration date is displayed in green when the user concerned is below the time limit to confirm his registration. In this case, the confirmation key is still valid and we can send an email with or without a new confirmation key.<br/><br/>
When the registration date appears in red, the confirmation period has expired. In this case, you must send an email with regeneration of confirmation key if you want to enable the user to confirm their registration.<br/><br/>
In all cases, it is possible to manually force the confirmation.<br/><br/>
In this view, you can:
<br/><br/>
- Manually delete accounts <b>(manual drain)</b>
<br/>
- Generate email reminder <b>without</b> generating a new key. Warning: Send an email reminder to targeted visitors. This function does not reset the date of registration of targeted visitors and the timeout is still valid.
<br/>
- Generate email reminder <b>with</b> generating a new key. Warning : Send an email reminder to targeted visitors. This function also resets the date of registration of targeted visitors which equates to extend the deadline for confirmation.
<br/>
- Submit a registration awaiting confirmation manually even if the expiry date has passed <b>(forcing confirmation)</b>.
<br/><br/>
<b>Table Sorting Function</b>: You can sort the data displayed by clicking on the column headers. Hold the SHIFT key to sort up to 4 simultaneous columns.';
?>