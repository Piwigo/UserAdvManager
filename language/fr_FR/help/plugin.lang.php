<?php
global $lang;

$lang['UAM_restricTitle'] = 'Restriction des inscriptions';
$lang['UAM_confirmTitle'] = 'Confirmation et validation des inscriptions';
$lang['UAM_confirmTitle_d'] = '
- Génération d\'email d\'information<br>
- Génération d\'email de confirmation d\'inscription<br>
- Affectation automatique de groupe ou statut<br>
- Limitation du délai de validation<br>
- Génération d\'email de rappel<br>
...
';
$lang['UAM_miscTitle'] = 'Suivi des inscrits et fonctions diverses';
$lang['UAM_miscTitle_d'] = '
- Gestion des visiteurs fantômes<br>
- Suivi des visiteurs inscrits<br>
- Pseudo obligatoire sur commentaire pour les visiteurs<br>
...
';
$lang['UAM_casenTitle'] = 'Noms d\'utilisateurs : Sensibilité à la casse';
$lang['UAM_carexcTitle'] = 'Noms d\'utilisateurs : Exclusion de certains caractères';
$lang['UAM_carexcTitle_d'] = 'Il peut être intéressant d\'interdire certains caractères dans les noms d\'utilisateurs (exemple : refuser les logins contenant un &quot;@&quot;). Cette option permet d\'exclure les caractères, ou suite de caractères, indésirables.<br>NB: l\'option permet également d\'exclure des mots complets.
<br><br>
<b style=&quot;color: red;&quot;>Attention : Cette option est sans effet sur les noms d\'utilisateurs créés préalablement à son activation.</b>';
$lang['UAM_passwTitle'] = 'Renforcement de la sécurité des mots de passe';
$lang['UAM_passwTitle_d'] = 'L\'activation de cette option rend obligatoire la saisie d\'un mot de passe  à l\'inscription, et oblige le mot de passe choisi par le visiteur à répondre à un niveau minimum de complexité. Si ce seuil n\'est pas atteint, le score réalisé et le score minimum à atteindre sont affichés, ainsi que des recommandations pour augmenter la valeur de ce score.<br><br>
Un champ de test permet de mesurer la complexité d\'un mot de passe, et peut permettre de se faire une idée du score à définir pour une complexité personnalisée.<br><br>
NB: Le score d\'un mot de passe est calculé en fonction de plusieurs paramètres : longueur, types de caractères utilisés (lettres, chiffres, majuscules, minuscules, caractères spéciaux). Un score inférieur à 100 est considéré comme faible; de 100 à 500, la complexité est dans la moyenne; au-delà de 500, la sécurité est excellente.';
$lang['UAM_passwtestTitle'] = 'Tester la complexité d\'un mot de passe';
$lang['UAM_passwtestTitle_d'] = 'Saisir le mot de passe à tester puis cliquer sur le bouton &quot;Calcul du score&quot; pour afficher le résultat.';
$lang['UAM_passwadmTitle'] = 'Renforcement des mots de passe pour les admins';
$lang['UAM_passwadmTitle_d'] = 'Un administrateur peut créer un compte d\'utilisateur avec ou sans application de la règle de calcul de complexité.<br><br>
A noter : Si l\'utilisateur du compte ainsi créé désire changer de mot de passe et que le renforcement des mots de passe pour les utilisateurs est actif, il sera soumis à la règle configurée.';
$lang['UAM_mailexcTitle'] = 'Exclusion des domaines de messagerie';
$lang['UAM_mailexcTitle_d'] = 'Par défaut, Piwigo accepte toutes les adresses de messagerie au format xxx@yyy.zz. L\'activation de cette option permet d\'exclure certains domaines selon le format : @[nom_du_domaine].[extension_du_domaine].<br><br>
Exemples :<br>
@hotmail.com -> exclusion des adresses *@hotmail.com<br>
@hotmail -> exclusion de toutes les adresses *@hotmail*';
$lang['UAM_infomailTitle'] = 'Email d\'information';
$lang['UAM_infomailTitle_d'] = 'Cette option permet d\'automatiser l\'envoi d\'un email d\'information à un utilisateur lorsqu\'il s\'inscrit ou modifie son mot de passe ou son adresse de messagerie dans son profil.<br><br>
Le message envoyé comprend une partie fixe (login, mot de passe et adresse email de l\'utilisateur) et une partie personnalisable par un texte d\'accueil.';
$lang['UAM_infotxtTitle'] = 'Personnalisation de l\'email d\'information';
$lang['UAM_infotxtTitle_d'] = 'Saisissez ici le texte d\'introduction personnalisé qui apparaîtra dans l\'email d\'information.<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.<br><br>
<b style=&quot;color: red;&quot;>La modification du texte n\'est possible QUE si l\'option &quot;Email d\'information&quot; est activée.</b>';
$lang['UAM_confirmtxtTitle'] = 'Personnalisation de l\'email de confirmation';
$lang['UAM_confirmtxtTitle_d'] = 'Saisissez ici le texte d\'introduction qui apparaîtra dans l\'email de confirmation d\'inscription.<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.<br><br>
<b style=&quot;color: red;&quot;>La modification du texte n\'est possible QUE si l\'option &quot;Confirmation d\'inscription&quot; est activée.</b>';
$lang['UAM_confirmgrpTitle'] = 'Groupes de validation';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>ATTENTION : L\'utilisation des groupes de validation nécessite que vous ayez créé au moins un groupe d\'utilisateurs et qu\'il soit défini &quot;par défaut&quot; dans la gestion des groupes d\'utilisateurs de Piwigo.</b><br><br>
Les groupes de validation sont à utiliser conjointement avec l\'option &quot;Confirmation d\'inscription&quot;';
$lang['UAM_confirmstatTitle'] = 'Statuts de validation';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>ATTENTION : L\'utilisation des statuts de validation nécessite que vous ayez conservé l\'utilisateur &quot;Guest&quot; pour le paramétrage par défaut (modèle) pour les nouveaux inscrits. A noter : Vous pouvez définir n\'importe quel autre utilisateur comme modèle pour les nouveaux inscrits. Reportez-vous à la documentation de Piwigo pour plus de détails.</b><br><br>
Les statuts de validation sont à utiliser conjointement avec l\'option &quot;Confirmation d\'inscription&quot;';
$lang['UAM_validationlimitTitle'] = 'Limitation du délai de validation d\'inscription';
$lang['UAM_validationlimitTitle_d'] = 'Cette option permet de limiter le nombre de jours pendant lequel un nouvel utilisateur peut valider son inscription. Une fois ce délai expiré, le lien de validation sera invalide, et ne pourra plus être employé.
<br><br>
Cette option n\'est utilisable qu\'une fois l\'option &quot;Confirmation d\'inscription&quot; activée';
$lang['UAM_remailTitle'] = 'Mail de rappel aux inscrits non validés';
$lang['UAM_remailTitle_d'] = 'Cette option permet d\'envoyer un email de rappel aux utilisateurs n\'ayant pas validé leur inscription dans les temps. Elle n\'a d\'effet qu\'une fois l\'option &quot;Confirmation d\'inscription&quot; activée.<br><br>
2 types d\'email peuvent être envoyés : Avec ou sans régénération de la clef de validation. En fonction du cas, le contenu  des emails peut être personnalisé.<br><br>
Reportez-vous à l\'onglet &quot;Suivi des validations&quot;.';
$lang['UAM_remailtxt1Title'] = 'Message de rappel avec regénération de clé';
$lang['UAM_remailtxt1Title_d'] = 'Saisissez ici le texte d\'introduction qui apparaîtra dans l\'email de rappel, accompagné d\'une nouvelle clef de validation.<br><br>
Il est vivement conseillé de saisir un texte explicatif; à défaut, le mail de rappel ne comportera que le lien de validation. (NB : Le texte pré-renseigné à l\'installation du plugin n\'est donné qu\'à titre d\'exemple)<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.<br><br>
<b style=&quot;color: red;&quot;>La modification du texte n\'est possible QUE si l\'option &quot;Mail de rappel aux inscrits non validés&quot; est activée.</b>';
$lang['UAM_remailtxt2Title'] = 'Message de rappel sans regénération de clé';
$lang['UAM_remailtxt2Title_d'] = 'Saisissez ici le texte d\'introduction qui apparaîtra dans l\'email de rappel, sans nouvelle clef de validation .<br><br>
Il est vivement conseillé de saisir un texte explicatif, afin que l\'email ne soit pas vide. (NB : Le texte pré-renseigné à l\'installation du plugin n\'est donné qu\'à titre d\'exemple)<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.<br><br>
<b style=&quot;color: red;&quot;>La modification du texte n\'est possible QUE si l\'option &quot;Mail de rappel aux inscrits non validés&quot; est activée.</b>';
$lang['UAM_ghosttrackerTitle'] = 'Gestion des visiteurs fantômes (aussi appelée Ghost Tracker)';
$lang['UAM_ghosttrackerTitle_d'] = 'L\'activation de cette fonction permet la gestion des visiteurs inscrits en fonction de la fréquence de leurs visites. Une fois atteint le délai entre 2 visites successives, le visiteur apparaît dans le tableau de l\'onglet &quot;Ghost Tracker&quot; d\'où il est possible de le relancer par email.<br><br>
<b style=&quot;color: red;&quot;>IMPORTANT : A première activation de cette fonction, ou à sa réactivation après une longue période pendant laquelle de nouveaux visiteurs se sont inscrits, il convient d\'initialiser le Ghost Tracker (voir les instructions correspondantes sur l\'onglet &quot;Ghost Tracker&quot;).</b>';
$lang['UAM_gttextTitle'] = 'Message de rappel Ghost Tracker';
$lang['UAM_gttextTitle_d'] = 'Saisissez ici le texte qui apparaîtra dans l\'email de rappel pour inciter l\'utilisateur à revenir visiter votre galerie (NB: Le texte pré-renseigné à l\'installation du plugin est donné à titre d\'exemple).<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.<br><br>
<b style=&quot;color: red;&quot;>La modification du texte n\'est possible QUE si l\'option &quot;Gestion des visiteurs fantômes&quot; est activée.</b>';
$lang['UAM_lastvisitTitle'] = 'Suivi des utilisateurs inscrits';
$lang['UAM_lastvisitTitle_d'] = 'Cette option active, dans l\'onglet &quot;Suivi des utilisateurs&quot;, un tableau recensant les utilisateurs inscrits, la date de leur dernière visite et le nombre de jours écoulés depuis leur dernière visite. Il s\'agit d\'un suivi purement informatif pour l\'administrateur de la galerie.';
$lang['UAM_commentTitle'] = 'Commentaires : pseudo obligatoire pour les non-inscrits.';
$lang['UAM_commentTitle_d'] = 'Lorsque les visiteurs non inscrits sont autorisés à poster des commentaires (&quot;Commentaires pour tous&quot; actif), cette option oblige le visiteur non inscrit à saisir un pseudo pour que le commentaire soit accepté.';
$lang['UAM_tipsTitle'] = 'Astuces et exemples';
$lang['UAM_tipsTitle_d'] = 'Astuces et exemples divers d\'utilisation';
$lang['UAM_userlistTitle'] = 'Suivi des utilisateurs inscrits';
$lang['UAM_usermanTitle'] = 'Suivi des validations';
$lang['UAM_gtTitle'] = 'Gestion des visiteurs fantômes';


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_adminconfmailTitle'] = 'Validation d\'inscription pour les admins';
$lang['UAM_adminconfmailTitle_d'] = 'On peut ici désactiver la validation des inscriptions uniquement pour les comptes d\'utilisateurs créés par l\'administrateur via l\'interface de gestion des utilisateurs de Piwigo.<br><br>
En activant cette option, l\'email de validation d\'inscription sera envoyé à chaque utilisateur créé par l\'admin.<br><br>
En désactivant cette option (mode par défaut), seul l\'email d\'information est envoyé (si la fonction &quot;Email d\'information &agrave; l\'utilisateur&quot; est activée).';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.0
$lang['UAM_confirmmail_custom1'] = 'Texte de la page de confirmation - Confirmation acceptée';
$lang['UAM_confirmmail_custom1_d'] = 'Lorsque l\'option &quot;Confirmation d\'inscription&quot; est active, ce champ permet de personnaliser <b><u>le texte d\'acceptation</u></b> de la confirmation d\'inscription sur la page affichée lorsqu\'un utilisateur clique sur le lien de confirmation qu\'il a reçu par email.<br><br>
A l\'installation du plugin, un texte standard est donnée en exemple.<br><br>
Ce champ est compatible avec l\'extension FCK Editor et, pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.<br><br>
<b style=&quot;color: red;&quot;>La modification du texte n\'est possible QUE si l\'option &quot;Confirmation d\'inscription&quot; est activée.</b>';
$lang['UAM_confirmmail_custom2'] = 'Texte de la page de confirmation - Confirmation rejetée';
$lang['UAM_confirmmail_custom2_d'] = 'Lorsque l\'option &quot;Confirmation d\'inscription&quot; est active, ce champ permet de personnaliser <b><u>le texte de rejet</u></b> de la confirmation d\'inscription sur la page affichée lorsqu\'un utilisateur clique sur le lien de confirmation qu\'il a reçu par email.<br><br>
A l\'installation du plugin, un texte standard est donnée en exemple.<br><br>
Ce champ est compatible avec l\'extension FCK Editor et, pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.<br><br>
<b style=&quot;color: red;&quot;>La modification du texte n\'est possible QUE si l\'option &quot;Confirmation d\'inscription&quot; est activée.</b>';
// --------- End: New or revised $lang ---- from version 2.15.0


// --------- Starting below: New or revised $lang ---- from version 2.15.2
$lang['UAM_casenTitle_d'] = 'Par défaut, Piwigo est sensible à la casse : majuscules et minuscules sont considérées comme des lettres différentes dans les noms choisis par les utilisateurs à l\'inscription. Ainsi, &quot;Toto&quot;,  &quot;toto&quot; et &quot;TOTO&quot; peuvent être 3 utilisateurs différents.<br><br>
L\'activation de cette option permet de considérer toutes les versions de casse de &quot;toto&quot; comme un seul utilisateur. Si &quot;toto&quot; existe déjà, la création d\'un nouvel utilisateur &quot;ToTo&quot; sera refusée.<br><br>
<b style=&quot;color: red;&quot;>Attention : Cette option est sans effet sur les noms d\'utilisateurs créés préalablement à son activation.</b>';
// --------- End: New or revised $lang ---- from version 2.15.2


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_restricTitle_d'] = '
- Exclusion de caractères dans les noms d\'utilisateurs<br>
- Renforcement des mots de passe<br>
- Exclusion des domaines de messagerie<br>
...
';
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
<b>A NOTER</b>: La liste n\'affiche pas les inscrits qui n\'auraient pas validé leur inscription (si l\'option de validation de l\'inscription est activée). Ces utilisateurs sont alors gérés de manière particulière dans l\'onglet &quot;Suivi des validations&quot;.
<br><br>
<b>Fonction de tri du tableau</b>: Vous pouvez trier les données affichées en cliquant sur les entêtes de colonnes. L\'utilisation de la touche MAJ ou SHIFT permet de trier sur 1 à 4 colonnes simultanées maximum.';
$lang['UAM_usermanTitle_d'] = 'Lorsque la limitation du délai d\'inscription est activée, vous trouverez ci-dessous la liste des utilisateurs en attente de validation d\'inscription <b style=&quot;text-decoration: underline;&quot;>qu\'ils soient ou pas</b> dans les délais pour la valider.<br><br>La date d\'enregistrement s\'affiche en vert lorsque l\'utilisateur concerné est en dessous du temps limite pour valider son inscription. Dans ce cas, la clé de validation est toujours valide et on pourra envoyer un email avec ou sans régénération de clé.<br><br>Lorsque la date d\'enregistrement s\'affiche en rouge, le délai de validation est expiré. Dans ce cas, on enverra obligatoirement un email avec régénération de clé si on veut permettre à cet utilisateur de pouvoir valider son inscription.<br><br>Dans tous les cas, il est possible de forcer manuellement la validation.<br><br>Dans cette vue, vous pouvez :
<br><br>
- Supprimer manuellement les comptes <b>(purge manuelle)</b>
<br>
- Générer l\'email de rappel <b>sans génération</b> d\'une nouvelle clef. Rappel : Cette fonction ne réinitialise pas la date d\'inscription du visiteur ciblé et le délai d\'expiration est toujours d\'actualité.
<br>
- Générer l\'email de rappel <b>avec génération</b> d\'une nouvelle clef. Rappel : Cette fonction réinitialise également la date d\'inscription du visiteur ciblé ce qui équivaut à prolonger le délai de validation.
<br>
- Valider manuellement une inscription en attente de validation même si la date d\'expiration est révolue <b>(forçage de la validation)</b>.
<br><br>
<b>Fonction de tri du tableau</b>: Vous pouvez trier les données affichées en cliquant sur les entêtes de colonnes. L\'utilisation de la touche MAJ ou SHIFT permet de trier sur 1 à 4 colonnes simultanées maximum.';
$lang['UAM_gtTitle_d'] = 'Lorsque la gestion des visiteurs fantômes est activée et initialisée, vous trouverez ci-dessous la liste des visiteurs inscrits sur votre galerie et qui ne sont pas revenus depuis x jours. &quot;x&quot; étant le nombre de jours paramétrés dans l\'onglet de configuration générale. De plus, vous trouverez une colonne précisant si un mail de rappel a déjà été envoyé aux visiteurs ciblés, vous permettant de visualiser d\'un coup d\'oeil et traiter les visiteurs qui n\'auraient pas tenu compte du rappel.<br><br>Dans cette vue, vous pouvez :
<br><br>
- Supprimer manuellement les comptes <b>(purge manuelle)</b>
<br>
- Générer l\'email de rappel <b>avec réinitialisation de la date de dernière visite</b>. Ce qui permet de donner un &quot;joker&quot; au visiteur ciblé. Si le visiteur a déjà bénéficié d\'un mail de rappel, rien n\'empêche de renvoyer un nouveau mail qui réinitialisera, de fait, la date de dernière visite.
<br><br>
<b>Fonction de tri du tableau</b>: Vous pouvez trier les données affichées en cliquant sur les entêtes de colonnes. L\'utilisation de la touche MAJ ou SHIFT permet de trier sur 1 à 4 colonnes simultanées maximum.';
$lang['UAM_confirmmailTitle'] = 'Confirmation d\'inscription';
$lang['UAM_confirmmailTitle_d'] = 'Cette option permet soit à un utilisateur de valider son inscription en cliquant sur un lien reçu dans un email envoyé dès son enregistrement sur la galerie soit à l\'administrateur d\'activer manuellement les inscriptions.<br><br>
Dans le premier cas, le message envoyé comprend une partie fixe, avec le lien d\'activation généré à partir d\'une clef aléatoire (cette clé peut éventuellement être régénérée via l\'onglet &quot;Suivi des validations&quot;), et une partie personnalisable par un texte d\'accueil.
<br><br>
Dans le second cas, <b><u>il n\'y a pas d\'envoi de clé de validation par email</u></b>. Les visiteurs doivent patienter que l\'administrateur valide lui même leur inscription via l\'onglet &quot;Suivi des validations&quot;. Il est conseillé d\'activer la notification des administrateurs lors des inscriptions (voir la configuration des options de Piwigo) et d\'utiliser la fonction &quot;Email d\'information à l\'utilisateur&quot; pour avertir les nouveaux inscrits de la nécessité de patienter avant activation de leur compte.
<br>
<b style=&quot;color: red;&quot;>NB: Les options &quot;Limitation du délai de validation d\'inscription&quot; et &quot;Mail de rappel aux inscrits non validés&quot; doivent être désactivées lorsque la validation manuelle est active.</b>
<br><br>
Cette option est généralement utilisée avec  l\'attribution automatique de groupe et/ou de statut. Selon qu\'il a validé ou non son inscription, il est en effet possible d\'affecter à l\'utilisateur un groupe différent, avec plus ou moins de restrictions d\'accès à la galerie.';
$lang['UAM_RedirTitle'] = 'Redirection vers la page &quot;Personnalisation&quot;';
$lang['UAM_RedirTitle_d'] = 'Cette option permet de rediriger automatiquement un utilisateur inscrit vers sa page de personnalisation uniquement lors de sa première connexion à la galerie.<br><br>
A savoir: Cette fonction s\'applique également à tous les utilisateurs déjà inscrits, y compris ceux disposant du status &quot;admin&quot;, &quot;webmaster&quot; ou &quot;generique&quot;.';
// --------- End: New or revised $lang ---- from version 2.15.4
?>