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
                            <h6 class="my-0 rs_title">Your Exchange</h6>
                        </div>
                    </li>



                    <?php
                    $s_s = $_SESSION['ex_send'];
                    $r_r = $_SESSION['ex_recive'];

                    // send simble
                    if ($s_s == "Bkash Personal" || $s_s == "Nagad Personal") {
                        $s_simble = "BDT";
                    } elseif ($s_s == "Tron") {
                        $s_simble = "TRX";
                    } elseif ($s_s == "Coinbase" || $s_s == "Perfect money" || $s_s == "Payeer" || $s_s == "Tether" || $s_s == "Litecoin") {
                        $s_simble = "USD";
                    } else {
                        echo "none";
                    }
                    // recive simble

                    if ($r_r == "Bkash Personal" || $r_r == "Nagad Personal") {
                        $r_simble = "BDT";
                    } elseif ($r_r == "Tron") {
                        $r_simble = "TRX";
                    } elseif ($r_r == "Coinbase" || $r_r == "Perfect money" || $r_r == "Payeer" || $r_r == "Tether" || $r_r == "Litecoin") {
                        $r_simble = "USD";
                    } else {
                        echo "none";
                    }



                    ?>







                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">

                        <div class="res_im my-1">
                            <span style="color:#07c16b;">Amount Send</span>
                        </div>
                        <span class="text-muted amu"> <?php
                                                        echo $_SESSION['user_send'];
                                                        echo $s_simble;
                                                        ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">

                        <div class="res_im my-1">
                            <span style="color:#0052ff;">Amount Receive</span>
                        </div>
                        <span class="text-muted amu"> <?php
                                                        $sub = $_SESSION['user_recive'];
                                                        echo substr($sub,0,5);


                                                        if (isset($r_simble)) {
                                                            echo $r_simble;
                                                        }


                                                        ?></span>
                    </li>
                </ul>
            </div>




            <div class="col-md-8 col-lg-8">
                <div class="container px-6 mx-auto grid">

                    <!-- Cards -->
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">

                    </div>
                    <div class="container exchange_cont">
                        <div class="stape">Stap 2<i class="bi bi-arrow-right-short"></i></div>

                        <!-- user details -->

                        <?php
                        include('connection.php');
                        $uemail =  $_SESSION['email'];
                        $usql = "SELECT * FROM `user_register` WHERE email = '$uemail' ";
                        $uquery = mysqli_query($con, $usql);
                        $ufetch = mysqli_fetch_assoc($uquery);


                        if (isset($_POST['next'])) {
                            $name = $_POST['user_name'];
                            $email = $_POST['user_email'];
                            $phone = $_POST['user_phone'];
                            $account_id = $_POST['account_id'];

                            $_SESSION['user_name'] = $name;
                            $_SESSION['user_email'] = $email;
                            $_SESSION['user_phone'] = $phone;
                            $_SESSION['account_id'] = $account_id;
                            $_SESSION['send'] = $send;
                            $_SESSION['recive'] = $recive;
                            $_SESSION['s_simble'] = $s_simble;
                            $_SESSION['r_recive'] = $r_simble;

                            // $name1 = $_SESSION['user_name'];
                            // $email1 = $_SESSION['user_email'];
                            // $phone1 = $_SESSION['user_phone'];
                            // $account_id1 = $_SESSION['account_id'];
                            // $send = $_SESSION['user_send'];
                            // $recive = $_SESSION['user_recive'];


                            // echo  $name1;
                            // echo  $email1;
                            // echo  $phone1;
                            // echo  $account_id1;
                            // echo  $s_simble;
                            // echo  $r_simble;
                            // echo  $send;
                            // echo  $recive;

                            echo '<script>window.location.href = "exstap3.php";</script>';
                        }


                        ?>

                        <form action="#" method="post">
                            <div class="row align-items-start">
                                <div class="mb-3 col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Your Name <span style="color: red;"> <i class="bi bi-asterisk"></i></span></label>
                                    <input type="text" class="form-control" id="your_name" aria-describedby="emailHelp" required value="<?php echo $ufetch['name']; ?>" name="user_name">
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="mb-3 col-md-6">
                                    <label for="exampleInputPassword1" class="form-label">Your Email <span style="color: red;"> <i class="bi bi-asterisk"></i></span></label>
                                    <input type="email" class="form-control" id="your_email" readonly value="<?php echo $ufetch['email']; ?>" name="user_email">
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="mb-3 col-md-6">
                                    <label for="exampleInputPassword1" class="form-label">Phone</label>
                                    <input type="number" class="form-control" id="Your_phone" required value="<?php echo $ufetch['phone']; ?>" name="user_phone">
                                </div>
                            </div>
                            <div class="row align-items-start">

                                <!-- account id name -->
                                <?php
                                include('connection.php');
                                $r_r = $_SESSION['ex_recive'];
                                if ($r_r == "Bkash Personal") {
                                    $tr_name = "Bkash Personal";
                                } elseif ($r_r == "Nagad Personal") {
                                    $tr_name = "Nagad Personal";
                                } elseif ($r_r == "Perfect money") {
                                    $tr_name = "Perfect money";
                                } elseif ($r_r == "Payeer") {
                                    $tr_name = "Payeer";
                                } elseif ($r_r == "Tron") {
                                    $tr_name = "Tron";
                                } elseif ($r_r == "Tether") {
                                    $tr_name = "Tether";
                                } elseif ($r_r == "Coinbase") {
                                    $tr_name = "Coinbase";
                                } elseif ($r_r == "Litecoin") {
                                    $tr_name = "Litecoin";
                                }

                                ?>


                                <div class="mb-3 col-md-6">
                                    <label for="exampleInputPassword1" class="form-label">Your <?php echo $tr_name ?> account <span style="color: red;"> <i class="bi bi-asterisk"></i></span></label>
                                    <input type="text" class="form-control" id="account_number" required name="account_id">
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
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