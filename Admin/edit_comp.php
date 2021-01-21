<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header('location:login.php');
}

$id = $_GET['id'];
if (isset($_GET['id'])) {
    $query = "select * from competition where comp_id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result); //mysqli_fetch_row()
} else {
    header('location:view_comp.php');
}

if (isset($_POST['compUpdate'])) {
    $title = $_POST['compTitle'];
    $description = $_POST['compDesc'];
    $start_date = $_POST['comp_S_D'];
    $end_date = $_POST['comp_E_D'];
    $duration = $_POST['compDuration'];
    $prize = $_POST['compPrize'];
    $query1 = "update competition set comp_title = '$title', comp_description = '$description', comp_startDate = '$start_date', comp_endDate = '$end_date', comp_duration = '$duration', comp_prize = '$prize'  where comp_id = '$id'";
    $result1 = mysqli_query($conn, $query1);
    if ($result1) {
        header('location:view_comp.php');
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
                        <h2 class="">Competition Update Form </h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">

                            <form method="POST">

                                <div class="form-group">
                                    <label>Competition Title</label>
                                    <input type="text" class="form-control" required name="compTitle" value="<?php echo "$row[1]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Competition Description</label>
                                    <input type="text" class="form-control" required name="compDesc" value="<?php echo "$row[2]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Competition Start Date</label>
                                    <input type="date" class="form-control" required name="comp_S_D" value="<?php echo "$row[3]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Competition End Date</label>
                                    <input type="date" class="form-control" required name="comp_E_D" value="<?php echo "$row[4]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Competition Duration</label>
                                    <input type="text" class="form-control" required name="compDuration" value="<?php echo "$row[5]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Competition Prize</label>
                                    <input type="text" class="form-control" required name="compPrize" value="<?php echo "$row[6]"; ?>">
                                </div>

                                <input class="btn btn-success btn-flat m-b-30 m-t-30" type="submit" name="compUpdate" value="Update">
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