<?php
  include 'connection.php';

  $name = $_POST['name'];
  $stock = $_POST['stock'];
  $description = $_POST['description'];

  mysqli_query($connect, "insert into test_kit values('','$name', '$stock','$description')");
  header("location: ../views/manage-test-kit-stock.php");
?>