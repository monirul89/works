<?php
require_once '../vendor/autoload.php';

use App\classes\Users;

$user = new Users();
if (isset($_POST['login_button'])) {
    $user->loginUser($_POST);
}

$message = '';
$textcolor = '';
$display = 'none';
if (isset($_POST['signup_button'])) {
    $message = $user->registerUser($_POST);
    $textcolor = 'danger';
    $display = 'block';
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>


<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title text-center">Sign In</div>
            </div>

            <div style="padding-top:12px" class="panel-body">

                <div style="display:<?php echo $display; ?>" class="col-sm-12">
                    <h3 style="padding-bottom: 12px; margin: 0;font-size: 16px;"
                        class="text-center text-<?php echo $textcolor; ?>"><?php echo $message; ?></h3>
                </div>

                <form id="loginform" class="form-horizontal" role="form" action="" method="POST">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="user_email" value=""
                               placeholder="Email">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="user_password"
                               placeholder="password">
                    </div>

                    <div style="margin: 25px auto" class="input-group">
                        <input type="submit" name="login_button" class="btn btn-success" value="Login">
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">

                            <div style="border-top: 1px solid #bce8f1; padding-top:15px; font-size:85%">
                                Don't have an account!
                                <button type="button" class="btn btn-light" data-toggle="modal"
                                        data-target="#signupbox">Sign Up
                                </button>
                                <!--                                <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">-->
                                <!--                                    Sign Up Here-->
                                <!--                                </a>-->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="signupbox" class="modal fade" role="dialog" style=" margin-top:50px"
         class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="modal-dialog panel panel-info">
            <div class="panel-heading clearfix">
                <div class="panel-title" style="float:left;">Sign Up</div>
                <div style="float:right; position: relative;">
                    <!--                    <a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a>-->
                    <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
                </div>
                <div style="display:<?php echo $display; ?>" class="col-sm-12">
                    <h3 style="padding-bottom: 12px; margin: 0;font-size: 16px;"
                        class="text-center text-<?php echo $textcolor; ?>"><?php echo $message; ?></h3>
                </div>
            </div>
            <div class="panel-body">
                <form action="" id="dataAjax" class="form-horizontal" role="form" method="POST">

                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">First Name</label>
                        <div class="col-md-9">
                            <input type="text" class="full_name form-control" name="full_name" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="text" class="user_email form-control" name="user_email" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="user_password form-control" name="user_password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_gender" class="col-md-3 control-label">Gender</label>
                        <div class="col-md-9">
                            <input type="radio" class="select_gender" name="select_gender" value="Male"> Male
                            <input type="radio" class="select_gender" name="select_gender" value="Female"> Female
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="icode" class="col-md-3 control-label">Message</label>
                        <div class="col-md-9">
                            <textarea type="text" class="user_message form-control" name="user_message" placeholder=""> </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <input type="submit" id="buttonBtn" name="signup_button" class="btn btn-info" value="&nbsp Submit">
                            <i class="icon-hand-right"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>