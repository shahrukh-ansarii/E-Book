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
        $query = "delete from books where book_id='$id'";
        $result = mysqli_query($conn,$query);
        if($result)
        {
            // echo "<script>alert('Record Deleted');</script>";
            header('location:view_book.php');
        }
        else
        {
            echo "<script>alert('Record Not Deleted');</script>";
            echo "Error ".mysqli_error($conn);
        }
    }
    else
    {
        header('location:view_book.php');
    }
?>