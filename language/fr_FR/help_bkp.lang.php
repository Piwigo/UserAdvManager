<?php
// Backup and tips Options section
$lang['UAM_DumpTitle_d'] = 'Ceci vous permet de sauvegarder la configuration complète du plugin dans un fichier afin de pouvoir la restaurer en cas de problème (fausse manipulation ou avant une mise à jour, par exemple). Par défaut, le fichier est stocké dans le dossier ../plugins/UserAdvManager/include/backup/ et se nomme &quot;UAM_dbbackup.sql&quot;.
<br/><br/>
<b style=&quot;color: red;&quot;>Attention : Le fichier est écrasé à chaque action de sauvegarde !</b>
<br/><br/>
Il peut être parfois utile de récupérer le fichier de sauvegarde sur votre ordinateur. Par exemple : Pour une restauration sur une autre base de données, pour externaliser la sauvegarder ou pour conserver plusieurs fichiers. Pour cela, il suffit de cocher la case correspondante au téléchargement du fichier.
<br/><br/>
La restauration à partir de cette interface ne prend en charge que la sauvegarde effectuée localement (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql). Il n\'est pas possible, ici, de réinjecter un fichier de sauvegarde téléchargé. Pour cela, veuillez utiliser l\'outil de gestion de votre base de données (pour MySql, on trouvera généralement PhpMyAdmin).
<br/><br/>
<b style=&quot;color: red;&quot;>Attention : Après la restauration, il est nécessaire de recharger la page d\'administration du plugin pour voir les paramètres restaurés !</b>';
$lang['UAM_tipsTitle_d'] = 'Astuces et exemples divers d\'utilisation';
?>