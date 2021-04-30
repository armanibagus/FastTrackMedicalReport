<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Manage Test Kit Stock</title>
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
              <a class="nav-link active" href="manage-test-kit-stock.php">
                <i class="fas fa-syringe text-primary"></i>
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
    <div class="header bg-secondary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-green d-inline-block mb-0">Manage Test Kit Stock</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="home.php"><i class="fas fa-home text-success"></i></a></li>
                  <li class="breadcrumb-item"><a class="text-success" href="home.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Manage Test Kit Stock</li>
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
            <div class="card-header border-0" style="margin-top: 10px">
              <div class="row align-items-center py--1">
                <div class="col-lg-6 col-7">
                  <h3 class="mb-0 text-darker">Test Kit Stock</h3>
                </div>
                  <?php
                  include '../action/connection.php';

                  $username = $_SESSION['username'];

                  $user_manager = mysqli_query($connect, "select * from center_officer where username='$username'");
                  $manager = mysqli_fetch_array($user_manager);

                  $center_id = $manager['center_id'];
                  if ($center_id > 0){
                  ?>
                <div class="col-lg-6 col-5 text-right">
                  <a href="test-kit-form.php">
                    <input type="button" class="btn btn-outline-success" value="Add">
                  </a>
                </div>
                  <?php
                  }?>
              </div>
            </div>
            <!-- Table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Stocks</th>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody style="font-weight: 600" class="text-darker border-darker">
                  <tr>
                  <?php
                  $data = mysqli_query($connect, "select * from test_kit where center_id='$center_id'");
                  while ($test_kit = mysqli_fetch_array($data)) {
                  ?>
                    <td>
                      <?php echo $test_kit['kit_id']?>
                    </td>
                    <td class="name mb-0 text-sm text-darker">
                      <?php echo $test_kit['name']?>
                    </td>
                    <td >
                      <?php echo $test_kit['stock']?>
                    </td>
                    <td>
                      <?php echo $test_kit['description']?>
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="test-kit-form-update.php?kit_id=<?php echo $test_kit['kit_id']?>">Update</a>
                          <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#deleteModal<?= $test_kit['kit_id']?>">Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php
                  include '../views-layouts/modal-delete-test-kit.php';
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
<?php include '../views-layouts/modal-logout.php'?>
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