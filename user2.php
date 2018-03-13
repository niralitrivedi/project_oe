<?php
 include "connection.php";

$a=$_POST["a1"];
$b=$_POST["a2"];
$c=$_POST["a3"];
$e=$_POST["a5"];
$f=$_POST["a6"];
$g=$_POST["r1"];
$h=$_POST["a8"];
$i=$_POST["a9"];

$q="insert into student(username,password,name,address,city,gender,contact_no,collage_id)
		values('$a','$b','$c','$e','$f','$g','$h','$i')";
		mysqli_query($con,$q);
		$id=mysqli_insert_id($con);
		$path="img22/$id.jpg";
		//print_r($_FILES["a4"]);
		
		move_uploaded_file($_FILES["a4"] ["tmp_name"],$path);
		//echo "Record Inserted";
		$q="update student set image='$path' where student_code=$id";
mysqli_query($con,$q);		
		echo mysqli_error($con);
		//echo "$q";
		header("Location:index.php");


?>