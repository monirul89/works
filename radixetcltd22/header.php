<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Radixetcltd
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script async="" src="https://www.google-analytics.com/analytics.js"></script>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-70923883-1', 'auto');
            ga('send', 'pageview');

        </script>
        <header class="row main-header">
            <div class="row this-inner">
                <div class="container"><a href="" class="main-logo"><img src="http://www.watertreat.in/assets/images/logo.png" title="Excel Filtration Pvt. Ltd." alt="Excel Filtration Pvt. Ltd."></a>
                    <ul class="nav nav-pills header-contacts hidden-sm hidden-xs">
                        <li>
                            <div class="media">
                                <div class="media-left"><span><img src="http://www.watertreat.in/assets/images/icons/1.png" alt="" title=""></span></div>
                                <div class="media-body">
                                    <h5 class="this-subtitle">email us</h5>
                                    <h5 class="this-title">admin@excelfiltration.in</h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-left"><span><img src="http://www.watertreat.in/assets/images/icons/2.png" alt="+91 92 2720 8234" title="+91 92 2720 8234"></span></div>
                                <div class="media-body">
                                    <h5 class="this-subtitle">call us now</h5>
                                    <h3 class="this-title">+91 92 2720 8234</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <button type="button" data-toggle="collapse" data-target="#plumber-nav" aria-expanded="false" class="navbar-toggle collapsed">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
        </header>
        <div class="porltv navhere">
            <nav class="navbar navbar-default plumber-navbar">
                <div class="container">
                    <div class="row navbar-container">
                        <div id="plumber-nav" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li class="dropdown"><a href="#">Mineral Water Plant</a>
                                    <ul class="dropdown-menu services">
                                        <li><a href="#">Mineral Water Plant</a></li>
                                        <li><a href="#">Bottle Filling Machine</a></li>
                                        <li><a href="#">Pouch Packing Machine</a></li>
                                        <li><a href="#">Glass Packing Machine</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Industrial Plant</a>
                                    <ul class="dropdown-menu services">
                                        <li><a href="#">Effluent Water Treatment Plant</a></li>
                                        <li><a href="#">Sewage Treatment Plant</a></li>
                                        <li><a href="#">R.O.Plant</a></li>
                                        <li><a href="#">Water Softening Plant</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                            <a href="javascript: void(0);" data-toggle="modal" data-target="#myModal2" class="get-appointment-btn"><span>Registration</span></a>
                            <a href="javascript: void(0);" data-toggle="modal" data-target="#myModalReg" class="get-appointment-btn"><span>Login</span></a>
                            <ul class="nav nav-pills header-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="">
            <?php include 'slider.php'; ?>
        </div>