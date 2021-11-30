<?php

// echo "gagan";

    $usernameErr = $passwordErr = "";
    $email = $password = "";
    $usernamevalid=$passwordvalid=false;

    require_once('mysqli_connect.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


      if (empty($_POST["loginEmail"])) {
        // echo "gagan1";

        $usernameErr = "Email is required";
      } else {
         $email = $_POST["loginEmail"];

        $usernamevalid=true;
      }
    
      if (empty($_POST["loginpassword"])) {
        // echo "gagan2";

        $passwordErr = "password is required";
      } else {
        $password = $_POST["loginpassword"];     

              $passwordvalid=true;
      }
    

      if($usernamevalid && $passwordvalid){
       


       $query = "SELECT `id`, `email`, `username`,`password` FROM `users` WHERE `email` = '$email' and `password` = '$password'";
        $result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
        if(mysqli_num_rows($result) == 1){
            $r=mysqli_fetch_array($result);
           
            session_start();
            $_SESSION['username']=$r['username'];
            $_SESSION['user_id']= $r['id']; 
            $_SESSION['email']= $email;
            $_SESSION['password']= $password;

            echo   "<span class='alert alert-success' style='width: 100%;float: left;text-align: center'>You have logged in successfully! </span>
            <script>location.reload();</script>";

        
        }else{
          //  $_SESSION['login']= false;
            echo   "<span class='alert alert-danger' style='width: 100%;float: left;text-align: center'>invalid login information </span>";

        }

        mysqli_close($dbc);

      }


    }


function test_input($data){
    $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
    return $data;
}




?>