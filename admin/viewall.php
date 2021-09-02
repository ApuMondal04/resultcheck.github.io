<!DOCTYPE html>
<html>
<head>
</head>
<body oncontextmenu="return false">
<?php
require("header.php");
?>
<!-- <input type="submit" name="find" id="find" value="Find_data" onclick="abc()" style="margin-left:1280px"> -->
<?php
session_start();
$user=$_SESSION['username'];
require("connection.php");
$rs=mysqli_query($con,"select * from rgu_result");
echo "<center><table border='2'>";
echo "<th bgcolor='#FADBD8'>User_code</th><th bgcolor='#FADBD8'>day</th><th bgcolor='#FADBD8'>month</th><th bgcolor='#FADBD8'>year</th><th bgcolor='#FADBD8'>Registration_no</th><th bgcolor='#FADBD8'>Name</th><th bgcolor='#FADBD8'>Result</th><th bgcolor='#FADBD8'>Department</th>";
while($f=mysqli_fetch_array($rs))
	{	
        echo "<tr>";
        echo "<td>".$f[1]."</td>";
        echo "<td>".$f[2]."</td>";
        echo "<td>".$f[3]."</td>";
		echo "<td>".$f[4]."</td>";
		echo "<td>".$f[5]."</td>";
		echo "<td>".$f[6]."</td>";
		echo "<td>".$f[7]."</td>";
		echo "<td>".$f[9]."</td>";
		echo "</tr>";
}
echo "</table>";
?>
<script type="text/javascript">
function abc()
{
   var a=document.getElementById("find").value;
	if(event.keyCode==70)
	{
		return false;
	}
}
</script>
</body>
</html>