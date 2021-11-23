<?php

// echo "gagan";

    $usernameErr = $passwordErr = "";
    $username = $password = "";
    $usernamevalid=$passwordvalid=false;

    require_once('mysqli_connect.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


      if (empty($_POST["loginusername"])) {
        // echo "gagan1";

        $usernameErr = "username is required";
      } else {
         $username = $_POST["loginusername"];

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
       


       $query = "SELECT `id`, `username`, `password` FROM `users` WHERE `username` = '$username' and `password` = '$password'";
        $result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
        if(mysqli_num_rows($result) == 1){

            session_start();
    
            $_SESSION['username']= $username;
            $_SESSION['password']= $password;
            //session_start();
//if(isset($_SESSION['username'])) { 
            // print_r($_SESSION);
            // header("location: index.php");
            echo   "<span class='alert alert-success' style='width: 100%;float: left;text-align: center'>You have logged in successfully! </span>";
        
        }else{
          //  $_SESSION['login']= false;
            echo   "<span class='alert alert-danger' style='width: 100%;float: left;text-align: center'>invalid login information </span>";

        }

        mysqli_close($dbc);

      }


    }


function test_input($data){
//     $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
    return $data;
}




?>