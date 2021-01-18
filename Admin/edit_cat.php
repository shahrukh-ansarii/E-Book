<?php

include "../connection.php";

$id = $_GET['id'];
if(isset($_GET['id']))
{
        $query = "select * from category where cat_id = '$id'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result); //mysqli_fetch_row()
}
else
{
    header('location:index.php');
}

if(isset($_POST['catUpdate']))
{
    $name = $_POST['cat_name'];
    $description = $_POST['cat_description'];
    $image=$_FILES['cat_image']['name']; 
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
                        <h2 class="">Category Update Form </h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">

                            <form method="POST" enctype="multipart/form-data" >

                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" class="form-control"  name="cat_name" value="<?php echo "$row[1]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Category Description</label>
                                    <input type="text" class="form-control"  name="cat_description" value="<?php echo "$row[2]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Category Image</label>
                                    <input type="file" class="form-control"  name="cat_image" value="<?php echo "images/".$row[3]; ?>">
                                </div>
                                <input class="btn btn-success btn-flat m-b-30 m-t-30" type="submit" name="catUpdate" value="Update">
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