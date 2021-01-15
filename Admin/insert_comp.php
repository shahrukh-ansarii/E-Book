<?php
    include "../connection.php";


    if(isset($_POST['submit']))
    {
         $CompTitle = $_POST['CompTitle'];
         $CompDescription = $_POST['CompDesc'];
         $CompStartDate = $_POST['CompStartDate'];
         $CompEndDate = $_POST['CompEndDate'];
         $CompDuration = $_POST['CompDur'];
         $CompPrize = $_POST['CompPri'];
      

        $query = "Insert into competition (comp_title, comp_description, comp_startDate, comp_endDate, comp_duration, comp_prize) VALUES ('$CompTitle', '$CompDescription', '$CompStartDate', '$CompEndDate', '$CompDuration', '$CompPrize')";

        $result = mysqli_query($conn,$query);
        if($result)
        {
            //echo "<script>alert('Record Inserted');</script>";
             header('location:view_comp.php');
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

<form method="post">
          <div class="card-body">
                  <div class="form-group">
                         <center><h1>Competition Form</h1></center>
                         <br>
                         <label>Competition Title</label>
                            <input type="text" class="form-control" required name="CompTitle" >
                            <br>
                            <label>Competition Description</label>
                            <input type="text" class="form-control" required name="CompDesc" >
                            <br>
                            <label>Competition StartDate0</label>
                            <input type="date" class="form-control" required name="CompStartDate" >
                            <br>
                            <label>Competition EndDate</label>
                            <input type="date" class="form-control" required name="CompEndDate" >
                            <br>
                            <label>Competition Duration</label>
                            <input type="text" class="form-control" required name="CompDur" >
                            <br>
                            <label>Competition Prize</label>
                            <input type="text" class="form-control" required name="CompPri" >
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