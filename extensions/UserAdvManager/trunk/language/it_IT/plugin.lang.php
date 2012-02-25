<?php

//global $lang,$conf;

//$conf_UAM = unserialize($conf['UserAdvManager']);


/* UserManager Tab */
$lang['UAM_Registration_Date'] = 'Data d\'iscrizione';


/* Mailing */
$lang['UAM_infos_mail %s'] = '%s, di seguito i vostri dati per accedere alla galleria:';
$lang['UAM_User: %s'] = 'Utente: %s';
$lang['UAM_Password: %s'] = 'Password: %s';
$lang['UAM_Link: %s'] = 'Cliccare su questo link per confermare la vostra iscrizione: %s';


/* Email confirmation page */
$lang['UAM_title_confirm_mail'] = 'Conferma della vostra iscrizione';
$lang['UAM_confirm_mail_page_title'] = 'Conferma l\'iscrizione';


/* Errors and Warnings */
$lang['UAM_audit_ok'] = 'Audit OK';
$lang['UAM_Err_audit_username_char'] = '<b>Questo account utente utilizza uno o più caratteri vietati:</b> ';
$lang['UAM_Err_audit_email_forbidden'] = '<b>Questo account utente usa un dominio email vietato:</b> ';
$lang['UAM_Err_audit_advise'] = '<b>Dovete eseguire delle correzioni per rispettare le nuove impostazioni che avete attivato.<br> Usare un programma per la gestione del database per correggere gli account utente direttamente nella tabella ###_USERS';
$lang['UAM_reg_err_login2'] = 'Il nome utente non deve contenere i caratteri seguenti: ';
$lang['UAM_reg_err_login5'] = 'Il vostro provider di posta usa un dominio email vietato. I domini vietati sono i seguenti : ';
$lang['UAM_empty_pwd'] = '[password vuota]';
$lang['UAM_no_update_pwd'] = '[profilo aggiornato senza modifica della password]';
$lang['UAM_No_validation_for_Guest'] = 'Il conto "Guest" non è soggetto a convalida';
$lang['UAM_No_validation_for_default_user'] = 'L\'account di default non è soggetto a conferma';
$lang['UAM_No_validation_for_Webmaster'] = 'Il conto del "Webmaster" non è soggetto a convalida';
$lang['UAM_No_validation_for_your_account'] = 'Il account personale di amminstratore non è soggetto a conferma';


/* Processing messages */
$lang['UAM_%d_Mail_With_Key'] = '%d messaggio con il rinnovo della chiave è stato inviato';
$lang['UAM_%d_Mails_With_Key'] = '%d messaggi con il rinnovo della chiave sono stati inviati';
$lang['UAM_%d_Reminder_Sent'] = '%d email di remind è stata inviata';
$lang['UAM_%d_Reminders_Sent'] = '%d email di remind sono state inviate';
$lang['UAM_%d_Validated_User'] = '%d utente convalidato manualmente';
$lang['UAM_%d_Validated_Users'] = '%d utenti convalidati manualmente';


