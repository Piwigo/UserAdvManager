<?php

$lang['UAM_carexcTitle_d'] = 'Il peut être intéressant d\'interdire certains caractères dans les noms d\'utilisateurs (exemple : refuser les logins contenant un @). Cette option permet d\'exclure les caractères, ou suite de caractères, indésirables.<br>NB: l\'option permet également d\'exclure des mots complets.
<br><br>
<b style=&quot;color: red;&quot;>Attention : Cette option est sans effet sur les noms d\'utilisateurs créés préalablement à son activation.</b>';
$lang['UAM_passwTitle_d'] = 'L\'activation de cette option rend obligatoire la saisie d\'un mot de passe  à l\'inscription, et oblige le mot de passe choisi par le visiteur à répondre à un niveau minimum de complexité. Si ce seuil n\'est pas atteint, le score réalisé et le score minimum à atteindre sont affichés, ainsi que des recommandations pour augmenter la valeur de ce score.<br><br>
Un champ de test permet de mesurer la complexité d\'un mot de passe, et peut permettre de se faire une idée du score à définir pour une complexité personnalisée.<br><br>
NB: Le score d\'un mot de passe est calculé en fonction de plusieurs paramètres : longueur, types de caractères utilisés (lettres, chiffres, majuscules, minuscules, caractères spéciaux). Un score inférieur à 100 est considéré comme faible; de 100 à 500, la complexité est dans la moyenne; au-delà de 500, la sécurité est excellente.';
$lang['UAM_passwtestTitle'] = 'Tester la complexité d\'un mot de passe';
$lang['UAM_passwtestTitle_d'] = 'Saisir le mot de passe à tester puis cliquer sur le bouton &quot;Calcul du score&quot; pour afficher le résultat.';
$lang['UAM_passwadmTitle_d'] = 'Un administrateur peut créer un compte d\'utilisateur avec ou sans application de la règle de calcul de complexité.<br><br>
A noter : Si l\'utilisateur du compte ainsi créé désire changer de mot de passe et que le renforcement des mots de passe pour les utilisateurs est actif, il sera soumis à la règle configurée.';
$lang['UAM_infomailTitle_d'] = 'Cette option permet d\'automatiser l\'envoi d\'un email d\'information à un utilisateur lorsqu\'il modifie son mot de passe ou son adresse de messagerie dans son profil.<br><br>
Le message envoyé comprend une partie fixe (login, mot de passe et adresse email de l\'utilisateur) et une partie personnalisable par un texte d\'accueil.';
$lang['UAM_remailtxt1Title'] = 'Message de rappel avec regénération de clé';
$lang['UAM_remailtxt2Title'] = 'Message de rappel sans regénération de clé';
$lang['UAM_tipsTitle_d'] = 'Astuces et exemples divers d\'utilisation';


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_adminconfmailTitle_d'] = 'On peut ici désactiver la confirmation des inscriptions uniquement pour les comptes d\'utilisateurs créés par l\'administrateur via l\'interface de gestion des utilisateurs de Piwigo.<br><br>
En activant cette option, l\'email de confirmation d\'inscription sera envoyé à chaque utilisateur créé par l\'admin.<br><br>
En désactivant cette option (mode par défaut), seul l\'email d\'information est envoyé (si la fonction &quot;Email d\'information &agrave; l\'utilisateur&quot; est activée).';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_gtTitle_d'] = 'Lorsque la gestion des visiteurs fantômes est activée et initialisée, vous trouverez ci-dessous la liste des visiteurs inscrits sur votre galerie et qui ne sont pas revenus depuis x jours. &quot;x&quot; étant le nombre de jours paramétrés dans l\'onglet de configuration générale. De plus, vous trouverez une colonne précisant si un mail de rappel a déjà été envoyé aux visiteurs ciblés, vous permettant de visualiser d\'un coup d\'oeil et traiter les visiteurs qui n\'auraient pas tenu compte du rappel.<br><br>Dans cette vue, vous pouvez :
<br><br>
- Supprimer manuellement les comptes <b>(purge manuelle)</b>
<br>
- Générer l\'email de rappel <b>avec réinitialisation de la date de dernière visite</b>. Ce qui permet de donner un &quot;joker&quot; au visiteur ciblé. Si le visiteur a déjà bénéficié d\'un mail de rappel, rien n\'empêche de renvoyer un nouveau mail qui réinitialisera, de fait, la date de dernière visite.
<br><br>
<b>Fonction de tri du tableau</b>: Vous pouvez trier les données affichées en cliquant sur les entêtes de colonnes. L\'utilisation de la touche MAJ ou SHIFT permet de trier sur 1 à 4 colonnes simultanées maximum.';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.15.6
$lang['UAM_RedirTitle_d'] = 'Cette option permet de rediriger automatiquement un utilisateur inscrit vers sa page de personnalisation uniquement lors de sa première connexion à la galerie.<br><br>
A savoir: Cette fonction ne s\'applique pas à tous les utilisateurs déjà inscrits. Ceux disposant du status &quot;admin&quot;, &quot;webmaster&quot; ou &quot;generique&quot; sont exclus de la règle.';
// --------- End: New or revised $lang ---- from version 2.15.6


// --------- Starting below: New or revised $lang ---- from version 2.16.0
$lang['UAM_ghosttrackerTitle_d'] = 'L\'activation de cette fonction permet la gestion des visiteurs inscrits en fonction de la fréquence de leurs visites. 2 modes de fonctionnements sont possibles:<br><br>
- Gestion manuelle : Lorsque le délai entre 2 visites successives est atteint, le visiteur apparaît dans le tableau de l\'onglet &quot;Ghost Tracker&quot; d\'où il est possible de le relancer manuellement par email ou le supprimer.<br><br>
- Gestion automatisée : Lorsque le délai entre 2 visites successives est atteint, le visiteur est automatiquement soit supprimé, soit basculé dans un groupe et/ou statut d\'attente. Dans ce deuxième cas, un email d\'information peut lui être envoyé.<br><br><br>
<b style=&quot;color: red;&quot;>IMPORTANT : A première activation de cette fonction, ou à sa réactivation après une longue période pendant laquelle de nouveaux visiteurs se sont inscrits, il convient d\'initialiser le Ghost Tracker (voir les instructions correspondantes sur l\'onglet &quot;Ghost Tracker&quot;).</b>';
$lang['UAM_GTAutoTitle_d'] = 'Cette option permet d\'appliquer des règles de gestion automatisée des visiteurs fantômes.
<br><br>Principe de base : Un utilisateur ayant atteind la limite maximale entre deux visites <b><u>et</u></b> ayant déjà été notifié par email est considéré comme expiré. On peut alors appliquer des règles de traitement automatisées telles que la suppression automatique des comptes expirés ou leur rétrogradation en restreignant l\'accès à la galerie (bascule automatique dans un groupe et/ou un statut à accès restreint).
<br><br>Le déclenchement de ces automatismes se réalise lors de la connexion des utilisateurs (n\'importe quel utilisateur !)à la galerie.';
$lang['UAM_GTAutoDelTitle'] = 'Message personnalisé de suppression de compte';
// --------- End: New or revised $lang ---- from version 2.16.0


// --------- Starting below: New or revised $lang ---- from version 2.20.4
$lang['UAM_HidePasswTitle_d'] = 'Choisissez ici si vous souhaitez faire afficher le mot de passe choisi par le visiteur dans le mail d\'information. Si vous activez l\'option, le mot de passe apparaitra alors en clair. Si vous la désactivez, le mot de passe n\'apparaitra pas du tout.';
// --------- End: New or revised $lang ---- from version 2.20.4


// --------- Starting below: New or revised $lang ---- from version 2.20.11
$lang['UAM_gttextTitle_d'] = 'Saisissez ici le texte qui apparaîtra dans l\'email de rappel pour inciter l\'utilisateur à revenir visiter votre galerie (NB: Le texte pré-renseigné à l\'installation du plugin est donné à titre d\'exemple).
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.<br>
- <b style=&quot;color: red;&quot;>[days]</b> pour insérer automatiquement le nombre de jour maximum entre deux visites.
<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_confirmtxtTitle_d'] = 'Saisissez ici le texte d\'introduction qui apparaîtra dans l\'email de confirmation d\'inscription.
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> pour insérer le nombre de jour de validité de la clé d\'inscription (l\'option &quot;Limitation du délai de confirmation d\'inscription&quot; doit être activée).
<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_remailtxt1Title_d'] = 'Saisissez ici le texte d\'introduction qui apparaîtra dans l\'email de rappel, accompagné d\'une nouvelle clef de confirmation.
<br><br>
Il est vivement conseillé de saisir un texte explicatif; à défaut, le mail de rappel ne comportera que le lien de confirmation. (NB : Le texte pré-renseigné à l\'installation du plugin n\'est donné qu\'à titre d\'exemple).
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> pour insérer le nombre de jour de validité de la clé d\'inscription (l\'option &quot;Limitation du délai de confirmation d\'inscription&quot; doit être activée).
<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_remailtxt2Title_d'] = 'Saisissez ici le texte d\'introduction qui apparaîtra dans l\'email de rappel, sans nouvelle clef de confirmation.
<br><br>
Il est vivement conseillé de saisir un texte explicatif, afin que l\'email ne soit pas vide. (NB : Le texte pré-renseigné à l\'installation du plugin n\'est donné qu\'à titre d\'exemple).
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> pour insérer le nombre de jour de validité de la clé d\'inscription (l\'option &quot;Limitation du délai de confirmation d\'inscription&quot; doit être activée).
<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_infotxtTitle_d'] = 'Saisissez ici le texte d\'introduction personnalisé qui apparaîtra dans l\'email d\'information.
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_AdminValidationMail_d'] = 'Lorsqu\'un administrateur ou un webmestre de la galerie valide manuellement une inscription en attente, un email de notification est automatiquement envoyé à l\'utilisateur concerné. Saisissez ici le texte qui apparaîtra dans cet email.
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_confirmmail_custom1_d'] = 'Lorsque l\'option &quot;Confirmation d\'inscription&quot; est active, ce champ permet de personnaliser <b><u>le texte d\'acceptation</u></b> de la confirmation d\'inscription sur la page affichée lorsqu\'un utilisateur clique sur le lien de confirmation qu\'il a reçu par email.
<br><br>
A l\'installation du plugin, un texte standard est donnée en exemple.
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br><br>
Ce champ est compatible avec l\'extension FCK Editor et, pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_confirmmail_custom2_d'] = 'Lorsque l\'option &quot;Confirmation d\'inscription&quot; est active, ce champ permet de personnaliser <b><u>le texte de rejet</u></b> de la confirmation d\'inscription sur la page affichée lorsqu\'un utilisateur clique sur le lien de confirmation qu\'il a reçu par email.
<br><br>
A l\'installation du plugin, un texte standard est donnée en exemple.
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br><br>
Ce champ est compatible avec l\'extension FCK Editor et, pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_GTAutoDelTitle_d'] = 'Ceci n\'est valable que lorsque l\'utilisateur dont le compte a expiré déclenche lui même le mécanisme de suppression (cas rare mais possible). Il est alors déconnecté de force de la galerie et redirigé vers une page indiquant la suppression de son compte et, éventuellement, les raisons de cette suppression.
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.<br>
<b style=&quot;color: red;&quot;>[username]</b> n\'est pas disponible ici puisque l\'utilisateur en question a été supprimé.
<br><br>
Un texte personnalisé pour cette page de redirection peut être saisi dans le champ ci-dessous qui est compatible avec l\'extension FCK Editor. Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_CustomPasswRetrTitle_d'] = 'Par défaut, lorsqu\'un utilisateur a perdu son mot de passe et qu\'il sélectionne l\'option de récupération, il reçoit un email ne contenant que son nom d\'utilisateur et son nouveau mot de passe.
<br><br>
Vous pouvez ici ajouter un texte de votre choix qui sera inséré <b><u>avant</u></b> ces informations standards.
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_USRAutoDelTitle_d'] = 'Ceci n\'est valable que lorsque l\'utilisateur dont le compte est à supprimer déclenche lui même le mécanisme de suppression (cas rare mais possible). Il est alors déconnecté de force de la galerie et redirigé vers une page indiquant la suppression de son compte et, éventuellement, les raisons de cette suppression.
<br><br>
Un texte pour cette page de redirection est donné à titre d\'exemple, ci-dessous, et peut être personnalisé. Ce champ est compatible avec le plugin FCK Editor. Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.<br>
La balise <b style=&quot;color: red;&quot;>[username]</b> n\'est pas disponible ici puisque l\'utilisateur en question a été supprimé.';
// --------- End: New or revised $lang ---- from version 2.20.11


