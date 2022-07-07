<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if (isset($_POST['serch'])) {
    include('connection.php');
    $email = $_POST['email'];
    $digits = 5;
    $mainotp = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
    $testotp =   $mainotp;

    $sql = "SELECT * FROM `user_register` WHERE email = '$email' ";
    $query = mysqli_query($con, $sql);

    $fatch = mysqli_num_rows($query);
    if ($fatch == 1) {
        session_start();
        $_SESSION['otp'] = true;
        $_SESSION['user-email'] = $email;
        $_SESSION['user-otp'] = $testotp;
        

        // update sql shart here for otp
        $up_sql = "UPDATE `user_register` SET `OTP`=' $testotp' WHERE email = '$email' ";
        $up_query = mysqli_query($con, $up_sql);
        
        
        // mail part start here

       function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'fastpaybd.com';
        $mail->Port = 465;  
        $mail->Username = 'info@fastpaybd.com';
        $mail->Password = '#Deadpoolback292#';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="info@fastpaybd.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
            $error = "Thanks You !! Your email is sent.";  
            return $error;
        }
    }
    
    $to   = $email;
    $from = 'info@fastpaybd.com';
    $name = 'Fast Pay BD';
    $subj = 'Password recovery TOP';
    $msg = 'Your Password recovery OTP is' ." ". $testotp;
    
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
    
        
        
        // mail part end here

        header('Location:forget-otp.php');
    } else {
        $war = '<div class="p-3">
<div class="alert alert-danger" role="alert">
    <i class="bi bi-exclamation-triangle-fill"></i>&nbsp; &nbsp; Email addressnot found.
</div>
</div>';
    }
}


?>
<script>

</script>

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


    <title>Email recovery</title>



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
                <a class="navbar-brand" href="nav.css">Notice</a>
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


    <?php
    if (isset($war)) {
        echo $war;
    }
    ?>


    <!-- register section -->


    <section class="register text-center">
        <main class="form-signin">
            <form action="#" method="POST">
                <h1 class="h3 mb-3 fw-normal">Enter your email </h1>

                <div class="form-floating">
                    <input type="email" class="form-control mb-3" id="floatingInput" placeholder="name@example.com" name="email" required>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="checkbox mb-3">

                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="serch">Continue</button>
                <p class="mt-5 mb-3 text-muted">Go to <a href="user_login.php">Login</a></p>
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


    <!-- <script>
        var e = Math.floor(Math.random() * 90000) + 10000;
        document.write(e)
    </script> -->





</body>

</html>