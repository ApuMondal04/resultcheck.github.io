<!DOCTYPE html>
<html>
<?php
session_start();
if(!isset($_SESSION['username']))
{
	echo"<script>alert('login again')</script>";
	echo "<a href='index.php'>Login Now</a>";
}
else
{
	require("header.php");
?>
<head>
	<title>new admin</title>
<style>
body{
	margin: 0;
	padding:0;
	background-image:url(aaa.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	background-attachment:fixed;
	background-position:center;
	height: 100%;
	left: 70%;

}
.loginbox{
	width: auto;
	height:78%;
	background:#D7DBDD;
	color:blue;
	top: 48%;
	left: 55%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 80px 80px;
	border-radius:5px;
	opacity:0.9;
}
.loginbox input{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color:black;
	font-size: 16px;
}

.loginbox input[type="submit"]{
	border: none;
	outline: none;
	height: 40px;
	background:blue;
	color: #fff;
	font-size: 18px;
	border-radius: 17px;
}
.loginbox input[type="submit"]:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
</style>
</head>
<body>
	<form action="" method="post">
	<div class="loginbox">
		<h1 style="margin-bottom:10%;">New admin</h1>
			<input type="text" name="name" id="button" placeholder="Enter your full name" autocomplete="off"><br><br>
			<input type="email" name="email" id="button" placeholder="Enter your Email Id" autocomplete="off"><br><br>
			<input type="text" name="username" id="button" placeholder="Create a new username" autocomplete="off"><br><br>
			<input type="password" name="password" id="button" placeholder="Create a new password" autocomplete="off"><br><br>
			<input type="submit" name="btn" value="Submit" style="width:177px;height:auto;">
	</div>
<?php
if (isset($_POST["btn"]))
{
require("connection.php");
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['username'];
$d=$_POST['password'];
$rs=mysqli_query($con,"INSERT INTO login(username,password,name,email)VALUES ('".$c."','".$d."','".$a."','".$b."')");
if ($rs)
{
	echo "Login successfull";
}
else
{
	echo "Login unsuccessfull";
}
}
}
?>
</form>
</body>
</html>
