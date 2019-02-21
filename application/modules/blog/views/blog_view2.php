<!-- Blog --> 
 <div class="page-loader"></div>
        <section class="main-header" style="background-image:url(<?php echo base_url();  ?>assets/images/blogs/header.jpg)">
            <header>
                <div class="container text-center">
                    <h1 class="h2 title">Interior Ideas</h1>
                </div>
            </header>
        </section>
 <section class="blog">

            <div class="container">

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title">Creativity & Imagination</h2>
                            <div class="text">
                                <p>Your personal space - Our professional touch</p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">

                    <!-- === blog-item === -->
 <?php foreach($blog as $blog_item) { ?>
                    <div class="col-sm-4">
                        <article>
                             <a href="<?php echo base_url();  ?>blog/goto_blog/<?php echo $blog_item->id;?>">
                              <div class="image" style="background-image:url(<?php echo base_url();  ?>assets/images/blogs/blog_<?php echo $blog_item->id; ?>.jpg)">
                                    <img src="<?php echo base_url();  ?>assets/images/blogs/blog_<?php echo $blog_item->id; ?>.jpg" alt="" />
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
            <?php } ?>
       </div> <!--/row-->

            </div><!--/container-->
        </section>
 