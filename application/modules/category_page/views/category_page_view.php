
<section class="main-header" style="background-image:url(<?php echo base_url();  ?>assets/images/blogs/header.jpg)">
            <header>
                <div class="container text-center">
                    <h1 class="h2 title"><?php echo $prods[0]->category; ?></h1>
                </div>
            </header>
</section>

<!-- ========================  Blog Block ======================== -->

        <section class="blog" id="page-ideas">

            <div class="container">
                <div class="row">

                    <!-- === blog item === -->
                <?php 
                $a=1;
                $prod_count = count($prods);
                 foreach($prods as $product) { if($a<=$prod_count) { ?>
                    <div class="col-sm-4">
                        <article>
                             <a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $product->srno;?>">
                              <div class="image lazyload" data-bgset="<?php echo base_url();  ?>upload/subcats/<?php echo $product->image; ?>">
                                    <img class="lazyload" data-src="<?php echo base_url();  ?>upload/subcats/<?php echo $product->image; ?>" alt="" />
                                </div>
                                <div class="entry entry-table">

                                    <div class="title">
                                        <h2 class="h5"> <?php echo $product->name; ?></h2>
                                        
                                    </div>
                                </div>
                             </a>    
                                <div class="show-more">
                                	<a href="<?php echo base_url();  ?>request/catalogue/<?php echo $product->srno;?>">
                                    	<span class="btn btn-main btn-block">Request Catalog</span>
                                    </a>
                                </div>
                                 
                            
                        </article>
                    </div>
            <?php $a = $a+1;
        }
            else {
                break;
            } } ?>
                    
            </div> <!--/row-->
        	</div> <!-- container -->
        </section>
