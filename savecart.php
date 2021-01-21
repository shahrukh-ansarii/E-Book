<?php
session_start();
if(isset($_POST['btnSave']))
{
    foreach($_POST['indexes'] as $key)
    {
        $_SESSION['qty_array'][$key]=$_POST['qty_'.$key];
    }
    $_SESSION['message']="Cart Updated Successfully";
    header('location:cart.php');
}
?>