// --------- Starting below: New or revised $lang ---- from version 2.30.0
$lang['UAM_confirmTitle_d'] = '
- Génération d\'email d\'information<br>
- Génération d\'email de confirmation d\'inscription<br>
- Affectation automatique de groupe, de statut ou de niveau de confidentialité<br>
- Limitation du délai de confirmation<br>
- Génération d\'email de rappel<br>
...
';
$lang['UAM_confirmgrpTitle'] = 'Groupes';
$lang['UAM_confirmstatTitle'] = 'Statuts';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>ATTENTION : L\'utilisation des groupes à la confirmation nécessite que vous ayez créé au moins un groupe d\'utilisateurs et qu\'il soit défini &quot;par défaut&quot; dans la gestion des groupes d\'utilisateurs de Piwigo.</b><br><br>
Les groupes à la confirmation sont à utiliser conjointement avec l\'option &quot;Confirmation d\'inscription&quot;';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>ATTENTION : L\'utilisation des statuts à la confirmation nécessite que vous ayez conservé l\'utilisateur &quot;Guest&quot; pour le paramétrage par défaut (modèle) pour les nouveaux inscrits. A noter : Vous pouvez définir n\'importe quel autre utilisateur comme modèle pour les nouveaux inscrits. Reportez-vous à la documentation de Piwigo pour plus de détails.</b><br><br>
Les statuts à la confirmation sont à utiliser conjointement avec l\'option &quot;Confirmation d\'inscription&quot;';
$lang['UAM_confirmlevelTitle'] = 'Niveau de confidentialité';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>ATTENTION : L\'utilisation des niveaux de confidentialité à la confirmation nécessite que vous ayez affecté un niveau de confidentialité aux photos que vous voulez restreindre. Reportez vous à la documentation de Piwigo pour plus de détails.</b><br><br>
Les niveaux de confidentialité à la confirmation sont à utiliser conjointement avec l\'option &quot;Confirmation d\'inscription&quot;';
$lang['UAM_GTAutoGpTitle_d'] = 'Le changement automatique de groupe, de statut ou de niveau de confidentialité équivaut à une rétrogradation des comptes concernés et fonctionne sur le même principe que le groupe, le statut ou le niveau de confidentialité à la confirmation (voir &quot;Paramétrage des confirmations d\'inscriptions&quot;). Il conviendra donc de définir un groupe ou un statut et/ou un niveau de confidentialité rétrogradant l\'accès à la galerie. Si cela a déjà été défini avec l\'utilisation de la fonction Confirmation d\'inscription, on peut utiliser ces mêmes groupes / statuts / niveaux.<br><br>
<b style=&quot;color: red;&quot;>Point important :</b> Si un utilisateur fantôme n\'a toujours pas donné signe de vie après le délai imparti et malgré la notification automatique par mail (si activée), il est automatiquement supprimé de la base de données.';
$lang['UAM_GT_MainTitle_d'] = '
- Gestion automatique ou manuelle des visiteurs fantômes<br>
- Mailing<br>
...
';
$lang['UAM_miscTitle_d'] = '
- Suivi des visiteurs inscrits<br>
- Pseudo obligatoire sur commentaire pour les visiteurs<br>
...
';
$lang['UAM_PwdResetTitle_d'] = 'L\'activation de cette option ajoutera une nouvelle fonction dans le panneau de gestion de utilisateurs (Utilisateurs > Gérer) de Piwigo qui permet de demander le renouvellement du mot de passe pour les utilisateurs sélectionnés. De plus, une nouvelle colonne s\'ajoutera pour présenter le statut des mots de passe pour chacun d\'eux avec les valeurs suivantes :<br>
- Mot de passe à changer : Une demande de changement de mot de passe a été programmée.<br>
- Mot de passe modifié : Le mot de passe a été changé suite à une demande.<br>
- Mot de passe original : Le mot de passe est celui choisi à la création du compte et n\'a jamais fait l\'objet d\'une demande de changement.<br>
Le compte webmaster, génériques et invités (Guest) sont exclus de cette fonction.<br><br>
Ces utilisateurs seront alors systématiquement redirigés vers leur page de personnalisation à chacune de leurs connexions tant qu\'ils n\'auront pas modifié leur mot de passe. Un message explicite sera affiché sur cette page.';
$lang['UAM_DumpTitle_d'] = 'Ceci vous permet de sauvegarder la configuration complète du plugin dans un fichier afin de pouvoir la restaurer en cas de problème (fausse manipulation ou avant une mise à jour, par exemple). Par défaut, le fichier est stocké dans le dossier ../plugins/UserAdvManager/include/backup/ et se nomme &quot;UAM_dbbackup.sql&quot;.
<br><br>
<b style=&quot;color: red;&quot;>Attention : Le fichier est écrasé à chaque action de sauvegarde !</b>
<br><br>
Il peut être parfois utile de récupérer le fichier de sauvegarde sur votre ordinateur. Par exemple : Pour une restauration sur une autre base de données, pour externaliser la sauvegarder ou pour conserver plusieurs fichiers. Pour cela, il suffit de cocher la case correspondante au téléchargement du fichier.
<br><br>
La restauration à partir de cette interface ne prend en charge que la sauvegarde effectuée localement (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql). Il n\'est pas possible, ici, de réinjecter un fichier de sauvegarde téléchargé. Pour cela, veuillez utiliser l\'outil de gestion de votre base de données (pour MySql, on trouvera généralement PhpMyAdmin).
<br><br>
<b style=&quot;color: red;&quot;>Attention : Après la restauration, il est nécessaire de recharger la page d\'administration du plugin pour voir les paramètres restaurés !</b>';
// --------- End: New or revised $lang ---- from version 2.30.0


