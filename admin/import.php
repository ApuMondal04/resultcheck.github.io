<html>
<body>
<form method="post" enctype="multipart/form-data">
	<div align="center">
		<p>Upload CSV:<input type="file" name="file"></p>
		<p><input type="submit" name="imp" value="Import"></p>
	</div>	
</form>
<?php
require("connection.php");
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
				/*$item3=mysqli_real_escape_string($connect, $data[2]);
				$item4=mysqli_real_escape_string($connect, $data[3]);
				$item5=mysqli_real_escape_string($connect, $data[4]);
				$item6=mysqli_real_escape_string($connect, $data[5]);
				$item7=mysqli_real_escape_string($connect, $data[6]);
				$item8=mysqli_real_escape_string($connect, $data[7]);*/

				$sql=mysqli_query($con,"INSERT INTO tbl_excel(excel_name,excel_email)VALUES('".$item1."','".$item2."')");
				mysqli_query($con,$sql);
			}
			fclose($handle);
			print "Import done";
	}   }

}
	?>
</body>
</html>