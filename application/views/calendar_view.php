<div class="main">
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
                    <div>
                        <ul class="nav nav-tabs appntTab"> <!--tab links -->
                            <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">DETAILS </a></li>
                            <li><a href="#tab-2" role="tab" data-toggle="tab">CUSTOMER </a></li>
                        </ul>
                        
                        <form class="form-horizontal appointmentForm" action="<?php echo base_url('mts/add_appointment'); ?>" method="post"> 
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="tab-1">     
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
                                        <label class="control-label col-md-3" for="">Day/Time:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control datepicker" id="" placeholder="" name="date">
                                            <input type="time" class="form-control" name="time">
                                        </div>
                                    </div>                  
                                    <!--<div class="form-group">
                                        <label class="control-label col-md-3" for="">Notes:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="" placeholder="Notes for the Customer">
                                        </div>
                                    </div>-->                  
                                    <!--<button class="btn btn-primary btn-sm" id="appntcont" type="button">Continue </button>  -->
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-2">
                                    <div id="searchTab">
                                        <input type="text" id="myInput" placeholder="Search Customer"><span class="pull-right glyphicon glyphicon-search">
                                        </span>
                                        <button id="new-customer" type="button" class="btn new-cust">New Customer</button>
                                        <!--<button class="btn btn-primary btn-sm" id="appntcont" type="button">Save Appointment </button>-->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
        events: '<?php echo base_url('mts/get_appointment'); ?>'
    })

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
    var staff_id = $(this).val();
    $.ajax({
        url: "<?php echo base_url('mts/ajax_get_staff_service/'); ?>"+staff_id,
        dataType: 'json',
        success: function(data){
            $.each(data,function(key,value){
                $('select[name="service"]').append('<option value="'+value['service_id']+'">'+value['service_name']+'</option>');
            });
        }
    });
});
</script>
<script>
$(document).ready(function(){
    $('#new-customer').click(function(event){
        event.preventDefault();
        var tabPane = $(this).closest('.tab-pane');
        $.ajax({
            url: "<?php echo base_url('mts/ajax_get_customer_form'); ?>",
            dataType: "html",
            success: function(data){
                $(tabPane).html(data);
                $(tabPane).append('<button class="btn btn-primary btn-sm" id="appntsave">Save Appointment </button>');
            }
        });
    });
});
$(document).on('click','#appntcont',function(){
    alert('lala');
})
</script>
<script>
$(document).ready(function(){
   $('.datepicker').datepicker({
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