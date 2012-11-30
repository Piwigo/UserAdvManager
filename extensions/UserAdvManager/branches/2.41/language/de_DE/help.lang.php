<?php

$lang['UAM_confirmTitle_d'] = '- Informationen E-Mail generation<br>
- Registrieren und Validierung E-Mail generation<br>
- Gruppen oder Status automatisch Beitritt<br>
- Anmeldeschluss Validierung<br>
- Reminder per E-Mail generation<br>
...
';
$lang['UAM_carexcTitle_d'] = 'Es mag interessant sein, bestimmte Zeichen in Benutzernamen verbieten (Beispiel: verweigern Logins mit @). Diese Option erm&ouml;glicht es, Zeichen oder Zeichenfolge, Veranstaltungen auszuschlie&szlig;en.<br>
NB: Die Option kann auch ausschließen, ganze Wörter.
<br><br>
<b style=&quot;color: red;&quot;>Warnung: Diese Option hat keine Auswirkungen auf den Benutzernamen erstellt vor ihrer Aktivierung.</b>';
$lang['UAM_passwTitle_d'] = 'Durch die Aktivierung dieser Option ist zwingend die Beschlagnahme eines Passwortes bei der Anmeldung und das Passwort erfordert vom Besucher ausgewählt, um ein Mindestmaß an Komplexität gerecht zu werden. Wird der Schwellenwert nicht erreicht wird, die Gäste erzielt, und die Mindestpunktzahl erreicht werden soll angezeigt werden, zusammen mit Empfehlungen an den Wert dieser Gäste zu steigern.<br><br>
Es gibt Feldtest der Komplexität eines Passworts zu messen und sich leisten können, eine Vorstellung von der Partitur zu erhalten, um komplexe, kundenspezifische definieren.<br><br>
Hinweis: Die Gäste eines Passwortes ist auf der Grundlage mehrerer Parameter: Länge berechnet, die Art der verwendeten Zeichen (Buchstaben, Ziffern, Großbuchstaben, Kleinbuchstaben, Sonderzeichen). Ein Wert unter 100 wird als gering, zwischen 100 und 500, die Komplexität ist durchschnittlich, mehr als 500, die Sicherheit ist sehr gut.';
$lang['UAM_passwtestTitle'] = 'Prüfung der Passworts Komplexität';
$lang['UAM_passwtestTitle_d'] = 'Geben Sie das Passwort zu testen, und klicken Sie auf &quot;Ergebnis Berechnung&quot;, um das Ergebnis zu sehen.';
$lang['UAM_passwadmTitle_d'] = 'Ein Administrator kann einen Benutzer-Account erstellen, mit oder ohne Anwendung der Regel der Komplexit&auml;t des Computings.<br><br>
Hinweis: Wenn der Benutzer erstellte Konto will Passwort zu &auml;ndern und Passwörter f&uuml;r die Benutzer St&auml;rkung aktiv ist, wird es vorbehaltlich der Regel-Satz.';
$lang['UAM_infomailTitle_d'] = 'Diese Option erm&ouml;glicht die Automatisierung Senden einer E-Mail-Informationen an einen Benutzer bei Änderungen sein Passwort oder E-Mail-Adresse in ihrem Profil.<br><br>
Der Inhalt der Nachricht gesendet wird von einem anpassbaren Teil komponiert, um eine kleine Begrüßung und Einf&uuml;hrung fester Bestandteil in denen die Login, Passwort und E-Mail-Adresse des Benutzers.';
$lang['UAM_confirmgrpTitle'] = 'Validation Gruppen';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>WARNUNG: Validierung Gruppen setzt voraus, dass Sie mindestens einen Benutzer Gruppe angelegt haben und definiert ist standardmäßig im User-Gruppen Piwigo-Management.</b><br><br>
Die Gruppen sind validiert f&uuml;r den Einsatz in Verbindung mit der &quot;Best&auml;tigung der Anmeldung&quot;';
$lang['UAM_confirmstatTitle'] = 'Validation Satzung';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>WARNUNG: Die Verwendung des Status Validierung erfordert, dass Sie die &quot;Gast&quot;-Nutzer mit Standard-Einstellung (als User Template) f&uuml;r neu registrierte gehalten haben. Hinweis: Sie k&ouml;nnen einem anderen Benutzer als neue Vorlage f&uuml;r registrierte gesetzt. Bitte beachten Sie die Dokumentation des Piwigo f&uuml;r weitere Details.</b><br><br>
Die Satzung sind validiert f&uuml;r den Einsatz in Verbindung mit der &quot;Best&auml;tigung der Anmeldung&quot;';
$lang['UAM_remailtxt1Title'] = 'Reminder per E-Mail mit den neuen Schlüssel generiert';
$lang['UAM_remailtxt2Title'] = 'Reminder per E-Mail ohne dass neue Schlüssel generiert';
$lang['UAM_tipsTitle_d'] = 'Tipps und verschiedene Anwendungsbeispiele';


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_adminconfmailTitle_d'] = 'Sie k&ouml;nnen diese Validierung deaktivieren nur f&uuml;r Benutzer-Accounts durch den Administrator &uuml;ber Piwigo\'s Benutzer-Management-Schnittstelle geschaffen.<br><br>
Bei Aktivierung dieser Option, E-Mail-Best&auml;tigung f&uuml;r die Registrierung wird f&uuml;r jeden Benutzer vom Administrator erstellt wurde gesendet werden.<br><br>
Durch die Deaktivierung dieser Option (Standard), nur die E-Mail-Informationen gesendet werden (wenn &quot;Informations-E-Mail an Benutzer&quot; aktiviert ist).';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_restricTitle_d'] = '- Charaktere Ausgrenzung<br>
- Passwort Durchsetzung<br>
- E-Mail-Domänen Ausgrenzung<br>
...
';
$lang['UAM_usermanTitle_d'] = 'Wenn die Begrenzung der Frist für die Anmeldung aktiviert ist, finden Sie weiter unten die Liste der Benutzer, deren Validierung Eintragung erwartet wird, <b style=&quot;text-decoration: underline;&quot;>ob oder nicht</b> sind sie in der Zeit zu validieren.<br><br>
Das Datum der Eintragung wird in grün angezeigt, wenn der Benutzer unter dem betreffenden Frist wird auf seine Registrierung zu bestätigen. In diesem Fall ist die Validierung Schlüssel noch gültig ist, und wir können eine E-Mail mit oder ohne eine neue Validierung Schlüssel zu schicken.<br><br>
Wenn das Datum der Eintragung erscheint in Rot, die Validierung abgelaufen. In diesem Fall müssen Sie eine E-Mail mit der Regeneration der Validierung Schlüssel senden, wenn Sie dem Benutzer die Möglichkeit, ihre Anmeldung bestätigen möchten.<br><br>
In allen Fällen ist es möglich, manuell die Validierung Kraft.<br><br>
In dieser Ansicht können Sie:
<br><br>
- Löschen Sie manuell Konten <b>(Handbuch Drain)</b>
<br>
- Generieren Sie per E-Mail-Erinnerung <b>ohne</b> erzeugt einen neuen Schlüssel. Warnung: Senden Sie eine E-Mail-Erinnerung für die angestrebten Besucher. Diese Funktion kann nicht zurückgesetzt dem Zeitpunkt der Eintragung des angestrebten Besucher und das Zeitlimit ist weiterhin gültig.
<br>
- Generieren Sie per E-Mail-Erinnerung <b>mit</b> erzeugt einen neuen Schlüssel. Warnung: Senden Sie eine E-Mail-Erinnerung für die angestrebten Besucher. Diese Funktion setzt auch den Zeitpunkt der Eintragung des angestrebten Besucher, die die Frist für die Validierung erweitern entspricht.
<br>
- Senden einer Registrierung erwartet Validierung von Hand, auch wenn das Ablaufdatum überschritten ist <b>(zwingen Validierung)</b>.
<br><br>
<b>Die Sortierung der Tabelle Function</b> : Sie können die Daten mit einem Klick auf die Spaltenüberschriften angezeigt. Halten Sie SHIFT-Taste, um Art bis zu 4 gleichzeitige maximale Spalten.';
$lang['UAM_gtTitle_d'] = 'Als Ghost Tracker aktiviert ist und initialisiert wurde, finden Sie weiter unten die Liste der registrierten Besucher, die sich seit x Tagen zur&uuml;ckgegeben haben. &quot;x&quot; ist die Anzahl der Tage konfiguriert in der General-Setup. Dar&uuml;ber hinaus finden Sie eine Spalte angibt, ob eine E-Mail-Erinnerung hat, um die angestrebten Besucher gesendet wurde. So k&ouml;nnen Sie auf einen Blick sehen und zu behandeln Besucher, die nicht wegen der Erinnerung genommen haben.<br><br>In dieser Ansicht können Sie:
<br><br>
- Löschen Sie manuell Konten <b>(Handbuch Drain)</b>
<br>
- Generieren Sie per E-Mail-Erinnerung <b>mit dem Zurücksetzen der letzte Besuch date</b>. Dies erlaubt es, einen Platzhalter, um die angestrebten Besucher geben. Wenn der Besucher bereits eine Mahnung erhalten haben, durch nichts daran gehindert, eine neue Mail, die wieder zurückgesetzt werden, in der Tat übel, dem letzten Tag besuchen.
<br><br>
<b>Die Sortierung der Tabelle Function</b> : Sie können die Daten mit einem Klick auf die Spaltenüberschriften angezeigt. Halten Sie SHIFT-Taste, um Art bis zu 4 gleichzeitige maximale Spalten.';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.15.6
$lang['UAM_RedirTitle_d'] = 'Diese Option automatisch umleiten ein registrierter Benutzer zum sein Benutzerdaten Seite nur bei seinem ersten Anschluss an die Galerie.<br><br>
Bitte beachten Sie: Dieses Feature funktioniert nicht für alle registrierten Nutzer. Diejenigen mit &quot;admin&quot;, &quot;Webmaster&quot; oder &quot;Generic&quot; Status sind ausgeschlossen.';
// --------- End: New or revised $lang ---- from version 2.15.6


