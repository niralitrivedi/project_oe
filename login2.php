<?php
include "connection.php";
session_start();
$a=$_GET["a1"];
$b=$_GET["a2"];
$c=$_GET["a3"];
if($c=="admin")
{
$q="select * from user where username='$a' and password='$b' and usertype='$c' ";
}
elseif($c=="faculty")
{
$q="select * from faculty where username='$a' and password='$b'";
}
elseif($c=="student")
{
$q="select * from student where username='$a' and password='$b'";
}
//echo $q;
$r=mysqli_query($con,$q);
//echo mysqli_num_rows($r);
if(mysqli_num_rows($r) > 0)
{
	$arr=mysqli_fetch_row($r);
	$_SESSION["type"]=$c;
	$_SESSION["uname"]=$arr[1];
	header("LOcation:login_type.php");
}
else
{
	echo "<script type=\"text/javascript\">"."window.alert('Invalid Username Or Password');"."<script>";
	header("location:index.php?home.php");
}

?>