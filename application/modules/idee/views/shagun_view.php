
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
	<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
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
					<h1><a href="<?php echo base_url();  ?>/index.php/shagun"><!--<span>G</span>erminate<i>Grow healthy products</i> -->
						<img style="padding-top: 10px" src="<?php echo base_url();  ?>assets/images/logo.jpg">
					</a></h1>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
						<li><a href="#" data-nav-section="about"><span>About Us</span></a></li>
						<li><a href="#" data-nav-section="gallery"><span>Gallery</span></a></li>
						<li><a class="external" href="<?php echo base_url();  ?>gallery"><span>Products</span></a></li>
						<li><a href="#" data-nav-section="team"><span>Team</span></a></li>
						<li><a href="#" data-nav-section="contact"><span>Contact Us</span></a></li>
						<?php foreach($pages as $page){?>
						<li><a class="external" href="<?php echo base_url();  ?><?php echo $page->page;  ?>"><span><?php echo $page->page;  ?></span></a></li>
				<?php	} ?>
						<li class="call-to-action"><a class="sign-up" href="<?php echo base_url();  ?>dashboard"><span>Sign Up</span></a></li>
						<li class="log-in"><a  class="external"  href="<?php echo base_url();  ?>login"><span>Dealer Login</span></a></li>		
					</ul>
				</div>
					</nav>

	  </div>
	</header>

	<section id="fh5co-home" data-section="home" style="background-image: url(<?php echo base_url();  ?>assets/images/office-reception-design.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h1 class="to-animate">Next Generation Seamless Design with  Soild Surface Material</h1>
							<h2 class="to-animate">High quality, durable infrastructure development with limitless design options.</h2>
							<div class="call-to-action">
								<a href="#fh5co-contact" class="demo to-animate" data-nav-section="contact"><i class="icon-phone"></i>Contact Us</a>
								<a href="#" class="download to-animate" data-toggle="modal" data-target="#myModal"><i class="icon-notebook"></i>Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					RecCorian
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="<?php echo base_url();  ?>assets/images/image15.jpg" alt=" " class="img-responsive" />
						<p>RecCorian offers range of products and services to its clients from various domains including Hospitality, Airports, Hospitals, Architects. Our modern & state of art production plant in Chittorgarh, Rajsthan, India is one of its first & own kind in India.
						Along the product what we offer is our time trusted Quality Assurance at reasonable cost. Our unique products will help you reduce your maintenance cost as well.
							<i>So, why not give it a try? Right Now.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->

	<section id="fh5co-services" data-section="services">
		<div class="fh5co-services">
			<div class="container">
				<!--div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate"><span>We Offer Services</span></h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove. </h3>
							</div>
						</div>
					</div>
				</div-->
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-home"></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>Modern Infrastructure</h3>
								<p>Completely automated plant, with assembly lines opearating 24/7</p>
							</div>
						</div>

						<!--div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-energy"></i></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>Strict Quality Controls</h3>
								<p>Exhaustive checklist of quality parameters to assure Zero Defects</p>
							</div>
						</div-->
					</div>
					<div class="col-md-4 text-center">
						<div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-check"></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>Strict Quality Controls</h3>
								<p>Exhaustive checklist of quality parameters to assure Zero Defects.</p>
							</div>
						</div>

						<!--div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-paper-plane"></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>Sleek and Smooth Animation</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div-->
					</div>
					<div class="col-md-4 text-center">
						<div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-calendar"></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>On Time Delivery</h3>
								<p>Our Men & Machine are working 24/7 to deliver Quality on Time.</p>
							</div>
						</div>

						<!--div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-screen-desktop"></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>Looks Amazing on Devices</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-life-saver"></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>24/7 Help &amp; Support</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>

						<div class="box-services">
							<div class="icon to-animate">
								<span><i class="icon-key"></i></span>
							</div>
							<div class="fh5co-post to-animate">
								<h3>Secure Account</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div-->
					</div>
				</div>
			</div>
		</div>
		<!-- welcome-bottom -->

	<!--div id="welcome_bottom" class="welcome-bottom">
		
		<div class="col-md-6 wthree_welcome_bottom_right">
			<div class="agileinfo_grid">
				<figure >
					<img src="<?php //echo base_url();  ?>assets/images/image09.jpg" alt=" " class="img-responsive" />
					<figcaption>
						<h4 class="wthree_text">RecCorian <span>For Workplace</span></h4>
						<p>Reception area in Hotels & Offices. Airports, Hospitals, Schools. Low maintenance, elegant & sophisticated designs to take your clients in a new world.</p>
					</figcaption>			
				</figure>
			</div>
		</div>
		<div class="col-md-6 wthree_welcome_bottom_right">
			<div class="agileinfo_grid">
				<figure class="agileits_effect_moses">
					<img src="<?php //echo base_url();  ?>assets/images/image07.jpg" alt=" " class="img-responsive" />
					<figcaption>
						<h4>RecCorian <span>For Home Interiors</span></h4>
						<p>Now no one will limit your imagination & creativity. RecCorian provides range of options for Kitchen, Bathrooms & almost every corner of your dream home.</p>
					</figcaption>			
				</figure>
			</div>
		</div>

		<div class="clearfix"> </div>
	</div-->
