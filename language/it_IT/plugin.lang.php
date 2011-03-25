<?php

global $lang,$conf;

$conf_UAM = unserialize($conf['UserAdvManager']);


/* UserManager Tab */
$lang['UAM_Registration_Date'] = 'Data d\'iscrizione';


/* Mailing */
$lang['UAM_infos_mail %s'] = '%s, di seguito i vostri dati per accedere alla galleria:';
$lang['UAM_User: %s'] = 'Utente: %s';
$lang['UAM_Password: %s'] = 'Password: %s';
$lang['UAM_Link: %s'] = 'Cliccare su questo link per confermare la vostra iscrizzione: %s';


/* Email confirmation page */
$lang['UAM_title_confirm_mail'] = 'Confermare la vostra iscrizzione';
$lang['UAM_confirm_mail_page_title'] = 'Confermare l\'iscrizzione';


/* Errors and Warnings */
$lang['UAM_audit_ok'] = 'Audit OK';
$lang['UAM_Err_audit_username_char'] = '<b>Questo conto utente utilizza uno o più caratteri vietati:</b> ';
$lang['UAM_Err_audit_email_forbidden'] = '<b>Questo conto utente usa un dominio d\'Email proibito:</b> ';
$lang['UAM_Err_audit_advise'] = '<b>Dovete eseguire delle correzioni per rispettare le nuove impostazzioni che avete attivato.<br> Utilizzare un programma per la gestione della base dati per correggere i conti utente direttamente nella tabella ###_USERS';
$lang['UAM_Empty Author'] = 'Il campo autore deve essere riempito per potere inviare un commento.';
$lang['UAM_reg_err_login2'] = 'Nome utente non deve contenere in caratteri seguenti: ';
$lang['UAM_reg_err_login5'] = 'Il tuo provider di posta usa dominio d\'Email proibito. I domini preibiti sono i seguenti: ';
$lang['UAM_empty_pwd'] = '[password vuota]';
$lang['UAM_no_update_pwd'] = '[profilo aggiornato senza modifica della password]';
$lang['UAM_No_validation_for_Guest'] = 'Il conto "Guest" non è soggetto a convalida';
$lang['UAM_No_validation_for_default_user'] = 'Il conto di default non è soggetto a convalida';
$lang['UAM_No_validation_for_Webmaster'] = 'Il conto del "Webmaster" non è soggetto a convalida';
$lang['UAM_No_validation_for_your_account'] = 'Il tuo conto amminstratore non è soggetto a convalida';


/* Processing messages */
$lang['UAM_%d_Mail_With_Key'] = '%d messaggio con il rinnovo della chiave è stato inviato';
$lang['UAM_%d_Mails_With_Key'] = '%d messaggi con il rinnovo della chiave sono stati inviati';
$lang['UAM_%d_Reminder_Sent'] = '%d Email di rilancio è stato inviato';
$lang['UAM_%d_Reminders_Sent'] = '%d Email di rilancio sono stati inviati';
$lang['UAM_%d_Validated_User'] = '%d utente convalidato manualmente';
$lang['UAM_%d_Validated_Users'] = '%d utenti convalidati manualmente';


