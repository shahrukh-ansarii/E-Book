<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header('location:login.php');
}
    include "../connection.php";
    
    
    $query = "SELECT SUM(invoice_id) FROM invoice";
    $result = mysqli_query($conn,$query);

    
    $oquery = "select * from orders";
    $oresult = mysqli_query($conn,$oquery);

    $cquery = "select * from customer2 join city2 on customer2.city_id = city2.city_id";
    $cresult = mysqli_query($conn,$cquery);

    include "includes/header.php";
?>


    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>160 </h3>

                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>

                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>

                  <p>Total Books</p>
                </div>
                <div class="icon">
                  <i class="fas fa-book"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

          <!-- ./col -->
          </div>
        </div>
        <!-- /.row (main row) -->
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
                                    while($orow = mysqli_fetch_assoc($oresult))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $orow['o_id'];?></td>
                                        <td><?php echo $orow['o_totalPrice'];?></td>
                                        <td><?php echo $orow['o_date'];?></td>
                                        <td><?php echo $orow['cus_id'];?></td>
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
     
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-warning">
              <div class="card-header">
                <h2 >Customer List</h2>
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
                                    while($crow = mysqli_fetch_assoc($cresult))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $crow['cus_id'];?></td>
                                        <td><?php echo $crow['cus_name'];?></td>
                                        <td><?php echo $crow['cus_email'];?></td>
                                        <td><?php echo $crow['cus_password'];?></td>
                                        <td><?php echo $crow['city_name'];?></td>
                                        <td><?php echo $crow['cus_address'];?></td>
                                        <td><?php echo $crow['cus_contact'];?></td>
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
      </div><!-- /.container-fluid -->
      
    </section>      

  <?php
    include "includes/footer.php";
  ?>