<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();


/* UserManager Tab */
$lang['Registration_Date'] = 'Date d\'enregistrement';


/* Mailing */
$lang['infos_mail %s'] = '%s, voici vos informations pour vous identifier sur la galerie :';
$lang['User: %s'] = 'Utilisateur : %s';
$lang['Password: %s'] = 'Mot de passe: %s';
$lang['Link: %s'] = 'Cliquez sur le lien suivant pour confirmer votre inscription : %s';


/* Email confirmation page */
$lang['title_confirm_mail'] = 'Confirmation de votre inscription';
$lang['confirm_mail_page_title'] = 'Confirmation d\'inscription';
$lang['confirm_mail_ok'] = '<br><br><br>Merci d\'avoir confirmé votre mail et aussi et surtout votre inscription sur le site, profitez bien des photos ...<br><br><br><br>';


/* Errors and Warnings */
$lang['UserAdvManager_audit_ok'] = 'Audit OK';
$lang['Err_audit_no_casse'] = '<b>Ces comptes sont identiques à la casse près :</b> ';
$lang['Err_audit_username_char'] = '<b>Ce compte contient un ou des caractères interdits :</b> ';
$lang['Err_audit_email_forbidden'] = '<b>Ce compte contient des domaines de messagerie interdit :</b> ';
$lang['Err_audit_advise'] = '<b>Vous avez des corrections a faire pour respecter les nouvelles règles que vous avez activées.<br>Utilisez un utilitaire de gestion de base de données pour corriger les comptes utilisateurs directement dans la table ###_USERS si nécessaire.</b><br><br>';
$lang['UserAdvManager_Empty Author'] = 'Le champs auteur doit être rempli pour enregistrer un commentaire.';
if ( isset($conf_UserAdvManager[1]) and $conf_UserAdvManager[1] == 'true' )
	$lang['reg_err_login5'] = 'ce nom utilisateur est déjà pris, ATTENTION le nom est insensible à la casse (Majuscule = Minuscule).';
$lang['reg_err_login6'] = 'le nom utilisateur ne doit pas contenir les caractère suivants : ';
$lang['reg_err_login7'] = 'L\'adresse email est issue d\'un prestataire interdit. Les prestataires d\'adresses email interdits à l\'inscription sont : ';
$lang['UserAdvManager_empty_pwd'] = '[mot de passe vide]';
$lang['UserAdvManager_no_update_pwd'] = '[mise à jour du profil sans changement du mot de passe]';
$lang['invalid_pwd'] = 'Nom utilisateur ou Mot de passe invalide !';
$lang['No_validation_for_Guest'] = 'Le compte Guest n\'est pas soumis à validation';
$lang['No_validation_for_default_user'] = 'Le compte par défaut n\'est pas soumis à validation';
$lang['No_validation_for_Webmaster'] = 'Le compte du Webmaster n\'est pas soumis à validation';
$lang['No_validation_for_your_account'] = 'Votre compte d\'admin n\'est pas soumis à validation';
$lang['Database_Error'] = '<b><u>Attention ! Erreur critique d\'intégrité dans votre base de données.</u></b><br><br>Veuillez contrôler l\'intégrité de la table #_user_confirm_mail.';


/* Processing messages */
$lang['%d_Mail_With_Key'] = '%d message avec renouvellement de clé a été envoyé';
$lang['%d_Mails_With_Key'] = '%d messages avec renouvellement de clé ont été envoyés';
$lang['%d_Reminder_Sent'] = '%d message de rappel a été envoyé';
$lang['%d_Reminders_Sent'] = '%d messages de rappel ont été envoyés';
$lang['%d_Validated_User'] = '%d Utilisateur validé manuellement';
$lang['%d_Validated_Users'] = '%d Utilisateurs validés manuellement';