/* Action button names */
$lang['UAM_Delete_selected'] = 'Cancellare';
$lang['UAM_Mail_without_key'] = 'Email di remind senza chiave';
$lang['UAM_Mail_with_key'] = 'Email di remind con chiave';




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['UAM_PasswordTest'] = 'Calcolo del punteggio';
/* Ghost Tracker Tab */
$lang['UAM_Tab_GhostTracker'] = 'GhostTracker';
$lang['UAM_Reminder'] = 'Email di remind';
$lang['UAM_Reminder_Sent_OK'] = 'SÌ';
$lang['UAM_Reminder_Sent_NOK'] = 'NO';
/* Errors and Warnings */
$lang['UAM_save_config'] ='Configurazione salvata';
$lang['UAM_reg_err_login3'] = 'Sicurezza : La password è obbligatoria!';
$lang['UAM_reg_err_login4_%s'] = 'Sicurezza : un sistema di controllo calcola un punteggio basandosi sulla complessità della password scelta. La complessità della password è troppo bassa (punteggio = %s). Si prega di scegliere una nuova password più sicura seguendo queste regole : <br>
- Usare delle lettere e dei numeri<br>
- Usare delle maiuscole e delle minuscole<br>
- Aumentare la lunghezza (numero di caratteri)<br>
Il punteggio minimo richiesto dall\'amministratore per la password è di : ';
$lang['UAM_No_reminder_for_Guest'] = 'Il conto utente "Guest" non è soggetto a ricevere dei promemoria dal GhostTracker';
$lang['UAM_No_reminder_for_default_user'] = 'L\'account utente di default non è soggetto a ricevere dei promemoria dal GhostTracker';
$lang['UAM_No_reminder_for_Webmaster'] = 'Il conto utente "Webmaster" non è soggetto a ricevere dei promemoria dal GhostTracker';
$lang['UAM_No_reminder_for_your_account'] = 'Il vostro account personale di amministratore non è soggetto a ricevere dei promemoria dal GhostTracker';
/* Action button names */
$lang['UAM_audit'] = 'Audit delle impostazioni';
$lang['UAM_submit'] = 'Salva le impostazioni';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Errors and Warnings */
$lang['UAM_GhostTracker_Init_OK'] = 'Inizzializzazione GhostTracker eseguita!';
/* Action button names */
$lang['UAM_GT_Reset'] = 'Reset del GhostTracker';
// --------- End: New or revised $lang ---- from version 2.12.2


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['UAM_mail_exclusionlist_error'] = 'Attenzione! Avete inserito una nuova riga all\'inizio dell\'elenco d\'esclusione email (indicato in rosso qui sotto). Anche se questa nuova riga non è visibile, la sua presenza potrebbe causare delle disfunzioni del plugin. Si prega di cancellare la riga vuota';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.4
/* Global Configuration Tab */
$lang['UAM_Title_Tab'] = 'UserAdvManager - Versione : ';
$lang['UAM_SubTitle1'] = 'Configurazione del plugin';
$lang['UAM_Tab_Global'] = 'Configurazione';
$lang['UAM_Title1'] = 'Impostare le restrizioni per le iscrizzioni';
$lang['UAM_Title2'] = 'Impostare le conferme e validazioni per l\'iscrizione';
$lang['UAM_Title3'] = 'Impostazioni utenti ghost';
$lang['UAM_Title4'] = 'Suggerimenti ed esempi d\'utilizzo';
$lang['UAM_No_Casse'] = 'Nome utente : Sensibile alle maiusc/minusc';
$lang['UAM_Username_Char'] = 'Nome utente : Esclusione di certi caratteri';
$lang['UAM_Username_Char_true'] = 'Vieta i caratteri : <br>(usare una virgola per separare ogni carattere)<br><br>';
$lang['UAM_Username_Char_false'] = ' Autorizzare tutti (di default)';
$lang['UAM_Password_Enforced'] = 'Rafforzare il livello di sicurezza delle password';
$lang['UAM_Password_Enforced_true'] = ' Attivare. Punteggio minimo : ';
$lang['UAM_AdminPassword_Enforced'] = 'Applicare agli amministratori';
$lang['UAM_PasswordTest'] = 'Password di prova : ';
$lang['UAM_ScoreTest'] = 'Risultato : ';
$lang['UAM_MailExclusion'] = 'Esclusione dei domini email';
$lang['UAM_MailExclusion_true'] = ' Escludi i seguenti domini : <br>(usare una virgola per separare ogni dominio)';

$lang['UAM_Mail_Info'] = 'Email d\'informazione per l\'utente :';
$lang['UAM_MailInfo_Text'] = ' Personalizzare il testo dell\'email :';
$lang['UAM_Confirm_Mail'] = 'Conferma dell\'iscrizione :';
$lang['UAM_ConfirmMail_Text'] = ' Personalizzare il testo dell\'email di conferma :';
$lang['UAM_Confirm_Group'] = 'Gruppi di convalida<br>(------- per non assegnare nessun gruppo)';
$lang['UAM_Confirm_Status'] = 'Convalida Statuti<br>(invia ------- per mantenere il valore di default di Piwigo)';
$lang['UAM_Confirm_grpstat_notice'] = 'ATTENZIONE : Si consiglia di usare o il gruppo o lo statuto di convalida ma non entrambi simultaneamente';
$lang['UAM_No_Confirm_Group'] = 'Gruppo per gli utenti che non hanno convalidato la loro iscrizione<br>';
$lang['UAM_Validated_Group'] = 'Gruppo per gli utenti che hanno convalidato la loro iscrizione<br>';
$lang['UAM_No_Confirm_Status'] = 'Stato per gli utenti che non hanno convalidato la loro iscrizione<br>';
$lang['UAM_Validated_Status'] = 'Stato per gli utenti che hanno convalidato la loro iscrizione<br>';
$lang['UAM_ValidationLimit_Info'] = 'Termine per la validazione dell\'iscrizione';
$lang['UAM_ConfirmMail_TimeOut_true'] = ' Attivare. Numero di giorni per la scadenza : ';
$lang['UAM_ConfirmMail_Remail'] = 'Email di rilancio ai visitatori non convalidati';
$lang['UAM_ConfirmMail_ReMail_Txt1'] = 'Personalizzare l\'email di remind <b><u>con</u></b> rigenerazione di una nuova chiave di convalida';
$lang['UAM_ConfirmMail_ReMail_Txt2'] = 'Personalizzare l\'email di remind <b><u>senza</u></b> rigenerazione di una nuova chiave di convalida';

