<?php

global $lang,$conf;

$conf_UAM = unserialize($conf['UserAdvManager']);


/* UserManager Tab */
$lang['Registration_Date'] = 'Anmeldedatum';


/* Mailing */
$lang['infos_mail %s'] = '%s, finden Sie hier Ihre Informationen um die Galerie Login:';
$lang['User: %s'] = 'Benutzer : %s';
$lang['Password: %s'] = 'Passwort: %s';
$lang['Link: %s'] = 'Klicken Sie bitte auf diesen Link bestätigen Sie Ihre Anmeldung: %s';


/* Email confirmation page */
$lang['title_confirm_mail'] = 'Überprüfen Sie Ihre Registrierung';
$lang['confirm_mail_page_title'] = 'Überprüfen Sie Ihre Registrierung';
$lang['confirm_mail_ok'] = '<br><br><br>Wir danken Ihnen, Ihre E-Mail-Adresse bestätigt haben und Ihre Anmeldung auf der Galerie. Viel Spaß!<br><br><br><br>';


/* Errors and Warnings */
$lang['UAM_audit_ok'] = 'Audit OK';
$lang['Err_audit_no_casse'] = '<b>Diese Konten sind identisch mit den Fall aufmerksam:</b> ';
$lang['Err_audit_username_char'] = '<b>Dieses Konto verwendet eine oder mehrere der verbotenen Zeichen:</b> ';
$lang['Err_audit_email_forbidden'] = '<b>Dieses Konto verwendet eine E-Mail-Anbieter sind untersagt:</b> ';
$lang['Err_audit_advise'] = '<b>Sie müssen Korrekturen an mit neuen Regeln die Sie aktiviert haben, nachzukommen durchzuführen.<br>Verwenden Sie ein Datenbank-Management-Dienstprogramm, um Benutzer-Accounts direkt in der Tabelle richtig ###_USERS';
$lang['UAM_Empty Author'] = 'Der Autor Feld müssen ausgefüllt werden um einen Kommentar zu schicken.';
if ( isset($conf_UAM[1]) and $conf_UAM[1] == 'true' )
	$lang['reg_err_login5'] = 'Benutzername bereits vorhanden, WARNUNG Name ist Groß-und Kleinschreibung.';
