<?php
global $lang;

$lang['UAM_restricTitle'] = 'Restrizioni per le iscrizzioni';
$lang['UAM_confirmTitle'] = 'Confirmazzione e validazione delle iscrizzioni';
$lang['UAM_confirmTitle_d'] = '
- Generazzione di una email d\'informazione<br>
- Generazzione di una email di conferma d\'iscrizzione<br>
- Inserimento automatico dei gruppi o statuti<br>
- Limitazzione del termine di convalida dell\'iscrizzione<br>
- Generazzione di una email di rilancio per gli utenti non convalidati<br>
...
';
$lang['UAM_miscTitle'] = 'Monitoraggio degli utenti registrati e altre opzioni';
$lang['UAM_carexcTitle'] = 'Pseudo : Esclusione di caratteri';
$lang['UAM_carexcTitle_d'] = 'Può essere interessante vietare certi caratteri per i pseudo (ad esempio: negare login contenente &quot;@&quot;). Questa opzione permette di escludere i caratteri o sequenza di caratteri.<br>NB: L\'opzione può anche escludere parole intere.
<br><br>
<b style=&quot;color: red;&quot;>Attenzione : questa opzione non ha alcun effetto sui pseudo creati prima della sua attivazione.</b>';
$lang['UAM_passwTitle'] = 'Rafforzare il livello di sicurezza delle password';
$lang['UAM_passwTitle_d'] = 'L\'attivazione di questa opzione rende obbligatorio l\'inserimento di una password al momento della registrazione, e richiede la password scelta dal visitatore di incontrare un livello minimo di complessità. Se la soglia non viene raggiunta, il punteggio conseguito e il punteggio minimo da raggiungere sono visualizzate, insieme con raccomandazioni per aumentare il valore di questa partitura.<br><br>
Un campo di prova permette di misurare la complessità di una password, e permette di avere un\'idea del punteggio da definire per personalizzare la complessità.<br><br>
Nota : Il punteggio di una password è calcolato sulla base di diversi parametri : la lunghezza, i tipi di caratteri utilizzati (lettere, numeri, lettere maiuscole, minuscole, caratteri speciali). Un punteggio inferiore a 100 è considerato basso, da 100 a 500 la complessità è nella media, oltre 500 la sicurezza è eccellente';
$lang['UAM_passwtestTitle'] = 'Provare la complessità di una password';
$lang['UAM_passwtestTitle_d'] = 'Inserire una password per testare e quindi fare clic su &quot;calcolo del punteggio&quot;, per vedere il risultato.';
$lang['UAM_passwadmTitle'] = 'Aumentare la sicurezza della password per gli amministratori';
$lang['UAM_passwadmTitle_d'] = 'Un amministratore può creare un\'pseudo con o senza l\'applicazione della regola di calcolo della complessità.<br><br>
Nota : Se l\'utente del conto creato desidera cambiare la password e il rafforzamento della password per gli utenti è attivo, sarà soggetto alla regola configurata';
$lang['UAM_mailexcTitle'] = 'Esclusione dei domini d\'email';
$lang['UAM_infomailTitle'] = 'Email d\'informazione per l\'utente';
$lang['UAM_infomailTitle_d'] = 'Questa opzione consente di automatizzare l\'invio di una email d\'informazione ad un utente al momento della registrazione o quando cambia la sua password o indirizzo email nel suo profilo<br><br>
Il contenuto del messaggio inviato è composto da una parte personalizzabile ( piccola nota di benvenuto ) e una parte fissa che indica il login, password e indirizzo di posta elettronica dell\'utente.';
$lang['UAM_infotxtTitle'] = 'Personalizzazione della email d\'informazione';
/*TODO*/$lang['UAM_confirmtxtTitle'] = 'Customizing the confirmation email';
/*TODO*/$lang['UAM_confirmgrpTitle'] = 'Validation Groups';
/*TODO*/$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>WARNING : Using validation groups requires that you have created at least one users group and is defined &quot;by default&quot; in Piwigo\'s user groups management.</b><br><br>
The groups are validated for use in conjunction with the &quot;Confirmation of registration&quot;';
/*TODO*/$lang['UAM_confirmstatTitle'] = 'Validation Statutes';
/*TODO*/$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>WARNING : The use of status validation requires that you have kept the &quot;Guest&quot; user with default setting (as user template) for new registered. Note you can set any other user as a template for new registered. Please refer to the Piwigo\'s documentation for more details.</b><br><br>
The groups are validated for use in conjunction with the &quot;Confirmation of registration&quot;';
/*TODO*/$lang['UAM_validationlimitTitle'] = 'Deadline for registration validation limited';
/*TODO*/$lang['UAM_remailTitle'] = 'Remind unvalidated users';
/*TODO*/$lang['UAM_remailtxt1Title'] = 'Reminder email with new key generated';
/*TODO*/$lang['UAM_remailtxt2Title'] = 'Reminder email without new key generated';
/*TODO*/$lang['UAM_ghosttrackerTitle'] = 'Ghost visitors management';
/*TODO*/$lang['UAM_gttextTitle'] = 'Ghost Tracker\'s reminder message';
/*TODO*/$lang['UAM_lastvisitTitle'] = 'Tracking registered users';
/*TODO*/$lang['UAM_lastvisitTitle_d'] = 'This activates a table in the &quot;Tracking users&quot; tab which are registered users listed on the gallery and the date of their last visit and time spent (in days) since their last visit. Monitoring is purely informative for the administrator of the gallery.';
/*TODO*/$lang['UAM_tipsTitle'] = 'Tips and Examples';
/*TODO*/$lang['UAM_tipsTitle_d'] = 'Tips and various examples of use';
/*TODO*/$lang['UAM_userlistTitle'] = 'Tracking users';
/*TODO*/$lang['UAM_usermanTitle'] = 'Tracking validations';
/*TODO*/$lang['UAM_gtTitle'] = 'Ghost visitors management';


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_adminconfmailTitle'] = 'Conferma della registrazione per gli amministratori';
$lang['UAM_adminconfmailTitle_d'] = '&Egrave; possibile disattivare la convalida solo per gli account utente creati dall\'amministratore tramite l\'interfaccia di gestione degli utenti Piwigo.<br><br>
Attivando questa opzione, l\'email di convalida di registrazione verr&agrave; inviata ad ogni utente creato da l\'amministratore.<br><br>
Disattivando questa opzione (di default), solo l\'email d\'informazioni viene inviata (se &quot;Email informazioni per l\'utente&quot; &egrave; abilitato).';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.0
/*TODO*/$lang['UAM_confirmmail_custom1'] = 'Texte de la page de confirmation - Confirmation acceptée';
/*TODO*/$lang['UAM_confirmmail_custom2'] = 'Texte de la page de confirmation - Confirmation rejetée';
// --------- End: New or revised $lang ---- from version 2.15.0


