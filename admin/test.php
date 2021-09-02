<form action="" method="post">
	name:<input type="text" name="name"><br>
	mobile_no:<input type="text" name="mobile"><br>
	new_username<input type="text" name="username"><br>
	password:<input type="password" name="password"><br>
	<input type="submit" name="btn" value="submit">
</form>
<?php
if (isset($_POST["btn"]))
{
require("connection.php");
$a=$_POST['name'];
$b=$_POST['mobile'];
$c=$_POST['username'];
$d=$_POST['password'];
$rs=mysqli_query($con,"INSERT INTO login(username,password,name,mobile)VALUES ('".$a."','".$b."','".$c."','".$d."')");
if ($rs)
{
	echo "Login successfull";
}
else
{
	echo "Login unsuccessfull";
}
}
?>