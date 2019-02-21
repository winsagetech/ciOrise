
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shagun Polymers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
	<script type="text/javascript" src="<?php echo base_url();  ?>assets/js/jquery-2.1.4.min.js"></script>
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/owl.theme.default.min.css">
	<!-- Style -->
	<link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/style.css">
	<script src="<?php echo base_url();  ?>assets/js/lsb.min.js"></script>
	


	<!-- Modernizr JS -->
	<script src="<?php echo base_url();  ?>assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<header role="banner" id="fh5co-header">
		<div class="fluid-container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<h1><a href="<?php echo base_url();  ?>shagun"><!--<span>G</span>erminate<i>Grow healthy products</i> -->
						<img style="padding-top: 10px" src="<?php echo base_url();  ?>assets/images/logo.jpg">
					</a></h1>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li ><a class="external" href="<?php echo base_url();  ?>"><span>Home</span></a></li>
						<li><a  class="external"  href="<?php echo base_url();  ?>#fh5co-about"><span>About Us</span></a></li>
						<li><a  class="external"  href="<?php echo base_url();  ?>#fh5co-gallery" ><span>Gallery</span></a></li>
						<li class="active"><a href="<?php echo base_url();  ?>gallery"><span>Products</span></a></li>
						<li><a  class="external"  href="<?php echo base_url();  ?>#fh5co-team" ><span>Team</span></a></li>
						<li><a  class="external"  href="<?php echo base_url();  ?>#fh5co-contact"><span>Contact Us</span></a></li>
						<li class="call-to-action"><a class="sign-up" href="<?php echo base_url();  ?>dashboard"><span>Sign Up</span></a></li>
						<li class="log-in"><a  class="external"  href="<?php echo base_url();  ?>login"><span>Dealer Login</span></a></li>	
					</ul>
				</div>
					</nav>

	  </div>
	</header>
	<?php
 foreach($gallery as $gallerys) {?>
	<div class="modal video-modal fade" id="myModal-<?php echo $gallerys->srno;?>" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					RecCorian
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="<?php echo base_url() . 'upload/' . $gallerys->image;?>" alt=" " class="img-responsive"  height="32px"/>
						<table id="table_id" class="table table-striped table-bordered">
            <thead>
                    <th>Name</th>
                    <th>Category</th>
                    <th>sheetsize</th>
                    <th>thickness</th>
                    <th>finish</th> 
                    <th>color</th>
            </thead>
            <tbody>            
                    <td><?php echo $gallerys->name;?></td>
                    <td><?php echo $gallerys->category;?></td>
                     <td><?php echo $gallerys->sheetsize;?></td>
                    <td><?php echo $gallerys->thickness;?></td>
                    <td><?php echo $gallerys->finish;?></td>
                    <td><?php echo $gallerys->color;?></td>                    
            </tbody>
        </table>
					</div>
				</section>
			</div>
		</div>
	</div>

<?php }  
?>

	<br><br><br>
	<section id="fh5co-gallery" data-section="gallery">
	 <?php $cat= "hello";
	 foreach($gallery as $gallerys) {  
	 	if ($cat ==  $gallerys->category) { ?>
			 <div class="responsive">
			  <div class="gallery">
			    <a href="#" data-toggle="modal" data-target="#myModal-<?php echo $gallerys->srno;?>">
			      <img src="<?php echo base_url() . 'upload/' . $gallerys->image;?>" width="600" height="400">
			    </a>
			    <div class="desc"><?php echo $gallerys->name;?></div>
			  </div>
			</div>
<?php } 
else 
{?>
	<div class="row">
				<div class="col-md-12  text-center">
					<h2><?php echo $gallerys->category;?></h2>
					<div align="center">
				<img src="<?php echo base_url();  ?>assets/images/1.png" alt=" " class="img-responsive">
					</div>
				
					</div>
				</div>
	 <div class="responsive">
			  <div class="gallery">
			    <a href="#" class="lsb-preview" data-toggle="modal" data-target="#myModal-<?php echo $gallerys->srno;?>">
			      <img src="<?php echo base_url() . 'upload/' . $gallerys->image;?>" width="600" height="400">
			    </a>
			    <div class="desc"><?php echo $gallerys->name;?></div>
			  </div>
			</div>
	<?php $cat =  $gallerys->category; } 
} ?>
<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>

<div class="clearfix"></div>
	</section>	

	
	<div id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-4 to-animate">
					<h3 class="section-title">Our Addresses</h3>
					<ul class="contact-info">
						<li><i class="icon-map-marker"></i>Shagun polymers India private limited <span>1<sup>st</sup> Floor, C-14, Meera Market</span> <span> Chittorgarh, Rajasthan - 312001</span></li>
						<li><i class="icon-map-marker"></i>SVillage Sanwata, Kapasan Road <span>Chiitorgarh, Rajasthan - 312001</li>
						<li><i class="icon-phone"></i>+91 94141 10267</li>
						<li><i class="icon-phone"></i>+91 94141 10270</li>
					</ul>
					<p class="copy-right">&copy; 2018 Shaugun Polymers <br>All Rights Reserved. 
					</p>
				</div>
 
				<div class="col-md-4 to-animate">
					<h3 class="section-title">Namvigate</h3>
					<ul class="contact-info">
						<li ><a class="external" href="<?php echo base_url();  ?>"><span class="icon-arrow-right2">Home</span></a></li>
						<li><a  class="external"  href="<?php echo base_url();  ?>#fh5co-about"><span class="icon-arrow-right2">About Us</span></a></li>
						<li><a  class="external"  href="<?php echo base_url();  ?>#fh5co-gallery" ><span class="icon-arrow-right2">Gallery</span></a></li>
						<li class="active"><a href="<?php echo base_url();  ?>gallery"><span class="icon-arrow-right2">Products</span></a></li>
						<li><a  class="external"  href="<?php echo base_url();  ?>#fh5co-team" ><span class="icon-arrow-right2">Team</span></a></li>
						<li><a  class="external"  href="<?php echo base_url();  ?>#fh5co-contact"><span class="icon-arrow-right2">Contact Us</span></a></li>

					</ul>
					<h3 class="section-title">Connect with Us</h3>
					<ul class="social-media">
						<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
						<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
						<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
						<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4 to-animate">
					<h3 class="section-title">Information</h3>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModalHow"><img src="<?php echo base_url();  ?>assets/images/how.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModalWhy"><img src="<?php echo base_url();  ?>assets/images/why.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModalWhat"><img src="<?php echo base_url();  ?>assets/images/what.jpg" alt=" " class="img-responsive" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="map" class="fh5co-map"></div>

	
	<!-- jQuery -->
	<script src="<?php echo base_url();  ?>assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url();  ?>assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url();  ?>assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url();  ?>assets/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url();  ?>assets/js/jquery.stellar.min.js"></script>
	<!-- Owl Carousel -->
	<script src="<?php echo base_url();  ?>assets/js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="<?php echo base_url();  ?>assets/js/jquery.countTo.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="<?php echo base_url();  ?>assets/js/google_map.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="<?php echo base_url();  ?>assets/js/main.js"></script>

	</body>
</html>

