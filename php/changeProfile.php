<?php
    if(isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];

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
            <a href="index_profile.php">Αρχική Σελίδα</a> > <a href="profile.php">Προφίλ Χρήστη</a> > <a href="changeProfile.php">Αλλαγή Στοιχείων</a>
        </div>

    <!-- </div> -->
</div>

<div id="main_wrapper" class="wrapper">
    <div id="choices">
        <ul>
            <li><a href="profile.php">Στοιχεία Χρήστη</a></li>
            <li><a href="stoixeiaAsfalisis.php">Στοιχεία Ασφάλισης</a></li>
            <li><a href="changeProfile.php" class="current">Αλλαγή Στοιχείων <br> Χρήστη</a></li>
        </ul>
    </div>
    <div id="profile">
        <form name="register" action="changeProfile.php" method="post">
            <h4>Αλλαγή Στοιχείων</h4>
            <table align="center">
                <tr>
                    <td>Όνομα</td>
                    <td><input type="text" name="name" required="required" pattern="^[a-zA-Zα-ωΑ-ΩΆ-Ώά-ώ]+$" title="Μή έγκυρο όνομα"
                        <?php
                            echo "value='$name'";
                         ?>
                    /></td>
                    <td>Όνομα χρήστη</td>
                    <td><input type="text" name="usrnm" required="required" readonly="readonly" pattern="^[a-zA-Zα-ωΑ-Ω0-9]+$"
                        <?php
                            echo "value='$username'";
                         ?>
                    /></td>
                </tr>
                <tr>
                    <td>Επώνυμο</td>
                    <td><input type="text" name="surname" required="required" pattern="^[a-zA-Zα-ωΑ-ΩΆ-Ώά-ώ]+$" title="Μή έγκυρο επώνυμο"
                        <?php
                            echo "value='$surname'";
                         ?>
                    /></td>
                    <td>Συνθηματικό</td>
                    <td><input type="password" name="pswrd" required="required"
                        <?php
                            echo "value='$password'";
                         ?>
                    /></td>
                </tr>
                <tr>
                    <td>Πατρώνυμο</td>
                    <td><input type="text" name="papaname" pattern="^[a-zA-Zα-ωΑ-ΩΆ-Ώά-ώ]+$" required="required" title="Μή έγκυρο πατρώνυμο"
                        <?php
                            echo "value='$fathername'";
                         ?>
                    /></td>
                    <td>Επαλήθευση συνθηματικού</td>
                    <td><input type="password" name="checkPswrd" required="required"
                        <?php
                            echo "value='$password'";
                         ?>
                    /></td>
                </tr>
                <tr>
                    <td>Μητρώνυμο</td>
                    <td><input type="text" name="mamaname" pattern="^[a-zA-Zα-ωΑ-ΩΆ-Ώά-ώ]+$" required="required" title="Μή έγκυρο μητρώνυμο"
                        <?php
                                echo "value='$mothername'";
                         ?>
                    /></td>
                    <td>Email</td>
                    <td><input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required" title="Μή έγκυρο email"
                        <?php
                                echo "value='$email'";
                         ?>
                    /></td>
                </tr>
                <tr>
                    <td>ΑΦΜ</td>
                    <td><input type="text" name="afm" minlength="9" maxlength="9" pattern="\d*" required="required" title="Μή έγκυρο ΑΦΜ"
                        <?php
                            echo "value='$AFM'";
                         ?>
                    /></td>
                    <td>Ομάδα Χρήστη</td>
                    <td>
                        <input type="radio" name="type" value="Συνταξιούχος"
                        <?php
                            if ($type == "Συνταξιούχος"){
                                echo 'checked="checked"';
                            }
                        ?>
                        > Συνταξιούχος <br>
                        <input type="radio" name="type" value="Ασφαλισμένος"
                        <?php
                            if ($type == "Ασφαλισμένος"){
                                echo 'checked="checked"';
                            }
                        ?>
                        > Ασφαλισμένος <br>
                        <input type="radio" name="type" value="Εργοδότης"
                        <?php
                            if ($type == "Εργοδότης"){
                                echo 'checked="checked"';
                            }
                        ?>
                        > Εργοδότης
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="submit"  value="Τροποποίηση"/>
                    <input type="reset" value="Reset"/></td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_POST['pswrd']) && isset($_POST['checkPswrd']) && ($_POST['pswrd'] != $_POST['checkPswrd'])) {
                echo "<div id='error_window' align='center'>";
                $message = "<br><span id='error'>Ο κωδικός με τον έλεγχο δεν ταυτίζονται!.</span>";
                echo "$message";
                echo "</div>";
            } else {
                if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['usrnm']) && isset($_POST['pswrd']) && isset($_POST['papaname']) && isset($_POST['mamaname']) && isset($_POST['email']) && isset($_POST['afm'])){
                    $name     = $_POST['name'];
                    $surname  = $_POST['surname'];
                    $username = $_POST['usrnm'];
                    $password = $_POST['pswrd'];
                    $papaname = $_POST['papaname'];
                    $mamaname = $_POST['mamaname'];
                    $email    = $_POST['email'];
                    $afm      = $_POST['afm'];
                    $type     = $_POST['type'];

                    require_once 'baselogin.php';
                    $conn = new mysqli($hn, $un, $pw, $db);
                    if($conn->connect_error) die($conn->connect_error);
                    $query2 = "UPDATE `users` SET `name`='$name',`surname`='$surname',`fathername`='$papaname',`mothername`='$mamaname',`AFM`='$afm',`username`='$username',`password`='$password',`email`='$email',`type`='$type' WHERE `username`='$username'";
                    $result = $conn->query($query2);
                    if(! $result) die($conn->error);
                    // echo "<script>window.location = '../index_profile.php'</script>";
                    // echo $username;
                    echo '<form id="myForm" action="profile.php" method="post">
                    <input type="hidden" name="usrnm" value="'.$username.'">
                    </form>
                    <script type="text/javascript">
                        document.getElementById("myForm").submit();
                    </script>';
                }
            }
        ?>
    </div>
</div>

<div id="footer_wrapper" class="wrapper">
     <div id="footer">
        Copyright © 2018 <span style="color:#b4d8ee">IKA</span>
    </div>
</div>
</body>
</html>
