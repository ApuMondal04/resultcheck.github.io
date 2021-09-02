<?php
$user=$_SESSION['username'];
require("connection.php");
$rs=mysqli_query($con,"select * from rgu_result where user='$user' ");
echo "<table border='2'>";
echo "<th bgcolor='#BB8FCE'>User_code</th><th bgcolor='#BB8FCE'>day</th><th bgcolor='#BB8FCE'>month</th><th bgcolor='#BB8FCE'>year</th><th bgcolor='#BB8FCE'>Registration_no</th><th bgcolor='#BB8FCE'>Name</th><th bgcolor='#BB8FCE'>Result</th><th bgcolor='#BB8FCE'>Department</th><th bgcolor='#F7DC6F'>Update_data</th>";
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
		?>
		<td><a href="update.php?id=<?php echo $f[0]; ?>">
		<i class='fa fa-pencil' style='color:green'>Edit</i></a>
			<a href="del.php?id=<?php echo $f[0]; ?>" onclick="return confirm('are you sure want to delete');"><i class='fa fa-trash' style='color:red'>Delete</i>
			</a>
		</td>
		<?php
}
echo "</table>";
?>