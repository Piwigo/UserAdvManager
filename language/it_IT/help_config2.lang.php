<?php
// ConfirmMail options section
$lang['UAM_confirmTitle_d'] = '- Generazione di un\'email d\'informazione<br>
- Generazione di un\'email di conferma iscrizione<br>
- Gruppi, stato o livello di privacy auto adesione<br>
- Limitazione del termine di convalida dell\'iscrizione<br>
- Generazione email di promemoria<br>
...
';
$lang['UAM_confirmmailTitle_d'] = 'Questa opzione consente ad un utente di confermare la registrazione cliccando su di un link ricevuto in una email inviata durante la registrazione oppure agli amministratori di attivare manualmente la registrazione.
<br><br>
Nel primo caso, la e-mail è composta da una parte personalizzabile per introdurre una piccola nota di benvenuto e una parte fissa contenente il link di attivazione che viene generato con una chiave casuale che può essere rigenerata  attraverso la scheda &quot;Tracking confirmations&quot;.
<br><br>
Nel secondo caso, il link di validazione è mandato dagli amministratori della galleria. I visitatori dovranno attendere fino a quando un amministratore li confermi utilizzando il link di convalida o nella scheda &quot;confirmation tracking&quot;.
<br>
<b style=&quot;color: red;&quot;>NB: Opzioni &quot;Termine per la conferma della registrazione limitata&quot; e &quot;Ricordiamo agli utenti non confermati&quot; devono essere impostate su off quando è attivata la conferma manuale dell\'amministratore.</b>
<br><br>
Questa opzione viene generalmente utilizzata con l\'assegnazione automatica di gruppo e/o stati. Ad esempio, un utente che non ha confermato la registrazione verrà impostata in uno specifico gruppo di utenti (con o senza restrizioni sulla Galleria) mentre un utente che ha confermato la sua iscrizione deve essere inserito in un gruppo &quot;normale&quot;.';
$lang['UAM_StuffsTitle_d'] = 'In questo modo un blocco UAM supplementare nel PWG Stuffs plugin (se installato) per informare i visitatori che non hanno confermano la loro iscrizione per la loro condizione.
<br><br>
Si prega di fare riferimento ai suggerimenti <b>Tips ed esempi di utilizzo</b> nella parte inferiore di questa pagina per i dettagli.';
$lang['UAM_adminconfmailTitle_d'] = '&Egrave; possibile disattivare la convalida solo per gli account utente creato dall\'amministratore Piwigo tramite l\'interfaccia di gestione di utenti.<br><br>
Attivando questa opzione, la convalida email d\iscrizione verr&agrave; inviato ad ogni utente creato da admin.<br><br>
Disabilitando questa opzione ((predefinito)), solo le informazioni e-mail viene inviata (se &quot;E-mail informazioni per l\'utente&quot; &egrave; abilitato).';
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
$lang['UAM_ConfirmMail_Subject_d'] = 'Inserisci qui il tuo oggetto personalizzato per l\'email di promemoria conferma della registrazione.<br>
Per impostazione predefinita, il campo ha un testo generico in inglese, ma si può cambiare e utilizzare i tag di traduzione [lang=?] del plugin Extended Description se ??installato.
<br><br>
I seguenti tag aggiuntivi personalizzazioni sono disponibili senza utilizzare il plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione dell\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>';
$lang['UAM_confirmtxtTitle_d'] = 'Inserire il testo introduttivo che si desidera visualizzare nella email di conferma della registrazione.
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione del messaggio.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della tua galleria se impostato nelle opzioni di configurazione di Piwigo.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> per inserire il numero di giorni limite per confermare una registrazione (&quot;Termine per la conferma della registrazione limitata;&quot; deve essere attivato).
<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended description se è attivo.';
$lang['UAM_confirmmail_custom1_d'] = 'Quando l\'opzione &quot;Conferma della registrazione&quot; è attiva, questo campo consente di personalizzare il testo di <b><u>accettazione</u></b> sulla pagina di conferma registrazione visualizzata quando l\'utente clicca sul link di conferma ricevuto via email.
<br><br>
Dopo aver installato il plugin, un testo standard è impostato come un esempio.
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome del relativo utente.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della galleria, se impostato nelle opzioni di configurazione di Piwigo.
<br><br>
Questo campo è compatibile con l\'editor FCK e, per il multi-lingue, è possibile utilizzare i tag [lang] del plugin Extended description se ??è attivo.';
$lang['UAM_confirmmail_custom2_d'] = 'Quando l\'opzione &quot;Conferma Registrazione&quot; è attiva, questo campo consente di personalizzare il <b><u>rejectance text</u></b> nella pagina di conferma di registrazione visualizzata quando l\'utente clicca sul link di conferma ricevuto via e-mail.
<br><br>
Per installare il plugin, un testo standard è dato a titolo di esempio.
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il relativo nome utente.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della galleria, se impostato nelle opzioni di configurazione di Piwigo.
<br><br>
Questo campo è compatibile con l\'editor FCK e, per il multi-lingue, è possibile utilizzare i tag [lang] del plugin Extended description se ??è attivo.';
$lang['UAM_RejectConnexion_d'] = 'Se attivato, i nuovi utenti registrati che non hanno confermato la loro iscrizione non saranno in grado di connettersi alla galleria. Essi saranno reindirizzati a una pagina speciale per informarli di questo stato.<br><br>
<b style=&quot;color: red;&quot;>Attenzione - Questa funzione è disponibile solo in combinazione con i gruppi di conferma! Vedere di seguito per impostare i gruppi come richiesto.</b>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Personalizza qui il tuo testo di spiegazione per informare gli utenti non confermati che non potranno accedere alla galleria finché non avranno confermato la loro registrazione.
<br><br>
Questo campo è compatibile con l\'Editor FCK e, per il multi-lingue, puoi utilizzare i tags [lang] del plugin Extended description se è attivo.';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>ATTENZIONE: Per l\'utilizzo di gruppi di conferma è necessario aver creato almeno un gruppo di utenti ed è definita &quot;di default&quot; nella gestione dei gruppi utenti Piwigo.</b><br><br>
I gruppi sono convalidati per l\'uso in combinazione con il &quot;Conferma di iscrizione&quot;';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>ATTENZIONE: L\'uso del status su conferma presuppone che sia stato mantenuto l\'utente &quot;Guest&quot; con impostazione di default (come modello di utente) per registrarne nuovi. Nota: è possibile impostare qualsiasi altro utente come modello per i nuovi iscritti. Si prega di fare riferimento alla documentazione di Piwigo per maggiori dettagli.</b><br><br>
Lo Stato è convalidato per l\'uso in combinazione con la &quot;Conferma di iscrizione&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>ATTENZIONE: L\'uso di livello di privacy è necessario che li hanno utilizzati con le vostre fotografie. Si prega di fare riferimento alla documentazione di Piwigo per maggiori dettagli.</b><br><br>
Il livello di privacy è convalidato per l\'uso in combinazione con la &quot;Conferma di iscrizione&quot;';
$lang['UAM_validationlimitTitle_d'] = 'Questa opzione consente di limitare il numero di giorni in cui un nuovo utente è in grado di confermare la sua registrazione. Una volta che questo periodo è scaduto, il link di conferma non sarà più valido e non potrà essere utilizzato.
<br><br>
Questa opzione viene utilizzata una volta che la &quot;Conferma Registrazione&quot; è attivata.
<br><br>
Se questa opzione e l\'opzione &quot;Ricorda agli utenti non confermati&quot; sono attivate??, nuove opzioni appariranno sotto in questa sezione per consentire l\'automazione della gestione degli utenti non confermati.';
$lang['UAM_remailTitle_d'] = 'Questa opzione consente di inviare un promemoria via email agli utenti registrati ma che non hanno confermato la loro registrazione in tempo. Essa si avvale della collaborazione con la &quot;Conferma della registrazione&quot;
<br><br>
2 tipi di email possono essere inviate: con o senza rigenerazione della chiave di conferma. Se lo si desidera, il contenuto delle email può essere personalizzato.
<br><br>
Fare riferimento alla scheda &quot;Tracking confirmations&quot;.
<br><br>
Se questa opzione e l\'opzione &quot;Termine per la conferma della registrazione&quot; sono attivati, nuove opzioni appariranno sotto a questa sezione per consentirne l\'automazione della gestione degli utenti non confermati.';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Inserisci qui il tuo oggetto personalizzato per l\'email di promemoria conferma della registrazione (con o senza nuova generazione di chiavi).<br>
Per impostazione predefinita, il campo ha un testo generico in inglese, ma si può cambiare e utilizzare i tag di traduzione [lang=?] del plugin Extended Description se ??installato.
<br><br>
I seguenti tag aggiuntivi personalizzazioni sono disponibili senza utilizzare il plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione dell\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>';
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
Testo personalizzato per il reindirizzamento pagina può essere inserito in questo campo che è compatibile con l\'editor FCK e, per il multi-lingue, è possibile utilizzare i tag [lang] del plugin Extended description se ??è attivo.';
$lang['UAM_USRAutoMailTitle_d'] = 'Quando attivata, questa funzione invierà automaticamente agli utenti che corrispondono ai criteri un contenuto personalizzato nelle &quot;email di reminder con la nuova chiave generata&quot;';
?>