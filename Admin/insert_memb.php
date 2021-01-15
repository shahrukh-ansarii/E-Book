<?php
    include "connection.php";

    if(isset($_POST['submit']))
    {
        $name = $_POST['MembName'];
        $discount = $_POST['MembDiscount'];

        $query = "Insert into membership (memb_name, memb_discount) VALUES ('$name', '$discount')";

        $result = mysqli_query($conn,$query);
        if($result)
        {
            //echo "<script>alert('Record Inserted');</script>";
             header('location:view_memb.php');
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
                         <center><h1>Membership Form</h1></center>
                         <br>
                         <label>Membership Name</label>
                          <input type="text" class="form-control" required name="MembName" >
                         <label>Membership discount</label>
                        <input type="text" class="form-control" required name="MembDiscount" >
                     </div>
                     <input class="btn btn-success btn-flat m-b-30 m-t-30" type="submit" name="submit" value="Insert">
                     <br><br>
                     <a href="view_memb.php"><i class="fa fa-home" aria-hidden="true"></i> Back to Home </a>
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