/* Action button names */
$lang['Delete_selected'] = 'Supprimer';
$lang['Mail_without_key'] = 'Rappel sans clé';
$lang['Mail_with_key'] = 'Rappel avec clé';
$lang['Force_Validation'] = 'Validation forcée';




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['PasswordTest'] = 'Calcul du score';
/* Ghost Tracker Tab */
$lang['Tab_GhostTracker'] = 'Ghost Tracker';
$lang['LastVisit_Date'] = 'Date de dernière visite';
$lang['Reminder'] = 'Email de rappel';
$lang['Reminder_Sent_OK'] = 'OUI';
$lang['Reminder_Sent_NOK'] = 'NON';
/* Errors and Warnings */
$lang['UserAdvManager_save_config'] ='Configuration enregistrée.';
$lang['reg_err_login3'] = 'Sécurité : Le mot de passe est obligatoire !';
$lang['reg_err_login4_%s'] = 'Sécurité : Un système de contrôle calcule un score de complexité sur les mots de passe choisis. La complexité de votre mot de passe est trop faible (score = %s). Veuillez choisir un nouveau mot de passe plus sûre en respectant les règles suivantes :<br>
- Utiliser des lettres et des chiffres<br>
- Utiliser des minuscules et des majuscules<br>
- Augmenter sa longueur (nombre de caractères)<br>
Le score minimal des mots de passe imposé par l\'administrateur est de : ';
$lang['No_reminder_for_Guest'] = 'Le compte Guest n\'est pas soumis à recevoir des rappels du GhostTracker';
$lang['No_reminder_for_default_user'] = 'Le compte par défaut n\'est pas soumis à recevoir des rappels du GhostTracker';
$lang['No_reminder_for_Webmaster'] = 'Le compte du Webmaster n\'est pas soumis à recevoir des rappels du GhostTracker';
$lang['No_reminder_for_your_account'] = 'Votre compte d\'admin n\'est pas soumis à recevoir des rappels du GhostTracker';
/* Action button names */
$lang['audit'] = 'Auditer les paramètres';
$lang['submit'] = 'Sauvegarder les paramètres';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Errors and Warnings */
$lang['GhostTracker_Init_OK'] = 'Initialisation Ghost Tracker effectuée !';
/* Action button names */
$lang['GT_Reset'] = 'Initialisation Ghost Tracker';
// --------- End: New or revised $lang ---- from version 2.12.2


// --------- Starting below: New or revised $lang ---- from version 2.12.7
/* Errors and Warnings */
$lang['mail_text_error'] = '<b>Attention!</b> - Le point-virgule (;) n\'est pas autorisé dans le texte additionnel des emails. Ce caractère a été automatiquement remplacé par un point (.). Pour information, le(s) texte(s) modifié(s) est(sont) affiché(s) en rouge dans le(s) champ(s) correspondant(s). Veuillez le(s) vérifier.';
// --------- End: New or revised $lang ---- from version 2.12.7


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['mail_exclusionlist_error'] = 'Attention ! Vous avez saisi un retour à la ligne en début de liste d\'exclusion des domaines de messagerie (affichée en rouge ci-dessous). Bien que ce retour à la ligne ne soit pas visible, il est tout de même présent et est susceptible de provoquer des dysfonctionnements du plugin. Veuillez resaisir votre liste d\'exclusion en veillant à ne pas commencer par un retour à la ligne.';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.0
/* UserList Tab */
$lang['UserList_Title'] = 'Suivi des utilisateurs inscrits';
$lang['Tab_UserList'] = 'Suivi des utilisateurs';
$lang['Nb_Days'] = 'Nb de jours<br>depuis dernière visite';
// --------- End: New or revised $lang ---- from version 2.13.0


