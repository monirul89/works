<?php global $practice; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title><?php bloginfo('title'); ?></title>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <!-- Navigation -->
        <div class="navbar-top clearfix">
            <div class="container">
                <div class="col-sm-5">
                    <p><span class="glyphicon glyphicon-phone"> <?php echo $practice['phoneno']; ?></span> | <span class="glyphicon glyphicon-envelope"> <?php echo $practice['email']; ?></span></p>
                </div>
                <div class="col-sm-7">
                    <ul class="social-links-menu">

                        <?php if($practice['soc-faccc']): ?>
                        <li><a href="<?php echo $practice['soc-faccc']; ?>"><i class="fa fa-facebook"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if($practice['soc-twiii']): ?>
                        <li><a href="<?php echo $practice['soc-twiii']; ?>"><i class="fa fa-twitter"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if($practice['soc-pluu']): ?>
                        <li><a href="<?php echo $practice['soc-pluu']; ?>"><i class="fa fa-google-plus"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if($practice['soc-linn']): ?>
                        <li><a href="<?php echo $practice['soc-linn']; ?>"><i class="fa fa-linkedin"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if($practice['soc-staa']): ?>
                        <li><a href="<?php echo $practice['soc-staa']; ?>"><i class="fa fa-stack-overflow"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if($practice['soc-inss']): ?>
                        <li><a href="<?php echo $practice['soc-inss']; ?>"><i class="fa fa-instagram"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if($practice['soc-whaa']): ?>
                        <li><a href="<?php echo $practice['soc-whaa']; ?>"><i class="fa fa-whatsapp"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if($practice['soc-wecchat']): ?>
                        <li><a href="<?php echo $practice['soc-wecchat']; ?>"><i class="fa fa-wechat"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if($practice['soc-skyy']): ?>
                        <li><a href="<?php echo $practice['soc-skyy']; ?>"><i class="fa fa-skype"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if($practice['soc-vibb']): ?>
                        <li><a href="<?php echo $practice['soc-vibb']; ?>"><i class="fa fa-vimeo"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if($practice['soc-liee']): ?>
                        <li><a href="<?php echo $practice['soc-liee']; ?>"><i class="fa fa-linode"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if($practice['soc-tell']): ?>
                        <li><a href="<?php echo $practice['soc-tell']; ?>"><i class="fa fa-telegram"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if($practice['soc-vinn']): ?>
                        <li><a href="<?php echo $practice['soc-vinn']; ?>"><i class="fa fa-vine"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if($practice['soc-youu']): ?>
                        <li><a href="<?php echo $practice['soc-youu']; ?>"><i class="fa fa-youtube"></i></a></li>
                        <?php endif; ?>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Logo and responsive toggle -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="floatLeft" href="#">
                        <img src="<?php echo $practice['priac-mddd']['url']; ?>" style="width: <?php echo $practice['priac-widdd'] ?>" alt="" />
                    </a>
                </div>
                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="navbar">

                    <?php
                    wp_nav_menu(array(
                    'menu' => '',
                    'theme_location' => 'primary_menu',
                    'menu_class' => 'nav navbar-nav navbar-right',
                    'container' => FALSE,
                    'walker' => new WPDocs_Walker_Nav()
                    ));
                    ?>

                    <!--                    <ul class="nav navbar-nav navbar-right">
                                            <li class="active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li>
                                                <a href="#">Products</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                                                <ul class="dropdown-menu" aria-labelledby="about-us">
                                                    <li><a href="#">Engage</a></li>
                                                    <li><a href="#">Pontificate</a></li>
                                                    <li><a href="#">Synergize</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">My Account</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a>
                                            </li>
                                        </ul>-->

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>