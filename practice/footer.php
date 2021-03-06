<?php global $practice; ?>
<!-- Footer -->
<footer>
    <!-- Footer Links -->
    <div class="footer-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 footer-info-item">
                    <h3>Information</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Customer Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Orders &amp; Returns</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 footer-info-item">
                    <h3>My Account</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Sign In</a></li>
                        <li><a href="#">View Cart</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">Track My Order</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>	
                </div>
                <div class="col-sm-4 footer-info-item">
                    <h3><span class="glyphicon glyphicon-list-alt"></span> Newsletter</h3>
                    <p>Sign up for exclusive offers.</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email address">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                Subscribe!
                            </button>
                        </span>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

    <!-- Copyright etc -->
    <div class="small-print">
        <div class="container">
            <p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
            <p><?php echo $practice['copy-right'];?></p>
        </div>
    </div>

</footer>




<?php wp_footer(); ?>
</body>

</html>
