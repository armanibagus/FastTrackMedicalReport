<?php
  include 'connection.php';

  $center_name = $_POST["center_name"];
  $phone_number = $_POST["phone_number"];
  $address = $_POST['address'];

  $data = mysqli_query($connect, "INSERT INTO test_center(center_name,phone_number,address) VALUES('$center_name','$phone_number','$address')");

  header("location: ../views/register-test-center.php");
?>