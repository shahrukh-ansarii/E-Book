<?php
    include "header.php";
?>      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End --> 
        
        <!-- Login Start -->

        <div class="login">
            <div class="container-fluid">
                        <div class="login-form">
                            <center><h2>Log in</h2></center>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>E-mail / Username</label>
                                    <input class="form-control" type="text" placeholder="E-mail / Username">
                                </div>
                                <div class="col-md-12">
                                    <label>Password</label>
                                    <input class="form-control" type="text" placeholder="Password">
                                </div>
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="newaccount">
                                        <label class="custom-control-label" for="newaccount">Keep me signed in</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- Login End -->
        
<?php
    include "footer.php";
?>