<?php
include 'connection.php';


$s = "SELECT * FROM leave_details;";
$result = mysqli_query($con, $s);
$rowcheck = mysqli_num_rows($result);

if ($rowcheck > 0) {
    while ($r = mysqli_fetch_assoc($result)) {
        echo $r['leave_id'] . ",";
        echo $r['start_date'] . ",";
        echo $r['end_date'] . ",";
    }
}
