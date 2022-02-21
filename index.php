<?php
if (isset($_POST['exc'])) {
    $send = $_POST['send'];
    $recive = $_POST['recive'];
    // echo "awesome";
    session_start();
    $_SESSION['ex_send'] = $send;
    $_SESSION['ex_recive'] = $recive;
    header("location:exchange.php");
    // $s_s = $_SESSION['ex_send'];
    // $r_r = $_SESSION['ex_recive'];
    // echo $s_s;
    // echo $r_r;
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

    <!-- fav icon -->
    <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">

    <!-- mainfest file here -->
    <link rel="manifest" href="manifest.json">

    <title>welcome</title>
</head>

<body>

    <!-- nav section -->

    <!-- notice  -->
    <section class="notice">
        <marquee behavior="" direction="" class="sp_notice">আমাদের trustexchangebd.com এ আপনাকে স্বাগতম। আমাদের ওয়েবসাইট টি বাংলাদেশের রাষ্ট্রীয় আইনের প্রতি শ্রদ্ধাশীল। শুধুমাত্র ফ্রিল্যান্সারদের সুবিধার ক্ষেত্রে সার্ভিস দিয়ে থাকে। আমাদের অফিস টাইম প্রতিদিন সকাল ১১ টা থেকে রাত ১১ টা পর্যন্ত। শুক্রবার নামাজের জন্য ১২:৩০ থেকে ২:৩০ পর্যন্ত সকল লেনদেন বন্ধ। ৫-৩০ মিনিটের মধ্যে পেমেন্ট না পেলে what'sapp অথবা লাইভ chat এ যোগাযোগ করুন। </marquee>
    </section>



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
                <a href="index.html">Exchange</a>
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



    <!-- admin online status -->



    <section class="admin_state">

        <?php
        include('connection.php');

        $sno = 1;

        $datab = "SELECT * FROM `state` WHERE sno = '$sno' ";

        $querycon = mysqli_query($con, $datab);

        $fetch = mysqli_fetch_assoc($querycon);

        if ($fetch['state'] == 'online') {
            $star = '<img src="state.svg" alt="main image">';
            $start = "online";
        } elseif ($fetch['state'] == 'wait') {
            $star = '<img src="wait.svg" alt="main image">';
            $start = "waiting";
        } else {
            $star = '<img src="offline.svg" alt="main image">';
            $start = "offline ";
        }

        if ($fetch['state'] == 'online') {
            $st = "7.00 AM to 12.00 PM ";
        } elseif ($fetch['state'] == 'wait &nbsp;') {
            $st = "wait 5 to 10 minutes";
        } else {
            $st = "1:30 PM to 6:30 AM &nbsp; &nbsp;";
        }


        ?>

        <div class="admin_main">
            <div class="admin_left">
                <img src="./admin.svg" alt="admin">
            </div>
            <div class="admin_right">
                <div class="admin_on">
                    <div class="admin_title">
                        <h4>Admin <?php echo $start ?> </h4>
                        <h4><?php echo $st ?></h4>
                    </div>

                    <div class="admin_state_img" id="admin_state">
                        <?php echo $star ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- hero section here -->

    <section class="main_hero">

        <div class="hero_section">
            <div class="hrro_left">
                <div class="hero_sub">
                    <h4>Best money exchange website in bangladesh</h4>
                </div>
                <div class="hero_heding">
                    <h1>Reliable money
                        exchange website
                    </h1>
                </div>
                <div class="hero_para">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been
                        the industry's standard dummy text ever since the 1500s,</p>
                </div>

                <div class="hero_but"><a href="#exchange"><button type="button" class="btn btn-primary">Android <i class="fab fa-android"></i></button></a> </div>

            </div>
            <div class="hero_right">
                <div class="hero_img">
                    <img src="./2.svg" alt="main image" loading="lazy">
                </div>

            </div>
        </div>


    </section>

    <!-- exchange section -->

    <section class="exchange" id="exchange">
        <div class="exchange_main">

            <div class="exchange_heding">
                <h3>Start Exchange</h3>
            </div>



            <form action="#" class="ecchange_form" method="POST">
                <div class="row ecchange_row ">
                    <div class="col-md-4 ex-1">
                        <label for="send" class="form-label">Send <i class="bi bi-arrow-up-circle"></i></label>
                        <select class="form-select" id="send" required="" name="send">
                            <option>Bkash Personal</option>
                            <option>Nagad Personal</option>
                            <option>Coinbase</option>
                            <option>Tron</option>
                            <option>Payeer</option>
                            <option>Tether</option>
                            <option>Perfect money</option>
                            <option>Litecoin</option>

                        </select>

                    </div>

                    <div class="col-md-4 ex-2">
                        <label for="state" class="form-label">Recive <i class="bi bi-arrow-down-circle"></i></label>
                        <select class="form-select" id="recive" required="" name="recive">
                            <option>Tron</option>
                            <option>Bkash Personal</option>
                            <option>Nagad Personal</option>
                            <option>Coinbase</option>
                            <option>Payeer</option>
                            <option>Tether</option>
                            <option>Perfect money</option>
                            <option>Litecoin</option>
                        </select>

                    </div>

                    <div class="exchange_button d-grid gap-2  mx-auto ">
                        <button class="btn btn-primary" name="exc" type="submit">Exchange <i class="fas fa-sync-alt"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </section>





    <!-- table for user status -->

    <div id="table">

    </div>














    <!-- description section -->
    <section class="des-sec">
        <div class="des_main_p">
            <div class="des_main">
                <div class="dis1">
                    <h3>700+</h3>
                    <h4>Active user</h4>
                </div>
                <div class="dis2">
                    <h3>1543+</h3>
                    <h4>Total Trangsition</h4>
                </div>
                <div class="dis3">
                    <h3>172</h3>
                    <h4>Todays Trangsition</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- site info -->
    <section class="site_info">
        <div class="site_info_hed">
            <h2>The most reliable money exchange platform</h2>
        </div>
        <div class="site_info_sub">
            <h3>why cripto-x should be your first choise</h3>
        </div>

        <div class="site_info_main">
            <div class="info1">
                <!-- <img src="./Frame.svg" alt="info 1"> -->
                <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                <lord-icon src="https://cdn.lordicon.com/qhviklyi.json" trigger="loop" delay="3000" colors="primary:#121331,secondary:#0052ff" style="width:100px;height:100px">
                </lord-icon>


                <h3>Easy to exchange money</h3>
                <h4>We store the vast majority of the digital assets in secure offline storage.</h4>
            </div>
            <div class="info1">
                <!-- <img src="./Frame-1.svg" alt="info 1"> -->
                <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                <lord-icon src="https://cdn.lordicon.com/qrbokoyz.json" trigger="loop" delay="3000" colors="primary:#121331,secondary:#0052ff" style="width:100px;height:100px">
                </lord-icon>
                <h3>Get best retorns</h3>
                <h4>We store the vast majority of the digital assets in secure offline storage.</h4>
            </div>
            <div class="info1">
                <!-- <img src="./Frame-2.svg" alt="info 1"> -->
                <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                <lord-icon src="https://cdn.lordicon.com/zpxybbhl.json" trigger="loop" delay="3000" colors="primary:#121331,secondary:#0052ff" style="width:100px;height:100px">
                </lord-icon>
                <h3>Quick response</h3>
                <h4>We store the vast majority of the digital assets in secure offline storage.</h4>
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

    <!-- <script>
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
    </script> -->

    <!-- table -->
    <script>
        function loadXMLDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("table").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "realtime_table.php", true);
            xhttp.send();
        }
        setInterval(function() {
            loadXMLDoc();
        }, 1000);

        window.onload = loadXMLDoc;
    </script>

</body>

</html>