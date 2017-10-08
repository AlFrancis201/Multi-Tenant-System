<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduler</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Cookie.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dashboard_final.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/add_service_final.css'); ?>">
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/test.js'); ?>"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo" id="logo"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <p class="navbar-text"> </p>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-user" id="useroption"></i> <span class="caret" id="dropdownUser"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">Account Settings</a></li>
                            <li role="presentation"><a href="<?php echo base_url('login/logout'); ?>">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div>
                <div class="col-md-1">
                    <ul class="nav nav-tabs tabs-left pull-left">
                        <li class="active">
                            <a href="#sect1" data-toggle="tab"> <span> <i class="fa fa-home"></i></span></a>
                        </li>
                        <li>
                            <a href="#sect2" data-toggle="tab"> <span> <i class="fa fa-calendar-minus-o"></i></span></a>
                        </li>
                        <li>
                            <a href="#staffTab" data-toggle="tab"> <span> <i class="fa fa-users"></i></span></a>
                        </li>
                        <li>
                            <a id="serviceTabLink" href="#serviceTab" data-toggle="tab" > <span> <i class="fa fa-truck"></i></span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-11">
                    <div class="tab-content">
                        <div id="sect1" class="tab-pane active">
                            <p><?php echo validation_errors(); ?></p>
                        </div>
                        <div id="sect2" class="tab-pane"></div>
                        <div id="staffTab" class="tab-pane">
                            <a href="">Add Staff</a>
                        </div>
                        <div id="serviceTab" class="tab-pane">
                            <!--<button class="view-button" onclick="addServiceForm()">Add Service</button>-->
                            <div class="row">
								<div class="col-md-6" "allService">
									<h2 id="servtitle">All Services</h2>
								</div>								
								<div class="col-md-6">
									<button class="view-button" id="addservice" value="add_service">Add Service</button>
								</div>							
							</div>
							<div class="col-md-2">		
							</div>
							<div class="col-md-10">						
								<div class="serviceList">
									<?php
									foreach($service_record as $s){
										echo '<ul>';
										echo '<li><a href=# class="view-button" data-method="view_service_profile" data-args="'.$s['service_id'].'">'.$s['service_name'].'</a></li>';
										echo '</ul>';
									}
									?>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script>
    $(document).ready(function(){
        $('.nav-tabs a[href="#sect2"]').tab('show');
    });
    </script>
    <script>
    $(document).ready(function(){
            $('.view-button').click(function(event){
                event.preventDefault();
                var func = $(this).attr('data-method');
                var tabPane = $(this).closest('.tab-pane');
                var args = "/";
                if($(this).is('[data-args]'))
                    args += $(this).attr('data-args');
                //alert(args);
                $.ajax({
                    url: "<?php echo base_url('mts/'); ?>"+func+args,
                    
                    success: function(data){
                        $(tabPane).html(data);
                        
                    }
                });
            });
        });
    </script>
</body>

</html>