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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/staffss.css'); ?>">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo" id="logo"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <p class="navbar-text"><?php echo $title; ?></p>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-user" id="useroption"></i> <span class="caret" id="dropdownUser"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">Account Settings</a></li>
                            <li role="presentation"><a href="#">Sign Out</a></li>
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
                            <a href="#serviceTab" data-toggle="tab" onclick="openTab()"> <span> <i class="fa fa-truck"></i></span></a>
                        </li>
                    </ul>
                </div>