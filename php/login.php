
<?php
include 'connection.php';

$name = $_POST['username'];
$password = $_POST['password'];
// echo $name . $password;


$s = "SELECT * FROM employees WHERE name = '$name' && num_id = '$password'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if ($num == 1) {

    $_SESSION['username'] = $name;
    // $time = time();

    // $new_log = mysqli_query($con, "insert into sessions('num_id','session_status','start_time') values ($password,'active',$time)");
    // // $inserted = mysqli_query($conn, $new_log);
    // if ($new_log) {
    // echo 'there was an error loging in';
    // }

    header('location:../dashboard.html');
} else {
    header('location: ../index.html');
}

?>