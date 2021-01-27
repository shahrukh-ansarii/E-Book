<?php

     include "connection.php";
     $id = $_GET['id'];
     if (isset($_GET['id'])) 
         {
     $query = "select * from books join category on books.cat_id = category.cat_id where book_id = '$id'";
     $result = mysqli_query($conn,$query);
    } 
    else 
        {
            header('location:product-list.php');
        }

        $query1 = "Select * from books ";
        $result1 = mysqli_query($conn, $query1);

        $query2 = "Select * from category";
        $result2 = mysqli_query($conn, $query2);

    include "header.php";
  
?>    
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="product-list.php">Book List</a></li>
                    <li class="breadcrumb-item active">Book Detail</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Product Detail Start -->
        <div class="product-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-detail-top">
                            <div class="row align-items-center">
                            <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <div class="col-md-6">
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                        <img src="<?php echo "admin/images/".$row['book_image']; ?>" width="360px" height="433px" alt="Product Image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-content">
                                        <div class="title"><h2>Name: <?php echo $row['book_name'] ?></h2></div>
                                        <br>
                                        <div class="title"><h2>Category: <?php echo $row['cat_name'] ?></h2></div>
                                        <a href="#"></a>
                                        <div class="price">
                                            <h4>Price:</h4>
                                            <p><?php echo $row['book_price'] ?></p>
                                        </div>
                                        <div class="price">
                                            <h4>Author:</h4>
                                            <p><?php echo $row['book_author'] ?></p>
                                        </div>
                                        <div class="price">
                                            <h4>Edition:</h4>
                                            <p><?php echo $row['book_edition'] ?></p>
                                        </div>
                                        <div class="price">
                                            <h4>PDF:</h4>
                                            <p><?php echo $row['book_pdf'] ?></p>
                                        </div>
                                        <div class="action">
                                        <a class="btn" href="<?php echo 'addToCart.php?id='.$row['book_id']?>"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            <a class="btn" href="product-list.php"><i class="fa fa-shopping-bag"></i>Continue Shopping</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        
                        <div class="row product-detail-bottom">
                            <?php
                                while ($row = mysqli_fetch_assoc($result2)) {
                            ?>
                            <div class="col-lg-12">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="description" class="container  active">
                                        <h4><?php echo $row['cat_name']; ?></h4>
                                        <p>
                                        <?php echo $row['cat_description']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                        
                        <div class="product">
                            <div class="section-header">
                                <h1>Related Products</h1>
                            </div>

                            <div class="row align-items-center product-slider product-slider-4">
                            <?php
                                while ($row = mysqli_fetch_assoc($result1)) {
                            ?>
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#"><?php echo $row['book_name']; ?></a>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="<?php echo "admin/images/".$row['book_image']; ?>" width="100" height="290px" alt="Product Image">
                                            </a>
                                            <div class="product-action">
                                                <a href="product-list.php"><i class="fas fa-shopping-bag"></i></a>
                                                <a href="<?php echo'product-detail.php?id='.$row['book_id']; ?>"><i class="fas fa-info-circle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                        <h3>Rs: <?php  echo $row['book_price'];?></h3>
                                        <a class="btn" href="<?php echo 'addToCart.php?id='.$row['book_id']?>"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Detail End -->
        
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