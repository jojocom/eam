<!DOCTYPE html PUBLIC>
<html>
<head>
<title>IKA - Σύνδεση Χρήστη</title>
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
            <a href="../index.php">Αρχική Σελίδα</a> > <a href="login.php">Σύνδεση Χρήστη</a>
        </div>

</div>

<div id="main_wrapper" class="wrapper">
    <form name="login" id="login" align="center" action="login.php" method="post">
        <h4>Σύνδεση Χρήστη</h4>
        <table align="center">
            <tr>
                <td>Όνομα</td>
                <td><input type="text" name="userid"/></td>
            </tr>
            <tr>
                <td>Κωδικός</td>
                <td><input type="password" name="pswrd"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login"/>
                <input type="reset" value="Reset"/>
                </td>
            </tr>
        </table>
        Είσαι νέος χρήστης;<br><a href="register.php">Δημιουργία νέου λογαριασμού</a>
    </form>
        <?php
            if(isset($_POST['userid'])){
                $username = $_POST['userid'];
                $password = $_POST['pswrd'];
                require_once 'baselogin.php';
                $conn = new mysqli($hn, $un, $pw, $db);
                if($conn->connect_error) die($conn->connect_error);
                $query = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
                $result = $conn->query($query);
                if(! $result) die($conn->error);
                $rows = $result->num_rows;
                if($rows == 1) {
                    echo '<form id="myForm" action="index_profile.php" method="post">
                    <input type="hidden" name="userid" value="'.$username.'">
                    </form>
                    <script type="text/javascript">
                        document.getElementById("myForm").submit();
                    </script>';
                } else {
                    echo "<div id='error_window' align='center'>";
                    $message = "<br><span id='error'>Λάθος κωδικός ή όνομα χρήστη</span>";
                    echo "$message";
                    echo "</div>";
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
