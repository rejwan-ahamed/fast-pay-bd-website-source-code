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
    $start = "offline";
}

if ($fetch['state'] == 'online') {
    $st = "7.00 AM to 12.00 PM";
} elseif ($fetch['state'] == 'wait') {
    $st = "wait 5 to 10 minutes";
} else {
    $st = "1:30 PM to 6:30 AM";
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