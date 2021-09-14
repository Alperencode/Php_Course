<div class="header">
	<ol class="breadcrumb">
	Yorum Düzenle
	</ol> 
</div>

<div id="page-inner"> 

<?php

$id = $_POST["id"];
$yorum = $_POST["yorum"];
	
	$hidBul = mysqli_query($baglanti, "SELECT * FROM yorumlar WHERE id = '$id'");
	$hidBul = mysqli_fetch_array($hidBul);
	$hid = $hidBul["hid"];
	$onayKontrol = $hidBul["onay"];

if(isset($_POST["onay"])){
	$durum = 0;
	if($onayKontrol!=1){
		$sorgu = "UPDATE yorumlar SET onay = 1 WHERE id='$id'";
		$gun = mysqli_query($baglanti, $sorgu);
		
		$sorgu3 = "UPDATE haberler SET yorumSayisi = yorumSayisi + 1 WHERE id = '$hid'";
		$gun3 = mysqli_query($baglanti, $sorgu3);
		
		if($gun && $gun3){
			$durum = 1;
		}
		else $durum = 2;
	}

	$sorgu2 = "UPDATE yorumlar SET yorum = '$yorum' WHERE id='$id'";
	$gun2 = mysqli_query($baglanti, $sorgu2);
	
	
	if(($durum == 0 or $durum==1) and $gun2){
		
		echo '<div class="alert alert-success" role="alert">';
	
		echo '<h4 class="alert-heading">Yorum Yayınlandı.</h4>';

		echo '<hr>';

		echo "Yönlendiriliyorsunuz";
		
		header("Refresh:2; index.php?sayfa=yorum-islem&id=$id");

		echo '</div>';
		
	}

}
else if(isset($_POST["sil"])){

	$sorgu = "DELETE FROM yorumlar WHERE id='$id'";
	$gun = mysqli_query($baglanti, $sorgu);
	
	if($gun){
		
		echo '<div class="alert alert-danger" role="alert">';
		
		if($onayKontrol==1){
			$sorgu = "UPDATE haberler SET yorumSayisi = yorumSayisi - 1 WHERE id='$hid'";
			mysqli_query($baglanti, $sorgu);
			
			echo '<h4 class="alert-heading">Yorum Yayından Kaldırıldı.</h4>';
		}
		else echo '<h4 class="alert-heading">Yorum Yayınlanmadan Silindi.</h4>';

		echo '<hr>';

		echo "Yönlendiriliyorsunuz";
		
		header("Refresh:2; index.php?sayfa=ob-yorumlar");

		echo '</div>';
		
	}
	
}
	
?>