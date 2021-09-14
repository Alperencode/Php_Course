<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Kontrolü</title>
</head>

<body>
	
	<?php
	/*
	5. Ortalama vizenin yüzde 40'ı finalin yüzde 60'ı alınarak hesaplanmalı
		6. Kullanıcının seçtiği ders Türkçe ise ortalaması 50 ve üzeri olanlar için "Geçti", 50'nin altında olanlar için "Kaldı" çıktısı üretilmeli
		7. Kullanıcının seçtiği ders Matematik ise ortalaması 60 ve üzeri olanlar için "Geçti", 60'ın altında olanlar için "Kaldı" çıktısı üretilmeli
		8. kontrol.php'de kullanıcının vize puanı, final puanı, seçtiği dersin adı, seçtiği dersin baraj puanı, ortalaması ve geçip kalma durumu aşağıdaki gibi olmalıdır.
			Olası ekran görüntüsü	->	Vize: 80
										Final: 60
										Seçtiğiniz Ders: Matematik
										Dersin Baraj Puanı: 60
										Ortalamanız: 68
										Durum: Geçti
	
	*/
	$vize = $_POST["vize"];
	$final = $_POST["final"];
	$ders = $_POST["ders"];
	$ortalama = (($vize*40/100)+($final*60/100));
	echo "Vize:"." ".$vize."<br>";
	echo "Final:"." ".$final."<br>";
	echo "Seçtiğiniz Ders:"." ".$ders."<br>";
	
	if($ders == "Türkçe" ){
		echo "Dersin Baraj Puanı: 50"."<br>";
		echo "Ortalamanız:"." ".$ortalama."<br>";
		if($ortalama>=50){
			echo "Durum: Geçti";
		}
		else echo "Durum: Kaldı";		
	}
	
	if($ders == "Matematik" ){
	echo "Dersin Baraj Puanı: 60"."<br>";
	echo "Ortalamanız:"." ".$ortalama."<br>";
	if($ortalama>=60){
		echo "Durum: Geçti";
	}
	else echo "Durum: Kaldı";		
	}
	
	
	?>
	
</body>
</html>