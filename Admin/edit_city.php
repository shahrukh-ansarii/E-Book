<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header('location:login.php');
}

$id = $_GET['id'];
if (isset($_GET['id'])) {
    $query = "select * from city2 where city_id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result); //mysqli_fetch_row()
} else {
    header('location:view_city.php');
}

if (isset($_POST['cityUpdate'])) {
    $name = $_POST['catName'];
    $query1 = "update city set city_name = '$name' where city_id = '$id'";
    $result1 = mysqli_query($conn, $query1);
    if ($result1) {
        header('location:view_city.php');
    } else {
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
                        <h2 class="">City Update Form </h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">

                            <form method="POST">

                                <div class="form-group">
                                    <label>City name</label>
                                    <input type="text" class="form-control" required name="catName" value="<?php echo "$row[1]"; ?>">
                                </div>

                                <input class="btn btn-success btn-flat m-b-30 m-t-30" type="submit" name="cityUpdate" value="Update categorie">
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