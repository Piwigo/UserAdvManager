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
?>