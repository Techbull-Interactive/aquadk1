  <?php include("connect.php"); session_start(); ?>
  

 
<?php include("include/header.php");?>
    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4" >
        <div class="container">
            <span class="page-name">Feel Free To Message Us</span>
            <h1>AQUA <span class="shop-green">DK</span> </h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="index.php">Home</a></li>
             
                <li class="active">Enquiry</li>
            </ul>
        </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v4 ===-->
    <!--=== Registre ===-->
    <div class="log-reg-v3 content-md margin-bottom-30" >
        <div class="container">
            
            <div class="row">
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

                <div class="col-md-12">
                    <form id="regform" name="regform" class="log-reg-block sky-form" method="post" action="config.php">
                        <h2>Enquiry Form</h2>

                        <div class="login-input reg-input">
                            <div class="row">
                                <div class="col-sm-4">
                                    <section>
                                        <label class="input">
                                            <input type="text" id="name" name="name" placeholder="Fullname" class="form-control" required="">
                                        </label>
                                    </section>
                                </div>
                                <div class="col-sm-4">
                                      <section>
                                        <label class="input">
                                            <input type="email" name="email" id="email" placeholder="Email address" class="form-control" required="">
                                        </label>
                                     </section>          
                                </div>
                                <div class="col-sm-4">
                                      <section>
                                        <label class="input">
                                            <input type="text" name="phone" id="phone" placeholder="Mobile No" class="form-control" required="">
                                        </label>
                                     </section>          
                                </div>
                            </div>
                                                    
                                                        
                            <section>
                                <label class="input">
                                    <textarea id="desc" name="desc" rows="4" cols="160" placeholder="Enter here detail" required="" class="form-control"></textarea>
                                </label>
                            </section>                                
                                                          
                        </div>

                        <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit" name="saveBtn">Submit Form</button>
                    </form>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!--=== End Registre ===-->     
<?php  include("include/footer.php"); ?>
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.8/Shop-UI/shop-ui-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jan 2016 17:00:08 GMT -->
</html> 