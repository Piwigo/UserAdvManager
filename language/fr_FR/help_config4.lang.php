<?php
// Misc Options section
$lang['UAM_miscTitle_d'] = '
- Suivi des visiteurs inscrits<br/>
- Pseudo obligatoire sur commentaire pour les visiteurs<br/>
...
';
$lang['UAM_Admins_Copy_d'] = 'En activant cette option, tous les administrateurs de la galerie seront en copie de <b style=&quot;color: red;&quot;>tous les emails</b> envoyés par le plugin. Permet de vérifier que les emails sont bien envoyés et de conserver une copie en cas de litige. Par exemple, lors d\'une validation d\'inscription ou de relance.<br/><br/>Les sujets de emails en copie sont préfixés par <b style=&quot;color: green;&quot;>&quot;[Admins Copy] - &quot;</b>';
$lang['UAM_infomailTitle_d'] = 'Cette option permet d\'automatiser l\'envoi d\'un email d\'information à un utilisateur lorsqu\'il modifie son mot de passe ou son adresse de messagerie dans son profil.<br/><br/>
Le message envoyé comprend une partie fixe (login, mot de passe et adresse email de l\'utilisateur) et une partie personnalisable par un texte d\'accueil.';
$lang['UAM_HidePasswTitle_d'] = 'Choisissez ici si vous souhaitez faire afficher le mot de passe choisi par le visiteur dans le mail d\'information. Si vous activez l\'option, le mot de passe apparaitra alors en clair. Si vous la désactivez, le mot de passe n\'apparaitra pas du tout.';
$lang['UAM_MailInfo_Subject_d'] = 'Saisissez ici un sujet personnalisé pour l\'email d\'information.<br/>
Par défaut, le champ comporte un texte générique en français mais vous pouvez le changer et utiliser les balises de traduction [lang=??] du plugin Extended Description s\'il est installé.
<br/><br/>
De plus les balises de personnalisations suivantes sont utilisables sans l\'aide du plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
';
$lang['UAM_infotxtTitle_d'] = 'Saisissez ici le texte d\'introduction personnalisé qui apparaîtra dans l\'email d\'information.
<br/><br/>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br/><br/>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_AddURL2Mail_d'] = 'L\'activation de cette option ajoutera l\'URL de votre galerie à la fin des emails générés par le plugin, à la manière d\'une signature.';
$lang['UAM_Tracking registered users_d'] = 'Cette option active, dans l\'onglet &quot;Suivi des utilisateurs inscrits&quot;, un tableau recensant les utilisateurs inscrits, la date de leur dernière visite et le nombre de jours écoulés depuis leur dernière visite. Il s\'agit d\'un suivi purement informatif pour l\'administrateur de la galerie.';
$lang['UAM_RedirTitle_d'] = 'Cette option permet de rediriger automatiquement un utilisateur inscrit vers sa page de personnalisation uniquement lors de sa première connexion à la galerie.<br/><br/>
A savoir: Cette fonction ne s\'applique pas à tous les utilisateurs déjà inscrits. Ceux disposant du status &quot;admin&quot;, &quot;webmaster&quot; ou &quot;generique&quot; sont exclus de la règle.';
$lang['UAM_CustomPasswRetrTitle_d'] = 'Par défaut, lorsqu\'un utilisateur a perdu son mot de passe et qu\'il sélectionne l\'option de récupération, il reçoit un email ne contenant que son nom d\'utilisateur et son nouveau mot de passe.
<br/><br/>
Vous pouvez ici ajouter un texte de votre choix qui sera inséré <b><u>avant</u></b> ces informations standards.
<br/><br/>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br/><br/>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
?>