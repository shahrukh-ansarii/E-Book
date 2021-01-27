<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header('location:login.php');
}

include "../connection.php";
     $query = "select * from invoice";
     $result = mysqli_query($conn,$query);

     include "includes/header.php";
?>
        
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h2>Invoice List</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table style="text-align:center;" class="table table-bordered table-hover">
                                 <thead>
                                    <tr>
                                       <th>Invoice ID</th>
                                       <th>Order ID</th>
                                       <th>Book ID</th>
                                       <th>Book Name</th>
                                       <th>Book Price</th> 
                                       <th>Book Quantity</th> 
                                       <th>Operations</th> 
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['invoice_id'];?></td>
                                        <td><?php echo $row['o_id'];?></td>
                                        <td><?php echo $row['book_id'];?></td>
                                        <td><?php echo $row['book_name'];?></td>
                                        <td><?php echo $row['book_price'];?></td>
                                        <td><?php echo $row['book_quantity'];?></td>
                                        <td><a href="<?php echo'delete_invoice.php?id='.$row['invoice_id']; ?>"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></a></td>
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