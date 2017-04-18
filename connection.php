<?php
	$host = "sulley.cah.ucf.edu";
	$user = "st488021";
	$pass = "Avocados90!";
	$database = "st488021";
	$mysqli = new mysqli($host, $user, $pass, $database);

	if($mysqli->error)
	{
		print "Error Connecting! Message: ".$mysqli->error;
	}
?>
