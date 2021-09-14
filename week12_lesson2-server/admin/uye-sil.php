<div class="header">
	<ol class="breadcrumb">
	Üye Sil
	</ol> 
</div>

<div id="page-inner"> 

<?php

$id = $_GET["id"];
$onay = @$_GET["onay"];

if($onay!=1){

	$sorgu = "SELECT * FROM kullanicilar WHERE id='$id'";
	$sec = mysqli_query($baglanti, $sorgu);
	$satir = mysqli_fetch_array($sec);

	echo '<div class="alert alert-danger" role="alert">';
	
	echo '<h4 class="alert-heading">'.$satir["ad"]." ".$satir["soyad"]." adlı kullanıcıyı silmeyi onaylıyor musunuz?</h4>";
	
	echo '<hr>';
	
	echo '<a class="btn btn-success" href="index.php?sayfa=uye-sil&id='.$id.'&onay=1">Onayla</a>';
	
	echo '<br><br>';
	
	echo '<a class="btn btn-info" href="index.php?sayfa=uyeler">Geri Dön</a>';
	
	echo '</div>';

}
else if($onay==1){
	$sorgu = "DELETE FROM kullanicilar WHERE id='$id'";
	
	$sil = mysqli_query($baglanti, $sorgu);
	
	if($sil){
		
		echo '<div class="alert alert-success" role="alert">';
		
		echo '<h4 class="alert-heading">Silme İşlemi Başarılı</h4>';
		
		echo '<hr>';
		
		echo "Yönlendiriliyorsunuz";
		
		header("Refresh:2; index.php?sayfa=uyeler");
		
		echo '</div>';
	}
	else{
		echo "Silme İşlemi Başarısız";
	}
	
}
	
?>