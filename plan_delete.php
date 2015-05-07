<?php
	include_once('connect/db.php');
	$plan = $_POST['planID'];
	$user = $_POST['logined'];
	$sql_del = "DELETE FROM `plan`  WHERE `SID`='$plan' AND `userName` ='$user'";
    $result_del = mysql_query($sql_del,$con) or die('Failed: '.mysql_errno());
    echo "yes"
    //header("Location:user.php");
?>