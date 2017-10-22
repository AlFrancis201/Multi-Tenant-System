<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
 
    
      <button type="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="button1 right">SIGN IN</button>

	<div id="id01" class="modal">
  
  <form class="modal-content animate" action="<?php echo base_url('login')?>" method='post'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="<?php echo base_url('assets/img/signin.png')?>" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label></br>
      <input type="text" placeholder="Enter Username" name="email" required></br>

      <label><b>Password</b></label></br>
      <input type="password" placeholder="Enter Password" name="password" required></br>
        
      <button type="submit">Login</button>
    </div>

	
    <div class="container" >
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>
    
    </div>
  </div>
</nav>

</head>

<body>

<div class="container-fluid bgsignin">
			
		<div class="container">
		<div class="row">
			<div class="col-md-7 margin-top ">
			<div class="align-center">
			<h2>Take it all with you</h2>
            <h4>Switch between devices, and pick up wherever you left off.</h4>
			<img src="<?php echo base_url('assets/img/device2.jpg')?>" id="device" class="device"/>
            </div>
            </div>
			
			<div class="col-md-5">
			<div class="login-card">
                <p class="profile-name-card">CREATE AN ACCOUNT</p>
              <?php echo validation_errors(); ?>
                <?php echo form_open('registration','class="form-signin"'); ?> 
                <form class="form-signin"><!--  action="<?php //echo base_url('registration'); ?>" method="post"> -->
                    <span class="reauth-email"> </span>
                    <input class="form-control" type="text" placeholder="First name" id="inputName" name="fname">
                    <input class="form-control" type="text" placeholder="Last name" id="inputName" name="lname">
                    <input class="form-control" type="email" name="email" required="" placeholder="Email address" id="inputEmail" >
                    <input class="form-control" type="password" name="password" required="" placeholder="Password" id="inputPassword" name="password">

                    <div class="checkbox"></div>
                    <input class="btn btn-default btn-block btn-lg btn-signin" type="submit" value="Register"> <!--Register </button>-->
                 </form>
            </div>
			</div>
        </div>
        </div>
    
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>

</html>