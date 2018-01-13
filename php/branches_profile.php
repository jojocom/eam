<?php
    if (isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
    }
 ?>
<!DOCTYPE html PUBLIC>
<html>
<head>
<title>IKA - Υποκαταστήματα</title>

<link href="../css/branches_style.css" rel="stylesheet" type="text/css" />

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
                    <a href="#" class="dropbtn">Ομάδες Χρηστών</a>
                    <div class="dropdown-content">
                        <a href="suntaxiouxos_profile.php">Συνταξιούχος</a>
                        <a href="asfalismenos_profile.php">Ασφαλισμένος</a>
                        <a href="ergodotis_profile.php">Εργοδότης</a>
                    </div>
                </li>
                <li><a href="announcements_profile.php">Ανακοινώσεις</a></li>
                <li><a href="branches_profile.php" class="current">Υποκαταστήματα</a></li>
                <li><a href="faq_profile.php">Συχνές Ερωτήσεις</a></li>
            </ul>
            <form id="search" align="right">
              <input type="text" name="search" placeholder="Search...">
            </form>
        </div>

        <div id="breadcrump">
            <a href="index_profile.php">Αρχική Σελίδα</a> > <a href="branches_profile.php">Υποκαταστήματα</a>
        </div>

    <!-- </div> -->
</div>

<div id="main_wrapper" class="wrapper">
    <div id="map">
        <img src="../images/branchesmap.png" alt="branches map" />
    </div>
    <div id="branchesTable">
        <table>
            <tbody>
            <tr>
                <th>#</th>
                <th>Υποκ/μα</th>
                <th>Τηλέφωνο</th>
                <th>E-mail</th>
            </tr>
            <tr>
                <td>1</td>
                <td>ΑΘΗΝΑΣ</td>
                <td>2107700000</td>
                <td>AthinasA@ika.gr</td>
            </tr>
            <tr>
                <td>2</td>
                <td>ΖΩΓΡΑΦΟΥ</td>
                <td>2107711111</td>
                <td>Zwgrafou@ika.gr</td>
            </tr>
            <tr>
                <td>3</td>
                <td>ΠΑΓΚΡΑΤΙΟΥ</td>
                <td>2107722222</td>
                <td>Pagkrati@ika.gr</td>
            </tr>
            <tr>
                <td>4</td>
                <td>ΠΕΙΡΑΙΑ</td>
                <td>2107733333</td>
                <td>Peiraias@ika.gr</td>
            </tr>
            <tr>
                <td>5</td>
                <td>ΑΜΠΕΛΟΚΗΠΩΝ</td>
                <td>2107444444</td>
                <td>Ampelokipoi@ika.gr</td>
            </tr>
            <tr>
                <td>6</td>
                <td>ΑΘΗΝΑΣ Β</td>
                <td>2103455555</td>
                <td>AthinasB@ika.gr</td>
            </tr>
            <tr>
                <td>7</td>
                <td>ΠΕΡΙΣΤΕΡΙΟΥ</td>
                <td>2109366666</td>
                <td>Peristeri@ika.gr</td>
            </tr>
            <tr>
                <td>8</td>
                <td>ΚΟΛΩΝΑΚΙΟΥ</td>
                <td>2104577777</td>
                <td>Kolwnakiou@ika.gr</td>
            </tr>
            <tr>
                <td>9</td>
                <td>ΚΗΦΙΣΙΑΣ</td>
                <td>2104577777</td>
                <td>Kifisias@ika.gr</td>
            </tr>
            <tr>
                <td>10</td>
                <td>ΑΜΑΡΟΥΣΙΟΥ</td>
                <td>2104577777</td>
                <td>Marousi@ika.gr</td>
            </tr>
            <tr>
                <td>11</td>
                <td>ΑΘΗΝΑΣ Γ</td>
                <td>2104577777</td>
                <td>AthinasC@ika.gr</td>
            </tr>
            <tr>
                <td>12</td>
                <td>ΑΙΓΑΛΕΩ</td>
                <td>2104577777</td>
                <td>Aigaleo@ika.gr</td>
            </tr>
            <tr>
                <td>13</td>
                <td>ΓΑΛΑΤΣΙΟΥ</td>
                <td>2104577777</td>
                <td>Galatsi@ika.gr</td>
            </tr>
            <tr>
                <td>X</td>
                <td>Random</td>
                <td>210XXXXXXXX</td>
                <td>random@ika.gr</td>
            </tr>
            <tr>
                <td>X</td>
                <td>Random</td>
                <td>210XXXXXXXX</td>
                <td>random@ika.gr</td>
            </tr>
            <tr>
                <td>X</td>
                <td>Random</td>
                <td>210XXXXXXXX</td>
                <td>random@ika.gr</td>
            </tr>
            <tr>
                <td>X</td>
                <td>Random</td>
                <td>210XXXXXXXX</td>
                <td>random@ika.gr</td>
            </tr>
            <tr>
                <td>X</td>
                <td>Random</td>
                <td>210XXXXXXXX</td>
                <td>random@ika.gr</td>
            </tr>
            <tr>
                <td>X</td>
                <td>Random</td>
                <td>210XXXXXXXX</td>
                <td>random@ika.gr</td>
            </tr>
            <tr>
                <td>X</td>
                <td>Random</td>
                <td>210XXXXXXXX</td>
                <td>random@ika.gr</td>
            </tr>
            <tr>
                <td>X</td>
                <td>Random</td>
                <td>210XXXXXXXX</td>
                <td>random@ika.gr</td>
            </tr>
            <tr>
                <td>X</td>
                <td>Random</td>
                <td>210XXXXXXXX</td>
                <td>random@ika.gr</td>
            </tr>
            <tr>
                <td>X</td>
                <td>Random</td>
                <td>210XXXXXXXX</td>
                <td>random@ika.gr</td>
            </tr>
        </tbody>
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
