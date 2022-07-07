<?php

$server = "localhost";
$username = "fastpayb_wolfer";
$password = "#Deadpoolback292#";
$db = "fastpayb_ct";

$con = mysqli_connect($server,$username,$password,$db);
if (!$con) {
    die("check the connection error" . mysqli_connect());
}
else {
    // echo "connection successfull you are awesome";
}


?>