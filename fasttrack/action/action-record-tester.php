<?php
  include 'connection.php';

  $center_id = $_POST['center_id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  /*$position = $_POST['position'];*/
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];


  if ($username != "" && $password != "" && $name != "" && $phone_number != "" && $address != ""){
    mysqli_query($connect, "insert into center_officer values('','$center_id','$username','$password','$name','$phone_number','$address','Tester')");
  }
  header("location: ../views-manager/record-tester.php");
?>