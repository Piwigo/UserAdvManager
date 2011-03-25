<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();


/* Global Configuration Tab */
$lang['Title_Tab1'] = 'UserAdvManager - General Setup';
$lang['Tab_Global'] = 'General Setup';
$lang['UserAdvManager_Mail_Info'] = 'Informazioni di posta per l\'utente:';
$lang['UserAdvManager_Mail_Info_true'] = ' Inviare una mail a l\'utente riprendendo le sue informazioni di connessione al momento della registrazione o aggiornare il proprio profilo.';
$lang['UserAdvManager_Mail_Info_false'] = ' Disattiva l\'invio di mail. (default)';
$lang['UserAdvManager_MailInfo_Text'] = ' Testo utilizzato per introdurre l\'e-mail inviata all\'utente per consentirgli di convalidare il suo indirizzo e-mail<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">ATTENZIONE !</b> <b style="color: red;">Modifica del testo è disponibile SOLO se l\'utente le informazioni di posta elettronica è attivata. Utilizzare i tag multi lingua da plugin descrizione estesa, se questo plugin è attivato !!!)</b>';
$lang['UserAdvManager_No_Casse'] = ' Caso il nome utente insensitive';
$lang['UserAdvManager_No_Casse_false'] = ' Lasciare che il caso degli utenti sensibili. (default)';
$lang['UserAdvManager_Username_Char'] = ' Limitate di caratteri per nome utente';
$lang['UserAdvManager_Username_Char_true'] = ' I seguenti caratteri sarà proibito per la scelta username';
$lang['UserAdvManager_Username_Char_false'] = ' Utilizzare il nome utente predefinito caratteri di controllo. (default)';
$lang['UserAdvManager_Confirm_Mail'] = 'Conferma indirizzo e-mail:';
$lang['UserAdvManager_Confirm_Mail_true'] = ' Invia una email a utente per consentirgli di convalidare la sua e-mail e la sua registrazione.';
$lang['UserAdvManager_Confirm_Mail_false'] = ' Utilizzare il sistema di default di registrazione (senza la registrazione di convalida). (default)';
$lang['UserAdvManager_ConfirmMail_Text'] = ' Testo utilizzato per introdurre l\'e-mail inviata all\'utente per consentirgli di convalidare il suo indirizzo e-mail<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">ATTENZIONE !</b> <b style="color: red;">Modifica del testo è disponibile SOLO se l\'indirizzo e-mail di conferma è attivata. Utilizzare i tag multi lingua da plugin descrizione estesa, se questo plugin è attivato !!!)</b>';
$lang['UserAdvManager_Confirm_Group_Notice'] = 'ATTENZIONE : L\'utilizzo di gruppi di convalida richiede che si è creato almeno un gruppo di utenti, ed è definito "di default" nella gestione di gruppi di utenti.';
$lang['UserAdvManager_No_Confirm_Group'] = 'Gruppo da utilizzare per gli utenti che non hanno convalidato il loro indirizzo email.';
$lang['UserAdvManager_Validated_Group'] = 'Gruppo da utilizzare per gli utenti che hanno convalidato il loro indirizzo email.';
$lang['UserAdvManager_Confirm_Status_Notice'] = 'ATTENZIONE : L\'uso di convalida lo stato richiede che si hanno mantenuto il "cliente" utente con impostazione di default (come utente modello) per i nuovi iscritti. Nota È possibile impostare qualsiasi altro utente come un modello per i nuovi iscritti. Si prega di fare riferimento alla documentazione del Piwigo per maggiori dettagli.';
$lang['UserAdvManager_No_Confirm_Status'] = 'Di stato per l\'uso per gli utenti che non hanno convalidato il loro indirizzo email.';
$lang['UserAdvManager_Validated_Status'] = 'Di stato per l\'uso per gli utenti che hanno convalidato il loro indirizzo email. Tenere ------- per l\'utilizzo di valori di default';
$lang['UserAdvManager_No_Comment_Anonymous'] = 'Alias sono obbligatori per i commenti';
$lang['UserAdvManager_No_Comment_Anonymous_true'] = ' Il campo autore devono essere riempiti per inviare un commento.';
$lang['UserAdvManager_No_Comment_Anonymous_false'] = ' Utilizzare le impostazioni predefinite sui commenti invio. (default)';
$lang['UserAdvManager_MailExclusion'] = 'L\'esclusione provider e-mail:';
$lang['UserAdvManager_MailExclusion_true'] = ' Impostare l\'esclusione provider di posta elettronica ON (vale a dire: @hotmail.* o @msn.*)';
$lang['UserAdvManager_MailExclusion_false'] = ' Disabilitare l\'esclusione provider di posta elettronica. (default)';
$lang['UserAdvManager_MailExclusion_List'] = ' Se l\'esclusione provider di posta elettronica è impostato su ON, riempire i domini e-mail di escludere qui sotto. Devi usare il formato seguente:<br>@[dominio_nome].[dominio_estensione] - Esempio : @hotmail.com<br>Separare i diversi domini con una virgola (,)<br>';
// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
$lang['UserAdvManager_Title1'] = 'Gli utenti di registrazione di gestione';
$lang['UserAdvManager_Title2'] = 'Registrazione e validazione dei gruppi / gestione di stato';
$lang['UserAdvManager_Password_Enforced'] = 'Rafforzamento password - L\'attivazione di questa opzione rende il sequestro della password richiesta per i visitatori di registrazione. Inoltre, la password immessa dal visitatore incontrerà una ventina di complessità (<b style="color: green;">attivare e salvare le impostazioni per visualizzare maggiori informazioni</b>).';
$lang['UserAdvManager_Password_Enforced_Info'] = '<b style="text-decoration: underline; color: green;">Spiegazioni:</b> <b style="color: green;">Un punteggio password è calcolato sui parametri di base: la lunghezza, il tipo di caratteri utilizzati (lettere, numeri, lettere maiuscole, minuscole, caratteri speciali). Se la password di un utente non punteggio, il punteggio raggiunto è visualizzato con il punteggio minimo da raggiungere e l\'indicazione di aumentare il valore di questa partitura. Per darvi un\'idea, un punteggio inferiore a 100 è considerata "bassa complessità". Tra 100 e 500, la complessità è aumentata e media. Oltre i 500, that\'s Fort Knox! ;-)<br>Puoi fare la tua password prove complessità utilizzando il campo sottostante. Questo vi permetterà di avere un\'idea del punteggio per definire una complessità personalizzato.</b>';
$lang['UserAdvManager_PasswordTest'] = 'Password di prova : ';
$lang['UserAdvManager_ScoreTest'] = 'Punteggio : ';
$lang['PasswordTest'] = 'Calcolo punteggio';
$lang['UserAdvManager_Password_Enforced_true'] = ' Forte richiesta password - Inserire il punteggio minimo (valore di piano) di password complessità == ';
$lang['UserAdvManager_Password_Enforced_false'] = ' Non rafforzare la password. (default)';
$lang['UserAdvManager_AdminPassword_Enforced'] = 'Si applicano anche al controllo password complessità quando un amministratore crea un utente? Nota: Se l\'utente ha creato vuole cambiare la sua password e rafforzare le password per gli utenti è attivo, sarà soggetto alle norme stabilite.';
$lang['UserAdvManager_AdminPassword_Enforced_true'] = 'Abilitare le password rafforzamento per gli amministratori.';
$lang['UserAdvManager_AdminPassword_Enforced_false'] = 'Disattivare il rafforzamento password per gli amministratori. (default)';
$lang['UserAdvManager_GhostTracker'] = 'Ghost Tracker - Permette di gestire gli utenti registrati, secondo la loro data di ultima visita :';
$lang['UserAdvManager_GhostTracker_true'] = ' Attiva Ghost Tracker.';
$lang['UserAdvManager_GhostTracker_false'] = ' Disattiva Ghost Tracker. (Default)';
$lang['UserAdvManager_GhostTracker_DayLimit'] = ' Digitare qui il limite massimo, in giorni, tra le due visite di un visitatore. Quando viene raggiunto questo limite, il visitatore verrà visualizzato nella tabella di "Ghost Tracker".';
$lang['UserAdvManager_GhostTracker_ReminderText'] = ' Testo utilizzato nel promemoria e-mail inviate per incoraggiare i visitatori a ritornare alla galleria (NB: Il testo pre-riempita presso l\'impianto plugin è dato come un esempio).<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">ATTENZIONE !</b> <b style="color: red;">Modifica del testo è disponibile solo se Tracker Ghost è abilitato. Utilizzare i tag multi lingua da plugin descrizione estesa, se questo plugin è attivato !!!)</b>';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
$lang['UserAdvManager_GhostTracker_Notice'] = 'Quando la funzione Ghost Tracker è attivata, è possibile gestire i tuoi visitatori a seconda della frequenza delle loro visite. <b style="color: red;">ATTENZIONE : Se si attiva questa funzione per la prima volta o che hanno riattivato, dopo un lungo periodo fuori durante il quale i nuovi visitatori sono registrati, visitare la scheda Tracker Ghost e seguire le istruzioni per l\'inizializzazione Ghost Tracker.</b>';
// --------- End: New or revised $lang ---- from version 2.12.0
// --------- Starting below: New or revised $lang ---- from version 2.12.6
$lang['UserAdvManager_No_Casse_true'] = ' Fare il caso di account utente insensibili al momento della registrazione e la fase di identificazione (USER = user = User = usER...).';
// --------- End: New or revised $lang ---- from version 2.12.6


