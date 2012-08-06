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
$lang['UAM_AdminValidationMail_Subject_d'] = 'Όταν o Διαχειριστής ή ο Υπεύθυνος της γκαλερί επιβεβαιώνουν αυτόματα μια εγγραφή υπό αναμονή, στέλνετε αυτόματα ένα email κοινοποίησης στον χρήστη. Εισάγετε εδώ χειροκίνητα το προσαρμοσμένο θέμα για το e-mail επικύρωσης.<br>
Από προεπιλογή, το πεδίο έχει γενικό κείμενο στην αγγλική γλώσσα αλλα μπορείτε να το αλλάξετε και να χρησιμοποιήσετε τις ετικέτες μετάφρασης [lang =?] του πρόσθετου Extended Description εάν είναι εγκατεστημένο.
<br><br>
Οι ακόλουθες ετικέτες πρόσθετων προσαρμογών είναι διαθέσιμες χωρίς να χρειαστεί να χρησιμοποιήσετε το πρόσθετο Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> για να εισαγάγετε αυτόματα το όνομα του χρήστη προορισμού του e-mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> για να εισάγετε τον τίτλο της γκαλερί σας.<br>';
$lang['UAM_DumpTitle_d'] = 'Αυτό σας επιτρέπει να αποθηκεύσετε το σύνολο της διαμόρφωσης του πρόσθετου σε ένα αρχείο ώστε να μπορείτε να το επαναφέρετε σε περίπτωση που κάτι πάει στραβά (λάθος χειρισμό ή πριν από μια ενημέρωση, για παράδειγμα). Από προεπιλογή, το αρχείο αποθηκεύεται σε αυτόν το φάκελο  ../plugins/UserAdvManager/include/backup/ και λέγετε &quot;UAM_dbbackup.sql&quot;.
<br><br>
<b style=&quot;color: red;&quot;>Προειδοποίηση: Το αρχείο επανεγγράφεται σε κάθε backup!</b>
<br><br>
Μπορεί μερικές φορές να είναι χρήσιμο να μπορείτε να ανακτήσετε το αρχείο αντιγράφου ασφαλείας στον υπολογιστή σας. Για παράδειγμα: Για να επαναφέρετε σε άλλη βάση δεδομένων, να αναθέσουν σε τρίτους ή να κρατήσει πολλές αποθηκευμένα αρχεία. Για να το κάνετε αυτό, απλά τσεκάρετε το μποξ για να κατεβάσετε το αρχείο.
<br><br>
Η ανάκτηση από αυτό το interface είναι διαθέσιμο μόνο για το τοπικό αρχείο backup (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql). Το Αρχείο αντίγραφου ασφαλείας που κατεβάσατε δεν μπορεί να αποκατασταθεί με αυτόν τον τρόπο. Για να το κάνετε αυτό, χρησιμοποιήστε ειδικό εργαλείο διαχείρισης βάσης δεδομένων σας (όπως PhpMyAdmin για MySql βάση δεδομένων).
<br><br>
<b style=&quot;color: red;&quot;>Προειδοποίηση: Μετά την επαναφορά, είναι απαραίτητο να ξαναφορτώσετε την σελίδα διαχείρισης του πρόσθετου για να δείτε τις αποκατεστημένες  ρυθμίσεις!</b>
';
$lang['UAM_CustomPasswRetrTitle_d'] = 'Από προεπιλογή, όταν ένας χρήστης έχει χάσει τον κωδικό του και διαλέγει την επιλογή της αποκατάστασης, δέχεται τότε ένα email που περιέχει μόνο το όνομα του και ένα νέο κωδικό πρόσβασης.
<br><br>
Εδώ, μπορείτε να προσθέσετε κείμενο της επιλογής σας για να εισαχθεί <b><u>πριν</u></b> τις βασικές πληροφορίες.
<br><br>
Προσαρμόσετε περαιτέρω το περιεχόμενο εισάγοντας ειδικές ετικέτες:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> για να εισάγετε τον τίτλο της γκαλερί σας.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> για να εισάγετε τη διεύθυνση URL της γκαλερί σας εάν ορίζεται στις επιλογές διαμόρφωσης του Piwigo.
<br><br>
Για να χρησιμοποιήσετε πολλές γλώσσες, μπορείτε να χρησιμοποιήσετε ετικέτες του πρόσθετου  Extended description, εάν είναι ενεργοποιημένο.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Εισάγετε εδώ το προσαρμοσμένο θέμα του e-mail της επιβεβαίωση εγγραφής σας(με ή χωρίς νέα επανέκδοση κλειδιού). <br>
Από προεπιλογή, το πεδίο έχει ένα γενικό κείμενο στην αγγλική γλώσσα αλλά μπορείτε να το αλλάξετε χρησιμοποιώντας  τις ετικέτες μετάφρασης [lang =?] του πρόσθετου Extended Description εάν είναι εγκατεστημένο.
<br><br>
Οι ακόλουθες ετικέτες πρόσθετων προσαρμογών είναι διαθέσιμες χωρίς να χρειαστεί να χρησιμοποιήσετε το πρόσθετο Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b>
 για να εισαγάγετε αυτόματα το όνομα του χρήστη προορισμού του e-mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> για να εισάγετε τον τίτλο της γκαλερί σας.<br>';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Εισάγετε εδώ το προσαρμοσμένο θέμα του e-mail υπενθύμισης της επιβεβαίωση εγγραφής σας(με ή χωρίς νέα επανέκδοση κλειδιού). <br>
