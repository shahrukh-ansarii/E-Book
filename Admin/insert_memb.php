<?php
    include "../connection.php";

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
    
    include "includes/header.php";
?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
         
      <div class="card card-primary">
      <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
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
</section>

<?php
    include "includes/footer.php";
  ?>