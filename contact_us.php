<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../boot/css/bootstrap.css"></link>
	<link rel="stylesheet" type="text/css" href="../boot/css/bootstrap.min.css"></link>
	<link rel="stylesheet" href="../boot/css/user_css.css"></link>
	<script src="../jquery.js"></script>
	<script src="../boot/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	         <div class="row">

		<div class="col-md-12">
			<div class="panel panel-info table-responsive">
				<div class="panel-body">
				<div class="form-group">
						<div class="text-center"><label>Contact us</label></div>
				</div>
					<?php
						include "connection.php";
						$q="select * from contact_us";
						$r=mysqli_query($con,$q);
						echo "<table border='1'>
							<tr style='background-color:pink'>
								<th>Id</th>
								<th>College_name</th>
								<th>college_website</th>
								<th>college_email</th>
								<th>college_mobno</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>";
						while($a=mysqli_fetch_row($r))
						{
							echo "<tr>
								<td>$a[0]</td>
								<td>$a[1]</td>
								<td>$a[2]</td>
								<td>$a[3]</td>
								<td>$a[4]</td>
								<td><a href=\"index.php?pg=contactus_edit.php&id=$a[0]\">Edit</a></td>
								<td><a href=\"contactus_delete.php?id=$a[0]\">Delete</a></td>
							</tr>";
						}
						echo "</table>";
					?>
				</div>
			</div>
		</div>
	</div>
    </div>
	
</body>
</html>