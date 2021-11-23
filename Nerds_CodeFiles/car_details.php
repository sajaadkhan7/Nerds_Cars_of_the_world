<!doctype html>
<html lang="en">

<head>
<title>Car Listing page</title>
<style>
        .carousel-inner .item img {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
            /*height: 600px !important;*/
        }
</style>
<?php 
    require('requires/head.php');

    require('requires/mysqli_connect.php');

?>

<header data-aos='zoom-out-down' data-aos-delay="550"
    data-aos-duration="1000" id="overlay" style="position: relative;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>

        <?php

            $Book_ID = $_GET['Book_ID'];
                    
            $q = "SELECT v.VehiclesTitle, b.BrandName, v.VehiclesOverview, v.PricePerDay, v.FuelType, v.ModelYear, v.SeatingCapacity,
                    v.Vimage1, v.Vimage2, v.Vimage3, v.Engine, v.DriveTrain, v.color, v.InteriorFeatures, v.ExteriorFeatures, v.Functionality
                    FROM tblvehicles v JOIN tblbrands b on b.id=v.VehiclesBrand WHERE v.id =" . $Book_ID .";";

                    $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);  
                        
                    $r=mysqli_fetch_array($res);
                    
                    echo "<div class='carousel-inner'>";
                    echo "<div class='item active'>
                            <img src='assets/all_car_images/" . $r['BrandName']."/".$r['Vimage1'] . "'  class='img-responsive' alt='Car_images'></div>";

                    echo "<div class='item'>
                            <img src='assets/all_car_images/" . $r['BrandName']."/".$r['Vimage2'] . "' class='img-responsive' alt='Car_images'></div>";

                    echo "<div class='item'>
                            <img src='assets/all_car_images/" . $r['BrandName']."/".$r['Vimage3'] . "' class='img-responsive' alt='Car_images'></div></div>";
                    

                    ?>

      <a class="left carousel-control" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

</header>

<section  class="px-2 pt-4" style="background-color: #121212;">
    <div class="container" style="padding-top: 20px; padding-bottom: 30px; color: #ffffff; background-color: #121212;">
        <div class="row">
          <div class="col-sm-9">
            <h2><?php echo htmlentities($r['BrandName']);?> , <?php echo htmlentities($r['VehiclesTitle']);?></h2>
          </div>
          <div class="col-sm-3 mt-2">
            <h3>$<?php echo htmlentities($r['PricePerDay']);?> total </h3> 
          </div>
        </div>

        <div class="d-flex justify-content-around" style="padding-top: 40px; padding-bottom: 30px;">
          <div class="p-5 bd-highlight text-center border border-white rounded">
            <i class="fa fa-calendar" aria-hidden="true"></i>
              <h4><?php echo htmlentities($r['ModelYear']);?></h4>
              <p>Reg.Year</p>
          </div>
          <div class="p-5 bd-highlight text-center border border-white rounded">
              <i class="fa fa-cogs" aria-hidden="true"></i>
              <h4><?php echo htmlentities($r['FuelType']);?></h4>
              <p>Fuel Type</p>
          </div>
          <div class="p-5 bd-highlight text-center border border-white rounded">
              <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h4><?php echo htmlentities($r['SeatingCapacity']);?></h4>
              <p> &nbsp;Seats &nbsp;</p>
          </div>
        </div>
    </div>
</section>

<section  class="px-2 py-4">
  
</section>


<?php require('requires/footer.php'); ?>



</body>

</html>