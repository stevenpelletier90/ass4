<?php
	$username = "ti153451";
	$password = "1Dancinginlife!";
	$database = "ti153451";

	$connect = mysql_connect("localhost", "$username", "$password") or die(mysql_error());
	mysql_select_db("$database") or die(mysql_error());
	
	$sql = "SELECT * FROM Login";
	$result = mysql_query($sql);
	
?>