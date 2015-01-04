<?php
// ConfirmMail options section
$lang['UAM_confirmTitle_d'] = '- Generering af informationsmail<br>
- Generering af registreringsbekræftelsesmail<br>
- Grupper, statusser eller privatlivsniveau ved autotilmelding<br>
- Deadline for bekræftelse af registrering<br>
- Generering af påmindelsesmail<br>
...';
$lang['UAM_confirmmailTitle_d'] = 'Valgmuligheden gør det muligt for en bruger enten at bekræfte sin registrering ved at klikke på et link modtaget i en mail sendt ved registreringen eller ved at en administrator manuelt aktiverer registreringen.
<br><br>
I det første tilfælde består mailen af en del, der kan tilpasses til at indeholde en lille velkomst, samt en fast del, som indeholder aktiveringslinket, der genereres fra en tilfældig nøgle, der måske kan genereres via fanen &quot;Sporing af bekræftelser&quot; tab.
<br><br>
I det andet tilfælde sendes godkendelseslinket til galleriets administratorer.  Besøgende skal vente på at en administrator bekræfter ved hjælp af godkendelseslinket eller via fanen &quot;Sporing af bekræftelser&quot;.
<br>
<b style=&quot;color: red;&quot;>Bemærk: Valgmulighederne  &quot;Begrænset deadline for registreringsbekræftelse&quot; og &quot;Påmind ikke-bekræftede brugere&quot; er deaktiverede når administrators manuelle bekræftelse er aktiveret.</b>
<br><br>
Valgmuligheden anvendes generelt med den automatisk tildeling af gruppe og/eller status.  Eksempelvis vil en bruger, der endnu ikke har bekræftet sin registrering, blive placeret i en særlig brugergruppe (med eller uden galleribegrænsinger), mens en bruger, der har bekræftet sin registrering placeres i gruppen &quot;normal&quot;.';
$lang['UAM_StuffsTitle_d'] = 'Dette aktiverer en ekstra UAM-blok i plugin\'en PWG Stuffs (hvis installeret), der informerer besøgende, som ikke har bekræftet deres registrering, om deres situation.
<br><br>
Se <b>Tips og eksempler på brug</b> nederst på siden for flere oplysninger.';
$lang['UAM_adminconfmailTitle_d'] = 'Du kan kun deaktivere bekræftelsen på brugerkonti oprettet af adminstratoren via Piwigos brugerhåndtering.<br><br>
Ved at aktivere valgmuligheden, sendes der mailbekræftelser vedrørende registrering til hver bruger, som administratoren opretter.<br><br>
Ved at deaktivere valgmuligheden (standard), sendes kun informationsmailen (hvis &quot;Informationsmail til bruger&quot; er aktiveret).';
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
$lang['UAM_ConfirmMail_Subject_d'] = 'Skriv her dit tilpassede emne på den e-mail, der sendes som påmindelse om bekræftelse af registrering.<br>
Som standard indeholder feltet en generisk tekst på engelsk, men du kan ændre den samt benytte oversættelsestags [lang=?], if plugin\'en Extended Description er installeret.
<br><br>
Følgende yderligere tilpasningstags er tilgængelige uden brug af plugin\'en Extended Description plugin:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af brugernavnet på mailens modtager.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af navnet på dit galleri.<br>
';
$lang['UAM_confirmtxtTitle_d'] = 'Skriv introduktionsteksten, som medtages i mailen vedrørende registreringsbekræftelse.
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af den pågældende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til indsættelse af dit galleris URL, hvis opsat i Piwigos opsætningsvalgmuligheder.
- <b style=&quot;color: red;&quot;>[Kdays]</b> til indsættelse af antal dage-begræsningen på registreringsgodkendelse (&quot;Begrænset deadline for registeringsgodkendelse;&quot; skal være aktiveret).
<br><br>
Ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
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
$lang['UAM_RejectConnexion_d'] = 'Hvis aktiveret kan nyregistrerede brugere, der ikke har bekræftet registreringen endnu, ikke logger på galleriet.  De vil blive omdirigeret til en særlig side, som informerer dem om deres status.<br><br>
<b style=&quot;color: red;&quot;>Advarsel: Funktionen fungerer kun sammen med bekræftelsesgrupper! Se herunder for oplysninger om den påkrævede opsætning af grupperne.</b>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Her angives en tilpasset, forklarende tekst til ubekræftede brugere, som fortæller at de ikke vil kunne logge på galleriet før de har bekræftet deres registrering.
<br><br>
Feltet er kompatiblet med FCK Editor og ved flere sprog, kan man anvende [lang]-tags fra plugin\'en Extended Description, hvis den er aktiv.';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>ADVARSEL: Anvendelse af grupper ved bekræftelse kræver at du har oprettet mindst en brugergruppe, som er defineret &quot;som standard&quot; i Piwigos håndtering af brugergrupper.</b><br><br>
Grupperne godkendes til brug i forbindelse med &quot;Bekræftelse af registrering&quot;';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>ADVARSEL: Anvendelse af statusser ved bekræftelse af registering, kræver at du har beholdt standardindstillinger for brugeren &quot;Guest&quot; (&quot;Gæst&quot;) (som brugerskabelon) til nye registreringer. Bemærk at du kan opsætte enhver anden bruger som skabelon til nye registreringer. Se Piwigos dokumentation for flere oplysninger.</b><br><br>
Stausserne godkendes til brug i forbindelse med  &quot;Bekræftelse af registrering&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>ADVARSEL: Anvendelse af privatlivsniveau kræver at du har benyttet dem sammen med dine billeder. Se Piwigos dokumentation for flere oplysninger.</b><br><br>
Privatlivsniveauet godkendes til brug i forbindelse med  &quot;Bekræftelse af registrering&quot;';
$lang['UAM_validationlimitTitle_d'] = 'Valgmuligheden gør det muligt at begrænse gyldigheden på den pr.  mail fremsendte bekræftelsesnøgle, der sendes til nyregistrerede brugere. Besøgende, der lader sig registrere, har x dage til at bekræfte deres registrering. Herefter udløber bekræftelseslinket.
<br><br>
Valgmuligheden anvendes sammen med &quot;Bekræftelse af registrering&quot;
<br><br>
Hvis denne valgmulighed samt valgmuligheden &quot;Påmind ikke-bekræftede brugere&quot; er aktive, så vil der dukke nye valgmuligheder op i dette afsnit, som gør det muligt at aktivere autohåndtering af ikke-bekræftede brugere.';
$lang['UAM_remailTitle_d'] = 'Valgmuligheden gør det muligt at sende påmindelsesmails to registrerede bruger, der ikke har bekræftet registreringen i tide. Den arbejder derfor sammen med &quot;Registreringsbekræftelse&quot;
<br><br>
To former for mail kan sendes: Med eller uden generering af en ny bekræftelsesnøgle. Alt efter behov kan indholdet af mailene tilpasses.
<br><br>
Se fanen &quot;Bekræftelsesporing&quot;.
<br><br>
Hvis denne valgmuligheden samt valgmuligheden &quot;Begrænset deadline for registreringsbekræftelse&quot; er aktiverede, vil nye valgmuligheder blive vist neden for i dette afsnit, til aktivering af automatisk håndtering af ikke-bekræftede brugere.';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Skriv her dit tilpassede emne på den e-mail, der sendes som påmindelse om bekræftelse af registrering (med eller uden generering af ny nøgle).<br>
Som standard indeholder feltet en generisk tekst på engelsk, men du kan ændre den samt benytte oversættelsestags [lang=?], if plugin\'en Extended Description er installeret.
<br><br>
Følgende yderligere tilpasningstags er tilgængelige uden brug af plugin\'en Extended Description plugin:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk indsættelse af brugernavnet på mailens modtager.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til indsættelse af navnet på dit galleri.<br>';
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
$lang['UAM_USRAutoTitle_d'] = 'Automatisk håndtering af ikke-bekræftede besøgende udløses hver gang du logger på galleriet, og den fungerer som følger::
<br><br>
- Automatisk sletning af ikke-bekræftede konti inden for den tilladte tid, uden at sende automatisk mailpåmindelse -> &quot;Begrænset deadline for registreringsbekræftelse&quot; <b><u>aktiveret</u></b> og &quot;Påmind ikke-bekræftede brugere&quot; <b><u>deaktiveret</u></b>.
<br><br>
- Automatisk udsendelse af påmindelsesbeskeder med generering af ny bekræftelsesnøgle og automatisk sletning af konti ikke bekræftet i tiden efter udsendelsen af påmindelsen -> &quot;Begrænset deadline for registreringsbekræftelse&quot; <b><u>aktiveret</u></b> og &quot;Påmind ikke-bekræftede brugere&quot; <b><u>aktiveret</u></b>.';
$lang['UAM_USRAutoDelTitle_d'] = 'Det er kun gyldigt når en bruger, hvis konto er udløbet, af sig selv iværksætter sletningsmekanismen (sjældent, men muligt).  Vedkommende sendes væk fra galleriet til en side, som viser sletningen af kontoen samt, måske, sletningsårsagen.
<br><br>
Yderligere tilpasning af indholdet med særlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> indsætter titlen på dit galleri.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> indsætter dit galleris URL, hvis det er opsat i Piwigos opsætningsvalgmuligheder.<br>
<b style=&quot;color: red;&quot;>[username]</b> er ikke tilgængeligt her, fordi brugeren er blevet slettet.
<br><br>
Tilpassset tekst til omdirigeringssiden kan skrives feltet, som er kompatibelt med FCK Editor og, ved flere sprog, kan man anvendes [lang]-tags fra plugin\'en Extended Description, hvis denne er aktiv.';
$lang['UAM_USRAutoMailTitle_d'] = 'Når den er aktiveret, vil denne funktio automatisk sende persontilpasset indhold i &quot;Påmindelsesmail med nygenereret nøgle&quot; til besøgende som opfylder kriteriet.';
?>