<!-- //welcome-bottom -->
<!-- news -->
	<div class="welcome">
		<div class="container">
			<div class="w3ls_news_grids">
				<div class="col-md-6 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="<?php echo base_url();  ?>assets/images/image09.jpg" alt=" " class="img-responsive"/>
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text "><h3>RecCorian <span>For Workplace</span></h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<h4>Solid Surface Material</a></h4>
						<p>Solid surface is a man-made material usually composed of a combination of marble dust, bauxite, acrylic, epoxy or polyester resins and pigments.</p>
					</div>
				</div>
				<div class="col-md-6 w3ls_news_grid">
					<div class="w3layouts_news_grid">
					<img src="<?php echo base_url();  ?>assets/images/image07.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>RecCorian <span>For Home Interiors</span></h3></div>
						</div>
						</div>
					<div class="agileits_w3layouts_news_grid">
						<h4>Benefits</a></h4>
						<p>Nearly Non-Porous: No surface is completely non-porous, but tile, quartz, and solid surface come as close to </p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //news -->

<br /><br /><br /><br />
<!-- news -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head" align="center" class="to-animate">Latest from RecCorian</h3>
			<div class="w3_agile_image" align="center">
				<img src="<?php echo base_url();  ?>assets/images/1.png" alt=" " class="img-responsive">
			</div>
			<p class="agile_para" align="center">Keep visiting this space for more informative articles from our experts about this next generation technology</p>
			<div class="w3ls_news_grids">
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="<?php echo base_url();  ?>assets/images/what.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>What?</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<h4><a href="#" data-toggle="modal" data-target="#myModalWhat">Solid Surface Material</a></h4>
						<p>Solid surface is a man-made material usually composed of a combination of marble dust, bauxite, acrylic, epoxy or polyester resins and pigments.</p>
					</div>
				</div>
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="<?php echo base_url();  ?>assets/images/why.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>Why?</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<h4><a href="#" data-toggle="modal" data-target="#myModalWhy">Benefits</a></h4>
						<p>Nearly Non-Porous: No surface is completely non-porous, but tile, quartz, and solid surface come as close to </p>
					</div>
				</div>
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="<?php echo base_url();  ?>assets/images/how.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>How?</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<h4><a href="#" data-toggle="modal" data-target="#myModalHow">How it is done?</a></h4>
						<p>Solid surface is manufactured by mixing acrylic, epoxide or polyester resin with powdered bauxite filler and pigments.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //news -->

		<!--div class="core-features">
			<div class="grid2 to-animate" style="background-image: url(<?php //echo base_url();  ?>assets/images/full_image_5.jpg);">
			</div>
			<div class="grid2 fh5co-bg-color">
				<div class="core-f">
					<h2 class="to-animate">Core Features</h2>
					<div class="row">
						<div class="col-md-6">
							<div class="core">
								<i class="icon-cloud-download to-animate-2"></i>
								<div class="fh5co-post to-animate">
									<h3>Free Download</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
							<div class="core">
								<i class="icon-laptop to-animate-2"></i>
								<div class="fh5co-post to-animate">
									<h3>Responsive Layout</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
							<div class="core">
								<i class="icon-hand-paper-o to-animate-2"></i>
								<div class="fh5co-post to-animate">
									<h3>24/7 Help &amp; Support</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="core">
								<i class="icon-lightbulb-o to-animate-2"></i>
								<div class="fh5co-post to-animate">
									<h3>Free Update</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
							<div class="core">
								<i class="icon-trophy to-animate-2"></i>
								<div class="fh5co-post to-animate">
									<h3>Featured Template</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
							<div class="core">
								<i class="icon-columns2 to-animate-2"></i>
								<div class="fh5co-post to-animate">
									<h3>Lots of Elements</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section-->

	<section id="fh5co-about" data-section="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12  text-center">
					<h2 class="to-animate">Why <span>Choose</span> Us</h2>
					<div align="center">
				<img src="<?php echo base_url();  ?>assets/images/1.png" alt=" " class="img-responsive">
			</div>
					<div class="row">
						<p class="agile_para" align="center">History of satisfied clients when we delivered Quality Product & Services On Time</p>
						</div>
					</div>
				</div>
				<div class="w3ls_news_grids"> 
				<div class="col-md-6 w3_agile_about_grid_left">
					<h3>Our belief in Customer First</h3>
					<p>RecCorian offers range of products and services to its clients from various domains including Hospitality, Airports, Hospitals, Architects. Our modern & state of art production plant in Chittorgarh, Rajsthan, India is one of its first & own kind in India.
						Along the product what we offer is our time trusted Quality Assurance at reasonable cost. Our unique products will help you reduce your maintenance cost as well.</p>
				</div>
				<div class="col-md-6 w3_agile_about_grid_right">
					<div class="skillbar" data-percent="100">
					  <span class="skillbar-title" style="background: #f1703a;">Quality</span>
					  <p class="skillbar-bar" style="background: #f88c5e;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="100">
					  <span class="skillbar-title" style="background: #2980b9;">Designs</span>
					  <p class="skillbar-bar" style="background: #3498db;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="100">
					  <span class="skillbar-title" style="background: #a0d034;">Time</span>
					  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="100">
					  <span class="skillbar-title" style="background: #e7cc2c;">Value</span>
					  <p class="skillbar-bar" style="background: #f5d410;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
	<script src="<?php echo base_url();  ?>assets/js/skill.bars.jquery.js"></script>
	<script>
		$(document).ready(function(){
			
			$('.skillbar').skillBars({
				from: 0,
				speed: 4000, 
				interval: 100,
				decimals: 0,
			});
			
		});

	</script>

