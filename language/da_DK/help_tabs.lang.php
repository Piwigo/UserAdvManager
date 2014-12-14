<?php
// GhostTracker Tab
$lang['UAM_gtTitle_d'] = 'Når Ghost Tracker er aktiveret og initialiseret, er der en liste over registrerede besøgende, der ikke er vendt tilbage i x antal dage. &quot;x&quot; er antallet af dage opsat i fanen Generel opsætning. Desuden er der en kolonne som angiver hvorvidt der er sendt en påmindelsesmail til de pågældende besøgende. Dermed kan man få et hurtigt overblik og håndtere besøgende, der ikke har reageret på påmindelsen.<br><br>Her kan man:
<br><br>
- Manuelt slette konti <b>(manuel tømning)</b>
<br>
- Generere mailpåmindelse <b>med nulstilling af den seneste besøgsdato</b>. Dermed kan de pågældende besøgende få et wildcard. Hvis den besøgende allerede har modtaget en påmindelse, er der intet i vejen for at sende en ny mail, som igen vil nulstille den seneste besøgsdato.
<br><br>
<b>Tabelsorteringsfunktion</b>: Du kan sortere de viste data ved at klikke på kolonneoverskifterne. Hold Shift-tasten ned for at sortere op til fire kolonner på samme tid.';


// Userlist tab
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


// UserManagement tab
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
?>