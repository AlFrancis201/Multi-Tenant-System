<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/signup.css'); ?>">
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>    
</head>

<body>
    <div class="container-fluid bgsignin">
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#signup">Button</button>
        <div class="modal fade" id="signup" role="dialog">
            <div class="login-card">
                <p class="profile-name-card">CREATE AN ACCOUNT</p>
    <!--             <?php echo validation_errors(); ?>
                <?php echo form_open('registration','class="form-signin"'); ?> -->
                <form class="form-signin"><!--  action="<?php //echo base_url('registration'); ?>" method="post"> -->
                    <span class="reauth-email"> </span>
                    <input class="form-control" type="text" name="name" placeholder="Name" id="inputName" name="name">
                    <input class="form-control" type="email" name="email" required="" placeholder="Email address" id="inputEmail" >
                    <input class="form-control" type="password" name="password" required="" placeholder="Password" id="inputPassword" name="password">
                    <div class="checkbox"></div>
                    <input class="btn btn-default btn-block btn-lg btn-signin" type="submit" value="Register"> <!--Register </button>-->
                 </form>
            </div>
        </div>
    </div>

</body>

</html>