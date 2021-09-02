<?php
session_start();
require("connection.php");
$sql=("delete from rgu_result where id='$_GET[id]'");
if ($con->query($sql)== true) {
	echo "delete";
	header("location:view.php");
}
else
{
echo "Error";	
}
?>