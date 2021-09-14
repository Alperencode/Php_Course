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
			echo "Hoş Geldiniz ";
			echo $sec["ad"];
			echo " ";
			echo $sec["soyad"];
			
			// Tarayıcı açık kaldıkça oturumu açık tutma
			$_SESSION["oturum"]=$eposta;
			
			// Tarayıcı kapanmış olsa da oturumu saklama
			if(isset($_POST["cerez"])) {
				setcookie("oturum", $eposta, time() + (86400), "/"); // 86400 = 1 gün
			}
			
			echo "<br>";
			echo "Ana Sayfa Yönlendiriliyorsunuz";
			// header("Location: index.php"); Doğrudan Yönlendirme
			header("Refresh: 2; index.php"); // x Saniye Sonra Yönlendirme
			
		}
		else{
			echo "Kayıt yok";
		}

		
		?>

	</article>
	</div>

</div> 
