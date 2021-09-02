<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>admin login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	body{
		margin:0;
		padding:0;
		font-family:sans-serif;
		/*background:url(bgimg.jpg) no-repeat;*/
		background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(bgimg.jpg);
		background-size:cover; 
	}
	.login-box{
		width:280px;
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		color:white;
	}
	.login-box h1{
		float:left;
		font-size:40px;
		border-bottom:6px solid #4caf50;
		margin-bottom:50px;
		padding:13px 0;
	}
	.textbox{
		width: 100%;
		overflow:hidden;
		font-size: 20%;
		padding: 8px 0;
		margin: 8px 0;
		border-bottom:1px solid #4caf50;
	}
	.textbox i{
		width:26px;
		float:left;
		text-align:center;
	}
	.textbox input{
		border:none;
		outline:none;
		background:none;
		color:white;
		font-size:18px;
		width:80px;
		float:left;
		margin:0 10px;	
	}
	.btn{
		width:100%;
		background:none;
		border:2px solid #4caf50;
		color:white;
		padding:5px;
		font-size:18px;
		cursor:pointer;
		margin:12px 0;
	}
</style>
<body>
<div class="login-box">
	<h1>Login</h1>
	<div class="textbox">
		<i class="fa fa-user" style="font-size:36px;color:white"></i>
		<input type="text" placeholder="username" name="user">
	</div>
	<div class="textbox">
		<i class="fa fa-lock" style="font-size:36px;color:white"></i>
		<input type="password" placeholder="password" name="user">
	</div>
	<input type="button" name="btn" value="Signin">
</div>
</body>
</html>