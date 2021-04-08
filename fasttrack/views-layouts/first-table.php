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
            </tr>
            <?php
        }
    }?>
    </tbody>
</table>