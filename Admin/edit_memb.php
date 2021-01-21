<?php

include "../connection.php";

$id = $_GET['id'];
if (isset($_GET['id'])) {
    $query = "select * from membership where memb_id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result); //mysqli_fetch_row()
} else {
    header('location:view_memb.php');
}

if (isset($_POST['membUpdate'])) {
    $name = $_POST['membName'];
    $discount = $_POST['membDiscount'];
    $query1 = "update membership set memb_name = '$name', memb_discount = '$discount'  where memb_id = '$id'";
    $result1 = mysqli_query($conn, $query1);
    if ($result1) {
        header('location:view_memb.php');
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
                        <h2 class="">Membership Update Form </h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">

                            <form method="POST">

                                <div class="form-group">
                                    <label>Membership Name</label>
                                    <input type="text" class="form-control" required name="membName" value="<?php echo "$row[1]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Membership Discount</label>
                                    <input type="text" class="form-control" required name="membDiscount" value="<?php echo "$row[2]"; ?>">
                                </div>
                                <input class="btn btn-success btn-flat m-b-30 m-t-30" type="submit" name="membUpdate" value="Update">
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