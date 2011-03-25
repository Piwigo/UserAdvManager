<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();


/* UserManager Tab */
$lang['Registration_Date'] = 'Data di registrazione';


/* Mailing */
$lang['infos_mail %s'] = '%s, si prega di trovare qui i tuoi dati di accesso alla galleria:';
$lang['User: %s'] = 'Utente: %s';
$lang['Password: %s'] = 'Password: %s';
$lang['Link: %s'] = 'Per favore, cliccare su questo link per confermare la registrazione: %s';


/* Email confirmation page */
$lang['title_confirm_mail'] = 'Convalidare la tua registrazione';
$lang['confirm_mail_page_title'] = 'Convalidare la tua registrazione';
$lang['confirm_mail_ok'] = '<br><br><br>Grazie per aver confermato il tuo indirizzo e-mail e registrazione sulla galleria. Have fun!<br><br><br><br>';


/* Errors and Warnings */
$lang['UserAdvManager_audit_ok'] = 'Audit OK';
$lang['Err_audit_no_casse'] = '<b>Questi conti sono identici al caso da vicino:</b> ';
$lang['Err_audit_username_char'] = '<b>Questo conto utilizza uno o più caratteri vietato:</b> ';
$lang['Err_audit_email_forbidden'] = '<b>Questo account viene utilizzato un email provider proibito:</b> ';
$lang['Err_audit_advise'] = '<b>è necessario eseguire correzioni per conformarsi alle nuove regole che sono state attivate.<br>Utilizzare un programma per la gestione di database per correggere gli account utente direttamente nella tabella ###_USERS';
$lang['UserAdvManager_Empty Author'] = 'Il campo autore devono essere riempiti per inviare un commento.';
if ( isset($conf_UserAdvManager[1]) and $conf_UserAdvManager[1] == 'true' )
	$lang['reg_err_login5'] = 'Nome utente esistono già, il nome di richiamo è case insensitive (Shift = Tiny).';
$lang['reg_err_login6'] = 'Nome utente non deve corrispondere i seguenti caratteri: ';
$lang['reg_err_login7'] = 'Il tuo provider di posta elettronica è vietato per la registrazione. Vietato provider di posta elettronica sono i seguenti: ';
$lang['UserAdvManager_empty_pwd'] = '[password vuota]';
$lang['UserAdvManager_no_update_pwd'] = '[profilo aggiornato senza password cambiata]';
$lang['invalid_pwd'] = 'Nome utente o password non validi!';
$lang['No_validation_for_Guest'] = '"Guest" conto non è soggetta a convalida';
$lang['No_validation_for_default_user'] = 'L\'account predefinito non è soggetta a convalida';
$lang['No_validation_for_Webmaster'] = '"Webmaster" conto non è soggetta a convalida';
$lang['No_validation_for_your_account'] = 'Il tuo account admin Personnal non è soggetta a convalida';
$lang['Database_Error'] = '<b><u>Attenzione! Errore di integrità critico nel database.</u></b><br><br>Si prega di verificare l\'integrità della tabella #_user_confirm_mail.';


/* Processing messages */
$lang['%d_Mail_With_Key'] = '%d messaggio con il rinnovo chiave è stata inviata';
$lang['%d_Mails_With_Key'] = '%d messaggi con il rinnovo chiave sono stati inviati';
$lang['%d_Reminder_Sent'] = '%d messaggio di promemoria è stato inviato';
$lang['%d_Reminders_Sent'] = '%d messaggi di promemoria sono stati inviati';
$lang['%d_Validated_User'] = '%d utente convalidato manualmente';
$lang['%d_Validated_Users'] = '%d utenti convalidato manualmente';


