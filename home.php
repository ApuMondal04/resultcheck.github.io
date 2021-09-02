<!DOCTYPE html>
<html>
<head>
	<title>APU MANDAL</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family: century gothic;
		}

 header{
			background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(bgimg.jpg);
			height: 100vh;
			background-position: center;
			background-size: cover;
		}
		ul{
			float: right;
			list-style-type: none;
			margin-top: 25px;
		}       
		ul li{
			display:inline-block;
			font-weight: bold;
			color: #ff6347;
		}
		ul li a{
			text-decoration: none;
			color: #fff;
			font-size: 18px;
			padding: 5px 20px;
			border: 1px solid transparent;
			transition: 0.6s ease;
		}
		ul li a:hover{
			background-color:#fff; 
			color: #000;
		}
		.main{
			max-width: 1200px;
			margin: auto;
			text-orientation: none;
		}
		ul li.active a{
			background-color: #fff;
			color: #000;
		}
		.title{
			position: absolute;
			top:50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.title h1{
			color: #fff;
			font-size: 60px;
		}
		.button{
			position: absolute;
			top:66%;
			left:50%;
			transform: translate(-50%,-50%); 
		}
		.btn{
			border: 1px solid #fff;
			padding: 10px 30px;
			color: #fff;
			text-decoration: none;
			transition: 0.6s ease;
		}
		.btn:hover{
			background-color:#fff;
			color: #000;
		}
	</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
<body>
	<header>
		<div class="main">
			<ul>
				<li class="active"><a href="#">Home</a></li>
				<li><a href="home.php">Teacher</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<div class="title">
			<h1>ATTENDANCE PORTAL</h1>
		</div>
		<div class="button">
			<a href="home.php" class="btn">Login</a>
			<a href="#" class="btn">New User</a>
		</div>
	</header>
</body>
<?php
error_reporting(0);
$a=$_POST['username'];
$b=$_POST['password'];
?>
</html>