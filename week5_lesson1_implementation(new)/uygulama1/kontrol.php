<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kontrol 1</title>
</head>

<body>

	<?php

	$a = $_POST["a"];
	$b = $_POST["b"];
	$c = $_POST["c"];

		$veriler = array($a, $b, $c);
		$sonuc = ($a / ($a + 1)) + ($b / ($b + 1)) + ($c / ($c + 1)) ;
			echo "a: $a, b: $b, c: $c";
			echo "<br>";
			echo "Sonuç: ".$sonuc;

	?>

</body>
</html>

 
