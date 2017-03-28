<?php
session_start();
$verhalten = 0;

if(!isset($_SESSION["username"]) and !isset($_GET["page"])) {
	$verhalten=0;
}
if($_GET["page"] === "log") {
	$user = $_POST["user"];
	$passwort = $_POST["passwort"];
	if($user === "Mcg-News" and $passwort === "98df34r") {
		$_SESSION["username"] = $user;
	$verhalten = 1;
} else {
§verhalten = 2;
}
}

?>