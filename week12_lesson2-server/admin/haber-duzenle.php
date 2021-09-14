<div class="header">
	<ol class="breadcrumb">
	Haber Güncelle
	</ol> 
</div>

<div id="page-inner"> 

		<?php
		
		$id = $_POST["id"];
		$baslik = addslashes($_POST["haber-basligi"]);
		$metin = $_POST["haber-metni"];
		$kategori = $_POST["kategori"];
		
		
		$sorgu1 = "UPDATE haberler SET baslik='$baslik' WHERE id='$id'";

		$gun1 = mysqli_query($baglanti, $sorgu1);

		$sorgu2 = "UPDATE haberler SET metin='$metin' WHERE id='$id'";

		$gun2=mysqli_query($baglanti, $sorgu2);

		$sorgu3 = "UPDATE haberler SET kategori='$kategori' WHERE id='$id'";

		$gun3=mysqli_query($baglanti, $sorgu3);
		
			$resim = $_FILES["resim"]["name"];
			
			if($resim!=null){
				$geciciAdres = $_FILES['resim']['tmp_name'];

				$uzanti = substr($resim,-4,4);

				$yeniAd = uniqid().$uzanti;
				
				$yeniAdres = "../manset/".$yeniAd;

				$yukle = move_uploaded_file($geciciAdres, $yeniAdres);

				$sorgu4 = "UPDATE haberler SET resim='$yeniAd' WHERE id='$id'";

				$gun4=mysqli_query($baglanti, $sorgu4);
			}
		
		
		echo '<div class="alert alert-success" role="alert">';
		
		echo '<h4 class="alert-heading">Günceleme İşlemi Başarılı</h4>';
		
		echo '<hr>';
		
		echo "Yönlendiriliyorsunuz";
		
		header("Refresh:2; index.php?sayfa=haber-guncelle&id=$id");
				
		?>

</div> 
