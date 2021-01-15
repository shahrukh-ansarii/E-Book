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
                                       <th>comp_id</th>
                                       <th>comp_title</th>
                                       <th>comp_description</th>
                                       <th>comp_startDate</th>
                                       <th>comp_endDate</th>
                                       <th>comp_duration</th>
                                       <th>comp_prize</th>
                                       <th>operation</th> 
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
                                        <td><a href="<?php echo'comp_edit.php?id='.$row['comp_id']; ?>"><button class="badge badge-complete" >
                                        <i class="far fa-edit"></i></button></a>
                                        <a href="product.php">product</a>
                                        <a href="<?php echo'comp_delete.php?id='.$row['comp_id']; ?>"><button class="badge badge-pending" ><i class="fas fa-trash"></i></button></a></td>
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
    </section>
    <!-- /.content -->
  </div>

        <?php
    include "includes/footer.php";
  ?>