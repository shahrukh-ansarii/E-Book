<?php
    include "connection.php";

    if(isset($_POST['citySubmit']))
    {
        $name = $_POST['cityName'];

        $query = "Insert into city (city_name) VALUES ('$name')";

        $result = mysqli_query($conn,$query);
        if($result)
        {
            echo "<script>alert('Record Inserted');</script>";
            // header('location:categorie.php');
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
      <title>City Page</title>
   </head>
   
   <body class="bg-dark">
        <form  style="font-family: 'Texturina', serif;" method="POST">
            <div class="form-group">
                <center><h1>City Form</h1></center>
                <br>
            <label>City Name</label>
            <input type="text" class="form-control" required name="cityName" >
            </div>
            <input class="btn btn-success btn-flat m-b-30 m-t-30" type="submit" name="citySubmit" value="Insert City">
    </form>
   </body>
</html>