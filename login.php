 
<?php
session_start();
include 'connect.php';
 include("include/header.php");
 ?>
    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4" >
        <div class="container">
            <span class="page-name">Log In To</span>
            <h1>RK <span class="shop-green">AQUA DK</span> </h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="index.php">Home</a></li>
                
                <li class="active">Log In</li>
            </ul>
        </div><!--/end container-->
    </div> 
    <!--=== End Breadcrumbs v4 ===-->

    <!--=== Login ===-->
    <div class="log-reg-v3 content-md">
        <div class="container">
            <div class="row">
                <?php
                       if (isset($_SESSION['error']) && $_SESSION['error'] !='' ) {
                        
                          ?>
                           <div class="alert alert-danger" role="alert">
                            <?php echo $_SESSION['error']; ?>
                          </div> 
                          <?php
                          unset($_SESSION['error']);
                        } 

                      ?>
                <div class="col-md-7 md-margin-bottom-50">
                    <h2 class="welcome-title">Welcome to AQUA DK</h2>
                    <!--<p style="text-align:justify">The RK Fitness is the leading Fitness equipments provider of customized and ingenious recreation solutions.
					  RK FITNESS provide a wide of products and customer friendly services.RK FITNESS started since 2020. Owner of RK FITNESS mr RENJITH K (MPEd)
						Physical education trainer.
					</p><br>
                    <div class="info-block-v2">
                        <i class="icon icon-layers"></i>
                        <div class="info-block-in">
                            <h3>VISION</h3>
                            <p>Our ultimate vision more people engaging to all the games and Fitness activities.</p>
                        </div>    
                    </div>    
                    <div class="info-block-v2">
                        <i class="icon icon-settings"></i>
                        <div class="info-block-in">
                            <h3>OUR SERVICES</h3>
                            <p>* Fitness Equipment supply
										<BR>	
									*Service and maintenance
										<BR>
									*Personal training
										<BR>
								  *All types of indoor and outdoor works
										<BR>
									*Renovation of artificial pitch facilities</p>
                        </div>    
                    </div>
                    <div class="info-block-v2">
                        <i class="icon icon-paper-plane"></i>
                        <div class="info-block-in">
                            <h3>STRENGTH</h3>
                            <p style="text-align:justify"> Fitness equipments  British design and A wide range of collections.<BR>
								<BR><strong>Cardiovascular:-</strong> Retainheart rates and minds active at the same time,our intense efficient ,ultra -
								 reliable range of combines the most advanced technology with designs with built to last.

								<BR><BR><strong>Accessories:-</strong>Each and everything needed to provide the complete gym Fitness wisdom..

								<BR><BR><strong>Functional trainer:-</strong> More effective exercise is one space means more of your members can keep active and engaged even during the preserving session.

								<BR><BR><strong>Free weights:- </strong>Professional weight trainer the gym or a aerobics class, this is Hard working, super durable range of all your members can use .

								<BR><BR><strong>Plate loaded:- </strong> It's more effective way of strenthen our body, stronger for long term and high performance/high intensive design delivers expectional strength training.</p>
                        </div>    
                    </div> -->
                </div>

                <div class="col-md-5">
                    <form id="sky-form1" class="log-reg-block sky-form" method="post" action="config.php">
                        <h2>Log in to your account</h2>

                        <section>
                            <label class="input login-input">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="email" placeholder="Email Address" name="email" class="form-control" required="">
                                </div>
                            </label>
                        </section>        
                        <section>
                            <label class="input login-input no-border-top">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" placeholder="Password" name="password" class="form-control" required="">
                                </div>    
                            </label>
                        </section>
                        
						<br>
                        <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit" name="loginbtn">Log in</button>

                      <!--   <div class="border-wings">
                            <span>or</span>
                        </div>
                             -->
                        <!-- <div class="row columns-space-removes">
                            <div class="col-lg-6 margin-bottom-10">
                                <button type="button" class="btn-u btn-u-md btn-u-fb btn-block"><i class="fa fa-facebook"></i> Facebook Log In</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="button" class="btn-u btn-u-md btn-u-tw btn-block"><i class="fa fa-twitter"></i> Twitter Log In</button>
                            </div>
                        </div> -->
                    </form>
                    
                    <div class="margin-bottom-20"></div>
                    <p class="text-center">Don't have account yet? Learn more and <a href="shop-ui-register.html">Sign Up</a></p>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!--=== End Login ===-->     
 <?php  include("include/footer.php"); ?>
</body>


</html> 