<?php

include "../connection.php";

$id = $_GET['id'];
if(isset($_GET['id']))
{
        $query = "select * from customer where cus_id = '$id'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result); //mysqli_fetch_row()
}
else
{
    header('location:index.php');
}

if(isset($_POST['cusUpdate']))
{
    $name = $_POST['cusName'];
    $email = $_POST['cusEmail'];
    $password = $_POST['cusPass'];
    $address = $_POST['cusAddress'];
    $city = $_POST['cusCity'];
    $contact = $_POST['cusContact'];
    $query1 = "update customer set cus_name='$name', cus_email='$email', cus_password='$password', cus_address='$address', city_id='$city',cus_contact='$contact'  where cus_id='$id' ";
    $result1 = mysqli_query($conn,$query1);
    if($result1)
    {
        header('location:view_cus.php');
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
                        <h2 class="">Customer Update Form </h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">

                            <form method="POST">

                                <div class="form-group">
                                    <label>Customer Name</label>
                                    <input type="text" class="form-control" required name="cusName" value="<?php echo "$row[1]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Customer Email</label>
                                    <input type="email" class="form-control" required name="cusEmail" value="<?php echo "$row[2]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Customer Password</label>
                                    <input type="text" class="form-control" required name="cusPass" value="<?php echo "$row[3]"; ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label>Customer Address</label>
                                    <input type="text" class="form-control" required name="cusAddress" value="<?php echo "$row[4]"; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Customer City</label>
                                    <input type="text" class="form-control" required name="cusCity" value="<?php echo "$row[5]"; ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label>Customer Contact</label>
                                    <input type="text" class="form-control" required name="cusContact" value="<?php echo "$row[6]"; ?>">
                                </div>

                                <input class="btn btn-success btn-flat m-b-30 m-t-30" type="submit" name="cusUpdate" value="Update">
                                <br><br>
                                <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Back to Home </a>
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