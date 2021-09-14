<?php
	
	function temizle($data) {
		$data = strip_tags($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = str_replace("%","",$data);
		$data = str_replace("'"," ",$data);
		$data = str_replace("chr(34)"," ",$data);
		$data = str_replace("chr(39)"," ",$data);
		$data = str_replace("="," ",$data);
		$data = str_replace("&"," ",$data);
		$data = str_replace("¿"," ",$data);
		return $data;
	};
	
?>