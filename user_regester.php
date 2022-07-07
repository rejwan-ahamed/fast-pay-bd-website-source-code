<?php
if (isset($_POST['register'])) {



    include('connection.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password1 = $_POST['password'];
    $re_password = $_POST['re_password'];



    if ($name == "" || $email == "" || $phone == "" || $password1 == "" || $re_password == "") {
        $war = '<div class="p-3"><div class="alert alert-warning" role="alert">
        <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; All fields are required.
        </div> </div>';
    } else {

        if ($password1 != $re_password) {
            $err = '<div class="p-3"><div class="alert alert-warning" role="alert">
        <i class="bi bi-exclamation-diamond-fill"></i>&nbsp; Password dosent match.
        </div> </div>';
        } else {

            // email check

            $esql = "SELECT * FROM `user_register` WHERE email = '$email'";
            $equery = mysqli_query($con, $esql);
            $efatch = mysqli_fetch_assoc($equery);

            if ($efatch > 0) {
                $ewar = '<div class="p-3"><div class="alert alert-warning" role="alert">
                <i class="bi bi-x-octagon-fill"></i>&nbsp; This email has been used by an account. Please use another email account..
                </div> </div>';
            } else {
                $sql = " INSERT INTO `user_register` (`name`, `email`, `phone`, `password`, `date`) VALUES ('$name', '$email', '$phone', '$password1', current_timestamp())";

                $query = mysqli_query($con, $sql);
                if ($query) {
                    $success = '<div class="p-3"><div class="alert alert-success" role="alert">
        <i class="bi bi-patch-check-fill"></i>&nbsp; Your account has been created successfully, Please login.
        </div></div>';
                } else {
                    echo "data not inserted";
                }
            }
        }
    }

    // INSERT INTO `user_register` (`sno`, `name`, `email`, `phone`, `password`, `date`) VALUES (NULL, 'rejwan', 'rejwan@gmail.com', '01725281740', '20099172', current_timestamp());

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


    <title>register</title>



</head>

<!-- This email has been used by an account. Please use another email account. -->


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
                <a href="user_login.php" class="btn" role="button" aria-pressed="true">Login</a>
                <a href="user_regester.php" class="btn btn-primary" role="button" aria-pressed="true">Register</a>
                <!-- <button type="button" class="btn">Login</button>
                <button type="button" class="btn btn-primary">Register</button> -->
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
                <a href="nav.css">Notice</a>
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
    if (isset($success)) {
        echo $success;
    }
    if (isset($war)) {
        echo $war;
    }
    if (isset($err)) {
        echo $err;
    }
    if (isset($ewar)) {
        echo $ewar;
    }

    ?>
    <!-- <div class="alert alert-warning" role="alert">
            <i class="bi bi-exclamation-octagon-fill"></i>&nbsp; &nbsp; This email has been used by an account. Please use another email account.
        </div> -->
    </div>

    <section class="register text-center">


        <main class="form-signin">
            <form action="#" method="POST">
                <h1 class="h3 mb-3 fw-normal">Please register</h1>

                <div class="form-floating">
                    <input type="text" class="form-control mb-3" id="floatingInput" placeholder="name@example.com" name="name">
                    <label for="floatingInput">Full name</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control mb-3" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="number" class="form-control mb-3" id="floatingPassword" placeholder="Password" name="phone">
                    <label for="floatingPassword">Phone number</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control mb-3" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control mb-3" id="floatingPassword" placeholder="Password" name="re_password">
                    <label for="floatingPassword">Confirm password</label>
                </div>

                <div class="checkbox mb-3">

                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="register">Register</button>
                <p class="mt-5 mb-3 text-muted">Already have an account <a href="user_login.php">Login</a></p>
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