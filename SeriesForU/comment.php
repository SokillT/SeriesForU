<?php
	include_once 'connect/db-connect.php';
	include_once 'connect/db-series.php';

	//insertComment($con,'asd','KR011','12345');
	//insertComment($con,'asd','KR012','12345');
	//insertComment($con,'asd','KR013','12345');
	//insertComment($con,'asd','KR011','67890');
	//insertComment($con,'asd','KR012','67890');
	//insertComment($con,'asd','KR013','67890');
	$series_id = $_SESSION['seriesID'];
	$get = getComment($con,$series_id);

	//echo var_dump($get);
	/*
	echo "<br><br>";
	for ($i=0; $i < count($get); $i++) { 
		echo ($i+1)." ".$get[$i]['comment'];
		echo "<br>";
	}
	echo "<br><br>";
	*/
?>

<div class="container well">
	<div class="row">
		<div class="col-md-12">
			<h3>Comments:</h3>
			<hr>
			<!-- insert your Comment -->
			<form method="POST" action="insert-comment.php">
				<div class="row">
					<div class="col-lg-12" style="margin-bottom:5px;">
						<div class="input-group">
							<input type="text" class="form-control" name="input_comment" placeholder="..comment..">
							<span class="input-group-btn">
								<button class="btn btn-warning" style="width:180px;" type="submit">Submit</button>
							</span>
					 	</div><!-- /input-group -->
					</div><!-- /.col-lg-6 -->
				</div>
			</form>
			<!-- get Loop for your Comment-->
		 	<?php
		 		for ($i=0; $i<count($get) ; $i++) {
		 			echo "<div class='panel panel-warning' style='margin-top:10px;'>";
		 			echo "<div class='panel-heading'>";
		 			echo "<h3 class='panel-title'><small>comment by</small>"."&nbsp&nbsp".$get[$i]['userName']."";
		 			echo "<span class='badge pull-right' style='margin-left:5px;'>".$get[$i]['comment_date']."</span>";
		 			echo "</h3></div>";
		 			echo "<div class='panel-body'>".$get[$i]['comment']."</div>";
		 			echo "</div>";
		 		}
		 	?>
		</div>
	</div>
</div>

