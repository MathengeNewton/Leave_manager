<?php
include 'connection.php';

$name = $_POST['username'];
$start = $_POST['start_date'];
$end = $_POST['end_date'];



$reqister_leave = "INSERT INTO leave_details(start_date,end_date) VALUES($start,$end)";
$result = mysqli_query($con, $reqister_leave);

if ($result) {
    echo "registered succesifully";
} else {
    echo "trouble adding your leave request";
}
