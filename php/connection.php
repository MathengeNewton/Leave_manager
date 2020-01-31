<?php
session_start();
//connect to server
$servername = "localhost";
$username = "root";
$password = "mathenge,./1998";

$con = mysqli_connect($servername, $username, $password);

$conn = mysqli_select_db($con, "leave_management");

if ($con->connect_error) {
echo "no connection";
}
