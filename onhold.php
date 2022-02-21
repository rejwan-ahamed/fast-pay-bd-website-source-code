<h4 class="d-flex justify-content-between align-items-center mb-3">
    <span class="text-primary">Payment on hold</span>

    <?php

    include('connection.php');

    $show = "SELECT * FROM `user_payment_backup`";
    $showquery = mysqli_query($con, $show);
    $shownum = mysqli_num_rows($showquery);



    ?>
    <span class="badge bg-primary rounded-pill"><?php
                                                echo $shownum;

                                                ?></span>
</h4>


<!-- order loop -->

<?php

include('connection.php');

$sql = "SELECT * FROM `user_payment_backup`";
$query = mysqli_query($con, $sql);

// $dataf = mysqli_fetch_array($query);

// $numrow = mysqli_num_rows($query);

if ($numrow = mysqli_num_rows($query) > 0) {
    while ($dataf = mysqli_fetch_array($query)) {



        echo '<div class = "my-3">';

        echo '<div class="card" style="width: 18rem;">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">TRACKING ID : ' . $dataf['sno'];
        echo '</h5>';
        echo '</div>';
        echo '<ul class="list-group list-group-flush">';
        echo '<li class="list-group-item">USER NAME : ' . $dataf['user_name'];
        echo '</li>';
        echo '<li class="list-group-item">EMAIL: ' . $dataf['user'];
        echo '</li>';
        echo '<li class="list-group-item">PHONE : ' . $dataf['phone'];
        echo '</li>';
        echo '<li class="list-group-item">ACCOUNT NO : '  . $dataf['account_no'];
        echo '</li>';
        echo '<li class="list-group-item">SEND: '  . $dataf['send'];
        echo '</li>';
        echo '<li class="list-group-item">SEND AM: ' . $dataf['sendam'];
        echo '</li>';
        echo '<li class="list-group-item">RECIVE: ' . $dataf['recive'];
        echo '</li>';
        echo '<li class="list-group-item">RECIVE AM: ' . $dataf['reciveam'];
        echo '</li>';
        echo '<li class="list-group-item">TRX ID: ' . $dataf['trx'];
        echo '</li>';
        echo '</ul>';
        echo '<div class="card-body">';
        echo '<form action="payment_onhold.php" method = "POST">';


        echo '<input type="hidden" class="btn btn-danger" name = "ids" value =' . $dataf["sno"] . '>';
        echo '<input type="submit" name ="views" class="btn btn-danger" value = "View">';
        echo '<input type="submit" class="btn btn-info mx-2" value = "Finish">';

        echo '</form>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

?>

<?php
if (isset($_POST['views'])) {
    $sele = "SELECT * FROM `user_payment_backup` WHERE sno = {$_POST['ids']}";

    $results = mysqli_query($con, $sele);
    $resfetch = mysqli_fetch_array($results);
}
?>