// --------- Starting below: New or revised $lang ---- from version 2.30.3
$lang['UAM_mailexcTitle_d'] = 'Par défaut, Piwigo accepte toutes les adresses de messagerie au format xxx@yyy.zz. L\'activation de cette option permet d\'exclure certains domaines selon le format : @[nom_du_domaine].[extension_du_domaine].<br><br>
Exemples :<br>
@hotmail.com -> exclusion des adresses *@hotmail.com<br>
@hotmail -> exclusion de toutes les adresses *@hotmail*<br><br>
<b style=&quot;color: red;&quot;>Attention ! Cette fonction n\'est accessible que si les emails sont obligatoires pour les inscriptions ! Reportez-vous aux options de configuration de Piwigo.';
$lang['UAM_remailTitle_d'] = 'Cette option permet d\'envoyer un email de rappel aux utilisateurs n\'ayant pas confirmé leur inscription dans les temps. Elle n\'a d\'effet qu\'une fois l\'option &quot;Confirmation d\'inscription&quot; activée.
<br><br>
2 types d\'email peuvent être envoyés : Avec ou sans régénération de la clef de confirmation. En fonction du cas, le contenu  des emails peut être personnalisé.
<br><br>
Reportez-vous à l\'onglet &quot;Suivi des confirmations&quot;.
<br><br>
Si cette option et l\'option &quot;Limitation du délai de confirmation d\'inscription&quot; sont activées, de nouvelles options apparaitront plus bas dans cette section pour permettre l\'automatisation de la gestion des visiteurs non confirmés.';
$lang['UAM_USRAutoTitle_d'] = 'La gestion automatique des visiteurs non confirmés est déclenchée à chaque connexion à la galerie et fonctionne ainsi :
<br><br>
- Suppression automatique des comptes non confirmés dans le temps imparti sans envoi automatique de mail de relance -> &quot;Limitation du délai de confirmation d\'inscription&quot; <b><u>est actif</u></b> et &quot;Mail de rappel aux inscrits non confirmés&quot; <b><u>est inactif</u></b>.
<br><br>
- Envoi automatique d\'un message de rappel avec génération d\'une nouvelle clé de confirmation puis suppression automatique des comptes non confirmés dans le temps imparti après l\'envoi de la relance -> &quot;Limitation du délai de confirmation d\'inscription&quot; <b><u>est actif</u></b> et &quot;Mail de rappel aux inscrits non confirmés&quot; <b><u>est actif</u></b>.';
$lang['UAM_RejectConnexion_d'] = 'Si activée, les nouveaux inscrits qui n\'ont pas confirmé leur inscription ne pourront pas se connecter à la galerie. Ils seront redirigés vers une page spéciale pour les informer de cet état.<br><br>
<b style=&quot;color: red;&quot;>Attention - Cette option fonctionne uniquement avec les groupes de confirmation ! Référez-vous ci-dessous pour affecter les paramètres de groupes requis.</b>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Personnalisez ici votre message d\'explication informant les utilisateurs non confirmés qu\'ils ne pourront pas se connecter à la galerie tant qu\'ils n\'auront pas confirmé leur inscription.
<br><br>
Ce champ est compatible avec l\'extension FCK Editor et, pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_restricTitle_d'] = '
- Exclusion de caractères dans les noms d\'utilisateurs<br>
- Renforcement des mots de passe<br>
- Exclusion des domaines de messagerie<br>
...
';
$lang['UAM_USRAutoMailTitle_d'] = 'Lorsque activée, cette fonction enverra automatiquement le contenu personnalisé dans &quot;Message de rappel avec regénération de clé&quot; aux visiteurs répondant au critère.';
$lang['UAM_StuffsTitle_d'] = 'Ceci permet d\'activer un module supplémentaire UAM dans le plugin PWG Stuffs (si installé) afin d\'informer sur leur état vos visiteurs n\'ayant pas confirmé leur inscription.
<br><br>
Veuillez vous reporter à la section <b>Astuces et exemples d\'utilisation</b> en bas de cette page pour les détails.';
$lang['UAM_confirmmailTitle_d'] = 'Cette option permet soit à un utilisateur de confirmer son inscription en cliquant sur un lien reçu dans un email envoyé dès son enregistrement sur la galerie, soit à l\'administrateur d\'activer manuellement les inscriptions.<br><br>
Dans le premier cas, le message envoyé comprend une partie fixe, avec le lien d\'activation généré à partir d\'une clef aléatoire (cette clé peut éventuellement être régénérée via l\'onglet &quot;Suivi des confirmations&quot;), et une partie personnalisable par un texte d\'accueil.
<br><br>
Dans le second cas, l\'email avec lien de validation est envoyé aux administrateurs de la galerie. Les visiteurs doivent patienter qu\'un administrateur valide lui même leur inscription soit par ce lien, soit par l\'onglet &quot;Suivi des confirmations&quot;.
<br>
<b style=&quot;color: red;&quot;>NB: Les options &quot;Limitation du délai de confirmation d\'inscription&quot; et &quot;Mail de rappel aux inscrits non confirmés&quot; doivent être désactivées lorsque la confirmation manuelle est active.</b>
<br><br>
Cette option est généralement utilisée avec  l\'attribution automatique de groupe et/ou de statut. Selon qu\'il ait confirmé ou non son inscription, il est en effet possible d\'affecter à l\'utilisateur un groupe différent, avec plus ou moins de restrictions d\'accès à la galerie.';
$lang['UAM_usermanTitle_d'] = 'Lorsque la limitation du délai d\'inscription est activée, vous trouverez ci-dessous la liste des utilisateurs en attente de confirmation d\'inscription <b style=&quot;text-decoration: underline;&quot;>qu\'ils soient ou pas</b> dans les délais pour la confirmer.<br><br>La date d\'enregistrement s\'affiche en vert lorsque l\'utilisateur concerné est en dessous du temps limite pour confirmer son inscription. Dans ce cas, la clé de confirmation est toujours valide et on pourra envoyer un email avec ou sans régénération de clé.<br><br>Lorsque la date d\'enregistrement s\'affiche en rouge, le délai de confirmation est expiré. Dans ce cas, on enverra obligatoirement un email avec régénération de clé si on veut permettre à cet utilisateur de pouvoir confirmer son inscription.<br><br>Dans tous les cas, il est possible de forcer manuellement la confirmation.<br><br>Dans cette vue, vous pouvez :
<br><br>
- Supprimer manuellement les comptes <b>(purge manuelle)</b>
<br>
- Générer l\'email de rappel <b>sans génération</b> d\'une nouvelle clef. Rappel : Cette fonction ne réinitialise pas la date d\'inscription du visiteur ciblé et le délai d\'expiration est toujours d\'actualité.
<br>
- Générer l\'email de rappel <b>avec génération</b> d\'une nouvelle clef. Rappel : Cette fonction réinitialise également la date d\'inscription du visiteur ciblé ce qui équivaut à prolonger le délai de confirmation.
<br>
- Confirmer manuellement une inscription en attente de confirmation même si la date d\'expiration est révolue <b>(forçage de la confirmation)</b>.
<br><br>
<b>Fonction de tri du tableau</b>: Vous pouvez trier les données affichées en cliquant sur les entêtes de colonnes. L\'utilisation de la touche MAJ ou SHIFT permet de trier sur 1 à 4 colonnes simultanées maximum.';
$lang['UAM_validationlimitTitle_d'] = 'Cette option permet de limiter le nombre de jours pendant lequel un nouvel utilisateur peut confirmer son inscription. Une fois ce délai expiré, le lien de confirmation sera invalide, et ne pourra plus être employé.
<br><br>
Cette option n\'est utilisable qu\'une fois l\'option &quot;Confirmation d\'inscription&quot; activée.
<br><br>
Si cette option et l\'option &quot;Mail de rappel aux inscrits non confirmés&quot; sont activées, de nouvelles options apparaitront plus bas dans cette section pour permettre l\'automatisation de la gestion des visiteurs non confirmés.';
$lang['UAM_userlistTitle_d'] = 'Cette page est à titre d\'information pour l\'administrateur. Elle affiche la liste de tous les utilisateurs inscrits sur la galerie en faisant apparaitre la date et le nombre de jours depuis leur dernière visite. La liste est triée dans l\'ordre croissant du nombre de jours.
<br><br>
<b><u>Uniquement lorsque le Ghost Tracker est actif</u></b>, le nombre de jours sans visite s\'affiche selon le code couleur suivant, en fonction du délai maximum paramétré dans les options du Ghost Tracker :
<br>
- <b style=&quot;color: lime;&quot;>En vert</b> : Lorsque l\'utilisateur a visité la galerie <b style=&quot;color: lime;&quot;><u>depuis moins de 50%</u></b> du délai maximum renseigné dans le Ghost Tracker.<br>
- <b style=&quot;color: orange;&quot;>En orange</b> : Lorsque l\'utilisateur a visité la galerie <b style=&quot;color: orange;&quot;><u>entre 50% et 99%</u></b> du délai maximum renseigné dans le Ghost Tracker.<br>
- <b style=&quot;color: red;&quot;>En rouge</b> : Lorsque l\'utilisateur a visité la galerie <b style=&quot;color: red;&quot;><u>depuis 100% et plus</u></b> du délai maximum renseigné dans le Ghost Tracker. <b><u>Dans ce cas, l\'utilisateur doit également apparaitre dans le tableau du Ghost Tracker.</u></b><br>
<br>
Exemple:
<br>
Le délai maximum du Ghost Tracker est configuré à 100 jours.
<br>
Un utilisateur apparaitra en vert s\'il a visité la galerie depuis moins de 50 jours, en orange si sa dernière visite s\'est déroulée entre 50 et 99 jours et en rouge à 100 jours et au-delà.
<br><br>
<b>A NOTER</b>: La liste n\'affiche pas les inscrits qui n\'auraient pas confirmé leur inscription (si l\'option de confirmation de l\'inscription est activée). Ces utilisateurs sont alors gérés de manière particulière dans l\'onglet &quot;Suivi des confirmations&quot;.
<br><br>
<b>Fonction de tri du tableau</b>: Vous pouvez trier les données affichées en cliquant sur les entêtes de colonnes. L\'utilisation de la touche MAJ ou SHIFT permet de trier sur 1 à 4 colonnes simultanées maximum.';
$lang['UAM_Tracking registered users_d'] = 'Cette option active, dans l\'onglet &quot;Suivi des utilisateurs inscrits&quot;, un tableau recensant les utilisateurs inscrits, la date de leur dernière visite et le nombre de jours écoulés depuis leur dernière visite. Il s\'agit d\'un suivi purement informatif pour l\'administrateur de la galerie.';
// --------- End: New or revised $lang ---- from version 2.30.3


