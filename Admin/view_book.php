<?php
     include "../connection.php";
     $query = "select * from books join category on books.cat_id = category.cat_id";
     $result = mysqli_query($conn,$query);
     include "includes/header.php";
?>


       
        
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h2 >Books List</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table style="text-align:center;"class="table table-bordered table-hover">
                                 <thead>
                                    <tr>    
                                       <th>Book ID</th>
                                       <th>Book Name</th>
                                       <th>Book Title</th>
                                       <th>Book Category</th>
                                       <th>Book Image</th>
                                       <th>Book Author</th>
                                       <th>Book Price</th>
                                       <th>Book Edition</th>
                                       <th>Book Pdf</th>
                                       <th>Operation</th> 
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['book_id'];?></td>
                                        <td><?php echo $row['book_name'];?></td>
                                        <td><?php echo $row['book_title'];?></td>
                                        <td><?php echo $row['cat_name'];?></td>
                                        <td><img src="<?php echo "images/".$row['book_image']; ?>" width="120px" height="150px"/></td>
                                        <td><?php echo $row['book_author'];?></td>
                                        <td><?php echo $row['book_price'];?></td>
                                        <td><?php echo $row['book_edition'];?></td>
                                        <td><?php echo $row['book_pdf'];?></td>
                                        <td><a href="<?php echo'edit_book.php?id='.$row['book_id']; ?>"><button class="btn btn-warning" ><i class="fas fa-pen"></i></button></a><br><br>
                                        <a href="<?php echo'delete_book.php?id='.$row['book_id']; ?>"><button class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button></a></td>
                                    </tr>
                                        <?php
                                            }
                                        ?>
                                 </tbody>
                              </table>
                              <br>
                                 <div>
                                    <a href="insert_book.php"><button type="button" class="btn btn-success btn-md">Add <i class="nav-icon fa fa-plus"></i> </button></a>
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