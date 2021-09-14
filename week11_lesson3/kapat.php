<?php
	
	//Session Silme
	session_unset(); 
	session_destroy(); 	

	// Çerez Silme
	setcookie("oturum", "", time() - 7200, "/");

	header("Location: index.php");

?>