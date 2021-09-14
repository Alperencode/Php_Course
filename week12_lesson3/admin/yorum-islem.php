<div class="header">
	<ol class="breadcrumb">
	Yorum İşlem
	</ol> 
</div>

<div id="page-inner"> 
	
	<form action="?sayfa=yorum-duzenle" method="post">

	<?php

	$id = $_GET["id"];
		
	//$sorgu = "SELECT yorumlar.*, haberler.id AS hid, haberler.baslik FROM yorumlar INNER JOIN haberler ON yorumlar.hid = haberler.id WHERE yorumlar.id='$id'";
		
	$sorgu = "SELECT yorumlar.*, kullanicilar.id AS kid, kullanicilar.ad, kullanicilar.soyad FROM yorumlar INNER JOIN kullanicilar ON yorumlar.kid = kullanicilar.id WHERE yorumlar.id='$id'";

	$sec = mysqli_query($baglanti, $sorgu);
	$satir = mysqli_fetch_array($sec);
		
	$hid = $satir["hid"];
	$onay = $satir["onay"];

	$baslikBul = mysqli_query($baglanti, "SELECT * FROM haberler WHERE id='$hid'");
	$baslikBul = mysqli_fetch_array($baslikBul);

	echo '<input class="form-control form-control-lg mb-3" type="text" value="'.$baslikBul["baslik"].'" readonly>';
	echo '<br>';
	echo '<input class="form-control form-control-lg mb-3" type="text" value="'.$satir["ad"].' '.$satir["soyad"].'" readonly>';
	echo '<br>';
	echo '<textarea name="yorum" class="form-control form-control-lg mb-3">'.$satir["yorum"].'</textarea>';
	echo '<input type="hidden" name="id" value="'.$id.'" />';
	
		echo "<br><br>";
		
		if($onay==0){
			echo '<button class="btn btn-success" name="onay" type="submit">Onayla</button>';
		}
		else if($onay==1){
			echo '<button class="btn btn-primary" name="onay" type="submit">Güncelle</button>';
		}
		
		echo "<br><br>";
		
	echo '<button class="btn btn-danger" name="sil" type="submit">Sil</button>';
	
?>
	</form>
	
</div>