<?php
    include "connection.php";
    $query = "select * from city";
    $result = mysqli_query($conn,$query);
    if(isset($_POST['submit']))
    {
      $name=$_POST['cusName'];
      $email=$_POST['cusEmail'];
      $password=$_POST['cusPass'];
      $address=$_POST['cusAddress'];
      $city=$_POST['cusCity'];
      $contact=$_POST['cusContact'];

              $query="insert into customer (cus_name,cus_email,cus_password,cus_address,city_id,cus_contact) values('$name','$email','$password','$address','$city','$contact')";
              $result=mysqli_query($conn,$query);
              if($result)
              {
                  header('location:index.php');
              }else{
                  echo "<script>alert('Record Not Inserted');</script>";
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
                  <form  style="font-family: 'Texturina', serif;" method="POST"  enctype="multipart/form-data">
                     <div class="form-group">
                         <center><h1>Add Coustomer</h1></center>
                         <br>
                        <label>Coustomer Name</label>
                        <input type="text" class="form-control" required name="cusName" >
                     </div>
                     <div class="form-group">
                         <label>Coustomer Email</label>
                        <input type="email" class="form-control" required name="cusEmail" >
                     </div>
                     <div class="form-group">
                         <label>Coustomer Password</label>
                        <input type="password" class="form-control" required name="cusPass" >
                     </div>
                     <div class="form-group">
                         <label>Coustomer Address</label> 
                        <textarea  class="form-control" name="cusAddress" required rows="4" cols="50">
                       
                        </textarea>
                     </div>
                     <div class="form-group">
                        <label>City</label>
                        <br>
                        <select name="cusCity">
                            <?php
                                while($row = mysqli_fetch_array($result))
                                {
                            ?>
                            <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
                            <?php
                                }
                            ?>
                        </select>
                     </div>
                     <div class="form-group">
                     <br>
                        <label>Coustomer Contact</label>
                        <input type="tel" class="form-control" required name="cusContact">
                     </div>
                     <input class="btn btn-success btn-flat m-b-30 m-t-30" type="submit" name="submit" value="submit">
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