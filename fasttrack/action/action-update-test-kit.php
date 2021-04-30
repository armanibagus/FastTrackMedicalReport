<?php
  include 'connection.php';

  $kit_id = $_POST['kit_id'];
  $stock = $_POST['stock'];
  $description = $_POST['description'];

  if($stock!="" && $description!="") {
    mysqli_query($connect, "update test_kit set stock='$stock', description='$description' where kit_id='$kit_id'");
    header("location: ../views-manager/manage-test-kit-stock.php");
  }
?>