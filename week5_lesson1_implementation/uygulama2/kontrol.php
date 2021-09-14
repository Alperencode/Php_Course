<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kontrol 2</title>
</head>

<body>
		
	<?php
	
	$alt = $_POST["alt"];
	$ust = $_POST["ust"];
	echo "Alt Değer: $alt, Üst Değer: $ust";
	echo "<br>";
	echo "Üretilen Değerler: "."<br>";
	$sayilar = range($alt,$ust);
	shuffle($sayilar);
	for($i=0;$i<6;$i++){;
		echo $sayilar[$i]."<br>";
	}
	?>
	
</body>
</html>