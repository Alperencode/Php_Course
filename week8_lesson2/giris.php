<div class="container">

	<h4 class="p-title"><b>Üye Girişi</b></h4>

	<div class="card bg-light mb-40">
	<article class="card-body">

		<?php
		
		$eposta = temizle($_POST["eposta"]);
		$sifre = temizle($_POST["sifre"]);
				
		$sifre = md5($sifre);		
		//echo $eposta."<br>";
		//echo $sifre."<br>";
		
		include("ayarlar.php");

		$sorgu = "SELECT * FROM kullanicilar WHERE eposta='$eposta' and sifre='$sifre'";
		
		$sec = mysqli_query($baglanti, $sorgu);
		
		// $sec = array("ad"=>"Beltek", "soyad"=>"Kullanıcı");
		
		$kayitSayisi = mysqli_num_rows($sec);
		
		
		if($kayitSayisi==1){
			$sec = mysqli_fetch_array($sec);
			echo $sec["ad"];
			echo "<br>";
			echo $sec["soyad"];
		}
		else{
			echo "Kayıt yok";
		}

		
		?>

	</article>
	</div>

</div> 
