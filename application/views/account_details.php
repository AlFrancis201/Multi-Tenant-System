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
        <button id="edit-button">Edit Button</button>
        <div id="errors"></div>
		<form class="form-horizontal customerForm" method="post">
                <div class="form-group">
					<label class="control-label col-md-1">Email:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" placeholder="Email" name="email" value="<?=$email?>" disabled />
	        		</div>
	      		</div>		
				<div class="form-group">
					<label class="control-label col-md-1">Company Name:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" placeholder="Company Name" name="cname" value="<?=$cname?>" disabled />
	        		</div>
	      		</div>		
				<div class="form-group">
					<label class="control-label col-md-1">Contact No:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" placeholder="Contact No" name="cnum" value="<?=$cnum?>" disabled />
	        		</div>
	      		</div>	
				<div class="form-group">
					<label class="control-label col-md-1">Address:</label>
	      			<div class="col-md-4">
	        			<input type="text" class="form-control" placeholder="Address" name="address" value="<?=$address?>" disabled />
	        		</div>
				</div>
			</form>
		</div>
    </section>
</div>
<div>

<script>
$(document).ready(function(){
    $('#edit-button').click(function(){
        $('input').prop('disabled',false);
        $('input[name="email"]').prop('disabled',true);
        $('form').append('<button id="submit-button" class="form-control btn btn-primary">Submit</button>');
        $('form').append('<button id="cancel-button" class="form-control btn btn-primary">Cancel</button>');
    });
});
</script>
<script>
$(document).on('click','#cancel-button',function(event){
    event.preventDefault();
    location.reload();
});
</script>
<script>
$(document).on('click','#submit-button',function(event){
    event.preventDefault();
    formData = $('.customerForm').serialize();
    $.ajax({
        url: "<?php echo base_url('mts/update_details/'); ?>",
        data: formData,
        type: "POST",
        async: false,
        
        success: function(data){
            if(data=='success'){
                location.reload();
            }
            else
                $('#errors').html(data);
        }
    });
});
</script>
</body>
</html>
