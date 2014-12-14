<?php
// GhostTracker Options section
$lang['UAM_GT_MainTitle_d'] = '- Automatische oder manuelle Verwaltung von Benutzern Gespenst<br>
- E-mailing<br>
...
';
$lang['UAM_ghosttrackerTitle_d'] = 'Auch bekannt als &quot;Geist Tracker&quot;, wenn diese Funktion aktiviert ist, k&ouml;nnen Sie verwalten Ihre Besucher je nach der H&auml;ufigkeit ihrer Besuche. 2 Betriebsarten stehen zur Verfügung:
- Manuelle Verwaltung: Wenn die Zeit zwischen 2 Besuche erreicht ist, erscheint dem Besucher in der &quot;Ghost Tracker&quot; Table, an dem Sie in der Lage für die Besucher per E-Mail erinnern oder löschen ihn wird.<br><br>
- Automatisiertes Management: Wenn der Zeitraum zwischen 2 aufeinander folgenden Aufenthalte erreicht ist, wird der Besucher automatisch gelöscht oder verschoben in eine Gruppe warten und / oder Status. In diesem zweiten Fall kann eine Information E-Mail an ihn gesendet werden.<br><br>
<b style=&quot;color: red;&quot;>Wenn Sie diese Funktion zum ersten Mal oder haben Sie nach einem langen Zeitraum aus, in dem neue Besucher registriert sind, müssen Sie initialisieren, oder setzen Sie den Geist Tracker reaktiviert.</b>';
$lang['UAM_GTReminder_Subject_d'] = 'Geben Sie hier Ihre individuelle manuelle Ghost Tracker-Erinnerung per E-Mail Thema.<br>
Standardmäßig hat das Feld einen generischen Text in Deutsch, aber Sie können es ändern, und verwenden Sie die Übersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zusätzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verfügung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzufügen.<br>';
$lang['UAM_gttextTitle_d'] = 'Geben Sie den gewünschten Text in die E-Mail-Erinnerung angezeigt, die Benutzer rechtzeitig, um wieder zur Galerie zu besuchen (Anm.: Der Text Fertigpen mit der Installation des Plugins ist als Beispiel vorgesehen).
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options. Use <b style=&quot;color: red;&quot;>[days]</b> to insert the maximum numbers of days between two visits.
<br><br>
Um mehrere Sprachen zu benutzen, können Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_GTAutoTitle_d'] = 'Diese Option ermöglicht es, Regeln für die automatisierte Verwaltung von Geistern Benutzer anwenden.
<br><br>Grundprinzip: Ein Benutzer, der die maximale Zeit zwischen den Besuchen <b><u>und</u></b> hat bereits per E-Mail gilt als abgelaufen gemeldet erreicht. Dann können Sie automatisierte Verarbeitung Regeln wie das automatische Löschen von abgelaufenen Konten oder Herabstufung durch Beschränkung des Zugangs zur Galerie (schaltet automatisch auf eine eingeschränkte Gruppe und / oder Status).
<br><br>Die Ansteuerung dieser Automatisierung wird erreicht, wenn eine Verbindung Nutzer (alle Benutzer!) Auf der Galerie.';
$lang['UAM_GTAutoDelTitle_d'] = 'Dies ist nur gültig, wenn der Benutzer, dessen Konto ist abgelaufen selbst löst die Streichung Mechanismus (selten, aber möglich). Er ist dann der Galerie getrennt und umgeleitet auf eine Seite mit der Löschung seines Accounts und gegebenenfalls die Gründe für die Streichung dieses Absatzes.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingefügt tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzufügen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einfügen, wenn in den Konfigurationsoptionen Piwigo gesetzt.<br>
<b style=&quot;color: red;&quot;>[username]</b> ist hier nicht verfügbar, weil betroffene Anwender gelöscht wurde.
<br><br>
Custom Text für die Weiterleitungsseite können in dieses Feld eingegeben werden dass ist kompatibel mit den FCK-Editor und, um mehrere Sprachen zu benutzen, können Sie die Extended Description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_GTAutoGpTitle_d'] = 'Der automatische Wechsel der Gruppe oder den gleichen Status zu einer Degradierung der Konten beteiligt und arbeiten nach dem gleichen Prinzip wie die Gruppe oder den Status der Validierung (finden Sie unter &quot;Einstellen Bestätigungen und Validierungen der Registrierung&quot;). Daher sein, eine Gruppe und / oder Status herabstufen Zugang zur Galerie zu definieren. Wenn dies bereits mit dem Einsatz von Anmeldebestätigung Funktion definiert wurde, können Sie mit dem gleichen Gruppe / Status.<br><br>
<b style=&quot;color: red;&quot;>Wichtiger Hinweis:</b> Wenn ein Geist Benutzer hat noch kein von der nach Ablauf der Frist und trotz der automatische Benachrichtigung per E-Mail (wenn aktiviert) gehört, ist er automatisch aus der Datenbank gelöscht.';
$lang['UAM_GTAutoMailTitle_d'] = 'Wenn ein Konto abgelaufen ist (Gruppe / status / privacy Pegeländerung herabstufen den Besucher), kann eine E-Mail-Informationen geschickt, um die Gründe für diese Änderung zu klären und die Mittel, um den ersten Zugriff auf die Galerie zu erholen.
<br>Um dies zu tun, wird ein Link auf eine Rückbestätigung der Anmeldung an die E-Mail (automatische Generierung eines neuen Bestätigungs-Taste) befestigt.<b style=&quot;color: red;&quot;>Wenn der Benutzer bereits angemeldet ist, wird sein Konto automatisch zerstört.</b> 
<br><br>
<b style=&quot;color: red;&quot;>Warnung: Nutzung dieser Funktion ist eng mit der Bestätigung der Anmeldung durch den Benutzer (per Mail) verbunden und kann nicht ohne diese Option aktiviert werden.</b>';
$lang['UAM_GTAutomail_Subject_d'] = 'Geben Sie hier Ihre individuelle automatische Ghost-Tracker E-Mail Herabstufung unterliegen.<br>
Standardmäßig hat das Feld einen generischen Text in Deutsch, aber Sie können es ändern, und verwenden Sie die Übersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zusätzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verfügung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzufügen.<br>';
$lang['UAM_GTAutomail_Text_d'] = 'Geben Sie den Text, die auch eine Erläuterung der Gründe für die Rückstufung, um die Bestätigungs-Link zu begleiten. Der Text ist nicht vorgeschrieben, aber dringend empfohlen. In der Tat werden Ihre Besucher nicht zu schätzen Empfang einer E-Mail mit nur einem einzigen Link ohne weitere Erklärung. ;-)
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingefügt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzufügen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einfügen, wenn in den Konfigurationsoptionen Piwigo gesetzt.
<br><br>
Um mehrere Sprachen verwenden, können Sie die Extended description  Plugin-Tags, wenn installiert ist.';
?>