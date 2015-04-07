<html>
<head>
	<meta charset="utf-8">
</head>
<?php
	include('db.php');
		
	mysql_query("UPDATE account SET userPass = '".$_POST['password']." , Email = '".$_POST['email']."' WHERE userName = '".$_GET['username']."'" ,$con) ;
	header("Location:../index.php");
?>

</html>