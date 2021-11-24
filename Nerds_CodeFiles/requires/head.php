<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Here you can rent latest Cars.">
<meta name="author" content="Nerds">
<meta property="og:title" content="Rent a Car">
<meta property="og:type" content="car rental">
<meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
<meta property="og:description" content="A Place where you can find cars to get on rent.">
<meta property="og:image" content="../assets/images/logo/cars_logo_white.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


<link rel="icon" href="../assets/images/logo/cars_logo_white.png">
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/cars.css">
<!-- Font awesome icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
  integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<!-- aos animation -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="css/loginModal.css">
<!-- Add jquery cdn -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php require_once('requires/mysqli_connect.php');?>
<style>
#searchdata li{
  display: none;
}
  </style>
  <script>
$(document).ready(function(){
  $("#searchField").on("keyup", function(e) {
   
    var value = $(this).val().toLowerCase();
    $("#searchdata li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  // $("#searchField").blur(function(){
  //   $("#searchdata li").css('display','none');
  // });
});
    </script>
</head>

<body>
  <nav data-aos='zoom-out-down' style="z-index: 1;" data-aos-delay="300" data-aos-duration="1000"
    class="navbar navbar-expand-sm navbar-dark navbg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="assets/images/logo/cars_logo_white.png" style="width:120px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">

            <a class="nav-link <?php if(basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING'])=='index.php'){ echo 'activeLink';} else echo ''; ?>"
              href="index.php"><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING'])=='carlisting.php'){ echo 'activeLink';} else echo ''; ?>"
              href="carlisting.php"><b>Cars</b></a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link <?php if(basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING'])=='admin.php'){ echo 'activeLink';} else echo ''; ?>"
              href="admin.php"><b>Admin</b></a> -->
              <a data-bs-toggle="modal" data-bs-target="#myModaladmin" class="nav-link <?php if(basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING'])=='admin.php'){ echo 'activeLink';} else echo ''; ?>" href="admin.php"><b>Admin</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING'])=='aboutus.php'){ echo 'activeLink';} else echo ''; ?>"
              href="aboutus.php"><b>About</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING'])=='contactus.php'){ echo 'activeLink';} else echo ''; ?>"
              href="contactus.php"><b>Contact</b></a>
          </li>
        </ul>

        <form class="d-flex">
          <button class="btn btncolor my-2 mx-2 btn-info"  data-bs-toggle="modal"
            data-bs-target="#myModal" type="button"><i class="fas fa-user"></i><span class="d-sm-none">
              LOGIN</span></button>
          <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
        </form>
        <div class="d-flex btn-group">
          <input class="form-control" autocomplete="off"  id="searchField" name="search" type="text" placeholder="Search"
            style="font-size: 0.7rem;position:relative;padding:10px;">
          <!-- <button id="searchSubmit" class="btn btncolor"  type="submit"><i class="fas fa-search"></i></button> -->
          <ul id="searchdata" style="position:absolute;" class="list-unstyled top-100 left-0 right-0 list-group">
            <?php 
           
            if(isset($_REQUEST['search']))
            {
             $vhname=$_REQUEST['search'];
            }
             else 
             {
               $vhname="";
              }
              $q="SELECT tblvehicles.id, tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,
              tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1
              from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand
              WHERE VehiclesTitle LIKE '%{$vhname}%' OR BrandName LIKE '%{$vhname}%'";

               $result = mysqli_query($dbc,$q);

            while ($row=mysqli_fetch_array($result))
            {
                    echo "<li class='list-group-item list-group-item-action'><a class='d-block' href='car_details.php?CAR_ID=".$row['id']."'>".$row['VehiclesTitle']." ".$row['BrandName']."</a></li>";
            }
          
            
            
            ?>
          
        </ul>
          </div>

        
      </div>
    </div>
  </nav>
  <?php require_once('requires/user_registerSubmit.php');?>

  <?php require_once('requires/adminModel.php'); ?>

  <script>



// $(document).ready(function() {
//   $("#searchdata").hide();
//   $("#searchField").focus(function(){
//     $("#searchdata").show();
//   });
   
//   $("#searchField").blur(function(){
//     $("#searchdata").hide();
//   });
//    $("#searchSubmit").click(function(){
//     $("#searchdata").show();
//    });
  

// });


// keyup(function(){
//     event.preventDefault();
    
//         $.ajax({
//             type: 'POST',
//             url: 'head.php',
//             data: $('form').serialize(),
//             success: function(data) {
//                 // alert(data);
//                 $("#errorMsg").html(data).show().delay(3000).fadeOut('slow');
//                 $("#modelfade").delay(3500).fadeOut('slow');
//             } 
//         });
//     });

</script>
