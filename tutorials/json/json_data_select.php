<?php
	include("../../db_connect.php");
	$query = "SELECT `id`, `firstname`, `infix`, `lastname` FROM `register`";	
	$result = mysqli_query($conn, $query);	
	
	$numberOfFirstnames = mysqli_num_rows($result);
	$counter = 1;
	$output = '{ "id" : [ ';
	while ( $record = mysqli_fetch_assoc($result))
	{
		if ($counter < $numberOfFirstnames)
		{
			$output .= "\"".$record["id"]."\", ";
		}
		else
		{
			$output .= "\"".$record["id"]."\"";
		}
		$counter++;
	}
	$output .= '], "firstname" : [';
	mysqli_data_seek($result, 0);
	$counter = 1;
	while ( $record = mysqli_fetch_assoc($result))
	{
		if ($counter < $numberOfFirstnames)
		{
			$output .= "\"".$record["firstname"]."\", ";
		}
		else
		{
			$output .= "\"".$record["firstname"]."\"";
		}
		$counter++;
	}
	$output .= '], "infix" : [';
	$counter = 1;
	mysqli_data_seek($result, 0);
	while ( $record = mysqli_fetch_assoc($result))
	{
		
		if ($counter < $numberOfFirstnames)
		{
			$output .= "\"".$record["infix"]."\", ";
		}
		else
		{
			$output .= "\"".$record["infix"]."\"";
		}
		$counter++;
	}
	
	$output .= '], "lastname" : [';
	$counter = 1;
	mysqli_data_seek($result, 0);
	while ( $record = mysqli_fetch_assoc($result))
	{
		
		if ($counter < $numberOfFirstnames)
		{
			$output .= "\"".$record["lastname"]."\", ";
		}
		else
		{
			$output .= "\"".$record["lastname"]."\"";
		}
		$counter++;
	}
	$output .= ']}';
	
	
	
	echo $output;
?>