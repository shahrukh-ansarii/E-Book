<?php
    include "../connection.php";

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $query = "delete from invoice where invoice_id='$id'";
        $result = mysqli_query($conn,$query);
        if($result)
        {
            // echo "<script>alert('Record Deleted');</script>";
            header('location:view_invoice.php');
        }
        else
        {
            echo "<script>alert('Record Not Deleted');</script>";
        }
    }
    else
    {
        header('location:view_invoice.php');
    }
?>