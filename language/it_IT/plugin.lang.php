<?php

global $lang,$conf;

$conf_UAM = unserialize($conf['nbc_UserAdvManager']);


/* UserManager Tab */
$lang['Registration_Date'] = 'Data di registrazione';


/* Mailing */
$lang['infos_mail %s'] = '%s, di seguito i vostri dati per accedere alla galleria:';
$lang['User: %s'] = 'Utente: %s';
$lang['Password: %s'] = 'Password: %s';
$lang['Link: %s'] = 'Cliccare su questo link per confermare la vostra iscrizzione: %s';


/* Email confirmation page */
$lang['title_confirm_mail'] = 'Confermare la vostra iscrizzione';
$lang['confirm_mail_page_title'] = 'Confermare l\'iscrizzione';
$lang['confirm_mail_ok'] = '<br><br><br>Grazie per aver confermato il vostro indirizzo e-mail e per la registrazione sulla galleria. Buona visione!<br><br><br><br>';


/* Errors and Warnings */
$lang['UAM_audit_ok'] = 'Audit OK';
$lang['Err_audit_no_casse'] = '<b>Questi conti sono identici (escluso maiuscola/minuscola):</b> ';
$lang['Err_audit_username_char'] = '<b>Questo conto utente utilizza uno o più caratteri vietati:</b> ';
$lang['Err_audit_email_forbidden'] = '<b>Questo conto utente usa un dominio di email proibito:</b> ';
$lang['Err_audit_advise'] = '<b>Dovete eseguire delle correzioni per rispettare le nuove impostazzioni che avete attivato.<br> Utilizzare un programma per la gestione della base dati per correggere i conti utente direttamente nella tabella ###_USERS';
$lang['UAM_Empty Author'] = 'Il campo autore deve essere riempito per potere inviare un commento.';
if ( isset($conf_UAM[1]) and $conf_UAM[1] == 'true' )
	$lang['reg_err_login5'] = 'Nome utente esiste già. Attenzione : il campo è insensibile alle maiuscole/minuscole.';
$lang['reg_err_login6'] = 'Nome utente non deve contenere in caratteri seguenti: ';
$lang['reg_err_login7'] = 'Il tuo provider di posta usa dominio di email proibito. I dominii preibiti sono i seguenti: ';
$lang['UAM_empty_pwd'] = '[password vuota]';
$lang['UAM_no_update_pwd'] = '[profilo aggiornato senza modifica della password]';
$lang['invalid_pwd'] = 'Nome utente o password non validi!';
$lang['No_validation_for_Guest'] = 'Il conto "Guest" non è soggetto a convalida';
$lang['No_validation_for_default_user'] = 'Il conto di default non è soggetto a convalida';
$lang['No_validation_for_Webmaster'] = 'Il conto del "Webmaster" non è soggetto a convalida';
$lang['No_validation_for_your_account'] = 'Il tuo conto amminstratore non è soggetto a convalida';
$lang['Database_Error'] = '<b><u>Attenzione! Errore di integrità critico nella base dati.</u></b><br><br>Si prega di verificare l\'integrità della tabella #_user_confirm_mail.';


/* Processing messages */
$lang['%d_Mail_With_Key'] = '%d messaggio con il rinnovo della chiave è stato inviato';
$lang['%d_Mails_With_Key'] = '%d messaggi con il rinnovo della chiave sono stati inviati';
$lang['%d_Reminder_Sent'] = '%d messaggio di promemoria è stato inviato';
$lang['%d_Reminders_Sent'] = '%d messaggi di promemoria sono stati inviati';
$lang['%d_Validated_User'] = '%d utente convalidato manualmente';
$lang['%d_Validated_Users'] = '%d utenti convalidati manualmente';


