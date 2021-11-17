<?php
require('mysqli_connect.php');
session_start();
if (!isset($_GET["id"])) {
  if (!$_SESSION["id"]) {
    echo "<br>Session not set!!!!<br>";
  }
} else {
  $_SESSION["id"] =  $_GET["id"];
  //     echo "<br>Session set<br>";

  $SESSION_ID = intval($_SESSION['id']);

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['PricePerDay'])) {

      $PricePerDay = mysqli_real_escape_string($dbc, $_POST['PricePerDay']);
   
      $updateQuery = "UPDATE `tblvehicles` SET `PricePerDay`='$PricePerDay' WHERE id= {$SESSION_ID}";
  $update_table = @mysqli_query($dbc, $updateQuery) or die(mysqli_error($dbc));
if(mysqli_affected_rows($dbc) > 0){
  echo "updated successfully.";
} else {
  echo "not updated";
    }   
         }
  }
}
// }
$query1 = "SELECT * FROM `tblvehicles` where id = {$SESSION_ID}";
$result1 = mysqli_query($dbc, $query1);
$rows = mysqli_fetch_array($result1);

$querybrands = "SELECT * FROM `tblbrands` ";
$resultbrands = mysqli_query($dbc, $querybrands);
$brandsrows = mysqli_fetch_array($resultbrands);

// $querybrands1 = "SELECT * FROM `tblbrands` where id = '$VehiclesBrand'";
// $resultbrands1 = mysqli_query($dbc, $querybrands1);
// $brandsrows1 = mysqli_fetch_array($resultbrands1);
?>


<!DOCTYPE html>
<html lang="en">

<?php require('header.php'); ?>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php require('sidebar.php'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Edit Car</h1>
            </div>
            <button> <a href="car_detail.php"> Back to Car List </a></button>

          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <form action="edit_car.php?id=<?php echo $SESSION_ID; ?>" method="POST">
            <div class="card-body">
<div class="form-group">

<label for="VehiclesTitle">Image</label>
<img src='uploads/<?php echo $rows['Vimage1'];  ?>' width="100" height="100">
<img src='uploads/<?php echo $rows['Vimage2'];  ?>' width="100" height="100">
<img src='uploads/<?php echo $rows['Vimage3'];  ?>' width="100" height="100">
</div>

              <div class="form-group">

                <label for="VehiclesTitle">Vehicle's Title</label>
                <input disabled class="form-control" id="VehiclesTitle" name="VehiclesTitle" value="<?php echo $rows['VehiclesTitle']; ?>">
              </div>
              <div class="form-group">
                <label for="VehiclesBrand">Vehicle's Brand</label>
                <input disabled class="form-control" id="VehiclesBrand" name="VehiclesBrand" value="<?php echo $rows['VehiclesBrand']; ?>">
              </div>
              <!-- <div class="form-group">
                <label for="VehiclesBrand">Vehicle's Brand</label>
                <input disabled  class="form-control" value="<?php echo $brandsrows1['BrandName']; ?>">
              </div> -->
              <div class="form-group">
                <label for="fueltype">Fuel type</label>
                <input disabled class="form-control" id="fueltype" name="fueltype" value="<?php echo $rows['FuelType']; ?>">
              </div>
              <div class="form-group">
                <label for="VehiclesOverview">Vehicle's Overview</label>
                <input disabled class="form-control" id="VehiclesOverview" name="VehiclesOverview" value="<?php echo $rows['VehiclesOverview']; ?>">
              </div>

              <div class="form-group">
                <label for="PricePerDay">Price Per Day</label>
                <input type="text" class="form-control" id="PricePerDay" name="PricePerDay" value="<?php echo $rows['PricePerDay']; ?>">
              </div>
              <div class="form-group">
                <label for="ModelYear">Model Year</label>
                <input disabled class="form-control" id="ModelYear" name="ModelYear" value="<?php echo $rows['ModelYear']; ?>">
              </div>
              <div class="form-group">
                <label for="SeatingCapacity">SeatingCapacity</label>
                <input disabled class="form-control" id="SeatingCapacity" value="<?php echo $rows['SeatingCapacity']; ?>" name="SeatingCapacity">
              </div>
            

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>


        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php require('footer.php'); ?>
    <!-- Page specific script -->

</body>

</html>