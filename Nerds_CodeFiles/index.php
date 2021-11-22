<!doctype html>
<html lang="en">
<?php
// session_start();
// if(isset($_SESSION['login']) && $_SESSION['login'] == true){

//     echo "Welcome to your account!";

// }else{


//     header("location: index.php");

// }

?>
<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/modals/">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    .text-slider-items,
    .typed-cursor {
        display: none;
    }
    @media (min-width: 576px) {
        .txtsize {
            font-size: 1rem;
        }
    }
    .modal-header {
        display: block !important;
    }
    .modal-button {
        display: flex;
        justify-content: space-evenly;
    }
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
   
    </style>
    <title>Cars Of The World:Homepage</title>
    <?php require('requires/user_registerSubmit.php');?>
    <?php require('requires/head.php'); ?>
    <!-- your content here... -->
    <header id="overlay" style="position: relative; z-index:-1;">
        <img data-aos='zoom-out-down' data-aos-delay="300" data-aos-duration="1000"
            src="assets/images/banner-image-2021.jpg" style="width:100%;" alt="book store cover image">
        <div class="row" id="overlay-text">
            <div class="col-sm-12 my-auto" style="margin-left: -50px">
                <div class="banner_content text-white">
                    <h1 class="fw-md-bolder" data-aos='zoom-in-down' data-aos-delay="550" data-aos-duration="1000"
                        style="letter-spacing: normal;">Rent the car of your choice.</h1>
                    <p class="text-slider-items">Choose from various brands that suits you the best. </p>
                    <p class="text-slider"></p>
                    <a data-aos='zoom-out-down' data-aos-delay="750" data-aos-duration="1000" href="#cars"
                        class="btn btncolor mt-auto text-white text-uppercase"><b> Find Car</b><span
                            class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </header>
    <?php // require('requires/user_loginSubmit.php'); ?>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content p-2" >
                <!-- <button type="button" class="close" data-bs-dismiss="modal">&times;</button> -->
                <div class="btn-group" role="group">
                    <button style="background-color:#4ACDE8;" class="btn btncolor btn mt-auto me-1" id="loginbtn" onclick="showlogin()">login</button>
                <button class="btn btncolor mt-auto" id="registerbtn" onclick="showregister()">Register</button>
                </div>
                <div id="loginform">
                    <div data-aos='fade-right' data-aos-delay="0" data-aos-duration="1000" class="contactus">
                        <!-- <div class="modal-header">
                            <h4 class="modal-title">Login</h4>
                        </div> -->
                        <!-- <form id="userloginform" action="<?php //echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="POST"> -->
                        <form id="userloginform" action="user_loginSubmit.php" method="POST">
                            <div class="pt-2"><label  for="username">USERNAME</label>
                                <input type="text" id="username" name="loginusername" placeholder="Your username.." required>
                                <span class="error" id="usernameerror"><?php echo $usernameErr;?></span>
                            </div>

                            <div> <label for="password">PASSWORD</label>
                                <input type="text" id="password" name="loginpassword" placeholder="Password" required>
                                <span class="error" id="passworderror"><?php echo $passwordErr;?></span>
                            </div>

                            <div class="button-modal" style="padding-top: 10px;">
                                <button class="btn btncolor mt-auto" id="login" onclick="showlogin()"  value="Submit">login</button>
                                <button type="button" class="btn btn-danger float-end" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>

                </div>

                <!-- <div class="modal-content" > -->
                <div id="registerform">

                    <div  class="contactus">
                        <!-- <div class="modal-header"> -->
                            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                            <!-- <h4 class="modal-title">Register</h4>
                        </div> -->
                        <!-- <form id="userRegisterform" action="<?php // echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="POST"> -->
                        <form class="pt-2" id="userRegisterform"   action="user_registerSubmit.php" method="POST">
                            <div><label for="username">USERNAME</label>
                                <input type="text" id="username" name="username" placeholder="Your username.." required>
                                <span class="error" id="usernameerror"><?php echo $usernameErr;?></span>
                            </div>

                            <div> <label for="Email">Email</label>
                                <input type="email" id="Email" onkeyup="emailvalid()" name="email"
                                    placeholder="Email..." required>
                                <span class="error" id="emailerror"><?php echo $emailErr;?></span>
                            </div>

                            <div> <label for="password">PASSWORD</label>
                                <input type="text" id="password" name="password" placeholder="Password" required>
                                <span class="error" id="passworderror"><?php echo $passwordErr;?></span>
                            </div>

                            <div class="button-modal" style="padding-top: 10px;">
                            <!-- <button class="btn btncolor mt-auto" value="Submit">submit</button> -->

                                <button class="btn btncolor mt-auto" id="Register" onclick="showregister()"
                                    value="Submit">Register</button>
                                    <button type="button" class="btn btn-danger float-end" data-bs-dismiss="modal">Close</button>
                            </div>
                           
                        </form>
                    </div>
                </div>
                
               
                   
              

            </div>
        </div>
    </div>
    <!-- Section-->
    <?php include('requires/homepage_main.php');?>

    <?php require('requires/footer.php'); ?>
    </body>

</html>

<script>
$("#loginform").show();
$("#registerform").hide();


$(document).ready(function() {

    $("#registerform").click(function() {
        $("#loginform").hide();
    });
    $("#loginform").click(function() {
        $("#loginform").show();
    });
});


function showlogin() {
    $("#loginform").show();
    $("#registerform").hide();
    $("#loginbtn").css({"background-color":"#4ACDE8"});
    $("#registerbtn").css({"background-color":"#0091AD"});

}


function showregister() {
    $("#loginform").hide();
    $("#registerform").show();
    $("#registerbtn").css({"background-color":"#4ACDE8"});
    $("#loginbtn").css({"background-color":"#0091AD"});

}


$("#login").click(function (event){
        // using this page stop being refreshing 
        event.preventDefault();

          $.ajax({
            type: 'POST',
            url: './requires/user_loginSubmit.php',
            data: $('form').serialize(),
            success: function (data) {
              alert('form was submitted'+ data);
            }
          });
        });
      


  $("#Register").click(function (event){
        // using this page stop being refreshing 
        event.preventDefault();

          $.ajax({
            type: 'POST',
            url: './requires/user_registerSubmit.php',
            data: $('form').serialize(),
            success: function (data) {
             alert('form was submitted'+ data);
            }
          });
        });
      
</script>
