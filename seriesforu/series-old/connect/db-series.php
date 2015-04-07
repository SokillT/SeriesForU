<?php
	function getSeries($con)
	{
		$sql = "SELECT * FROM series ";
		$statement = $con->prepare($sql);
		$statement ->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	function getSeriesK($con)
	{
		$sql = "SELECT * FROM series WHERE SCountry='Korea' ";
		$statement = $con->prepare($sql);
		$statement ->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	function getSeriesE($con)
	{
		$sql = "SELECT * FROM series WHERE SCountry='England' OR SCountry='United States' ";
		$statement = $con->prepare($sql);
		$statement ->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	function subString($str)
	{
		if (strlen($str)>350) {
			for ($i=350; $i>=0 ; $i--) { 
				if ($str[$i]==' ') {
					return substr_replace($str, '...', $i);
				}
			}
			return substr_replace($str, '...', 350);
		}
		else {
			return $str;
		}
	}
?>