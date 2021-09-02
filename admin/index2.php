<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username']))
{
	echo"<script>alert('login again')</script>";
	echo "<a href='index.php'>Login Now</a>";
}
else
{
	?>
<html>
<head>
	<title>Admin panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	body{
		margin: 0px;
		border:0px;
	}
	#header{
		width: auto;
		height: auto;
		background:black;
		color: white;
		font-size: 80px;
	}
	#sidebar{
		width: 250px;
		height: 624px;
		background:#5D6D7E;
		float: left;
	}
	#data{
		height: 622px;
		
	}
	ul li{
		padding:20px;
		border-bottom: 3px solid grey;
		color: white;
		text-orientation: none;
		list-style: none;
	}
	ul li:hover{
		background:#5DADE2;
		color: white;
	}
	ul a{
		text-decoration:none;
	}
	.add:hover span{
		padding-right: 25px;
	}
</style>
</head>
<body>
<div id="sidebar">
	<center><b><i class="fa fa-dashboard"> Dash Bord</i></b></center>
	<ul>
		<a href="add.php"><li><i class="fa fa-plus"> Add Data</i></li></a>
		<a href="view.php"><li>View</li></a>
		<a href="log.php"><li>logout</li></a>
	</ul>
</div>
<div id="data">
	<fieldset style="padding-left: 30px;border:0px">            
         <a href="add.php"><button class="fa fa-plus" name="add" style="font-size:24px;background-color:#2E86C1;color:white;padding:48px 75px;border-radius:10%"> Add Data</button></a>
         <a href="view.php"><button class="fa fa-eye" name="view" style="font-size:24px;background-color:#229954;color:white;padding:48px 90px;border-radius:10%"> View</button></a>
         <a href="log.php" style="text-decoration: none;"><button class="fa fa-power-off" name="logout" style="font-size:24px;background-color:#E74C3C;color:white;padding:48px 87px;border-radius:10%"> Logout</a>
         </button>
     </fieldset>
</div>
</body>
<?php
}
?>
</html>