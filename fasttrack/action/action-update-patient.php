<?php
    session_start();
    include 'connection.php';

    $officer_username = $_SESSION['username'];
    $patient_id = $_POST['patient_id'];
    $username = $_POST['username'];
    $test_id = $_POST['test_id'];
    $patient_type = $_POST['patient_type'];
    $symptoms = $_POST['symptoms'];
    $kit_id = $_POST['kit_id'];

    if($patient_type!="" && $symptoms !="" && $kit_id !=''){
        mysqli_query($connect, "update patient set patient_type='$patient_type',symptoms ='$symptoms' where patient_id='$patient_id'");

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
    header("location:../views-tester/record-new-test.php");
?>