// --------- Starting below: New or revised $lang ---- from version 2.13.4
$lang['uam_no_unlink'] = 'La fonction \'unlink\' n\'est pas disponible';
$lang['uam_unlink_errors'] = 'Des erreurs ont eu lieu lors de la suppression des fichiers';
/* Global Configuration Tab */
$lang['Title_Tab'] = 'UserAdvManager - Version: ';
$lang['SubTitle1'] = 'Configuration du plugin';
$lang['Tab_Global'] = 'Configuration';
$lang['UserAdvManager_Title1'] = 'Paramétrage des restrictions d\'inscriptions';
$lang['UserAdvManager_Title2'] = 'Paramétrage des confirmations et validations d\'inscriptions';
$lang['UserAdvManager_Title3'] = 'Paramétrage des suivis des inscrits et autres options';
$lang['UserAdvManager_Title4'] = 'Astuces et exemples d\'utilisation';
$lang['UserAdvManager_No_Casse'] = 'Noms d\'utilisateurs : Sensibilité à la casse';
$lang['UserAdvManager_No_Casse_true'] = ' Activer';
$lang['UserAdvManager_No_Casse_false'] = ' Désactiver (valeur par défaut)';
$lang['UserAdvManager_Username_Char'] = 'Noms d\'utilisateurs : Exclusion de certains caractères';
$lang['UserAdvManager_Username_Char_true'] = ' Interdire les caractères:<br>(utiliser une virgule pour séparer chaque caractère du suivant)<br><br>';
$lang['UserAdvManager_Username_Char_false'] = ' Tout autoriser (valeur par défaut)';
$lang['UserAdvManager_Password_Enforced'] = 'Renforcement de la sécurité des mots de passe';
$lang['UserAdvManager_Password_Enforced_true'] = ' Activer. Score minimum: ';
$lang['UserAdvManager_Password_Enforced_false'] = ' Désactiver (valeur par défaut)';
$lang['UserAdvManager_AdminPassword_Enforced'] = 'Application aux administrateurs';
$lang['UserAdvManager_AdminPassword_Enforced_true'] = ' Activer';
$lang['UserAdvManager_AdminPassword_Enforced_false'] = ' Désactiver (valeur par défaut)';
$lang['UserAdvManager_PasswordTest'] = 'Mot de passe test: ';
$lang['UserAdvManager_ScoreTest'] = 'Résultat: ';
$lang['UserAdvManager_MailExclusion'] = 'Exclusion des domaines de messagerie';
$lang['UserAdvManager_MailExclusion_true'] = ' Exclure les domaines suivants:<br>(utiliser une virgule pour séparer chaque domaine du suivant)';
$lang['UserAdvManager_MailExclusion_false'] = ' Désactiver (valeur par défaut)';

$lang['UserAdvManager_Mail_Info'] = 'Email d\'information à l\'utilisateur:';
$lang['UserAdvManager_Mail_Info_true'] = ' Activer';
$lang['UserAdvManager_Mail_Info_false'] = ' Désactiver (valeur par défaut)';
$lang['UserAdvManager_MailInfo_Text'] = ' Texte d\'accueil personnalisé:';
$lang['UserAdvManager_Confirm_Mail'] = 'Confirmation d\'inscription:';
$lang['UserAdvManager_Confirm_Mail_true'] = ' Activer';
$lang['UserAdvManager_Confirm_Mail_false'] = ' Désactiver (valeur par défaut)';
$lang['UserAdvManager_ConfirmMail_Text'] = ' Texte d\'accueil personnalisé:';
$lang['UserAdvManager_Confirm_Group'] = 'Groupes de validation<br>(------- pour ne pas affecter de groupe)';
$lang['UserAdvManager_Confirm_Status'] = 'Statuts de validation<br>(------- pour conserver la valeur par défaut de Piwigo)';
$lang['UserAdvManager_Confirm_grpstat_notice'] = 'Attention : Il est conseillé d\'utiliser soit les groupes, soit les statuts de validation et pas les deux simultanément.';
$lang['UserAdvManager_No_Confirm_Group'] = 'Pour les utilisateurs n\'ayant pas validé leur inscription<br>';
$lang['UserAdvManager_Validated_Group'] = 'Pour les utilisateurs ayant validé leur inscription<br>';
$lang['UserAdvManager_No_Confirm_Status'] = 'Pour les utilisateurs n\'ayant pas validé leur inscription<br>';
$lang['UserAdvManager_Validated_Status'] = 'Pour les utilisateurs ayant validé leur inscription.<br>';
$lang['UserAdvManager_ValidationLimit_Info'] = 'Limitation du délai de validation d\'inscription';
$lang['UserAdvManager_ConfirmMail_TimeOut_true'] = ' Activer. Nombre de jours de délai: ';
$lang['UserAdvManager_ConfirmMail_TimeOut_false'] = ' Désactiver (valeur par défaut)';
$lang['UserAdvManager_ConfirmMail_Remail'] = 'Mail de rappel aux inscrits non validés';
$lang['UserAdvManager_ConfirmMail_Remail_true'] = ' Activer';
$lang['UserAdvManager_ConfirmMail_Remail_false'] = ' Désactiver (valeur par défaut)';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt1'] = 'Texte du message de rappel <b><u>avec</u></b> génération d\'une nouvelle clé de validation.';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt2'] = 'Texte du message de rappel <b><u>sans</u></b> génération d\'une nouvelle clé de validation.';

