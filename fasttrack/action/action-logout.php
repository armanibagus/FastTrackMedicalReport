<?php

session_start();
$_SESSION['username']='';
$_SESSION['login']='';
session_destroy();
header("location: ../login.php");
?>