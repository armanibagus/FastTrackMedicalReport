<?php
session_start();

include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];


$data = mysqli_query($connect, "select * from center_officer where username='$username' and password='$password'");
$check = mysqli_num_rows($data);

if ($check > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("Location: ../views/home.php");
} else {
    header("Location: ../index.php");
}
?>