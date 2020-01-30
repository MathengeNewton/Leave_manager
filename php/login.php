
<?php
session_start();
//connect to server
$servername = "localhost";
$username = "root";
$password = "mathenge,./1998";

$con = mysqli_connect($servername, $username, $password);

mysqli_select_db($con, 'leave_management');

if ($con->connect_error) {
    echo "no connection";
}

$name = $_POST['username'];
$password = $_POST['password'];
// echo $name . $password;


$s = "SELECT * FROM employees WHERE name = '$name' && num_id = '$password'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if ($num == 1) {

    $_SESSION['username'] = $name;

    // $new_log="INSERT INTO logs(name) VALUES ($username)";
    header('location:../dashboard.html');
} else {
    header('location: ../index.html');
}

?>