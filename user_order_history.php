<?php

session_start();

if (!isset($_SESSION['loggedn']) || $_SESSION['loggedn'] != true) {
    header("location: user_login.php");
    exit;
}

?>








<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- custom font -->
    <link href="https://api.fontshare.com/css?f[]=clash-display@500,600,700,1&amp;f[]=switzer@300,400,500,600,700&amp;display=swap" rel="stylesheet">

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
                <a class="navbar-brand" href="user.php">Home</a>
                <a class="navbar-brand" href="edit_details.php">Edit details</a>
                <a class="navbar-brand" href="user_order_history.php">Order history</a>
                <a class="navbar-brand" href="notice.php">Notice</a>
                <a class="navbar-brand" href="help.php">Help</a>
                <!-- <a class="navbar-brand" href="user.php">User</a> -->
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
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <!-- <a href="#">Exchange</a> -->
                <a href="user.php">Home</a>
                <a href="edit_details.php">Edit details</a>
                <a href="user_order_history.php">Order history</a>
                <a href="notice.php">Notice</a>
                <a href="help.php">Help</a>
                <!-- <a href="user.php">User</a> -->
            </div>


            <div class="mob_button">
                <a href="user_login.php"><button type="submit" class="m_loogin">Login</button></a>
                <a href="user_regester.php"><button type="submit" class="m_register">Register</button></a>
            </div>

        </div>


        <div class="mobile_ic">
            <a href="index.php"><img src="./logo.svg" alt="logo"></a>
            <span style="font-size:30px;cursor:pointer ;color: #0052FF !important" onclick="openNav()">☰</span>
        </div>

    </section>










    <!-- table for user status -->

    <section class="state_update user_data">

    </section>




    <!-- user letest transtion -->

    <section class="user_letest_tr mb-5 my-5">

        <div class="letest_exchange_hed">

            <h4>All Exchanges</h4>
        </div>


        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
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

                        $sql = "SELECT * FROM `user_payment` WHERE user = '$sesson_user_id' ";
                        $query = mysqli_query($con, $sql);
                        // $fatch = mysqli_fetch_assoc($query);

                        while ($fatch = mysqli_fetch_assoc($query)) {
                            if ($fatch['send'] == 'Bkash Personal') {
                                $send = '<img src="./icons/bkash.svg" width="28px" alt="">';
                            } elseif ($fatch['send'] == 'Nagad Personal') {
                                $send = '<img src="./icons/nagad.svg" width="28px" alt="">';
                            } elseif ($fatch['send'] == 'Upay Personal') {
                                $send = '<img src="./icons/upay.svg" width="28px" alt="">';
                            } elseif ($fatch['send'] == 'Payeer') {
                                $send = '<img src="./icons/payeer.svg" width="28px" alt="">';
                            } elseif ($fatch['send'] == 'Payoneer') {
                                $send = '<img src="./icons/payoneer.svg" width="28px" alt="">';
                            } elseif ($fatch['send'] == 'Perfect Money') {
                                $send = '<img src="./icons/perfect.svg" width="28px" alt="">';
                            } elseif ($fatch['send'] == 'Paypal') {
                                $send = '<img src="./icons/paypal.svg" width="28px" alt="">';
                            } elseif ($fatch['send'] == 'AdvCash') {
                                $send = '<img src="./icons/advcash.svg" width="28px" alt="">';
                            }



                            // recive


                            if ($fatch['recive'] == 'Bkash Personal') {
                                $recive = '<img src="./icons/bkash.svg" width="28px" alt="">';
                            } elseif ($fatch['recive'] == 'Nagad Personal') {
                                $recive = '<img src="./icons/nagad.svg" width="28px" alt="">';
                            } elseif ($fatch['recive'] == 'Upay Personal') {
                                $recive = '<img src="./icons/upay.svg" width="28px" alt="">';
                            } elseif ($fatch['recive'] == 'Payeer') {
                                $recive = '<img src="./icons/payeer.svg" width="28px" alt="">';
                            } elseif ($fatch['recive'] == 'Payoneer') {
                                $recive = '<img src="./icons/payoneer.svg" width="28px" alt="">';
                            } elseif ($fatch['recive'] == 'Perfect Money') {
                                $recive = '<img src="./icons/perfect.svg" width="28px" alt="">';
                            } elseif ($fatch['recive'] == 'Paypal') {
                                $recive = '<img src="./icons/paypal.svg" width="28px" alt="">';
                            } elseif ($fatch['recive'] == 'AdvCash') {
                                $recive = '<img src="./icons/advcash.svg" width="28px" alt="">';
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
    <?php
    include("footer.php")
    ?>

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