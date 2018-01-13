<!DOCTYPE html PUBLIC>
<html>
<head>
<title>IKA - Αρχική Σελίδα</title>

<link href="css/index_style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="header_wrapper" class="wrapper">

        <div id="site_title">

        	<a href="index.php"><img src="images/logo.png" alt="IKA" /></a>
            <div>
                <a href="php/login.php">Σύνδεση</a> / <a href="php/register.php">Εγγραφή</a> Χρήστη
            </div>
        </div>

        <div id="menu">
            <ul>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Ομάδες Χρηστών</a>
                    <div class="dropdown-content">
                        <a href="php/suntaxiouxos.php">Συνταξιούχος</a>
                        <a href="php/asfalismenos.php">Ασφαλισμένος</a>
                        <a href="php/ergodotis.php">Εργοδότης</a>
                    </div>
                </li>
                <li><a href="php/announcements.php">Ανακοινώσεις</a></li>
                <li><a href="php/branches.php">Υποκαταστήματα</a></li>
                <li><a href="php/faq.php">Συχνές Ερωτήσεις</a></li>
            </ul>
            <form id="search" align="right">
              <input type="text" name="search" placeholder="Search...">
            </form>
        </div>


        <div id="breadcrump">
            <a href="index.php">Αρχική Σελίδα</a>
        </div>

</div>

<div id="main_wrapper" class="wrapper">
    <div id="news">
        <a href="php/announcements.php"><h3>Ανακοινώσεις</h3></a></li>
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
                <td><a href="php/suntaxiouxos.php" class="container"><img src="images\suntaksiouxos_arxiki_selida.jpg" alt="suntaxiouxos" /></a></td>
                <td><a href="php/asfalismenos.php" class="container"><img src="images\employee_arxiki_selida.jpg" alt="asfalismenos" /></a></td>
                <td><a href="php/ergodotis.php" class="container"><img src="images\employer_arxiki_selida.jpg" alt="ergodotis" /></a></td>
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
