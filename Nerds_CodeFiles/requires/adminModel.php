


  <div class="modal fade" id="myModaladmin" role="dialog">
    <div class="modal-dialog">
        <span style="color:red" id="error"></span>
       <!-- Modal content-->
        <div class="modal-content p-2">

          <h4>Admin Login</h4>
                    <span style="color:red" id="errorMsg"></span>

                <div data-aos='fade-right' data-aos-delay="0" data-aos-duration="1000" class="contactus">
                    <form id="adminloginform" action="admin_loginSubmit.php" method="POST">
                        <div class="pt-2"><label for="username">USERNAME</label>
                            <input type="text" id="admin_username" name="admin_username" placeholder="Your username.."  required>
                            <span class="error" id="usernameerror"><?php echo $usernameErr;?></span>

                        </div>
                        <div> <label for="password">PASSWORD</label>
                            <input type="text" id="admin_password" name="admin_password" placeholder="Password" required>
                            <span class="error" id="passworderror"><?php echo $passwordErr;?></span>

                        </div>
                        <div class="button-modal" style="padding-top: 10px;">
                            <button class="btn btncolor mt-auto" id="adminlogin"  value="Submit">login</button>
                            <button type="button" class="btn btn-danger float-end"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
<script>
  
$("#adminlogin").click(function(event) {
    // using this page stop being refreshing 
    var admin_username = document.getElementById("admin_username").value;
    var admin_password = document.getElementById("admin_password").value;
    // 
    // 
    if (admin_username == '') {
      //  alert(usernamelogin);
        $("#errorMsg").html(
            "<span class='alert alert-danger' style='width: 100%;float: left;text-align: center'>Please enter username</span>"
            ).show().delay(3000).fadeOut('slow');
        $("#admin_username").focus();
        return;
    } else {
        $("#errorMsg").html("");
    }
  //  return false;
    if (admin_password == '') {
       // alert(passwordlogin);
        $("#errorMsg").html(
            "<span class='alert alert-danger' style='width: 100%;float: left;text-align: center'>Please enter password</span>"
            ).show().delay(3000).fadeOut('slow');
        $("#admin_password").focus();
        return;
    } else {
        $("#errorMsg").html("");
        event.preventDefault();
       // return false;
// alert("hg");
        $.ajax({
            type: 'POST',
            url: './requires/admin_loginSubmit.php',
            data: $('form').serialize(),
            success: function(data) {
                // alert(data);
                $("#errorMsg").html(data).show().delay(3000).fadeOut('slow');
                $("#modelfade").delay(3500).fadeOut('slow');
            } 
        });
    }
});

</script>