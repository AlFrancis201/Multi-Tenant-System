<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><img src="<?php echo base_url('assets/img/logo.png');?>" alt="logo" id="logo"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <p class="navbar-text">Services </p>
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
    <div class="navbar-primary">
        <ul class="list-group navbar-primary-menu mainmenu">
            <li class="list-group-item">
                <a href="#">
                    <button class="btn btn-default sidebar" type="button" data-toggle="tooltip" data-placement="top" title="Dashboard"><i class="fa fa-home" id="dashboard"></i></button>
                </a>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <button class="btn btn-default sidebar" type="button"><i class="fa fa-calendar-minus-o" id="calendar" data-toggle="tooltip" title="Calendar"></i></button>
                </a>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <button class="btn btn-default sidebar" type="button"><i class="material-icons" id="settings" data-toggle="tooltip" title="Settings">settings</i></button>
                </a>
                <ul class="list-group submenu">
                    <li class="list-group-item">
                        <a href="#">
                            <button class="btn btn-default sidebar" type="button"><i class="fa fa-users" id="staff" data-toggle="tooltip" title="Staff"></i></button>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <button class="btn btn-default sidebar" type="button"><i class="material-icons" id="services" data-toggle="tooltip" title="Services">local_library</i></button>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="row addService">
        <div class="col-md-3">
            <h1 class="allservices">All Services</h1></div>
        <div class="col-lg-9 col-md-9">
            <form class="customform">
                <div class="col-md-12">
                    <h1 class="text-info">Add New Service</h1></div>
                <div class="col-lg-3 col-lg-offset-0 col-md-3"><i class="fa fa-user serviceIcon"></i></div>
                <div class="col-md-9">
                    <input class="form-control" type="text" placeholder="Enter Service Name">
                    <input class="form-control" type="text" placeholder="Service Description" id="desc">
                </div>
                <div class="col-lg-3 col-md-3"></div>
                <div class="col-md-9">
                    <input class="form-control" type="text" placeholder="Duration">
                    <input class="form-control" type="text" placeholder="Price">
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>