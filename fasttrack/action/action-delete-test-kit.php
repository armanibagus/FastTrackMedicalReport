<?php
  include 'connection.php';

  $kit_id = $_GET['kit_id'];

  mysqli_query($connect, "DELETE FROM test_kit WHERE kit_id='$kit_id'");
  header("location: ../views-manager/manage-test-kit-stock.php");
?>