/* Action button names */
$lang['Delete_selected'] = 'Cancellare';
$lang['Mail_without_key'] = 'Promemoria senza chiave';
$lang['Mail_with_key'] = 'Promemoria con chiave';
$lang['Force_Validation'] = 'Convalida forzata';




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['PasswordTest'] = 'Calcolo del punteggio';
/* Ghost Tracker Tab */
$lang['Tab_GhostTracker'] = 'Ghost Tracker';
$lang['LastVisit_Date'] = 'Data ultima visita';
$lang['Reminder'] = 'E-mail di sollecito';
$lang['Reminder_Sent_OK'] = 'SI';
$lang['Reminder_Sent_NOK'] = 'NO';
/* Errors and Warnings */
$lang['UAM_save_config'] ='Configurazione salvata.';
$lang['reg_err_login3'] = 'Sicurezza: La password è obbligatoria!';
$lang['reg_err_login4_%s'] = 'Sicurezza: un sistema di controllo calcola un punteggio basandosi sulla complessità della password scelta. La complessità della password è troppo bassa (punteggio = %s). Si prega di scegliere una nuova password più sicura seguendo queste regole:<br>
- Utilizzare delle lettere e dei numeri<br>
- Usare delle maiuscole e delle minuscole<br>
- Aumentare la lunghezza (numero di caratteri)<br>
Il punteggio minimo richiesto dall\'amministratore per la password è di : ';
$lang['No_reminder_for_Guest'] = 'Il conto utente "Guest" non è soggetto a ricevere dei promemoria dal GhostTracker';
$lang['No_reminder_for_default_user'] = 'Il conto utente di default non è soggetto a ricevere dei promemoria dal GhostTracker';
$lang['No_reminder_for_Webmaster'] = 'Il conto utente "Webmaster" non è soggetto a ricevere dei promemoria dal GhostTracker';
$lang['No_reminder_for_your_account'] = 'Il tuo conto amministratore non è soggetto a ricevere dei promemoria dal GhostTracker';
/* Action button names */
$lang['audit'] = 'Audit delle impostazioni';
$lang['submit'] = 'Salvare le impostazioni';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Errors and Warnings */
$lang['GhostTracker_Init_OK'] = 'Inizzializzazione GhostTracker eseguita!';
/* Action button names */
$lang['GT_Reset'] = 'Reset del GhostTracker';
// --------- End: New or revised $lang ---- from version 2.12.2


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
$lang['UAM_Title1'] = 'Impostare le restrizioni per le registrazioni';
$lang['UAM_Title2'] = 'Impostare le conferme e validazioni di registrazione';
$lang['UAM_Title3'] = 'Impostare le registrazioni seguiti e altre opzioni';
$lang['UAM_Title4'] = 'Suggerimenti ed esempi di utilizzo';
$lang['UAM_No_Casse'] = 'Nome utente: Sensibilità case';
$lang['UAM_No_Casse_true'] = ' Consentire';
$lang['UAM_No_Casse_false'] = ' Disattivare (predefinito)';
$lang['UAM_Username_Char'] = 'Nome utente: Esclusione di caratteri';
$lang['UAM_Username_Char_true'] = ' Divieto di caratteri:<br>(Utilizzare una virgola per separare ogni carattere)<br><br>';
$lang['UAM_Username_Char_false'] = ' Consentire a tutti (predefinito)';
$lang['UAM_Password_Enforced'] = 'Rafforzare il livello di sicurezza delle password';
$lang['UAM_Password_Enforced_true'] = ' Consentire. Punteggio minimo: ';
$lang['UAM_Password_Enforced_false'] = ' Disattivare (predefinito)';
$lang['UAM_AdminPassword_Enforced'] = 'Applicando agli amministratori';
$lang['UAM_AdminPassword_Enforced_true'] = ' Consentire';
$lang['UAM_AdminPassword_Enforced_false'] = ' Disattivare (predefinito)';
$lang['UAM_PasswordTest'] = 'Password di prova: ';
$lang['UAM_ScoreTest'] = 'Risultato: ';
$lang['UAM_MailExclusion'] = 'L\'esclusione Email domini';
$lang['UAM_MailExclusion_true'] = ' Escludi i seguenti domini:<br>(Utilizzare una virgola per separare ogni dominio)';
$lang['UAM_MailExclusion_false'] = ' Disattivare (predefinito)';

