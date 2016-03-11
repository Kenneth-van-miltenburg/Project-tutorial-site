<?php
	include("../../db_connect.php");
	
	if ( $_POST["action"] == "select" )
	{
		$query = "SELECT * FROM `register` WHERE `id` = '".$_POST["id"]."'";	
		$result = mysqli_query($conn, $query);	
		
		$record = mysqli_fetch_assoc($result);
		
		
		echo '{"id" : "'.$record["id"].'", '.
			   '"firstname" : "'.$record["firstname"].'", '.
			   '"infix" : "'.$record["infix"].'", '.
			   '"lastname" : "'.$record["lastname"].'", '.
			   '"email" : "'.$record["email"].'", '.
			   '"activation" : "'.$record["activation"].'", '.
			   '"userrole" : "'.$record["userrole"].'"}';
	}
	else if ( $_POST["action"] == "delete")
	{
		$query = "DELETE FROM `register` WHERE `id` = '".$_POST["id"]."'";
		
		mysqli_query($conn, $query);
		
	}
	
	else 
	{
		
		$query = "UPDATE `register`
				  SET `firstname` = '".$_POST["firstname"]."',
					  `infix` = '".$_POST["infix"]."',
					  `lastname` = '".$_POST["lastname"]."',
					  `activation` = '".$_POST["activated"]."',
					  `userrole` = '".$_POST["userrole"]."',
					  `email` = '".$_POST["email"]."'
					  WHERE `id` = ".$_POST["id"].";";
				  
		$result = mysqli_query($conn, $query);
		
		echo "De update heeft plaatsgevonden!";
		
	}
?>