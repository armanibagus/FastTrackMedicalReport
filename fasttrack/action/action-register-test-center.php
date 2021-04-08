<?php
  session_start();
  include 'connection.php';

  $username = $_SESSION['username'];
  $center_name = $_POST["center_name"];
  $phone_number = $_POST["phone_number"];
  $address = $_POST['address'];

  if($center_name!="" && $phone_number!="" && $address!="") {
    $data = mysqli_query($connect, "INSERT INTO test_center(center_name,phone_number,address) VALUES('$center_name','$phone_number','$address')");

    $data2 = mysqli_query($connect, "SELECT * FROM test_center WHERE center_name='$center_name'");
    $test_center = mysqli_fetch_array($data2);

    $center_id = $test_center['center_id'];

    mysqli_query($connect, "UPDATE center_officer set center_id='$center_id' WHERE username='$username'");
  }
  header("location: ../views-manager/register-test-center.php");
?>