/* ConfirmMail Configuration Tab */
/* TODO */$lang['ConfirmMail_Title'] = 'Gestione avanzata e le impostazioni del registro di conferma per posta';
/* TODO */$lang['Title_Tab2'] = 'UserAdvManager - ConfirmMail Impostazioni';
/* TODO */$lang['Tab_ConfirmMail'] = 'ConfirmMail Impostazioni';
/* TODO */$lang['UserAdvManager_ConfirmMail_Info'] = 'Time limitation for validation of registration :<br>If you enable this option, select the desired time (x) in the field below. Visitors who register will then have x days to validate their registration. After this period the validation link they have received by mail will be expired.<br>';
/* TODO */$lang['UserAdvManager_ConfirmMail_TimeOut_true'] = 'Enable limiting the registration deadline.';
/* TODO */$lang['UserAdvManager_ConfirmMail_TimeOut_false'] = 'Disable limiting the registration deadline. (Default)';
/* TODO */$lang['UserAdvManager_ConfirmMail_TimeOut'] = 'Validation delay :';
/* TODO */$lang['UserAdvManager_ConfirmMail_Delay_Info'] = 'Enter the number of days before expiry of the registration validation : ';
/* TODO */$lang['UserAdvManager_ConfirmMail_Remail'] = 'Enable or disable email reminder of unvalidated registers :';
/* TODO */$lang['UserAdvManager_ConfirmMail_Remail_true'] = 'Enable email reminder';
/* TODO */$lang['UserAdvManager_ConfirmMail_Remail_false'] = 'Disable email reminder. (Default)';
/* TODO */$lang['UserAdvManager_ConfirmMail_ReMail_Txt1'] = 'Custom content of the reminder message with regeneration of validation key.<br>If left blank, the reminder email will include only the validation link. It is therefore strongly advised to take a little explanatory text. (NB: The text pre-filled at the plugin installation is given as an example)<br><br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Text modification is available ONLY if email reminder is enabled. Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';
/* TODO */$lang['UserAdvManager_ConfirmMail_ReMail_Txt2'] = 'Custom content of the reminder message without regeneration of validation key.<br>If left blank, the reminder email will include only the validation link. It is therefore strongly advised to take a little explanatory text. (NB: The text pre-filled at the plugin installation is given as an example)<br><br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Text modification is available ONLY if email reminder is enabled. Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';