/* Action button names */
$lang['UAM_Delete_selected'] = 'Cancellare';
$lang['UAM_Mail_without_key'] = 'Email di rilancio senza chiave';
$lang['UAM_Mail_with_key'] = 'Email di rilancio con chiave';




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['UAM_PasswordTest'] = 'Calcolo del punteggio';
/* Ghost Tracker Tab */
$lang['UAM_Tab_GhostTracker'] = 'GhostTracker';
$lang['UAM_Reminder'] = 'Email di rilancio';
$lang['UAM_Reminder_Sent_OK'] = 'SI';
$lang['UAM_Reminder_Sent_NOK'] = 'NO';
/* Errors and Warnings */
$lang['UAM_save_config'] ='Configurazione salvata.';
$lang['UAM_reg_err_login3'] = 'Sicurezza: La password è obbligatoria!';
$lang['UAM_reg_err_login4_%s'] = 'Sicurezza: un sistema di controllo calcola un punteggio basandosi sulla complessità della password scelta. La complessità della password è troppo bassa (punteggio = %s). Si prega di scegliere una nuova password più sicura seguendo queste regole:<br>
- Utilizzare delle lettere e dei numeri<br>
- Usare delle maiuscole e delle minuscole<br>
- Aumentare la lunghezza (numero di caratteri)<br>
Il punteggio minimo richiesto dall\'amministratore per la password è di : ';
$lang['UAM_No_reminder_for_Guest'] = 'Il conto utente "Guest" non è soggetto a ricevere dei promemoria dal GhostTracker';
$lang['UAM_No_reminder_for_default_user'] = 'Il conto utente di default non è soggetto a ricevere dei promemoria dal GhostTracker';
$lang['UAM_No_reminder_for_Webmaster'] = 'Il conto utente "Webmaster" non è soggetto a ricevere dei promemoria dal GhostTracker';
$lang['UAM_No_reminder_for_your_account'] = 'Il tuo conto amministratore non è soggetto a ricevere dei promemoria dal GhostTracker';
/* Action button names */
$lang['UAM_audit'] = 'Audit delle impostazioni';
$lang['UAM_submit'] = 'Salvare le impostazioni';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Errors and Warnings */
$lang['UAM_GhostTracker_Init_OK'] = 'Inizzializzazione GhostTracker eseguita!';
/* Action button names */
$lang['UAM_GT_Reset'] = 'Reset del GhostTracker';
// --------- End: New or revised $lang ---- from version 2.12.2


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['UAM_mail_exclusionlist_error'] = 'Attenzione! Avete inserito una nuova riga all\'inizio dell\'elenco d\'esclusione Email (indicato in rosso qui sotto). Anche se questa nuova riga non è visibile, con la sua presenza potrebbe causare delle disfunzioni del plugin. Si prega di cancellare la riga vuota.';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.0
/* UserList Tab */
$lang['UAM_UserList_Title'] = 'Monitoraggio degli utenti registrati';
$lang['UAM_Tab_UserList'] = 'Monitoraggio degli utenti';
// --------- End: New or revised $lang ---- from version 2.13.0


// --------- Starting below: New or revised $lang ---- from version 2.13.4
/* Global Configuration Tab */
$lang['UAM_Title_Tab'] = 'UserAdvManager - Versione: ';
$lang['UAM_SubTitle1'] = 'Configurazione dei plugin';
$lang['UAM_Tab_Global'] = 'Configurazione';
$lang['UAM_Title1'] = 'Impostare le restrizioni per le registrazioni';
$lang['UAM_Title2'] = 'Impostare le conferme e validazioni all\'iscrizione';
$lang['UAM_Title3'] = 'Impostare le registrazioni seguite e altre opzioni';
$lang['UAM_Title4'] = 'Suggerimenti ed esempi d\'utilizzo';
$lang['UAM_No_Casse'] = 'Nome utente: Sensibile alle maiusc/minusc';
$lang['UAM_No_Casse_true'] = ' Attivare';
$lang['UAM_Username_Char'] = 'Nome utente: Esclusione di certi caratteri';
$lang['UAM_Username_Char_true'] = ' Vietare i caratteri:<br>(Usare una virgola per separare ogni carattere)<br><br>';
$lang['UAM_Username_Char_false'] = ' Autorizzare tutti (di default)';
$lang['UAM_Password_Enforced'] = 'Rafforzare il livello di sicurezza delle password';
$lang['UAM_Password_Enforced_true'] = ' Attivare. Punteggio minimo: ';
$lang['UAM_AdminPassword_Enforced'] = 'Applicare agli amministratori';
$lang['UAM_PasswordTest'] = 'Password di prova: ';
$lang['UAM_ScoreTest'] = 'Risultato: ';
$lang['UAM_MailExclusion'] = 'Esclusione dei domini d\'Email';
$lang['UAM_MailExclusion_true'] = ' Escludi i seguenti domini:<br>(Utilizzare una virgola per separare ogni dominio)';

