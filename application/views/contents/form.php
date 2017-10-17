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
                            <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">COMPANY DETAILS</a></li>
                            <li><a href="#tab-2" role="tab" data-toggle="tab">BUSINESS HOURS</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="tab-1">
                                <form class="form-horizontal appointmentForm" action="">                    
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="">Name:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="">
                                            </div>
                                        </div>      
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="">Email:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="">
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="">Address:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="">
                                            </div>
                                        </div>                  
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="">Contact:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="">
                                            </div>
                                        </div>                  
                                </form>
                                <button class="btn btn-primary btn-sm" id="appntcont" type="button">Continue </button>  
                            </div>
                            <div class="tab-pane" role="tabpanel" id="tab-2">

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