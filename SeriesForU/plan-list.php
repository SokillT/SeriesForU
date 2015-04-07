
<?php if (isset($_SESSION['logined'])) {

	
		$plan = getPlan($con, $_SESSION['logined'], $_SESSION['seriesID']);
		$list = getList($con, $_SESSION['logined'], $_SESSION['seriesID']);
		$series = checkSeries($con, $_SESSION['seriesID']);

	if (count($plan)+count($list) == 0) { 
		echo "
			<!-- if has USER-ID -->
			<ul class='nav nav-pills pull-right' style='padding:0px 0px 0px 0px; margin:20px 0px 0px 0px;'>
				<li class='dropdown'>
					<a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-pencil'></span></a>
					<ul class='dropdown-menu pull-right'>
						<li><a href='insert-plan.php'><span class='glyphicon glyphicon-bookmark'></span>&nbsp Add to my Plan</a></li>
						<li><a href='insert-list.php'><span class='glyphicon glyphicon-th-list'></span>&nbsp Add to my List</a></li>
					</ul>
				</li>
			</ul>
		"; }

	elseif (count($plan) != 0) { 
		echo "
			<!-- if has PLAN -->
			<ul class='nav nav-pills pull-right' style='padding:0px 0px 0px 0px; margin:15px 0px 0px 0px;'>
				<li><a href='user.php'><span class='glyphicon glyphicon-cog'></span>&nbsp Plan</a></li>
			</ul>
		"; }

	elseif (count($list) != 0) {
		echo "
			<!-- if has LIST -->
			<ul class='nav nav-pills pull-right' style='padding:0px 0px 0px 0px; margin:15px 0px 0px 0px;'>
				<li><a href='user.php'><span class='glyphicon glyphicon-cog'></span>&nbsp List &nbsp".$list[0]['LEp']." / ".$series[0]['SEp']."</a></li>
			</ul>
		"; }

} ?>