<?php
//var_dump($_SERVER["HTTP_HOST"]);
	switch($_SERVER["HTTP_HOST"])
	{
		case "localhost":
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "register_tutorial";
			break;
			
		case "kennethvanmiltenburg.esy.es":
			$servername = "mysql.hostinger.nl";
			$username = "u101887782_ken";
			$password = "geheim";
			$dbname = "u101887782_nero";	
			break;
	};
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn)
	{
		die("Er is geen verbinding met de mysql-server gemaakt");
	}
?>