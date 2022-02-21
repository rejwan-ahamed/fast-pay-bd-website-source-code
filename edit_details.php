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

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    // $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];


    $du_sql = "UPDATE `user_register` SET `name`='$name',`phone`='$phone',`address`='$address',`city`='$city',`zip`='$zip' WHERE email = '$sesson_user_id'";
    $duquery = mysqli_query($con, $du_sql);

    if ($duquery) {
        $succ = ' <div class="p-3">
   <div class="alert alert-success" role="alert">
       <i class="bi bi-patch-check-fill"></i>&nbsp; Your details updated.
   </div>
</div>';
    } else {
        echo "data not updated";
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


    <title>edit</title>



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
                <!-- <a class="navbar-brand" href="index.php">Exchange</a> -->
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
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <!-- <a href="#">Exchange</a> -->
                <!-- <a href="index.php">Exchange</a> -->
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
            <span style="font-size:30px;cursor:pointer ;color: #0052FF !important" onclick="openNav()">&#9776;</span>
        </div>

    </section>

    </div>

    <!-- <div class="p-3">
        <div class="alert alert-success" role="alert">
            <i class="bi bi-patch-check-fill"></i>&nbsp; Your details has been updated.
        </div>
    </div> -->

    <?php
    if (isset($succ)) {
        echo $succ;
    }

    ?>


    <section class="register text-center">


        <main class="form-signin user_details">
            <form action="#" method="POST">
                <h1 class="h3 mb-3 fw-normal">Edit details</h1>

                <div class="form-floating">
                    <input type="text" class="form-control mb-3" id="floatingInput" placeholder="name@example.com" name="name" value="<?php echo $dfatch['name'] ?>">
                    <label for="floatingInput">Full name</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control mb-3" id="floatingInput" placeholder="name@example.com" name="email" value="<?php echo $dfatch['email'] ?>" readonly>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="number" class="form-control mb-3" id="floatingPassword" placeholder="Password" name="phone" value="<?php echo $dfatch['phone'] ?>">
                    <label for="floatingPassword">Phone number</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control mb-3" id="floatingPassword" placeholder="Password" name="address" value="<?php echo $dfatch['address'] ?>">
                    <label for="floatingPassword">Address 1</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control mb-3" id="floatingPassword" placeholder="Password" name="city" value="<?php echo $dfatch['city'] ?>">
                    <label for="floatingPassword">City</label>
                </div>
                <div class="form-floating">
                    <input type="number" class="form-control mb-3" id="floatingPassword" placeholder="Password" name="zip" value="<?php echo $dfatch['zip'] ?>">
                    <label for="floatingPassword">Zip code</label>
                </div>


                <div class="checkbox mb-3">

                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="update">Update</button>

            </form>
        </main>

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
                            <li>Legal &amp; privacy</li>
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
                            <li>Legal &amp; privacy</li>
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
                            <li>Legal &amp; privacy</li>
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
                            <li>Legal &amp; privacy</li>
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