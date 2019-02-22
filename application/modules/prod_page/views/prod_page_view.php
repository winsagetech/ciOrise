
<section class="main-header" style="background-image:url(<?php echo base_url();  ?>assets/images/blogs/header.jpg)">
            <header>
                <div class="container text-center">
                    <h1 class="h2 title"><?php echo $product; ?>  </h1>
                </div>
            </header>
</section>

<section class="products">
	<div class="container">
	
		<div class="show-more">
        	<a href="<?php echo base_url();  ?>request/catalogue/<?php echo $product_id;?>">
            	<span class="btn btn-main pull-right">Request Catalog</span>
            </a>
        </div>
                                
        <br/><br/><br/>
                                
		<div class="row">

			

<?php 
    $image_count = count($images) - 2;
    
    for ($i = 0; $i < $image_count; $i++){ ?>
      <div class="col-md-3 col-xs-6">
            <article>                
                <div class="figure-grid">
                    <div class="image">
                        <a href="#productid1" class="mfp-open">
                            <img class="lazyload" data-src="<?php echo base_url();  ?>upload/products/<?php echo $product_id; ?>/<?php echo $images[$i];?>" alt="" width="360" height="250" />
                        </a>
                    </div>
                </div>
            </article>
        </div>  
<?php         
    }
?>
		</div>
	</div>
	
	
	
	<div class="popup-main mfp-hide" id="productid1">
        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title"><?php echo $product; ?> <small>samples</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
            	<?php 
            	   for ($i = 0; $i < $image_count; $i++){ ?>
            	   
                		<img class="lazyload" data-src="<?php echo base_url();  ?>upload/products/<?php echo $product_id; ?>/<?php echo $images[$i];?>" alt="" width="640" />
                <?php } ?>
            </div>

        </div> <!--/product-->
    </div> <!--popup-main-->
	
	
	
</section>

