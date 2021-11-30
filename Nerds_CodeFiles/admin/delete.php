<?php
include_once 'mysqli_connect.php';

$sql = "DELETE FROM tblvehicles WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($dbc, $sql)) {
echo "Record deleted successfully";
echo "<script type='text/javascript'>window.location.href = 'car_detail.php'; </script>";

} else {
echo "Error deleting record: " . mysqli_error($dbc);
}
mysqli_close($dbc);
?>