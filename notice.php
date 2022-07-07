<?php
include('connection.php');
$nsql = "SELECT * FROM `notice` ORDER BY sno DESC LIMIT 10";
$nquery = mysqli_query($con, $nsql);
$nfetch = mysqli_fetch_assoc($nquery);
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


    <title>Notice</title>



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
                <a href="main.php">Exchange</a>
                <a href="rate.php">Rates</a>
                <a href="notice.php">Notice</a>
                <a href="help.php">Help</a>
                <a href="contact.php">Contact</a>
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





    <section class="notice_notice">

        <?php
        include('connection.php');
        $nsql = "SELECT * FROM `notice` ORDER BY sno DESC LIMIT 10";
        $nquery = mysqli_query($con, $nsql);

        $row = "SELECT * FROM `notice`";
        $rowQuery = mysqli_query($con, $row);
        $mainrow = mysqli_num_rows($rowQuery);
        if ($mainrow == 0) {
            $nonotice = '<div class="no-notice">
            <h3 class="notice-title">No Notice Available Right Now.</h3>
        </div>';
        } else {
            while ($nfetch = mysqli_fetch_assoc($nquery)) {
        ?>
                <main class="notice px-3">
                    <div class="container">

                        <div class="date mt-5">
                            <div class="date_st">
                                <h4 class="date_main"><?php echo $nfetch['date'] ?></h4>
                            </div>
                        </div>
                        <h1 class="mt-2 heding"><?php echo $nfetch['sub'] ?></h1>
                        <p class="main_notice"><?php echo $nfetch['body'] ?></p>



                    </div>
                </main>

        <?php
            }
        };
        ?>

        <?php if (isset($nonotice)) {
            echo $nonotice;
        } ?>


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