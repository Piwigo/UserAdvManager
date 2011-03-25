<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();


/* Global Configuration Tab */
$lang['Title_Tab1'] = 'UserAdvManager - Allgemeine Einstellungen';
$lang['Tab_Global'] = 'Allgemeine Einstellungen';
$lang['UserAdvManager_Mail_Info'] = ' Mail Informationen an den Benutzer';
$lang['UserAdvManager_Mail_Info_true'] = ' Mail an den Benutzer durch die Übernahme der Verbindungsdaten bei der Registrierung oder ihr Profil aktualisieren.';
$lang['UserAdvManager_Mail_Info_false'] = ' Schaltet die E-Mail senden. (Standard)';
$lang['UserAdvManager_MailInfo_Text'] = ' Text zur Einführung der E-Mail an Benutzer ihm zu erlauben seine E-Mail-Adresse bestätigen<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNUNG !</b> <b style="color: red;">Text Änderung ist nur verfügbar wenn Mail-Informationsdienst Benutzer aktiviert ist. Verwenden Sie die Multi-Language-Tags aus Extended Description Plugin, wenn dieses Plugin aktiviert ist !!!)</b>';
$lang['UserAdvManager_No_Casse'] = ' Benutzername Groß-und Kleinschreibung';
$lang['UserAdvManager_No_Casse_false'] = ' Lassen Sie den Benutzer Groß-und Kleinschreibung. (Standard)';
$lang['UserAdvManager_Username_Char'] = ' Limited Zeichen für den Benutzernamen';
$lang['UserAdvManager_Username_Char_true'] = ' Die folgenden Zeichen werden für den Benutzernamen Wahl verboten werden';
$lang['UserAdvManager_Username_Char_false'] = ' Verwenden Sie die Standard-Benutzernamen Zeichen Kontrolle. (Standard)';
$lang['UserAdvManager_Confirm_Mail'] = 'E-Mail-Adresse Bestätigung:';
$lang['UserAdvManager_Confirm_Mail_true'] = ' Senden Sie eine E-Mail an Benutzer damit er seine E-Mail und seine Registrierung zu bestätigen.';
$lang['UserAdvManager_Confirm_Mail_false'] = ' Verwenden Sie die Standardeinstellung Piwigo Registrierungssystem (ohne Registrierung Validierung). (Standard)';
$lang['UserAdvManager_ConfirmMail_Text'] = ' Text zur Einführung der E-Mail an Benutzer ihm zu erlauben seine E-Mail-Adresse bestätigen<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNUNG !</b> <b style="color: red;">Text Änderung ist nur verfügbar, wenn E-Mail-Adresse bestätigen aktiviert ist. Verwenden Sie die Multi-Language-Tags aus Extended Description Plugin, wenn dieses Plugin aktiviert ist !!!)</b>';
$lang['UserAdvManager_Confirm_Group_Notice'] = 'WARNUNG : Mit der Validierung Gruppen erfordert, dass Sie mindestens einen Benutzer Gruppe angelegt haben und wird standardmäßig im User-Piwigo Gruppen-Management definiert.';
$lang['UserAdvManager_No_Confirm_Group'] = 'Gruppe zur Verwendung für die Benutzer die nicht validiert die E-Mail-Adresse.';
$lang['UserAdvManager_Validated_Group'] = 'Gruppe zur Verwendung für die Benutzer die ihre E-Mail-Adresse bestätigt haben.';
$lang['UserAdvManager_Confirm_Status_Notice'] = 'WARNUNG : Die Verwendung des Status Validierung erfordert, dass Sie die "Gast"-Nutzer mit Standard-Einstellung (als Benutzer Vorlage) für neu registrierte gehalten haben. Hinweis: Sie können einem anderen Benutzer als neue Vorlage für registrierte gesetzt. Bitte beachten Sie die Dokumentation des Piwigo für weitere Informationen.';
$lang['UserAdvManager_No_Confirm_Status'] = 'Status zur Verwendung für die Benutzer die nicht validiert die E-Mail-Adresse.';
$lang['UserAdvManager_Validated_Status'] = 'Status zur Verwendung für die Benutzer die ihre E-Mail-Adresse bestätigt haben. Lassen ------- für die Verwendung von Standard-Werte Piwigo';
$lang['UserAdvManager_No_Comment_Anonymous'] = 'Hobbys sind für Kommentare obligatorisch';
$lang['UserAdvManager_No_Comment_Anonymous_false'] = 'Verwenden Sie die Standard-Einstellungen auf Piwigo Kommentare senden. (Standard)';
$lang['UserAdvManager_MailExclusion'] = 'E-Mail-Anbieter Ausgrenzung:';
$lang['UserAdvManager_MailExclusion_true'] = ' Legen Sie die E-Mail-Anbieter Ausgrenzung auf (zB: @hotmail.* oder @msn.*)';
$lang['UserAdvManager_MailExclusion_false'] = ' Legen Sie die E-Mail-Anbieter Ausgrenzung aus. (Standard)';
$lang['UserAdvManager_MailExclusion_List'] = ' Wenn E-Mail-Anbieter Ausgrenzung auf ON gesetzt ist, füllen Sie die E-Mail-Domänen auszuschließen unten. Sie müssen das folgende Format verwenden :<br>@[Domäne_name].[Domäne-Endung] - Beispiel : @hotmail.com<br>Trennen Sie die verschiedenen Bereiche mit einem Komma (,)<br>';
// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
$lang['UserAdvManager_Title1'] = 'Benutzer-Registrierung Verwaltung';
$lang['UserAdvManager_Title2'] = 'Registrierung Validierung und Gruppen / Status Verwaltung';
$lang['UserAdvManager_Password_Enforced'] = 'Stärkung Passwörter - die Aktivierung dieser Option wird die Beschlagnahme des Passworts für die Besucher eine Anmeldung erforderlich. Auch das Passwort das vom Besucher eingegebenen wird mit einem Ergebnis von Komplexität erfüllen (<b style="color: green;">aktivieren und Einstellungen speichern um mehr Informationen anzuzeigen</b>).';
$lang['UserAdvManager_Password_Enforced_Info'] = '<b style="text-decoration: underline; color: green;">Erläuterungen:</b> <b style="color: green;">Ein Passwort ist der Gäste zu den Parametern berechnet: Dauer, Art der verwendeten Zeichen (Buchstaben, Ziffern, Großbuchstaben, Kleinbuchstaben, Sonderzeichen). Wenn das Passwort des Benutzers nicht der Gäste erzielte der Gäste ist mit dem minimalen Partitur angezeigt zu erreichen und einen Hinweis auf den Ergebnis dieser Partitur zu erhöhen. Um Ihnen eine Idee, einen Ergebnis unter 100 wird als "geringe Komplexität". Zwischen 100 und 500, ist die Komplexität erhöht und Durchschnitt. Mehr als 500, das werd Fort Knox! ;-)<br>Sie können Ihre Passwörter Komplexität Tests durchführen indem Sie das unten stehende Feld. Dies ermöglicht Ihnen eine Vorstellung von der Partitur zu erhalten, um eine benutzerdefinierte Komplexität zu definieren.</b>';
$lang['UserAdvManager_PasswordTest'] = 'Passwort testen : ';
$lang['UserAdvManager_ScoreTest'] = 'Ergebnis : ';
$lang['PasswordTest'] = 'Ergebnis Berechnung';
$lang['UserAdvManager_Password_Enforced_true'] = ' Starkes Passwort erforderlich - Geben Sie die Mindestpunktzahl (Boden-Ergebnis) von Passwörtern Komplexität == ';
$lang['UserAdvManager_Password_Enforced_false'] = ' Keine Passwörter zu stärken. (Standard)';
$lang['UserAdvManager_AdminPassword_Enforced'] = 'Gelten auch die Passwörter Komplexität Kontrolle wenn ein Administrator einen Benutzer erstellen? Hinweis: Wenn der Benutzer wünscht, erstellt sein Passwort zu ändern und Passwörter für die Benutzer Stärkung aktiv ist, wird er unterliegt den Regeln festgelegt.';
$lang['UserAdvManager_AdminPassword_Enforced_true'] = 'Aktivieren Stärkung Passwörter für Administratoren.';
$lang['UserAdvManager_AdminPassword_Enforced_false'] = 'Deaktivieren Stärkung Passwörter für Administratoren. (Standard)';
$lang['UserAdvManager_GhostTracker'] = 'Geist Tracker - Ermöglicht registrierten Nutzern zur Verwaltung nach ihrem letzten Besuch Datum :';
$lang['UserAdvManager_GhostTracker_true'] = ' Aktivieren Geist Tracker.';
$lang['UserAdvManager_GhostTracker_false'] = ' Deaktivieren Geist Tracker. (Default)';
$lang['UserAdvManager_GhostTracker_DayLimit'] = ' Geben Sie hier die Obergrenze in Tagen, zwischen zwei Besuche eines Besuchers. Wenn dieser Grenzwert erreicht ist, wird diese Besucher in der Tabelle erscheinen auf "Geist Tracker" aus.';
$lang['UserAdvManager_GhostTracker_ReminderText'] = ' Text in die E-Mail-Erinnerung verwendet geschickt zu fördern Besucher kommen zurück zur Galerie (Anm.: Der Text Fertigpen bei der Plugin-Installation ist als ein Beispiel).<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNUNG !</b> <b style="color: red;">Text Änderung ist nur verfügbar wenn Mail-Informationsdienst Benutzer aktiviert ist. Verwenden Sie die Multi-Language-Tags aus Extended Description Plugin, wenn dieses Plugin aktiviert ist !!!)</b>';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
$lang['UserAdvManager_GhostTracker_Notice'] = 'Wenn der Geist Tracker-Funktion aktiviert ist, können Sie verwalten Ihre Besucher je nach der Häufigkeit ihrer Besuche. <b style="color: red;">WICHTIG: Wenn Sie diese Funktion zum ersten Mal ermöglichen oder Sie haben nach einem langen Zeitraum aus in dem neue Besucher registriert sind reaktiviert, besuchen Sie die Geist Tracker-Panel und folgen Sie den Anweisungen für Geist Tracker Initialisierung.</b>';
// --------- End: New or revised $lang ---- from version 2.12.2
// --------- Starting below: New or revised $lang ---- from version 2.12.6
$lang['UserAdvManager_No_Casse_true'] = ' Stellen Sie das Benutzerkonto Groß-und Kleinschreibung bei der Registrierung und Identifizierung Schritt (USER = user = User = usER...).';
// --------- End: New or revised $lang ---- from version 2.12.6


