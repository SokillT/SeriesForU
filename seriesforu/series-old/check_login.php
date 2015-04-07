<html>
<head>
	<meta charset="utf-8">
</head>
<?php
	include('connect/db.php');
	
	$rslogin = mysql_query("select * from account where (userName ='".$_POST['username']."') and (userPass ='".$_POST['password']."')");  
	$num_rows = mysql_num_rows($rslogin);   
	
	if(empty($num_rows)) {  
	    echo "username หรือ password ไม่ถูกต้อง   <a href=index.php>แก้ไข</a>";  
	  
	} else {  
		//echo "Success!!!!!!!!  <a href=index.php>กลับหน้าหลัก</a>";  
	    session_start();
		$_SESSION['logined'] = $_POST['username'];
		@header("Location:index.php");
	}  
?>

</html>