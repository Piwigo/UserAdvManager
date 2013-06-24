<?php

/* UserManager Tab */
$lang['UAM_Registration_Date'] = 'Date d\'enregistrement';


/* Mailing */
$lang['UAM_infos_mail %s'] = '%s, voici vos informations pour vous identifier sur la galerie :';
$lang['UAM_User: %s'] = 'Utilisateur : %s';
$lang['UAM_Password: %s'] = 'Mot de passe: %s';
$lang['UAM_Link: %s'] = 'Cliquez sur le lien suivant pour confirmer l\'inscription : %s';


/* Errors and Warnings */
$lang['UAM_audit_ok'] = 'Audit OK';
$lang['UAM_Err_audit_username_char'] = '<b>Ce compte contient un ou des caractères interdits :</b> ';
$lang['UAM_Err_audit_email_forbidden'] = '<b>Ce compte contient des domaines de messagerie interdit :</b> ';
$lang['UAM_Err_audit_advise'] = '<b>Vous avez des corrections à faire pour respecter les nouvelles règles que vous avez activées.<br>Utilisez un utilitaire de gestion de base de données pour corriger les comptes utilisateurs directement dans la table ###_USERS si nécessaire.</b><br><br>';
$lang['UAM_reg_err_login2'] = 'le nom utilisateur ne doit pas contenir les caractères suivants : ';
$lang['UAM_reg_err_login5'] = 'L\'adresse email est issue d\'un prestataire interdit. Les prestataires d\'adresses email interdits à l\'inscription sont : ';
$lang['UAM_empty_pwd'] = '[mot de passe vide]';
$lang['UAM_no_update_pwd'] = '[mise à jour du profil sans changement du mot de passe]';
$lang['UAM_No_validation_for_Guest'] = 'Le compte Guest n\'est pas soumis à confirmation';
$lang['UAM_No_validation_for_default_user'] = 'Le compte par défaut n\'est pas soumis à confirmation';
$lang['UAM_No_validation_for_Webmaster'] = 'Le compte du Webmaster n\'est pas soumis à confirmation';
$lang['UAM_No_validation_for_your_account'] = 'Votre compte d\'admin n\'est pas soumis à confirmation';


/* Processing messages */
$lang['UAM_%d_Mail_With_Key'] = '%d message avec renouvellement de clé a été envoyé';
$lang['UAM_%d_Mails_With_Key'] = '%d messages avec renouvellement de clé ont été envoyés';
$lang['UAM_%d_Reminder_Sent'] = '%d message de rappel a été envoyé';
$lang['UAM_%d_Reminders_Sent'] = '%d messages de rappel ont été envoyés';