/* ConfirmMail Configuration Tab */
$lang['ConfirmMail_Title'] = 'Erweiterte Management-und Einstellungen der Anmeldebestätigung per E-Mail';
$lang['Title_Tab2'] = 'UserAdvManager - ConfirmMail Einstellungen';
$lang['Tab_ConfirmMail'] = 'ConfirmMail Einstellungen';
$lang['UserAdvManager_ConfirmMail_Info'] = 'Wenn Sie diese Option aktivieren, wählen Sie die gewünschte Zeit (x) in das untere Feld. Besucher, die sich dann x Tage Validierung ihrer Eintragung haben registrieren lassen. Nach Ablauf dieser Frist die Validierung Link haben sie per Post erhalten werden abgelaufen sein.<br>';
$lang['UserAdvManager_ConfirmMail_TimeOut_true'] = 'Aktivieren Sie die Begrenzung der Anmeldeschluss.';
$lang['UserAdvManager_ConfirmMail_TimeOut_false'] = 'Deaktivieren Sie die Begrenzung der Anmeldeschluss. (Default)';
$lang['UserAdvManager_ConfirmMail_TimeOut'] = 'Validation Verzögerung:';
$lang['UserAdvManager_ConfirmMail_Delay_Info'] = 'Geben Sie die Anzahl der Tage vor Ablauf der Eintragung Validierung : ';
$lang['UserAdvManager_ConfirmMail_Remail'] = 'Aktivieren oder Deaktivieren von E-Mail-Erinnerung an Unvalidierte Benutzer :';
$lang['UserAdvManager_ConfirmMail_Remail_true'] = 'Aktivieren Sie per E-Mail-Erinnerung';
$lang['UserAdvManager_ConfirmMail_Remail_false'] = 'Deaktivieren von E-Mail-Erinnerung. (Default)';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt1'] = 'Custom Inhalt der Erinnerungs-Nachricht mit der Regeneration der Validierung Schlüssel. <br>Wenn leer, wird die Erinnerung per E-Mail nur den Bestätigungslink. Es wird daher dringend empfohlen, ein wenig erläuternden Text zu nehmen. (NB: Der Text Fertigpen bei der Plugin-Installation ist als ein Beispiel)<br><br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNUNG !</b> <b style="color: red;">Text Änderung ist nur verfügbar wenn Mail-Informationsdienst Benutzer aktiviert ist. Verwenden Sie die Multi-Language-Tags aus Extended Description Plugin, wenn dieses Plugin aktiviert ist !!!)</b>';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt2'] = 'Custom Inhalt der Erinnerungs-Nachricht ohne Regeneration der Validierung Schlüssel. <br>Wenn leer, wird die Erinnerung per E-Mail nur den Bestätigungslink. Es wird daher dringend empfohlen, ein wenig erläuternden Text zu nehmen. (NB: Der Text Fertigpen bei der Plugin-Installation ist als ein Beispiel)<br><br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNUNG !</b> <b style="color: red;">Text Änderung ist nur verfügbar wenn Mail-Informationsdienst Benutzer aktiviert ist. Verwenden Sie die Multi-Language-Tags aus Extended Description Plugin, wenn dieses Plugin aktiviert ist !!!)</b>';


