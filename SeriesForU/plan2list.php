<?php
	include_once('connect/db.php');
	$plan = $_POST['planID'];
	$user = $_POST['logined'];
	$sql_del = "DELETE FROM `plan`  WHERE `SID`='$plan' AND `userName` ='$user'";
	$sql_2list = "INSERT INTO `list`(`userName`, `SID`, `LDate`, `LEp`) VALUES ('$user','$plan',CURRENT_DATE(),1)";
    $result_del = mysql_query($sql_del,$con) or die('Failed: '.mysql_errno());
    $result_2list = mysql_query($sql_2list,$con) or die('Failed: '.mysql_errno());
    echo "yes"
    //header("Location:user.php");
?>