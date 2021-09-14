<!DOCTYPE html>
<html>
<head>
	<title>Kontrol</title>
</head>
<body>

	<?php 
		$sayi = $_GET["sayi"];
		$sonuc = 1;
		for($i=1;$i<$sayi;$i++){
	
			$sonuc += $sonuc * $i;
			
		}
	 echo $sonuc;
	
	?>
	
	
</body>
</html>
