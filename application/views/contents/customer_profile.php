<div class="main">
	<div class="container">
		<form class="form-horizontal customerForm" action="">	
				<div class="form-group ">
					<span style="font-size:80px;" class="glyphicon glyphicon-user col-md-1"> </span>
	      		</div>
				<div class="form-group">
					<label class="control-label col-md-1" for="cname">Name:</label>
	      			<div class="col-md-4">
	        			<input type="cname" class="form-control" id="cname" placeholder="Name">
	        		</div>
	      		</div>		
				<div class="form-group">
					<label class="control-label col-md-1" for="email">Email:</label>
	      			<div class="col-md-4">
	        			<input type="email" class="form-control" id="email" placeholder="Email">
	        		</div>
	      		</div>		
				<div class="form-group">
					<label class="control-label col-md-1" for="email">Mobile:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="" placeholder="09*********" >
	        		</div>
	      		</div>	
				<div class="form-group">
					<label class="control-label col-md-1" for="email">Office:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="" placeholder="Office">
	        		</div>
	      		</div>					
	      		<div class="form-group">
					<label class="control-label col-md-1" for="email">Home:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="" placeholder="Home">
	        		</div>
	      		</div>		      		
	      		<div class="form-group">
					<label class="control-label col-md-1" for="address">Address:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="" placeholder="Adress" >
	        		</div>
	      		</div>	
				<div class="form-group">
					<label class="control-label col-md-1" for="email">City:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="" placeholder="City">
	        		</div>
	      		</div>
				<div class="form-group">
					<label class="control-label col-md-1" for="email">State:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="" placeholder="State">
	        		</div>
	      		</div>
				<div class="form-group">
					<label class="control-label col-md-1" for="email">Zip:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" id="" placeholder="Zip">
	        		</div>
	      		</div>		
		</form>
		
		<a href="<?php echo base_url('mts/edit_customer'); ?>"><button>EDIT</button></a>
		<a href="<?php echo base_url('mts/view_customer'); ?>"><button>DELETE</button></a>
		
</div>
	
	

</body>

</html>