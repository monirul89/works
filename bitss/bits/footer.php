<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Bitss
 * @since 1.0
 * @version 1.2
 */
?>

<div id="footer-widgets">
    <div class="container footer-inner">
        <div class="footer-widget-area row">
            <div class="col-xs-12 col-sm-12 col-md-2 footer-widget" role="complementary">
                <div id="simpleimage-2" class="widget widget_simpleimage">
                    <p class="simple-image">
                        <img width="127" height="48" src="<?php echo get_template_directory_uri(); ?>/assets/uploads/2015/01/logo1.png" class="attachment-full" alt="logo" />
                    </p>
                </div>		
            </div><!-- .widget-area .first -->

            <div class="col-xs-12 col-sm-4 col-md-4 footer-widget" role="complementary">
                <div id="nav_menu-2" class="widget widget_nav_menu">
                    <div class="menu-footer-1-container">
                        <ul id="menu-footer-1" class="menu">
                            <li id="menu-item-140" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-4 current_page_item menu-item-140"><a href="index.html">Home</a></li>
                            <li id="menu-item-755" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-755"><a href="our-products/index.html">Products</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-393" class="menu-item menu-item-type-taxonomy menu-item-object-group menu-item-393"><a href="group/enterprise-management-solution/index.html">Enterprise Management Solution</a></li>
                                    <li id="menu-item-394" class="menu-item menu-item-type-taxonomy menu-item-object-group menu-item-394"><a href="group/education-management-solution/index.html">Education Management Solution</a></li>
                                    <li id="menu-item-395" class="menu-item menu-item-type-taxonomy menu-item-object-group menu-item-395"><a href="group/financial-management-solution/index.html">Financial Management Solution</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-144" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-144"><a href="#">Services</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-396" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-396"><a href="general-services/consultancy-services/index.html">Consultancy Services</a></li>
                                    <li id="menu-item-397" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-397"><a href="general-services/managed-it-services/index.html">Managed IT Services</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-552" class="menu-item menu-item-type-taxonomy menu-item-object-concern menu-item-552"><a href="clients.html">Clients</a></li>
                            <li id="menu-item-553" class="menu-item menu-item-type-taxonomy menu-item-object-concern menu-item-553"><a href="partners.html">Partners</a></li>
                            <li id="menu-item-1108" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1108"><a target="_blank" href="http://uttaron.bracits.com/">Uttaron</a></li>
                        </ul>
                    </div>
                </div>		
            </div><!-- .widget-area .second -->


            <div class="col-xs-12 col-sm-5 col-md-4 footer-widget" role="complementary">
                <div id="simplesubscribe-2" class="widget widget_simplesubscribe">
                    <h3 class="widgettitle"> Subscribe to our Newsletter</h3>
                    <div class="clear clearFix"></div>
                    <div class="widgetGuts">
                        <form action="#" method="post" id="frm-subscriptionFrontsimplesubscribe-2">
                            <dl>
                                <dt><label for="frm-email" class="required">Your e-mail address</label></dt>
                                <dd><input type="text" name="email" placeholder="Email" id="frm-email" required data-nette-rules='[{"op":":filled","msg":"E-mail address is requried."},{"op":":email","msg":"Your e-mail address must be valid."}]' value="" class="text"></dd>
                                <dt></dt>
                                <dd><input type="submit" name="_submit" class="subscribeButton button" value="Subscribe"></dd>
                            </dl>
                            <div>
                                <input type="hidden" name="_form_" value="subscriptionFrontsimplesubscribe-2">
                            <!--[if IE]><input type=IEbug disabled style="display:none"><![endif]-->
                            </div>
                        </form>
                        <div class="clear clearFix"></div>
                    </div>
                    <div class="clear clearFix"></div>
                </div>
                <div id="bits_social_widget-3" class="widget widget_bits_social_widget">
                    <div class="bits_social">
                        <ul  class="social">
                            <li><span class="sr">Follow Us :</span></li>
                            <li>
                                <a href="#" class="social-icon facebook" title="Follow us on facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li><a href="#" class="social-icon twitter" title="Follow us on twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-icon googleplus" title="Follow us on googleplus">
                                    <i class="fa fa-googleplus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-icon linkedin" title="Follow us on linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>		
            </div><!-- .widget-area .third -->
        </div>    
    </div>
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info container">   
        <div class="row">
            <div class="company-info col-xs-12 col-sm-3"></div>
            <div  class="col-xs-12 col-sm-6">
                <nav role="navigation" class="clearfix"></nav>	
                <div class="copyright">
                    <a href="index.html" title="biTS">biTS</a> All rights reserved.                
                </div>                
            </div>
        </div>
    </div><!-- .site-info -->
    <div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
</footer><!-- #colophon -->
</div><!-- #page -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js?ver=3.0'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-tabcollapse.js?ver=3.0'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/front-scropts.js?ver=4.1'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js?ver=2.2.2'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/main.js?ver=2.2.2'></script>
<script charset="utf-8" type="text/javascript">var switchTo5x = true;</script>
<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/buttons.js"></script>
</body>
</html>
