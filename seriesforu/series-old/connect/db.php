<?php
	$con = mysql_connect("localhost", "wonderworl","3WQMt_4-dp") or die("Unable to connect to MySQL");
	mysql_select_db("wonderworl_d") or die("Can't Select MySQL");
	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $con);
?>