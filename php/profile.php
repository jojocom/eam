<?php
    if(isset($_COOKIE['username'])) {
        if (isset($_POST['usrnm'])) {
            setcookie('username', $_POST['usrnm'], time() + (60*60*7*24), "/");
            $username = $_POST['usrnm'];
        } else {
            $username = $_COOKIE['username'];
        }

        require_once 'baselogin.php';
        $conn = new mysqli($hn, $un, $pw, $db);
        if($conn->connect_error) die($conn->connect_error);
        $query = "SELECT * FROM `users` WHERE username='$username'";
        $result = $conn->query($query);
        if(! $result) die($conn->error);
        $rows = $result->num_rows;
        if($rows == 1) {
            $result->data_seek(0);
            $name = $result->fetch_assoc()['name'];
            $result->data_seek(0);
            $surname = $result->fetch_assoc()['surname'];
            $result->data_seek(0);
            $fathername = $result->fetch_assoc()['fathername'];
            $result->data_seek(0);
            $mothername = $result->fetch_assoc()['mothername'];
            $result->data_seek(0);
            $AFM = $result->fetch_assoc()['AFM'];
            $result->data_seek(0);
            $password = $result->fetch_assoc()['password'];
            $result->data_seek(0);
            $email = $result->fetch_assoc()['email'];
            $result->data_seek(0);
            $type = $result->fetch_assoc()['type'];

        }
    }
 ?>
<!DOCTYPE html PUBLIC>
<html>
<head>
<title>IKA - Προφίλ Χρήστη</title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type"></head>
<link href="../css/profilestyle.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="header_wrapper" class="wrapper">

    <!-- <div id="header"> -->

    <div id="site_title">

    	<a href="index_profile.php"><img src="../images/logo.png" alt="IKA" /></a>
        <div>
            <a href="profile.php">Προφίλ Χρήστη </a><?php echo $username?>
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
                <li><a href="faq_profile.php">Συχνές Ερωτήσεις</a></li>
            </ul>
            <form id="search" align="right">
              <input type="text" name="search" placeholder="Search...">
            </form>
        </div>

        <div id="breadcrump">
            <a href="index_profile.php">Αρχική Σελίδα</a> > <a href="profile.php">Προφίλ Χρήστη</a>
        </div>

    <!-- </div> -->
</div>

<div id="main_wrapper" class="wrapper">
    <div id="choices">
        <ul>
            <li><a href="profile.php" class="current">Στοιχεία Χρήστη</a></li>
            <li><a href="stoixeiaAsfalisis.php">Στοιχεία Ασφάλισης</a></li>
            <li><a href="changeProfile.php">Αλλαγή Στοιχείων <br> Χρήστη</a></li>
        </ul>
    </div>
    <div id="profile">
        <h4>Προφίλ Χρήστη</h4>
        <table align="center">
            <tr>
                <td><u>Όνομα χρήστη</u></td>
                <td colspan="1">&nbsp;</td>
                <td><?php echo $username;?></td>
                <td colspan="1">&nbsp;</td><td colspan="1">&nbsp;</td>
                <td><u>Email</u></td>
                <td colspan="1">&nbsp;</td>
                <td><?php echo $email;?></td>
            </tr>
            <tr>
                <td colspan="1">&nbsp;</td>
            </tr>
            <tr>
                <td><u>Όνομα</u></td>
                <td colspan="1">&nbsp;</td>
                <td><?php echo $name;?></td>
                <td colspan="1">&nbsp;</td><td colspan="1">&nbsp;</td>
                <td><u>Επώνυμο</u></td>
                <td colspan="1">&nbsp;</td>
                <td><?php echo $surname;?></td>
            </tr>
            <tr>
                <td colspan="1">&nbsp;</td>
            </tr>
            <tr>
                <td><u>Πατρώνυμο</u></td>
                <td colspan="1">&nbsp;</td>
                <td><?php echo $fathername;?></td>
                <td colspan="1">&nbsp;</td><td colspan="1">&nbsp;</td>
                <td><u>Μητρώνυμο</u></td>
                <td colspan="1">&nbsp;</td>
                <td><?php echo $mothername;?></td>
            </tr>
            <tr>
                <td colspan="1">&nbsp;</td>
            </tr>
            <tr>
                <td><u>ΑΦΜ</u></td>
                <td colspan="1">&nbsp;</td>
                <td><?php echo $AFM;?></td>
                <td colspan="1">&nbsp;</td><td colspan="1">&nbsp;</td>
                <td><u>Ομάδα Χρήστη</td>
                <td colspan="1">&nbsp;</td>
                <td><?php echo $type;?></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="1">&nbsp;</td>
                <td></td>
                <td colspan="1">&nbsp;</td><td colspan="1">&nbsp;</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="1">&nbsp;</td>
                <td></td>
                <td colspan="1">&nbsp;</td><td colspan="1">&nbsp;</td>
                <td></td>
                <td><td><form action="../index.php"><input type="submit" value="Αποσύνδεση" /></form></td>
            </tr>
        </table>
    </div>
</div>

<div id="footer_wrapper" class="wrapper">
     <div id="footer">
        Copyright © 2018 <span style="color:#b4d8ee">IKA</span>
    </div>
</div>
</body>
</html>
