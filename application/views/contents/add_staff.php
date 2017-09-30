<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAFF FORM</title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles2.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Google-Style-Login.css'); ?>">
</head>

<body>
     <div class="container-fluid bgsignin">
        <nav class="navbar navbar-inverse" id="nav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand navbar-link" href="#"><img src="<?php echo base_url('assets/img/logo.png'); ?>" id="logo"></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                
            </div>
        </nav>
       <div class="container" >
	<div class="row" >  
		
		<div class="col-md-9" >
		<div class = "panel panel-primary">
				<div class = "panel-heading">
				 <h3 class="panel-title" align="center">STAFF FORM</h3></div>
   
				<div class = "panel-body">
					
					<div class="col-md-12">
					 <form>
						<div class="col-md-3">
							 <label for="date">Last Name:</label>
							<input type="text" class="form-control" id="staff" placeholder="Last Name">
						</div>
						<div class="col-md-4">
							 <label for="date">First Name:</label>
							<input type="text" class="form-control" id="staff" placeholder="First Name">
						</div>
						<div class="col-md-3">
							 <label for="date">Middle Name:</label>
							<input type="text" class="form-control" id="staff" placeholder="Middle Name">
						</div>
						<div class="col-md-3">
							 <label for="date">Day Active:</label>
							<input type="text" class="form-control" id="staff" placeholder="Day Active">
						</div>
						<div class="col-md-3">
							 <label for="date">Active Hour:</label>
							<input type="text" class="form-control" id="staff" placeholder="Active Hour">
						</div>
						<div class="row" align="right">
									<div class="col-md-3">
												
											<a href="add_staff" class="btn btn-primary btn-pos" role="button" >ADD</a>
											</div>
						</div>
										 
				</div>
		</div>
		
		</div>
		
	</div>
</div>
</div>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>

</html>