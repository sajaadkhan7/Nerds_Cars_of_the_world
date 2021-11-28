<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" id="modelfade">
        <span style="color:red" id="errorMsgLogin"></span>
        <span style="color:red" id="errorregister"></span>

        <!-- Modal content-->
        <div class="modal-content p-2">
            <!-- <button type="button" class="close" data-bs-dismiss="modal">&times;</button> -->
            <div class="btn-group" role="group">
                <button style="background-color:#4ACDE8;" class="btn btncolor btn mt-auto me-1" id="loginbtn"
                    onclick="showlogin()">login</button>
                <button class="btn btncolor mt-auto" id="registerbtn" onclick="showregister()">Register</button>
            </div>
            <div id="loginform">
                <div data-aos='fade-right' data-aos-delay="0" data-aos-duration="1000" class="contactus">
                    <!-- <div class="modal-header">
                            <h4 class="modal-title">Login</h4>
                        </div> -->
                    <!-- <form id="userloginform" action="<?php //echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="POST"> -->
                    <form id="userloginform" action="user_loginSubmit.php" method="POST">
                        <div class="pt-2"><label for="username">Email</label>
                            <input type="text" id="username" name="loginEmail" placeholder="Your Email..."
                                required>
                            <span class="error" id="usernameerror"><?php echo $usernameErr;?></span>
                        </div>

                        <div> <label for="password">PASSWORD</label>
                            <input type="text" id="password" name="loginpassword" placeholder="Password" required>
                            <span class="error" id="passworderror"><?php echo $passwordErr;?></span>
                        </div>

                        <div class="button-modal" style="padding-top: 10px;">
                            <button class="btn btncolor mt-auto" id="login" onclick="showlogin()"
                                value="Submit">login</button>
                            <button type="button" class="btn btn-danger float-end"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- <div class="modal-content" > -->
            <div id="registerform">

                <div class="contactus">
                    <!-- <div class="modal-header"> -->
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <!-- <h4 class="modal-title">Register</h4>
                        </div> -->
                    <!-- <form id="userRegisterform" action="<?php // echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="POST"> -->
                    <form class="pt-2" id="userRegisterform" action="user_registerSubmit.php" method="POST">
                        <div><label for="username">USERNAME</label>
                            <input type="text" id="usernameregister" name="username" placeholder="Your username.."
                                required>
                            <span class="error" id="usernameerror"><?php echo $usernameErr;?></span>
                        </div>

                        <div> <label for="Email">Email</label>
                            <input type="email" id="Emailregister"  name="email"
                                placeholder="Email..." required>
                            <span class="error" id="emailerror"><?php echo $emailErr;?></span>
                        </div>

                        <div> <label for="password">PASSWORD</label>
                            <input type="text" id="passwordregister" name="password" placeholder="Password" required>
                            <span class="error" id="passworderror"><?php echo $passwordErr;?></span>
                        </div>

                        <div class="button-modal" style="padding-top: 10px;">
                            <!-- <button class="btn btncolor mt-auto" value="Submit">submit</button> -->

                            <button class="btn btncolor mt-auto" id="Register" onclick="showregister()"
                                value="Submit">Register</button>
                            <button type="button" class="btn btn-danger float-end"
                                data-bs-dismiss="modal">Close</button>
                        </div>

                    </form>
                </div>
            </div>





        </div>
    </div>
</div>


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
    $("#loginbtn").css({
        "background-color": "#4ACDE8"
    });
    $("#registerbtn").css({
        "background-color": "#0091AD"
    });

}


function showregister() {
    $("#loginform").hide();
    $("#registerform").show();
    $("#registerbtn").css({
        "background-color": "#4ACDE8"
    });
    $("#loginbtn").css({
        "background-color": "#0091AD"
    });

}


