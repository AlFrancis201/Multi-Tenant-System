<div class="content-wrapper">
    <section class="content">
        <div>
            <button class="btn btn-default" type="button" data-toggle="modal" data-target="#appointment">Make Appointment</button>
        </div>
        <div id="calendar">
         
        </div>
        
        <div class="modal fade" role="dialog" tabindex="1" id="appointment">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Appointment </h4></div>
                    <div class="modal-body">
                        <div id="errors"></div>
                        <div>
                            <!--<ul class="nav nav-tabs appntTab"> 
                                <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">DETAILS </a></li>
                                <li><a href="#tab-2" role="tab" data-toggle="tab">CUSTOMER </a></li>
                            </ul> -->
                            
                            <form class="form-horizontal appointmentForm"> 
                                <!--<div class="tab-content">-->
                                    <!--<div class="tab-pane active" role="tabpanel" id="tab-1">     -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="">Provider:</label>
                                            <div class="col-md-9">
                                                <select name="provider">
                                                    <option disabled selected hidden>Select Provider</option>
                                                    <?php
                                                    if($provider != false){
                                                        foreach($provider as $p){
                                                            echo '<option value="'.$p['staff_id'].'">'.$p['first_name'].' '.$p['last_name'].'</option>';
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>      
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="">Service:</label>
                                            <div class="col-md-9">
                                                <select name="service">
                                                </select>
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="">Date/Time:</label>
                                            <div class="col-md-9">
                                                <div class="input-group date">
                                                    <input type="text" class="form-control" id="appntDate" placeholder="" name="date">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                                </div> 
                                                <input type="text" class="form-control" id="appntTime" placeholder="" name="time">
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
                                                        echo '<option value="'.$c['cust_id'].'">'.$c['cust_name'].' ('.$c['email'].')'.'</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <hr />
                                            <button id="new-customer" type="button" class="btn new-cust">New Customer</button>
                                            <!--<button class="btn btn-primary btn-sm" id="appntcont" type="button">Save Appointment </button>-->
                                        </div>
                                    <!--</div>-->
                                <!--</div>-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
<script>
$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
        events: '<?php echo base_url('mts/get_appointment'); ?>',
        header: {
            left:   '',
            center: 'title',
            right:  'month,agendaWeek today prev,next' //listDay, listWeek
        },
        firstDay: 1,
        defaultView: 'agendaWeek',
        displayEventEnd: true,
        /*eventRender: function(event, element){
            element.popover({
                title: event.title,
                content: '<button id="test" data-id="'+event.title+'">test</button>',
                html: true,
                trigger: 'click',
                placement: 'auto right',
            });
        }*/
        eventClick: function (event, jsEvent, view){
            window.location.assign("<?php echo base_url('mts/test'); ?>")
        },
            
        
        //minTime: '00:00:00',
        //maxTime: '00:00:00',
        slotDuration: '00:15:00',
        //businessHours: true,
        //hiddenDays
    })
    
    $('html').on('click', function(e) {
        $('.popover').each( function() {
            if( $(e.target).parents(".fc-time-grid-event").get(0) !== $(this).prev().get(0) ) {
                $(this).popover('hide');
            }
        });
    });

});
</script>
<script>
$(document).on('click','#test', function(){
    alert($(this).attr('data-id'));
});
</script>
<script>
$(document).ready(function(){
    var origCustTab = $('#searchTab').html();

    $('#appointment').on('hidden.bs.modal', function () {
        $(this).find('form')[0].reset();
        $(this).find('select[name="service"] > option').remove();
        $(this).find('#searchTab').html(origCustTab);
        $('#errors').empty();
    });
});
</script>
<script>
$(document).ready(function(){
    $('.date').datepicker({
       startDate: "date()",
       autoclose: true
    });
    
    
    $('#appntTime').timepicker({
        disableTextInput: true,
        step: 5,
        useSelect: true,
        noneOption: 'Select Time'
    });
});
</script>
<!--<script>
$(document).ready(function(){
    $.ajax({
        url: "<?php echo base_url('mts/ajax_get_staff'); ?>",
        dataType: 'json',
        success: function(data){
            $.each(data, function(key,value){
                $('select[name="provider"]').append('<option value="'+value['staff_id']+'">'+value['first_name']+' '+value['last_name']+'</option>');
            });
        }
    });
});
</script>-->
<script>
$('select[name="provider"]').on('change',function(){
    $('select[name="service"]').empty();
    $('input[name="date"]').val('');
    $('input[name="time"]').val('');
    var staff_id = $(this).val();
    console.log(staff_id);
    $.ajax({
        url: "<?php echo base_url('mts/ajax_get_staff_details/'); ?>"+staff_id,
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
            alert(data.dayTimeRanges[day]);
        });
    }
});
</script>
<script>
$(document).on('click','#new-customer',function(){
    event.preventDefault();
    var tabPane = $(this).closest('div');
    $.ajax({
        url: "<?php echo base_url('mts/ajax_get_customer_form'); ?>",
        dataType: "html",
        success: function(data){
            $(tabPane).html(data);
            $(tabPane).append('<button class="btn btn-primary btn-sm" id="appntsave">Save Appointment </button>');
        }
    });
});
$(document).on('change','select[name="customer"]',function(){
    event.preventDefault();
    var tabPane = $(this).closest('div');
    $(tabPane).find('hr').remove();
    $(tabPane).find('button').remove();
    $(tabPane).append('<button class="btn btn-primary btn-sm" id="appntsave">Save Appointment </button>');
})
</script>
<script>
$(document).on('click','#appntsave',function(event){
    event.preventDefault();
    formData = $('.appointmentForm').serialize();
    $.ajax({
        url: "<?php echo base_url('mts/add_appointment'); ?>",
        data: formData,
        type: "POST",
        
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
<!--<script type="text/javascript">
  $(document).ready(function () {
  var navListItems = $('ul.appnTab li a'),
		  allWells = $('.setup-content'),
		  allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
	  e.preventDefault();
	  var $target = $($(this).attr('href')),
			  $item = $(this);

	  if (!$item.hasClass('disabled')) {
		  navListItems.removeClass('btn-primary').addClass('btn-default');
		  $item.addClass('btn-primary');
		  allWells.hide();
		  $target.show();
		  $target.find('input:eq(0)').focus();
	  }
  });

  allNextBtn.click(function(){
	  var curStep = $(this).closest(".setup-content"),
		  curStepBtn = curStep.attr("id"),
		  nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
		  curInputs = curStep.find("input[type='text'],input[type='url'],textarea[textarea]"),
		  isValid = true;

	  $(".form-group").removeClass("has-error");
	  for(var i=0; i<curInputs.length; i++){
		  if (!curInputs[i].validity.valid){
			  isValid = false;
			  $(curInputs[i]).closest(".form-group").addClass("has-error");
		  }
	  }

	  if (isValid)
		  nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
 </script>-->
</body>
</html>