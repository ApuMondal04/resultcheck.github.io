<!DOCTYPE html>
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
		width: auto;
		height: auto;
		background:#5D6D7E;
		float: left;
	}
	#data{
		height: 500px;
		background:#FDF2E9;
	}
	ul li{
		padding:20px;
		border-bottom: 3px solid grey;
		color: white;
	}
	ul li:hover{
		background:#5DADE2;
		color: white;
	}

</style>
</head>
<body>
<div id="sidebar">
	<center><b>Dash Bord</b></center>
	<ul>
		<a href="add.php"><li>Add Data</li></a>
		<a href="#"><li>View</li></a>
		<a href="#"><li>logout</li></a>
	</ul>
</div>
<div id="data">
	<fieldset style="padding-left: 30px;border:0px">            
         <a href="add.php"><button class="fa fa-plus" name="add" style="font-size:24px;background-color:#2E86C1;color:white;padding:48px 75px;"> Add Data</button></a>
         <button class="fa fa-eye" name="view" style="font-size:24px;background-color:#229954;color:white;padding:48px 90px"> View</button>
         <button class="fa fa-power-off" name="logout" style="font-size:24px;background-color:#E74C3C;color:white;padding:48px 87px"> Logout
         </button>
     </fieldset>
</div>
	
</body>
</html>