// --------- Starting below: New or revised $lang ---- from version 2.16.0
$lang['UAM_miscTitle_d'] = '- Gefolgt registrierte Benutzer<br>
- Nickname obligatorisch für Gäste Kommentare<br>
...
';
$lang['UAM_ghosttrackerTitle_d'] = 'Auch bekannt als &quot;Geist Tracker&quot;, wenn diese Funktion aktiviert ist, k&ouml;nnen Sie verwalten Ihre Besucher je nach der H&auml;ufigkeit ihrer Besuche. 2 Betriebsarten stehen zur Verfügung:
- Manuelle Verwaltung: Wenn die Zeit zwischen 2 Besuche erreicht ist, erscheint dem Besucher in der &quot;Ghost Tracker&quot; Table, an dem Sie in der Lage für die Besucher per E-Mail erinnern oder löschen ihn wird.<br><br>
- Automatisiertes Management: Wenn der Zeitraum zwischen 2 aufeinander folgenden Aufenthalte erreicht ist, wird der Besucher automatisch gelöscht oder verschoben in eine Gruppe warten und / oder Status. In diesem zweiten Fall kann eine Information E-Mail an ihn gesendet werden.<br><br>
<b style=&quot;color: red;&quot;>Wenn Sie diese Funktion zum ersten Mal oder haben Sie nach einem langen Zeitraum aus, in dem neue Besucher registriert sind, müssen Sie initialisieren, oder setzen Sie den Geist Tracker reaktiviert.</b>';
$lang['UAM_mailexcTitle_d'] = 'Standardmäßig akzeptiert Piwigo alle E-Mail-Adressen im Format xxx@yyy.zz. Durch die Aktivierung dieser Option können Sie auf bestimmte Domains im Format ausschließen: @[Domänenname].[Domain Extension].<br><br>
Beispiele:<br>
@hotmail.com -> Ausnahme-Adressen *@hotmail.com<br>
@hotmail -> ohne alle Adressen *@hotmail *';
$lang['UAM_GTAutoTitle_d'] = 'Diese Option ermöglicht es, Regeln für die automatisierte Verwaltung von Geistern Benutzer anwenden.
<br><br>Grundprinzip: Ein Benutzer, der die maximale Zeit zwischen den Besuchen <b><u>und</u></b> hat bereits per E-Mail gilt als abgelaufen gemeldet erreicht. Dann können Sie automatisierte Verarbeitung Regeln wie das automatische Löschen von abgelaufenen Konten oder Herabstufung durch Beschränkung des Zugangs zur Galerie (schaltet automatisch auf eine eingeschränkte Gruppe und / oder Status).
<br><br>Die Ansteuerung dieser Automatisierung wird erreicht, wenn eine Verbindung Nutzer (alle Benutzer!) Auf der Galerie.';
$lang['UAM_GTAutoDelTitle'] = 'Benutzerdefinierte Meldung auf gelöschtes Konto';
$lang['UAM_GTAutoGpTitle_d'] = 'Der automatische Wechsel der Gruppe oder den gleichen Status zu einer Degradierung der Konten beteiligt und arbeiten nach dem gleichen Prinzip wie die Gruppe oder den Status der Validierung (finden Sie unter &quot;Einstellen Bestätigungen und Validierungen der Registrierung&quot;). Daher sein, eine Gruppe und / oder Status herabstufen Zugang zur Galerie zu definieren. Wenn dies bereits mit dem Einsatz von Anmeldebestätigung Funktion definiert wurde, können Sie mit dem gleichen Gruppe / Status.<br><br>
<b style=&quot;color: red;&quot;>Wichtiger Hinweis:</b> Wenn ein Geist Benutzer hat noch kein von der nach Ablauf der Frist und trotz der automatische Benachrichtigung per E-Mail (wenn aktiviert) gehört, ist er automatisch aus der Datenbank gelöscht.';


