<?php include("include/header.php");
include 'connect.php';
 ?>
 <?php

               if(isset($_REQUEST['product_id']))
                  {

                    $sq="SELECT product_tbl.*,category_tbl.* FROM product_tbl,category_tbl WHERE product_tbl.cat_id=category_tbl.cat_id and product_tbl.product_id='".$_REQUEST['product_id']."'";
                    $res1=mysqli_query($conn,$sq);      

                    $row1=mysqli_fetch_array($res1);
                            /*if($row1['discount']!=0)
                            {
                                $dis = $row1['discount'];
                                $sell_price = $row1['mrp'];
                                $discount_price = $sell_price * $dis/100;
                                $final_price = $sell_price - $discount_price;
                            }*/
                        }


            ?>
   <!--=== Shop Product ===-->
    <div class="shop-product">
        <!-- Breadcrumbs v5 -->
        <div class="container">
            <ul class="breadcrumb-v5">
                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li><a href="#">Aquarium Store</a></li>
                <li class="active"><?php echo $row1['cat_name']; ?></li>
            </ul> 
        </div>
        <!-- End Breadcrumbs v5 -->

        <div class="container">
            
            <div class="row">
                <div class="col-md-6 md-margin-bottom-50">
                    <div class="ms-showcase2-template">
                        <!-- Master Slider -->
                        <div class="master-slider ms-skin-default" id="masterslider">
                            <div class="ms-slide">
                                <img class="ms-brd" src="upload/product/<?php echo $row1['pro_img']; ?>" alt="lorem ipsum dolor sit">
                            </div>
                            
                        </div>
                        <!-- End Master Slider -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="shop-product-heading">
                        <h2><?php echo $row1['product_name']; ?></h2>
                       <!--  <ul class="list-inline shop-product-social">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul> -->
                    </div><!--/end shop product social-->

                    <!-- <ul class="list-inline product-ratings margin-bottom-30">
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li class="product-review-list">
                            <span>(1) <a href="#">Review</a> | <a href="#"> Add Review</a></span>
                        </li>
                    </ul> --><!--/end shop product ratings-->

                    <p style="text-align:justify"><strong><?php echo $row1['modelno']; ?></strong> <?php echo $row1['description']; ?> </p><br>

                    <ul class="list-inline shop-product-prices margin-bottom-30">
                        <?php //if($row1['discount']==''){ ?>
                        <li class="shop-red">Rs.<?php //echo $row1['mrp']; ?></li>
                        <?php //} else{ ?>
                        <!-- <li class="line-through">Rs.<?php// echo $final_price; ?></li>-->
                        <?php// } ?>
                        
                        <!-- <li><small class="shop-bg-red time-day-left">4 days left</small></li> -->
                    </ul><!--/end shop product prices-->

                    <!--<h3 class="shop-product-title">Size</h3>
                    <ul class="list-inline product-size margin-bottom-30">
                        <li>
                            <input type="radio" id="size-1" name="size">
                            <label for="size-1">S</label>
                        </li>
                        <li>    
                            <input type="radio" id="size-2" name="size">
                            <label for="size-2">M</label>
                        </li>    
                        <li>    
                            <input type="radio" id="size-3" name="size" checked>
                            <label for="size-3">L</label>
                        </li>    
                        <li>    
                            <input type="radio" id="size-4" name="size">
                            <label for="size-4">XL</label>
                        </li>    
                    </ul><!--/end product size-->

                    <!--<h3 class="shop-product-title">Color</h3>
                    <ul class="list-inline product-color margin-bottom-30">
                        <li>
                            <input type="radio" id="color-1" name="color">
                            <label class="color-one" for="color-1"></label>
                        </li>
                        <li>    
                            <input type="radio" id="color-2" name="color" checked>
                            <label class="color-two" for="color-2"></label>
                        </li>    
                        <li>    
                            <input type="radio" id="color-3" name="color">
                            <label class="color-three" for="color-3"></label>
                        </li>  
                    </ul><!-<h3 class="shop-product-title">Quantity</h3>-/end product color-->

                    <!-- <h3 class="shop-product-title">Quantity</h3> -->
                    <div class="margin-bottom-40">
                        <!-- <form name="f1" class="product-quantity sm-margin-bottom-20">
                            <button type='button' class=" dec button quantity-button" name='subtract' value='-'>-</button>
                            <input type='text' class="quantity-field" name='quantity' value="1" id='quantity'/>
                            <button type='button' class="inc button quantity-button" name='add' onclick='javascript: document.getElementById("quantity").value++;' value='+'>+</button>
                        </form> -->
                        <button type="button" class="btn-u btn-u-sea-shop btn-u-lg">Add to Cart</button>
                    </div><!--/end product quantity-->    

                    <!-- <ul class="list-inline add-to-wishlist add-to-wishlist-brd">
                        <li class="wishlist-in">
                            <i class="fa fa-heart"></i>
                            <a href="#">Add to Wishlist</a>
                        </li>
                        <li class="compare-in">
                            <i class="fa fa-exchange"></i>
                            <a href="#">Add to Compare</a>
                        </li>
                    </ul>   -->  
                    <p class="wishlist-category"><strong>Categories:</strong> <a href="#"><?php echo $row1['cat_name']; ?>,</a> <a href="#"><?php echo $row1['modelno']; ?></a></p>
                </div>
            </div><!--/end row-->
        </div>    
    </div>
    <!--=== End Shop Product ===-->

    <!--=== Content Medium ===-->
    <div class="content-md container">
        <!--=== Product Service ===-->
        <div class="row margin-bottom-60">
            <div class="col-md-4 product-service md-margin-bottom-30">
                <div class="product-service-heading">
                    <i class="fa fa-truck"></i>
                </div>
                <div class="product-service-in">
                    <h3>Free Delivery</h3>
                    
                    <a href="#">+Read More</a>
                </div>
            </div>
            <div class="col-md-4 product-service md-margin-bottom-30">
                <div class="product-service-heading">
                    <i class="icon-earphones-alt"></i>
                </div>
                <div class="product-service-in">
                    <h3>Customer Service</h3>
                    <!--<p>Integer mattis lacinia felis vel molestie. Ut eu euismod erat, tincidunt pulvinar semper veliUt porta, leo...</p> -->
                    <a href="#">+Read More</a>
                </div>
            </div>
            <div class="col-md-4 product-service">
                <div class="product-service-heading">
                    <i class="icon-refresh"></i>
                </div>
                <div class="product-service-in">
                    <h3>Free Returns</h3>
                    
                    <a href="#">+Read More</a>
                </div>
            </div>
        </div><!--/end row-->
        <!--=== End Product Service ===-->

        <div class="tab-v5">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
                <!-- <li><a href="#reviews" role="tab" data-toggle="tab">Reviews (1)</a></li> -->
            </ul>

            <div class="tab-content">
                <!-- Description -->
                <div class="tab-pane fade in active" id="description">
                    <div class="row">
                        <div class="col-md-7">
                            <p> <?php echo $row1['product_name']; ?> (<?php echo $row1['cat_name']; ?>) - <?php echo $row1['modelno']; ?> </p>

                            
                        </div>
                        <!-- <div class="col-md-5">
                            <div class="responsive-video">
                                <iframe src="http://player.vimeo.com/video/72343553" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- End Description -->

                <!-- Reviews -->                
                <div class="tab-pane fade" id="reviews">
                    <div class="product-comment margin-bottom-40">
                        <div class="product-comment-in">
                            <img class="product-comment-img rounded-x" src="assets/img/team/01.jpg" alt="">
                            <div class="product-comment-dtl">
                                <h4>Mickel <small>22 days ago</small></h4>
                                <p>I like the green colour, it's very likeable and reminds me of Hollister. A little loose though but I am very skinny</p>
                                <ul class="list-inline product-ratings">
                                    <li class="reply"><a href="#">Reply</a></li>
                                    <li class="pull-right">
                                        <ul class="list-inline">
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                        </ul>
                                    </li>    
                                </ul>
                            </div>
                        </div>    
                    </div>
                    <h3 class="heading-md margin-bottom-30">Add a review</h3>
                    <form action="http://htmlstream.com/preview/unify-v1.8/Shop-UI/assets/php/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form sky-changes-4">
                        <fieldset>
                            <div class="margin-bottom-30">
                                <label class="label-v2">Name</label>
                                <label class="input">
                                    <input type="text" name="name" id="name">
                                </label>
                            </div>    
                            
                            <div class="margin-bottom-30">
                                <label class="label-v2">Email</label>
                                <label class="input">
                                    <input type="email" name="email" id="email">
                                </label>
                            </div>    
                            
                            <div class="margin-bottom-30">
                                <label class="label-v2">Review</label>
                                <label class="textarea">
                                    <textarea rows="7" name="message" id="message"></textarea>
                                </label>
                            </div>    
                        </fieldset>    
                            
                        <footer class="review-submit">
                            <label class="label-v2">Review</label>
                            <div class="stars-ratings">
                                <input type="radio" name="stars-rating" id="stars-rating-5">
                                <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-4">
                                <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-3">
                                <label for="stars-rating-3"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-2">
                                <label for="stars-rating-2"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-1">
                                <label for="stars-rating-1"><i class="fa fa-star"></i></label>
                            </div>
                            <button type="button" class="btn-u btn-u-sea-shop btn-u-sm pull-right">Submit</button>
                        </footer>
                    </form>
                </div>
                <!-- End Reviews -->                
            </div>
        </div>
    </div><!--/end container-->    
    <!--=== End Content Medium ===-->

     <!--=== Illustration v2 ===-->
    <div class="container">
        <div class="heading heading-v1 margin-bottom-20">
            <h2>Feature Products</h2>
           
        </div>

        <div class="illustration-v2 margin-bottom-60">
            <div class="customNavigation margin-bottom-25">
                <a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
                <a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
            </div>

            <ul class="list-inline owl-slider">
                <?php

                $conn = mysqli_connect('localhost','root','','aquadk');
                $query_run = mysqli_query($conn,"SELECT * from product_tbl,category_tbl where product_tbl.cat_id=category_tbl.cat_id and product_tbl.is_deleted = 0 and product_tbl.feature_pro='yes'");

                while($row=mysqli_fetch_assoc($query_run)){
                ?>
                <li class="item">
                    <div class="product-img">
                        <a href="product-details.php?product_id=<?php echo $row['product_id']; ?>&cat_id=<?php echo $row['cat_id']; ?>"><img class="full-width img-responsive" src="upload/product/<?php echo $row['pro_img']; ?>" alt=""></a>
                        <a class="product-review" href="product-details.php?product_id=<?php echo $row['product_id']; ?>&cat_id=<?php echo $row['cat_id']; ?>"><b><?php echo $row['cat_name']; ?></b></a>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="product-details.php?product_id=<?php echo $row['product_id']; ?>&cat_id=<?php echo $row['cat_id']; ?>"><?php echo $row['modelno']; ?></a></h4>
                                <span class="gender text-uppercase"><?php echo $row['product_name']; ?> </span>
                                <span class="gender">BIKES</span>
                            </div>    
                            <div class="product-price">
                                <span class="title-price">Rs.<?php echo $row['mrp']; ?>/-</span>
                            </div>
                        </div>    
                        <!-- <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                        </ul>   -->  
                    </div>
                </li>
               <?php } ?>
            </ul>
        </div> 
    </div>    
    <!--=== End Illustration v2 ===-->


