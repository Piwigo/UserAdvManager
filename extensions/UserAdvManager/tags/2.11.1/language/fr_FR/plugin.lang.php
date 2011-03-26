<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();


/* Global Configuration Tab */
$lang['Title_Tab1'] = 'UserAdvManager - Configuration Générale';
$lang['Tab_Global'] = 'Configuration Générale';
$lang['UserAdvManager_Title'] = 'Configuration avancée des utilisateurs';
$lang['UserAdvManager_Mail_Info'] = 'Mail d\'information à l\'utilisateur';
$lang['UserAdvManager_Mail_Info_true'] = ' Envoyer un mail à l\'utilisateur reprenant ses infos lors de son inscription ou la mise à jour de son profil.';
$lang['UserAdvManager_Mail_Info_false'] = ' Désactive l\'envoi de mail d\'info.';
$lang['UserAdvManager_MailInfo_Text'] = 'Texte utilisé pour l\'introduction du mail envoyé à l\'utilisateur pour son inscription ou la mise à jour de son profil<br>(!!! <b style="text-decoration: blink underline;">ATTENTION !</b> Utilisez la méthode multi language du plugin Extended Description si celui-ci est activé !!!)';
$lang['UserAdvManager_No_Casse'] = 'Utilisateur insensible à la casse';
$lang['UserAdvManager_No_Casse_true'] = ' Rendre le compte utilisateur insensible à la casse, lors de l\'inscription et l\identification.';
$lang['UserAdvManager_No_Casse_false'] = ' Laisser les utilisateur sensible à la casse.';
$lang['UserAdvManager_Username_Char'] = 'Caractères limités pour le nom d\'utilisateur';
$lang['UserAdvManager_Username_Char_true'] = ' Interdire les caractères saisis dans le champs ci-après pour le nom d\'utilisateur lors de l\'inscription == ';
$lang['UserAdvManager_Username_Char_false'] = ' Laisser le contrôle par défaut du nom d\'utilisateur.';
$lang['UserAdvManager_Confirm_Mail'] = 'Confirmation de l\'adresse email';
$lang['UserAdvManager_Confirm_Mail_true'] = ' Envoyer un mail permettant a l\'utilisateur de confirmer son adresse email et donc son compte utilisateur.';
$lang['UserAdvManager_Confirm_Mail_false'] = ' Système d\'inscription et de mise à jour standard sans confirmation de l\'adresse email.';
$lang['UserAdvManager_ConfirmMail_Text'] = 'Texte utilisé pour l\'introduction du mail envoyé à l\'utilisateur pour confirmer son adresse mail<br>(!!! <b style="text-decoration: blink underline;">ATTENTION !</b> Utilisez la méthode multi language du plugin Extended Description si celui-ci est activé !!!)';
$lang['UserAdvManager_No_Confirm_Group'] = 'Groupe à utiliser pour les utilisateurs qui n\'ont pas encore confirmé leur adresse email';
$lang['UserAdvManager_Validated_Group'] = 'Groupe à utiliser pour les utilisateurs qui ont validé leur adresse email';
$lang['UserAdvManager_No_Confirm_Status'] = 'Status utilisateur à utiliser pour les utilisateurs qui n\'ont pas encore confirmé leur adresse email';
$lang['UserAdvManager_Validated_Status'] = 'Status utilisateur à utiliser pour les utilisateurs qui ont validé leur adresse email, laissez ------- pour garder la valuer par défaut de PWG';
$lang['UserAdvManager_No_Comment_Anonymous'] = 'Pseudo obligatoire sur commentaire';
$lang['UserAdvManager_No_Comment_Anonymous_true'] = ' Le champs auteur doit être renseigné pour enregistrer un commentaire.';
$lang['UserAdvManager_No_Comment_Anonymous_false'] = ' Laisser le fonctionnement par défaut pour enregistrer un commentaire.';
$lang['UserAdvManager_MailExclusion'] = 'Exclusion des domaines de messagerie';
$lang['UserAdvManager_MailExclusion_true'] = ' Activer l\'exclusion des domaines de messagerie (par exemple @hotmail.* ou @msn.*)';
$lang['UserAdvManager_MailExclusion_false'] = ' Désactiver l\'exclusion des domaines de messagerie.';
$lang['UserAdvManager_MailExclusion_List'] = ' Si l\'exclusion de domaines de messagerie est activée, saisissez les domaines à exclure ici. Il faut respecter le format suivant :<br>@[nom_du_domaine].[extension_du_domaine] - Exemple : @hotmail.com<br><br>Séparez les domaines par une virgule<br>';
$lang['audit'] = 'Audit';
$lang['submit'] = 'Valider';


