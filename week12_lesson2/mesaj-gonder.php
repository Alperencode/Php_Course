<div class="container" style="margin-bottom: 40px;">
	<h4 class="p-title"><b>İletişim</b></h4>
	<div class="row">

<?php

	$baslik = $_POST["adsoyad"]." size bir mesaj gönderdi.";

	$eposta = $_POST["eposta"];

	$mesaj = $_POST["mesaj"]."<br><br> Gönderici e-Postası: ".$eposta;

include 'class.phpmailer.php';

	$mail = new PHPMailer();
    $mail->SMTPSecure = 'tls';
    $mail->Username = "beltekhaber@hotmail.com";
    $mail->Password = "";	// e-Posta Şifresi
    $mail->AddAddress("");	// Alıcı Adresi
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
	
	echo '<div class="alert alert-success" role="alert">';

	echo '<h4 class="alert-heading">Mesajınız Gönderildi, İlginiz için Teşekkürler.</h4>';

	echo '<hr>';

	echo "Yönlendiriliyorsunuz";

	echo '</div>';

	header("Refresh:2; ?sayfa=iletisim");

?>
		
	</div>
</div>