/* Action button names */
$lang['Delete_selected'] = 'Eliminare';
$lang['Mail_without_key'] = 'Promemoria senza chiave';
$lang['Mail_with_key'] = 'Promemoria con chiave';
$lang['Force_Validation'] = 'Forzati di convalida';




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['PasswordTest'] = 'Calcolo punteggio';
/* Ghost Tracker Tab */
$lang['Tab_GhostTracker'] = 'Ghost Tracker';
$lang['LastVisit_Date'] = 'Ultima visita';
$lang['Reminder'] = 'E-mail di sollecito';
$lang['Reminder_Sent_OK'] = 'SI';
$lang['Reminder_Sent_NOK'] = 'NO';
/* Errors and Warnings */
$lang['UserAdvManager_save_config'] ='Configurazione salvata.';
$lang['reg_err_login3'] = 'Security: Password è obbligatorio!';
$lang['reg_err_login4_%s'] = 'Sicurezza: un sistema di controllo calcola un punteggio sulla scelta password complessità. La complessità della password è troppo bassa (punteggio = %s). Si prega di scegliere una nuova password più sicura seguendo queste regole:<br>
- Utilizzare le lettere e numeri<br>
- Usare maiuscole e minuscole<br>
- Aumentare la sua lunghezza (numero di caratteri)<br>
Le password punteggio minimo richiesto dall\'amministratore è: ';
$lang['No_reminder_for_Guest'] = '"Guest" conto non è soggetto a ricevere i promemoria da GhostTracker';
$lang['No_reminder_for_default_user'] = 'L\'account predefinito non è soggetto a ricevere i promemoria da GhostTracker';
$lang['No_reminder_for_Webmaster'] = '"Webmaster" conto non è soggetto a ricevere i promemoria da GhostTracker';
$lang['No_reminder_for_your_account'] = 'Il tuo account admin Personnal non è soggetto a ricevere i promemoria da GhostTracker';
/* Action button names */
$lang['audit'] = 'Audit impostazioni';
$lang['submit'] = 'Salva impostazioni';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Errors and Warnings */
$lang['GhostTracker_Init_OK'] = 'GhostTracker reset fatto!';
/* Action button names */
$lang['GT_Reset'] = 'Reset Ghost Tracker';
// --------- End: New or revised $lang ---- from version 2.12.2


// --------- Starting below: New or revised $lang ---- from version 2.12.7
/* Errors and Warnings */
$lang['mail_text_error'] = '<b>Attenzione!</b> - Punto e virgola (;) non sono ammessi in addtionnal testo e-mail. Questo carattere è stato automaticamente sostituito da un punto (.). Per informazioni, il testo modificato(s) è (sono) indicato in rosso nel campo corrispondente (s). Vi preghiamo di controllare lo(li) fuori.';
// --------- End: New or revised $lang ---- from version 2.12.7


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['mail_exclusionlist_error'] = 'Attenzione! Hai inserito una nuova linea (CR-LF) all\'inizio della lista di esclusione email (indicato in rosso qui sotto). Anche se questa nuova linea non è visibile, è ancora presente e potrebbe causare un malfunzionamento del plugin. Si prega di digitare nuovamente nel vostro elenco di esclusione in un modo che non inizia con un ritorno a capo.';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.0
/* UserList Tab */
$lang['UserList_Title'] = 'Monitoraggio utenti registrati';
$lang['Nb_Days'] = 'Numero di giorni<br>dall\'ultima visita';
// --------- End: New or revised $lang ---- from version 2.13.0


