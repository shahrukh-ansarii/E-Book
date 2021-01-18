<?php

include "../connection.php";

$id = $_GET['id'];
if(isset($_GET['id']))
{
        $query = "select * from books where book_id = '$id'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result); //mysqli_fetch_row()
}
else
{
    header('location:index.php');
}

if(isset($_POST['bookUpdate']))
{
    $name = $_POST['bookANme'];
    $title = $_POST['bookTitle'];
    $category = $_POST['bookCat'];
    $image=$_FILES['bookImg']['name']; 
    $author = $_POST['bookAuthor'];
    $price = $_POST['bookPrice'];
    $edition = $_POST['bookEdition'];
    $pdf = $_POST['bookPdf'];
    $query1 = "update category set cat_name='$name', cat_description='$description', cat_image='$image' where cat_id='$id' ";
    $result1 = mysqli_query($conn,$query1);
    if($result1)
    {
        header('location:view_cat.php');
    }
    else
    {
        echo "<script>alert('Record Not Updated')</script>";
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
                        <h2 class="">Book Update Form </h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">

                            <form method="POST" enctype="multipart/form-data" >

                                <div class="form-group">
                                    <label>Book Name</label>
                                    <input type="text" class="form-control"  name="bookName" value="<?php echo "$row[1]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Book Title</label>
                                    <input type="text" class="form-control"  name="bookTitle" value="<?php echo "$row[2]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Book Category</label>
                                    <input type="text" class="form-control"  name="bookCat" value="<?php echo "$row[3]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Book Image</label>
                                    <input type="file" class="form-control"  name="bookImg" value="<?php echo "images/".$row[4]; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Book Author</label>
                                    <input type="text" class="form-control"  name="bookAuthor" value="<?php echo "$row[5]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Book Price</label>
                                    <input type="text" class="form-control"  name="bookPrice" value="<?php echo "$row[6]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Book Edition</label>
                                    <input type="text" class="form-control"  name="bookEdition" value="<?php echo "$row[7]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Book Pdf</label>
                                    <input type="file" class="form-control"  name="bookPdf" value="<?php echo "$row[8]"; ?>">
                                </div>
                                <input class="btn btn-success  m-b-30 m-t-30" type="submit" name="bookUpdate" value="Update">
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