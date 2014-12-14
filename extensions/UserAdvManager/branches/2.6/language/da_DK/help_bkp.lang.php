<?php
// Backup and tips Options section
$lang['UAM_DumpTitle_d'] = 'Gør det muligt for dig at gemme hele plugin-opsætningen i en fil, så du kan genskabe den hvis noget går galt (eksepelvis fejlopsætning eller før en opdatering).  Som standard gemmes filen i mappen ../plugins/UserAdvManager/include/backup/ og hedder &quot;UAM_dbbackup.sql&quot;.
<br><br>
<b style=&quot;color: red;&quot;>Advarsel: Filen overskrives hver gang der tages en sikkerhedskopi!</b>
<br><br>
Nogle gange kan det være nyttigt at placere sikkerhedskopifilen på din computer.  For eksempel hvis en anden database skal indlæses, hvis webstedet flyttes eller for at gemme flere forskellige udgaver. For at gøre dette, skal du bare sætte flueben i boksen, for at kunne downloade filen.
<br><br>
Denne grænseflade understøtter kun genskabeles fra den lokale sikkerhedskopifil (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql).  Sikkerhedskopifiler man har downloadet kan ikke genskabe opsætningen på denne måde.  I stedet skal man benytte et dedikeret databaseværktøj (så som PhpMyAdmin til MySQL-databaser).
<br><br>
<b style=&quot;color: red;&quot;>Advarsel: Efter en genskabelse er det nødvendigt at genindlæse plugin\'ens administrationsside for at se de genskabte indstillinger!</b>';
$lang['UAM_tipsTitle_d'] = 'Tips og forskellige eksempler på brug';
?>