/* UserManager Tab */
/* TODO */$lang['UserManager_Title'] = 'Advanced settings of unvalidated registered users';
/* TODO */$lang['Title_Tab3'] = 'UserAdvManager - Visitors management';
/* TODO */$lang['Tab_UserManager'] = 'Visitors management';
/* TODO */$lang['UserAdvManager_ConfirmMail_User_List'] = 'When limiting the deadline for registration is enabled, you will find below the list of users awaiting validation, <b style="text-decoration: underline;">whether or not</b> they are in time to validate.<br><br>In this view, you can:
<br><br>
- Manually delete accounts <b>(manual drain)</b>
<br>
- Generate email reminder <b>without</b> generating a new key. Warning: Send an email reminder to targeted visitors. This function does not reset the date of registration of targeted visitors and the timeout is still valid.
<br>
- Generate email reminder <b>with</b> generating a new key. Warning : Send an email reminder to targeted visitors. This function also resets the date of registration of targeted visitors which equates to extend the deadline for validation.
<br>
- Submit a registration awaiting validation manually even if the expiry date has passed <b>(forcing validation)</b>.
<br>';
/* TODO */$lang['Registration_Date'] = 'Registration date';


// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Ghost Tracker Tab */
/* TODO */$lang['GhostTracker_Title'] = 'Advanced ghost visitors management';
/* TODO */$lang['Title_Tab4'] = 'UserAdvManager - Ghost Tracker';
/* TODO */$lang['Tab_GhostTracker'] = 'Ghost Tracker';
/* TODO */$lang['LastVisit_Date'] = 'Last visit';
/* TODO */$lang['Ghost_Reminder'] = 'Email reminder';
/* TODO */$lang['Reminder_Sent_OK'] = 'YES';
/* TODO */$lang['Reminder_Sent_NOK'] = 'NO';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* TODO */$lang['UserAdvManager_GhostTracker_Init'] = 'If you enable this feature for the first time or you have reactivated after a long period off during which new visitors are registered, you must initialize or reset the Ghost Tracker. This action is done only after activation or reactivation of the option. Please click <u>once</u> the reset button below.';
/* TODO */$lang['UserAdvManager_GhostTracker_User_List'] = 'When Ghost Tracker is enabled and initialized, you will find below the list of registered visitors who have not returned since x days. "x" is the number of days configured in the General Setup tab. In addition, you will find a column indicating whether an email reminder has been sent to targeted visitors. So, you can see at a glance and treat visitors who have not taken account of the reminder.<br><br>In this view, you can:
<br><br>
- Manually delete accounts <b>(manual drain)</b>
<br>
- Generate email reminder <b>with resetting the last visit date</b>. This allows to give a wildcard to targeted visitors. If the visitor has already received a reminder, nothing prevents to resent a new mail which will reset again, in fact, the last visit date.
<br>';
// --------- End: New or revised $lang ---- from version 2.12.2


