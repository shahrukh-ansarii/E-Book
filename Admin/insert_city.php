<?php
    include "../connection.php";


    if(isset($_POST['submit']))
    {
         $name = $_POST['cityName'];
      

        $query = "Insert into city (city_name) VALUES ('$name')";

        $result = mysqli_query($conn,$query);
        if($result)
        {
            //echo "<script>alert('Record Inserted');</script>";
             header('location:view_city.php');
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
                <h2 class="">City Form </h2>
              </div>

<form method="post">
          <div class="card-body">
                  <div class="form-group">
                         
                         <br>
                         <label>City Name</label>
                            <input type="text" class="form-control" required name="cityName" >
                            <br>
                     </div>
                     <input class="btn btn-success btn-flat m-b-30 m-t-30" type="submit" name="submit" value="Insert">
                     <br><br>
                     <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Back to Home </a>
          </div>
               </div>
               </form>
            </div>
         </div>
      </div>
</section>

<?php
    include "includes/footer.php";
  ?>