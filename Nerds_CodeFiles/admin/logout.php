<?php
 require('../requires/mysqli_connect.php');  
 //$base_url = $base_url." ";
 session_start();
session_destroy();
//  echo "<script>window.location.href='".$base_url."admin.php'</script>";
echo "<script>window.location.href='../index.php'</script>";
 
//  exit();
?>