/* Mailing */
/* TODO */$lang['infos_mail %s'] = '%s, please find here your information to login the gallery :';
/* TODO */$lang['User: %s'] = 'User : %s';
/* TODO */$lang['Password: %s'] = 'Password: %s';
/* TODO */$lang['Add of %s'] = 'Add of %s';
/* TODO */$lang['Update of %s'] = 'Update of %s';
/* TODO */$lang['Link: %s'] = 'Please, click on this link to confirm your registration : %s';
/* TODO */$lang['Reminder_with_key_of_%s'] = '%s, your validation key has been renewed';
/* TODO */$lang['Reminder_without_key_of_%s'] = '%s, your validation key will expire';
/* TODO */$lang['Ghost_remainder_of_%s'] = '%s, this is a reminder email';


/* Email confirmation page */
/* TODO */$lang['title_confirm_mail'] = 'Validate your registration';
/* TODO */$lang['confirm_mail_page_title'] = 'Validate your registration';
/* TODO */$lang['confirm_mail_ok'] = '<br><br><br>Thank you to have confirmed your email address and your registration on the gallery. Have fun !<br><br><br><br>';
/* TODO */$lang['confirm_mail_bad'] = '<br><br><br>Your activation key is incorrect or expired or you have already validated your account, please contact the webmaster to fix this problem.<br><br><br><br>';


/* Errors and Warnings */
/* TODO */$lang['UserAdvManager_audit_ok'] = 'Audit OK';
/* TODO */$lang['Err_audit_no_casse'] = '<b>These accounts are identical to the case closely :</b> ';
/* TODO */$lang['Err_audit_username_char'] = '<b>This account uses one or more forbidden characters :</b> ';
/* TODO */$lang['Err_audit_email_forbidden'] = '<b>This account uses a forbidden email provider :</b> ';
/* TODO */$lang['Err_audit_advise'] = '<b>you have to perform corrections to comply with new rules that you have activated.<br>Use a database management utility to correct user accounts directly in the table ### _USERS';
/* TODO */$lang['UserAdvManager_Empty Author'] = 'The author field have to be filled to send a comment.';
if ( isset($conf_UserAdvManager[1]) and $conf_UserAdvManager[1] == 'true' )
	/* TODO */$lang['reg_err_login5'] = 'Username already exist, WARNING name is case insensitive (Shift = Tiny).';
