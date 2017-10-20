<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Scheduler</title>
    <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Cookie.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome.min.css'); ?>">-->
    
    <link rel="stylesheet" href="<?php echo base_url('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('adminlte/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('adminlte/bower_components/Ionicons/css/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('adminlte/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('adminlte/dist/css/AdminLTE.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('adminlte/dist/css/skins/_all-skins.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('adminlte\bower_components\bootstrap-datepicker\dist\css\bootstrap-datepicker.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('adminlte\bower_components\fullcalendar\dist\fullcalendar.min.css'); ?>">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/staffss.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/add_service_final.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/customer_form.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/appointment.css'); ?>">
    
    <script src="<?php echo base_url('adminlte/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('adminlte\bower_components\moment\moment.js'); ?>"></script>
    <script src="<?php echo base_url('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('adminlte/dist/js/adminlte.min.js'); ?>"></script>
    <script src="<?php echo base_url('adminlte\bower_components\fullcalendar\dist\fullcalendar.min.js'); ?>"></script>
    <script src="<?php echo base_url('adminlte/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
    <script src="<?php echo base_url('adminlte/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
    <script src="<?php echo base_url('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
    <script src="<?php echo base_url('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
    <script src="<?php echo base_url('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
 
    <!--<script src="<?php echo base_url('jqui/external/jquery/jquery.js'); ?>"></script>   
    <script src="<?php echo base_url('bootstrap/js/bootstrap.js'); ?>"></script>
    <script src='<?php echo base_url('fullcalendar/lib/jquery.min.js');?>'></script>
    <script src='<?php echo base_url('fullcalendar/lib/moment.min.js');?>'></script>
    <script src='<?php echo base_url('fullcalendar/fullcalendar.js');?>'></script>-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">    
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
     <a href="<?php echo base_url('mts');?>" class="logo"> 
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>T</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Tempus</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php echo (!isset($active)) ? 'class="active"' : ''; $active="";?>>
          <a href="<?php echo base_url('mts');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li <?php echo ($active=='calendar') ? 'class="active"' : '';?>>
        <li>
          <a href="<?php echo base_url('mts/view_calendar'); ?>">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
          </a>
        </li <?php echo ($active=='staff') ? 'class="active"' : '';?>>
        <li>
          <a href="<?php echo base_url('mts/view_staff'); ?>">
            <i class="fa fa-user"></i> <span>Staffs</span>
          </a>
        </li>         
        <li <?php echo ($active=='service') ? 'class="active"' : '';?>>
          <a href="<?php echo base_url('mts/view_service'); ?>">
            <i class="fa fa-tasks"></i> <span>Services</span>
          </a>
        </li>         
        <li <?php echo ($active=='customer') ? 'class="active"' : '';?>>
          <a href="<?php echo base_url('mts/view_customer'); ?>">
            <i class="fa fa-users"></i> <span>Customers</span>
          </a>
        </li>        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Account Settings</a></li>
            <li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-circle-o"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>