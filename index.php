<!DOCTYPE html>
<html>
<head>

	<title>student login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body{
			margin:0px;
			border:0px;
			
		}
		.loginbox input{
		margin: 10px 0px;
	}
		
	</style>

</head>
<body style="background-image:url(ccc.jpg);">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<form action="" method="post">	
<div class="loginbox">
	<center><fieldset style="color:#fff;border: none;background-color:#1C2833; font-family:Burford;top:0"><marquee width="70%" style="color:white; font-size:40px">RAIGANJ UNIVERSITY</marquee>
	</fieldset>
			<br><br>
			
	<fieldset  style="height:70%;width:40%;border-radius:10px; background-color:#2874A6; box-shadow:-2px 6px 8px 4px #283747;">
		<legend style="color:yellow"><b>Enter the following Information</b></legend>
		<center>
		<table><tr>	
			
<td style="color:white">User_code:<td><input type="text" name="usercode" required style="border-radius:3px;border:none" autocomplete="off"></tr>
<tr><td style="color:white">Date of Birth:<td><select name="day" style="border-radius:5px;border:none"><option>--Day--</option>
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
	<select name="month" style="border-radius:5px;border:none"><option>--Month--</option>
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
	<select name="year" style="border-radius:5px;border:none"><option>--Year--</option>
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
	
	<tr>
		<td>&nbsp<td><button name="btn" style="border-radius:25px;background-color:#145A32;color:white">Check <i class="fa fa-sign-in"></i></button>
		<button name="btn1" style="border-radius:25px;background-color:#E59866;color:white">Reset<i class="fa fa-refresh"></i></button>
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
$rs=mysqli_query($con,"select * from rgu_result where user_code='$a' and day='$b' and month='$c' and year='$d'");
if(mysqli_num_rows($rs) > 0) {
while($f=mysqli_fetch_array($rs))
	{
		?>
		<div id="section-to-print" name="section-to-print">
			<?php
		echo "<h1>RESULT</h1>";
	echo"<fieldset style='height:auto;width:35%;background-color:white;border-radius:10px;box-shadow:-2px 6px 8px 4px #283747;'>";
	echo "<br>";
	echo "<table border='none' style='border-collapse:collapse;color:white;'>";
echo "<th width='35%' bgcolor='#0E6655'>Registration No.</th><th width='30%' bgcolor='#0E6655'>Student_Name</th><th bgcolor='#0E6655'>Result</th><th bgcolor='#0E6655'>Department</th>";	
	echo "<tr style='color:black; font-family: arial, sans-serif;'>";
	echo "<td>".$f[5]."</td>";
	echo "<td>".$f[6]."</td>";
	echo "<td>".$f[7]."</td>";
	echo "<td>".$f[9]."</td>"; 
	echo "</table>";
	?>
<br><button onclick="myFunction()" name="print" id="print" style="width:50px">Print</button>
<script>
function myFunction() {
  window.print();
}
</script>
</div>
	<?php
}
echo "</fieldset>";
}
else
	{
		echo "<br>";
		echo "<script>alert('information not match')</script>";
	}
 }
?>
</form>
</body>
</div>
</html>