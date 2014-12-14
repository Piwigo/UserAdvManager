<?php
// GhostTracker Options section
$lang['UAM_GT_MainTitle_d'] = '- Gestione utenti ghost automatica o manuale<br>
- E-mail<br>
...';
$lang['UAM_ghosttrackerTitle_d'] = 'Chiamato anche &quot;Ghost Tracker &quot; quando questa funzione è attivata è possibile gestire i vostri ospiti a seconda della frequenza delle loro visite. Sono 2 le modalità di funzionamento disponibili:<br><br>
- Gestione manuale: Quando il tempo tra 2 visite è raggiunto, il visitatore viene visualizzato nella tabella &quot;Ghost Tracker&quot; nella quale si sarà in grado di mandare un promemoria ai visitatori via email o alla loro cancellazione.<br><br>
- Gestione automatizzata: Quando viene raggiunto il periodo tra 2 visite successive, il visitatore viene automaticamente cancellato o spostato in un gruppo di attesa e/o stato. In questo secondo caso, un\'email di informazione può essere inviata a lui.<br><br>
<b style=&quot;color: red;&quot;>Nota importante: Se si attiva questa funzione per la prima volta o si riattiva dopo un lungo periodo durante il quale si sono registrati nuovi visitatori, sarà necessario inizializzare o reimpostare il Ghost Tracker (vedere le istruzioni corrispondenti sulla scheda &quot;Ghost Tracker&quot).</b>';
$lang['UAM_GTReminder_Subject_d'] = 'Inserire qui il vostro oggetto per l\'email Ghost Tracker automatica di retrocessione.
<br>
Per impostazione predefinita, il campo ha un testo generico in inglese, ma si può cambiare e utilizzare i tag di traduzione [lang=?] del plugin Extended Description se ??installato.
<br><br>
I seguenti tag aggiuntivi personalizzazioni sono disponibili senza utilizzare il plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione dell\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>';
$lang['UAM_gttextTitle_d'] = 'Inserisci il testo che si desidera visualizzare nel promemoria e-mail per richiedere all\'utente di tornare a visitare la tua galleria (NB: Con l\'installazione del plugin un testo pre-compilato è fornito come esempio).
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione del messaggio.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della tua galleria se impostato nella configurazione opzioni di Piwigo.<br>
- <b style=&quot;color: red;&quot;>[days]</b> per inserire il numero massimo di giorni tra due visite.
<br><br>
Per utilizzare più lingue, è possibile utilizzare il tag del plugin Extended description se è attivo.';
$lang['UAM_GTAutoTitle_d'] = 'Questa opzione consente di applicare le regole per la gestione automatizzata degli utenti ghosts.<br><br>Principio di base: un utente che ha raggiunto il tempo massimo tra le visite <b><u>ed</u></b> è già stato avvisato per e-mail è considerato come scaduto. Quindi è possibile applicare le regole di elaborazione automatizzate come la cancellazione automatica degli account scaduti o retrocessione limitando l\'accesso alla galleria (passare automaticamente ad un gruppo ristretto e/o di stato). <br><br>L\'attivazione di questi automazione si ottiene quando si collegano gli utenti (tutti gli utenti!) alla galleria.';
$lang['UAM_GTAutoDelTitle_d'] = 'Questo è valido solo quando l\'utente il cui account è scaduto e si innesca il meccanismo di eliminazione (raro ma possibile). Egli verrà disconnesso dalla galleria e reindirizzato a una pagina che mostra la cancellazione del suo account ed, eventualmente, le motivazioni di questa cancellazione.
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della galleria, se impostato nelle opzioni di configurazione di Piwigo.<br>
<b style=&quot;color: red;&quot;>[username]</b> non è disponibile qui perché l\'utente in questione è stato cancellato.
<br><br>
Testo personalizzato per il reindirizzamento pagina può essere inserito in questo campo che è compatibile con l\'editor FCK e per il multi-lingue, è possibile utilizzare i tag [lang] del plugin Extended description, se ??è attivo.';
$lang['UAM_GTAutoGpTitle_d'] = 'Il cambio automatico del gruppo, lo stato o il livello di privacy è come un abbassamento di livello dei conti coinvolti e lavorare sullo stesso principio come il livello di gruppo, lo stato o la privacy di conferma (vedi &quot;Impostazione conferma della registrazione&quot;). Perciò sii per definire un gruppo, stato e / o abbassamento di livello alla galleria. Se questo è già stato definito con l\'uso della funzione di conferma della registrazione, lo stato e / o abbassamento di livello di accesso alla galleria.<br><br>
<b style=&quot;color: red;&quot;>Nota importante:</b> Se un utente ghost non ha ancora sentito dopo il limite di tempo e nonostante la notifica automatica via e-mail (se abilitata), egli sarà automaticamente eliminato dal database.';
$lang['UAM_GTAutoMailTitle_d'] = 'Quando un account è scaduto (gruppo / stato / modifica livello di privacy abbassare di livello del visitatore), una email può essere inviata per chiarire le motivazioni di tale cambiamento ed i mezzi per recuperare l\'accesso iniziale alla galleria.
<br>Per fare questo, un link per la conferma della registrazione è allegato alla email (generazione automatica di un nuova chiave di conferma). <b style=&quot;color: red;&quot;>Se l\'utente è già stato notificato, il suo account viene automaticamente cancellato.
<br><br>
<b style=&quot;color: red;&quot;>Attenzione:. L\'uso di questa funzione è intimamente associata con la conferma della registrazione da parte dell\'utente (conferma via mail) e non può essere attivata senza questa opzione</b>';
$lang['UAM_GTAutomail_Subject_d'] = 'Inserire qui il vostro oggetto per l\'email Ghost Tracker automatica di retrocessione.
<br>
Per impostazione predefinita, il campo ha un testo generico in inglese, ma si può cambiare e utilizzare i tag di traduzione [lang=?] del plugin Extended Description se ??installato.
<br><br>
I seguenti tag aggiuntivi personalizzazioni sono disponibili senza utilizzare il plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione dell\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>';
$lang['UAM_GTAutomail_Text_d'] = 'Inserisci il testo personalizzato che spiega anche la ragione della retrocessione, per accompagnare il link di conferma. Il testo personalizzato non è obbligatorio ma fortemente consigliato. Infatti, i vostri visitatori non apprezzeranno di ricevere una e-mail che contiene solamente un unico collegamento senza ulteriori spiegazioni. ;-)
<br><br>
Personalizzare ulteriormente il contenuto inserendo speciali tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> per inserire automaticamente il nome dell\'utente di destinazione della e-mail. <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> per inserire il titolo della tua galleria.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> per inserire l\'URL della galleria, se impostato nelle opzioni di configurazione di Piwigo.
<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended description, se è attivo.';
?>