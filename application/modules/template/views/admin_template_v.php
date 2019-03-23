<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Winsage | ERP </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url();  ?>assets/bower_components/morris.js/morris.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        * {
            box-sizing: border-box;
        }

        .zoom {
            padding: 5px;
            transition: transform .2s;
            width: 50px;
            height: 50px;
            margin: 0 auto;
        }

        .zoom:hover {
            -ms-transform: scale(4); /* IE 9 */
            -webkit-transform: scale(4); /* Safari 3-8 */
            transform: scale(4);
        }

        .table > tbody > tr > td {
            vertical-align: middle;
        }
    </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url();  ?>dashboard" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>O</b>RP</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Orise </b>ERP</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="<?php echo base_url();  ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url();  ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $this->session->userdata('user'); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo base_url();  ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                   <?php echo $this->session->userdata('user'); ?>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url();  ?>logout" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">

                <li class="header">ADMIN AREA</li>
                <?php if($this->session->userdata('user')=="admin") {?>
                <li>
                    <a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <?php } ?>                
                <!--li>
                    <a href="<?php //echo base_url(); ?>dashboard/orders"><i class="fa fa-cubes"></i> <span>Orders</span></a>
                </li-->
                <!--<li>
                    <a href="../widgets.html"><i class="fa fa-money"></i> <span>Sale</span></a>
                </li>
                <li>
                    <a href="<?php //echo base_url(); ?>dashboard/invoices"><i class="fa fa-barcode"></i> <span>Invoice</span></a>
                </li>-->
                <!--li>
                    <a href="<?php //echo base_url(); ?>dashboard/users"><i class="fa fa-users"></i> <span>Dealers</span></a>
                </li-->
                
                <!-- 
                <li>
                    <a href="<?php echo base_url(); ?>dashboard/projects"><i class="fa fa-gears"></i> <span>Projects</span></a>
                </li>
                 -->
                <li>
                    <a href="<?php echo base_url(); ?>dashboard/orders"><i class="fa fa-bell"></i> <span>Catalog Requests</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>dashboard/categories"><i class="fa fa-sitemap"></i> <span>Categories</span></a>
                </li>     
                <li>
                    <a href="<?php echo base_url(); ?>dashboard/inventory"><i class="fa fa-cubes"></i> <span>Sub Categories</span></a>
                </li>           
                <!--li>
                    <a href="#"><i class="fa fa-money"></i> <span>Payments</span></a>
                </li-->
                <li>
                    <a href="<?php echo base_url(); ?>dashboard/blogs"><i class="fa fa-money"></i> <span>Blogs</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>dashboard/subscribers"><i class="fa fa-envelope"></i> <span>Subscribers</span></a>
                </li>
                <!--li>
                    <a href="<?php //echo base_url(); ?>dashboard/career"><i class="fa fa-money"></i> <span>Careers</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-star"></i> <span>Reviwes</span></a>
                </li-->
                <!-- 
                <li>
                    <a href="../widgets.html"><i class="fa fa-user"></i> <span>Profile</span></a>
                </li>
                 -->
                 <!--li>
                    <a href="<?php //echo base_url(); ?>dashboard/accounts"><i class="fa fa-users"></i> <span>Logins</span></a>
                </li-->
                <li>
                    <a href="<?php echo base_url();  ?>logout"><i class="fa fa-sign-out"></i> <span>Signout</span></a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php echo $header; ?>
                <small><?php echo $page_desc; ?></small>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <?php $this->load->view($content_view); ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2017-2018 <a target="_blank" href="http://winsagetech.com">Winsage Technologies</a>.</strong> All rights
        reserved.
    </footer>


</div>
<!-- ./wrapper -->



<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
</script>
</body>
</html>
