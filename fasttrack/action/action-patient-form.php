<?php
  include 'connection.php';

$username = "";
$password = "";
$patient_name = "";
$phone_number = "";
$address = "";
$symptoms = "";

if (isset($_POST['submit'])) {

  $officer_username = $_SESSION['username'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $patient_name = $_POST['patient_name'];
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];
  $patient_type = $_POST['patient_type'];
  $symptoms = $_POST['symptoms'];
  $kit_id = $_POST['kit_id'];

  if ($username != "" && $password != "" && $patient_name != "" && $phone_number != "" && $address != "" && $patient_type != "" && $kit_id != "") {

    $data = mysqli_query($connect, "select * from center_officer where username='$username'");
    $data2 = mysqli_query($connect, "select * from center_officer where password='$password'");
    $data3 = mysqli_query($connect, "select * from patient where username='$username'");
    $data4 = mysqli_query($connect, "select * from patient where password='$password'");

    if (mysqli_num_rows($data) > 0 || mysqli_num_rows($data3) > 0) {
      $uname_error = "Username already exist!";
    } else if (mysqli_num_rows($data2) > 0 || mysqli_num_rows($data4) > 0){
      $pass_error = "Password already exist!";
    } else if (strlen($username) < 6 || strlen($username) > 16) {
      if (strlen($username) > 16)
        $uname_error = "Username is too long! (6-16 characters long)";
      else if (strlen($username) < 6)
        $uname_error = "Username is too short! (6-16 characters long)";
    } else if (strlen($password) < 6 || strlen($password) > 16) {
      if (strlen($password) > 16)
        $pass_error = "Password is too long! (6-16 characters long)";
      else if (strlen($password) < 6)
        $pass_error = "Password is too short! (6-16 characters long)";
    } else {
      mysqli_query($connect, "insert into patient values('', '$username', '$password', '$patient_name',
                           '$phone_number', '$address', '$patient_type', '$symptoms')");

      // get the data in the tables
      $data1 = mysqli_query($connect, "select * from center_officer where username='$officer_username'");
      $officer = mysqli_fetch_array($data1);

      $officer_id = $officer['officer_id'];

      $data2 = mysqli_query($connect, "select * from patient where username='$username'");
      $patient = mysqli_fetch_array($data2);

      $patient_id = $patient['patient_id'];

      $date_now = getdate(date("U"));
      $test_date = "$date_now[mday]/$date_now[month]/$date_now[year]";

      $data = mysqli_query($connect, "INSERT INTO `covid_test` (`patient_id`, `officer_id`,
                                            `kit_id`, `test_date`, `result`, `result_date`, `status`)
                                            VALUES ('$patient_id', '$officer_id', '$kit_id', '$test_date', '', NULL, 'Pending')");

      $data3 = mysqli_query($connect, "select * from test_kit where kit_id='$kit_id'");
      $test_kit = mysqli_fetch_array($data3);

      $new_stock = $test_kit['stock'] - 1;

      mysqli_query($connect, "update test_kit set stock='$new_stock' where kit_id='$kit_id'");

      header("location: ../views-tester/record-new-test.php");
    }
  }
}
?>