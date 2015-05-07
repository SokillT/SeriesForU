<?php
	
	$hostname = 'localhost';
	$username = 'wonderworl';
	$password = '3WQMt_4-dp';
	$dbname = 'wonderworl_d';
	/*
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'wonderworl_d';
	*/
	try {
	    $con = new PDO("mysql:host=$hostname; dbname=$dbname; charset=utf8", $username, $password);
	    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    //echo 'Connected to database<br><br>';
	    }
	catch(PDOException $e)
	    {
	    echo $e->getMessage();
	    }
?>