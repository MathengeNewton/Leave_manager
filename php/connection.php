<?php
session_start();
//connect to server
$servername = "localhost";
$username = "root";
$password = "mathenge,./1998";
$dbname = "leave_management";

$con = mysqli_connect($servername, $username, $password, $dbname);



if ($con->connect_error) {
    echo "no connection";
}
