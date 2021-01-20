<?php
   
    include "header.php";
    include "connection.php";
    $query = "select * from city2";
    $result = mysqli_query($conn,$query);
    
    if(isset($_POST['submit']))
    {
      $name=$_POST['cusName'];
      $email=$_POST['cusEmail'];
      $password=$_POST['cusPass'];
      $address=$_POST['cusAddress'];
      $city=$_POST['cusCity'];
      $contact=$_POST['cusContact'];


      $cityquery = "select city_id from city2 where city_name = '$city'";
      $cityresult = mysqli_query($conn, $cityquery);
      $cityrow = mysqli_fetch_array($cityresult);
     $mycityId = $cityrow[0];
    
              $query1 = "insert into customer2 (cus_name, cus_email, cus_password, cus_address, city_id, cus_contact) 
              values ('$name','$email','$password','$address','$mycityId','$contact')";
              $result1 = mysqli_query($conn,$query1);
              if($result1)
              {
                header('location:index.php');
                //   echo "<script>alert('inserted!')</script>";
              }
                else
                {
                    echo "<script>alert('Not Registered');</script>";
                }
    }

?>   
     
        
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
                            <option><?php echo $row[1];?></option>
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