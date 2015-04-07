<?php
	include_once "connect/db-connect.php";
    include_once "connect/db-series.php";

    $newK = newSeriesK($con);
    $newE = newSeriesE($con);
?>

<!-- 
<!DOCTYPE html>
<html>
	<head>
	    <link href="dist/css/bootstrap.css" rel="stylesheet">
	    <link href="css/stylesheet.css" rel="stylesheet">
	</head>
	<body>
	-->
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <!-- Korea Series -->
          <h2>K-Series <small>new update</small></h2>
		  <hr>
          <div class="row">
          	<?php for ($i=0; $i<4; $i++) { ?>
	          	<div class="col-xs-6 col-md-3" data-toggle="tooltip" data-placement="bottom" title="<?php echo $newK[$i]['SName']; ?>">
				    <a href="details.php?no=<?php echo $newK[$i]['SID']; ?>" class="thumbnail">
				      <img src="image/<?php echo $newK[$i]['SID']; ?>.jpg" style="height:200px;">
				      <p> <?php echo $newK[$i]['SName']; ?></p>
				    </a>
			  	</div>
		  	<?php } ?>
          </div><!--/row-->

		  <!-- U.. Series -->
		  <h2>US-Series & UK-Series <small>new update</small></h2>
		  <hr>
          <div class="row">
          	<?php for ($i=0; $i<4; $i++) { ?>
	          	<div class="col-xs-6 col-md-3" data-toggle="tooltip" data-placement="bottom" title="<?php echo $newK[$i]['SName']; ?>">
				    <a href="details.php?no=<?php echo $newK[$i]['SID']; ?>" class="thumbnail">
				      <img src="image/<?php echo $newE[$i]['SID']; ?>.jpg" style="height:200px;">
				    </a>
			  	</div>
		  	<?php } ?>
          </div><!--/row-->
        </div><!--/span-->

        <br>
        <div class="col-xs-6 col-sm-3 well" style="padding-bottom:5px;">
			<h4>ใบประกาศ <small>by @TeamDesign</small></h4>
			<hr style="padding:2px; margin:0px 0px 5px 0px;">
			<p>5410501497 <br><small>น.ส.อภิญญา ประดิษฐผลเลิศ</small></p>
			<p>5410503341 <br><small>น.ส.ฐิติมา ตโมหรณวงศ์</small></p>
			<p>5410504208 <br><small>น.ส.ปาณิสรา อินโต</small></p>
        </div><!--/span-->
      </div><!--/row-->
    </div><!--/.container-->

    	<!--
	    <script src="js/jquery.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
 -->