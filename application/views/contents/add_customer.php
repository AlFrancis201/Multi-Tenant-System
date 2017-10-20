<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Add Customer
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('mts'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('mts/view_customer'); ?>"><i class="fa fa-users"></i> Customer Management</a></li>
        <li class="active">Add Customer</li>
      </ol>
    </section>

	<div class="container">
        <?php echo validation_errors(); ?>
		<form class="form-horizontal customerForm" action="<?php echo base_url('mts/add_customer'); ?>" method="post">	
				<div class="form-group ">
					<span style="font-size:80px;" class="glyphicon glyphicon-user col-md-1"> </span>
	      		</div>
				<div class="form-group">
					<label class="control-label col-md-1" for="cname">Name:</label>
	      			<div class="col-md-4">
	        			<input type="cname" class="form-control" id="cname" placeholder="Name" name="cname">
	        		</div>
	      		</div>		
				<div class="form-group">
					<label class="control-label col-md-1" for="email">Email:</label>
	      			<div class="col-md-4">
	        			<input type="email" class="form-control" id="email" placeholder="Email" name="email">
	        		</div>
	      		</div>		
				<div class="form-group">
					<label class="control-label col-md-1" for="mobile">Mobile:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="mobile" placeholder="Phone" name="mobile">
	        		</div>
	      		</div>	
				<div class="form-group">
					<label class="control-label col-md-1" for="office">Office:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="office" placeholder="Phone" name="office">
	        		</div>
	      		</div>					
	      		<div class="form-group">
					<label class="control-label col-md-1" for="home">Home:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="home" placeholder="Phone" name="home">
	        		</div>
	      		</div>		      		
	      		<div class="form-group">
					<label class="control-label col-md-1" for="address">Address:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="" placeholder="Address" name="address">
	        		</div>
	      		</div>	
				<div class="form-group">
					<label class="control-label col-md-1" for="city">City:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="city" placeholder="City" name="city">
	        		</div>
	      		</div>
				<div class="form-group">
					<label class="control-label col-md-1" for="state">State:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="state" placeholder="State" name="state">
	        		</div>
	      		</div>
				<div class="form-group">
					<label class="control-label col-md-1" for="zip">Zip:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="zip" placeholder="Zip" name="zip">
	        		</div>
	      		</div>

                <button class="form-control">Add</button>
		</form>
</div>
</body>
</html>