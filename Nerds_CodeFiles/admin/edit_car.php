<?php
require('mysqli_connect.php');
// session_start();
if(isset($_GET["id"])){
   $getid = $_GET["id"];
}
 $getid;

 if($_SERVER['REQUEST_METHOD'] =='POST'){

  if(!empty($_POST['color']) and !empty($_POST['VehiclesOverview']) and !empty($_POST['PricePerDay']) ){
    $VehiclesOverview = mysqli_real_escape_string($dbc,$_POST['VehiclesOverview']);
    $PricePerDay = mysqli_real_escape_string($dbc,$_POST['PricePerDay']);
    $color = mysqli_real_escape_string($dbc,$_POST['color']);

    $updateQuery = "UPDATE `tblvehicles` SET `PricePerDay`='$PricePerDay' , `VehiclesOverview`='$VehiclesOverview' , `color`='$color' WHERE id= $getid";
    $update_table = @mysqli_query($dbc, $updateQuery) or die(mysqli_error($dbc));
  if(mysqli_affected_rows($dbc) > 0){
    echo "<span style='color:green; font-size:2em'>Updated Successfully!!</span>";
  } else {
    echo "<span style='color:red; font-size:2em'>Not Updated Successfully!!</span>";
      }   
  
  
  }


 }
//  $query1 = "SELECT * FROM `tblvehicles` where id = $getid";
//     $result1 = mysqli_query($dbc, $query1); 
//     $rows = mysqli_fetch_array($result1);
    
$join ="SELECT v.id as vid,v.VehiclesBrand as brand_id , b.id as bid ,v.Vimage1 as img1 , v.Vimage2 as img2,
 v.Vimage3 as img3, v.VehiclesTitle as title , b.BrandName as carbrand, v.VehiclesOverview as vehicle_overview , v.SeatingCapacity as SeatingCapacity
 , v.PricePerDay as price, v.FuelType as Fuel, v.color as color,
v.ModelYear as model FROM tblvehicles v INNER JOIN tblbrands b ON v.VehiclesBrand = b.id where v.id = $getid";
$result1 = mysqli_query($dbc, $join); 
$rows = mysqli_fetch_array($result1);
//  echo  $id = $rows['vid'];
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
        <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>

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
                  
                <form action="edit_car.php?id=<?php echo $getid; ?>" method="POST">
            <div class="card-body">
<div class="form-group">

<label for="VehiclesTitle">Image</label>
<img src='../assets/images/<?php echo $rows['carbrand']."/".$rows['img1'];  ?>' width="100" height="100">
<!-- <img src='../assets/images/<?php echo $rows['carbrand']."/".$rows['img2'];  ?>' width="100" height="100">
<img src='../assets/images/<?php echo $rows['carbrand']."/".$rows['img3'];  ?>' width="100" height="100"> -->
</div>

              <div class="form-group">
           

                <label for="VehiclesTitle">Vehicle's Title</label>
                <input disabled class="form-control" id="VehiclesTitle" name="VehiclesTitle" value="<?php echo $rows['title']; ?>">
              </div>
              <div class="form-group">
                <label for="VehiclesBrand">Vehicle's Brand</label>
                <input disabled class="form-control" id="VehiclesBrand" name="VehiclesBrand" value="<?php echo $rows['carbrand']; ?>">
              </div>
           
              <div class="form-group">
                <label for="fueltype">Fuel type</label>
                <input disabled class="form-control" id="fueltype" name="fueltype" value="<?php echo $rows['Fuel']; ?>">
              </div>

              <div class="form-group">
                <label for="VehiclesOverview">Vehicle's Overview</label>
                <textarea class="ckeditor" name="VehiclesOverview"><?php echo $rows['vehicle_overview']; ?></textarea>

                <!-- <input disabled class="form-control" id="VehiclesOverview" name="VehiclesOverview" value="<?php echo $rows['vehicle_overview']; ?>"> -->
              </div>

              <div class="form-group">
                <label for="PricePerDay">Price Per Day</label>
                <input type="text" class="form-control" id="PricePerDay" name="PricePerDay" value="<?php echo $rows['price']; ?>">
              </div>
              <div class="form-group">
                <label for="color">Colour</label>
                <input type="text" class="form-control" id="color" name="color" value="<?php echo $rows['color']; ?>">
              </div>

              <div class="form-group">
                <label for="ModelYear">Model Year</label>
                <input disabled class="form-control" id="ModelYear" name="ModelYear" value="<?php echo $rows['model']; ?>">
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