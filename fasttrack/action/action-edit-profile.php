<?php
  session_start();
  include 'connection.php';

  $username = $_SESSION['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $phone_number = $_POST['phone_number'];
  $address = addslashes($_POST['address']);

  // get the data in the tables
  $data1 = mysqli_query($connect, "select * from center_officer where username='$username'");
  $check_officer = mysqli_num_rows($data1);

  $data2 = mysqli_query($connect, "select * from patient where username='$username'");
  $check_patient = mysqli_num_rows($data2);

/*UPDATE `patient` SET `patient_name` = 'Adi Indrawan' WHERE `patient`.`patient_id` = 1;*/

  if ($password != "" && $name != "" && $phone_number != "" && $address != "") {
    if ($check_officer > 0) {
      $table = 'center_officer';
    } else if ($check_patient > 0) {
      $table = 'patient';
    }
    $connect->query( "update $table set password='$password',
                          name='$name', phone_number='$phone_number',
                          address='$address' where username='".$_SESSION['username']."'   ");
  }

  // check if the user is center officer or not
  if ($check_officer > 0 ) {
    $user_manager = mysqli_query($connect, "select * from center_officer where username='$username' and position='Manager'");
    $manager = mysqli_fetch_array($user_manager);

    if ($manager > 0) {
      header("Location: ../views-manager/profile.php");
    } else {
      header("Location: ../views-tester/profile.php");
    }
  } else if($check_patient > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";

    header("Location: ../views-patient/profile.php");
  }
?>