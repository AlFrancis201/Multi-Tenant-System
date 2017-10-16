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
                                <form class="form-horizontal appointmentForm" action="">                    
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="">Provider:</label>
                                            <div class="col-md-9">
                                                <select>
                                                    <option value=""> Test</option>
                                                    <option value=""> Test2</option>
                                                    <option value=""> Test3</option>
                                                </select>
                                            </div>
                                        </div>      
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="">Service:</label>
                                            <div class="col-md-9">
                                                <select>
                                                    <option value=""> Test</option>
                                                    <option value=""> Test2</option>
                                                    <option value=""> Test3</option>
                                                </select>
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="">Day/Time:</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" id="" placeholder="">
                                            </div>
                                        </div>                  
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="">Notes:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="" placeholder="Notes for the Customer">
                                            </div>
                                        </div>                  
                                </form>
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