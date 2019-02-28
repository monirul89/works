<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage The_Shoptd
 * @since 1.0
 * @version 1.2
 */
?>

<!--</div> #content 

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="wrap">
        <?php
        //get_template_part('template-parts/footer/footer', 'widgets');

       // if (has_nav_menu('social')) :
            ?>
            <nav class="social-navigation" role="navigation" aria-label="<?php //esc_attr_e('Footer Social Links Menu', 'theshoptd'); ?>">
                <?php
//                wp_nav_menu(
//                        array(
//                            'theme_location' => 'social',
//                            'menu_class' => 'social-links-menu',
//                            'depth' => 1,
//                            'link_before' => '<span class="screen-reader-text">',
//                            'link_after' => '</span>' . theshoptd_get_svg(array('icon' => 'chain')),
//                        )
//                );
                ?>
            </nav> .social-navigation 
            <?php
       // endif;

        //get_template_part('template-parts/footer/site', 'info');
        ?>
    </div> .wrap 
</footer> #colophon 
</div> .site-content-contain 
</div> #page 


</body>
</html>-->

<!-- newsletter -->
<div class="footer-top">
    <div class="container-fluid">
        <div class="col-xs-8 agile-leftmk">
            <h2>Get your Groceries delivered from local stores</h2>
            <p>Free Delivery on your first order!</p>
            <form action="#" method="post">
                <input type="email" placeholder="E-mail" name="email" required="">
                <input type="submit" value="Subscribe">
            </form>
            <div class="newsform-w3l">
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
            </div>
        </div>
        <div class="col-xs-4 w3l-rightmk">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tab3.png" alt=" ">
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //newsletter -->
<!-- footer -->
<footer>
    <div class="container">
        <!-- footer third section -->
        <div class="footer-info w3-agileits-info">
            <!-- footer categories -->
            <div class="col-sm-5 address-right">
                <div class="col-xs-6 footer-grids">
                    <h3>Categories</h3>
                    <ul>
                        <li>
                            <a href="product.html">Grocery</a>
                        </li>
                        <li>
                            <a href="product.html">Fruits</a>
                        </li>
                        <li>
                            <a href="product.html">Soft Drinks</a>
                        </li>
                        <li>
                            <a href="product2.html">Dishwashers</a>
                        </li>
                        <li>
                            <a href="product.html">Biscuits & Cookies</a>
                        </li>
                        <li>
                            <a href="product2.html">Baby Diapers</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-6 footer-grids agile-secomk">
                    <ul>
                        <li>
                            <a href="product.html">Snacks & Beverages</a>
                        </li>
                        <li>
                            <a href="product.html">Bread & Bakery</a>
                        </li>
                        <li>
                            <a href="product.html">Sweets</a>
                        </li>
                        <li>
                            <a href="product.html">Chocolates & Biscuits</a>
                        </li>
                        <li>
                            <a href="product2.html">Personal Care</a>
                        </li>
                        <li>
                            <a href="product.html">Dried Fruits & Nuts</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- //footer categories -->
            <!-- quick links -->
            <div class="col-sm-5 address-right">
                <div class="col-xs-6 footer-grids">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                        <li>
                            <a href="help.html">Help</a>
                        </li>
                        <li>
                            <a href="faqs.html">Faqs</a>
                        </li>
                        <li>
                            <a href="terms.html">Terms of use</a>
                        </li>
                        <li>
                            <a href="privacy.html">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-6 footer-grids">
                    <h3>Get in Touch</h3>
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i> Dhaka, Bangladesh.</li>
                        <li>
                           <i class="fa fa-phone"></i> +8801915047779 </li>
                        <li>
                            <i class="fa fa-phone"></i> +8801737731660 </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <a href="mailto:monirul89@mail.com"> monirul89@mail.com</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <a href="mailto:ronjukhan89@mail.com"> ronjukhan89@mail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- //quick links -->
            <!-- social icons -->
            <div class="col-sm-2 footer-grids  w3l-socialmk">
                <h3>Follow Us on</h3>
                <div class="social">
                    <ul>
                        <li>
                            <a class="icon fb" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a class="icon tw" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="icon gp" href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="agileits_app-devices">
                    <h5>Download the App</h5>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" alt="">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2.png" alt="">
                    </a>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //social icons -->
            <div class="clearfix"></div>
        </div>
        <!-- //footer third section -->
        <!-- footer fourth section (text) -->
        <div class="agile-sometext">

            <!-- payment -->
            <div class="sub-some child-momu">
                <h5>Payment Method</h5>
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pay2.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pay5.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pay1.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pay4.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pay6.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pay3.png" alt="">
                    </li>
                </ul>
            </div>
            <!-- //payment -->
        </div>
        <!-- //footer fourth section (text) -->
    </div>
</footer>
<!-- //footer -->
<!-- copyright -->
<div class="copy-right">
    <div class="container">
        <p>© 2019 The Shoptd. All rights reserved | Design by
            <a href="https://theshoptd.com/"> https://theshoptd.com/ </a>
        </p>
    </div>
</div>
<!-- //copyright -->

<!-- js-files -->
<!-- jquery -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-2.1.4.min.js"></script>
<!-- //jquery -->

<!-- popup modal (for signin & signup)-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- Large modal -->
<!-- <script>
        $('#').modal('show');
</script> -->
<!-- //popup modal (for signin & signup)-->

<!-- cart-js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/minicart.js"></script>
<script>
    paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

    paypalm.minicartk.cart.on('checkout', function (evt) {
        var items = this.items(),
                len = items.length,
                total = 0,
                i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });
</script>
<!-- //cart-js -->

<!-- price range (top products) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-ui.js"></script>
<script>
    //<![CDATA[ 
    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [50, 6000],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

    }); //]]>
</script>
<!-- //price range (top products) -->

<!-- flexisel (for special offers) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.flexisel.js"></script>
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 2
                }
            }
        });

    });
</script>
<!-- //flexisel (for special offers) -->

<!-- password-script -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<!-- smoothscroll -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/move-top.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->

<!-- for bootstrap working -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- //js-files -->

<?php wp_footer(); ?>
</body>

</html>