<div class="row addService">
    <div class="col-lg-12 col-md-12">
        <form id="addServiceForm" class="customform" method="post">
            <div class="col-md-12">
                <h1 class="text-info">Add New Service</h1></div>
            <div class="col-lg-3 col-lg-offset-0 col-md-3"><i class="fa fa-user serviceIcon"></i></div>
            <div class="col-md-9">
                <?php echo validation_errors(); ?>
                <input class="form-control" type="text" placeholder="Enter Service Name" name="svc_name">
                <input class="form-control" type="text" placeholder="Service Description" id="desc" name="svc_desc">
            </div>
            <div class="col-lg-3 col-md-3"></div>
            <div class="col-md-9">
                <input class="form-control" type="text" placeholder="Duration" name="duration">
                <input class="form-control" type="text" placeholder="Price" name="price">
                <!--<input class="form-control" type="submit" value="Submit">-->
                <button class="form-control view-button">Submit</button>
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