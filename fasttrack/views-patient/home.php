<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
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
              <a class="nav-link active" href="home.php">
                <i class="fas fa-home text-primary"></i>
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
              <a class="nav-link" href="view-test-report.php">
                <i class="fas fa-notes-medical text-green"></i>
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
    <div class="header bg-green pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Home</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="home.php"><i class="fas fa-home text-green"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->
          <?php include '../views-layouts/card-stats.php'?>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Covid-19 Test Report</h3>
                </div>
                <div class="col text-right">
                  <a href="view-test-report.php" class="btn btn-sm btn-outline-success">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- First table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Patient Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Test Date</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
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
                    <td>
                      <?php echo $test['name']?>
                    </td>
                    <td>
                      <?php echo $test['patient_type']?>
                    </td>
                    <td>
                      <?php echo $test['test_date']?>
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
                  </tr>
                <?php
                }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
          <div class="col-xl-4 order-xl-2">
              <div class="card card-profile">
                  <img src="../assets/img/brand/profile.png" alt="Image placeholder" class="card-img-top">
                  <div class="row justify-content-center">
                      <div class="col-lg-3 order-lg-2">
                          <div class="card-profile-image">
                              <a href="#">
                                  <img alt="Image placeholder" src="../assets/img/brand/user.png" class="rounded-circle">
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="card-body pt-0">
                      <br><br><br><br>
                      <div class="text-center">
                        <?php
                        include '../action/connection.php';
                        $username = $_SESSION['username'];

                        $user_patient = mysqli_query($connect, "select * from patient where username='$username'");
                        while($patient = mysqli_fetch_array($user_patient)){
                        ?>
                          <h5 class="h3">
                            <?php echo $patient['name']?><span class="font-weight-light">, Patient</span>
                          </h5>
                          <div class="h5 font-weight-300">
                              <i class="ni location_pin mr-2"></i><?php echo $patient['address']?>
                          </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Contact Information
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i><?php echo $patient['phone_number']?>
                            </div>
                        <?php
                        }
                        ?>
                      </div>
                  </div>
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
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- JS -->
  <script src="../assets/js/style.js?v=1.2.0"></script>
</body>
</html>