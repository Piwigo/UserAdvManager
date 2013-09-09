<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2012 Piwigo Team                  http://piwigo.org |
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
$lang['UAM_remailtxt1Title'] = 'Påmindelsesmail med nygenereret nøgle';
$lang['UAM_remailtxt2Title'] = 'Påmindelsesmail uden nygenereret nøgle';
$lang['UAM_tipsTitle_d'] = 'Tips og forskellige eksempler på brug';
$lang['UAM_USRAutoMailTitle_d'] = 'Når den er aktiveret, vil denne funktio automatisk sende persontilpasset indhold i &quot;Påmindelsesmail med nygenereret nøgle&quot; til besøgende som opfylder kriteriet.';
$lang['UAM_confirmgrpTitle'] = 'Grupper';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>ADVARSEL: Anvendelse af grupper ved bekræftelse kræver at du har oprettet mindst en brugergruppe, som er defineret &quot;som standard&quot; i Piwigos håndtering af brugergrupper.</b><br><br>
Grupperne godkendes til brug i forbindelse med &quot;Bekræftelse af registrering&quot;';
$lang['UAM_confirmlevelTitle'] = 'Privatlivsniveau';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>ADVARSEL: Anvendelse af privatlivsniveau kræver at du har benyttet dem sammen med dine billeder. Se Piwigos dokumentation for flere oplysninger.</b><br><br>
Privatlivsniveauet godkendes til brug i forbindelse med  &quot;Bekræftelse af registrering&quot;';
$lang['UAM_confirmstatTitle'] = 'Statusser';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>ADVARSEL: Anvendelse af statusser ved bekræftelse af registering, kræver at du har beholdt standardindstillinger for brugeren &quot;Guest&quot; (&quot;Gæst&quot;) (som brugerskabelon) til nye registreringer. Bemærk at du kan opsætte enhver anden bruger som skabelon til nye registreringer. Se Piwigos dokumentation for flere oplysninger.</b><br><br>
Stausserne godkendes til brug i forbindelse med  &quot;Bekræftelse af registrering&quot;';
$lang['UAM_GTAutoDelTitle'] = 'Tilpasset meddelelse ved slettet konto';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Når en administrator eller webmaster i galleriet manuelt bekræfter en afventende registrering, bliver der automatisk sendt en notifikationsmail til brugeren. Her skriver man sit tilpassede emne til brug i mailen om manuel godkendelse.<br>
Som standard har feltet en genrisk tekst på engelsk, men du kan ændre den samt benytte oversættelsestags [lang=?] fra plugin\'en Extended Description, hvis den er installeret.
<br><br>
Følgende yderligere tilpasningstags er tilgængelige uden brug af plugin\'en Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af brugernavnet i mailen.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af navnet på dit galleri.<br>';
$lang['UAM_AdminValidationMail_d'] = 'Når en administrator eller webmaster i galleriet manuelt bekræfter en afventende registrering, bliver der automatisk sendt en notifikationsmail til brugeren. Her man den tekst som bruges i mailen.
<br><br>
Yderligere tilpasning af indholdet kan indsættes med særlige tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af brugernavnet i mailen.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af navnet på dit galleri.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til indsættelse af URL\'en pegende på dit galleri, hvis defineret i Piwigos opsætning.
<br><br>
For at benytte flere sprog, kan du anvende tags fra plugin\'en Extended Description, såfremt den er aktiv.';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Skriv her dit tilpassede emne på den e-mail, der sendes som påmindelse om bekræftelse af registrering (med eller uden generering af ny nøgle).<br>
Som standard indeholder feltet en generisk tekst på engelsk, men du kan ændre den samt benytte oversættelsestags [lang=?], if plugin\'en Extended Description er installeret.
<br><br>
Følgende yderligere tilpasningstags er tilgængelige uden brug af plugin\'en Extended Description plugin:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af brugernavnet på mailens modtager.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af navnet på dit galleri.<br>';
$lang['UAM_ConfirmMail_Subject_d'] = 'Skriv her dit tilpassede emne på den e-mail, der sendes som påmindelse om bekræftelse af registrering.<br>
Som standard indeholder feltet en generisk tekst på engelsk, men du kan ændre den samt benytte oversættelsestags [lang=?], if plugin\'en Extended Description er installeret.
<br><br>
Følgende yderligere tilpasningstags er tilgængelige uden brug af plugin\'en Extended Description plugin:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af brugernavnet på mailens modtager.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af navnet på dit galleri.<br>
';
$lang['UAM_miscTitle_d'] = '- Overvågning af registrerede brugere<br>
- Kaldenavn (nickname) obligatorisk ved gæstekommentarer<br>
...';
$lang['UAM_passwadmTitle_d'] = 'En administrator kan oprette en brugerkonto med eller uden krav om kompleksitetsberegning.<br><br>
Bemærk: Hvis en brugeren senere ønsker at ændre adgangskode og der er krav om at brugerne har stærke adgangskoder, vil adgangskoden blive udsat for kravet.';
$lang['UAM_passwtestTitle'] = 'Tester adgangskodens kompleksitet';
$lang['UAM_passwtestTitle_d'] = 'Skriv adgangskoden, der skal testes, og klik dernæst på &quot;Beregn score&quot; for at se resultatet.';
$lang['UAM_GT_MainTitle_d'] = '- Automatisk eller manuel håndtering af spøgelsesbrugere<br>
- Mailing<br>
...';
$lang['UAM_HidePasswTitle_d'] = 'Her vælges hvorvidt du ønsker at vise den besøgendes valgte adgangskode i informationsmailen. Hvis valgmuligheden aktiveres, vil adgangskoden dermed blive vist i klar tekst. Hvis deaktiveret, vil adgangskoden slet ikke blive vist.';
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
$lang['UAM_userlistTitle_d'] = 'Denne side er til administratorens information.  Den viser en liste over alle galleriets registrerede brugere, med datoen og antal dage siden det seneste besøg. Listen er sorteret i stigende orden efter antal dage.
<br><br>
<b><u>Kun når Ghost Tracker er aktiv</u></b>, antal dage uden et besøg vises med følgende farvekode, jævnfør maksimummet opsat i Ghost Tracker valgmuligheder:
<br>
- <b style=&quot;color: lime;&quot;>Grøn</b>: Når en bruger har besøgt galleriet <b style=&quot;color: lime;&quot;><u>mindre end 50 procent</u></b> af det i Ghost Tracker opsatte maksimum.<br>
- <b style=&quot;color: orange;&quot;>Orange</b>: Når en bruger sidst har besøgt galleriet <b style=&quot;color: orange;&quot;><u>mellem 50 og 99 procent</u></b> af det i Ghost Tracker opsatte maksimum.<br>
- <b style=&quot;color: red;&quot;>Rød</b>: Når en bruger har besøgt galleriet <b style=&quot;color: red;&quot;><u>mere end 100 procent</u></b> af det i Ghost Tracker opsatte maksimum. <b><u>I dette tilfælde skal brugerens også optræde i Ghost Tracker-tabellen.</u></b><br>
<br>
Eksempel:
<br>
Den maksimale tid er i Ghost Tracker opsat til 100 dage.
<br>
En bruger vil optræde som grøn, hvis vedkommende besøgte galleriet for mindre end 50 dage siden, i orange hvis det sidste besøg fandt sted mellem 50 og 99 dage siden, og i rød hvis det er 100 dage eller derover.
<br><br>
<b>BEMÆRK</b>: Listen viser ikke hvem der har bekræftet sin registrering (hvis valgmuligheden vedrørende registreringsbekræftelse er aktiveret). Disse brugere håndteres da på en særlig måde på fanen &quot;Sporing af bekræftelser&quot;.
<br><br>
<b>Tabelsorteringsfunktion</b>: Du kan sortere de viste data ved at klikke på kolonneoverskifterne. Hold Shift-tasten ned for at sortere op til fire kolonner på samme tid.';
$lang['UAM_usermanTitle_d'] = 'Når begrænset deadline for registering er aktiveret, er der derunder en liste over brugere, hvis registreringsbekræftelse afventes, <b style=&quot;text-decoration: underline;&quot;>uanset</b> om de stadig har tid til at bekræfte eller ej.<br><br>
Registreringsdatoen vises i grønt når den pågældende bruger er under tidsgrænsen for registreringsbekræftelse. I dette tilfælde er bekræftelsesnøglen stadig gyldig og vi kan sende en mail med eller uden en ny bekræftelsesnøgle.<br><br>
Når en registreringsdato vises med rødt, er bekræftelsesperioden udløbet. I dette tilfælde kan du sende en mail med en ny bekræftelsesnøgle, hvis du ønsker at gøre det muligt for brugeren at bekræfte sin registrering.<br><br>
I alle tilfælde er det muligt, manuelt at gennemtvinge bekræftelsen.<br><br>
Her kan du:
<br><br>
- Manuelt slette konti <b>(manuel tømning)</b>
<br>
- Generere mailpåmindelse <b>uden</b> at generere en ny nøgle. Advarsel: Sender en påmindelsesmail til de pågældende besøgende. Funktionen nulstiller ikke de pågældende besøgendes registreringsdato og timeout\'en er stadig gyldig.
<br>
- Generere mailpåmindelse <b>med</b> generering af ny nøgle. Advarsel: Sender en påmindelsesmail til de pågældende besøgende. Funktionen nulstiller også de pågældende besøgendes registreringsdato, hvilket svarer til at udvide bekræftelsesdeadline.
<br>
- Manuelt godkende en registrering som venter på bekræftelse, selv hvis udløbesdatoen er passeret <b>(tvunget bekræftelse)</b>.
<br><br>
<b>Tabelsorteringsfunktion</b>: Du kan sortere de viste data ved at klikke på kolonneoverskifterne. Hold Shift-tasten ned for at sortere op til fire kolonner på samme tid.';
$lang['UAM_gtTitle_d'] = 'Når Ghost Tracker er aktiveret og initialiseret, er der en liste over registrerede besøgende, der ikke er vendt tilbage i x antal dage. &quot;x&quot; er antallet af dage opsat i fanen Generel opsætning. Desuden er der en kolonne som angiver hvorvidt der er sendt en påmindelsesmail til de pågældende besøgende. Dermed kan man få et hurtigt overblik og håndtere besøgende, der ikke har reageret på påmindelsen.<br><br>Her kan man:
<br><br>
- Manuelt slette konti <b>(manuel tømning)</b>
<br>
- Generere mailpåmindelse <b>med nulstilling af den seneste besøgsdato</b>. Dermed kan de pågældende besøgende få et wildcard. Hvis den besøgende allerede har modtaget en påmindelse, er der intet i vejen for at sende en ny mail, som igen vil nulstille den seneste besøgsdato.
<br><br>
<b>Tabelsorteringsfunktion</b>: Du kan sortere de viste data ved at klikke på kolonneoverskifterne. Hold Shift-tasten ned for at sortere op til fire kolonner på samme tid.';
$lang['UAM_remailTitle_d'] = 'Valgmuligheden gør det muligt at sende påmindelsesmails to registrerede bruger, der ikke har bekræftet registreringen i tide. Den arbejder derfor sammen med &quot;Registreringsbekræftelse&quot;
<br><br>
To former for mail kan sendes: Med eller uden generering af en ny bekræftelsesnøgle. Alt efter behov kan indholdet af mailene tilpasses.
<br><br>
Se fanen &quot;Bekræftelsesporing&quot;.
<br><br>
Hvis denne valgmuligheden samt valgmuligheden &quot;Begrænset deadline for registreringsbekræftelse&quot; er aktiverede, vil nye valgmuligheder blive vist neden for i dette afsnit, til aktivering af automatisk håndtering af ikke-bekræftede brugere.';
$lang['UAM_ghosttrackerTitle_d'] = 'Også kaldet &quot;Ghost Tracker&quot;, når funktionen er aktiveret, kan du håndtere dine besøgende afhængigt af besøgshyppigheden. Der er to funktionsmetoder:<br><br>
- Manuel håndtering: Når tiden mellem to besøg er nået, vil den besøgende blive vist i &quot;Ghost Tracker&quot;-tabellen, hvor du kan påminde brugeren via mail eller slette vedkommende.<br><br>
- Automatisk håndtering: Når tiden mellem to på hinanden følgende besøg er nået, vil den besøgende automatisk blive slettet eller flyttet til en ventegruppe og/eller -status. I det andet tilfælde vil en informationsmail blive sendt til vedkommende.<br><br>
<b style=&quot;color: red;&quot;>Vigtig bemærkning: Hvis du aktiverer funktionen for første gang eller genaktiverer den efter en længere deaktivering, hvor nye brugere har registreret sig, skal du initialisere eller nulstille Ghost Tracker (se vejledning derom på &quot;Ghost Tracker&quot;-fanen).</b>';
$lang['UAM_confirmmail_custom1_d'] = 'Når valgmuligheden &quot;Registreringsbekræftelse&quot; er aktiv giver feltet mulighed for at tilpasse <b><u>godkendelsesteksten</u></b> på registreringsbekræftelsessiden, der vises når en bruger klikker på bekræftelseslinket, der blev modtaget pr. mail.
<br><br>
Efter installering af plugin\'en, vil en standardtekst blive opsat som eksempel.
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af den pågældende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til indsættelse af dit galleris URL, hvis opsat i Piwigos opsætningsvalgmuligheder.
<br><br>
Feltet er kompatibelt med FCK Editor og, ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_confirmmail_custom2_d'] = 'Når valgmuligheden &quot;Registreringsbekræftelse&quot; er aktiv, giver feltet mulighed for at tilpasse <b><u>afvisningsteksten</u></b> på registreringsbekræftelsessiden, der vises når en bruger klikker på bekræftelseslinket, der blev modtaget pr. mail.
<br><br>
Efter installering af plugin\'en, vil en standardtekst blive opsat som eksempel.
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af den pågældende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til indsættelse af dit galleris URL, hvis opsat i Piwigos opsætningsvalgmuligheder.
<br><br>
Feltet er kompatibelt med FCK Editor og, ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_confirmtxtTitle_d'] = 'Skriv introduktionsteksten, som medtages i mailen vedrørende registreringsbekræftelse.
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af den pågældende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til indsættelse af dit galleris URL, hvis opsat i Piwigos opsætningsvalgmuligheder.
- <b style=&quot;color: red;&quot;>[Kdays]</b> til indsættelse af antal dage-begræsningen på registreringsgodkendelse (&quot;Begrænset deadline for registeringsgodkendelse;&quot; skal være aktiveret).
<br><br>
Ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_gttextTitle_d'] = 'Skriv teksten, der skal vises i mailpåmindelsen, for at få brugeren til at vende tilbage til dit galleri. (Bemærk: Teksten forudfyldes under installeringen med et eksempel.)
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af den pågældende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til indsættelse af dit galleris URL, hvis opsat i Piwigos opsætningsvalgmuligheder.
- <b style=&quot;color: red;&quot;>[days]</b> til indsættelse af det maksimale antal dage mellem to besøg.

