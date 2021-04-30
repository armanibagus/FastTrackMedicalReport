<?php
  include 'connection.php';

$name = "";
$stock = "";
$description = "";

if (isset($_POST['submit'])) {
  $center_id = $_POST['center_id'];
  $name = $_POST['name'];
  $stock = $_POST['stock'];
  $description = $_POST['description'];

  if ($name != "" && $stock != "" && $description != "") {
    $data = mysqli_query($connect, "select * from test_kit where name='$name'");
    if (mysqli_num_rows($data) > 0) {
      $name_error = "Test kit with name '".$name."' already exist!";
    } else {
      mysqli_query($connect, "insert into test_kit values('','$center_id','$name', '$stock','$description')");
      header("location: ../views-manager/manage-test-kit-stock.php");
    }
  }
}
?>