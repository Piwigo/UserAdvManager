<?php
// ConfirmMail options section
$lang['UAM_confirmTitle_d'] = '- Genereren van email ter informatie<br/>
- Genereren van email ter bevestiging van een registratie<br/>
- Automatische samenvoeging van groepen, status of privacy niveau<br/>
- Termijn voor de bevestiging van een registratie<br/>
- Genereren van email ter herinnering<br/>
...';
$lang['UAM_StuffsTitle_d'] = 'Dit activeert een extra UAM blok in de plugin PWG Stuffs (mits geïnstalleerd) om je bezoekers, die niet hebben bevestigd, te informeren over hun status.
<br/><br/>
Kijk voor details naar de <b>Tips en Voorbeelden</b> onderaan deze pagina.';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Als de beheerder of webmaster van de galerie handmatig bevestigt dat de registratie in behandeling is, wordt er automatisch een emailbericht naar de gebruiker gestuurd. Typ hier het onderwerp van je aangepaste handmatige validatie-email.<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar dat kan je veranderen. Gebruik hiervoor de vertaal-labels [lang=?][/lang] van de plugin Extended Description. Mits je deze hebt geïnstalleerd.
<br/><br/>
De volgende extra labels voor aanpassingen zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de naam van de bestemde gebruiker in de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> invoegen van je galerietitel.<br/>';
$lang['UAM_AdminValidationMail_d'] = 'Als een beheerder of webmaster van de galerie handmatig bevestigt dat een registratie in behandeling is, wordt er automatisch een emailbericht naar de gebruiker verzonden. Voeg hier de tekst in voor de email.
<br/><br/>
Je kunt de inhoud verder aanpassen met speciaal ingevoegde labels:
- <br/><b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de naam van de bestemde gebruiker van de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> invoegen van je galerietitel.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> invoegen van de galerie-URL mits dit is ingesteld in Piwigo\'s instellingen.
<br/><br/>
Om meerdere talen te gebruiken kan je de labels van de plugin Extended Description gebruiken. Als deze plugin tenminste geactiveerd is.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Voeg hier het onderwerp in van je aangepaste registratie emailbevestiging.<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar je kan dit veranderen en de taal-labels [lang=?][/lang]gebruiken van de plugin Extended Description. Als je deze tenminste hebt geïnstalleerd.
<br/><br/>
De volgende extra aanpassings-labels zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de naam van de bestemde gebruiker van de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>invoegen van je galerietitel.<br/>';
$lang['UAM_confirmtxtTitle_d'] = 'Voeg de introductietekst in die je in de emailbevestiging van registratie wilt tonen.
<br/><br/>
Vervolgens kan je inhoud aanpassen met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de betrokken gebruikersnaam.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>invoegen van je galerietitel.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b>invoegen van de galerie URL mits je dit hebt ingesteld in de Piwigo instellingen.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b>invoegen van het aantal dagen waarbinnen de registratie moet worden bevestigd (&quot;Beperking van de termijn voor registratie bevestiging;&quot; moet ingeschakeld zijn).
<br/><br/>
Voor meerdere talen kan je de labels [lang=?][/lang] van de plugin Extended Description gebruiken als je deze hebt geactiveerd.';
$lang['UAM_RejectConnexion_d'] = 'Als je deze optie hebt geactiveerd, kunnen nieuwe geregistreerde, maar nog niet bevestigde gebruikers geen verbinding met de galerie maken. Ze worden doorverwezen naar een speciale pagina die hen informeert over hun status.<br/><br/>
<b style=&quot;color: red;&quot;>Waarschuwing - Deze mogelijkheid werkt alleen in samenhang met bevestigingsgroepen! Zie hieronder hoe je groepen instelt.</b>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Pas hier je tekst aan om onbevestigde gebruikers uit te leggen dat ze geen verbinding kunnen maken met de galerie totdat ze hun registratie hebben bevestigd.
<br/><br/>
Dit veld is compatibel met de FCK Tekstbewerker. Als je meerdere talen nodig hebt, kan je de [lang] labels gebruiken van de plugin Extended Description, als je deze hebt geactiveerd.';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>WAARSCHUWING: Het gebruik van statussen bij de bevestiging vereist dat je de &quot;Gast&quot; gebruiker in de standaard instelling voor nieuw geregistreerden hebt staan (als gebruikers sjabloon). NB. Je kan elke gebruiker instellen als een sjabloon voor nieuw geregistreerden. Raadpleeg de documentatie van Piwigo voor meer informatie.
</b><br/><br/>
Statussen worden gevalideerd in samenhang met de &quot;Bevestiging van Registratie&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>WAARSCHUWING: Wanneer je een privacy niveau gebruikt moet je dit bij je foto\'s hebben aangegeven. Raadpleeg de documentatie van Piwigo voor meer informatie.</b><br/><br/>
Het privacy niveau is geldig in samenhang met de &quot;Bevestiging van Registratie&quot;';
$lang['UAM_validationlimitTitle_d'] = 'Deze optie maakt het mogelijk om de geldigheid van de bevestigingssleutel in de email voor nieuw geregistreerden te beperken. Bezoekers die zich registreren hebben x dagen de tijd om hun registratie te bevestigen. Na deze periode zal de bevestigingslink verlopen.
<br/><br/>
Deze optie hangt samen met de &quot;Bevestiging van Registratie&quot;
<br/><br/>
Als deze optie en ook de optie &quot;Herinner onbevestigde gebruikers&quot; is geactiveerd, verschijnen er nieuwe opties hieronder om de automatisering in te schakelen van het beheer van onbevestigde gebruikers.';
$lang['UAM_remailtxt1Title_d'] = 'Voeg je eigen introductietekst in de emailherinnering met de opnieuw gegenereerde bevestigingssleutel.
<br/><br/>
Als je dit veld leeg laat zal de emailherinnering alleen de bevestigingslink bevatten. Het wordt sterk aanbevolen om een kleine tekstuitleg in te voegen. (NB. De vooraf ingevulde tekst is bedoeld als voorbeeld)
<br/><br/>
Vervolgens kan je de inhoud aanpassen met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de naam van de bestemde gebruiker.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>invoegen van je galerietitel.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b>invoegen van de URL van je galerie, mits je deze hebt ingesteld in Piwigo\'s instellingen.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b>invoegen van het aantal dagen om de registratie te bevestigen. (&quot;Beperkte Termijn voor registratiebevestiging;&quot; moet zijn ingeschakeld).
<br/><br/>
Voor meerdere talen kan je de labels van de plugin Extended Description gebruiken als deze is geactiveerd.';
$lang['UAM_remailtxt2Title_d'] = 'Voeg je eigen introductietekst in de emailherinnering zonder de opnieuw gegenereerde bevestigingssleutel.
<br/><br/>
Als je dit veld leeg laat zal de emailherinnering geen inhoud bevatten. Het wordt sterk aanbevolen om een kleine tekstuitleg in te voegen. (NB. De vooraf ingevulde tekst is bedoeld als voorbeeld)
<br/><br/>
Vervolgens kan je de inhoud aanpassen met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de naam van de bestemde gebruiker.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>invoegen van je galerietitel.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b>invoegen van de URL van je galerie, mits je deze hebt ingesteld in Piwigo\'s instellingen.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b>invoegen van het aantal dagen om de registratie te bevestigen. (&quot;Beperkte Termijn voor registratiebevestiging;&quot; moet zijn ingeschakeld).
<br/><br/>
Voor meerdere talen kan je de labels van de plugin Extended Description gebruiken als deze is geactiveerd.';
?>