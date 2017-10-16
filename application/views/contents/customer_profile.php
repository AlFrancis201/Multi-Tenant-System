<div class="main">
	<div class="container">
        <?php echo validation_errors(); ?>
        <a href="<?php echo base_url('mts/del_customer/'.$cust_id); ?>"><button>Delete Customer</button></a>
        <button id="edit-button">Edit Customer</button>
		<form id="addCustomerForm" class="form-horizontal customerForm">	
				<div class="form-group ">
					<span style="font-size:80px;" class="glyphicon glyphicon-user col-md-1"> </span>
	      		</div>
				<div class="form-group">
					<label class="control-label col-md-1" for="cname">Name:</label>
	      			<div class="col-md-4">
	        			<input type="cname" class="form-control" id="cname" placeholder="Name" name="cname" value="<?=$cname?>" disabled>
	        		</div>
	      		</div>		
				<div class="form-group">
					<label class="control-label col-md-1" for="email">Email:</label>
	      			<div class="col-md-4">
	        			<input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?=$email?>" disabled>
	        		</div>
	      		</div>		
				<div class="form-group">
					<label class="control-label col-md-1" for="mobile">Mobile:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="mobile" placeholder="Phone" name="mobile" value="<?=$mobile?>" disabled>
	        		</div>
	      		</div>	
				<div class="form-group">
					<label class="control-label col-md-1" for="office">Office:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="office" placeholder="Phone" name="office" value="<?=$office?>" disabled>
	        		</div>
	      		</div>					
	      		<div class="form-group">
					<label class="control-label col-md-1" for="home">Home:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="home" placeholder="Phone" name="home" value="<?=$home?>" disabled>
	        		</div>
	      		</div>		      		
	      		<div class="form-group">
					<label class="control-label col-md-1" for="address">Address:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="" placeholder="Address" name="address" value="<?=$address?>" disabled>
	        		</div>
	      		</div>	
				<div class="form-group">
					<label class="control-label col-md-1" for="city">City:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="city" placeholder="City" name="city" value="<?=$city?>" disabled>
	        		</div>
	      		</div>
				<div class="form-group">
					<label class="control-label col-md-1" for="state">State:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="state" placeholder="State" name="state" value="<?=$state?>" disabled>
	        		</div>
	      		</div>
				<div class="form-group">
					<label class="control-label col-md-1" for="zip">Zip:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="zip" placeholder="Zip" name="zip" value="<?=$zip?>" disabled>
	        		</div>
	      		</div>
		</form>
</div>
</body>
</html>