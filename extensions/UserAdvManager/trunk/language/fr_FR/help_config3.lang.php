<?php
// GhostTracker Options section
$lang['UAM_GT_MainTitle_d'] = '
- Gestion automatique ou manuelle des visiteurs fantômes<br/>
- Mailing<br/>
...
';
$lang['UAM_ghosttrackerTitle_d'] = 'L\'activation de cette fonction permet la gestion des visiteurs inscrits en fonction de la fréquence de leurs visites. 2 modes de fonctionnements sont possibles:<br/><br/>
- Gestion manuelle : Lorsque le délai entre 2 visites successives est atteint, le visiteur apparaît dans le tableau de l\'onglet &quot;Ghost Tracker&quot; d\'où il est possible de le relancer manuellement par email ou le supprimer.<br/><br/>
- Gestion automatisée : Lorsque le délai entre 2 visites successives est atteint, le visiteur est automatiquement soit supprimé, soit basculé dans un groupe et/ou statut d\'attente. Dans ce deuxième cas, un email d\'information peut lui être envoyé.<br/><br/><br/>
<b style=&quot;color: red;&quot;>IMPORTANT : A première activation de cette fonction, ou à sa réactivation après une longue période pendant laquelle de nouveaux visiteurs se sont inscrits, il convient d\'initialiser le Ghost Tracker (voir les instructions correspondantes sur l\'onglet &quot;Ghost Tracker&quot;).</b>';
$lang['UAM_GTReminder_Subject_d'] = 'Saisissez ici un sujet personnalisé pour l\'email de rappel du Ghost Tracker.<br/>
Par défaut, le champ comporte un texte générique en français mais vous pouvez le changer et utiliser les balises de traduction [lang=??] du plugin Extended Description s\'il est installé.
<br/><br/>
De plus les balises de personnalisations suivantes sont utilisables sans l\'aide du plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
';
$lang['UAM_gttextTitle_d'] = 'Saisissez ici le texte qui apparaîtra dans l\'email de rappel pour inciter l\'utilisateur à revenir visiter votre galerie (NB: Le texte pré-renseigné à l\'installation du plugin est donné à titre d\'exemple).
<br/><br/>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.<br/>
- <b style=&quot;color: red;&quot;>[days]</b> pour insérer automatiquement le nombre de jour maximum entre deux visites.
<br/><br/>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_GTAutoTitle_d'] = 'Cette option permet d\'appliquer des règles de gestion automatisée des visiteurs fantômes.
<br/><br/>Principe de base : Un utilisateur ayant atteind la limite maximale entre deux visites <b><u>et</u></b> ayant déjà été notifié par email est considéré comme expiré. On peut alors appliquer des règles de traitement automatisées telles que la suppression automatique des comptes expirés ou leur rétrogradation en restreignant l\'accès à la galerie (bascule automatique dans un groupe et/ou un statut à accès restreint).
<br/><br/>Le déclenchement de ces automatismes se réalise lors de la connexion des utilisateurs (n\'importe quel utilisateur !)à la galerie.';
$lang['UAM_GTAutoDelTitle_d'] = 'Ceci n\'est valable que lorsque l\'utilisateur dont le compte a expiré déclenche lui même le mécanisme de suppression (cas rare mais possible). Il est alors déconnecté de force de la galerie et redirigé vers une page indiquant la suppression de son compte et, éventuellement, les raisons de cette suppression.
<br/><br/>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.<br/>
<b style=&quot;color: red;&quot;>[username]</b> n\'est pas disponible ici puisque l\'utilisateur en question a été supprimé.
<br/><br/>
Un texte personnalisé pour cette page de redirection peut être saisi dans le champ ci-dessous qui est compatible avec l\'extension FCK Editor. Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
$lang['UAM_GTAutoGpTitle_d'] = 'Le changement automatique de groupe, de statut ou de niveau de confidentialité équivaut à une rétrogradation des comptes concernés et fonctionne sur le même principe que le groupe, le statut ou le niveau de confidentialité à la confirmation (voir &quot;Paramétrage des confirmations d\'inscriptions&quot;). Il conviendra donc de définir un groupe ou un statut et/ou un niveau de confidentialité rétrogradant l\'accès à la galerie. Si cela a déjà été défini avec l\'utilisation de la fonction Confirmation d\'inscription, on peut utiliser ces mêmes groupes / statuts / niveaux.<br/><br/>
<b style=&quot;color: red;&quot;>Point important :</b> Si un utilisateur fantôme n\'a toujours pas donné signe de vie après le délai imparti et malgré la notification automatique par mail (si activée), il est automatiquement supprimé de la base de données.';
$lang['UAM_GTAutoMailTitle_d'] = 'Lorsqu\'un compte est expiré (changement de groupe, de statut ou de niveau de confidentialité rétrogradant le visiteur), un email d\'information peut être envoyé pour préciser les raisons de ce changement et le moyen de recouvrer l\'accès initial à la galerie.
<br/>Pour ce faire, un lien de reconfirmation de l\'inscription est joint à l\'email (génération automatique d\'une nouvelle clé de confirmation). <b style=&quot;color: red;&quot;>Si l\'utilisateur a déjà été notifié, son compte est automatiquement détruit.</b> 
<br/><br/>
<b style=&quot;color: red;&quot;>Attention : L\'emploi de cette fonction est intimement lié à l\'option de confirmation d\'inscription par l\'utilisateur (confirmation par mail) et ne peut pas être activée sans cette option.</b>';
$lang['UAM_GTAutomail_Subject_d'] = 'Saisissez ici un sujet personnalisé pour l\'email de rétrogradation automatique du Ghost Tracker.<br/>
Par défaut, le champ comporte un texte générique en français mais vous pouvez le changer et utiliser les balises de traduction [lang=??] du plugin Extended Description s\'il est installé.
<br/><br/>
De plus les balises de personnalisations suivantes sont utilisables sans l\'aide du plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
';
$lang['UAM_GTAutomail_Text_d'] = 'Saisissez ici le texte personnalisé qui expliquera les raisons de la rétrogradation et qui accompagnera le lien de confirmation. Le texte personnalisé n\'est pas obligatoire mais vivement conseillé. En effet, vos visiteurs inscrits n\'apprécieront que moyennement de recevoir un email ne contenant qu\'un simple lien sans plus d\'explications. ;-)
<br/><br/>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales :<br/>
- <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br/><br/>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
?>