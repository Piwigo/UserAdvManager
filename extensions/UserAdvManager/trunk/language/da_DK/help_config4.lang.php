<?php
// Misc Options section
$lang['UAM_miscTitle_d'] = '- Overvågning af registrerede brugere<br>
- Kaldenavn (nickname) obligatorisk ved gæstekommentarer<br>
...';
$lang['UAM_infomailTitle_d'] = 'Denne valgmulighed gør at det muligt at automatisere udsendelse af informationsmail til en bruger, når denne ændrer sin adgangskode eller mailadresse på sin profilside.<br><br>
Indholdet af meddelelsen, der sendes, består af en del der kan tilpasses til at komme med en lille velkomst, samt en fast del som oplyser om brugerens loginnavn, adgangskode og mailadresse.';
$lang['UAM_HidePasswTitle_d'] = 'Her vælges hvorvidt du ønsker at vise den besøgendes valgte adgangskode i informationsmailen. Hvis valgmuligheden aktiveres, vil adgangskoden dermed blive vist i klar tekst. Hvis deaktiveret, vil adgangskoden slet ikke blive vist.';
$lang['UAM_MailInfo_Subject_d'] = 'Her skrives emnet på den automatiske Ghost Tracker-informationsmail.<br>
Som standard indeholder feltet en generisk tekst på engelsk, men du kan ændre den samt anvende oversættelsestags [lang =?] fra plugin\'en Extended Description, hvis den er installeret.
<br><br>
Følgende yderligere tilpasningstags er tilgængelige uden brug af plugin\'en Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af navnet på modtageren af mailen.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af titlen på dit galleri.<br>';
$lang['UAM_infotxtTitle_d'] = 'Skriv introduktionsteksten, som medtages i mailen vedrørende registreringsbekræftelse.
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af den pågældende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til indsættelse af dit galleris URL, hvis opsat i Piwigos opsætningsvalgmuligheder.
<br><br>
Ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_AddURL2Mail_d'] = 'Aktivering af denne valgmulighed, tilføjer dit galleris URL i slutningen af mails, der genereres af plugin\'en, som en signatur.';
$lang['UAM_Tracking registered users_d'] = 'Dette aktiverer en tabel på fanen &quot;Sporing af registrerede brugere&quot;, som opremser registrerede brugere af galleriet med datoen for deres seneste besøg og den tid, der er gået (i dage) siden deres seneste besøg. Overvågningen er udelukkende til information til galleriets administratorer.';
$lang['UAM_RedirTitle_d'] = 'Denne valgmulighed omdirigerer kun automatisk en registreret bruger til dennes tilpasningsside, ved det første login til galleriet.<br><br>
Bemærk: Funktionen gælder ikke alle registrerede brugere. Dem med status som &quot;admin&quot;, &quot;webmaster&quot; eller &quot;generic&quot; påvirkes ikke.';
$lang['UAM_CustomPasswRetrTitle_d'] = 'Som standard, når en bruger har mistet sin adgangskode og vælger at få den genskabt, modtager vedkommende en e-mail indeholdende kun brugernavn og adgangskode.
<br><br>
Her kan du tilføje valgfri tekst, som indsættes <b><u>før</u></b> standardoplysningerne.
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> for at indsætte navnet på dit galleri.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> for at indsætte dit galleris URL, hvis defineret i Piwigos opsætning.
<br><br>
For at benytte flere sprog, kan du anvende tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
?>