<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header('location:login.php');
}

include "includes/header.php";
include "../connection.php";
     $query = "select * from city2";
     $result = mysqli_query($conn,$query);
?>


       
        
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h2>City List</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered table-hover">
                                 <thead>
                                    <tr>
                                       <th>City ID</th>
                                       <th>City Name</th>
                                       <th>Operation</th> 
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['city_id'];?></td>
                                        <td><?php echo $row['city_name'];?></td>
                                        <td>
                                            <a href="<?php echo'edit_city.php?id='.$row['city_id']; ?>"><button  ><i class="fas fa-pen"></i></button>
                                            <a href="<?php echo'delete_city.php?id='.$row['city_id']; ?>"><button ><i class="fas fa-trash-alt"></i></button>
                                            </td>
                                    </tr>
                                        <?php
                                            }
                                        ?>
                                 </tbody>
                              </table>
                              <br>
                              <div>
                                  <a href="insert_city.php"><button type="button" class="btn btn-success btn-md"> Add <i class="nav-icon fa fa-plus"></i></button></a>
                              </div>
                              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
         
    </section>
    <!-- /.content -->
  </div>

        <?php
    include "includes/footer.php";
  ?>