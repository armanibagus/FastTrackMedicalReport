<?php
  include 'connection.php';

  $center_id = $_POST['center_id'];
  $name = $_POST['name'];
  $stock = $_POST['stock'];
  $description = $_POST['description'];

  if ($name!="" && $stock!="" && $description!="") {
    mysqli_query($connect, "insert into test_kit values('','$center_id','$name', '$stock','$description')");
    header("location: ../views-manager/manage-test-kit-stock.php");
  }
?>