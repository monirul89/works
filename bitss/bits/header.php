<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Bitss
 * @since 1.0
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html lang = "en-US">

    <!--Mirrored from www.bracits.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2019 14:23:10 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>biTS | WELCOME</title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300,400italic,600italic,700italic,300italic' rel='stylesheet' type='text/css'>
        <link href = 'http://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel = 'stylesheet' type = 'text/css'>
        <!--favicon -->

        <link rel = "icon" href = "<?php echo get_template_directory_uri(); ?>/assets/uploads/2015/02/favicon-5.ico" />

        <!--[if IE]><link rel = "shortcut icon" href = "uploads/2015/02/favicon-5.ico" /><![endif] -->

        <style type = 'text/css'>
            .no-break br {
                display: none!important;
            }
        </style>

        <link rel = 'stylesheet' id = 'bits-bootstrap-css' href = '<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css?ver=4.1' type = 'text/css' media = 'all' />
        <link rel = 'stylesheet' id = 'owl-carousel-style-css' href = '<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css?ver=4.1' type = 'text/css' media = 'all' />
        <link rel = 'stylesheet' id = 'owl-carousel-transitions-css' href = '<?php echo get_template_directory_uri(); ?>/assets/css/owl.transitions.css?ver=4.1' type = 'text/css' media = 'all' />
        <link rel = 'stylesheet' id = 'bits-g5-css' href = '<?php echo get_template_directory_uri(); ?>/assets/css/g5.css?ver=4.1' type = 'text/css' media = 'all' />
        <link rel = 'stylesheet' id = 'bits-icon-css' href = '<?php echo get_template_directory_uri(); ?>/assets/css/bits-icon.css?ver=4.1' type = 'text/css' media = 'all' />
        <link rel = 'stylesheet' id = 'font-awesome-css' href = '<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css?ver=4.1' type = 'text/css' media = 'all' />
        <link rel = 'stylesheet' id = 'animate-css' href = '<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css?ver=4.1' type = 'text/css' media = 'all' />
        <link rel = 'stylesheet' id = 'magnific-popup-style-css' href = '<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css?ver=4.1' type = 'text/css' media = 'all' />
        <link rel = 'stylesheet' id = 'hv-accordion-css' href = '<?php echo get_template_directory_uri(); ?>/assets/css/hv-accordion.css?ver=4.1' type = 'text/css' media = 'all' />
        <link rel = 'stylesheet' id = 'bits-style' href = '<?php echo get_template_directory_uri(); ?>/style.css?ver=1.1' type = 'text/css' media = 'all' />
        <script type = 'text/javascript' src = '<?php echo get_template_directory_uri(); ?>/assets/js/jquery/jquery.js?ver=1.11.1'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/modernizr.js?ver=4.1'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.min.js?ver=2.2.2'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js?ver=4.1'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/packery.min.js?ver=2.2.2'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/device.min.js?ver=2.2.2'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js?ver=2.2.2'></script>
        <script charset="utf-8" type="text/javascript">var switchTo5x = true;</script>
        <script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/buttons.js"></script>
        <style type="text/css">
            .entry-content {
                font-family: 'Open Sans', sans-serif; 
                font-size:14px; 
                font-weight: normal; 
                color:#6B6B6B;}
            </style>
            <!--[if lt IE 9]>
            <script src="<?php // echo get_template_directory_uri();                                 ?>/assets/js/html5shiv.min.js"></script>
            <script src="<?php // echo get_template_directory_uri();                                 ?>/assets/js/respond.min.js"></script>
            <![endif]-->

        </head>

        <body class="home page page-id-4 page-template-default group-blog bits">
        <div id="page" class="hfeed site">
            <header id="header" class="wow fadeInDown" data-wow-duration="2s">
                <nav  class="navbar navbar-custom" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="sm-search-area hidden-lg hidden-md wp-search-form">
                                <form method="get" class="form-search" action="http://www.bracits.com/">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="screen-reader-text">Search for:</span>
                                            <input type="text" class="form-control search-query expandable" placeholder="Search..." value="" name="s">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-search searchsubmit">
                                                    <span class="bits-icon-search"></span>

                                                </button>
                                                <button type="button" class="btn btn-search searchexpand">
                                                    <span class="bits-icon-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </form>  
                            </div>


                            <div id="logo">
                                <a class="site-link" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/2015/01/logo1.png"  height="" width="" alt="biTS"/></a>
                            </div><!-- end of #logo -->
                            <div id="logo-sm">
                                <a class="site-link" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/2015/01/logo-xs1.png"  height="" width="" alt="biTS"/></a>
                            </div><!-- end of #logo -->


                        </div>
                        <div class="topbar-nav pull-right">
                            <ul class="topbar-nav-menu">
                                <li class="menu-item">
                                    <a href="javascript:void(0)">
                                        <i class="bits-icon-phone"></i>Reception: +88028836303</a>
                                </li>
                            </ul>
                        </div>       
                        <div class="collapse navbar-collapse navbar-ex1-collapse pull-right">
                            <?php
                            $walker = new bitss_Walker_Nav_Menu();
                            wp_nav_menu(array(
                                'menu' => '',
                                'container' => FALSE,
                                'menu_class' => 'nav navbar-nav',
                                'menu_id' => 'menu-primary',
                                'walker' => '',
                                'theme_location' => 'top',
                                'walker' => $walker
                            ));
                            ?>
                            <ul id="menu-primary" class="nav navbar-nav">
                                <li class="menu-item wp-search-form hidden-xs hidden-sm">
                                    <form method="get" class="form-search" action="http://localhost/bits/">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="screen-reader-text">Search for:</span>
                                                <input type="text" class="form-control search-query expandable" placeholder="Search..." value="" name="s">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-search searchsubmit"><span class="bits-icon-search"></span></button>
                                                    <button type="button" class="btn btn-search searchexpand"><span class="bits-icon-search"></span></button>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>		    
                    </div>
                </nav><!-- .site-navigation -->
            </header>