$lang['reg_err_login6'] = 'Benutzername muss nicht die folgenden Zeichen übereinstimmen: ';
$lang['reg_err_login7'] = 'Ihre E-Mail-Anbieter für die Registrierung ist verboten. Gebannten E-Mail-Anbieter sind: ';
$lang['UAM_empty_pwd'] = '[leeren Passwort]';
$lang['UAM_no_update_pwd'] = '[Profil aktualisiert ohne Passwort geändert]';
$lang['invalid_pwd'] = 'Ungültiger Benutzername oder Passwort !';
$lang['No_validation_for_Guest'] = 'Der &quot;Gast&quot;-Konto ist nicht Gegenstand der Validierung';
$lang['No_validation_for_default_user'] = 'Der Standard-Konto ist nicht Gegenstand der Validierung';
$lang['No_validation_for_Webmaster'] = 'Der &quot;Webmaster&quot;-Konto ist nicht Gegenstand der Validierung';
$lang['No_validation_for_your_account'] = 'Ihre personnal admin-Konto ist nicht Gegenstand der Validierung';
$lang['Database_Error'] = '<b><u>Warnung! Integrität kritischer Fehler in der Datenbank.</u></b><br><br>Bitte überprüfen Sie die Integrität der #_user_confirm_mail Tabelle.';


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




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['PasswordTest'] = 'Ergebnis Berechnung';
/* Ghost Tracker Tab */
$lang['Tab_GhostTracker'] = 'Geist Tracker';
$lang['LastVisit_Date'] = 'Letzter Besuch';
$lang['Reminder'] = 'E-Mail-Erinnerung';
$lang['Reminder_Sent_OK'] = 'JA';
$lang['Reminder_Sent_NOK'] = 'NEIN';
/* Errors and Warnings */
$lang['UAM_save_config'] ='Konfiguration gespeichert.';
$lang['reg_err_login3'] = 'Sicherheit: Das Passwort ist obligatorisch !';
$lang['reg_err_login4_%s'] = 'Sicherheit: Ein Steuer-System berechnet eine Partitur von der gewählten Passwörter Komplexität. Die Komplexität des Passworts zu niedrig ist (score = %s). Bitte wählen Sie ein neues Passwort zu mehr Sicherheit, indem Sie folgende Regeln:<br>
- Verwenden Sie Buchstaben und Zahlen<br>
- Verwenden Sie Groß-und Kleinschreibung<br>
- Erhöhung ihrer Länge (Anzahl Zeichen)<br>
Die minimale Passwörter der Gäste ist: ';
$lang['No_reminder_for_Guest'] = 'Der &quot;Gast&quot;-Konto ist nicht zu empfangen Mahnungen Geist Tracker';
$lang['No_reminder_for_default_user'] = 'Der Standard-Account ist nicht zu empfangen Mahnungen Geist Tracker';
$lang['No_reminder_for_Webmaster'] = 'Der &quot;Webmaster&quot;-Konto ist nicht zu empfangen Mahnungen Geist Tracker';
$lang['No_reminder_for_your_account'] = 'Sie personnal Admin-Konto ist nicht zu empfangen Mahnungen Geist Tracker';
/* Action button names */
$lang['audit'] = 'Audit-Einstellungen';
$lang['submit'] = 'Einstellungen speichern';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Errors and Warnings */
$lang['GhostTracker_Init_OK'] = 'Geist Tracker neu gehstellt !';
/* Action button names */
$lang['GT_Reset'] = 'Geist Tracker neu stellen';
// --------- End: New or revised $lang ---- from version 2.12.2


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['mail_exclusionlist_error'] = 'Warnung! Sie haben eine neue Zeile eingetragen (CR-LF) an den Anfang der E-Mail-Ausschluss-Liste (in rot siehe unten). Obwohl diese neue Linie nicht sichtbar ist, ist es noch vorhanden und kann zu Funktionsstörungen des Plugins verursachen. Bitte, re-Typ in Ihrem Ausschluss-Liste in einer Weise, die nicht durch einen Zeilenumbruch beginnen wird.';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.0
/* UserList Tab */
$lang['UserList_Title'] = 'Monitoring registrierte Benutzer';
$lang['Nb_Days'] = 'Anzahl der Tage seit<br>dem letzten Besuch';
// --------- End: New or revised $lang ---- from version 2.13.0


// --------- Starting below: New or revised $lang ---- from version 2.13.4
$lang['uam_no_unlink'] = '\'unlink\' Funktion ist nicht verfügbar';
$lang['uam_unlink_errors'] = 'Fehler aufgetreten beim Löschen von Dateien';
/* Global Configuration Tab */
$lang['Title_Tab'] = 'UserAdvManager - Version : ';
$lang['SubTitle1'] = 'Plugin-Konfiguration';
$lang['Tab_Global'] = 'Konfiguration';
$lang['UAM_Title1'] = 'Einstellen Einschränkungen für Registrierungen';
$lang['UAM_Title2'] = 'Einstellen Bestätigungen und Validierungen der Registrierung';
$lang['UAM_Title3'] = 'Einstellen der Registrierung durchgeführt und andere Optionen';
$lang['UAM_Title4'] = 'Tipps und Beispiele für die Benutzung';
$lang['UAM_No_Casse'] = 'Benutzernamen: Groß-und Kleinschreibung';
$lang['UAM_No_Casse_true'] = ' Aktivieren';
$lang['UAM_No_Casse_false'] = ' Deaktivieren (Standard)';
$lang['UAM_Username_Char'] = ' Benutzernamen: Ausschluss von Zeichen';
$lang['UAM_Username_Char_true'] = ' Zeichen Verboten:<br>(Verwenden Sie ein Komma, um ein Zeichen getrennt)<br><br>';
$lang['UAM_Username_Char_false'] = ' Erlauben Sie alle (Standard)';
$lang['UAM_Password_Enforced'] = 'Stärkung des Sicherheitsniveaus von Kennwörtern';
$lang['UAM_Password_Enforced_true'] = ' Aktivieren. Minimale Punktzahl: ';
$lang['UAM_Password_Enforced_false'] = ' Deaktivieren (Standard)';
$lang['UAM_AdminPassword_Enforced'] = 'Die Anwendung für Administratoren';
$lang['UAM_AdminPassword_Enforced_true'] = ' Aktivieren';
$lang['UAM_AdminPassword_Enforced_false'] = ' Deaktivieren (Standard)';
$lang['UAM_PasswordTest'] = 'Passwort testen : ';
$lang['UAM_ScoreTest'] = 'Ergebnis : ';
$lang['UAM_MailExclusion'] = 'E-Mail-Domänen Ausgrenzung';
$lang['UAM_MailExclusion_true'] = ' Schließen Sie die folgenden E-Mail-Domänen:<br>(Verwenden Sie ein Komma zu trennen jede Domain)';
$lang['UAM_MailExclusion_false'] = ' Deaktivieren (Standard)';

