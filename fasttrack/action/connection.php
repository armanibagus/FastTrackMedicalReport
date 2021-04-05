<?php
  $connect = mysqli_connect("localhost","root","","db_fasttrack");

  // Check connection
  if (mysqli_connect_errno()){
    echo "Connection failed : " . mysqli_connect_error();
  }
?>