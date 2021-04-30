<?php
  include 'connection.php';

  $center_id = $_POST['center_id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];

  if ($username != "" && $password != "" && $name != "" && $phone_number != "" && $address != ""){
    $usern = $_POST['username'];
    $data = mysqli_query($connect, "select * from center_officer where username='$usern'");
    if (mysqli_num_rows($data)) {
      echo '<script>alert("Username & Password does not match")</script>';
      echo "<meta http-equiv='refresh' content='1; url=../views-manager/record-tester.php'>";
    } else {
      mysqli_query($connect, "insert into center_officer values('','$center_id','$username','$password','$name','$phone_number','$address','Tester')");
      header("location: ../views-manager/record-tester.php");
    }
  }
?>