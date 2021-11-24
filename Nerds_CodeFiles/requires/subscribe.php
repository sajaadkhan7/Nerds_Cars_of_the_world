<?php 
 require_once('mysqli_connect.php');
    
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['subscriberemail'];
    if(!empty($_POST['subscriberemail'])){  
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        $sql="INSERT INTO tblsubscribers VALUES(null,?,null)";
        if($stmt=mysqli_prepare($dbc,$sql)){
            mysqli_stmt_bind_param($stmt,"s",$email);
            mysqli_stmt_execute($stmt);

        echo "<script> alert('You Have subscribed to our newsletter.');
        window.location.href='../index.php';
        </script>";

        }
        else{
            "<script> alert('something went wrong');</script>";
        }
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);

      } else {
       echo "<script>alert('invalid email!');</script>";
      }

    }

}

?>