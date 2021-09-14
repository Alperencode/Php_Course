<div class="container">

	<h4 class="p-title"><b>Bilgilerimi Güncelle</b></h4>

	<div class="card bg-light mb-40">
	<article class="card-body">

		<?php

		$ad = temizle($_POST["ad"]);
		$soyad = temizle($_POST["soyad"]);
		$eposta = temizle($_POST["eposta"]);
		$ysifre = temizle($_POST["ysifre"]);
		$id = $_POST["id"];
		$yonetici = @$_POST["yonetici"];

		if ($yonetici == null) {
			$sorgu0 = "UPDATE kullanicilar SET yetki=0 WHERE id='$id'";
			$gun0 = mysqli_query($baglanti,$sorgu0);
		}

			$sorgu1 = "UPDATE kullanicilar SET ad='$ad' WHERE id='$id'";
			$gun1 = mysqli_query($baglanti, $sorgu1);

			$sorgu2 = "UPDATE kullanicilar SET soyad='$soyad' WHERE id='$id'";
			$gun2=mysqli_query($baglanti, $sorgu2);

			$sorgu3 = "UPDATE kullanicilar SET eposta='$eposta' WHERE id='$id'";
			$gun3=mysqli_query($baglanti, $sorgu3);

			if($ysifre!=null){
				$ysifre = md5($ysifre);

				$sorgu4 = "UPDATE kullanicilar SET sifre='$ysifre' WHERE id='$id'";

				$gun4=mysqli_query($baglanti, $sorgu4);
			}

			echo "Güncelleme tamamlandı";
			echo "<br>";
			echo "Yönlendiriliyorsunuz";

			header("Refresh:2; index.php?sayfa=uye-guncelle&id=$id")

		?>

	</article>
	</div>

</div>
