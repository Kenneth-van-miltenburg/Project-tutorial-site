<?php
	if (isset($_SESSION["id"]))
	{
		switch($_SESSION["userrole"])
		{
			case "developer":
				echo "<a href='index.php?content=developer_homepage&topic=css'>CSS</a> - 
					  <a href='index.php?content=developer_homepage&topic=php'>PHP<a> - 
					  <a href='index.php?content=developer_homepage&topic=javascript'>JavaScript</a> - 
					  <a href='index.php?content=developer_homepage&topic=jquery'>jQuery</a> - 
                      <a href='index.php?content=developer_homepage&topic=jquery_ui'>jQuery UI</a> - 
					  <a href='index.php?content=developer_homepage&topic=sass'>SASS</a> - 
					  <a href='index.php?content=developer_homepage&topic=less'>LESS</a> - 
                      <a href='index.php?content=developer_homepage&topic=json'>Json</a>";
				break;
			case "administrator":
				echo "verander wachtwoord - verander gebruikersrol";
				break;
			
		}
	}
	
?>