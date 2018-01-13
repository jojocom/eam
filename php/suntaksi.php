<?php
    if (isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
    }
 ?>
<!DOCTYPE html PUBLIC>
<html>
<head>
<title>IKA - Ασφαλισμένος</title>

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
            <a href="index_profile.php">Αρχική Σελίδα</a> > <a href="suntaxiouxos_profile.php">Συνταξιούχος</a> > <a href="suntaksi.php">Υπολογισμός Ποσού Σύνταξης</a>
        </div>

    <!-- </div> -->
</div>

<div id="main_wrapper" class="wrapper">
    <form name="calculation" id="calculation" action="suntaksi.php" method="post" align="center">
        <table align="center">
            <tr>
                <th>Έτος</th>
                <th>Αποδοχές</th>
                <th>Ημέρες Εργασίας</th>
            </tr>
            <tr>
                <td>2008</td>
                <td><input type="text" name="2008" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2008'])) {
                            echo 'value="'.$_POST['2008'].'"';
                        }
                     ?>
                ></td>
                <td><input type="text" name="2008dates" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2008dates'])) {
                            echo 'value="'.$_POST['2008dates'].'"';
                        }
                     ?>
                ></td>
            </tr>
            <tr>
                <td>2009</td>
                <td><input type="text" name="2009" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2009'])) {
                            echo 'value="'.$_POST['2009'].'"';
                        }
                     ?>
                ></td>
                <td><input type="text" name="2009dates" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2009dates'])) {
                            echo 'value="'.$_POST['2009dates'].'"';
                        }
                     ?>
                ></td>
            </tr>
            <tr>
                <td>2010</td>
                <td><input type="text" name="2010" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2010'])) {
                            echo 'value="'.$_POST['2010'].'"';
                        }
                     ?>
                ></td>
                <td><input type="text" name="2010dates" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2010dates'])) {
                            echo 'value="'.$_POST['2010dates'].'"';
                        }
                     ?>
                ></td>
            </tr>
            <tr>
                <td>2011</td>
                <td><input type="text" name="2011" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2011'])) {
                            echo 'value="'.$_POST['2011'].'"';
                        }
                     ?>
                ></td>
                <td><input type="text" name="2011dates" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2011dates'])) {
                            echo 'value="'.$_POST['2011dates'].'"';
                        }
                     ?>
                ></td>
            </tr>
            <tr>
                <td>2012</td>
                <td><input type="text" name="2012" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2012'])) {
                            echo 'value="'.$_POST['2012'].'"';
                        }
                     ?>
                ></td>
                <td><input type="text" name="2012dates" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2012dates'])) {
                            echo 'value="'.$_POST['2012dates'].'"';
                        }
                     ?>
                ></td>
            </tr>
            <tr>
                <td>2013</td>
                <td><input type="text" name="2013" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2013'])) {
                            echo 'value="'.$_POST['2013'].'"';
                        }
                     ?>
                ></td>
                <td><input type="text" name="2013dates" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2013dates'])) {
                            echo 'value="'.$_POST['2013dates'].'"';
                        }
                     ?>
                ></td>
            </tr>
            <tr>
                <td>2014</td>
                <td><input type="text" name="2014" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2014'])) {
                            echo 'value="'.$_POST['2014'].'"';
                        }
                     ?>
                ></td>
                <td><input type="text" name="2014dates" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2014dates'])) {
                            echo 'value="'.$_POST['2014dates'].'"';
                        }
                     ?>
                ></td>
            </tr>
            <tr>
                <td>2015</td>
                <td><input type="text" name="2015" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2015'])) {
                            echo 'value="'.$_POST['2015'].'"';
                        }
                     ?>
                ></td>
                <td><input type="text" name="2015dates" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2015dates'])) {
                            echo 'value="'.$_POST['2015dates'].'"';
                        }
                     ?>
                ></td>
            </tr>
            <tr>
                <td>2016</td>
                <td><input type="text" name="2016" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2016'])) {
                            echo 'value="'.$_POST['2016'].'"';
                        }
                     ?>
                ></td>
                <td><input type="text" name="2016dates" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2016dates'])) {
                            echo 'value="'.$_POST['2016dates'].'"';
                        }
                     ?>
                ></td>
            </tr>
            <tr>
                <td>2017</td>
                <td><input type="text" name="2017" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2017'])) {
                            echo 'value="'.$_POST['2017'].'"';
                        }
                     ?>
                ></td>
                <td><input type="text" name="2017dates" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['2017dates'])) {
                            echo 'value="'.$_POST['2017dates'].'"';
                        }
                     ?>
                ></td>
            </tr>
        </table>
        <table align="center">
            <tr>
                <td>Σύνολο Ημερών Εργασίας <br>στην ασφαλιστική ζωή</td>
                <td><input type="text" name="dates" pattern="\d*" required="required"
                    <?php
                        if (isset($_POST['dates'])) {
                            echo 'value="'.$_POST['dates'].'"';
                        }
                     ?>
                    ></td>
                <td colspan="1">&nbsp;</td>
            </tr>
            <tr>
                <td>Τύπος Σύνταξης</td>
                <td>
                    <?php
                        echo '<select>
                        <option value="ΓΗΡΑΤΟΣ">ΓΗΡΑΤΟΣ</option>
                        <option value="ΑΝΑΠΗΡΙΑΣ">ΑΝΑΠΗΡΙΑΣ</option>
                        <option value="ΘΑΝΑΤΟΥ ΑΣΦΑΛΙΣΜΕΝΟΥ">ΘΑΝΑΤΟΥ ΑΣΦΑΛΙΣΜΕΝΟΥ</option>
                        <option value="ΘΑΝΑΤΟΥ ΣΥΝΤΑΞΙΟΥΧΟΥ">ΘΑΝΑΤΟΥ ΣΥΝΤΑΞΙΟΥΧΟΥ</option>
                        </select>';
                     ?>
                </td>
                <td colspan="1">&nbsp;</td>
            </tr>
            <tr>
                <td>Συνταξιοδοτικός Φορέας</td>
                <td>
                    <?php
                        echo '<select>
                        <option value="ΙΚΑ-ΕΤΑΜ">ΙΚΑ-ΕΤΑΜ</option>
                        <option value="ΕΤΕΑΜ">ΕΤΕΑΜ</option>
                        </select>';
                     ?>
                </td>
                <td colspan="1">&nbsp;</td>
            </tr>
        </table>
        <div id="calc" align="right">
            <input type="submit" value="Υπολογισμός">
            <?php
                if (isset($_POST['2008'])) {
                    require_once 'baselogin.php';
                    $conn = new mysqli($hn, $un, $pw, $db);
                    if($conn->connect_error) die($conn->connect_error);
                    // select to see if username exists
                    $query = "SELECT * FROM `users` WHERE username='$username' AND `type`='Συνταξιούχος'";
                    $result = $conn->query($query);
                    if(! $result) die($conn->error);
                    $rows = $result->num_rows;
                    if($rows == 1) {
                        $sum = 0;
                        for ($i=2008; $i < 2018; $i++) {
                            $sum = $sum + ($_POST[$i]/$_POST[$i."dates"]);
                        }
                        $sum = $sum * $_POST['dates'];
                        echo '<br><input type="text" value="'.$sum.'">';
                        require_once 'baselogin.php';
                        $conn = new mysqli($hn, $un, $pw, $db);
                        if($conn->connect_error) die($conn->connect_error);
                        // select to see if username exists
                        $query1 = "SELECT * FROM `suntaksiouxoi` WHERE username='$username'";
                        $result = $conn->query($query1);
                        if(! $result) die($conn->error);
                        $rows = $result->num_rows;
                        if($rows == 0) {
                            $query2 = "INSERT INTO `suntaksiouxoi`(`username`, `suntaksi`) VALUES ('$username','$sum')";
                            $result = $conn->query($query2);
                        } else {
                            $query2 = "UPDATE `suntaksiouxoi` SET `suntaksi`='$sum' WHERE `username`='$username'";
                            $result = $conn->query($query2);
                        }
                    }
                }
            ?>
        </div>
    </form>
</div>

<div id="footer_wrapper" class="wrapper">

     <div id="footer">
        Copyright © 2018 <span style="color:#b4d8ee">IKA</span> Design: <span style="color:#b4d8ee">jojo maltom</span>
    </div>

</div>
</body>
</html>
