<?php
global $lang;

$lang['UAM_restricTitle'] = 'Einschränkungen für Registrierungen';
$lang['UAM_restricTitle_d'] = '
- Groß-und Kleinschreibung<br>
- Charaktere Ausgrenzung<br>
- Passwort Durchsetzung<br>
- E-Mail-Domänen Ausgrenzung<br>
...
';
$lang['UAM_confirmTitle'] = 'Bestätigungen und Validierungen der Registrierung';
$lang['UAM_confirmTitle_d'] = '
- Informationen E-Mail generation<br>
- Registrieren und Validierung E-Mail generation<br>
- Gruppen oder Status automatisch Beitritt<br>
- Anmeldeschluss Validierung<br>
- Reminder per E-Mail generation<br>
...
';
$lang['UAM_miscTitle'] = 'Registrierung gefolgt und andere Optionen';
$lang['UAM_miscTitle_d'] = '
- Geist Benutzer-Management<br>
- Gefolgt registrierte Benutzer<br>
- Nickname obligatorisch für Gäste Kommentare<br>
...
';
$lang['UAM_casenTitle'] = 'Benutzernamen: Groß-und Kleinschreibung';
$lang['UAM_casenTitle_d'] = 'Standardm&auml;&szlig;ig ist Piwigo insensitive: Gro&szlig;-und Kleinschreibung ber&uuml;cksichtigt werden verschiedene Buchstaben in den Namen von den Nutzern bei der Registrierung gew&auml;hlt. So, &quot;Foo&quot;, &quot;foo&quot; und &quot;FOO&quot; k&ouml;nnen 3 verschiedene Benutzer.<br><br>
Die Aktivierung dieser Option erlaubt es, alle Optionen im Fall von &quot;foo&quot; als ein Benutzer zu betrachten. Wenn &quot;foo&quot; bereits vorhanden ist, einen neuen Benutzer erstellen &quot;Foo&quot; werden nicht angenommen.<br><br>
<b style=&quot;color: red;&quot;>Warnung: Diese Option hat keine Auswirkungen auf den Benutzernamen erstellt vor ihrer Aktivierung.</b>';
$lang['UAM_carexcTitle'] = 'Benutzernamen: Ausschluss von Zeichen';
$lang['UAM_carexcTitle_d'] = 'Es mag interessant sein, bestimmte Zeichen in Benutzernamen verbieten (Beispiel: verweigern Logins mit &quot;@&quot;). Diese Option erm&ouml;glicht es, Zeichen oder Zeichenfolge, Veranstaltungen auszuschlie&szlig;en.<br>
NB: Die Option kann auch ausschließen, ganze Wörter.
<br><br>
<b style=&quot;color: red;&quot;>Warnung: Diese Option hat keine Auswirkungen auf den Benutzernamen erstellt vor ihrer Aktivierung.</b>';
$lang['UAM_passwTitle'] = 'Stärkung des Sicherheitsniveaus von Kennwörtern';
$lang['UAM_passwTitle_d'] = 'Durch die Aktivierung dieser Option ist zwingend die Beschlagnahme eines Passwortes bei der Anmeldung und das Kennwort erfordert vom Besucher ausgewählt, um ein Mindestmaß an Komplexität gerecht zu werden. Wird der Schwellenwert nicht erreicht wird, die Gäste erzielt, und die Mindestpunktzahl erreicht werden soll angezeigt werden, zusammen mit Empfehlungen an den Wert dieser Gäste zu steigern.<br><br>
Es gibt Feldtest der Komplexität eines Passworts zu messen und sich leisten können, eine Vorstellung von der Partitur zu erhalten, um komplexe, kundenspezifische definieren.<br><br>
Hinweis: Die Gäste eines Passwortes ist auf der Grundlage mehrerer Parameter: Länge berechnet, die Art der verwendeten Zeichen (Buchstaben, Ziffern, Großbuchstaben, Kleinbuchstaben, Sonderzeichen). Ein Wert unter 100 wird als gering, zwischen 100 und 500, die Komplexität ist durchschnittlich, mehr als 500, die Sicherheit ist sehr gut.';
$lang['UAM_passwtestTitle'] = 'Prüfung der Komplexität eines Passworts';
$lang['UAM_passwtestTitle_d'] = 'Geben Sie das Kennwort zu testen, und klicken Sie auf &quot;Ergebnis Berechnung&quot;, um das Ergebnis zu sehen.';
$lang['UAM_passwadmTitle'] = 'Die Anwendung für Administratoren';
$lang['UAM_passwadmTitle_d'] = 'Ein Administrator kann einen Benutzer-Account erstellen, mit oder ohne Anwendung der Regel der Komplexität des Computings.<br><br>
Hinweis: Wenn der Benutzer erstellte Konto will Passwort zu ändern und Passwörter für die Benutzer Stärkung aktiv ist, wird es vorbehaltlich der Regel-Satz.';
$lang['UAM_mailexcTitle'] = 'Ausschluss von Mail-Domänen';
$lang['UAM_mailexcTitle_d'] = 'Standardmäßig akzeptiert Piwigo alle E-Mail-Adressen im Format xxx@yyy.zz. Durch die Aktivierung dieser Option können Sie auf bestimmte Domains im Format ausschließen: @[Domänenname].[Domain Extension].<br><br>
Beispiele:<br>
@hotmail.com -> Ausnahme-Adressen *@hotmail.com<br>
@hotmail -> ohne alle Adressen *@hotmail *';
$lang['UAM_infomailTitle'] = 'Informationen E-Mail an Benutzer';
$lang['UAM_infomailTitle_d'] = 'Diese Option ermöglicht die Automatisierung Senden einer E-Mail-Informationen an einen Benutzer bei der Anmeldung oder bei Änderungen sein Passwort oder E-Mail-Adresse in ihrem Profil.<br><br>
Der Inhalt der Nachricht gesendet wird von einem anpassbaren Teil komponiert, um eine kleine Begrüßung und Einführung fester Bestandteil in denen die Login, Passwort und E-Mail-Adresse des Benutzers.';
$lang['UAM_infotxtTitle'] = 'Anpassen der Informationen per E-Mail';
$lang['UAM_infotxtTitle_d'] = 'Geben Sie den einleitenden Text, den Sie in der Informations-E-Mail angezeigt.<br><br>
Um mehrere Sprachen zu benutzen, können Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.<br><br>
<b style=&quot;color: red;&quot;>Text &Auml;nderung ist nur verf&uuml;gbar, wenn die &quot;Informations-E-Mail&quot; aktiviert ist.</b>';
$lang['UAM_confirmmailTitle'] = 'Die Bestätigung der Anmeldung';
$lang['UAM_confirmmailTitle_d'] = 'Diese Option ermöglicht es einem Benutzer benötigen, um ihre Registrierung durch Klick auf einen Link zu validieren erhielt in eine E-Mail geschickt zum Zeitpunkt der Anmeldung.<br><br>
Die E-Mail ist eine anpassbare Teil komponiert, um eine kleine Begr&uuml;&szlig;ung Einf&uuml;hrung und einem festen Teil mit den Aktivierungs-Link, die von einem zuf&auml;lligen Schl&uuml;ssel, die m&ouml;glicherweise durch die &quot;Tracking Validierungen regenerieren&quot; Registerkarte erzeugt wird.<br><br>
Diese Option ist in der Regel mit der automatischen Zuordnung der Gruppe und / oder Satzung verwendet. Zum Beispiel, ein Benutzer, der nicht validiert ihre Eintragung in eine bestimmte Gruppe von Nutzern eingestellt werden (mit oder ohne Einschr&auml;nkungen auf der Galerie), w&auml;hrend ein Benutzer, der seine Registrierung best&auml;tigt wird in einem &quot;normalen&quot; Gruppe eingestellt werden.';
$lang['UAM_confirmtxtTitle'] = 'Anpassen der E-Mail-Bestätigung';
$lang['UAM_confirmtxtTitle_d'] = 'Geben Sie den einleitenden Text, den Sie in der E-Mail-Bestätigung der Anmeldung erscheinen.<br><br>
Um mehrere Sprachen zu benutzen, können Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.<br><br>
<b style=&quot;color: red;&quot;>Der Text werden modifiziert ist nur verf&uuml;gbar, wenn die &quot;Best&auml;tigung der Anmeldung&quot; aktiviert ist.</b>';
$lang['UAM_confirmgrpTitle'] = 'Validation Gruppen';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>WARNUNG: Validierung Gruppen setzt voraus, dass Sie mindestens einen Benutzer Gruppe angelegt haben und definiert ist &quot;by default&quot; im User-Gruppen Piwigo-Management.</b><br><br>
Die Gruppen sind validiert f&uuml;r den Einsatz in Verbindung mit der &quot;Best&auml;tigung der Anmeldung&quot;';
$lang['UAM_confirmstatTitle'] = 'Validation Satzung';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>WARNUNG: Die Verwendung des Status Validierung erfordert, dass Sie die &quot;Gast&quot;-Nutzer mit Standard-Einstellung (als User Template) f&uuml;r neu registrierte gehalten haben. Hinweis: Sie k&ouml;nnen einem anderen Benutzer als neue Vorlage f&uuml;r registrierte gesetzt. Bitte beachten Sie die Dokumentation des Piwigo f&uuml;r weitere Details.</b><br><br>
Die Satzung sind validiert f&uuml;r den Einsatz in Verbindung mit der &quot;Best&auml;tigung der Anmeldung&quot;';
$lang['UAM_validationlimitTitle'] = 'Anmeldeschluss Validierung beschränkt';
$lang['UAM_validationlimitTitle_d'] = 'Diese Option ermöglicht es, die Gültigkeit der Schlüssel Validierung E-Mail-Grenze geschickt, um neue Registranten. Besucher, wer x Tage Zeit haben, um sich identifizieren, zu registrieren. Nach Ablauf dieser Frist die Validierung Link läuft.<br><br>
Diese Option ist in Verbindung mit der &quot;Best&auml;tigung der Anmeldung verwendet&quot;';
$lang['UAM_remailTitle'] = 'Erinnern Unvalidierte User';
$lang['UAM_remailTitle_d'] = 'Mit dieser Option k&ouml;nnen Sie eine Erinnerung per E-Mail an registrierte Benutzer zu senden, aber noch nicht best&auml;tigt ihre Eintragung in die Zeit. Es funktioniert also in Verbindung mit der &quot;Best&auml;tigung der Anmeldung&quot;<br><br>
2 Arten von E-Mails gesendet werden können: Mit oder ohne Regeneration der Validierung Schlüssel. Gegebenenfalls kann der Inhalt von E-Mails angepasst werden.<br><br>
Wenden Sie sich an die &quot;Tracking Validierungen&quot; aus.';
$lang['UAM_remailtxt1Title'] = 'Reminder per E-Mail mit den neuen Schlüssel generiert';
$lang['UAM_remailtxt1Title_d'] = 'Geben Sie den einleitenden Text, den Sie in der E-Mail-Erinnerung angezeigt wird, zusätzlich zu der Prüfschlüssel regeneriert.<br><br>
Wenn leer, wird die E-Mail-Erinnerung nur den Bestätigungslink. Es wird daher dringend empfohlen, ein wenig erläuternden Text zu nehmen. (NB: Der Text Fertigpen mit der Installation des Plugins ist als Beispiel vorgesehen)<br><br>
Um mehrere Sprachen zu benutzen, können Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.<br><br>
<b style=&quot;color: red;&quot;>Der Text werden modifiziert ist nur verf&uuml;gbar, wenn &quot;Remind Benutzer validierten&quot; aktiviert ist.</b>';
$lang['UAM_remailtxt2Title'] = 'Reminder per E-Mail, ohne dass neue Schlüssel generiert';
$lang['UAM_remailtxt2Title_d'] = 'Geben Sie den einleitenden Text, den Sie in der Erinnerung, ohne eine Bestätigung per E-Mail-Taste erscheinen regeneriert.<br><br>
Wenn links leer ist, wird die E-Mail-Erinnerung leer sein. Es wird daher dringend empfohlen, ein wenig erläuternden Text zu nehmen. (NB: Der Text Fertigpen mit der Installation des Plugins ist als Beispiel vorgesehen)<br><br>
Um mehrere Sprachen zu benutzen, können Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.<br><br>
<b style=&quot;color: red;&quot;>Der Text werden modifiziert ist nur verf&uuml;gbar, wenn &quot;Remind Benutzer validierten&quot; aktiviert ist.</b>';
$lang['UAM_ghosttrackerTitle'] = 'Geist Besucher-Management';
$lang['UAM_ghosttrackerTitle_d'] = 'Auch bekannt als &quot;Geist Tracker&quot;, wenn diese Funktion aktiviert ist, k&ouml;nnen Sie verwalten Ihre Besucher je nach der H&auml;ufigkeit ihrer Besuche. Wenn die Zeit zwischen 2 besucht, ist erreicht, wird der Besucher in Frage zu &quot;Geist Tracker&quot; Tisch, an dem Sie in der Lage sein wird, die Besucher per E-Mail erinnern.<br><br>
<b style=&quot;color: red;&quot;>Wenn Sie diese Funktion zum ersten Mal oder haben Sie nach einem langen Zeitraum aus, in dem neue Besucher registriert sind, müssen Sie initialisieren, oder setzen Sie den Geist Tracker reaktiviert.</b>';
$lang['UAM_gttextTitle'] = 'Geist Tracker Erinnerungs-Nachricht';
$lang['UAM_gttextTitle_d'] = 'Geben Sie den gewünschten Text in die E-Mail-Erinnerung angezeigt, die Benutzer rechtzeitig, um wieder zur Galerie zu besuchen (Anm.: Der Text Fertigpen mit der Installation des Plugins ist als Beispiel vorgesehen).<br><br>
Um mehrere Sprachen zu benutzen, können Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.<br><br>
<b style=&quot;color: red;&quot;>Der Text werden modifiziert ist nur verf&uuml;gbar, wenn &quot;Ghost Besucher Management&quot; aktiviert ist.</b>';
$lang['UAM_lastvisitTitle'] = 'Tracking registrierte Benutzer';
$lang['UAM_lastvisitTitle_d'] = 'Dies aktiviert einen Tisch in der &quot;Tracking users&quot;-Reiter, die Mitglieder der Galerie aufgef&uuml;hrt sind und zum Zeitpunkt ihres letzten Besuch und verbrachte Zeit (Tage) seit ihrem letzten Besuch. Die &Uuml;berwachung ist rein informativ f&uuml;r den Administrator der Galerie.';
$lang['UAM_commentTitle'] = 'Nickname obligatorisch für Gäste Kommentare';
$lang['UAM_commentTitle_d'] = 'Wenn &quot;Kommentare f&uuml;r alle&quot; aktiv ist (Beh&ouml;rde f&uuml;r unregistrierte Besucher Kommentare post), erm&ouml;glicht diese Option, um den nicht registrierten Besucher zu zwingen, ein Spitzname, der Kommentar ist willkommen in Kraft.';
$lang['UAM_tipsTitle'] = 'Tipps und Beispiele';
$lang['UAM_tipsTitle_d'] = 'Tipps und verschiedene Anwendungsbeispiele';
$lang['UAM_userlistTitle'] = 'Tracking Benutzer';
$lang['UAM_userlistTitle_d'] = 'Diese Seite gibt es zur Information an den Administrator. Es zeigt eine Liste von allen Nutzern auf der Galerie zeigt das Datum und die Anzahl der Tage seit dem letzten Besuch registriert. Die Liste ist in aufsteigender Reihenfolge der Anzahl der Tage sortiert.
<br><br>
Wenn der Geist Tracker aktiv ist, wird die Anzahl der Tage ohne einen Besuch wie der folgende Farbcode nach dem Maximum in der Geist Tracker Optionen:
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
<b>HINWEIS</b> : Die Liste wird nicht angezeigt, die nicht validiert ihrer Registrierung (falls die M&ouml;glichkeit der Validierung der Registrierung aktiviert ist). Diese Benutzer werden dann in besonderer Weise in der &quot;Tracking Validierungen verwaltet&quot; aus.';
$lang['UAM_usermanTitle'] = 'Tracking Validierungen';
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
- Senden einer Registrierung erwartet Validierung von Hand, auch wenn das Ablaufdatum überschritten ist <b>(zwingen Validierung)</b>.';
$lang['UAM_gtTitle'] = 'Geist Besucher-Management';
$lang['UAM_gtTitle_d'] = 'Als Ghost Tracker aktiviert ist und initialisiert wurde, finden Sie weiter unten die Liste der registrierten Besucher, die sich seit x Tagen zur&uuml;ckgegeben haben. &quot;x&quot; ist die Anzahl der Tage konfiguriert in der General-Setup. Dar&uuml;ber hinaus finden Sie eine Spalte angibt, ob eine E-Mail-Erinnerung hat, um die angestrebten Besucher gesendet wurde. So k&ouml;nnen Sie auf einen Blick sehen und zu behandeln Besucher, die nicht wegen der Erinnerung genommen haben.<br><br>In dieser Ansicht können Sie:
<br><br>
- Löschen Sie manuell Konten <b>(Handbuch Drain)</b>
<br>
- Generieren Sie per E-Mail-Erinnerung <b>mit dem Zurücksetzen der letzte Besuch date</b>. Dies erlaubt es, einen Platzhalter, um die angestrebten Besucher geben. Wenn der Besucher bereits eine Mahnung erhalten haben, durch nichts daran gehindert, eine neue Mail, die wieder zurückgesetzt werden, in der Tat übel, dem letzten Tag besuchen.';
?>