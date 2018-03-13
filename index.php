<?php
	session_start();
	if(isset($_SESSION["type"]))
	{
		if($_SESSION["type"]=="admin")
{
	header("Location:admin/index.php");
}
elseif($_SESSION["type"]=="faculty")
{
	header("Location:faculty/index.php");
}
elseif($_SESSION["type"]=="student")
{
	header("Location:student/index.php");
}
	}
?>
<!doctype html>
<html>
<head>
<title>Quiz Master</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.js"></script>
</head>
<body>
<nav class="navbar">
  <div class="container-fluid hd">
		<div class="navbar-header">
			 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
					<span class="glyphicon glyphicon-align-justify"></span>
			 </button>
			 <a class="navbar-brand pnm" href="#">Quiz Master</a>
		</div>
		 <div class="collapse navbar-collapse" id="mynavbar">
					<ul class="nav navbar-nav navbar-right mn">
						
						
						</ul>
					
		</div>
	</div>
</nav>
<div class="container-fluid">
		<div class="row">
				<?php
				if(isset($_GET["pg"]))
				{
					$in=$_GET["pg"];
					include "$in";
				}
				else
				{
					include "home.php";
				}
				?>
		
		</div>
	</div>
  <!-- Footer Area -->
  
  <div class="container-fluid">
<div class="hd navbar-fixed-bottom">  
  <div class="row">
				<div class="footer"><p>Develop by Nirali Trivedi[140570116028]</p></div>
		</div>
		</div>
  </div>
		
</body>

	</html>
