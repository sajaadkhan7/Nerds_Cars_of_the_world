<?php
require('mysqli_connect.php');
$query = "SELECT * FROM `tblvehicles` ";
$result = mysqli_query($dbc, $query); 


?>


<!DOCTYPE html>
<html lang="en">

<?php require('header.php'); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
      
        <!-- Main Sidebar Container -->
        <?php require('sidebar.php'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Car Details</h1>
                        </div>
                        <button> <a href="add_car.php" > ADD CAR </a></button>

                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">List of all cars with detail</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr><th>Image</th>
                                                <th>Vehicle's Title</th>
                                                <th>Vehicle's Brand</th>
                                                <th>Vehicle's Detail</th>
                                                <th>Price Per Day</th>
                                                <th>Model Year</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
 <?php
                                            
while($row = mysqli_fetch_array($result)){
  $id = $row['id'];

?>
                                            <tr>
                                                <td>   <img src='uploads/<?php echo $row['Vimage1'];  ?>' width="100" height="100">
</td>
                                                <td><?php echo $row['VehiclesTitle']; ?></td>
                                                <td><?php echo $row['VehiclesBrand']; ?></td>
                                                <td><?php echo $row['VehiclesOverview']; ?></td>
                                                <td><?php echo $row['PricePerDay']; ?></td>
                                                <td><?php echo $row['ModelYear']; ?></td>
                                                <td>   <a  href="edit_car.php?id=<?php echo $id ; ?>">  Edit</a></td>
                                             <td > <a class="delete_car" onclick="deletecar(<?php echo $row['id']; ?>);"> Delete </a></td>
                                            </tr>
                                            <?php
}
                                            ?>
                                           
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                         
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php require('footer.php'); ?>
        <!-- Page specific script -->
        <script>
            function deletecar(onclickid){
// $(".delete_car").click(function(){

var element = $(this);
// var del_id = element.attr("id");
var info = 'id=' + onclickid;
// alert(info);
if(confirm("Are you sure you want to delete this Record?")){
    $.ajax({
        type: "post",
        url: "https://localhost/Gaganpreet_kaur_Project/admin/ajax.php?"+info,
        data: info,
        success: function(){  
            alert("WWW"); 
    }
});
    // $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
    // .animate({ opacity: "hide" }, "slow");
}
return false;
// });
}
            // function deletecar(onclickid){
            //     alert("ehllo");
            //     var lnk = "https://localhost/Gaganpreet_kaur_Project/admin/ajax.php";
            // if(confirm("Are you sure you want to delete this Record?")){
            //     $.ajax
            //     ({
            //         // alert("ehllo");

            //         type:'post',
            //         url:lnk,
            //         data:{
            //             // delete_row:'delete_row',
            //             row_id:onclickid
            //         },
            //         success:function(data) {
            //             alert(onclickid);

            //                 $(onclickid).remove();
            //         }
            //     });
            // } 
            // }
//   $(document).ready(function(id) {
// 	$.ajax({
// 		url: "car_detail.php",
// 		type: "POST",
// 		cache: false,
// 		success: function(dataResult){
// 			$('#table').html(dataResult); 
// 		}
// 	});
// 	$(document).on("click", ".deletecar", function(id) { 
// // alert(id);
// 		var $ele = $(this).parent().parent();
// 		$.ajax({
// 			url: "ajax.php",
// 			type: "POST",
// 			cache: false,
// 			data:{
// 				id: $(this).attr("data-id")
// 			},
// 			success: function(dataResult){
// 				var dataResult = JSON.parse(dataResult);
// 				if(dataResult.statusCode==200){
// 					$ele.fadeOut().remove();
// 				}
// 			}
// 		});
// 	});
// });





        </script>
</body>

</html>