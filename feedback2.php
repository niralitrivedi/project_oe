<?php
 include "connection.php";

	$feedback_id=$_POST["a1"];
	$feedback_date=$_POST["a2"];
	$feedback=$_POST["a3"];
	$feedback_by=$_POST["a4"];
	$feedback_email=$_POST["a5"];
	
	
	    $q="insert into feedback(feedback_id,feed_date,feedback,feed_by,feed_email)
		values('$feedback_id','$feedback_date','$feedback','$feedback_by','$feedback_email')";
		mysqli_query($con,$q);
		//echo "Record Inserted";
		echo mysqli_error($con);
		//echo "$q";
		header("Location:index.php?pg=feedback.php");
?>