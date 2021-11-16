<?php
require('mysqli_connect.php');
$query = "SELECT * FROM `tblvehicles` ";
$result = mysqli_query($dbc, $query); 


?>


<!DOCTYPE html>
<html lang="en">

<?php require('header.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
                                    <table id="example2"  class="table table-bordered table-hover">
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
                                                <td >    <button>   <span class="trash" data-id="<?php echo $row['id']; ?>" >delete</span> </button></td >
                                                <td><a href="delete.php?id=<?php echo $row["id"]; ?>" title='Delete Record'><i class='material-icons'><i class='material-icons'></i></i></a></td>
                                                <!-- <a href="#" id="<?php echo $row['id']; ?>" class="trash" >del</a> -->
                                                       <!-- <td >  <a class="delete_car" id = "delete" onclick="deletecar(<?php echo $row['id']; ?>);" > <span class='delete' data-id='<?= $id; ?>'>Delete</span></a>  </td > -->
                                             <!-- <td > <a class="delete_car" id = "delete" onclick="deletecar(<?php echo $row['id']; ?>);"> Delete </a></td> -->
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
//       $(document).on('click', '.delete', function(){
//   	var id = $(this).data('id');
//      alert(id);
//   	// $clicked_btn = $(this);
//   	$.ajax({
//   	  url: 'ajax.php',
//   	  type: 'POST',
//   	  data: {
//     	'delete': 1,
//     	'id': id,
//       },
//       success: function(response){
//         // remove the deleted comment
//         // $clicked_btn.parent().remove();
//         // $('#name').val('');
//         // $('#comment').val('');
//                 //    alert("deleteid");

//       }
//   	});
//   });

// $(function(){
//         $('.trash').click(function(){
//             // var del_id= $(this).attr('id');
//             var del_id = $(this).data('id');
//             alert(del_id);
//             // var ele = $(this).parent().parent();
//             // alert(ele);
//             $.ajax({
//     type:'POST',
//     url:'ajax.php',
//     data:{del_id:del_id},
//     // print_r(data);
//     success: function(data){

//          if(data=="YES"){
//              $ele.fadeOut().remove();
//          }else{
//              alert("can't delete the row");
//          }
//     }

//      })
// })
        
//     });


        </script>
</body>

</html>