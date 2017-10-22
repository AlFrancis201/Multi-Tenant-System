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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin.css'); ?>">
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
</head>
<body class="hold-transition skin-blue sidebar-mini">


  <header class="main-header">
    <a class="logo">
      <span class="logo-mini"><b>T</b></span>
      <span class="logo-lg"><b>Tempus</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="#" data-toggle="control-sidebar">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
   </header>   
   <div class="container-fluid">
        <section class="content-header">
            <h1>Admin
            <small>Portal</small>
            </h1>
        </section>
        <div class="row adminTable">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pending Company Accounts</h3>
            </div>

            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th>Company Name</th>
                  <th style="width: 40px"></th>
                  <th style="width: 40px"></th>
                </tr>
                <tr>
                  <td>Egit</td>
                  <td><a href="#"><i class="fa fa-fw fa-check"></i></a></td>
                  <td><a href="#"><i class="fa fa-fw fa-close"></i></a></td>
                </tr>
                <tr>
                  <td>Burgit</td>
                  <td><a href="#"><i class="fa fa-fw fa-check"></i></a></td>
                  <td><a href="#"><i class="fa fa-fw fa-close"></i></a></td>
                </tr>
                <tr>
                  <td>Burnek</td>
                  <td><a href="#"><i class="fa fa-fw fa-check"></i></a></td>
                  <td><a href="#"><i class="fa fa-fw fa-close"></i></a></td>
                </tr>
                <tr>
                  <td>Tumbong</td>
                  <td><a href="#"><i class="fa fa-fw fa-check"></i></a></td>
                  <td><a href="#"><i class="fa fa-fw fa-close"></i></a></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Company Bill Plan</h3>
            </div>
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th>Company Name</th>
                  <th style="width: 150px">Bill Plan</th>
                  <th style="width: 150px">Start Date</th>
                  <th style="width: 150px">End Date</th>
                  <th style="width: 40px">Amount(₱)</th>
                </tr>
                <tr>
                  <td>Company A</td>
                  <td>Monthly</td>
                  <td>December 19, 2017</td>
                  <td>December 20, 2017</td>
                  <td>1.00</td>
                </tr>
                <tr>
                  <td>Company B</td>
                  <td>Monthly</td>
                  <td>December 19, 2017</td>
                  <td>December 20, 2017</td>
                  <td>1.00</td>
                </tr>
                <tr>
                  <td>Company C</td>
                  <td>Annual</td>
                  <td>December 19, 2017</td>
                  <td>December 20, 2017</td>
                  <td>1.00</td>
                </tr>
                <tr>
                  <td>Company D</td>
                  <td>Semi-Annual</td>
                  <td>December 19, 2017</td>
                  <td>December 20, 2017</td>
                  <td>1.00</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
    </div>

</div>
</body>
</html>
