<div class="container">

	<h4 class="p-title"><b>Şifre Sıfırla</b></h4>

	<div class="card bg-light mb-40">
	<article class="card-body">

		<?php

		$eposta = $_POST["eposta"];

		function anahtar($length = 32) {
			return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
		}

		$sorgu = "SELECT * FROM kullanicilar WHERE eposta='$eposta'";
		$sec = mysqli_query($baglanti, $sorgu);
		$kayitSayisi = mysqli_num_rows($sec);


		if($kayitSayisi==1){

			$anahtar = anahtar(32);

			$gun = mysqli_query($baglanti,"UPDATE kullanicilar SET anahtar='$anahtar' WHERE eposta='$eposta'");

			if($gun){
				echo '<div class="alert alert-success" role="alert">';

				echo "<h4 class='alert-heading'>Şifre Sıfırlama Linki e-Postanıza gönderildi.</h4>";

				echo '<hr>';

				// Mail gönderimi başlangıç

					include 'class.phpmailer.php';

					$baslik = "Beltek Haber - Şifre Sıfırlama Talebi";

					$link = "kanekii.epizy.com?sayfa=sifre-olustur&anahtar=$anahtar";

					$mesaj = "Merhaba, şifre oluşturma linkiniz aşağıdadır.<br><br>$link<br><br>Eğer şifre sıfırlama talebini siz yapmamışsanız bu e-postayı göz ardı edebilirsiniz.";

					$mail = new PHPMailer();
					$mail->SMTPSecure = 'tls';
					$mail->Username = "beltekhaber@hotmail.com";
					$mail->Password = "Beltek.123";	
					$mail->AddAddress($eposta);	// Alıcı Adresi
					$mail->FromName = "Beltek Haber";
					$mail->Subject = $baslik;
					$mail->MsgHTML($mesaj);
					$mail->Host = "smtp.live.com";
					$mail->Port = 587;
					$mail->IsSMTP();
					$mail->SMTPAuth = true;
					$mail->From = $mail->Username;
					$mail->CharSet = 'UTF-8';
					$mail->Send();

				// Mail gönderimi bitiş

				echo "Yönlendiriliyorsunuz";

				echo '</div>';

				header("Refresh: 2; index.php");
			}
			else{
				echo '<div class="alert alert-danger" role="alert">';

				echo "<h4 class='alert-heading'>Bir Hata Oluştu, Lütfen Tekrar Deneyiniz</h4>";

				echo '<hr>';

				echo "Yönlendiriliyorsunuz";

				echo '</div>';

				header("Refresh: 2; ?sayfa=sifremi-unuttum");
			}

		}
		else{
			echo '<div class="alert alert-danger" role="alert">';

			echo "<h4 class='alert-heading'>Böyle Bir Kayıt Bulunamadı, Lütfen Tekrar Deneyiniz</h4>";

			echo '<hr>';

			echo "Yönlendiriliyorsunuz";

			echo '</div>';

			header("Refresh: 2; ?sayfa=sifremi-unuttum");
		}


		?>

	</article>
	</div>

</div>
