<div class="container">

	<h4 class="p-title"><b>Haber Güncelle</b></h4>

	<div class="card bg-light mb-40">
	<article class="card-body">

		<?php

		$id = $_POST["id"];
		$baslik = $_POST["haber-basligi"];
		$metin = $_POST["haber-metni"];
		$kategori = $_POST["kategori"];

			$sorgu1 = "UPDATE haberler SET baslik='$baslik' WHERE id='$id'";

			$gun1 = mysqli_query($baglanti, $sorgu1);

			$sorgu2 = "UPDATE haberler SET metin='$metin' WHERE id='$id'";

			$gun2=mysqli_query($baglanti, $sorgu2);

			$sorgu3 = "UPDATE haberler SET kategori='$kategori' WHERE id='$id'";

			$gun3=mysqli_query($baglanti, $sorgu3);


		$resim = $_FILES['resim']['tmp_name'];
		
		if($resim != null){
			
			$geciciAdres = $_FILES['resim']['tmp_name'];
			
			$uzanti = substr($resim,-4,4);
			
			$yeniad = uniqid().$uzanti;
			
			$yeniAdres = "../manset/".$yeniad;
			
			$yukle = move_uploaded_file($geciciAdres, $yeniAdres);
			
			$sorgu4 = "UPDATE haberler SET resim='$yeniad' WHERE id='$id'";

			$gun4=mysqli_query($baglanti, $sorgu4);
		}
		
		echo "Günceleme tamamlandı, yönlendiriliyorsunuz";

		header("Refresh:2; index.php?sayfa=haber-guncelle&id=$id");

		?>

	</article>
	</div>

</div>