<br><br>
Ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_infotxtTitle_d'] = 'Skriv introduktionsteksten, som medtages i mailen vedrørende registreringsbekræftelse.
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af den pågældende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til indsættelse af dit galleris URL, hvis opsat i Piwigos opsætningsvalgmuligheder.
<br><br>
Ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_remailtxt1Title_d'] = 'Skriv introduktionsteksten, som medtages i påmindelsesmailen, ud over den genererede bekræftelsesnøgle.
<br><br>
Hvis feltet er tomt, vil påmindelsesmailen kun indeholde bekræftelseslinket. Der opfordres derfor kraftigt til at skrive en kort, forklarende tekst. (Bemærk: Teksten forudfyldes under installeringen med et eksempel.)
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af den pågældende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til indsættelse af dit galleris URL, hvis opsat i Piwigos opsætningsvalgmuligheder.
- <b style=&quot;color: red;&quot;>[Kdays]</b> til indsættelse af antal dage-begræsningen på registreringsgodkendelse (&quot;Begrænset deadline for registeringsgodkendelse;&quot; skal være aktiveret).
<br><br>
Ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_remailtxt2Title_d'] = 'Skriv introduktionsteksten, som medtages i påmindelsesmailen, uden den genererede bekræftelsesnøgle.
<br><br>
Hvis feltet er tomt, vil påmindelsesmailen kun indeholde bekræftelseslinket. Der opfordres derfor kraftigt til at skrive en kort, forklarende tekst. (Bemærk: Teksten forudfyldes under installeringen med et eksempel.)
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af den pågældende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til indsættelse af dit galleris URL, hvis opsat i Piwigos opsætningsvalgmuligheder.
- <b style=&quot;color: red;&quot;>[Kdays]</b> til indsættelse af antal dage-begræsningen på registreringsgodkendelse (&quot;Begrænset deadline for registeringsgodkendelse;&quot; skal være aktiveret).
<br><br>
Ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_infomailTitle_d'] = 'Denne valgmulighed gør at det muligt at automatisere udsendelse af informationsmail til en bruger, når denne ændrer sin adgangskode eller mailadresse på sin profilside.<br><br>
Indholdet af meddelelsen, der sendes, består af en del der kan tilpasses til at komme med en lille velkomst, samt en fast del som oplyser om brugerens loginnavn, adgangskode og mailadresse.';
$lang['UAM_mailexcTitle_d'] = 'Som standard accepterer Piwigo alle mailadresser på formatet xxx@yyy.zz. Ved aktivering af denne valgmulighed, kan du fravælge visse domæner på formatet: @ [domænenavn].[domæneudvidelse].<br><br>
Eksempler:<br>
@hotmail.com -> fravælger adresserne *@hotmail.com<br>
@hotmail -> fravælger alle adresserne *@hotmail*<br><br>
<b style=&quot;color: red;&quot;>Advarsel: Denne funktion fungerer kun vis mailadresser er krævede ved registering! Se Piwigos opsætningsvalgmuligheder.</b>';
$lang['UAM_confirmmailTitle_d'] = 'Valgmuligheden gør det muligt for en bruger enten at bekræfte sin registrering ved at klikke på et link modtaget i en mail sendt ved registreringen eller ved at en administrator manuelt aktiverer registreringen.
<br><br>
I det første tilfælde består mailen af en del, der kan tilpasses til at indeholde en lille velkomst, samt en fast del, som indeholder aktiveringslinket, der genereres fra en tilfældig nøgle, der måske kan genereres via fanen &quot;Sporing af bekræftelser&quot; tab.
<br><br>
I det andet tilfælde sendes godkendelseslinket til galleriets administratorer.  Besøgende skal vente på at en administrator bekræfter ved hjælp af godkendelseslinket eller via fanen &quot;Sporing af bekræftelser&quot;.
<br>
<b style=&quot;color: red;&quot;>Bemærk: Valgmulighederne  &quot;Begrænset deadline for registreringsbekræftelse&quot; og &quot;Påmind ikke-bekræftede brugere&quot; er deaktiverede når administrators manuelle bekræftelse er aktiveret.</b>
<br><br>
Valgmuligheden anvendes generelt med den automatisk tildeling af gruppe og/eller status.  Eksempelvis vil en bruger, der endnu ikke har bekræftet sin registrering, blive placeret i en særlig brugergruppe (med eller uden galleribegrænsinger), mens en bruger, der har bekræftet sin registrering placeres i gruppen &quot;normal&quot;.';
$lang['UAM_USRAutoTitle_d'] = 'Automatisk håndtering af ikke-bekræftede besøgende udløses hver gang du logger på galleriet, og den fungerer som følger::
<br><br>
- Automatisk sletning af ikke-bekræftede konti inden for den tilladte tid, uden at sende automatisk mailpåmindelse -> &quot;Begrænset deadline for registreringsbekræftelse&quot; <b><u>aktiveret</u></b> og &quot;Påmind ikke-bekræftede brugere&quot; <b><u>deaktiveret</u></b>.
<br><br>
- Automatisk udsendelse af påmindelsesbeskeder med generering af ny bekræftelsesnøgle og automatisk sletning af konti ikke bekræftet i tiden efter udsendelsen af påmindelsen -> &quot;Begrænset deadline for registreringsbekræftelse&quot; <b><u>aktiveret</u></b> og &quot;Påmind ikke-bekræftede brugere&quot; <b><u>aktiveret</u></b>.';
$lang['UAM_GTAutoDelTitle_d'] = 'Det er kun gyldigt når en bruger, hvis konto er udløbet, af sig selv iværksætter sletningsmekanismen (sjældent, men muligt).  Vedkommende sendes væk fra galleriet til en side, som viser sletningen af kontoen samt, måske, sletningsårsagen.
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> indsætter titlen på dit galleri.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> indsætter dit galleris URL, hvis det er opsat i Piwigos opsætningsvalgmuligheder.<br>
<b style=&quot;color: red;&quot;>[username]</b> er ikke tilgængeligt her, fordi brugeren er blevet slettet.
<br><br>
Tilpassset tekst til omdirigeringssiden kan skrives feltet, som er kompatibelt med FCK Editor og, ved flere sprog, kan man anvendes [lang]-tags fra plugin\'en Extended Description, hvis denne er aktiv.';
$lang['UAM_USRAutoDelTitle_d'] = 'Det er kun gyldigt når en bruger, hvis konto er udløbet, af sig selv iværksætter sletningsmekanismen (sjældent, men muligt).  Vedkommende sendes væk fra galleriet til en side, som viser sletningen af kontoen samt, måske, sletningsårsagen.
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> indsætter titlen på dit galleri.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> indsætter dit galleris URL, hvis det er opsat i Piwigos opsætningsvalgmuligheder.<br>
<b style=&quot;color: red;&quot;>[username]</b> er ikke tilgængeligt her, fordi brugeren er blevet slettet.
<br><br>
Tilpassset tekst til omdirigeringssiden kan skrives feltet, som er kompatibelt med FCK Editor og, ved flere sprog, kan man anvendes [lang]-tags fra plugin\'en Extended Description, hvis denne er aktiv.';
$lang['UAM_PwdResetTitle_d'] = 'Aktivering af denne valgmulighed tilføjer en ny funktion til Piwigos brugerhåndteringspanel (Brugere > Håndter), vedrørende fornyelse af udvalgte brugeres adgangskoder. Desuden tilføjes en ny kolonne, som viser adgangskodestatus for hver af dem, med følgende værdier:<br>
- Adgangskode skal fornyes: Der er planlagt at bede om fornyelse af adgangskoden.<br>
- Adgangskode fornyet: Adgangskoden er blevet fornyet, efter der er bedt om det.<br>
- Oprindelig adgangskode: Den oprindelige adgangskode valgt ved kontooprettelsen, og som aldrig har været krævet fornyet.<br>
Funktionen gælder ikke webmaster, generiske og gæstekonti.<br>
Disse brugere vil automatisk blive omdirigeret til deres opsætningsside, hver gang de logger på, indtil adgangskoden er blevet ændret, og der vil eksplicit blive givet besked om det på den side.';
$lang['UAM_GTReminder_Subject_d'] = 'Her skrives emnet på den automatiske Ghost Tracker-påmindelsesmail.<br>
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
$lang['UAM_GTAutomail_Subject_d'] = 'Her skrives emnet på den automatiske Ghost Tracker-nedgraderingsmail.<br>
Som standard indeholder feltet en generisk tekst på engelsk, men du kan ændre den samt anvende oversættelsestags [lang =?] fra plugin\'en Extended Description, hvis den er installeret.
<br><br>
Følgende yderligere tilpasningstags er tilgængelige uden brug af plugin\'en Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af navnet på modtageren af mailen.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af titlen på dit galleri.<br>';
$lang['UAM_MailInfo_Subject_d'] = 'Her skrives emnet på den automatiske Ghost Tracker-informationsmail.<br>
Som standard indeholder feltet en generisk tekst på engelsk, men du kan ændre den samt anvende oversættelsestags [lang =?] fra plugin\'en Extended Description, hvis den er installeret.
<br><br>
Følgende yderligere tilpasningstags er tilgængelige uden brug af plugin\'en Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af navnet på modtageren af mailen.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af titlen på dit galleri.<br>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Her angives en tilpasset, forklarende tekst til ubekræftede brugere, som fortæller at de ikke vil kunne logge på galleriet før de har bekræftet deres registrering.
<br><br>
Feltet er kompatiblet med FCK Editor og ved flere sprog, kan man anvende [lang]-tags fra plugin\'en Extended Description, hvis den er aktiv.';
$lang['UAM_RejectConnexion_d'] = 'Hvis aktiveret kan nyregistrerede brugere, der ikke har bekræftet registreringen endnu, ikke logger på galleriet.  De vil blive omdirigeret til en særlig side, som informerer dem om deres status.<br><br>
<b style=&quot;color: red;&quot;>Advarsel: Funktionen fungerer kun sammen med bekræftelsesgrupper! Se herunder for oplysninger om den påkrævede opsætning af grupperne.</b>';
$lang['UAM_StuffsTitle_d'] = 'Dette aktiverer en ekstra UAM-blok i plugin\'en PWG Stuffs (hvis installeret), der informerer besøgende, som ikke har bekræftet deres registrering, om deres situation.
<br><br>
Se <b>Tips og eksempler på brug</b> nederst på siden for flere oplysninger.';
$lang['UAM_Tracking registered users_d'] = 'Dette aktiverer en tabel på fanen &quot;Sporing af registrerede brugere&quot;, som opremser registrerede brugere af galleriet med datoen for deres seneste besøg og den tid, der er gået (i dage) siden deres seneste besøg. Overvågningen er udelukkende til information til galleriets administratorer.';
$lang['UAM_GTAutoTitle_d'] = 'Valgmuligheden gør det muligt at iværksætte regler til automatisk håndtering af spøgelsesbrugere.
<br><br>Grundlæggende princip: En bruger der når den maksimale tid mellem besøg <b><u>og</u></b> allerede er blevet påmindet via mail, betragtes som udløbet. Du kan iværksætte automatiserede behandlingsregler så som automatisk sletning af udløbne konti eller nedgradering ved at begrænse adgangen til galleriet (autmatisk skift til en begrænsende gruppe og/eller status).
<br><br>Aktiveringen af automatikkerne opnås ved at en (hvilken som helst) bruger logger på galleriet.';
$lang['UAM_GTAutoMailTitle_d'] = 'Når en konto sættes til at udløbe (ændring af gruppe/status/privatlivsniveau som nedgraderer den besøgende), vil en informationsmail blive sendt for at klarlægge årsagerne til ændringen og som en måde hvorved den indledende adgang til galleriet kan genskabes.
<br>For at gøre dette muligt indeholder mailen et link til genregistreringsbekræftelse (automatisk generering af ny bekræftelsesnøgle).<b style=&quot;color: red;&quot;>Hvis brugeren allerede er blevet påmindet, vil kontoen automatisk blive nedlagt.</b> 
<br><br>
<b style=&quot;color: red;&quot;>Advarsel: Anvendelse af funktionen hænger tæt sammen med brugeres registreringsbekræftelser (mailbekræftelse) og kan ikke aktiveres uden denne valgmulighed.</b>';
$lang['UAM_GTAutoGpTitle_d'] = 'Den automatiske ændring af gruppe, status eller privatlivsniveau svarer til en nedgradering af de involverede konti og arbejder efter samme princip som bekræftedes gruppe, status eller privatlivsniveau (se &quot;Opsætning af registreringsbekræftelse&quot;). Dvs. at der defineres en gruppe. status og/eller niveau som nedgraderer adgangen til galleriet. Hvis det allerede er opsat med brug af funktionen til registreringsbekræftelser, kan du anvende samme gruppe/status/niveau.<br><br>
<b style=&quot;color: red;&quot;>Vigtigt:</b> Hvis en spøgelsesbruger stadig ikke har ladet høre fra sig efter tidsbegrænsningen og på trods af automatisk mailnotifikation (hvis aktiveret), vil vedkommende automatisk blive slettet fra databasen.';
$lang['UAM_passwTitle_d'] = 'Aktivering af denne valgmulighed gør det til at krav at have en adgangskode ved registreringen, og kræver at den valgte adgangskode opfylder et minimalt kompleksitetsniveau.  Hvis tærsklen ikke opfyldes, vil den opnåede score og den minimale score, der skal opfyldes, blive vist, sammen med anbefalinger til forbedring af scoren.<br><br>
Der er et testfelt til måling af adgangskodens kompleksitet, og som giver en idé om hvordan man definerer en sådan.<br><br>
Bemærk: Adgangskodens score beregnes ud fra flere parametre: længde, typen af benyttede tegn (bogstaver, tal, store bogstaver, små bogstaver, særlige tegn). En score på under 100 betragtes som lav, fra 100 til 500 er kompleksiteten gennemsnitlig og over 500 er sikkerheden fremragende.';
$lang['UAM_restricTitle_d'] = '- Fravalg af tegn<br>
- Adgangskodehåndhævelse<br>
- Fravalg af maildomæner<br>
...';
$lang['UAM_validationlimitTitle_d'] = 'Valgmuligheden gør det muligt at begrænse gyldigheden på den pr.  mail fremsendte bekræftelsesnøgle, der sendes til nyregistrerede brugere. Besøgende, der lader sig registrere, har x dage til at bekræfte deres registrering. Herefter udløber bekræftelseslinket.
<br><br>
Valgmuligheden anvendes sammen med &quot;Bekræftelse af registrering&quot;
<br><br>
Hvis denne valgmulighed samt valgmuligheden &quot;Påmind ikke-bekræftede brugere&quot; er aktive, så vil der dukke nye valgmuligheder op i dette afsnit, som gør det muligt at aktivere autohåndtering af ikke-bekræftede brugere.';
$lang['UAM_adminconfmailTitle_d'] = 'Du kan kun deaktivere bekræftelsen på brugerkonti oprettet af adminstratoren via Piwigos brugerhåndtering.<br><br>
Ved at aktivere valgmuligheden, sendes der mailbekræftelser vedrørende registrering til hver bruger, som administratoren opretter.<br><br>
Ved at deaktivere valgmuligheden (standard), sendes kun informationsmailen (hvis &quot;Informationsmail til bruger&quot; er aktiveret).';
$lang['UAM_carexcTitle_d'] = 'Det kan være interessant at ikke at tillade visse tegn i brugernavne (eksempel: afvise loginnavne som indeholder @). Valgmuligheden gør det muligt at fravælge tegn eller tegnsekvenser, begivenheder.<br>
Bemærk: Valgmuligheden kan også fravælge hele ord.
<br><br>
<b style=&quot;color: red;&quot;>Advarsel: Valgmuligheden har ingen virkning på brugernavne oprettet før aktiveringen.</b>';
$lang['UAM_confirmTitle_d'] = '- Generering af informationsmail<br>
- Generering af registreringsbekræftelsesmail<br>
- Grupper, statusser eller privatlivsniveau ved autotilmelding<br>
- Deadline for bekræftelse af registrering<br>
- Generering af påmindelsesmail<br>
...';
$lang['UAM_DumpTitle_d'] = 'Gør det muligt for dig at gemme hele plugin-opsætningen i en fil, så du kan genskabe den hvis noget går galt (eksepelvis fejlopsætning eller før en opdatering).  Som standard gemmes filen i mappen ../plugins/UserAdvManager/include/backup/ og hedder &quot;UAM_dbbackup.sql&quot;.
<br><br>
<b style=&quot;color: red;&quot;>Advarsel: Filen overskrives hver gang der tages en sikkerhedskopi!</b>
<br><br>
Nogle gange kan det være nyttigt at placere sikkerhedskopifilen på din computer.  For eksempel hvis en anden database skal indlæses, hvis webstedet flyttes eller for at gemme flere forskellige udgaver. For at gøre dette, skal du bare sætte flueben i boksen, for at kunne downloade filen.
<br><br>
Denne grænseflade understøtter kun genskabeles fra den lokale sikkerhedskopifil (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql).  Sikkerhedskopifiler man har downloadet kan ikke genskabe opsætningen på denne måde.  I stedet skal man benytte et dedikeret databaseværktøj (så som PhpMyAdmin til MySQL-databaser).
<br><br>
<b style=&quot;color: red;&quot;>Advarsel: Efter en genskabelse er det nødvendigt at genindlæse plugin\'ens administrationsside for at se de genskabte indstillinger!</b>';
$lang['UAM_AddURL2Mail_d'] = 'Aktivering af denne valgmulighed, tilføjer dit galleris URL i slutningen af mails, der genereres af plugin\'en, som en signatur.';
?>