/* Action button names */
$lang['UAM_Delete_selected'] = 'Supprimer';
$lang['UAM_Mail_without_key'] = 'Rappel sans clé';
$lang['UAM_Mail_with_key'] = 'Rappel avec clé';




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['UAM_PasswordTest'] = 'Calcul du score';
/* Ghost Tracker Tab */
$lang['UAM_Tab_GhostTracker'] = 'Ghost Tracker';
$lang['UAM_Reminder'] = 'Email de rappel';
$lang['UAM_Reminder_Sent_OK'] = 'OUI';
$lang['UAM_Reminder_Sent_NOK'] = 'NON';
/* Errors and Warnings */
$lang['UAM_save_config'] ='Configuration enregistrée.';
$lang['UAM_reg_err_login3'] = 'Sécurité : Le mot de passe est obligatoire !';
$lang['UAM_reg_err_login4_%s'] = 'Sécurité : Un système de contrôle calcule un score de complexité sur les mots de passe choisis. La complexité de votre mot de passe est trop faible (score = %s). Veuillez choisir un nouveau mot de passe plus sûr en respectant les règles suivantes :<br>
- Utiliser des lettres et des chiffres<br>
- Utiliser des minuscules et des majuscules<br>
- Augmenter sa longueur (nombre de caractères)<br>
Le score minimal des mots de passe imposé par l\'administrateur est de : ';
$lang['UAM_No_reminder_for_Guest'] = 'Le compte Guest n\'est pas soumis à recevoir des rappels du GhostTracker';
$lang['UAM_No_reminder_for_default_user'] = 'Le compte par défaut n\'est pas soumis à recevoir des rappels du GhostTracker';
$lang['UAM_No_reminder_for_Webmaster'] = 'Le compte du Webmaster n\'est pas soumis à recevoir des rappels du GhostTracker';
$lang['UAM_No_reminder_for_your_account'] = 'Votre compte d\'admin n\'est pas soumis à recevoir des rappels du GhostTracker';
/* Action button names */
$lang['UAM_audit'] = 'Auditer les paramètres';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Errors and Warnings */
$lang['UAM_GhostTracker_Init_OK'] = 'Initialisation Ghost Tracker effectuée !';
/* Action button names */
$lang['UAM_GT_Reset'] = 'Initialisation Ghost Tracker';
// --------- End: New or revised $lang ---- from version 2.12.2


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['UAM_mail_exclusionlist_error'] = 'Attention ! Vous avez saisi un retour à la ligne en début de liste d\'exclusion des domaines de messagerie (affichée en rouge ci-dessous). Bien que ce retour à la ligne ne soit pas visible, il est tout de même présent et est susceptible de provoquer des dysfonctionnements du plugin. Veuillez resaisir votre liste d\'exclusion en veillant à ne pas commencer par un retour à la ligne.';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.4
/* Global Configuration Tab */
$lang['UAM_Title_Tab'] = 'UserAdvManager - Version: ';
$lang['UAM_SubTitle1'] = 'Configuration du plugin';
$lang['UAM_Tab_Global'] = 'Configuration';
$lang['UAM_Title1'] = 'Paramétrage des restrictions d\'inscriptions';
$lang['UAM_Title2'] = 'Paramétrage des confirmations d\'inscriptions';
$lang['UAM_Title4'] = 'Astuces et exemples d\'utilisation';
$lang['UAM_No_Casse'] = 'Noms d\'utilisateurs : Sensibilité à la casse';
$lang['UAM_Username_Char'] = 'Noms d\'utilisateurs : Exclusion de certains caractères';
$lang['UAM_Username_Char_true'] = ' Interdire les caractères:<br>(utiliser une virgule pour séparer chaque caractère du suivant)<br><br>';
$lang['UAM_Username_Char_false'] = ' Tout autoriser (valeur par défaut)';
$lang['UAM_Password_Enforced'] = 'Renforcement de la sécurité des mots de passe';
$lang['UAM_Password_Enforced_true'] = ' Activer. Score minimum: ';
$lang['UAM_AdminPassword_Enforced'] = 'Application aux administrateurs';
$lang['UAM_PasswordTest'] = 'Mot de passe test: ';
$lang['UAM_ScoreTest'] = 'Résultat: ';
$lang['UAM_MailExclusion'] = 'Exclusion des domaines de messagerie';
$lang['UAM_MailExclusion_true'] = ' Exclure les domaines suivants:<br>(utiliser une virgule pour séparer chaque domaine du suivant)';

$lang['UAM_Mail_Info'] = 'Email d\'information à l\'utilisateur:';
$lang['UAM_MailInfo_Text'] = ' Texte d\'accueil personnalisé:';
$lang['UAM_Confirm_Mail'] = 'Confirmation d\'inscription:';
$lang['UAM_ConfirmMail_Text'] = ' Texte d\'accueil personnalisé:';
$lang['UAM_ValidationLimit_Info'] = 'Limitation du délai de confirmation d\'inscription';
$lang['UAM_ConfirmMail_TimeOut_true'] = ' Activer. Nombre de jours de délai: ';
$lang['UAM_ConfirmMail_ReMail_Txt1'] = 'Texte du message de rappel <b><u>avec</u></b> génération d\'une nouvelle clé de confirmation.';
$lang['UAM_ConfirmMail_ReMail_Txt2'] = 'Texte du message de rappel <b><u>sans</u></b> génération d\'une nouvelle clé de confirmation.';

$lang['UAM_GhostTracker'] = 'Gestion des visiteurs fantômes (Ghost Tracker)';
$lang['UAM_GhostTracker_true'] = ' Activer. Nombre de jours maximum entre deux visites: ';
$lang['UAM_GhostTracker_ReminderText'] = 'Texte de rappel personnalisé';


