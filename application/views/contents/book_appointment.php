<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?></title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/fonts/font-awesome.min.css'); ?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/book_appointment.css'); ?>" rel="stylesheet" />
<script src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>

</head>

<body>

<nav class="navbar navbar-inverse appntNav">
	<div class="container-fluid">
	    <div class="navbar-header">
	    	<a class="navbar-brand" href="#"></a>
	    </div>
	    <ul class="nav navbar-nav navbar-right loginbtn">
	      	<li><a href="<?php echo base_url('mts/login');?>">Login</a></li>
	    </ul>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-2 sideBar2">
            <div>
                <div>
                    <ul class="nav flex-column" id="exCollapsingNavbar3">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><span class="fa fa-calendar-minus-o"> Book Appointment</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="fa fa-users"> Staff Members</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="fa fa-truck"> Services</span></a>
                        </li>                        
                    </ul>
                </div>

            </div>
        </div>

		<div class="col-md-6 appntBody">
			<h1>Dental</h1>
			<ul class="breadcrumb">
				<li>Sample</li>
				<li><a href="#">Next</a></li>
				<li><a href="#">Next Next</a></li>
				<li><a href="#">Confirm</a></li>
			</ul>		
			<h2>Choose Service</h2>
			<h3>All Services</h3>
			<table class="table serviceTable">
				<tr>
					<td>Sample Serive</td>
					<td>60mins</td>
					<td>$10</td>
				</tr>
			</table>
		</div>
		<div class="cold-md-4 busHours">
			<p class="col-md-4">Business Hours (GMT+00:00)</p>
				<div class="col-md-1">
					<label>Mon</label>
				</div>
				<div class="cold-md-11">
					<input type="text" placeholder="Test - Test2" readonly/>	
				</div>				
				<div class="col-md-1">
					<label>Tues</label>
				</div>
				<div class="cold-md-11">
					<input type="text" placeholder="Test - Test2" readonly/>	
				</div>				
				<div class="col-md-1">
					<label>Wed</label>
				</div>
				<div class="cold-md-11">
					<input type="text" placeholder="Test - Test2" readonly/>	
				</div>
				<div class="col-md-1">
					<label>Thurs</label>
				</div>
				<div class="cold-md-11">
					<input type="text" placeholder="Test - Test2" readonly/>	
				</div>				
				<div class="col-md-1">
					<label>Fri</label>
				</div>
				<div class="cold-md-11">
					<input type="text" placeholder="Test - Test2" readonly/>	
				</div>	
				<div class="col-md-1">
					<label>Sat</label>
				</div>
				<div class="cold-md-11">
					<input type="text" placeholder="Sarado" readonly/>	
				</div>		
				<div class="col-md-1">
					<label>Sun</label>
				</div>
				<div class="cold-md-11">
					<input type="text" placeholder="Sarado" readonly/>	
				</div>																	
		</div>
	</div>
</div>

</body>

</html>


	