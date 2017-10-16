<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointment</title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/appointment.css'); ?>">
    <script src="<?php echo base_url('jqui/external/jquery/jquery.js'); ?>"></script> 
    <script src="<?php echo base_url('bootstrap/js/bootstrap.js'); ?>"></script>          
</head>

<body>
    <div class="modal fade" role="dialog" tabindex="1" id="appointment">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Appointment </h4></div>
                <div class="modal-body">
                    <div>
                        <ul class="nav nav-tabs appntTab">
                            <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">DETAILS </a></li>
                            <li><a href="#tab-2" role="tab" data-toggle="tab">CUSTOMER </a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="tab-1">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h1>Provider </h1></div>
                                    <div class="col-md-9 appnt">
                                        <div class="dropdown">
                                            <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">User </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li role="presentation"><a href="#">User </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h1>Service </h1></div>
                                    <div class="col-md-9 appnt">
                                        <div class="dropdown">
                                            <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Sample Service</button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li role="presentation"><a href="#">First Item</a></li>
                                                <li role="presentation"><a href="#">Second Item</a></li>
                                                <li role="presentation"><a href="#">Third Item</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h1>Day/Time </h1></div>
                                    <div class="col-md-9 appnt">
                                        <input type="date">
                                    </div>
                                </div>
                                <div class="row">   
                                    <div class="col-md-3">
                                        <h1>Notes </h1></div>
                                    <div class="col-md-9 appnt">
                                        <textarea placeholder="Notes for the Customer"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm" id="appntcont" type="button">Continue </button>                               
                            </div>
                            <div class="tab-pane" role="tabpanel" id="tab-2">
                                <div id="searchTab">
                                    <input type="text" id="myInput" placeholder="Search Customer"><span class="pull-right glyphicon glyphicon-search">
                                    </span>
                                     <button class="btn btn-primary btn-sm" id="appntcont" type="button">Save Appointment </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#appointment">Button</button>

</body>

</html>