$lang['UAM_GhostTracker'] = 'Gestione dei visitatori ghost (GhostTracker)';
$lang['UAM_GhostTracker_true'] = ' Attivare. Durata massima tra due visite in giorni: ';
$lang['UAM_GhostTracker_ReminderText'] = 'Testo di remind personalizzato';

/* Ghost Tracker Tab */
$lang['UAM_SubTitle4'] = 'GhostTracker';
$lang['UAM_GT_Init'] = 'Inizializzazione del GhostTracker';
$lang['UAM_GhostTracker_Title'] = 'Gestione degli visitatori ghost';
$lang['UAM_GhostTracker_Init'] = 'Se si attiva questa funzione per la prima volta o se viene riattivata dopo un lungo periodo durante il quale dei nuovi visitatori si sono iscritti, è necessario inizializzare o azzerare il Tracker Ghost. Questa azione è da effettuarsi solo dopo l\'attivazione o la riattivazione dell\'opzione; Cliccare dunque <u>una sola volta</u> sull\'pulsante di reset sottostante';
/* Mailing */
$lang['UAM_Add of %s'] = 'Profilo creato per %s';
$lang['UAM_Update of %s'] = 'Profilo %s aggiornato';
/* Mailing */
$lang['UAM_Ghost_reminder_of_%s'] = '%s, questa è un\'email di remind';
$lang['UAM_Reminder_with_key_of_%s'] = '%s, la vostra chiave di convalida è scaduta';
$lang['UAM_Reminder_without_key_of_%s'] = '%s, la chiave di convalida sta per scadere';
/* Errors and Warnings */
$lang['UAM_Err_GhostTracker_Settings'] = 'Questa pagina è disponibile solo se "GhostTracker" è attivo in "Impostare le iscrizioni monitorate e altre opzioni"';
$lang['UAM_Err_Userlist_Settings'] = 'Questa pagina è disponibile solo se "Monitoraggio degli utenti iscritti" è attivo nella sezione "Impostare le iscrizioni monitorate e altre opzioni"';
// --------- End: New or revised $lang ---- from version 2.13.4


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_AdminConfMail'] = 'Conferma dell\'iscrizione per gli amministratori';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.0
$lang['UAM_confirmmail_custom_Txt1'] = 'Testo della pagina di conferma - Conferma accettata';
$lang['UAM_confirmmail_custom_Txt2'] = 'Testo della pagina di conferma - Conferma respinta';
$lang['UAM_LastVisit_Date'] = 'Ultima visita';
$lang['UAM_Nb_Days'] = 'Differenza in giorni';
$lang['UAM_Err_UserManager_Settings'] = 'Questa pagina è disponibile solo se "Conferma dell\'iscrizione" è attiva e se un gruppo di visitatori non convalidato è configurato in "Impostare le conferme e validazioni all\'iscrizione"';
// --------- End: New or revised $lang ---- from version 2.15.0


