<?php

	//var_dump($_POST);
	
		
	$date = date("d-m-Y H:i:s");
	$password = $date.substr($_POST["firstname"], 0, 3)."-".substr($_POST["lastname"], strlen($_POST["lastname"])-4, 4);
	$passwordhash = MD5($password);
	//exit();
	
	include("db_connect.php");
	
	$query = "INSERT INTO `register` 	(`id`, 
										 `firstname`, 
										 `infix`, 
										 `lastname`, 
										 `email`,
										 `password`)
			VALUES 						 (NULL, 
										 '".$_POST ['firstname']."', 
										 '".$_POST ['infix']."', 
										 '".$_POST ['lastname']."',  
										 '".$_POST ['email']."',
										 '".$passwordhash."');";
										 
	$result = mysqli_query($conn, $query);
	
	$id = mysqli_insert_id($conn);
	
	switch($_SERVER["HTTP-HOST"])
		{
			case "lokalhost"
				$activation_link = 
				"http://localhost/2015-2016/inlogregistratie-tutorialsite/index.php?content=activation&id=".$id."&pw=".$passwordhash."";
				break;
			case "kennethvmiltenburg.esy.es"
				$activation_link = 
				"http://www.kennethvmiltenburg.com/am1b/index.php?content=activation&id=".$id."&pw=".$passwordhash."";
				break;
			
		}
		
	if ($result)
	{
		echo " Check je email voor een bevestging.";
		$emailaddress = $_POST["email"];
		$title = "Welcome to the familly";
		$message = "
		<html>
			<head>
			</head>
			<body>
				<h3 style='color:grey; font-family:Verdana; font-size:12px;'>Bedankt voor het registreren. 
				Door <a href='".$_activation_link."'>hier</a> te klikken activeert u het account en kunt u inloggen</h3>
			</body>		
		</html>";
		$header = "From: Kenneth van Miltenburg <k.v.miltenburg@gmail.com>\r\n";
		$header .= "Content-type:text/html;charset=UTF-8\r\n";
		mail($emailaddress,$title,$message, $header);
		header("refresh:523134143; url= index.php");
	}
	else
	{
		echo"ERROR Something went wrong. Try agian or contact us for more help. U will be sent to the contact page";
		header("refres:5; url= contact.php");
	}
	
	?>