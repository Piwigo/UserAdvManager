<?php

$lang['UAM_confirmTitle_d'] = '- Informācijas e-pasta ģenerēšana<br>
- Reģistrācijas pārbaudes e-pasta ģenerēšana<br>
- Autopievienošanās grupas vai statusa ģenerēšana<br>
- Reģistrācijas robežlīnijas pārbaude<br>
- Atgādinājuma e-pasta ģenerēšana<br>
...
';
$lang['UAM_carexcTitle_d'] = 'Varētu būt saistoši aizliegt izmantot lietotājvārdos kādas noteiktas rakstzīmes (piemēram: noraidīt loginus saturošus @). Šī iespēja ļauj izslēgt rakstzīmes vai rakstzīmju secību, notikumus.<br>
NB: Šī iespēja ļauj izslēgt arī veselus vārdus.
<br><br>
<b style=&quot;color: red;&quot;>Uzmanību: Šī opcija neatstāj iespaidu uz lietotājvārdiem, kas izveidoti pirms to aktivēšanas.</b>';
$lang['UAM_passwTitle_d'] = 'Šīs opcijas iespējošana padara par obligātu paroles ietveršanu reģistrējoties, un pieprasa, lai apmeklētāju izvēlētā parole atbilstu minimālajam komplicētības prasībām. Ja šis līmenis nav sasniegts, tiem parādīts sasniegtais komplicētības rādītājs, minimāli pieļaujamais slieksnis, kā arī ieteikumi, kas jādara, lai sasniegtu labāku rezultātu.<br><br>
Pastāv paroles lauka tests, kas mēra paroles komplicētības pakāpi, un var sniegt padomu, kā uzlabot un padarīt šo rezultātu labāku.<br><br>
Note: Komplicētības rādītājs tiek aprēķināts izmantojot vairākus parametrus:
garumu, izmantoto rakstzīmju tipu (burti, cipari, lielie burti, mazie burti, speciālās rakstzīmes). Rezultāts zem100 tiek atzīts par nepietiekami zemu (low), no 100 līdz 500, kā vidēji sarežģīts; virs 500, drošības līmenis ir lielisks.';
$lang['UAM_passwtestTitle'] = 'Paroles komplicētības testēšana';
$lang['UAM_passwtestTitle_d'] = 'Ievadiet testēšanao paredzēto paroli un klikšķiniet uz&quot;Score calculation&quot; lai redzētu rezultātu.';
$lang['UAM_passwadmTitle_d'] = 'Administrators var izveidot lietotāja kontu ar vai bez paroles komplicētības pārbaudes aplikāciju.<br><br>
Note: Ja lietotājs, kura konts jau izveidots, grib nomainīt savu paroli un ir aktīva paroles stingrības uzlabišanas aplikācija, būs jāievēro visi stingrības uzlabošanas noteikumi.';
$lang['UAM_confirmgrpTitle'] = 'Pārbaudāmās Grupas';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color:
red;&quot;>UZMANĪBU : Pārbaudāmo grupu lietošana pieprasa, ka esat izveidojis vismaz vienu lietotājgrupu un, ka tā ir definēta &quot; pēc noklusējuma &quot; Piwigo grupu lietotāju pārvaldītājā.</b><br><br>
Grupas ir validētas (apstiprināti) lietošanai sasaistē ar (apstiprinājums un reģistrācija) &quot;Confirmation of registration&quot;';
$lang['UAM_confirmstatTitle'] = 'Validācijas statūti';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color:
red;&quot;>UZMANĪBU : Statusa pārbaudes lietošana prasa, lai lietotājam &quot;Guest&quot; jaunai reģistrācijai būtu iestatījumi pēc noklusējuma (kā lietotāja paraugā). Nēmiet vērā, ka ir iespējams par paraugu jaunai reģistrācijai izmantot jebkuru citu lietotāju. Papildus informācijai, lūdzu izmantojiet Piwigo dokumentāciju.</b><br><br>
Statūti ir validēti lietošanai sasaistē ar (apstiprinājums un reģistrācija)  &quot;Confirmation of registration&quot;';
$lang['UAM_remailtxt1Title'] = 'Atgādinājuma e-vēstule ar jauni uzģenerēto atslēgu';
$lang['UAM_remailtxt2Title'] = 'Atgādinājuma e-vēstule bez jauni uzģenerētās atslēgas';
$lang['UAM_tipsTitle_d'] = 'Padomi un dažādi izmantošanas piemēri';


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_adminconfmailTitle_d'] = 'Jūs varat atspējot šo apstiprināšanu tikai tiem lietotāju kontiem, ko izveidojis administrators, lietojot Piwigo lietotāju vadības saskarni.<br><br>
Aktivizējot šo iespēju, katram administratora izveidotajam lietotājam tiks nosūtīta elektroniskā pasta vēstuve ar reģistrācijas apstiprinājumu.<br><br>
Atspējojot šo iespēju (pēc noklusējuma), tiek nosūtīta tikai e-pasta informācija (ja &quot;Information email to user&quot;(Informācijas e-pasts lietotājam) ir iespējots).';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.2
// --------- End: New or revised $lang ---- from version 2.15.2

// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_restricTitle_d'] = '- Rakstzīmes izslēgšana<br>
- Paroles izpilde<br>
- E-pasta domēnu izslēgšana<br>
...
';
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
$lang['UAM_gtTitle_d'] = 'Ja Ghost Tracker ir iespējots un inicializēts, zemāk būs pieejams reģistrēto lietotāju saraksts, kuri nav atgriezušies pēc x dienām. &quot;x&quot; ir General Setup iezīmē konfigurētais dienu skaits. Bez tam, ir kolonna, kas norāda, vai mērķapmeklētājiem ir nosūtīts e-pasta atgādinājums. Tādējādi, uzmetot aci, būs redzami tie lietotāji, kuri nav ņēmuši vērā atgādinājumus.<br><br>Šajā logā jūs varat:
<br><br>
- Manuāli dzēst kontus <b>(manual drain)</b>
<br>
- Ģenerēt e-atgādinātāja pastu <b> atiestatot beidzamā apmeklējuma datumu</b>.
Tas dot wildcard mērķapmeklētājiem. Ja apmeklētājs jau ir saņēmis atgādinājumu, nekas netraucē atsūtīt viņam jaunu e-pastu, kas no jauna atiestatīs beidzamā apmeklējuma datumu.
<br><br>
<b>Table Sorting Function</b>: tabulas šķirošanas funkcija ļauj kārtot tabulu noklikšķinot uz tabulas galvenēm. Pieturot SHIFT var kārtot pēc maksimums 4 kolonām vienlaicīgi.';
$lang['UAM_confirmmailTitle_d'] = 'Šī opcija dod iespēju lietotājam apstiprināt savu reģistrāciju ar pie reģistrācijas e-pastā saņemtās saites palīdzību vai to var izdarīt administrators manuāli.<br><br>
Pirmajā gadījumā, e-vēstule tiek veidota no pielāgojamas ievadošās daļas un fiksētās daļas, kas satur aktivēšanas saiti, kas uzģenerēta no gadījuma atslēgas, ko iespējams reģenerēt izmantojot &quot;Tracking validations&quot; iezīmi.<br><br>
Otrajā gadījumā, <b><u>validācijas atslēga ar e-pastu netiek sūtīta!</u></b>.
Apmeklētājiem jāgaida līdz administrators personīgi veic viņu reģistrācijas validāciju caur &quot;Validation tracking&quot; iezīmi. Ieteicams aktivēt Piwigo optciju &quot;Email admins when a new user registers&quot; (skatīt Piwigo konfigurācijas iespējas) un izmantot &quot;Information
email to user&quot; , lai brīdinātu jaunos reģistrantus par nepieciešamību sagaidīt kontu aktivāciju.
<br>
<b style=&quot;color: red;&quot;>NB: Opcijas &quot;Deadline for registration validation limited&quot; un &quot;Remind unvalidated users &quot; jāiestāda atslēgtā (off) stāvoklī, kad iespējota administratora manuālās validācijas funkcija.</b>
<br><br>
Šo iespēju parasti izmanto kopā ar grupas un/vai statūtu automātisku nozīmēšanu. Piemēram, lietotāji, kas nav validējuši savu reģistrāciju, tiks ielikti īpašā lietotāju grupā (ar vai bez ierobežojumie uz piekļuvi galerijai), kamēr lietotājs, kas ir apstiprinājis savu reģistrāciju tiks ielikts grupā &quot;normal&quot;.';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.15.6
$lang['UAM_RedirTitle_d'] = 'Šī opcija automātiski novirza reģistrēto lietotāju uz tā pielāgošanas lapu tikai pie pirmās viņa konekcijas galerijai. <br><br>
Lūdzu ņemiet vērā: Šī iespēja neaatiecas uz visiem reģistrētajiem lietotājiem. Lietotāji ar &quot;admin&quot;, &quot;webmaster&quot; or &quot;generic&quot; statusu nav iekļauti.';
// --------- End: New or revised $lang ---- from version 2.15.6