$lang['UAM_Mail_Info'] = 'E-mail informazioni per l\'utente:';
$lang['UAM_Mail_Info_true'] = ' Consentire';
$lang['UAM_Mail_Info_false'] = ' Disattivare (predefinito)';
$lang['UAM_MailInfo_Text'] = ' Personalizzazione e-mail informazioni:';
$lang['UAM_Confirm_Mail'] = 'Conferma della registrazione:';
$lang['UAM_Confirm_Mail_true'] = ' Consentire';
$lang['UAM_Confirm_Mail_false'] = ' Disattivare (predefinito)';
$lang['UAM_ConfirmMail_Text'] = ' Personalizzare la mail di conferma:';
$lang['UAM_Confirm_grpstat_notice'] = 'ATTENZIONE: Si consiglia di utilizzare sia il gruppo o lo statuto di convalida e non entrambi simultaneamente.';
$lang['UAM_Confirm_Group'] = 'Gruppi di convalida<br>(Invia ------- non pregiudicare gruppo)';
$lang['UAM_Confirm_Status'] = 'Convalida Statuti<br>(Invia ------- per mantenere il default di Piwigo)';
$lang['UAM_No_Confirm_Group'] = 'Gruppo per gli utenti che non hanno convalidato la loro registrazione<br>';
$lang['UAM_Validated_Group'] = 'Gruppo per gli utenti che hanno convalidato la loro iscrizione<br>';
$lang['UAM_No_Confirm_Status'] = 'Di stato per gli utenti che non hanno convalidato la loro registrazione<br>';
$lang['UAM_Validated_Status'] = 'Stato per gli utenti che hanno convalidato la loro iscrizione<br>';
$lang['UAM_ValidationLimit_Info'] = 'Termine per la validazione di registrazione limitato';
$lang['UAM_ConfirmMail_TimeOut_true'] = ' Consentire. Numero di giorni fino alla scadenza: ';
$lang['UAM_ConfirmMail_TimeOut_false'] = ' Disattivare (predefinito)';
$lang['UAM_ConfirmMail_Remail'] = 'Promemoria visitatori non convalidate';
$lang['UAM_ConfirmMail_Remail_true'] = ' Consentire';
$lang['UAM_ConfirmMail_Remail_false'] = ' Disattivare (predefinito)';
$lang['UAM_ConfirmMail_ReMail_Txt1'] = 'Personalizzare il messaggio di sollecito <b><u>con</u></b> nuova rigenerazione di convalida delle chiavi.';
$lang['UAM_ConfirmMail_ReMail_Txt2'] = 'Personalizzazione del messaggio di sollecito <b><u>senza</u></b> rigenerazione della convalida delle chiavi.';

$lang['UAM_GhostTracker'] = 'Gestione fantasmi visitatori (Ghost Tracker)';
$lang['UAM_GhostTracker_true'] = ' Consentire. Durata massima in giorni tra due visite: ';
$lang['UAM_GhostTracker_false'] = ' Disattivare (predefinito)';
$lang['UAM_GhostTracker_ReminderText'] = 'Personalizzazione richiamo di messaggi del Ghost Tracker';
$lang['UAM_LastVisit'] = ' Tracciamento utenti registrati';
$lang['UAM_LastVisit_true'] = ' Consentire';
$lang['UAM_LastVisit_false'] = ' Disattivare (predefinito)';
$lang['UAM_No_Comment_Anonymous'] = 'Nickname obbligatoria per i commenti degli ospiti';
$lang['UAM_No_Comment_Anonymous_true'] = ' Consentire';
$lang['UAM_No_Comment_Anonymous_false'] = ' Disattivare (predefinito)';

$lang['UAM_Tips1'] = 'Registrazioni con la convalida e-mail e messaggio di avviso nella home page del Piwigo (Inglese)';

$lang['Tab_UserManager'] = 'Tracciamento convalide';

