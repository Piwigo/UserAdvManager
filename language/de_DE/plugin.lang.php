<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();


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
$lang['UserAdvManager_save_config'] ='Konfiguration gespeichert.';
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


// --------- Starting below: New or revised $lang ---- from version 2.12.7
/* Errors and Warnings */
$lang['mail_text_error'] = '<b>Warnung!</b> - Semikolon (;) sind nicht im addtionnal E-Mail-Text erlaubt. Diese Zeichen wurden automatisch durch einen Punkt ersetzt (.). Für Informationen, ist der geänderte Text (n) (sind) in Rot in das entsprechende Feld (s dargestellt). Sie bitte, ob es (sie) aus.';
// --------- End: New or revised $lang ---- from version 2.12.7


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
$lang['UserAdvManager_Title1'] = 'Einstellen Einschränkungen für Registrierungen';
$lang['UserAdvManager_Title2'] = 'Einstellen Bestätigungen und Validierungen der Registrierung';
$lang['UserAdvManager_Title3'] = 'Einstellen der Registrierung durchgeführt und andere Optionen';
$lang['UserAdvManager_Title4'] = 'Tipps und Beispiele für die Benutzung';
$lang['UserAdvManager_No_Casse'] = 'Benutzernamen: Groß-und Kleinschreibung';
$lang['UserAdvManager_No_Casse_true'] = ' Aktivieren';
$lang['UserAdvManager_No_Casse_false'] = ' Deaktivieren (Standard)';
$lang['UserAdvManager_Username_Char'] = ' Benutzernamen: Ausschluss von Zeichen';
$lang['UserAdvManager_Username_Char_true'] = ' Zeichen Verboten:<br>(Verwenden Sie ein Komma, um ein Zeichen getrennt)<br><br>';
$lang['UserAdvManager_Username_Char_false'] = ' Erlauben Sie alle (Standard)';
$lang['UserAdvManager_Password_Enforced'] = 'Stärkung des Sicherheitsniveaus von Kennwörtern';
$lang['UserAdvManager_Password_Enforced_true'] = ' Aktivieren. Minimale Punktzahl: ';
$lang['UserAdvManager_Password_Enforced_false'] = ' Deaktivieren (Standard)';
$lang['UserAdvManager_AdminPassword_Enforced'] = 'Die Anwendung für Administratoren';
$lang['UserAdvManager_AdminPassword_Enforced_true'] = ' Aktivieren';
$lang['UserAdvManager_AdminPassword_Enforced_false'] = ' Deaktivieren (Standard)';
$lang['UserAdvManager_PasswordTest'] = 'Passwort testen : ';
$lang['UserAdvManager_ScoreTest'] = 'Ergebnis : ';
$lang['UserAdvManager_MailExclusion'] = 'E-Mail-Domänen Ausgrenzung';
$lang['UserAdvManager_MailExclusion_true'] = ' Schließen Sie die folgenden E-Mail-Domänen:<br>(Verwenden Sie ein Komma zu trennen jede Domain)';
$lang['UserAdvManager_MailExclusion_false'] = ' Deaktivieren (Standard)';