/* Ghost Tracker Tab */
$lang['UAM_SubTitle4'] = 'Ghost Tracker';
$lang['UAM_GT_Init'] = 'Initialisation du Ghost Tracker';
$lang['UAM_GhostTracker_Title'] = 'Gestion des visiteurs fantômes';
$lang['UAM_GhostTracker_Init'] = 'A première activation de cette fonction, ou à sa réactivation après une longue période pendant laquelle de nouveaux visiteurs se sont inscrits, il convient d\'initialiser ou de réinitialiser le Ghost Tracker. Cette action n\'est à faire qu\'une seule fois après activation ou réactivation de l\'option; à cet effet, cliquez <u>une seule fois</u> sur le bouton d\'initialisation ci-dessous.</b>';
/* Mailing */
$lang['UAM_Add of %s'] = 'Profil créé pour %s';
$lang['UAM_Update of %s'] = 'Mise à jour du profil de %s';
/* Mailing */
$lang['UAM_Ghost_reminder_of_%s'] = '%s, ceci est un email de rappel.';
$lang['UAM_Reminder_with_key_of_%s'] = '%s, votre clef de confirmation a expiré';
$lang['UAM_Reminder_without_key_of_%s'] = '%s, votre clef de confirmation va expirer';
/* Errors and Warnings */
$lang['UAM_Err_GhostTracker_Settings'] = 'Cette page n\'est accessible que si "Gestion des visiteurs fantômes" est actif dans "Paramétrage des suivis des inscrits et autres options".';
$lang['UAM_Err_Userlist_Settings'] = 'Cette page n\'est accessible que si le "Suivi des utilisateurs inscrits" est actif dans "Paramétrage des suivis des inscrits et autres options".';
// --------- End: New or revised $lang ---- from version 2.13.4


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_AdminConfMail'] = 'Confirmation d\'inscription pour les admins';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.0
$lang['UAM_confirmmail_custom_Txt1'] = 'Texte de la page de confirmation - Confirmation acceptée';
$lang['UAM_confirmmail_custom_Txt2'] = 'Texte de la page de confirmation - Confirmation rejetée';
$lang['UAM_LastVisit_Date'] = 'Dernière visite le';
$lang['UAM_Nb_Days'] = 'Ecart en jours';
// --------- End: New or revised $lang ---- from version 2.15.0


// --------- Starting below: New or revised $lang ---- from version 2.15.1
$lang['UAM_Support_txt'] = 'Le support officiel sur ce plugin se fait exclusivement sur ce fil du forum FR de Piwigo:<br>
<a href="http://fr.piwigo.org/forum/viewtopic.php?id=12775" onclick="window.open(this.href);return false;">Forum français - http://fr.piwigo.org/forum/viewtopic.php?id=12775</a>
<br><br>
Bien que l\'aide en ligne soit assez complète, vous pouvez également vous référer à la documentation complète d\'utilisation du plugin sur <a href="http://fr.piwigo.org/doc/doku.php?id=plugins:nbc_uam" onclick="window.open(this.href);return false;">le Wiki de Piwigo</a> 
<br><br>
Egalement disponible, le bugtracker du projet: <a href="http://piwigo.org/bugs/" onclick="window.open(this.href);return false;">http://piwigo.org/bugs/</a>';
// --------- End: New or revised $lang ---- from version 2.15.1


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_Manual_Validation'] = 'Confirmation manuelle';
$lang['UAM_Confirm_Mail_true'] = ' Activer - Confirmation par le visiteur';
$lang['UAM_Confirm_Mail_local'] = ' Activer - Confirmation par l\'administrateur';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.16.0
$lang['UAM_Expired_Group'] = '<b>Groupe</b> pour les utilisateurs dont l\'inscription aura expirée<br>';
$lang['UAM_Expired_Status'] = '<b>Statut</b> pour les utilisateurs dont l\'inscription aura expirée<br>';
$lang['UAM_GTAuto'] = 'Gestion automatique des utilisateurs fantomes';
$lang['UAM_GTAutoDel'] = 'Suppressions automatiques des comptes';
$lang['UAM_Error_GTAutoMail_cannot_be_set_without_ConfirmMail'] = 'Erreur de cohérence dans la configuration choisie :
<br><br>
"Paramétrage des suivis des inscrits et autres options > Gestion des visiteurs fantômes (Ghost Tracker) > Gestion automatique des utilisateurs fantomes > Email automatique sur changement de groupe / statut" ne peut pas être activé si "Paramétrage des confirmations d\'inscriptions > Confirmation d\'inscription - Confirmation par le visiteur" n\'est pas activé au préalable.
<br><br>
Pour garantir la cohérence, l\'option "Email automatique sur changement de groupe / statut" a été automatiquement repositionnée en "désactivé".
<br><br>';
$lang['UAM_Demotion of %s'] = 'Rétrogradation de %s';
$lang['UAM_AdminValidationMail_Text'] = 'Notification de confirmation d\'inscription manuelle';
$lang['UAM_Validation of %s'] = 'Confirmation de %s';
// --------- End: New or revised $lang ---- from version 2.16.0


