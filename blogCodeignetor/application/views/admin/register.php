<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HTML5 Bootstrap Admin Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
        <meta name="author" content="Muhammad Usman">

        <!-- The styles -->        
        <link href="<?php echo base_url(); ?>css/bootstrap-cerulean.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
        
        <link href="<?php echo base_url(); ?>css/charisma-app.css" rel="stylesheet">
        <link href='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
        <link href='<?php echo base_url(); ?>bower_components/chosen/chosen.min.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>css/jquery.noty.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>css/noty_theme_default.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>css/elfinder.min.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>css/elfinder.theme.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>css/uploadify.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>css/animate.min.css' rel='stylesheet'>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>bower_components/jquery/jquery.min.js"></script>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.ico">

    </head>

    <body>
        <div class="ch-container">
            <div class="row">

                <div class="row">
                    <div class="col-md-12 center login-header">
                        <h2>Welcome to Register</h2>
                    </div>
                    <!--/span-->
                </div><!--/row-->

                <div class="row">
                    <div class="well col-md-5 center login-box" style="padding: 40px 40px 30px 40px;">
                        <div class="alert alert-info">
                            <h3 style="margin: 0">Sign Up</h3>
                            <?php
                            //$exc = $this->session->userdata('exception');
                           // if ($exc) {
                                ?>

                                <p style="color: red">
                                    <?php
                                 //   echo $exc;
                                //    $this->session->unset_userdata('exception');
                                    ?>
                                </p>
                            <?php// } ?>
                        </div>
                        <form class="form-horizontal" action="<?php echo base_url(); ?>admin/register_check" method="post">
                            <fieldset>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                                    <input name="register_name" type="text" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope red"></i></span>
                                    <input name="register_email_address" type="email" class="form-control" placeholder="Email Address">
                                </div>

                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                                    <input name="register_password" type="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-dashboard red"></i></span>
                                    <textarea name="register_address" style="height: 100px" type="text" class="form-control" placeholder="Address.."></textarea>
                                </div>

                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-flag red"></i></span>
                                    <select name="register_country_name" class="form-control">
                                        <option value="countryname" selected="selected">Country Name</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Denmark">Denmark</option>
                                    </select>
                                </div>
                                
                                <div class="register_gender">
                                    <span class="register_gender_lebel">Gender : </span>
                                    <input name="register_gender" value="Male" type="radio" selected> Male
                                    <input name="register_gender" value="Female" type="radio"> Female
                                </div>
                                <div class="clearfix"></div>

                                <p class="center col-md-5">
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                </p>
                            </fieldset>
                        </form>
                    </div>
                    <!--/span-->
                </div><!--/row-->
            </div><!--/fluid-row-->

        </div><!--/.fluid-container-->

        <!-- external javascript -->

        <script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- library for cookie management -->
        <script src="<?php echo base_url(); ?>js/jquery.cookie.js"></script>
        <!-- calender plugin -->
        <script src='<?php echo base_url(); ?>bower_components/moment/min/moment.min.js'></script>
        <script src='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
        <!-- data table plugin -->
        <script src='<?php echo base_url(); ?>js/jquery.dataTables.min.js'></script>

        <!-- select or dropdown enhancer -->
        <script src="<?php echo base_url(); ?>bower_components/chosen/chosen.jquery.min.js"></script>
        <!-- plugin for gallery image view -->
        <script src="<?php echo base_url(); ?>bower_components/colorbox/jquery.colorbox-min.js"></script>
        <!-- notification plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.noty.js"></script>
        <!-- library for making tables responsive -->
        <script src="<?php echo base_url(); ?>bower_components/responsive-tables/responsive-tables.js"></script>
        <!-- tour plugin -->
        <script src="<?php echo base_url(); ?>bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
        <!-- star rating plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.raty.min.js"></script>
        <!-- for iOS style toggle switch -->
        <script src="<?php echo base_url(); ?>js/jquery.iphone.toggle.js"></script>
        <!-- autogrowing textarea plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.autogrow-textarea.js"></script>
        <!-- multiple file upload plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.uploadify-3.1.min.js"></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src="<?php echo base_url(); ?>js/jquery.history.js"></script>
        <!-- application script for Charisma demo -->
        <script src="<?php echo base_url(); ?>js/charisma.js"></script>


    </body>
</html>