$lang['UAM_Mail_Info'] = 'Informationen E-Mail an Benutzer:';
$lang['UAM_Mail_Info_true'] = ' Aktivieren';
$lang['UAM_Mail_Info_false'] = ' Deaktivieren (Standard)';
$lang['UAM_MailInfo_Text'] = ' Anpassen der Informationen per E-Mail:';
$lang['UAM_Confirm_Mail'] = 'Bestätigung der Anmeldung:';
$lang['UAM_Confirm_Mail_true'] = ' Aktivieren';
$lang['UAM_Confirm_Mail_false'] = ' Deaktivieren (Standard)';
$lang['UAM_ConfirmMail_Text'] = ' Anpassen der E-Mail-Bestätigung';
$lang['UAM_Confirm_grpstat_notice'] = 'Achtung: Es ist ratsam, entweder die Gruppe oder die Validierung Satzung und nicht beide gleichzeitig.';
$lang['UAM_Confirm_Group'] = 'Validation Gruppen<br>(verlassen ------- zum nicht zu beeinträchtigen Gruppe)';
$lang['UAM_Confirm_Status'] = 'Validation Satzung<br>(verlassen ------- ein Versäumnis des Piwigo zu halten)';
$lang['UAM_No_Confirm_Group'] = 'Gruppe für Benutzer, die nicht validiert ihrer Eintragung<br>';
$lang['UAM_Validated_Group'] = 'Gruppe für Benutzer, die ihre Anmeldung bestätigt<br>';
$lang['UAM_No_Confirm_Status'] = 'Status für Benutzer, die nicht validiert ihrer Eintragung<br>';
$lang['UAM_Validated_Status'] = 'Status für Benutzer, die ihre Anmeldung bestätigt<br>';
$lang['UAM_ValidationLimit_Info'] = 'Anmeldeschluss Validierung beschränkt';
$lang['UAM_ConfirmMail_TimeOut_true'] = ' Aktivieren. Anzahl der Tage bis zum Ablauf: ';
$lang['UAM_ConfirmMail_TimeOut_false'] = ' Deaktivieren (Standard)';
$lang['UAM_ConfirmMail_Remail'] = 'Erinnern Unvalidierte User';
$lang['UAM_ConfirmMail_Remail_true'] = ' Aktivieren';
$lang['UAM_ConfirmMail_Remail_false'] = ' Deaktivieren (Standard)';
$lang['UAM_ConfirmMail_ReMail_Txt1'] = 'Anpassen der Erinnerungs-Nachricht <b><u>mit</u></b> neue Regeneration der Schlüssel Validierung.';
$lang['UAM_ConfirmMail_ReMail_Txt2'] = 'Anpassen der Erinnerungs-Nachricht <b><u>ohne</u></b> neue Regeneration der Schlüssel Validierung.';

