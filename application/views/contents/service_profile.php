<div class="row addService">
    <div class="col-lg-12 col-md-12">
        <form id="addServiceForm" class="customform" method="post">
            <div class="col-md-12">
            <h2>Service Details</h2>
            <div class="col-lg-3 col-lg-offset-0 col-md-3"><i class="fa fa-user serviceIcon"></i></div>
            <div class="col-md-9">
                <label for="svc_name">Service Name:</label>
                <input class="form-control" type="text" placeholder="Enter Service Name" name="svc_name" value="<?php echo $svc_name; ?>" disabled>
                <label for="svc_desc">Service Description:</label>
                <input class="form-control" type="text" placeholder="Service Description" id="desc" name="svc_desc" value="<?php echo $svc_desc; ?>" disabled>
            </div>
            <div class="col-lg-3 col-md-3"></div>
            <div class="col-md-9">
                <label for="duration">Duration:</label>
                <input class="form-control" type="text" placeholder="Duration" name="duration" value="<?php echo $duration; ?>" disabled>
                <label for="price">Price:</label>
                <input class="form-control" type="text" placeholder="Price" name="price" value="<?php echo $price; ?>" disabled>
                <!--<input class="form-control" type="submit" value="Submit">-->
                <!--<button class="form-control view-button">Submit</button>-->
				<a class="btn btn-info btn-lg" id="aboutbtn" role="button" href="<?php echo base_url ('mts')?>">Back</a>				
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.view-button').click(function(event){
            event.preventDefault();
            //alert($(this).closest('.tab-pane').html());
            var tabPane = $(this).closest('.tab-pane');
            //var form = document.getElementById('addServiceForm');
            var formData = $('#addServiceForm').serialize();
            //alert(formData);
            $.ajax({
                    url: "<?php echo base_url('mts/add_service'); ?>",
                    data: formData,
                    type: "POST",
                    async: false,
                    
                    success: function(data){
                        if(data=='success'){
                            alert('Service Added.');
                            window.location.assign("<?php base_url('mts'); ?>");
                        }
                        else
                            $(tabPane).html(data);
                    },
                });
        });
    });</script>