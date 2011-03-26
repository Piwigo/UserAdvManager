<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();

$lang['infos_mail %s'] = '%s, voici vos informations pour vous identifier sur la galerie :';
$lang['Password: %s'] = 'Mot de passe: %s';
$lang['Add of %s'] = 'Création de %s';
$lang['Update of %s'] = 'Mise à jour de %s';

$lang['Link: %s'] = 'Cliquez sur le lien suivant pour confirmer votre inscription : %s';

$lang['title_confirm_mail'] = 'Confirmation de votre inscription';
$lang['confirm_mail_page_title'] = 'Confirmation d\'inscription';
$lang['confirm_mail_ok'] = '<br/><br/><br/>Merci d\'avoir confirmé votre mail et aussi et surtout votre inscription sur le site, profitez bien des photos ...<br/><br/><br/><br/>';
$lang['confirm_mail_bad'] = '<br/><br/><br/>Votre clef d\'activation unique est érroné ou vous avez déjà validé votre compte, veuillez contacter le webmaster pour régler ce problème.<br/><br/><br/><br/>';

$lang['Title'] = 'UserAdvManager';
$lang['UserAdvManager_Title'] = 'Configuration avancée des utilisateurs';

$lang['UserAdvManager_Mail_Info'] = 'Mail d\'information à l\'utilisateur';
$lang['UserAdvManager_Mail_Info_true'] = ' Envoyer un mail à l\'utilisateur reprenant ses infos lors de son inscription ou la mise à jour de son profil.';
$lang['UserAdvManager_Mail_Info_false'] = ' Désactive l\'envoi de mail d\'info.';
$lang['UserAdvManager_MailInfo_Text'] = 'Texte utilisé pour l\'introduction du mail envoyé à l\'utilisateur pour son inscription ou la mise à jour de son profil<br>(!!! <blink>ATTENTION</blink> Vous pouvez utiliser la méthode multi language du plugin Extended Description qui ne fonctionnera que si celui-ci est activé !!!)';
$lang['UserAdvManager_No_Casse'] = 'Utilisateur insensible à la casse';
$lang['UserAdvManager_No_Casse_true'] = ' Rendre le compte utilisateur insensible à la casse, lors de l\'inscription et l\identification.';
$lang['UserAdvManager_No_Casse_false'] = ' Laisser les utilisateur sensible à la casse.';
$lang['UserAdvManager_Username_Char'] = 'Caractères limités pour le nom d\'utilisateur';
$lang['UserAdvManager_Username_Char_true'] = ' Interdire les caractères saisis dans le champs ci-après pour le nom d\'utilisateur lors de l\'inscription == ';
$lang['UserAdvManager_Username_Char_false'] = ' Laisser le contrôle par défaut du nom d\'utilisateur.';
$lang['UserAdvManager_Confirm_Mail'] = 'Confirmation de l\'adresse email';
$lang['UserAdvManager_Confirm_Mail_true'] = ' Envoyer un mail permettant a l\'utilisateur de confirmer son adresse email et donc son compte utilisateur.';
$lang['UserAdvManager_Confirm_Mail_false'] = ' Système d\'inscription et de mise à jour standard sans confirmation de l\'adresse email.';
$lang['UserAdvManager_ConfirmMail_Text'] = 'Texte utilisé pour l\'introduction du mail envoyé à l\'utilisateur pour confirmer son adresse mail<br>(!!! <blink>ATTENTION</blink> utilisez la méthode multi language du plugin Extended Description et cela fonctionnera uniquement si celui-ci est activé !!!)';
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
$lang['UserAdvManager_MailExclusion_List'] = ' Si l\'exclusion de domaines de messagerie est activée, saisissez les domaines à exclure ici. Il faut respecter le format suivant :<br/>@[nom_du_domaine].[extension_du_domaine] - Exemple : @hotmail.com<br/>Séparez les domaines par une virgule<br/>';

$lang['audit'] = 'Audit';
$lang['submit'] = 'Valider';

$lang['Err_audit_no_casse'] = '<b>Ces comptes sont identiques à la casse près :</b> ';
$lang['Err_audit_username_char'] = '<b>Ce compte contient un ou des caractères interdits :</b> ';
$lang['Err_audit_email_forbidden'] = '<b>Ce compte contient des domaines de messagerie interdit :</b> ';
$lang['Err_audit_advise'] = '<b>Vous avez des corrections a faire pour respecter les nouvelles règles que vous avez activé<br>utilisez un utilitaire de gestion de base de données pour corriger les comptes utilisateurs directement dans la table ###_USERS si nécessaire.</b>';
$lang['UserAdvManager_audit_ok'] = 'Audit OK';
$lang['UserAdvManager_save_config'] ='Configuration enregistrée.';

$lang['UserAdvManager_Empty Author'] = 'Le champs auteur doit être rempli pour enregistrer un commentaire.';

if ( isset($conf_UserAdvManager[1]) and $conf_UserAdvManager[1] == 'true' )
	$lang['new_reg_err_login5'] = 'ce nom utilisateur est déjà pris, ATTENTION le nom est insensible à la casse (Majuscule = Minuscule).';
$lang['reg_err_login6'] = 'le nom utilisateur ne doit pas contenir les caractère suivants : ';
$lang['reg_err_login7'] = 'L\'adresse email est issue d\'un prestataire interdit. Les prestataires d\'adresses email interdits à l\'inscription sont : ';

$lang['invalid_pwd'] = 'Nom utilisateur ou Mot de passe invalide !';

$lang['UserAdvManager_empty_pwd'] = '[mot de passe vide]';
$lang['UserAdvManager_no_update_pwd'] = '[mise à jour du profil sans changement du mot de passe]';
?>