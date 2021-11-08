<section class="px-2 pt-4">
  <div class="container">
    <div class="text-center">
      <h2 class="fw-bolder">Find the Best <span class="fw-normal">CarForYou</span></h2>
      <p>There are many variations of car we have available for you to choose according to using desires.</p>
    </div></div></section>
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
                   <a href='#'><img class='card-img-top img-responsive' style='object-fit:cover;' src='assets/images/".$r['Vimage1']."' alt='...' /></a>
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
                        <Span class='text-center'><a class='btn btn-danger mt-auto' href='checkout.php?Book_ID=".$r['PricePerDay']."'>Book Now</a></span> &nbsp;
                      
                    </div>
                </div>
            </div>";
                }
                         ?>


            </div>
        </div>
  </section>
  <section class="section-back container-fluid p-4 text-white">
      <div class="row text-center justify-content-around">
         
              <div class="col-sm-3 col-xs-6 text-center rounded-circle bg-danger py-5" style="width: 170px; height:170px;">
                  <h2><i class="fa fa-calendar"> </i> 40+</h2>
                  <p>Years in business</p>
              </div>
          

              <div class="col-sm-3 col-xs-6 text-center rounded-circle bg-danger py-5" style="width: 170px; height:170px;">
                  <h2><i class="fa fa-calendar"> </i> 40+</h2>
                  <p>Years in business</p>
              </div>
              <div class="col-sm-3 col-xs-6 text-center rounded-circle bg-danger py-5" style="width: 170px; height:170px;">
                  <h2><i class="fa fa-calendar"> </i> 40+</h2>
                  <p>Years in business</p>
              </div>

              <div class="col-sm-3 col-xs-6 text-center rounded-circle bg-danger py-5" style="width: 170px; height:170px;">
                  <h2><i class="fa fa-calendar"> </i> 40+</h2>
                  <p>Years in business</p>
              </div>
      </div>
  </section>
  
