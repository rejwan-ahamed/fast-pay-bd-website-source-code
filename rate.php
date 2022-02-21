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


    <title>welcome</title>
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


    <!-- main exchange rate section -->

    <section class="main_rate">

        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">


                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3" colspan="6">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/bkash.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Bkash Personal BDT
                                    </h4>
                                </div>
                            </th>
                            <!-- <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th> -->

                        </tr>
                    </thead>

                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Currency Send </th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3">Currency Recive</th>
                            <th class="px-4 py-3">Our Reserve</th>


                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/bkash.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Bkash Personal BDT
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    95 BDT
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/perfect.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Perfect Money
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 3";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> USD
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/bkash.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Bkash Personal BDT
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    96 BDT
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/payeer.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Payeer
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> USD
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/bkash.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Bkash Personal BDT
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    10 BDT
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    1 TRX
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/tron.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Tron TRX
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 5";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> TRX
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/bkash.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Bkash Personal BDT
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    97 BDT
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/theter.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Tether USDT (TRC 20)
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 6";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> USD
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/bkash.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Bkash Personal BDT
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    96 BDT
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/coinbase.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Coinbase BCH
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 7";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> USD
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/bkash.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Bkash Personal BDT
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    95 BDT
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/litecoin.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Coinbase LTC
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 4";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> USD
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>

        </div>

        <!-- nagad section start here -->

        <div class="w-full overflow-hidden rounded-lg shadow-xs mt-5">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">


                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3" colspan="6">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/nagad.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Nagad Personal BDT
                                    </h4>
                                </div>
                            </th>
                            <!-- <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th> -->

                        </tr>
                    </thead>

                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Currency Send </th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3">Currency Recive</th>
                            <th class="px-4 py-3">Our Reserve</th>


                        </tr>
                    </thead>



                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/nagad.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Nagad Personal BDT
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    95 BDT
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/perfect.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Perfect Money
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 3";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> USD
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/nagad.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Nagad Personal BDT
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    96 BDT
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/payeer.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Payeer
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> USD
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/nagad.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Nagad Personal BDT
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    10 BDT
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    1 TRX
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/tron.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Tron TRX
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 5";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> TRX
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/nagad.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Nagad Personal BDT
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    97 BDT
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/theter.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Tether USDT (TRC 20)
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 6";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> USD
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/nagad.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Nagad Personal BDT
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    96 BDT
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/coinbase.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Coinbase BCH
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 7";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> USD
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/nagad.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Nagad Personal BDT
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    95 BDT
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/litecoin.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Coinbase LTC
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 4";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> USD
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>



        <!-- perfect money section start here -->

        <div class="w-full overflow-hidden rounded-lg shadow-xs mt-5">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">


                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3" colspan="6">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/perfect.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Perfect Money USD
                                    </h4>
                                </div>
                            </th>
                            <!-- <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th> -->

                        </tr>
                    </thead>

                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Currency Send </th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3">Currency Recive</th>
                            <th class="px-4 py-3">Our Reserve</th>


                        </tr>
                    </thead>



                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/perfect.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Perfect Money USD
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    87 BDT
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/bkash.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Bkash Personal
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 1";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> BDT
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/perfect.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Perfect Money USD
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    87 BDT
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/nagad.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Nagad Personal
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 2";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> BDT
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/perfect.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Perfect Money USD
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    0.94 USD
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/payeer.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Payeer
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> USD
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/perfect.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Perfect Money USD
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    0.94 USD
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/litecoin.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Coinbase LTC
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno =4 ";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> USD
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>


        <!-- tilecoin section -->

        <div class="w-full overflow-hidden rounded-lg shadow-xs mt-5">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">


                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3" colspan="6">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/litecoin.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Coinbase LTC USD
                                    </h4>
                                </div>
                            </th>
                            <!-- <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th> -->

                        </tr>
                    </thead>

                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Currency Send </th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3">Currency Recive</th>
                            <th class="px-4 py-3">Our Reserve</th>


                        </tr>
                    </thead>



                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/litecoin.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Coinbase LTC USD
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    86 BDT
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/bkash.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Bkash Personal
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 1";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> BDT
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/litecoin.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Coinbase LTC USD
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    86 BDT
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/nagad.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Nagad Personal
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 2";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> BDT
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/litecoin.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Coinbase LTC USD
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    0.93 USD
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/theter.svg" width="28px" alt="">
                                    <h4 class="send_am">

                                        Tether USDT (TRC 20)
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 6";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> USD
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/litecoin.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Coinbase LTC USD
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    0.96 USD
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/perfect.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Perfect Money
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 3";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> USD
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

        <!-- tron section here -->


        <div class="w-full overflow-hidden rounded-lg shadow-xs mt-5">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">


                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3" colspan="6">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/tron.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Tron TRX
                                    </h4>
                                </div>
                            </th>
                            <!-- <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th> -->

                        </tr>
                    </thead>

                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Currency Send </th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3">Currency Recive</th>
                            <th class="px-4 py-3">Our Reserve</th>


                        </tr>
                    </thead>



                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/tron.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Tron TRX
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    1 TRX
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    6.85 BDT
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/bkash.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Bkash Personal
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 1";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> BBDT
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/tron.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Tron TRX
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    1 TRX
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    6.85 BDT
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/nagad.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Nagad Personal
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 2";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> BDT
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>




                    </tbody>
                </table>
            </div>

        </div>


        <!-- theter section start -->

        <div class="w-full overflow-hidden rounded-lg shadow-xs mt-5">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">


                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3" colspan="6">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/theter.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Tether USDT (TRC 20) USD
                                    </h4>
                                </div>
                            </th>
                            <!-- <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th> -->

                        </tr>
                    </thead>

                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Currency Send </th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3">Currency Recive</th>
                            <th class="px-4 py-3">Our Reserve</th>


                        </tr>
                    </thead>



                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/theter.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Tether USDT (TRC 20) USD
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    88 BDT
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/bkash.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Bkash Personal
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 1";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> BDT
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/theter.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Tether USDT (TRC 20) USD
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    88 BDT
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/nagad.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Nagad Personal
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 2";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> BDT
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>




                    </tbody>
                </table>
            </div>

        </div>

        <!-- payeer section  -->

        <div class="w-full overflow-hidden rounded-lg shadow-xs mt-5">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">


                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3" colspan="6">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/payeer.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Payeer USD
                                    </h4>
                                </div>
                            </th>
                            <!-- <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th> -->

                        </tr>
                    </thead>

                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Currency Send </th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3">Currency Recive</th>
                            <th class="px-4 py-3">Our Reserve</th>


                        </tr>
                    </thead>



                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/payeer.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Payeer USD
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    87 BDT
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/bkash.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Bkash Personal
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 1";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> BDT
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-3 py-3">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/payeer.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Payeer USD
                                    </h4>

                                </div>
                            </td>
                            <td>
                                <h4 class="send_am">
                                    1 USD
                                </h4>
                            </td>
                            <td><i class="fas fa-chevron-right"></i></td>
                            <td>
                                <h4 class="send_am">
                                    87 BDT
                                </h4>
                            </td>
                            <td>
                                <div class="flex items-center text-sm">
                                    <img src="./icons/nagad.svg" width="28px" alt="">
                                    <h4 class="send_am">
                                        Nagad Personal
                                    </h4>

                                </div>
                            </td>
                            <td>
                            <?php
                                include('connection.php');
                                $bsql = "SELECT * FROM `getaway` WHERE sno = 2";
                                $bquery = mysqli_query($con, $bsql);
                                $bfetch = mysqli_fetch_assoc($bquery);
                                // echo $bfetch['send'];
                                ?>
                                <?php echo $bfetch['reserv'] ?> BDT
                                <!-- 0.0528 USD -->
                            </td>
                        </tr>




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