// --------- Starting below: New or revised $lang ---- from version 2.20.0
$lang['UAM_CustomPasswRetr'] = 'Personnaliser le contenu du mail sur mot de passe perdu';
$lang['UAM_USRAutoDel'] = 'Message à la suppressions automatiques des comptes';
$lang['UAM_USRAutoMail'] = 'Message de rappel automatique';
$lang['UAM_Disable'] = ' Désactiver (valeur par défaut)';
$lang['UAM_Enable'] = ' Activer ';
$lang['UAM_Tips1'] = 'Information de non confirmation d\'inscription avec UAM et PWG_Stuffs';
$lang['UAM_Tips2'] = 'Information de non confirmation d\'inscription avec UAM et Additional Pages';
$lang['UAM_No_Ghosts'] = 'Pas de visiteurs fantômes pour l\'instant';
$lang['UAM_No_Userlist'] = 'Pas de suivi de visiteurs pour l\'instant';
$lang['UAM_No_Usermanager'] = 'Pas de confirmations d\'inscription pour l\'instant';
$lang['UAM_Stuffs_Title'] = 'Module UAM';
$lang['UAM_Stuffs'] = 'Module PWG Stuffs';
// --------- End: New or revised $lang ---- from version 2.20.0


// --------- Starting below: New or revised $lang ---- from version 2.20.3
$lang['UAM_Dump_Download'] = 'Pour télécharger le fichier de sauvegarde, cochez cette case:';
$lang['UAM_Save'] = 'Exécuter la sauvegarde';
$lang['UAM_Dump_OK'] = 'Fichier de sauvegarde créé avec succès';
$lang['UAM_Dump_NOK'] = 'Erreur : Impossible de créer le fichier de sauvegarde !';
// --------- End: New or revised $lang ---- from version 2.20.3


// --------- Starting below: New or revised $lang ---- from version 2.20.4
$lang['UAM_HidePassw'] = 'Mot de passe en clair dans le mail d\'information';
// --------- End: New or revised $lang ---- from version 2.20.4

// --------- Starting below: New or revised $lang ---- from version 2.20.11
$lang['UAM_Error_Using_illegal_flag'] = 'Erreur de syntaxe ! Le drapeau d\'insertion automatique [Kdays] est utilisé alors que l\'option "Limitation du délai de confirmation d\'inscription" n\'a pas été activée. Veuillez activer l\'option ou corriger le(s) champ(s) marqué(s) en rouge.';
// --------- End: New or revised $lang ---- from version 2.20.11

// --------- Starting below: New or revised $lang ---- from version 2.30.0
$lang['UAM_Confirm_grpstat_notice'] = 'Attention : Il est conseillé d\'affecter soit les groupes, soit les statuts et pas les deux simultanément. Le niveau de confidentialité peut être utilisé conjointement avec une affectation de groupe ou de statut.';
$lang['UAM_Confirm_Group'] = 'Groupes<br>(------- pour ne pas affecter de groupe)';
$lang['UAM_Confirm_Status'] = 'Statuts<br>(------- pour conserver la valeur par défaut de Piwigo)';
$lang['UAM_Confirm_Level'] = 'Niveau de confidentialité<br>(------- pour conserver la valeur par défaut de Piwigo)';
$lang['UAM_GTAutoGp'] = 'Changement automatique de groupe / statut / niveau de confidentialité';
$lang['UAM_Expired_Level'] = '<b>Niveau de confidentialité</b> pour les utilisateurs dont l\'inscription aura expirée<br>';
$lang['UAM_MiscOptions'] = 'Autres options';
$lang['UAM_Title3'] = 'Gestion des utilisateurs fantômes';
$lang['UAM_Title5'] = 'Autres options';
$lang['UAM_Password_Reset_Msg'] = 'Veuillez modifier votre mot de passe !';
$lang['UAM_PwdReset'] = 'Renouvellement du mot de passe';
$lang['UAM_Password reset selected users'] = 'Demander le renouvellement du mot de passe pour les utilisateurs sélectionnés';
$lang['UAM_Guest cannot be pwdreset'] = 'Le renouvellement de mot de passe ne peut pas être demandé pour les invités !';
$lang['UAM_Default user cannot be pwgreset'] = 'Le renouvellement de mot de passe ne peut pas être demandé pour l\'utilisateur par défaut !';
$lang['UAM_Webmaster cannot be pwdreset'] = 'Le renouvellement de mot de passe ne peut pas être demandé pour le webmaster !';
$lang['UAM_You cannot pwdreset your account'] = 'Le renouvellement de mot de passe ne peut pas être demandé pour votre propre compte utilisateur !';
$lang['UAM_You need to confirm pwdreset'] = 'Vous devez confirmer la demande de renouvellement de mot de passe (case à cocher) !';
$lang['UAM_PwdReset_Todo'] = 'Mot de passe à changer';
$lang['UAM_PwdReset_Done'] = 'Mot de passe modifié';
$lang['UAM_PwdReset_NA'] = 'Mot de passe original';
$lang['UAM %d user pwdreseted'] = 'Renouvellement de mot de passe demandé pour %d utilisateur';
$lang['UAM %d users pwdreseted'] = 'Renouvellement de mot de passe demandé pour %d utilisateurs';
$lang['UAM_Error_Using_illegal_Kdays'] = 'L\'utilisation de la balise [Kdays] n\'est autorisée que si la limitation du délai de confirmation d\'inscription est active. Reportez vous au champ de texte en rouge pour corriger le problème.';
$lang['UAM_Default_InfoMail_Txt'] = 'Bonjour [username]!

