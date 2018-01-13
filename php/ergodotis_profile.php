<?php
    if (isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
    }
 ?>
<!DOCTYPE html PUBLIC>
<html>
<head>
<title>IKA - Εργοδότης</title>

<link href="../css/categories_style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="header_wrapper" class="wrapper">

    <!-- <div id="header"> -->

        <div id="site_title">

        	<a href="index_profile.php"><img src="../images/logo.png" alt="business template" /></a>
            <div>
                <a href="profile.php">Προφίλ Χρήστη</a> <?php echo $username?>
            </div>
        </div>

        <!-- <div class="cleaner_h10"></div> -->

        <div id="menu">

            <ul>
                <li class="dropdown">
                    <a href="#" class="dropbtn current">Ομάδες Χρηστών</a>
                    <div class="dropdown-content">
                        <a href="suntaxiouxos_profile.php">Συνταξιούχος</a>
                        <a href="asfalismenos_profile.php">Ασφαλισμένος</a>
                        <a href="ergodotis_profile.php">Εργοδότης</a>
                    </div>
                </li>
                <li><a href="announcements_profile.php">Ανακοινώσεις</a></li>
                <li><a href="branches_profile.php">Υποκαταστήματα</a></li>
                <li><a href="faq_profile.php">Συχνές Ερωτήσεις</a></li>
            </ul>
            <form id="search" align="right">
              <input type="text" name="search" placeholder="Search...">
            </form>
        </div>

        <div id="breadcrump">
            <a href="index_profile.php">Αρχική Σελίδα</a> > <a href="ergodotis_profile.php">Εργοδότης</a>
        </div>

    <!-- </div> -->
</div>

<div id="main_wrapper" class="wrapper">
    <h4>Υπηρεσίες για Εργοδότες</h4>
    <table align="center">
        <tr>
            <td>• <a href="undercontruction.php">Μαζική Ταυτοποίηση Ασφαλισμένων</a></td>
            <td colspan="1">&nbsp;</td>
            <td>• <a href="undercontruction.php">Υποβολή Αναλυτικής Περιοδικής Δήλωσης</a></td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td>• <a href="print.php">Εκτύπωση Βεβαιώσεων</a></td>
            <td colspan="1">&nbsp;</td>
            <td>• <a href="undercontruction.php">Ποσό Εισφορών που έχουν καταβληθεί για  <br>κάθε Εργαζόμενο</a></td>
        </tr>
    </table>
</div>

<div id="footer_wrapper" class="wrapper">

     <div id="footer">
        Copyright © 2018 <span style="color:#b4d8ee">IKA</span> Design: <span style="color:#b4d8ee">jojo maltom</span>
    </div>

</div>
</body>
</html>