// --------- Starting below: New or revised $lang ---- from version 2.20.0
$lang['UAM_validationlimitTitle_d'] = 'Diese Option ermöglicht es, die Gültigkeit der Schlüssel Validierung E-Mail-Grenze geschickt, um neue Registranten. Besucher, wer x Tage Zeit haben, um sich identifizieren, zu registrieren. Nach Ablauf dieser Frist die Validierung Link läuft.
<br><br>
Diese Option ist in Verbindung mit der &quot;Bestätigung der Anmeldung verwendet&quot;
<br><br>
If this option and the option &quot;Erinnern Unvalidierte User&quot; are activated, new options will appear below in this section to enable the automation of unvalidated users management.';
$lang['UAM_remailTitle_d'] = 'Mit dieser Option können Sie eine Erinnerung per E-Mail an registrierte Benutzer zu senden, aber noch nicht bestätigt ihre Eintragung in die Zeit. Es funktioniert also in Verbindung mit der &quot;Bestätigung der Anmeldung&quot;
<br><br>
2 Arten von E-Mails gesendet werden können: Mit oder ohne Regeneration der Validierung Schlüssel. Gegebenenfalls kann der Inhalt von E-Mails angepasst werden.
<br><br>
Wenden Sie sich an die &quot;Tracking Validierungen&quot; aus.
<br><br>
If this option and the option &quot;Anmeldeschluss Validierung beschränkt&quot; are activated, new options will appear below in this section to enable the automation of unvalidated users management.';
$lang['UAM_USRAutoTitle_d'] = 'Automatic handling of unvalidated visitors is triggered each time you connect to the gallery and works as follows:
<br><br>
- Automatic deletion of accounts not validated in the allotted time without sending automatic email reminder -> &quot;Deadline for registration validation limited&quot; <b><u>enabled</u></b> and &quot;Remind unvalidated users&quot; <b><u>disabled</u></b>.
<br><br>
- Automatically sending a reminder message with a new generation of validation key and automatic deletion of accounts not validated in the time after sending the reminder -> &quot;Deadline for registration validation limited&quot; <b><u>enabled</u></b> et &quot;Remind unvalidated users&quot; <b><u>enabled</u></b>.';