Vous avez effectué des modifications importantes de profil sur la galerie [mygallery]. Voici vos nouveaux paramètres :';
$lang['UAM_Default_GhstReminder_Txt'] = 'Bonjour [username].
	
Ceci est un message de rappel car cela fait longtemps que vous n\'êtes pas revenu visiter la galerie [mygallery]. Si vous ne souhaitez plus utiliser votre compte d\'accès, merci de bien vouloir nous le faire savoir en répondant à ce message. Votre compte sera alors immédiatement détruit.

A la réception de ce présent message et sans nouvelle visite de votre part sous [days] jours, nous serions dans l\'obligation de supprimer automatiquement votre compte.

Cordialement,

L\'administrateur de la galerie [mygallery] - [myurl]';
$lang['UAM_Default_GhstDeletion_Txt'] = 'Désolé [username], votre compte a été supprimé automatiquement pour cause de délai dépassé depuis votre dernière visite à [mygallery]. Veuillez vous réinscrire.';
$lang['UAM_Default_PwdRequest_Txt'] = 'Vous avez demandé le renouvellement de votre mot de passe. Veuillez trouver ci-dessous vos nouvelles informations de connexion.';
$lang['UAM_Default_CfmMail_Custom_Txt1'] = 'Le compte de [username] a été validé avec succès !';
$lang['UAM_DumpTxt'] = 'Sauvegarde et restauration de votre configuration';
$lang['UAM_Restore'] = 'Pour restaurer le fichier de sauvegarde de votre configuration. Seul le fichier sauvegardé sur le serveur est pris en compte.
<br><br>
<b style="color: red;">Attention à la version de la sauvegarde !<br>Une sauvegarde réalisée depuis une version du plugin ne pourra être restaurée que sur une version identique.</b>';
$lang['UAM_Restore_File'] = 'Restauration de la configuration';
$lang['UAM_No_Backup_File'] = 'Pas de fichier de sauvegarde présent !';
$lang['UAM_Restoration_NOK'] = 'Une erreur est survenue lors de la restauration de la configuration. Veuillez vérifier la validité de votre fichier de sauvegarde.';
$lang['UAM_Restoration_OK'] = 'La restauration de votre configuration s\'est terminée avec succès ! Veuillez recharger la page d\'administration de UAM pour voir les paramètres restaurés.';
// --------- End: New or revised $lang ---- from version 2.30.0


// --------- Starting below: New or revised $lang ---- from version 2.30.1
$lang['UAM_submit'] = 'Enregistrer les paramètres';
$lang['UAM_Generic cannot be pwdreset'] = 'Le renouvellement de mot de passe ne peut pas être demandé pour un compte générique !';
$lang['UAM_Admins cannot be pwdreset'] = 'Le renouvellement de mot de passe ne peut pas être demandé pour un compte d\'administrateur !';
$lang['UAM_Bad_version_backup'] = 'La version du fichier de sauvegarde ne correspond pas à la version du plugin ! La restauration n\'a pas été réalisée.';
// --------- End: New or revised $lang ---- from version 2.30.1


// --------- Starting below: New or revised $lang ---- from version 2.30.2
$lang['UAM_RedirToProfile'] = 'Redirection vers la page de personnalisation';
$lang['UAM_GTAutoMail'] = 'Email automatique sur changement de groupe / statut / Niveau de confidentialité';
$lang['UAM_NewFeature'] = 'Nouvelle option !';
$lang['UAM_RejectConnexion_Custom_Txt'] = 'Personnaliser le texte de la page de rejet de la connexion';
// --------- End: New or revised $lang ---- from version 2.30.2


