<?php

include "includes/header.php";
include "../connection.php";
     $query = "select * from customer";
     $result = mysqli_query($conn,$query);
?>


       
        
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h2>Customer List</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered table-hover">
                                 <thead>
                                    <tr>
                                       <th>Customer ID</th>
                                       <th>Customer Name</th>
                                       <th>Customer Email</th>
                                       <th>Customer Password</th>
                                       <th>Customer City</th>
                                       <th>Customer Address</th>
                                       <th>Customer Contact</th>
                                       <th>Operation</th> 
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['cus_id'];?></td>
                                        <td><?php echo $row['cus_name'];?></td>
                                        <td><?php echo $row['cus_email'];?></td>
                                        <td><?php echo $row['cus_password'];?></td>
                                        <td><?php echo $row['city_id'];?></td>
                                        <td><?php echo $row['cus_address'];?></td>
                                        <td><?php echo $row['cus_contact'];?></td>
                                        <td><a href="<?php echo'edit_cus.php?id='.$row['cus_id']; ?>"><button >
                                        <i class="fas fa-pen"></i></button></a>
                                        <a href="<?php echo'delete_cus.php?id='.$row['cus_id']; ?>"><button ><i class="fas fa-trash-alt"></i></button></a></td>
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