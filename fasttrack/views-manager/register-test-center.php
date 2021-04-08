<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register Test Center</title>
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
              <h6 class="h2 text-green d-inline-block mb-0">Register Test Center</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="home.php"><i class="fas fa-home text-success"></i></a></li>
                  <li class="breadcrumb-item"><a class="text-success" href="home.php">Home</a></li>
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
            <div class="col-xl-8">
                <div class="card card-profile">
                    <img src="../assets/img/brand/undraw_medicine_b1ol.png" alt="Image placeholder" class="card-img-top">
                    <div class="card-body pt-0">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Test Center Name</th>
                                <th scope="col">Address</th>
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

                              $data = mysqli_query($connect, "SELECT * FROM test_center where center_id='$center_id'");
                              while($center = mysqli_fetch_array($data)){
                              ?>
                                <td>
                                  <?php echo $center['center_name']?>
                                </td>
                                <td >
                                  <?php echo $center['address']?>
                                </td>
                                <td>
                                  <?php echo $center['phone_number']?>
                                </td>
                                <?php
                              }
                              ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php
                if($data->num_rows < 1){
            ?>
            <div class="col-xl-4 order-xl-2">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Register Test Center</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" action="../action/action-register-test-center.php" method="post" onSubmit="return validation()">
                            <h6 class="heading-small text-muted mb-4">Test center information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Test Center Name</label>
                                            <input type="text" name="center_name" id="center_name" class="form-control" placeholder="Enter test center name" value="<?php echo $center['center_name']?>">
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
                                            <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone number" value="<?php echo $center['phone_number']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" >Address</label>
                                            <input type="text" name="address" id="address" class="form-control" placeholder="Home address" value="<?php echo $center['address']?>">
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
<script type="text/javascript">
    function validation() {
        var center_name = document.getElementById("center_name").value;
        var phone_number = document.getElementById("phone_number").value;
        var address = document.getElementById("address").value;
        if (center_name != "" && phone_number!="" && address!="") {
            return true;
        }else{
            alert('Empty field!');
            return false;
        }
    }
</script>
</body>
</html>