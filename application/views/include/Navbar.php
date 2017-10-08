<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo" id="logo"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <p class="navbar-text">Dashboard </p>
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
                        <a href="<?php echo base_url('mts/viewStaff'); ?>">
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
