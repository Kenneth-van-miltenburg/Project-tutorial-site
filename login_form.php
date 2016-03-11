<form id="login" action="index.php?content=login" method="post">
	<table>
		<tr>
			<td>e-mail: </td>
			<td><input type="email" name="email" value="<?php if (isset($_GET["email"])) { echo $_GET["email"]; } ?>"></td>
		</tr>
		
		<tr>
			<td>wachtwoord: </td>
			<td><input type="password" name="password" autofocus></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>