// --------- Starting below: New or revised $lang ---- from version 2.15.1
$lang['UAM_Support_txt'] = 'Il supporto ufficiale per questo plugin viene effettuato esclusivamente sul forum EN di Piwigo :<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=15015" onclick="window.open(this.href);return false;">Forum inglese - http://piwigo.org/forum/viewtopic.php?id=15015</a>
<br><br>
Disponibile anche, il bugtracker del progetto : <a href="http://piwigo.org/bugs/" onclick="window.open(this.href);return false;">http://piwigo.org/bugs/</a>';
// --------- End: New or revised $lang ---- from version 2.15.1


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_Force_Validation'] = 'Validazione manuale';
$lang['UAM_Confirm_Mail_true'] = ' Attivare - Validazione da parte dell\'utente';
$lang['UAM_Confirm_Mail_local'] = ' Attivare - Validazione da parte di un amministratore (nessuna chiave di validazione inviata)';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.16.0
$lang['UAM_Expired_Group'] = '<b>Gruppo</b> per gli utenti per i quali l\'iscrizione sarà scaduta<br>';
$lang['UAM_Expired_Status'] = '<b>Stato</b> per gli utenti per i quali l\'iscrizione sarà scaduta<br>';
$lang['UAM_GTAuto'] = 'Gestione automatica degli utenti ghost';
$lang['UAM_GTAutoDel'] = 'Cancellazione automatica degli account';
$lang['UAM_Deleted_Account_Redirection_Page'] = 'Accesso negato - Account cancellato!';
$lang['UAM_title_redir_page'] = 'Accesso negato per aver cancellato l\'account!';
$lang['UAM_Error_GTAutoMail_cannot_be_set_without_ConfirmMail'] = 'Errore di coerenza nella configurazione prescelta :
<br><br>
"Parametraggio monitoraggio degli iscritti e altre opzioni > Gestione degli utenti fantasmi (Ghost Tracker) > Gestione automatica degli utenti fantasmi > Email automatica su cambiamento di gruppo / statuto" non può essere attivato se "Parametraggio delle conferme e validazione d\'iscrizione > Conferma d\'iscrizione - Conferma dal utente" non è stata perattivata
<br><br>
Per garantire la coerenza, l\'opzione "Email automatica su cambiamento del gruppo / statuto" è stata automaticamente riposizionata a "disattivato"
<br><br>';
$lang['UAM_Demotion of %s'] = 'Retrocessione di %s';
$lang['UAM_AdminValidationMail_Text'] = 'Notifica della validazione d\'iscrizione manuale';
$lang['UAM_Validation of %s'] = 'Validazione di %s';
// --------- End: New or revised $lang ---- from version 2.16.0


// --------- Starting below: New or revised $lang ---- from version 2.20.0
$lang['UAM_CustomPasswRetr'] = 'Personalizzare il contenuto della email per password persa';
$lang['UAM_USRAuto'] = 'Gestione automatica dei visitatori non convalidati';
$lang['UAM_USRAutoDel'] = 'Messaggio al momento della cancellazione automatica degli account';
$lang['UAM_USRAutoMail'] = 'Promemoria automatico';
$lang['UAM_Disable'] = ' Disattivare (di default)';
$lang['UAM_Enable'] = ' Attivare ';
$lang['UAM_Tips1'] = 'Messaggio d\'informazione per le registrazioni non confermate con UAM e PWG_Stuffs';
$lang['UAM_Tips1_txt'] = '          <ul>
            <li>
            Obiettivo : Informare il visitatore che la sua iscrizione è in attesa di convalida visualizzando un messagio in un blocco personale sulla homepage della galleria finché l\'iscrizione non viene convalidata.<br><br>
            <b>Nota : Di default, l\'Utente "Guest" vede solo gli album pubblici, senza nessun messaggio d\'informazione.</b>
            </li><br><br>
            <li>
Prerequisiti :<br>
- Una galleria con tutti o alcuni album privati, visibili solo agli utenti iscritti<br>
- Almeno i 2 gruppi d\'utenti Piwigo seguenti : "Attesa", senza alcuna autorizzazione sugli album privati, e "Convalidati" con tutte le autorizzazioni per gli album privati<br>
- Il plugin UAM<br>
- Il plugin PWG Stuffs, per l\'aggiunta di un modulo speciale UAM<br>
- In opzione, il plugin Extended Description per il supporto multi-lingue<br>
            </li><br><br>
            <li>
