<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Add Service
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('mts'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('mts/view_service'); ?>"><i class="fa fa-tasks"></i> Service Management</a></li>
        <li class="active">Add Service</li>
      </ol>
    </section>

    <div class="row addService">
        <div class="col-lg-12 col-md-12">
            <form id="addServiceForm" class="customform" action="<?php echo base_url('mts/add_service'); ?>" method="post">
                    <?php echo validation_errors(); ?>                
                <div class="col-md-6 serviceDetails">
                    <h1 >Service Details</h1>

                    <input class="form-control" type="text" placeholder="Enter Service Name" name="svc_name" value="<?php echo set_value('svc_name'); ?>">
                    <input class="form-control" type="text" placeholder="Service Description" id="desc" name="svc_desc" value="<?php echo set_value('svc_desc'); ?>">
                

                    <input class="form-control" type="text" placeholder="Duration (mins)" name="duration" value="<?php echo set_value('duration'); ?>">
                    <input class="form-control" type="text" placeholder="Price" name="price" value="<?php echo set_value('price'); ?>">
                    <!--<input class="form-control" type="submit" value="Submit">-->    

                 </div>
                 <div class="col-md-6">                   
                    <h1 class="text-info">Service Provider</h1>
                    <div class="serviceProv">
                    <div class="checkbox">
                        <label><input id="all_staff" type="checkbox" />All Staff</label>
                    </div>
                    <?php 
                        foreach($staffRecord as $s){
                            echo '<div class="checkbox">';
                            echo '<label><input type="checkbox" name="staff[]" value="'.$s['staff_id'].'" '.set_checkbox('staff',$s['staff_id']).' />'.$s['first_name'].' '.$s['last_name'].'</label>';
                            echo '</div>';
                        }
                    ?>
                    </div>
                </div>
            </div>
                <button class="addServicebtn form-control view-button btn btn-primary ">Submit</button>
            </form>
                <a href="<?php echo base_url('mts/view_service');?>" ><button class="btn btn-primary  addServicebtn">Back</button> </a>

    </div>
</div>

<script>
$(document).ready(function(){
    $('#all_staff').click(function(){
        if($(this).prop('checked') == true){
            $('input[name="staff[]"]').prop('checked',true);
        }
        else{
            $('input[name="staff[]"]').prop('checked',false);
        }
    });
});
</script>
<script>
$(document).ready(function(){
    $('input[name="staff[]"]').click(function(){
        if($('input[name="staff[]"]:checked').length == $('input[name="staff[]"]').length){
            $('input[type="checkbox"').prop('checked',true);
        }
        else
            $('#all_staff').prop('checked',false);
    });
});
</script>
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
    });</script>-->