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
				
		$sorgu = "INSERT INTO kullanicilar (ad, soyad, eposta, sifre, yetki) VALUES ('$ad', '$soyad', '$eposta', '$sifre', 0)";
		
		$ekle = mysqli_query($baglanti, $sorgu);
		
		if($ekle){
				echo '<div class="alert alert-success" role="alert">';

				echo "<h4 class='alert-heading'>Üye Kaydınız Başarıyla Gerçekleştirildi.</h4>";

				echo '<hr>';

				echo "Giriş Bilgilerinizle Artık Oturum Açabilirsiniz.<br>Yönlendiriliyorsunuz";

				echo '</div>';

				header("Refresh: 4; ?sayfa=oturumAc"); 
		}
		else{
				echo '<div class="alert alert-danger" role="alert">';

				echo "<h4 class='alert-heading'>Kayıt Yapılamadı, Lütfen Tekrar Deneyiniz</h4>";

				echo '<hr>';

				echo "Yönlendiriliyorsunuz";

				echo '</div>';

				header("Refresh: 3; ?sayfa=uyeOl"); 
		}
		
		?>

	</article>
	</div>

</div> 
