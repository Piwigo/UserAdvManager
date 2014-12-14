<?php
// GhostTracker Tab
$lang['UAM_gtTitle_d'] = 'Als Ghost Tracker is ingeschakeld en geïnitialiseerd, dan vind je hier een lijst met geregistreerde bezoekers die sinds x dagen niet zijn terug geweest. &quot;x&quot; is het aantal dagen dat is ingesteld in het tabblad Algemene Instellingen. Bovendien zie je een kolom waarin staat of er een emailherinnering is verzonden naar deze bezoekers. Je ziet dus direct de bezoekers die geen aandacht hebben gegeven aan de herinnering.<br/><br/>In dit scherm kan je:
<br/><br/>
- Handmatig accounts verwijderen<b>(handmatige verwijdering)</b>
<br/>
- Een emailherinnering genereren<b>met een reset van de laatste bezoekdatum</b>. Hiermee geef je een \'joker\' aan de beoogde bezoeker. Als de bezoeker al een emailherinnering heeft gehad kan je toch een nieuwe email sturen waarin de datum van het laatste bezoek opnieuw wordt ingesteld.
<br/><br/>
<b>Tabel Sorteerfunctie</b>:Je kan de data sorteren door op de kolom-kop te klikken. Houdt de SHIFT-toets vast om tot 4 gelijktijdige kolommen te sorteren. ';


// Userlist tab
$lang['UAM_userlistTitle_d'] = 'Dit is een informatiepagina voor de beheerder. Het toont een lijst met alle geregistreerde gebruikers naar datum en het aantal dagen sinds hun laatste bezoek. De lijst is gesorteerd in een oplopend aantal dagen.
<br/><br/>
<b><u>Alleen bij een ingeschakelde Ghost Tracker</u></b> verschijnt het aantal niet bezochte dagen in de onderstaande code, afhankelijk van het maximum dat je hebt ingesteld in de Ghost Tracker instellingen:
<br/>
- <b style=&quot;color: lime;&quot;>Groen</b> : Als de bezoeker de galerie <b style=&quot;color: lime;&quot;><u>minder dan 50%</u></b> van het maximum heeft bezocht,  zoals aangegeven in de Ghost Tracker.<br/>
- <b style=&quot;color: orange;&quot;>Oranje</b> : Als de bezoeker de galerie <b style=&quot;color: lime;&quot;><u>tussen de 50% en 99%</u></b> van het maximum heeft bezocht, zoals aangegeven in de Ghost Tracker.<br/>
- <b style=&quot;color: red;&quot;>Rood</b> : Als de bezoeker de galerie <b style=&quot;color: lime;&quot;><u>meer dan 100%</u></b> van het maximum heeft bezocht,  zoals aangegeven in de Ghost Tracker.<br/>. <b><u>In dit geval moet de gebruiker ook in de Ghost Tracker tabel voorkomen.</u></b><br/>
<br/>
Voorbeeld:
<br/>
In Ghost Tracker is de maximale periode ingesteld op 100 dagen.
<br/>
Een gebruiker verschijnt in het groen als hij de galerie minder dan 50 dagen heeft bezocht, in het oranje als zijn laatste bezoek tussen 50 en 99 dagen plaatsvond en in het rood als hij hier 100 of meer dagen was.
<br/><br/>
<b>NOTA BENE</b>: In de lijst staan niet de degenen die hun registratie niet hebben bevestigd (mits de optie voor registratiebevestiging is ingeschakeld). Deze gebruikers worden beheerd op een aparte manier in het tabblad &quot;Controle van Bevestigingen&quot;
<br/><br/>
<b>Tabel Sortering</b>: Je kan de data sorteren door op de kolom-koppen te klikken. Als je de SHIFT-toets ingedrukt houdt kan je tot 4 kolommen tegelijk sorteren.';


// UserManagement tab
$lang['UAM_usermanTitle_d'] = 'Als de termijnbeperking voor registratie is ingeschakeld, vind je hieronder een lijst van gebruikers van wie een registratiebevestiging wordt verwacht, of ze<b style=&quot;text-decoration: underline;&quot;> al dan niet</b> op tijd bevestigen.
<br/><br/>
De registratiedatum wordt in het groen getoond als de gebruiker binnen zijn termijn van registratiebevestiging zit. In dit geval is de bevestigingssleutel nog steeds geldig en kan je een email sturen met of zonder een nieuwe bevestigingssleutel.<br/><br/>
Als de registratiedatum in het rood verschijnt, is de bevestigingstermijn verlopen. In dit geval moet je een email sturen met een hernieuwde bevestigingssleutel als je de gebruiker in de gelegenheid wilt stellen om zijn registratie te bevestigen.<br/><br/>
Je kunt in alle gevallen handmatig de bevestiging afdwingen.<br/><br/>
Hier kan je:
<br/><br/>
- Handmatig accounts verwijderen <b>(handmatige verwijdering)</b>
<br/>
- Een emailherinnering genereren <b>zonder</b> een nieuwe sleutel. Waarschuwing: Stuur alleen een email naar de betrokken gebruikers. Deze functie herstelt niet de registratiedatum van de betrokken gebruikers en de verloopdatum geldt nog steeds.
<br/>
- Een emailherinnering genereren <b>met</b> een nieuwe sleutel. Waarschuwing: Stuur alleen een email naar de betrokken gebruikers. Deze functie herstelt tevens de registratiedatum van de betrokken gebruikers en de verloopdatum voor de bevestiging wordt verlengd.
<br/>
- Een registratie in afwachting van bevestiging handmatig versturen zelfs als de verloopdatum is gepasseerd <b>(bevestiging afdwingen)</b>.
<br/><br/>
<b>Tabel Sorteer Functie</b>: je kan de data sorteren door op de kolom-koppen te klikken. Houdt de SHIFT-toets vast om 4 kolommen gelijktijdig te sorteren. ';
?>