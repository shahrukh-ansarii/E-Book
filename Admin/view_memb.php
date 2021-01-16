<?php

include "includes/header.php";
include "../connection.php";
     $query = "select * from membership";
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
              <table class="table ">
                     <thead>
                        <tr>
                           <th>Member Id</th>
                           <th>Member Name</th>
                           <th>Member Discount</th>
                           <th>Operation</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                        ?>
                        <tr>
                              <td><?php echo $row['memb_id'];?></td>
                              <td><?php echo $row['memb_name'];?></td>
                              <td><?php echo $row['memb_discount'];?></td>
                              <td><a href="<?php echo'edit_memb.php?id='.$row['memb_id']; ?>"><button >
                              <i class="fas fa-pen"></i></button>
                              <a href="<?php echo'delete_memb.php?id='.$row['memb_id']; ?>"><button  ><i class="fas fa-trash-alt"></i></button></td>
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
         <a href="insert_memb.php"><button type="button" class="btn btn-success btn-md">Add <i class="nav-icon fa fa-plus"></i></button></a>
         </div>
    </section>
    <!-- /.content -->
  </div>

        <?php
    include "includes/footer.php";
  ?>