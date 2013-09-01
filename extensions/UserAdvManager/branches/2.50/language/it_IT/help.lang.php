<?php

$lang['UAM_confirmTitle_d'] = '- Generazione di un\'email d\'informazione<br>
- Generazione di un\'email di conferma iscrizione<br>
- Gruppi, stato o livello di privacy auto adesione<br>
- Limitazione del termine di convalida dell\'iscrizione<br>
- Generazione email di promemoria<br>
...
';
$lang['UAM_carexcTitle_d'] = 'Può essere interessante vietare certi caratteri per i pseudo (ad esempio: negare login contenente @). Questa opzione permette di escludere i caratteri o sequenza di caratteri, eventi.<br>
NB: L\'opzione può anche escludere parole intere.
<br><br>
<b style=&quot;color: red;&quot;>Attenzione: questa opzione non ha alcun effetto sui pseudo creati prima della sua attivazione.</b>';
$lang['UAM_passwTitle_d'] = 'L\'attivazione di questa opzione rende obbligatorio l\'inserimento di una password al momento dell\'iscrizione, e richiede la password scelta dal visitatore di incontrare un livello minimo di complessità. Se la soglia non viene raggiunta, il punteggio conseguito e il punteggio minimo da raggiungere sono visualizzate, insieme con raccomandazioni per aumentare il valore di questa partitura.<br><br>
Non vi è prova in campo per misurare la complessità di una password, e può permettersi di avere un\'idea del punteggio per definire personalizzati complessi.<br><br>
Nota: Il punteggio di una password è calcolato sulla base di diversi parametri: la lunghezza, il tipo di caratteri utilizzati (lettere, numeri, lettere maiuscole, minuscole, caratteri speciali). Un punteggio inferiore a 100 è considerata bassa, da 100 a 500, la complessità è nella media, oltre 500, la sicurezza è eccellente.';
$lang['UAM_passwtestTitle'] = 'Prova la complessità di una password';
$lang['UAM_passwtestTitle_d'] = 'Inserisci la password per testarla e quindi fare clic su &quot;Calcolo del punteggio&quot;, per vedere il risultato.';
$lang['UAM_passwadmTitle_d'] = 'Un amministratore può creare un account utente con o senza l\'applicazione della regola della complessità di calcolo.<br><br>
Nota: Se l\'account utente creato vuole cambiare la password e il rafforzamento password per gli utenti è attivo, sarà soggetta alla regola.';
$lang['UAM_infomailTitle_d'] = 'Questa opzione consente di automatizzare l\'invio di una e-mail le informazioni a un utente quando cambia la sua password o indirizzo e-mail nel loro profilo.<br><br>
Il contenuto del messaggio inviato è composto da una parte personalizzabile di introdurre una piccola nota di benvenuto e una parte fissa che indica il login, password e indirizzo di posta elettronica dell\'utente.';


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_adminconfmailTitle_d'] = '&Egrave; possibile disattivare la convalida solo per gli account utente creato dall\'amministratore Piwigo tramite l\'interfaccia di gestione di utenti.<br><br>
Attivando questa opzione, la convalida email d\iscrizione verr&agrave; inviato ad ogni utente creato da admin.<br><br>
Disabilitando questa opzione ((predefinito)), solo le informazioni e-mail viene inviata (se &quot;E-mail informazioni per l\'utente&quot; &egrave; abilitato).';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_restricTitle_d'] = '- Caratteri vietati nei nomi degli utenti<br>
- Rafforzare il livello di sicurezza delle password<br>
- Esclusione dei domini email<br>
...
';
$lang['UAM_confirmgrpTitle'] = 'Gruppi';
$lang['UAM_confirmlevelTitle'] = 'Livello privacy';
$lang['UAM_confirmstatTitle'] = 'Statuti';
$lang['UAM_GTAutoDelTitle'] = 'Messaggio personalizzato all\'eliminazione di un account';
$lang['UAM_GT_MainTitle_d'] = '- Gestione utenti ghost automatica o manuale<br>
- E-mail<br>
...';
$lang['UAM_miscTitle_d'] = '- Controllo utenti registrati<br>
- Nickname obbligatorio per i commenti degli ospiti<br>
...';
$lang['UAM_remailtxt1Title'] = 'Promemoria email con generata nuova chiave';
$lang['UAM_remailtxt2Title'] = 'Promemoria email senza generare nuova chiave';
$lang['UAM_tipsTitle_d'] = 'Suggerimenti e vari esempi d\'uso';
$lang['UAM_USRAutoMailTitle_d'] = 'Quando attivata, questa funzione invierà automaticamente agli utenti che corrispondono ai criteri un contenuto personalizzato nelle &quot;email di reminder con la nuova chiave generata&quot;';
$lang['UAM_HidePasswTitle_d'] = 'Scegli qui se si desidera visualizzare la password scelta da parte del visitatore nella e-mail di informazioni. Se si attiva l\'opzione, la password apparirà in chiaro. Se si disattiva la password non apparirà.';
$lang['UAM_RedirTitle_d'] = 'Questa opzione reindirizza automaticamente un utente registrato alla sua pagina di personalizzazione solo al primo collegamento alla galleria.<br><br>
Attenzione: Questa funzione non si applica a tutti gli utenti registrati. Quelli con &quot;admin&quot;, &quot;webmaster&quot; e &quot;generico&quot; stato sono esclusi.';
$lang['UAM_RejectConnexion_d'] = 'Se attivato, i nuovi utenti registrati che non hanno confermato la loro iscrizione non saranno in grado di connettersi alla galleria. Essi saranno reindirizzati a una pagina speciale per informarli di questo stato.<br><br>
<b style=&quot;color: red;&quot;>Attenzione - Questa funzione è disponibile solo in combinazione con i gruppi di conferma! Vedere di seguito per impostare i gruppi come richiesto.</b>';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Quando una registrazione è in attesa di approvazione manuale da parte di un\'amministratore o Webmaster, una e-mail di notifica per l\'utente viene mandata automaticamente. Inserisci qui il tuo oggetto personalizzato per la validazione via email manuale.<br>
Per impostazione predefinita, il campo ha un testo generico in inglese, ma si può cambiare e utilizzare i tag traduzione [lang =?] del plugin Extended Description se installato.
<br><br>
<br>
I seguenti tag aggiuntivi personalizzati sono disponibili senza utilizzare il plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione del messaggio email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>';
$lang['UAM_AdminValidationMail_d'] = 'Quando una registrazione è in attesa di approvazione manuale da parte di un\'amministratore o Webmaster, una e-mail di notifica per l\'utente viene mandata automaticamente.
Inserisci qui il testo che appare in questa e-mail.
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione del messaggio.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della tua galleria se impostato nelle opzioni di configurazione di Piwigo.
<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended description se è attivo.';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Personalizza qui il tuo testo di spiegazione per informare gli utenti non confermati che non potranno accedere alla galleria finché non avranno confermato la loro registrazione.
<br><br>
Questo campo è compatibile con l\'Editor FCK e, per il multi-lingue, puoi utilizzare i tags [lang] del plugin Extended description se è attivo.';
$lang['UAM_mailexcTitle_d'] = 'Di default, Piwigo accetta tutti gli indirizzi nel formato xxx@yyy.zz. Abilitando questa opzione, escluderete alcuni domini nel formato: @ [domain_name].[domain_extension].<br><br>
Esempi:<br>
@hotmail.com -> esclude indirizzi *@hotmail.com<br>
@hotmail -> esclude indirizzi *@hotmail*<br><br>
<b style=&quot;color: red;&quot;>Warning - Questa opzione funziona solo se l\'indirizzo email è obbligatorio per la registrazione! Per favore vedere le opzioni di configrazione di Piwigo.</b>';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>ATTENZIONE: Per l\'utilizzo di gruppi di conferma è necessario aver creato almeno un gruppo di utenti ed è definita &quot;di default&quot; nella gestione dei gruppi utenti Piwigo.</b><br><br>
I gruppi sono convalidati per l\'uso in combinazione con il &quot;Conferma di iscrizione&quot;';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>ATTENZIONE: L\'uso del status su conferma presuppone che sia stato mantenuto l\'utente &quot;Guest&quot; con impostazione di default (come modello di utente) per registrarne nuovi. Nota: è possibile impostare qualsiasi altro utente come modello per i nuovi iscritti. Si prega di fare riferimento alla documentazione di Piwigo per maggiori dettagli.</b><br><br>
Lo Stato è convalidato per l\'uso in combinazione con la &quot;Conferma di iscrizione&quot;';
$lang['UAM_Tracking registered users_d'] = 'Questo attiva una tabella in &quot;Tracking utenti registrati&quot; scheda in cui sono elencati gli utenti registrati alla galleria con la data della loro ultima visita e il tempo trascorso (in giorni) dalla loro ultima visita. Il monitoraggio è puramente informativo per l\'amministratore della galleria.';
$lang['UAM_StuffsTitle_d'] = 'In questo modo un blocco UAM supplementare nel PWG Stuffs plugin (se installato) per informare i visitatori che non hanno confermano la loro iscrizione per la loro condizione.
<br><br>
Si prega di fare riferimento ai suggerimenti <b>Tips ed esempi di utilizzo</b> nella parte inferiore di questa pagina per i dettagli.';
$lang['UAM_GTAutoTitle_d'] = 'Questa opzione consente di applicare le regole per la gestione automatizzata degli utenti ghosts.<br><br>Principio di base: un utente che ha raggiunto il tempo massimo tra le visite <b><u>ed</u></b> è già stato avvisato per e-mail è considerato come scaduto. Quindi è possibile applicare le regole di elaborazione automatizzate come la cancellazione automatica degli account scaduti o retrocessione limitando l\'accesso alla galleria (passare automaticamente ad un gruppo ristretto e/o di stato). <br><br>L\'attivazione di questi automazione si ottiene quando si collegano gli utenti (tutti gli utenti!) alla galleria.';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>ATTENZIONE: L\'uso di livello di privacy è necessario che li hanno utilizzati con le vostre fotografie. Si prega di fare riferimento alla documentazione di Piwigo per maggiori dettagli.</b><br><br>
Il livello di privacy è convalidato per l\'uso in combinazione con la &quot;Conferma di iscrizione&quot;';
$lang['UAM_GTAutoGpTitle_d'] = 'Il cambio automatico del gruppo, lo stato o il livello di privacy è come un abbassamento di livello dei conti coinvolti e lavorare sullo stesso principio come il livello di gruppo, lo stato o la privacy di conferma (vedi &quot;Impostazione conferma della registrazione&quot;). Perciò sii per definire un gruppo, stato e / o abbassamento di livello alla galleria. Se questo è già stato definito con l\'uso della funzione di conferma della registrazione, lo stato e / o abbassamento di livello di accesso alla galleria.<br><br>
<b style=&quot;color: red;&quot;>Nota importante:</b> Se un utente ghost non ha ancora sentito dopo il limite di tempo e nonostante la notifica automatica via e-mail (se abilitata), egli sarà automaticamente eliminato dal database.';
$lang['UAM_DumpTitle_d'] = 'Questo consente di salvare l\'intera configurazione del plugin in un file in modo da poterlo ripristinare in caso di problemi (per esempio: errata manipolazione o prima di un aggiornamento). Per impostazione predefinita, il file viene memorizzato in questa cartella ../plugins/UserAdvManager/include/backup/ ed è chiamato
&quot;UAM_dbbackup.sql&quot;.
<br><br>
<b style=&quot;color: red;&quot;>Attenzione: il file viene sovrascritto ogni azione di backup!</b>
<br><br>
A volte può essere utile per recuperare il file di backup sul computer. Ad esempio: per ripristinare in un altro database o per mantenere più file di salvataggio. Per fare questo, è sufficiente selezionare la casella per scaricare il file.
<br><br>
Il recupero da questa interfaccia è disponibile solo per il file di backup locale
(../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql).
Scaricato il file di backup non può essere ripristinato in questo modo. Per fare questo, si deve utilizzare l\'apposito strumento di gestione di database (come PhpMyAdmin per database MySql).
<br><br>
<b style=&quot;color: red;&quot;>Attenzione: Al termine del ripristino, è necessario ricaricare la pagina di amministrazione del plugin per visualizzare le impostazioni ripristinate!</b>';
$lang['UAM_CustomPasswRetrTitle_d'] = 'Per impostazione predefinita, quando un utente ha perso la password e seleziona l\'opzione di recupero, riceve una e-mail contenente solo il suo username e la sua nuova password.
<br><br>
Qui, puoi aggiungere testo di tua scelta per essere inserito
<b><u>prima</u></b> delle informazioni standard.
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della galleria, se impostato nelle opzioni di configurazione di Piwigo.
<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended description, se è attivo.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Inserisci qui il tuo oggetto personalizzato per l\'email di promemoria conferma della registrazione.<br>
Per impostazione predefinita, il campo ha un testo generico in inglese, ma si può cambiare e utilizzare i tag di traduzione [lang=?] del plugin Extended Description se ​​installato.
<br><br>
I seguenti tag aggiuntivi personalizzazioni sono disponibili senza utilizzare il plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione dell\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Inserisci qui il tuo oggetto personalizzato per l\'email di promemoria conferma della registrazione (con o senza nuova generazione di chiavi).<br>
Per impostazione predefinita, il campo ha un testo generico in inglese, ma si può cambiare e utilizzare i tag di traduzione [lang=?] del plugin Extended Description se ​​installato.
<br><br>
I seguenti tag aggiuntivi personalizzazioni sono disponibili senza utilizzare il plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione dell\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>';
$lang['UAM_validationlimitTitle_d'] = 'Questa opzione consente di limitare il numero di giorni in cui un nuovo utente è in grado di confermare la sua registrazione. Una volta che questo periodo è scaduto, il link di conferma non sarà più valido e non potrà essere utilizzato.
<br><br>
Questa opzione viene utilizzata una volta che la &quot;Conferma Registrazione&quot; è attivata.
<br><br>
Se questa opzione e l\'opzione &quot;Ricorda agli utenti non confermati&quot; sono attivate​​, nuove opzioni appariranno sotto in questa sezione per consentire l\'automazione della gestione degli utenti non confermati.';
$lang['UAM_GTAutoMailTitle_d'] = 'Quando un account è scaduto (gruppo / stato / modifica livello di privacy abbassare di livello del visitatore), una email può essere inviata per chiarire le motivazioni di tale cambiamento ed i mezzi per recuperare l\'accesso iniziale alla galleria.
<br>Per fare questo, un link per la conferma della registrazione è allegato alla email (generazione automatica di un nuova chiave di conferma). <b style=&quot;color: red;&quot;>Se l\'utente è già stato notificato, il suo account viene automaticamente cancellato.
<br><br>
<b style=&quot;color: red;&quot;>Attenzione:. L\'uso di questa funzione è intimamente associata con la conferma della registrazione da parte dell\'utente (conferma via mail) e non può essere attivata senza questa opzione</b>';
$lang['UAM_GTAutomail_Text_d'] = 'Inserisci il testo personalizzato che spiega anche la ragione della retrocessione, per accompagnare il link di conferma. Il testo personalizzato non è obbligatorio ma fortemente consigliato. Infatti, i vostri visitatori non apprezzeranno di ricevere una e-mail che contiene solamente un unico collegamento senza ulteriori spiegazioni. ;-)
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione della e-mail. <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della galleria, se impostato nelle opzioni di configurazione di Piwigo.
<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended description, se è attivo.';
$lang['UAM_GTAutoDelTitle_d'] = 'Questo è valido solo quando l\'utente il cui account è scaduto e si innesca il meccanismo di eliminazione (raro ma possibile). Egli verrà disconnesso dalla galleria e reindirizzato a una pagina che mostra la cancellazione del suo account ed, eventualmente, le motivazioni di questa cancellazione.
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della galleria, se impostato nelle opzioni di configurazione di Piwigo.<br>
<b style=&quot;color: red;&quot;>[username]</b> non è disponibile qui perché l\'utente in questione è stato cancellato.
<br><br>
Testo personalizzato per il reindirizzamento pagina può essere inserito in questo campo che è compatibile con l\'editor FCK e per il multi-lingue, è possibile utilizzare i tag [lang] del plugin Extended description, se ​​è attivo.';
$lang['UAM_confirmtxtTitle_d'] = 'Inserire il testo introduttivo che si desidera visualizzare nella email di conferma della registrazione.
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione del messaggio.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della tua galleria se impostato nelle opzioni di configurazione di Piwigo.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> per inserire il numero di giorni limite per confermare una registrazione (&quot;Termine per la conferma della registrazione limitata;&quot; deve essere attivato).
<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended description se è attivo.';
$lang['UAM_confirmmail_custom2_d'] = 'Quando l\'opzione &quot;Conferma Registrazione&quot; è attiva, questo campo consente di personalizzare il <b><u>rejectance text</u></b> nella pagina di conferma di registrazione visualizzata quando l\'utente clicca sul link di conferma ricevuto via e-mail.
<br><br>
Per installare il plugin, un testo standard è dato a titolo di esempio.
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il relativo nome utente.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della galleria, se impostato nelle opzioni di configurazione di Piwigo.
<br><br>
Questo campo è compatibile con l\'editor FCK e, per il multi-lingue, è possibile utilizzare i tag [lang] del plugin Extended description se ​​è attivo.';
$lang['UAM_confirmmail_custom1_d'] = 'Quando l\'opzione &quot;Conferma della registrazione&quot; è attiva, questo campo consente di personalizzare il testo di <b><u>accettazione</u></b> sulla pagina di conferma registrazione visualizzata quando l\'utente clicca sul link di conferma ricevuto via email.
<br><br>
Dopo aver installato il plugin, un testo standard è impostato come un esempio.
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome del relativo utente.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della galleria, se impostato nelle opzioni di configurazione di Piwigo.
<br><br>
Questo campo è compatibile con l\'editor FCK e, per il multi-lingue, è possibile utilizzare i tag [lang] del plugin Extended description se ​​è attivo.';
$lang['UAM_confirmmailTitle_d'] = 'Questa opzione consente ad un utente di confermare la registrazione cliccando su di un link ricevuto in una email inviata durante la registrazione oppure agli amministratori di attivare manualmente la registrazione.
<br><br>
Nel primo caso, la e-mail è composta da una parte personalizzabile per introdurre una piccola nota di benvenuto e una parte fissa contenente il link di attivazione che viene generato con una chiave casuale che può essere rigenerata  attraverso la scheda &quot;Tracking confirmations&quot;.
<br><br>
Nel secondo caso, il link di validazione è mandato dagli amministratori della galleria. I visitatori dovranno attendere fino a quando un amministratore li confermi utilizzando il link di convalida o nella scheda &quot;confirmation tracking&quot;.
<br>
<b style=&quot;color: red;&quot;>NB: Opzioni &quot;Termine per la conferma della registrazione limitata&quot; e &quot;Ricordiamo agli utenti non confermati&quot; devono essere impostate su off quando è attivata la conferma manuale dell\'amministratore.</b>
<br><br>
Questa opzione viene generalmente utilizzata con l\'assegnazione automatica di gruppo e/o stati. Ad esempio, un utente che non ha confermato la registrazione verrà impostata in uno specifico gruppo di utenti (con o senza restrizioni sulla Galleria) mentre un utente che ha confermato la sua iscrizione deve essere inserito in un gruppo &quot;normale&quot;.';
$lang['UAM_USRAutoTitle_d'] = 'Gestione automatica dei visitatori non confermati si attiva ogni volta che si collega alla galleria e opera nel modo seguente:
<br><br>
- Cancellazione automatica degli account non confermati nel tempo consentito senza l\'invio automatico di promemoria tramite e-mail -> &quot;Termine per la conferma della registrazione limitata&quot; <b><u>abilitato</u></b> e &quot;Ricorda agli utenti non confermati&quot; <b><u>disabilitato</u></b>.
<br><br>
- Invio automatico di un messaggio di promemoria con una nuova generazione della chiave di conferma e cancellazione automatica degli account non confermati nel tempo dopo l\'invio del promemoria -> &quot;Termine per la conferma della registrazione limitata&quot; <b><u>abilitato</u></b> e &quot;Ricorda agli utenti non confermati&quot; <b><u>abilitato</u></b>.';
$lang['UAM_USRAutoDelTitle_d'] = 'Questo è valido solo quando l\'utente il cui account è scaduto si attiva il meccanismo di eliminazione (raro ma possibile). Egli poi sarà scollegato dalla galleria e reindirizzato a una pagina che mostra la cancellazione del suo account ed, eventualmente, le ragioni di questa cancellazione.
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della tua galleria se impostato nella configurazione opzioni di Piwigo.<br>
<b style=&quot;color: red;&quot;>[username]</b> non è disponibile qui perché l\'utente in questione è stato cancellato.
<br><br>
Testo personalizzato per il reindirizzamento pagina può essere inserito in questo campo che è compatibile con l\'editor FCK e, per il multi-lingue, è possibile utilizzare i tag [lang] del plugin Extended description se ​​è attivo.';
$lang['UAM_PwdResetTitle_d'] = 'L\'attivazione di questa opzione aggiunge una nuova funzionalità nel pannello di gestione degli utenti Piwigo (Utenti> Gestione) che può essere applicato per rinnovare la password per gli utenti selezionati. Inoltre, una nuova colonna viene aggiunta per mostrare lo stato di password per ciascuno di essi con i seguenti valori:<br>
Password in attesa di rinnovo: Una richiesta per una nuova password è stata inserita.<br>
- Password rinnovata: La password è stata cambiata dopo una richiesta.<br>
- Password originale: La password originale scelta al momento della creazione dell\'account non è mai stata cambiata.<br>
Webmaster, account generici e gli ospiti sono esclusi da questa funzione.<br>
Questi utenti saranno automaticamente reindirizzati alla loro pagina di personalizzazione per ciascuna delle loro connessioni fino a quando hanno cambiato la propria password e un messaggio esplicito verrà visualizzato in questa pagina.';
$lang['UAM_remailTitle_d'] = 'Questa opzione consente di inviare un promemoria via email agli utenti registrati ma che non hanno confermato la loro registrazione in tempo. Essa si avvale della collaborazione con la &quot;Conferma della registrazione&quot;
<br><br>
2 tipi di email possono essere inviate: con o senza rigenerazione della chiave di conferma. Se lo si desidera, il contenuto delle email può essere personalizzato.
<br><br>
Fare riferimento alla scheda &quot;Tracking confirmations&quot;.
<br><br>
Se questa opzione e l\'opzione &quot;Termine per la conferma della registrazione&quot; sono attivati, nuove opzioni appariranno sotto a questa sezione per consentirne l\'automazione della gestione degli utenti non confermati.';
$lang['UAM_userlistTitle_d'] = 'Questa pagina è per informazioni all\'amministratore. Visualizza l\'elenco di tutti gli utenti registrati sulla galleria e mostra la data e il numero di giorni dalla loro ultima visita. La lista è ordinata in ordine crescente di numero di giorni.
<br><br>
<b><u>Solo quando è attivo il Ghost Tracker</u></b>, il numero di giorni senza una visita appare come il seguente codice colore, secondo il massimo impostato nelle opzioni Ghost Tracker:
<br>
- <b style=&quot;color: lime;&quot;>Verde</b>: Quando l\'utente ha visitato la galleria <b style=&quot;color: lime;&quot;><u>meno del 50%</u></b> del massimale indicato nel Ghost Tracker.<br>
- <b style=&quot;color: orange;&quot;>Arancio</b>: Quando l\'utente ha visitato la galleria <b style=&quot;color: orange;&quot;><u>per piu del 100%</u></b> del massimale indicato nel Ghost Tracker.<br>
- <b style=&quot;color: red;&quot;>Rosso</b>: Quando l\'utente ha visitato la galleria <b style=&quot;color: red;&quot;><u>tra il 50% e il 99%</u></b> del massimale indicato nel Ghost Tracker. <b><u>In questo caso, l\'utente deve apparire anche nella tabella di Ghost Tracker.</u></b>
<br>
<br>
Esempio:
<br>
Il periodo massimo di Ghost Tracker è configurato per 100 giorni.
<br>
Un utente viene visualizzato in verde se ha visitato la galleria per meno di 50 giorni, in arancione se la sua ultima visita ha avuto luogo tra i 50 e 99 giorni e rosso per 100 giorni e oltre.
<br><br>
<b>NOTA</b>: L\'elenco non viene visualizzato se non hanno confermato la loro registrazione (se è attivata l\'opzione di conferma della registrazione). Questi utenti sono poi gestiti in speciale modo nella scheda &quot;Tracking confirmations&quot;.
<br><br>
<b>Funzione di ordinamento tabella</b>: Puoi ordinare i dati visualizzati cliccando sulle intestazioni di colonna. Tenere premuto il tasto MAIUSC per ordinare fino a 4 colonne simultaneamente.';
$lang['UAM_remailtxt1Title_d'] = 'Immettere il testo introduttivo che si desidera venga visualizzato nell\'email di promemoria, in aggiunta alla chiave di conferma rigenerata.
<br><br>
Se lasciato vuoto, la email di promemoria includerà solo il link di conferma. Pertanto si consiglia vivamente di inserire un piccolo testo esplicativo. (NB: Con l\'installazione del plugin un testo pre-compilato è fornito come esempio).
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione del messaggio.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della tua galleria se impostato nella configurazione opzioni di Piwigo.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> per inserire il numero di giorni limite per confermare una registrazione (&quot;termine per la conferma della registrazione limitata&quot; devono essere abilitati).
<br><br>
Per utilizzare più lingue, è possibile utilizzare il tag del plugin Extended description se è attivo.';
$lang['UAM_infotxtTitle_d'] = 'Immettere il testo introduttivo che si desidera venga visualizzato nell\'email di informazioni.
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione del messaggio.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della tua galleria se impostato nella configurazione opzioni di Piwigo.
<br><br>
Per utilizzare più lingue, è possibile utilizzare il tag del plugin Extended description se è attivo.';
$lang['UAM_gttextTitle_d'] = 'Inserisci il testo che si desidera visualizzare nel promemoria e-mail per richiedere all\'utente di tornare a visitare la tua galleria (NB: Con l\'installazione del plugin un testo pre-compilato è fornito come esempio).
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione del messaggio.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della tua galleria se impostato nella configurazione opzioni di Piwigo.<br>
- <b style=&quot;color: red;&quot;>[days]</b> per inserire il numero massimo di giorni tra due visite.
<br><br>
Per utilizzare più lingue, è possibile utilizzare il tag del plugin Extended description se è attivo.';
$lang['UAM_remailtxt2Title_d'] = 'Immettere il testo introduttivo che si desidera venga visualizzato nell\'email di sollecito senza rigenerare una chiave di conferma.
<br><br>
Se lasciato vuoto, il promemoria email sarà vuoto. Pertanto si consiglia vivamente di inserire un piccolo testo esplicativo. (NB: Con l\'installazione del plugin un testo pre-compilato è fornito come esempio).
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione del messaggio.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della tua galleria se impostato nella configurazione opzioni di Piwigo.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> per inserire il numero di giorni limite per confermare una registrazione (&quot;termine per la conferma della registrazione limitata&quot; devono essere abilitati).
<br><br>
Per utilizzare più lingue, è possibile utilizzare il tag del plugin Extended description se è attivo.';
$lang['UAM_gtTitle_d'] = 'Quando Ghost Tracker è abilitato e inizializzato, di seguito troverete l\'elenco dei visitatori registrati che non sono tornati da x giorni. &quot;x&quot; è il numero di giorni configurati nella scheda Configurazione generale. Inoltre, si trova una colonna che indica se un promemoria tramite email è stata inviata ai al target di visitatori. Quindi, si può vedere a colpo d\'occhio e trattare i visitatori che non hanno preso in considerazione il promemoria.<br><br>In questa vista, è possibile:
<br><br>
- Eliminare manualmente gli account <b>(manual drain)</b>
<br>
- Generare promemoria e-mail <b>con il reset della data ultima visita</b>. Questo permette di dare un carattere speciale per un target di visitatori. Se il visitatore ha già ricevuto un sollecito, nulla impedisce di reinviare un nuovo messaggio, che resetterà nuovamente la data dell\'ultima visita.
<br><br>
<b>Tabella Ordinamento delle funzioni</b>: E\' possibile ordinare i dati visualizzati facendo clicando sulle intestazioni delle colonne. Tenere premuto il tasto SHIFT per ordinare fino a 4 colonne contemporaneamente.';
$lang['UAM_ghosttrackerTitle_d'] = 'Chiamato anche &quot;Ghost Tracker &quot; quando questa funzione è attivata è possibile gestire i vostri ospiti a seconda della frequenza delle loro visite. Sono 2 le modalità di funzionamento disponibili:<br><br>
- Gestione manuale: Quando il tempo tra 2 visite è raggiunto, il visitatore viene visualizzato nella tabella &quot;Ghost Tracker&quot; nella quale si sarà in grado di mandare un promemoria ai visitatori via email o alla loro cancellazione.<br><br>
- Gestione automatizzata: Quando viene raggiunto il periodo tra 2 visite successive, il visitatore viene automaticamente cancellato o spostato in un gruppo di attesa e/o stato. In questo secondo caso, un\'email di informazione può essere inviata a lui.<br><br>
<b style=&quot;color: red;&quot;>Nota importante: Se si attiva questa funzione per la prima volta o si riattiva dopo un lungo periodo durante il quale si sono registrati nuovi visitatori, sarà necessario inizializzare o reimpostare il Ghost Tracker (vedere le istruzioni corrispondenti sulla scheda &quot;Ghost Tracker&quot).</b>';
$lang['UAM_GTAutomail_Subject_d'] = 'Inserire qui il vostro oggetto per l\'email Ghost Tracker automatica di retrocessione.
<br>
Per impostazione predefinita, il campo ha un testo generico in inglese, ma si può cambiare e utilizzare i tag di traduzione [lang=?] del plugin Extended Description se ​​installato.
<br><br>
I seguenti tag aggiuntivi personalizzazioni sono disponibili senza utilizzare il plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione dell\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>';
$lang['UAM_GTReminder_Subject_d'] = 'Inserire qui il vostro oggetto per l\'email Ghost Tracker automatica di retrocessione.
<br>
Per impostazione predefinita, il campo ha un testo generico in inglese, ma si può cambiare e utilizzare i tag di traduzione [lang=?] del plugin Extended Description se ​​installato.
<br><br>
I seguenti tag aggiuntivi personalizzazioni sono disponibili senza utilizzare il plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione dell\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>';
$lang['UAM_usermanTitle_d'] = 'Quando limitare la scadenza per la registrazione è abilitata, troverete qui di seguito l\'elenco di utenti la cui conferma dell\'iscrizione è prevista, <b style=&quot;text-decoration: underline;&quot;>se o non</b> sono in tempo per confermare.<br><br>
La data di registrazione viene visualizzata in verde quando l\'utente interessato è dentro il limite di tempo per confermare la sua registrazione. In questo caso, il pulsante di conferma è ancora valido e possiamo inviare un email con o senza una nuova chiave di conferma.<br><br>
Quando la data di registrazione viene visualizzata in rosso è scaduto il periodo di conferma. In questo caso è necessario inviare una email con rigenerazione della chiave di conferma se si desidera consentire all\'utente di confermare la sua registrazione.<br><br>
In tutti i casi, è possibile forzare manualmente la conferma.<br><br>
In questa vista, è possibile:
<br><br>
Generare una email di promemoria <b>senza</b> la generazione di una nuova chiave. Attenzione: Inviare un promemoria tramite email ai visitatori designati. Questa funzione non reimposta la data di registrazione dei visitatori designati e il timeout è ancora valido.
<br>
Generare una email di promemoria <b>con</b> la generazione di una nuova chiave. Attenzione: Inviare un promemoria tramite email ai visitatori designati. Questa funzione resetta anche la data di registrazione dei visitatori designati che equivale a prorogare il termine per la conferma.
<br>
-Presentare una registrazione in attesa di conferma manuale anche se la data di scadenza è passata <b>(conferma forzata)</b>.
<br><br>
<b>Ordinamento Tabella delle funzioni</b>: E\' possibile ordinare i dati visualizzati facendo clic sulle intestazioni delle colonne. Tenere premuto il tasto SHIFT per ordinare fino a 4 colonne contemporaneamente.';
$lang['UAM_MailInfo_Subject_d'] = 'Inserisci qui il tuo oggetto personalizzato per l\'email di informazione.<br>
Per impostazione predefinita, il campo ha un testo generico in inglese, ma si può cambiare e utilizzare i tag di traduzione [lang =?] Del plugin Extended Description se ​​installato.
<br><br>
I seguenti tag aggiuntivi personalizzati sono disponibili senza utilizzare il plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione del messaggio email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>';
$lang['UAM_AddURL2Mail_d'] = 'L\'attivazione di questa opzione aggiunge l\'URL della tua galleria in fondo all\'e-mail generata dal plugin, come una firma.';
?>