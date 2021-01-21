    <?php
    include "header.php";
    ?>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active">Cart</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->
   
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                
                    <div class="col-lg-12">
                        <div class="cart-page-inner">
                        <form method="post" action="savecart.php">
                            <div class="table-responsive">

                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Book Image </th>
                                            <th>Book Name </th>
                                            <th>Book Price </th>
                                            <th>Book Quantity </th>
                                            <th>Total Price</th>
                                            <th>Action </th>
                                        </tr>

                                    </thead>
                                    <tbody class="align-middle">
                                        <?php
                                        $total = 0;
                                        include 'connection.php';
                                        if (!empty($_SESSION['cart'])) //2 5 7  (2,5,7)  $_SESSION['cart'][0]  implode(',',$_SESSION['cart'])
                                        {
                                            if (!isset($_SESSION['qty_array'])) {
                                                $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
                                            }
                                            $query = "select * from books where book_id IN (" . implode(',', $_SESSION['cart']) . ")";
                                            $result = mysqli_query($conn, $query);
                                            $index = 0;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                <tr>
                                                    <td>
                                                        <div class="img">
                                                            <a href="#"><img src="<?php echo "admin/images/" . $row['book_image']; ?>" alt="Image"></a>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p><?php echo $row['book_name']; ?></p>
                                                    </td>
                                                    <td><?php echo $row['book_price']; ?></td>
                                                    <td>
                                                        <div class="qty">
                                                            <!-- <button class="btn-minus" ><i class="fa fa-minus"></i></button> -->

                                                            <input type="hidden" name="indexes[]" value="<?php echo $index; ?>" />
                                                            <input type="number" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty_<?php echo $index; ?>" />
                                                            <!-- <button class="btn-plus" ><i class="fa fa-plus"></i></button> -->
                                                        </div>
                                                    </td>

                                                    <td><?php echo number_format($_SESSION['qty_array'][$index] * $row['book_price'], 2); ?></td>
                                                    <td><a href="delete_cart.php?book_id=<?php echo $row['book_id'] ?>&index=<?php echo $index; ?>"><span class="fa fa-trash"></span></a></td>
                                                    <?php $total += $_SESSION['qty_array'][$index]*$row['book_price']; ?>
                
                                                </tr>


                                        <?php
                                                $index++;
                                            }
                                        }
                                        ?>


                                    </tbody>
                                </table>
                                <?php echo "Subtotal &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Rs :".$total; $_SESSION['total']=$total;?>
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-btn">
                                            <button type="submit" name="btnSave">Update Cart</button>
                                            <a href="checkout.php" class="btn">Checkout</a>
                <a href="product-list.php" class="btn ">Continue Shopping</a>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Cart End -->
   
   
    <?php
    include "footer.php";
    ?>