<!-- about-bottom -->
	<div class="about-bottom">
		<div class="container">
			<h4><span>RecCorian</span> not only gives good looking interior solutions, our products & services are part of life saving missions as well.</h4>
			<div class="agileits_w3layouts_learn_more agileits_learn_more hvr-radial-out">
				<a href="#" data-toggle="modal" data-target="#myModal_about">Read More</a>
			</div>
		</div>
	</div>
<!-- //about-bottom -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal_about" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					RecCorian
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="<?php echo base_url();  ?>assets/images/image15.jpg" alt=" " class="img-responsive" />
						<p>RecCorian offers range of products and services to its clients from various domains including Hospitality, Airports, Hospitals, Architects. Our modern & state of art production plant in Chittorgarh, Rajsthan, India is one of its first & own kind in India.
						Along the product what we offer is our time trusted Quality Assurance at reasonable cost. Our unique products will help you reduce your maintenance cost as well.
							<i>So, why not give it a try? Right Now.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
		<!--div class="fh5co-project">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="project-grid to-animate-2" style="background-image:  url(<?php echo base_url();  ?>assets/images/project-1.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span>Web Design</span>

								<p class="download"><a href="#"><i class="icon-download"></i></a></p>
								<p class="love"><a href="#"><i class="icon-heart-o"></i></a></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="project-grid to-animate-2" style="background-image:  url(<?php echo base_url();  ?>assets/images/project-2.jpg);">
									<div class="desc">
										<h3><a href="#">Work Title Here</a></h3>
										<span>Web Design</span>

										<p class="download"><a href="#"><i class="icon-download"></i></a></p>
										<p class="love"><a href="#"><i class="icon-heart-o"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="project-grid to-animate-2" style="background-image:  url(<?php echo base_url();  ?>assets/images/project-5.jpg);">
									<div class="desc">
										<h3><a href="#">Work Title Here</a></h3>
										<span>Web Design</span>

										<p class="download"><a href="#"><i class="icon-download"></i></a></p>
										<p class="love"><a href="#"><i class="icon-heart-o"></i></a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="project-grid to-animate-2" style="background-image:  url(<?php echo base_url();  ?>assets/images/project-9.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span>Web Design</span>

								<p class="download"><a href="#"><i class="icon-download"></i></a></p>
								<p class="love"><a href="#"><i class="icon-heart-o"></i></a></p>
							</div>
						</div>
					</div>

					<div class="col-md-4 text-center">
						<div class="project-grid to-animate-2" style="background-image:  url(<?php echo base_url();  ?>assets/images/project-4.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span>Web Design</span>

								<p class="download"><a href="#"><i class="icon-download"></i></a></p>
								<p class="love"><a href="#"><i class="icon-heart-o"></i></a></p>
							</div>
						</div>
						<div class="project-grid to-animate-2" style="background-image:  url(<?php echo base_url();  ?>assets/images/project-3.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span>Web Design</span>

								<p class="download"><a href="#"><i class="icon-download"></i></a></p>
								<p class="love"><a href="#"><i class="icon-heart-o"></i></a></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="project-grid to-animate-2" style="background-image:  url(<?php echo base_url();  ?>assets/images/project-10.jpg);">
									<div class="desc">
										<h3><a href="#">Work Title Here</a></h3>
										<span>Web Design</span>

										<p class="download"><a href="#"><i class="icon-download"></i></a></p>
										<p class="love"><a href="#"><i class="icon-heart-o"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="project-grid to-animate-2" style="background-image:  url(<?php echo base_url();  ?>assets/images/project-11.jpg);">
									<div class="desc">
										<h3><a href="#">Work Title Here</a></h3>
										<span>Web Design</span>

										<p class="download"><a href="#"><i class="icon-download"></i></a></p>
										<p class="love"><a href="#"><i class="icon-heart-o"></i></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 text-center">
						<div class="row">
							<div class="col-md-6">
								<div class="project-grid to-animate-2" style="background-image:  url(<?php echo base_url();  ?>assets/images/project-6.jpg);">
									<div class="desc">
										<h3><a href="#">Work Title Here</a></h3>
										<span>Web Design</span>

										<p class="download"><a href="#"><i class="icon-download"></i></a></p>
										<p class="love"><a href="#"><i class="icon-heart-o"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="project-grid to-animate-2" style="background-image:  url(<?php echo base_url();  ?>assets/images/project-7.jpg);">
									<div class="desc">
										<h3><a href="#">Work Title Here</a></h3>
										<span>Web Design</span>

										<p class="download"><a href="#"><i class="icon-download"></i></a></p>
										<p class="love"><a href="#"><i class="icon-heart-o"></i></a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="project-grid to-animate-2" style="background-image:  url(<?php echo base_url();  ?>assets/images/project-8.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span>Web Design</span>

								<p class="download"><a href="#"><i class="icon-download"></i></a></p>
								<p class="love"><a href="#"><i class="icon-heart-o"></i></a></p>
							</div>
						</div>
						<div class="project-grid to-animate-2" style="background-image:  url(<?php echo base_url();  ?>assets/images/project-12.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span>Web Design</span>

								<p class="download"><a href="#"><i class="icon-download"></i></a></p>
								<p class="love"><a href="#"><i class="icon-heart-o"></i></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<div id="fh5co-counter-section" class="fh5co-counters">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate"><span>Some Fun Facts</span></h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove. </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row to-animate">
					<div class="col-md-3 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="3452" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Cups of Coffee</span>
					</div>
					<div class="col-md-3 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="234" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Client</span>
					</div>
					<div class="col-md-3 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="6542" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Projects</span>
					</div>
					<div class="col-md-3 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="8687" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Finished Projects</span>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<section id="fh5co-testimony" class="fh5co-bg-color" data-section="testimony">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate"><span>Our Happy Clients</span></h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 to-animate">
					<div class="wrap-testimony">
						<div class="owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="<?php echo base_url();  ?>assets/images/person2.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="<?php echo base_url();  ?>assets/images/person3.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="<?php echo base_url();  ?>assets/images/person2.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="getting-started getting-started-1">
		<div class="getting-grid" style="background-image:  url(<?php echo base_url();  ?>assets/images/full_image_3.jpg);">
			<div class="desc">
				<h2>Getting <span>Started</span></h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
			</div>
		</div>
		<a href="#" class="getting-grid2">
			<div class="call-to-action text-center">
				<p href="#" class="sign-up">Sign Up For Free</p>
			</div>
		</a>
	</div-->
	
	<section id="fh5co-gallery" data-section="gallery">
		<div>
			<div class="container">
			<h3 class="agileits_w3layouts_head" align="center" class="to-animate">Our <span>Gallery</span></h3>
			<div class="w3_agile_image" align="center">
				<img src="<?php echo base_url();  ?>assets/images/1.png" alt=" " class="img-responsive">
			</div>
			<p class="agile_para" align="center">These are just samples of what wonder our technology can do to your day to day work & life.</p>
			<div class="w3layouts_gallery_grids">	
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="<?php echo base_url();  ?>assets/images/image01.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo base_url();  ?>assets/images/image01.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>RecCorian</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="<?php echo base_url();  ?>assets/images/image02.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo base_url();  ?>assets/images/image02.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>RecCorian</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="<?php echo base_url();  ?>assets/images/image03.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo base_url();  ?>assets/images/image03.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>RecCorian</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="<?php echo base_url();  ?>assets/images/image04.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo base_url();  ?>assets/images/image04.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>RecCorian</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="<?php echo base_url();  ?>assets/images/image05.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo base_url();  ?>assets/images/image05.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>RecCorian</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="<?php echo base_url();  ?>assets/images/image06.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo base_url();  ?>assets/images/image06.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>RecCorian</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="<?php echo base_url();  ?>assets/images/image07.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo base_url();  ?>assets/images/image07.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>RecCorian</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="<?php echo base_url();  ?>assets/images/image17.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo base_url();  ?>assets/images/image17.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>RecCorian</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="<?php echo base_url();  ?>assets/images/image09.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="<?php echo base_url();  ?>assets/images/image09.jpg" alt=" " class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3>RecCorian</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
			<script src="<?php echo base_url();  ?>assets/js/lsb.min.js"></script>
		<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});

	</script>
	</section>	

	<section id="fh5co-team" class="fh5co-bg-color" data-section="team">
		<div class="fh5co-team">
			<div class="container">
				<div class="row">
				<div class="col-md-12  text-center">
					<h2 class="to-animate"><span>Meet Our Amazing Team</span></h2>
					<div align="center">
				<img src="<?php echo base_url();  ?>assets/images/1.png" alt=" " class="img-responsive">
					</div>
				
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-md-3">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="<?php echo base_url();  ?>assets/images/team.png" alt="Roger Garfield"></div>
							<h3>Manish Abbani</h3>
							<span class="position">Co-Founder</span>

							<p><a href="mailto:manish@shagunpolymers.com">manish@shagunpolymers.com</a></p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="<?php echo base_url();  ?>assets/images/team.png" alt="Roger Garfield"></div>
							<h3>Arjun Geel</h3>
							<span class="position">Chief Operational Officer</span>
							<p><a href="mailto:arjun@shagunpolymers.com">arjun@shagunpolymers.com</a></p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="<?php echo base_url();  ?>assets/images/team.png" alt="Roger Garfield"></div>
							<h3>Vinay Jain</h3>
							<span class="position">Co-Founder</span>
							<p><a href="mailto:vinay@shagunpolymers.com">vinay@shagunpolymers.com</a></p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="<?php echo base_url();  ?>assets/images/team.png" alt="Roger Garfield"></div>
							<h3>Mr. Nagori</h3>
							<span class="position">Finance</span>
							<p><a href="mailto:nagori@shagunpolymers.com">nnagori@shagunpolymers.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModalWhat" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					RecCorian
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="<?php echo base_url();  ?>assets/images/image15.jpg" alt=" " class="img-responsive" />
						<p>Solid surface is a man-made material usually composed of a combination of marble dust, bauxite, acrylic, epoxy or polyester resins and pigments. It is most frequently used for seamless countertop installations.
						<br/>
						It can mimic the appearance of granite, marble, stone, and other naturally occurring materials, and can be joined nearly invisibly by a trained craftsman. Typically manufactured in sheet form for fabrication into finished countertops, solid surface can also be cast into a variety of shapes, including sinks, shower pans and bathtubs. Sheet goods can also be heated and bent into three-dimensional shapes using a process called thermoforming, which adds to the versatility of the product. Color and design flexibility are key factors when choosing engineered composites over natural stone.
						<br/>
						Solid surface is available in hundreds of colors and visual textures, ranging from solid colors to sparkling, marbleized, or granite effect. Cultured marble, cultured granite, and cultured onyx describe solid surfaces colored to resemble natural stone.
							</p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->


