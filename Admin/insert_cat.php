<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header('location:login.php');
}


    if(isset($_POST['submit']))
    {
      $name=$_POST['cat_name'];
      $description=$_POST['cat_description'];
      $image=$_FILES['cat_image']['name'];  //file name with extension
      $target='images/'.basename($image); //folder jahan file upload krni h 
      // $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
      // if($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif')
      // {
          if(move_uploaded_file($_FILES['cat_image']['tmp_name'],$target))
          {
              $query="insert into category(cat_name, cat_description, cat_image) values('$name','$description','$image')";
              $result=mysqli_query($conn,$query);
              if($result)
              {
                  // echo "index.php";
                  header("location: view_cat.php");
              } 
              else
              {
                  echo "Record not inserted";
              }
          }
          else
          {
              echo "Image not uploaded";
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
                <h2 class="">Category Form </h2>
              </div>

<form method="post"  enctype="multipart/form-data">
          <div class="card-body">
                  <div class="form-group">
                            <label>Category Name</label>
                                <input type="text" class="form-control" required name="cat_name" >
                            <br>
                            <label>Category Description </label>
                                <input type="text" class="form-control" required name="cat_description" >
                            <br>
                            <label>Category Image</label>
                                <input  class="form-control" type="file" name="cat_image">
                            </div>
                     <input class="btn btn-success m-b-30 m-t-30" type="submit" name="submit" value="Insert">
                     <br><br>
                     <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Back to Home </a>
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