// --------- Starting below: New or revised $lang ---- from version 2.30.3
$lang['UAM_MailExclusion_No'] = 'Exclusion des domaines de messagerie - Inaccessible car les emails ne sont pas obligatoires pour les inscriptions !';
$lang['UAM_USRAuto'] = 'Gestion automatique des visiteurs non confirmés';
$lang['UAM_Default_ConfirmMail_Txt'] = 'Bonjour [username] et merci de vous être inscrit sur la galerie [mygallery].

Pour terminer la procédure et pouvoir parcourir l\'ensemble des photos, merci de bien vouloir confirmer votre inscription en cliquant sur le lien dans ce message.';
$lang['UAM_Default_GhstDemotion_Txt'] = 'Désolé [username], votre compte a été rétrogradé pour cause de dépassement de délai depuis votre dernière visite à [mygallery]. Veuillez reconfirmer votre inscription en cliquant sur le lien suivant :';
$lang['UAM_Tips2_txt'] = '
          <ul>
            <li>
            Objectifs : Informer le visiteur que son inscription est en attente de confirmation en affichant une page additionnelle remplaçant la page d\'index standard de la galerie à chacune de ces connexions; et ce, tant que l\'inscription n\'est pas confirmée.
            <br><br>
            Avantages par rapport à la méthode avec PWG_Stuffs : Permettre une information mise en forme et moins austère et afficher immédiatement l\'information dès l\'inscription des visiteurs.
            </li><br><br>
            <li>
Pré-requis:<br>
- Une galerie avec tout ou partie des catégories privées, visibles par les seuls utilisateurs inscrits<br>
- Au moins les 2 groupes d\'utilisateurs Piwigo suivants : "Attente", sans aucune permission sur les catégories privées, et "Confirmés", avec toutes les permissions sur les catégories privées<br>
- Le plugin UAM<br>
- Le plugin Additional Pages, pour l\'ajout et la gestion d\'une page additionnelle remplaçant la page d\'index par défaut de la galerie<br>
- En option, le plugin Extended Description, pour le support multi-langues<br>
            </li><br><br>
            <li>
Réalisation:<br><br>
A. Dans le plugin UAM:<br>
              <ol>
                <li>Activer la confirmation d\'inscription</li>
                <li>Saisir un "texte d\'accueil personnalisé" qui sera joint au mail de confirmation d\'inscription. Si le plugin Extended Description est activé, les balises de langues peuvent être utilisées</li>
                <li>Sélectionner le groupe "Attente" à la rubrique "Pour les utilisateurs n\'ayant pas confirmé leur inscription"</li>
                <li>Sélectionner le groupe "Confirmés" à la rubrique "Pour les utilisateurs ayant confirmé leur inscription"</li>
                <li>Enregistrer la configuration du plugin</li>
              </ol>
<br>
B. Dans le plugin Additional Pages:<br>
                <b>NOTE : La gestion des droits d\'accès aux pages additionelles pour les groupes doit être activée (voir configuration du plugin Additional Pages).</b>
                <br>
              <ol>
                <li>Ajouter une nouvelle page avec au minimum les paramètres suivants :</li>
                <ul>
                  <li>Nom de la page : Le nom que vous souhaiter donner à la page additionnelle (ex : Inscription non confirmée)</li>
                  <li>Définir comme page d\'accueil coché</li>
                  <li>Groupes autorisés : Cocher la case correspondante au groupe "Attente" configuré dans UAM</li>
                  <li>Contenu : Le texte que vous souhaitez faire apparaitre aux visiteurs.</li>
                </ul>
                <br>
                <li>Et c\'est tout ! Seuls les visiteurs inscrits et dont l\'inscription n\'a pas été confirmée verront cette page d\'index additionnelle.</li>
              </ol>
            </li>
          </ul>';
