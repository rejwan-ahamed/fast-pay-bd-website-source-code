<?php
session_start();
$otpverify = $_SESSION['otp-bypass'];
$email = $_SESSION['user-email'];


if (!isset($otpverify) || $otpverify != true) {
    header("location: forget-email.php");
    exit;
} else {

    if (isset($_POST['update-pass'])) {
        include('connection.php');
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if ($password == $cpassword) {

            $up_sql = "UPDATE `user_register` SET `password`='$password' WHERE email = '$email' ";
            $up_query = mysqli_query($con, $up_sql);
            if ($up_query) {
                $success = '<div class="p-3">
                <div class="alert alert-success" role="alert">
                <i class="bi bi-patch-check-fill"></i> &nbsp; Your password has been updated, please login now.
                </div>
            </div>';
            };
        } else {

            $error = '<div class="p-3">
            <div class="alert alert-warning" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i>&nbsp; &nbsp; Your password and confirm password dose not match.
            </div>
        </div>';
        }
    }
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


    <title>Edit-password</title>



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
                <a class="navbar-brand" href="#">Rates</a>
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
                <a href="index.php">Exchange</a>
                <a href="#">Rates</a>
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




    <!-- register section -->

    <?php
    if (isset($error)) {
        echo $error;
    }
    if (isset($success )) {
        echo $success ;
    }
    ?>

    <section class="register text-center">
        <main class="form-signin">
            <form action="#" method="POST">
                <h1 class="h3 mb-3 fw-normal">Enter new password </h1>

                <div class="form-floating">
                    <input type="password" class="form-control mb-3" id="floatingInput" placeholder="name@example.com" name="password">
                    <label for="floatingInput">Password</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control mb-3" id="floatingInput" placeholder="name@example.com" name="cpassword">
                    <label for="floatingInput">Confirm password</label>
                </div>
                <div class="checkbox mb-3">

                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="update-pass">Continue</button>
                <p class="mt-5 mb-3 text-muted">Go to <a href="user_login.php">Login</a></p>
            </form>
        </main>

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