<?php
session_start();

if (!isset($_SESSION['loggedn1']) || $_SESSION['loggedn1'] != true) {
    header("location: admin_login.php");
    exit;
}


if (isset($_POST['bkash_id'])) {
    include('connection.php');
    // $getaway1 = "bkash";
    $bkash_id = $_POST['bkash_id'];
    $sno = 1;

    // echo $getaway1; echo $bkash_send; echo $bkash_recive; echo $bkash_reserv;

    $sql2 = " UPDATE `giveaway_id` SET `account_id`='$bkash_id'  WHERE sno = '$sno' ";
    $query = mysqli_query($con, $sql2);

    if ($bkash_id == "") {
        $war = '<div class="p-3"><div class="alert alert-warning" role="alert">
        <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; All fields are required.
        </div> </div>';
    } else {
        if ($query) {
            $succ = ' <div class="p-3">
            <div class="alert alert-success" role="alert">
            <i class="bi bi-cloud-arrow-up-fill"></i> &nbsp;  details updated.
            </div>
         </div>';
        } else {
            echo "data notupdated";
        }
    }
}
?>

<?php

if (isset($_POST['nagad_id'])) {
    include('connection.php');
    // $getaway1 = "bkash";
    $nagad_id = $_POST['nagad_id'];
    $sno = 2;

    // echo $getaway1; echo $bkash_send; echo $bkash_recive; echo $bkash_reserv;

    $sql2 = " UPDATE `giveaway_id` SET `account_id`='$nagad_id'  WHERE sno = '$sno' ";
    $query = mysqli_query($con, $sql2);

    if ($bkash_id == "") {
        $war = '<div class="p-3"><div class="alert alert-warning" role="alert">
        <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; All fields are required.
        </div> </div>';
    } else {
        if ($query) {
            $succ = ' <div class="p-3">
            <div class="alert alert-success" role="alert">
            <i class="bi bi-cloud-arrow-up-fill"></i> &nbsp;  details updated.
            </div>
         </div>';
        } else {
            echo "data notupdated";
        }
    }
}
?>

<?php

if (isset($_POST['perfect_id'])) {
    include('connection.php');
    // $getaway1 = "bkash";
    $perfect_id = $_POST['perfect_id'];
    $sno = 3;

    // echo $getaway1; echo $bkash_send; echo $bkash_recive; echo $bkash_reserv;

    $sql2 = " UPDATE `giveaway_id` SET `account_id`='$perfect_id'  WHERE sno = '$sno' ";
    $query = mysqli_query($con, $sql2);

    if ($bkash_id == "") {
        $war = '<div class="p-3"><div class="alert alert-warning" role="alert">
        <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; All fields are required.
        </div> </div>';
    } else {
        if ($query) {
            $succ = ' <div class="p-3">
            <div class="alert alert-success" role="alert">
            <i class="bi bi-cloud-arrow-up-fill"></i> &nbsp;  details updated.
            </div>
         </div>';
        } else {
            echo "data notupdated";
        }
    }
}
?>



<?php

if (isset($_POST['litecoin_id'])) {
    include('connection.php');
    // $getaway1 = "bkash";
    $litecoin_id = $_POST['litecoin_id'];
    $sno = 4;

    // echo $getaway1; echo $bkash_send; echo $bkash_recive; echo $bkash_reserv;

    $sql2 = " UPDATE `giveaway_id` SET `account_id`='$litecoin_id'  WHERE sno = '$sno' ";
    $query = mysqli_query($con, $sql2);

    if ($bkash_id == "") {
        $war = '<div class="p-3"><div class="alert alert-warning" role="alert">
        <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; All fields are required.
        </div> </div>';
    } else {
        if ($query) {
            $succ = ' <div class="p-3">
            <div class="alert alert-success" role="alert">
            <i class="bi bi-cloud-arrow-up-fill"></i> &nbsp;  details updated.
            </div>
         </div>';
        } else {
            echo "data notupdated";
        }
    }
}
?>



<?php

if (isset($_POST['tron_id'])) {
    include('connection.php');
    // $getaway1 = "bkash";
    $tron_id = $_POST['tron_id'];
    $sno = 5;

    // echo $getaway1; echo $bkash_send; echo $bkash_recive; echo $bkash_reserv;

    $sql2 = " UPDATE `giveaway_id` SET `account_id`='$tron_id'  WHERE sno = '$sno' ";
    $query = mysqli_query($con, $sql2);

    if ($bkash_id == "") {
        $war = '<div class="p-3"><div class="alert alert-warning" role="alert">
        <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; All fields are required.
        </div> </div>';
    } else {
        if ($query) {
            $succ = ' <div class="p-3">
            <div class="alert alert-success" role="alert">
            <i class="bi bi-cloud-arrow-up-fill"></i> &nbsp;  details updated.
            </div>
         </div>';
        } else {
            echo "data notupdated";
        }
    }
}
?>


