<?php

// echo "hi";
require('mysqli_connect.php');

// include('../db_inc.php');
// $music_number = "POST['del_id']";
// echo '$music_number';
// $id= $_POST['id'];
$id = $_POST['del_id'];
// $qry = "DELETE FROM music WHERE msuic_id ='$music_number'";
// $result=mysqli_query($qry);

		$query="DELETE from tblvehicles WHERE id=$id";
		$exec= mysqli_query($conn,$query);

		if(isset($exec)) {
			echo "YES";
		 } else {
			echo "NO";
		 }
		 

// 		$music_number = $_POST['del_id'];
// //echo $music_number;
// $qry = "DELETE FROM music WHERE msuic_id ='$music_number'";
// $result=mysql_query($qry);
// if(isset($result)) {
//    echo "YES";
// } else {
//    echo "NO";
// }
	// if(isset($_GET['id'])){
	// echo	$id= $_GET['id'];
	// 	// delete_data($conn, $id);
	// }

	// function delete_data($conn, $id){

   
	// 	$query="DELETE from tblvehicles WHERE id=$id";
	// 	$exec= mysqli_query($conn,$query);
	// 	if($exec){
	// 	  echo "Data was deleted successfully";
	// 	}else{
	// 		echo "not";
	// 	}
	// }
	// $sql = "DELETE FROM `tblvehicles` WHERE id=$id";
	// if (mysqli_query($conn, $sql)) {
	// 	echo json_encode(array("statusCode"=>200));
	// } 
	// else {
	// 	echo json_encode(array("statusCode"=>201));
	// }
	// mysqli_close($conn);
?>