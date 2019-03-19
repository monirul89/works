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
<meta charset="<?php bloginfo( 'charset' ); ?>">
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
                <div class="container"><a href="" class="main-logo"><img src="http://www.watertreat.in/images/logo.png" title="Excel Filtration Pvt. Ltd." alt="Excel Filtration Pvt. Ltd."></a>
                    <ul class="nav nav-pills header-contacts hidden-sm hidden-xs">
                        <li>
                            <div class="media">
                                <div class="media-left"><span><img src="http://www.watertreat.in/images/icons/1.png" alt="" title=""></span></div>
                                <div class="media-body">
                                    <h5 class="this-subtitle">email us</h5>
                                    <h5 class="this-title">admin@excelfiltration.in</h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-left"><span><img src="http://www.watertreat.in/images/icons/2.png" alt="+91 92 2720 8234" title="+91 92 2720 8234"></span></div>
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
        
        <!--will be deleted-->
        <section class="banner">
            <div id="jssor_1" style="position: relative; margin: 0px auto; top: 0px; left: 0px; width: 1349px; height: 518.846px; overflow: hidden; visibility: visible;" data-jssor-slider="1">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; text-align: center; background-color: rgba(0, 0, 0, 0.7); display: none;">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/loading.gif">
                </div>
                <div style="position: absolute; display: block; top: 0px; left: 0px; width: 1349px; height: 518.846px;"><div style="position: absolute; display: block; top: 9.42308px; left: 24.5px; width: 1300px; height: 500px; transform: scale(1.03769);" data-scale-ratio="1.0376923076923077"><div data-u="slides" style="cursor: default; position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; z-index: 0;"><div style="top: 0px; left: 0px; width: 1300px; height: 500px; position: absolute; z-index: 0; pointer-events: none;"></div></div><div data-u="slides" style="cursor: default; position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; z-index: 0;"><div style="top: 0px; left: 0px; width: 1300px; height: 500px; position: absolute; background-color: rgb(0, 0, 0); opacity: 0; z-index: 0; display: none;"></div>
                            <div style="z-index: 1; top: 0px; left: 0px; width: 1300px; height: 500px; position: absolute; overflow: hidden;">
                                <img data-u="image" src="http://www.watertreat.in/uploads/banner/1505308457_banner2.jpg" border="0" style="top: 0px; left: 0px; width: 1300px; height: 500px; z-index: 1; position: absolute;">
                                <div class="carousel-caption" style="z-index: 11;">
                                    <div class="thm-container" style="z-index: 1;">
                                        <div class="box valign-top" style="z-index: 1;">
                                            <div class="content text-right pull-right" style="z-index: 1;">
                                                <h3 data-animation="animated fadeInUp" class="this-ttitle" style="z-index: 1;"></h3>
                                                <h2 data-animation="animated fadeInDown" class="this-mtitle" style="z-index: 1;"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-u="loading" class="jssorl-009-spin" style="position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; text-align: center; background-color: rgba(0, 0, 0, 0.7); z-index: 1000; display: none;">
                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/loading.gif">
                                </div></div>
                            <div style="z-index: 1; top: 0px; left: 0px; width: 1300px; height: 500px; position: absolute; overflow: hidden; transform: translate3d(1300px, 0px, 0px);">
                                <img data-u="image" src="http://www.watertreat.in/uploads/banner/1505308621_banner4.jpg" border="0" style="top: 0px; left: 0px; width: 1300px; height: 500px; z-index: 1; position: absolute;">
                                <div class="carousel-caption" style="z-index: 11;">
                                    <div class="thm-container" style="z-index: 1;">
                                        <div class="box valign-top" style="z-index: 1;">
                                            <div class="content text-right pull-right" style="z-index: 1;">
                                                <h3 data-animation="animated fadeInUp" class="this-ttitle" style="z-index: 1;"></h3>
                                                <h2 data-animation="animated fadeInDown" class="this-mtitle" style="z-index: 1;"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-u="loading" class="jssorl-009-spin" style="position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; text-align: center; background-color: rgba(0, 0, 0, 0.7); z-index: 1000; display: none;">
                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/loading.gif">
                                </div></div>
                            <div style="z-index: 1; top: 0px; left: 0px; width: 1300px; height: 500px; position: absolute; overflow: hidden; transform: translate3d(-1300px, 0px, 0px);">
                                <img data-u="image" src="http://www.watertreat.in/uploads/banner/1507205421_banner4.jpg" border="0" style="top: 0px; left: 0px; width: 1300px; height: 500px; z-index: 1; position: absolute;">
                                <div class="carousel-caption" style="z-index: 11;">
                                    <div class="thm-container" style="z-index: 1;">
                                        <div class="box valign-top" style="z-index: 1;">
                                            <div class="content text-right pull-right" style="z-index: 1;">
                                                <h3 data-animation="animated fadeInUp" class="this-ttitle" style="z-index: 1;"></h3>
                                                <h2 data-animation="animated fadeInDown" class="this-mtitle" style="z-index: 1;"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-u="loading" class="jssorl-009-spin" style="position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; text-align: center; background-color: rgba(0, 0, 0, 0.7); z-index: 1000; display: none;">
                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/loading.gif">
                                </div></div>
                            <div style="z-index: 1; top: 0px; left: 0px; width: 1300px; height: 500px; position: absolute; overflow: hidden; transform: translate3d(-1300px, 0px, 0px);">
                                <img data-u="image" src="http://www.watertreat.in/uploads/banner/1506946056_banner3.jpg" border="0" style="top: 0px; left: 0px; width: 1300px; height: 500px; z-index: 1; position: absolute;">
                                <div class="carousel-caption" style="z-index: 11;">
                                    <div class="thm-container" style="z-index: 1;">
                                        <div class="box valign-top" style="z-index: 1;">
                                            <div class="content text-right pull-right" style="z-index: 1;">
                                                <h3 data-animation="animated fadeInUp" class="this-ttitle" style="z-index: 1;"></h3>
                                                <h2 data-animation="animated fadeInDown" class="this-mtitle" style="z-index: 1;"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-u="loading" class="jssorl-009-spin" style="position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; text-align: center; background-color: rgba(0, 0, 0, 0.7); z-index: 1000; display: none;">
                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/loading.gif">
                                </div></div>
                            <div style="z-index: 1; top: 0px; left: 0px; width: 1300px; height: 500px; position: absolute; overflow: hidden; transform: translate3d(-1300px, 0px, 0px);">
                                <img data-u="image" src="http://www.watertreat.in/uploads/banner/1507200068_stp.jpg" border="0" style="top: 0px; left: 0px; width: 1300px; height: 500px; z-index: 1; position: absolute;">
                                <div class="carousel-caption" style="z-index: 11;">
                                    <div class="thm-container" style="z-index: 1;">
                                        <div class="box valign-top" style="z-index: 1;">
                                            <div class="content text-right pull-right" style="z-index: 1;">
                                                <h3 data-animation="animated fadeInUp" class="this-ttitle" style="z-index: 1;"></h3>
                                                <h2 data-animation="animated fadeInDown" class="this-mtitle" style="z-index: 1;">ETP PLANT</h2>
                                                <a data-animation="animated fadeInRight" href="http://omnetsolution.in/excel/industrial-plant/" class="btn btn-sm btn-primary" style="z-index: 1;">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-u="loading" class="jssorl-009-spin" style="position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; text-align: center; background-color: rgba(0, 0, 0, 0.7); z-index: 1000; display: none;">
                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/loading.gif">
                                </div></div>

                        </div></div></div>
                <!-- Bullet Navigator -->
                <div style="position: absolute; display: block; right: 12.4523px; bottom: 12.3377px; left: 613.38px; width: 122.241px; height: 16.2987px;"><div data-u="navigator" class="jssorb032" style="position: absolute; bottom: 12px; right: 12px; left: 1.12031px; width: 120px; height: 16px; top: 0.149375px; transform: scale(1.01867);" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75" data-scale-ratio="1.0186718351325454">

                        <div data-u="prototype" class="i iav" style="width: 16px; height: 16px; position: absolute; left: 0px; top: 0px;" data-jssor-button="1">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div><div data-u="prototype" class="i" style="width: 16px; height: 16px; position: absolute; left: 26px; top: 0px;" data-jssor-button="1">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div><div data-u="prototype" class="i" style="width: 16px; height: 16px; position: absolute; left: 52px; top: 0px;" data-jssor-button="1">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div><div data-u="prototype" class="i" style="width: 16px; height: 16px; position: absolute; left: 78px; top: 0px;" data-jssor-button="1">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div><div data-u="prototype" class="i" style="width: 16px; height: 16px; position: absolute; left: 104px; top: 0px;" data-jssor-button="1">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div></div></div>
                <!-- Arrow Navigator -->
                <div style="position: absolute; display: block; top: 226.008px; left: 25.7035px; width: 66.829px; height: 66.829px;"><div data-u="arrowleft" class="jssora051" style="width: 65px; height: 65px; top: 0.914488px; left: 0.914488px; transform: scale(1.02814);" data-autocenter="2" data-scale="0.75" data-scale-left="0.75" data-jssor-button="1" data-scale-ratio="1.028138087700212">

                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div></div>
                <div style="position: absolute; display: block; top: 226.008px; right: 25.7035px; width: 66.829px; height: 66.829px;"><div data-u="arrowright" class="jssora051" style="width: 65px; height: 65px; top: 0.914488px; right: 25px; left: 0.914488px; transform: scale(1.02814);" data-autocenter="2" data-scale="0.75" data-scale-right="0.75" data-jssor-button="1" data-scale-ratio="1.028138087700212">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div></div>
            </div>

        </section>
        <section class="banner">
            <div id="jssor_1" style="position: relative; margin: 0px auto; top: 0px; left: 0px; width: 1349px; height: 518.846px; overflow: hidden; visibility: visible;" data-jssor-slider="1">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; text-align: center; background-color: rgba(0, 0, 0, 0.7); display: none;">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/loading.gif">
                </div>
                <div style="position: absolute; display: block; top: 0px; left: 0px; width: 1349px; height: 518.846px;"><div style="position: absolute; display: block; top: 9.42308px; left: 24.5px; width: 1300px; height: 500px; transform: scale(1.03769);" data-scale-ratio="1.0376923076923077"><div data-u="slides" style="cursor: default; position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; z-index: 0;"><div style="top: 0px; left: 0px; width: 1300px; height: 500px; position: absolute; z-index: 0; pointer-events: none;"></div></div><div data-u="slides" style="cursor: default; position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; z-index: 0;"><div style="top: 0px; left: 0px; width: 1300px; height: 500px; position: absolute; background-color: rgb(0, 0, 0); opacity: 0; z-index: 0; display: none;"></div>
                            <div style="z-index: 1; top: 0px; left: 0px; width: 1300px; height: 500px; position: absolute; overflow: hidden;">
                                <img data-u="image" src="http://www.watertreat.in/uploads/banner/1505308457_banner2.jpg" border="0" style="top: 0px; left: 0px; width: 1300px; height: 500px; z-index: 1; position: absolute;">
                                <div class="carousel-caption" style="z-index: 11;">
                                    <div class="thm-container" style="z-index: 1;">
                                        <div class="box valign-top" style="z-index: 1;">
                                            <div class="content text-right pull-right" style="z-index: 1;">
                                                <h3 data-animation="animated fadeInUp" class="this-ttitle" style="z-index: 1;"></h3>
                                                <h2 data-animation="animated fadeInDown" class="this-mtitle" style="z-index: 1;"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-u="loading" class="jssorl-009-spin" style="position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; text-align: center; background-color: rgba(0, 0, 0, 0.7); z-index: 1000; display: none;">
                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/loading.gif">
                                </div></div>
                            <div style="z-index: 1; top: 0px; left: 0px; width: 1300px; height: 500px; position: absolute; overflow: hidden; transform: translate3d(1300px, 0px, 0px);">
                                <img data-u="image" src="http://www.watertreat.in/uploads/banner/1505308621_banner4.jpg" border="0" style="top: 0px; left: 0px; width: 1300px; height: 500px; z-index: 1; position: absolute;">
                                <div class="carousel-caption" style="z-index: 11;">
                                    <div class="thm-container" style="z-index: 1;">
                                        <div class="box valign-top" style="z-index: 1;">
                                            <div class="content text-right pull-right" style="z-index: 1;">
                                                <h3 data-animation="animated fadeInUp" class="this-ttitle" style="z-index: 1;"></h3>
                                                <h2 data-animation="animated fadeInDown" class="this-mtitle" style="z-index: 1;"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-u="loading" class="jssorl-009-spin" style="position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; text-align: center; background-color: rgba(0, 0, 0, 0.7); z-index: 1000; display: none;">
                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/loading.gif">
                                </div></div>
                            <div style="z-index: 1; top: 0px; left: 0px; width: 1300px; height: 500px; position: absolute; overflow: hidden; transform: translate3d(-1300px, 0px, 0px);">
                                <img data-u="image" src="http://www.watertreat.in/uploads/banner/1507205421_banner4.jpg" border="0" style="top: 0px; left: 0px; width: 1300px; height: 500px; z-index: 1; position: absolute;">
                                <div class="carousel-caption" style="z-index: 11;">
                                    <div class="thm-container" style="z-index: 1;">
                                        <div class="box valign-top" style="z-index: 1;">
                                            <div class="content text-right pull-right" style="z-index: 1;">
                                                <h3 data-animation="animated fadeInUp" class="this-ttitle" style="z-index: 1;"></h3>
                                                <h2 data-animation="animated fadeInDown" class="this-mtitle" style="z-index: 1;"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-u="loading" class="jssorl-009-spin" style="position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; text-align: center; background-color: rgba(0, 0, 0, 0.7); z-index: 1000; display: none;">
                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/loading.gif">
                                </div></div>
                            <div style="z-index: 1; top: 0px; left: 0px; width: 1300px; height: 500px; position: absolute; overflow: hidden; transform: translate3d(-1300px, 0px, 0px);">
                                <img data-u="image" src="http://www.watertreat.in/uploads/banner/1506946056_banner3.jpg" border="0" style="top: 0px; left: 0px; width: 1300px; height: 500px; z-index: 1; position: absolute;">
                                <div class="carousel-caption" style="z-index: 11;">
                                    <div class="thm-container" style="z-index: 1;">
                                        <div class="box valign-top" style="z-index: 1;">
                                            <div class="content text-right pull-right" style="z-index: 1;">
                                                <h3 data-animation="animated fadeInUp" class="this-ttitle" style="z-index: 1;"></h3>
                                                <h2 data-animation="animated fadeInDown" class="this-mtitle" style="z-index: 1;"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-u="loading" class="jssorl-009-spin" style="position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; text-align: center; background-color: rgba(0, 0, 0, 0.7); z-index: 1000; display: none;">
                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/loading.gif">
                                </div></div>
                            <div style="z-index: 1; top: 0px; left: 0px; width: 1300px; height: 500px; position: absolute; overflow: hidden; transform: translate3d(-1300px, 0px, 0px);">
                                <img data-u="image" src="http://www.watertreat.in/uploads/banner/1507200068_stp.jpg" border="0" style="top: 0px; left: 0px; width: 1300px; height: 500px; z-index: 1; position: absolute;">
                                <div class="carousel-caption" style="z-index: 11;">
                                    <div class="thm-container" style="z-index: 1;">
                                        <div class="box valign-top" style="z-index: 1;">
                                            <div class="content text-right pull-right" style="z-index: 1;">
                                                <h3 data-animation="animated fadeInUp" class="this-ttitle" style="z-index: 1;"></h3>
                                                <h2 data-animation="animated fadeInDown" class="this-mtitle" style="z-index: 1;">ETP PLANT</h2>
                                                <a data-animation="animated fadeInRight" href="http://omnetsolution.in/excel/industrial-plant/" class="btn btn-sm btn-primary" style="z-index: 1;">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-u="loading" class="jssorl-009-spin" style="position: absolute; top: 0px; left: 0px; width: 1300px; height: 500px; text-align: center; background-color: rgba(0, 0, 0, 0.7); z-index: 1000; display: none;">
                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/loading.gif">
                                </div></div>

                        </div></div></div>
                <!-- Bullet Navigator -->
                <div style="position: absolute; display: block; right: 12.4523px; bottom: 12.3377px; left: 613.38px; width: 122.241px; height: 16.2987px;"><div data-u="navigator" class="jssorb032" style="position: absolute; bottom: 12px; right: 12px; left: 1.12031px; width: 120px; height: 16px; top: 0.149375px; transform: scale(1.01867);" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75" data-scale-ratio="1.0186718351325454">

                        <div data-u="prototype" class="i iav" style="width: 16px; height: 16px; position: absolute; left: 0px; top: 0px;" data-jssor-button="1">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                        <div data-u="prototype" class="i" style="width: 16px; height: 16px; position: absolute; left: 26px; top: 0px;" data-jssor-button="1">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                        <div data-u="prototype" class="i" style="width: 16px; height: 16px; position: absolute; left: 52px; top: 0px;" data-jssor-button="1">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                        <div data-u="prototype" class="i" style="width: 16px; height: 16px; position: absolute; left: 78px; top: 0px;" data-jssor-button="1">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                        <div data-u="prototype" class="i" style="width: 16px; height: 16px; position: absolute; left: 104px; top: 0px;" data-jssor-button="1">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Arrow Navigator -->
                <div style="position: absolute; display: block; top: 226.008px; left: 25.7035px; width: 66.829px; height: 66.829px;"><div data-u="arrowleft" class="jssora051" style="width: 65px; height: 65px; top: 0.914488px; left: 0.914488px; transform: scale(1.02814);" data-autocenter="2" data-scale="0.75" data-scale-left="0.75" data-jssor-button="1" data-scale-ratio="1.028138087700212">

                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div>
                </div>
                <div style="position: absolute; display: block; top: 226.008px; right: 25.7035px; width: 66.829px; height: 66.829px;"><div data-u="arrowright" class="jssora051" style="width: 65px; height: 65px; top: 0.914488px; right: 25px; left: 0.914488px; transform: scale(1.02814);" data-autocenter="2" data-scale="0.75" data-scale-right="0.75" data-jssor-button="1" data-scale-ratio="1.028138087700212">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div>
                </div>
            </div>

        </section>