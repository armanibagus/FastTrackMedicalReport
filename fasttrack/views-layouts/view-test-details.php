<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Covid-19 Test Details</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/style.css?v=1.2.0" type="text/css">
</head>

<body class="bg-gradient-secondary">
<?php include '../action/action-check-login.php'?>
<?php
    include '../action/connection.php';

    $username = $_SESSION['username'];
        // get the data in the tables
    $data1 = mysqli_query($connect, "select * from center_officer where username='$username'");
    $check_officer = mysqli_num_rows($data1);

    $data2 = mysqli_query($connect, "select * from patient where username='$username'");
    $check_patient = mysqli_num_rows($data2);

    $home='';
    $back='';
    // check if the user is center officer or not
    if ($check_officer > 0 ) {
        $user_manager = mysqli_query($connect, "select * from center_officer where username='$username' and position='Manager'");
        $manager = mysqli_fetch_array($user_manager);

        if ($manager > 0) {
          $home='../views-manager/home.php';
          $back='../views-manager/generate-test-report.php';
        } else {
          $home='../views-tester/home.php';
          $back='../views-tester/generate-test-report.php';
        }
    } else if($check_patient > 0) {
      $home='../views-manager/home.php';
      $back='../views-patient/view-test-report.php';
    }
?>
<!-- Navbar -->
<nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand text-green" href="<?php echo $home?>" style="text-transform: capitalize; text-align: left; font-size: 17px; font-weight: 500">
      FastTrack Medical Report
    </a>
    <button class="navbar-toggler bg-success" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="<?php echo $home?>" class="text-green">FastTrack Medical Report</a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <ul class="navbar-nav align-items-lg-center ml-lg-auto">
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="<?php echo $home?>">
            <i class="fas fa-home text-green"></i>
            <span class="nav-link-inner--text d-lg-none text-green">Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon d-lg-none d-block" href="<?php echo $back?>">
            <i class="fa fa-arrow-left text-green "></i>
            <span class="nav-link-inner--text text-green">Back</span>
          </a>
        </li>
        <li class="nav-item d-none d-lg-block ml-lg-4">
          <a href="<?php echo $back?>" class="btn btn-outline-success btn-icon">
              <span class="btn-inner--icon">
                <i class="fa fa-arrow-left mr-2"></i>
              </span>
            <span class="nav-link-inner--text">Back</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Main content -->
<div class="main-content">
  <!-- Header -->
  <div class="header bg-secondary py-7 py-lg-8 pt-lg-9"></div>
  <!-- Page content -->
  <div class="container mt--6 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <div class="card bg-secondary border-0">
          <div class="card-header pb-2">
            <div class="text-muted text-center mt-2 mb-4"><h2 class="text-green">Covid-19 Test Details</h2></div>
          </div>
          <div class="card-body px-lg-5 py-lg-5" style="font-weight: bold">
              <?php
              include '../action/connection.php';
              $test_id = $_GET['test_id'];
              $data = $connect->query("SELECT * FROM covid_test INNER JOIN patient ON covid_test.test_id=covid_test.test_id WHERE covid_test.test_id='$test_id'");
              while($test = mysqli_fetch_array($data)){
                  if ($test[1] == $test['patient_id']){
                    // get the test kit name
                    $kit_id=$test['kit_id'];
                    $kit = $connect->query("SELECT * FROM test_kit WHERE kit_id='$kit_id'");
                    $d = mysqli_fetch_array($kit);

                    // get the tester name
                    $officer_id=$test['officer_id'];
                    $officer = $connect->query("SELECT * FROM center_officer WHERE officer_id='$officer_id'");
                    $d2 = mysqli_fetch_array($officer);
              ?>
              <p class="text-darker"><strong>Test ID:</strong> <?php echo $test['test_id']?></p>
              <p class="text-darker"><strong>Test Kit Name:</strong> <?php echo $d['name']?></p>
              <p class="text-darker"><strong>Tester Name:</strong> <?php echo $d2['name']?></p>
              <p class="text-darker"><strong>Patient Name:</strong> <?php echo $test['name']?></p>
              <p class="text-darker"><strong>Test Date:</strong> <?php echo $test['test_date']?></p>
              <p class="text-darker"><strong>Result Date:</strong>
                <?php
                if($test['result_date'] == NULL){
                  echo '-';
                } else {
                  echo $test['result_date'];
                }?>
              </p>
              <p class="text-darker"><strong>Result:</strong>
                <?php
                if($test['result_date'] == NULL){
                  echo '-';
                } else {
                  echo $test['result'];
                }?></p>
              <p class="text-darker"><strong>Status:</strong><?php echo $test['status']?></p>
              <?php
                }
              }
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="footer pt-0">
  <div class="copyright text-center text-lg-center text-muted">
    &copy; 2021 <a class="font-weight-bold ml-1" target="_blank">FastTrack Medical Report</a>
  </div>
</footer>
<!-- Scripts -->
<!-- Core -->
<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/js-cookie/js.cookie.js"></script>
<script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- JS -->
<script src="../assets/js/style.js?v=1.2.0"></script>
<!-- validation -->
<script type="text/javascript">
    function validation() {
        var name = document.getElementById("name").value;
        var stock = document.getElementById("stock").value;
        var description = document.getElementById("description").value;
        if (name!= "" && stock!="" && description!="") {
            return true;
        }else{
            alert('Empty field!');
            return false;
        }
    }
</script>
</body>
</html>