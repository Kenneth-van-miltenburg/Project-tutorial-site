<?php
	//var_dump($_POST);	
	if ( isset($_POST["email"]) || isset($_POST["password"]))
	{
		include("db_connect.php");
		
		$query = "SELECT	*
				  FROM		`register`
				  WHERE		`email`		= '".$_POST["email"]."'
				  AND		`password`	= '".MD5($_POST["password"])."'";
				  
		//echo $query; exit();
		
		$result = mysqli_query($conn, $query);
		
		$record = mysqli_fetch_assoc($result);
		
		if ( mysqli_num_rows($result) > 0)
		{
			$_SESSION["id"] = $record["id"];
			$_SESSION["firstname"] = $record["firstname"];
			$_SESSION["infix"] = $record["infix"];
			$_SESSION["lastname"] = $record["lastname"];
			$_SESSION["email"] = $record["email"];
			$_SESSION["activation"] = $record["activation"];
			$_SESSION["password"] = $record["password"];
			$_SESSION["userrole"] = $record["userrole"];
			
			//var_dump($record);
			switch ($record["userrole"])
			{
				case "root";
					header("location:index.php?content=root_homepage");
					break;
				case "administrator";
					header("location:index.php?content=administrator_homepage");
					break;
				case "developer";
					header("location:index.php?content=developer_homepage");
					break;
				case "custumer";
					header("location:index.php?content=custumer_homepage");
					break;
				default:
					header("location:index.php?content=homepage");
					break;
			}
		}
		else
		{
			echo "De door u gegeven combinatie van E-mailadres en wachtwoord is niet bij ons bekend. U wordt doorgestuurd naar de inlogpagina";
			header("refresh:4;url=index.php?content=login_form");
		}
	}
	else
	{
		echo"U heeft een van de velden niet ingevult. U word terug gestuurd naar de login pagina";
		header("refresh:4;url=index.php?content=login_form");
	}
?>