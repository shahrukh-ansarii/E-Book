<?php
session_start();
include 'connection.php';
$dateNow=date("Y-m-d");
//echo $dateNow;
$total=$_SESSION['total'];
$query="Insert into orders(o_totalPrice,o_date,cus_id) values ('$total','$dateNow',1)";
$result=mysqli_query($conn,$query);
if($result)
{
    $getOrderId="select MAX(o_id) from orders";
    $getOrderResult=mysqli_query($conn,$getOrderId);
    $OrderId=mysqli_fetch_row($getOrderResult);
    $oid=$OrderId[0];

    $pro_query="select * from books where book_id IN (".implode(',',$_SESSION['cart']).")";
    $pro_result=mysqli_query($conn,$pro_query);
    $index=0;
    while($row=mysqli_fetch_assoc($pro_result))
    {
        $name=$row['book_name'];
        $price=$row['book_price'];
        $id=$row['book_id'];
        $quantity=$_SESSION['qty_array'][$index];
        $in_query="INSERT INTO `invoice`(`o_id`, `book_id`, `book_name`, `book_price`, `book_quantity`) VALUES ('$oid','$id','$name','$price','$quantity')";
        $in_result=mysqli_query($conn,$in_query);
        // if($in_result)
        // {
        //     echo "Order Placed";
        // }else{
        //     echo "Error: ".mysqli_error($conn);
        // }
        $index++;
    }
    unset($_SESSION['cart']);
    unset($_SESSION['qty_array']);
    unset($_SESSION['total']);
    echo"<script>alert('Order Hasn been Recieved')</script>";
 echo "<script>window.location.href='index.php';</script>";
}else{
    echo "Error: ".mysqli_error($conn);
}


?>