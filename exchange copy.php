<?php
session_start();
$s_s = $_SESSION['ex_send'];
$r_r = $_SESSION['ex_recive'];
// echo  $s_s;
// echo  $r_r;

if (!isset($_SESSION['loggedn']) || $_SESSION['loggedn'] != true) {
    header("location: user_login.php");
    exit;
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- custom font -->
    <link href="https://api.fontshare.com/css?f[]=clash-display@500,600,700,1&f[]=switzer@300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- custom css  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tailwind.output.css">
    <link rel="stylesheet" href="nav.css">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


    <title>Exchange</title>
</head>

<body>

    <!-- nav section -->


    <section class="nav_section">
        <div class="main_nav">
            <div class="nav_left">
                <a href="index.php"><img src="./logo.svg" alt="logo"></a>
            </div>
            <div class="nav_middle">
                <a class="navbar-brand" href="index.php">Exchange</a>
                <a class="navbar-brand" href="rate.php">Rates</a>
                <a class="navbar-brand" href="notice.php">Notice</a>
                <a class="navbar-brand" href="help.php">Help</a>
                <a class="navbar-brand" href="contact.php">Contact</a>
                <a class="navbar-brand" href="user.php">User</a>
            </div>
            <div class="nav_right">
                <a href="user_login.php"><button type="button" class="btn">Login</button></a>
                <a href="user_regester.php"><button type="button" class="btn btn-primary">Register</button></a>
            </div>
        </div>
    </section>

    <!-- nav for mobile -->
    <section class="mobile_nav">
        <div id="mySidenav" class="sidenav">
            <div>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <!-- <a href="#">Exchange</a> -->
                <a href="index.php">Exchange</a>
                <a href="rate.php">Rates</a>
                <a href="notice.php">Notice</a>
                <a href="help.php">Help</a>
                <a href="contact.php">Contact</a>
                <a href="user.php">User</a>
            </div>


            <div class="mob_button">
                <a href="user_login.php"><button type="submit" class="m_loogin">Login</button></a>
                <a href="user_regester.php"><button type="submit" class="m_register">Register</button></a>
            </div>

        </div>


        <div class="mobile_ic">
            <a href="index.php"><img src="./logo.svg" alt="logo"></a>
            <span style="font-size:30px;cursor:pointer ;color: #0052FF !important" onclick="openNav()">&#9776;</span>
        </div>

    </section>


    <!-- table for user status -->

    <section class="state_update">
        <div class="row g-5">
            <div class="col-md-3 col-lg-3 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary"> &nbsp</span>
                    <span class="badge bg-primary rounded-pill"></span>
                </h4>
                <ul class="list-group mb-3">

                    <li class="list-group-item d-flex justify-content-between lh-sm erp">
                        <div>
                            <h6 class="my-0 rs_title">Exchange Info</h6>
                        </div>
                    </li>





                    <!-- reserv details section -->


                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <?php
                        $s_s = $_SESSION['ex_send'];
                        $r_r = $_SESSION['ex_recive'];
                        // bkash to trom exchange case
                        if ($s_s == "Bkash Personal"  && $r_r == "Tron") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 5";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);
                            $a_res =  $bfetch['reserv'] . "TRX";
                            $a_min =  $bfetch['min'] . "BDT";
                            $a_max =  $bfetch['max'] . "BDT";
                        }

                        // bkash to coinbase exchange case
                        elseif ($s_s == "Bkash Personal"  && $r_r == "Coinbase") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 7";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);
                            $a_res =  $bfetch['reserv'] . "USD";
                            $a_min =  $bfetch['min'] . "BDT";
                            $a_max =  $bfetch['max'] . "BDT";
                        }

                        // bkash to payeer exchange case
                        elseif ($s_s == "Bkash Personal"  && $r_r == "Payeer") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);
                            $a_res =  $bfetch['reserv'] . "USD";
                            $a_min =  $bfetch['min'] . "BDT";
                            $a_max =  $bfetch['max'] . "BDT";
                        }

                        // bkash to Tether exchange case
                        elseif ($s_s == "Bkash Personal"  && $r_r == "Tether") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 6";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);
                            $a_res =  $bfetch['reserv'] . "USD";
                            $a_min =  $bfetch['min'] . "BDT";
                            $a_max =  $bfetch['max'] . "BDT";
                        }

                        // bkash to Perfect money exchange case
                        elseif ($s_s == "Bkash Personal"  && $r_r == "Perfect money") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 3";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);
                            $a_res =  $bfetch['reserv'] . "USD";
                            $a_min =  $bfetch['min'] . "BDT";
                            $a_max =  $bfetch['max'] . "BDT";
                        }

                        // bkash to Litecoin exchange case
                        elseif ($s_s == "Bkash Personal"  && $r_r == "Litecoin") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 4";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);
                            $a_res =  $bfetch['reserv'] . "USD";
                            $a_min =  $bfetch['min'] . "BDT";
                            $a_max =  $bfetch['max'] . "BDT";
                        }

                        // Nagad to Tron exchange case
                        elseif ($s_s == "Nagad Personal"  && $r_r == "Tron") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 5";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);
                            $a_res =  $bfetch['reserv'] . "USD";
                            $a_min =  $bfetch['min'] . "BDT";
                            $a_max =  $bfetch['max'] . "BDT";
                        }

                        // Nagad to coinbase exchange case
                        elseif ($s_s == "Nagad Personal"  && $r_r == "Coinbase") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 7";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);
                            $a_res =  $bfetch['reserv'] . "USD";
                            $a_min =  $bfetch['min'] . "BDT";
                            $a_max =  $bfetch['max'] . "BDT";
                        }

                        // Nagad to Payeer exchange case
                        elseif ($s_s == "Nagad Personal"  && $r_r == "Payeer") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);
                            $a_res =  $bfetch['reserv'] . "USD";
                            $a_min =  $bfetch['min'] . "BDT";
                            $a_max =  $bfetch['max'] . "BDT";
                        }

                        // Nagad to Tether exchange case
                        elseif ($s_s == "Nagad Personal"  && $r_r == "Tether") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 6";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);
                            $a_res =  $bfetch['reserv'] . "USD";
                            $a_min =  $bfetch['min'] . "BDT";
                            $a_max =  $bfetch['max'] . "BDT";
                        }

                        // Nagad to Perfect money exchange case
                        elseif ($s_s == "Nagad Personal"  && $r_r == "Perfect money") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 3";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);
                            $a_res =  $bfetch['reserv'] . "USD";
                            $a_min =  $bfetch['min'] . "BDT";
                            $a_max =  $bfetch['max'] . "BDT";
                        }

                        // Nagad to Litecoin exchange case
                        elseif ($s_s == "Nagad Personal"  && $r_r == "Litecoin") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 4";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);
                            $a_res =  $bfetch['reserv'] . "USD";
                            $a_min =  $bfetch['min'] . "BDT";
                            $a_max =  $bfetch['max'] . "BDT";
                        }

                        // selling case

                        // tron to bkash selling
                        elseif ($s_s == "Tron"  && $r_r == "Bkash Personal") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 5";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);

                            $bsqlb = "SELECT * FROM `getaway` WHERE sno = 1";
                            $bqueryb = mysqli_query($con, $bsqlb);
                            $bfetchb = mysqli_fetch_assoc($bqueryb);
                            $a_res =  $bfetchb['reserv'] . "BDT";
                            $a_min =  $bfetch['minusd'] . "TRX";
                            $a_max =  $bfetch['maxusd'] . "TRX";
                        }

                        // Coinbase to bkash selling
                        elseif ($s_s == "Coinbase"  && $r_r == "Bkash Personal") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 7";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);

                            $bsqlb = "SELECT * FROM `getaway` WHERE sno = 1";
                            $bqueryb = mysqli_query($con, $bsqlb);
                            $bfetchb = mysqli_fetch_assoc($bqueryb);
                            $a_res =  $bfetchb['reserv'] . "BDT";
                            $a_min =  $bfetch['minusd'] . "USD";
                            $a_max =  $bfetch['maxusd'] . "USD";
                        }

                        // Payeer to bkash selling
                        elseif ($s_s == "Payeer"  && $r_r == "Bkash Personal") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);

                            $bsqlb = "SELECT * FROM `getaway` WHERE sno = 1";
                            $bqueryb = mysqli_query($con, $bsqlb);
                            $bfetchb = mysqli_fetch_assoc($bqueryb);
                            $a_res =  $bfetchb['reserv'] . "BDT";
                            $a_min =  $bfetch['minusd'] . "USD";
                            $a_max =  $bfetch['maxusd'] . "USD";
                        }
                        // Tether to bkash selling
                        elseif ($s_s == "Tether"  && $r_r == "Bkash Personal") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 6";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);

                            $bsqlb = "SELECT * FROM `getaway` WHERE sno = 1";
                            $bqueryb = mysqli_query($con, $bsqlb);
                            $bfetchb = mysqli_fetch_assoc($bqueryb);
                            $a_res =  $bfetchb['reserv'] . "BDT";
                            $a_min =  $bfetch['minusd'] . "USD";
                            $a_max =  $bfetch['maxusd'] . "USD";
                        }
                        // Perfect money to bkash selling
                        elseif ($s_s == "Perfect money"  && $r_r == "Bkash Personal") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 3";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);

                            $bsqlb = "SELECT * FROM `getaway` WHERE sno = 1";
                            $bqueryb = mysqli_query($con, $bsqlb);
                            $bfetchb = mysqli_fetch_assoc($bqueryb);
                            $a_res =  $bfetchb['reserv'] . "BDT";
                            $a_min =  $bfetch['minusd'] . "USD";
                            $a_max =  $bfetch['maxusd'] . "USD";
                        }
                        // Litecoin to bkash selling
                        elseif ($s_s == "Litecoin"  && $r_r == "Bkash Personal") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 4";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);

                            $bsqlb = "SELECT * FROM `getaway` WHERE sno = 1";
                            $bqueryb = mysqli_query($con, $bsqlb);
                            $bfetchb = mysqli_fetch_assoc($bqueryb);
                            $a_res =  $bfetchb['reserv'] . "BDT";
                            $a_min =  $bfetch['minusd'] . "USD";
                            $a_max =  $bfetch['maxusd'] . "USD";
                        }

                        // tron to Nagad selling
                        elseif ($s_s == "Tron"  && $r_r == "Nagad Personal") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 5";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);

                            $bsqlb = "SELECT * FROM `getaway` WHERE sno = 2";
                            $bqueryb = mysqli_query($con, $bsqlb);
                            $bfetchb = mysqli_fetch_assoc($bqueryb);
                            $a_res =  $bfetchb['reserv'] . "BDT";
                            $a_min =  $bfetch['minusd'] . "USD";
                            $a_max =  $bfetch['maxusd'] . "USD";
                        }
                        // coinbase to Nagad selling
                        elseif ($s_s == "Coinbase"  && $r_r == "Nagad Personal") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 7";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);

                            $bsqlb = "SELECT * FROM `getaway` WHERE sno = 2";
                            $bqueryb = mysqli_query($con, $bsqlb);
                            $bfetchb = mysqli_fetch_assoc($bqueryb);
                            $a_res =  $bfetchb['reserv'] . "BDT";
                            $a_min =  $bfetch['minusd'] . "USD";
                            $a_max =  $bfetch['maxusd'] . "USD";
                        }
                        // payeer to Nagad selling
                        elseif ($s_s == "Payeer"  && $r_r == "Nagad Personal") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);

                            $bsqlb = "SELECT * FROM `getaway` WHERE sno = 2";
                            $bqueryb = mysqli_query($con, $bsqlb);
                            $bfetchb = mysqli_fetch_assoc($bqueryb);
                            $a_res =  $bfetchb['reserv'] . "BDT";
                            $a_min =  $bfetch['minusd'] . "USD";
                            $a_max =  $bfetch['maxusd'] . "USD";
                        }
                        // theter to Nagad selling
                        elseif ($s_s == "Tether"  && $r_r == "Nagad Personal") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 6";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);

                            $bsqlb = "SELECT * FROM `getaway` WHERE sno = 2";
                            $bqueryb = mysqli_query($con, $bsqlb);
                            $bfetchb = mysqli_fetch_assoc($bqueryb);
                            $a_res =  $bfetchb['reserv'] . "BDT";
                            $a_min =  $bfetch['minusd'] . "USD";
                            $a_max =  $bfetch['maxusd'] . "USD";
                        }
                        // perfect money to Nagad selling
                        elseif ($s_s == "Perfect money"  && $r_r == "Nagad Personal") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 3";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);

                            $bsqlb = "SELECT * FROM `getaway` WHERE sno = 2";
                            $bqueryb = mysqli_query($con, $bsqlb);
                            $bfetchb = mysqli_fetch_assoc($bqueryb);
                            $a_res =  $bfetchb['reserv'] . "BDT";
                            $a_min =  $bfetch['minusd'] . "USD";
                            $a_max =  $bfetch['maxusd'] . "USD";
                        }
                        // Litecoin to Nagad selling
                        elseif ($s_s == "Litecoin"  && $r_r == "Nagad Personal") {
                            include('connection.php');
                            $bsql = "SELECT * FROM `getaway` WHERE sno = 4";
                            $bquery = mysqli_query($con, $bsql);
                            $bfetch = mysqli_fetch_assoc($bquery);

                            $bsqlb = "SELECT * FROM `getaway` WHERE sno = 2";
                            $bqueryb = mysqli_query($con, $bsqlb);
                            $bfetchb = mysqli_fetch_assoc($bqueryb);
                            $a_res =  $bfetchb['reserv'] . "BDT";
                            $a_min =  $bfetch['minusd'] . "USD";
                            $a_max =  $bfetch['maxusd'] . "USD";
                        }






                        ?>
                        <div class="res_im my-1">
                            <span>Reserve</span>
                        </div>
                        <span class="text-muted amu"><?php echo $a_res ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">

                        <div class="res_im my-1">
                            <span>Min Amount</span>
                        </div>
                        <span class="text-muted amu"><?php echo $a_min ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">

                        <div class="res_im my-1">
                            <span>Max Amount</span>
                        </div>
                        <span class="text-muted amu"><?php echo $a_max ?></span>
                    </li>
                </ul>
            </div>

















            <div class="col-md-8 col-lg-8">
                <div class="container px-6 mx-auto grid">

                    <!-- Cards -->
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">

                    </div>

                    <?php
                    $s_s = $_SESSION['ex_send'];
                    $r_r = $_SESSION['ex_recive'];

                    // case 1  bkash to tron trx
                    if ($s_s == "Bkash Personal"  && $r_r == "Tron") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 5";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);
                        $r_am =  $bfetch['recive'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value/$r_am;
                            document.getElementById('output').value = x;
                        }
                        </script> ";
                        $send_icon = '<img src="./icons/bkash.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/tron.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['min'] . "BDT";
                        $s_max = $bfetch['max'] . "BDT";
                        $r_reserv = $bfetch['reserv'] . "TRX";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am < $bfetch['min']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                    </div> </div>';
                            } elseif ($_send_am > $bfetch['max']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                    </div> </div>';
                            } elseif ($_POST['recive'] > $bfetch['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }

                    // bkash case coinbase
                    elseif ($s_s == "Bkash Personal"  && $r_r == "Coinbase") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 7";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['recive'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value/$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/bkash.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/coinbase.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['min'] . "BDT";
                        $s_max = $bfetch['max'] . "BDT";
                        $r_reserv = $bfetch['reserv'] . "USD";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am < $bfetch['min']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                    </div> </div>';
                            } elseif ($_send_am > $bfetch['max']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                    </div> </div>';
                            } elseif ($_POST['recive'] >  $bfetch['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }

                    // bkash case payeer
                    elseif ($s_s == "Bkash Personal"  && $r_r == "Payeer") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['recive'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value/$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/bkash.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/payeer.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['min'] . "BDT";
                        $s_max = $bfetch['max'] . "BDT";
                        $r_reserv = $bfetch['reserv'] . "USD";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am < $bfetch['min']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                    </div> </div>';
                            } elseif ($_send_am > $bfetch['max']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                    </div> </div>';
                            } elseif ($_POST['recive'] >  $bfetch['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }

                    // bkash case perfect money
                    elseif ($s_s == "Bkash Personal"  && $r_r == "Perfect money") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 3";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['recive'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value/$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/bkash.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/perfect.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['min'] . "BDT";
                        $s_max = $bfetch['max'] . "BDT";
                        $r_reserv = $bfetch['reserv'] . "USD";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am < $bfetch['min']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                    </div> </div>';
                            } elseif ($_send_am > $bfetch['max']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                    </div> </div>';
                            } elseif ($_POST['recive'] >  $bfetch['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }

                    // bkash case tether
                    elseif ($s_s == "Bkash Personal"  && $r_r == "Tether") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 6";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['recive'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value/$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/bkash.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/theter.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['min'] . "BDT";
                        $s_max = $bfetch['max'] . "BDT";
                        $r_reserv = $bfetch['reserv'] . "USD";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am < $bfetch['min']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                    </div> </div>';
                            } elseif ($_send_am > $bfetch['max']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                    </div> </div>';
                            } elseif ($_POST['recive'] >  $bfetch['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }

                    // bkash case litecoin
                    elseif ($s_s == "Bkash Personal"  && $r_r == "Litecoin") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 4";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['recive'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value/$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/bkash.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/litecoin.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['min'] . "BDT";
                        $s_max = $bfetch['max'] . "BDT";
                        $r_reserv = $bfetch['reserv'] . "USD";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am < $bfetch['min']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                    </div> </div>';
                            } elseif ($_send_am > $bfetch['max']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                    </div> </div>';
                            } elseif ($_POST['recive'] >  $bfetch['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }




                    // blash sell case
                    // bkash case coinbase
                    elseif ($s_s == "Coinbase" &&  $r_r == "Bkash Personal") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 7";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['send'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value*$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/coinbase.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/bkash.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['minusd'] . "USD";
                        $s_max = $bfetch['maxusd'] . "USD";

                        // BDT reserv
                        $bsqlr = "SELECT * FROM `getaway` WHERE sno = 1";
                        $bqueryr = mysqli_query($con, $bsqlr);
                        $bfetchr = mysqli_fetch_assoc($bqueryr);

                        $r_reserv = $bfetchr['reserv'] . "BDT";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am <  $bfetch['minusd']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                     <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                     </div> </div>';
                            } elseif ($_send_am > $bfetch['maxusd']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                     <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                     </div> </div>';
                            } elseif ($_POST['recive'] > $bfetchr['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                 <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                 </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }

                    // bkash case payeer
                    elseif ($s_s == "Payeer"  && $r_r == "Bkash Personal") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        // BDT reserv
                        $bsqlr = "SELECT * FROM `getaway` WHERE sno = 1";
                        $bqueryr = mysqli_query($con, $bsqlr);
                        $bfetchr = mysqli_fetch_assoc($bqueryr);

                        $r_am =  $bfetch['send'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value*$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/payeer.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/bkash.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['minusd'] . "USD";
                        $s_max = $bfetch['maxusd'] . "USD";

                        // BDT reserv
                        $bsqlr = "SELECT * FROM `getaway` WHERE sno = 1";
                        $bqueryr = mysqli_query($con, $bsqlr);
                        $bfetchr = mysqli_fetch_assoc($bqueryr);

                        $r_reserv = $bfetchr['reserv'] . "BDT";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am <  $bfetch['minusd']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                      <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                      </div> </div>';
                            } elseif ($_send_am > $bfetch['maxusd']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                      <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                      </div> </div>';
                            } elseif ($_POST['recive'] > $bfetchr['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                  <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                  </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }

                    // bkash case perfect money
                    elseif ($s_s == "Perfect money"  && $r_r == "Bkash Personal") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 3";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['send'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value*$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/perfect.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/bkash.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['minusd'] . "USD";
                        $s_max = $bfetch['maxusd'] . "USD";

                        // BDT reserv
                        $bsqlr = "SELECT * FROM `getaway` WHERE sno = 1";
                        $bqueryr = mysqli_query($con, $bsqlr);
                        $bfetchr = mysqli_fetch_assoc($bqueryr);

                        $r_reserv = $bfetchr['reserv'] . "BDT";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am <  $bfetch['minusd']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                      <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                      </div> </div>';
                            } elseif ($_send_am > $bfetch['maxusd']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                      <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                      </div> </div>';
                            } elseif ($_POST['recive'] > $bfetchr['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                  <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                  </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }

                    // bkash case tether
                    elseif ($s_s == "Tether"  && $r_r == "Bkash Personal") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 6";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['send'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value*$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/theter.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/bkash.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['minusd'] . "USD";
                        $s_max = $bfetch['maxusd'] . "USD";

                        // BDT reserv
                        $bsqlr = "SELECT * FROM `getaway` WHERE sno = 1";
                        $bqueryr = mysqli_query($con, $bsqlr);
                        $bfetchr = mysqli_fetch_assoc($bqueryr);

                        $r_reserv = $bfetchr['reserv'] . "BDT";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am <  $bfetch['minusd']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                      <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                      </div> </div>';
                            } elseif ($_send_am > $bfetch['maxusd']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                      <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                      </div> </div>';
                            } elseif ($_POST['recive'] > $bfetchr['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                  <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                  </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }

                    // bkash case litecoin
                    elseif ($s_s == "Litecoin"  && $r_r == "Bkash Personal") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 4";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['send'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value*$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/litecoin.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/bkash.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['minusd'] . "USD";
                        $s_max = $bfetch['maxusd'] . "USD";

                        // BDT reserv
                        $bsqlr = "SELECT * FROM `getaway` WHERE sno = 1";
                        $bqueryr = mysqli_query($con, $bsqlr);
                        $bfetchr = mysqli_fetch_assoc($bqueryr);

                        $r_reserv = $bfetchr['reserv'] . "BDT";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am <  $bfetch['minusd']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                      <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                      </div> </div>';
                            } elseif ($_send_am > $bfetch['maxusd']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                      <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                      </div> </div>';
                            } elseif ($_POST['recive'] > $bfetchr['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                  <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                  </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }
                    // bkash case tron
                    elseif ($s_s == "Tron"  && $r_r == "Bkash Personal") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 5";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['send'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value*$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/tron.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/bkash.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['minusd'] . "TRX";
                        $s_max = $bfetch['maxusd'] . "TRX";

                        // BDT reserv
                        $bsqlr = "SELECT * FROM `getaway` WHERE sno = 1";
                        $bqueryr = mysqli_query($con, $bsqlr);
                        $bfetchr = mysqli_fetch_assoc($bqueryr);

                        $r_reserv = $bfetchr['reserv'] . "BDT";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am <  $bfetch['minusd']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                      <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                      </div> </div>';
                            } elseif ($_send_am > $bfetch['maxusd']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                      <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                      </div> </div>';
                            } elseif ($_POST['recive'] > $bfetchr['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                  <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                  </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }











                    // nagad buying case
                    // Nagad to torn
                    elseif ($s_s == "Nagad Personal"  && $r_r == "Tron") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 5";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['recive'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value/$r_am;
                            document.getElementById('output').value = x;
                        }
                       </script> ";
                        $send_icon = '<img src="./icons/nagad.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/tron.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['min'] . "BDT";
                        $s_max = $bfetch['max'] . "BDT";
                        $r_reserv = $bfetch['reserv'] . "TRX";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am < $bfetch['min']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                    </div> </div>';
                            } elseif ($_send_am > $bfetch['max']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                    </div> </div>';
                            } elseif ($_POST['recive'] > $bfetch['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }

                    // Nagad to coinbase
                    elseif ($s_s == "Nagad Personal"  && $r_r == "Coinbase") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 7";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['recive'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value/$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/nagad.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/coinbase.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['min'] . "BDT";
                        $s_max = $bfetch['max'] . "BDT";
                        $r_reserv = $bfetch['reserv'] . "USD";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am < $bfetch['min']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                    </div> </div>';
                            } elseif ($_send_am > $bfetch['max']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                    </div> </div>';
                            } elseif ($_POST['recive'] > $bfetch['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }

                    // Nagad to payeer
                    elseif ($s_s == "Nagad Personal"  && $r_r == "Payeer") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['recive'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value/$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/nagad.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/payeer.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['min'] . "BDT";
                        $s_max = $bfetch['max'] . "BDT";
                        $r_reserv = $bfetch['reserv'] . "USD";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am < $bfetch['min']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                    </div> </div>';
                            } elseif ($_send_am > $bfetch['max']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                    </div> </div>';
                            } elseif ($_POST['recive'] > $bfetch['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }
                    // Nagad to tether
                    elseif ($s_s == "Nagad Personal"  && $r_r == "Tether") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['recive'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value/$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/nagad.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/theter.svg" alt="" width="40">';
                    }
                    // Nagad to perfect money
                    elseif ($s_s == "Nagad Personal"  && $r_r == "Perfect money") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['recive'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value/$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/nagad.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/perfect.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['min'] . "BDT";
                        $s_max = $bfetch['max'] . "BDT";
                        $r_reserv = $bfetch['reserv'] . "USD";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am < $bfetch['min']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                    </div> </div>';
                            } elseif ($_send_am > $bfetch['max']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                    </div> </div>';
                            } elseif ($_POST['recive'] > $bfetch['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }
                    // Nagad to litecoin
                    elseif ($s_s == "Nagad Personal"  && $r_r == "Litecoin") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['recive'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value/$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/nagad.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/litecoin.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['min'] . "BDT";
                        $s_max = $bfetch['max'] . "BDT";
                        $r_reserv = $bfetch['reserv'] . "USD";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am < $bfetch['min']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                    </div> </div>';
                            } elseif ($_send_am > $bfetch['max']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                    <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                    </div> </div>';
                            } elseif ($_POST['recive'] > $bfetch['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }


                    // nagad selling case

                    // tron to nagad
                    elseif ($s_s == "Tron"  && $r_r == "Nagad Personal") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 5";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['send'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value*$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/tron.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/nagad.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['minusd'] . "TRX";
                        $s_max = $bfetch['maxusd'] . "TRX";

                        // BDT reserv
                        $bsqlr = "SELECT * FROM `getaway` WHERE sno = 2";
                        $bqueryr = mysqli_query($con, $bsqlr);
                        $bfetchr = mysqli_fetch_assoc($bqueryr);

                        $r_reserv = $bfetchr['reserv'] . "BDT";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am <  $bfetch['minusd']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                       <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                       </div> </div>';
                            } elseif ($_send_am > $bfetch['maxusd']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                       <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                       </div> </div>';
                            } elseif ($_POST['recive'] > $bfetchr['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                   <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                   </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }

                    // coinbase to nagad
                    elseif ($s_s == "Coinbase"  && $r_r == "Nagad Personal") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 7";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['send'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value*$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/coinbase.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/nagad.svg" alt="" width="40">';
                    }

                    // payeer to nagad
                    elseif ($s_s == "Payeer"  && $r_r == "Nagad Personal") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['send'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value*$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/payeer.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/nagad.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['minusd'] . "USD";
                        $s_max = $bfetch['maxusd'] . "USD";

                        // BDT reserv
                        $bsqlr = "SELECT * FROM `getaway` WHERE sno = 2";
                        $bqueryr = mysqli_query($con, $bsqlr);
                        $bfetchr = mysqli_fetch_assoc($bqueryr);

                        $r_reserv = $bfetchr['reserv'] . "BDT";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am <  $bfetch['minusd']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                       <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                       </div> </div>';
                            } elseif ($_send_am > $bfetch['maxusd']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                       <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                       </div> </div>';
                            } elseif ($_POST['recive'] > $bfetchr['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                   <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                   </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }
                    // theter to nagad
                    elseif ($s_s == "Tether"  && $r_r == "Nagad Personal") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 6";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['send'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value*$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/theter.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/nagad.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['minusd'] . "USD";
                        $s_max = $bfetch['maxusd'] . "USD";

                        // BDT reserv
                        $bsqlr = "SELECT * FROM `getaway` WHERE sno = 2";
                        $bqueryr = mysqli_query($con, $bsqlr);
                        $bfetchr = mysqli_fetch_assoc($bqueryr);

                        $r_reserv = $bfetchr['reserv'] . "BDT";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am <  $bfetch['minusd']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                       <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                       </div> </div>';
                            } elseif ($_send_am > $bfetch['maxusd']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                       <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                       </div> </div>';
                            } elseif ($_POST['recive'] > $bfetchr['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                   <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                   </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }

                    // perfect money to nagad
                    elseif ($s_s == "Tether"  && $r_r == "Nagad Personal") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 3";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['send'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value*$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/perfect.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/nagad.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['minusd'] . "USD";
                        $s_max = $bfetch['maxusd'] . "USD";

                        // BDT reserv
                        $bsqlr = "SELECT * FROM `getaway` WHERE sno = 2";
                        $bqueryr = mysqli_query($con, $bsqlr);
                        $bfetchr = mysqli_fetch_assoc($bqueryr);

                        $r_reserv = $bfetchr['reserv'] . "BDT";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am <  $bfetch['minusd']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                       <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                       </div> </div>';
                            } elseif ($_send_am > $bfetch['maxusd']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                       <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                       </div> </div>';
                            } elseif ($_POST['recive'] > $bfetchr['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                   <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                   </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    }

                    // litecoin money to nagad
                    elseif ($s_s == "Litecoin"  && $r_r == "Nagad Personal") {

                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 4";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);

                        $r_am =  $bfetch['send'];

                        echo " <script>
                        function mult(value) {
                            var x
                            x =value*$r_am;
                            document.getElementById('output').value = x;
                        }
                    </script> ";
                        $send_icon = '<img src="./icons/litecoin.svg" alt="" width="40">';
                        $recive_icon = '<img src="./icons/nagad.svg" alt="" width="40">';

                        // resever max amount
                        $s_min = $bfetch['minusd'] . "USD";
                        $s_max = $bfetch['maxusd'] . "USD";

                        // BDT reserv
                        $bsqlr = "SELECT * FROM `getaway` WHERE sno = 2";
                        $bqueryr = mysqli_query($con, $bsqlr);
                        $bfetchr = mysqli_fetch_assoc($bqueryr);

                        $r_reserv = $bfetchr['reserv'] . "BDT";
                        if (isset($_POST['next'])) {
                            $_send_am = $_POST['send'];
                            $_recive_am = $_POST['recive'];

                            if ($_send_am <  $bfetch['minusd']) {
                                $war = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                       <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check minimum transaction amount.
                                       </div> </div>';
                            } elseif ($_send_am > $bfetch['maxusd']) {
                                $war1 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                       <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                       </div> </div>';
                            } elseif ($_POST['recive'] > $bfetchr['reserv']) {
                                $war2 = '<div class="p-2 mb-4"><div class="alert alert-warning" role="alert">
                                   <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Please check maximum transaction amount.
                                   </div> </div>';
                            } else {
                                $_SESSION['user_send'] = $_send_am;
                                $_SESSION['user_recive'] = $_recive_am;
                                echo '<script>window.location.href = "exstap2.php";</script>';
                            }
                        }
                    } else {
                        echo '<script>window.location.href = "nvalid.php";</script>';
                    }



                    ?>



                    <!-- <script>
                        function mult(value) {
                            var x
                            x = 0.246 * value;
                            document.getElementById('output').value = x;
                        }
                    </script> -->


                    <?php
                    if (isset($war)) {
                        echo $war;
                    }
                    ?>
                    <?php
                    if (isset($war1)) {
                        echo $war1;
                    }
                    ?>
                    <?php
                    if (isset($war2)) {
                        echo $war2;
                    }
                    ?>

                    <div class="container exchange_cont">
                        <div class="stape">Stap 1<i class="bi bi-arrow-right-short"></i></div>
                        <form action="#" method="post">
                            <div class="row align-items-start">
                                <div class="col col-md-5 send">
                                    <div class="send_amount_he">Send <i class="bi bi-arrow-up-circle"></i></i></div>
                                    <div class="input-group mb-3 send">
                                        <span class="input-group-text" id="basic-addon1"><?php if (isset($send_icon)) {
                                                                                                echo $send_icon;
                                                                                            } ?></span>
                                        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="send" onkeyup="mult(this.value);" id="input" value="<?php echo $r_am ?>">
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="send_amount_he min_ex_title mb-4">Min Amount: <?php if (isset($s_min)) {
                                                                                                        echo $s_min;
                                                                                                    } ?></div>
                                        <div class="send_amount_he max_ex_title mb-4">&nbsp;Max Amount: <?php if (isset($s_max)) {
                                                                                                            echo $s_max;
                                                                                                        } ?></div>
                                    </div>

                                </div>
                                <div class="col col-md-5 recive">
                                    <div class="recive_amount_he">Recive <i class="bi bi-arrow-down-circle"></i></div>
                                    <div class="input-group mb-3 recive">
                                        <span class="input-group-text" id="basic-addon1"><?php if (isset($recive_icon)) {
                                                                                                echo $recive_icon;
                                                                                            } ?></span>
                                        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" id="output" readonly name="recive">
                                    </div>
                                    <div class="send_amount_he max_ex_title mb-4">Max Amount: <?php if (isset($r_reserv)) {
                                                                                                    echo $r_reserv;
                                                                                                } ?></div>
                                </div>
                            </div>

                            <div class="ex_button mb-5">
                                <button class="btn btn-primary" name="next">Next <i class="bi bi-arrow-right-short"></i></button>
                            </div>
                        </form>


                    </div>



                </div>
            </div>
        </div>
    </section>



    <!-- footer -->
    <section class="main_footer_sec">

        <div class="footer_sec">
            <div class="container footer_con">
                <div class="row align-items-start">
                    <div class="col">
                        <ul>
                            <li class="li_b">Company</li>
                            <li>About</li>
                            <li>Careers</li>
                            <li>Affiliates</li>
                            <li>Blog</li>
                            <li>Press</li>
                            <li>Investors</li>
                            <li>Legal & privacy</li>
                            <li>Cookie policy</li>
                            <li>Cookie preferences</li>
                        </ul>

                    </div>
                    <div class="col">
                        <ul>
                            <li class="li_b">Company</li>
                            <li>Browse crypto prices</li>
                            <li>Coinbase Bytes newsletter</li>
                            <li>Affiliates</li>
                            <li>Blog</li>
                            <li>Press</li>
                            <li>Investors</li>
                            <li>Legal & privacy</li>
                            <li>Cookie policy</li>
                            <li>Cookie preferences</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li class="li_b">Company</li>
                            <li>About</li>
                            <li>Careers</li>
                            <li>Affiliates</li>
                            <li>Blog</li>
                            <li>Press</li>
                            <li>Investors</li>
                            <li>Legal & privacy</li>
                            <li>Cookie policy</li>
                            <li>Cookie preferences</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li class="li_b">Company</li>
                            <li>About</li>
                            <li>Careers</li>
                            <li>Affiliates</li>
                            <li>Blog</li>
                            <li>Press</li>
                            <li>Investors</li>
                            <li>Legal & privacy</li>
                            <li>Cookie policy</li>
                            <li>Cookie preferences</li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <footer class="footer mt-auto py-3">
        <div class="container copy_right">
            <span class="text-muted">design and code by @redhalozen</span>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- mobile nav script -->
    <script src="nav.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script>
        function loadXMLDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("admin_state").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "realtime_state.php", true);
            xhttp.send();
        }
        setInterval(function() {
            loadXMLDoc();
        }, 1000);

        window.onload = loadXMLDoc;
    </script>

</body>

</html>