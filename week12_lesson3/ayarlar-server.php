<?php
	$server = 'sql100.epizy.com';
	$kullanici = 'epiz_23597932';
	$parola = 'rVPM0yhOokKCS';
	$veritabani = 'epiz_23597932_bh';

	$baglanti = mysqli_connect($server, $kullanici, $parola, $veritabani);

	mysqli_query($baglanti, "SET NAMES 'utf8' COLLATE 'utf8_general_ci'");

	if($baglanti){
		// echo "Bağlantı başarılı";
	}
	else{
		echo "Bağlantı başarısız";
	}
?>