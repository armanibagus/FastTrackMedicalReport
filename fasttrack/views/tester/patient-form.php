<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>New Patient</title>
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

<body class="bg-gradient-secondary">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand text-green" href="../home.php" style="text-transform: capitalize; text-align: left; font-size: 17px; font-weight: 500">
        FastTrack Medical Report
      </a>
      <button class="navbar-toggler bg-success" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../home.php" class="text-green">FastTrack Medical Report</a>
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
            <a class="nav-link nav-link-icon" href="../home.php">
              <i class="fas fa-home text-green"></i>
              <span class="nav-link-inner--text d-lg-none text-green">Home</span>
            </a>
          </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon d-lg-none d-block" href="record-new-test.php">
                <i class="fa fa-arrow-left text-green "></i>
                <span class="nav-link-inner--text text-green">Back</span>
              </a>
            </li>
          <li class="nav-item d-none d-lg-block ml-lg-4">
            <a href="record-new-test.php" class="btn btn-outline-success btn-icon">
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
              <div class="text-muted text-center mt-2 mb-4"><h2 class="text-green">Patient Details</h2></div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="text" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                      <input class="form-control" placeholder="Name" type="text" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                    </div>
                      <input class="form-control" placeholder="Phone Number" type="text" name="phone_number">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                    </div>
                      <input class="form-control" placeholder="Address" type="text" name="address">
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                    </div>
                      <select class="form-control" type="text">
                        <option value="" disabled selected>Patient Type</option>
                        <option value="Returnee">Returnee</option>
                        <option value="Quarantined">Quarantined</option>
                        <option value="Close Contact">Close Contact</option>
                        <option value="Infected">Infected</option>
                        <option value="Suspected">Suspected</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-stethoscope"></i></span>
                    </div>
                      <input class="form-control" placeholder="Symptoms" type="text" name="symptoms">
                    </div>
                  </div>
                <div class="text-right">
                  <button type="reset" class="btn mt-4 btn-success">Reset</button>
                  <button type="submit" class="btn mt-4 btn-outline-success">Submit</button>
                </div>
              </form>
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
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- JS -->
  <script src="../../assets/js/style.js?v=1.2.0"></script>
</body>
</html>