<?php
$id=$_GET['id'];

    include "connection.php";
$q="select * from competition where comp_id='$id'";
$r=mysqli_query($conn,$q);
$row1=mysqli_fetch_array($r);
    if(isset($_POST['submit']))
    {
        $CompTitle = $_POST['CompTitle'];
        $CompDescription = $_POST['CompDesc'];
        $CompStartDate = $_POST['CompStartDate'];
        $CompEndDate = $_POST['CompEndDate'];
        $CompDuration = $_POST['CompDur'];
        $CompPrize = $_POST['CompPri'];

        $query = "update competition set comp_title = '$CompTitle', comp_description='$CompDescription', comp_startDate='$CompStartDate', comp_endDate='$CompEndDate', comp_duration='$CompDuration', comp_prize='$CompPrize' where comp_id = '$id'";

        $result = mysqli_query($conn,$query);
        if($result)
        {
            //echo "<script>alert('Record Inserted');</script>";
             header('location:index.php');
        }
        else
        {
            echo "<script>alert('Record Not Inrserted');</script>";

        }
    }
?>


<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Texturina:wght@200&display=swap" rel="stylesheet">
   </head>
   <body class="bg-dark">
      <div class="sufee-login d-flex align-content-center flex-wrap">
         <div class="container">
            <div class="login-content">
               <div class="login-form mt-150">
                  <form  style="font-family: 'Texturina', serif;" method="POST">
                     <div class="form-group">
                         <center><h1>Competition Form</h1></center>
                         <br>
                         <label> Competition Title</label>
                          <input type="text" class="form-control" required name="CompTitle" value="<?php echo $row1[1];?>" >
                         <label>Competition Description</label>
                        <input type="text" class="form-control" required name="CompDesc" value="<?php echo $row1[2];?>">
                        <label>Competition StartDate</label>
                        <input type="text" class="form-control" required name="CompStartDate" value="<?php echo $row1[3];?>">
                        <label>Competition EndDate</label>
                        <input type="text" class="form-control" required name="CompEndDate" value="<?php echo $row1[4];?>">
                        <label>Competition Duration</label>
                        <input type="text" class="form-control" required name="CompDur" value="<?php echo $row1[5];?>">
                        <label>Competition Prize</label>
                        <input type="text" class="form-control" required name="CompPri" value="<?php echo $row1[6];?>">
                     </div>
                     <input class="btn btn-success btn-flat m-b-30 m-t-30" type="submit" name="submit" value="Update">
                     <br><br>
                     <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Back to Home </a>
					</form>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>