$lang['UAM_GhostTracker'] = 'Geist Besucher-Management (Geist Tracker)';
$lang['UAM_GhostTracker_true'] = ' Aktivieren. Maximale Zeit in Tagen zwischen zwei Besuche: ';
$lang['UAM_GhostTracker_false'] = ' Deaktivieren (Standard)';
$lang['UAM_GhostTracker_ReminderText'] = 'Anpassen der Geist Tracker Erinnerungs-Nachricht';
$lang['UAM_LastVisit'] = ' Tracking registrierte Benutzer';
$lang['UAM_LastVisit_true'] = ' Aktivieren';
$lang['UAM_LastVisit_false'] = ' Deaktivieren (Standard)';
$lang['UAM_No_Comment_Anonymous'] = 'Nickname obligatorisch für Gäste Kommentare';
$lang['UAM_No_Comment_Anonymous_true'] = ' Aktivieren';
$lang['UAM_No_Comment_Anonymous_false'] = ' Deaktivieren (Standard)';

$lang['Tab_UserManager'] = 'Tracking Validierungen';

/* UserManager Tab */
$lang['SubTitle3'] = 'Tracking Validierungen';
$lang['UserManager_Title'] = 'Tracking Validierungen';
/* Ghost Tracker Tab */
$lang['SubTitle4'] = 'Geist Tracker';
$lang['GT_Init'] = 'Initializing Ghost Tracker';
$lang['GhostTracker_Title'] = 'Geist Besucher-Management';
$lang['UAM_GhostTracker_Init'] = 'Wenn Sie diese Funktion zum ersten Mal oder haben Sie nach einem langen Zeitraum aus, in dem neue Besucher registriert sind, müssen Sie initialisieren, oder setzen Sie den Geist Tracker reaktiviert. Dieser Vorgang ist nur nach Aktivierung oder Reaktivierung von der Möglichkeit gemacht. Bitte klicken Sie <u>einmal</u> die Reset-Taste unten.';
/* UserList Tab */
$lang['SubTitle5'] = 'Tracking-Besucher';
$lang['Tab_UserList'] = 'Tracking-Besucher';
/* Mailing */
$lang['Add of %s'] = 'Profil erstellt für %s';
$lang['Update of %s'] = 'Profil aktualisieren %s';
/* Email confirmation page */
$lang['confirm_mail_bad'] = '<br><br><br>Ihre Aktivierungs-Schlüssel ist falsch oder abgelaufen oder Sie haben bereits validiert Ihrem Konto haben, wenden Sie sich bitte an den Webmaster, um dieses Problem zu beheben.<br><br><br><br>';
/* Mailing */
$lang['Ghost_reminder_of_%s'] = '%s, Dies ist eine Erinnerung per E-Mail';
$lang['Reminder_with_key_of_%s'] = '%s, Ihre Validierungs-Zahl wurde erneuert';
$lang['Reminder_without_key_of_%s'] = '%s, Ihre Validierung Schlüssel abläuft';
/* Errors and Warnings */
$lang['Err_GhostTracker_Settings'] = 'Diese Seite ist nur verfügbar, wenn &quot;Geist Tracker&quot; aktiv &quot;Einstellen der Registrierung durchgeführt und andere Optionen&quot;.';
$lang['Err_Userlist_Settings'] = 'Diese Seite ist nur verfügbar, wenn &quot;Monitoring registrierte Benutzer&quot; ist aktiv in der &quot;Einstellung der Registrierung durchgeführt und andere Optionen&quot;';
// --------- End: New or revised $lang ---- from version 2.13.4


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_AdminConfMail'] = 'Bestätigung der Anmeldung für Administratoren';
$lang['UAM_Admin_ConfMail_true'] = ' Aktivieren';
$lang['UAM_Admin_ConfMail_false'] = '  Deaktivieren (Standard)';
$lang['UAM_Tips1'] = 'Anmeldungen mit E-Mail Validierung und Warnmeldung auf der Piwigo\'s Homepage';
$lang['UAM_Tips1_txt'] = '
          <ul>
            <li>
            Tore:<br>
            - Bei seiner Ankunft in der Galerie: Unterrichtung der Besucher, dass er sich registrieren um Zugang private Fotos<br>
            - Bei der Registrierung: Erzeugen Sie eine E-Mail Validierung mit direkter Verbindung, sie dem neuen Anwender seiner Nicht-Validierung und Integration von ihm mit der Gruppe "Warten"<br>
            - Bei der Validierung: Switch automatisch zur Gruppe "Warten" der Gruppe "Validiert", die den Zugang zu privaten Gruppen bietet<br><br>
            <b>Warnung: Im Standard-Betrieb, der "Gast" sieht nur den öffentlichen Kategorien, ohne Angaben Nachricht.</b>
            </li><br><br>
            <li>
