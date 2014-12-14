<?php
// Registration options section
$lang['UAM_restricTitle_d'] = '
- Exclusion de caractères dans les noms d\'utilisateurs<br/>
- Renforcement des mots de passe<br/>
- Exclusion des domaines de messagerie<br/>
...
';
$lang['UAM_carexcTitle_d'] = 'Il peut être intéressant d\'interdire certains caractères dans les noms d\'utilisateurs (exemple : refuser les logins contenant un @). Cette option permet d\'exclure les caractères, ou suite de caractères, indésirables.<br/>NB: l\'option permet également d\'exclure des mots complets.
<br/><br/>
<b style=&quot;color: red;&quot;>Attention : Cette option est sans effet sur les noms d\'utilisateurs créés préalablement à son activation.</b>';
$lang['UAM_mailexcTitle_d'] = 'Par défaut, Piwigo accepte toutes les adresses de messagerie au format xxx@yyy.zz. L\'activation de cette option permet d\'exclure certains domaines selon le format : @[nom_du_domaine].[extension_du_domaine].<br/><br/>
Exemples :<br/>
@hotmail.com -> exclusion des adresses *@hotmail.com<br/>
@hotmail -> exclusion de toutes les adresses *@hotmail*<br/><br/>
<b style=&quot;color: red;&quot;>Attention ! Cette fonction n\'est accessible que si les emails sont obligatoires pour les inscriptions ! Reportez-vous aux options de configuration de Piwigo.';

?>