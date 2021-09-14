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

 	function faktoriyel($a){
	$count = 1;	
	for($x=1;$x<=$a; $x++){ 
	$count *= $x;				   
	}
		return $count;
	}
	 function faktoriyel1($b){
	$count1 = 1;	
	for($y=1;$y<=$b; $y++){ 
	$count1 *= $y;				   
	}
		return $count1;
	}
	 function faktoriyel2($c){
	$count2 = 1;	
	for($z=1;$z<=$c; $z++){ 
	$count2 *= $z;				   
	}
		return $count2;
	}
	$afaktoriyel = faktoriyel($a);
	$bfaktoriyel = faktoriyel1($b);
	$cfaktoriyel = faktoriyel2($c);
	$islem1 = $a / $afaktoriyel;
	$islem2 = $b**2 / $bfaktoriyel;
	$islem3 = $c**3 / $cfaktoriyel;
	$formul= $islem1+$islem2+$islem3;
	echo "a: $a, b: $b, c: $c";
	echo "<br>";
	echo "Sonuç: $formul";
	
	
	?>
	
</body>
</html>