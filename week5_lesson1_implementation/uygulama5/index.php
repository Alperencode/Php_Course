<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Uygulama 5</title>
<style>
	table{
		margin-top: 12%;
		margin-left: 35%;
	}
</style>
</head>

<body>
	
	<?php
	
	/*	Klasör içersinde verilen görseldeki gibi bir çarpım tablosunu sadece döngü ve koşullu ifadeler kullanarak oluşturunuz. Tablo hücreleri de bir döngü ile oluşturulmalıdır.
	
	*/
		
	?>
	<?php
	echo "<table border='2'><tr>";
		for($i=1;$i<=10;$i++){
		echo "<td>";
			for($y=1;$y<=10;$y++){
				echo "$i x $y"."=".$i*$y."<br>";
			}
		echo "</td>";
		if($i==5){
			echo "<tr></tr>";
		}
		}
	echo "</table></tr>" ;
	?>

</body>
</html>