<?php
session_start();

$key = array_search($_GET['book_id'],$_SESSION['cart']);  
unset($_SESSION['cart'][$key]);

$index=$_GET['index'];
unset($_SESSION['qty_array'][$index]);
$_SESSION['qty_array']=array_values($_SESSION['qty_array']);

$_SESSION['message']="Item removed";
header('location:cart.php');
?>