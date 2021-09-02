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
	<title>data add</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body oncontextmenu="return false"><center>
<form action="" method="post">
<div class="loginbox">

	<br><fieldset style="height:70%;width:40%;border-radius:25px">
		<legend>Enter Data</legend>
		<center>
		<table><tr>	
			
<td>User_code:<td><input type="text" name="usercode" pattern="[0-9].{7,}" required style="border-radius: 3px;outline: none;" autocomplete="off"></tr>
<tr><td>Date of Birth:<td><select name="day"><option>--Day--</option>
						<option>01</option>
						<option>02</option>
						<option>03</option>
						<option>04</option>
						<option>05</option>
						<option>06</option>
						<option>07</option>
						<option>08</option>
						<option>09</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
						<option>20</option>
						<option>21</option>
						<option>22</option>
						<option>23</option>
						<option>24</option>
						<option>25</option>
						<option>26</option>
						<option>27</option>
						<option>28</option>
						<option>29</option>
						<option>30</option>
						<option>31</option>
						
	</select>
	<select name="month"><option>--Month--</option>
						<option>January</option>
						<option>February</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
	</select>
	<select name="year"><option>--Year--</option>
						<option>2005</option>
						<option>2004</option>
						<option>2003</option>
						<option>2002</option>
						<option>2001</option>
						<option>2000</option>
						<option>1999</option>
						<option>1998</option>
						<option>1997</option>
						<option>1996</option>
						<option>1995</option>
						<option>1994</option>
						<option>1993</option>
						<option>1992</option>
						<option>1991</option>
						<option>1990</option>
						<option>1989</option>
						<option>1988</option>
						<option>1987</option>
						<option>1986</option>
						<option>1985</option>
						<option>1984</option>
						<option>1983</option>
						<option>1982</option>
						<option>1981</option>
						<option>1980</option>
						<option>1979</option>
						<option>1978</option>
						<option>1976</option>
						<option>1975</option>
						<option>1974</option>
						<option>1973</option>
						<option>1972</option>
						<option>1971</option>
						<option>1970</option>
	</select>
	</tr>
		<tr><td>Registration_No:<td><input type="text" name="registration_no" required style="border-radius: 3px" autocomplete="off"></tr>
		<tr><td>Student_Name:<td><input type="text" name="student_name" required style="border-radius: 3px;text-transform:uppercase;" autocomplete="off"></tr>
		<tr><td>Result:<td><input type="text" name="result" required style="border-radius: 3px" autocomplete="off"></tr>
		<tr><td>Department:<td><input type="text" name="department" required style="border-radius: 3px" autocomplete="off"></tr>
	<tr>
		<td>&nbsp<td>
		<br><input type="Submit" name="btn" value="Submit" onclick="return confirm('Are you confirm')" style="">
		&nbsp<input type="reset" name="btn2" value="Reset" style=""><br>

	</tr>
</form>
	</table>
	</fieldset>
	
	<?php
if (isset($_POST["btn"]))
{
require("connection.php");
$user=$_SESSION['username'];
$a=$_POST['usercode'];
$b=$_POST['day'];
$c=$_POST['month'];
$d=$_POST['year'];
$e=$_POST['registration_no'];
$f=$_POST['student_name'];
$g=$_POST['result'];
$h=$_POST['department'];
$rs=mysqli_query($con,"INSERT INTO rgu_result(user_code,day,month,year,reg_no,name,result,department,user)VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$user."')");
if ($rs)
{
	echo "data inserted";
}
else
{
	echo "data not inserted";
}
}
?>
<?php
require("connection.php");
error_reporting(0);
	if(isset($_POST["imp"]))
	{
	if($_FILES['file']['name'])
	{
		$filename=explode('.',$_FILES['file']['name']);
		if($filename[1]=='csv')
		{
			$handle=fopen($_FILES['file']['tmp_name'],"r");
			while($data=fgetcsv($handle))
			{
				$item1=mysqli_real_escape_string($con, $data[0]);
				$item2=mysqli_real_escape_string($con, $data[1]);
				$item3=mysqli_real_escape_string($con, $data[2]);
				$item4=mysqli_real_escape_string($con, $data[3]);
				$item5=mysqli_real_escape_string($con, $data[4]);
				$item6=mysqli_real_escape_string($con, $data[5]);
				$item7=mysqli_real_escape_string($con, $data[6]);
				$item8=mysqli_real_escape_string($con, $data[7]);

				$sql=mysqli_query($con,"INSERT INTO rgu_result(user_code,day,month,year,reg_no,name,result,department)VALUES('".$item1."','".$item2."','".$item3."','".$item4."','".$item5."','".$item6."','".$item7."','".$item8."')");
				mysqli_query($con,$sql);
			}
			
		}
		$c=fclose($handle);
		if($c)
		{
			print "Import done";
		}
		else
		{
			echo "<script>alert('Here is upload only CSV file')</script>";
		}
	
	}
}
	?>
	<form method="post"  enctype="multipart/form-data">
	<div align="center">
		<br><center><p>or</p>
		<p style="color:blue"><u><b>Upload CSV file</b><input type="file" name="file"></p>
		<button type="Submit" name="imp" style="background-color:#2ECC71;height:auto;width:22%;border:none;border-radius:5px;color:white"><i class='fa fa-upload'> Import</i></button>

	</div>		
	</form>
<?php
}
?>
</body>
</html>