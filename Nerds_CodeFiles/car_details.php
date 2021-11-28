<!doctype html>
<html lang="en">

<head>
  <title>Car Listing page</title>
  <?php 
    require('requires/head.php');

    require_once('requires/mysqli_connect.php');

?>

  <header data-aos='zoom-out-down' data-aos-delay="550" data-aos-duration="1000" id="overlay"
    style="position: relative;">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators" style="position:absolute; bottom:10px;" >
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>

      <?php

            $CAR_ID = $_GET['CAR_ID'];
                    
            $q = "SELECT v.VehiclesTitle, b.BrandName, v.VehiclesOverview, v.PricePerDay, v.FuelType, v.ModelYear, v.SeatingCapacity,
                    v.Vimage1, v.Vimage2, v.Vimage3, v.Engine, v.DriveTrain, v.color, v.InteriorFeatures, v.ExteriorFeatures, v.Functionality
                    FROM tblvehicles v JOIN tblbrands b on b.id=v.VehiclesBrand WHERE v.id =" . $CAR_ID .";";

                    $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);  
                        
                    $r=mysqli_fetch_array($res);

                    
                    echo "<div class='carousel-inner' style='padding:0;'>";
                    echo "<div class='carousel-item active'>
                            <img src='assets/covers/".$r['Vimage1'] . "'  class='d-block w-100' alt='Car_images'></div>";

                    echo "<div class='carousel-item'>
                            <img src='assets/covers/".$r['Vimage2'] . "' class='d-block w-100' alt='Car_images'></div>";

                    echo "<div class='carousel-item'>
                            <img src='assets/covers/".$r['Vimage3'] . "' class='d-block w-100' alt='Car_images'></div></div>";
                    
                    ?>
    </div>

  </header>

  <section class="px-2 pt-4" style="background-color: #031F26;">
    <div class="container" style="padding-top: 20px; padding-bottom: 30px; color: #ffffff;">

        <div class="row">
          <div class="col-9">
            <h2><?php echo htmlentities($r['BrandName']);?> , <?php echo htmlentities($r['VehiclesTitle']);?></h2>
          </div>
          <div class="col-3 text-end">
            <h2>Total: $<?php echo htmlentities($r['PricePerDay']);?> </h2> 
          </div>

        </div>
      

      <div class="d-flex justify-content-around" style="padding-top: 40px; padding-bottom: 20px;">
        <div class="p-4 bd-highlight text-center border border-white " style="min-width:100px; width:20%; ">
          <i class="fa fa-calendar" aria-hidden="true"></i>
          <h4><?php echo htmlentities($r['ModelYear']);?></h4>
          <p>Year</p>
        </div>
        <div class="p-4 bd-highlight text-center border border-white " style="min-width:100px; width:20%;">
          <i class="fa fa-cogs" aria-hidden="true"></i>
          <h4><?php echo htmlentities($r['FuelType']);?></h4>
          <p>Fuel Type</p>
        </div>
        <div class="p-4 bd-highlight text-center border border-white " style="min-width:100px; width:20%;">
          <i class="fa fa-user-plus" aria-hidden="true"></i>
          <h4><?php echo htmlentities($r['SeatingCapacity']);?></h4>
          <p> &nbsp;Seats &nbsp;</p>
        </div>
      </div>

      <div class="row" style="padding-top: 20px; padding-bottom: 30px;">
        <div class="col text-center">
          <a href="checkout.php" class="btn btncolor mt-auto text-white text-uppercase"><b>Book Now </b></a>
        </div>
      </div>
    </div>
  </section>

  <section class="container px-2 py-4">
    <div style="padding-top: 20px; padding-bottom: 20px;">
      <h3>Car Details:</h3>
    </div>
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingCarOverView">
          <button class="btn" style="width:100%;" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseCarOverview" aria-expanded="true" aria-controls="collapseCarOverview">
            <h5 class="text-start"><b>Car OverView</b>
              <h5>
          </button>
        </div>

        <div id="collapseCarOverview" class="collapse show" aria-labelledby="headingCarOverView"
          data-parent="#accordionExample">
          <div class="card-body">

            <div class="container" style="padding-top: 20px; padding-bottom: 10px;">
              <p><?php 
                echo $r['VehiclesOverview']
              ?>
              </p>
              <div class="d-flex flex-column" style="padding-top: 10px; padding-bottom: 10px;">
                <div class="p-2">
                  <i class="fas fa-cogs" aria-hidden="true"></i>&nbsp;
                  <?php echo $r['Engine'] ?>
                </div>
                <div class="p-2">
                  <i class="fas fa-car" aria-hidden="true"></i>&nbsp;
                  <?php echo $r['DriveTrain'] ?>
                </div>
                <div class="p-2">
                  <i class="fas fa-palette" aria-hidden="true"></i>&nbsp;
                  <?php echo $r['color'] ?>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingInteriorFeatures">
          <button class="btn collapsed" style="width:100%;" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseInteriorFeatures" aria-expanded="false" aria-controls="collapseInteriorFeatures">
            <h5 class="text-start"><b>Interior Features</b>
              <h5>
          </button>
        </div>
        <div id="collapseInteriorFeatures" class="collapse" aria-labelledby="headingInteriorFeatures"
          data-parent="#accordionExample">
          <div class="card-body">
            <div class="container" style="padding-top: 20px; padding-bottom: 10px;">
              <p><?php 
                echo $r['InteriorFeatures']
              ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingExteriorFeatures">
          <button class="btn collapsed" style="width:100%;" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseExteriorFeatures" aria-expanded="false" aria-controls="collapseExteriorFeatures">
            <h5 class="text-start"><b>Exterior Features</b>
              <h5>
          </button>
        </div>
        <div id="collapseExteriorFeatures" class="collapse" aria-labelledby="headingExteriorFeatures"
          data-parent="#accordionExample">
          <div class="card-body">
            <div class="container" style="padding-top: 20px; padding-bottom: 10px;">
              <p><?php 
                echo $r['ExteriorFeatures']
              ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingFunctionality">
          <button class="btn collapsed" style="width:100%;" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseFunctionality" aria-expanded="false" aria-controls="collapseFunctionality">
            <h5 class="text-start"><b>Functionality</b>
              <h5>
          </button>
        </div>
        <div id="collapseFunctionality" class="collapse" aria-labelledby="headingFunctionality"
          data-parent="#accordionExample">
          <div class="card-body">
            <div class="container" style="padding-top: 20px; padding-bottom: 10px;">
              <p><?php 
                echo $r['Functionality']
              ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



<?php require('requires/footer.php'); ?>
<?php require('requires/loginModal.php'); ?>




  </body>

</html>