/* TODO */$lang['reg_err_login6'] = 'Username does not have to match the following characters: ';
/* TODO */$lang['reg_err_login7'] = 'Your email provider is banned for registration. Banned email providers are: ';
/* TODO */$lang['UserAdvManager_empty_pwd'] = '[empty password]';
/* TODO */$lang['UserAdvManager_no_update_pwd'] = '[profile updated without password changed]';
/* TODO */$lang['invalid_pwd'] = 'Invalid username or password !';
/* TODO */$lang['Err_ConfirmMail_Settings'] = 'This page will be available only if "Email address confirmation" is activated in "General Setup" tab.';
/* TODO */$lang['Err_UserManager_Settings'] = 'This page is available only if "Enable limiting the registration deadline" is active in the "ConfirmMail Settings" tab and an unvalidated users group is set in "General Setup" tab.';
/* TODO */$lang['No_validation_for_Guest'] = 'The "Guest" account is not subject to validation';
/* TODO */$lang['No_validation_for_default_user'] = 'The default account is not subject to validation';
/* TODO */$lang['No_validation_for_Webmaster'] = 'The "Webmaster" account is not subject to validation';
/* TODO */$lang['No_validation_for_your_account'] = 'Your personnal admin account is not subject to validation';
/* TODO */$lang['Database_Error'] = '<b><u>Warning! Critical integrity error in your database.</u></b><br><br>Please check the integrity of the #_user_confirm_mail table.';
// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* TODO */$lang['UserAdvManager_save_config'] ='Configuration saved.';
/* TODO */$lang['reg_err_login3'] = 'Security : Password is mandatory !';
/* TODO */$lang['reg_err_login4_%s'] = 'Security : A control system calculates a score on the chosen passwords complexity. The complexity of your password is too low (score = %s). Please, choose a new password more secure by following these rules:<br>
- Use letters and numbers<br>
- Use lowercase and uppercase<br>
- Increase its length (number of characters)<br>
The minimum passwords score required by the administrator is: ';
/* TODO */$lang['No_reminder_for_Guest'] = 'The "Guest" account is not subject to receive reminders from GhostTracker';
/* TODO */$lang['No_reminder_for_default_user'] = 'The default account is not subject to receive reminders from GhostTracker';
/* TODO */$lang['No_reminder_for_Webmaster'] = 'The "Webmaster" account is not subject to receive reminders from GhostTracker';
/* TODO */$lang['No_reminder_for_your_account'] = 'You personnal admin account is not subject to receive reminders from GhostTracker';
/* TODO */$lang['Err_GhostTracker_Settings'] = 'This page is available only if "Ghost Tracker" is active in the "General Setup" tab.';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* TODO */$lang['GhostTracker_Init_OK'] = 'Ghost Tracker reset done !';
// --------- End: New or revised $lang ---- from version 2.12.2


/* Processing messages */
/* TODO */$lang['%d_Mail_With_Key'] = '%d message with key renewal was sent';
/* TODO */$lang['%d_Mails_With_Key'] = '%d messages with key renewal were sent';
/* TODO */$lang['%d_Reminder_Sent'] = '%d reminder message was sent';
/* TODO */$lang['%d_Reminders_Sent'] = '%d reminder messages were sent';
/* TODO */$lang['%d_Validated_User'] = '%d User validated manually';
/* TODO */$lang['%d_Validated_Users'] = '%d Users validated manually';


/* Action button names */
/* TODO */$lang['Delete_selected'] = 'Delete';
/* TODO */$lang['Mail_without_key'] = 'Reminder without key';
/* TODO */$lang['Mail_with_key'] = 'Reminder with key';
/* TODO */$lang['Force_Validation'] = 'Forced validation';
/* TODO */$lang['Reminder_Email'] = 'Email reminder';
// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* TODO */$lang['audit'] = 'Audit settings';
/* TODO */$lang['submit'] = 'Save settings';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* TODO */$lang['GT_Reset'] = 'Reset Ghost Tracker';
// --------- End: New or revised $lang ---- from version 2.12.2
?>