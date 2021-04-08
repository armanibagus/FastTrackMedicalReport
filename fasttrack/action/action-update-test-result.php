<?php
    session_start();
    include 'connection.php';

    $test_id = $_POST['test_id'];
    $test_result = $_POST['result'];
    $result_date = $_POST['result_date'];
    $status = $_POST['status'];

    if($test_result!="" && $result_date!="" && $status !=""){
        mysqli_query($connect, "update covid_test set result='$test_result', result_date='$result_date',status='$status' where  test_id = '$test_id'");

    }
    header("location:../views-tester/update-test-result.php")
    ?>
