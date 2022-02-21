<?php
session_start();
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

    <section class="payment_sec">
        <h2 class="text-center details_heding_user">Your exchange details.</h2>
        <div class="user_details">

            <?php
            $user_name = $_SESSION['user_name'];
            $user_email = $_SESSION['user_email'];
            $user_phone = $_SESSION['user_phone'];
            $user_id = $_SESSION['account_id'];
            $user_send = $_SESSION['user_send'];
            $user_recive = $_SESSION['user_recive'];
            $user_send_s = $_SESSION['s_simble'];
            $user_recive_s = $_SESSION['r_recive'];

            // simble

            $s_s = $_SESSION['ex_send'];
            $r_r = $_SESSION['ex_recive'];

            // if (condition) {
            //     # code...
            // }

            if ($s_s == "Bkash Personal") {
                $s_simble = '<img src="./icons/bkash.svg" alt="" width="30">';
            } elseif ($s_s == "Nagad Personal") {
                $s_simble = '<img src="./icons/nagad.svg" alt="" width="30">';
            } elseif ($s_s == "Tron") {
                $s_simble = '<img src="./icons/tron.svg" alt="" width="30">';
            } elseif ($s_s == "Coinbase") {
                $s_simble = '<img src="./icons/coinbase.svg" alt="" width="30">';
            } elseif ($s_s == "Payeer") {
                $s_simble = '<img src="./icons/payeer.svg" alt="" width="30">';
            } elseif ($s_s == "Tether") {
                $s_simble = '<img src="./icons/theter.svg" alt="" width="30">';
            } elseif ($s_s == "Perfect money") {
                $s_simble = '<img src="./icons/perfect.svg" alt="" width="30">';
            } elseif ($s_s == "Litecoin") {
                $s_simble = '<img src="./icons/litecoin.svg" alt="" width="30">';
            }


            // recive simble

            if ($r_r == "Bkash Personal") {
                $r_simble = '<img src="./icons/bkash.svg" alt="" width="30">';
            } elseif ($r_r == "Nagad Personal") {
                $r_simble = '<img src="./icons/nagad.svg" alt="" width="30">';
            } elseif ($r_r == "Tron") {
                $r_simble = '<img src="./icons/tron.svg" alt="" width="30">';
            } elseif ($r_r == "Coinbase") {
                $r_simble = '<img src="./icons/coinbase.svg" alt="" width="30">';
            } elseif ($r_r == "Payeer") {
                $r_simble = '<img src="./icons/payeer.svg" alt="" width="30">';
            } elseif ($r_r == "Tether") {
                $r_simble = '<img src="./icons/theter.svg" alt="" width="30">';
            } elseif ($r_r == "Perfect money") {
                $r_simble = '<img src="./icons/perfect.svg" alt="" width="30">';
            } elseif ($r_r == "Litecoin") {
                $r_simble = '<img src="./icons/litecoin.svg" alt="" width="30">';
            }


            ?>


            <!-- data insetr -->

            <?php
            if (isset($_POST['confirm'])) {

                $trx = $_POST['trx'];
                // INSERT INTO `user_payment` (`sno`, `send`, `recive`, `user`, `date`, `state`, `sendam`, `reciveam`, `user_name`, `phone`, `account_no`) VALUES (NULL, 'Bkash Personal', 'Tron', 'rejwan@gmail.com', current_timestamp(), 'proccessing', '2.6', '20.2', 'Rejwan', '01725281740', '145698');
                include('connection.php');
                $insql = "INSERT INTO `user_payment` (`send`, `recive`, `user`, `date`, `state`, `sendam`, `reciveam`, `user_name`, `phone`,`trx`, `account_no`) VALUES ('$s_s', '$r_r', '$user_email', current_timestamp(), 'proccessing', '$user_send', '$user_recive', '$user_name', '$user_phone', '$trx', '$user_id');";
                $insql2 = "INSERT INTO `user_payment_backup` (`send`, `recive`, `user`, `date`, `state`, `sendam`, `reciveam`, `user_name`, `phone`,`trx`, `account_no`) VALUES ('$s_s', '$r_r', '$user_email', current_timestamp(), 'proccessing', '$user_send', '$user_recive', '$user_name', '$user_phone', '$trx', '$user_id');";
                $query = mysqli_query($con, $insql);
                $query2 = mysqli_query($con, $insql2);
                if ($query) {
                    // echo "data inserted";
                    echo '<script>window.location.href = "paymentdone.php";</script>';
                } else {
                    echo "data not inserted";
                }
            }

            if (isset($_POST['cancel'])) {
                echo '<script>window.location.href = "index.php";</script>';
                // session_unset();
            }

            ?>



            <ul class="list-group">
                <li class="list-group-item disabled user_n" aria-disabled="true">Name: <?php echo $user_name ?></li>
                <li class="list-group-item">Email address: <?php echo $user_email ?></li>
                <li class="list-group-item">Phone: <?php echo $user_phone ?></li>
                <li class="list-group-item">Account Number: <?php echo $user_id ?></li>
                <li class="list-group-item">
                    <div class="d-flex flex-row bd-highlight am_icon">
                        Send: &nbsp;
                        <?php echo $s_simble; ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex flex-row bd-highlight am_icon">
                        Recive: &nbsp;
                        <?php echo $r_simble; ?>
                    </div>
                </li>
                <li class="list-group-item">Send amount: <?php echo $user_send . $user_send_s ?></li>
                <li class="list-group-item">Recive amount: <?php echo $user_recive . $user_recive_s ?></li>
            </ul>
        </div>

        <div class="payment_det">

        <!-- payment id -->
            <?php 
            include('connection.php');
            $psql = "SELECT * FROM `giveaway_id` where sno = '1' ";
            $pquery = mysqli_query($con,$psql);
            $pfetch = mysqli_fetch_assoc($pquery);

            if ($s_s == "Bkash Personal") {
               $pt = $pfetch['account_id'];
            }
            ?>

            <?php 
            include('connection.php');
            $psql = "SELECT * FROM `giveaway_id` where sno = '2' ";
            $pquery = mysqli_query($con,$psql);
            $pfetch = mysqli_fetch_assoc($pquery);

            if ($s_s == "Nagad Personal") {
               $pt = $pfetch['account_id'];
            }
            ?>


            <?php 
            include('connection.php');
            $psql = "SELECT * FROM `giveaway_id` where sno = '3' ";
            $pquery = mysqli_query($con,$psql);
            $pfetch = mysqli_fetch_assoc($pquery);

            if ($s_s == "Perfect Money") {
               $pt = $pfetch['account_id'];
            }
            ?>

            <?php 
            include('connection.php');
            $psql = "SELECT * FROM `giveaway_id` where sno = '4' ";
            $pquery = mysqli_query($con,$psql);
            $pfetch = mysqli_fetch_assoc($pquery);

            if ($s_s == "Litecoin") {
               $pt = $pfetch['account_id'];
            }
            ?>

            <?php 
            include('connection.php');
            $psql = "SELECT * FROM `giveaway_id` where sno = '5' ";
            $pquery = mysqli_query($con,$psql);
            $pfetch = mysqli_fetch_assoc($pquery);

            if ($s_s == "Tron") {
               $pt = $pfetch['account_id'];
            }
            ?>

            <?php 
            include('connection.php');
            $psql = "SELECT * FROM `giveaway_id` where sno = '6' ";
            $pquery = mysqli_query($con,$psql);
            $pfetch = mysqli_fetch_assoc($pquery);

            if ($s_s == "Tether") {
               $pt = $pfetch['account_id'];
            }
            ?>

            <?php 
            include('connection.php');
            $psql = "SELECT * FROM `giveaway_id` where sno = '7' ";
            $pquery = mysqli_query($con,$psql);
            $pfetch = mysqli_fetch_assoc($pquery);

            if ($s_s == "Coinbase") {
               $pt = $pfetch['account_id'];
            }
            ?>

            <?php 
            include('connection.php');
            $psql = "SELECT * FROM `giveaway_id` where sno = '8' ";
            $pquery = mysqli_query($con,$psql);
            $pfetch = mysqli_fetch_assoc($pquery);

            if ($s_s == "Payeer") {
               $pt = $pfetch['account_id'];
            }
            ?>


            <p class="payment_details text-center">To confirm your order please pay <span class="hilite"> <?php echo $user_send . $user_send_s ?> in this number <span  style="color: #f91976;"><?php echo $pt ?></span>  via <span style="color: #f91976;"><?php echo $s_s ?></span> </span> Then enter your transaction ID in the given field and click on confirm.</p>
        </div>

        <!-- transtion id submit form -->
        <form class="User_trx" action="#" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Transaction ID</label>
                <input type="Text" class="form-control" id="user_transtion_id" aria-describedby="emailHelp" name="trx" required>
            </div>
            <button class="btn btn-primary" name="confirm">Confirm <i class="bi bi-check-circle"></i></button>
            <button class="btn btn-danger mx-1" name="cancel">Cancel <i class="bi bi-x-circle"></i></button>
        </form>

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