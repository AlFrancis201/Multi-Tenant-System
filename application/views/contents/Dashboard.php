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
                <div class="col-md-8">
                    <h4>Upcoming Appointments</h4>
                    <div id="calendar">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <!-- widget here -->
                    </div>
                    <div class="row">
                        <!-- widget here -->
                    </div>
                    <div class="row">
                        <!-- widget here -->
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