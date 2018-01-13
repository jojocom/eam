<!DOCTYPE html PUBLIC>
<html>
<head>
<title>IKA - Εγγραφή Χρήστη</title>
<meta charset="UTF-8">
<link href="../css/logreg_style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="header_wrapper" class="wrapper">

    <!-- <div id="header"> -->

    <div id="site_title">

        <a href="../index.php"><img src="../images/logo.png" alt="business template" /></a>
        <div>
            <a href="login.php">Σύνδεση</a> / <a href="register.php">Εγγραφή</a> Χρήστη
        </div>
    </div>

        <!-- <div class="cleaner_h10"></div> -->

        <div id="menu">

            <ul>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Ομάδες Χρηστών</a>
                    <div class="dropdown-content">
                        <a href="suntaxiouxos.php">Συνταξιούχος</a>
                        <a href="asfalismenos.php">Ασφαλισμένος</a>
                        <a href="ergodotis.php">Εργοδότης</a>
                    </div>
                </li>
                <li><a href="announcements.php">Ανακοινώσεις</a></li>
                <li><a href="branches.php">Υποκαταστήματα</a></li>
                <li><a href="faq.php">Συχνές Ερωτήσεις</a></li>
            </ul>
            <form id="search" align="right">
              <input type="text" name="search" placeholder="Search...">
            </form>
        </div>

        <div id="breadcrump">
            <a href="../index.php">Αρχική Σελίδα</a> > <a href="register.php">Εγγραφή Χρήστη</a>
        </div>

    <!-- </div> -->
</div>
<div id="main_wrapper" class="wrapper">
    <form name="register" id="register" align="center" action="register.php" method="post">
        <h4>Εγγραφή Χρήστη</h4>
        <table align="center">
            <tr>
                <td>Όνομα</td>
                <td><input type="text" name="name" required="required" pattern="^[a-zA-Zα-ωΑ-ΩΆ-Ώά-ώ]+$" title="Μή έγκυρο όνομα"
                    <?php
                        if (isset($_POST['name'])) {
                            $name     = $_POST['name'];
                            echo "value='$name'";
                        }
                     ?>
                /></td>
                <td>Όνομα χρήστη</td>
                <td><input type="text" name="usrnm" required="required" pattern="^[a-zA-Zα-ωΑ-Ω0-9]+$"
                    <?php
                        if (isset($_POST['usrnm'])) {
                            $usrnm     = $_POST['usrnm'];
                            echo "value='$usrnm'";
                        }
                     ?>
                /></td>
            </tr>
            <tr>
                <td>Επώνυμο</td>
                <td><input type="text" name="surname" required="required" pattern="^[a-zA-Zα-ωΑ-ΩΆ-Ώά-ώ]+$" title="Μή έγκυρο επώνυμο"
                    <?php
                        if (isset($_POST['surname'])) {
                            $surname     = $_POST['surname'];
                            echo "value='$surname'";
                        }
                     ?>
                /></td>
                <td>Συνθηματικό</td>
                <td><input type="password" name="pswrd" required="required"/></td>
            </tr>
            <tr>
                <td>Πατρώνυμο</td>
                <td><input type="text" name="papaname" pattern="^[a-zA-Zα-ωΑ-ΩΆ-Ώά-ώ]+$" required="required" title="Μή έγκυρο πατρώνυμο"
                    <?php
                        if (isset($_POST['papaname'])) {
                            $papaname     = $_POST['papaname'];
                            echo "value='$papaname'";
                        }
                     ?>
                /></td>
                <td>Επαλήθευση συνθηματικού</td>
                <td><input type="password" name="checkPswrd" required="required"/></td>
            </tr>
            <tr>
                <td>Μητρώνυμο</td>
                <td><input type="text" name="mamaname" pattern="^[a-zA-Zα-ωΑ-ΩΆ-Ώά-ώ]+$" required="required" title="Μή έγκυρο μητρώνυμο"
                    <?php
                        if (isset($_POST['mamaname'])) {
                            $mamaname     = $_POST['mamaname'];
                            echo "value='$mamaname'";
                        }
                     ?>
                /></td>
                <td>Email</td>
                <td><input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required" title="Μή έγκυρο email"
                    <?php
                        if (isset($_POST['email'])) {
                            $email     = $_POST['email'];
                            echo "value='$email'";
                        }
                     ?>
                /></td>
            </tr>
            <tr>
                <td>ΑΦΜ</td>
                <td><input type="text" name="afm" minlength="9" maxlength="9" pattern="\d*" required="required" title="Μή έγκυρο ΑΦΜ"
                    <?php
                        if (isset($_POST['afm'])) {
                            $afm     = $_POST['afm'];
                            echo "value='$afm'";
                        }
                     ?>
                /></td>
                <td>Ομάδα Χρήστη</td>
                <td>
                    <input type="radio" name="type" value="Συνταξιούχος" checked="checked"> Συνταξιούχος <br>
                    <input type="radio" name="type" value="Ασφαλισμένος"> Ασφαλισμένος <br>
                    <input type="radio" name="type" value="Εργοδότης"> Εργοδότης
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="submit"  value="Ολοκλήρωση Εγγραφής"/>
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
                    // select to see if username exists
                    $query1 = "SELECT * FROM `users` WHERE username='$username'";
                    $result = $conn->query($query1);
                    if(! $result) die($conn->error);
                    $rows = $result->num_rows;
                    // if rows == 0 -> insert
                    if($rows == 0) {
                        // echo "here";
                        $query2 = "INSERT INTO `users`(`name`, `surname`, `fathername`, `mothername`, `AFM`, `username`, `password`, `email`,`type`) VALUES ('$name','$surname','$papaname','$mamaname','$afm','$username','$password','$email','$type')";
                        $result = $conn->query($query2);
                        if(! $result) die($conn->error);
                        // echo "<script>window.location = '../index_profile.php'</script>";
                        // echo $username;
                        echo '<form id="myForm" action="index_profile.php" method="post">
                        <input type="hidden" name="usrnm" value="'.$username.'">
                        </form>
                        <script type="text/javascript">
                            document.getElementById("myForm").submit();
                        </script>';
                    }  else {                  // else -> alert
                        echo "<div id='error_window' align='center'>";
                        $message = "<br><span id='error'>Το όνομα χρήστη χρησιμοποείται ήδη</span>";
                        echo "$message";
                        echo "</div>";
                    }
                }
            }
        ?>
</div>

<div id="footer_wrapper" class="wrapper">

     <div id="footer">
        Copyright © 2018 <span style="color:#b4d8ee">IKA</span> Design: <span style="color:#b4d8ee">jojo maltom</span>
    </div>

</div>
</body>
</html>
