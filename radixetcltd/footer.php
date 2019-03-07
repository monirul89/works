<footer>
    <div class="site-footer">
        <div class="container">
            <div class="row footer-sidebar">
                <div class="col-md-4 col-sm-6 col-xs-12 widget widget-footer">
                    <h4 class="widget-title">About Us</h4>
                    <div class="text-widget">
                        <p>We use our wide range of processes with an integrated approach to deliver</p>
                        <ul class="nav nav-pills footer-social">
                            <li><a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12 widget widget-footer">
                    <h4 class="widget-title">Quick Links</h4>
                    <ul class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Mineral Water Plant</a></li>
                        <li><a href="#">Industrial Plant</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 widget widget-footer">
                    <h4 class="widget-title">Mineral Water Plant</h4>
                    <ul class="menu">
                        <li><a href="#">Mineral Water Plant</a></li>
                        <li><a href="#">Bottle Filling Machine</a></li>
                        <li><a href="#">Pouch Packing Machine</a></li>
                        <li><a href="#">Glass Packing Machine</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 widget widget-footer">
                    <h4 class="widget-title">Industrial Plant</h4>
                    <ul class="menu">
                        <li><a href="#">R.O.Plant</a></li>
                        <li><a href="#">Water Softening Plant</a></li>
                        <li><a href="#">D.M. Plant / M.B. Plant</a></li>
                        <li><a href="#">Swimming Pool Plant</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-texts">© 2019 by radixetctld All rights reserved.</div>
            <div class="credit-texts">Created by: <a href="#" target="_blank">monirul89@gmail.com</a></div>
        </div>
    </div>
</footer>
        <div id="myModal2" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title text-center">Customer Registration</h4>
                    </div>
                    <div class="modal-body">                        
                        <form id="popup_contactForm" method="post" action="#" onsubmit="return validate_enquiry('popup_')" class="row contact-form">

                            <input id="popup_enq_name" type="text" name="enq_name" placeholder="Name" class="form-control">
                            <input id="popup_enq_email" type="email" name="enq_email" placeholder="Email" class="form-control">
                            <input id="popup_enq_contact" type="text" name="enq_contact" onkeypress="return isNumberKey(event)" placeholder="Mobile No" class="form-control">

                            <input type="submit" value="Submit" id="popup_submit" name="submit" class="btn btn-primary contact-submit">
                            <span id="popup_imageload"></span>
                        </form>
                        <span id="popup_response_msg"></span>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModalReg" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title text-center">Customer Login</h4>
                    </div>
                    <div class="modal-body">                        
                        <form id="popup_contactForm" method="post" action="#" onsubmit="return validate_enquiry('popup_')" class="row contact-form">

                            <input id="popup_enq_email" type="email" name="enq_email" placeholder="Email" class="form-control" />
                             <input id="popup_enq_pass" type="password" name="enq_password" placeholder="Your password" class="form-control" />

                            <input type="submit" value="Submit" id="popup_submit" name="submit" class="btn btn-primary contact-submit flo" />
                            <span id="popup_imageload"></span>
                        </form>
                        <span id="popup_response_msg"></span>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
        
        <?php wp_footer(); ?>
        
    </body>
</html>