Από προεπιλογή, το πεδίο έχει ένα γενικό κείμενο στην αγγλική γλώσσα αλλά μπορείτε να το αλλάξετε χρησιμοποιώντας  τις ετικέτες μετάφρασης [lang =?] του πρόσθετου Extended Description εάν είναι εγκατεστημένο.
<br><br>
Οι ακόλουθες ετικέτες πρόσθετων προσαρμογών είναι διαθέσιμες χωρίς να χρειαστεί να χρησιμοποιήσετε το πρόσθετο Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b>
 για να εισαγάγετε αυτόματα το όνομα του χρήστη προορισμού του e-mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> για να εισάγετε τον τίτλο της γκαλερί σας.<br>';
$lang['UAM_AdminValidationMail_d'] = 'Όταν o Διαχειριστής ή ο Υπεύθυνος της γκαλερί επιβεβαιώνουν χειροκίνητα μια εγγραφή υπό αναμονή, στέλνετε αυτόματα ένα email κοινοποίησης στον χρήστη. Εισάγετε εδώ το κείμενο που θα εμφανίζεται αυτό το e-mail.
<br><br>
Προσαρμόσετε περαιτέρω το περιεχόμενο εισάγοντας ειδικές ετικέτες:<br>
- <b style=&quot;color: red;&quot;>[username]</b>για να εισαγάγετε αυτόματα το όνομα του χρήστη προορισμού του e-mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> για να εισάγετε τον τίτλο της γκαλερί σας.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> για να εισάγετε τη διεύθυνση URL της γκαλερί σας εάν ορίζεται στις επιλογές διαμόρφωσης του Piwigo.
<br><br>
Για να χρησιμοποιήσετε πολλές γλώσσες, μπορείτε να χρησιμοποιήσετε ετικέτες του πρόσθετου  Extended description, εάν είναι ενεργοποιημένο';
$lang['UAM_GTAutoDelTitle_d'] = 'Αυτό ισχύει μόνο όταν ο χρήστης του οποίου ο λογαριασμός έχει λήξει από μόνος του πυροδοτεί το μηχανισμό διαγραφής (σπάνια, αλλά είναι δυνατόν). Τότε αυτός είναι αποσυνδέετε από την γκαλερί και μεταφέρετε σε μια σελίδα που δείχνει τη διαγραφή του λογαριασμού του, και, ενδεχομένως, οι λόγοι για αυτή την διαγραφή.
<br><br>
Περαιτέρω προσαρμόσετε το περιεχόμενο εισάγοντας ειδικές ετικέτες:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>να εισάγετε τον τίτλο της γκαλερί σας.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b>να εισάγετε τη διεύθυνση URL γκαλερί σας, εάν έχει μπει στις επιλογές διαμόρφωσης του Piwigo.<br>
<b style=&quot;color: red;&quot;>[username]</b>δεν είναι διαθέσιμο εδώ, επειδή αφορά χρήστη που έχει διαγραφεί.
<br><br>
Προσαρμογή κειμένου για την ανακατεύθυνση σελίδας μπορεί να εισαχθεί στο πεδίο αυτό που είναι συμβατό με το FCK Editor και, για πολυγλωσσικό περιβάλλον, μπορείτε να χρησιμοποιήσετε τις ετικέτες [lang] του πρόσθετου Extended description αν είναι ενεργό.';
$lang['UAM_GTAutoDelTitle'] = 'Προσαρμοσμένο μήνυμα για διαγραμμένο λογαριασμού';
?>