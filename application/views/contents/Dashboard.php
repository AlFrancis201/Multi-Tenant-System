    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <?php echo (isset($comp_name)) ? $comp_name : 'Company Name'; ?>
                <small>Dashboard</small>
            </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('mts'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
        </section>
        
        <section class="content">
            <div class="row">
                <div class="col-md-9">
				<a href="<?php echo base_url('mts/view_calendar');?>"class="btn btn-primary">MAKE AN APPOINTMENT</a>
                <h4>Upcoming Appointments</h4>
					
                    <div id="calendar">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <!-- widget here -->
						<h3 style="text-align:center;">Add Staff</h3>
						<a href="<?php echo base_url('mts/add_staff'); ?>"><img src="<?php echo base_url('assets/img/add-staff.png')?>" style="width:200px;height:130px;margin-left:38px; border-radius: 100%;" /> </a>
						
					</div>
                    <div class="row">	
                        <!-- widget here -->
						<h3 style="text-align:center;">Add Service</h3>
						<a href="<?php echo base_url('mts/add_service'); ?>"><img src="<?php echo base_url('assets/img/add-service.png')?>" style="width:180px;height:110px;margin-left:38px; border-radius: 10%;"/></a>
                    </div>
                    <div class="row">
                        <!-- widget here -->
						<h3 style="text-align:center;">Add Customer</h3>
						<a href="<?php echo base_url('mts/add_customer'); ?>"><img src="<?php echo base_url('assets/img/add-costumer.png')?>" style="width:200px;height:130px;margin-left:38px; border-radius: 100%;"/></a>
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
            right:  'prev,next' //listDay, listWeek
        },
        defaultView: 'listWeek',
    });
});
</script>
</body>
</html>