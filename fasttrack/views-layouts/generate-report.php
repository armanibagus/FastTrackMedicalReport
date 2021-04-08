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

            /*$center_officer = mysqli_query($connect, "SELECT * FROM center_officer WHERE username='$username'");
            $officer = mysqli_fetch_array($center_officer);

            $center_id = $officer['center_id'];*/
            $data = mysqli_query($connect, "SELECT * FROM covid_test INNER JOIN patient ON covid_test.test_id=covid_test.test_id");
            while($covid_test = mysqli_fetch_array($data)) {
              if ($covid_test[1] == $covid_test['patient_id']) {
            ?>
            <tr>
              <td scope="row">
                <div class="media-body">
                  <span class="name mb-0 text-sm"><?php echo $covid_test['name']?></span>
                </div>
              </td>
              <td>
                <?php echo $covid_test['patient_type']?>
              </td>
              <td>
                <?php echo $covid_test['test_date']?>
              </td>
              <td>
                <?php
                if ($covid_test['result_date'] == NULL){
                  echo '-';
                } else {
                  echo $covid_test['result_date'];
                }?>
              </td>
              <td>
                <?php
                if ($covid_test['status'] == "Pending") {
                  ?>
                  <i class="fas fa-spinner text-yellow mr-3"></i> <?php echo $covid_test['status']?>
                  <?php
                } else {
                  ?>
                  <i class="fas fa-check-circle text-green mr-3"></i> <?php echo $covid_test['status']?>
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
                    <a class="dropdown-item" href="../views-layouts/view-test-details.php?test_id=<?php echo $covid_test['test_id']?>">View Details</a>
                  </div>
                </div>
              </td>
            </tr>
            <?php
              }
            }?>
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