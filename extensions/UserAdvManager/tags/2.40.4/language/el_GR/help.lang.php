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
$lang['UAM_GTAutoGpTitle_d'] = 'Η αυτόματη αλλαγή ομάδας, κατάστασης ή επιπέδου προστασίας είναι σαν υποβιβασμός των λογαριασμών που εμπλέκονται και εργάζονται στην ίδια αρχή με την ομάδα, του επιπέδου  προστασίας της επιβεβαίωσης (βλέπε "Ρύθμιση επιβεβαίωσης εγγραφής&quot;). Ως εκ τούτου πρέπει να οριστεί μια ομάδα, κατάσταση και / ή επίπεδο πρόσβαση υποβιβασμού στη γκαλερί. Εάν αυτό έχει ήδη καθοριστεί με τη χρήση της λειτουργίας επιβεβαίωσης εγγραφής, μπορείτε να χρησιμοποιήσετε την ίδια ομάδα / κατάσταση / επίπεδο.<br><br>
<b style=&quot;color: red;&quot;>Σημαντική σημείωση :</b> Αν ένας ghost use εξακολουθεί να μην επισκέπτεται και μετά την προθεσμία και παρά την αυτόματη ειδοποίηση μέσω ηλεκτρονικού ταχυδρομείου (εάν είναι ενεργοποιημένο), αυτός διαγράφεται αυτόματα από τη βάση δεδομένων.';
$lang['UAM_GTAutoMailTitle_d'] = 'Όταν ένας λογαριασμός έχει λήξει (ομάδα / κατάσταση / επίπεδο προστασίας αλλάζει υποβιβάζοντας σε επισκέπτη), ένα ενημερωτικό e-mail μπορεί να σταλεί και να διευκρινίζει τους λόγους αυτής της αλλαγής και τα μέσα για να ανακτήσει την αρχική πρόσβαση στη γκαλερί. <br>
Για να γίνει αυτό, μια σύνδεση για επιβεβαίωση της εγγραφής επισυνάπτεται στο e-mail (αυτόματη δημιουργία ενός νέου κλειδιού επιβεβαίωση). <b style=&quot;color: red;&quot;>Αν ο χρήστης έχει ήδη κοινοποιηθεί, ο λογαριασμός του αυτόματα καταστρέφεται.</b> 
<br><br>
<b style=&quot;color: red;&quot;>Προειδοποίηση: Η χρήση αυτής της λειτουργίας είναι στενά συνδεδεμένη με την επιβεβαίωση της εγγραφής από τον χρήστη (επιβεβαίωση με e-mail) και δεν μπορεί να ενεργοποιηθεί χωρίς αυτή την επιλογή.</b>';
$lang['UAM_Tracking registered users_d'] = 'Αυτό ενεργοποιεί έναν πίνακα στη καρτέλα &quot;Παρακολούθηση εγγεγραμμένους χρήστες&quot;  όπου παρατίθενται οι εγγεγραμμένοι χρήστες στη γκαλερί με την ημερομηνία της τελευταίας επίσκεψής τους και το χρόνο που παρηλθε (σε ημέρες) από την τελευταία επίσκεψη τους. Η παρακολούθηση έχει καθαρά ενημερωτικό χαρακτήρα για τον διαχειριστή της γκαλερί.';
$lang['UAM_StuffsTitle_d'] = 'Αυτό επιτρέπει ένα πρόσθετο UAM μπλοκ στο πρόσθετο PWG Stuffs (εάν είναι εγκατεστημένο) για να ενημερώνει τους επισκέπτες σας ποιοι δεν μπόρεσαν να επιβεβαιώσουν την εγγραφή τους και την κατάστασή τους.<br><br>
Παρακαλείσθε να διαβάσετε το<b>Συμβουλές και παραδείγματα χρήσης</b> στο κάτω μέρος της σελίδας για λεπτομέρειες.';
$lang['UAM_RejectConnexion_d'] = 'Αν ενεργοποιηθεί, οι νέοι εγγεγραμμένοι χρήστες που δεν έχουν επιβεβαιώσει την εγγραφή τους δεν θα είναι σε θέση να συνδεθούν με την γκαλερί. Θα μεταφέρονται σε μια ειδική σελίδα που θα τους ενημερώνει για αυτή την κατάσταση.<br><br>
<b style=&quot;color: red;&quot;>Προειδοποίηση - Αυτή η δυνατότητα λειτουργεί μόνο σε συνδυασμό με τις ομάδες επιβεβαίωσης! Δείτε παρακάτω πως θα ρυθμίσετε τις ομάδες, όπως απαιτείται.</b>
';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Προσαρμόστε εδώ το κειμένο με τη δική σας εξήγηση που ενημερώνει τους ανεπιβεβαίωτες χρήστες ότι δεν θα είναι σε θέση να συνδεθούν στη συλλογή έως ότου έχουν επιβεβαιώσει την εγγραφή τους.
<br><br>
Αυτό το πεδίο είναι συμβατή με τον FCK Editor και, για πολλές γλώσσες, μπορείτε να χρησιμοποιήσετε τις ετικέτες [lang] του πρόσθετου Extended description αν είναι ενεργό.';
$lang['UAM_RedirTitle_d'] = 'Η επιλογή αυτή ανακατευθύνει αυτόματα έναν εγγεγραμμένο χρήστη στη σελίδα προσαρμογής του μόνο κατά την πρώτη σύνδεση του με την γκαλερί. Εκείνοι με καθεστώς &quot;admin&quot;, &quot;webmaster&quot; ή &quot;generic&quot; αποκλείονται.';
$lang['UAM_PwdResetTitle_d'] = 'Η ενεργοποίηση αυτής της επιλογής θα προσθέσει ένα νέο χαρακτηριστικό στον πίνακα διαχείρισης των χρηστών του Piwigo (Χρήστες> Διαχείριση) που μπορεί να εφαρμοστεί για να ανανεώνει τον κωδικό πρόσβασης για επιλεγμένους χρήστες. Επιπλέον, μια νέα στήλη προστίθεται για να δείξει την κατάσταση των κωδικών πρόσβασης για καθένα από αυτούς με τις ακόλουθες τιμές:<br>
- Κωδικός που πρέπει να ανανεωθεί: Μια αίτηση ανανέωσης κωδικού πρόσβασης έχει προγραμματιστεί.<br>
- Κωδικός έχει ανανεωθεί: Ο κωδικός πρόσβασης έχει ανανεωθεί κατόπιν αιτήματος.<br>
- Αρχική Κωδικός: Ο αρχικός κωδικός που επιλέχτηκε κατά τη δημιουργία λογαριασμού και δεν έχει απαιτηθεί μια ανανέωση..<br>
Ο Webmaster, οι γενικοί λογαριασμοί και οι λογαριασμοί επισκεπτώνπου εξαιρούνται από αυτή τη λειτουργία.<br>
Αυτοί οι χρήστες θα μεταφερθούν αυτόματα στη σελίδα προσαρμογής τους σε κάθε μία από τις συνδέσεις τους μέχρι να αλλάξουν τον κωδικό πρόσβασής τους και ένα επεξηγηματικό μήνυμα θα εμφανίζεται σε αυτή τη σελίδα.';
$lang['UAM_MailInfo_Subject_d'] = 'Εισάγετε εδώ το προσαρμοσμένο θέμα του ενημερωτικού e-mail σας.<br>
Από προεπιλογή, το πεδίο έχει ένα γενικό κείμενο στην αγγλική γλώσσα, αλλά μπορείτε να το αλλάξετε και να χρησιμοποιήσετε τις ετικέτες γλώσσας [lang =?] του πρόσθετου Extended Description εάν είναι εγκατεστημένο. 
<br><br>
Οι ακόλουθες πρόσθετες προσαρμοσμένες ετικέτες είναι διαθέσιμες χωρίς τη χρήση του plugin  Extended Description: <br> <br>
- <b style=&quot;color: red;&quot;>[username]</b>για να εισαγάγετε αυτόματα το όνομα του χρήστη προορισμού του e-mail. <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> να εισάγετε τον τίτλο της συλλογής σας.<br>';
$lang['UAM_HidePasswTitle_d'] = 'Επιλέξτε εδώ εάν θέλετε να εμφανίζετε ο κωδικός πρόσβασης που επιλέχτηκε από τον επισκέπτη στο ενημερωτικό e-mail. Εάν ενεργοποιήσετε την επιλογή, ο κωδικός πρόσβασης θα εμφανιστεί σε απλό κείμενο. Εάν απενεργοποιήσετε τον κωδικό πρόσβασης δεν θα εμφανιστεί καθόλου.';
$lang['UAM_GT_MainTitle_d'] = '- Αυτόματη ή χειροκίνητη διαχείριση των χρηστών φάντασμα<br>
- E-mailing<br>
...';
$lang['UAM_GTReminder_Subject_d'] = 'Εισάγετε εδώ το προσαρμοσμένο θέμα του e-mail χειροκίνητης υπενθύμισης του Ghost Tracker.<br>
Από προεπιλογή, το πεδίο έχει ένα γενικό κείμενο στην αγγλική γλώσσα, αλλά μπορείτε να το αλλάξετε και να χρησιμοποιήσετε τις ετικέτες γλώσσας [lang =?] του πρόσθετου Extended Description εάν είναι εγκατεστημένο. 
<br><br>
Οι ακόλουθες πρόσθετες προσαρμοσμένες ετικέτες είναι διαθέσιμες χωρίς τη χρήση του plugin  Extended Description: <br> <br>
- <b style=&quot;color: red;&quot;>[username]</b>για να εισαγάγετε αυτόματα το όνομα του χρήστη προορισμού του e-mail. <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> να εισάγετε τον τίτλο της συλλογής σας.<br>';
$lang['UAM_GTAutomail_Text_d'] = 'Πληκτρολογήστε το προσαρμοσμένο κείμενο που εξηγεί επίσης τους λόγους για τον υποβιβασμό, που θα συνοδεύει το σύνδεσμο επιβεβαίωσης. Το προσαρμοσμένο κείμενο δεν είναι υποχρεωτικό αλλά συνιστάται θερμά. Στην πραγματικότητα, οι επισκέπτες σας δεν θα εκτιμήσουν τη λήψη e-mail που περιέχει μία μόνο σύνδεση, χωρίς περαιτέρω εξηγήσεις. ;-)
<br><br>
Προσαρμόστε περαιτέρω το περιεχόμενο εισάγοντας ειδικές ετικέτες:<br>
- <b style=&quot;color: red;&quot;>[username]</b>για να εισαγάγετε αυτόματα το όνομα του χρήστη προορισμού του e-mail. <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b>για να εισάγετε τον τίτλο της συλλογής σας.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b>για να εισάγετε τη διεύθυνση URL της γκαλερί σας εάν ορίζεται σε επιλογές διαμόρφωσης του Piwigo.
<br><br>
Αν θέλετε να χρησιμοποιήσετε πολλές γλώσσες, μπορείτε να χρησιμοποιήσετε ετικέτες του plugin Extended description, εάν είναι ενεργό.';
$lang['UAM_GTAutomail_Subject_d'] = 'Εισάγετε εδώ το προσαρμοσμένο θέμα για το e-mail για τον αυτόματο υποβιβασμό του Ghost Tracker.<br>
Από προεπιλογή, το πεδίο έχει ένα γενικό κείμενο στην αγγλική γλώσσα, αλλά μπορείτε να το αλλάξετε και να χρησιμοποιήσετε τις ετικέτες γλώσσας [lang =?] του πρόσθετου Extended Description εάν είναι εγκατεστημένο. 
<br><br>
Οι ακόλουθες πρόσθετες προσαρμοσμένες ετικέτες είναι διαθέσιμες χωρίς τη χρήση του plugin  Extended Description: <br> <br>
- <b style=&quot;color: red;&quot;>[username]</b>για να εισαγάγετε αυτόματα το όνομα του χρήστη προορισμού του e-mail. <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> να εισάγετε τον τίτλο της συλλογής σας.<br>';
$lang['UAM_GTAutoTitle_d'] = 'Αυτή η επιλογή επιτρέπει να εφαρμόζονται κανόνες για την αυτοματοποιημένη διαχείριση των ghosts users.
<br><br>Βασική αρχή: Ένας χρήστης που φθάνει το μέγιστο χρονικό διάστημα μεταξύ δύο επισκέψεων b><u>και</u></b> έχει ήδη ειδοποιηθεί μέσω email θεωρείται ότι ληγμένος. Στη συνέχεια, μπορείτε να εφαρμόσετε αυτοματοποιημένη επεξεργασία των κανόνων, όπως η αυτόματη διαγραφή των ληγμένων λογαριασμών ή υποβιβασμό περιορίζοντας την πρόσβαση στην γκαλερί (αυτόματη εναλλαγή σε μια περιορισμένη ομάδα και / ή την κατάσταση).
<br><br>Η ενεργοποίηση αυτών των αυτοματισμών επιτυγχάνεται κατά τη σύνδεση των χρηστών (σε κάθε χρήστη!) στην γκαλερί.';
$lang['UAM_confirmmailTitle_d'] = 'Αυτή η επιλογή επιτρέπει σε ένα χρήστη να επιβεβαιώσει την εγγραφή του κάνοντας κλικ σε ένα σύνδεσμο που ελήφθη σε ένα μήνυμα ηλεκτρονικού ταχυδρομείου που αποστέλλεται κατά την εγγραφή ή ο διαχειριστής να ενεργοποιήσει χειροκίνητα την εγγραφή.<br><br>
Στην πρώτη περίπτωση, το e-mail αποτελείται από ένα προσαρμόσιμο μέρος για να εισαγάγει μια μικρή σημείωση υποδοχής και ένα σταθερό πλαίσιο που περιέχει το σύνδεσμο ενεργοποίησης που παράγεται από ένα τυχαίο κλειδί που μπορεί ενδεχομένως να παραχθεί στην καρτέλα &quot;Παρακολούθηση επιβεβαιώσεις&quot;.<br><br>
Στη δεύτερη περίπτωση, <b><u>δεν στέλνεται κλειδί επιβεβαίωσης με το email!</u></b>. Οι επισκέπτες πρέπει να περιμένουν έως ότου ένας διαχειριστής τους επιβεβαιώσει στην καρτέλα &quot;παρακολούθηση επιβεβαίωσης&quot;. Συνυστάτε να ενεργοποιήσετε την επιλογή του Piwigo του "Διαχείρηση email, όταν ένα νέος χρήστης εγγράφεται" (βλ. επιλογές διαμόρφωσης του Piwigo) και να χρησιμοποιήσει το &quot;ενημερωτικό email προς τον χρήστη&quot; για να προειδοποιήσει νέα μέλη να περιμένουν για την ενεργοποίηση του λογαριασμού τους.<br>
<b style=&quot;color: red;&quot;>Σημείωση: Οι επιλογές &quot;Προθεσμία για την επιβεβαίωση της εγγραφής περιορισμένη&quot; και &quot;Υπενθυμίστε τους ανεπιβεβαίωτους χρηστες&quot; πρέπει να είναι απενεργοποιημένη όταν η χειροκίνητη επιβεβαίωση από τον διαχειρηστη είναι ενεργοποιημένη.</b>
<br><br>
Η επιλογή αυτή χρησιμοποιείται συνήθως με την αυτόματη εκχώρηση της ομάδας και / ή της κατάστασης. Για παράδειγμα, ένας χρήστης που δεν έχει επιβεβαιώσει την εγγραφή του θα μπει σε μια συγκεκριμένη ομάδα χρηστών (με ή χωρίς περιορισμούς στην γκαλερί) ενώ ένας χρήστης ο οποίος επιβεβαίωσε την εγγραφή του πρέπει να είναι σε μια &quot;κανονική&quot; ομάδα.';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>ΠΡΟΕΙΔΟΠΟΙΗΣΗ: Η χρήση ομάδων στην επιβεβαίωση απαιτεί ότι έχετε δημιουργήσει τουλάχιστον μια ομάδα χρηστών και αυτό ορίζεται &quot;εξ ορισμού&quot; στη διαχείριση των ομάδων χρηστών του Piwigo.</b><br><br>
Οι ομάδες επικυρώνονται για χρήση σε συνδυασμό με την &quot;Επιβεβαίωση εγγραφής&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>ΠΡΟΕΙΔΟΠΟΙΗΣΗ: Η χρήση του επιπέδου προστασίας προϋποθέτει ότι την έχετε χρησιμοποιήσει με τις φωτογραφίες σας. Ανατρέξτε στην τεκμηρίωση του Piwigo για περισσότερες λεπτομέρειες.</b><br><br>
Το επίπεδο προστασίας επικυρώνεται για χρήση σε συνδυασμό με την &quot;Επιβεβαίωση εγγραφής&quot;';
$lang['UAM_confirmlevelTitle'] = 'Επίπεδο Προστασίας ';
$lang['UAM_confirmgrpTitle'] = 'Ομάδες';
$lang['UAM_confirmTitle_d'] = '- Παραγογή ενημερωτικού email<br>
- Παραγογή e-mail επιβεβαίωσης εγγραφήςbr>
- Αυτόματη σύνδεση ομάδων, καταστάσεων ή επιπέδου προστασίας<br>
- Προθεσμία για την επιβεβαίωση της εγγραφής<br>
- Παραγογή e-mail υπενθύμισης<br>';
$lang['UAM_carexcTitle_d'] = 'Μπορεί να έχει ενδιαφέρον να απαγορεύουν ορισμένοι χαρακτήρες στο όνομα χρήστη (για παράδειγμα: να απαγορεύουν τα ονόματα χρηστών που περιέχουν το @). Αυτή η επιλογή επιτρέπει να αποκλείσετε χαρακτήρες ή ακολουθία χαρακτήρων, γεγονότων.<br>
Σημείωση: Η επιλογή μπορεί να αποκλείσει επίσης ολόκληρες λέξεις.
<br><br>
<b style=&quot;color: red;&quot;>Προειδοποίηση: Αυτή η επιλογή δεν έχει καμία επίπτωση για τα ονόματα των χρηστών που δημιουργήθηκαν πριν από την ενεργοποίηση του.</b>';
$lang['UAM_USRAutoTitle_d'] = 'Αυτόματος χειρισμός για ανεπιβεβαίωτους επισκέπτες ενεργοποιείται κάθε φορά που συνδέονται στη γκαλερί και λειτουργεί ως εξής:<br><br>
- Αυτόματη διαγραφή των λογαριασμών που δεν έχουν επιβεβαιωθεί στον επιτρεπόμενο χρόνο που έχει χορηγηθεί χωρίς αυτόματη αποστολή email υπενθύμισης -> &quot;Προθεσμία για την επιβεβαίωση εγγραφής περιορισμένη&quot; <b>u>ενεργοποιημένο</u></b> και το &quot;Υπενθυμίση στους ανεπιβεβαίωτες χρήστες&quot; είναι <b><u>απενεργοποιημένο</u></b>.
<br><br>
- Αυτόματη αποστολή ενός μηνύματος υπενθύμισης με δημιουργία και επιβεβαίωση νέου κλειδιού και την αυτόματη διαγραφή των λογαριασμών που δεν έχουν επιβεβαιωθεί ακριβώς μετά την αποστολή της υπενθύμισης -> &quot;Προθεσμία για την επιβεβαίωση εγγραφής περιορισμένη&quot; <b><u>ενεργοποιημένο</u></b> και το &quot;Υπενθυμίση στους ανεπιβεβαίωτες χρήστες&quot; είναι <b><u>ενεργοποιημένο</u></b>.';
$lang['UAM_adminconfmailTitle_d'] = 'Μπορείτε να απενεργοποιήσετε αυτήν την επιβεβαίωση μόνο για λογαριασμούς χρηστών που δημιουργούνται από τον διαχειριστή μέσω του interface διαχείρισης χρηστών του Piwigo.<br><br>
Ενεργοποιώντας αυτή την επιλογή, ένα e-mail επιβεβαίωσης για την εγγραφή θα σταλεί σε κάθε χρήστη και δημιουργείται από το διαχεριστή.<br><br>
Απενεργοποιώντας αυτή την επιλογή (προεπιλογή), μόνο ένα ενημερωτικό email αποστέλλεται  (αν το &quot;Ενημερωτικό email για το χρήστη&quot; έχει ενεργοποιηθεί).';
$lang['UAM_USRAutoDelTitle_d'] = 'Αυτό ισχύει μόνο όταν ο χρήστης του οποίου ο λογαριασμός έχει λήξει η ίδια πυροδοτεί το μηχανισμό διαγραφής (σπάνιες, αλλά είναι δυνατόν). Τότε αυτός είναι αποσυνδέεται από την γκαλερί και μεταφέρεται σε μια σελίδα που δείχνει τη διαγραφή του λογαριασμού του και, ενδεχομένως, τους λόγους αυτής της διαγραφής.
<br><br>
Περαιτέρω προσαρμόσετε το περιεχόμενο εισάγοντας ειδικές ετικέτες:<br>
- <b style=&quot;color: red;&quot;>[username]</b>για να εισαγάγετε αυτόματα το όνομα του χρήστη προορισμού του e-mail. <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> να εισάγετε τον τίτλο της συλλογής σας.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b>να εισάγετε τη διεύθυνση URL γκαλερί σας, εάν έχει μπει στις επιλογές διαμόρφωσης του Piwigo.<br>
Προσαρμογή κειμένου για την ανακατεύθυνση σελίδας μπορεί να εισαχθεί στο πεδίο αυτό που είναι συμβατό με το FCK Editor και, για πολυγλωσσικό περιβάλλον, μπορείτε να χρησιμοποιήσετε τις ετικέτες [lang] του πρόσθετου Extended description αν είναι ενεργό.
';
$lang['UAM_USRAutoMailTitle_d'] = 'Όταν ενεργοποιηθεί, η λειτουργία αυτή θα στείλει αυτόματα εξατομικευμένο περιεχόμενο στο &quot;e-mail υπενθύμισης με δημιουργία νέου κλειδιού&quot; στους επισκέπτες που ταιριάζουν στα κριτήρια.';
?>