<?php
	session_start();
	include_once 'connect/db-connect.php';
	include_once 'connect/db-series.php';

	$acc_name = $_GET['acc'];
	$series_id = $_GET['id'];
	$vote = $_GET['vote'];
	//echo $acc_name." ".$series_id." ".$vote."<br><br>";

	if (infoRating($con,$acc_name,$series_id) == 0) {
		echo "<script> alert('คุณได้ vote เรื่องนี้ไปแล้ว'); window.location='details.php?no=".$series_id."'; </script>";
	}
	else {
		insertRating($con,$acc_name,$series_id,$vote);
		echo "<script> alert('ขอบคุณสำหรับคะแนน vote'); window.location='details.php?no=".$series_id."'; </script>";
	}
	
	//echo getRating($con,$series_id);
?>
