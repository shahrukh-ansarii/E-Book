<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header('location:login.php');
}
    include "../connection.php";
     $query = "select * from category";
     $result = mysqli_query($conn,$query);

     include "includes/header.php";
?>


       
        
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h2>Category List</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered table-hover">
                                 <thead>
                                    <tr>
                                       <th>Category ID</th>
                                       <th>Category Name</th>
                                       <th>Category Description</th>
                                       <th>Category image</th>
                                       <th>Operation</th> 
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['cat_id'];?></td>
                                        <td><?php echo $row['cat_name'];?></td>
                                        <td><?php echo $row['cat_description'];?></td>
                                        <td><img src="<?php echo "images/".$row['cat_image']; ?>" width="120px" height="150px"/></td>
                                        <td><a href="<?php echo'edit_cat.php?id='.$row['cat_id']; ?>"><button >
                                        <i class="fas fa-pen"></i></button></a>
                                        <a href="<?php echo'delete_cat.php?id='.$row['cat_id']; ?>"><button ><i class="fas fa-trash-alt"></i></button></a></td>
                                    </tr>
                                        <?php
                                            }
                                        ?>
                                 </tbody>
                              </table>
                              <br>
                              <div>
                                  <a href="insert_cat.php"><button type="button" class="btn btn-success btn-md"> Add <i class="nav-icon fa fa-plus"></i></button></a>
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
      <!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->
  </div>

        <?php
    include "includes/footer.php";
  ?>