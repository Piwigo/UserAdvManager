<?php

$lang['UAM_confirmTitle_d'] = '- Generazzione di un\'email d\'informazione<br>
- Generazzione di un\'email di conferma d\'iscrizzione<br>
- Inserimento in automatico dei gruppi o dei statuti<br>
- Limitazzione del termine di convalida dell\'iscrizzione<br>
- Generazzione di un\'email di rilancio per gli utenti non convalidati<br>
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
$lang['UAM_remailtxt1Title'] = 'Ricorda email con generazione nuove chiavi';
$lang['UAM_remailtxt2Title'] = 'Ricorda email senza generazione nuove chiavi';
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
Personalizzare ulteriormente il contenuto con speciali inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione del messaggio.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> di inserire il vostro URL della galleria se impostato nelle opzioni di configurazione di Piwigo.
<br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended description, se è attivo.';
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
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della galleria, se impostato nelle opzioni di configurazione di Piwigo.<br>
<b style=&quot;color: red;&quot;>[username]</b> non è disponibile qui perché l\'utente in questione è stato cancellato.
<br><br>
Testo personalizzato per il reindirizzamento pagina può essere inserito in questo campo che è compatibile con l\'editor FCK e per il multi-lingue, è possibile utilizzare i tag [lang] del plugin Extended description, se ​​è attivo.';
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
Personalizzare ulteriormente il contenuto con tag inseriti speciali:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della galleria, se impostato nelle opzioni di configurazione di Piwigo.
<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended description, se è attivo.';
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della galleria, se impostato nelle opzioni di configurazione di Piwigo.
<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended description, se è attivo.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Inserisci qui il tuo personalizzato oggetto promemoria e-mail conferma della registrazione.<br>
Per impostazione predefinita, il campo ha un testo generico in inglese, ma si può cambiare e utilizzare i tag di traduzione [lang=?] del plugin Extended Description se ​​installato.
<br><br>
I seguenti tag aggiuntivi personalizzazioni sono disponibili senza utilizzare il plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione dell\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Inserisci qui il tuo personalizzato oggetto promemoria e-mail conferma della registrazione(con o senza nuova generazione di chiavi).<br>
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
Personalizzare ulteriormente il contenuto con speciali inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione della e-mail. <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della galleria, se impostato nelle opzioni di configurazione di Piwigo.
<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended description, se è attivo.';
$lang['UAM_GTAutoDelTitle_d'] = 'Questo è valido solo quando l\'utente il cui account è scaduto e si innesca il meccanismo di eliminazione (raro ma possibile). Egli verrà disconnesso dalla galleria e reindirizzato a una pagina che mostra la cancellazione del suo account ed, eventualmente, le motivazioni di questa cancellazione.
<br><br>
Personalizzare ulteriormente il contenuto con speciali inserted tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della galleria, se impostato nelle opzioni di configurazione di Piwigo.<br>
<b style=&quot;color: red;&quot;>[username]</b> non è disponibile qui perché l\'utente in questione è stato cancellato.
<br><br>
Testo personalizzato per il reindirizzamento pagina può essere inserito in questo campo che è compatibile con l\'editor FCK e per il multi-lingue, è possibile utilizzare i tag [lang] del plugin Extended description, se ​​è attivo.';
?>