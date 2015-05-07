<?php
  session_start();
  include_once 'connect/db-connect.php';
  include_once 'connect/db-series.php';

  $username = $_SESSION['logined'];
  $series_id = $_SESSION['seriesID'];
  
  //$plan = getPlan($con, $username, $series_id);
  //$list = getList($con, $username, $series_id);

  date_default_timezone_set('Asia/Bangkok');
  $date = date("Y-m-d");
  //echo $date;
  //echo "<br><br>";
  //echo var_dump($plan);
  //echo "<br><br>";
  //echo var_dump($list);

  //insertPlan($con,$username,$series_id);
  insertList($con,$username,$series_id,$date);

  //echo $username."<br>".$series_id."<br>".$input;
  header("Location:details.php?no=".$series_id);

?>