// --------- Starting below: New or revised $lang ---- from version 2.20.3
$lang['UAM_DumpTitle_d'] = 'Dies ermöglicht Ihnen die gesamte Konfiguration des Plugins in eine Datei zu speichern damit Sie sie wiederherstellen können wenn etwas schief geht (falsche Manipulation oder vor einem Update, zum Beispiel). Standardmäßig wird die Datei in diesem Ordner gespeichert ../plugins/UserAdvManager/include/backup/ und heißt &quot;UAM_dbbackup.sql&quot;.
<br><br>
<b style=&quot;color: red;&quot;>Achtung: Die Datei wird überschrieben jedem Backup Aktion!</b>
<br><br>
Es kann manchmal nützlich sein, um die Backup-Datei auf Ihrem Computer abrufen. Zum Beispiel: Um zu einer anderen Datenbank auslagern wiederherzustellen oder zu halten mehrere Dateien speichern. Dazu markieren Sie das Kontrollkästchen, um die Datei herunterzuladen.
<br><br>
Die Erholung von dieser Schnittstelle wird nicht unterstützt. Verwenden Sie Tools wie phpMyAdmin.';
// --------- End: New or revised $lang ---- from version 2.20.4


// --------- Starting below: New or revised $lang ---- from version 2.20.11
$lang['UAM_gttextTitle_d'] = 'Geben Sie den gewünschten Text in die E-Mail-Erinnerung angezeigt, die Benutzer rechtzeitig, um wieder zur Galerie zu besuchen (Anm.: Der Text Fertigpen mit der Installation des Plugins ist als Beispiel vorgesehen).
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options. Use <b style=&quot;color: red;&quot;>[days]</b> to insert the maximum numbers of days between two visits.
<br><br>
Um mehrere Sprachen zu benutzen, können Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_confirmtxtTitle_d'] = 'Geben Sie den einleitenden Text, den Sie in der E-Mail-Bestätigung der Anmeldung erscheinen.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingefügt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> , um automatisch den Namen des Zielbenutzers der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzufügen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einfügen, wenn in den Konfigurationsoptionen Piwigo gesetzt.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> um die Anzahl von Tagen einfügen, um eine Registrierung zu bestätigen (&quot;Anmeldeschluss Validierung beschränkt;&quot; müssen aktiviert werden).
<br><br>
Um mehrere Sprachen zu benutzen, können Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_remailtxt1Title_d'] = 'Geben Sie den einleitenden Text, den Sie in der E-Mail-Erinnerung angezeigt wird, zusätzlich zu der Prüfschlüssel regeneriert.
<br><br>
Wenn leer, wird die E-Mail-Erinnerung nur den Bestätigungslink. Es wird daher dringend empfohlen, ein wenig erläuternden Text zu nehmen. (NB: Der Text Fertigpen mit der Installation des Plugins ist als Beispiel vorgesehen).
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingefügt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> , um automatisch den Namen des Zielbenutzers der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzufügen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einfügen, wenn in den Konfigurationsoptionen Piwigo gesetzt.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> um die Anzahl von Tagen einfügen, um eine Registrierung zu bestätigen (&quot;Anmeldeschluss Validierung beschränkt;&quot; müssen aktiviert werden).
<br><br>
Um mehrere Sprachen zu benutzen, können Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_remailtxt2Title_d'] = 'Geben Sie den einleitenden Text, den Sie in der Erinnerung, ohne eine Bestätigung per E-Mail-Taste erscheinen regeneriert.
<br><br>
Wenn links leer ist, wird die E-Mail-Erinnerung leer sein. Es wird daher dringend empfohlen, ein wenig erläuternden Text zu nehmen. (NB: Der Text Fertigpen mit der Installation des Plugins ist als Beispiel vorgesehen).
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingefügt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> , um automatisch den Namen des Zielbenutzers der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzufügen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einfügen, wenn in den Konfigurationsoptionen Piwigo gesetzt.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> um die Anzahl von Tagen einfügen, um eine Registrierung zu bestätigen (&quot;Anmeldeschluss Validierung beschränkt;&quot; müssen aktiviert werden).
<br><br>
Um mehrere Sprachen zu benutzen, können Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_infotxtTitle_d'] = 'Geben Sie den einleitenden Text, den Sie in der Informations-E-Mail angezeigt.
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.
<br><br>
Um mehrere Sprachen zu benutzen, können Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_AdminValidationMail_d'] = 'Wenn ein Administrator oder Webmaster der Galerie manuell gültige Registrierung anhängig ist, ist eine Benachrichtigungs-Email automatisch an den Benutzer gesendet. Geben Sie hier den Text ein, in dieser E-Mail angezeigt.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingefügt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> , um automatisch den Namen des Zielbenutzers der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzufügen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einfügen, wenn in den Konfigurationsoptionen Piwigo gesetzt.
<br><br>
Um mehrere Sprachen zu benutzen, können Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_confirmmail_custom1_d'] = 'Wenn die Option &quot;Bestätigung der Anmeldung&quot; aktiv ist, können Sie in diesem zu <b><u>Akzeptanz Text anpassen</u></b> auf der Anmeldebestätigung Seite angezeigt, wenn Benutzer auf den Bestätigungs-Link, die empfangen wurde per E-Mail.
<br><br>
Nach der Installation des Plugin ist ein Standard-Text als Beispiel vorangehen.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingefügt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> , um automatisch den Namen des Zielbenutzers der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzufügen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einfügen, wenn in den Konfigurationsoptionen Piwigo gesetzt.
<br><br>
Dieses Feld ist kompatibel mit den FCK-Editor und, um mehrere Sprachen zu benutzen, können Sie die Extended Description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_confirmmail_custom2_d'] = 'Wenn die Option &quot;Bestätigung der Anmeldung&quot; aktiv ist, können Sie in diesem zu <b><u>rejectance Text anpassen</u></b> auf der Anmeldebestätigung Seite angezeigt, wenn Benutzer auf den Bestätigungs-Link, die empfangen wurde per E-Mail.
<br><br>
Nach der Installation des Plugin ist ein Standard-Text als Beispiel vorangehen.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingefügt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> , um automatisch den Namen des Zielbenutzers der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzufügen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einfügen, wenn in den Konfigurationsoptionen Piwigo gesetzt.
<br><br>
Dieses Feld ist kompatibel mit den FCK-Editor und, um mehrere Sprachen zu benutzen, können Sie die Extended Description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_GTAutoDelTitle_d'] = 'Dies ist nur gültig, wenn der Benutzer, dessen Konto ist abgelaufen selbst löst die Streichung Mechanismus (selten, aber möglich). Er ist dann der Galerie getrennt und umgeleitet auf eine Seite mit der Löschung seines Accounts und gegebenenfalls die Gründe für die Streichung dieses Absatzes.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingefügt tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzufügen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einfügen, wenn in den Konfigurationsoptionen Piwigo gesetzt.<br>
<b style=&quot;color: red;&quot;>[username]</b> ist hier nicht verfügbar, weil betroffene Anwender gelöscht wurde.
<br><br>
Custom Text für die Weiterleitungsseite können in dieses Feld eingegeben werden dass ist kompatibel mit den FCK-Editor und, um mehrere Sprachen zu benutzen, können Sie die Extended Description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>WARNUNG: Die Verwendung von Privatsphäre Ebene erforderlich, dass Sie sie mit Ihren Bildern verwendet. Bitte beachten Sie die Piwigo in der Dokumentation für weitere Details.</b><br><br>
Das Niveau der Privatsphäre ist für den Einsatz in Verbindung mit der &quot;Bestätigung der Anmeldung&quot validiert;';
$lang['UAM_CustomPasswRetrTitle_d'] = 'Standardmäßig wird, wenn ein Benutzer sein Passwort verloren und wählt die Option für eine Erholung, erhält er eine E-Mail, die nur seinen Benutzernamen und sein neues Passwort zu.
<br><br>
Hier können Sie von Ihnen gewünschten Text eingefügt werden soll <b><u>vor</u></b> die Standard-Informationen.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingefügt tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzufügen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einfügen, wenn in den Konfigurationsoptionen Piwigo gesetzt.
<br><br>
Um mehrere Sprachen zu benutzen, können Sie die Extended Description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_GT_MainTitle_d'] = '- Automatische oder manuelle Verwaltung von Benutzern Gespenst<br>
- E-mailing<br>
...
';
$lang['UAM_PwdResetTitle_d'] = 'Das Aktivieren dieser Option wird eine neue Funktion im Piwigo-Benutzerverwaltung Panel hinzufügen (Benutzer> Verwalten), das kann sich bewerben, um das Passwort für ausgewählte Benutzer zu erneuern. Darüber hinaus wird eine neue Spalte hinzugefügt, um den Status von Passwörtern für jeden von ihnen für die folgenden Werte:<br>
- Passwort erneuert werden: Ein Passwort Antrag auf Verlängerung ist geplant.<br>
- Passwort erneuert: Das Passwort hat nach einer Anfrage erneuert worden.<br>
- Original-Passwort: Das Original-Passwort an Account-Erstellung gewählt und hat noch nie für eine Erneuerung erforderlich gewesen.<br>
Webmaster, generischen und Gast-Accounts sind von dieser Funktion ausgeschlossen.<br>
Diese Benutzer werden automatisch auf ihre Anpassung an jeder Seite ihrer Verbindungen umgeleitet werden, bis sie ihr Passwort geändert und eine explizite Meldung auf dieser Seite angezeigt werden.';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Passen Sie hier Ihre Erklärung Text zum unbestätigten Benutzer informieren dass sie nicht in der Lage um die Galerie verbinden bis sie ihre Anmeldung bestätigt haben.
<br>
Dieses Feld ist kompatibel mit FCK Editor und, für Multi-Sprachen, können Sie die [lang] Tags der Extended Description Plugin zu benutzen, wenn es aktiv ist.';
$lang['UAM_RejectConnexion_d'] = 'Wenn aktiviert, wird neu registrierten Benutzern nicht bestätigen, haben ihre Anmeldung nicht in der Lage sein, um zur Galerie zu verbinden. Sie werden auf eine spezielle Seite umgeleitet werden, um sie von diesem Zustand zu informieren.<br><br>
<b style=&quot;color: red;&quot;>Warnung - Dies funktioniert nur in Verbindung mit der Bestätigung Gruppen! Siehe unten, um die Gruppen nach Bedarf eingestellt.</b>';
$lang['UAM_StuffsTitle_d'] = 'Dies ermöglicht eine zusätzliche UAM-Block in PWG Stuffs Plugin (wenn installiert) um Ihre Besucher die nicht validiert hat ihre Registrierung über ihren Zustand informieren.
<br><br>
Bitte beachten Sie die <b>Tipps und Beispiele</b> am unteren Ende dieser Seite für Details.';
$lang['UAM_userlistTitle_d'] = 'Diese Seite gibt es zur Information an den Administrator. Es zeigt eine Liste von allen Nutzern auf der Galerie zeigt das Datum und die Anzahl der Tage seit dem letzten Besuch registriert. Die Liste ist in aufsteigender Reihenfolge der Anzahl der Tage sortiert.
<br><br>
<b><u>Erst wenn der Geist Tracker aktiv ist</u></b>, wird die Anzahl der Tage ohne einen Besuch wie der folgende Farbcode nach dem Maximum in der Geist Tracker Optionen:
<br>
- <b style=&quot;color: lime;&quot;>Grün</b> : Wenn der Benutzer hat die Galerie <b style=&quot;color:lime;&quot;><u>weniger als 50%</u></b> besucht der angegebene H&ouml;chstzahl in der Geist-Tracker.<br>
- <b style=&quot;color: orange;&quot;>Orange</b> : Wenn der Benutzer hat die Galerie <b style=&quot;color:orange;&quot;><u>zwischen 50% und 99%</u></b> besucht der angegebene H&ouml;chstzahl in der Geist-Tracker.<br>
- <b style=&quot;color: red;&quot;>Rot</b> : Wenn der Benutzer hat die Galerie <b style=&quot;color:red;&quot;><u>f&uuml;r mehr als 100%</u></b> besucht der angegebene H&ouml;chstzahl in der Geist-Tracker. <b><u>In diesem Fall muss der Benutzer sich auch in der Geist-Tracker-Tabelle.</u></b><br>
<br>
Beispiel:
<br>
Die Höchstdauer von Geist Tracker ist so konfiguriert, dass 100 Tage.
<br>
Ein Benutzer wird in grün angezeigt, wenn er die Galerie für weniger als 50 Tagen besucht haben, in orange, wenn sein letzter Besuch stattgefunden hat zwischen 50 und 99 Tage und rot für 100 Tage und mehr.
<br><br>
<b>HINWEIS</b>: Die Liste wird nicht angezeigt, die nicht validiert ihrer Registrierung (falls die M&ouml;glichkeit der Validierung der Registrierung aktiviert ist). Diese Benutzer werden dann in besonderer Weise in der &quot;Tracking Validierungen verwaltet&quot; aus.
<br><br>
<b>Die Sortierung der Tabelle Function</b>: Sie können die Daten mit einem Klick auf die Spaltenüberschriften angezeigt. Halten Sie SHIFT-Taste, um Art bis zu 4 gleichzeitige maximale Spalten.';
$lang['UAM_USRAutoDelTitle_d'] = 'Dies ist nur gültig, wenn der Benutzer, dessen Konto ist abgelaufen selbst löst die Löschung Mechanismus (selten, aber möglich). er hat dann von der Galerie getrennt und umgeleitet zu einer Seite mit der Löschung seines Accounts und ggf. die Gründe für diese Löschung.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingefügt tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzufügen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einfügen, wenn in den Konfigurationsoptionen Piwigo gesetzt.<br>
<b style=&quot;color: red;&quot;>[username]</b> ist hier nicht verfügbar, weil betroffene Anwender gelöscht wurde.
<br><br>
Custom Text für die Weiterleitungsseite können in dieses Feld eingegeben werden dass ist kompatibel mit den FCK-Editor und, um mehrere Sprachen zu benutzen, können Sie die Extended Description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_USRAutoMailTitle_d'] = 'Wenn aktiviert, wird diese Funktion automatisch zu senden personalisierte Inhalte in &quot;Reminder per E-Mail mit neuer Schlüssel generiert&quot;, um Besucher, die Kriterien entsprechen.';
$lang['UAM_confirmlevelTitle'] = 'Datenschutzstufe';
$lang['UAM_HidePasswTitle_d'] = 'Wählen Sie hier, wenn Sie in der E-Mail-Informationen angezeigt werden das Passwort vom Besucher gewählt werden soll. Wenn Sie die Option zu aktivieren, wird das Passwort dann im Klartext angezeigt. Wenn Sie deaktivieren das Passwort wird gar nicht angezeigt.';
$lang['UAM_Tracking registered users_d'] = 'Dies aktiviert einen Tabelle im &quot;Verfolgung registrierte Benutzer&quot;-Reiter wo sind registrierten Nutzern auf der Galerie aufgelistet mit dem Datum ihrer letzten Besuch und verbrachte Zeit (in Tagen) seit ihrem letzten Besuch. Die Überwachung ist rein informativ für den Administrator der Galerie.';
$lang['UAM_confirmmailTitle_d'] = 'Diese Option ermöglicht es einem Benutzer, entweder bestätigen Anmeldung durch Klick auf einen Link in einer E-Mail bei der Registrierung oder den Administrator gesendet, um manuell aktivieren Sie die Registrierung erhalten haben.<br><br>
Im ersten Fall wird die E-Mail von einem anpassbaren Teil zusammengesetzt, um ein wenig Begrüßung und einem festen Teil mit dem Aktivierungs-Link, die von einem zufälligen Schlüssel, die möglicherweise durch den &quot;Tracking Bestätigungen&quot;-Reiter können sich regenerieren erzeugt wird, einzuführen.<br><br>
Im zweiten Fall, <b><u>gibt es keine Bestätigung Schlüssel per E-Mail!</u></b>. Besucher müssen warten, bis ein Administrator bestätigen sie sich in &quot;Bestätigung Tracking&quot;-Registerkarte. Es ist recommanded des Piwigo die Option &quot;E-Mail-Admins, wenn ein neuer Benutzer registriert&quot; aktivieren (siehe Konfigurationsoptionen in der Piwigo) und die &quot;Information E-Mail an Benutzer&quot; verwenden, um neue Register zu warnen, sich auf ihre Freischaltung warten.
<br>
<b style=&quot;color: red;&quot;>NB: Die Optionen &quot;Deadline zur Bestätigung der Registrierung begrenzt&quot; und &quot;Remind unbestätigte Benutzer&quot; müssen gesetzt werden ausgeschaltet, wenn der Admin manuelle Bestätigung aktiviert ist.</b>
<br><br>
Diese Option wird in der Regel mit der automatischen Zuordnung von Gruppen-und / oder Satzung verwendet. Zum Beispiel wird ein Benutzer, der nicht ihrer Registrierung hat bestätigt, in einer bestimmten Gruppe von Benutzern (mit oder ohne Einschränkungen auf der Galerie) eingestellt werden, während ein Benutzer, der seine Anmeldung bestätigt in einem &quot;normalen&quot; Gruppe festgesetzt werden.';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Wenn ein Administrator oder Webmaster der Galerie manuell bestätigen Registrierung anhängig ist, wird eine Benachrichtigung per E-Mail automatisch an den Benutzer gesendet. Geben Sie hier Ihre individuelle manuelle Validierung E-Mail-Betreff.<br>
Standardmäßig hat das Feld einen generischen Text in Deutsch, aber Sie können es ändern, und verwenden Sie die Übersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zusätzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verfügung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzufügen.<br>';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Geben Sie hier Ihre individuelle Anmeldebestätigung per E-Mail Betreff Mahnung (mit oder ohne neuen Schlüssel Generation).<br>
Standardmäßig hat das Feld einen generischen Text in Deutsch, aber Sie können es ändern, und verwenden Sie die Übersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zusätzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verfügung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzufügen.<br>';
$lang['UAM_ConfirmMail_Subject_d'] = 'Geben Sie hier Ihre individuelle Anmeldebestätigung per E-Mail Thema.<br>
Standardmäßig hat das Feld einen generischen Text in Deutsch, aber Sie können es ändern, und verwenden Sie die Übersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zusätzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verfügung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzufügen.<br>';
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
$lang['UAM_GTReminder_Subject_d'] = 'Geben Sie hier Ihre individuelle manuelle Ghost Tracker-Erinnerung per E-Mail Thema.<br>
Standardmäßig hat das Feld einen generischen Text in Deutsch, aber Sie können es ändern, und verwenden Sie die Übersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zusätzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verfügung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzufügen.<br>';
$lang['UAM_MailInfo_Subject_d'] = 'Geben Sie hier Ihre individuelle Informationen per E-Mail Thema.<br>
Standardmäßig hat das Feld einen generischen Text in Deutsch, aber Sie können es ändern, und verwenden Sie die Übersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zusätzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verfügung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzufügen.<br>';
?>