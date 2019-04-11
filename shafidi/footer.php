<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Shafidi
 * @since 1.0
 * @version 1.2
 */
?>
<?php $semail = ''; ?>

<footer id="colophon" class="site-footer" role="contentinfo">

    <div class="footer_area">
        <div class="container">
            <div class="row">

                <div class="col-sm-4 footer-hover">
                    <h4 class="title">Contact Information</h4>
                    <div class="contact-detalls">
                        <p><strong>MOBILE / TELEPHONE :</strong></p>
                        <p><span class="f-mobile"></span>+8801734-993393 &nbsp; &nbsp;<span class="f-mobile"></span> +8801741-720283<br/>
                            <span class="f-mobile"></span>+8801799-033158 &nbsp; &nbsp;<span class="f-telephone"></span> +8802-58316658</p>

                    </div>
                    <p style="font-size:18px"><strong>CORPORATE OFFICE ADDRESS:</strong><br />159/1, Malibagh Bazar Road, 1<sup>st</sup> Floor,<br /> Flat-2/A, Dhaka-1217, Bangladesh.</p>


                    <div class="contact-eamil">
                        <p style="font-size:18px"><strong>EMAIL :</strong></p>
                        <p> 
                            <span class="f-email"></span> info@shafidi.com<br/>
                            <span class="f-email"></span> shafidibd@gmail.com<br/>
                            <span class="f-email"></span> exportshafidibdjute@gmail.com<br/>
                            <span class="f-email"></span> exportshafidibjei@gmail.com<br/>
                            <span class="f-email"></span> importshafidibjei@gmail.com<br/>
                            <span class="f-email"></span> purchasemanagershafidibdjute@gmail.com<br/>
                            <span class="f-email"></span> financemanagementshafidibdjute@gmail.com</p>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-4 footer-hover">
                            <h4 class="title">Export Products</h4>
                            <div class="export-list">
                                <p>
                                    <?php
                                    $args = array(
                                        'post_type' => array('post', 'export_product'),
                                        'cache_results' => false,
                                        'posts_per_page' => 15
                                    );
                                    $loop = new WP_Query($args);
                                    while ($loop->have_posts()) : $loop->the_post();
                                        ?>
                                        <a class="export" href="<?php the_permalink(); ?>" aria-hidden="true">
                                            <span><?php the_title(); ?></span> </a>
                                    <?php endwhile; ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 footer-hover">
                            <h4 class="title">Import Products</h4>
                            <div class="export-list">
                                <p>
                                    <?php
                                    $args = array(
                                        'post_type' => array('import_product'),
                                        'cache_results' => false,
                                        'posts_per_page' => 15
                                    );
                                    $loop = new WP_Query($args);
                                    while ($loop->have_posts()) : $loop->the_post();
                                        ?>
                                        <a class="post-thumbnail home-post-thum" href="<?php the_permalink(); ?>" aria-hidden="true">
                                            <span><?php the_title(); ?></span> </a>
                                    <?php endwhile; ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 footer-hover">
                            <h4 class="title">News letter</h4>
                            <div class="contact-detalls">

<!--                                <form class="demoForm clearfix" id="demoForm2" action="" method="POST">
                                    <p><input type="email" placeholder="Type Your Email" name="subscribeEmail" id="subscribeEmail" value="<?php echo $semail; ?>"/></p>
                                    <div id="emailerror1"></div>
                                    <p><input data-target="#popupContent" type="submit" name="submit2" id="submit2" class="request-button" value="Demo Request"></p>
                                </form>-->
                                <div class="demoRequest" id="demoRequest1">
                                    <form class="demoForm clearfix" name="demoForm1" action="" method="POST">
                                        <div class="demoRequestEmail" id="demoRequestEmail1">
                                            <p class="demoFormPlaceholder">Type Your Email</p>
                                        </div>
                                        <input type="submit" name="submit1" id="submit1" class="request-button" value="Send">
                                    </form>
                                    <div id="emailerror1"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
//            wp_nav_menu(array(
//                'theme_location' => 'footer_menu',
//                'menu_class' => 'footerMenu',
//                'container' => false
//            ));
            ?>
        </div>
    </div>
</div>

<div class = "copyrightArea">
    <div class = "container">
        Copyright © Shafidi BD Jute Export&Import
        <span class = "design_link">Powered by : <a href = "#" target = "_blank">www.shafidi.com</a></span> </div>
</div>
</footer><!--#colophon -->
</div>
<div class="social-body">
    <ul class="social-menu-left">
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
<div id="quickButton" class="quickButton">
    <img src="<?php echo get_template_directory_uri(); ?>/images/quick-button.jpg" id="quick-button" alt="Quick">
</div>
<div id="quick-contact" class="quick-contact">
    <div class="quick-right" id="quickRight">
        <div class="quick-text">
            <h3>Quick Contact</h3>
            <p>Please fill the form below. Our team will connect will you as soon as possible.</p>
        </div>

        <table width="100%">
            <form method="post" action="">
                <tr>
                    <td><input name="name" type="text" maxlength="20" id="fullName" placeholder="Your Name*" required /></td>
                </tr>

                <tr>
                    <td><input name="subject" type="text" maxlength="50" id="quickSubject" placeholder="Subjects*" required /></td>
                </tr>

                <tr>
                    <td><input name="number" type="number" minlength="6" maxlength="14" id="quickNumber" placeholder="Your Number*" /></td>
                </tr>

                <tr>
                    <td><input name="qemail" type="email" id="quickEmail" placeholder="Email*" required /></td>
                </tr>

                <tr>
                    <td>
                        <textarea name="message"id="quickMessage" rows="4" cols="50" placeholder="Message here...*"></textarea>
                    </td>

                </tr>

                <tr>
                    <td><input class="bg-primary" name="qsubmit" type="submit" id="quickSubmit" value="Send Message" /></td>
                </tr>
            </form>
        </table>

    </div>

</div>
<a href="#" class="scrollup" style="display: none;"><i class="fa fa-angle-up active"></i></a>


<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<?php ?>
<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function () { scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("logo-banner-top").style.height = "120px";
            document.getElementById("marqueeheight").style.height = "120px";
            document.getElementById("imglogo").classList.add("imglogo");
        } else {
            document.getElementById("logo-banner-top").style.height = "170px";
            document.getElementById("marqueeheight").style.height = "170px";
            document.getElementById("imglogo").classList.remove("imglogo");
        }
    }
</script>
</body>
</html>