// --------- Starting below: New or revised $lang ---- from version 2.16.0
$lang['UAM_ghosttrackerTitle_d'] = 'Arī saukts par &quot;Ghost
Tracker&quot;, kad šī funkcija aktivēta, jūs varat pārvaldīt savus apmeklētājus atkarībā no viņu apmeklējumu biežuma. Iespējami 2 darbības režīmi:<br><br>
- Manuālā pārvaldība : Kad tiek sasniegts laiks starp 2 apmeklējumiem, apmeklētājs parādās &quot;Ghost Tracker&quot; tabulā, kur jums ir iespēja aizsūtīt atgādinājuma e-pastu lietotājam vai to izdzēst.<br><br>
- Automātiskā pārvaldība : Kad tiek sasniegts laiks starp 2 apmeklējumiem, apmeklētājs tiek automātiski izdzēsts vai pārvietots gaidītāju grupā. Šajā otrajā gadījumā lietotājam var tikt nosūtīts informējošs e-pasts.<br><br>
<b style=&quot;color: red;&quot;>Svarīga piezīme : Ja izmantojat šo variantu pirmo reizi vai pēc ilgāka laika, kurā klāt nākuši jauni lietotāji, to reaktivējat, jums jāinicializē vai jāveic Ghost Tracker reset funkcija (skatīt attiecīgās instrukcijas &quot;Ghost Tracker&quot; lapā).</b>';
$lang['UAM_miscTitle_d'] = '- Ghosts lietotāju automātiskā un manuālā pārvaldība<br>
- Pēc reģistrētie lietotāji<br>
- Viesu komentāriem nepieciešams segvārds (nickname)<br>
...
';
$lang['UAM_mailexcTitle_d'] = 'Pēc noklusējuma Piwigo atbalsta visas e-pasta adreses formātā xxx@yyy.zz. Šīs opcijas iespējošana ļauj izslēgt no adresēm noteiktus domēnus formātā: @
[domain_name].[domain_extension].<br><br>
Piemēri :<br>
@hotmail.com -> izņemot adreses *@hotmail.com<br>
@hotmail -> izņemot visas adreses *@hotmail*';
$lang['UAM_GTAutoTitle_d'] = 'Šī opcija dod iespēju pielietot (slēptajiem) ghosts lietotājiem automātiskās pārvaldības nosacījumus.
<br><br>Pamatprincips: Lietotājs, kas sasniedzis maksimālo laiku starp apmeklējumiem <b><u>and</u></b> un ir jau par to ar e-pastu brīdināts, tiek uzskatīts kā vairs neesošs. Tad jūs varat pielietot automātiskās apstrādes nosacījumus, kā notecējušo kontu automātisko dzēšanu vai to pazemināšanu, ierobežojot piekļuvi galerijai (automātiski pārvirzot ierobežojumu grupā vai piešķirot šādu statusu).
<br><br>Šis automātiskais process tiek iedarbināts lietotājiem (jebkuram lietotājam!) pieslēdzoties galerijai.';
$lang['UAM_GTAutoDelTitle'] = 'Pielāgots ziņojums par dzēstu kontu';
$lang['UAM_GTAutoGpTitle_d'] = 'Automātiska konta grupas vai statusa maiņa ir ekvivalenta kontu, kas ir iesaistīti un darbojas uz vieniem un tiem pašiem principiem kā validācijas grupas, funkcionalitātes pazemināšanai (skatīt &quot;Setting confirmations and validations of registration&quot;).
Tādējādi jānosaka mainīto (pazemināto) grupu un/vai statusa piekļuves tiesības galerijai. Ja tas jau izdarītslietojot reģistrācijas apstiprināšanas funkciju, varat lietot to pašu grupu vai statusu.<br><br>
<b style=&quot;color: red;&quot;>Important note :</b> Ja no slēptā ghost lietotāja pēc termiņa limita, neskatoties uz informēšanu ar e-pastu (ja iespējots), nav nekādas ziņas, viņš automātiski tie dzēsts no datu bāzes';
// --------- End: New or revised $lang ---- from version 2.16.0
$lang['UAM_StuffsTitle_d'] = 'Šis iespējo papildus UAM bloku PWG Stuff spraudnī (ja instalēts), lai informētu apmeklētājus, kas kādu iemslu dēļ nav apstiprinājuši savu reģistrāciju.
<br><br>
Lūdzu pēc detaļām griezties <b>Tips and Examples of Use</b> šīs lapas apakšā. ';
$lang['UAM_HidePasswTitle_d'] = 'Izvēlieties šeit, ja gribat, lai apmeklētāja parole tiktu ietverta informatīvajā e-pastā. Ja iespējojat šo opciju, tad parole tiek atainota atklātā tekstā. Ja to neiespējojat, tad parole netiek rādīta vispār.';
$lang['UAM_GT_MainTitle_d'] = '-Automātiska vai manuāla slēpto lietotāju pārvaldība<br> 
-E-pasta sūtīšana<br>';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>UZMANĪBU: Privātuma līmeņa lietošana prasa, lai jūs lietotu to kopā ar savām bildēm. Detalizētāka informācija Piwigo documentācijā.</b><br><br>
Privātuma līmenis ir validēts lietošanai saistībā ar &quot;Reģistrācijas apstiprināšanu&quot;';
$lang['UAM_confirmlevelTitle'] = 'Privātuma līmenis';
$lang['UAM_USRAutoMailTitle_d'] = 'Kad aktivizēta, šī funkcija automātiski izsūta personificēta satura informāciju &quot;Atgādinājuma e-pastā ar no jauna izveidotu atslēgu&quot; apmeklētājiem, kuri atbilst kritērijiem.';
$lang['UAM_Tracking registered users_d'] = 'Šis aktivizē tabulu &quot;Izsekošanā reģistrētie lietotāji&quot; saraksts, kur piefiksēti galeriju apmeklējušie reģistrētie lietotāji, pēdējā apmeklējuma datums un apmeklējuma ilgums (dienās) kopš viņu pēdējā apmeklējuma. Monitorings ir tīri informatīva rakstura, domāts galerijas administratora vajadzībām.';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Pielāgojiet šeit savu paskaidrojuma teskstu neapstiprinātajiem lietotājiem, ka viņi nevarēs tikt galerijā, kamēr nebūs apstiprinājuši savu reģistrāciju.
<br><br>
Šis lauks ir savietojams ar FCK Redaktoru un, lai lietotu daudzvalodu režīmu, var izmantot Paplašinātā apraksta spraudņa, ja tas ir aktivizēts, [lang] iezīmes (tags).  ';
$lang['UAM_RejectConnexion_d'] = 'Ja aktivizēts, no jauna reģistrētie lietotāji, kas nav apstiprinājuši savu reģistrāciju, nevarēs piekļūt galerijai. Tie tiks pārsūtīti uz speciālu lapu, kur tiks informēti par radušos situāciju. 
<br><br>
<b style=&quot;color: red;&quot;>Uzmanību - Šī funkcija darbojas tikai sasaistē ar apstiprinājuma grupām! Skatīt zemā, lai iestatītu grupas kā tas pieprasīts.</b>';
$lang['UAM_infotxtTitle_d'] = 'Ievadiet ievadtekstu, ko vēlaties atspoguļot informējošajā e-pastā.
<br><br>
Tālāk pielāgojiet saturu, izmantojot speciālos tegus (iezīmes):<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu galējā e-pasta lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas iestatīts Piwigo konfigurācijā.
<br><br>
Lai izmantotu daudzvalodu režīmu, varat lietot Paplašinātā apraksta spraudņa iezīmes, gadījumā, ja spraudnis aktivizēts. ';
$lang['UAM_infomailTitle_d'] = 'Šī opcija ļauj lietotājam, kad viņš savā profilā izmaina savu paroli vai e-pasta adresi, automātiski nosūtīt informējošu e-pasta vēstuli.<br><br>
Nosūtās informācijas teksts sastāv no pielāgojamas ievaddaļas un fiksētās daļas, kas atspoguļo lietotāja lietotājvārdu, paroli un e-pasta adresi.  ';
$lang['UAM_confirmtxtTitle_d'] = 'Ievadiet ievadtekstu, ko vēlaties redzēt reģistrāciju apstiprinošajā e-pastā.<br><br>
Tālāk pielāgojiet saturu ar speciāli ievietojamiem tegiem(iezīmēm):<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu e-pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas izvēlēts Piwigo konfigurācijas iestatījumos.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> lai ievietotu astiprināšanai atvēlēto dienu limitu (&quot;Reģistrācijas apstiprināšanas termiņam;&quot; jābūt iestatītam).
<br><br>
';
$lang['UAM_CustomPasswRetrTitle_d'] = 'Pēc noklusēšanas, kad lietotājs ir pazaudējis savu paroli un izvēlas tās atjaunošanas iespēju, viņš ar e-pastu saņem tikai savu lietotājvārdu un jauno paroli.
<br><br>
Šeit, <b><u>pirms</u></b> standartziņojuma, ir iespēja ievadīt tekstu pēc jūsu ieskatiem.
<br><br>
Tālāk pielāgojiet ziņojuma saturu ar speciāli ievietojamajiem tegiem (iezīmēm):<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievadītu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Lai ievadītu jūsu galerijas URL, ja tas iestatīts Piwigo konfigurācijā.
<br><br>
Lai lietotu vairākas valodas, ja aktivēts, varat izmantot Paplašinātā apraksta spraudņa tegus.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Ievadiet šeit savu pielāgoto reģistrācijas apstiprinājuma pasta tēmu. <br>
Pēc noklusējuma lauks ir ar vispārēju tekstu angļu valodā, bet to var mainīt un izmantot Paplašinātā Apraksta spraudņa tulkošanas tagus [lang =?], ja uzstādīti.
<br><br>
Neizmantojot Paplašinātā Apraksta spraudņa iespējas, pieejami sekojoši papildu pielāgošanas tagi: <br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu e-pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>';
$lang['UAM_confirmmail_custom1_d'] = 'Kad opcija &quot;Reģistrācijas apstiprināšana&quot; ir aktīva, šis lauks ļauj jums pielāgot <b><u>akceptēšanas tekstu</u></b> reģistrēšanas apstiprināšanas lapā, kas parādās, kad lietotājs uzklikšķina uz pa e-pastā saņemto apstiprināšanas saiti.
<br><br>
Pēc spraudņa instalēšanas, standarta teksts tiek iestatīts kā paraugs.
<br><br>
Tālāk pielāgojiet saturu ar speciālo tagu-iezīmju palīdzību:<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu atbilstošo lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas iestatīts Piwigo konfigurācijas opcijās.
<br><br>
Šis lauks savietojams ar FCK Redaktoru un, ja lietojat daudzvalodu variantu, ja tas aktīvs, varat izmantot Paplašinātā apraksta spraudņa [lang] tagus.';
$lang['UAM_confirmmail_custom2_d'] = 'Kad opcija &quot;Reģistrācijas apspirināšana&quot; ir aktīva, šis lauks ļauj jums pielāgot <b><u>noraidījuma tekstu</u></b> reģistrācijas apstiprināšanas lapā, kas parādās, ja lietotājs uzklikšķina uz pas epastu saņemtās apstiprinājuma saites. 
<br><br>
Pēc spraudņa uzinstalēšanas standarta teksts ir iestatīts kā paraugs.
<br><br>
Tālāk pielāgojiet saturu izmantojot speciālos ievietojamos tagus (iezīmes):<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu attiecīgā lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas ULR, ja tas iestatīts Piwigo konfigurācijā.
<br><br>
Šis lauks ir savietojams ar FCK Redaktoru un, ja lietojat daudzvalodu režīmu, ja aktivizēts, varat lietot Paplašinātā apraksta (Extended description)[lang] tagus.';
$lang['UAM_AdminValidationMail_d'] = 'Kad galerijas administrators vai Webmasters manuāli apstuprina reģistrācijas kavēšanos, lietotājam automātiski tiek nosūtīts paziņojuma e-pasts.
<br><br>
Tālāk pielāgojiet saturu izmantojot speciālos ievietojamos tegus:<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski pievienotu e pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai pievienotu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai automātiski pievienotu jūsu galerijas ULR, ja iestatīts Piwigo konfigurācijā.
<br><br>
Lai lietotu vairākas valodas, varat izmantot Paplašinātā apraksta spraudņa tegus, ja tie aktivizēti. ';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Kad galerijas administrators vai Webmasters manuāli apstuprina reģistrācijas kavēšanos, lietotājam automātiski tiek nosūtīts paziņojuma e-pasts. Šeit ievadiet savu pielāgoto validācijas e-pasta tēmu.<br>
Pēc noklusēšanas laukā ir oriģinālais teksts angļu valodā, bet jūs to varat mainīt un izmantot, ja uzinstalēts, Paplašinātā Apraksta spraudņa tulkošanas [lang =?] tegus. 
<br><br>
Sekojošie papildus pielāgošanas tegi ir pieejami bez Paplašinātā Apraksta spraudņa:<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski pievienotu e pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai pievienotu galerijas nosaukumu.<br>';
$lang['UAM_remailtxt2Title_d'] = 'Ievadiet ievadtekstu, ko vēlaties redzēt atgādinājuma e-pastā, nereģenerējot apstiprinājuma atslēgu.
<br><br>
Ja kreisā puse tukša, pasta atgādinājums būs tukšs. Tāpēc ir sirsnīgi ieteikts ievadīt kaut mazu paskaidrojuma tekstu. (PS: Instalējot spraudni ir ievadīts parauga teksts).
Tālāk pielāgojiet saturu, izmantojot speciālos tegus (iezīmes):<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu galējā e-pasta lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas iestatīts Piwigo konfigurācijā.
<br><br>
Lai izmantotu daudzvalodu režīmu, varat lietot Paplašinātā apraksta spraudņa iezīmes, gadījumā, ja spraudnis aktivizēts. ';
$lang['UAM_gttextTitle_d'] = 'Ievadiet tekstu, ko vēlaties redzēt atgādinājuma e-pastā, lai atgādinātu lietotājiem, lai tie atkal apmeklē jūsu galeriju (PS: Instalējot spraudni ir ievadīts parauga teksts).
<br><br>
Tālāk pielāgojiet saturu, izmantojot speciālos tegus (iezīmes):<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu galējā e-pasta lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas iestatīts Piwigo konfigurācijā.
<br><br>
Lai izmantotu daudzvalodu režīmu, varat lietot Paplašinātā apraksta spraudņa iezīmes, gadījumā, ja spraudnis aktivizēts. ';
$lang['UAM_validationlimitTitle_d'] = 'Šī opcija ļauj ierobežot no jauna reģistrētajiem lietotājiem nosūtīto apstiprinājuma e-pastu validitāti.
Reģistrējušamies apmeklētājiem ir x dienas, lai apstiprinātu savu reģistrāciju. Pēc šī laika posma apstiprinājuma saite pazudīs.
<br><br>
Šī opcija lietojama kopā ar &quot;Reģistrācijas apstiprināšanu&quot;
<br><br>
Gadījumā, ja šī opcija un opcija &quot;Atgādinājums par neapstiprinātiem lietotājiem&quot; ir aktivētas, zemāk šinī sekcijā parādīsies jaunas opcijas, lai iespējotu neapstiprināto lietotāju automātisku pārvaldību.';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Ievadiet šeit savu pielāgoto reģistrācijas apstiprināšanas e-pasta tēmu (ar vai bez jaunas atslēgas ģenerēšanas).<br>
Pēc noklusēšanas laukā ir oriģinālais teksts angļu valodā, bet jūs to varat mainīt un izmantot, ja uzinstalēts, Paplašinātā Apraksta spraudņa tulkošanas [lang =?] tegus. 
<br><br>
Sekojošie papildus pielāgošanas tegi ir pieejami bez Paplašinātā Apraksta spraudņa:<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski pievienotu e pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai pievienotu galerijas nosaukumu.<br>';
$lang['UAM_MailInfo_Subject_d'] = 'Ievadiet šeit savu e-pasta pielāgoto tēmu.<br>
Pēc noklusēšanas šis lauks ir aizpildīts ar paraugtekstu angļu valodā, bet jums ir iespēja to pielāgot un tulkot, izmantojot Paplašinātā Apraksta spraudņa  [lang =?] tulkošanas tagus, ja spraudnis ir instalēts. 
<br><br>
Neizmantojot Paplašinātā Apraksta spraudņa iespējas, pieejami sekojoši papildu pielāgošanas tagi: <br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu e-pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br> ';
$lang['UAM_GTAutoDelTitle_d'] = 'Šis variants pieejams tikai tad, kad lietotājs, kura konts ir noildzis, pats sāk dzēšanas mehānisma procedūru (reti, bet iespējams). Viņš tiek atvienots no galerijas un tiek pāradresēts uz lapu, kas rāda, ka viņa konts tiek dzēsts, iespējams, tiek minēti dzēšanas iemesli. 
<br><br>
Tālāk pielāgojiet saturu ar speciālo tagu-iezīmju palīdzību:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas iestatīts Piwigo konfigurācijas opcijās.
<br>
<b style=&quot;color: red;&quot;>[username]</b> nav pieejams, jo domājams, ka lietotājs ir dzēsts.<br><br>
Šajā laukā, kas ir savietojams ar FCK Redaktoru, varat ievadīt pāradresētās lapas pielāgoto tekstu un, lai izmantotu daudzvalodu režīmu, gadījumā, ja tas ir aktīvs, varat lietot Paplašinātā apraksta spraudņa [lang] tagus.';
$lang['UAM_GTAutomail_Text_d'] = 'Papildinot apstiprinājuma saiti, ievadiet pielāgoto tekstu, kas izskaidro reducēšanas iemeslus. Pielāgotais teksts nav obligāts, bet ļoti ieteicams, gadījumā, ja apmeklētājiem nepatiktu saņemt tikai vienu saiti bez jebkādiem paskaidrojumiem. ;-)
<br><br>
Tālāk pielāgojiet saturu ar speciālo tagu-iezīmju palīdzību:<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu atbilstošo lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas iestatīts Piwigo konfigurācijas opcijās.
<br><br>
Lai lietotu daudzvalodu variantu, ja tas aktīvs, varat izmantot Paplašinātā apraksta spraudņa [lang] tagus.';
$lang['UAM_GTAutomail_Subject_d'] = 'Ievadiet šeit savu pielāgoto automātisko Ghost Tracker (neredzamo lietotāju izsekošana) reducēšanas e-pasta tēmu.<br>
Pēc noklusējuma lauks ir ar vispārēju tekstu angļu valodā, bet to var mainīt un izmantot Paplašinātā Apraksta spraudņa tulkošanas tagus [lang =?], ja uzstādīti.
<br><br>
Neizmantojot Paplašinātā Apraksta spraudņa iespējas, pieejami sekojoši papildu pielāgošanas tagi: <br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu e-pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>';
$lang['UAM_GTReminder_Subject_d'] = 'Ievadiet šeit savu pielāgoto manuālo Ghost Tracker (neredzamo lietotāju izsekošana) atgādinājuma e-pasta tēmu.<br>
Pēc noklusējuma lauks ir ar vispārēju tekstu angļu valodā, bet to var mainīt un izmantot Paplašinātā Apraksta spraudņa tulkošanas tagus [lang =?], ja uzstādīti.
<br><br>
Neizmantojot Paplašinātā Apraksta spraudņa iespējas, pieejami sekojoši papildu pielāgošanas tagi: <br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu e-pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>';
$lang['UAM_DumpTitle_d'] = 'Tas ļauj saglabāt visu spraudņa konfigurāciju failā, lai jūs varētu atjaunot to, ja kaut kas noiet greizi (piemēram: nepareizu manipulāciju rezultātā vai pirms atjauninājumu instalēšanas). Pēc noklusējuma fails tiek saglabāts šajā mapē .. ../plugins/UserAdvManager/include/backup/ un tiek saukta par &quot;UAM_dbbackup.sql&quot;.
<br><br>
<b style=&quot;color: red;&quot;>Uzmanību: Fails tiek pārrakstīts pie katras rezerves kopijas izveides!</b>
<br><br>
Reizēm var būt noderīgi ielādēt rezerves kopijas failu savā datorā. Piemēram: Lai veiktu atjaunošanu citā datubāzē, lai radītu rezerves kopiju citā vietā vai lai saglabātu vairākas dažādas rezerves kopijas. Lai to izdarītu, vienkārši veiciet atzīmi lodziņā, lai lejupielādētu failu.
Atjaunošana, izmantojot šo interfeisu, ir pieejama tikai ar vietējā rezerves kopijas failu (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql). Atjaunošana, izmantojot lejupielādētu rezerves kopijas failu, šajā gadījumā nav iespējama. Lai to izdarītu, lūdzu, izmantojiet savu specializēto datubāzes pārvaldības rīku (piemēram, PhpMyAdmin for MySql database).
<br><br>
<b style=&quot;color: red;&quot;>Uzmanību: Pēc atjaunošanas, lai redzētu atjaunotos iestatījumus, nepieciešams no jauna ielādēt spraudņa pārvaldības lapu!</b> ';
$lang['UAM_remailtxt1Title_d'] = 'Ievadiet ievadtekstu, ko vēlaties redzēt atgādinājuma e-pastā papildus reģenerētajai apstiprinājuma atslēgai.
<br><br>
Ja kreisā nav aizpildīta, atgādinājuma e-pastā būs tikai apstiprinājuma saite. Šajā gadījumā būtu ieteicams pievienot nelielu skaidrojošu tekstu.(PS: teksts, kas ievietots pie spraudņa instalēšanas ir paredzēts kā piemērs).
<br><br>
Tālāk pielāgojiet saturu ar speciālo tagu-iezīmju palīdzību:<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu atbilstošo lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas iestatīts Piwigo konfigurācijas opcijās.
<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> lai ievietotu dienu skaitu, kurā jāveic reģistrācijas apstiprināšana (&quot;Reģistrācijas apstiprināšanas termiņš ierobežots;&quot; jābūt iespējotam).
<br><br>
Lai lietotu daudzvalodu variantu, ja tas aktīvs, varat izmantot Paplašinātā apraksta spraudņa tagus.';
$lang['UAM_PwdResetTitle_d'] = 'Iespējojot šo opciju Piwigo lietotāju pārvaldības panelim tiks pievienota jauna iezīme (Users> Manage), ko var izmantot, lai atlasītiem lietotājiem atjaunotu paroli. Turklāt ir pievienota jaunā kolonna, lai parādītu paroles statusu katram no viņiem ar šādām vērtībām:<br>
- Parole būtu jāatjauno: Plānots paroles atjaunošanas pieprasījums.<br>
- Parole atjaunota: Parole atjaunota pēc saņemtā pieprasījuma.<br>
- Sākotnējā parole: Sākotnējā parole izvēlēta pie konta izveidošanas un nav bijis pieprasījuma to atjaunot.<br>
Webmaster, vispārējie un viesu konti ir izslēgti no šīs funcijas.<br>
Šie lietotāji tiks automātiski novirzīti uz to pielāgošanas lapām katrā no to savienojumiem līdz tie nomainīs savu paroli un nepārprotama ziņa par to tiks parādīta šajā lapā.';
$lang['UAM_remailTitle_d'] = 'Šī opcija ļauj nosūtīt atgādinājuma e-pastu reģistrētiem, bet laikā neapstiprinājušiem savu reģistrāciju, lietotājiem. Tas tādējādi strādā kopā ar &quot;Reģistrācijas apstiprināšanu&quot;
<br><br>
Var tikt izsūtīti divu veidu e-pasti: Ar vai bez apstiprinājuma atslēgas ģenerēšanu. Ja nepieciešams, e-pastu saturu var pielāgot.
<br><br>
Atsaukties uz cilni &quot;Apstiprinājumu izsekošana&quot;.
<br><br>
Ja šī opcija un opcija &quot;Reģistrācijas apstiprināšanas termiņš ierobežots&quot; ir aktivētas, zem šīs sekcijas jāparādās jaunām opcijām, lai varētu iespējot neapstiprināto lietotāju automātisku pārvaldību.    ';
$lang['UAM_USRAutoTitle_d'] = 'Neapstiprinātu lietotāju automātiskā apstrāde ieslēdzas katru reizi, kad jūs pieslēdzaties galerijai un darbojas sekojoši:
<br><br>
- Automātiska laikā neapstiprinātu kontu dzēšana, bez automātiska atgādinājuma e-pasta izsūtīšanas -> &quot; Ierobežots reģistrācijas apstiprināšanas termiņš&quot; 
<b><u>iespējots</u></b> un &quot;Atgādinājums neapstiprinātiem lietotājiem&quot; <b><u>atslēgts</u></b>.
<br><br>
- Automātiska atgādinājuma un no jauna ģenerētas apstiprinājuma atslēgas izsūtīšana un automātiska kontu dzēšana, kas nav apstiprināti paredzētajā laikā pēc atgādinājuma saņemšanas -> &quot;Ierobežots reģistrācijas apstiprināšanas termiņš&quot;
<b><u>iespējots</u></b> un &quot;Atgādinājums neapstiprinātiem lietotājiem&quot; <b><u>iespējots</u></b>. ';
$lang['UAM_GTAutoMailTitle_d'] = 'Kad konts ir noildzis (group / status / privacy level change demoting the visitor), var tikt izsūtīts informatīvs e-pasts, kas izskaidro notikušās izmaiņas un skaidrojumu, kā atjaunot sākotnējo piekļūvi galerijai. <br>
Lai to paveiktu, e-pastam tiek pievienota reģistrācijas reapstiprinājuma saite (automātiska jaunas apstiprinājuma atslēgas ģenerēšana).<b style=&quot;color: red;&quot;>Ja lietotājam jau ir paziņots, viņa konts automātiski tiek dzēsts.</b> 
<br><br>
<b style=&quot;color: red;&quot;>Uzmanību: Šīs funkcijas lietošana ir cieši saistīta ar lietotāja veicamo reģistrācijas apstiprināšanu (apstiprināšana ar e-pastu) un nevar tikt aktivēta, neizmantojot šo opciju.</b>  ';
$lang['UAM_USRAutoDelTitle_d'] = 'Tas ir pieejams tikai, ja lietotājs, kura konts ir noildzis, pats ierosina dzēšanas procesa mehānismu (reti, bet iespējams). Viņš tad tiek atvienots no galerijas un pāradresēts uz lapu, kas satur informāciju par šī konta džēšanu un, iespējams, skaidrojumu par šī konta dzēšanas iemesliem. 
<br><br>
Tālāk pielāgojiet saturu ar speciālo tagu-iezīmju palīdzību:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas iestatīts Piwigo konfigurācijas opcijās.
<br>
<b style=&quot;color: red;&quot;>[username]</b> nav pieejams, jo domājams, ka lietotājs ir dzēsts.<br><br>
Šajā laukā, kas ir savietojams ar FCK Redaktoru, varat ievadīt pāradresētās lapas pielāgoto tekstu un, lai izmantotu daudzvalodu režīmu, gadījumā, ja tas ir aktīvs, varat lietot Paplašinātā apraksta spraudņa [lang] tagus.';
?>