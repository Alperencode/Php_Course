<div class="container">

	<h4 class="p-title"><b>Hesap Oluştur</b></h4>

	<div class="card bg-light mb-40">
	<article class="card-body">

		<?php
		
		$ad = temizle($_POST["ad"]);
		$soyad = temizle($_POST["soyad"]);
		$eposta = temizle($_POST["eposta"]);
		$sifre = temizle($_POST["sifre"]);
				
		$sifre = md5($sifre);		
		echo $ad."<br>";
		echo $soyad."<br>";
		echo $eposta."<br>";
		echo $sifre."<br>";
		
		include("ayarlar.php");
		
		$sorgu = "INSERT INTO kullanicilar (ad, soyad, eposta, sifre, yetki) VALUES ('$ad', '$soyad', '$eposta', '$sifre', 0)";
		
		$ekle = mysqli_query($baglanti, $sorgu);
		
		if($ekle){
			echo "Kayıt başarılı";
		}
		else{
			echo "Kayıt yapılamadı";
		}
		
		?>

	</article>
	</div>

</div> 