/* UserManager Tab */
$lang['SubTitle3'] = 'Tracciamento convalide';
$lang['UserManager_Title'] = 'Tracciamento convalide';
/* Ghost Tracker Tab */
$lang['SubTitle4'] = 'Ghost Tracker';
$lang['GT_Init'] = 'Inizializzazione Ghost Tracker';
$lang['GhostTracker_Title'] = 'Gestione fantasmi visitatori';
$lang['UAM_GhostTracker_Init'] = 'Se si attiva questa funzione per la prima volta o che hanno riattivato, dopo un lungo periodo fuori durante il quale i nuovi visitatori sono registrati, è necessario inizializzare o azzerare il Tracker Ghost. Questa azione viene effettuata solo dopo l\'attivazione o la riattivazione del contratto stesso. Si prega di scegliere <u>una volta</u> il pulsante di reset sotto.';
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


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_AdminConfMail'] = 'Conferma della registrazione per gli amministratori';
$lang['UAM_Admin_ConfMail_true'] = ' Consentire';
$lang['UAM_Admin_ConfMail_false'] = ' Disattivare (predefinito)';
$lang['UAM_Tips1_txt'] = '
          <ul>
            <li>
            Obiettivi:<br>
            - Al suo arrivo presso la galleria: a informare il visitatore che si deve registrare per accedere a foto private<br>
            - Al momento della registrazione: Genera una validazione e-mail con il link diretto, informa il nuovo utente della sua mancata convalida e integrare lo al gruppo "Attesa"<br>
            - All\'atto della convalida: Switch automaticamente gruppo "Attesa" di gruppo "Validati", che fornisce l\'accesso a categorie privato<br><br>
            <span style="font-style:italic">Ricordo: In funzionamento standard, il "cliente" vede solo le categorie del pubblico, senza messaggio di informazione.</span>
            </li><br><br>
            <li>
Prerequisito:<br>
- Una galleria con tutte o alcune categorie private, visibili solo agli utenti registrati<br>
- Almeno 2 seguenti gruppi di utenti Piwigo\'s: "Attesa", senza il consenso sulle categorie private, e "Validati" con tutte le autorizzazioni per le categorie privato<br>
- NBC_UAM plugin<br>
- PWG Stuffs plugin, per aggiungere un tipo di modulo "Personal Block"<br>
- Facoltativamente, il plugin Extended Description al supporto multi-lingue<br>
            </li><br><br>
              <li>
Tappe:<br><br>
A. In plugin NBC_UAM:
              <ol>
                <li>Consentire la conferma della registrazione</li>
                <li>Inserisci il testo per ulteriori spiegazioni, che sarà allegato a una mail di conferma della registrazione. Se il plugin Extended Description è attivato, i tag linguaggio può essere utilizzato</li>
                <li>Selezionare l\'opzione "Attesa" gruppo sotto la voce "Per gli utenti che non hanno convalidato la loro registrazione"</li>
                <li>Selezionare l\'opzione "Validati" gruppo sotto la voce "Per gli utenti che hanno convalidato la loro iscrizione"</li>
                <li>Salvare la configurazione</li>
              </ol>
              </li><br>
B. In plugin PWG Stuffs :
              <ol>
                <li>Aggiungere un nuovo tipo di modulo "block personali: mostra personale di blocco (ad esempio, un editoriale)"</li>
                <li>Configurare il modulo, indicando il titolo (ad esempio, "in attesa di convalida Registrazione") e la sua descrizione, e selezionare solo "Attesa" nella lista dei gruppi ammessi</li>
                <li>Contenuto completo del modulo con le informazioni di messaggio da visualizzare per gli utenti non convalidato. Come NBC_UAM, linguaggi di markup possono essere utilizzati se il plugin Extended Description è abilitato</li>
                <li>Check "visualizzare il modulo nella homepage del sito"</li>
                <li>Convalidare la configurazione del modulo</li>
              </ol>
          </ul>';
// --------- End: New or revised $lang ---- from version 2.14.0
?>