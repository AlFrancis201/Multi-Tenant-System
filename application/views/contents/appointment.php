<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointment</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="modal fade" role="dialog" tabindex="-1" id="appointment">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Appointment </h4></div>
                <div class="modal-body">
                    <div>
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">DETAILS </a></li>
                            <li><a href="#tab-2" role="tab" data-toggle="tab">COSTUMER </a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="tab-1">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h1>Provider </h1></div>
                                    <div class="col-md-9 appnt">
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">User </button>
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
                                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Sample Service</button>
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
                            </div>
                            <div class="tab-pane" role="tabpanel" id="tab-2"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button">Continue </button>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#appointment">Button</button>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>