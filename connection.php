<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "ct";

$con = mysqli_connect($server,$username,$password,$db);
if (!$con) {
    die("check the connection error" . mysqli_connect());
}
else {
    // echo "connection successfull you are awesome";
}


?>