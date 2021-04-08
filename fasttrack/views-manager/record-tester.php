<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register Tester</title>
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
                        <a class="nav-link active" href="record-tester.php">
                            <i class="fas fa-user-md text-primary"></i>
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
    <div class="header pb-6 d-flex align-items-center" style="min-height: 100px; background-position: center top;">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-green d-inline-block mb-0">Record Tester</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="home.php"><i class="fas fa-home text-success"></i></a></li>
                  <li class="breadcrumb-item"><a class="text-success" href="home.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Record Tester</li>
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
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">List of Tester</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Second table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone Number</th>
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

                              $data = mysqli_query($connect, "select * from center_officer where center_id='$center_id' and position='Tester'");
                              while ($tester = mysqli_fetch_array($data)) {
                              ?>
                                <td>
                                    <?php echo $tester['username']?>
                                </td>
                                <td>
                                    <?php echo $tester['name']?>
                                </td>
                                <td>
                                    <?php echo $tester['phone_number']?>
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
            <div class="col-xl-8 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Record New Tester</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                      <?php
                      include '../action/connection.php';

                      $username = $_SESSION['username'];

                      $user_manager = mysqli_query($connect, "select * from center_officer where username='$username'");
                      $manager = mysqli_fetch_array($user_manager);

                      $center_id = $manager['center_id'];

                      $test_center = mysqli_query($connect, "select * from test_center where center_id='$center_id'");
                      while($center = mysqli_fetch_array($test_center)){
                      ?>
                        <form role="form" action="../action/action-record-tester.php" method="post" onSubmit="return validation()">
                            <h6 class="heading-small text-muted mb-4">Tester information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" name="center_id" placeholder="Center ID" type="hidden" value="<?php echo $center['center_id']?>">
                                            <label class="form-control-label" for="input-username">Username</label>
                                            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Password</label>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter new password">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Full Name</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Position</label>
                                            <input type="text" name="position" id="position" class="form-control" placeholder="Enter position" value="Tester" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <!-- Address -->
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
                        <?php
                        }
                        ?>
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
<!-- JS -->
<script src="../assets/js/style.js?v=1.2.0"></script>
<!-- validation -->
<script type="text/javascript">
    function validation() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var name = document.getElementById("name").value;
        var phone_number = document.getElementById("phone_number").value;
        var address = document.getElementById("address").value;
        if (username != "" && password!="" && name!="" && phone_number!="" && address!="") {
            return true;
        }else{
            alert('Empty field!');
            return false;
        }
    }
</script>

</body>
</html>