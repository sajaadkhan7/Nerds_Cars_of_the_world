<?php


    $nameErr = $emailErr = $messageErr = "";
    $name = $email = $message= "";
    $emailvalid=$namevalid=$messagevalid=false;
    require('requires/mysqli_connect.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
        $namevalid=true;
      }
    
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }
          else{
              $emailvalid=true;
          }
      }
    
      if (empty($_POST["message"])) {
        $messageErr = "Message is required";
      } else {
        $message = test_input($_POST["message"]);
        $messagevalid=true;
      }

      if($namevalid && $emailvalid && $messagevalid){

        $sql="INSERT INTO contactus VALUES(null,?,?,?)";
        if($stmt=mysqli_prepare($dbc,$sql)){
            mysqli_stmt_bind_param($stmt,"sss",$name,$email,$message);
            mysqli_stmt_execute($stmt);

        echo "<script> alert('Your message is SENT');</script>";
        }
        else{
            "<script> alert('Error! ".mysqli_error($dbc)."');</script>";
        }
        mysqli_stmt_close($stmt);
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