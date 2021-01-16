<?php

include "includes/header.php";
include "../connection.php";
     $query = "select * from competition";
     $result = mysqli_query($conn,$query);
?>


       
        
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Competition List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered table-hover">
                                 <thead>
                                    <tr>
                                       <th>Competition ID</th>
                                       <th>Competition Title</th>
                                       <th>Competition Description</th>
                                       <th>Competition Start Date</th>
                                       <th>Competition End Date</th>
                                       <th>Competition Duration</th>
                                       <th>Competition Prize</th>
                                       <th>Operation</th> 
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['comp_id'];?></td>
                                        <td><?php echo $row['comp_title'];?></td>
                                        <td><?php echo $row['comp_description'];?></td>
                                        <td><?php echo $row['comp_startDate'];?></td>
                                        <td><?php echo $row['comp_endDate'];?></td>
                                        <td><?php echo $row['comp_duration'];?></td>
                                        <td><?php echo $row['comp_prize'];?></td>
                                        <td><a href="<?php echo'edit_comp.php?id='.$row['comp_id']; ?>"><button >
                                        <i class="fas fa-pen"></i></button></a>
                                        <a href="<?php echo'delete_comp.php?id='.$row['comp_id']; ?>"><button ><i class="fas fa-trash-alt"></i></button></a></td>
                                    </tr>
                                        <?php
                                            }
                                        ?>
                                 </tbody>
                              </table>
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
         <div>
         <a href="insert_comp.php"><button type="button" class="btn btn-success btn-md">Add <i class="nav-icon fa fa-plus"></i> </button></a>
         </div>
    </section>
    <!-- /.content -->
  </div>

        <?php
    include "includes/footer.php";
  ?>