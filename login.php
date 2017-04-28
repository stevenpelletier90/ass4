<?php
/*session_start();*/
require_once('connection.php');
if(isset($_POST) & !empty($_POST)){
	$user = mysql_real_escape_string($_POST['username']);
	$pass = md5($_POST['password']);

	$sql = "SELECT * FROM Login WHERE username='$user' AND password='$pass'";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	if($count == 1){
		$_SESSION['username'] = $user;
		$fmsg = "Hello $user !";
		$msg = "<a href = \"index.php\">Logout<a>";
	}else{
		$fmsg = "Invalid Username/Password";
	}
}

/*if(isset($_SESSION['username'])){
	$smsg = "User logged in";
}*/

?>
