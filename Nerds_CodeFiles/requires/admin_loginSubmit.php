<?php

// echo "gagan";

    
    require_once('mysqli_connect.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

         $username = $_POST["admin_username"];
         $password = $_POST["admin_password"];     


    $query = "select * from admin where UserName = '$username' and Password = '$password'";
    $result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    if(mysqli_num_rows($result) == 1){
        session_start();

        $_SESSION['admin_username']= $username;
            $_SESSION['password']= $password;

     echo "<script type='text/javascript'>window.location.href = 'admin/car_detail.php'; </script>";
    
    }else{
        echo   "<span class='alert alert-danger' style='width: 100%;float: left;text-align: center'>invalid login information </span>";

    }
        mysqli_close($dbc);

      }


    






?>
