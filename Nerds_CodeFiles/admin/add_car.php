<?php
require('../requires/mysqli_connect.php');  

?>

<?php
if($_SERVER['REQUEST_METHOD'] =='POST'){

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
  $join ="SELECT v.id as vid,v.VehiclesBrand as brand_id , b.id as bid ,v.Vimage1 as img1 , v.VehiclesTitle as title , b.BrandName as carbrand, v.VehiclesOverview as vehicle_overview , v.PricePerDay as price, 
  v.ModelYear as model FROM tblvehicles v INNER JOIN tblbrands b ON v.VehiclesBrand = b.id where v.VehiclesBrand =  $VehiclesBrand";
  $result1 = mysqli_query($dbc, $join); 
  $rows = mysqli_fetch_array($result1);
  $brandname =$rows['carbrand'];
if(isset($_FILES['file1']['name']) and isset($_FILES['file2']['name']) and isset($_FILES['file3']['name'])){

  $fileName1 = basename($_FILES["file1"]["name"]);
  $targetDir1 = "../assets/covers/";
  $targetFilePath1 = $targetDir1 . $fileName1;
  
  // $fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
  $fileNameP = basename($_FILES["file1"]["name"]);
  $targetDirP = "../assets/profile/";
  $targetFilePathP = $targetDirP . $fileNameP;

  $fileName2 = basename($_FILES["file2"]["name"]);
  $targetDir2 = "../assets/covers/";
  $targetFilePath2 = $targetDir2 . $fileName2;
  // $fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);

  $fileName3 = basename($_FILES["file3"]["name"]);
  $targetDir3 = "../assets/covers/";
  $targetFilePath3 = $targetDir3 . $fileName3;

  // if(!empty($_FILES["file1"]["name"]) && !empty($_FILES["file2"]["name"])  && !empty($_FILES["file3"]["name"]) ){
     

    
                if(move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFilePath1)){
                    
                  if(move_uploaded_file($_FILES["file2"]["tmp_name"], $targetFilePath2)){
                      if(move_uploaded_file($_FILES["file3"]["tmp_name"], $targetFilePath3)){
                        if(copy ( $targetFilePath1 , $targetFilePathP )){

                          $insertQuery = "INSERT INTO `tblvehicles`(`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, 
                          `ModelYear`, `SeatingCapacity`,`Vprofile`, `Vimage1`, `Vimage2`, `Vimage3`, `Engine`, `DriveTrain`, `color`, `InteriorFeatures`, `ExteriorFeatures`,
                           `Functionality`) 
                                                            VALUES (null,'$VehiclesTitle','$VehiclesBrand','$VehiclesOverview','$PricePerDay','$fueltype',
                           '$ModelYear','$SeatingCapacity','$fileNameP','$fileName1','$fileName2','$fileName3','$Engine','$DriveTrain','$color','$InteriorFeatures','$ExteriorFeatures','$Functionality')";
                            $insert_table = @mysqli_query($dbc, $insertQuery) or die(mysqli_error($dbc));
                           echo "<span style='color:red; font-size:2em'>Added Successfully!!</span>";
                      }
                  }
              }
            }
}
}
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
                            <h1>Add a new car</h1>
                        </div>
                        <button class="btn btncolor my-2 mx-2 btn-info text-white"> <a style="text-decoration:none; color:white;" href="car_detail.php"> Back to listings </a></button>
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
                                <textarea class="form-control ckeditor" id="InteriorFeatures"
                                    name="InteriorFeatures"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ExteriorFeatures">ExteriorFeatures</label>
                                <textarea class="form-control ckeditor" id="ExteriorFeatures"
                                    name="ExteriorFeatures"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="Functionality">Functionality</label>
                                <textarea class="form-control ckeditor" id="Functionality"
                                    name="Functionality"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="File">File input1</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="file1" value="">

                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="File">File input1</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="file2" value="">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="File">File input3</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="file3" value="">
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btncolor my-2 px-5 py-2 btn-info text-white">SUBMIT</button>
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