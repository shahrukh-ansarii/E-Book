<?php
    session_start();

    $id=$_GET['id'];
    include 'code/connection.php';
    $productQuery = "Select * from books where cat_id='$id'";
    $productQueryResult = mysqli_query($conn, $productQuery);

    include "header.php";
?>       
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="product-list.php">Products</a></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <?php
                                while ($row = mysqli_fetch_assoc($productQueryResult)) {
                            ?>
                            <div class="col-md-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#"><?php echo $row['book_name'] ?></a>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                        <img src="<?php echo "admin/images/".$row['book_image']; ?>" width="200px" height="290px" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>Rs.</span><?php echo $row['book_price'] ?></h3>
                                        <a class="btn" href="<?php echo 'addToCart.php?id='.$row['book_id']?>"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                        
                        <!-- Pagination Start -->
                        <!-- <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div> -->
                        <!-- Pagination Start -->
                    </div>           
                </div>
            </div>
        </div>
        <!-- Product List End -->  
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->
        
<?php
    include "footer.php";
?>