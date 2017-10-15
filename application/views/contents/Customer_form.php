<div class="main">
    <div class="row addService">
        <div class="col-lg-12 col-md-12">
            <form id="addServiceForm" class="customform" action="<?php echo base_url('mts/add_customer'); ?>" method="post">
                <div class="col-md-12">
                    <h1 class="text-info">Add New Customer</h1>
				</div>
                <!--<div class="col-lg-3 col-lg-offset-0 col-md-3"><i class="fa fa-user serviceIcon"></i></div>-->
                <div class="col-md-9">
                    <?php echo validation_errors(); ?>
                    <input class="form-control" type="text" placeholder="Enter Customer Name" name="cname">
                    <input class="form-control" type="text" placeholder="Email" id="cemail" name="cemail">
                </div>
                
                <div class="col-md-9">
                    <input class="form-control" type="text" placeholder="Mobile" name="cmobile">
                    <input class="form-control" type="text" placeholder="Office" name="coffice">
                    <input class="form-control" type="text" placeholder="Home" name="chome">
                    <input class="form-control" type="text" placeholder="Address" name="caddress">
                    <input class="form-control" type="text" placeholder="City" name="ccity">
                    <input class="form-control" type="text" placeholder="State" name="cstate">
                    <input class="form-control" type="text" placeholder="Zip" name="czip">
                    <!--<input class="form-control" type="submit" value="Submit">-->    

                
        

                    <button class="form-control view-button">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>



</body>
</html>

<!--<script>
    $(document).ready(function(){
        $('.view-button').click(function(event){
            event.preventDefault();
            //alert($(this).closest('.tab-pane').html());
            var tabPane = $(this).closest('.tab-pane');
            //var form = document.getElementById('addServiceForm');
            var formData = $('#addServiceForm').serialize();
            //alert(formData);
            $.ajax({
                    url: "<?php echo base_url('mts/add_customer'); ?>",
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
    });</script>-->