<?php
	include_once "db.php";
	$sql_listc = "SELECT COUNT(*) FROM series,list WHERE list.userName = '".$row['userName']."'"."AND list.SID = series.SID";
	$i = mysql_query($sql_listc,$con);
	$i = mysql_fetch_array($i,MYSQLI_NUM);
	$i = $i[0];
	echo gettype($i)."<br>";
	$sql_list = "SELECT SName,SEp,LEp,LDate FROM series,list WHERE list.userName = '".$row['userName']."'" ."AND list.SID = series.SID";
	$result_list = mysql_query($sql_list,$con);
	for($j = 0;$j<$i;$j++){
		echo "hello";
		$line_list = mysql_fetch_array($result_list,MYSQLI_NUM);
		echo "$line_list[0]";
		echo "<tr><td>". $line_list[0] ."</td><td>". $line_list[1] ."</td><td>". $line_list[2] ."</td><td>". $line_list[3] ."</td><td></td><td></td></tr>";
	}
?>