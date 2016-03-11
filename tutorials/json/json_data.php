<?php
	include("../../db_connect.php");
	$query = "SELECT * FROM `register` WHERE `id` = '".$_POST['id']."'";	
	$result = mysqli_query($conn, $query);	
	$record = mysqli_fetch_assoc($result);
	
	
	$txt =  '{ "firstname" : "'.$record['firstname'].'", "infix" : "'.$record['infix'].'", "lastname" : "'.$record['lastname'].'", "leeftijd" : 47, "favorieteKleuren" : [ "geel", "groen", "blauw" ], "opleiding" : { "llnr" : "109321", "naamOpleiding" : "Applicatie- en Mediaontwikkeling" } }';
	
	echo $txt;
?>