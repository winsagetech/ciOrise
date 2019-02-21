    <section class="main-header main-header-blog" style="background-image:url(<?php echo base_url();  ?>assets/images/blogs/header.jpg)">
            <header>
                <div class="container text-center">
                    <h2 class="h2 title"><?php echo $blog->title; ?></h2>
                </div>
            </header>
        </section>
<section class="blog">

            <!-- === blog navigation === -->

            <!-- ========================  Blog post ======================== -->

            <div class="container">

                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                        <div class="blog-post">

                            <!-- === blog main image & entry info === -->

                            <div class="blog-image-main">
                                <img src="<?php echo base_url();  ?>assets/images/blogs/blog_<?php echo $blog->id; ?>.jpg" alt="" />
                            </div>

                            <div class="blog-post-content">

                                <!-- === blog post title === 

                                <div class="blog-post-title">
                                    <h1 class="blog-title">
                                       <?php echo $blog->title; ?>
                                    </h1>
                                   
                                    <div class="blog-info blog-info-top">
                                        <div class="entry">
                                            <i class="fa fa-calendar"></i>
                                            <span><?php echo $blog->date; ?></span>
                                        </div>
                                        
                                    </div>
                                </div>
                                -->

                                <!-- === blog post text === -->

                                <div class="blog-post-text">

                                   <p><?php echo $blog->data; ?></p>
                                </div>


                        </div><!--blog-post-->
                    </div><!--col-sm-8-->
                </div> <!--/row-->
            </div><!--/container-->
        </section>