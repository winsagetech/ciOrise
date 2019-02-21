<!-- DROPZONE -->
<script src="<?php echo base_url();  ?>assets/dropzone/dropzone.js"></script>
<link rel="stylesheet" media="all" href="<?php echo base_url();  ?>assets/dropzone/dropzone.css" />
<style>
.blog article {
    margin-bottom: 15px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

.blog article, .blog article a {
    color: black;
}

.blog article a {
    display: block;
}

.blog article a:hover {
    color: black;
}

.blog article .image {
    background-position: center;
    background-size: cover;
    overflow: hidden;
    height: auto;
}

.blog article .image img {
    display: block;
    width: 100%;
}

.blog article .entry {
    background-color: white;
    padding: 10px 15px;
    position: relative;
}

.blog article .entry.entry-table {
    display: table;
    width: 100%;
    height: 80px;
}

.blog article .entry.entry-table > div {
    display: table-cell;
    vertical-align: middle;
}

.blog article .entry.entry-table .title {
    padding-left: 10px;
}

.blog article .entry .date-wrapper {
    width: 55px;
}

.blog article .entry .date-wrapper .date {
    width: 50px;
    height: 60px;
    z-index: 99;
    z-index: 99;
    padding: 7px 0;
    text-align: center;
    border-right: 1px solid #ccc;
}

.blog article .entry .date-wrapper .date span {
    display: block;
    font-size: 11px;
    line-height: 12px;
}

.blog article .entry .title > * {
    margin: 0;
    text-transform: none;
}

.blog article .description {
    padding: 15px 0;
    color: white;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}

.blog article .show-more {
    background-color: white;
    position: absolute;
    padding: 0 15px 15px;
    left: 0;
    top: 100%;
    width: 100%;
    -moz-transform: scale(1, 0);
    -ms-transform: scale(1, 0);
    -o-transform: scale(1, 0);
    -webkit-transform: scale(1, 0);
    transform: scale(1, 0);
    -moz-transform-origin: 50% 0;
    -ms-transform-origin: 50% 0;
    -o-transform-origin: 50% 0;
    -webkit-transform-origin: 50% 0;
    transform-origin: 50% 0;
}

.blog article .show-more .btn {
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    -webkit-transform: scale(0);
    transform: scale(0);
}

.blog article .show-more, .blog article .show-more .btn {
    -moz-transition: all 0.2s;
    -o-transition: all 0.2s;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
}

.blog article.article-table {
    background-color: white;
}

.blog article.article-table > a {
    display: table;
    width: 100%;
}

.blog article.article-table > a > div {
    display: table-cell;
    vertical-align: middle;
}

.blog article.article-table > a .image {
    width: 50%;
}

.blog article.article-table > a .image img {
    display: none;
}

.blog article.article-table > a .text {
    padding: 15px;
    position: relative;
}

.blog article.article-table > a .text > * {
    position: relative;
    z-index: 99;
}

.blog article.article-table > a .text .text-intro {
    display: none;
}

.blog article.article-table > a .text:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background-color: white;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    -webkit-transform: scale(1);
    transform: scale(1);
}

.blog article.article-table:hover {
    -moz-transform: none;
    -ms-transform: none;
    -o-transform: none;
    -webkit-transform: none;
    transform: none;
}
</style>

<div class="box">
	<form action="<?php echo base_url();  ?>gallery/upload_image/<?php echo $product_id; ?>" class="dropzone"></form>
</div>

<section class="blog" id="page-ideas">

    <div class="container">

        <div class="row">

            <!-- === blog item === -->
        <?php 
         $count = count($images) - 2;
         for ($i = 0; $i < $count; $i++) {   ?>
            <div class="col-sm-3">
                <article>                     
                      <div class="image" style="padding: 2px; background-image:url(<?php echo base_url();  ?>upload/products/<?php echo $product_id; ?>/<?php echo $images[$i];?>)">
                            <img src="<?php echo base_url();  ?>upload/products/<?php echo $product_id; ?>/<?php echo $images[$i]; ?>" alt="" />
                        </div>
                        <div class="entry entry-table">

                            <div class="title">
                                                        	
                                <h2 class="h5"> <?php echo $images[$i]; ?></h2>
                                
                            </div>
                        </div>
                        <!-- 
                        <div class="show-more">
                            <span class="btn btn-main btn-block">Explore</span>
                        </div>
                         -->
                </article>
            </div>
    <?php } ?>
            
		<!-- 
        <div class="wrapper-more">
            <a href="<?php echo base_url();  ?>blog" class="btn btn-main">View all posts</a>
        </div>
         -->

    </div> <!--/container-->
	</div>
</section>



