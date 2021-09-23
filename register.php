  <?php session_start(); include("connect.php"); ?>

 
<?php include("include/header.php");?>
    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4">
        <div class="container">
            <span class="page-name">Register</span>
            <h1>Aqua <span class="shop-green">DK</span> </h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="index.php">Home</a></li>
             
                <li class="active">Register</li>
            </ul>
        </div><!--/end container-->
    </div> 
    <!--=== End Breadcrumbs v4 ===-->
    <!--=== Registre ===-->
    <div class="log-reg-v3 content-md margin-bottom-30" >

        <div class="container">
            
            <div class="row" >
                <?php
               if (isset($_SESSION['success']) && $_SESSION['success'] !='' ) {
                
                  ?>
                   <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['success']; ?>
                  </div> 
                  <?php
                  unset($_SESSION['success']);
                } 

              ?>    
                <div class="col-md-7 md-margin-bottom-50" >
                    <h2 class="welcome-title">Welcome to AQUA DK</h2>
                  <!--  <p style="text-align:justify">The RK Fitness is the leading Fitness equipments provider of customized and ingenious recreation solutions.
					  RK FITNESS provide a wide of products and customer friendly services.RK FITNESS started since 2020. Owner of RK FITNESS mr RENJITH K (MPEd)
						Physical education trainer.</p>--><br>
                 <!--   <div class="row margin-bottom-50">
                        <div class="col-sm-4 md-margin-bottom-20">
                            <div class="site-statistics">
                                <span></span>
                                <small>Products</small>
                            </div>    
                        </div>
                        <div class="col-sm-4 md-margin-bottom-20">
                            <div class="site-statistics">
                                <span></span>
                                <small>Reviews</small>
                            </div>    
                        </div>
                        <div class="col-sm-4">
                            <div class="site-statistics">
                                <span></span>
                                <small>Sale</small>
                            </div>    
                        </div>
                    </div>-->
                    <div class="members-number">
                       <!-- <h3>Join more than <span class="shop-green">13,000</span> members worldwide</h3>
                        <img class="img-responsive" src="assets/img/map.png" alt="">-->
                    </div>    
                </div>

                <div class="col-md-5">
                    <form id="regform" name="regform" class="log-reg-block sky-form" method="post" action="config.php">
                        <h2>Create New Account</h2>

                        <div class="login-input reg-input">
                            <div class="row">
                                <div class="col-sm-6">
                                    <section>
                                        <label class="input">
                                            <input type="text" id="fname" name="fname" placeholder="First name" class="form-control" required="">
                                        </label>
                                    </section>
                                </div>
                                <div class="col-sm-6">
                                    <section>
                                        <label class="input">
                                            <input type="text" id="lname" name="lname" placeholder="Last name" class="form-control" required="">
                                        </label>
                                    </section>        
                                </div>
                            </div>
                            <label class="select margin-bottom-15">
                                <select name="gender" id="gender" class="form-control">
                                    <option value="0" selected disabled>Gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="O">Other</option>
                                </select>
                            </label>
                                                   
                            <section>
                                <label class="input">
                                    <input type="email" name="email" id="email" placeholder="Email address" class="form-control" required="">
                                </label>
                            </section>  
                            <section>
                                <label class="input">
                                    <input type="text" name="phone" id="phone" placeholder="Phone number" class="form-control" required="">
                                </label>
                            </section>                              
                            <section>
                                <label class="input">
                                    <input type="password" name="password" id="password"  placeholder="Password" id="password" class="form-control" required="">
                                </label>
                            </section>                                
                            <section>
                                <label class="input">
                                    <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm password" class="form-control" required="">
                                </label>
                            </section>                                
                        </div>

                        <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit" name="registerbtn">Create Account</button>
                    </form>

                    <div class="margin-bottom-20"></div>
                    <p class="text-center">Already you have an account? <a href="login.php">Sign In</a></p>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!--=== End Registre ===-->     
<?php  include("include/footer.php"); ?>
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.8/Shop-UI/shop-ui-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jan 2016 17:00:08 GMT -->
</html> 