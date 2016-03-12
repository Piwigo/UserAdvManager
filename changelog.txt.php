<?php
/*
Plugin Name: UserAdvManager
** Change log **
***************************************
***** Plugin history (branch 2.10)*****
***************************************

-- 2.10.0-beta : Initial beta release for Piwigo compatibility
-- 2.10.1-beta : Small correction on generated path
-- 2.10.2-beta : Bug resolved on register validation page

-- 2.10.3 : Final and fully functional release
						Bug resolved on plugin activation

-- 2.10.4 : Bug fixed on profiles update

-- 2.10.5 : Improved code on profiles update

-- 2.10.6 : Old language packs (iso) deleted (forget from PWG 1.7.x version)

-- 2.10.7 : Bug fixed on user's validation email sending

-- 2.10.8 : ConfirmMail page looks better (Sylvia theme only)
						Improved code for checking author on guest comments

-- 2.10.9 : Bug fixed - Missing english translation
						Bug fixed - Notice on forbidden characters function use
						Bug fixed - Audit on forbidden characters in username didn't work
						Adding of email provider exclusion (like *@hotmail.com) - Warning ! -> Known bug : This feature doesn't work on user profile page. So, already registered users can change their email address to a forbiden one.

-- 2.10.9a : Email provider exclusion is no longer case sensitive

-- 2.10.9b : Bug fixed - Home icon wasn't linked to gallery url in ConfirmMail page. If GALLERY_URL is not set, Home icon gets the pwg root path.

-- 2.10.9c : Bug fixed - If Email provider exclusion is set off, new registered user will have a PHP notice on "Undefined variable: ncsemail"

-- 2.10.9d : Code simplification - need no more ""template"" sub-directory in plugin directory for enhance "back link" icon in ConfirMail.tpl

-- 2.10.9e : Compatibility improvement with PHP 5.3 - Some old functions will be deprecated like :
							ereg replaced by preg_match
							eregi replace by preg_match with "i" moderator
							split replace by preg_split
				
-- 2.10.9f : Compatibility bug fixed when used with DynamicRecentPeriod plugin


***** Plugin history (branch 2.11)***** 

-- 2.11.0 : New tabsheet menu to manage ConfirMail functions (setting a timeout without validation, Cleanup expired user's accounts, Force confirmation, Renew validation key, list unvalidated users,...)
						Beautify plugin's main admin panel
						
-- 2.11.1 : Bug fixed with install and upgrade functions
						Language files correction

-- 2.11.2 : Bug fixed on bad query for unvalidated users display in unvalidated users list
						Bug fixed : Sql syntax error on plugin activation

-- 2.11.3 : On Patricia's request (french forum and bug 1173), the unvalidated users management tab shows users according with the settings of unvalidated group and / or unvalidated status.
						Feature 1172 added : Email providers exclusion list can be set with CR/LF between each entry. The comma seperator (,) is still mandatory.
						Bug 1175 fixed : Bad translation tag in french language file.
						Improvement of unvalidated users management tab (feature 1174)- Expired users are displayed in red color text.

-- 2.11.4 : Bug 1177 fixed : Width of excluded email providers list reset to ancient value (80 col)
						Bug 1179 fixed : Adding a notice in plugin inline documentation for use of validation groups and status. A default group must be set in Piwigo's groups settings and the "Guest" (or another user) must be set as default for status values.
						Bug 1182 fixed : Language tag missing in confirmation email generation 

-- 2.11.5 : Bug 1195 fixed : Registration displays the good title


***************************************
***** Plugin history (branch 2.12)*****
***************************************

-- 2.12.0 : Bug 1206 fixed : All plugin functionnalities work in user's profile page
            Plugin's core code and admin panel refactoring
            Password control and enforcement : A complexity score is computed on user registration. If this score is less than the goal set by admin, the password choosen is rejected.
            Feature 1194 "Ghost Tracker" added : New plugin tab displays users who don't comes back to the gallery since x days. Ability to send email reminders and to delete reminded but "dead" users. It's the reason why this feature is called "Ghost Tracker".

-- 2.12.1 : Rollback on admin panel improvement (it was a bad idea)

-- 2.12.2 : Bug 1221 fixed - Adding of a new funtion to populate the lastvisit table on Ghost Tracker activation
            Bug 1224 fixed - Error in database after plugin activation
            Bug 1225 fixed - "Reminder" status don't change from "false" to "true" after the sent of a reminder email
            Some code beautify (SQL requests and HTML 4 strict for tpl)

-- 2.12.3 : Bug 1226 fixed - "duplicate key error" when lastvisit table is not empty and on using Ghost Tracker init function

-- 2.12.4 : Adding a password field control for SendMail2User - Neighborhood plugin compatibility improvement 
            Bug 1229 fixed - Email was no longer mandatory when plugin was active, even if Piwigo's email madatory option was set. 

-- 2.12.5 : Bug 1233 fixed -  "duplicate key error" when a user wants to register with an existing username. In fact, all standard Piwigo's register controls didn't work when plugin was activated. That fixes this too.
            Adding DE, ES and IT languages. All translations are not finalized and could be improved.
            Adding of description.txt file in language directories.

-- 2.12.6 : Bug 1236 fixed -  Admins was unable to add a new user in the user_list page.
            Beginning of IT translations
            
-- 2.12.7 : Bug 1238 fixed - Simple custom email text wasn't send when Extended Description plugin wasn't set
            Bug 1245 fixed - Semicolons (;) are no longer allowed in text areas (mail info text, ConfirmMail text, reminder text,...). They'll be replaced by dots (.).
            Bug 1248 fixed - Php notice on user registration with a forbidden email domain
            Bug 1250 fixed - Email provider didn't work after the third exclusion in list
            Escaping all special characters typed in login name and recover them


***************************************
***** Plugin history (branch 2.13)*****
***************************************
 
-- 2.13.0 : Bug 1246 fixed - Extended Description tags are working again ! Caution : The language used and saved in database is the one configured by default in the visitor's browser and not the language given by Language Switch.
            Evolution 1239 - New option to add a new tab that shows the number of days since their last visit for each registered user.
            Bug 1257 fixed - If email exclusion list begins with a CR-LF, an informative warning message is displayed (I was unable to delete automatically this CR-LF).
            Bug 1259 fixed - PHP notice on user addition by admin in user_list page.
            Bug 1260 fixed - Username case sensitivity is now fully functionnal in all users entries (user registration and admin panel)
            Evolution 1273 - Adding of reminder field in advanced user management tab. This allows to see if a reminder have already been send.
            Evolution 1292 - Adding of navigation bar in tabs where users are listed (when more than 1 page is needed to display users).
            Code refactory and improvements.
            Translations improvements.

-- 2.13.1 : Bug 1302 fixed - Re-coded double email check on registration.
            Bug 1304 fixed - Adding of plugin version in plugin admin panel title.

-- 2.13.2 : Bug 1308 fixed - Reminder emails have the good translated subject.

-- 2.13.3 : Bug 1309 fixed - Forbidden characters in login name work fine again.
            Bug 1340 fixed - Explanation improvement for option "Nickname is mandatory for comments" 
            Bug 1342 fixed - Calculation between last visit and today is ok and displays the good color in user list.
            Italian language improvement (thx to Rio)

-- 2.13.4 : Add of obsolete files management
            Bug 1303 and 1387 fixed - Due to a bug in Piwigo's 2.0.8 switch_lang() function, the email contents using Extended Description tags wasn't taking user's language in account. A first fix is now set for the current 2.0.8 Piwigo's version and another one is ready to work for the next Piwigo's release.
            Bug 1444 fixed
            Bug 1445 fixed - The plugin's administration panel have been all reviewed and improved with text simplification and display enhancement.
            Bug 1463 fixed
            
            *** Feature temporarily postponed in a later version due to problems with ";" in text fields *** Add compatibility with FCK Editor plugin for email text fields


***************************************
***** Plugin history (branch 2.14)*****
***************************************

-- 2.14.0 : Bug 1308 refixed - Piwigo 2.0.9 fixes the bug on switch_lang() function so the initial UAM fix is no longer needed 
            Evolution 1392 - No more confirmation email for admins profile changing 
            Evolution 1465 - Plugin's configuration data are now serialized in database
            Bug 1466 fixed - The plugin version is correctly displayed on Ghost Tracker tab
            Bug 1468 fixed - Java error (thx to cljosse)
            Evolution 1485 - The admin's can choose if the validation of registration have to be sent to users created by them
            Improving obsolete files cleaning
            Evolution 1488 - When an admin creates an account an information email is always sent to created user
            Code simplification - All variables are changed from "UserAdvManager" to "UAM"

-- 2.14.1 : Bug 1497 fixed - Using users tracker without Ghost Tracker is now OK


***************************************
***** Plugin history (branch 2.15)*****
***************************************

-- 2.15.0 : Plugin compatibility for Piwigo 2.1
            Bug 1467 fixed - FCK Editor's functionnalities are available on registration's confirmation return page customization fields
            Bug 1474 fixed - Messages on registration's confirmation return page (ConfirmMail.tpl) are customizable 
            Bug 1508 fixed - Plugin's name is now UserAdvManager (deletion of "nbc_" in code and PEM)
            Bug 1551 fixed - Database upgrade improvement

-- 2.15.1 : Bug 1571 fixed - Missing translation tag
            Bug 1572 fixed - Fix unable to read resource: "ConfirmMail.tpl"
            Bug 1574 fixed - Beautifying ConfirmMail page
            Bug 1576 fixed - Compatibility with other database systems than MySql like PostgreSql or Sqlite. Using Piwigo's pwg_db_### integrated functions.
            Bug 1586 fixed - Links to official forum topic support and bugtacker were added in plugin's admin page

-- 2.15.2 : Bug 1551 re-fixed - There was some problems remaining with old version upgrades
            Some translations revisited
            Bug 1655 fixed - Navigation bar is usefull again
            
-- 2.15.3 : Quick update to fix a database upgrade issue

-- 2.15.4 : Bug 1310 fixed - UAM tables are now sortable
            Bug 1656 fixed - New register validation mode: Manual validation by admin
            Bug 1687 fixed - Login case sensitivity is no more used in this plugin because already set in Piwigo's core
            Bug 1727 partially fixed - New option to redirect users to profile page after their first login only.
              Known problem: The redirection doesn't work after registration and after confirmation page (if ConfirmMail is enabled)
                             The redirection applies to already registered users including admins, webmaster and generic status.
            Bug 1789 fixed - Escaping double quotes in text fields
            Bug 1790 fixed - Validation tracking tab is set when correct options are set
            Bug 1795 fixed - Fixes rules using email information and/or email of validation

-- 2.15.5 : Bug 1693 fixed - Multi-languages are available for ConfirmMail customization (using Extended Description plugin)
            Bug 1727 fixed - The redirection does not appli to admins, webmaster and generic users.
            Bug 1807 fixed - Textareas are resized according the screen resolution
            Bug 1808 fixed - The Tracking users table is ordered by default on "LastVisit" field (last in at top) 
            Bug 1809 fixed - Addition of a direct link to user's profile in all UAM tables. The link gives a new window
            Bug 1810 partially fixed - Auto login is not performed after visitors have validated their registration but the "home" button changes his link to redirect to identification page when the redirection option is set. Note: The redirection to profile.php doesn't work because I was unable to use the log_user() function on ConfirmMail page. This feature is still under investigation to perform the best way.

-- 2.15.6 : Bug 1819 fixed - Wrong help text on redirection function
            Bug 1821 fixed - Cleanup of old deprecated functions slags (Case sensitivity on logins)
            Bug 1834 fixed - Improving plugin installation and uninstallation process

-- 2.15.7 : Bug 1869 fixed - Compatibility with Adult_Content installation process

-- 2.15.8 : Bug 1935 fixed - Fatal error on ConfirmMail page when Extended Description plugin is not used
            Bug 1936 fixed - Bad home link in ConfirmMail page when gallery URL is not set
            small CSS improvement (thx to Gotcha)

-- 2.15.9 : Bug 2010 fixed - No confirmation email when information email is not set

-- 2.15.10 : Bug 2050 fixed - Compatibility with Captcha


***************************************
***** Plugin history (branch 2.16)*****
***************************************
-- 2.16.0 : Bug 1585 fixed - UAM version is set in database to improve future upgrades
            Bug 2011 fixed - Text fields are no longer locked if related option button is not set and saved. Now this fields and unused options are hidden
            Bug 2046 fixed - Using Piwigo's $conf['insensitive_case_logon'] = true option works again with UAM
            Bug 2053 fixed - Manual validation by admins wasn't working correctly
            Bug 2054 fixed - Add of customized email notification to validated users when admins validate them manually 
            Bug 1430, 1840, 2056 fixed - Automated tasks are available to delete or downgrade ghost users with or without email notification
            Add of Latvian (lv_LV) translation (Thx to Aivars Baldone)

**************************************************************
***** Plugin history (branch 2.20 - Piwigo 2.2 compliant)*****
**************************************************************
-- 2.20.0 : Compliance with Piwigo 2.2
            Bug 1479 fixed - New feature : Add of a dedicated UAM block in PWG Stuffs plugin to inform unvalidated users on their status 
            Bug 1666 fixed - New feature : Customizing "lost password" email
            Bug 2045 fixed - New feature : Special tags insertion in text fields. The tags actually available are [username] (insert current user username),[mygallery] (insert current gallery title), [myurl] (insert gallery url if set in Piwigo's configuration options).
            Bug 2055 fixed - New automated task for unvalidated registers (auto email reminder sent and auto deletion if already reminded).
            Bug 2072 fixed - Remove sort on "difference in days" in user tracking tab
            Bug 2140 fixed - English sentence corrections
            Bug 2186 fixed - JQuery accordion menu when no users are listed in UAM tables
            Bug 2188 fixed - Avoid translation flags conflicts
            Bug 2192 fixed - GT Automated tasks improvement and refactory
            Bug 2203 fixed - [username] special flag is not supported in lost password email customization

-- 2.20.1 : Bug 2254 fixed - Plugin installation crashes when installing from scratch
            Bug 2255 fixed - Error in jQuery path

-- 2.20.2 : Bug 2256 fixed - Error on upgrade from version 2.20.0 to 2.20.1

-- 2.20.3 : Bug 2257 fixed - Improve admin panel display with clear theme
            Bug 2258 fixed - New feature to backup UAM configuration and personnal settings

-- 2.20.4 : Bug 2265 fixed - Add new option to display or not user's password in information email

-- 2.20.5 : Bug 2287 fixed - The UAM block for PWG_Stuffs is correctly displayed (stuffs_module directory was missing)

-- 2.20.6 : Improve database update process
            Bug 2289 fixed - "Password in clear text in the information email" was working in a reverse logic

-- 2.20.7 : Use pwg_db_real_escape_string() instead of addslashes()
            Database upgrade process simplied (using version_compare() and code refactoring)
            Bug 2253 fixed - New feature to allow comments on pictures only for specific users (who belong to a group) when "comments for all" is disabled

-- 2.20.8 : Remove all options related to comments because they are processed in new "Comments Access Manager" plugin.

-- 2.20.9 : Bug fixed on installation from scratch (unable to save config)

-- 2.20.10 : Bug 2324 fixed - New feature : Add [days] autotext flag to insert maximum numbers of days between two visits set in plugin's GhostTracker in GhostTracker reminder email.

-- 2.20.11 : Bug 2336 fixed - New feature : Add [Kdays] autotext flag to insert the number of days until expiration.

**************************************************************
***** Plugin history (branch 2.30 - Piwigo 2.3 compliant)*****
**************************************************************
-- 2.30.0 : Piwigo 2.3.0 compliant
            Bug 2415 fixed - New feature : Set automatically privacy level for users who have validated or not their registration. Automated task available.
            Bug 2437 fixed - New feature : Request password renewal for selected users in Piwigo's users management panel.
            Bug 2445 fixed - Duplicate key MySql error when a user tries to validate his registration twice.
            Bug 2447 fixed - Only for installation from scratch, all text fields pre-filled and given as examples are translated into the language of the webmaster (if the language is supported by the plugin). The default language remains English in case of any failure.
            Bug 2450 fixed - New feature : Backup file restoration.
            Help files remaned and relocated in the language root directory (no more "help" subdirectory) for compliance with the new online translation tool.

-- 2.30.1 : Bug 2455 fixed - Exclusion of specific users (generic and admins users) for password reset function.
            Bug 2451 fixed - Unable to handle Sql errors but control of backup file validity have been enforced.

-- 2.30.2 : Bug 2456 fixed - New feature : Avoid user connexion to the gallery until there has been no validation of registration. Users are redirected to a customizable content page.

-- 2.30.3 : Bug 2524 fixed - The "Information email" option has been moved to "misc options" section of admin panel
            Bug 2525 fixed - "Obligatory email for registrations" option is checked before using the email exclusion option
            Bug 2526 fixed - "PWG stuff" option has been moved one step higher in admin panel
            Bug 2527 fixed - "Confirmation for admins" option has been moved one step higher in admin panel
            Bug 2528 fixed - The word "validation" for "registration validation" has been replaced by "confirmation"
            Bug 2569 fixed - Missing connexion rejected page

-- 2.30.4 : Bug 2580 fixed - DE translation files corrupted

-- 2.30.5 : Bug 2583 fixed - help.lang.php was not loaded correctly
            Bug 2602 fixed - Sql error when Confirmation by admin is set
            Bug 2570 fixed - Adding Wiki link to complete plugin documentation (FR only)
            en_UK reference translation spellchecking
            de_DE translation updated
            fr_FR translation updated

-- 2.30.6 : Bug 2618 fixed - Apache crash when php 5.3.10 is used

-- 2.30.7 : Bug 2658 fixed - Compatibility check between UAM's "email exclusion" option and Piwigo's "Mail address is mandatory for all users" to avoid configuration conflicts.

-- 2.30.8 : Bug 2739 fixed - Error on sending validation email when admins do a manual validation.
            Bug 2740 fixed - Loggin rejection on unvalidated user connection does not work

-- 2.30.9 : Bug 2744 fixed - User connexion rejection does not work if no group/status/privacy is set

**************************************************************
***** Plugin history (branch 2.40 - Piwigo 2.4 compliant)*****
**************************************************************
-- 2.40.0 : Bug 2571 fixed - Piwigo 2.4 compliance : Information email removed on user registration because already managed by Piwigo
            Bug 2572 fixed - Adding a local home icon on ConfirmMail, rejected and del_account pages
            Bug 2591 fixed - Exclusion of Adult_Content generic users from users tracking list
            Bug 2603 fixed - Php notice when user changes his email in his profile if confirmation by email is set
            Bug 2619 fixed - Confirmation email when registered user changes his email was not sent and user not demoted
            Bug 2620 fixed - Display of ConfirmMail, rejected and del_account pages have been improved
            Bug 2621 fixed - Display of ConfirmMail, rejected and del_account pages have been improved for IE8 and IE9 render
            Bug 2622 fixed - Display of ConfirmMail, rejected and del_account pages have been improved for Stripped theme
            Bug 2623 fixed - Ability to customize email subjects (confirmation, information and ghostTracker email)
            Bug 2628 fixed - Php notice when email is not mandatory for registration
            Bug 2631 fixed - Piwigo 2.4 compliance : $conf['gallery_url'] replaced by get_gallery_home_url() for [myurl] tag

-- 2.40.1 : Update de_DE translation (thanks to Joergen)
            Update it_IT translation (thanks to Gdvpixel)

-- 2.40.2 : Update it_IT translation (thanks to Gdvpixel and Ericnet)

-- 2.40.3 : Update it_IT, thanks to : Ericnet
            Update hu_HU, thanks to : samli
            Update es_ES, thanks to : jpr928
            Update lv_LV, thanks to : agrisans
            Update el_GR, thanks to : bas_alba

-- 2.40.4 : Bug 2658 fixed - Compatibility check between UAM's "email exclusion" option and Piwigo's "Mail address is mandatory for all users" to avoid configuration conflicts.
            Update el_GR, thanks to : bas_alba
            Update lv_LV, thanks to : agrisans

-- 2.40.5 : Bug 2739 fixed - Error on sending validation email when admins do a manual validation.
            Bug 2740 fixed - Loggin rejection on unvalidated user connection does not work
            Update de_DE, thanks to : Joergen
            Update el_GR, thanks to : bas_alba
            Update lv_LV, thanks to : agrisans
            Update es_ES, thanks to : jpr928
            Update it_IT, thanks to : Ericnet and virgigiole

-- 2.41.0 : Bug 2741 fixed - User connexion rejection was not working if $conf['guest_access'] = false
            Bug 2744 fixed - User connexion rejection does not work if no group/status/privacy is set
            Feature 2745 - Send an email to admins with a link to validate new registered users 
            Bug 2749 fixed - regex meta-characters are usable in character exclusion in usernames
            New unvalidated user controls are more efficient
            Get admins emails instead of webmaster's for sending validation email
            rejected.php, ConfirmMail.php, GT_del_account.php and USR_del_account.php (and associated templates)are no more used. All messages are displayed on Piwigo's main page
            New simplifed administration panel (thx to flop25 !)
            Update es_ES, thanks to : jpr928
            Update el_GR, thanks to : bas_alba
            Update lv_LV, thanks to : agrisans
            Update de_DE, thanks to : Yogie
            Update it_IT, thanks to : salvatore

-- 2.41.1 : Small admin panel upgrade
            Update lv_LV, thanks to : agrisans
            Add da_DK, thanks to : Kaare

-- 2.41.2 : Bug 2765 fixed - Code cleanup
            Bug 2788 fixed : Warning message on email exclusion no more remains if misconfiguration is fixed. But it's still necessary to refresh the current page once for the warning message to disappear.
            Bug 2796 fixed - Use of php date() function instead od MySql NOW() - Usefull if MySql server is not set at the same date-time as Apache/Php server
            Update da_DK, thanks to : Kaare
            Update it_IT, thanks to : virgigiole
            Update lv_LV, thanks to : agrisans

-- 2.41.3 : Bug 2818 fixed - "Reject user's connexion until registration is confirmed" should not reject admins connections
            Update it_IT, thanks to : Ericnet

-- 2.41.4 : Bug 2829 fixed - Users add manually by admins are considered as valid by default. Admins or users don't have to validated the registration.
            Add tr_TR, thanks to : Nakre
            Update de_DE, thanks to : stephy
            Update tr_TR, thanks to : hakanselcuk and LazBoy

-- 2.41.5 : Bug 2842 fixed - Previews bug 2829 fix did affect the normal registration confirmation.
            Update tr_TR, thanks to : hakanselcuk

**************************************************************
***** Plugin history (branch 2.50 - Piwigo 2.5 compliant)*****
**************************************************************
-- 2.50.0 : Compliance with Piwigo 2.5
            Bug 2764 fixed - Code refactory : Change config variables to assoc array and $_POST vars control before writing conf in database - Thx to flop25 for his advices ;-)
            Bug 2829 fixed - Workflow refactory if confirmation of registrations are done by admins :
              - Admins add manually user *and* confirmation of registration for admins is set to OFF -> new added users are considered automatically as validated.
              - Admins add manually user *and* confirmation of registration for admins is set to ON -> new added users receive the confirmation email.
              - Finally, if a user registers himself, admins receive the validation link. 
            Update fr_FR
            Update de_DE, thanks to : stephy
            Update tr_TR, thanks to : hakanselcuk and LazBoy
            Update it_IT, thanks to : Ericnet

-- 2.50.1 : Blocking bug fixed : New registrants could not validate their registration with the confirmation link
            Update tr_TR, thanks to : LazBoy
            Update de_DE, thanks to : stephy
            Update it_IT, thanks to : Ericnet

-- 2.50.2 : Bug 2866 fixed - Fatal error message (Fatal error: Call to undefined function switch_lang_to()) when using validation link
            Update tr_TR, thanks to : LazBoy
            Update it_IT, thanks to : Ericnet

-- 2.50.3 : Bug 2870 fixed - Error in tracking confirmation tab if $conf['default_user_id'] is set with an ID different than Guest user ID
            Bug 2871 fixed - Improved process : User registration is confirmed by default when user is added by an admin and confirmation of registration for admins is set to OFF
            Bug 2872 fixed - Check if confirmed users group is set as the default group and set it if not
            Bug 2873 fixed - Remove annoying flashing message on config submit

-- 2.50.4 : Bug 2874 fixed - Warning message on tracking confirmation tab when confirmation by admins is set and a user is added manually by an admin
            Update de_DE, thanks to : stephy
            Update lv_LV, thanks to : agrisans

-- 2.50.5 : Bug 2875 fixed - MySql error on manual validation (tracking confirmation tab)
            Bug 2876 fixed - Make templates compatible HTML 5
            Update it_IT, thanks to : salvatore

-- 2.50.6 : Bug 2877 fixed - Disabling Confirmation of registration main option disables child options (child options remain configured and shown but no force or effect)
            Bug 2878 fixed - [Kdays] flag was not translated in confirmation text sent by email to user
            Update tr_TR, thanks to : LazBoy
            Update da_DK, thanks to : Kaare
            Update es_ES, thanks to : crazydark

-- 2.50.7 : Update el_GR, thanks to : bas_alba
            Update tr_TR, thanks to : hakanselcuk and LazBoy

-- 2.50.8 : Add ru_RU, thanks to : Konve
            Add pt_BR, thanks to : hespanhol
            Update tr_TR, thanks to : hakanselcuk

-- 2.50.9 : Update ru_RU, thanks to : Konve and nadusha
            Update pt_BR, thanks to : flaviove
            Update tr_TR, thanks to : hakanselcuk
            Missing translation keys fixed

-- 2.50.10 : Bug fixed on automated task triggered for ghost users
             Compatibility with other plugins fixed (considering Register_FluxBB and Prune_History)
             Update el_GR, thanks to : bas_alba
             Update da_DK, thanks to : Kaare
             Update es_ES, thanks to : jpr928
             Update tr_TR, thanks to : LazBoy
             Update de_DE, thanks to : Yogie
             Update ru_RU, thanks to : Konve

-- 2.50.11 : Evolution 2951 fixed - Add an option to add the gallery URL at the end of emails sent by UAM
             Update ru_RU, thanks to : Konve
             Update lv_LV, thanks to : agrisans
             Add pt_PT, thanks to : ANO

-- 2.50.12 : Update pt_PT, thanks to : ANO
             Update ru_RU, thanks to : Konve
             Update it_IT, thanks to : Ericnet
             Update da_DK, thanks to : Kaare
             Update es_ES, thanks to : petaqui
             Update de_DE, thanks to : Joergen
             Update lv_LV, thanks to : agrisans

-- 2.50.13 : Bug 2958 fixed - Only one user group can be set as default group. Unicity check when a group is set for validated users.
             Update da_DK, thanks to : Kaare
             Update el_GR, thanks to : bas_alba


-- 2.50.14 : Bug 2979 fixed - Users manually added by an admin with "Confirmation of registration for admins" disabled and "Automatic management of unconfirmed users" enabled will no longer receive a reminder email to confirm the registration

-- 2.51.0 : Bug 1109 fixed - Password enforcement features have been removed from UAM and set in a new dedicated plugin : Password Policy
            Bug 2984 fixed - Display issue in Miscellaneous options 
            Bug 2986 fixed - Status for unvalidated users can not be "Guest" and is forced to "-------"
            Bug 2987 fixed - New registered users have to follow a link on confirmation page before log in

-- 2.51.1 : Bug 2986 rollback - The fix is not working well. A special notice is added in administration panel

-- 2.60.0 : Compatibility with Piwigo 2.6
           HTML5 recommandation improvement
           New tablesorter and tablesorter.pager jquery plugin
           Add sk_SK, thanks to : JoeKundlak
           Update pt_PT, thanks to : Bridges and ANO
           Update pt_BR, thanks to : flaviove
           Update tr_TR, thanks to : hakanselcuk
           Update de_DE, thanks to : duke
           Update da_DK, thanks to : Kaare
           Update lv_LV, thanks to : agrisans
           Update es_ES, thanks to : petaqui
           Update it_IT, thanks to : Ericnet
           Update ru_RU, thanks to : Konve
           Update el_GR, thanks to : bas_alba

-- 2.60.1 : Fix bug with UAM module in PWG_Stuff (thx to Gabeek for reporting)
           Obsolete translation keys cleanup
           Update el_GR, thanks to : bas_alba
           Update pt_BR, thanks to : flaviove
           Update lv_LV, thanks to : agrisans
           Update it_IT, thanks to : Ericnet
           Update de_DE, thanks to : Joergen
           Update es_ES, thanks to : jpr928

-- 2.60.2 : Update da_DK, thanks to : Kaare
            Update ru_RU, thanks to : Konve
            Update sk_SK, thanks to : JoeKundlak
            Update pt_PT, thanks to : ANO
            Update pt_BR, thanks to : flaviove

-- 2.70.0 : Compatibility with Piwigo 2.7
            fix preg_replace(): The /e modifier is deprecated (thx to mistic100)
            Update pt_BR, thanks to : flaviove, oigreslima and msakik

-- 2.70.1 : Add nl_NL, thanks to : Ellin-E

-- 2.70.2 : Update and fix nl_NL, thanks to : ddtddt

-- 2.70.3 : New feature : Allow admins to receive a copy of all emails sent by the plugin
            Add nb_NO, thanks to paulen
            Update pt_PT, thanks to ANO
            Update ru_RU, thanks to Konve
            Update pt_BR, thanks to flaviove
            Update da_DK, thanks to Kaare
            Update nl_NL, thanks to Kees Hessels
            Update de_DE, thanks to Yogie
            Update lv_LV, thanks to agrisans
            Update es_ES, thanks to petaqui
            Update el_GR, thanks to bas_alba
            Update it_IT, thanks to Ericnet

-- 2.70.4 : Update nb_NO, thanks to paulen and trident
            Update tr_TR, thanks to katpatuka

-- 2.80.0 : Compatibility check with Piwigo 2.8
			Known issues : Shortcut to user's profile does not work anymore
*/
?>