<div class="header">
	<ol class="breadcrumb">
	Haber Kaydet
	</ol> 
</div>

<div id="page-inner"> 

<?php

$geciciAdres = $_FILES['resim']['tmp_name'];

$uzanti = substr($_FILES["resim"]["name"],-4,4);

$yeniAd = uniqid().$uzanti;

$baslik = addslashes($_POST["haber-basligi"]);

$metin = $_POST["haber-metni"];

$kategori = $_POST["kategori"];

$eID = $satir["id"];
	
$zaman = date("Y-m-d H:i:s");

$sorgu = "INSERT INTO haberler (baslik, metin, kategori, resim, ekleyen, zaman) VALUES ('$baslik', '$metin', '$kategori', '$yeniAd', '$eID', '$zaman')";

$kayit = mysqli_query($baglanti, $sorgu);

$yeniAdres = "../manset/".$yeniAd;

$yukle = move_uploaded_file($geciciAdres, $yeniAdres);

if($kayit and $yukle){
	
		echo '<div class="alert alert-success" role="alert">';
		
		echo '<h4 class="alert-heading">Haber Kaydı Başarılı</h4>';
		
		echo '<hr>';
		
		echo "Yönlendiriliyorsunuz";
		
		header("Refresh:2; ?sayfa=haberler");
	
}
else {
	echo '<div class="alert alert-danger" role="alert">';
	
	echo '<h4 class="alert-heading">Haber Kaydı Yapılamadı!</h4>';
	
	echo '<hr>';
	
	echo '<hr>';
		
	echo "Yönlendiriliyorsunuz";

	header("Refresh:2; ?sayfa=haber-ekle");
	
	echo '</div>';
}
?>
	
</div>