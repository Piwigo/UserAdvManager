<?php
// ConfirmMail options section
$lang['UAM_confirmTitle_d'] = '
- Génération d\'email d\'information<br/>
- Génération d\'email de confirmation d\'inscription<br/>
- Affectation automatique de groupe, de statut ou de niveau de confidentialité<br/>
- Limitation du délai de confirmation<br/>
- Génération d\'email de rappel<br/>
...
';
$lang['UAM_confirmmailTitle_d'] = 'Cette option permet soit à un utilisateur de confirmer son inscription en cliquant sur un lien reçu dans un email envoyé dès son enregistrement sur la galerie, soit à l\'administrateur d\'activer manuellement les inscriptions.<br/><br/>
Dans le premier cas, le message envoyé comprend une partie fixe, avec le lien d\'activation généré à partir d\'une clef aléatoire (cette clé peut éventuellement être régénérée via l\'onglet &quot;Suivi des confirmations&quot;), et une partie personnalisable par un texte d\'accueil.
<br/><br/>
Dans le second cas, l\'email avec lien de validation est envoyé aux administrateurs de la galerie. Les visiteurs doivent patienter qu\'un administrateur valide lui même leur inscription soit par ce lien, soit par l\'onglet &quot;Suivi des confirmations&quot;.
<br/>
<b style=&quot;color: red;&quot;>NB: Les options &quot;Limitation du délai de confirmation d\'inscription&quot; et &quot;Mail de rappel aux inscrits non confirmés&quot; doivent être désactivées lorsque la confirmation manuelle est active.</b>
<br/><br/>
Cette option est généralement utilisée avec  l\'attribution automatique de groupe et/ou de statut. Selon qu\'il ait confirmé ou non son inscription, il est en effet possible d\'affecter à l\'utilisateur un groupe différent, avec plus ou moins de restrictions d\'accès à la galerie.';
$lang['UAM_StuffsTitle_d'] = 'Ceci permet d\'activer un module supplémentaire UAM dans le plugin PWG Stuffs (si installé) afin d\'informer sur leur état vos visiteurs n\'ayant pas confirmé leur inscription.
<br/><br/>
Veuillez vous reporter à la section <b>Astuces et exemples d\'utilisation</b> en bas de cette page pour les détails.';
$lang['UAM_adminconfmailTitle_d'] = 'On peut ici désactiver la confirmation des inscriptions uniquement pour les comptes d\'utilisateurs créés par l\'administrateur via l\'interface de gestion des utilisateurs de Piwigo.<br/><br/>
En activant cette option, l\'email de confirmation d\'inscription sera envoyé à chaque utilisateur créé par l\'admin.<br/><br/>
En désactivant cette option (mode par défaut), seul l\'email d\'information est envoyé (si la fonction &quot;Email d\'information &agrave; l\'utilisateur&quot; est activée). De plus, l\'utilisateur ainsi créé sera <b>considéré comme validé</b> par défaut.';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Lorsqu\'un administrateur ou un webmestre de la galerie valide manuellement une inscription en attente, un email de notification est automatiquement envoyé à l\'utilisateur concerné. Saisissez ici un sujet personnalisé pour l\'email de validation manuelle.<br/>
Par défaut, le champ comporte un texte générique en français mais vous pouvez le changer et utiliser les balises de traduction [lang=??] du plugin Extended Description s\'il est installé.
<br/><br/>
De plus les balises de personnalisations suivantes sont utilisables sans l\'aide du plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
';
$lang['UAM_AdminValidationMail_d'] = 'Lorsqu\'un administrateur ou un webmestre de la galerie valide manuellement une inscription en attente, un email de notification est automatiquement envoyé à l\'utilisateur concerné. Saisissez ici le texte qui apparaîtra dans cet email.
<br/><br/>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br/><br/>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Saisissez ici un sujet personnalisé pour l\'email de confirmation d\'inscription.<br/>
Par défaut, le champ comporte un texte générique en français mais vous pouvez le changer et utiliser les balises de traduction [lang=??] du plugin Extended Description s\'il est installé.
<br/><br/>
De plus les balises de personnalisations suivantes sont utilisables sans l\'aide du plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
';
$lang['UAM_confirmtxtTitle_d'] = 'Saisissez ici le texte d\'introduction qui apparaîtra dans l\'email de confirmation d\'inscription.
<br/><br/>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b> pour insérer le nombre de jour de validité de la clé d\'inscription (l\'option &quot;Limitation du délai de confirmation d\'inscription&quot; doit être activée).
<br/><br/>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_confirmmail_custom1_d'] = 'Lorsque l\'option &quot;Confirmation d\'inscription&quot; est active, ce champ permet de personnaliser <b><u>le texte d\'acceptation</u></b> de la confirmation d\'inscription sur la page affichée lorsqu\'un utilisateur clique sur le lien de confirmation qu\'il a reçu par email.
<br/><br/>
A l\'installation du plugin, un texte standard est donnée en exemple.
<br/><br/>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br/><br/>
Ce champ est compatible avec l\'extension FCK Editor et, pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_confirmmail_custom2_d'] = 'Lorsque l\'option &quot;Confirmation d\'inscription&quot; est active, ce champ permet de personnaliser <b><u>le texte de rejet</u></b> de la confirmation d\'inscription sur la page affichée lorsqu\'un utilisateur clique sur le lien de confirmation qu\'il a reçu par email.
<br/><br/>
A l\'installation du plugin, un texte standard est donnée en exemple.
<br/><br/>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br/><br/>
Ce champ est compatible avec l\'extension FCK Editor et, pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_RejectConnexion_d'] = 'Si activée, les nouveaux inscrits qui n\'ont pas confirmé leur inscription ne pourront pas se connecter à la galerie. Ils seront redirigés vers une page spéciale pour les informer de cet état.<br/><br/>
<b style=&quot;color: red;&quot;>Attention - Cette option fonctionne uniquement avec les groupes de confirmation ! Référez-vous ci-dessous pour affecter les paramètres de groupes requis.</b>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Personnalisez ici votre message d\'explication informant les utilisateurs non confirmés qu\'ils ne pourront pas se connecter à la galerie tant qu\'ils n\'auront pas confirmé leur inscription.
<br/><br/>
Ce champ est compatible avec l\'extension FCK Editor et, pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>ATTENTION : L\'utilisation des groupes à la confirmation nécessite que vous ayez créé au moins un groupe d\'utilisateurs et qu\'il soit défini &quot;par défaut&quot; dans la gestion des groupes d\'utilisateurs de Piwigo.</b><br/><br/>
Les groupes à la confirmation sont à utiliser conjointement avec l\'option &quot;Confirmation d\'inscription&quot;';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>ATTENTION : L\'utilisation des statuts à la confirmation nécessite que vous ayez conservé l\'utilisateur &quot;Guest&quot; pour le paramétrage par défaut (modèle) pour les nouveaux inscrits. A noter : Vous pouvez définir n\'importe quel autre utilisateur comme modèle pour les nouveaux inscrits. Reportez-vous à la documentation de Piwigo pour plus de détails.</b><br/><br/>
Les statuts à la confirmation sont à utiliser conjointement avec l\'option &quot;Confirmation d\'inscription&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>ATTENTION : L\'utilisation des niveaux de confidentialité à la confirmation nécessite que vous ayez affecté un niveau de confidentialité aux photos que vous voulez restreindre. Reportez vous à la documentation de Piwigo pour plus de détails.</b><br/><br/>
Les niveaux de confidentialité à la confirmation sont à utiliser conjointement avec l\'option &quot;Confirmation d\'inscription&quot;';
$lang['UAM_validationlimitTitle_d'] = 'Cette option permet de limiter le nombre de jours pendant lequel un nouvel utilisateur peut confirmer son inscription. Une fois ce délai expiré, le lien de confirmation sera invalide, et ne pourra plus être employé.
<br/><br/>
Cette option n\'est utilisable qu\'une fois l\'option &quot;Confirmation d\'inscription&quot; activée.
<br/><br/>
Si cette option et l\'option &quot;Mail de rappel aux inscrits non confirmés&quot; sont activées, de nouvelles options apparaitront plus bas dans cette section pour permettre l\'automatisation de la gestion des visiteurs non confirmés.';
$lang['UAM_remailTitle_d'] = 'Cette option permet d\'envoyer un email de rappel aux utilisateurs n\'ayant pas confirmé leur inscription dans les temps. Elle n\'a d\'effet qu\'une fois l\'option &quot;Confirmation d\'inscription&quot; activée.
<br/><br/>
2 types d\'email peuvent être envoyés : Avec ou sans régénération de la clef de confirmation. En fonction du cas, le contenu  des emails peut être personnalisé.
<br/><br/>
Reportez-vous à l\'onglet &quot;Suivi des confirmations&quot;.
<br/><br/>
Si cette option et l\'option &quot;Limitation du délai de confirmation d\'inscription&quot; sont activées, de nouvelles options apparaitront plus bas dans cette section pour permettre l\'automatisation de la gestion des visiteurs non confirmés.';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Saisissez ici un sujet personnalisé pour l\'email de rappel de confirmation d\'inscription (avec ou sans renouvellement de clé).<br/>
Par défaut, le champ comporte un texte générique en français mais vous pouvez le changer et utiliser les balises de traduction [lang=??] du plugin Extended Description s\'il est installé.
<br/><br/>
De plus les balises de personnalisations suivantes sont utilisables sans l\'aide du plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
';
$lang['UAM_remailtxt1Title_d'] = 'Saisissez ici le texte d\'introduction qui apparaîtra dans l\'email de rappel, accompagné d\'une nouvelle clef de confirmation.
<br/><br/>
Il est vivement conseillé de saisir un texte explicatif; à défaut, le mail de rappel ne comportera que le lien de confirmation. (NB : Le texte pré-renseigné à l\'installation du plugin n\'est donné qu\'à titre d\'exemple).
<br/><br/>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b> pour insérer le nombre de jour de validité de la clé d\'inscription (l\'option &quot;Limitation du délai de confirmation d\'inscription&quot; doit être activée).
<br/><br/>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_remailtxt2Title_d'] = 'Saisissez ici le texte d\'introduction qui apparaîtra dans l\'email de rappel, sans nouvelle clef de confirmation.
<br/><br/>
Il est vivement conseillé de saisir un texte explicatif, afin que l\'email ne soit pas vide. (NB : Le texte pré-renseigné à l\'installation du plugin n\'est donné qu\'à titre d\'exemple).
<br/><br/>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b> pour insérer le nombre de jour de validité de la clé d\'inscription (l\'option &quot;Limitation du délai de confirmation d\'inscription&quot; doit être activée).
<br/><br/>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_USRAutoTitle_d'] = 'La gestion automatique des visiteurs non confirmés est déclenchée à chaque connexion à la galerie et fonctionne ainsi :
<br/><br/>
- Suppression automatique des comptes non confirmés dans le temps imparti sans envoi automatique de mail de relance -> &quot;Limitation du délai de confirmation d\'inscription&quot; <b><u>est actif</u></b> et &quot;Mail de rappel aux inscrits non confirmés&quot; <b><u>est inactif</u></b>.
<br/><br/>
- Envoi automatique d\'un message de rappel avec génération d\'une nouvelle clé de confirmation puis suppression automatique des comptes non confirmés dans le temps imparti après l\'envoi de la relance -> &quot;Limitation du délai de confirmation d\'inscription&quot; <b><u>est actif</u></b> et &quot;Mail de rappel aux inscrits non confirmés&quot; <b><u>est actif</u></b>.';
$lang['UAM_USRAutoDelTitle_d'] = 'Ceci n\'est valable que lorsque l\'utilisateur dont le compte est à supprimer déclenche lui même le mécanisme de suppression (cas rare mais possible). Il est alors déconnecté de force de la galerie et redirigé vers une page indiquant la suppression de son compte et, éventuellement, les raisons de cette suppression.
<br/><br/>
Un texte pour cette page de redirection est donné à titre d\'exemple, ci-dessous, et peut être personnalisé. Ce champ est compatible avec le plugin FCK Editor. Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.
<br/><br/>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.<br/>
La balise <b style=&quot;color: red;&quot;>[username]</b> n\'est pas disponible ici puisque l\'utilisateur en question a été supprimé.';
$lang['UAM_USRAutoMailTitle_d'] = 'Lorsque activée, cette fonction enverra automatiquement le contenu personnalisé dans &quot;Message de rappel avec regénération de clé&quot; aux visiteurs répondant au critère.';
?>