<?php
	if ( !isset($_SESSION["id"]))
	{
		echo "Niet ingelogd";
		header("refresh:4;url=index.php?content=login_form");
		exit();		
	}
	else if ( !in_array($_SESSION["userrole"], $userrole ))
	{
		echo "Uw gebruikerrol (".$_SESSION["userrole"].") komt niet overeen met de gebruikersrol die nodig is voor het bekijken van deze pagina. U wordt doorgestuurd naar de ".$_SESSION["userrole"]." homepage";
		header("refresh:4;url=index.php?content=".$_SESSION["userrole"]."_homepage");
		exit();		
	}
	else
	{
		
	}	
?>