$lang['UAM_%d_Validated_User'] = '%d Utilisateur confirmé manuellement';
$lang['UAM_%d_Validated_Users'] = '%d Utilisateurs confirmés manuellement';
$lang['UAM_No_Confirm_Group'] = 'Pour les utilisateurs n\'ayant pas confirmé leur inscription<br>';
$lang['UAM_Validated_Group'] = 'Pour les utilisateurs ayant confirmé leur inscription<br>';
$lang['UAM_No_Confirm_Status'] = 'Pour les utilisateurs n\'ayant pas confirmé leur inscription<br>';
$lang['UAM_Validated_Status'] = 'Pour les utilisateurs ayant confirmé leur inscription.<br>';
$lang['UAM_ConfirmMail_Remail'] = 'Mail de rappel aux inscrits non confirmés';
$lang['UAM_No_Valid_Level'] = 'Pour les utilisateurs n\'ayant pas confirmé leur inscription<br>';
$lang['UAM_Valid_Level'] = 'Pour les utilisateurs ayant confirmé leur inscription.<br>';
$lang['UAM_Err_UserManager_Settings'] = 'Cette page n\'est accessible que si "Confirmation d\'inscription" est actif et si un groupe de visiteurs non confirmés est configuré dans le "Paramétrage des confirmations d\'inscriptions".';
$lang['UAM_Tips1_txt'] = '
          <ul>
            <li>
            Objectifs : Informer le visiteur que son inscription est en attente de confirmation en affichant un bloc personnel sur la page d\'accueil de la galerie; et ce, tant que l\'inscription n\'est pas confirmée.<br><br>
            <b>Rappel: En fonctionnement standard, le "Guest" ne voit que les catégories publiques, sans message d\'information.</b>
            </li><br><br>
            <li>
Pré-requis:<br>
- Une galerie avec tout ou partie des catégories privées, visibles par les seuls utilisateurs inscrits<br>
- Au moins les 2 groupes d\'utilisateurs Piwigo suivants : "Attente", sans aucune permission sur les catégories privées, et "Confirmés", avec toutes les permissions sur les catégories privées<br>
- Le plugin UAM<br>
- Le plugin PWG Stuffs, pour l\'ajout d\'un module spécial UAM<br>
- En option, le plugin Extended Description, pour le support multi-langues<br>
            </li><br><br>
            <li>
Réalisation:<br><br>
A. Dans le plugin UAM:<br>
              <ol>
                <li>Activer la confirmation d\'inscription</li>
                <li>Activer l\'option "Module PWG Stuffs"</li>
                <li>Saisir un "texte d\'accueil personnalisé" qui sera joint au mail de confirmation d\'inscription. Si le plugin Extended Description est activé, les balises de langues peuvent être utilisées</li>
                <li>Sélectionner le groupe "Attente" à la rubrique "Pour les utilisateurs n\'ayant pas confirmé leur inscription"</li>
                <li>Sélectionner le groupe "Confirmés" à la rubrique "Pour les utilisateurs ayant confirmé leur inscription"</li>
                <li>Enregistrer la configuration du plugin</li>
              </ol>
<br>
B. Dans le plugin PWG Stuffs:<br>
              <ol>
                <li>Aller dans l\'onglet "Ajouter un nouveau bloc"</li>
                <li> Sélectionner "Module UAM"</li>
                <li>Configurer le module, en indiquant son titre (ex : "Inscription en attente de confirmation") et sa description, et cocher uniquement "Attente" dans la liste des groupes autorisés</li>
                <li>Compléter le contenu du module avec le texte du message d\'information qui sera affiché aux utilisateurs non confirmés. Comme dans UAM, les balises de langues peuvent être utilisées si le plugin Extended Description est activé</li>
                <li>Cocher "Afficher le module sur la page d\'accueil du site"</li>
                <li>Valider la configuration du module</li>
              </ol>
            </li>
          </ul>';
$lang['UAM_Stuffs_Desc'] = 'Ajoute un module d\'information des utilisateurs non confirmés';
$lang['UAM_Default_AdminValidation_Txt'] = 'Bonjour [username] et merci de vous être inscrit sur la galerie [mygallery].

Votre inscription a été confirmée manuellement par l\'administrateur de [mygallery]. Vous pouvez maintenant vous connecter à [myurl] et modifier vos informations de profil.';
$lang['UAM_Default_ValidationTimeout_Txt'] = 'Désolé, votre accès a été supprimé car vous n\'avez pas confirmé votre inscription dans le temps imparti ([Kdays] jours). Merci de vous réinscrire en prenant garde d\'utiliser une adresse de messagerie valide et accessible.';
$lang['UAM_Default_CfmMail_Remail_Txt2'] = 'Bonjour [username].

Ceci est un message de rappel car vous vous êtes inscrit sur notre galerie [mygallery] mais vous n\'avez pas encore confirmé cette inscription et le délai va bientôt expirer. Un délai supplémentaire de x jours vous est accordé. Veuillez cliquer sur le lien de confirmation que vous avez reçu lors de votre inscription.

Note: A l\'issue de cette période sans confirmation, votre compte sera définitivement supprimé.';
$lang['UAM_Default_CfmMail_Custom_Txt2'] = 'Clé d\'activation incorrecte / expirée ou inscription déjà validée.';
$lang['UAM_RejectConnexion'] = 'Rejeter les connexions des utilisateurs non confirmés';
$lang['UAM_Default_CfmMail_Remail_Txt1'] = 'Bonjour [username].
		