/* UserManager Tab */
$lang['UserManager_Title'] = 'Erweiterte Einstellungen von validierten registrierte Benutzer';
$lang['Title_Tab3'] = 'UserAdvManager - Besucher-Management';
$lang['Tab_UserManager'] = 'Besucher-Management';
$lang['UserAdvManager_ConfirmMail_User_List'] = 'Wenn die Begrenzung der Frist für die Anmeldung aktiviert ist, finden Sie weiter unten die Liste der Benutzer erwartet Validierung, <b style="text-decoration: underline;">ob</b> in der Zeit sind sie zu validieren.<br><br>In dieser Ansicht können Sie:
<br><br>
- Löschen Sie manuell Konten <b>(Handbuch Drain)</b>
<br>
- Generieren Sie per E-Mail-Erinnerung <b>ohne</b> erzeugt einen neuen Schlüssel. Warnung: Senden Sie eine E-Mail-Erinnerung für die angestrebten Besucher. Diese Funktion kann nicht zurückgesetzt dem Zeitpunkt der Eintragung des angestrebten Besucher und das Zeitlimit ist weiterhin gültig.
<br>
- Generieren Sie per E-Mail-Erinnerung <b>mit</b> erzeugt einen neuen Schlüssel. Warnung: Senden Sie eine E-Mail-Erinnerung für die angestrebten Besucher. Diese Funktion setzt auch den Zeitpunkt der Eintragung des angestrebten Besucher, die die Frist für die Validierung erweitern entspricht.
<br>
- Senden einer Registrierung erwartet Validierung von Hand, auch wenn das Ablaufdatum überschritten ist <b>(zwingen Validierung)</b>.
<br>';
$lang['Registration_Date'] = 'Anmeldedatum';


// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Ghost Tracker Tab */
$lang['GhostTracker_Title'] = 'Erweiterte Gespenst Besucher-Management';
$lang['Title_Tab4'] = 'UserAdvManager - Geist Tracker';
$lang['Tab_GhostTracker'] = 'Geist Tracker';
$lang['LastVisit_Date'] = 'Letzter Besuch';
$lang['Ghost_Reminder'] = 'E-Mail-Erinnerung';
$lang['Reminder_Sent_OK'] = 'JA';
$lang['Reminder_Sent_NOK'] = 'NEIN';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
$lang['UserAdvManager_GhostTracker_Init'] = 'Wenn Sie diese Funktion zum ersten Mal oder haben Sie nach einem langen Zeitraum aus, in dem neue Besucher registriert sind, müssen Sie initialisieren, oder setzen Sie den Ghost Tracker reaktiviert. Dieser Vorgang ist nur nach Aktivierung oder Reaktivierung von der Möglichkeit gemacht. Bitte klicken Sie <u>einmal</u> die Reset-Taste unten.';
$lang['UserAdvManager_GhostTracker_User_List'] = 'Wenn Geist Tracker aktiviert ist und initialisiert wurde, finden Sie weiter unten die Liste der registrierten Besucher, die sich seit x Tagen zurückgegeben haben. "x" ist die Anzahl der Tage konfiguriert in der Allgemeine Einstellungen. Darüber hinaus finden Sie eine Spalte angibt, ob eine E-Mail-Erinnerung hat, um die angestrebten Besucher gesendet wurde. So können Sie auf einen Blick sehen und zu behandeln Besucher, die nicht wegen der Erinnerung genommen haben.<br><br>In dieser Ansicht können Sie:
<br><br>
- Löschen Sie manuell Konten <b>(manuell drain)</b>
<br>
- Generieren Sie per E-Mail-Erinnerung <b>mit dem Zurücksetzen der letzte Besuch date</b>. Dies erlaubt es, einen Platzhalter, um die angestrebten Besucher geben. Wenn der Besucher bereits eine Mahnung erhalten haben, durch nichts daran gehindert, eine neue Mail, die wieder zurückgesetzt werden, in der Tat übel, dem letzten Tag besuchen.
<br>';
// --------- End: New or revised $lang ---- from version 2.12.2


