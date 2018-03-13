<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"></link>
	<link rel="stylesheet" href="../css/user_css.css"></link>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	         <div class="row">
		<div class="col-md-12">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<form action="feedback2.php" method="POST">
					<div class="form-group">
						<div class="text-center"><label>Feedback</label></div>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-group">
					<div><label>Feedback_id</label></div>
					<input type="text" class="form-control" placeholder="feedback id" name="a1" required>
					</div>
					<div class="form-group">
					<div><label>Feedback_date</label></div>
					<input type="text" class="form-control" placeholder="Feedback_date" name="a2" required>
					</div>
					<div class="form-group">
					<div><label>Feedback</label></div>
					<input type="text" class="form-control" placeholder="Feedback" name="a3" required>
					</div>
					<div class="form-group">
					<div><label>Feedback_by</label></div>
					<input type="text" class="form-control" placeholder="Feedback_by" name="a4" required>
					</div>
					<div class="form-group">
					<div><label>Feedback_email</label></div>
					<input type="text" class="form-control" placeholder="Feedback_email" name="a5" required>
					</div>
				</div>
				</div>
				<div class="panel-footer">
					<div class="form-group">
					<input type="submit" class="form-control" value="submit">
					</div>
				</div>
	
		</div>
		
			</div>
		</div>

	
</body>
</html>