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
<?php
require("connection.php");
$edit_id=$_GET['id'];

$rs=mysqli_query($con,"select * from rgu_result where id=$edit_id");
while($row=mysqli_fetch_array($rs))
{
$id=$row[0];
$usercode=$row[1];
$day=$row[2];
$month=$row[3];
$year=$row[4];
$reg_no=$row[5];
$name=$row[6];
$result=$row[7];
?>
<head>
	<title>update data</title>
</head>
<body>
<center>
<form action="" method="post">
<div class="loginbox">
	<br><fieldset style="height:70%;width:40%;border-radius:25px">
		<legend style="background-color:#F7DC6F">Edit Data</legend>
		<center>
		<table><tr>	
			
<td>User_code:<td><input type="text" name="usercode" value="<?php echo $usercode ?>" required style="border-radius: 3px;outline: none;" autocomplete="off"></td></tr>
<tr><td>Date of Birth:<td><input type="text" size="2.5" name="day" value="<?php echo $day ?>"><input type="text" size="10" name="month" value="<?php echo $month ?>"><input type="text" size="4" name="year" value="<?php echo $year ?>"></td></tr>

		<tr><td>Registration_No:<td><input type="text" name="reg_no" value="<?php echo $reg_no?>" required style="border-radius: 3px" autocomplete="off"></tr>
		<tr><td>Student_Name:<td><input type="text" name="name" value="<?php echo $name?>" required style="border-radius: 3px" autocomplete="off"></tr>
		<tr><td>Result:<td><input type="text" name="result" value="<?php echo $result?>" required style="border-radius: 3px" autocomplete="off"></tr>
	<tr>
		<td>&nbsp<td>
		<br><input type="Submit" name="btn" value="Save" style="">
		&nbsp<input type="reset" name="btn2" value="Reset" style="">
	</tr>
</form>
	</table>
	</fieldset>
	<?php 
}
if(isset($_POST['btn']))
{
	
	$user=$_SESSION['username'];
	$user_code=$_POST['usercode'];
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$reg_no=$_POST['reg_no'];
	$name=$_POST['name'];
	$result=$_POST['result'];
	$rs=mysqli_query($con,"update rgu_result set user_code='$user_code',day='$day',month='$month',year='$year',reg_no='$reg_no',name='$name',result='$result' where id=$edit_id");
	if($rs)
	{
		header("location:view.php");
	}
	else
	{
		echo "<script>alert('Not Update')</script>";
	}
}
}
	?>

</body>
</html>