<?php

if (isset($_POST['theter_id'])) {
    include('connection.php');
    // $getaway1 = "bkash";
    $theter_id = $_POST['theter_id'];
    $sno = 6;

    // echo $getaway1; echo $bkash_send; echo $bkash_recive; echo $bkash_reserv;

    $sql2 = " UPDATE `giveaway_id` SET `account_id`='$theter_id'  WHERE sno = '$sno' ";
    $query = mysqli_query($con, $sql2);

    if ($bkash_id == "") {
        $war = '<div class="p-3"><div class="alert alert-warning" role="alert">
        <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; All fields are required.
        </div> </div>';
    } else {
        if ($query) {
            $succ = ' <div class="p-3">
            <div class="alert alert-success" role="alert">
            <i class="bi bi-cloud-arrow-up-fill"></i> &nbsp;  details updated.
            </div>
         </div>';
        } else {
            echo "data notupdated";
        }
    }
}
?>


<?php

if (isset($_POST['coinbase_id'])) {
    include('connection.php');
    // $getaway1 = "bkash";
    $coinbase_id = $_POST['coinbase_id'];
    $sno = 7;

    // echo $getaway1; echo $bkash_send; echo $bkash_recive; echo $bkash_reserv;

    $sql2 = " UPDATE `giveaway_id` SET `account_id`='$coinbase_id'  WHERE sno = '$sno' ";
    $query = mysqli_query($con, $sql2);

    if ($bkash_id == "") {
        $war = '<div class="p-3"><div class="alert alert-warning" role="alert">
        <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; All fields are required.
        </div> </div>';
    } else {
        if ($query) {
            $succ = ' <div class="p-3">
            <div class="alert alert-success" role="alert">
            <i class="bi bi-cloud-arrow-up-fill"></i> &nbsp;  details updated.
            </div>
         </div>';
        } else {
            echo "data notupdated";
        }
    }
}
?>


<?php

if (isset($_POST['payeer_id'])) {
    include('connection.php');
    // $getaway1 = "bkash";
    $payeer_id = $_POST['payeer_id'];
    $sno = 8;

    // echo $getaway1; echo $bkash_send; echo $bkash_recive; echo $bkash_reserv;

    $sql2 = " UPDATE `giveaway_id` SET `account_id`='$payeer_id'  WHERE sno = '$sno' ";
    $query = mysqli_query($con, $sql2);

    if ($bkash_id == "") {
        $war = '<div class="p-3"><div class="alert alert-warning" role="alert">
        <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; All fields are required.
        </div> </div>';
    } else {
        if ($query) {
            $succ = ' <div class="p-3">
            <div class="alert alert-success" role="alert">
            <i class="bi bi-cloud-arrow-up-fill"></i> &nbsp;  details updated.
            </div>
         </div>';
        } else {
            echo "data notupdated";
        }
    }
}
?>






<!-- INSERT INTO `getaway` (`sno`, `getaway`, `send`, `recive`, `reserv`) VALUES (NULL, 'bkash', '30', '12', '1200'); -->




