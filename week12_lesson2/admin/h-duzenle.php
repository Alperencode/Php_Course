<div class="header">
	<ol class="breadcrumb">
	Hakkımızda Güncelle
	</ol> 
</div>

<div id="page-inner"> 

		<?php

		$metin = $_POST["metin"];

		$sorgu1 = "UPDATE icerik SET metin='$metin' WHERE sayfa='hakkimizda'";

		$gun1 = mysqli_query($baglanti, $sorgu1);
		
		echo '<div class="alert alert-success" role="alert">';
		
		echo '<h4 class="alert-heading">Günceleme İşlemi Başarılı</h4>';
		
		echo '<hr>';
		
		echo "Yönlendiriliyorsunuz";
		
		header("Refresh:2; index.php?sayfa=hakkimizda");
				
		?>

</div> 