// --------- Starting below: New or revised $lang ---- from version 2.13.4
$lang['uam_no_unlink'] = '\'unlink\' funzione non è disponibile';
$lang['uam_unlink_errors'] = 'Si sono verificati errori durante l\'eliminazione di file';
/* Global Configuration Tab */
$lang['Title_Tab'] = 'UserAdvManager - Versione: ';
$lang['SubTitle1'] = 'Configurazione dei plugin';
$lang['Tab_Global'] = 'Configurazione';
$lang['UserAdvManager_Title1'] = 'Impostare le restrizioni per le registrazioni';
$lang['UserAdvManager_Title2'] = 'Impostare le conferme e validazioni di registrazione';
$lang['UserAdvManager_Title3'] = 'Impostare le registrazioni seguiti e altre opzioni';
$lang['UserAdvManager_Title4'] = 'Suggerimenti ed esempi di utilizzo';
$lang['UserAdvManager_No_Casse'] = 'Nome utente: Sensibilità case';
$lang['UserAdvManager_No_Casse_true'] = ' Consentire';
$lang['UserAdvManager_No_Casse_false'] = ' Disattivare (predefinito)';
$lang['UserAdvManager_Username_Char'] = 'Nome utente: Esclusione di caratteri';
$lang['UserAdvManager_Username_Char_true'] = ' Divieto di caratteri:<br>(Utilizzare una virgola per separare ogni carattere)<br><br>';
$lang['UserAdvManager_Username_Char_false'] = ' Consentire a tutti (predefinito)';
$lang['UserAdvManager_Password_Enforced'] = 'Rafforzare il livello di sicurezza delle password';
$lang['UserAdvManager_Password_Enforced_true'] = ' Consentire. Punteggio minimo: ';
$lang['UserAdvManager_Password_Enforced_false'] = ' Disattivare (predefinito)';
$lang['UserAdvManager_AdminPassword_Enforced'] = 'Applicando agli amministratori';
$lang['UserAdvManager_AdminPassword_Enforced_true'] = ' Consentire';
$lang['UserAdvManager_AdminPassword_Enforced_false'] = ' Disattivare (predefinito)';
$lang['UserAdvManager_PasswordTest'] = 'Password di prova: ';
$lang['UserAdvManager_ScoreTest'] = 'Risultato: ';
$lang['UserAdvManager_MailExclusion'] = 'L\'esclusione Email domini';
$lang['UserAdvManager_MailExclusion_true'] = ' Escludi i seguenti domini:<br>(Utilizzare una virgola per separare ogni dominio)';
$lang['UserAdvManager_MailExclusion_false'] = ' Disattivare (predefinito)';

$lang['UserAdvManager_Mail_Info'] = 'E-mail informazioni per l\'utente:';
$lang['UserAdvManager_Mail_Info_true'] = ' Consentire';
$lang['UserAdvManager_Mail_Info_false'] = ' Disattivare (predefinito)';
$lang['UserAdvManager_MailInfo_Text'] = ' Personalizzazione e-mail informazioni:';
$lang['UserAdvManager_Confirm_Mail'] = 'Conferma della registrazione:';
$lang['UserAdvManager_Confirm_Mail_true'] = ' Consentire';
$lang['UserAdvManager_Confirm_Mail_false'] = ' Disattivare (predefinito)';
$lang['UserAdvManager_ConfirmMail_Text'] = ' Personalizzare la mail di conferma:';
$lang['UserAdvManager_Confirm_grpstat_notice'] = 'ATTENZIONE: Si consiglia di utilizzare sia il gruppo o lo statuto di convalida e non entrambi simultaneamente.';
$lang['UserAdvManager_Confirm_Group'] = 'Gruppi di convalida<br>(Invia ------- non pregiudicare gruppo)';
$lang['UserAdvManager_Confirm_Status'] = 'Convalida Statuti<br>(Invia ------- per mantenere il default di Piwigo)';
$lang['UserAdvManager_No_Confirm_Group'] = 'Gruppo per gli utenti che non hanno convalidato la loro registrazione<br>';
$lang['UserAdvManager_Validated_Group'] = 'Gruppo per gli utenti che hanno convalidato la loro iscrizione<br>';
$lang['UserAdvManager_No_Confirm_Status'] = 'Di stato per gli utenti che non hanno convalidato la loro registrazione<br>';
$lang['UserAdvManager_Validated_Status'] = 'Stato per gli utenti che hanno convalidato la loro iscrizione<br>';
$lang['UserAdvManager_ValidationLimit_Info'] = 'Termine per la validazione di registrazione limitato';
$lang['UserAdvManager_ConfirmMail_TimeOut_true'] = ' Consentire. Numero di giorni fino alla scadenza: ';
$lang['UserAdvManager_ConfirmMail_TimeOut_false'] = ' Disattivare (predefinito)';
$lang['UserAdvManager_ConfirmMail_Remail'] = 'Promemoria visitatori non convalidate';
$lang['UserAdvManager_ConfirmMail_Remail_true'] = ' Consentire';
$lang['UserAdvManager_ConfirmMail_Remail_false'] = ' Disattivare (predefinito)';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt1'] = 'Personalizzare il messaggio di sollecito <b><u>con</u></b> nuova rigenerazione di convalida delle chiavi.';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt2'] = 'Personalizzazione del messaggio di sollecito <b><u>senza</u></b> rigenerazione della convalida delle chiavi.';

