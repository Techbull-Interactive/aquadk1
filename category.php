<?php include("include/header.php");
include("connect.php");
 ?>
    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4">
        <div class="container">
            <span class="page-name">Accessories, Plants and Live Fishes On SALE......</span>
            <h1>AQUA <span class="shop-green"><b>DK</b></span> </h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Products</a></li>
               
            </ul>
        </div><!--/end container-->
    </div> 
    <!--=== End Breadcrumbs v4 ===-->

    <!--=== Content Part ===-->
    <div class="content container">
        <div class="row">
            <form action=""  method="GET">
                <div class="col-md-3 filter-by-block md-margin-bottom-60">
                    <h1>Filter By</h1>
       
                    <div class="panel-group" id="accordion-v2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-v2" href="#collapseTwo">
                                        Categories
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul class="list-unstyled checkbox-list">
                                        <?php
                                          //$conn = mysqli_connect('localhost','root','','rkfitness'); 
                                         $query_run = mysqli_query($conn,'SELECT * from category_tbl where is_deleted = 0');
                                        if (mysqli_num_rows($query_run) > 0) {
                                          foreach ($query_run as $brandlists)
                                           {
                                            $checked = [];
                                            if (isset($_GET['category']))
                                            {
                                              $checked = $_GET['category'];
                                            }
                                             ?>
                                        <li>
                                            <label class="checkbox">
                                                <input type="checkbox" name="category[]" value="<?= $brandlists['cat_id']; ?>" <?php if (in_array( $brandlists['cat_id'], $checked)) { echo "checked"; } ?> />
                                                <i></i>
                                                <?php echo $brandlists['cat_name']; ?>
                                                <!-- <small><a href="#">(213)</a></small> -->
                                            </label>
                                        </li>
                                    <?php
                                      }
                                    
                                    } else { 
                                      echo "No Category Found";
                                    }
                                    ?>
                                       
                                    </ul>        
                                </div>
                            </div>
                        </div>
                    </div><!--/end panel group-->

                    
                       <button type="submit" class="btn-u btn-brd btn-brd-hover btn-u-lg btn-u-sea-shop btn-block">Search</button>
    
                </div>
            </form>
            <div class="col-md-9">
                <div class="row margin-bottom-5">
                    <div class="col-sm-4 result-category">
                        <h2>Aquarium Store</h2>
						
                    </div>
                    <div class="col-sm-8">
                        <ul class="list-inline clear-both">
                            
                            <li class="sort-list-btn">
                                <h3>Sort By :</h3>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Popularity <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">Best Sales</a></li>
                                        <li><a href="#">Top Last Week Sales</a></li>
                                        <li><a href="#">New Arrived</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>    
                </div><!--/end result category-->

                <div class="filter-results">
                    
                    <div class="row illustration-v2 margin-bottom-30">  
                    <?php
                  if (isset($_GET['category']))
                  {
                    $brandchecked = [];
                    $brandchecked = $_GET['category'];
                    foreach($brandchecked as $rowbrand)
                    {
                        $Products = "SELECT * from product_tbl,category_tbl where product_tbl.cat_id=category_tbl.cat_id and product_tbl.is_deleted = 0 and product_tbl.cat_id IN ($rowbrand)";
                        $product_query = mysqli_query($conn,$Products);
                        if (mysqli_num_rows($product_query) > 0) 
                        {
                              foreach($product_query as $pitem):
                         ?>
                                <div class="col-md-4">
                                    <div class="product-img product-img-brd">
                                        <a href="#"><img class="full-width img-responsive" src="upload/product/<?= $pitem['pro_img']; ?>" alt=""></a>
                                        <a class="product-review" href="
										product-details.php?product_id=<?php echo $pitem['product_id']; ?> & cat_id=<?php echo $pitem['cat_id']; ?>"> <?= $pitem['cat_name']; ?></a>
                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-description product-description-brd margin-bottom-30">
                                        <div class="overflow-h margin-bottom-5">
                                            <div class="pull-left">
                                                <h4 class="title-price"><a href="product-details.php?product_id=<?php echo $pitem['product_id']; ?> & cat_id=<?php echo $pitem['cat_id']; ?>"><?= $pitem['product_name']; ?></a></h4>
                                                <span class="gender text-uppercase"><?= $pitem['cat_name']; ?></span>
                                                <span class="gender">Model - <?= $pitem['modelno']; ?></span>
                                            </div>    
                                            <div class="product-price">
                                                <span class="title-price">Rs.<?= $pitem['mrp']; ?>/-</span>
                                            </div>
                                        </div>    
                                        <!-- <ul class="list-inline product-ratings">
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                                        </ul> -->    
                                    </div>
                                </div>
                         <?php       

                               endforeach; 
                        } 
                        
                    }

                  }
                  else
                  {

                      $Products = "SELECT * from product_tbl,category_tbl where product_tbl.cat_id=category_tbl.cat_id and product_tbl.is_deleted=0";
                      $product_query = mysqli_query($conn,$Products);
                      if (mysqli_num_rows($product_query) > 0) 
                      {
                            foreach($product_query as $pitem):
                       ?>
                            
                            <div class="col-md-4">
                                    <div class="product-img product-img-brd">
                                        <a href="#"><img class="full-width img-responsive" src="upload/product/<?= $pitem['pro_img']; ?>" alt=""></a>
                                        <a class="product-review" href="product-details.php?product_id=<?php echo $pitem['product_id']; ?> & cat_id=<?php echo $pitem['cat_id']; ?> "><?= $pitem['cat_name']; ?></a>
                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-description product-description-brd margin-bottom-30">
                                        <div class="overflow-h margin-bottom-5">
                                            <div class="pull-left">
                                                <h4 class="title-price"><a href="product-details.php?product_id=<?php echo $pitem['product_id']; ?> & cat_id=<?php echo $pitem['cat_id']; ?>"><?= $pitem['product_name']; ?></a></h4>
                                                <span class="gender text-uppercase"><?= $pitem['cat_name']; ?></span>
                                                <span class="gender">Model - <?= $pitem['modelno']; ?></span>
                                            </div>    
                                            <div class="product-price">
                                                <span class="title-price">Rs.<?= $pitem['mrp']; ?>/-</span>
                                            </div>
                                        </div>    
                                        <!-- <ul class="list-inline product-ratings">
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                                        </ul> -->    
                                    </div>
                                </div>  
                            
                       <?php       

                             endforeach; 
                      } 
                      else
                      { 
                          echo "No Brands Found";
                      }  
 
                  }
                ?>   
                    </div>

                  
                </div><!--/end filter resilts-->

               <!--/end pagination-->
            </div>
        </div><!--/end row-->
    </div><!--/end container-->    
    <!--=== End Content Part ===-->

  <?php  include("include/footer.php"); ?>
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.8/Shop-UI/shop-ui-filter-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jan 2016 16:59:55 GMT -->
</html> 