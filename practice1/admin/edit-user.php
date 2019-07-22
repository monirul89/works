<?php
require_once '../vendor/autoload.php';
use App\classes\Users;
?>

<?php
require_once '../admin/header.php';


$id = $_GET['id'];
$result = Users::getUserInfoById($id);

$getResult = mysqli_fetch_assoc($result);

$message='';
$display = 'none';
if (isset($_POST['update_button'])){
    $message = Users::updateUserInfo($_POST, $id);
    $display = 'block';
}


?>
<div id="editable" class=""style="margin:50px auto; width: 60%;"
     class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="">
        <div class="panel-body">
            <form action="" id="dataAjax" class="form-horizontal" role="form" method="POST">

                <div id="signupalert" style="display:<?php echo $display;?>" class="alert alert-danger">
                    <p><span><?php echo $message ?></span></p>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                    <div class="col-md-9">
                        <input type="text" class="full_name form-control" value="<?php echo $getResult['user_name'];?>" name="user_name" placeholder="Full Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" class="user_email form-control" value="<?php echo $getResult['user_email'];?>" name="user_email" placeholder="Email Address">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                        <input type="password" class="user_password form-control" value="<?php echo $getResult['user_password'];?>" name="user_password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="select_gender" class="col-md-3 control-label">Gender</label>
                    <div class="col-md-9">
                        <input type="radio" class="select_gender" name="select_gender" value="Male"
                            <?php if ($getResult['user_gender']=='Male'){ echo 'checked';} ?>
                        > Male
                        <input type="radio" class="select_gender" name="select_gender" value="Female"
                          <?php if ($getResult['user_gender']=='Female'){ echo 'checked';} ?>
                        > Female
                    </div>
                </div>
                <div class="form-group">
                    <label for="icode" class="col-md-3 control-label">Message</label>
                    <div class="col-md-9">
                        <textarea type="text" class="user_message form-control" name="user_message" placeholder=""><?php echo $getResult['user_message'];?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <!-- Button -->
                    <div class="col-md-offset-3 col-md-9">
                        <input type="submit" id="buttonBtn" name="update_button" class="btn btn-info" value="Update">
                        <i class="icon-hand-right"></i>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once '../admin/footer.php';
?>