Ceci est un message de rappel car vous n\'avez pas confirmé votre inscription sur [mygallery] et votre clé de confirmation a expiré. Pour vous permettre d\'accéder à notre galerie, votre période de confirmation a été réinitialisée. Vous avez donc un nouveau délai de x jours pour confirmer votre inscription.

Note: A l\'issue de cette période sans confirmation, votre compte sera définitivement supprimé.';
$lang['UAM_Default_RejectConnexion_Txt'] = 'Désolé, votre inscription n\'est pas encore validée et vous ne pouvez pas vous connecter maintenant.';
$lang['UAM_Tracking registered users'] = 'Suivi des utilisateurs inscrits';
$lang['UAM_Tracking confirmations'] = 'Suivi des confirmations';
// --------- End: New or revised $lang ---- from version 2.30.3


// --------- Starting below: New or revised $lang ---- from version 2.40
$lang['UAM_AdminValidationMail_Subject'] = 'Personnaliser le sujet de l\'email de validation manuelle';
$lang['UAM_ConfirmMail_Subject'] = 'Personnaliser le sujet de l\'email de confirmation d\'inscription';
$lang['UAM_ConfirmMail_ReMail_Subject'] = 'Personnaliser le sujet de l\'email de rappel de la confirmation d\'inscription';
$lang['UAM_GTReminder_Subject'] = 'Personnaliser le sujet de l\'email de rappel manuel du Ghost Tracker';
$lang['UAM_GTAutomail_Subject'] = 'Personnaliser le sujet de l\'email de rétrogradation automatique du Ghost Tracker';
$lang['UAM_GTAutomail_Text'] = 'Texte de rétrogradation personnalisé';
$lang['UAM_MailInfo_Subject'] = 'Personnaliser le sujet de l\'email d\'information';
$lang['UAM_Default_ConfirmMail_Subject'] = 'Confirmation d\'inscription de [username] sur [mygallery]';
$lang['UAM_Default_ConfirmMail_Remail_Subject'] = 'Rappel - Confirmation d\'inscription de [username] sur [mygallery]';
$lang['UAM_Default_InfoMail_Subject'] = '[username] - Vos paramètres d\'inscription sur [mygallery]';
$lang['UAM_Default_GTAutoMail_Subject'] = '[username] - Rétrogradation de votre compte sur [mygallery]';
$lang['UAM_Default_GTReminder_Subject'] = '[username] - Votre dernière visite sur [mygallery] remonte à longtemps';
$lang['UAM_Default_AdminValidationMail_Subject'] = '[username] - Inscription validée sur [mygallery]';
// --------- End: New or revised $lang ---- from version 2.40


// --------- Starting below: New or revised $lang ---- from version 2.40.4 and 2.30.7
$lang['UAM_mail_exclusion_error'] = 'L\'option de Piwigo "L\'adresse mail est obligatoire pour tous les utilisateurs" a été désactivée alors que l\'option du plugin UserAdvancedManager (UAM) "Exclusion des domaines de messagerie" est resté active. Cette combinaison est illogique et non compatible!<br><br>
Veuillez réactivez l\'option de Piwigo "L\'adresse mail est obligatoire pour tous les utilisateurs" pour pouvoir désactiver ensuite l\'option UAM "Exclusion des domaines de messagerie" si c\'est ce que vous souhaitez.<br><br>
Note : Ce message disparaitra après que vous ayez effectué la correction nécessaire et rechargé la page d\'administration.<br><br>';
// --------- End: New or revised $lang ---- from version 2.40.4 and 2.30.7

// --------- Starting below: New or revised $lang ---- from version 2.41.0
$lang['UAM_Subject admin validation for %s'] = 'Inscription de %s à valider';
$lang['UAM_Manual_validation_needed_for %s'] = 'L\'utilisateur %s s\'est inscrit et demande une validation manuelle par un administrateur.';
$lang['UAM_Customize_messagesandmails'] = 'Personnaliser les messages et mails';
$lang['UAM_Change'] = 'Changer l\'utilisateur confirmé de Groupe/Statut/Niveau de confidentialité';
// --------- End: New or revised $lang ---- from version 2.41.0

$lang['UAM_group "%s" updated'] = 'Pour un meilleur fonctionnement, le groupe %s a été automatiquement positionné comme groupe par défault.';
$lang['personal_content'] = 'contenu';
?>