$lang['UserAdvManager_Mail_Info'] = 'Informationen E-Mail an Benutzer:';
$lang['UserAdvManager_Mail_Info_true'] = ' Aktivieren';
$lang['UserAdvManager_Mail_Info_false'] = ' Deaktivieren (Standard)';
$lang['UserAdvManager_MailInfo_Text'] = ' Anpassen der Informationen per E-Mail:';
$lang['UserAdvManager_Confirm_Mail'] = 'Bestätigung der Anmeldung:';
$lang['UserAdvManager_Confirm_Mail_true'] = ' Aktivieren';
$lang['UserAdvManager_Confirm_Mail_false'] = ' Deaktivieren (Standard)';
$lang['UserAdvManager_ConfirmMail_Text'] = ' Anpassen der E-Mail-Bestätigung';
$lang['UserAdvManager_Confirm_grpstat_notice'] = 'Achtung: Es ist ratsam, entweder die Gruppe oder die Validierung Satzung und nicht beide gleichzeitig.';
$lang['UserAdvManager_Confirm_Group'] = 'Validation Gruppen<br>(verlassen ------- zum nicht zu beeinträchtigen Gruppe)';
$lang['UserAdvManager_Confirm_Status'] = 'Validation Satzung<br>(verlassen ------- ein Versäumnis des Piwigo zu halten)';
$lang['UserAdvManager_No_Confirm_Group'] = 'Gruppe für Benutzer, die nicht validiert ihrer Eintragung<br>';
$lang['UserAdvManager_Validated_Group'] = 'Gruppe für Benutzer, die ihre Anmeldung bestätigt<br>';
$lang['UserAdvManager_No_Confirm_Status'] = 'Status für Benutzer, die nicht validiert ihrer Eintragung<br>';
$lang['UserAdvManager_Validated_Status'] = 'Status für Benutzer, die ihre Anmeldung bestätigt<br>';
$lang['UserAdvManager_ValidationLimit_Info'] = 'Anmeldeschluss Validierung beschränkt';
$lang['UserAdvManager_ConfirmMail_TimeOut_true'] = ' Aktivieren. Anzahl der Tage bis zum Ablauf: ';
$lang['UserAdvManager_ConfirmMail_TimeOut_false'] = ' Deaktivieren (Standard)';
$lang['UserAdvManager_ConfirmMail_Remail'] = 'Erinnern Unvalidierte User';
$lang['UserAdvManager_ConfirmMail_Remail_true'] = ' Aktivieren';
$lang['UserAdvManager_ConfirmMail_Remail_false'] = ' Deaktivieren (Standard)';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt1'] = 'Anpassen der Erinnerungs-Nachricht <b><u>mit</u></b> neue Regeneration der Schlüssel Validierung.';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt2'] = 'Anpassen der Erinnerungs-Nachricht <b><u>ohne</u></b> neue Regeneration der Schlüssel Validierung.';

$lang['UserAdvManager_GhostTracker'] = 'Geist Besucher-Management (Geist Tracker)';
$lang['UserAdvManager_GhostTracker_true'] = ' Aktivieren. Maximale Zeit in Tagen zwischen zwei Besuche: ';
$lang['UserAdvManager_GhostTracker_false'] = ' Deaktivieren (Standard)';
$lang['UserAdvManager_GhostTracker_ReminderText'] = 'Anpassen der Geist Tracker Erinnerungs-Nachricht';
$lang['UserAdvManager_LastVisit'] = ' Tracking registrierte Benutzer';
$lang['UserAdvManager_LastVisit_true'] = ' Aktivieren';
$lang['UserAdvManager_LastVisit_false'] = ' Deaktivieren (Standard)';
$lang['UserAdvManager_No_Comment_Anonymous'] = 'Nickname obligatorisch für Gäste Kommentare';
$lang['UserAdvManager_No_Comment_Anonymous_true'] = ' Aktivieren';
$lang['UserAdvManager_No_Comment_Anonymous_false'] = ' Deaktivieren (Standard)';

$lang['UserAdvManager_Tips1'] = 'Registrations with email validation and warning message on the Piwigo\'s homepage';
$lang['UserAdvManager_Tips1_txt'] = '
          <ul>
            <li>
Ingredients needed:<br>
- 2 Piwigo\'s user groups at least: &quot;Waiting&quot; for visitors awaiting validation and &quot;Validated&quot; for visitors who have validated their registration<br>
- NBC_UAM plugin<br>
- PWG Stuffs plugin<br>
- Possibly Extended Description plugin (to support multi-lingual)
            </li>
<br><br>
            <li>
La recette :<br>
            <ul>
              <li>
Preamble: It\'s located in the case of a private gallery or semi-private (ie only a small part of categories is available by Guests and registered can see everything). We consider that the required plugins are installed (does it remind you?).<br><br>
              </li>
              <li>
