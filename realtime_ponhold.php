<?php
                  include('connection.php');
                  $psql = "SELECT * FROM `user_payment_backup`";
                  $pquery = mysqli_query($con, $psql);
                  $pfetch = mysqli_num_rows($pquery);
                  echo $pfetch;
                  ?>