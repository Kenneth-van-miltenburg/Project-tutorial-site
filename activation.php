<?php
	
	if ( isset($_POST["submit"]))
			{
				include("db_connect.php");
				echo "Er is gedrukt op de submitknop<br><br>";
				$wachtwoord = "K";
				echo MD5("j");
				echo "<br><br>";
				//var_dump($_POST);
				$result = strcmp($_POST["password"], $_POST["check_password"]);
				//var_dump($result);
				if ($result == 0)
				{
				$query = 	"UPDATE 	`register`
							SET			`password` 	= '".MD5($_POST["password"])."'
							WHERE 		`id` 		= '".$_POST["id"]."';";
						echo $query;
						$result = mysqli_query($conn, $query);
						if ($result)
						{
							echo"Your password is succesfully changed. You will be sent back to the log in page!";
							header("refresh:6;url=index.php?content=login_form&email=".$_POST["email"]);
						}
						else 
						{
							echo"ERROR Something went wrong. Try agian or contact us for more help. U will be sent to the contact page";
							header("refres:5; url= contact.php");
						}
				}
				else 	
				{
					echo"Your passwords arnt the same. Try agian.";
					header("refres:5; url= index.php?content=activation&id=".$_POST["id"]."&pw=".$_POST["pw"]);
				}
			}
			
			else
			{
				//echo"Ik ga jou activeren..." .$_GET["id"];
				
				
				include("db_connect.php");
		
				$query = 	 "SELECT		*
							  FROM			`register`
							  WHERE			`id`		= '".$_GET["id"]."'
							  AND			`password`	= '".$_GET["pw"]."'";
				
	
				$result = mysqli_query($conn, $query);
				if ( mysqli_num_rows($result)> 0 )
				{
				$record = mysqli_fetch_assoc($result);
				$email = $record["email"];
				
				$query =   "UPDATE 		`register`
							SET			`activation` = 'true'
							WHERE 		`id` = ".$_GET["id"].";";
					  
							$result = mysqli_query($conn, $query);
							
			
						if ($result)
				{
							echo"<h3>Your account has been activated. Choos a password that has at least 8 characters.<h3><br>";
							//header("refresh:3; url= login_form.php");
		?>
								<form id="login" action="index.php?content=activation" method="post">
								<table>
									<tr>
										<td>Password: </td>
										<td><input type="password" name="password"></td>
									</tr>
									<tr>
										<td>Enter your password agian: </td>
										<td><input type="password" name="check_password"></td>
									</tr>
									<tr>
										<td><input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
											<input type="hidden" name="pw" value="<?php echo $_GET["pw"];?>">
											<input type="hidden" name="email" value="<?php echo $email;?>">
											</td>
										<td><input type="submit" name="submit"></td>
									</tr>
								</table>

		<?php
				}
				else 
				{
					echo"ERROR Something went wrong. Try agian or contact us for more help. U will be sent to the contact page";
					header("refres:5; url= contact.php");
				}
			
				//var_dump($result);
				}
			}
	
?>