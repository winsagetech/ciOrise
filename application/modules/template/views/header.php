<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!--Title-->
    <title>OriseChina</title>

    <!--CSS styles-->
    <link rel="stylesheet" media="all" href="<?php echo base_url();  ?>assets/mobel/css/bootstrap.css" />
    <link rel="stylesheet" media="all" href="<?php echo base_url();  ?>assets/mobel/css/animate.css" />
    <link rel="stylesheet" media="all" href="<?php echo base_url();  ?>assets/mobel/css/font-awesome.css" />
    <link rel="stylesheet" media="all" href="<?php echo base_url();  ?>assets/mobel/css/furniture-icons.css" />
    <link rel="stylesheet" media="all" href="<?php echo base_url();  ?>assets/mobel/css/linear-icons.css" />
    <link rel="stylesheet" media="all" href="<?php echo base_url();  ?>assets/mobel/css/magnific-popup.css" />
    <link rel="stylesheet" media="all" href="<?php echo base_url();  ?>assets/mobel/css/owl.carousel.css" />
    <link rel="stylesheet" media="all" href="<?php echo base_url();  ?>assets/mobel/css/ion-range-slider.css" />
    <link rel="stylesheet" media="all" href="<?php echo base_url();  ?>assets/mobel/css/theme.css" />
    
    <!--Google Translator-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!--Google reCAPTCHA-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php include_once("googleanalytics.php") ?>
    <div class="page-loader"></div>

    <div class="wrapper">

        <!-- ======================== Navigation ======================== -->

        <nav class="navbar-fixed">

            <div class="container">

                <!-- ==========  Top navigation ========== -->

                <div class="navigation navigation-top clearfix">
                    <ul>
                        <!--google translator-->
                        <li class="nav-settings">
                            <a href="javascript:void(0);" class="nav-settings-value">Language</a>
                            <ul class="nav-settings-list">
                            <li><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en">English</a></li>
                            <li><a href="#googtrans(en|ar)" class="lang-es lang-select" data-lang="ar">Arabic</a></li>
                            <li><a href="#googtrans(en|zh-CN)" class="lang-es lang-select" data-lang="zh-CN">Chinese (Simplified)</a></li>
                            <li><a href="#googtrans(en|zh-TW)" class="lang-en lang-select" data-lang="zh-TW">Chinese (Traditional)</a></li>
                            <li><a href="#googtrans(en|fr)" class="lang-es lang-select" data-lang="fr">French</a></li>
                            <li><a href="#googtrans(en|de)" class="lang-es lang-select" data-lang="de">German</a></li>
                            <li><a href="#googtrans(en|it)" class="lang-en lang-select" data-lang="it">Italian</a></li>
                            <li><a href="#googtrans(en|ja)" class="lang-es lang-select" data-lang="ja">Japanese</a></li>
                            <li><a href="#googtrans(en|ko)" class="lang-es lang-select" data-lang="ko">Korean</a></li>
                            <li><a href="#googtrans(en|ru)" class="lang-es lang-select" data-lang="ru">Russian</a></li>
                            <li><a href="#googtrans(en|es)" class="lang-es lang-select" data-lang="es">Spanish</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="https://www.facebook.com/orisechina/"><i class="fa fa-facebook"></i></a></li>
                                <!--  
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                 -->
                        <li><a href="https://www.instagram.com/oriseinternational/"><i class="fa fa-instagram"></i></a>
                          
                    </ul>
                </div>

                <!-- ==========  Main navigation ========== -->

                <div class="navigation navigation-main">

                <!-- Setup your logo here-->

                <a href="<?php echo base_url();  ?>#page-home" class="logo"><img src="<?php echo base_url();  ?>assets/images/logo.jpg" alt="logo" /></a>    
                    
                    <div class="open-menu"><i class="icon icon-menu"></i></div>
                    <div class="floating-menu">
                        <!--mobile toggle menu trigger-->
                        <div class="close-menu-wrapper">
                            <span class="close-menu"><i class="icon icon-cross"></i></span>
                        </div>
                        <ul>
                            <li><a href="<?php echo base_url();  ?>#page-home" class="current">Home</a></li>
							<li>
                                <a href="#">Products <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown">
                                    <div class="navbar-box">
                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <div class="row">
                                                    <div class="clearfix">
                                                        <div class="col-md-3">
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[0]->id;?>"><?php echo $categories[0]->category;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[0]->srno;?>"><?php echo $products[0]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[1]->srno;?>"><?php echo $products[1]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[2]->srno;?>"><?php echo $products[2]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[3]->srno;?>"><?php echo $products[3]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[4]->srno;?>"><?php echo $products[4]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[5]->srno;?>"><?php echo $products[5]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[6]->srno;?>"><?php echo $products[6]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[7]->srno;?>"><?php echo $products[7]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[8]->srno;?>"><?php echo $products[8]->name;?></a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[1]->id;?>"><?php echo $categories[1]->category;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[9]->srno;?>"><?php echo $products[9]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[10]->srno;?>"><?php echo $products[10]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[11]->srno;?>"><?php echo $products[11]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[12]->srno;?>"><?php echo $products[12]->name;?></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[2]->id;?>"><?php echo $categories[2]->category;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[13]->srno;?>"><?php echo $products[13]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[14]->srno;?>"><?php echo $products[14]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[15]->srno;?>"><?php echo $products[15]->name;?></a></li>                                                                
                                                            </ul>
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[3]->id;?>"><?php echo substr($categories[3]->category, 0, 21);?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[16]->srno;?>"><?php echo $products[16]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[17]->srno;?>"><?php echo $products[17]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[18]->srno;?>"><?php echo $products[18]->name;?></a></li>
                                                               
                                                            </ul>
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[4]->id;?>"><?php echo $categories[4]->category;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[19]->srno;?>"><?php echo $products[19]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[20]->srno;?>"><?php echo $products[20]->name;?></a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[5]->id;?>"><?php echo $categories[5]->category;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[21]->srno;?>"><?php echo $products[21]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[22]->srno;?>"><?php echo $products[22]->name;?></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[6]->id;?>"><?php echo $categories[6]->category;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[23]->srno;?>"><?php echo $products[23]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[24]->srno;?>"><?php echo $products[24]->name;?></a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[7]->id;?>"><?php echo $categories[7]->category;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[25]->srno;?>"><?php echo $products[25]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[26]->srno;?>"><?php echo $products[26]->name;?></a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[8]->id;?>"><?php echo $categories[8]->category;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[27]->srno;?>"><?php echo $products[27]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[28]->srno;?>"><?php echo $products[28]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[29]->srno;?>"><?php echo $products[29]->name;?></a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[9]->id;?>"><?php echo $categories[9]->category;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[30]->srno;?>"><?php echo $products[30]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[31]->srno;?>"><?php echo $products[31]->name;?></a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[10]->id;?>"><?php echo $categories[10]->category;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[32]->srno;?>"><?php echo $products[32]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[33]->srno;?>"><?php echo $products[33]->name;?></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[11]->id;?>"><?php echo $categories[11]->category;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[34]->srno;?>"><?php echo $products[34]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[35]->srno;?>"><?php echo $products[35]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[36]->srno;?>"><?php echo $products[36]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[37]->srno;?>"><?php echo $products[37]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[38]->srno;?>"><?php echo $products[38]->name;?></a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[12]->id;?>"><?php echo $categories[12]->category;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[39]->srno;?>"><?php echo $products[39]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[40]->srno;?>"><?php echo $products[40]->name;?></a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[13]->id;?>"><?php echo $categories[13]->category;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[41]->srno;?>"><?php echo $products[41]->name;?></a></li>
                                                            </ul>
                                                            <ul>
                                                                <li class="label"><a href="<?php echo base_url();  ?>category_page/view_category/<?php echo $categories[14]->id;?>"><?php echo $categories[14]->category;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[42]->srno;?>"><?php echo $products[42]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[43]->srno;?>"><?php echo $products[43]->name;?></a></li>
                                                                <li><a href="<?php echo base_url();  ?>prod_page/view_product/<?php echo $products[44]->srno;?>"><?php echo $products[44]->name;?></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!--/box-->
                                        </div> <!--/box-2-->
                                    </div> <!--/navbar-box-->
                                </div> <!--/navbar-dropdown-->
                            </li>
                           
                            <!-- <li><a href="<?php echo base_url();  ?>#page-whyus">WHY US?</a></li> -->
                            <li><a href="<?php echo base_url();  ?>about">About</a></li>  
                            <li>
                                <a href="<?php echo base_url();  ?>why_us">WHY US? <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown navbar-dropdown-single">
                                    <div class="navbar-box">

                                        <!-- box-2 (without 'box-1', box-2 will be displayed as full width)-->

                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <ul>
                                                    <li><a href="<?php echo base_url();  ?>why_us#page-whoweare">WHO WE ARE</a></li>
                                                    <li><a href="<?php echo base_url();  ?>why_us#page-whoneedus">WHO NEED US</a></li>
                                                </ul>
                                            </div> <!--/box-->
                                        </div> <!--/box-2-->
                                    </div> <!--/navbar-box-->
                                </div> <!--/navbar-dropdown-->
                            </li>
                            <!-- <li><a href="<?php echo base_url();  ?>#page-howtodo">HOW TO DO?</a></li> -->
                            <li>
                                <a href="<?php echo base_url();  ?>our_services">HOW TO DO? <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown navbar-dropdown-single">
                                    <div class="navbar-box">

                                        <!-- box-2 (without 'box-1', box-2 will be displayed as full width)-->

                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <ul>
                                                    <li><a href="<?php echo base_url();  ?>our_services">OUR SERVICES</a></li>
                                                    <li><a href="<?php echo base_url();  ?>fee">FEE</a></li>
                                                    <li><a href="<?php echo base_url();  ?>client_charges">CLIENT CHARGES</a></li>
                                                    <li><a href="<?php echo base_url();  ?>qna">Q & A</a></li>
                                                    <li><a href="<?php echo base_url();  ?>about_shipping">ABOUT SHIPPING</a></li>
                                                    
                                                </ul>
                                            </div> <!--/box-->
                                        </div> <!--/box-2-->
                                    </div> <!--/navbar-box-->
                                </div> <!--/navbar-dropdown-->
                            </li>                                                      
                            <li><a href="<?php echo base_url();  ?>#page-contact">Contact</a></li>
                            <!-- <li><a href="<?php echo base_url();  ?>blog">Blog</a></li>  -->
                        </ul>
                    </div>
                </div>

            </div>
        </nav>