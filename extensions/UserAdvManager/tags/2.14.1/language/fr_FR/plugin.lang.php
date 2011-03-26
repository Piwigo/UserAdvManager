<?php

global $lang,$conf;

$conf_UAM = unserialize($conf['nbc_UserAdvManager']);


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
$lang['UAM_audit_ok'] = 'Audit OK';
$lang['Err_audit_no_casse'] = '<b>Ces comptes sont identiques à la casse près :</b> ';
$lang['Err_audit_username_char'] = '<b>Ce compte contient un ou des caractères interdits :</b> ';
$lang['Err_audit_email_forbidden'] = '<b>Ce compte contient des domaines de messagerie interdit :</b> ';
$lang['Err_audit_advise'] = '<b>Vous avez des corrections a faire pour respecter les nouvelles règles que vous avez activées.<br>Utilisez un utilitaire de gestion de base de données pour corriger les comptes utilisateurs directement dans la table ###_USERS si nécessaire.</b><br><br>';
$lang['UAM_Empty Author'] = 'Le champs auteur doit être rempli pour enregistrer un commentaire.';
if ( isset($conf_UAM[1]) and $conf_UAM[1] == 'true' )
	$lang['reg_err_login5'] = 'ce nom utilisateur est déjà pris, ATTENTION le nom est insensible à la casse (Majuscule = Minuscule).';
$lang['reg_err_login6'] = 'le nom utilisateur ne doit pas contenir les caractère suivants : ';
$lang['reg_err_login7'] = 'L\'adresse email est issue d\'un prestataire interdit. Les prestataires d\'adresses email interdits à l\'inscription sont : ';
$lang['UAM_empty_pwd'] = '[mot de passe vide]';
$lang['UAM_no_update_pwd'] = '[mise à jour du profil sans changement du mot de passe]';
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
$lang['UAM_save_config'] ='Configuration enregistrée.';
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
$lang['UAM_Title1'] = 'Paramétrage des restrictions d\'inscriptions';
$lang['UAM_Title2'] = 'Paramétrage des confirmations et validations d\'inscriptions';
$lang['UAM_Title3'] = 'Paramétrage des suivis des inscrits et autres options';
$lang['UAM_Title4'] = 'Astuces et exemples d\'utilisation';
$lang['UAM_No_Casse'] = 'Noms d\'utilisateurs : Sensibilité à la casse';
$lang['UAM_No_Casse_true'] = ' Activer';
$lang['UAM_No_Casse_false'] = ' Désactiver (valeur par défaut)';
$lang['UAM_Username_Char'] = 'Noms d\'utilisateurs : Exclusion de certains caractères';
$lang['UAM_Username_Char_true'] = ' Interdire les caractères:<br>(utiliser une virgule pour séparer chaque caractère du suivant)<br><br>';
$lang['UAM_Username_Char_false'] = ' Tout autoriser (valeur par défaut)';
$lang['UAM_Password_Enforced'] = 'Renforcement de la sécurité des mots de passe';
$lang['UAM_Password_Enforced_true'] = ' Activer. Score minimum: ';
$lang['UAM_Password_Enforced_false'] = ' Désactiver (valeur par défaut)';
$lang['UAM_AdminPassword_Enforced'] = 'Application aux administrateurs';
$lang['UAM_AdminPassword_Enforced_true'] = ' Activer';
$lang['UAM_AdminPassword_Enforced_false'] = ' Désactiver (valeur par défaut)';
$lang['UAM_PasswordTest'] = 'Mot de passe test: ';
$lang['UAM_ScoreTest'] = 'Résultat: ';
$lang['UAM_MailExclusion'] = 'Exclusion des domaines de messagerie';
$lang['UAM_MailExclusion_true'] = ' Exclure les domaines suivants:<br>(utiliser une virgule pour séparer chaque domaine du suivant)';
$lang['UAM_MailExclusion_false'] = ' Désactiver (valeur par défaut)';

