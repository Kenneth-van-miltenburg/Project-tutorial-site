<a href="index.php?content=homepage">Startpagina</a>
<a href="index.php?content=contact">Contact</a>
<?php
	if ( isset ($_SESSION["id"]))
	{
		echo "<a href='index.php?content=".$_SESSION["userrole"]."_homepage'>home</a> ";
		echo "<a href='index.php?content=logout'>Uitloggen</a> ";
		switch ( $_SESSION["userrole"] )
		{
			case "developer":
				echo "<a href='index.php?content=developers/php/start'>PHP</a>";	
				break;
			default:
				break;
		}
	}
	else
	{
		echo "<a href='index.php?content=register_form'>Registreer</a> ";
		echo "<a href='index.php?content=login_form'>Inloggen</a> ";
	}
?>	