$lang['UserAdvManager_GhostTracker'] = 'Gestion des visiteurs fantômes (Ghost Tracker)';
$lang['UserAdvManager_GhostTracker_true'] = ' Activer. Nombre de jours maximum entre deux visites: ';
$lang['UserAdvManager_GhostTracker_false'] = ' Désactiver (valeur par défaut)';
$lang['UserAdvManager_GhostTracker_ReminderText'] = 'Texte de rappel personnalisé';
$lang['UserAdvManager_LastVisit'] = ' Suivi des utilisateurs inscrits';
$lang['UserAdvManager_LastVisit_true'] = ' Activer';
$lang['UserAdvManager_LastVisit_false'] = ' Désactiver (valeur par défaut)';
$lang['UserAdvManager_No_Comment_Anonymous'] = 'Commentaires : pseudo obligatoire pour les non-inscrits';
$lang['UserAdvManager_No_Comment_Anonymous_true'] = ' Activer';
$lang['UserAdvManager_No_Comment_Anonymous_false'] = ' Désactiver (valeur par défaut)';

$lang['UserAdvManager_Tips1'] = 'Inscriptions avec validation par email et message d\'avertissement sur la page d\'accueil de Piwigo';
$lang['UserAdvManager_Tips1_txt'] = '
          <ul>
            <li>
Les ingrédients nécessaires:<br>
- 2 groupes d\'utilisateurs Piwigo au minimum: &quot;Attente&quot; pour les visiteur en attente de validation et &quot;Validés&quot; pour les visiteurs ayant validé leur inscription<br>
- Le plugin NBC_UAM<br>
- Le plugin PWG Stuffs<br>
- Eventuellement le plugin Extended Description (pour le support multi-langues)
            </li>
<br><br>
            <li>
La recette:<br>
            <ul>
              <li>
Préambule: On se place dans le cas d\'une galerie privée ou semi-privée (c\'est à dire qu\'une petite partie des catégories est accessible par les Guests et que les inscrits peuvent tout voir). On considère que les plugins requis sont installés (faut-il le rappeler ?).<br><br>
              </li>
              <li>
N\'attribuer au groupe &quot;Attente&quot; aucune permission sur les catégories privées<br><br>
              </li>
              <li>
Attribuer au groupe &quot;Validés&quot; toutes les permissions sur les catégories privées<br><br>
              </li>
              <li>
Dans le plugin NBC_UAM:
              <ol>
                <li>Activer la confirmation d\'inscription</li>
                <li>Dans le champ sous &quot;Personnalisation de l\'email confirmation&quot;, saisir un texte additionnel d\'explication qui sera joint au mail de confirmation d\'inscription. Eventuellement, il est possible d\'utiliser les balises de langues implémentées par le plugin Extended Description</li>
                <li>Dans la liste &quot;Groupe pour les utilisateurs n\'ayant pas validé leur inscription&quot;, sélectionner le groupe &quot;Attente&quot;</li>
                <li>Dans la liste &quot;Groupe pour les utilisateurs ayant validé leur inscription&quot;, sélectionner le groupe &quot;Validés&quot;</li>
                <li>Enregistrer la configuration du plugin</li>
              </ol>
              </li>
<br><br>
              <li>
