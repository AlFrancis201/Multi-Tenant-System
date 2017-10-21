<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles2.css'); ?>">
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>    
	
	<nav class="nav navbar navbar-default1 navbar-fixed-top">
  <div class="container-fluid bg">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>       
      <a class="navbar-brand">
        <a href="<?php echo base_url('home'); ?>"> <img src="<?php echo base_url('assets/img/Ico.svg')?>" id="logo1" class="logo"/>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">    
    <ul class="nav navbar-nav pull-right">
      <li><a href="<?php echo base_url('registration'); ?>">CREATE AN ACCOUNT</a></li>
    </ul>
    </div>
  </div>
</nav>
	
</head>

<body>
    
        <div class="container ">
        <div class="login-card1" >
			
            <p class="profile-name-card1">SIGN IN</p>
            <?php echo validation_errors(); ?>
            <form class="form-signin1" action="<?php echo base_url('login')?>" method='post'><span class="reauth-email1"> </span>
                <input class="form-control" type="email" required="" placeholder="Email address" autofocus="" id="inputEmail" name="email">
                <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" name="password">
                <button class="btn btn-default1 btn-block1 btn-lg btn-signin1" type="submit">Sign in</button>
            </form><a href="#" class="forgot-password1">Forgot your password?</a>
			</div>
			</div>
   
</body>

</html>