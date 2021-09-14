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
			
			// Tarayıcı açık kaldıkça oturumu açık tutma
			$_SESSION["oturum"]=$eposta;
			
			// Tarayıcı kapanmış olsa da oturumu saklama
			if(isset($_POST["cerez"])) {
				setcookie("oturum", $eposta, time() + (86400), "/"); // 86400 = 1 gün
			}
			
		$ad	 = $sec["ad"];
		$soyad	 = $sec["soyad"];
			
			echo '<div class="alert alert-success" role="alert">';

			echo "<h4 class='alert-heading'>Hoş Geldiniz Sayın $ad $soyad</h4>";

			echo '<hr>';

			echo "Ana Sayfa Yönlendiriliyorsunuz";

			echo '</div>';
			
			// header("Location: index.php"); Doğrudan Yönlendirme
			header("Refresh: 2; index.php"); // x Saniye Sonra Yönlendirme
			
			
		}
		else{
			echo '<div class="alert alert-danger" role="alert">';

			echo "<h4 class='alert-heading'>Bilgilerinizde Hata Var, Lütfen Tekrar Deneyiniz</h4>";

			echo '<hr>';

			echo "Yönlendiriliyorsunuz";

			echo '</div>';
			
			// header("Location: index.php"); Doğrudan Yönlendirme
			header("Refresh: 2; ?sayfa=oturumAc"); // x Saniye Sonra Yönlendirme
		}

		
		?>

	</article>
	</div>

</div> 
