<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduler</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Cookie.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dashboard_final.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/staffss.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/add_service_final.css'); ?>">
    <script src="<?php echo base_url('jqui/external/jquery/jquery.js'); ?>"></script>   
    <script src="<?php echo base_url('bootstrap/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/test.js'); ?>"></script>

 
</head>

<body>
<nav class="navbar sidebar" role="navigation">
    <div class="container-fluid">

        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('mts'); ?>">Brand<img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo" id="logo"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Dashboard<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                <li ><a href="#">Calendar<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-calendar-minus-o"></span></a></li>
                <li ><a href="<?php echo base_url('mts/view_staff'); ?>">Staffs<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-users"></span></a></li>               
                 <li ><a href="<?php echo base_url('mts/view_service'); ?>">Services<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-truck"></span></a></li>
                 <li ><a href="<?php echo base_url('mts/view_customers'); ?>">Customers<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#">Account Settings<span class="pull-right hidden-xs showopacity glyphicon glyphicon-asterisk"></span></a></li>
                        <li><a href="#">Logout<span class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--<div class="main">

Contents
</div>
</body>
</html>--> 