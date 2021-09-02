<!DOCTYPE html>
<html>
<head>
	<title>Login_page</title>
	<style>
	body{
	margin: 10;
	padding: 0;
	background-image:url("bgcolor1.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	font-family: sans-serif;
}
.loginbox{
	width: auto;
	height: auto;
	background:black;
	opacity:0.9;
	color: blue;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 70px;
	border-radius:10px;
  box-shadow:-2px 6px 8px 4px #D7DBDD;
}
.logo1{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
	
}
h1{
margin: 0;
padding: 0;
text-align: center;
font-size: 22px;
font-family: verdana;
}
.loginbox p{
	margin: 0;
	padding: 0;
	font-weight: bold;
}
.loginbox input{
	width: 100%;
	margin-bottom: 30px;
}
.loginbox input[type="text"], input[type="password"]{
	border: none;
	border-bottom: 1px solid white;
	background: transparent;
	outline: none;
	height: 40px;
	color:white;
	font-size: 16px;
}
.loginbox input[type="submit"]{
	border: none;
	outline: none;
	height: 40px;
	background: #2E86C1;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
	cursor: pointer;
	background:#A569BD;
	color: #000;
}
</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
<body>
<div class="loginbox">
	<img src="logo1.png" class="logo1">
     <h1>Login Here</h1>
     <form action="" method="post">
     	<p>Username</p>
     	<input type="text" name="username" placeholder="Enter Username" required="please enter Username" autocomplete="off">
     	<p>Password</p>
     	<input type="Password" name="password" placeholder="Enter Password" required="please enter Password">
     	<input type="submit" name="submit" value="sign in">
     </form>
</div>
<?php
if (isset($_POST["submit"]))
{
error_reporting(0);
	session_start();
require("connection.php");
$username=$_POST['username'];
$password=$_POST['password'];
$rs=mysqli_query($con,"select * from login where username='$username' and password='$password'");
$row=mysqli_fetch_array($rs); 
	if($row['username']==$username && $row['password']==$password)
	{
	$_SESSION['username']=$username;
	header("Refresh:0; url=admin.php");
	}
else
	{
		echo "<script>alert('Username or password not match')</script>";
	}
 }
?>
</body>
</html>