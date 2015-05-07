<?php
	include_once('connect/db.php');
	$list = $_POST['seriesID'];
	$user = $_POST['logined'];
	$sql_his = "DELETE FROM `list`  WHERE `SID`='$list' AND `userName` ='$user'";
	$sql_2his = "INSERT INTO `history`(`userName`, `SID`, `HDate`) VALUES ('$user','$list',CURRENT_DATE())";
    mysql_query($sql_his,$con) or die('Failed: '.mysql_errno());
    mysql_query($sql_2his,$con) or die('Failed: '.mysql_errno());
    echo "yes"
    //header("Location:user.php");
?>