// --------- Starting below: New or revised $lang ---- from version 2.15.4
/*TODO*/$lang['UAM_restricTitle_d'] = '
- Caratteri vietati nei nomi degli utenti<br>
- Rafforzare il livello di sicurezza delle password<br>
- Esclusione dei domini d\'Email<br>
...
';
/*TODO*/$lang['UAM_userlistTitle_d'] = 'This page is for information to the administrator. It displays a list of all users registered on the gallery showing the date and number of days since their last visit. The list is sorted in ascending order of number of days.
<br><br>
<b><u>Only when the Ghost Tracker is active</u></b>, the number of days without a visit appears as the following color code, according to the maximum set in the Ghost Tracker options:
<br>
- <b style=&quot;color: lime;&quot;>Green</b> : When the user has visited the gallery <b style=&quot;color: lime;&quot;><u>less than 50%</u></b> of the maximum indicated in the Ghost Tracker.<br>
- <b style=&quot;color: orange;&quot;>Orange</b> : When the user has visited the gallery <b style=&quot;color: orange;&quot;><u> between 50% and 99% </u></b> of the maximum indicated in the Ghost Tracker.<br>
- <b style=&quot;color: red;&quot;>Red</b> : When the user has visited the gallery <b style=&quot;color: red;&quot;><u>for more than 100%</u></b> of the maximum indicated in the Ghost Tracker. <b><u>In this case, the user must also appear in the Ghost Tracker table.</u></b><br>
<br>
Example :
<br>
The maximum period of Ghost Tracker is configured to 100 days.
<br>
A user will appear in green if he visited the gallery for less than 50 days, in orange if his last visit took place between 50 and 99 days and red for 100 days and above.
<br><br>
<b>NOTE</b>: The list does not display who have not validated their registration (if the option of validating the registration is activated). These users are then managed in a special way in the &quot;Tracking validations&quot; tab.
<br><br>
<b>Table Sorting Function</b>: You can sort the data displayed by clicking on the column headers. Hold the SHIFT key to sort up to 4 simultaneous columns.';
/*TODO*/$lang['UAM_usermanTitle_d'] = 'When limiting the deadline for registration is enabled, you will find below the list of users whose validation registration is expected, <b style=&quot;text-decoration: underline;&quot;>whether or not</b> they are in time to validate.<br><br> The registration date is displayed in green when the user concerned is below the time limit to validate his registration. In this case, the validation key is still valid and we can send an email with or without a new validation key.<br><br> When the registration date appears in red, the validation period has expired. In this case, you must send an email with regeneration of validation key if you want to enable the user to validate their registration.<br><br> In all cases, it is possible to manually force the validation.<br><br> In this view, you can:
<br><br>
- Manually delete accounts <b>(manual drain)</b>
<br>
- Generate email reminder <b>without</b> generating a new key. Warning: Send an email reminder to targeted visitors. This function does not reset the date of registration of targeted visitors and the timeout is still valid.
<br>
- Generate email reminder <b>with</b> generating a new key. Warning : Send an email reminder to targeted visitors. This function also resets the date of registration of targeted visitors which equates to extend the deadline for validation.
<br>
- Submit a registration awaiting validation manually even if the expiry date has passed <b>(forcing validation)</b>.
<br><br>
<b>Table Sorting Function</b>: You can sort the data displayed by clicking on the column headers. Hold the SHIFT key to sort up to 4 simultaneous columns.';
/*TODO*/$lang['UAM_gtTitle_d'] = 'When Ghost Tracker is enabled and initialized, you will find below the list of registered visitors who have not returned since x days. &quot;x&quot; is the number of days configured in the General Setup tab. In addition, you will find a column indicating whether an email reminder has been sent to targeted visitors. So, you can see at a glance and treat visitors who have not taken account of the reminder.<br><br>In this view, you can:
<br><br>
- Manually delete accounts <b>(manual drain)</b>
<br>
- Generate email reminder <b>with resetting the last visit date</b>. This allows to give a wildcard to targeted visitors. If the visitor has already received a reminder, nothing prevents to resent a new mail which will reset again, in fact, the last visit date.
<br><br>
<b>Table Sorting Function</b>: You can sort the data displayed by clicking on the column headers. Hold the SHIFT key to sort up to 4 simultaneous columns.';
$lang['UAM_confirmmailTitle'] = 'Conferma della registrazione';
/*TODO*/$lang['UAM_confirmmailTitle_d'] = 'This option allows a user to either confirm registration by clicking on a link received in an email sent upon registration or the administrator to manually activate the registration.<br><br>
In first case, the e-mail is composed of a customizable part to introduce a little welcome note and a fixed part containing the activation link that is generated from a random key that can possibly regenerate through the &quot;Tracking validations&quot; tab.<br><br>
<br><br>
Dans le second cas, <b><u>il n\'y a pas d\'envoi de clé de validation par email</u></b>. Les visiteurs doivent patienter que l\'administrateur valide lui même leur inscription via l\'onglet &quot;Suivi des validations&quot;. Il est conseillé d\'activer la notification des administrateurs lors des inscriptions (voir la configuration des options de Piwigo) et d\'utiliser la fonction &quot;Email d\'information à l\'utilisateur&quot; pour avertir les nouveaux inscrits de la nécessité de patienter avant activation de leur compte.
<br>
<b style=&quot;color: red;&quot;>NB: Les options &quot;Limitation du délai de validation d\'inscription&quot; et &quot;Mail de rappel aux inscrits non validés&quot; doivent être désactivées lorsque la validation manuelle est active.</b>
<br><br>
Questa opzione &egrave; generalmente utilizzato con l\'assegnazione automatica di gruppo e / o statuto. Ad esempio, un utente che non ha convalidato la loro registrazione sar&agrave; ambientato in un gruppo specifico di utenti (con o senza le restrizioni alla galleria), mentre un utente che ha convalidato la sua registrazione &egrave; fissato in un &quot;normale&quot; del gruppo.';
/*TODO*/$lang['UAM_RedirTitle'] = 'Redirect to &quot;Customization&quot; page';
/*TODO*/$lang['UAM_RedirTitle_d'] = 'Cette option permet de rediriger automatiquement un utilisateur inscrit vers sa page de personnalisation uniquement lors de sa première connexion à la galerie.<br><br>
A savoir: Cette fonction s\'applique également à tous les utilisateurs déjà inscrits, y compris ceux disposant du status &quot;admin&quot;, &quot;webmaster&quot; ou &quot;generique&quot;.';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.15.6
/*TODO*/$lang['UAM_RedirTitle_d'] = 'This option automatically redirect a registered user to his customization page only at his first connection to the gallery.<br><br>
Please note: This feature does not apply to all registered users. Those with &quot;admin&quot;, &quot;webmaster&quot; or &quot;generic&quot; status are excluded.';
// --------- End: New or revised $lang ---- from version 2.15.6


