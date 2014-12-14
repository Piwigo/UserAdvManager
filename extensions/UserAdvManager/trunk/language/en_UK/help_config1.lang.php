<?php
// Registration options section
$lang['UAM_restricTitle_d'] = '
- Characters exclusion<br/>
- Email domains exclusion<br/>
...
';
$lang['UAM_carexcTitle_d'] = 'It may be interesting to prohibit certain characters in usernames (example: refuse login names containing @). This option allows to exclude characters or sequence of characters, events.<br/>
NB: The option can also exclude whole words.
<br/><br/>
<b style=&quot;color: red;&quot;>Warning: This option has no effect on the user names created prior to its activation.</b>';
$lang['UAM_mailexcTitle_d'] = 'By default, Piwigo accepts all email addresses in the format xxx@yyy.zz. Enabling this option allows you to exclude certain domains in the format: @ [domain_name].[domain_extension].<br/><br/>
Examples :<br/>
@hotmail.com -> excluding addresses *@hotmail.com<br/>
@hotmail -> excluding all addresses *@hotmail*<br/><br/>
<b style=&quot;color: red;&quot;>Warning - This feature works only if emails are mandatory for registrations! Please see Piwigo\'s configuration options.</b>';

?>