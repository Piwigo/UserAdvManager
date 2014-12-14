<?php
// GhostTracker Tab
$lang['UAM_gtTitle_d'] = 'Quando Ghost Tracker è abilitato e inizializzato, di seguito troverete l\'elenco dei visitatori registrati che non sono tornati da x giorni. &quot;x&quot; è il numero di giorni configurati nella scheda Configurazione generale. Inoltre, si trova una colonna che indica se un promemoria tramite email è stata inviata ai al target di visitatori. Quindi, si può vedere a colpo d\'occhio e trattare i visitatori che non hanno preso in considerazione il promemoria.<br><br>In questa vista, è possibile:
<br><br>
- Eliminare manualmente gli account <b>(manual drain)</b>
<br>
- Generare promemoria e-mail <b>con il reset della data ultima visita</b>. Questo permette di dare un carattere speciale per un target di visitatori. Se il visitatore ha già ricevuto un sollecito, nulla impedisce di reinviare un nuovo messaggio, che resetterà nuovamente la data dell\'ultima visita.
<br><br>
<b>Tabella Ordinamento delle funzioni</b>: E\' possibile ordinare i dati visualizzati facendo clicando sulle intestazioni delle colonne. Tenere premuto il tasto SHIFT per ordinare fino a 4 colonne contemporaneamente.';


// Userlist tab
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


// UserManagement tab
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
?>