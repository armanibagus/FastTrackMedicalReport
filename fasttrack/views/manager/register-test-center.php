<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register Test Center</title>
    <!-- Favicon -->
    <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css?v=1.2.0" type="text/css">
</head>

<body>
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
                        <a class="nav-link" href="../home.php">
                            <i class="fas fa-home text-green"></i>
                            <span class="nav-link-text">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../profile.php">
                            <i class="ni ni-single-02 text-green"></i>
                            <span class="nav-link-text">My Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../generate-test-report.php">
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
                        <a class="nav-link active" href="register-test-center.php">
                            <i class="fa fa-hospital text-primary"></i>
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
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Tester</span>
                </h6>
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../tester/record-new-test.php">
                            <i class="ni ni-fat-add text-green"></i>
                            <span class="nav-link-text">Record New Test</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../tester/update-test-result.php">
                            <i class="ni ni-check-bold text-green"></i>
                            <span class="nav-link-text">Update Test Result</span>
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
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-green border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center  ml-md-auto ">
                    <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="../../assets/img/brand/user.png">
                                </span>
                                <div class="media-body  ml-2  d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">Center Officer</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="../profile.php" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="../../index.php" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 100px; background-position: center top;">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-green d-inline-block mb-0">Register Test Center</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="../home.php"><i class="fas fa-home text-success"></i></a></li>
                  <li class="breadcrumb-item"><a class="text-success" href="../home.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Register Test Center</li>
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
            <div class="col-xl-4 order-xl-2">
                <div class="card card-profile">
                    <img src="../assets/img/brand/profile2.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img alt="Image placeholder" src="../../assets/img/brand/user2.jpg" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <br><br><br><br>
                        <div class="text-center">
                            <h5 class="h3">
                                Armani Bagus<span class="font-weight-light">, 20</span>
                            </h5>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Bali, Indonesia
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Student
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>HELP University & ITB STIKOM Bali
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Register Test Center</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" action="../../action/action-register-test-center.php" method="post">
                            <h6 class="heading-small text-muted mb-4">Test center information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Test Center Name</label>
                                            <input type="text" name="center_name" id="center_name" class="form-control" placeholder="Enter full name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4"/>
                            <h6 class="heading-small text-muted mb-4">Contact information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" >Phone Number</label>
                                            <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" >Address</label>
                                            <input type="text" name="address" id="address" class="form-control" placeholder="Home address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-right">
                                <input type="submit" class="btn btn-outline-success" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <div class="copyright text-center  text-lg-left  text-muted">
                            &copy; 2021 <a class="font-weight-bold ml-1" target="_blank">FastTrack Medical Report</a>
                        </div>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Core -->
<script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
<script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- JS -->
<script src="../../assets/js/style.js?v=1.2.0"></script>
</body>

</html>