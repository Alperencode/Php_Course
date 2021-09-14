<?php
	
	$server = 'localhost';
	$kullanici = 'belteki-user';
	$parola = '123456';
	$veritabani = 'beltek-haber';

	$baglanti = mysqli_connect($server,$kullanici,$parola,$veritabani);

	if($baglanti){
		echo "Bağlantı Başarılı";
	}
	else{
		echo "Bağlantı Başarısız";
	}

?>