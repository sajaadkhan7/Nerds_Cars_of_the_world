<?php



require_once('requires/mysqli_connect.php');
// session_start();
if(isset($_SESSION['username'])){
    $_SESSION['username']; 
  $user_id = $_SESSION['user_id'];
}

//
$qry = "SELECT car_bookings.id as bookingid, car_bookings.user_id as userid, car_bookings.ccnum, car_bookings.expmonth,
 car_bookings.expyear, car_bookings.cvv,
 users.id as usrid , users.username as uname, users.email as uemail, users.password FROM car_bookings
  INNER JOIN users on car_bookings.id = users.id where  users.id  = '$user_id'";
  $result = mysqli_query($dbc,$qry) or die(mysqli_error($dbc));
  $res=mysqli_fetch_array($result);
  $uid = $res['usrid'];
    $uname = $res['uname'];
  $uemail = $res['uemail'];



?>


<!doctype html>
<html lang="en">

<head>
    <title>Cars Of The World:Contact Us</title>
    <style>
    /* Style inputs */
    .contactus [type=text],
    input[type=email],
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }



    /* Style the container/contact section */
    .contactus {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 10px;
    }

    /* Create two columns that float next to eachother */
    .column {
        float: left;
        width: 50%;
        margin-top: 6px;
        padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .address-wrap {
        /* background: #fff; */
        background-color: #f2f2f2;
        box-shadow: 0px 3px 10px 0px rgba(38, 59, 94, 0.1);
        -webkit-box-flex: 1;
        margin-left: 3%;
        flex: 1 1 40%;
        margin-top: 25px;
    }
    </style>

    <?php require('requires/head.php'); 
    
    
    
 if(isset($_SESSION['username'])){
     $username = $_SESSION['username'];
 }
 
 
 
                     
//  $q = "SELECT v.VehiclesTitle, b.BrandName, v.VehiclesOverview, v.PricePerDay, v.FuelType, v.ModelYear, v.SeatingCapacity,
//          v.Vimage1, v.Vimage2, v.Vimage3, v.Engine, v.DriveTrain, v.color, v.InteriorFeatures, v.ExteriorFeatures, v.Functionality
//          FROM tblvehicles v JOIN tblbrands b on b.id=v.VehiclesBrand WHERE v.id =" . $CAR_ID .";";
 
//          $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);  
             
//          $r=mysqli_fetch_array($res);
    
 
 
    
    
    ?>

    <!-- contact us -->

    <div class="container-fluid">

        <div class="container">
            <div data-aos='zoom-out-down' data-aos-delay="50" data-aos-duration="1000" style="text-align:center">
                <div style="padding-top: 60px;">
                    <span style="color:red" id="errorMsgcheckout"></span>

                    <h2 class="fw-bolder">My bookings</h2>
                </div>
            </div>
            <div style="padding-top: 60px; padding-bottom: 70px" class="row">

                <div data-aos='fade-right' data-aos-delay="0" data-aos-duration="1000"
                    class="column col-md-12  contactus">
                    <!-- <form id="checkoutform" action="#" method="POST"> -->
                    <div class="col-50">
                        <h3>My Bookings </h3>
                        <label for="fname"></i> Full Name :</label>
                        <?php echo $_SESSION['username']; ?><br>
                        <label for="email"> Email :</label>
                        <?php echo $_SESSION['email']; ?><br>

                        <?php 
                               $q ="SELECT v.VehiclesTitle as title, v.PricePerDay as price, v.Vprofile as pic, b.BrandName as bname, cb.date FROM car_bookings cb JOIN tblvehicles v 
                               ON v.id=cb.car_id JOIN users u ON u.id=cb.user_id JOIN tblbrands b ON b.id=v.VehiclesBrand where u.id = ".$_SESSION['user_id'];
                                                       $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);
                                                      

                                                        ?>
                                                        <div class="table-responsive">
                        <table class="table table-striped mt-4">
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Brand Name</th>
                                <th>Price</th>
                                <th>Booking Date</th>

                            </tr>
                            <?php
   while($r=mysqli_fetch_array($res)){

    ?>
                            <tr>
            <td><img  style='object-fit:cover;'  width='100' height='100' src='assets/profile/<?php echo $r['pic']; ?>' alt='...' /></td>
                                <td><?php echo $r['title']; ?></td>
                                <td><?php echo $r['bname']; ?></td>
                                <td><?php echo $r['price']; ?></td>
                                <td><?php echo $r['date']; ?></td>

                            </tr>
                            <?php
   }
   ?>
                        </table></div>
                        <?php
                                                        // echo "
                                                        // <div > 

                                                        //     <img  style='object-fit:cover;'  width='100' height='100' src='assets/profile/".$r['pic']."' alt='...' />
                                                        //             <div>
                                                        //                 <h5 class='fw-bolder'>".$r['bname']." : ".$r['title']."</h5>
                                                        //                 $".$r['price']." per day
                                                        //             </div>
                                                        //         </div>
                                                        //         ";





                                                       
                               ?>


                    </div> </br>

                </div>

            </div>
        </div>
    </div>
    <!-- contact us -->



    <?php require('requires/footer.php'); ?>
    <?php require('requires/loginModal.php'); ?>
    </body>


</html>