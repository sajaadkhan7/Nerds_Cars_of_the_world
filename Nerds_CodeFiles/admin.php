<?php
 require('requires/mysqli_connect.php');  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


$username = mysqli_real_escape_string($dbc,$_POST['username']);
$password = mysqli_real_escape_string($dbc, $_POST['password']);

    // $username = $_POST['username'];
    // $password = $_POST['password'];
    $query = "select * from admin where UserName = '$username' and Password = '$password'";
    $result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    if(mysqli_num_rows($result) == 1){
        session_start();

        $_SESSION['login']= true;
        header("location: http://localhost/Gaganpreet_kaur_Project/Nerds_Cars_of_the_world/admin/car_detail.php");

        // $currentpage=$_SERVER['REQUEST_URI'];
        // echo "<script type='text/javascript'> document.location = '$currentpage/admin/car_detail.php' ; </script>";
    }else{
        $_SESSION['login']= false;
        echo "invalid login information";
    }
  }
?>


<!doctype html>
<html lang="en">


<?php require('requires/header.php');  ?>
  
</body>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Admin</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Admin login</p>

      <form action="admin.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
      
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
<?php require('requires/footer.php'); ?>

</html>