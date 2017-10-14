<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Register</h3>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Fill up now</button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Application Form</h4>
        </div>
        <div class="modal-body">
			<form action>
			<div>Company Name</div>
			<input type="text">
			<div>Email:</div>
			<input type="text">
			<div>Address:</div>
			<input type="text">
			<div>Contact Number</div>
			<input type="text">
		</div>
        <div class="modal-footer">
			<button type="submit" class="btn btn-primary">
						SUBMIT
					</button>
					</a>		
				</form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