$lang['UAM_Mail_Info'] = 'Email d\'informazione per l\'utente:';
$lang['UAM_MailInfo_Text'] = ' Personalizzare il testo dell\'Email:';
$lang['UAM_Confirm_Mail'] = 'Conferma dell\'iscrizione:';
$lang['UAM_ConfirmMail_Text'] = ' Personalizzare il testo dell\'Email di conferma:';
$lang['UAM_Confirm_Group'] = 'Gruppi di convalida<br>(------- per non assegnare nessun gruppo)';
$lang['UAM_Confirm_Status'] = 'Convalida Statuti<br>(Invia ------- per mantenere il valore di default di Piwigo)';
$lang['UAM_Confirm_grpstat_notice'] = 'ATTENZIONE: Si consiglia di utilizzare o il gruppo o lo statuto di convalida ma non entrambi simultaneamente.';
$lang['UAM_No_Confirm_Group'] = 'Gruppo per gli utenti che non hanno convalidato la loro iscrizione<br>';
$lang['UAM_Validated_Group'] = 'Gruppo per gli utenti che hanno convalidato la loro iscrizione<br>';
$lang['UAM_No_Confirm_Status'] = 'Stato per gli utenti che non hanno convalidato la loro iscrizione<br>';
$lang['UAM_Validated_Status'] = 'Stato per gli utenti che hanno convalidato la loro iscrizione<br>';
$lang['UAM_ValidationLimit_Info'] = 'Termine per la validazione dell\'iscrizione limitato';
$lang['UAM_ConfirmMail_TimeOut_true'] = ' Attivare. Numero di giorni per la scadenza: ';
$lang['UAM_ConfirmMail_Remail'] = 'Email di rilancio ai visitatori non convalidati';
$lang['UAM_ConfirmMail_ReMail_Txt1'] = 'Personalizzare l\'Email di rilancio <b><u>con</u></b> rigenerazione di una nuova chiave di convalida.';
$lang['UAM_ConfirmMail_ReMail_Txt2'] = 'Personalizzare l\'Email di rilancio <b><u>senza</u></b> rigenerazione di una nuova chiave di convalida.';

$lang['UAM_GhostTracker'] = 'Gestione degli ospiti fantasmi (GhostTracker)';
$lang['UAM_GhostTracker_true'] = ' Attivare. Durata massima di giorni tra due visite: ';
$lang['UAM_GhostTracker_ReminderText'] = 'Testo di rilancio personalizzato';
$lang['UAM_LastVisit'] = ' Tracciamento utenti registrati';
$lang['UAM_No_Comment_Anonymous'] = 'Commenti : Pseudo obbligatorio per gli ospiti';

$lang['UAM_Tips1'] = 'Iscrizzione con convalida dell\'Email e messaggio di avviso nella homepage di Piwigo';

$lang['UAM_Tab_UserManager'] = 'Tracciamento convalide';

