<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Account Settings
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('mts'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Account Settings</li>
      </ol>
    </section>
    
    <section class="content">
        <!-- form here -->
		<div class="container">
        <?php echo validation_errors(); ?>
		<form class="form-horizontal customerForm" method="post">	
				<div class="form-group">
					<label class="control-label col-md-1" for="cname">Company Name:</label>
	      			<div class="col-md-4">
	        			<input type="cname" class="form-control" id="cname" placeholder="Company Name" />
	        		</div>
	      		</div>		
				<div class="form-group">
					<label class="control-label col-md-1" for="email">Email:</label>
	      			<div class="col-md-4">
	        			<input type="email" class="form-control" id="email" placeholder="Email" />
	        		</div>
	      		</div>		
				<div class="form-group">
					<label class="control-label col-md-1" for="mobile">Contact No:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="mobile" placeholder="Contact No" />
	        		</div>
	      		</div>	
				<div class="form-group">
					<label class="control-label col-md-1" for="office">Address:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="office" placeholder="Address" />
	        		</div>
				</div>
			</form>
		</div>
    </section>
</div>