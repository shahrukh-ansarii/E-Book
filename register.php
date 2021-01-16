<?php
   
    include "header.php";
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
    
              $query1 = "insert into customer (cus_name, cus_email, cus_password, cus_address, city_id, cus_contact) 
              values ('$name','$email','$password','$address','$city','$contact')";
              $result1 = mysqli_query($conn,$query1);
              if($result1)
              {
                  header('location:index.php');
              }
                else
                {
                    echo "<script>alert('Record Not Inserted');</script>";
                }
    }

?>   
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End --> 
        
        <!-- Login Start -->
        <div class="login">
            <div class="container-fluid">  
            <div class="register-form">
            <center><h2>Register</h2></center>
            <form  method="POST" >
                     <div class="form-group">
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
                        <textarea  class="form-control" name="cusAddress" required rows="3" cols="10">
                       
                        </textarea>
                     </div>
                     <div class="form-group">
                        <label> Customer City</label>
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
                     <input class="btn btn-success btn-flat m-b-30 m-t-30" type="submit" name="submit" value="Sign In">
                     <br><br>
                     <a href="login.php"><i class="fa fa-home" aria-hidden="true"></i> Go To Login </a>
					</form>

            </div>
        </div>              
    </div>
</div>
</div>
<!-- Login End -->
        
<?php
    include "footer.php";
?>