</div><!--/wrapper-->
<?php include("include/footer.php");
 ?>


<!-- Master Slider -->
<script src="assets/plugins/master-slider/quick-start/masterslider/masterslider.min.js"></script>
<script src="assets/plugins/master-slider/quick-start/masterslider/jquery.easing.min.js"></script>
<!-- JS Customization -->
<script src="assets/js/custom.js"></script>
<!-- JS Page Level -->
<script src="assets/js/shop.app.js"></script>
<script src="assets/js/plugins/owl-carousel.js"></script>
<script src="assets/js/plugins/master-slider.js"></script>
<script src="assets/js/forms/product-quantity.js"></script>
<script src="assets/js/plugins/style-switcher.js"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
        App.initScrollBar();        
        OwlCarousel.initOwlCarousel();
        StyleSwitcher.initStyleSwitcher();      
        MasterSliderShowcase2.initMasterSliderShowcase2();
    });
</script>

<script>

  jQuery(".button").on("click", function() {
    var oldValue = jQuery("#quantity").val();
        
    if (jQuery(this).text() == "+") {
      oldValue = parseInt(oldValue) + 1;
    } else if (oldValue > 1) {
      oldValue = parseInt(oldValue) - 1;
    }

    jQuery("#quantity").val(oldValue);
    
    updatePricing();
    
  });
  
  
  
   
  //update price when changing quantity
  function updatePricing() 
  {
    
    <?php if($row1['discount']!=0): ?>
    var product_price = $('#product_price_hidden').val();
    var qty = jQuery("#quantity").val();
    product_price = product_price * parseFloat(qty);
    jQuery('#product_price').text(product_price);
    $('#total_price').val(product_price);
    
    var discount = $('#discount_rate').val();
    var discount_amount = product_price * discount/100;
    $('#discount_amount').val(discount_amount);
    var final_price = product_price - discount_amount;
    jQuery('#product_price').text(final_price);
    $('#f_price').val(final_price);
    
    /*var gst_rate=$('#gst_rate').val();
   var gst_amount=final_price * gst_rate/100;*/
   $('#gst_amount').val("0");
   
   <?php else: ?>
   var product_price = $('#product_price_hidden').val();
    var qty = jQuery("#quantity").val();
    product_price = product_price * parseFloat(qty);
    jQuery('#product_price').text(product_price);
    $('#total_price').val(product_price);
    
    /*var gst_rate=$('#gst_rate').val();
   var gst_amount=product_price * gst_rate/100;*/
   $('#gst_amount').val("0");
    <?php endif ?>
   
  }

 
  
</script>

</body>

</html> 