<?php
	include_once 'connect/db.php';
	$ep_now = $_POST['EP']+1;
	$seriesID = $_POST['seriesID'];
	$user = $_POST['logined'];

	$sql_upEp = "UPDATE `list` SET `LEp` = '{$ep_now}',`LDate` = CURRENT_DATE() WHERE `SID`='{$seriesID}' AND `userName` ='{$_POST['logined']}'";
    $result_upEp = mysql_query($sql_upEp,$con) or die('Failed: '.mysql_errno());
    $result_end = mysql_query("SELECT  `SEp` FROM  `series` WHERE  `SID` = '{$seriesID}'",$con);
    $end =  mysql_result($result_end, 0) ;
    if($ep_now == $end){
    	echo 0;
    	$sql_his = "DELETE FROM `list`  WHERE `SID`='$seriesID' AND `userName` ='$user'";
		$sql_2his = "INSERT INTO `history`(`userName`, `SID`, `HDate`) VALUES ('$user','$seriesID',CURRENT_DATE())";
    	mysql_query($sql_his,$con) or die('Failed: '.mysql_errno());
    	mysql_query($sql_2his,$con) or die('Failed: '.mysql_errno());
    }
    else
    	echo $ep_now;
?>