<?php
  session_start();
  include 'connection.php';

  $officer_username = $_SESSION['username'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $patient_name = $_POST['patient_name'];
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];
  $patient_type = $_POST['patient_type'];
  $symptoms = $_POST['symptoms'];
  $kit_id = $_POST['kit_id'];

  if ($username!="" && $password!="" && $patient_name!="" && $phone_number!="" && $address!="" && $patient_type!="" && $kit_id!=""){
    mysqli_query($connect, "insert into patient values('', '$username', '$password', '$patient_name', '$phone_number', '$address', '$patient_type', '$symptoms')");

    // get the data in the tables
    $data1 = mysqli_query($connect, "select * from center_officer where username='$officer_username'");
    $officer = mysqli_fetch_array($data1);

    $officer_id = $officer['officer_id'];

    $data2 = mysqli_query($connect, "select * from patient where username='$username'");
    $patient = mysqli_fetch_array($data2);

    $patient_id = $patient['patient_id'];

    $date_now = getdate(date("U"));
    $test_date = "$date_now[mday]/$date_now[month]/$date_now[year]";

    $data = mysqli_query($connect, "INSERT INTO `covid_test` (`patient_id`, `officer_id`, `kit_id`, `test_date`, `result`, `result_date`, `status`)
                                            VALUES ('$patient_id', '$officer_id', '$kit_id', '$test_date', '', NULL, 'Pending')");

    $data3 = mysqli_query($connect, "select * from test_kit where kit_id='$kit_id'");
    $test_kit = mysqli_fetch_array($data3);

    $new_stock = $test_kit['stock'] - 1;

    mysqli_query($connect, "update test_kit set stock='$new_stock' where kit_id='$kit_id'");
  }
  header("location: ../views-tester/record-new-test.php");
?>