<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<center><fieldset style="margin-left: 20px;border: none;">
	<?php require('view2.php');
}?>
</fieldset></center>
</html>