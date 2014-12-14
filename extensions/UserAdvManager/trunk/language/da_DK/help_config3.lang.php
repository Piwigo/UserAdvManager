<?php
// GhostTracker Options section
$lang['UAM_GT_MainTitle_d'] = '- Automatisk eller manuel håndtering af spøgelsesbrugere<br>
- Mailing<br>
...';
$lang['UAM_ghosttrackerTitle_d'] = 'Også kaldet &quot;Ghost Tracker&quot;, når funktionen er aktiveret, kan du håndtere dine besøgende afhængigt af besøgshyppigheden. Der er to funktionsmetoder:<br><br>
- Manuel håndtering: Når tiden mellem to besøg er nået, vil den besøgende blive vist i &quot;Ghost Tracker&quot;-tabellen, hvor du kan påminde brugeren via mail eller slette vedkommende.<br><br>
- Automatisk håndtering: Når tiden mellem to på hinanden følgende besøg er nået, vil den besøgende automatisk blive slettet eller flyttet til en ventegruppe og/eller -status. I det andet tilfælde vil en informationsmail blive sendt til vedkommende.<br><br>
<b style=&quot;color: red;&quot;>Vigtig bemærkning: Hvis du aktiverer funktionen for første gang eller genaktiverer den efter en længere deaktivering, hvor nye brugere har registreret sig, skal du initialisere eller nulstille Ghost Tracker (se vejledning derom på &quot;Ghost Tracker&quot;-fanen).</b>';
$lang['UAM_GTReminder_Subject_d'] = 'Her skrives emnet på den automatiske Ghost Tracker-påmindelsesmail.<br>
Som standard indeholder feltet en generisk tekst på engelsk, men du kan ændre den samt anvende oversættelsestags [lang =?] fra plugin\'en Extended Description, hvis den er installeret.
<br><br>
Følgende yderligere tilpasningstags er tilgængelige uden brug af plugin\'en Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af navnet på modtageren af mailen.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af titlen på dit galleri.<br>';
$lang['UAM_gttextTitle_d'] = 'Skriv teksten, der skal vises i mailpåmindelsen, for at få brugeren til at vende tilbage til dit galleri. (Bemærk: Teksten forudfyldes under installeringen med et eksempel.)
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af den pågældende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til indsættelse af dit galleris URL, hvis opsat i Piwigos opsætningsvalgmuligheder.
- <b style=&quot;color: red;&quot;>[days]</b> til indsættelse af det maksimale antal dage mellem to besøg.

<br><br>
Ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_GTAutoTitle_d'] = 'Valgmuligheden gør det muligt at iværksætte regler til automatisk håndtering af spøgelsesbrugere.
<br><br>Grundlæggende princip: En bruger der når den maksimale tid mellem besøg <b><u>og</u></b> allerede er blevet påmindet via mail, betragtes som udløbet. Du kan iværksætte automatiserede behandlingsregler så som automatisk sletning af udløbne konti eller nedgradering ved at begrænse adgangen til galleriet (autmatisk skift til en begrænsende gruppe og/eller status).
<br><br>Aktiveringen af automatikkerne opnås ved at en (hvilken som helst) bruger logger på galleriet.';
$lang['UAM_GTAutoDelTitle_d'] = 'Det er kun gyldigt når en bruger, hvis konto er udløbet, af sig selv iværksætter sletningsmekanismen (sjældent, men muligt).  Vedkommende sendes væk fra galleriet til en side, som viser sletningen af kontoen samt, måske, sletningsårsagen.
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> indsætter titlen på dit galleri.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> indsætter dit galleris URL, hvis det er opsat i Piwigos opsætningsvalgmuligheder.<br>
<b style=&quot;color: red;&quot;>[username]</b> er ikke tilgængeligt her, fordi brugeren er blevet slettet.
<br><br>
Tilpassset tekst til omdirigeringssiden kan skrives feltet, som er kompatibelt med FCK Editor og, ved flere sprog, kan man anvendes [lang]-tags fra plugin\'en Extended Description, hvis denne er aktiv.';
$lang['UAM_GTAutoGpTitle_d'] = 'Den automatiske ændring af gruppe, status eller privatlivsniveau svarer til en nedgradering af de involverede konti og arbejder efter samme princip som bekræftedes gruppe, status eller privatlivsniveau (se &quot;Opsætning af registreringsbekræftelse&quot;). Dvs. at der defineres en gruppe. status og/eller niveau som nedgraderer adgangen til galleriet. Hvis det allerede er opsat med brug af funktionen til registreringsbekræftelser, kan du anvende samme gruppe/status/niveau.<br><br>
<b style=&quot;color: red;&quot;>Vigtigt:</b> Hvis en spøgelsesbruger stadig ikke har ladet høre fra sig efter tidsbegrænsningen og på trods af automatisk mailnotifikation (hvis aktiveret), vil vedkommende automatisk blive slettet fra databasen.';
$lang['UAM_GTAutoMailTitle_d'] = 'Når en konto sættes til at udløbe (ændring af gruppe/status/privatlivsniveau som nedgraderer den besøgende), vil en informationsmail blive sendt for at klarlægge årsagerne til ændringen og som en måde hvorved den indledende adgang til galleriet kan genskabes.
<br>For at gøre dette muligt indeholder mailen et link til genregistreringsbekræftelse (automatisk generering af ny bekræftelsesnøgle).<b style=&quot;color: red;&quot;>Hvis brugeren allerede er blevet påmindet, vil kontoen automatisk blive nedlagt.</b> 
<br><br>
<b style=&quot;color: red;&quot;>Advarsel: Anvendelse af funktionen hænger tæt sammen med brugeres registreringsbekræftelser (mailbekræftelse) og kan ikke aktiveres uden denne valgmulighed.</b>';
$lang['UAM_GTAutomail_Subject_d'] = 'Her skrives emnet på den automatiske Ghost Tracker-nedgraderingsmail.<br>
Som standard indeholder feltet en generisk tekst på engelsk, men du kan ændre den samt anvende oversættelsestags [lang =?] fra plugin\'en Extended Description, hvis den er installeret.
<br><br>
Følgende yderligere tilpasningstags er tilgængelige uden brug af plugin\'en Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af navnet på modtageren af mailen.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af titlen på dit galleri.<br>';
$lang['UAM_GTAutomail_Text_d'] = 'Skriv en tilpasset tekst, som forklarer årsagerne til nedgraderingen; den følger med bekræftelseslinket.  Den tilpassede tekst er ikke et krav, men anbefales kraftigt.  Faktisk vil dine besøgende ikke være glade for at modtage en mail, som blot indeholder et enkelt link uden yderligere forklaring. ;-)
<br><br>
Yderligere tilpasning af indholdet med særlige, indsætte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af navnet på mailens modtager.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af titlen på dit galleri.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til indsættelse af dit galleris URL, hvis opsat i Piwigos opsætningsvalgmuligheder.
<br><br>
For at anvende flere sprog, kan kan anvende tags fra plugin\'en Extended Description, hvis den er aktiv.';
?>