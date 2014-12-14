<?php
// ConfirmMail options section
$lang['UAM_confirmTitle_d'] = '- Informācijas e-pasta ģenerēšana<br>
- Reģistrācijas pārbaudes e-pasta ģenerēšana<br>
- Autopievienošanās grupas vai statusa ģenerēšana<br>
- Reģistrācijas robežlīnijas pārbaude<br>
- Atgādinājuma e-pasta ģenerēšana<br>
...
';
$lang['UAM_confirmmailTitle_d'] = 'Šī opcija dod iespēju lietotājam apstiprināt savu reģistrāciju ar pie reģistrācijas e-pastā saņemtās saites palīdzību vai to var izdarīt administrators manuāli.<br><br>
Pirmajā gadījumā, e-vēstule tiek veidota no pielāgojamas ievadošās daļas un fiksētās daļas, kas satur aktivēšanas saiti, kas uzģenerēta no gadījuma atslēgas, ko iespējams reģenerēt izmantojot &quot;Tracking validations&quot; iezīmi.<br><br>
Otrajā gadījumā, <b><u>validācijas atslēga ar e-pastu netiek sūtīta!</u></b>.
Apmeklētājiem jāgaida līdz administrators personīgi veic viņu reģistrācijas validāciju caur &quot;Validation tracking&quot; iezīmi. Ieteicams aktivēt Piwigo optciju &quot;Email admins when a new user registers&quot; (skatīt Piwigo konfigurācijas iespējas) un izmantot &quot;Information
email to user&quot; , lai brīdinātu jaunos reģistrantus par nepieciešamību sagaidīt kontu aktivāciju.
<br>
<b style=&quot;color: red;&quot;>NB: Opcijas &quot;Deadline for registration validation limited&quot; un &quot;Remind unvalidated users &quot; jāiestāda atslēgtā (off) stāvoklī, kad iespējota administratora manuālās validācijas funkcija.</b>
<br><br>
Šo iespēju parasti izmanto kopā ar grupas un/vai statūtu automātisku nozīmēšanu. Piemēram, lietotāji, kas nav validējuši savu reģistrāciju, tiks ielikti īpašā lietotāju grupā (ar vai bez ierobežojumie uz piekļuvi galerijai), kamēr lietotājs, kas ir apstiprinājis savu reģistrāciju tiks ielikts grupā &quot;normal&quot;.';
$lang['UAM_StuffsTitle_d'] = 'Šis iespējo papildus UAM bloku PWG Stuff spraudnī (ja instalēts), lai informētu apmeklētājus, kas kādu iemslu dēļ nav apstiprinājuši savu reģistrāciju.
<br><br>
Lūdzu pēc detaļām griezties <b>Tips and Examples of Use</b> šīs lapas apakšā. ';
$lang['UAM_adminconfmailTitle_d'] = 'Jūs varat atspējot šo apstiprināšanu tikai tiem lietotāju kontiem, ko izveidojis administrators, lietojot Piwigo lietotāju vadības saskarni.<br><br>
Aktivizējot šo iespēju, katram administratora izveidotajam lietotājam tiks nosūtīta elektroniskā pasta vēstuve ar reģistrācijas apstiprinājumu.<br><br>
Atspējojot šo iespēju (pēc noklusējuma), tiek nosūtīta tikai e-pasta informācija (ja &quot;Information email to user&quot;(Informācijas e-pasts lietotājam) ir iespējots).';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Kad galerijas administrators vai Webmasters manuāli apstuprina reģistrācijas kavēšanos, lietotājam automātiski tiek nosūtīts paziņojuma e-pasts. Šeit ievadiet savu pielāgoto validācijas e-pasta tēmu.<br>
Pēc noklusēšanas laukā ir oriģinālais teksts angļu valodā, bet jūs to varat mainīt un izmantot, ja uzinstalēts, Paplašinātā Apraksta spraudņa tulkošanas [lang =?] tegus. 
<br><br>
Sekojošie papildus pielāgošanas tegi ir pieejami bez Paplašinātā Apraksta spraudņa:<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski pievienotu e pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai pievienotu galerijas nosaukumu.<br>';
$lang['UAM_AdminValidationMail_d'] = 'Kad galerijas administrators vai Webmasters manuāli apstuprina reģistrācijas kavēšanos, lietotājam automātiski tiek nosūtīts paziņojuma e-pasts.
<br><br>
Tālāk pielāgojiet saturu izmantojot speciālos ievietojamos tegus:<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski pievienotu e pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai pievienotu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai automātiski pievienotu jūsu galerijas ULR, ja iestatīts Piwigo konfigurācijā.
<br><br>
Lai lietotu vairākas valodas, varat izmantot Paplašinātā apraksta spraudņa tegus, ja tie aktivizēti. ';
$lang['UAM_ConfirmMail_Subject_d'] = 'Ievadiet šeit savu pielāgoto reģistrācijas apstiprinājuma pasta tēmu. <br>
Pēc noklusējuma lauks ir ar vispārēju tekstu angļu valodā, bet to var mainīt un izmantot Paplašinātā Apraksta spraudņa tulkošanas tagus [lang =?], ja uzstādīti.
<br><br>
Neizmantojot Paplašinātā Apraksta spraudņa iespējas, pieejami sekojoši papildu pielāgošanas tagi: <br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu e-pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>';
$lang['UAM_confirmtxtTitle_d'] = 'Ievadiet ievadtekstu, ko vēlaties redzēt reģistrāciju apstiprinošajā e-pastā.<br><br>
Tālāk pielāgojiet saturu ar speciāli ievietojamiem tegiem(iezīmēm):<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu e-pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas izvēlēts Piwigo konfigurācijas iestatījumos.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> lai ievietotu astiprināšanai atvēlēto dienu limitu (&quot;Reģistrācijas apstiprināšanas termiņam;&quot; jābūt iestatītam).
<br><br>
';
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
$lang['UAM_RejectConnexion_d'] = 'Ja aktivizēts, no jauna reģistrētie lietotāji, kas nav apstiprinājuši savu reģistrāciju, nevarēs piekļūt galerijai. Tie tiks pārsūtīti uz speciālu lapu, kur tiks informēti par radušos situāciju. 
<br><br>
<b style=&quot;color: red;&quot;>Uzmanību - Šī funkcija darbojas tikai sasaistē ar apstiprinājuma grupām! Skatīt zemā, lai iestatītu grupas kā tas pieprasīts.</b>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Pielāgojiet šeit savu paskaidrojuma teskstu neapstiprinātajiem lietotājiem, ka viņi nevarēs tikt galerijā, kamēr nebūs apstiprinājuši savu reģistrāciju.
<br><br>
Šis lauks ir savietojams ar FCK Redaktoru un, lai lietotu daudzvalodu režīmu, var izmantot Paplašinātā apraksta spraudņa, ja tas ir aktivizēts, [lang] iezīmes (tags).  ';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color:
red;&quot;>UZMANĪBU : Pārbaudāmo grupu lietošana pieprasa, ka esat izveidojis vismaz vienu lietotājgrupu un, ka tā ir definēta &quot; pēc noklusējuma &quot; Piwigo grupu lietotāju pārvaldītājā.</b><br><br>
Grupas ir validētas (apstiprināti) lietošanai sasaistē ar (apstiprinājums un reģistrācija) &quot;Confirmation of registration&quot;';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color:
red;&quot;>UZMANĪBU : Statusa pārbaudes lietošana prasa, lai lietotājam &quot;Guest&quot; jaunai reģistrācijai būtu iestatījumi pēc noklusējuma (kā lietotāja paraugā). Nēmiet vērā, ka ir iespējams par paraugu jaunai reģistrācijai izmantot jebkuru citu lietotāju. Papildus informācijai, lūdzu izmantojiet Piwigo dokumentāciju.</b><br><br>
Statūti ir validēti lietošanai sasaistē ar (apstiprinājums un reģistrācija)  &quot;Confirmation of registration&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>UZMANĪBU: Privātuma līmeņa lietošana prasa, lai jūs lietotu to kopā ar savām bildēm. Detalizētāka informācija Piwigo documentācijā.</b><br><br>
Privātuma līmenis ir validēts lietošanai saistībā ar &quot;Reģistrācijas apstiprināšanu&quot;';
$lang['UAM_validationlimitTitle_d'] = 'Šī opcija ļauj ierobežot no jauna reģistrētajiem lietotājiem nosūtīto apstiprinājuma e-pastu validitāti.
Reģistrējušamies apmeklētājiem ir x dienas, lai apstiprinātu savu reģistrāciju. Pēc šī laika posma apstiprinājuma saite pazudīs.
<br><br>
Šī opcija lietojama kopā ar &quot;Reģistrācijas apstiprināšanu&quot;
<br><br>
Gadījumā, ja šī opcija un opcija &quot;Atgādinājums par neapstiprinātiem lietotājiem&quot; ir aktivētas, zemāk šinī sekcijā parādīsies jaunas opcijas, lai iespējotu neapstiprināto lietotāju automātisku pārvaldību.';
$lang['UAM_remailTitle_d'] = 'Šī opcija ļauj nosūtīt atgādinājuma e-pastu reģistrētiem, bet laikā neapstiprinājušiem savu reģistrāciju, lietotājiem. Tas tādējādi strādā kopā ar &quot;Reģistrācijas apstiprināšanu&quot;
<br><br>
Var tikt izsūtīti divu veidu e-pasti: Ar vai bez apstiprinājuma atslēgas ģenerēšanu. Ja nepieciešams, e-pastu saturu var pielāgot.
<br><br>
Atsaukties uz cilni &quot;Apstiprinājumu izsekošana&quot;.
<br><br>
Ja šī opcija un opcija &quot;Reģistrācijas apstiprināšanas termiņš ierobežots&quot; ir aktivētas, zem šīs sekcijas jāparādās jaunām opcijām, lai varētu iespējot neapstiprināto lietotāju automātisku pārvaldību.    ';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Ievadiet šeit savu pielāgoto reģistrācijas apstiprināšanas e-pasta tēmu (ar vai bez jaunas atslēgas ģenerēšanas).<br>
Pēc noklusēšanas laukā ir oriģinālais teksts angļu valodā, bet jūs to varat mainīt un izmantot, ja uzinstalēts, Paplašinātā Apraksta spraudņa tulkošanas [lang =?] tegus. 
<br><br>
Sekojošie papildus pielāgošanas tegi ir pieejami bez Paplašinātā Apraksta spraudņa:<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski pievienotu e pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai pievienotu galerijas nosaukumu.<br>';
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
$lang['UAM_remailtxt2Title_d'] = 'Ievadiet ievadtekstu, ko vēlaties redzēt atgādinājuma e-pastā, nereģenerējot apstiprinājuma atslēgu.
<br><br>
Ja kreisā puse tukša, pasta atgādinājums būs tukšs. Tāpēc ir sirsnīgi ieteikts ievadīt kaut mazu paskaidrojuma tekstu. (PS: Instalējot spraudni ir ievadīts parauga teksts).
Tālāk pielāgojiet saturu, izmantojot speciālos tegus (iezīmes):<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu galējā e-pasta lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas iestatīts Piwigo konfigurācijā.
<br><br>
Lai izmantotu daudzvalodu režīmu, varat lietot Paplašinātā apraksta spraudņa iezīmes, gadījumā, ja spraudnis aktivizēts. ';
$lang['UAM_USRAutoTitle_d'] = 'Neapstiprinātu lietotāju automātiskā apstrāde ieslēdzas katru reizi, kad jūs pieslēdzaties galerijai un darbojas sekojoši:
<br><br>
- Automātiska laikā neapstiprinātu kontu dzēšana, bez automātiska atgādinājuma e-pasta izsūtīšanas -> &quot; Ierobežots reģistrācijas apstiprināšanas termiņš&quot; 
<b><u>iespējots</u></b> un &quot;Atgādinājums neapstiprinātiem lietotājiem&quot; <b><u>atslēgts</u></b>.
<br><br>
- Automātiska atgādinājuma un no jauna ģenerētas apstiprinājuma atslēgas izsūtīšana un automātiska kontu dzēšana, kas nav apstiprināti paredzētajā laikā pēc atgādinājuma saņemšanas -> &quot;Ierobežots reģistrācijas apstiprināšanas termiņš&quot;
<b><u>iespējots</u></b> un &quot;Atgādinājums neapstiprinātiem lietotājiem&quot; <b><u>iespējots</u></b>. ';
$lang['UAM_USRAutoDelTitle_d'] = 'Tas ir pieejams tikai, ja lietotājs, kura konts ir noildzis, pats ierosina dzēšanas procesa mehānismu (reti, bet iespējams). Viņš tad tiek atvienots no galerijas un pāradresēts uz lapu, kas satur informāciju par šī konta džēšanu un, iespējams, skaidrojumu par šī konta dzēšanas iemesliem. 
<br><br>
Tālāk pielāgojiet saturu ar speciālo tagu-iezīmju palīdzību:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas iestatīts Piwigo konfigurācijas opcijās.
<br>
<b style=&quot;color: red;&quot;>[username]</b> nav pieejams, jo domājams, ka lietotājs ir dzēsts.<br><br>
Šajā laukā, kas ir savietojams ar FCK Redaktoru, varat ievadīt pāradresētās lapas pielāgoto tekstu un, lai izmantotu daudzvalodu režīmu, gadījumā, ja tas ir aktīvs, varat lietot Paplašinātā apraksta spraudņa [lang] tagus.';
$lang['UAM_USRAutoMailTitle_d'] = 'Kad aktivizēta, šī funkcija automātiski izsūta personificēta satura informāciju &quot;Atgādinājuma e-pastā ar no jauna izveidotu atslēgu&quot; apmeklētājiem, kuri atbilst kritērijiem.';
?>