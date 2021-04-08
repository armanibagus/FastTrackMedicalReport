<!-- Card stats -->
<div class="row">
  <div class="col-xl-2 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Returnee</h5>
            <?php
            include '../action/connection.php';
            $returnee_num = 0;
            $returnee = mysqli_query($connect, "select * from patient where patient_type='Returnee'");
            while($test = mysqli_fetch_array($returnee)){
              $returnee_num++;
            }
            ?>
            <span class="h2 font-weight-bold mb-0"><?php echo $returnee_num?></span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-teal text-white rounded-circle shadow">
              <i class="fas fa-reply"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Quarantined</h5>
            <?php
            $quarantined_num = 0;
            $quarantined = mysqli_query($connect, "select * from patient where patient_type='Quarantined'");
            while($test = mysqli_fetch_array($quarantined)){
              $quarantined_num++;
            }
            ?>
            <span class="h2 font-weight-bold mb-0"><?php echo $quarantined_num?></span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-cyan text-white rounded-circle shadow">
              <i class="fas fa-procedures"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Close Contact</h5>
            <?php
            $close_c_num = 0;
            $close_c = mysqli_query($connect, "select * from patient where patient_type='Close Contact'");
            while($test = mysqli_fetch_array($close_c)){
              $close_c_num++;
            }
            ?>
            <span class="h2 font-weight-bold mb-0"><?php echo $close_c_num?></span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
              <i class="fa fa-user-friends"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Infected</h5>
            <?php
            $infected_num = 0;
            $infected = mysqli_query($connect, "select * from patient where patient_type='Infected'");
            while($test = mysqli_fetch_array($infected)){
              $infected_num++;
            }
            ?>
            <span class="h2 font-weight-bold mb-0"><?php echo $infected_num?></span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
              <i class="fas fa-user-plus"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Suspected</h5>
            <?php
            $suspected_num = 0;
            $suspected = mysqli_query($connect, "select * from patient where patient_type='Suspected'");
            while($test = mysqli_fetch_array($suspected)){
              $suspected_num++;
            }
            ?>
            <span class="h2 font-weight-bold mb-0"><?php echo $suspected_num?></span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-gray text-white rounded-circle shadow">
              <i class="fas fa-user-tag"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>