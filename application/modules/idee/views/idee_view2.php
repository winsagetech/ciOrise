<style type="text/css">
    .instabox{
        text-align: center;
        margin-bottom: 20px;
    }

    .img{
        opacity: 0.8;
    }
</style>

        <!-- ========================  Header content ======================== -->
   <div class="page-loader"></div>
        <section class="header-content">

            <div class="owl-slider">

                <!-- === slide item === -->

                <div class="item" style="background-image:url(<?php echo base_url();  ?>assets/mobel/assets/images/bed_image2.jpg)">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown">Modern furniture</h2>
                            <div class="animated" data-animation="fadeInUp">
                                Modern & new furniture designs
                            </div>
                        </div>
                    </div>
                </div>

                <!-- === slide item === -->

                <div class="item" style="background-image:url(<?php echo base_url();  ?>assets/mobel/assets/images/kitchen_image2.jpg)">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown">Modern furniture</h2>
                            <div class="animated" data-animation="fadeInUp">
                                Modern & new furniture designs
                            </div>
                        </div>
                    </div>
                </div>

                <!-- === slide item === -->

                <div class="item" style="background-image:url(<?php echo base_url();  ?>assets/mobel/assets/images/living_room2.jpg)">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown">Modern Living Room Interior</h2>
                            <div class="animated" data-animation="fadeInUp">
                                Modern & new furniture designs
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!--/owl-slider-->
        </section>


        <!-- ========================  Products widget ======================== -->

        <section class="products">

            <div class="container">

                <!-- === header title === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title">Popular Projects</h2>
                            <div class="text">
                                <p>Check out our latest collections</p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">
 <?php $b=0;
  foreach ($gallery as $gallery_item) { if($b<6) { ?>
                    <!-- === product-item === -->
                    
                    <div class="col-md-4 col-xs-6">

                        <article>
                            <!--div class="info">
                                <span class="add-favorite added">
                                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                </span>
                            </div>
                            <div class="btn btn-add">
                                <i class="icon icon-cart"></i>
                            </div-->
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="#productid-<?php echo $gallery_item->srno;?>" class="mfp-open">
                                        <img src="<?php echo base_url() . 'upload/' . $gallery_item->image;?>" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4"><a href="<?php echo base_url();  ?>prod_details/view_prod/<?php echo $gallery_item->srno;?>/<?php echo $gallery_item->category;?>"><?php echo $gallery_item->name; ?></a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div >
                     <div class="popup-main mfp-hide" id="productid-<?php echo $gallery_item->srno;?>" >

                    <!-- === product popup === -->

                    <div class="product">

                        <!-- === popup-title === -->

                        <div class="popup-title">
                            <div class="h1 title"><?php echo $gallery_item->name; ?> <small><?php echo $gallery_item->category; ?></small></div>
                        </div>

                        <!-- === product gallery === -->

                        <div class="owl-product-gallery">
                            <img src="<?php echo base_url() . 'upload/' . $gallery_item->image;?>" alt="" width="640" />
                        </div>

                        <!-- === product-popup-info === -->

                         <!--/popup-content-->
                        <!-- === product-popup-footer === -->
                    </div> <!--/product-->
                </div> <!--popup-main-->
                </div>
                <?php $b++; } else { break;} 
                  } ?>
                    <!-- === product-item === -->

                 
                </div> <!--/row-->
                <!-- === button more === -->

                <div class="wrapper-more">
                    <a href="<?php echo base_url();  ?>gallery" class="btn btn-main">View store</a>
                </div>

                <!-- ========================  Product info popup - quick view ======================== -->

                <div class="popup-main mfp-hide" id="productid1">

                    <!-- === product popup === -->

                    <div class="product">

                        <!-- === popup-title === -->

                        <div class="popup-title">
                            <div class="h1 title">Laura <small>Project category</small></div>
                        </div>

                        <!-- === product gallery === -->

                        <div class="owl-product-gallery">
                            <img src="<?php echo base_url();  ?>assets/mobel/assets/images/product-1.png" alt="" width="640" />
                            <img src="<?php echo base_url();  ?>assets/mobel/assets/images/product-2.png" alt="" width="640" />
                            <img src="<?php echo base_url();  ?>assets/mobel/assets/images/product-3.png" alt="" width="640" />
                            <img src="<?php echo base_url();  ?>assets/mobel/assets/images/product-4.png" alt="" width="640" />
                        </div>

                        <!-- === product-popup-info === -->

                        <div class="popup-content">
                            <div class="product-info-wrapper">
                                <div class="row">

                                    <!-- === left-column === -->

                                    <div class="col-sm-6">
                                        <div class="info-box">
                                            <strong>Maifacturer</strong>
                                            <span>Brand name</span>
                                        </div>
                                        <div class="info-box">
                                            <strong>Materials</strong>
                                            <span>Wood, Leather, Acrylic</span>
                                        </div>
                                        <div class="info-box">
                                            <strong>Availability</strong>
                                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                                        </div>
                                    </div>

                                    <!-- === right-column === -->

                                    <div class="col-sm-6">
                                        <div class="info-box">
                                            <strong>Available Colors</strong>
                                            <div class="product-colors clearfix">
                                                <span class="color-btn color-btn-red"></span>
                                                <span class="color-btn color-btn-blue checked"></span>
                                                <span class="color-btn color-btn-green"></span>
                                                <span class="color-btn color-btn-gray"></span>
                                                <span class="color-btn color-btn-biege"></span>
                                            </div>
                                        </div>
                                        <div class="info-box">
                                            <strong>Choose size</strong>
                                            <div class="product-colors clearfix">
                                                <span class="color-btn color-btn-biege">S</span>
                                                <span class="color-btn color-btn-biege checked">M</span>
                                                <span class="color-btn color-btn-biege">XL</span>
                                                <span class="color-btn color-btn-biege">XXL</span>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!--/row-->
                            </div> <!--/product-info-wrapper-->
                        </div> <!--/popup-content-->
                        <!-- === product-popup-footer === -->

                        <div class="popup-table">
                            <div class="popup-cell">
                                <div class="price">
                                    <span class="h3">$ 1999,00 <small>$ 2999,00</small></span>
                                </div>
                            </div>
                            <div class="popup-cell">
                                <div class="popup-buttons">
                                    <a href="product.html"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
                                    <a href="javascript:void(0);"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                                </div>
                            </div>
                        </div>

                    </div> <!--/product-->
                </div> <!--popup-main-->
            </div> <!--/container-->
        </section>

        <!-- ========================  Stretcher widget ======================== -->

        <section class="stretcher-wrapper">

            <!-- === stretcher header === -->

            <header >
                <!--remove class 'hidden'' to show section header -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h1 class="h2 title">Popular categories</h1>
                            <div class="text">
                                <p>
                                    Whether you are changing your home, or moving into a new one, you will find a huge selection of quality living room furniture,
                                    bedroom furniture, dining room furniture and the best value at Furniture factory
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- === stretcher === -->

            <ul class="stretcher">

                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url(<?php echo base_url();  ?>assets/mobel/assets/images/bed_image2.jpg);">
                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="f-icon f-icon-bedroom"></span>
                            <span class="text-intro">Bedroom</span>
                        </div>
                    </div>
                    <!--main text-->
                    <figure>
                        <h4>Modern furnishing projects</h4>
                        <figcaption>New furnishing ideas</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="<?php echo base_url();  ?>gallery#section-cat-1">Anchor link</a>
                </li>

                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url(<?php echo base_url();  ?>assets/mobel/assets/images/Kitchen_image4.jpg);">
                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="f-icon f-icon-kitchen"></span>
                            <span class="text-intro">Kitchen</span>
                        </div>
                    </div>
                    <!--main text-->
                    <figure>
                        <h4>Keeping Things Minimal</h4>
                        <figcaption>Creating Your Very Own Kitchen</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="<?php echo base_url();  ?>gallery#section-cat-1">Anchor link</a>
                </li>


                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url(<?php echo base_url();  ?>assets/mobel/assets/images/living_room1.jpg);">
                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="f-icon f-icon-sofa"></span>
                            <span class="text-intro">Living room</span>
                        </div>
                    </div>
                    <!--main text-->
                    <figure>
                        <h4>Furnishing and complements</h4>
                        <figcaption>Discover the design table collection</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="<?php echo base_url();  ?>gallery#section-cat-3">Anchor link</a>
                </li>

                <!-- === stretcher item more=== -->

                <li class="stretcher-item more">
                    <div class="more-icon">
                        <span data-title-show="Show more" data-title-hide="+"></span>
                    </div>
                    <a href="<?php echo base_url();  ?>gallery"></a>
                </li>

            </ul>
        </section>

        <!-- ========================  Blog Block ======================== -->

        <section class="blog">

            <div class="container">

                <!-- === blog header === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title">Interior ideas</h2>
                            <div class="text">
                                <p>Keeping things minimal</p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">

                    <!-- === blog item === -->
                <?php $a=1;
                 foreach($blog as $blog_item) { if($a<4) { ?>
                    <div class="col-sm-4">
                        <article>
                             <a href="<?php echo base_url();  ?>blog/goto_blog/<?php echo $blog_item->id;?>">
                              <div class="image" style="background-image:url(<?php echo base_url();  ?>assets/mobel/assets/images/image23.jpg)">
                                    <img src="<?php echo base_url();  ?>assets/mobel/assets/images/image23.jpg" alt="" />
                                </div>
                                <div class="entry entry-table">
                                    <div class="date-wrapper">
                                        <div class="date">
                                            <span><strong> <?php echo $blog_item->date; ?> </strong></span>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <h2 class="h5"> <?php echo $blog_item->title; ?></h2>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-main btn-block">Read more</span>
                                </div>
                            </a>
                        </article>
                    </div>
            <?php $a = $a+1;
        }
            else {
                break;
            } } ?>
                    

                <div class="wrapper-more">
                    <a href="<?php echo base_url();  ?>blog" class="btn btn-main">View all posts</a>
                </div>

            </div> <!--/container-->
        </section>

                <!-- ================== Intro section default ================== -->

        <section class="our-team">
            <div class="container">

                <!-- === Our team header === -->

                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h1 class="h2 title">OUR OUTSTANDING TEAM</h1>
                        <div class="text">
                            <p>Our team is our greatest asset. From delivering a better design to understanding our client in the best way, we make your home a beautiful place to live.</p>
                            <br>
                        </div>
                    </div>
                </div>

                <!-- === Our team === -->

                <div class="team">

                    <div class="row">



                        <!-- === team member === -->

                        <div class="col-sm-4">
                            <article>
                                <div class="details details-text">
                                    <div class="inner">
                                        <h3 class="title">ROHIT RANE</h3>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="<?php echo base_url();  ?>assets/mobel/assets/images/team-member1.jpg" alt="" />
                                </div>
                                <div class="details details-social">
                                    <div class="inner">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- === team member === -->

                        <div class="col-sm-4">
                            <article>
                                <div class="details details-text">
                                    <div class="inner">
                                        <h3 class="title">PRACHIE CHHABRA</h3>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="<?php echo base_url();  ?>assets/mobel/assets/images/team-member2.jpg" alt="" />
                                </div>
                                <div class="details details-social">
                                    <div class="inner">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- === team member === -->

                        <div class="col-sm-4">
                            <article>
                                <div class="details details-text">
                                    <div class="inner">
                                        <h3 class="title">PRAKASH CHHABRA</h3>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="<?php echo base_url();  ?>assets/mobel/assets/images/team-member3.jpg" alt="" />
                                </div>
                                <div class="details details-social">
                                    <div class="inner">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div> <!--/row-->
                    <br>
                    <!-- === button more === -->

                    <div class="wrapper-more">
                        <a href="<?php echo base_url();  ?>contact_us" class="btn btn-clean-dark">Contact us</a>
                    </div>
                </div> <!--/team-->
            </div>
        </section>


        <!-- ========================  Banner ======================== -->

        <section class="banner img" style="background-image:url(<?php echo base_url();  ?>assets/mobel/assets/images/ourstory_image8.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h2 class="title">Our story</h2>
                        <p>
                            We believe in creativity as one of the major forces of progress. With this idea, we traveled throughout Italy to find exceptional
                            artisans and bring their unique handcrafted objects to connoisseurs everywhere.
                        </p>
                        <p><a href="<?php echo base_url();  ?>our_company" class="btn btn-clean">Read full story</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================  Instagram ======================== -->

        <section class="instagram">

            <!-- === instagram header === -->

            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="h2 title">Follow us <i class="fa fa-instagram fa-2x"></i> Instagram </h2>
                            <div class="text">
                                <p>@idee.interiors</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- InstaWidget -->

            <div class="instabox">
            <a href="https://instawidget.net/v/user/idee.interiors" id="link-0dfb33b61efb5b7a656c9278e0532124015226959dca23d28399e955bff9423a">@idee.interiors</a>
            <script src="https://instawidget.net/js/instawidget.js?u=0dfb33b61efb5b7a656c9278e0532124015226959dca23d28399e955bff9423a&width=1200px"></script>
                
            </div>
        </section>


</body>

