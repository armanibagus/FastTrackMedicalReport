<?php

// start section
session_start();

// include the database connection
include 'connection.php';

// get the user input
$username = $_POST['username'];
$password = $_POST['password'];

// get the data in the tables
$data1 = mysqli_query($connect, "select * from center_officer where username='$username' and password='$password'");
$check_officer = mysqli_num_rows($data1);

$data2 = mysqli_query($connect, "select * from patient where username='$username' and password='$password'");
$check_patient = mysqli_num_rows($data2);

// check if the user is center officer or not
if ($check_officer > 0 ) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";

    $user_manager = mysqli_query($connect, "select * from center_officer where username='$username' and position='Manager'");
    $manager = mysqli_fetch_array($user_manager);

    if ($manager > 0) {
      header("Location: ../views-manager/home.php");
    } else {
      header("Location: ../views-tester/home.php");
    }
} else if($check_patient > 0) {
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";

  header("Location: ../views-patient/home.php");
} else {
    header("Location: ../login.php");
}
?>