// --------- Starting below: New or revised $lang ---- from version 2.40
$lang['UAM_AdminValidationMail_Subject_d'] = 'Lorsqu\'un administrateur ou un webmestre de la galerie valide manuellement une inscription en attente, un email de notification est automatiquement envoyé à l\'utilisateur concerné. Saisissez ici un sujet personnalisé pour l\'email de validation manuelle.<br>
Par défaut, le champ comporte un texte générique en français mais vous pouvez le changer et utiliser les balises de traduction [lang=??] du plugin Extended Description s\'il est installé.
<br><br>
De plus les balises de personnalisations suivantes sont utilisables sans l\'aide du plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
';
$lang['UAM_ConfirmMail_Subject_d'] = 'Saisissez ici un sujet personnalisé pour l\'email de confirmation d\'inscription.<br>
Par défaut, le champ comporte un texte générique en français mais vous pouvez le changer et utiliser les balises de traduction [lang=??] du plugin Extended Description s\'il est installé.
<br><br>
De plus les balises de personnalisations suivantes sont utilisables sans l\'aide du plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Saisissez ici un sujet personnalisé pour l\'email de rappel de confirmation d\'inscription (avec ou sans renouvellement de clé).<br>
Par défaut, le champ comporte un texte générique en français mais vous pouvez le changer et utiliser les balises de traduction [lang=??] du plugin Extended Description s\'il est installé.
<br><br>
De plus les balises de personnalisations suivantes sont utilisables sans l\'aide du plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
';
$lang['UAM_GTReminder_Subject_d'] = 'Saisissez ici un sujet personnalisé pour l\'email de rappel du Ghost Tracker.<br>
Par défaut, le champ comporte un texte générique en français mais vous pouvez le changer et utiliser les balises de traduction [lang=??] du plugin Extended Description s\'il est installé.
<br><br>
De plus les balises de personnalisations suivantes sont utilisables sans l\'aide du plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
';
$lang['UAM_GTAutomail_Subject_d'] = 'Saisissez ici un sujet personnalisé pour l\'email de rétrogradation automatique du Ghost Tracker.<br>
Par défaut, le champ comporte un texte générique en français mais vous pouvez le changer et utiliser les balises de traduction [lang=??] du plugin Extended Description s\'il est installé.
<br><br>
De plus les balises de personnalisations suivantes sont utilisables sans l\'aide du plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
';
$lang['UAM_GTAutoMailTitle_d'] = 'Lorsqu\'un compte est expiré (changement de groupe, de statut ou de niveau de confidentialité rétrogradant le visiteur), un email d\'information peut être envoyé pour préciser les raisons de ce changement et le moyen de recouvrer l\'accès initial à la galerie.
<br>Pour ce faire, un lien de reconfirmation de l\'inscription est joint à l\'email (génération automatique d\'une nouvelle clé de confirmation). <b style=&quot;color: red;&quot;>Si l\'utilisateur a déjà été notifié, son compte est automatiquement détruit.</b> 
<br><br>
<b style=&quot;color: red;&quot;>Attention : L\'emploi de cette fonction est intimement lié à l\'option de confirmation d\'inscription par l\'utilisateur (confirmation par mail) et ne peut pas être activée sans cette option.</b>';
$lang['UAM_GTAutomail_Text_d'] = 'Saisissez ici le texte personnalisé qui expliquera les raisons de la rétrogradation et qui accompagnera le lien de confirmation. Le texte personnalisé n\'est pas obligatoire mais vivement conseillé. En effet, vos visiteurs inscrits n\'apprécieront que moyennement de recevoir un email ne contenant qu\'un simple lien sans plus d\'explications. ;-)
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_MailInfo_Subject_d'] = 'Saisissez ici un sujet personnalisé pour l\'email d\'information.<br>
Par défaut, le champ comporte un texte générique en français mais vous pouvez le changer et utiliser les balises de traduction [lang=??] du plugin Extended Description s\'il est installé.
<br><br>
De plus les balises de personnalisations suivantes sont utilisables sans l\'aide du plugin Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br>
';
// --------- End: New or revised $lang ---- from version 2.40
?>