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
					<label class="control-label col-md-1">Company Name:</label>
	      			<div class="col-md-4">
	        			<input type="cname" class="form-control" placeholder="Company Name" />
	        		</div>
	      		</div>		
				<div class="form-group">
					<label class="control-label col-md-1">Email:</label>
	      			<div class="col-md-4">
	        			<input type="email" class="form-control" placeholder="Email" />
	        		</div>
	      		</div>		
				<div class="form-group">
					<label class="control-label col-md-1">Contact No:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" placeholder="Contact No" />
	        		</div>
	      		</div>	
				<div class="form-group">
					<label class="control-label col-md-1">Address:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" placeholder="Address" />
	        		</div>
				</div>
			</form>
		</div>
    </section>
</div>
