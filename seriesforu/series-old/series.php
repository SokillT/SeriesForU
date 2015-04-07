<?php
	//include_once '../connect/db-series.php';
	include_once "{$_SERVER['DOCUMENT_ROOT']}/connect/db-connect.php";
      include_once "{$_SERVER['DOCUMENT_ROOT']}/connect/db-series.php";

	$get = getSeries($con);
	//echo var_dump($get);
	
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
		<?php include_once "{$_SERVER['DOCUMENT_ROOT']}/header.php"; ?>
		<div class="container">
      		<!-- Header -->
      		<div class="page-header">
        		<h1>Series <small>ซีรีย์ทั้งหมด</small></h1>
      		</div>
			
			<div class='row' style='margin-top:10px; margin-bottom:10px'>
      		<?php 
      			$i=0;
      			for($i=0; $i<=count($get)-1; $i++) {
      				$get_Name = $get[$i]['SName'];
                              $get_Description = $get[$i]['Description'];
					//$get_Country = $get[$i]['SCountry'];
			?>
					<div class='col-md-4' onmouseover="this.style.background='#F7F7F7'" onmouseout="this.style.background='#FFFFFF'">
      		<?php
      				echo "<h3>".$get_Name."</h3>";
      				echo "<img src='image/".$get[$i]['SID'].".jpg' width='150' height='200' align='left' style='padding-right:10px; padding-bottom:10px'>";
                              echo subString($get_Description);
                              echo "<p><a class='btn btn-default' href='details.php?no=".$get[$i]['SID']."' role='button'>View details &raquo;</a></p>";
      		?>
      				</div>
      		<?php
      				if (($i+1)%3==0 && $i!=0) {
      		?>
      				</div><div class='row' style='margin-top:10px; margin-bottom:10px'>
      		<?php
      				}
      			}
      		?>
      		</div>
      	</div>
      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="dist/js/bootstrap.min.js"></script>
	</body>
</html>