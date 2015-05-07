<html>
<head>
	<meta charset="utf-8">
</head>
<?php
	include('db.php');
	
	$Gender_val = "NULL";
	if($_POST["gender"] == "male")
	{
		$Gender_val = "M";
	}
	else if ($_POST["gender"] == "female")
	{
		$Gender_val = "F";
	}
		
	mysql_query("INSERT INTO account ( userName, userPass, Email, Gender ) VALUES ('".$_POST['username']."', '".$_POST['password']."', '".$_POST['email']."', '".$Gender_val."')",$con) or die ("<script> alert('Username/E-mail นี้มึคนอื่นใช้แล้ว'); window.location='../register.php'; </script>");
	header("Location:../index.php");
?>

</html>