/* Mailing */
$lang['infos_mail %s'] = '%s, finden Sie hier Ihre Informationen um die Galerie Login:';
$lang['User: %s'] = 'Benutzer : %s';
$lang['Password: %s'] = 'Passwort: %s';
$lang['Add of %s'] = 'Hinzufügen von %s';
$lang['Update of %s'] = 'Aktualisierung der %s';
$lang['Link: %s'] = 'Klicken Sie bitte auf diesen Link bestätigen Sie Ihre Anmeldung: %s';
$lang['Reminder_with_key_of_%s'] = '%s, Ihre Validierungs-Zahl wurde erneuert';
$lang['Reminder_without_key_of_%s'] = '%s, Ihre Validierung Schlüssel abläuft';
$lang['Ghost_remainder_of_%s'] = '%s, Dies ist eine Erinnerung per E-Mail';


/* Email confirmation page */
$lang['title_confirm_mail'] = 'Überprüfen Sie Ihre Registrierung';
$lang['confirm_mail_page_title'] = 'Überprüfen Sie Ihre Registrierung';
$lang['confirm_mail_ok'] = '<br><br><br>Wir danken Ihnen, Ihre E-Mail-Adresse bestätigt haben und Ihre Anmeldung auf der Galerie. Viel Spaß!<br><br><br><br>';
$lang['confirm_mail_bad'] = '<br><br><br>Ihre Aktivierungs-Schlüssel ist falsch oder abgelaufen oder Sie haben bereits validiert Ihrem Konto. Wenden Sie sich bitte an den Webmaster, um dieses Problem zu beheben.<br><br><br><br>';


/* Errors and Warnings */
$lang['UserAdvManager_audit_ok'] = 'Audit OK';
$lang['Err_audit_no_casse'] = '<b>Diese Konten sind identisch mit den Fall aufmerksam:</b> ';
$lang['Err_audit_username_char'] = '<b>Dieses Konto verwendet eine oder mehrere der verbotenen Zeichen:</b> ';
$lang['Err_audit_email_forbidden'] = '<b>Dieses Konto verwendet eine E-Mail-Anbieter sind untersagt:</b> ';
$lang['Err_audit_advise'] = '<b>Sie müssen Korrekturen an mit neuen Regeln die Sie aktiviert haben, nachzukommen durchzuführen.<br>Verwenden Sie ein Datenbank-Management-Dienstprogramm, um Benutzer-Accounts direkt in der Tabelle richtig ###_USERS';
$lang['UserAdvManager_Empty Author'] = 'Der Autor Feld müssen ausgefüllt werden um einen Kommentar zu schicken.';
if ( isset($conf_UserAdvManager[1]) and $conf_UserAdvManager[1] == 'true' )
	$lang['reg_err_login5'] = 'Benutzername bereits vorhanden, WARNUNG Name ist Groß-und Kleinschreibung.';
