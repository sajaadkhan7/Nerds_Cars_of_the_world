<section class="px-2 pt-4">
    <div class="container">
        <div class="text-center">
            <h2 class="fw-bolder">Find the Best <span class="fw-normal">CarForYou</span></h2>
            <p>There are many variations of car we have available for you to choose according to using desires.</p>
        </div>
    </div>
</section>
<section id="cars" class="py-2">
    <div class="container-fluid px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
            <?php
               require('mysqli_connect.php');
                $q = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,
                tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1
                 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
                $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);   
                while($r=mysqli_fetch_array($res)){
 
             echo "<div class='col mb-5'>
                <div class='card h-100'>
                <div style='position:relative;'>
                   <a href='car_detail.php?Car_id=".$r['id']."'><img class='card-img-top img-responsive' style='object-fit:cover;' src='assets/images/".$r['Vimage1']."' alt='...' /></a>
                   <ul style='position:absolute;list-style-type:none;' class='text-white list-inline transparent-details'>
                        <li class='list-inline-item'><i class='fa fa-car' aria-hidden='true'></i> ".$r['FuelType']."</li>
                        <li class='list-inline-item'><i class='fa fa-calendar' aria-hidden='true'></i> ".$r['ModelYear']. " Model</li>
                        <li class='list-inline-item'><i class='fa fa-user' aria-hidden='true'></i> ".$r['SeatingCapacity']." seats</li>
                        </ul>
                    </div>
                 <div class='card-body p-4'>
                        <div class='text-center'>
                            <h5 class='fw-bolder'>".$r['BrandName']." : ".$r['VehiclesTitle']."</h5>
                            $".$r['PricePerDay']." per day
                        </div>
                    </div>
                    <div class='text-center card-footer p-4 pt-0 border-top-0 bg-transparent'>
                        <Span class='text-center'><a class='btn btncolor mt-auto' href='car_detail.php?Car_id=".$r['id']."'>Book Now</a></span> &nbsp;
                      
                    </div>
                </div>
            </div>";
                }
                         ?>


        </div>
    </div>
</section>
<section class="section-back container-fluid p-sm-4 text-white">
    <div class="row text-center justify-content-around">

        <div class="col-sm-3 col-xs-6 text-center rounded-circle bg-danger py-5" style="width: 170px; height:170px;">
            <h2><i class="fa fa-calendar"> </i> 10+</h2>
            <p>Years in business</p>
        </div>


        <div class="col-sm-3 col-xs-6 text-center rounded-circle bg-danger py-5" style="width: 170px; height:170px;">
            <h2><i class="fa fa-car"> </i> 300+</h2>
            <p>New Cars</p>
        </div>
        <div class="col-sm-3 col-xs-6  text-center rounded-circle bg-danger py-5" style="width: 170px; height:170px;">
            <h2><i class="fa fa-smile"> </i> 1000+</h2>
            <p>Happy Customers</p>
        </div>

        <div class="col-sm-3 col-xs-6 text-center rounded-circle bg-danger py-5" style="width: 170px; height:170px;">
            <h2><i class="fa fa-calendar"> </i> 10+</h2>
            <p>Cars Rented Everyday</p>
        </div>
    </div>
</section>
<div id="testimonial" class="d-flex align-items-center m-0 py-5 mh-100"> <a
        class="carousel-control-prev text-decoration-none " href="#mycarousel" role="button" data-bs-slide="prev">
        <div class="d-flex flex-column justify-content-center me-2 ms-auto left">PREV<span
                class="fas fa-arrow-left"></span> </div> <span class="sr-only">Previous</span>
    </a>
    <div class="container">
        <div id="mycarousel" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">


                <?php
  
  
      $q = "SELECT * From tbltestimonial";
      $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);   
      $counter=0;
      while($r=mysqli_fetch_array($res)){
        $counter=$counter+1;
      ?>
                <li data-bs-target="#mycarousel" data-bs-slide-to="<?php echo htmlentities($counter-1);?>"
                    class="<?php if($counter==1){echo "active";}else{ echo '';} ?>"></li>
                <?php } ?>
            </ol>
            <div class="carousel-inner">

                <?php  
             $q = "SELECT * From tbltestimonial";
             $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);   
             $counter=0;
             while($r=mysqli_fetch_array($res)){
               $counter=$counter+1;
            ?>

                <div class="carousel-item <?php if($counter==1){echo 'active';}?>">
                    <div class="row">
                        <div class="col-lg-6 "> <img src="assets/images/<?php echo htmlentities($r['imgUrl']) ?>"
                                class="d-block w-100 rounded-3" alt="..."> </div>
                        <div class="col-lg-6">
                            <div class=" d-flex flex-column justify-content-center my-5 ms-5 px-3 ">
                                <p class="review text-center">"<?php echo $r['Testimonial'] ?>"</p>
                                <div class="name d-flex align-items-center justify-content-center"> <span
                                        class="fas fa-minus pe-1"></span>
                                    <p class="m-0"><?php echo $r['name'] ?></p>
                                </div>
                                <p class="job text-center">Project Manager</p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>



            </div>
        </div>
    </div> <a class="carousel-control-next text-decoration-none " href="#mycarousel" role="button" data-bs-slide="next">
        <div class="d-flex flex-column justify-content-center right ms-2 me-auto"> NEXT <span
                class="fas fa-arrow-right"></span> </div> <span class="sr-only">Next</span>
    </a>
</div>