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
              <a class="nav-link" href="generate-test-report.php">
                <i class="fas fa-notes-medical text-green"></i>
                <span class="nav-link-text">Generate Test Report</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Manager</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="register-test-center.php">
                <i class="fa fa-hospital text-green"></i>
                <span class="nav-link-text">Register Test Center</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="record-tester.php">
                <i class="fas fa-user-md text-green"></i>
                <span class="nav-link-text">Record Tester</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage-test-kit-stock.php">
                <i class="fas fa-syringe text-green"></i>
                <span class="nav-link-text">Manage Test Kit Stock</span>
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
                  <a href="generate-test-report.php" class="btn btn-sm btn-outline-success">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- First table -->
              <?php include '../views-layouts/first-table.php'?>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Test Kit Stock</h3>
                </div>
                <div class="col text-right">
                  <a href="manage-test-kit-stock.php" class="btn btn-sm btn-outline-success">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Second table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                  <?php
                  include '../action/connection.php';
                  $username = $_SESSION['username'];

                  $user_manager = mysqli_query($connect, "select * from center_officer where username='$username'");
                  $manager = mysqli_fetch_array($user_manager);

                  $center_id = $manager['center_id'];

                  $data = mysqli_query($connect, "select * from test_kit where center_id='$center_id'");
                  while ($test_kit = mysqli_fetch_array($data)) {
                  ?>
                    <td>
                      <?php echo $test_kit['name']?>
                    </td>
                    <td >
                      <?php echo $test_kit['stock']?>
                    </td>
                    <td>
                      <?php echo $test_kit['description']?>
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