<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModalWhy" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					RecCorian
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="<?php echo base_url();  ?>assets/images/image15.jpg" alt=" " class="img-responsive" />
						<p>
							Solid surface has many benefits:
						<br/>
									<strong>Nearly Non-Porous: </strong>  No surface is completely non-porous, but tile, quartz, and solid surface come as close to being non-porous as any countertop material.  Solid surface's extremely low porosity keeps bacteria away, promoting a cleaner and more sanitary countertop.
						<br/>
									<strong>Strong: </strong> Unlike laminate or tile, the solid surface's material goes all the way through, from top to bottom.  As a result, it resists impact better.
						<br/>
									<strong>Easy To Rehab:</strong>  Yes, solid surface will scratch if you cut on it.  But with the manufacturer-provided sandpaper, it's a simple task to sand down the scratches.
				
		
						</p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->


<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModalHow" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					RecCorian
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="<?php echo base_url();  ?>assets/images/image15.jpg" alt=" " class="img-responsive" />
						<p>Solid surface is manufactured by mixing acrylic, epoxide or polyester resin with powdered bauxite filler and pigments. The material chemically cures and is heated to 60°C or more. Cured material is then cut in sheets or shapes and sanded on one or both sides depending the brand used. Sometimes the material is brought to 160°C and cooled, to improve its heat resistance.
							<br/>
						Acrylic-modified polyester solid surface can be mixed one sheet at a time using different formulations, effects and appearances. Acrylic-modified polyester solid surface can be injected into molds to produce various solid decorative design figures.
						<br/>
						A surface fabricator shapes and installs functional and decorative surfaces, usually in buildings. Surface fabrication, as a distinct professional enterprise, usually involves complex tasks of surface shaping. A leading case is countertop fabrication.

						</p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->

	<!--section id="fh5co-blog" data-section="blog">
		<div class="fh5co-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate"><span>Read Our Blog</span></h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove. </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 to-animate blog">
						<div class="blog-grid" style="background-image: url(<?php echo base_url();  ?>assets/images/full_image_5.jpg);">
							<div class="date">
								<span>03</span>
								<small>Aug</small>
							</div>
						</div>
						<a href="#" class="desc">
							<div class="desc-grid">
								<h3>Download Free HTML5 Template</h3>
							</div>
							<div class="reading">
								<i class="icon-arrow-right2"></i>
							</div>
						</a>
					</div>

					<div class="col-md-6 to-animate blog">
						<div class="blog-grid" style="background-image: url(<?php echo base_url();  ?>assets/images/full_image_4.jpg);">
							<div class="date">
								<span>04</span>
								<small>Aug</small>
							</div>
						</div>
						<a href="#" class="desc">
							<div class="desc-grid">
								<h3>Download Free HTML5 Template</h3>
							</div>
							<div class="reading">
								<i class="icon-arrow-right2"></i>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section-->

	<section id="fh5co-contact" class="fh5co-bg-color" data-section="contact">
		<div>
			<div class="container">
				<div class="row">
				<div class="col-md-12  text-center">
					<h2 class="to-animate"><span>Contact Us</span></h2>
					<div align="center">
				<img src="<?php echo base_url();  ?>assets/images/1.png" alt=" " class="img-responsive">
					</div>
				
					</div>
				</div>
				<br><br>
				
									<form class="contact-form">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="name" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
						</div>
					</form>
			</div>
		</div>
	</section>

	<!--section id="fh5co-trusted" data-section="trusted">
		<div class="fh5co-trusted">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate"><span>Trusted By</span></h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">We’re trusted by these popular companies</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					 <div class="col-md-2 col-sm-3 col-xs-6 col-sm-offset-0 col-md-offset-1">
					 	<div class="partner-logo to-animate-2">
					 		<img src="<?php echo base_url();  ?>assets/images/logo1.png" alt="Partners" class="img-responsive">
					 	</div>
					 </div>
				    <div class="col-md-2 col-sm-3 col-xs-6">
				    	<div class="partner-logo to-animate-2">
				    		<img src="<?php echo base_url();  ?>assets/images/logo2.png" alt="Partners" class="img-responsive">
						</div>
				    </div>
				    <div class="col-md-2 col-sm-3 col-xs-6">
				    	<div class="partner-logo to-animate-2">
				    		<img src="<?php echo base_url();  ?>assets/images/logo3.png" alt="Partners" class="img-responsive">
				    	</div>
				    </div>
				    <div class="col-md-2 col-sm-3 col-xs-6">
				    	<div class="partner-logo to-animate-2">
				    		<img src="<?php echo base_url();  ?>assets/images/logo4.png" alt="Partners" class="img-responsive">
				    	</div>
				    </div>
				    <div class="col-md-2 col-sm-12 col-xs-12">
				    	<div class="partner-logo to-animate-2">
				    		<img src="<?php echo base_url();  ?>assets/images/logo5.png" alt="Partners" class="img-responsive">
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</section>

	<div class="getting-started getting-started-1">
		<div class="getting-grid" style="background-image:  url(<?php echo base_url();  ?>assets/images/full_image_3.jpg);">
			<div class="desc">
				<h2>Getting <span>Started</span></h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
			</div>
		</div>
		<a href="#" class="getting-grid2">
			<div class="call-to-action text-center">
				<p href="#" class="sign-up">Sign Up For Free</p>
			</div>
		</a>
	</div-->

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
					<h3 class="section-title">Navigate</h3>
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