Tappe :<br><br>
A. Nel plugin UAM :
              <ol>
                <li>Attivare la conferma dell\'iscrizione</li>
                <li>Attivare l\'opzione "Modulo PWG Stuffs"</li>
                <li>Inserire un testo personalizzato che sarà inviato con l\'email di conferma dell\'iscrizione. Se il plugin Extended Description è attivato, i tag di lingua possono essere utilizzati</li>
                <li>Selezionare il gruppo "Attesa" sotto la voce "Per gli utenti che non hanno convalidato la loro iscrizione"</li>
                <li>Selezionare il gruppo "Convalidati" sotto la voce "Per gli utenti che hanno convalidato la loro iscrizione"</li>
                <li>Salvare le impostazioni</li>
              </ol>
<br>
B. Nel plugin PWG Stuffs :<br>
              <ol>
                <li>Andare alla scheda "Aggiungere un nuovo modulo"</li>
                <li>Scegliere "Modulo UAM"</li>
                <li>Configurare il modulo, indicandone il titolo (ad esempio, "Iscrizione in attesa di convalida"), la descrizione, ed infine selezionando solo il gruppo "Attesa" nell\'elenco dei gruppi ammessi</li>
                <li>Completare il contenuto del modulo con il testo del messaggio d\'informazione che verra visualizzato agli utenti non convalidati. Come per UAM, i tag di lingua possono essere utilizzati se il plugin Extended Description è attivato</li>
                <li>Selezionare "Visualizzare il modulo nella homepage del sito"</li>
                <li>Salvare le impostazzioni</li>
              </ol>
            </li>
          </ul>';
$lang['UAM_Tips2'] = 'Messaggio d\'informazione per le registrazioni non confermate con UAM e Additional Pages';
$lang['UAM_Tips2_txt'] = '          <ul>
            <li>
            Obiettivi : Informare il visitatore che l\'iscrizione è in attesa di convalida visualizzando una pagina aggiuntiva che sostituisce la pagina standard della galleria, finché l\'iscrizione non viene convalidata.
            <br><br>
            Vantaggi rispetto al metodo con PWG_Stuffs : Consente una formattazione e visualizzazione delle informazioni immediatamente dopo l\'iscrizione dei visitatori.
            </li><br><br>
            <li>
Prerequisiti :<br>
- Una galleria con tutti o alcuni album privati, visibili solo agli utenti iscritti<br>
- Almeno i 2 gruppi d\'utenti Piwigo seguenti : "Attesa", senza alcuna autorizzazione sugli album privati, e "Convalidati" con tutte le autorizzazioni per gli album privati<br>
- Il plugin UAM<br>
- Il plugin Additional Pages per l\'aggiunta e la gestione di una pagina aggiuntiva che rimpiazza la pagina di default della galleria<br>
- In opzione, il plugin Extended Description per il supporto multi-lingue<br>
            </li><br><br>
            <li>
Tappe :<br><br>
A. Nel plugin UAM :
              <ol>
                <li>Attivare la conferma dell\'iscrizione</li>
                <li>Inserire un testo personalizzato che sarà inviato con l\'email di conferma dell\'iscrizione. Se il plugin Extended Description è attivato, i tag di lingua possono essere utilizzati</li>
                <li>Selezionare il gruppo "Attesa" sotto la voce "Per gli utenti che non hanno convalidato la loro iscrizione"</li>
                <li>Selezionare il gruppo "Convalidati" sotto la voce "Per gli utenti che hanno convalidato la loro iscrizione"</li>
                <li>Salvare le impostazzioni</li>
              </ol>
<br>
B. Nel plugin Additional Pages :<br>
                <b>NOTA : La gestione dei diritti di accesso sulle pagine aggiuntive deve essere attivata (vedi le impostazioni di configurazione del plugin Additional Pages).</b>
                <br>
              <ol>
                <li>Aggiungere una nuova pagina con almeno i seguenti parametri:</li>
                <ul>
                  <li>Nome della pagina : Il nome che si vuole dare alla pagina aggiuntiva (ad esempio: Iscrizione non convalidata)</li>
                  <li>Impostare come homepage selezionato</li>
                  <li>Gruppi autorizzati : Selezionare la casella corrispondente al gruppo di "Attesa" configurato in UAM </li>
                  <li>Contenuto : Il testo che si desidera visualizzare ai visitatori</li>
                </ul>
                <br>
                <li>Questo è tutto! Solo i visitatori iscritti e la cui incrizione non è stata convalidata vedranno questa pagina indice aggiuntiva.</li>
              </ol>
            </li>
          </ul>';
            </li><br><br>
            <li>
