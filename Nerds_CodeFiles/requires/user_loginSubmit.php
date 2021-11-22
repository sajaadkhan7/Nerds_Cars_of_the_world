<?php

// echo "gagan";

    $usernameErr = $passwordErr = "";
    $username = $password = "";
    $usernamevalid=$passwordvalid=false;

    require('mysqli_connect.php');
    
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
    
            $_SESSION['login']= true;
            // header("location: index.php");
            echo "You have logged in successfully!";
    
        
        }else{
            $_SESSION['login']= false;
            echo "invalid login information";
        }

    // $sql = "SELECT `id`, `username`, `password` FROM `users` WHERE username = $username";

    
    //     if($stmt=mysqli_prepare($dbc,$sql)){
    //         mysqli_stmt_bind_param($stmt,"sss",$username,$password);
    //         mysqli_stmt_execute($stmt);

    //     echo "<script> alert('You are logged in successfully.');</script>";
    //     }
    //     else{
    //         "<script> alert('Error! ".mysqli_error($dbc)."');</script>";
    //     }
    //     mysqli_stmt_close($stmt);
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