<?php
    if (isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
    }
 ?>
<!DOCTYPE html PUBLIC>
<html>
<head>
<title>IKA - Συχνές Ερωτήσεις</title>

<link href="../css/faq_style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="header_wrapper" class="wrapper">

    <!-- <div id="header"> -->

        <div id="site_title">

        	<a href="../index.php"><img src="../images/logo.png" alt="business template" /></a>
            <div>
                <a href="profile.php">Προφίλ Χρήστη</a> <?php echo $username?>
            </div>
        </div>

        <!-- <div class="cleaner_h10"></div> -->

        <div id="menu">

            <ul>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Ομάδες Χρηστών</a>
                    <div class="dropdown-content">
                        <a href="suntaxiouxos_profile.php">Συνταξιούχος</a>
                        <a href="asfalismenos_profile.php">Ασφαλισμένος</a>
                        <a href="ergodotis_profile.php">Εργοδότης</a>
                    </div>
                </li>
                <li><a href="announcements_profile.php">Ανακοινώσεις</a></li>
                <li><a href="branches_profile.php">Υποκαταστήματα</a></li>
                <li><a href="faq_profile.php" class="current">Συχνές Ερωτήσεις</a></li>
            </ul>
            <form id="search" align="right">
              <input type="text" name="search" placeholder="Search...">
            </form>
        </div>

        <div id="breadcrump">
            <a href="index_profile.php">Αρχική Σελίδα</a> > <a href="faq_profile.php">Συχνές Ερωτήσεις</a>
        </div>

    <!-- </div> -->
</div>

<div id="main_wrapper" class="wrapper">
    <div id="choices">
        <ul>
            <li><a href="undercontruction.php">Συνταξιούχοι</a></li>
            <li><a href="undercontruction.php">Ασφαλισμένοι</a></li>
            <li><a href="undercontruction.php">Εργοδότες</a></li>
            <li><a href="undercontruction.php">Ακρωνύμια</a></li>
        </ul>
    </div>
    <div id="faqs">
        <h4>Συχνές Ερωτήσεις</h4>
        <table align="center">
            <tr>
                <td><u>• Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</u></td>
                <td colspan="1">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="1">&nbsp;</td>
            </tr>
            <tr>
                <td><u>• Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</u></td>
                <td colspan="1">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="1">&nbsp;</td>
            </tr>
            <tr>
                <td><u>• Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</u></td>
                <td colspan="1">&nbsp;</td>
            </tr>
        </table>
    </div>
</div>

<div id="footer_wrapper" class="wrapper">

     <div id="footer">
        Copyright © 2018 <span style="color:#b4d8ee">IKA</span> Design: <span style="color:#b4d8ee">jojo maltom</span>
    </div>

</div>
</body>
</html>
