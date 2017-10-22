<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>    
	
	
	
</head>

<body>
	<div class="collapse navbar-collapse" id="myNavbar">    
    <ul class="nav navbar-nav pull-right">
      
      <li><a href="<?php echo base_url('registration');?>">CREATE AN ACCOUNT</a></li>
    </ul>
    </div>
    <div class="container1 container-fluid">
	<a class="navbar-brand">
		<a href="<?php echo base_url('home');?>"><img src="<?php echo base_url('assets/img/Ico.svg')?>" id="logo1" class="logo"/>
		</a></a>
		
	<div class="row">
		<div class="col-md-6">
			<div class="top col-md-12">
				<h2 style="color:#817776;">ORGANIZE STAFF</h2>
				<p style="color:#817776;">ASDJHGASDJGSDJGASDJHGASDKJHGASD</p>
				<h2 style="color:#817776;">TIME MANAGEMENT</h2>
				<p style="color:#817776;">lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
			</div>
		</div>
		
			<div class="col-md-6">
				<div class="verticalLine">
				<div class="top1">
					<p id ="left" class="profile-name-card2">Username</p>
						<?php echo validation_errors(); ?>
						<form class="left1 form-signin1" action="<?php echo base_url('login')?>" method='post'><span class="reauth-email1"> </span>
							<input class="left1 form-control" type="email" required="" placeholder="Email address" autofocus="" id="inputEmail" name="email">
							<p class="left profile-name-card2">Password</p>
							<input class="left1 form-control" type="password" required="" placeholder="Password" id="inputPassword" name="password">
							
							<button class="left1 top2 btn btn-default1 btn-block1 btn-lg btn-signin1" type="submit">Login</button>
						</form><a href="#" id="left1" class="forgot-password1">Forgot your password?</a>
						</div>
				</div>
			</div>
	</div>	
	</div>	
			 
			
			
			
            
   
</body>

</html>