Attribute group &quot;Waiting&quot; no permission on private categories<br><br>
              </li>
              <li>
Attribute group &quot;Validated&quot; all permissions on the private categories<br><br>
              </li>
              <li>
In NBC_UAM plugin:
              <ol>
                <li>Enable registration confirmation</li>
                <li>In the field below &quot;Customizing the confirmation email&quot;, enter text for additional explanation will be attached to email registration confirmation. Possibly, it is possible to use markup language implemented by the plugin Extended Description</li>
                <li>In the &quot;Group for users who have not validated their registration&quot;, select group &quot;Waiting&quot;</li>
                <li>In the &quot;Group for users who have validated their registration&quot;, select group &quot;Validated&quot;</li>
                <li>Save the plugin configuration</li>
              </ol>
              </li>
<br><br>
              <li>
In PWG Stuff plugin:
              <ol>
                <li>Add a new module personal block like an edito</li>
                <li>In the module\'s configuration, in addition to its title (eg &quot;Registration pending validation&quot;) and its description, check only the authorized group &quot;Waiting&quot;</li>
                <li>In the content module, enter the message text which sought information will be visible as invalid user. Again, ability to manage multi-language through Extended Description\'s tags</li>
                <li>Validate module</li>
                <li>Define its place on the main page of the gallery</li>
              </ol>
              </li>
            </ul>
            </li>
<br><br>
            <li>
              The result:<br>
              - A &quot;Guest&quot; arrives on the gallery, he sees nothing other than the public categories and no information message.<br>
              - He registers. This generates an email validation and automatic membership to the group &quot;Waiting&quot;.<br>
              - At the end, he\'s redirected to the gallery homepage and a message indicating the waiting of validate its registration<br><br>
              He received his email validation, following the link provided for that purpose in the mail, releases the group &quot;Waiting&quot; and takes place in the group &quot;Validated&quot;. By clicking the &quot;Home&quot;, then he\'s connected to the gallery with full access to private groups and without the information message.
            </li>
          </ul>';

$lang['Tab_UserManager'] = 'Tracking Validierungen';

/* UserManager Tab */
$lang['SubTitle3'] = 'Tracking Validierungen';
$lang['UserManager_Title'] = 'Tracking Validierungen';
/* Ghost Tracker Tab */
$lang['SubTitle4'] = 'Geist Tracker';
$lang['GT_Init'] = 'Initializing Ghost Tracker';
$lang['GhostTracker_Title'] = 'Geist Besucher-Management';
$lang['UserAdvManager_GhostTracker_Init'] = 'Wenn Sie diese Funktion zum ersten Mal oder haben Sie nach einem langen Zeitraum aus, in dem neue Besucher registriert sind, müssen Sie initialisieren, oder setzen Sie den Geist Tracker reaktiviert. Dieser Vorgang ist nur nach Aktivierung oder Reaktivierung von der Möglichkeit gemacht. Bitte klicken Sie <u>einmal</u> die Reset-Taste unten.';
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
$lang['Err_UserManager_Settings'] = 'Diese Seite ist nur verfügbar, wenn &quot;Deadline für die Registrierung begrenzte Validierung&quot; aktiv ist und ein Unvalidierte User-Gruppe ist im Abschnitt &quot;Einstellung Bestätigungen und Validierungen der Registrierung&quot; gesetzt.';
$lang['Err_GhostTracker_Settings'] = 'Diese Seite ist nur verfügbar, wenn &quot;Geist Tracker&quot; aktiv &quot;Einstellen der Registrierung durchgeführt und andere Optionen&quot;.';
$lang['Err_Userlist_Settings'] = 'Diese Seite ist nur verfügbar, wenn &quot;Monitoring registrierte Benutzer&quot; ist aktiv in der &quot;Einstellung der Registrierung durchgeführt und andere Optionen&quot;';
// --------- End: New or revised $lang ---- from version 2.13.4
?>