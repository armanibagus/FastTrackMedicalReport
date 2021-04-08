<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>View Test Report</title>
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

<body>
<?php include '../action/action-check-login.php'?>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)" style="text-align: left; font-size: 17px; font-weight: 500">
          FastTrack Medical Report
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="home.php">
                      <i class="fas fa-home text-green"></i>
                      <span class="nav-link-text">Home</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="profile.php">
                      <i class="ni ni-single-02 text-green"></i>
                      <span class="nav-link-text">My Profile</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" href="view-test-report.php">
                      <i class="fas fa-notes-medical text-primary"></i>
                      <span class="nav-link-text">View Test Report</span>
                  </a>
              </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php include '../views-layouts/top-nav.php'?>
    <!-- Header -->
    <div class="header bg-secondary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-green d-inline-block mb-0">View Test Report</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="home.php"><i class="fas fa-home text-success"></i></a></li>
                  <li class="breadcrumb-item"><a class="text-success" href="home.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">View Test Report</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <div class="row align-items-center py--1">
                <div class="col-lg-3 col-7">
                  <h3 class="mb-0 text-gray-dark">Covid-19 Test Report</h3>
                </div>
              </div>
            </div>
              <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                      <tr>
                          <th scope="col">Patient Name</th>
                          <th scope="col">Type</th>
                          <th scope="col">Test Date</th>
                          <th scope="col">Result Date</th>
                          <th scope="col">Status</th>
                          <th scope="col"></th>
                      </tr>
                      </thead>
                      <tbody class="list text-gray-dark" style="font-weight: 600">
                      <?php
                      include '../action/connection.php';
                      $username = $_SESSION['username'];

                      $user = mysqli_query($connect, "select * from patient where username='$username'");
                      $patient = mysqli_fetch_array($user);

                      $patient_id = $patient['patient_id'];

                      $data = mysqli_query($connect, "SELECT * FROM patient INNER JOIN covid_test ON patient.patient_id=patient.patient_id WHERE patient.patient_id='$patient_id' AND covid_test.patient_id='$patient_id'");
                      while ($test = mysqli_fetch_array($data)) {
                      ?>
                          <tr>
                              <td scope="row">
                                  <div class="media-body">
                                      <span class="name mb-0 text-sm"><?php echo $test['name']?></span>
                                  </div>
                              </td>
                              <td>
                                <?php echo $test['patient_type']?>
                              </td>
                              <td>
                                <?php echo $test['test_date']?>
                              </td>
                              <td>
                                <?php
                                if ($test['result_date'] == NULL){
                                  echo '-';
                                } else {
                                  echo $test['result_date'];
                                }?>
                              </td>
                              <td>
                                <?php
                                if ($test['status'] == "Pending") {
                                  ?>
                                    <i class="fas fa-spinner text-yellow mr-3"></i> <?php echo $test['status']?>
                                  <?php
                                } else {
                                  ?>
                                    <i class="fas fa-check-circle text-green mr-3"></i> <?php echo $test['status']?>
                                  <?php
                                }
                                ?>
                              </td>
                              <td class="text-right">
                                  <div class="dropdown">
                                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fas fa-ellipsis-v"></i>
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                          <a class="dropdown-item" href="../views-layouts/view-test-details.php?test_id=<?php echo $test['test_id']?>">View Details</a>
                                      </div>
                                  </div>
                              </td>
                          </tr>
                      <?php
                      }
                      ?>
                      </tbody>
                  </table>
              </div>
            <!-- Card footer -->
            <div class="card-footer py-4"></div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <?php include '../views-layouts/footer.php'?>
    </div>
  </div>
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- JS -->
  <script src="../assets/js/style.js?v=1.2.0"></script>
</body>

</html>