// --------- Starting below: New or revised $lang ---- from version 2.16.0
/*TODO*/$lang['UAM_ghosttrackerTitle_d'] = 'L\'activation de cette fonction permet la gestion des visiteurs inscrits en fonction de la fréquence de leurs visites. 2 modes de fonctionnements sont possibles:<br><br>
- Gestion manuelle : Lorsque le délai entre 2 visites successives est atteint, le visiteur apparaît dans le tableau de l\'onglet &quot;Ghost Tracker&quot; d\'où il est possible de le relancer manuellement par email ou le supprimer.<br><br>
- Gestion automatisée : Lorsque le délai entre 2 visites successives est atteint, le visiteur est automatiquement soit supprimé, soit basculé dans un groupe et/ou statut d\'attente. Dans ce deuxième cas, un email d\'information peut lui être envoyé.<br><br><br>
<b style=&quot;color: red;&quot;>IMPORTANT : A première activation de cette fonction, ou à sa réactivation après une longue période pendant laquelle de nouveaux visiteurs se sont inscrits, il convient d\'initialiser le Ghost Tracker (voir les instructions correspondantes sur l\'onglet &quot;Ghost Tracker&quot;).</b>';
/*TODO*/$lang['UAM_miscTitle_d'] = '
- Gestion automatique ou manuelle des visiteurs fantômes<br>
- Suivi des visiteurs inscrits<br>
- Pseudo obligatoire sur commentaire pour les visiteurs<br>
...
';
$lang['UAM_mailexcTitle_d'] = 'Per impostazione predefinita, PhpWebGallery accetta tutti gli indirizzi di posta elettronica nel xxx@yyy.zz formato. L\'attivazione di questa opzione consente di escludere determinati domini nel formato: @[nome_dominio].[Domain_extension].<br><br>
Esempi :<br>
@hotmail.com -> esclusi gli indirizzi *@hotmail.com<br>
@hotmail -> escludendo tutti gli indirizzi *@hotmail*';
/*TODO*/$lang['UAM_GTAutoTitle'] = 'Gestion automatique des utilisateurs fantomes';
/*TODO*/$lang['UAM_GTAutoTitle_d'] = 'Cette option permet d\'appliquer des règles de gestion automatisée des visiteurs fantômes.
<br><br>Principe de base : Un utilisateur ayant atteind la limite maximale entre deux visites <b><u>et</u></b> ayant déjà été notifié par email est considéré comme expiré. On peut alors appliquer des règles de traitement automatisées telles que la suppression automatique des comptes expirés ou leur rétrogradation en restreignant l\'accès à la galerie (bascule automatique dans un groupe et/ou un statut à accès restreint).
<br><br>Le déclenchement de ces automatismes se réalise lors de la connexion des utilisateurs (n\'importe quel utilisateur !)à la galerie.';
/*TODO*/$lang['UAM_GTAutoDelTitle'] = 'Message personnalisé de suppression de compte';
/*TODO*/$lang['UAM_GTAutoGpTitle'] = 'Changement automatique de groupe / statut';
/*TODO*/$lang['UAM_GTAutoGpTitle_d'] = 'Le changement automatique de groupe ou de statut équivaut à une rétrogradation des comptes concernés et fonctionne sur le même principe que le groupe ou le statut de validation (voir &quot;Paramétrage des confirmations et validations d\'inscriptions&quot;). Il conviendra donc de définir un groupe et/ou un statut rétrogradant l\'accès à la galerie. Si cela a déjà été défini avec l\'utilisation de la fonction Confirmation d\'inscription, on peut utiliser ces mêmes groupe / statut.<br><br>
<b style=&quot;color: red;&quot;>Point important :</b> Si un utilisateur fantôme n\'a toujours pas donné signe de vie après le délai imparti et malgré la notification automatique par mail (si activée), il est automatiquement supprimé de la base de données.';
/*TODO*/$lang['UAM_GTAutoMailTitle'] = 'Email automatique sur changement de groupe / statut';
/*TODO*/$lang['UAM_AdminValidationMail'] = 'Notification de validation d\'inscription manuelle';
// --------- End: New or revised $lang ---- from version 2.16.0


// --------- Starting below: New or revised $lang ---- from version 2.20.0
/*TODO*/$lang['UAM_gttextTitle_d'] = 'Enter the text you want to appear in the email reminder to prompt the user to return to visit your gallery (NB: The text pre-filled with the installation of the plugin is provided as an example).
<br><br>
Further customize the content with special inserted tags : Use <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email. Use <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery. Use <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.
<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended Description, se esso è attivo.';
/*TODO*/$lang['UAM_infotxtTitle_d'] = 'Inserisci il testo introduttivo che si desidera visualizzare nella e-mail informazioni.
<br><br>
Further customize the content with special inserted tags : Use <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email. Use <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery. Use <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.
<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended Description, se esso è attivo.';
/*TODO*/$lang['UAM_confirmtxtTitle_d'] = 'Enter the introductory text that you want to appear in the email confirmation of registration.
<br><br>
Per utilizzare più lingue, è possibile utilizzare i tag del plugin Extended Description, se esso è attivo.
<br><br>
After installing the plugin, a standard text is set as an example.';
/*TODO*/$lang['UAM_AdminValidationMail_d'] = 'Lorsqu\'un administrateur ou un webmestre de la galerie valide manuellement une inscription en attente, un email de notification est automatiquement envoyé à l\'utilisateur concerné. Saisissez ici le texte qui apparaîtra dans cet email.
<br><br>
Further customize the content with special inserted tags : Use <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email. Use <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery. Use <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options.
<<br><br>
This field is compatible with the FCK Editor and, for multi-languages, you can use the tags [lang] of the plugin Extended description if it\'s active.';
/*TODO*/$lang['UAM_confirmmail_custom1_d'] = 'Lorsque l\'option &quot;Confirmation d\'inscription&quot; est active, ce champ permet de personnaliser <b><u>le texte d\'acceptation</u></b> de la confirmation d\'inscription sur la page affichée lorsqu\'un utilisateur clique sur le lien de confirmation qu\'il a reçu par email.
<br><br>
A l\'installation du plugin, un texte standard est donnée en exemple.
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales : Utilisez la balise <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur. Utilisez la balise <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie. Utilisez la balise <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br><br>
Ce champ est compatible avec l\'extension FCK Editor et, pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
/*TODO*/$lang['UAM_confirmmail_custom2_d'] = 'Lorsque l\'option &quot;Confirmation d\'inscription&quot; est active, ce champ permet de personnaliser <b><u>le texte de rejet</u></b> de la confirmation d\'inscription sur la page affichée lorsqu\'un utilisateur clique sur le lien de confirmation qu\'il a reçu par email.
<br><br>
A l\'installation du plugin, un texte standard est donnée en exemple.
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales : Utilisez la balise <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur. Utilisez la balise <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie. Utilisez la balise <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br><br>
Ce champ est compatible avec l\'extension FCK Editor et, pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
/*TODO*/$lang['UAM_remailtxt1Title_d'] = 'Saisissez ici le texte d\'introduction qui apparaîtra dans l\'email de rappel, accompagné d\'une nouvelle clef de validation.
<br><br>
Il est vivement conseillé de saisir un texte explicatif; à défaut, le mail de rappel ne comportera que le lien de validation. (NB : Le texte pré-renseigné à l\'installation du plugin n\'est donné qu\'à titre d\'exemple).
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales : Utilisez la balise <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email. Utilisez la balise <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie. Utilisez la balise <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
/*TODO*/$lang['UAM_remailtxt2Title_d'] = 'Saisissez ici le texte d\'introduction qui apparaîtra dans l\'email de rappel, sans nouvelle clef de validation.
<br><br>
Il est vivement conseillé de saisir un texte explicatif, afin que l\'email ne soit pas vide. (NB : Le texte pré-renseigné à l\'installation du plugin n\'est donné qu\'à titre d\'exemple).
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales : Utilisez la balise <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email. Utilisez la balise <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie. Utilisez la balise <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
/*TODO*/$lang['UAM_GTAutoDelTitle_d'] = 'Ceci n\'est valable que lorsque l\'utilisateur dont le compte a expiré déclenche lui même le mécanisme de suppression (cas rare mais possible). Il est alors déconnecté de force de la galerie et redirigé vers une page indiquant la suppression de son compte et, éventuellement, les raisons de cette suppression.
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales : Utilisez la balise <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie. Utilisez la balise <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo. La balise <b style=&quot;color: red;&quot;>[username]</b> n\'est pas disponible ici puisque l\'utilisateur en question a été supprimé.
<br><br>
Un texte personnalisé pour cette page de redirection peut être saisi dans le champ ci-dessous qui est compatible avec l\'extension FCK Editor. Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
/*TODO*/$lang['UAM_GTAutoMailTitle_d'] = 'Lorsqu\'un compte est expiré (changement de groupe / statut rétrogradant le visiteur), un email d\'information peut être envoyé pour préciser les raisons de ce changement et le moyen de recouvrer l\'accès initial à la galerie.
<br>Pour ce faire, un lien de revalidation de l\'inscription est joint à l\'email (génération automatique d\'une nouvelle clé de validation).<b style=&quot;color: red;&quot;>Si l\'utilisateur a déjà été notifié, son compte est automatiquement détruit.</b> 
<br><br>
Saisissez aussi le texte personnalisé qui expliquera les raisons de la rétrogradation et qui accompagnera le lien de validation. Le texte personnalisé n\'est pas obligatoire mais vivement conseillé. En effet, vos visiteurs inscrits n\'apprécieront que moyennement de recevoir un email ne contenant qu\'un simple lien sans plus d\'explications. ;-)
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales : Utilisez la balise <b style=&quot;color: red;&quot;>[username]</b> pour insérer automatiquement le nom de l\'utilisateur destinataire de l\'email. Utilisez la balise <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie. Utilisez la balise <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.
<br><br>
<b style=&quot;color: red;&quot;>Attention : L\'emploi de cette fonction est intimement lié à l\'option de confirmation d\'inscription par l\'utilisateur (confirmation par mail) et ne peut pas être activée sans cette option.</b>';
/*TODO*/$lang['UAM_CustomPasswRetrTitle'] = 'Personnaliser le contenu du mail sur mot de passe perdu';
/*TODO*/$lang['UAM_CustomPasswRetrTitle_d'] = 'Par défaut, lorsqu\'un utilisateur a perdu son mot de passe et qu\'il sélectionne l\'option de récupération, il reçoit un email ne contenant que son nom d\'utilisateur et son nouveau mot de passe.
<br><br>
Vous pouvez ici ajouter un texte de votre choix qui sera inséré <b><u>avant</u></b> ces informations standards.
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales : Utilisez la balise <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie. Utilisez la balise <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo.
<br><br>
Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.';
/*TODO*/$lang['UAM_validationlimitTitle_d'] = 'Cette option permet de limiter le nombre de jours pendant lequel un nouvel utilisateur peut valider son inscription. Une fois ce délai expiré, le lien de validation sera invalide, et ne pourra plus être employé.
<br><br>
Cette option n\'est utilisable qu\'une fois l\'option &quot;Confirmation d\'inscription&quot; activée.
<br><br>
Si cette option et l\'option &quot;Mail de rappel aux inscrits non validés&quot; sont activées, de nouvelles options apparaitront plus bas dans cette section pour permettre l\'automatisation de la gestion des visiteurs non validés.';
/*TODO*/$lang['UAM_remailTitle_d'] = 'Cette option permet d\'envoyer un email de rappel aux utilisateurs n\'ayant pas validé leur inscription dans les temps. Elle n\'a d\'effet qu\'une fois l\'option &quot;Confirmation d\'inscription&quot; activée.
<br><br>
2 types d\'email peuvent être envoyés : Avec ou sans régénération de la clef de validation. En fonction du cas, le contenu  des emails peut être personnalisé.
<br><br>
Reportez-vous à l\'onglet &quot;Suivi des validations&quot;.
<br><br>
Si cette option et l\'option &quot;Limitation du délai de validation d\'inscription&quot; sont activées, de nouvelles options apparaitront plus bas dans cette section pour permettre l\'automatisation de la gestion des visiteurs non validés.';
/*TODO*/$lang['UAM_USRAutoTitle'] = 'Gestion automatique des visiteurs non validés';
/*TODO*/$lang['UAM_USRAutoTitle_d'] = 'La gestion automatique des visiteurs non validés est déclenchée à chaque connexion à la galerie et fonctionne ainsi :
<br><br>
- Suppression automatique des comptes non validés dans le temps imparti sans envoi automatique de mail de relance -> &quot;Limitation du délai de validation d\'inscription&quot; <b><u>est actif</u></b> et &quot;Mail de rappel aux inscrits non validés&quot; <b><u>est inactif</u></b>.
<br><br>
- Envoi automatique d\'un message de rappel avec génération d\'une nouvelle clé de validation puis suppression automatique des comptes non validés dans le temps imparti après l\'envoi de la relance -> &quot;Limitation du délai de validation d\'inscription&quot; <b><u>est actif</u></b> et &quot;Mail de rappel aux inscrits non validés&quot; <b><u>est actif</u></b>.';
/*TODO*/$lang['UAM_USRAutoDelTitle'] = 'Message à la suppressions automatiques des comptes';
/*TODO*/$lang['UAM_USRAutoDelTitle_d'] = 'Ceci n\'est valable que lorsque l\'utilisateur dont le compte est à supprimer déclenche lui même le mécanisme de suppression (cas rare mais possible). Il est alors déconnecté de force de la galerie et redirigé vers une page indiquant la suppression de son compte et, éventuellement, les raisons de cette suppression.
<br><br>
Un texte pour cette page de redirection est donné à titre d\'exemple, ci-dessous, et peut être personnalisé. Ce champ est compatible avec le plugin FCK Editor. Pour une utilisation multi-langues, vous pouvez utiliser les balises [lang] du plugin Extended Description si celui-ci est actif.
<br><br>
Personnalisez encore plus le contenu avec les balises d\'insertion spéciales : Utilisez la balise <b style=&quot;color: red;&quot;>[mygallery]</b> pour insérer le titre de votre galerie. Utilisez la balise <b style=&quot;color: red;&quot;>[myurl]</b> pour insérer l\'URL de votre galerie si renseigné dans les options de configuration de Piwigo. La balise <b style=&quot;color: red;&quot;>[username]</b> n\'est pas disponible ici puisque l\'utilisateur en question a été supprimé.';
/*TODO*/$lang['UAM_USRAutoMailTitle'] = 'Message de rappel automatique';
/*TODO*/$lang['UAM_USRAutoMailTitle_d'] = 'Lorsque activée, cette fonction enverra automatiquement le contenu personnalisé dans &quot;Message de rappel avec regénération de clé&quot; aux visiteurs répondant au critère.';
/*TODO*/$lang['UAM_StuffsTitle'] = 'Module PWG Stuffs';
/*TODO*/$lang['UAM_StuffsTitle_d'] = 'Ceci permet d\'activer un module supplémentaire UAM dans le plugin PWG Stuffs (si installé) afin d\'informer sur leur état vos visiteurs n\'ayant pas validé leur inscription.
<br><br>
Veuillez vous reporter à la section <b>Astuces et exemples d\'utilisation</b> en bas de cette page pour les détails.';
// --------- End: New or revised $lang ---- from version 2.20.0


// --------- Starting below: New or revised $lang ---- from version 2.20.3
/*TODO*/$lang['UAM_DumpTitle'] = 'Sauvegarde de votre configuration';
/*TODO*/$lang['UAM_DumpTitle_d'] = 'Ceci vous permet de sauvegarder la configuration complète du plugin dans un fichier afin de pouvoir la restaurer en cas de problème (fausse manipulation ou avant une mise à jour, par exemple). Par défaut, le fichier est stocké dans le dossier ../plugins/UserAdvManager/include/backup/ et se nomme &quot;UAM_dbbackup.sql&quot;.
<br><br>
<b style=&quot;color: red;&quot;>Attention : Le fichier est écrasé à chaque action de sauvegarde !</b>
<br><br>
Il peut être parfois utile de récupérer le fichier de sauvegarde sur votre ordinateur. Par exemple : Pour une restauration sur une autre base de données, pour externaliser la sauvegarder ou pour conserver plusieurs fichiers. Pour cela, il suffit de cocher la case correspondante au téléchargement du fichier.
<br><br>
La restauration à partir de cette interface n\'est pas prise en charge. Utilisez des outils comme PhpMyAdmin.';
// --------- End: New or revised $lang ---- from version 2.20.3


// --------- Starting below: New or revised $lang ---- from version 2.20.4
/*TODO*/$lang['UAM_HidePasswTitle'] = 'Mot de passe en clair dans le mail d\'information';
/*TODO*/$lang['UAM_HidePasswTitle_d'] = 'Choisissez ici si vous souhaitez faire afficher le mot de passe choisi par le visiteur dans le mail d\'information. Si vous activez l\'option, le mot de passe apparaitra alors en clair. Si vous la désactivez, le mot de passe n\'apparaitra pas du tout.';
// --------- End: New or revised $lang ---- from version 2.20.4
?>