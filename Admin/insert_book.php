<?php
    include "../connection.php";


    $query = "select * from category";
    $result = mysqli_query($conn,$query);

    if(isset($_POST['btnSubmit']))
    {
      $name=$_POST['book_name'];
      $title=$_POST['book_title'];
      $Catid=$_POST['cat_id'];
      $author=$_POST['book_author'];
      $price=$_POST['book_price'];
      $edition=$_POST['book_edition'];
      $image=$_FILES['book_image']['name'];  //file name with extension
      $target='images/'.basename($image); //folder jahan file upload krni h 
      $pdf=$_FILES['book_pdf']['name'];  //file name with extension
      $dtarget='documents/'.basename($pdf); //folder jahan file upload krni h 
      // $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
      // if($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif')
      // {
          if(!move_uploaded_file($_FILES['book_image']['tmp_name'],$target))
          {
              echo "Image not uploaded";
          }else if(!move_uploaded_file($_FILES['book_pdf']['tmp_name'],$dtarget))
          {
            echo "PDF not uploaded";
          }else{
              
              $query="insert into books(book_name,book_title,cat_id,book_image,book_author,book_price,book_edition,book_pdf) values('$name','$title','$Catid','$author','$price','$edition','$image','$pdf')";
              $result=mysqli_query($conn,$query);
              if($result)
              {
                echo "<script>alert('Record  Inrserted');</script>";
                  header("location: view_book.php");
              }else{
                  echo "<script>alert('Record Not Inrserted');</script>";
              }
          }
    }

    include "includes/header.php";
?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
         
<div class="card card-primary">
<div class="card-header">
                <h2 class="">Books Form </h2>
              </div>

              <form method="POST"enctype="multipart/form-data">
              <div class="card-body">
                  <div class="form-group">
                     <div class="form-group" >
                        <label>Name</label>
                        <input type="text" class="form-control" required name="book_name" >
                     </div>
                     <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" required name="book_title" >
                     </div>
                     <div class="form-group">
                        <label>Book Category</label>
                        <br>
                        <select name="cat_id">
                            <?php
                                while($row = mysqli_fetch_array($result))
                                {
                            ?>
                            <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
                            <?php
                                }
                            ?>
                        </select>
                     </div>
                   
                     <div class="form-group">
                        <label>Book Author</label>
                        <input type="text" class="form-control" required name="book_author" >
                     </div>
                     <div class="form-group">
                        <label>Book Price</label>
                        <input type="text" class="form-control" required name="book_price" >
                     </div>
                     <div class="form-group">
                        <label>Book Edition</label>
                        <input type="text" class="form-control" required name="book_edition" >
                     </div>
                     <div class="form-group form-check"  class="col-sm-4 col-md-6">
                     <label>Image Upload</label></br>
                     <input type="file" name="book_image" >
                     </div>
                     <div class="form-group form-check"  class="col-sm-4 col-md-6">
                     <label>PDF Upload</label></br>
                        <input type="file" name="book_pdf"> 
                     </div>     
                     <input class="btn btn-success  m-b-30 m-t-30" type="submit" name="btnSubmit" value="Insert">
                     <br><br>
                     <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Back to Home </a>
                    </div>
                  </div>
                </form>
          </div>
               </div>
            </div>
         </div>
      </div>
</section>

<?php
    include "includes/footer.php";
  ?>