/* ConfirmMail Configuration Tab */
$lang['ConfirmMail_Title'] = 'Configuration et gestion avancée de la confirmation par mail';
$lang['Title_Tab2'] = 'UserAdvManager - Configuration de ConfirmMail';
$lang['Tab_ConfirmMail'] = 'Configuration de ConfirmMail';
$lang['UserAdvManager_ConfirmMail_Info'] = 'Limitation du délai de validation de l\'inscription :<br>Si vous activez cette option, sélectionnez le délai (x) )souhaité dans la liste qui suit. Les visiteurs qui s\'inscriront alors auront x jours de délais pour valider leur inscription. Passé ce délai, le lien de validation qu\'ils auront reçu par mail sera expiré.<br>';
$lang['UserAdvManager_ConfirmMail_TimeOut_true'] = 'Activer la limitation du délai d\'inscription.';
$lang['UserAdvManager_ConfirmMail_TimeOut_false'] = 'Désactiver la limitation du délai d\'inscription.';
$lang['UserAdvManager_ConfirmMail_TimeOut'] = 'Délai d\activation :';
$lang['UserAdvManager_ConfirmMail_Delay_Info'] = 'Saisissez ici le nombre de jours avant expiration de la validation d\'inscription : ';
/* This function can't work due to no access to server's cron functionnalities */
//$lang['UserAdvManager_ConfirmMail_AutoDel'] = 'Suppression automatique des comptes non validés après le délai d\'expiration : ';
//$lang['UserAdvManager_ConfirmMail_AutoDel_true'] = 'Activer la suppression automatique - <b style="text-decoration: blink underline;">ATTENTION !</b> La suppression est aveugle et sans notification.';
//$lang['UserAdvManager_ConfirmMail_AutoDel_false'] = 'Désactiver la suppression automatique.';
$lang['UserAdvManager_ConfirmMail_Remail'] = 'Activer ou désactiver la fonctionnalité de rappel des inscrits non validés :<br>';
$lang['UserAdvManager_ConfirmMail_Remail_true'] = 'Activer le rappel par mail';
$lang['UserAdvManager_ConfirmMail_Remail_false'] = 'Désactiver le rappel par mail';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt1'] = 'Contenu personnalisé du message de rappel avec regénération de clé de validation.<br>Si laissé vide, le mail de rappel ne comportera que le lien de validation. Il est donc vivement conseillé de saisir un petit texte explicatif. (NB : Le texte pré renseigné à l\'installation du plugin est donné en exemple)<br><br>(!!! <b style="text-decoration: blink underline;">ATTENTION !</b> La modification du texte n\'est possible <b>QUE</b> si le rappel par email est activé. Utilisez la méthode multi language du plugin Extended Description si celui-ci est activé !!!)';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt2'] = 'Contenu personnalisé du message de rappel sans regénération de clé de validation.<br>Si laissé vide, le mail de rappel sera vide. Il est donc vivement conseillé de saisir un petit texte explicatif. (NB : Le texte pré renseigné à l\'installation du plugin est donné en exemple)<br><br>(!!! <b style="text-decoration: blink underline;">ATTENTION !</b> La modification du texte n\'est possible <b>QUE</b> si le rappel par email est activé. Utilisez la méthode multi language du plugin Extended Description si celui-ci est activé !!!)';


/* UserManager Tab */
$lang['UserManager_Title'] = 'Gestion avancée des inscrits non validés';
$lang['Title_Tab3'] = 'UserAdvManager - Gestion des visiteurs';
$lang['Tab_UserManager'] = 'Gestion des visiteurs';
$lang['UserAdvManager_ConfirmMail_User_List'] = 'Lorsque la limitation du délai d\'inscription est activée, vous trouverez ci-dessous la liste des utilisateurs en attente de validation d\'inscription <b style="text-decoration: underline;">qu\'ils soient ou pas</b> dans les délais pour la valider.<br><br>Dans cette vue, vous pouvez :
<br><br>
- Supprimer manuellement les comptes <b>(purge manuelle)</b>
<br>
- Générer l\'email de rappel <b>sans génération</b> d\'une nouvelle clef. Rappel : Cette fonction ne réinitialise pas la date d\'inscription du visiteur ciblé et le délai d\'expiration est toujours d\'actualité.
<br>
- Générer l\'email de rappel <b>avec génération</b> d\'une nouvelle clef. Rappel : Cette fonction réinitialise également la date d\'inscription du visiteur ciblé ce qui équivaut à prolonger le délai de validation.<br>
- Valider manuellement une inscription en attente de validation même si la date d\'expiration est révolue <b>(forçage de la validation)</b>.
<br>';
$lang['Registration'] = 'Date d\'enregistrement';


/* Mailing */
$lang['infos_mail %s'] = '%s, voici vos informations pour vous identifier sur la galerie :';
$lang['Password: %s'] = 'Mot de passe: %s';
$lang['Add of %s'] = 'Création de %s';
$lang['Update of %s'] = 'Mise à jour de %s';
$lang['Link: %s'] = 'Cliquez sur le lien suivant pour confirmer votre inscription : %s';
$lang['Reminder_with_key_of_%s'] = '%s, votre clé de confirmation a été renouvelée';
$lang['Reminder_without_key_of_%s'] = '%s, votre clé de confirmation va expirer';


/* Email confirmation page */
$lang['title_confirm_mail'] = 'Confirmation de votre inscription';
$lang['confirm_mail_page_title'] = 'Confirmation d\'inscription';
$lang['confirm_mail_ok'] = '<br><br><br>Merci d\'avoir confirmé votre mail et aussi et surtout votre inscription sur le site, profitez bien des photos ...<br><br><br><br>';
$lang['confirm_mail_bad'] = '<br><br><br>Votre clef d\'activation unique est érronée ou expirée ou vous avez déjà validé votre compte, veuillez contacter le webmaster pour régler ce problème.<br><br><br><br>';


/* Errors and Warnings */
$lang['UserAdvManager_audit_ok'] = 'Audit OK';
$lang['UserAdvManager_save_config'] ='Configuration enregistrée.';
$lang['Err_audit_no_casse'] = '<b>Ces comptes sont identiques à la casse près :</b> ';
$lang['Err_audit_username_char'] = '<b>Ce compte contient un ou des caractères interdits :</b> ';
$lang['Err_audit_email_forbidden'] = '<b>Ce compte contient des domaines de messagerie interdit :</b> ';
$lang['Err_audit_advise'] = '<b>Vous avez des corrections a faire pour respecter les nouvelles règles que vous avez activé<br>utilisez un utilitaire de gestion de base de données pour corriger les comptes utilisateurs directement dans la table ###_USERS si nécessaire.</b>';
$lang['UserAdvManager_Empty Author'] = 'Le champs auteur doit être rempli pour enregistrer un commentaire.';
if ( isset($conf_UserAdvManager[1]) and $conf_UserAdvManager[1] == 'true' )
	$lang['new_reg_err_login5'] = 'ce nom utilisateur est déjà pris, ATTENTION le nom est insensible à la casse (Majuscule = Minuscule).';
$lang['reg_err_login6'] = 'le nom utilisateur ne doit pas contenir les caractère suivants : ';
$lang['reg_err_login7'] = 'L\'adresse email est issue d\'un prestataire interdit. Les prestataires d\'adresses email interdits à l\'inscription sont : ';
$lang['UserAdvManager_empty_pwd'] = '[mot de passe vide]';
$lang['UserAdvManager_no_update_pwd'] = '[mise à jour du profil sans changement du mot de passe]';
$lang['invalid_pwd'] = 'Nom utilisateur ou Mot de passe invalide !';
$lang['Err_ConfirmMail_Settings'] = 'Cette page n\'est accessible que si "Confirmation de l\'adresse email" est actif dans l\'onglet "Configuration Générale".';
$lang['Err_UserManager_Settings'] = 'Cette page n\'est accessible que si "Délai de validation d\'inscription" est actif dans l\'onglet "Configuration de ConfirmMail".';
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
$lang['Mail_without_key'] = 'rappel sans clé';
$lang['Mail_with_key'] = 'rappel avec clé';
$lang['Force_Validation'] = 'Validation forcée';
?>