<!doctype html>
<html lang="en">

<head>
<title>Car Listing page</title>
<style>
    @media (min-width: 576px) { 
      .txtsize{
          font-size: 1rem;
      }
     }
    </style>
<?php require('requires/head.php');  ?>


<!-- your content here... -->

<header data-aos='zoom-out-down' data-aos-delay="550"
    data-aos-duration="1000" id="overlay" style="position: relative;">
    <img src="assets/images/banner-image-1.2.jpg" style="width:100%;" alt="rental car cover image">

</header>

<div class="container-fluid" style="width:100%; margin-left: auto; margin-right: auto;">
    <div class="row">
        <div class="col">

            <?php
                require_once('requires/mysqli_connect.php');
                
            ?>

            <form  id="cars" method='POST' class="justify-content-center list-group-horizontal-md list-group m-3 text-md-center" action="carlisting.php#cars" style='margin-top:60px;'>


                    <input type="submit" class="list-group-item list-group-item-action listbtn carlistmenu" name='all_manufacturers'
                    value='All Manufacturers'  />

                    <?php
                    
                    
                    $q = "SELECT BrandName from tblbrands;";
                    $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);  
                        
                    while($r=mysqli_fetch_array($res)){
                        echo "<input type='submit' class='list-group-item list-group-item-action listbtn' name='" . $r['BrandName'] . "' value='" . $r['BrandName'] ."'/>";
                    }

                    ?>
                    

            </form>
        </div></div>
        <div class="row">
        <div class="col-12">
            <section class="py-2">
                <div class="container-fluid px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
                        <?php

                    //require('requires/mysqli_connect.php');

                    
                    if(array_key_exists('all_manufacturers', $_POST)) {
                        $brandname = '';
                        car_display($brandname,$dbc);


                    }
                    else if(array_key_exists('Ford', $_POST)) {
                        $brandname = 'Ford';
                        car_display($brandname,$dbc);
                       
                    }
                    else if(array_key_exists('Tesla', $_POST)) {
                        $brandname = 'Tesla';
                        car_display($brandname,$dbc);
                    }
                    else if(array_key_exists('Hyundai', $_POST)) {
                        $brandname = 'Hyundai';
                        car_display($brandname,$dbc);
                    }
                    else if(array_key_exists('Genesis', $_POST)) {
                        $brandname = 'Genesis';
                        car_display($brandname,$dbc);
                    }
                    else if(array_key_exists('Mercedes', $_POST)) {
                        $brandname = 'Mercedes';
                        car_display($brandname,$dbc);
                    }
                    else {
                        $brandname = '';
                        car_display($brandname,$dbc);
                    }
                    

                    function car_display($brandname, $dbc) {
                        if($brandname!=''){   
                        echo "<script>
  
                            $( '.listbtn' ).removeClass('carlistmenu');
                                              
                                $('input[value=\"".$brandname."\"]').addClass('carlistmenu');
                            
                        </script>";}
                        if($brandname == ''){
                            $q = "SELECT tblvehicles.id, tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,
                        tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1
                        from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
                        $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);
                        }  

                        else{

                        $q = "SELECT tblvehicles.id, tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,
                        tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1
                        from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand
                        WHERE tblbrands.BrandName = '" . $brandname . "';";
                        $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);  
                        } 
                        while($r=mysqli_fetch_array($res)){
        
                    echo "<div class='col mb-5' data-aos='zoom-in-up'
                    data-aos-offset='0'
                    data-aos-delay='0'
                    data-aos-duration='1000'
                    data-aos-easing='ease-in-out'
                    data-aos-mirror='false'
                    data-aos-once='true'
                    data-aos-anchor-placement='center-bottom'>
                        <div class='card h-100'>
                        <div style='position:relative;'>
                        <a href='#'><img class='card-img-top img-responsive' style='object-fit:cover;' src='assets/images/".$r['BrandName']."/".$r['Vimage1']."' alt='Car_image' /></a>
                        <ul style='position:absolute;width:100%;list-style-type:none;font-size:0.7em;' class='txtsize text-white list-inline transparent-details'>
                                <li class='list-inline-item' ><i class='fa fa-car' aria-hidden='true'></i> ".$r['FuelType']."</li>
                                <li class='list-inline-item' ><i class='fa fa-calendar' aria-hidden='true'></i> ".$r['ModelYear']. " Model</li>
                                <li class='list-inline-item' ><i class='fa fa-user' aria-hidden='true'></i> ".$r['SeatingCapacity']." seats</li>
                                </ul>
                            </div>
                        <div class='card-body p-4'>
                                <div class='text-center'>
                                    <h5 class='fw-bolder'>".$r['BrandName']." : ".$r['VehiclesTitle']."</h5>
                                    $".$r['PricePerDay']." per day
                                </div>
                            </div>
                            <div class='text-center card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                <Span class='text-center'><a class='btn btncolor text-white mt-auto' href='car_details.php?Book_ID=".$r['id']."'>View Details</a></span> &nbsp;
                            
                            </div>
                        </div>
                    </div>";
                        }

                    
                }

                
                    ?>


                    </div>
                </div>
            </section>

        </div>
    </div>
</div>




<?php require('requires/footer.php'); ?>
<?php require('requires/loginModal.php'); ?>


</body>

</html>