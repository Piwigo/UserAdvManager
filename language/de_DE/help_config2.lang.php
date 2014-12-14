<?php
// ConfirmMail options section
$lang['UAM_confirmTitle_d'] = '- Informationen E-Mail generation<br>
- Registrieren und Validierung E-Mail generation<br>
- Gruppen oder Status automatisch Beitritt<br>
- Anmeldeschluss Validierung<br>
- Reminder per E-Mail generation<br>
...
';
$lang['UAM_confirmmailTitle_d'] = 'Diese Option ermöglicht es einem Benutzer, entweder bestätigen Anmeldung durch Klick auf einen Link in einer E-Mail bei der Registrierung oder den Administrator gesendet, um manuell aktivieren Sie die Registrierung erhalten haben.<br><br>
Im ersten Fall wird die E-Mail von einem anpassbaren Teil zusammengesetzt, um ein wenig Begrüßung und einem festen Teil mit dem Aktivierungs-Link, die von einem zufälligen Schlüssel, die möglicherweise durch den &quot;Tracking Bestätigungen&quot;-Reiter können sich regenerieren erzeugt wird, einzuführen.<br><br>
Im zweiten Fall, <b><u>gibt es keine Bestätigung Schlüssel per E-Mail!</u></b>. Besucher müssen warten, bis ein Administrator bestätigen sie sich in &quot;Bestätigung Tracking&quot;-Registerkarte. Es ist recommanded des Piwigo die Option &quot;E-Mail-Admins, wenn ein neuer Benutzer registriert&quot; aktivieren (siehe Konfigurationsoptionen in der Piwigo) und die &quot;Information E-Mail an Benutzer&quot; verwenden, um neue Register zu warnen, sich auf ihre Freischaltung warten.
<br>
<b style=&quot;color: red;&quot;>NB: Die Optionen &quot;Deadline zur Bestätigung der Registrierung begrenzt&quot; und &quot;Remind unbestätigte Benutzer&quot; müssen gesetzt werden ausgeschaltet, wenn der Admin manuelle Bestätigung aktiviert ist.</b>
<br><br>
Diese Option wird in der Regel mit der automatischen Zuordnung von Gruppen-und / oder Satzung verwendet. Zum Beispiel wird ein Benutzer, der nicht ihrer Registrierung hat bestätigt, in einer bestimmten Gruppe von Benutzern (mit oder ohne Einschränkungen auf der Galerie) eingestellt werden, während ein Benutzer, der seine Anmeldung bestätigt in einem &quot;normalen&quot; Gruppe festgesetzt werden.';
$lang['UAM_StuffsTitle_d'] = 'Dies ermöglicht eine zusätzliche UAM-Block in PWG Stuffs Plugin (wenn installiert) um Ihre Besucher die nicht validiert hat ihre Registrierung über ihren Zustand informieren.
<br><br>
Bitte beachten Sie die <b>Tipps und Beispiele</b> am unteren Ende dieser Seite für Details.';
$lang['UAM_adminconfmailTitle_d'] = 'Sie k&ouml;nnen diese Validierung deaktivieren nur f&uuml;r Benutzer-Accounts durch den Administrator &uuml;ber Piwigo\'s Benutzer-Management-Schnittstelle geschaffen.<br><br>
Bei Aktivierung dieser Option, E-Mail-Best&auml;tigung f&uuml;r die Registrierung wird f&uuml;r jeden Benutzer vom Administrator erstellt wurde gesendet werden.<br><br>
Durch die Deaktivierung dieser Option (Standard), nur die E-Mail-Informationen gesendet werden (wenn &quot;Informations-E-Mail an Benutzer&quot; aktiviert ist).';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Wenn ein Administrator oder Webmaster der Galerie manuell bestätigen Registrierung anhängig ist, wird eine Benachrichtigung per E-Mail automatisch an den Benutzer gesendet. Geben Sie hier Ihre individuelle manuelle Validierung E-Mail-Betreff.<br>
Standardmäßig hat das Feld einen generischen Text in Deutsch, aber Sie können es ändern, und verwenden Sie die Übersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zusätzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verfügung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzufügen.<br>';
$lang['UAM_AdminValidationMail_d'] = 'Wenn ein Administrator oder Webmaster der Galerie manuell gültige Registrierung anhängig ist, ist eine Benachrichtigungs-Email automatisch an den Benutzer gesendet. Geben Sie hier den Text ein, in dieser E-Mail angezeigt.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingefügt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> , um automatisch den Namen des Zielbenutzers der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzufügen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einfügen, wenn in den Konfigurationsoptionen Piwigo gesetzt.
<br><br>
Um mehrere Sprachen zu benutzen, können Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Geben Sie hier Ihre individuelle Anmeldebestätigung per E-Mail Thema.<br>
Standardmäßig hat das Feld einen generischen Text in Deutsch, aber Sie können es ändern, und verwenden Sie die Übersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zusätzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verfügung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzufügen.<br>';
$lang['UAM_confirmtxtTitle_d'] = 'Geben Sie den einleitenden Text, den Sie in der E-Mail-Bestätigung der Anmeldung erscheinen.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingefügt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> , um automatisch den Namen des Zielbenutzers der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzufügen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einfügen, wenn in den Konfigurationsoptionen Piwigo gesetzt.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> um die Anzahl von Tagen einfügen, um eine Registrierung zu bestätigen (&quot;Anmeldeschluss Validierung beschränkt;&quot; müssen aktiviert werden).
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
$lang['UAM_RejectConnexion_d'] = 'Wenn aktiviert, wird neu registrierten Benutzern nicht bestätigen, haben ihre Anmeldung nicht in der Lage sein, um zur Galerie zu verbinden. Sie werden auf eine spezielle Seite umgeleitet werden, um sie von diesem Zustand zu informieren.<br><br>
<b style=&quot;color: red;&quot;>Warnung - Dies funktioniert nur in Verbindung mit der Bestätigung Gruppen! Siehe unten, um die Gruppen nach Bedarf eingestellt.</b>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Passen Sie hier Ihre Erklärung Text zum unbestätigten Benutzer informieren dass sie nicht in der Lage um die Galerie verbinden bis sie ihre Anmeldung bestätigt haben.
<br>
Dieses Feld ist kompatibel mit FCK Editor und, für Multi-Sprachen, können Sie die [lang] Tags der Extended Description Plugin zu benutzen, wenn es aktiv ist.';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>WARNUNG: Validierung Gruppen setzt voraus, dass Sie mindestens einen Benutzer Gruppe angelegt haben und definiert ist standardmäßig im User-Gruppen Piwigo-Management.</b><br><br>
Die Gruppen sind validiert f&uuml;r den Einsatz in Verbindung mit der &quot;Best&auml;tigung der Anmeldung&quot;';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>WARNUNG: Die Verwendung des Status Validierung erfordert, dass Sie die &quot;Gast&quot;-Nutzer mit Standard-Einstellung (als User Template) f&uuml;r neu registrierte gehalten haben. Hinweis: Sie k&ouml;nnen einem anderen Benutzer als neue Vorlage f&uuml;r registrierte gesetzt. Bitte beachten Sie die Dokumentation des Piwigo f&uuml;r weitere Details.</b><br><br>
Die Satzung sind validiert f&uuml;r den Einsatz in Verbindung mit der &quot;Best&auml;tigung der Anmeldung&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>WARNUNG: Die Verwendung von Privatsphäre Ebene erforderlich, dass Sie sie mit Ihren Bildern verwendet. Bitte beachten Sie die Piwigo in der Dokumentation für weitere Details.</b><br><br>
Das Niveau der Privatsphäre ist für den Einsatz in Verbindung mit der &quot;Bestätigung der Anmeldung&quot validiert;';
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
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Geben Sie hier Ihre individuelle Anmeldebestätigung per E-Mail Betreff Mahnung (mit oder ohne neuen Schlüssel Generation).<br>
Standardmäßig hat das Feld einen generischen Text in Deutsch, aber Sie können es ändern, und verwenden Sie die Übersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zusätzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verfügung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzufügen.<br>';
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
$lang['UAM_USRAutoTitle_d'] = 'Automatic handling of unvalidated visitors is triggered each time you connect to the gallery and works as follows:
<br><br>
- Automatic deletion of accounts not validated in the allotted time without sending automatic email reminder -> &quot;Deadline for registration validation limited&quot; <b><u>enabled</u></b> and &quot;Remind unvalidated users&quot; <b><u>disabled</u></b>.
<br><br>
- Automatically sending a reminder message with a new generation of validation key and automatic deletion of accounts not validated in the time after sending the reminder -> &quot;Deadline for registration validation limited&quot; <b><u>enabled</u></b> et &quot;Remind unvalidated users&quot; <b><u>enabled</u></b>.';
$lang['UAM_USRAutoDelTitle_d'] = 'Dies ist nur gültig, wenn der Benutzer, dessen Konto ist abgelaufen selbst löst die Löschung Mechanismus (selten, aber möglich). er hat dann von der Galerie getrennt und umgeleitet zu einer Seite mit der Löschung seines Accounts und ggf. die Gründe für diese Löschung.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingefügt tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzufügen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einfügen, wenn in den Konfigurationsoptionen Piwigo gesetzt.<br>
<b style=&quot;color: red;&quot;>[username]</b> ist hier nicht verfügbar, weil betroffene Anwender gelöscht wurde.
<br><br>
Custom Text für die Weiterleitungsseite können in dieses Feld eingegeben werden dass ist kompatibel mit den FCK-Editor und, um mehrere Sprachen zu benutzen, können Sie die Extended Description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_USRAutoMailTitle_d'] = 'Wenn aktiviert, wird diese Funktion automatisch zu senden personalisierte Inhalte in &quot;Reminder per E-Mail mit neuer Schlüssel generiert&quot;, um Besucher, die Kriterien entsprechen.';
?>