<?php
include "connection.php";
session_start();
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
?>