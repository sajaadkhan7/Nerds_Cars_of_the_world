<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content p-2">

            <div class="btn-group" role="group">
                <button style="background-color:#4ACDE8;" class="btn btncolor btn mt-auto me-1" id="loginbtn"
                    onclick="showlogin()">login</button>
                <button class="btn btncolor mt-auto" id="registerbtn" onclick="showregister()">Register</button>
            </div>
            <div id="loginform">
                <div data-aos='fade-right' data-aos-delay="0" data-aos-duration="1000" class="contactus">
                 
                    <form id="userloginform" action="user_loginSubmit.php" method="POST">
                        <div class="pt-2"><label for="username">USERNAME</label>
                            <input type="text" id="username" name="loginusername" placeholder="Your username.."
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
                    
                    <form class="pt-2" id="userRegisterform" action="user_registerSubmit.php" method="POST">
                        <div><label for="username">USERNAME</label>
                            <input type="text" id="username" name="username" placeholder="Your username.." required>
                            <span class="error" id="usernameerror"><?php echo $usernameErr;?></span>
                        </div>

                        <div> <label for="Email">Email</label>
                            <input type="email" id="Email" onkeyup="emailvalid()" name="email" placeholder="Email..."
                                required>
                            <span class="error" id="emailerror"><?php echo $emailErr;?></span>
                        </div>

                        <div> <label for="password">PASSWORD</label>
                            <input type="text" id="password" name="password" placeholder="Password" required>
                            <span class="error" id="passworderror"><?php echo $passwordErr;?></span>
                        </div>

                        <div class="button-modal" style="padding-top: 10px;">
                            

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


    $(document).ready(function () {

        $("#registerform").click(function () {
            $("#loginform").hide();
        });
        $("#loginform").click(function () {
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


    $("#login").click(function (event) {
        // using this page stop being refreshing 
        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: './requires/user_loginSubmit.php',
            data: $('form').serialize(),
            success: function (data) {
                alert(data);
            }
        });
    });



    $("#Register").click(function (event) {
        // using this page stop being refreshing 
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: './requires/user_registerSubmit.php',
            data: $('form').serialize(),
            success: function (data) {
                alert(data);
            }
        });
    });
</script>