$lang['UAM_Mail_Info'] = 'Email d\'information à l\'utilisateur:';
$lang['UAM_Mail_Info_true'] = ' Activer';
$lang['UAM_Mail_Info_false'] = ' Désactiver (valeur par défaut)';
$lang['UAM_MailInfo_Text'] = ' Texte d\'accueil personnalisé:';
$lang['UAM_Confirm_Mail'] = 'Confirmation d\'inscription:';
$lang['UAM_Confirm_Mail_true'] = ' Activer';
$lang['UAM_Confirm_Mail_false'] = ' Désactiver (valeur par défaut)';
$lang['UAM_ConfirmMail_Text'] = ' Texte d\'accueil personnalisé:';
$lang['UAM_Confirm_Group'] = 'Groupes de validation<br>(------- pour ne pas affecter de groupe)';
$lang['UAM_Confirm_Status'] = 'Statuts de validation<br>(------- pour conserver la valeur par défaut de Piwigo)';
$lang['UAM_Confirm_grpstat_notice'] = 'Attention : Il est conseillé d\'utiliser soit les groupes, soit les statuts de validation et pas les deux simultanément.';
$lang['UAM_No_Confirm_Group'] = 'Pour les utilisateurs n\'ayant pas validé leur inscription<br>';
$lang['UAM_Validated_Group'] = 'Pour les utilisateurs ayant validé leur inscription<br>';
$lang['UAM_No_Confirm_Status'] = 'Pour les utilisateurs n\'ayant pas validé leur inscription<br>';
$lang['UAM_Validated_Status'] = 'Pour les utilisateurs ayant validé leur inscription.<br>';
$lang['UAM_ValidationLimit_Info'] = 'Limitation du délai de validation d\'inscription';
$lang['UAM_ConfirmMail_TimeOut_true'] = ' Activer. Nombre de jours de délai: ';
$lang['UAM_ConfirmMail_TimeOut_false'] = ' Désactiver (valeur par défaut)';
$lang['UAM_ConfirmMail_Remail'] = 'Mail de rappel aux inscrits non validés';
$lang['UAM_ConfirmMail_Remail_true'] = ' Activer';
$lang['UAM_ConfirmMail_Remail_false'] = ' Désactiver (valeur par défaut)';
$lang['UAM_ConfirmMail_ReMail_Txt1'] = 'Texte du message de rappel <b><u>avec</u></b> génération d\'une nouvelle clé de validation.';
$lang['UAM_ConfirmMail_ReMail_Txt2'] = 'Texte du message de rappel <b><u>sans</u></b> génération d\'une nouvelle clé de validation.';

$lang['UAM_GhostTracker'] = 'Gestion des visiteurs fantômes (Ghost Tracker)';
$lang['UAM_GhostTracker_true'] = ' Activer. Nombre de jours maximum entre deux visites: ';
$lang['UAM_GhostTracker_false'] = ' Désactiver (valeur par défaut)';
$lang['UAM_GhostTracker_ReminderText'] = 'Texte de rappel personnalisé';
$lang['UAM_LastVisit'] = ' Suivi des utilisateurs inscrits';
$lang['UAM_LastVisit_true'] = ' Activer';
$lang['UAM_LastVisit_false'] = ' Désactiver (valeur par défaut)';
$lang['UAM_No_Comment_Anonymous'] = 'Commentaires : pseudo obligatoire pour les non-inscrits';
$lang['UAM_No_Comment_Anonymous_true'] = ' Activer';
$lang['UAM_No_Comment_Anonymous_false'] = ' Désactiver (valeur par défaut)';

$lang['UAM_Tips1'] = 'Inscriptions avec validation par email et message d\'avertissement sur la page d\'accueil de Piwigo';

$lang['Tab_UserManager'] = 'Suivi des validations';