<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>account id</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="./assets/js/init-alpine.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tailwind.output.css">
    <link rel="stylesheet" href="nav.css">
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
            <div class="py-4 text-gray-500 dark:text-gray-400 my-5">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                    coin-ex
                </a>
                <ul>

                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="admin.php">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="payment_onhold.php">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span class="ml-4">Payment on hold</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="getaway.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                                <path d="M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z" />
                            </svg>
                            <span class="ml-4">Getaway</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="payment_history.php">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                                </path>
                            </svg>
                            <span class="ml-4">Payment History</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="account_id.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <span class="ml-4">Account NO</span>
                        </a>
                    </li>


                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="state.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
                                <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <span class="ml-4">Status</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="add_notice.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                            </svg>
                            <span class="ml-4">Add Notice</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="admin_logout.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg>
                            <span class="ml-4">Logout</span>
                        </a>
                    </li>



                </ul>

            </div>
        </aside>
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
        <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden" x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu" @keydown.escape="closeSideMenu">
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                    Windmill
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="index.html">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="forms.html">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                </path>
                            </svg>
                            <span class="ml-4">Forms</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="cards.html">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span class="ml-4">Cards</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="charts.html">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
                            <span class="ml-4">Charts</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="buttons.html">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                                </path>
                            </svg>
                            <span class="ml-4">Buttons</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="modals.html">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span class="ml-4">Modals</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="tables.html">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                            <span class="ml-4">Tables</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" @click="togglePagesMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                                    </path>
                                </svg>
                                <span class="ml-4">Pages</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isPagesMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="pages/login.html">Login</a>
                                </li>
                                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="pages/create-account.html">
                                        Create account
                                    </a>
                                </li>
                                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="pages/forgot-password.html">
                                        Forgot password
                                    </a>
                                </li>
                                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="pages/404.html">404</a>
                                </li>
                                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <a class="w-full" href="pages/blank.html">Blank</a>
                                </li>
                            </ul>
                        </template>
                    </li>
                </ul>
                <div class="px-6 my-6">
                    <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Create account
                        <span class="ml-2" aria-hidden="true">+</span>
                    </button>
                </div>
            </div>
        </aside>
        <div class="flex flex-col flex-1 w-full">
            <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                    <!-- Mobile hamburger -->
                    <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="toggleSideMenu" aria-label="Menu">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Search input -->
                    <div class="flex justify-center flex-1 lg:mr-32">
                        <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">


                        </div>
                    </div>
                    <ul class="flex items-center flex-shrink-0 space-x-6">
                        <!-- Theme toggler -->
                        <li class="flex">
                            <button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme" aria-label="Toggle color mode">
                                <template x-if="!dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                    </svg>
                                </template>
                                <template x-if="dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                                    </svg>
                                </template>
                            </button>
                        </li>
                        <!-- Notifications menu -->

                        <!-- Profile menu -->

                    </ul>
                </div>
            </header>


            <main class="h-full overflow-y-auto">

                <?php
                if (isset($succ)) {
                    echo $succ;
                }
                if (isset($war)) {
                    echo  $war;
                }

                ?>
                <!-- main form -->

                <div class="gataway p-5">
                    <form method="POST" action="#">
                        <div class="row g-3 mb-3">

                            <?php
                            include('connection.php');
                            $fsql = "SELECT * FROM `giveaway_id` WHERE sno = 1 ";
                            $fquery = mysqli_query($con, $fsql);
                            $fatch = mysqli_fetch_assoc($fquery)

                            ?>

                            <div class="col-sm-3 icon_image">
                                <img src="./icons/bkash.svg" alt="" width="40">
                                <h3>BKASH PERSONAL BDT</h3>
                            </div>

                            <div class="col-sm-3">
                                <label for="lastName" class="form-label">Account ID</label>
                                <input type="text" step=0.000000001 class="form-control" id="lastName" placeholder="" value="<?php echo $fatch['account_id'] ?>" name="bkash_id">
                            </div>
                        </div>

                        <!-- nagad giveaway_id -->

                        <div class="row g-3 mb-3">
                            <?php
                            include('connection.php');
                            $fsql = "SELECT * FROM `giveaway_id` WHERE sno = 2 ";
                            $fquery = mysqli_query($con, $fsql);
                            $fatch = mysqli_fetch_assoc($fquery)
                            ?>
                            <div class="col-sm-3 icon_image">
                                <img src="./icons/nagad.svg" alt="" width="40">
                                <h3>NAGAD PERSONAL BDT</h3>
                            </div>

                            <div class="col-sm-3">
                                <label for="lastName" class="form-label">Account ID</label>
                                <input type="text" step=0.000000001 class="form-control" id="lastName" placeholder="" value="<?php echo $fatch['account_id'] ?>" name="nagad_id">
                            </div>
                        </div>

                        <!-- perfect money giveaway_id -->

                        <div class="row g-3 mb-3">
                            <?php
                            include('connection.php');
                            $fsql = "SELECT * FROM `giveaway_id` WHERE sno = 3 ";
                            $fquery = mysqli_query($con, $fsql);
                            $fatch = mysqli_fetch_assoc($fquery)
                            ?>
                            <div class="col-sm-3 icon_image">
                                <img src="./icons/perfect.svg" alt="" width="40">
                                <h3>PERFECT MONEY USD</h3>
                            </div>

                            <div class="col-sm-3">
                                <label for="lastName" class="form-label">Account ID</label>
                                <input type="text" step=0.000000001 class="form-control" id="lastName" placeholder="" value="<?php echo $fatch['account_id'] ?>" name="perfect_id">
                            </div>
                        </div>


                        <!-- litecoin -->
                        <div class="row g-3 mb-3">
                            <?php
                            include('connection.php');
                            $fsql = "SELECT * FROM `giveaway_id` WHERE sno = 4 ";
                            $fquery = mysqli_query($con, $fsql);
                            $fatch = mysqli_fetch_assoc($fquery)
                            ?>
                            <div class="col-sm-3 icon_image">
                                <img src="./icons/litecoin.svg" alt="" width="40">
                                <h3>COINBASE LTC USD</h3>
                            </div>

                            <div class="col-sm-3">
                                <label for="lastName" class="form-label">Account ID</label>
                                <input type="text" step=0.000000001 class="form-control" id="lastName" placeholder="" value="<?php echo $fatch['account_id'] ?>" name="litecoin_id">
                            </div>
                        </div>


                        <!-- tron getyaway -->

                        <div class="row g-3 mb-3">
                            <?php
                            include('connection.php');
                            $fsql = "SELECT * FROM `giveaway_id` WHERE sno = 5 ";
                            $fquery = mysqli_query($con, $fsql);
                            $fatch = mysqli_fetch_assoc($fquery)
                            ?>
                            <div class="col-sm-3 icon_image">
                                <img src="./icons/tron.svg" alt="" width="40">
                                <h3>TRON TRX</h3>
                            </div>

                            <div class="col-sm-3">
                                <label for="lastName" class="form-label">Account ID</label>
                                <input type="text" step=0.000000001 class="form-control" id="lastName" placeholder="" value="<?php echo $fatch['account_id'] ?>" name="tron_id">
                            </div>
                        </div>

                        <!-- thether -->
                        <div class="row g-3 mb-3">
                            <?php
                            include('connection.php');
                            $fsql = "SELECT * FROM `giveaway_id` WHERE sno = 6 ";
                            $fquery = mysqli_query($con, $fsql);
                            $fatch = mysqli_fetch_assoc($fquery)
                            ?>
                            <div class="col-sm-3 icon_image">
                                <img src="./icons/theter.svg" alt="" width="40">
                                <h3>TETHER USDT</h3>
                            </div>
                            <div class="col-sm-3">
                                <label for="lastName" class="form-label">Account ID</label>
                                <input type="text" step=0.000000001 class="form-control" id="lastName" placeholder="" value="<?php echo $fatch['account_id'] ?>" name="theter_id">
                            </div>
                        </div>

                        <!-- coinbae -->
                        <div class="row g-3 mb-3">
                            <?php
                            include('connection.php');
                            $fsql = "SELECT * FROM `giveaway_id` WHERE sno = 7 ";
                            $fquery = mysqli_query($con, $fsql);
                            $fatch = mysqli_fetch_assoc($fquery)
                            ?>

                            <div class="col-sm-3 icon_image">
                                <img src="./icons/coinbase.svg" alt="" width="40">
                                <h3>Coinbase BCH</h3>
                            </div>

                            <div class="col-sm-3">
                                <label for="lastName" class="form-label">Account ID</label>
                                <input type="text" step=0.000000001 class="form-control" id="lastName" placeholder="" value="<?php echo $fatch['account_id'] ?>" name="coinbase_id">
                            </div>
                        </div>

                        <!-- payeer getwawy -->
                        <div class="row g-3 mb-3">
                            <?php
                            include('connection.php');
                            $fsql = "SELECT * FROM `giveaway_id` WHERE sno = 8 ";
                            $fquery = mysqli_query($con, $fsql);
                            $fatch = mysqli_fetch_assoc($fquery)
                            ?>

                            <div class="col-sm-3 icon_image">
                                <img src="./icons/payeer.svg" alt="" width="40">
                                <h3>PAYEER USD</h3>
                            </div>
                            <div class="col-sm-3">
                                <label for="lastName" class="form-label">Account ID</label>
                                <input type="text" step=0.000000001 class="form-control" id="lastName" placeholder="" value="<?php echo $fatch['account_id'] ?>" name="payeer_id">
                            </div>
                        </div>
                        <!-- <button type="submit" class="btn btn-primary my-3">Submit</button> -->
                        <button type="submit" class="btn btn-warning my-3" name="update">Update</button>
                    </form>
                </div>



            </main>
        </div>
    </div>
</body>

</html>