/* UserManager Tab */
$lang['UAM_SubTitle3'] = 'Tracciamento convalide';
$lang['UAM_UserManager_Title'] = 'Tracciamento convalide';
/* Ghost Tracker Tab */
$lang['UAM_SubTitle4'] = 'GhostTracker';
$lang['UAM_GT_Init'] = 'Inizializzazione del GhostTracker';
$lang['UAM_GhostTracker_Title'] = 'Gestione degli ospiti fantasmi';
$lang['UAM_GhostTracker_Init'] = 'Se si attiva questa funzione per la prima volta o se viene riattivata dopo un lungo periodo durante il quale dei nuovi visitatori si sono registrati, è necessario inizializzare o azzerare il Tracker Ghost. Questa azione è da effettuarsi solo dopo l\'attivazione o la riattivazione dell\'opzione; Cliccare dunque <u>una sola volta</u> sull\'pulsante di reset sottostante.';
/* UserList Tab */
$lang['UAM_SubTitle5'] = 'Infos sugli utenti';
/* Mailing */
$lang['UAM_Add of %s'] = 'Profilo creato per %s';
$lang['UAM_Update of %s'] = 'Profilo %s aggiornato';
/* Mailing */
$lang['UAM_Ghost_reminder_of_%s'] = '%s, questa è un\'Email di rilancio';
$lang['UAM_Reminder_with_key_of_%s'] = '%s, la vostra chiave di convalida è stata rinnovata';
$lang['UAM_Reminder_without_key_of_%s'] = '%s, la chiave di convalida sta per scadere';
/* Errors and Warnings */
$lang['UAM_Err_GhostTracker_Settings'] = 'Questa pagina è disponibile solo se "GhostTracker" è attivo in "Impostare le registrazioni seguite e altre opzioni".';
$lang['UAM_Err_Userlist_Settings'] = 'Questa pagina è disponibile solo se "Monitoraggio degli utenti registrati" è attivo nella sezione "Impostare le registrazioni seguite e altre opzioni".';
// --------- End: New or revised $lang ---- from version 2.13.4


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_AdminConfMail'] = 'Conferma dell\'iscrizione per gli amministratori';
$lang['UAM_Tips1_txt'] = '
          <ul>
            <li>
            Obiettivi:<br>
            - Al suo arrivo sulla galleria: informare l\'ospite che si può registrare per accedere alle foto private<br>
            - Al momento dell\'iscrizione: Generare un\'Email di convalida con il link diretto, informare il nuovo utente della sua "non convalidazione" e integrarlo lo al gruppo "Attesa"<br>
            - All convalida: Spostarlo automaticamente dal gruppo "Attesa" al gruppo "Convalidati", che permette l\'accesso alle categorie private<br><br>
            <b>Nota: Nel funzionamento standard, l\'utente "Guest" vede solo le categorie pubbliche, senza messaggio d\'informazione.</b>
            </li><br><br>
            <li>
Prerequisiti:<br>
- Una galleria con tutte o alcune categorie private, visibili solo agli utenti registrati<br>
- Almeno i 2 gruppi d\'utenti Piwigo seguenti: "Attesa", senza alcuna autorizzazione sulle categorie private, e "Convalidati" con tutte le autorizzazioni per le categorie private<br>
- Il plugin NBC_UAM<br>
- Il plugin PWG Stuffs, per aggiungere un modulo di tipo "Blocco Personal"<br>
- In opzione, il plugin Extended Description per il supporto multi-lingue<br>
            </li><br><br>
            <li>
Tappe:<br><br>
A. Nel plugin NBC_UAM:
              <ol>
                <li>Attivare la conferma dell\'iscrizione</li>
                <li>Inserire un testo personalizzato che sarà inviato con l\'Email di conferma dell\'iscrizione. Se il plugin Extended Description è installato ed attivato, i tag di lingua possono essere utilizzati</li>
                <li>Selezionare il gruppo "Attesa" sotto la voce "Per gli utenti che non hanno convalidato la loro iscrizione"</li>
                <li>Selezionare il gruppo "Convalidati" sotto la voce "Per gli utenti che hanno convalidato la loro iscrizione"</li>
                <li>Salvare le impostazzioni</li>
              </ol>
<br>
B. Nel plugin PWG Stuffs :
              <ol>
                <li>Aggiungere un nuovo modulo "Blocco Personale : Mostrare il blocco personale (Nota o Editoriale per esempio)"</li>
                <li>Configurare il modulo, indicandone il titolo (ad esempio, "in attesa di convalida dell\'iscrizione"), la descrizione, ed in fine selezionando solo il gruppo "Attesa" nell\'elenco dei gruppi ammessi</li>
                <li>Completare il contenuto del modulo con il testo da visualizzare per gli utenti non convalidati. Come NBC_UAM, i tag di lingua possono essere utilizzati se il plugin Extended Description è installato ed attivato</li>
                <li>Selezzionare "Visualizzare il modulo nella homepage del sito"</li>
                <li>Salvare le impostazzioni</li>
              </ol>
            </li>
          </ul>';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.0
$lang['UAM_confirmmail_custom_Txt1'] = 'Testo della pagina di conferma - Conferma accettati';
$lang['UAM_confirmmail_custom_Txt2'] = 'Testo della pagina di conferma - Conferma respinto';
$lang['UAM_LastVisit_Date'] = 'ultima visita';
$lang['UAM_Nb_Days'] = 'Differenza in giorni';
$lang['UAM_Err_UserManager_Settings'] = 'Questa pagina è disponibile solo se "Conferma dell\'iscrizione" è attiva e se un gruppo di visitatori non convalidato è configurato in "Impostare le conferme e validazioni all\'iscrizione".';
// --------- End: New or revised $lang ---- from version 2.15.0


