<?php
 
        include 'connection.php';
        include "header.php";

        $query="select * from books";
        $result=mysqli_query($conn,$query);
        
        $query1="select * from books";
        $result1=mysqli_query($conn,$query1);
     
        $query2="select * from category";
        $result2=mysqli_query($conn,$query2);
       
        
        ?>
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav" style="height:650px;">
                        
                        <div class="header-img">
                            
                            <img src="img/slider4.jpg"   alt="Slider Image" />
                                <a class="img-text" href="product-list.php">
                                    <p>Some text goes here that describes the </p>
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                </a>
                                
                            
                            </div>
                            
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="img/slider1.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p></p>
                                    <a class="btn" href="product-list.php"><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider2.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p></p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider3.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p></p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider4.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p></p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/category1.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="img/category2.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider" style="height:200px;">
                    <div class="brand-item"><img src="img/banner1.jpg" alt=""></div>
                    <div class="brand-item"><img src="img/banner2.jpg" alt=""></div>
                    <div class="brand-item"><img src="img/banner5.jpg" alt=""></div>
                    <div class="brand-item"><img src="img/banner4.jpg" alt=""></div>
                    <div class="brand-item"><img src="img/banner5.jpg" alt=""></div>
                    <div class="brand-item"><img src="img/banner3.jpg" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->      
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Secure Payment</h2>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Worldwide Delivery</h2>
                            <p>
                               
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>90 Days Return</h2>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>24/7 Support</h2>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->      
        
        <!-- Category Start-->
        <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-350">
                            <img src="img/category-1.jpg" />
                            <a class="category-name" href="">
                                <p>	Action fiction is a form of genre fiction whose subject matter is characterized by emphasis on exciting action sequences.It includes martial arts action, extreme sports action, car chases and vehicles, suspense action, and action comedy, with each focusing in more detail on its own type and flavor of action.</p>
                                    <a class="btn" href="product-list.php"><i class="fa fa-shopping-cart"></i>Shop Now</a>
                            </a>
                        
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-2.jpg" />
                            <a class="category-name" href="">
                                <p>Mystery fiction is a genre of fiction that usually involves a mysterious death or a crime to be solved. "Mystery fiction" can be detective stories in which the emphasis is on the puzzle or suspense element and its logical solution such as a whodunit.</p>
                            </a>
                        </div>
                       
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-6.jpg" />
                            <a class="category-name" href="">
                                <p>	Horror story, a story in which the focus is on creating a feeling of fear. Such tales are of ancient origin and form a substantial part of the body of folk literature. They can feature supernatural elements such as ghosts, witches, or vampires, or they can address more realistic psychological fears.</p>
                            </a>
                        </div>
                
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-4.jpg" />
                            <a class="category-name" href="">
                                <p>Another description of a Fantasy Novel is any book that contains unrealistic settings, or magic, often set in a medieval universe, or possibly involving mythical beings or supernatural forms as a primary element of the plot, theme, or setting. ... Fantasy usually describes those stories that could not happen in real life.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>call us for any queries</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:03402007188">+923402007188</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
         <!-- Recent Product Start -->
         <div class="reecent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Recent Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4" >
                <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-lg-12">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#"><?php echo $row['book_name'] ?></a>
                               
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="<?php echo "admin/images/".$row['book_image']; ?>" width="200px" height="290px" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="product-list.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="<?php echo'product-detail.php?id='.$row['book_id']; ?>"><i class="fas fa-info-circle"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>Rs.</span><?php echo $row['book_price'] ?></h3>
                                <a class="btn" href="product-list.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <br>
        <!-- Recent Product End -->      
        
        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Subscribe Our Newsletter</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <input type="email" value="Your email here">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->        
        
        <!-- Featured Product Start -->
        <div class="reecent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Featured Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4" >
                <?php
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                ?>
                    <div class="col-lg-12">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#"><?php echo $row1['book_name'] ?></a>
                               
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="<?php echo "admin/images/".$row1['book_image']; ?>" width="200px" height="290px" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="product-list.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="<?php echo'product-detail.php?id='.$row['book_id']; ?>"><i class="fas fa-info-circle"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>Rs.</span><?php echo $row1['book_price'] ?></h3>
                                <a class="btn" href="product-list.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <br>
        <!-- Featured Product End -->
        
        <!-- Review Start -->
        <div class="review reecent-product product">
            <div class="container-fluid">
            <br>
                <div class="section-header">
                    <h1>Categories</h1>
                </div>
                <br>
                <div class="row align-items-center review-slider normal-slider">
                <?php
                    while ($row2 = mysqli_fetch_assoc($result2)) 
                    {
                ?>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div >
                            <img src="<?php echo "admin/images/".$row2['cat_image']; ?>" width="130px" height="190px" >
                            </div>
                            <div class="review-text">
                                <h2><?php echo $row2['cat_name'] ?></h2>
                                <h3><?php echo $row2['cat_description'] ?></h3>
                            </div>
                        </div>
                    </div>
                            <?php
                                }
                            ?>
                </div>
            </div>
        </div>
        <!-- Review End --> 

    <?php
        include "footer.php";
    ?>