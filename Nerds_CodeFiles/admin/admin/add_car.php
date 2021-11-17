<?php
require('mysqli_connect.php');

if($_SERVER['REQUEST_METHOD'] =='POST'){

  if(isset($_FILES['upload']['name'])){
    $image1 = $_FILES['upload']['name'];
    if(!file_exists("uploads")){

        mkdir("uploads/");

    }
  }
    
    if(isset($_FILES['upload1']['name'])){
      $image2 = $_FILES['upload1']['name'];
      if(!file_exists("uploads")){
  
          mkdir("uploads/");
  
      }}
      if(isset($_FILES['upload2']['name'])){
        $image3 = $_FILES['upload2']['name'];
        if(!file_exists("uploads")){
    
            mkdir("uploads/");
    
        }}
      $VehiclesTitle = mysqli_real_escape_string($dbc,$_POST['VehiclesTitle']);
      $VehiclesBrand = mysqli_real_escape_string($dbc,$_POST['VehiclesBrand']);
      $VehiclesOverview = mysqli_real_escape_string($dbc,$_POST['VehiclesOverview']);
      $PricePerDay = mysqli_real_escape_string($dbc,$_POST['PricePerDay']);
      $fueltype = mysqli_real_escape_string($dbc,$_POST['fueltype']);
      $SeatingCapacity = mysqli_real_escape_string($dbc,$_POST['SeatingCapacity']);
      $ModelYear = mysqli_real_escape_string($dbc,$_POST['ModelYear']);
      $Engine = mysqli_real_escape_string($dbc,$_POST['Engine']);
      $DriveTrain = mysqli_real_escape_string($dbc,$_POST['DriveTrain']);
      $color = mysqli_real_escape_string($dbc,$_POST['color']);
      $InteriorFeatures = mysqli_real_escape_string($dbc,$_POST['InteriorFeatures']);
      $ExteriorFeatures = mysqli_real_escape_string($dbc,$_POST['ExteriorFeatures']);
      $Functionality = mysqli_real_escape_string($dbc,$_POST['Functionality']);

    if(move_uploaded_file($_FILES['upload']['tmp_name'],"uploads/{$_FILES['upload']['name']}")){
      if(move_uploaded_file($_FILES['upload1']['tmp_name'],"uploads/{$_FILES['upload1']['name']}")){
        if(move_uploaded_file($_FILES['upload2']['tmp_name'],"uploads/{$_FILES['upload2']['name']}")){

    echo  $insertQuery = "INSERT INTO `tblvehicles`(`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, 
      `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Engine`, `DriveTrain`, `color`, `InteriorFeatures`, `ExteriorFeatures`,
       `Functionality`) 
                                        VALUES (null,'$VehiclesTitle','$VehiclesBrand','$VehiclesOverview','$PricePerDay','$fueltype',
       '$ModelYear','$SeatingCapacity','$image1','$image2','$image3','$Engine','$DriveTrain','$color','$InteriorFeatures','$ExteriorFeatures','$Functionality')";
        // $insertQuery = "INSERT INTO `tblvehicles`(`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`,`FuelType`,`SeatingCapacity` ,`ModelYear`,`Vimage1`)
        
        // VALUES (null,'$VehiclesTitle','$VehiclesBrand','$VehiclesOverview','$PricePerDay','$fueltype','$SeatingCapacity','$ModelYear','$image')";
    $insert_table = @mysqli_query($dbc, $insertQuery) or die(mysqli_error($dbc));
       echo "<span style='color:red; font-size:2em'>Added Successfully!!</span>";
       //  echo "<script type='text/javascript'>window.location.href = 'car_detail.php'; </script>";

     }}}
     else{
    
        echo "File not uploaded";
    
     }
     
        // unset ($_SESSION['id']);
        // session_destroy();
    }
  
// }
 $querybrands = "SELECT * FROM `tblbrands` ";
 $resultbrands = mysqli_query($dbc, $querybrands); 
 $brandsrows = mysqli_fetch_array($resultbrands);
// ?>


<!DOCTYPE html>
<html lang="en">

<?php require('header.php'); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require('sidebar.php'); ?>
        <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Add Car</h1>
                        </div>
                        <button> <a href="car_detail.php"> Back to Car List </a></button>

                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <form action="add_car.php" enctype="multipart/form-data" method="POST">
                        <div class="card-body">
                            <div class="form-group">

                                <label for="VehiclesTitle">Vehicle's Title</label>
                                <input type="text" class="form-control" id="VehiclesTitle" name="VehiclesTitle">
                            </div>
                            <div class="form-group">
                                <label for="VehiclesBrand">Vehicle's Brand</label>


                                <select name="VehiclesBrand">
                                    <?php
while($brandsrows = mysqli_fetch_array($resultbrands)){
   $brandid = $brandsrows['id'];
?>
                                    <option value="<?php echo $brandsrows['id']; ?>">
                                        <?php echo $brandsrows['BrandName']; ?></option>


                                    <?php  
} ?>

                                </select>

                            </div>
                            <div class="form-group">

                                <label for="fueltype">Fuel type</label>
                                <input type="text" class="form-control" id="fueltype" name="fueltype">
                            </div>
                            <div class="form-group">
                                <label for="VehiclesOverview">Vehicle's Overview</label>
                                <textarea class="ckeditor" name="VehiclesOverview">Write any thing</textarea>
                                <!-- <input type="text" class="form-control" id="VehiclesOverview" name="VehiclesOverview" > -->
                            </div>

                            <div class="form-group">
                                <label for="PricePerDay">Price Per Day</label>
                                <input type="text" class="form-control" id="PricePerDay" name="PricePerDay">
                            </div>
                            <div class="form-group">
                                <label for="ModelYear">Model Year</label>
                                <input type="text" class="form-control" id="ModelYear" name="ModelYear">
                            </div>
                            <div class="form-group">
                                <label for="SeatingCapacity">SeatingCapacity</label>
                                <input type="number" class="form-control" id="SeatingCapacity" name="SeatingCapacity">
                            </div>


                            <div class="form-group">
                                <label for="Engine">Engine</label>
                                <input type="text" class="form-control" id="Engine" name="Engine">
                            </div>
                            <div class="form-group">
                                <label for="DriveTrain">DriveTrain</label>
                                <input type="text" class="form-control" id="DriveTrain" name="DriveTrain">
                            </div>
                            <div class="form-group">
                                <label for="color">color</label>
                                <input type="text" class="form-control" id="color" name="color">
                            </div>
                            <div class="form-group">
                                <label for="color">InteriorFeatures</label>
                                <input type="text" class="form-control" id="InteriorFeatures" name="InteriorFeatures">
                            </div>
                            <div class="form-group">
                                <label for="ExteriorFeatures">ExteriorFeatures</label>
                                <input type="text" class="form-control" id="ExteriorFeatures" name="ExteriorFeatures">
                            </div>
                            <div class="form-group">
                                <label for="Functionality">Functionality</label>
                                <input type="text" class="form-control" id="Functionality" name="Functionality">
                            </div>
                            <div class="form-group">
                                <label for="File">File input1</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <!-- <input type="file" class="custom-file-input" id="InputFile"> -->
                                        <input type="file" name="upload" value="">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="File">File input1</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <!-- <input type="file" class="custom-file-input" id="InputFile"> -->
                                        <input type="file" name="upload1" value="">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="File">File input3</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <!-- <input type="file" class="custom-file-input" id="InputFile"> -->
                                        <input type="file" name="upload2" value="">
                                    </div>

                                </div>
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