Voraussetzung:<br>
- Eine Galerie mit allen oder einigen privaten Kategorien, sichtbar nur durch registrierte Benutzer<br>
- Mindestens 2 der folgenden Piwigo Nutzergruppen: "Warten", ohne die Erlaubnis der privaten Gruppen und "Validiert" mit allen Berechtigungen für den privaten Kategorien<br>
- UAM plugin<br>
- PWG Stuffs plugin, für das Hinzufügen eines Moduls Art "Personal Block"<br>
- Optional können Sie das Plugin Extended Description Multi-Sprachen<br>
            </li><br><br>
            <li>
Etappen:<br><br>
A. In plugin UAM:
              <ol>
                <li>Aktivieren Sie Anmeldebestätigung</li>
                <li>Geben Sie den Text für weitere Erklärung, die angebracht werden, um Anmeldebestätigung mail sendet. Wenn das Plugin Extended Description aktiviert ist, können die Sprach-Tags verwendet werden</li>
                <li>Wählen Sie das "Warten"-Gruppe unter "Für Anwender, die noch nicht validiert ihrer Eintragung"</li>
                <li>Wählen Sie das "Validiert"-Gruppe unter "Für Anwender, die ihre Anmeldung bestätigt haben"</li>
                <li>Speichern Sie das Plugin-Konfiguration</li>
              </ol>
<br>
B. In plugin PWG Stuffs :
              <ol>
                <li>Fügen Sie ein neues Modul Typ "Personal-Block: Zeigt einen Block Personal (z. B. eine redaktionelle)"</li>
                <li>Konfigurieren Sie das Modul unter Angabe der Titel (zB "Anmeldung bis Validierung") und seine Beschreibung, und aktivieren Sie nur "Warten" in der Liste der Gruppen erlaubt</li>
                <li>Kompletten Inhalt des Moduls mit der Meldung Informationen, die den Benutzern angezeigt werden nicht validiert. Als UAM kann Markup-Sprachen verwendet werden, wenn das Plugin Extended Description aktiviert ist</li>
                <li>Check "Display das Modul auf der Homepage der Website"</li>
                <li>Überprüfen Sie die Konfiguration des Moduls</li>
              </ol>
            </li>
          </ul>';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.0
$lang['UAM_confirmmail_custom_Txt1'] = 'Text der Bestätigungs-Seite - Bestätigung akzeptiert';
$lang['UAM_confirmmail_custom_Txt2'] = 'Text der Bestätigungs-Seite - Bestätigung abgelehnt';
$lang['LastVisit_Date'] = 'Letzter Besuch';
$lang['Nb_Days'] = 'Differenz in Tagen';
$lang['Err_UserManager_Settings'] = 'Diese Seite ist nur verfügbar, wenn "Bestätigung der Anmeldung" aktiv ist und wenn eine Gruppe von nicht validierte Besuchern wird in "Einstellen Bestätigungen und Validierungen der Registrierung" konfiguriert.';
// --------- End: New or revised $lang ---- from version 2.15.0


// --------- Starting below: New or revised $lang ---- from version 2.15.1
$lang['reg_err_mail_address_dbl'] = 'Diese E-Mail-Adresse wird bereits verwendet.';
$lang['UAM_Support_txt'] = 'Die offizielle Unterstützung für dieses Plugin ist nur auf diesem Diskussionsforum von Piwigo:<br>
<a href="http://fr.piwigo.org/forum/viewtopic.php?id=12775" onclick="window.open(this.href);return false;">Französisch-Forum - http://fr.piwigo.org/forum/viewtopic.php?id=12775</a>
<br>oder<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=15015" onclick="window.open(this.href);return false;">Englisch-Forum - http://piwigo.org/forum/viewtopic.php?id=15015</a><br><br>
Ebenfalls erhältlich, das Projekt Bugtracker: <a href="http://piwigo.org/bugs/" onclick="window.open(this.href);return false;">http://piwigo.org/bugs/</a>';
// --------- End: New or revised $lang ---- from version 2.15.1
?>