// --------- Starting below: New or revised $lang ---- from version 2.15.1
$lang['UAM_Support_txt'] = 'Il supporto ufficiale a questo plugin è solo su questi argomento del forum Piwigo:<br>
<a href="http://fr.piwigo.org/forum/viewtopic.php?id=12775" onclick="window.open(this.href);return false;">Forum francese - http://fr.piwigo.org/forum/viewtopic.php?id=12775</a>
<br>o<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=15015" onclick="window.open(this.href);return false;">Forum inglese - http://piwigo.org/forum/viewtopic.php?id=15015</a><br><br>
Disponibile anche, il bugtracker del progetto: <a href="http://piwigo.org/bugs/" onclick="window.open(this.href);return false;">http://piwigo.org/bugs/</a>';
// --------- End: New or revised $lang ---- from version 2.15.1


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_Force_Validation'] = 'Validazione manuale';
$lang['UAM_Confirm_Mail_true'] = ' Attivare - Validazione dal utente';
$lang['UAM_Confirm_Mail_local'] = ' Attivare - Validazione dal amministratore (nessuna chiave di validazione inviata)';
$lang['UAM_RedirToProfile'] = 'Ridirezione verso la pagina di personalizzazione';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.16.0
$lang['UAM_Expired_Group'] = '<b>Gruppo</b> per gli utenti la cui registrazione sara scaduta<br>';
$lang['UAM_Expired_Status'] = '<b>Statuto</b> per gli utenti la cui registrazione sara scaduta<br>';
$lang['UAM_GTAuto'] = 'Gestione automatica degli utenti fantasmi';
$lang['UAM_GTAutoDel'] = 'Cancellazione automatica dei conti';
$lang['UAM_GTAutoGp'] = 'Cambiamento automatico del gruppo / statuto';
$lang['UAM_GTAutoMail'] = 'Emailing di rilancio automatico';
$lang['UAM_Deleted_Account_Redirection_Page'] = 'Accesso negato - Account cancellato!';
$lang['UAM_title_redir_page'] = 'Accesso negato per causa di account cancellato !';
$lang['UAM_Error_GTAutoMail_cannot_be_set_without_ConfirmMail'] = 'Errore di coerenza nella configurazione prescelta :<br><br>
"Parametraggio monitoraggio degli iscritti e altre opzioni > Gestione degli utenti fantasmi (Ghost Tracker) > Gestione automatica degli utenti fantasmi > Email automatica su cambiamento di gruppo / statuto" non può essere attivato "Parametraggio delle conferme e validazione d\'iscrizione  > Conferma d\'iscrizione - Conferma dal utente" non è perattivata.<br><br>
Per garantire la coerenza, l\'opzione "Email automatica su cambiamento del gruppo / statuto" è stata automaticamente riposizionata in "disattivato".<br><br>';
$lang['UAM_Demotion of %s'] = 'Retrocessione di %s';
$lang['UAM_AdminValidationMail_Text'] = 'Notifica della validazione d\'iscrizione manuale';
$lang['UAM_Validation of %s'] = 'Validazione di %s';
// --------- End: New or revised $lang ---- from version 2.16.0


// --------- Starting below: New or revised $lang ---- from version 2.20.0
/*TODO*/$lang['UAM_CustomPasswRetr'] = 'Customize lost password email content';
/*TODO*/$lang['UAM_USRAuto'] = 'Automatic management of unvalidated users';
/*TODO*/$lang['UAM_USRAutoDel'] = 'Custom message on deleted account';
/*TODO*/$lang['UAM_USRAutoMail'] = 'Automated email reminder';
$lang['UAM_Disable'] = ' Disattivare (di default)';
$lang['UAM_Enable'] = ' Attivare ';
// --------- End: New or revised $lang ---- from version 2.20.0
?>