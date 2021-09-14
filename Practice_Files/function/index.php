<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
</head>
<body>

	<?php
		$sayi = 16;
		function tekcift($sayi){
			global $sayi;
			if($sayi%2 == 0){
				return "<strong>Sayı çift</strong>"; }
			else{
				return "Sayı tek";
			}
			
		}
	echo tekcift($sayi);
	?>
	
</body>
</html>