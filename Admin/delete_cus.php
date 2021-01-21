<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header('location:login.php');
}

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $query = "delete from customer2 where cus_id='$id'";
        $result = mysqli_query($conn,$query);
        if($result)
        {
            // echo "<script>alert('Record Deleted');</script>";
            header('location:view_cus.php');
        }
        else
        {
            echo "<script>alert('Record Not Deleted');</script>";
        }
    }
    else
    {
        header('location:view_cus.php');
    }
?>