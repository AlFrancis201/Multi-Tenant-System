<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>    	
</head>
<body class="img-responsive">
    <div class="container1 container-fluid">
	<a class="navbar-brand">
		<a href="<?php echo base_url('home');?>"><img src="<?php echo base_url('assets/img/Temp.png')?>" id="logo1" class="logo"/>
		</a>
	</a>

	<div class="row">
		<div class="col-md-6 col-sm-6">
			<div class="top col-md-12 leftSide">
				<div class="jumbotron jumb1">
					<h1>ORGANIZE STAFF</h1>
					<p>Organize your staff with ease by adding staff menu and just input the details in your desired way.</p>
				</div>
				<div class="jumbotron jumb2">
					<h1>TIME MANAGEMENT</h1>
					<p>Manage your time with ease by using Tempus. List your important appointments, meetings in our calendar, and can also check your availability.  </p>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6">
				<div class="loginform">
					<?php echo validation_errors(); ?>
						<form action="<?php echo base_url('login')?>" method='post'>
						<label>Username: </label>
						<input class="form-control" type="email" required="" placeholder="Email address" autofocus="" id="inputEmail" name="email">
						<label>Password: </label>
						<input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" name="password">
						<button id="login1" class="btn btn-default" type="submit">Login</button>								
						</form>		
				<p>Don't have an account? <a href="<?php echo base_url('registration');?>" >Signup now!</a></p>										
				</div>

		</div>
	</div>
</div>			
</body>
</html>