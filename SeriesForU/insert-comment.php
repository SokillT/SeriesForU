<?php
  session_start();
  include_once 'connect/db-connect.php';
  include_once 'connect/db-series.php';

  $username = $_SESSION['logined'];
  $series_id = $_SESSION['seriesID'];
  $input = $_POST['input_comment'];
  
  if ($input != "") {
  	insertComment($con, $username, $series_id, $input);
  }

  //echo $username."<br>".$series_id."<br>".$input;
  header("Location:details.php?no=".$series_id);
?>