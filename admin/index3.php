<?php
session_start();
if(!isset($_SESSION['username']))
{
	echo "<script>alert('login again')</script>";
	header("location:test.php");
}
elseif(isset($_SESSION['username']))
{
	echo "welcome";
}
	
	?>