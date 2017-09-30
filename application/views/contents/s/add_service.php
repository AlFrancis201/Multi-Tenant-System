<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVICE FORM</title>
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
       <div class="container">
	<div class="row">  
		
	
		<div class="col-md-9 cont ">
		<div class = "panel panel-primary">
				<div class = "panel-heading">
				 <h3 class="panel-title" align="center">SERVICE FORM</h3></div>
   
				<div class = "panel-body">
					
					<div class="col-md-12">
					 <form>
						<div class="col-md-4">
							 <label for="date">SERVICE NAME:</label>
							<input type="text" class="form-control" id="service" placeholder="SERVICE NAME">
						</div>
						<div class="col-md-8">
							 <label for="date">SERVICE DESCRIPTION:</label>
							<input type="text" class="form-control" id="service" placeholder="SERVICE DESCRIPTION">
						</div>
						<div class="col-md-2">
							 <label for="date">DURATION:</label>
							<input type="text" class="form-control" id="service" placeholder="DURATION">
						</div>
						<div class="col-md-2">
							 <label for="date">PRICE:</label>
							<input type="text" class="form-control" id="service" placeholder="PRICE">
						</div>
										  
											<div class="row">
													<div class="col-md-2">
											
													<a href="add_service" class="btn btn-primary btn-pos"  role="button">ADD</a>
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