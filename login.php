<?php
$_POST['user'] = $benutzer;
$_POST['pass'] = $passwort;
$_POST['login'] = $loginbutton;


if ($loginbutton)
{
	if ($benutzer AND $passwort)
	{
		if ($benutzer=='lennard')
		{
			if ($passwort=='1234')
			{
				<html>
				<head>
				<h2>Du hast es geschaft</h2>
				</head>
				<body>
				</body>
				</html>
				
				
			}
			else
				echo "Das Passwort dieses Benutzers ist Falsch";
		
		}
		else
			echo "Der Benutzername ist falsch";
	
	}
	else
		echo "Bitte f&uun;lllen sie alle Felder aus!";
}


?>