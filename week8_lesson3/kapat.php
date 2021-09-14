<?php
	
	//Session Silme
	session_unset(); 
	session_destroy(); 	

	// Çerez Silme
	setcookie("oturum", "", time() - 7200, "/");

	session_destroy();
	header("Location: index.php");

?>