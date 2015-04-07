<?php
	include_once "connect/db-connect.php";
	include_once "connect/db-series.php";

	$get = newSeriesK($con);
	
?>

<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8">
	    
	    <title>Series</title>

	    <!-- Bootstrap core CSS -->
	    <link href="dist/css/bootstrap.css" rel="stylesheet">
	    <!-- Custom styles for this template -->
	    <link href="css/stylesheet.css" rel="stylesheet">
	</head>
	<body>
		<div class="container well ">
      		<!-- Header -->
      		<div class="page-header">
        		<h1>K-Series <small>new update</small></h1>
      		</div>
			
			<div class='row' style='margin-top:10px; margin-bottom:10px'>
      		<?php 
      			for($i=0; $i<=1; $i++) {
      				$get = newSeriesK($con);
      				$get_Name = $get[$i]['SName'];
              $get_Description = $get[$i]['Description'];
			?>
					<div class='col-md-4' onmouseover="this.style.background='#F7F7F7'" onmouseout="this.style.background='#F7F7F7'">
      		<?php
      				echo "<h3>".$get_Name."</h3>";
      				echo "<img src='image/".$get[$i]['SID'].".jpg' width='150' height='200' align='left' style='padding-right:10px; padding-bottom:10px'>";
                    echo subString($get_Description);
                    echo "<p><a class='btn btn-default' href='details.php?no=".$get[$i]['SID']."' role='button'>View details &raquo;</a></p>";
      		?>
      				</div>
      		<?php } ?>
      		</div>
      	</div>

      	<div class="container well">
      		<!-- Header -->
        	<h1 stlye="margin:0px; padding:0px;">US/UK-Series <small>new update</small></h1>
      		<hr stlye="margin:0px; padding:0px;">
			
			<div class='row' style='margin-top:0px; margin-bottom:0px;'>
      		<?php 
      			for($i=0; $i<=1; $i++) {
      				$get = newSeriesE($con);
      				$get_Name = $get[$i]['SName'];
                    $get_Description = $get[$i]['Description'];
			?>
					<div class='col-md-4' onmouseover="this.style.background='#F7F7F7'" onmouseout="this.style.background='#F7F7F7'">
      		<?php
      				echo "<h3>".$get_Name."</h3>";
      				echo "<img src='image/".$get[$i]['SID'].".jpg' width='150' height='200' align='left' style='padding-right:10px; padding-bottom:10px'>";
                    echo subString($get_Description);
                    echo "<p><a class='btn btn-default' href='details.php?no=".$get[$i]['SID']."' role='button'>View details &raquo;</a></p>";
      		?>
      				</div>
      		<?php } ?>
      		</div>
      	</div>

		<!-- Bootstrap core JavaScript
      	================================================== -->
      	<!-- Placed at the end of the document so the pages load faster -->
      	<script src="js/jquery.js"></script>
      	<script src="js/bootstrap.min.js"></script>	
	</body>
</html>