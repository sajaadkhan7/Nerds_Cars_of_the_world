
Skip to content
Pull requests
Issues
Marketplace
Explore
@Gaganpreetkaur0424
Gaganpreetkaur0424 /
Nerds_Cars_of_the_world
Public
forked from Sajaadkhan/Nerds_Cars_of_the_world

0
0

    3

Code
Pull requests
Actions
Projects
Wiki
Security
Insights

    Settings

Nerds_Cars_of_the_world/Nerds_CodeFiles/admin/edit_car.php /
@Gaganpreetkaur0424
Gaganpreetkaur0424 deletedone
Latest commit a15c628 20 hours ago
History
2 contributors
@Gaganpreetkaur0424
@Sajaadkhan
146 lines (114 sloc) 5.56 KB
<?php
require('mysqli_connect.php');
session_start();
if(!isset($_GET["id"])){
    if(!$_SESSION["id"]){
        echo "<br>Session not set!!!!<br>";
    }
  }
else{
    $_SESSION["id"] =  $_GET["id"];
//     echo "<br>Session set<br>";

 $SESSION_ID = intval($_SESSION['id']);

if($_SERVER['REQUEST_METHOD'] =='POST'){
  if(isset($_FILES['upload']['name']) and !empty($_POST['VehiclesTitle']) and !empty($_POST['VehiclesBrand']) 
  and !empty($_POST['VehiclesOverview']) and !empty($_POST['PricePerDay']) and !empty($_POST['ModelYear'])){


      $VehiclesTitle = mysqli_real_escape_string($dbc,$_POST['VehiclesTitle']);
      $VehiclesBrand = mysqli_real_escape_string($dbc,$_POST['VehiclesBrand']);
    $VehiclesOverview = mysqli_real_escape_string($dbc,$_POST['VehiclesOverview']);
    $PricePerDay = mysqli_real_escape_string($dbc,$_POST['PricePerDay']);
    $ModelYear = mysqli_real_escape_string($dbc,$_POST['ModelYear']);

      $image = $_FILES['upload']['name'];
      if(!file_exists("uploads")){
  
          mkdir("uploads/");
  
      }
     
  
  }
  if(move_uploaded_file($_FILES['upload']['tmp_name'],"uploads/{$_FILES['upload']['name']}")){

        // $insertQuery = "INSERT INTO `tblvehicles`(`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `ModelYear`,`Vimage1`)
        // VALUES (null,'$VehiclesTitle','$VehiclesBrand','$VehiclesOverview','$PricePerDay','$ModelYear','$image')";
          $updateQuery = "UPDATE `tblvehicles` SET `VehiclesTitle`='$VehiclesTitle',`VehiclesBrand`='$VehiclesBrand',
             `VehiclesOverview`='$VehiclesOverview', `PricePerDay`='$PricePerDay',`ModelYear`='$ModelYear' , `Vimage1`='$image' WHERE id= {$SESSION_ID}";
              $update_table = @mysqli_query($dbc, $updateQuery) or die(mysqli_error($dbc));
    //    $insert_table = @mysqli_query($dbc, $insertQuery) or die(mysqli_error($dbc));
         echo "updated successfully.";
     }else{
    
        echo "File not uploaded";
    
//      }
    }
}
}
 $query1 = "SELECT * FROM `tblvehicles` where id = {$SESSION_ID}";
    $result1 = mysqli_query($dbc, $query1); 
    $rows = mysqli_fetch_array($result1)
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
                   
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                  
                <form action="edit_car.php?id=<?php echo $SESSION_ID ;?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
               
                    <label for="VehiclesTitle">Vehicle's Title</label>
                    <input type="text" class="form-control" id="VehiclesTitle" name="VehiclesTitle" value="<?php echo $rows['VehiclesTitle']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="VehiclesBrand">Vehicle's Brand</label>
                    <input type="text" class="form-control" id="VehiclesBrand"  name="VehiclesBrand" value="<?php echo $rows['VehiclesBrand']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="VehiclesOverview">Vehicle's Overview</label>
                    <input type="text" class="form-control" id="VehiclesOverview" name="VehiclesOverview"  value="<?php echo $rows['VehiclesOverview']; ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="PricePerDay">Price Per Day</label>
                    <input type="text" class="form-control" id="PricePerDay" name="PricePerDay"  value="<?php echo $rows['PricePerDay']; ?>">
                  </div> <div class="form-group">
                    <label for="ModelYear">Model Year</label>
                    <input type="text" class="form-control" id="ModelYear" name="ModelYear"   value="<?php echo $rows['ModelYear']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="File">File input</label>
                    <img src='uploads/<?php echo $rows['Vimage1'];  ?>' width="100" height="100">

                    <div class="input-group">
                      <div class="custom-file">
                        <!-- <input type="file" class="custom-file-input" id="InputFile"> -->
        <input type="file" name="upload" value="">
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

    © 2021 GitHub, Inc.
    Terms
    Privacy
    Security
    Status
    Docs

    Contact GitHub
    Pricing
    API
    Training
    Blog
    About

Loading complete