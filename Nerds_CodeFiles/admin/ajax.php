<?php

require('mysqli_connect.php');


$id = $_POST['del_id'];


		$query="DELETE from tblvehicles WHERE id=$id";
		$exec= mysqli_query($conn,$query);

		if(isset($exec)) {
			echo "YES";
		 } else {
			echo "NO";
		 }
		 
?>