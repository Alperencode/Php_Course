<?php
	$server = 'localhost';
	$kullanici = 'belteki-user';
	$parola = '123456';
	$veritabani = 'beltek-haber';

	$baglanti = mysqli_connect($server, $kullanici, $parola, $veritabani);

	mysqli_query($baglanti, "SET NAMES 'utf8' COLLATE 'utf8_general_ci'");

	if($baglanti){
		// echo "Bağlantı başarılı";
	}
	else{
		echo "Bağlantı başarısız";
	}
?>