Prerequisiti :<br>
- Una galleria con tutte o alcuni album privati, visibili solo agli utenti iscritti<br>
- Almeno 2 gruppi d\'utenti Piwigo seguenti : "Attesa", senza alcuna autorizzazione sugli album privati, e "Convalidati" con tutte le autorizzazioni per gli album privati<br>
- Il plugin UAM<br>
- Il plugin Additional Pages per l\'aggiunta e la gestione di una pagina aggiuntiva che rimpiazza la pagina indice di default della galleria<br>
- In opzione, il plugin Extended Description per il supporto multi-lingue<br>
            </li><br><br>
            <li>
Tappe :<br><br>
A. Nel plugin UAM :
              <ol>
                <li>Attivare la conferma dell\'iscrizione</li>
                <li>Inserire un testo personalizzato che sarà inviato con l\'email di conferma dell\'iscrizione. Se il plugin Extended Description è attivato, i tag di lingua possono essere utilizzati</li>
                <li>Selezionare il gruppo "Attesa" sotto la voce "Per gli utenti che non hanno convalidato la loro iscrizione"</li>
                <li>Selezionare il gruppo "Convalidati" sotto la voce "Per gli utenti che hanno convalidato la loro iscrizione"</li>
                <li>Salvare le impostazzioni</li>
              </ol>
<br>
B. Nel plugin Additional Pages :<br>
                <b>NOTA : La gestione dei diritti di accesso sulle pagine aggiuntive deve essere attivata (vedi le impostazioni di configurazione del plugin Additional Pages).</b>
                <br>
              <ol>
                <li>Aggiungere una nuova pagina con almeno i seguenti parametri:</li>
                <ul>
                  <li>Nome della pagina : Il nome che si vuole dare alla pagina aggiuntiva (ad esempio: Iscrizione non convalidata)</li>
                  <li>Impostare come homepage selezionato</li>
                  <li>Gruppi autorizzati : Selezionare la casella corrispondente al gruppo di "Attesa" configurato in UAM </li>
                  <li>Contenuto : Il testo che si desidera visualizzare ai visitatori</li>
                </ul>
                <br>
                <li>Questo è tutto! Solo i visitatori iscritti e la cui incrizione non è stata convalidata vedranno questa pagina indice aggiuntiva.</li>
              </ol>
            </li>
          </ul>';
$lang['UAM_No_Ghosts'] = 'Nessun visitatore ghost al momento';
$lang['UAM_No_Userlist'] = 'Nessun visitatore al momento';
$lang['UAM_No_Usermanager'] = 'Per il momento, nessuna validazione d\'iscrizione';
$lang['UAM_Stuffs_Title'] = 'Modulo UAM';
$lang['UAM_Stuffs_Desc'] = 'Aggiunge un modulo d\'informazione per utenti non convalidati';
$lang['UAM_Stuffs'] = 'Modulo PWG Stuffs';
// --------- End: New or revised $lang ---- from version 2.20.0


// --------- Starting below: New or revised $lang ---- from version 2.20.3
$lang['UAM_DumpTxt'] = 'Backup & Restore della vostra configurazione';
$lang['UAM_Dump_Download'] = 'Selezionare per scaricare il file di backup :';
$lang['UAM_Save'] = 'Esegui backup';
$lang['UAM_Dump_OK'] = 'File di Backup creato con successo';
$lang['UAM_Dump_NOK'] = 'Errore : Impossibile creare il file di backup!';
// --------- End: New or revised $lang ---- from version 2.20.3


// --------- Starting below: New or revised $lang ---- from version 2.20.4
$lang['UAM_HidePassw'] = 'Password in chiaro nella email d\'informazione';
// --------- End: New or revised $lang ---- from version 2.20.4

// --------- Starting below: New or revised $lang ---- from version 2.20.11
$lang['UAM_Error_Using_illegal_flag'] = 'Errore di sintassi! La bandierina d\'inserzione automatica [Kdays] è usata senza che l\'opzione "Termine per la validazione dell\'iscrizione" è stata attivata. Siete pregati di attivare l\'opzione o correggere il(i) campo(i) di colore rosso.';
// --------- End: New or revised $lang ---- from version 2.20.11


