<?php
session_start();

if(in_array($_GET['id'],$_SESSION['cart'])) //check the item is already in array or not
{
    $_SESSION['message']="Item already exist";
}else{
    array_push($_SESSION['cart'],$_GET['id']);
    $_SESSION['message']="Item added in the cart";
}
header('location:product-list.php');

?>