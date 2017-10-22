<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Appointment Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('mts'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('mts/view_calendar'); ?>"><i class="fa fa-users"></i>View Calendar</a></li>
        <li class="active">Appointment Profile</li>
      </ol>
    </section>

	<div class="container">
        <a href="<?php echo base_url('mts/del_appointment/'.$appnt_id); ?>"><button class="rightside" >Delete Service</button></a>
        <button class="rightside" id="edit-button">Edit Service</button>
        <div id="errors"></div>
        <form class="form-horizontal appointmentForm"> 
                                <!--<div class="tab-content">-->
                                    <!--<div class="tab-pane active" role="tabpanel" id="tab-1">     -->
                                        <div class="form-group">
                                            <label class="control-label col-md-1" for="">Provider:</label>
                                            <div class="col-md-9">
                                                <select name="provider">
                                                    <option disabled selected hidden>Select Provider</option>
                                                    <?php
                                                    if($provider != false){
                                                        foreach($provider as $p){
                                                            if($p['staff_id']==$currProvider)
                                                                echo '<option value="'.$p['staff_id'].'" selected>'.$p['first_name'].' '.$p['last_name'].'</option>';
                                                            else
                                                                echo '<option value="'.$p['staff_id'].'">'.$p['first_name'].' '.$p['last_name'].'</option>';
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>      
                                        <div class="form-group">
                                            <label class="control-label col-md-1" for="">Service:</label>
                                            <div class="col-md-9">
                                                <select name="service">
                                                </select>
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <label class="control-label col-md-1" for="">Date/Time:</label>
                                            <div class="col-md-3">
                                                <div class="input-group date">
                                                    <input type="text" class="form-control" id="appntDate" placeholder="" name="date">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                                </div> 
                                                <input type="text" class="form-control" id="appntTime" placeholder="" name="time" value="<?=$currTime?>">
                                            </div>
                                        </div>                  
                                        <!--<div class="form-group">
                                            <label class="control-label col-md-3" for="">Notes:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="" placeholder="Notes for the Customer">
                                            </div>
                                        </div>-->                  
                                        <!--<button class="btn btn-primary btn-sm" id="appntcont" type="button">Continue </button>  -->
                                    <!--</div>-->
                                    <!--<div class="tab-pane" role="tabpanel" id="tab-2">-->
                                        <div id="searchTab">
                                            <!--<input type="text" id="myInput" placeholder="Search Customer"><span class="pull-right glyphicon glyphicon-search">
                                            </span>-->
                                            <select name="customer">
                                                <option disabled selected hidden>Choose Existing Customer</option>
                                                <?php
                                                if($customer != false){
                                                    foreach($customer as $c){
                                                        if($c['cust_id'] == $currCust)
                                                            echo '<option value="'.$c['cust_id'].'" selected>'.$c['cust_name'].' ('.$c['email'].')'.'</option>';
                                                        else
                                                            echo '<option value="'.$c['cust_id'].'">'.$c['cust_name'].' ('.$c['email'].')'.'</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <hr />
                                            <button id="new-customer" type="button" class="btn new-cust">New Customer</button>
                                            <!--<button class="btn btn-primary btn-sm" id="appntcont" type="button">Save Appointment </button>-->
                                        </div>
                                        <div>
                                            <button id="cancel-button">Cancel</button>
                                            <button class="btn btn-primary btn-sm" id="appntsave" type="button">Save Appointment </button>
                                        </div>
                                    <!--</div>-->
                                <!--</div>-->
                            </form>
</div>

<script>
$(document).ready(function(){
    $('.date').datepicker({
       startDate: "date()",
       autoclose: true
    });
    
    
    $('#appntTime').timepicker({
        disableTextInput: true,
        step: 5,
        noneOption: 'Select Time'
    });
});
</script>
<script>
$(document).ready(function(){
    $('input').prop('disabled',true);
    $('select').prop('disabled',true);
    $('#new-customer').prop('disabled',true);
    $('#appntTime').prop('disabled',true);
    $('#appntsave').toggle(false);
    $('#cancel-button').toggle(false);
});
</script>
<script>
$(document).ready(function(){
    var staff_id = $('select[name="provider"]').val();
    $.ajax({
        url: "<?php echo base_url('mts/ajax_get_staff_details/'); ?>"+staff_id+"/"+<?=$appnt_id?>,
        dataType: 'json',

        success: handleData
    });
    function handleData(data){
        $.each(data.services, function(key,value){
            $('select[name="service"]').append('<option value="'+value['service_id']+'">'+value['service_name']+'</option>');
        });
        $('.date').datepicker('setDaysOfWeekDisabled', data.daysDisabled);
        $('.date').datepicker().on('changeDate', function(e){
            e.preventDefault();
            var day = $('.date').datepicker('getDate').getDay();
            console.log(day);
            $('#appntTime').timepicker('option', 'minTime', data.dayHours[day]['start_time']);
            $('#appntTime').timepicker('option', 'maxTime', data.dayHours[day]['end_time']);
            $('#appntTime').timepicker('option', 'disableTimeRanges', data.dayTimeRanges[day]);
        });
        
        $('select[name="service"] > option[value="<?=$currService?>"]').prop('selected', true);
        var d = new Date('<?=$currDate?>');
        $('.date').datepicker('setDate', d);
    }
    
    
    
});
</script>
<script>
$('select[name="provider"]').on('change',function(){
    $('select[name="service"]').empty();
    $('input[name="date"]').val('');
    $('input[name="time"]').val('');
    var staff_id = $(this).val();
    console.log(staff_id);
    $.ajax({
        url: "<?php echo base_url('mts/ajax_get_staff_details/'); ?>"+staff_id+"/"+<?=$appnt_id?>,
        dataType: 'json',

        success: handleData
    });
    
    function handleData(data){
        $.each(data.services, function(key,value){
            $('select[name="service"]').append('<option value="'+value['service_id']+'">'+value['service_name']+'</option>');
        });
        $('.date').datepicker('setDaysOfWeekDisabled', data.daysDisabled);
        $('.date').datepicker().on('changeDate', function(e){
            e.preventDefault();
            var day = $('.date').datepicker('getDate').getDay();
            console.log(day);
            $('#appntTime').timepicker('option', 'minTime', data.dayHours[day]['start_time']);
            $('#appntTime').timepicker('option', 'maxTime', data.dayHours[day]['end_time']);
            $('#appntTime').timepicker('option', 'disableTimeRanges', data.dayTimeRanges[day]);
        });
    }
});
</script>
<script>
$(document).on('click','#new-customer',function(){
    event.preventDefault();
    var tabPane = $(this).closest('div');
    $.ajax({
        url: "<?php echo base_url('mts/ajax_get_customer_form2'); ?>",
        dataType: "html",
        success: function(data){
            $(tabPane).html(data);
        }
    });
});
</script>
<script>
$(document).ready(function(){
    $('#edit-button').click(function(){
        $('input').prop('disabled',false);
        $('select').prop('disabled',false);
        $('#new-customer').prop('disabled',false);
        $('#appntTime').prop('disabled',false);
        $('#appntsave').toggle(true);
        $('#cancel-button').toggle(true);
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
$(document).on('click','#appntsave',function(event){
    event.preventDefault();
    formData = $('.appointmentForm').serialize();
    $.ajax({
        url: "<?php echo base_url('mts/update_appointment/'.$appnt_id); ?>",
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