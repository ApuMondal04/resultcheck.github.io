<!DOCTYPE html>
<html>
<head>
	<title>data add</title>
</head>
<body>
<form action="" method="post">
<div class="loginbox">
	<center><fieldset style="color:#fff;border: none;background-color: black ; font-family: Burford"><h1>RGU</h1>
	</fieldset>
			<br><br>
	<fieldset style="height:70%;width:40%;border-radius:25px">
		<legend>Enter Data</legend>
		<center>
		<table><tr>	
			
<td>User_code:<td><input type="text" name="usercode" required style="border-radius: 3px" autocomplete="off"></tr>
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
		<tr><td>Student_Name:<td><input type="text" name="student_name" required style="border-radius: 3px" autocomplete="off"></tr>
		<tr><td>Result:<td><input type="text" name="result" required style="border-radius: 3px" autocomplete="off"></tr>
	<tr>
		<td>&nbsp<td><button name="btn" style="border-radius:25px;background-color:#2874A6;color:white">Submit Data</button>
		<button type="Reset" name="btn1" style="border-radius:25px;background-color:#EC7063;color:white">Reset</button>
	</tr>
</form>
	</table>
	</fieldset>
	<?php
if (isset($_POST["btn"]))
{
require("connection.php");
$a=$_POST['usercode'];
$b=$_POST['day'];
$c=$_POST['month'];
$d=$_POST['year'];
$e=$_POST['registration_no'];
$f=$_POST['student_name'];
$g=$_POST['result'];
$rs=mysqli_query($con,"INSERT INTO rgu_result(user_code,day,month,year,reg_no,name,result)VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."')");
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
</body>
</html>