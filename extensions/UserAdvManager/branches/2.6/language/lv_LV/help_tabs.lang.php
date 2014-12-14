<?php
// GhostTracker Tab
$lang['UAM_gtTitle_d'] = 'Ja Ghost Tracker ir iespējots un inicializēts, zemāk būs pieejams reģistrēto lietotāju saraksts, kuri nav atgriezušies pēc x dienām. &quot;x&quot; ir General Setup iezīmē konfigurētais dienu skaits. Bez tam, ir kolonna, kas norāda, vai mērķapmeklētājiem ir nosūtīts e-pasta atgādinājums. Tādējādi, uzmetot aci, būs redzami tie lietotāji, kuri nav ņēmuši vērā atgādinājumus.<br><br>Šajā logā jūs varat:
<br><br>
- Manuāli dzēst kontus <b>(manual drain)</b>
<br>
- Ģenerēt e-atgādinātāja pastu <b> atiestatot beidzamā apmeklējuma datumu</b>.
Tas dot wildcard mērķapmeklētājiem. Ja apmeklētājs jau ir saņēmis atgādinājumu, nekas netraucē atsūtīt viņam jaunu e-pastu, kas no jauna atiestatīs beidzamā apmeklējuma datumu.
<br><br>
<b>Table Sorting Function</b>: tabulas šķirošanas funkcija ļauj kārtot tabulu noklikšķinot uz tabulas galvenēm. Pieturot SHIFT var kārtot pēc maksimums 4 kolonām vienlaicīgi.';


// Userlist tab
$lang['UAM_userlistTitle_d'] = 'Šī lapa domāta administratoru informēšanai. Tajā ir visu galerijā reģistrēto lietotāju saraksts ar to reģistrācijas datumu un apmeklējumu skaitu dienās līdz pēdējai vizītei. Saraksts sakārtots pēc dienu skaita dilstošā secībā.
<br><br>
<b><u>Tikai tad, kad Ghost Tracker ir aktīvs</u></b>, dienu skaits bez apmeklējuma parādās kā sekojošs krāsu kods, pamatojoties uz Ghost Tracker opcijas maksimālajiem iestatījumiem:
<br>
- <b style=&quot;color: lime;&quot;>Zaļa</b> : Kad lietotājs apmeklējis galeriju <b style=&quot;color: lime;&quot;><u>mazāk par 50%</u></b> no Ghost Tracker norādītā maksimuma.<br>
- <b style=&quot;color: orange;&quot;>Oranža</b> : Kad lietotājs apmeklējis galeriju <b style=&quot;color: orange;&quot;><u> starp 50% un 99% </u></b> no Ghost Tracker norādītā maksimuma. <br>
- <b style=&quot;color: red;&quot;>Sarkana</b> : Kad lietotājs apmeklējis galeriju <b style=&quot;color: red;&quot;><u>vairāk kā 100%</u></b> no Ghost Tracker norādītā maksimuma. <b><u>Šajā gadījumā lietotājam jāparādas arī Ghost Tracker tabulā.</u></b><br>
<br>
Piemērs :
<br>
Maksimālais Ghost Tracker konfigurācijas periods ir 100 dienas.
<br>
Lietotājs būs zaļā krāsā, ja būs apmeklējis galeriju mazāk par 50 dienām, oranžā, ja apmeklējums būs starp 50 un 99 dienām, bet sarkanā, ja 100 un vairāk dienu.
<br><br>
<b>NOTE</b>: Saraksts neatspoguļo tos, kuri nav validējuši savu reģistrāciju (ja aktīva reģistrācijas validācijas opcija). Šie lietotāji, tad tiek pārvaldīti īpašā veidā caur &quot;Tracking validations&quot; iezīmi.
<br><br>
<b>Table Sorting Function</b>: Iespējams kārtot attēlojamos datus noklikšķinot uz tabulas galvenēm. Pieturot SHIFT var kārtot pēc maksimums 4 kolonām vienlaicīgi.';


// UserManagement tab
$lang['UAM_usermanTitle_d'] = 'Kad iespējota reģistrācijas ierobežošana pēc laika, zemāk atradīsit to lietotāju sarakstu, no kuriem tiek gaidīta reģistrācijas validācija, <b style=&quot;text-decoration:
underline;&quot;>ir vai nav</b> laikā, lai validētos.<br><br>
Lietotāja reģistrēšanās datums ir zaļā krāsā, ja lietotājs tiek uzskatīts par esošu reģistrācijas validācijas laika periodā. Šinī gadījumā validācijas atslēga vēl ir derīga un mēs varam nosūtīt jums e-pastu ar vai bez jaunās validācijas atslēgas.<br><br>
Ja reģistrācijas datums parādās sarkanā krāsā, validācijas periods ir beidzies. Šinī gadījumā, ja gribat iespējot, lai lietotājs validē savu reģistrāciju, jums jāsūta e-pasts ar validācijas atslēgas reģenerāciju.<br><br>
Visos gadījumos manuāli veikt validāciju.<br><br>
Šajā logā jūs varat:
<br><br>
- Manuāli dzēst kontus <b>(manuālā drenēšana)</b>
<br>
- Ģenerēt e-atgādinātāja pastu  <b>bez</b> jaunas atslēgas ģenerēšanas. Brīdinājums:
Sūta e-atgādinājumus mērķapmeklētājiem. Šī funkcija neizdzēš mērķlietotāju reģistrācijas datumu un taimauts joprojām ir spēkā.
<br>
- Ģenerēt E-atgādinātāja pastu <b>ar</b> jaunas atslēgas ģenerēšanu. Brīdinājums :
Sūta e-atgādinājumus mērķapmeklētājiem. Šī funkcija atiestata mērķapmeklētāju reģistrācijas datumu, kas pielīdzināms validācijas termiņa pagarināšanai.
<br>
- Iesniegt reģistrācijas apstiprināšanu manuāli, pat ja derīguma termiņš ir beidzies <b>(piespiedu validācija)</b>.
<br><br>
<b>Table Sorting Function</b>: tabulas šķirošanas funkcija ļauj kārtot tabulu noklikšķinot uz tabulas galvenēm. Pieturot SHIFT var kārtot pēc maksimums 4 kolonām vienlaicīgi.';
?>