// --------- Starting below: New or revised $lang ---- from version 2.30.2
$lang['UAM_RedirToProfile'] = 'Ridirezione verso la pagina di personalizzazione';
$lang['UAM_GTAutoGp'] = 'Cambiamento automatico del gruppo / statuto / livello di riservatezza';
$lang['UAM_GTAutoMail'] = 'Emailing di rilancio automatico per cambiamento gruppo / statuto / livello di riservatezza';
// --------- End: New or revised $lang ---- from version 2.30.2
$lang['UAM %d user pwdreseted'] = 'Rinnovo password richiesto per %d utente';
$lang['UAM %d users pwdreseted'] = 'Rinnovo password richiesto per %d utenti';
$lang['UAM_Admins cannot be pwdreset'] = 'Il rinnovo della password non può essere impostato per gli account amministratori!';
$lang['UAM_Bad_version_backup'] = 'La versione del file di backup non corrisponde alla versione del plugin! Il ripristino non verrà effettuato.';
$lang['UAM_Confirm_Level'] = 'Livello della privacy<br>(lascia ------- per mantenere il default di Piwigo)';
$lang['UAM_Default user cannot be pwgreset'] = 'Il rinnovo della password non può essere impostato per l\'account default!';
$lang['UAM_Default_AdminValidation_Txt'] = 'Ciao [username]! Grazie per esserti registrato a [mygallery].
Il tuo account è stato attivato manualmente dal webmaster di [mygallery]. Puoi ora eseguire il login a [myurl] e modificare il tuo profilo.';
$lang['UAM_Default_CfmMail_Custom_Txt1'] = 'Benvenuto [username]! Hai confermato che sei una persona e puoi ora usare [mygallery]!';
$lang['UAM_Default_CfmMail_Custom_Txt2'] = 'La tua chiave di attivazione è errata o hai già confermato il tuo account, per favore contatta il webmaster per risolvere il problema.';
$lang['UAM_Default_CfmMail_Remail_Txt1'] = 'Ciao [username].

Questo è un reminder poichè ti sei registrato su [mygallery] ma non hai ancora confermato la registrazione e la chiave di conferma è scaduta. Per permetterti l\'accesso alla galleria, il tuo periodo di conferma è stato resettato. Hai ancora x giorni per confermare la tua registrazione.

NB: Dopo questo periodo, il tuo account verrà permanentemente eliminato.';
$lang['UAM_Default_CfmMail_Remail_Txt2'] = 'Ciao [username].

Questo è un reminder poichè ti sei registrato su [mygallery] ma non hai ancora confermato la registrazione e la chiave di conferma sta per scadere. Per permetterti l\'accesso alla galleria, hai ancora x giorni per confermare la tua registrazione cliccando sul link del messaggio che hai ricevuto quando ti sei registrato.

NB: Dopo questo periodo, il tuo account verrà permanentemente eliminato.';
$lang['UAM_Default_ConfirmMail_Txt'] = 'Ciao [username]! Grazie per esserti registrato su [mygallery]
Per completare la procedura e poter vedere le immagini, conferma la tua registrazione cliccando nel link contenuto in questo messaggio.';
$lang['UAM_Default_GhstDeletion_Txt'] = 'Siamo spiacenti [username], il tuo account è stato eliminato a causa del lungo tempo trascorso dall\'ultima visita a [mygallery].
Per favore registrati nuovamente';
$lang['UAM_Default_GhstDemotion_Txt'] = 'Siamo spiacenti [username], il tuo account è stato eliminato a causa del lungo tempo trascorso dalla tua ultima visita a [mygallery].
Usa il link sottostante per riconfermare il tuo account';
$lang['UAM_Default_GhstReminder_Txt'] = 'Ciao [username].

Questo è un reminder poichè è trascorso diverso tempo dal tuo ultimo accesso alla nostra galleria [mygallery]. Se non vuoi più usare questo account, segnalacelo rispondendo a questa mail. Il tuo account verrà cancellato.

Alla ricezione di questo messaggio e non ricevendo altre visite entro [days] giorni, saremo obbligati a cancellare l\'account.

