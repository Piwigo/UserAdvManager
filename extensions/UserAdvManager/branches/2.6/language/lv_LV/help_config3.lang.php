<?php
// GhostTracker Options section
$lang['UAM_GT_MainTitle_d'] = '-Automātiska vai manuāla slēpto lietotāju pārvaldība<br> 
-E-pasta sūtīšana<br>';
$lang['UAM_ghosttrackerTitle_d'] = 'Arī saukts par &quot;Ghost
Tracker&quot;, kad šī funkcija aktivēta, jūs varat pārvaldīt savus apmeklētājus atkarībā no viņu apmeklējumu biežuma. Iespējami 2 darbības režīmi:<br><br>
- Manuālā pārvaldība : Kad tiek sasniegts laiks starp 2 apmeklējumiem, apmeklētājs parādās &quot;Ghost Tracker&quot; tabulā, kur jums ir iespēja aizsūtīt atgādinājuma e-pastu lietotājam vai to izdzēst.<br><br>
- Automātiskā pārvaldība : Kad tiek sasniegts laiks starp 2 apmeklējumiem, apmeklētājs tiek automātiski izdzēsts vai pārvietots gaidītāju grupā. Šajā otrajā gadījumā lietotājam var tikt nosūtīts informējošs e-pasts.<br><br>
<b style=&quot;color: red;&quot;>Svarīga piezīme : Ja izmantojat šo variantu pirmo reizi vai pēc ilgāka laika, kurā klāt nākuši jauni lietotāji, to reaktivējat, jums jāinicializē vai jāveic Ghost Tracker reset funkcija (skatīt attiecīgās instrukcijas &quot;Ghost Tracker&quot; lapā).</b>';
$lang['UAM_GTReminder_Subject_d'] = 'Ievadiet šeit savu pielāgoto manuālo Ghost Tracker (neredzamo lietotāju izsekošana) atgādinājuma e-pasta tēmu.<br>
Pēc noklusējuma lauks ir ar vispārēju tekstu angļu valodā, bet to var mainīt un izmantot Paplašinātā Apraksta spraudņa tulkošanas tagus [lang =?], ja uzstādīti.
<br><br>
Neizmantojot Paplašinātā Apraksta spraudņa iespējas, pieejami sekojoši papildu pielāgošanas tagi: <br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu e-pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>';
$lang['UAM_gttextTitle_d'] = 'Ievadiet tekstu, ko vēlaties redzēt atgādinājuma e-pastā, lai atgādinātu lietotājiem, lai tie atkal apmeklē jūsu galeriju (PS: Instalējot spraudni ir ievadīts parauga teksts).
<br><br>
Tālāk pielāgojiet saturu, izmantojot speciālos tegus (iezīmes):<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu galējā e-pasta lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas iestatīts Piwigo konfigurācijā.
<br><br>
Lai izmantotu daudzvalodu režīmu, varat lietot Paplašinātā apraksta spraudņa iezīmes, gadījumā, ja spraudnis aktivizēts. ';
$lang['UAM_GTAutoTitle_d'] = 'Šī opcija dod iespēju pielietot (slēptajiem) ghosts lietotājiem automātiskās pārvaldības nosacījumus.
<br><br>Pamatprincips: Lietotājs, kas sasniedzis maksimālo laiku starp apmeklējumiem <b><u>and</u></b> un ir jau par to ar e-pastu brīdināts, tiek uzskatīts kā vairs neesošs. Tad jūs varat pielietot automātiskās apstrādes nosacījumus, kā notecējušo kontu automātisko dzēšanu vai to pazemināšanu, ierobežojot piekļuvi galerijai (automātiski pārvirzot ierobežojumu grupā vai piešķirot šādu statusu).
<br><br>Šis automātiskais process tiek iedarbināts lietotājiem (jebkuram lietotājam!) pieslēdzoties galerijai.';
$lang['UAM_GTAutoDelTitle_d'] = 'Šis variants pieejams tikai tad, kad lietotājs, kura konts ir noildzis, pats sāk dzēšanas mehānisma procedūru (reti, bet iespējams). Viņš tiek atvienots no galerijas un tiek pāradresēts uz lapu, kas rāda, ka viņa konts tiek dzēsts, iespējams, tiek minēti dzēšanas iemesli. 
<br><br>
Tālāk pielāgojiet saturu ar speciālo tagu-iezīmju palīdzību:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas iestatīts Piwigo konfigurācijas opcijās.
<br>
<b style=&quot;color: red;&quot;>[username]</b> nav pieejams, jo domājams, ka lietotājs ir dzēsts.<br><br>
Šajā laukā, kas ir savietojams ar FCK Redaktoru, varat ievadīt pāradresētās lapas pielāgoto tekstu un, lai izmantotu daudzvalodu režīmu, gadījumā, ja tas ir aktīvs, varat lietot Paplašinātā apraksta spraudņa [lang] tagus.';
$lang['UAM_GTAutoGpTitle_d'] = 'Automātiska konta grupas vai statusa maiņa ir ekvivalenta kontu, kas ir iesaistīti un darbojas uz vieniem un tiem pašiem principiem kā validācijas grupas, funkcionalitātes pazemināšanai (skatīt &quot;Setting confirmations and validations of registration&quot;).
Tādējādi jānosaka mainīto (pazemināto) grupu un/vai statusa piekļuves tiesības galerijai. Ja tas jau izdarītslietojot reģistrācijas apstiprināšanas funkciju, varat lietot to pašu grupu vai statusu.<br><br>
<b style=&quot;color: red;&quot;>Important note :</b> Ja no slēptā ghost lietotāja pēc termiņa limita, neskatoties uz informēšanu ar e-pastu (ja iespējots), nav nekādas ziņas, viņš automātiski tie dzēsts no datu bāzes';
$lang['UAM_GTAutoMailTitle_d'] = 'Kad konts ir noildzis (group / status / privacy level change demoting the visitor), var tikt izsūtīts informatīvs e-pasts, kas izskaidro notikušās izmaiņas un skaidrojumu, kā atjaunot sākotnējo piekļūvi galerijai. <br>
Lai to paveiktu, e-pastam tiek pievienota reģistrācijas reapstiprinājuma saite (automātiska jaunas apstiprinājuma atslēgas ģenerēšana).<b style=&quot;color: red;&quot;>Ja lietotājam jau ir paziņots, viņa konts automātiski tiek dzēsts.</b> 
<br><br>
<b style=&quot;color: red;&quot;>Uzmanību: Šīs funkcijas lietošana ir cieši saistīta ar lietotāja veicamo reģistrācijas apstiprināšanu (apstiprināšana ar e-pastu) un nevar tikt aktivēta, neizmantojot šo opciju.</b>  ';
$lang['UAM_GTAutomail_Subject_d'] = 'Ievadiet šeit savu pielāgoto automātisko Ghost Tracker (neredzamo lietotāju izsekošana) reducēšanas e-pasta tēmu.<br>
Pēc noklusējuma lauks ir ar vispārēju tekstu angļu valodā, bet to var mainīt un izmantot Paplašinātā Apraksta spraudņa tulkošanas tagus [lang =?], ja uzstādīti.
<br><br>
Neizmantojot Paplašinātā Apraksta spraudņa iespējas, pieejami sekojoši papildu pielāgošanas tagi: <br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu e-pasta gala lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>';
$lang['UAM_GTAutomail_Text_d'] = 'Papildinot apstiprinājuma saiti, ievadiet pielāgoto tekstu, kas izskaidro reducēšanas iemeslus. Pielāgotais teksts nav obligāts, bet ļoti ieteicams, gadījumā, ja apmeklētājiem nepatiktu saņemt tikai vienu saiti bez jebkādiem paskaidrojumiem. ;-)
<br><br>
Tālāk pielāgojiet saturu ar speciālo tagu-iezīmju palīdzību:<br>
- <b style=&quot;color: red;&quot;>[username]</b> lai automātiski ievietotu atbilstošo lietotāja vārdu.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> lai ievietotu jūsu galerijas nosaukumu.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> lai ievietotu jūsu galerijas URL, ja tas iestatīts Piwigo konfigurācijas opcijās.
<br><br>
Lai lietotu daudzvalodu variantu, ja tas aktīvs, varat izmantot Paplašinātā apraksta spraudņa [lang] tagus.';
?>