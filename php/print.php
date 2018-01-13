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
            $suntaksi = '';
            if ($type == "Συνταξιούχος") {
                $query = "SELECT * FROM `suntaksiouxoi` WHERE username='$username'";
                $result = $conn->query($query);
                if(! $result) die($conn->error);
                $rows = $result->num_rows;
                if($rows == 1) {
                    $result->data_seek(0);
                    $suntaksi = $result->fetch_assoc()['suntaksi'];
                }
            }
            if ($type == "Ασφαλισμένος") {
                $query = "SELECT * FROM `asfalismenoi` WHERE username='$username'";
                $result = $conn->query($query);
                if(! $result) die($conn->error);
                $rows = $result->num_rows;
                if($rows == 1) {
                    $result->data_seek(0);
                    $suntaksi = $result->fetch_assoc()['suntaksi'];
                }
            }
        }
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
            <a href="index_profile.php">Αρχική Σελίδα</a> >
            <?php
                if ($type == 'Ασφαλισμένος') {
                    echo '<a href="asfalismenos_profile.php">Ασφαλισμένος</a>';
                } else if ($type == 'Συνταξιούχος') {
                    echo '<a href="suntaxiouxos_profile.php">Συνταξιούχος</a>';
                } else if ($type == 'Εργοδότης') {
                    echo '<a href="ergodotis_profile.php">Εργοδότης</a>';
                }
             ?>
        </div>

    <!-- </div> -->
</div>

<div id="main_wrapper" class="wrapper">
    <div id="printableArea">
        <h1>Βεβαίωση Ασφάλισης</h1>
        <p>
            <?php
                if ($type == 'Ασφαλισμένος') {
                    $type = '';
                }
                echo 'Βεβαιώνεται ότι ο '.$surname.' '.$name.' με πατρώνυμο '.$fathername.' και μητρώνυμο '.$mothername.' είναι '.$type.' ασφαλισμένος στο ΙΚΑ.';
            ?>
        </p>
    </div>
</div>
<div id="button">
    <input type="button" onclick="printDiv('printableArea')" value="Εκτύπωση" />
    <script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
</div>

<div id="footer_wrapper" class="wrapper">

     <div id="footer">
        Copyright © 2018 <span style="color:#b4d8ee">IKA</span> Design: <span style="color:#b4d8ee">jojo maltom</span>
    </div>

</div>
</body>
</html>
