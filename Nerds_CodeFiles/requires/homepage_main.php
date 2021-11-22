<section  class="px-2 pt-4" style="background-color: #121212;">
    <div class="container" style="padding-top: 60px; color: #ffffff; background-color: #121212;">
        <div class="text-center">
            <h2>Be the Best. Chose the Best</h2>
            <p style="margin-bottom: 0;">Wide range of cars handpicked for your ease. We care for your decisions, hence made it easy fro you. <br>Just rent and ride. </p>
        </div>
    </div>
</section>
<section id="cars" class="py-2" style="background-color: #121212;">
    <div class="container-fluid px-lg-5 mt-5" style="background-color: #121212; padding-bottom: 50px">
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
            <?php
               require('mysqli_connect.php');
                $q = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,
                tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1
                 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand
                 limit 6";
                $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);   
                while($r=mysqli_fetch_array($res)){
 
             echo "<div class='col mb-5 dataaos' data-aos='zoom-in-up'
             data-aos-offset='0'
             data-aos-delay='0'
             data-aos-duration='1000'
             data-aos-easing='ease-in-out'
             data-aos-mirror='false'
             data-aos-once='true'
             data-aos-anchor-placement='center-bottom'>
                <div class='card h-100' style='padding: 20px; background-color: #031F26; border-style: none; border-radius: 0'>
                <div style='position:relative;'>
                   <a href='car_detail.php?Car_id=".$r['id']."'><img class='card-img-top img-responsive' style='object-fit:cover;' src='assets/images/".$r['BrandName']."/".$r['Vimage1']."' alt='...' /></a>
                   <ul style='position:absolute;list-style-type:none;width:100%;font-size:0.7em;' class='txtsize text-white list-inline transparent-details card-details'>
                        <li class='list-inline-item'><i class='fa fa-car' aria-hidden='true'></i> ".$r['FuelType']."</li>
                        <li class='list-inline-item'><i class='fa fa-calendar' aria-hidden='true'></i> ".$r['ModelYear']. " Model</li>
                        <li class='list-inline-item'><i class='fa fa-user' aria-hidden='true'></i> ".$r['SeatingCapacity']." seats</li>
                        </ul>
                    </div>
                 <div class='card-body p-4'>
                        <div class='text-center text-white '>
                            <h5 class='fw-bolder text-uppercase'>".$r['BrandName']." : ".$r['VehiclesTitle']."</h5>
                            $".$r['PricePerDay']."/day
                        </div>
                    </div>
                    <div class='text-center card-footer p-4 pt-0 border-top-0 bg-transparent'>
                        <Span class='text-center'><a class='btn btncolor text-white mt-auto text-uppercase' href='car_detail.php?Car_id=".$r['id']."'><b>Book Now</b></a></span> &nbsp;
                      
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

        <div data-aos='fade-right' data-aos-delay="50"
    data-aos-duration="1000" class="col-sm-3 col-xs-6 text-center rounded-circle py-5 cirlce-bg" style="width: 180px; height:180px;">
            <h3><i class="fa fa-calendar"> </i> 10+</h3>
            <p>Years in business</p>
        </div>


        <div data-aos='zoom-out-down' data-aos-delay="50"
    data-aos-duration="1000" class="col-sm-3 col-xs-6 text-center rounded-circle cirlce-bg py-5" style="width: 180px; height:180px;">
            <h3><i class="fa fa-car"> </i> 300+</h3>
            <p>New Cars</p>
        </div>
        <div data-aos='zoom-out-down' data-aos-delay="50"
    data-aos-duration="1000" class="col-sm-3 col-xs-6  text-center rounded-circle cirlce-bg py-5" style="width: 180px; height:180px;">
            <h3><i class="fa fa-smile"> </i> 1000+</h3>
            <p>Happy Customers</p>
        </div>

        <div data-aos='fade-left' data-aos-delay="50"
    data-aos-duration="1000" class="col-sm-3 col-xs-6 text-center rounded-circle cirlce-bg py-5" style="width: 180px; height:180px;">
            <h3><i class="fa fa-calendar"> </i> 10+</h3>
            <p>Cars Rented Everyday</p>
        </div>
    </div>
</section>
<div id="testimonial" class="d-flex align-items-center m-0 mh-100" style="background-color: #efefef;"> <a
        class="carousel-control-prev text-decoration-none " href="#mycarousel" role="button" data-bs-slide="prev">
        <div class="d-flex flex-column justify-content-center me-2 ms-auto left"><span
                class="fas fa-arrow-left"></span> </div> <span class="sr-only"></span>
    </a>
    <div class="container">
        <div id="mycarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- <ol>
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
            </ol> -->
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
                        <div class="col-lg-12 text-center">
                            <img src="<?php echo htmlentities($r['imgUrl'])?>"
                                alt="testimonials" style="width: 150px;">
                        </div>
                    </div>
                        <div class="row">
                        <!-- <div class="col-lg-6 "> <img src="assets/images/<?php echo htmlentities($r['imgUrl']) ?>"
                                class="d-block w-100 rounded-3" alt="..."> </div> -->
                        <div class="col-lg-12">
                            <div class=" d-flex flex-column justify-content-center">
                                <p class="review text-center">"<?php echo $r['Testimonial'] ?>"</p>
                                <div class="name d-flex align-items-center justify-content-center"> <span
                                        class="fas pe-1"></span>
                                    <p class="m-0"><?php echo $r['name'] ?></p>
                                </div>
                                <p class="job text-center">Customer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>



            </div>
        </div>
    </div> <a class="carousel-control-next text-decoration-none " href="#mycarousel" role="button" data-bs-slide="next">
        <div class="d-flex flex-column justify-content-center right ms-2 me-auto"><span
                class="fas fa-arrow-right"></span> </div> <span class="sr-only"></span>
    </a>
</div>