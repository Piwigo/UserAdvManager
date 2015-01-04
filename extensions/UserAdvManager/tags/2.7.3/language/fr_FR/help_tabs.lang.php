<?php
// GhostTracker Tab
$lang['UAM_gtTitle_d'] = 'Lorsque la gestion des visiteurs fantômes est activée et initialisée, vous trouverez ci-dessous la liste des visiteurs inscrits sur votre galerie et qui ne sont pas revenus depuis x jours. &quot;x&quot; étant le nombre de jours paramétrés dans l\'onglet de configuration générale. De plus, vous trouverez une colonne précisant si un mail de rappel a déjà été envoyé aux visiteurs ciblés, vous permettant de visualiser d\'un coup d\'oeil et traiter les visiteurs qui n\'auraient pas tenu compte du rappel.<br/><br/>Dans cette vue, vous pouvez :
<br/><br/>
- Supprimer manuellement les comptes <b>(purge manuelle)</b>
<br/>
- Générer l\'email de rappel <b>avec réinitialisation de la date de dernière visite</b>. Ce qui permet de donner un &quot;joker&quot; au visiteur ciblé. Si le visiteur a déjà bénéficié d\'un mail de rappel, rien n\'empêche de renvoyer un nouveau mail qui réinitialisera, de fait, la date de dernière visite.
<br/><br/>
<b>Fonction de tri du tableau</b>: Vous pouvez trier les données affichées en cliquant sur les entêtes de colonnes. L\'utilisation de la touche MAJ ou SHIFT permet de trier sur 1 à 4 colonnes simultanées maximum.';


// Userlist tab
$lang['UAM_userlistTitle_d'] = 'Cette page est à titre d\'information pour l\'administrateur. Elle affiche la liste de tous les utilisateurs inscrits sur la galerie en faisant apparaitre la date et le nombre de jours depuis leur dernière visite. La liste est triée dans l\'ordre croissant du nombre de jours.
<br/><br/>
<b><u>Uniquement lorsque le Ghost Tracker est actif</u></b>, le nombre de jours sans visite s\'affiche selon le code couleur suivant, en fonction du délai maximum paramétré dans les options du Ghost Tracker :
<br/>
- <b style=&quot;color: lime;&quot;>En vert</b> : Lorsque l\'utilisateur a visité la galerie <b style=&quot;color: lime;&quot;><u>depuis moins de 50%</u></b> du délai maximum renseigné dans le Ghost Tracker.<br/>
- <b style=&quot;color: orange;&quot;>En orange</b> : Lorsque l\'utilisateur a visité la galerie <b style=&quot;color: orange;&quot;><u>entre 50% et 99%</u></b> du délai maximum renseigné dans le Ghost Tracker.<br/>
- <b style=&quot;color: red;&quot;>En rouge</b> : Lorsque l\'utilisateur a visité la galerie <b style=&quot;color: red;&quot;><u>depuis 100% et plus</u></b> du délai maximum renseigné dans le Ghost Tracker. <b><u>Dans ce cas, l\'utilisateur doit également apparaitre dans le tableau du Ghost Tracker.</u></b><br/>
<br/>
Exemple:
<br/>
Le délai maximum du Ghost Tracker est configuré à 100 jours.
<br/>
Un utilisateur apparaitra en vert s\'il a visité la galerie depuis moins de 50 jours, en orange si sa dernière visite s\'est déroulée entre 50 et 99 jours et en rouge à 100 jours et au-delà.
<br/><br/>
<b>A NOTER</b>: La liste n\'affiche pas les inscrits qui n\'auraient pas confirmé leur inscription (si l\'option de confirmation de l\'inscription est activée). Ces utilisateurs sont alors gérés de manière particulière dans l\'onglet &quot;Suivi des confirmations&quot;.
<br/><br/>
<b>Fonction de tri du tableau</b>: Vous pouvez trier les données affichées en cliquant sur les entêtes de colonnes. L\'utilisation de la touche MAJ ou SHIFT permet de trier sur 1 à 4 colonnes simultanées maximum.';


// UserManagement tab
$lang['UAM_usermanTitle_d'] = 'Lorsque la limitation du délai d\'inscription est activée, vous trouverez ci-dessous la liste des utilisateurs en attente de confirmation d\'inscription <b style=&quot;text-decoration: underline;&quot;>qu\'ils soient ou pas</b> dans les délais pour la confirmer.<br/><br/>La date d\'enregistrement s\'affiche en vert lorsque l\'utilisateur concerné est en dessous du temps limite pour confirmer son inscription. Dans ce cas, la clé de confirmation est toujours valide et on pourra envoyer un email avec ou sans régénération de clé.<br/><br/>Lorsque la date d\'enregistrement s\'affiche en rouge, le délai de confirmation est expiré. Dans ce cas, on enverra obligatoirement un email avec régénération de clé si on veut permettre à cet utilisateur de pouvoir confirmer son inscription.<br/><br/>Dans tous les cas, il est possible de forcer manuellement la confirmation.<br/><br/>Dans cette vue, vous pouvez :
<br/><br/>
- Supprimer manuellement les comptes <b>(purge manuelle)</b>
<br/>
- Générer l\'email de rappel <b>sans génération</b> d\'une nouvelle clef. Rappel : Cette fonction ne réinitialise pas la date d\'inscription du visiteur ciblé et le délai d\'expiration est toujours d\'actualité.
<br/>
- Générer l\'email de rappel <b>avec génération</b> d\'une nouvelle clef. Rappel : Cette fonction réinitialise également la date d\'inscription du visiteur ciblé ce qui équivaut à prolonger le délai de confirmation.
<br/>
- Confirmer manuellement une inscription en attente de confirmation même si la date d\'expiration est révolue <b>(forçage de la confirmation)</b>.
<br/><br/>
<b>Fonction de tri du tableau</b>: Vous pouvez trier les données affichées en cliquant sur les entêtes de colonnes. L\'utilisation de la touche MAJ ou SHIFT permet de trier sur 1 à 4 colonnes simultanées maximum.';

?>