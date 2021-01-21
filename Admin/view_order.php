<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header('location:login.php');
}

include "../connection.php";
     $query = "select * from orders";
     $result = mysqli_query($conn,$query);

     include "includes/header.php";
?>
        
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h2>Order List</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered table-hover">
                                 <thead>
                                    <tr>
                                       <th>Order ID</th>
                                       <th>Order Total Price</th>
                                       <th>Order Date</th>
                                       <th>Customer ID</th>
                                       <th>Operation</th> 
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['o_id'];?></td>
                                        <td><?php echo $row['o_totalPrice'];?></td>
                                        <td><?php echo $row['o_date'];?></td>
                                        <td><?php echo $row['cus_id'];?></td>
                                        <td><a href="<?php echo'delete_order.php?id='.$row['cus_id']; ?>"><button ><i class="fas fa-trash-alt"></i></button></a></td>
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