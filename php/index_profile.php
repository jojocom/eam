<?php
    if (isset($_POST['usrnm'])) {
        setcookie('username', $_POST['usrnm'], time() + (60*60*7*24), "/");
        $username = $_POST['usrnm'];
    }else if (isset($_POST['userid'])) {
        setcookie('username', $_POST['userid'], time() + (60*60*7*24), "/");
        $username = $_POST['userid'];
    }else if (isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
    }
 ?>
<!DOCTYPE html PUBLIC>
<html>
<head>
<title>IKA - Αρχική Σελίδα</title>

<link href="../css/index_style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="header_wrapper" class="wrapper">

    <!-- <div id="header"> -->

        <div id="site_title">

        	<a href="index_profile.php"><img src="../images/logo.png" alt="IKA" /></a>
            <div>
                <a href="profile.php">Προφίλ Χρήστη</a> <?php echo $username?>
            </div>
        </div>

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
                <li><a href="faq_profile.php">Συχνές Ερωτήσεις</a></li>
            </ul>
            <form id="search" align="right">
              <input type="text" name="search" placeholder="Search...">
            </form>
        </div>

        <div id="breadcrump">
            <a href="index_profile.php">Αρχική Σελίδα</a>
        </div>

    <!-- </div> -->
</div>

<div id="main_wrapper" class="wrapper">
    <div id="news">
        <a href="announcements_profile.php"><h3>Ανακοινώσεις</h3></a></li>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <p>
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>

    <div id="categories">
        <h3>Είμαι...</h3>
        <table align="center">
            <tr>
                <td><a href="suntaxiouxos_profile.php" class="container"><img src="../images\suntaksiouxos_arxiki_selida.jpg" alt="suntaxiouxos" /></a></td>
                <td><a href="asfalismenos_profile.php" class="container"><img src="../images\employee_arxiki_selida.jpg" alt="asfalismenos" /></a></td>
                <td><a href="ergodotis_profile.php" class="container"><img src="../images\employer_arxiki_selida.jpg" alt="ergodotis" /></a></td>
            </tr>
            <tr>
                <td>Συνταξιούχος</td>
                <td>Ασφαλισμένος</td>
                <td>Εργοδότης</td>
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