Dans le plugin PWG Stuff:
              <ol>
                <li>Ajouter un nouveau module de type &quot;Bloc personnel : Affiche un bloc personnel (un édito par exemple)&quot;</li>
                <li>Dans la configuration du module, outre son titre (ex : &quot;Inscription en attente de validation&quot;) et sa description, cocher uniquement le groupe autorisé &quot;Attente&quot;</li>
                <li>Dans le contenu du module, saisir le texte du message d\'information voulu qui ne sera visible que des utilisateurs non validés. Là aussi, possibilité de gérer le multi-langue grâce aux balises d\'Extended Description</li>
                <li>Valider le module</li>
                <li>Définir sa place dans l\'affiche de la page principale de la galerie</li>
              </ol>
              </li>
            </ul>
            </li>
<br><br>
            <li>
              Le résultat:<br>
              - Un &quot;Guest&quot; arrive sur la galerie, il ne voit rien d\'autre que les catégories publiques et pas de message d\'information.<br>
              - Il s\'inscrit. Ce qui génère un email de validation et son appartenance automatique au groupe &quot;Attente&quot;.<br>
              - A l\'issue, il est redirigé sur la page d\'accueil de la galerie avec, cette fois, un message lui indiquant la non-validation de son inscription<br><br>
              Il reçoit son email de validation, suit le lien prévu à cet effet dans le mail, ce qui le sort du groupe &quot;Attente&quot; et le place dans le groupe &quot;Validés&quot;. En cliquant sur le bouton &quot;Home&quot;, il est alors connecté à la galerie avec accès total aux catégories privées et sans le message d\'information.
            </li>
          </ul>';

$lang['Tab_UserManager'] = 'Suivi des validations';

/* UserManager Tab */
$lang['SubTitle3'] = 'Suivi des validations';
$lang['UserManager_Title'] = 'Suivi des validations';
/* Ghost Tracker Tab */
$lang['SubTitle4'] = 'Ghost Tracker';
$lang['GT_Init'] = 'Initialisation du Ghost Tracker';
$lang['GhostTracker_Title'] = 'Gestion des visiteurs fantômes';
$lang['UserAdvManager_GhostTracker_Init'] = 'A première activation de cette fonction, ou à sa réactivation après une longue période pendant laquelle de nouveaux visiteurs se sont inscrits, il convient d\'initialiser ou de réinitialiser le Ghost Tracker. Cette action n\'est à faire qu\'une seule fois après activation ou réactivation de l\'option; à cet effet, cliquez <u>une seule fois</u> sur le bouton d\'initialisation ci-dessous.</b>';
/* UserList Tab */
$lang['SubTitle5'] = 'Informations sur les utilisateurs';
/* Mailing */
$lang['Add of %s'] = 'Profil créé pour %s';
$lang['Update of %s'] = 'Mise à jour du profil de %s';
/* Email confirmation page */
$lang['confirm_mail_bad'] = '<br><br><br>Votre clef d\'activation unique est erronée ou expirée ou vous avez déjà validé votre compte, veuillez contacter le webmaster pour régler ce problème.<br><br><br><br>';
/* Mailing */
$lang['Ghost_reminder_of_%s'] = '%s, ceci est un email de rappel.';
$lang['Reminder_with_key_of_%s'] = '%s, votre clef de validation a expiré';
$lang['Reminder_without_key_of_%s'] = '%s, votre clef de validation va expirer';
/* Errors and Warnings */
$lang['Err_UserManager_Settings'] = 'Cette page n\'est accessible que si "Délai de validation d\'inscription" est actif et si un groupe de visiteurs non validés est configuré dans le "Paramétrage des confirmations et validations d\'inscriptions".';
$lang['Err_GhostTracker_Settings'] = 'Cette page n\'est accessible que si "Gestion des visiteurs fantômes" est actif dans "Paramétrage des suivis des inscrits et autres options".';
$lang['Err_Userlist_Settings'] = 'Cette page n\'est accessible que si le "Suivi des utilisateurs inscrits" est actif dans "Paramétrage des suivis des inscrits et autres options".';
// --------- End: New or revised $lang ---- from version 2.13.4
?>