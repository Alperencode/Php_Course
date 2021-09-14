<div class="container">

	<h4 class="p-title"><b>Hesap Oluştur</b></h4>

	<div class="card bg-light mb-40">
	<article class="card-body">

		<?php
		
		$anahtar = $_POST["anahtar"];
		$sifre = $_POST["sifre"];
				
		$sifre = md5($sifre);		
		
		$sorgu = "UPDATE kullanicilar SET sifre='$sifre' WHERE anahtar = '$anahtar'";
		
		$gun = mysqli_query($baglanti, $sorgu);
		
		if($gun){
				$yenisorgu = mysqli_query($baglanti, "UPDATE kullanicilar SET anahtar='' WHERE anahtar = '$anahtar'");
				
				echo '<div class="alert alert-success" role="alert">';

				echo "<h4 class='alert-heading'>Şifre Oluşturma İşlemi Başarıyla Gerçekleştirildi.</h4>";

				echo '<hr>';

				echo "Giriş Bilgilerinizle Artık Oturum Açabilirsiniz.<br>Yönlendiriliyorsunuz";

				echo '</div>';

				header("Refresh: 4; ?sayfa=oturumAc"); 
		}
		else{
				echo '<div class="alert alert-danger" role="alert">';

				echo "<h4 class='alert-heading'>Şifre Oluşturma İşleminde Hata Meydana Geldi, Lütfen Tekrar Deneyiniz</h4>";

				echo '<hr>';

				echo "Yönlendiriliyorsunuz";

				echo '</div>';

				header("Refresh: 3; ?sayfa=sifre-olustur&anahtar=$anahtar"); 
		}
		
		?>

	</article>
	</div>

</div> 
