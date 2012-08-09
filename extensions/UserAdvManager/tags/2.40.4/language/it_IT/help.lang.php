<?php
//global $lang;

$lang['UAM_confirmTitle_d'] = '
- Generazzione di un\'email d\'informazione<br>
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
$lang['UAM_passwtestTitle_d'] = 'Inserisci la password per testare e quindi fare clic su &quot;calcolo del punteggio&quot;, per vedere il risultato.';
$lang['UAM_passwadmTitle_d'] = 'Un amministratore può creare un\'pseudo con o senza l\'applicazione della regola della complessità di calcolo.<br><br>
Nota: Se l\'account utente creato vuole cambiare la password e il rafforzamento password per gli utenti è attivo, sarà soggetta alla regola.';
$lang['UAM_infomailTitle_d'] = 'Questa opzione consente di automatizzare l\'invio di una e-mail le informazioni a un utente quando cambia la sua password o indirizzo e-mail nel loro profilo.<br><br>
Il contenuto del messaggio inviato è composto da una parte personalizzabile di introdurre una piccola nota di benvenuto e una parte fissa che indica il login, password e indirizzo di posta elettronica dell\'utente.';


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_adminconfmailTitle_d'] = '&Egrave; possibile disattivare la convalida solo per gli account utente creato dall\'amministratore Piwigo tramite l\'interfaccia di gestione di utenti.<br><br>
Attivando questa opzione, la convalida email d\iscrizione verr&agrave; inviato ad ogni utente creato da admin.<br><br>
Disabilitando questa opzione ((predefinito)), solo le informazioni e-mail viene inviata (se &quot;E-mail informazioni per l\'utente&quot; &egrave; abilitato).';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_restricTitle_d'] = '
- Caratteri vietati nei nomi degli utenti<br>
- Rafforzare il livello di sicurezza delle password<br>
- Esclusione dei domini d\'Email<br>
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
$lang['UAM_RejectConnexion_d'] = 'Se attivato, i nuovi utenti registrati che non hanno confermato la loro iscrizione non saranno in grado di connettersi alla galleria.';
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
?>