$("#login").click(function(event) {
    // using this page stop being refreshing 
    var usernamelogin = document.getElementById("username").value;
    var passwordlogin = document.getElementById("password").value;
 
   
    //email validation
    // if (usernamelogin == '') {
    //   //  alert(usernamelogin);
    //     $("#errorMsgLogin").html(
    //         "<span class='alert alert-danger' style='width: 100%;float: left;text-align: center'>Please enter username</span>"
    //         ).show().delay(3000).fadeOut('slow');
    //     $("#usernamelogin").focus();
    //     return;
    // } else {
    //     $("#errorMsgLogin").html("");
    // }

    if (usernamelogin == '') {
        $("#errorMsgLogin").html(
            "<span class='alert alert-danger' style='width: 100%;float: left;text-align: center'>Please enter email</span>"
            ).show().delay(3000).fadeOut('slow');
        $("#username").focus();
        return;
    } else {
        $("#errorMsgLogin").html("");
    }

    if (!ValidateEmail(usernamelogin)) {
        $("#errorregister").html(
            "<span class='alert alert-danger' style='width: 100%;float: left;text-align: center'>Please enter valid email </span>"
            ).show().delay(3000).fadeOut('slow');
        // $("#EmailRegister").focus();
        return;
      // alert("Invalid email address.");
        }
        else {
            // alert("Valid email address.");
                    $("#errorMsgLogin").html("");

        }

//email validation

  //  return false;
    if (passwordlogin == '') {
       // alert(passwordlogin);
        $("#errorMsgLogin").html(
            "<span class='alert alert-danger' style='width: 100%;float: left;text-align: center'>Please enter password</span>"
            ).show().delay(3000).fadeOut('slow');
        $("#passwordlogin").focus();
        return;
    } else {
        $("#errorMsgLogin").html("");
        event.preventDefault();
       // return false;
// alert("hg");
        $.ajax({
            type: 'POST',
            url: './requires/user_loginSubmit.php',
            data: $('form').serialize(),
            success: function(data) {
                // alert(data);
                $("#errorMsgLogin").html(data).show().delay(3000).fadeOut('slow');
              //  $("#modelfade").delay(1000).fadeOut('slow');
              location.reload();
            } 
        });
    }
});


function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };

$("#Register").click(function(event) {
    // using this page stop being refreshing 

    var usernameRegister = document.getElementById("usernameregister").value;
    var passwordRegister = document.getElementById("passwordregister").value;
    var EmailRegister = document.getElementById("Emailregister").value;

    if (usernameRegister == '') {
        $("#errorregister").html(
            "<span class='alert alert-danger' style='width: 100%;float: left;text-align: center'>Please enter username</span>"
            ).show().delay(3000).fadeOut('slow');
        $("#usernameregister").focus();
        return;
    } else {
        $("#errorregister").html("");
    }
    // var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 

   

    if (EmailRegister == '') {
        $("#errorregister").html(
            "<span class='alert alert-danger' style='width: 100%;float: left;text-align: center'>Please enter email</span>"
            ).show().delay(3000).fadeOut('slow');
        $("#EmailRegister").focus();
        return;
    } else {
        $("#errorregister").html("");
    }

    if (!ValidateEmail($("#Emailregister").val())) {
        $("#errorregister").html(
            "<span class='alert alert-danger' style='width: 100%;float: left;text-align: center'>Please enter valid email </span>"
            ).show().delay(3000).fadeOut('slow');
        // $("#EmailRegister").focus();
        return;
      // alert("Invalid email address.");
        }
        else {
            // alert("Valid email address.");
                    $("#errorregister").html("");

        }


    if (passwordRegister == '') {
        $("#errorregister").html(
            "<span class='alert alert-danger' style='width: 100%;float: left;text-align: center'>Please enter password</span>"
            ).show().delay(3000).fadeOut('slow');
        $("#passwordregister").focus();
        return;
    } else {
        $("#errorregister").html("");

        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: './requires/user_registerSubmit.php',
            data: $('form').serialize(),
            success: function(data) {
                $("#errorregister").html(
                    "<span class='alert alert-success' style='width: 100%;float: left;text-align: center'>" +
                    data + " </span>").show().delay(3000).fadeOut('slow');

               
                showlogin();

            }

        });

    }
});
</script>
