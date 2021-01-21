<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header('location:login.php');
}

$cquery = "select * from category";
$cresult = mysqli_query($conn,$cquery);


if(isset($_POST['bookUpdate']))
{
    $id=$_POST['book_id'];
    $name = $_POST['book_name'];
    $title = $_POST['book_title'];
    $category = $_POST['cat_id'];
    $author= $_POST['book_author'];
    $price= $_POST['book_price'];
    $edition= $_POST['book_edition'];
    
    $image= $_POST['imgname'];
    $pdf= $_POST['pdfname'];
    if($_FILES['book_image']['name']!="")
     {
         //echo "<script>alert('".$_FILES['cat_image']['name']."')</script>";
        $image=$_FILES['book_image']['name']; 
        $target='images/'.basename($image);
        if(!move_uploaded_file($_FILES['book_image']['tmp_name'],$target))
        {
        echo "<script>alert('image Not Uploaded')</script>";
        }
     }
     if($_FILES['book_pdf']['name']!="")
     {
        //echo "<script>alert('".$_FILES['cat_image']['name']."')</script>";
        $pdf=$_FILES['book_pdf']['name']; 
        $target='documents/'.basename($pdf);
        if(!move_uploaded_file($_FILES['book_pdf']['tmp_name'],$target))
        {
        echo "<script>alert('pdf Not Uploaded')</script>";
        }
     }
    
     
        $query1 = "update books set book_name='$name', book_title='$title', book_image='$image', book_author='$author', book_price='$price', cat_id='$category',book_edition='$edition', book_pdf='$pdf' where book_id='$id' ";
        $result1 = mysqli_query($conn,$query1);
        if($result1)
        {
            header('location:view_book.php');
        }
        else
        {
            echo "<script>alert('Record Not Updated')</script>";
        }
    
}
    $id = $_GET['id'];
    if(isset($_GET['id']))
    {
            $query = "select * from books where book_id = '$id'";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result); //mysqli_fetch_row()
    }
    else
    {
        header('location:view_book.php');
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
                        <h2 class="">Update Book Form </h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">

                            <form method="POST" enctype="multipart/form-data" >
                                <input type="hidden" name="book_id"  value="<?php echo $row[0]; ?>" />
                                <div class="form-group">
                                    <label>Book Name</label>
                                    <input type="text" class="form-control"  name="book_name" value="<?php echo $row[1]; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Book Title</label>
                                    <input type="text" class="form-control"  name="book_title" value="<?php echo $row[2]; ?>">
                                </div>
                                <div class="form-group">
                                <label>Book Category</label>
                                    <br>
                                    <select name="cat_id" class="form-control">
                                        <?php
                                            while($crow = mysqli_fetch_array($cresult))
                                            {
                                                if($row[3]==$crow[0])
                                                {
                                        ?>
                                        <option value="<?php echo $crow[0];?>" selected><?php echo $crow[1];?></option>
                                        <?php
                                            }else{
                                        ?>
                                         <option value="<?php echo $crow[0];?>" ><?php echo $crow[1];?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                <input type="hidden" name="imgname" value="<?php echo $row[4]; ?>">
                                    <label>Book Image</label>
                                    <input type="file" class="form-control"  name="book_image" >
                                </div>
                                <div class="form-group">
                                    <label>Book Author</label>
                                    <input type="text" class="form-control"  name="book_author" value="<?php echo $row[5]; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Book Price</label>
                                    <input type="text" class="form-control"  name="book_price" value="<?php echo $row[6]; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Book Edition</label>
                                    <input type="text" class="form-control"  name="book_edition" value="<?php echo $row[7]; ?>">
                                </div>
                                <div class="form-group">
                                <input type="hidden" name="pdfname" value="<?php echo $row[8]; ?>">
                                    <label>Book pdf</label>
                                    <input type="file" class="form-control"  name="book_pdf" >
                                </div>
                                <input class="btn btn-success btn-flat m-b-30 m-t-30" type="submit" name="bookUpdate" value="Update">
                                <br><br>
                                <a href="categorie.php"><i class="fa fa-home" aria-hidden="true"></i> Back to Home </a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "includes/footer.php";
?>