/* UserManager Tab */
$lang['SubTitle3'] = 'Suivi des validations';
$lang['UserManager_Title'] = 'Suivi des validations';
/* Ghost Tracker Tab */
$lang['SubTitle4'] = 'Ghost Tracker';
$lang['GT_Init'] = 'Initialisation du Ghost Tracker';
$lang['GhostTracker_Title'] = 'Gestion des visiteurs fantômes';
$lang['UAM_GhostTracker_Init'] = 'A première activation de cette fonction, ou à sa réactivation après une longue période pendant laquelle de nouveaux visiteurs se sont inscrits, il convient d\'initialiser ou de réinitialiser le Ghost Tracker. Cette action n\'est à faire qu\'une seule fois après activation ou réactivation de l\'option; à cet effet, cliquez <u>une seule fois</u> sur le bouton d\'initialisation ci-dessous.</b>';
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


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_AdminConfMail'] = 'Validation d\'inscription pour les admins';
$lang['UAM_Admin_ConfMail_true'] = ' Activer';
$lang['UAM_Admin_ConfMail_false'] = ' Désactiver (valeur par défaut)';
$lang['UAM_Tips1_txt'] = '
          <ul>
            <li>
            Objectifs:<br>
            - A son arrivée sur la galerie : Informer le visiteur qu\'il peut s\'inscrire pour accéder aux photos privées<br>
            - A l\'inscription : Générer un email avec lien direct de validation, informer le nouvel utilisateur de sa non-validation et le rattacher au groupe &quot;Attente&quot;<br>
            - A la validation : Le passer automatiquement du groupe &quot;Attente&quot; au groupe &quot;Validés&quot;, qui lui permet d\'accéder normalement aux catégories privées<br><br>
            <span style="font-style:italic">Rappel: En fonctionnement standard, le &quot;Guest&quot; ne voit que les catégories publiques, sans message d\'information.</span>
            </li><br><br>
            <li>
Pré-requis:<br>
- Une galerie avec tout ou partie des catégories privées, visibles par les seuls utilisateurs inscrits<br>
- Au moins les 2 groupes d\'utilisateurs Piwigo suivants : &quot;Attente&quot;, sans aucune permission sur les catégories privées, et &quot;Validés&quot;, avec toutes les permissions sur les catégories privées<br>
- Le plugin NBC_UAM<br>
- Le plugin PWG Stuffs, pour l\'ajout d\'un module de type &quot;Bloc personnel&quot;<br>
- En option, le plugin Extended Description, pour le support multi-langues<br>
            </li><br><br>
              <li>
Réalisation:<br><br>
A. Dans le plugin NBC_UAM:
              <ol>
                <li>Activer la confirmation d\'inscription</li>
                <li>Saisir un &quot;texte d\'accueil personnalisé&quot; qui sera joint au mail de confirmation d\'inscription. Si le plugin Extended Description est activé, les balises de langues peuvent être utilisées</li>
                <li>Sélectionner le groupe &quot;Attente&quot; à la rubrique &quot;Pour les utilisateurs n\'ayant pas validé leur inscription&quot;</li>
                <li>Sélectionner le groupe &quot;Validés&quot; à la rubrique &quot;Pour les utilisateurs ayant validé leur inscription&quot;</li>
                <li>Enregistrer la configuration du plugin</li>
              </ol>
              </li><br>
B. Dans le plugin PWG Stuffs:
              <ol>
                <li>Ajouter un nouveau module de type &quot;Bloc personnel : Affiche un bloc personnel (un édito par exemple)&quot;</li>
                <li>Configurer le module, en indiquant son titre (ex : &quot;Inscription en attente de validation&quot;) et sa description, et cocher uniquement&quot;Attente&quot; dans la liste des groupes autorisés</li>
                <li>Compléter le contenu du module avec le texte du message d\'information qui sera affiché aux utilisateurs non validés. Comme dans NBC_UAM, les balises de langues peuvent être utilisées si le plugin Extended Description est activé</li>
                <li>Cocher &quot;Afficher le module sur la page d\'accueil du site&quot;</li>
                <li>Valider la configuration du module</li>
              </ol>
          </ul>';
// --------- End: New or revised $lang ---- from version 2.14.0
?>