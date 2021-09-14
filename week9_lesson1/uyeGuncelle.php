<div class="container">

	<h4 class="p-title"><b>Bilgilerimi Güncelle</b></h4>

	<div class="card bg-light mb-40">
	<article class="card-body">

		<?php

		$ad = temizle($_POST["ad"]);
		$soyad = temizle($_POST["soyad"]);
		$eposta = temizle($_POST["eposta"]);
		$esifre = temizle($_POST["esifre"]);
	  $ysifre = temizle($_POST["ysifre"]);

		$sorgu = "SELECT * FROM kullanicilar WHERE eposta = '$kontrolEposta'";

		$kontrol = mysqli_query($baglanti,$sorgu);

		$kontrol = mysqli_fetch_array($kontrol);

		if($kontrol["sifre"] == md5($esifre)){
			$sorgu1 = "UPDATE kullanicilar SET ad='$ad' WHERE eposta='$kontrolEposta'";
			$gun1 = mysqli_query($baglanti,$sorgu1);

			$sorgu2 = "UPDATE kullanicilar SET soyad='$soyad' WHERE eposta='$kontrolEposta'";
			$gun2 = mysqli_query($baglanti,$sorgu2);

			$sorgu3 = "UPDATE kullanicilar SET eposta='$eposta' WHERE eposta = '$kontrolEposta'";
			$gun3 = mysqli_query($baglanti,$sorgu3);

			$kontrolEposta =  $eposta;
			$_SESSION["oturum"] = $eposta;

			if ($ysifre != null){
				$ysifre = md5($ysifre);
				$sorgu4 = "UPDATE kullanicilar SET sifre='$ysifre' WHERE eposta= '$kontrolEposta'";
				$gun4 = mysqli_query($baglanti,$sorgu4);
			}

			echo $ad."<br>";
			echo $soyad."<br>";
			echo $eposta."<br>";

		}
		else{
			echo "Şifreler uyuşmuyor"."<br>";
		}




		?>

	</article>
	</div>

</div>
