<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header('location:login.php');
}
    include "includes/header.php";

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $query = "delete from category where cat_id='$id'";
        $result = mysqli_query($conn,$query);
        if($result)
        {
            // echo "<script>alert('Record Deleted');</script>";
            header('location:view_cat.php');
        }
        else
        {
            echo "<script>alert('Record Not Deleted');</script>";
        }
    }
    else
    {
        header('location:view_cat.php');
    }
?>