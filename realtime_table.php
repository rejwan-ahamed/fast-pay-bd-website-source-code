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
                            <h6 class="my-0 rs_title">Our Reserves</h6>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <?php
                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 1";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);
                        // echo $bfetch['send'];
                        ?>
                        <div class="res_im">
                            <img src="./icons/bkash.svg" alt="" width="40">
                            <span>Bkash</span>
                        </div>
                        <span class="text-muted amu"><?php echo $bfetch['reserv'] ?> BDT</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <?php
                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 2";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);
                        // echo $bfetch['send'];
                        ?>
                        <div class="res_im">
                            <img src="./icons/nagad.svg" alt="" width="40">
                            <span>Nagad</span>
                        </div>
                        <span class="text-muted amu"><?php echo $bfetch['reserv'] ?> BDT</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <?php
                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 7";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);
                        // echo $bfetch['send'];
                        ?>
                        <div class="res_im">
                            <img src="./icons/coinbase.svg" alt="" width="40">
                            <span>Coinbase</span>
                        </div>
                        <span class="text-muted amu">$<?php echo $bfetch['reserv'] ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <?php
                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 5";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);
                        // echo $bfetch['send'];
                        ?>
                        <div class="res_im">
                            <img src="./icons/tron.svg" alt="" width="40">
                            <span>Tron</span>
                        </div>
                        <span class="text-muted amu">$<?php echo $bfetch['reserv'] ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <?php
                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);
                        // echo $bfetch['send'];
                        ?>
                        <div class="res_im">
                            <img src="./icons/payeer.svg" alt="" width="40">
                            <span>Payeer</span>
                        </div>
                        <span class="text-muted amu">$<?php echo $bfetch['reserv'] ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <?php
                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 6";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);
                        // echo $bfetch['send'];
                        ?>
                        <div class="res_im">
                            <img src="./icons/theter.svg" alt="" width="40">
                            <span>Tether</span>
                        </div>
                        <span class="text-muted amu">$<?php echo $bfetch['reserv'] ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <?php
                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 3";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);
                        // echo $bfetch['send'];
                        ?>
                        <div class="res_im">
                            <img src="./icons/perfect.svg" alt="" width="40">
                            <span>Perfect money</span>
                        </div>
                        <span class="text-muted amu">$<?php echo $bfetch['reserv'] ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <?php
                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 4";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);
                        // echo $bfetch['send'];
                        ?>
                        <div class="res_im">
                            <img src="./icons/litecoin.svg" alt="" width="40">
                            <span>Litecoin</span>
                        </div>
                        <span class="text-muted amu">$<?php echo $bfetch['reserv'] ?></span>
                    </li>
                </ul>


                <ul class="list-group mb-3">

                    <?php
                    include('connection.php');
                    $bsql = "SELECT * FROM `getaway` WHERE sno = 7";
                    $bquery = mysqli_query($con, $bsql);
                    $bfetch = mysqli_fetch_assoc($bquery);
                    // echo $bfetch['send'];
                    ?>

                    <li class="list-group-item d-flex justify-content-between lh-sm erp">
                        <div>
                            <h6 class="my-0 rs_title">Buying and Selling Rate</h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div class="buy_sell">
                            <div>
                                <h6 class="my-0 rs_title">Gateway</h6>
                            </div>

                            <div class="sell_title">
                                <h6 class="my-0 rs_title">Buying</h6>
                                <h6 class="my-0 rs_title">Selling</h6>
                            </div>

                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <div class="res_im sell_sp">
                            <img src="./icons/coinbase.svg" alt="" width="40">
                            <span>Coinbase</span>
                        </div>
                        <div class="sell_rate">
                            <span class="text-muted amu"><?php echo $bfetch['recive'] ?> BDT</span>
                            <span class="text-muted amu"><?php echo $bfetch['send'] ?> BDT</span>
                        </div>

                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <?php
                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 5";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);
                        // echo $bfetch['send'];
                        ?>

                        <div class="res_im  sell_sp">
                            <img src="./icons/tron.svg" alt="" width="40">
                            <span>Tron</span>
                        </div>
                        <div class="sell_rate">
                            <span class="text-muted amu"><?php echo $bfetch['recive'] ?> BDT</span>
                            <span class="text-muted amu"><?php echo $bfetch['send'] ?> BDT</span>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <?php
                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 8";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);
                        // echo $bfetch['send'];
                        ?>
                        <div class="res_im sell_sp">
                            <img src="./icons/payeer.svg" alt="" width="40">
                            <span>Payeer</span>
                        </div>
                        <div class="sell_rate">
                            <span class="text-muted amu"><?php echo $bfetch['recive'] ?> BDT</span>
                            <span class="text-muted amu"><?php echo $bfetch['send'] ?> BDT</span>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <?php
                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 6";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);
                        // echo $bfetch['send'];
                        ?>
                        <div class="res_im sell_sp">
                            <img src="./icons/theter.svg" alt="" width="40">
                            <span>Tether</span>
                        </div>
                        <div class="sell_rate">
                            <span class="text-muted amu"><?php echo $bfetch['recive'] ?> BDT</span>
                            <span class="text-muted amu"><?php echo $bfetch['send'] ?> BDT</span>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <?php
                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 3";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);
                        // echo $bfetch['send'];
                        ?>
                        <div class="res_im sell_sp">
                            <img src="./icons/perfect.svg" alt="" width="40">
                            <span>Perfect money</span>
                        </div>
                        <div class="sell_rate">
                            <span class="text-muted amu"><?php echo $bfetch['recive'] ?> BDT</span>
                            <span class="text-muted amu"><?php echo $bfetch['send'] ?> BDT</span>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm lhs">
                        <?php
                        include('connection.php');
                        $bsql = "SELECT * FROM `getaway` WHERE sno = 4";
                        $bquery = mysqli_query($con, $bsql);
                        $bfetch = mysqli_fetch_assoc($bquery);
                        // echo $bfetch['send'];
                        ?>
                        <div class="res_im sell_sp">
                            <img src="./icons/litecoin.svg" alt="" width="40">
                            <span>Litecoin</span>
                        </div>
                        <div class="sell_rate">
                            <span class="text-muted amu"><?php echo $bfetch['recive'] ?> BDT</span>
                            <span class="text-muted amu"><?php echo $bfetch['send'] ?> BDT</span>
                        </div>
                    </li>
                </ul>


                <!-- <table class="w-full whitespace-no-wrap">
                    <thead>

                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">
                                <h6>Gateway</h6>
                            </th>
                            <th class="px-4 py-3">
                                <h6>Buying </h6>
                            </th>
                            <th class="px-4 py-3">
                                <h6>Selling</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">


                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm th_img">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/coinbase.svg" alt="" width="40">
                                    <h4 class="send_am hed">
                                        Coinbase
                                    </h4>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <span class="text-muted amu">$65</span>
                            </td>

                            <td class="px-4 py-3 text-xs">
                                <span class="text-muted amu">$65</span>
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm th_img">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/toen.svg" alt="" width="40">
                                    <h4 class="send_am hed">
                                        Tron
                                    </h4>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <span class="text-muted amu">$65</span>
                            </td>

                            <td class="px-4 py-3 text-xs">
                                <span class="text-muted amu">$65</span>
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm th_img">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/payeer.svg" alt="" width="40">
                                    <h4 class="send_am hed">
                                        Payeer
                                    </h4>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <span class="text-muted amu">$65</span>
                            </td>

                            <td class="px-4 py-3 text-xs">
                                <span class="text-muted amu">$65</span>
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm th_img">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/theter.svg" alt="" width="40">
                                    <h4 class="send_am hed">
                                        Tether
                                    </h4>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <span class="text-muted amu">$65</span>
                            </td>

                            <td class="px-4 py-3 text-xs">
                                <span class="text-muted amu">$65</span>
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm th_img">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/perfect.svg" alt="" width="40">
                                    <h4 class="send_am hed">
                                        Perfect money
                                    </h4>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <span class="text-muted amu">$65</span>
                            </td>

                            <td class="px-4 py-3 text-xs">
                                <span class="text-muted amu">$65</span>
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm th_img">
                                <div class="flex items-center text-sm">
                                    <img src="./icons/litecoin.svg" alt="" width="40">
                                    <h4 class="send_am hed">
                                        Litecoin
                                    </h4>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <span class="text-muted amu">$65</span>
                            </td>

                            <td class="px-4 py-3 text-xs">
                                <span class="text-muted amu">$65</span>
                            </td>
                        </tr>


                    </tbody>
                </table> -->





            </div>




            <div class="col-md-8 col-lg-8">
                <div class="container px-6 mx-auto grid">

                    <!-- Cards -->
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">




                    </div>

                    <!-- New Table -->
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">Send</th>
                                        <th class="px-4 py-3">Recive</th>
                                        <th class="px-4 py-3">User</th>
                                        <th class="px-4 py-3">Date</th>
                                        <th class="px-4 py-3">Status</th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">


                                    <?php

                                    include('connection.php');
                                    $sql = "SELECT * FROM `user_payment` ORDER BY sno DESC LIMIT 15";
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
                                        //  else {
                                        //     $send = '<img src="./icons/theter.svg" width="28px" alt="">';
                                        // }


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
                                        //  else {
                                        //     $recive = '<img src="./icons/theter.svg" width="28px" alt="" class = "recive_img">';
                                        // }


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
                                                <?php echo $fatch['user_name'] ?>
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




                </div>
            </div>
        </div>
    </section>