<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2014 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['UAM_GT_MainTitle_d'] = '- Automatisch of handmatig beheer van spook bezoekers<br/>
- E-mailing<br/>
...';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Als de beheerder of Webmaster van de galerie handmatig bevestigt dat de registratie in behandeling is, wordt er automatisch een emailbericht naar de gebruiker gestuurd. Typ hier het onderwerp van je aangepaste handmatige validatie-email.<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar dat kan je veranderen. Gebruik hiervoor de vertaal-labels [lang=?] van de plugin Extended Description. Als je deze tenminste hebt geïnstalleerd.
<br/><br/>
De volgende extra labels voor aanpassingen zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> het automatisch invoegen van de naam van de bestemde gebruiker in de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>';
$lang['UAM_AddURL2Mail_d'] = 'Het activeren van deze optie voegt de URL van je galerie toe aan het eind van de emails die door de plugin worden gegenereerd. Te vergelijken met een handtekening.';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Pas hier je tekst aan om onbevestigde gebruikers uit te leggen dat ze geen verbinding kunnen maken met de galerie totdat ze hun registratie hebben bevestigd.
<br/><br/>
Dit veld is compatibel met de FCK Tekstbewerker. Als je meerdere talen nodig hebt, kan je de [lang] labels gebruiken van de plugin Extended description, als je deze hebt geactiveerd.';
$lang['UAM_RedirTitle_d'] = 'Deze optie schakelt een geregistreerde gebruiker direct door naar zijn aanpassingspagina, maar alleen bij zijn eerste verbinding met de galerie.<br/><br/>
Let op: Deze functie is niet van toepassing op alle gebruikers. Degenen met de &quot;admin&quot;, &quot;webmaster&quot; or &quot;generic&quot; status worden uitgesloten.';
$lang['UAM_HidePasswTitle_d'] = 'Kies dit als je het wachtwoord, gekozen door de bezoeker in het emailbericht, te zien wilt krijgen. Als je deze optie inschakelt zal het wachtwoord in normale tekst verschijnen. Bij uitschakeling verschijnt het wachtwoord helemaal niet.';
$lang['UAM_GTAutoDelTitle'] = 'Aangepast bericht bij een verwijderd account';
$lang['UAM_DumpTitle_d'] = 'Hiermee is het mogelijk de totale instellingen van de plugin te bewaren in een bestand, zodat je het kan herstellen als er iets mis gaat (bv. na een verkeerde handeling of voordat je een update verricht). Standaard wordt het backup-bestand opgeslagen in deze map ../plugins/UserAdvManager/include/backup/ en hij wordt genoemd &quot;UAM_dbbackup.sql&quot;.
<br/><br/>
<b style=&quot;color: red;&quot;>Waarschuwing: Het bestand wordt bij iedere backup actie overschreven! </b>
<br/><br/>
Het kan soms handig zijn het backup-bestand op je computer over te zetten. Bv. Om het in een andere database te kunnen herstellen, of om meerdere bestanden op te slaan. Om dit te doen, vink het blokje aan om het bestand te downloaden.
<br/><br/>
Het herstel middels deze koppeling is alleen beschikbaar voor een lokaal backup-bestand (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql). Een gedownload backup-bestand kan niet langs deze weg worden hersteld. Om dit voor elkaar te krijgen moet je een hiertoe aangewezen databasebeheer gereedschap gebruiken(zoals PhpMyAdmin voor MySql database).
<br/><br/>  
<b style=&quot;color: red;&quot;>Waarschuwing: Na het herstel moet je de beheerpagina van de plugin opnieuw inladen om de herstelde instellingen te kunnen zien!</b>';
$lang['UAM_CustomPasswRetrTitle_d'] = 'Standaard ontvangt een gebruiker een email met alleen zijn gebruikersnaam en een nieuw wachtwoord wanneer hij zijn wachtwoord kwijt is en de hersteloptie heeft gekozen.
<br/><br/>
Hier kan je tekst naar keuze toevoegen om ingevoegd te worden<b><u>voor</u></b>de standaard informatie.
<br/><br/>
Je kunt verder de inhoud verder aanpassen met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> het invoegen van je galerie URL als het tenminste is ingesteld in Piwigo\'s intellingen.
<br/><br/>
Om meerdere talen te gebruiken kan je de labels van de Extended Description plugin gebruiken. Als deze plugin tenminste geactiveerd is.';
$lang['UAM_AdminValidationMail_d'] = 'Als een beheerder of webmaster van de galerie handmatig bevestigt dat een registratie in behandeling is, wordt er automatisch een emailbericht naar de gebruiker verzonden. Voeg hier de tekst in voor de email.
<br/><br/>
Je kunt de inhoud verder aanpassen met speciaal ingevoegde labels:
- <br/><b style=&quot;color: red;&quot;>[username]</b> het automatisch invoegen van de naam van de bestemde gebruiker van de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> het invoegen van de galerie-URL als dit is ingesteld in Piwigo\'s instellingen.
<br/><br/>
Om meerdere talen te gebruiken kan je de labels van de Extended Description plugin gebruiken. Als deze plugin tenminste geactiveerd is.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Voeg hier het onderwerp in van je aangepaste registratie bevestiging email.<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar je kan dit veranderen en de vertalings labels [lang=?][/lang]gebruiken van de plugin Extended Description. Als je deze tenminste hebt geïnstalleerd.
<br/><br/>
De volgende extra aanpassings labels zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> het automatisch invoegen van de naam van de bestemde gebruiker van de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Voeg hier het onderwerp in van je aangepaste registratie bevestiging herinnerings email (met of zonder nieuwe sleutel aanmaak).<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar je kan dit veranderen en de vertalings labels [lang=?][/lang]gebruiken van de plugin Extended Description. Als je deze tenminste hebt geïnstalleerd.
<br/><br/>
De volgende extra aanpassings labels zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> het automatisch invoegen van de naam van de bestemde gebruiker van de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>';
$lang['UAM_tipsTitle_d'] = 'Tips en diverse voorbeelden';
$lang['UAM_restricTitle_d'] = '- Uitsluiting van lettertekens<br/>
- Uitsluiting van email domeinen<br/>
...';
$lang['UAM_remailtxt1Title'] = 'Herinneringsemail met een nieuw gegenereerde sleutel';
$lang['UAM_remailtxt2Title'] = 'Herinneringsemail zonder een nieuw gegenereerde sleutel';
$lang['UAM_confirmstatTitle'] = 'Statuten';
$lang['UAM_confirmlevelTitle'] = 'Privacy niveau';
$lang['UAM_confirmgrpTitle'] = 'Groepen';
$lang['UAM_GTAutoGpTitle_d'] = 'De automatische wijziging van een groep, status of privacy niveau is te vergelijken met een degradatie (terugzetting) van de betrokken accounts. Het werkt volgens hetzelfde principe als de bevestiging van het groeps, status of privacy niveau (zie &quot;Instellingen van registratiebevestiging&quot;). Definieer daarom een groep, status en/of niveau voor degradatie in de toegang tot de galerie. Als dit al is gedefinieerd tjidens de registratiebevestiging, dan kan je dezelfde groep, status of niveau gebruiken.<br/><br/>
<b style=&quot;color: red;&quot;>Nota Bene:</b> Als een spook bezoeker nog steeds niets heeft vernomen vanaf de tijdslimiet, en ondanks het automatische email bericht (als deze tenminste is geactiveerd), wordt hij automatisch verwijderd uit de database.';
$lang['UAM_GTAutoDelTitle_d'] = 'Dit geldt alleen als de gebruiker, van wie de account is verlopen, het verwijderingsmechanisme start (het is zeldzaam, maar wel mogelijk). Dan wordt zijn verbinding met de galerie verbroken en wordt hij doorgestuurd naar een pagina die de verwijdering van zijn account toont met, waarschijnlijk, ook de reden van verwijdering.
<br/><br/>
Aanpassen van de inhoud met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> het invoegen van je galerie URL als dit tenminste is ingesteld in de Piwigo intellingen.<br/>
<b style=&quot;color: red;&quot;>[gebruikersnaam]</b> is hier niet beschikbaar, omdat de betrokken gebruiker is verwijderd.
<br/><br/>
Aangepaste tekst voor de doorstuurpagina kan in dit tekstveld (is compatibel met de FCK Tekstverwerker) worden getypt. Voor meerdere talen kan je de labels van de plugin Extended Description gebruiken - [lang=][/lang]-, als deze geactiveerd is.';
$lang['UAM_USRAutoTitle_d'] = 'De automatische verwerking van onbevestigde bezoekers wordt, elke keer wanneer je verbinding maakt met de galerie, ingeschakeld en werkt als volgt:
<br/><br/>
- Automatische verwijdering van accounts die niet binnen de toegestane periode zijn bevestigd zonder het verzenden van een automatische emailherinnering -> &quot;Beperkte vervaldatum voor registratie bevestiging&quot; <b><u>ingeschakeld</u></b> en &quot;Herinner onbevestigde gebruikers&quot; <b><u>uitgeschakeld</u></b>.
<br/><br/>
- Automatische verzending van een emailherinnering met een nieuwe sleutel en automatische verwijdering van accounts die niet zijn bevestigd na het verzenden van de emailherinnering -> &quot;Beperkte vervaldatum voor registratiebevestiging&quot; <b><u>ingeschakeld</u></b> en &quot;Herinnering aan onbevestigde gebruikers&quot; <b><u>ingeschakeld</u></b>.';
$lang['UAM_USRAutoMailTitle_d'] = 'Als deze functie geactiveerd is zal er automatisch een  &quot;Herinneringsemail met persoonlijke inhoud worden verzonden, tezamen met een nieuw gegenereerde sleutel&quot; naar bezoekers die aan de voorwaarden voldoen.';
$lang['UAM_USRAutoDelTitle_d'] = 'Dit is alleen geldig wanneer de gebruiker van wie het account is verlopen het verwijderingsmechanisme inschakelt (zeldzaam maar desondanks mogelijk). Zijn verbinding met de galerie is dan verbroken en hij wordt doorverwezen naar een pagina die de verwijdering van zijn account laat zien. En, mogelijk ook de redenen van deze verwijdering.
<br/><br/>
Pas vervolgens de inhoud aan met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> het invoegen van je galerie URL mits dit is ingesteld in de Piwigo instellingen.
<b style=&quot;color: red;&quot;>[gebruikersnaam]</b> is niet beschikbaar hier, omdat de betrokken gebruiker is verwijderd.
<br/><br/>
Aangepaste tekst voor de doorverwijzingspagina kan in dit tekstveld (is compatibel met de FCK tekstverwerker) worden ingevoegd. Voor meerdere talen kan je de labels [lang=?][/lang] van de plugin Extended Description gebruiken als deze geactiveerd is.';
$lang['UAM_Tracking registered users_d'] = 'Dit activeert een tabel in het &quot;Opsporing van geregistreerde gebruikers&quot; tabblad waar een lijst is te vinden van geregistreerde galerie-gebruikers met de datum van hun laatste bezoek en de tijd die verstreken is sinds hun laatste bezoek (in dagen). De controle heeft alleen informatiewaarde voor de beheerder van de galerie.';
$lang['UAM_StuffsTitle_d'] = 'Dit activeert een extra UAM blok in de plugin PWG Stuffs (mits geïnstalleerd) om je bezoekers, die niet hebben bevestigd, te informeren over hun status.
<br/><br/>
Kijk voor details naar de <b>Tips en Voorbeelden</b> onderaan deze pagina.';
$lang['UAM_RejectConnexion_d'] = 'Als je deze optie hebt geactiveerd, kunnen nieuwe geregistreerde, maar nog niet bevestigde gebruikers geen verbinding met de galerie maken. Ze worden doorverwezen naar een specials pagina die hen informeert over hun status.<br/><br/>
<b style=&quot;color: red;&quot;>Waarschuwing - Deze mogelijkheid werkt alleen in samenhang met bevestigingsgroepen! Zie hieronder hoe je groepen instelt.</b>';
$lang['UAM_MailInfo_Subject_d'] = 'Voeg hier je aangepaste informatie email onderwerp in.<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar dit kan je veranderen en je kan gebruikmaken van de vertalingslabels [lang=?][/lang] van de plugin Extended Description, mits je deze hebt geïnstalleerd.
<br/><br/>
De volgende extra aanpassingslabels zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> het automatisch invoegen van de naam van de bestemmingsgebruiker van de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>';
$lang['UAM_GTReminder_Subject_d'] = 'Voeg hier je aangepaste handmatige Ghost Tracker herinneringsemail onderwerp in.<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar dit kan je veranderen en je kan gebruikmaken van de vertalingslabels [lang=?][/lang] van de plugin Extended Description, mits je deze hebt geïnstalleerd.
<br/><br/>
De volgende extra aanpassingslabels zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> het automatisch invoegen van de naam van de bestemmingsgebruiker van de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>';
$lang['UAM_GTAutomail_Text_d'] = 'Voeg de aangepaste tekst in die ook toelicht waarom een degradatie heeft plaatsgevonden. Dit zal bij de link ter bevestiging komen. De aangepaste tekst is niet verplicht maar wordt wel sterk aanbevolen. Je bezoekers zullen het niet op prijs stellen om een email te krijgen waarin alleen een link staat zonder verdere toelichting.;-)
<br/><br/>
Pas vervolgens de inhoud aan met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> het automatisch invoegen van de naam van de bestemmingsgebruiker van de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> het invoegen van je galerie URL mits dit is ingesteld in de Piwigo instellingen.
<br/><br/>
Voor meerdere talen kan je de labels van de plugin Extended Description gebruiken als deze geactiveerd is.
';
$lang['UAM_GTAutomail_Subject_d'] = 'Voeg hier je aangepaste automatische Ghost Tracker degradatie email onderwerp in.<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar dit kan je veranderen en je kan gebruikmaken van de vertalingslabels [lang=?][/lang] van de plugin Extended Description, mits je deze hebt geïnstalleerd.
<br/><br/>
De volgende extra aanpassingslabels zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> het automatisch invoegen van de naam van de bestemmingsgebruiker van de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>';
$lang['UAM_GTAutoTitle_d'] = 'Deze optie maakt het mogelijk om regels toe te passen voor automatisch beheer van spook gebruikers.<br/><br/>Basis Principe: Een gebruiker heeft de maximale periode tussen zijn bezoeken bereikt <b><u>en</u></b>is al op de hoogte gesteld via email dat hij wordt beschouwd als verlopen. Dan kan je automatische regels in werking stellen zoals automatische verwijdering van verlopen accounts of degradatie d.m.v. beperkte toegang tot de galerie (automatische verschuiving naar een groep en/of status met beperkingen).
<br/><br/>Het inschakelen van deze automatisering wordt bereikt wanneer gebruikers (dus elke gebruiker!) wordt verbonden aan de galerie.';
$lang['UAM_GTAutoMailTitle_d'] = 'Als een account is verlopen (groep/status/privacy niveau veranderen door de degradatie van de bezoeker), kan er een email verstuurd worden met uitleg over de redenen voor deze verandering en een manier om de oorspronkelijke toegang tot de galerie te herstellen.
<br/>Dit kan je doen middels een bijlage met een link naar herbevestiging van registratie in de email (automatische aanmaak van een nieuwe bevestigingssleutel). <b style=&quot;color: red;&quot;>Als de gebruiker al is geïnformeerd, zal zijn account automatisch worden verwijderd.</b> 
<br/><br/>
<b style=&quot;color: red;&quot;>Waarschuwing: Het gebruik van deze functie is nauw verbonden met de registratiebevestiging van de gebruiker (bevestiging per email) en kan niet worden geactiveerd zonder deze optie.</b>';
$lang['UAM_confirmmail_custom1_d'] = 'Als de optie &quot;Bevestiging van Registratie&quot; is geactiveerd, dan heb je met dit tekstveld de mogelijkheid om je <b><u>acceptatie tekst</u></b> op de registratie bevestigingspagina aan te passen. Deze verschijnt als de gebruiker klikt op de bevestigingslink in de email.
<br/><br/>
Nadat je de plugin hebt geïnstalleerd is er een standaard tekst als voorbeeld.
<br/><br/>
Vervolgens kan je inhoud verder aanpassen met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> het automatisch invoegen van de betrokken gebruikersnaam.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> het invoegen van de galerie URL mits je dit hebt ingesteld in de Piwigo instellingen.
<br/><br/>
Dit tekstveld is compatibel met de FCK Tekstverwerker. Voor meerdere talen kan je de labels [lang=?] [/lang] van de plugin Extended Description gebruiken als je deze hebt geactiveerd.
';
$lang['UAM_mailexcTitle_d'] = 'Standaard accepteert Piwigo alle email-adressen in het formaat xxx@yyy.zz. Het inschakelen van deze optie geeft je de mogelijkheid bepaalde domeinen met het formaat @ [domein_naam].[domein_extensie] uit te sluiten.<br/><br/>
Voorbeelden:<br/>
@hotmail.com -> uitsluiting van de adressen *@hotmail.com<br/>
@hotmail -> uitsluiting van de adressen *@hotmail*<br/><br/>
<b style=&quot;color: red;&quot;>Waarschuwing - Deze mogelijkheid werkt alleen als emails verplicht zijn voor registratie! Zie hiervoor de instellingsopties van Piwigo.</b>';
$lang['UAM_ghosttrackerTitle_d'] = 'Wordt ook &quot;Ghost Tracker&quot; genoemd. Als deze functie is geactiveerd kan je je bezoekers beheren, afhankelijk van de frequentie waarmee ze je galerie bezoeken. Er zijn 2 bewerkingsmodi beschikbaar:<br/><br/>
- Handmatig beheer: Als de periode tussen 2 bezoeken is bereikt, verschijnt de bezoeker in de &quot;Ghost Tracker&quot;-lijst. Hiervandaan kan je de bezoekers een herinnering via email sturen of hem verwijderen.<br/><br/>
- Automatisch beheer: Als de periode tussen 2 bezoeken is bereikt, wordt de bezoeker automatisch verwijderd of verplaatst naar een wachtende groep en/of status. In het tweede geval kan er een informatie per email naar hem verstuurd worden.<br/><br/>
<b style=&quot;color: red;&quot;>Belangrijk: Als je deze mogelijkheid de eerste keer inschakelt of re-activeert, na \'m een lange tijd niet gebruikt te hebben, maar waarin wel nieuwe bezoekers zich hebben geregistreerd, moet je de Ghost Tracker initialiseren of resetten (zie de bijbehorende instructies op het tabblad &quot;Ghost Tracker&quot;).</b>';
$lang['UAM_confirmtxtTitle_d'] = 'Voeg de tekst ter introductie in die je in de emailbevestiging van registratie wilt laten zien.
<br/><br/>
Vervolgens kan je inhoud verder aanpassen met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> het automatisch invoegen van de betrokken gebruikersnaam.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> het invoegen van de galerie URL mits je dit hebt ingesteld in de Piwigo instellingen.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b> het invoegen van het aantal dagen waarbinnen de registratie moet worden bevestigd (&quot;Beperking van de verloopdatum voor registratie bevestiging;&quot; moet ingeschakeld zijn).
<br/><br/>
Voor meerdere talen kan je de labels [lang=?] [/lang] van de plugin Extended Description gebruiken als je deze hebt geactiveerd.';
$lang['UAM_confirmmail_custom2_d'] = 'Als de optie &quot;Bevestiging van Registratie&quot; is geactiveerd, dan heb je met dit tekstveld de mogelijkheid om je <b><u>afwijzings tekst</u></b> op de registratie bevestigingspagina aan te passen. Deze verschijnt als de gebruiker klikt op de bevestigingslink in de email.
<br/><br/>
Nadat je de plugin hebt geïnstalleerd is er een standaard tekst als voorbeeld.
<br/><br/>
Vervolgens kan je inhoud verder aanpassen met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> het automatisch invoegen van de betrokken gebruikersnaam.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> het invoegen van de galerie URL mits je dit hebt ingesteld in de Piwigo instellingen.
<br/><br/>
Dit tekstveld is compatibel met de FCK Tekstverwerker. Voor meerdere talen kan je de labels [lang=?] [/lang] van de plugin Extended Description gebruiken als je deze hebt geactiveerd.';
$lang['UAM_miscTitle_d'] = '- Controle van geregistreerde gebruikers<br/>
- Opmerkingen bij bijnamen verplicht voor gasten<br/>
...';
$lang['UAM_infomailTitle_d'] = 'Deze optie maakt het mogelijk dat er automatisch een email met informatie wordt verzonden naar een gebruiker als deze zijn wachtwoord of zijn email-adres verandert op zijn profielpagina.<br/><br/>
De inhoud van het verzonden bericht bestaat uit een aanpasbaar gedeelte (voor een welkomst boodschap) en een vaststaand gedeelte met de inlognaam, het wachtwoord en email-adres van de gebruiker.';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>WAARSCHUWING: Het gebruik van statussen bij de bevestiging vereist dat je de &quot;Gast&quot; gebruiker in de standaard instelling voor nieuw geregistreerden hebt staan (als gebruikers sjabloon). NB Je kan elke gebruiker instellen als een sjabloon voor nieuw geregistreerden. Raadpleeg de documentatie van Piwigo voor meer informatie.
</b><br/><br/>
Statussen worden gevalideerd in samenhang met de &quot;Registratie Bevestiging&quot;';
$lang['UAM_confirmmailTitle_d'] = 'Deze optie maakt het mogelijk voor een gebruiker om zijn registratie te bevestigen via een link in de email die is verzonden na zijn registratie. Of voor beheerders om de registratie handmatig te activeren.
<br/><br/>
In het eerste geval is de email opgesteld met een aanpasbaar gedeelte voor een welkomstgroet aan het begin. Dan is er een vaststaand gedeelte dat de activeringslink bevat, gegenereerd door een willekeurige sleutel, die bovendien opnieuw geproduceerd kan worden via het tabblad &quot;Bevestigingen Volgen&quot;.
<br/><br/>
In het tweede geval wordt de validatielink gezonden naar de beheerders. Bezoekers moeten wachten tot de beheerder zelf de bevestiging verricht met de validatielink of in het tabblad &quot;Bevestigingen Volgen&quot;.
<br/>
<b style=&quot;color: red;&quot;>NB: De opties &quot;Beperkte verloopdatum voor registratiebevestiging&quot; en &quot;Herinnering onbevestigde gebruikers&quot; moeten uitgeschakeld zijn als de handmatige bevestiging door de beheerder is ingeschakeld.</b>
<br/><br/>
Deze optie wordt meestal gebruikt met de automatische toewijzing van groepen en/of statussen. Bij voorbeeld: een gebruiker die zijn registratie niet heeft bevestigd, wordt in een speciale gebruikersgroep geplaatst (met of zonder beperkingen in de galerie). Terwijl een gebruiker die zijn registratie heeft bevestigd, in een &quot;normale&quot; groep zal worden geplaatst. ';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>WAARSCHUWING: Wanneer je een privacy niveau gebruikt moet je dit bij je foto\'s hebben aangegeven. Raadpleeg de documentatie van Piwigo voor meer informatie.</b><br/><br/>
Het privacy niveau is geldig in samenhang met de &quot;Registratiebevestiging&quot;';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>WAARSCHUWING: Wanneer je een bevestiging van een groep doet, moet je tenminste een gebruikersgroep hebben aangemaakt en gedefinieerd &quot;als standaardinstelling&quot; in Piwigo\'s gebruikersgroep beheer.</b><br/><br/>';
$lang['UAM_confirmTitle_d'] = '- Genereren van email ter informatie<br/>
- Genereren van email ter bevestiging van een registratie<br/>
- Automatische samenvoeging van groepen, status of privacy niveau<br/>
- Verloopdatum voor de bevestiging van een registratie<br/>
- Genereren van email ter herinnering<br/>
...';
$lang['UAM_carexcTitle_d'] = 'Het kan nodig zijn om bepaalde lettertekens te verbieden in gebruikersnamen (bv. het weigeren van inlognamen waarin @ voorkomt). Deze optie maakt het mogelijk om lettertekens of een volgorde van lettertekens uit te sluiten.<br/>
NB: Deze optie kan ook complete woorden uitsluiten.
<br/><br/>
<b style=&quot;color: red;&quot;>Waarschuwing: Deze optie werkt niet voor gebruikers die hun naam hebben aangemaakt voordat je deze hebt ingeschakeld.</b>';
$lang['UAM_adminconfmailTitle_d'] = 'Je kunt deze bevestiging alleen uitschakelen voor gebruikersaccounts die zijn aangemaakt via Piwigo\'s gebruikersbeheer.<br/><br/>
Met de activering van deze optie wordt er een email registratiebevestiging verzonden naar elke gebruiker die is aangemaakt door de beheerder.<br/><br/>
Met de uitschakeling van deze optie (is de standaard instelling) wordt er alleen een email met informatie verzonden (mits &quot;Informatie email naar de gebruiker&quot; is ingeschakeld). Bovendien wordt de aangemaakte gebruiker standaard <b>beschouwd als gevalideerd</b>.';