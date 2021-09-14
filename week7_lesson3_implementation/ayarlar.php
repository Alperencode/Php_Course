<?php
	$server = 'localhost';
	$kullanici = 'belteki-user';
	$parola = '123456';
	$veritabani = 'h7d3u';

	$baglanti = mysqli_connect($server, $kullanici, $parola, $veritabani);

	if($baglanti){
		echo "<br>"."Bağlantı başarılı";
	}
	else{
		echo "Bağlantı başarısız";
	}
?>