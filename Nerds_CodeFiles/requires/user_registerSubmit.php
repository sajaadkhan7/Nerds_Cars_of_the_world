<?php

$usernameErr = $emailErr = $passwordErr = "";
$username = $email = $password= "";
$passwordvalid=$emailvalid=$usernamevalid=false;

require_once('mysqli_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

 
  if (empty($_POST["username"])) {
    $usernameErr = "username is required";
  } else {
    $username = $_POST["username"];
    $usernamevalid=true;
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
      else{
          $emailvalid=true;
      }
  }

  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = $_POST["password"];     
          $passwordvalid=true;
  }


  if($usernamevalid && $emailvalid && $passwordvalid){

    $sql="INSERT INTO users VALUES(null,?,?,?)";
    if($stmt=mysqli_prepare($dbc,$sql)){
        mysqli_stmt_bind_param($stmt,"sss",$username,$email,$password);
        mysqli_stmt_execute($stmt);

    echo "You are registered successfully.";
    }
    else{
        "<script> alert('Error! ".mysqli_error($dbc)."');</script>";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($dbc);

  }

  function test_input($data){
    return $data;
  }

}



?>