$lang['reg_err_login6'] = 'Benutzername muss nicht die folgenden Zeichen übereinstimmen: ';
$lang['reg_err_login7'] = 'Ihre E-Mail-Anbieter für die Registrierung ist verboten. Gebannten E-Mail-Anbieter sind: ';
$lang['UserAdvManager_empty_pwd'] = '[leeren Passwort]';
$lang['UserAdvManager_no_update_pwd'] = '[Profil aktualisiert ohne Passwort geändert]';
$lang['invalid_pwd'] = 'Ungültiger Benutzername oder Passwort !';
$lang['Err_ConfirmMail_Settings'] = 'Diese Seite wird nur verfügbar wenn "E-Mail-Adresse Bestätigung" ist aktiviert im "Allgemeine Einstellungen" seite.';
$lang['Err_UserManager_Settings'] = 'Diese Seite ist nur verfügbar, wenn "Enable Begrenzung der Anmeldeschluss ist aktiviert in der "ConfirmMail Einstellungen" und ein Unvalidierte Benutzer Gruppe ist im "Allgemeine Einstellungen" seite gestellt.';
$lang['No_validation_for_Guest'] = 'Der "Gast"-Konto ist nicht Gegenstand der Validierung';
$lang['No_validation_for_default_user'] = 'Der Standard-Konto ist nicht Gegenstand der Validierung';
$lang['No_validation_for_Webmaster'] = 'Der "Webmaster"-Konto ist nicht Gegenstand der Validierung';
$lang['No_validation_for_your_account'] = 'Ihre personnal admin-Konto ist nicht Gegenstand der Validierung';
$lang['Database_Error'] = '<b><u>Warnung! Integrität kritischer Fehler in der Datenbank.</u></b><br><br>Bitte überprüfen Sie die Integrität der #_user_confirm_mail Tabelle.';
// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
$lang['UserAdvManager_save_config'] ='Konfiguration gespeichert.';
$lang['reg_err_login3'] = 'Sicherheit: Das Passwort ist obligatorisch !';
$lang['reg_err_login4_%s'] = 'Sicherheit: Ein Steuer-System berechnet eine Partitur von der gewählten Passwörter Komplexität. Die Komplexität des Passworts zu niedrig ist (score = %s). Bitte wählen Sie ein neues Passwort zu mehr Sicherheit, indem Sie folgende Regeln:<br>
- Verwenden Sie Buchstaben und Zahlen<br>
- Verwenden Sie Groß-und Kleinschreibung<br>
- Erhöhung ihrer Länge (Anzahl Zeichen)<br>
Die minimale Passwörter der Gäste ist: ';
$lang['No_reminder_for_Guest'] = 'Der "Gast"-Konto ist nicht zu empfangen Mahnungen Geist Tracker';
$lang['No_reminder_for_default_user'] = 'Der Standard-Account ist nicht zu empfangen Mahnungen Geist Tracker';
$lang['No_reminder_for_Webmaster'] = 'Der "Webmaster"-Konto ist nicht zu empfangen Mahnungen Geist Tracker';
$lang['No_reminder_for_your_account'] = 'Sie personnal Admin-Konto ist nicht zu empfangen Mahnungen Geist Tracker';
$lang['Err_GhostTracker_Settings'] = 'Diese Seite ist nur verfügbar, wenn "Geist Tracker" in der "Allgemeine Einstellungen" seite gestellt ist.';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
$lang['GhostTracker_Init_OK'] = 'Geist Tracker neu gehstellt !';
// --------- End: New or revised $lang ---- from version 2.12.2


/* Processing messages */
$lang['%d_Mail_With_Key'] = '%d Nachricht mit wichtigen Erneuerung gesendet wurde';
$lang['%d_Mails_With_Key'] = '%d Nachrichten mit den wichtigsten Erneuerung geschickt wurden';
$lang['%d_Reminder_Sent'] = '%d Erinnerung Nachricht wurde gesendet';
$lang['%d_Reminders_Sent'] = '%d Erinnerung Nachrichten wurden gesendet';
$lang['%d_Validated_User'] = '%d Benutzer manuell validiert';
$lang['%d_Validated_Users'] = '%d Benutzer manuell validiert';


/* Action button names */
$lang['Delete_selected'] = 'Löschen';
$lang['Mail_without_key'] = 'Erinnerung ohne Schlüssel';
$lang['Mail_with_key'] = 'Erinnerung mit Schlüssel';
$lang['Force_Validation'] = 'gezwungen Validierung';
$lang['Reminder_Email'] = 'E-Mail-Erinnerung';
// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
$lang['audit'] = 'Audit-Einstellungen';
$lang['submit'] = 'Einstellungen speichern';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
$lang['GT_Reset'] = 'Geist Tracker neu stellen';
// --------- End: New or revised $lang ---- from version 2.12.2
?>