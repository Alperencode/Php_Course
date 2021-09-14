<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Verileri</title>
</head>

<body>
	
	<?php
	
	include("fonksiyonlar.php");
	
	echo "Adı: ".temizle($_POST["ad"])."<br>";
	echo "Soyadı: ".temizle($_POST["soyad"])."<br>";
	echo "Şifre: ".md5(temizle($_POST["sifre"]))."<br>";
	echo "ePosta: ".temizle($_POST["eposta"])."<br>";
	echo "Doğum Tarihi: ".temizle($_POST["dogumTarihi"])."<br>";
	echo "Doğum Yılı: ".temizle($_POST["dogumYili"])."<br>";
	echo "Doğum Yeri: ".temizle($_POST["dogumYeri"])."<br>";
	echo "Adres: ".temizle($_POST["adres"])."<br>";
	echo "Ülke: ".temizle($_POST["ulke"])."<br>";
	echo "Telefon: ".temizle($_POST["telefon"])."<br>";
	echo "Memnuniyet: ".temizle($_POST["memnuniyet"])."<br>";
	echo "Hobiler: ";
	$hobiler = "";
	foreach($_POST["hobileriniz"] as $hobi){
		echo $hobi."<br>";
		$hobiler = $hobiler."-".$hobi;
	}
	
	$ad = temizle($_POST["ad"]);
	$soyad = temizle($_POST["soyad"]);
	$sifre = md5(temizle($_POST["sifre"]));
	$eposta = temizle($_POST["eposta"]);
	$dogumTarihi = temizle($_POST["dogumTarihi"]);
	$dogumYili = temizle($_POST["dogumYili"]);
	$dogumYeri = temizle($_POST["dogumYeri"]);
	$adres = temizle($_POST["adres"]);
	$ulke = temizle($_POST["ulke"]);
	$telefon = temizle($_POST["telefon"]);
	$memnuniyet = temizle($_POST["memnuniyet"]);
	
	include("ayarlar.php");
	
	$sorgu = "INSERT INTO bilgiler (ad, soyad, eposta, sifre, dogumTarihi, dogumYili, dogumYeri, adres, ulke, hobiler, telefon, memnuniyet) VALUES ('$ad', '$soyad', '$eposta', '$sifre', '$dogumTarihi', '$dogumYili', '$dogumYeri', '$adres', '$ulke', '$hobiler', '$telefon', '$memnuniyet')";
	
	$ekle = mysqli_query($baglanti, $sorgu);
	
		if($ekle){
			echo "<br>"."Kayıt başarılı";
		}
		else{
			echo "<br>"."Kayıt yapılamadı".mysqli_error($ekle);
		}
	
	
	?>
	
</body>
</html>
