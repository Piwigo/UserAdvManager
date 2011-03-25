<?php
global $lang;

$lang['UAM_restricTitle'] = 'Restrizioni per le registrazioni';
$lang['UAM_restricTitle_d'] = '
- Sensibilità case<br>
- Characters exclusion<br>
- Rafforzare il livello di sicurezza delle password<br>
- L\'esclusione Email domini<br>
...
';
$lang['UAM_confirmTitle'] = 'Conferme e validazioni di registrazione';
$lang['UAM_confirmTitle_d'] = '
- E-mail informazioni per l\'utente<br>
- Conferma della registrazione<br>
- Gruppi / Statuti di convalida<br>
- Termine per la validazione di registrazione limitato<br>
- Promemoria visitatori non convalidate<br>
...
';
$lang['UAM_miscTitle'] = 'Registrazioni seguiti e altre opzioni';
$lang['UAM_miscTitle_d'] = '
- Gestione fantasmi visitatori<br>
- Tracciamento utenti registrati<br>
- Nickname obbligatoria per i commenti degli ospiti<br>
...
';
$lang['UAM_casenTitle'] = 'Nome utente: Sensibilità case';
$lang['UAM_casenTitle_d'] = 'Per impostazione predefinita, PhpWebGallery &egrave; insensibile: lettere maiuscole e minuscole sono considerate diverse lettere con i nomi scelti dagli utenti al momento della registrazione. Cos&igrave;, &quot;Pippo&quot;, &quot;pippo&quot; e &quot;PIPPO&quot; pu&ograve; essere di 3 utenti diversi.<br><br>
L\'attivazione di questa opzione permette di prendere in considerazione tutte le opzioni in caso di &quot;pippo&quot; come un utente. Se &quot;foo&quot; esiste già, creare un nuovo utente &quot;Pippo&quot;, saranno rifiutati.<br><br>
<b style=&quot;color: red;&quot;>Attenzione: questa opzione non ha alcun effetto sui nomi utente creato prima della sua attivazione.</b>';
$lang['UAM_carexcTitle'] = 'Nome utente: Esclusione di caratteri';
$lang['UAM_carexcTitle_d'] = 'Possa essere interessante per vietare certi caratteri per i nomi utente (ad esempio: negare login contenente &quot;@&quot;). Questa opzione permette di escludere i caratteri o sequenza di caratteri, eventi.<br>
NB: L\'opzione può anche escludere parole intere.
<br><br>
<b style=&quot;color: red;&quot;>Attenzione: questa opzione non ha alcun effetto sui nomi utente creato prima della sua attivazione.</b>';
$lang['UAM_passwTitle'] = 'Rafforzare il livello di sicurezza delle password';
$lang['UAM_passwTitle_d'] = 'L\'attivazione di questa opzione rende obbligatorio il sequestro di una password al momento della registrazione, e richiede la password scelta dal visitatore di incontrare un livello minimo di complessità. Se la soglia non viene raggiunta, il punteggio conseguito e il punteggio minimo da raggiungere sono visualizzate, insieme con raccomandazioni per aumentare il valore di questa partitura.<br><br>
Non vi è prova in campo per misurare la complessità di una password, e può permettersi di avere un\'idea del punteggio per definire personalizzati complessi.<br><br>
Nota: Il punteggio di una password è calcolato sulla base di diversi parametri: la lunghezza, il tipo di caratteri utilizzati (lettere, numeri, lettere maiuscole, minuscole, caratteri speciali). Un punteggio inferiore a 100 è considerata bassa, da 100 a 500, la complessità è nella media, oltre 500, la sicurezza è eccellente.';
$lang['UAM_passwtestTitle'] = 'Prova la complessità di una password';
$lang['UAM_passwtestTitle_d'] = 'Inserisci la password per testare e quindi fare clic su &quot;calcolo del punteggio&quot;, per vedere il risultato.';
$lang['UAM_passwadmTitle'] = 'Applicando agli amministratori';
$lang['UAM_passwadmTitle_d'] = 'Un amministratore può creare un account utente con o senza l\'applicazione della regola della complessità di calcolo.<br><br>
Nota: Se l\'account utente creato vuole cambiare la password e il rafforzamento password per gli utenti è attivo, sarà soggetta alla regola.';
$lang['UAM_mailexcTitle'] = 'L\'esclusione Email domini';
$lang['UAM_mailexcTitle_d'] = 'Per impostazione predefinita, PhpWebGallery accetta tutti gli indirizzi di posta elettronica nel xxx@yyy.zz formato. L\'attivazione di questa opzione consente di escludere determinati domini nel formato: @[nome_dominio].[Domain_extension].<br><br>
Esempi :<br>
@hotmail.com -> esclusi gli indirizzi *@hotmail.com<br>
@hotmail -> escludendo tutti gli indirizzi *@hotmail*';
$lang['UAM_infomailTitle'] = 'E-mail informazioni per l\'utente';
$lang['UAM_infomailTitle_d'] = 'Questa opzione consente di automatizzare l\'invio di una e-mail le informazioni a un utente al momento della registrazione o quando cambia la sua password o indirizzo e-mail nel loro profilo.<br><br>
Il contenuto del messaggio inviato è composto da una parte personalizzabile di introdurre una piccola nota di benvenuto e una parte fissa che indica il login, password e indirizzo di posta elettronica dell\'utente.';
$lang['UAM_infotxtTitle'] = 'Personalizzazione e-mail informazioni';
$lang['UAM_infotxtTitle_d'] = 'Inserisci il testo introduttivo che si desidera visualizzare nella e-mail informazioni.<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended Description, se esso è attivo.<br><br>
<b style=&quot;color: red;&quot;>Modifica del testo &egrave; disponibile solo se &quot;E-mail informazioni per l\'utente&quot; &egrave; attivata.</b>';
$lang['UAM_confirmmailTitle'] = 'Conferma della registrazione';
$lang['UAM_confirmmailTitle_d'] = 'Questa opzione permette di richiedere all\'utente di convalidare la registrazione cliccando su un link ricevuto in una email inviata al momento della registrazione.<br><br>
L\'e-mail &egrave; composto da una parte personalizzabile di introdurre una piccola nota di benvenuto e una parte fissa contenente il link di attivazione che viene generato da una chiave casuale che pu&ograve; eventualmente rigenerare attraverso la &quot;Tracciamento convalide&quot; tab.<br><br>
Questa opzione &egrave; generalmente utilizzato con l\'assegnazione automatica di gruppo e / o statuto. Ad esempio, un utente che non ha convalidato la loro registrazione sar&agrave; ambientato in un gruppo specifico di utenti (con o senza le restrizioni alla galleria), mentre un utente che ha convalidato la sua registrazione &egrave; fissato in un &quot;normale&quot; del gruppo.';
/* TODO */$lang['UAM_confirmtxtTitle'] = 'Customizing the confirmation email';
/* TODO */$lang['UAM_confirmtxtTitle_d'] = 'Enter the introductory text that you want to appear in the email confirmation of registration.<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended Description, se esso è attivo.<br><br>
<b style=&quot;color: red;&quot;>The text modifiying is available only if the &quot;Confirmation of registration&quot; is enabled.</b>';
/* TODO */$lang['UAM_confirmgrpTitle'] = 'Validation Groups';
/* TODO */$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>WARNING : Using validation groups requires that you have created at least one users group and is defined &quot;by default&quot; in Piwigo\'s user groups management.</b><br><br>
The groups are validated for use in conjunction with the &quot;Confirmation of registration&quot;';
/* TODO */$lang['UAM_confirmstatTitle'] = 'Validation Statutes';
/* TODO */$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>WARNING : The use of status validation requires that you have kept the &quot;Guest&quot; user with default setting (as user template) for new registered. Note you can set any other user as a template for new registered. Please refer to the Piwigo\'s documentation for more details.</b><br><br>
The groups are validated for use in conjunction with the &quot;Confirmation of registration&quot;';
/* TODO */$lang['UAM_validationlimitTitle'] = 'Deadline for registration validation limited';
/* TODO */$lang['UAM_validationlimitTitle_d'] = 'This option allows to limit the validity of key validation email sent to new registrants. Visitors who register will have x days of time to validate their registration. After this period the validation link will expire.<br><br>
This option is used in conjunction with the &quot;Confirmation of registration&quot;';
/* TODO */$lang['UAM_remailTitle'] = 'Remind unvalidated users';
/* TODO */$lang['UAM_remailTitle_d'] = 'This option allows you to send a reminder email to users registered but have not validated their registration on time. It therefore works in conjunction with the &quot;Confirmation of registration&quot;<br><br>
2 types of emails can be sent: With or without regeneration of the validation key. As appropriate, the content of emails can be customized.<br><br>
Refer to the &quot;Tracking validations&quot; tab.';
/* TODO */$lang['UAM_remailtxt1Title'] = 'Reminder email with new key generated';
/* TODO */$lang['UAM_remailtxt1Title_d'] = 'Enter the introductory text that you want to appear in the reminder email, in addition to the validation key regenerated.<br><br>
If left blank, the mail reminder will include only the validation link. It is therefore strongly advised to take a little explanatory text. (NB: The text pre-filled with the installation of the plugin is provided as an example)<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended Description, se esso è attivo.<br><br>
<b style=&quot;color: red;&quot;>The text modifiying is available only if &quot;Remind unvalidated users&quot; is enabled.</b>';
/* TODO */$lang['UAM_remailtxt2Title'] = 'Reminder email without new key generated';
/* TODO */$lang['UAM_remailtxt2Title_d'] = 'Enter the introductory text that you want to appear in the reminder email without a validation key regenerated.<br><br>
If left blank, the mail reminder will be empty. It is therefore strongly advised to take a little explanatory text. (NB: The text pre-filled with the installation of the plugin is provided as an example)<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended Description, se esso è attivo.<br><br>
<b style=&quot;color: red;&quot;>The text modifiying is available only if &quot;Remind unvalidated users&quot; is enabled.</b>';
/* TODO */$lang['UAM_ghosttrackerTitle'] = 'Ghost visitors management';
/* TODO */$lang['UAM_ghosttrackerTitle_d'] = 'Also called &quot;Ghost Tracker&quot;, when this function is activated, you can manage your visitors depending on the frequency of their visits. When the time between 2 visits is reaches, the visitor in question appears in the &quot;Ghost Tracker&quot; table where you will be able to remind visitors via email.<br><br>
<b style=&quot;color: red;&quot;>If you enable this feature for the first time or you have reactivated after a long period off during which new visitors are registered, you must initialize or reset the Ghost Tracker.</b>';
/* TODO */$lang['UAM_gttextTitle'] = 'Ghost Tracker\'s reminder message';
/* TODO */$lang['UAM_gttextTitle_d'] = 'Enter the text you want to appear in the email reminder to prompt the user to return to visit your gallery (NB: The text pre-filled with the installation of the plugin is provided as an example).<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended Description, se esso è attivo.<br><br>
<b style=&quot;color: red;&quot;>The text modifiying is available only if &quot;Ghost visitors management&quot; is enabled.</b>';
/* TODO */$lang['UAM_lastvisitTitle'] = 'Tracking registered users';
/* TODO */$lang['UAM_lastvisitTitle_d'] = 'This activates a table in the &quot;Tracking users&quot; tab which are registered users listed on the gallery and the date of their last visit and time spent (in days) since their last visit. Monitoring is purely informative for the administrator of the gallery.';
/* TODO */$lang['UAM_commentTitle'] = 'Nickname mandatory for guests comments';
/* TODO */$lang['UAM_commentTitle_d'] = 'If &quot;Comments for All&quot; is active (authority to unregistered visitors to post comments), this option allows to force the non-registered visitor to enter a nickname that the comment is accepted.';
/* TODO */$lang['UAM_tipsTitle'] = 'Tips and Examples';
/* TODO */$lang['UAM_tipsTitle_d'] = 'Tips and various examples of use';
/* TODO */$lang['UAM_userlistTitle'] = 'Tracking users';
/* TODO */$lang['UAM_userlistTitle_d'] = 'This page is for information to the administrator. It displays a list of all users registered on the gallery showing the date and number of days since their last visit. The list is sorted in ascending order of number of days.
<br><br>
When the Ghost Tracker is active, the number of days without a visit appears as the following color code, according to the maximum set in the Ghost Tracker options:
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
<b>NOTE</b> : The list does not display who have not validated their registration (if the option of validating the registration is activated). These users are then managed in a special way in the &quot;Tracking validations&quot; tab.';
/* TODO */$lang['UAM_usermanTitle'] = 'Tracking validations';
/* TODO */$lang['UAM_usermanTitle_d'] = 'When limiting the deadline for registration is enabled, you will find below the list of users whose validation registration is expected, <b style=&quot;text-decoration: underline;&quot;>whether or not</b> they are in time to validate.<br><br>
The registration date is displayed in green when the user concerned is below the time limit to validate his registration. In this case, the validation key is still valid and we can send an email with or without a new validation key.<br><br>
When the registration date appears in red, the validation period has expired. In this case, you must send an email with regeneration of validation key if you want to enable the user to validate their registration.<br><br>
In all cases, it is possible to manually force the validation.<br><br>
In this view, you can:
<br><br>
- Manually delete accounts <b>(manual drain)</b>
<br>
- Generate email reminder <b>without</b> generating a new key. Warning: Send an email reminder to targeted visitors. This function does not reset the date of registration of targeted visitors and the timeout is still valid.
<br>
- Generate email reminder <b>with</b> generating a new key. Warning : Send an email reminder to targeted visitors. This function also resets the date of registration of targeted visitors which equates to extend the deadline for validation.
<br>
- Submit a registration awaiting validation manually even if the expiry date has passed <b>(forcing validation)</b>.';
/* TODO */$lang['UAM_gtTitle'] = 'Ghost visitors management';
/* TODO */$lang['UAM_gtTitle_d'] = 'When Ghost Tracker is enabled and initialized, you will find below the list of registered visitors who have not returned since x days. &quot;x&quot; is the number of days configured in the General Setup tab. In addition, you will find a column indicating whether an email reminder has been sent to targeted visitors. So, you can see at a glance and treat visitors who have not taken account of the reminder.<br><br>In this view, you can:
<br><br>
- Manually delete accounts <b>(manual drain)</b>
<br>
- Generate email reminder <b>with resetting the last visit date</b>. This allows to give a wildcard to targeted visitors. If the visitor has already received a reminder, nothing prevents to resent a new mail which will reset again, in fact, the last visit date.';
?>