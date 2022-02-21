<?php

session_start();

if (!isset($_SESSION['loggedn']) || $_SESSION['loggedn'] != true) {
    header("location: user_login.php");
    exit;
}

?>


<?php

include('connection.php');

$sesson_user_id = $_SESSION['email'];

// echo $sesson_id;

$dts = "SELECT * FROM `user_register` WHERE email = '$sesson_user_id'";
$dquery = mysqli_query($con, $dts);
$dfatch = mysqli_fetch_assoc($dquery);

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


    <title>User dashbord</title>
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
                <a class="navbar-brand" href="edit_details.php">Edit details</a>
                <a class="navbar-brand" href="user_order_history.php">Order history</a>
                <a class="navbar-brand" href="notice.php">Notice</a>
                <a class="navbar-brand" href="help.php">Help</a>
                <!-- <a class="navbar-brand" href="user.php">User</a> -->
            </div>
            <div class="nav_right">
                <!-- <a href="user_login.php"><button type="button" class="btn">Login</button></a> -->
                <a href="logout.php"><button type="button" class="btn btn-primary">Log out</button></a>
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
                <a href="edit_details.php">Edit details</a>
                <a href="user_order_history.php">Order history</a>
                <a href="notice.php">Notice</a>
                <a href="help.php">Help</a>
                <!-- <a href="user.php">User</a> -->
            </div>


            <div class="mob_button">
                <!-- <a href="user_login.php"><button type="submit" class="m_loogin">Log out</button></a> -->
                <a href="logout.php"><button type="submit" class="m_register">Log out</button></a>
            </div>

        </div>


        <div class="mobile_ic">
            <a href="index.php"><img src="./logo.svg" alt="logo"></a>
            <span style="font-size:30px;cursor:pointer ;color: #0052FF !important" onclick="openNav()">&#9776;</span>
        </div>

    </section>



    <!-- <div class="p-3">
        <div class="alert alert-success" role="alert">
            <i class="bi bi-patch-check-fill"></i>&nbsp; Your password has been reseted.
        </div>
    </div> -->

    <?php
    if (isset($_POST['update'])) {
        include('connection.php');

        $new_pass = $_POST['new_pass'];
        $con_pass = $_POST['con_pass'];

        if ($new_pass == "" || $con_pass == "") {
            $pu_dan = ' <div class="p-3">
            <div class="alert alert-warning" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i>&nbsp; All fields are required.
            </div>
        </div>';
        } else {
            if ($new_pass != $con_pass) {
                $pu_war = ' <div class="p-3">
            <div class="alert alert-warning" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i>&nbsp; Your new password and confirm password doesnt match.
            </div>
        </div>';
            } else {
                $pu_sql = "UPDATE `user_register` SET `password`='$new_pass' WHERE email = '$sesson_user_id' ";
                $pu_query = mysqli_query($con, $pu_sql);

                if ($pu_query) {
                    $pu_alert = ' <div class="p-3">
                                <div class="alert alert-success" role="alert">
                                    <i class="bi bi-patch-check-fill"></i>&nbsp; Your password has been reseted.
                                </div>
                            </div>';
                } else {
                    echo "data not updated";
                }
            }
        }
    }
    ?>


    <?php
    if (isset($pu_alert)) {
        echo $pu_alert;
    }
    if (isset($pu_war)) {
        echo $pu_war;
    }
    if (isset($pu_dan)) {
        echo $pu_dan;
    }
    ?>








    <!-- table for user status -->

    <section class="state_update user_data">
        <div class="row g-5 user_dt">
            <div class="col-md-3 col-lg-3 order-md-last user_dt1">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary"> &nbsp</span>
                    <span class="badge bg-primary rounded-pill"></span>
                </h4>
                <ul class="list-group mb-3">

                    <li class="list-group-item d-flex justify-content-between lh-sm erp">
                        <div>
                            <h6 class="my-0 rs_title">Password reset</h6>
                        </div>
                    </li>

                    <li class="list-group-item res_pass">
                        <form method="POST" action="user.php">

                            <div class="form-floating mb-2 mt-2">

                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value=" <?php echo $dfatch['password'] ?>" readonly>
                                <label for="floatingInput">Password</label>
                                <span></span>
                            </div>




                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="new_pass">
                                <label for="floatingInput">New password</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="con_pass">
                                <label for="floatingPassword">Confirm password</label>
                            </div>

                            <div class="checkbox mb-3">
                            </div>
                            <button class="w-100 btn btn-lg btn-primary mb-2" type="submit" name="update">Update</button>

                        </form>

                    </li>
                    <!-- <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <div class="res_im">
                            <img src="./icons/toen.svg" alt="" width="40">
                            <span>Tron</span>
                        </div>
                        <span class="text-muted amu">$12</span>
                    </li> -->


                </ul>
            </div>




            <div class="col-md-8 col-lg-8 user_dt2">
                <div class="container px-6 mx-auto grid">

                    <!-- Cards -->
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">




                    </div>

                    <!-- New Table -->
                    <div class="">
                        <ul class="list-group">
                            <li class="list-group-item user_d active" aria-current="true">Name: <?php echo $dfatch['name'] ?></li>
                            <li class="list-group-item user_d">Email Address: <?php echo $dfatch['email'] ?></li>
                            <li class="list-group-item user_d">Phone: <?php echo $dfatch['phone'] ?></li>
                            <li class="list-group-item user_d">Address: <?php echo $dfatch['address'] ?></li>
                            <li class="list-group-item user_d">City: <?php echo $dfatch['city'] ?></li>
                            <li class="list-group-item user_d">Zip code: <?php echo $dfatch['zip'] ?></li>
                            <li class="list-group-item user_d">Password: <?php echo $dfatch['password'] ?></li>
                        </ul>

                    </div>




                </div>
            </div>
        </div>
    </section>




    <!-- user letest transtion -->

    <section class="user_letest_tr mb-5 my-5">

        <div class="letest_exchange_hed">

            <h4>Latest 10 Exchanges</h4>
        </div>


        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Tracking ID</th>
                            <th class="px-4 py-3">Send</th>
                            <th class="px-4 py-3">Recive</th>
                            <th class="px-4 py-3">User</th>
                            <th class="px-4 py-3">User name</th>
                            <th class="px-4 py-3">Account ID</th>
                            <th class="px-4 py-3">Phone</th>
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3">Status</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">


                        <?php

                        include('connection.php');
                        $sesson_user_id = $_SESSION['email'];

                        $sql = "SELECT * FROM `user_payment` WHERE user = '$sesson_user_id' ORDER BY sno DESC LIMIT 10";
                        $query = mysqli_query($con, $sql);
                        // $fatch = mysqli_fetch_assoc($query);

                        while ($fatch = mysqli_fetch_assoc($query)) {
                            if ($fatch['send'] == 'Tron') {
                                $send = '<img src="./icons/tron.svg" width="28px" alt="">';
                            } elseif ($fatch['send'] == 'Litecoin') {
                                $send = '<img src="./icons/litecoin.svg" width="28px" alt="">';
                            } elseif ($fatch['send'] == 'Payeer') {
                                $send = '<img src="./icons/payeer.svg" width="28px" alt="">';
                            } elseif ($fatch['send'] == 'Perfect money') {
                                $send = '<img src="./icons/perfect.svg" width="28px" alt="">';
                            } elseif ($fatch['send'] == 'Coinbase') {
                                $send = '<img src="./icons/coinbase.svg" width="28px" alt="">';
                            } elseif ($fatch['send'] == 'Bkash Personal') {
                                $send = '<img src="./icons/bkash.svg" width="28px" alt="">';
                            } elseif ($fatch['send'] == 'Nagad Personal') {
                                $send = '<img src="./icons/nagad.svg" width="28px" alt="">';
                            } elseif ($fatch['send'] == 'Tether') {
                                $send = '<img src="./icons/theter.svg" width="28px" alt="">';
                            }



                            // recive


                            if ($fatch['recive'] == 'Tron') {
                                $recive = '<img src="./icons/tron.svg" width="28px" alt="" class = "recive_img">';
                            } elseif ($fatch['recive'] == 'Litecoin') {
                                $recive = '<img src="./icons/litecoin.svg" width="28px" alt="" class = "recive_img">';
                            } elseif ($fatch['recive'] == 'Payeer') {
                                $recive = '<img src="./icons/payeer.svg" width="28px" alt="" class = "recive_img">';
                            } elseif ($fatch['recive'] == 'Perfect money') {
                                $recive = '<img src="./icons/perfect.svg" width="28px" alt="" class = "recive_img">';
                            } elseif ($fatch['recive'] == 'Coinbase') {
                                $recive = '<img src="./icons/coinbase.svg" width="28px" alt="" class = "recive_img">';
                            } elseif ($fatch['recive'] == 'Bkash Personal') {
                                $recive = '<img src="./icons/bkash.svg" width="28px" alt="" class = "recive_img">';
                            } elseif ($fatch['recive'] == 'Nagad Personal') {
                                $recive = '<img src="./icons/nagad.svg" width="28px" alt="" class = "recive_img">';
                            } elseif ($fatch['recive'] == 'Tether') {
                                $recive = '<img src="./icons/theter.svg" width="28px" alt="" class = "recive_img">';
                            }



                            // payment status

                            if ($fatch['state'] == 'Paid') {
                                $star = '<span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                   Paid
                                                 </span>';
                            } elseif ($fatch['state'] == 'Canceled') {
                                $star = '<span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                                        Canceled
                                                 </span>';
                            } else {
                                $star = '<span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                                                   Proccessing
                                                 </span>';
                            }

                        ?>


                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    <h4 class="tracking_no_main"><?php echo $fatch['sno'] ?></h4>
                                </td>
                                <td class="px-4 py-3 text-sm th_img">
                                    <div class="flex items-center text-sm">

                                        <?php if (isset($send)) {
                                            echo $send;
                                        } ?>
                                        <h4 class="send_am">
                                            <?php echo $fatch['sendam'] ?>
                                        </h4>
                                    </div>

                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <div class="flex items-center text-sm">
                                        <?php if (isset($recive)) {
                                            echo $recive;
                                        } ?>
                                        <!-- <img src="./icons/toen.svg" width="28px" alt=""> -->
                                        <h4 class="send_am">
                                            <?php echo $fatch['reciveam'] ?>
                                        </h4>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm">
                                    <?php echo $fatch['user'] ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $fatch['user_name'] ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $fatch['account_no'] ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $fatch['phone'] ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?php echo $fatch['date'] ?>
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    <?php if (isset($star)) {
                                        echo $star;
                                    } ?>
                                </td>
                            </tr>



                        <?php
                        }
                        ?>


                    </tbody>
                </table>
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
</body>

</html>