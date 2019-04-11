<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Shafidi
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="shafidi shafidi.com SHAFIDI BD JUTE EXPORT & IMPORT">
        <meta name="keywords" content="shafidi.com SHAFIDI,BD,JUTE,EXPORT,IMPORT,JUTE EXPORT,JUTE IMPORT,SHAFIDI BD JUTE">
        <meta name="author" content="shafidi SHAFIDI BD">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shafidi || <?php the_title(); ?></title>
        <link rel="icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/images/logo22.jpg">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!-- javascript -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>

        <?php wp_head(); ?>
        <?php
        if (isset($_POST['submit1'])) {

            $to = "monirul89@gmail.com, mo7rul@gmail.com";

            if ($_POST["email1"]) {
                $from = $_POST["email1"];
            } else {
                $from = null;
            }

            $subject = "Demo Request";
            $message = $from;

            $headers = "From: $from";

            $ok = @mail($to, $subject, $message, $headers, "-f " . $from);

            if ($ok) {
                $demoThank = "Thank you for your Request";
            } else {
                echo "error";
            }
        }
        ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">

            <header id="masthead" class="site-header" role="banner">

                <div class="navbar-top">
                    <div class="container">
                        <div class="logo navbar-left">
                            <h1><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg"></h1>
                        </div>
                        <div class="logo-banner-top">
                            <marquee direction="down" width="100%" height="170" behavior="alternate">
                                <marquee behavior="alternate">
                                    <h1>SHAFIDI BD ( SBJEI )</h1>
                                </marquee>
                            </marquee>

                        </div>
                        <div class="social-area">
                            <div class="top1 social">
                                <ul class="social-menu-top">
                                    <li><a class="facebook" href="#"></a></li>
                                    <li><a class="line" href="#"></a></li>
                                    <li><a class="wechat" href="#"></a></li>
                                    <li><a class="twitter" href="#"></a></li>
                                    <li><a class="youhave" href="#"></a></li>
                                    <li><a class="linkin" href="#"></a></li>
                                    <li><a class="telegram" href="#"></a></li>
                                    <li><a class="google-plus" href="#"></a></li>
                                    <li><a class="skypee" href="#"></a></li>
                                    <li><a class="instagram" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="top1 facebookLike">
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSBJEIF%2F&tabs&width=377&height=70&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="377" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                            </div>
                            <div class="top1 search-box">
                                <?php dynamic_sidebar('search-top'); ?>
                            </div>
                        </div>

                    </div>
                </div>
                <nav class="navbar navbar-default menubar">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">SHAFIDI</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">

                            <?php if (has_nav_menu('primary')): ?>
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => false,
                                    'menu_id' => 'menu',
                                    'menu_class' => ''
                                ));
                                ?>
                                <!-- .main-navigation -->

                            <?php else: ?>

                                <ul id="menu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>

                            <?php endif; ?>

                        </div><!--/.nav-collapse -->
                    </div>
                </nav>
            </header><!-- #masthead -->
            <?php if (is_home() || is_front_page()) { ?>
                <div class="slider">
                    <?php include_once 'template-parts/slider-full.php'; ?>
                </div>
            <?php } ?>