$lang['UserAdvManager_GhostTracker'] = 'Gestione fantasmi visitatori (Ghost Tracker)';
$lang['UserAdvManager_GhostTracker_true'] = ' Consentire. Durata massima in giorni tra due visite: ';
$lang['UserAdvManager_GhostTracker_false'] = ' Disattivare (predefinito)';
$lang['UserAdvManager_GhostTracker_ReminderText'] = 'Personalizzazione richiamo di messaggi del Ghost Tracker';
$lang['UserAdvManager_LastVisit'] = ' Tracciamento utenti registrati';
$lang['UserAdvManager_LastVisit_true'] = ' Consentire';
$lang['UserAdvManager_LastVisit_false'] = ' Disattivare (predefinito)';
$lang['UserAdvManager_No_Comment_Anonymous'] = 'Nickname obbligatoria per i commenti degli ospiti';
$lang['UserAdvManager_No_Comment_Anonymous_true'] = ' Consentire';
$lang['UserAdvManager_No_Comment_Anonymous_false'] = ' Disattivare (predefinito)';

$lang['UserAdvManager_Tips1'] = 'Registrazioni con la convalida e-mail e messaggio di avviso nella home page del PhpWebGallery (Inglese)';
/* TODO */$lang['UserAdvManager_Tips1_txt'] = '
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

$lang['Tab_UserManager'] = 'Tracciamento convalide';

/* UserManager Tab */
$lang['SubTitle3'] = 'Tracciamento convalide';
$lang['UserManager_Title'] = 'Tracciamento convalide';
/* Ghost Tracker Tab */
$lang['SubTitle4'] = 'Ghost Tracker';
$lang['GT_Init'] = 'Inizializzazione Ghost Tracker';
$lang['GhostTracker_Title'] = 'Gestione fantasmi visitatori';
$lang['UserAdvManager_GhostTracker_Init'] = 'Se si attiva questa funzione per la prima volta o che hanno riattivato, dopo un lungo periodo fuori durante il quale i nuovi visitatori sono registrati, è necessario inizializzare o azzerare il Tracker Ghost. Questa azione viene effettuata solo dopo l\'attivazione o la riattivazione del contratto stesso. Si prega di scegliere <u>una volta</u> il pulsante di reset sotto.';
/* UserList Tab */
$lang['SubTitle5'] = 'Tracciamento degli utenti';
$lang['Tab_UserList'] = 'Tracciamento degli utenti';
/* Mailing */
$lang['Add of %s'] = 'Profilo creato per %s';
$lang['Update of %s'] = 'Profilo %s aggiornato';
/* Email confirmation page */
$lang['confirm_mail_bad'] = '<br><br><br>La tua chiave di attivazione non è corretto o è scaduto o è già stato convalidato il tuo account, si prega di contattare il webmaster per risolvere questo problema.<br><br><br><br>';
/* Mailing */
$lang['Ghost_reminder_of_%s'] = '%s, questo è un promemoria via email';
$lang['Reminder_with_key_of_%s'] = '%s, la vostra chiave di convalida è stata rinnovata';
$lang['Reminder_without_key_of_%s'] = '%s, la chiave di convalida scadrà';
/* Errors and Warnings */
$lang['Err_UserManager_Settings'] = 'Questa pagina è disponibile solo se "Termine per la validazione di registrazione limitato" è attivo e un gruppo di utenti non convalidate è impostato in "Impostazione conferme e validazioni di registrazione".';
$lang['Err_GhostTracker_Settings'] = 'Questa pagina è disponibile solo se "Ghost Tracker" è attiva in "Impostazione delle registrazioni seguiti e altre opzioni".';
$lang['Err_Userlist_Settings'] = 'Questa pagina è disponibile solo se "Controllo di utenti registrati" è attiva nella sezione "Impostazione delle registrazioni seguiti e altre opzioni".';
// --------- End: New or revised $lang ---- from version 2.13.4
?>