Distinti saluti,
l\'amministratore della galleria [mygallery] - [myurl]';
$lang['UAM_Default_InfoMail_Txt'] = 'Ciao [username]! Grazie per esserti registrato su [mygallery]
Qui sotto trovi le informazioni per la connessione';
$lang['UAM_Default_PwdRequest_Txt'] = 'Hai richiesto il rinnovo della password. Qui sotto trovi i nuovi dati di connessione';
$lang['UAM_Default_RejectConnexion_Txt'] = 'Siamo spiacenti, non hai ancora confermato la registrazione, perciò non ti puoi connettere ora alla galleria. Controlla la tua casella mail. Dovresti trovare un email inviata dalla galleria, contenente un link per eseguire la conferma. Se non la trovi, contatta il webmaster.';
$lang['UAM_Default_ValidationTimeout_Txt'] = 'Siamo spiacenti, il tuo account è stato eliminato poichè non hai confermato la registrazione nel tempo richiesto ([Kdays] days). Riprova la registrazione con un account mail valido';
$lang['UAM_Error_Using_illegal_Kdays'] = 'L\'uso del tag [Kdays] è permesso solo se è attivata la scadenza per la conferma della registrazione. Controlla il testo in rosso per correggere il problema.';
$lang['UAM_Expired_Level'] = '<b>Il livello di privacy</b> per la registrazione degli utenti  è scaduto<br>';
$lang['UAM_Generic cannot be pwdreset'] = 'Il rinnovo della password non può essere impostato per gli account generici!';
$lang['UAM_Guest cannot be pwdreset'] = 'Il rinnovo della password non può essere impostato per l\'account ospite!';
$lang['UAM_MailExclusion_No'] = 'Esclusione domini mail non disponibile in quanto le email non sono obbligatorie per la registrazione';
$lang['UAM_MiscOptions'] = 'Altre opzioni varie';
$lang['UAM_NewFeature'] = 'Nuove funzionalità!';
$lang['UAM_No_Backup_File'] = 'Nessun file di backup disponibile!';
$lang['UAM_No_Valid_Level'] = 'Livello privacy per gli utenti che non hanno confermato la loro iscrizione <br>';
$lang['UAM_Password reset selected users'] = 'Richiedi rinnovo password per gli utenti selezionati';
$lang['UAM_Password_Reset_Msg'] = 'Cambia la tua password!';
$lang['UAM_PwdReset'] = 'Rinnovo password';
$lang['UAM_PwdReset_Done'] = 'Password rinnovata';
$lang['UAM_PwdReset_NA'] = 'Password originale';
$lang['UAM_PwdReset_Todo'] = 'Password da rinnovare';
$lang['UAM_RejectConnexion'] = 'Rifiuta connessione dell\'utente finchè non è confermata la registrazione';
$lang['UAM_RejectConnexion_Custom_Txt'] = 'Personalizza testo di rifiuto';
$lang['UAM_Reject_Page_Title'] = 'Connessione non permessa!';
$lang['UAM_Restoration_NOK'] = 'E\' avvenuto un errore durante il ripristino della configurazione. Controlla la validità del file di backup.';
$lang['UAM_Restoration_OK'] = 'Il ripristino della configurazione è stato completato con successo! Ricarica la pagina di amministrazione di UAM per vedere la configurazione ripristinata.';
$lang['UAM_Restore'] = 'Per ripristinare il file della tua configurazione. Solo i file salvati sul server sono mantenuti.
<br><br>
<b style="color: red;">Attenzione alla versione del backup!<br>Un backup fatto da una versione diversa del plugin non può essere ripristinato. </b>';
$lang['UAM_Restore_File'] = 'Ripristino configurazione';
$lang['UAM_Title5'] = 'Opzioni varie';
$lang['UAM_Tracking confirmations'] = 'Monitora conferme';
$lang['UAM_Tracking registered users'] = 'Monitora utenti registrati';
$lang['UAM_Valid_Level'] = 'Livello privacy per gli utenti che hanno confermato la loro iscrizione <br>';
$lang['UAM_Webmaster cannot be pwdreset'] = 'Il rinnovo della password non può essere impostato per l\'account webmaster!';
$lang['UAM_You cannot pwdreset your account'] = 'Il rinnovo della password non può essere impostato per il tuo stesso account!';
$lang['UAM_You need to confirm pwdreset'] = 'Devi confermare il rinnovo della password (segna la casella)!';
?>