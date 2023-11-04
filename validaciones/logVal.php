<?php

session_start();

include('connection.php');
$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' and password='$password' ");

if(mysqli_num_rows($sql) > 0){
    foreach($sql as $row){
        $_SESSION['id'] = $row['id'];
        $_SESSION['id_card'] = $row['id_card'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['username'] = $username;
        $_SESSION['registration_date'] = $row['registration_date'];
    }
    header("location: ../profile.php");
    exit;
} else {
    echo 'error';
    exit ;
}
?>