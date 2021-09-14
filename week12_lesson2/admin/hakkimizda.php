<div class="header">
	<ol class="breadcrumb">
	Hakkımızda
	</ol> 
</div>

<?php

$sorgu = "SELECT * FROM icerik WHERE sayfa='hakkimizda'";
$sec = mysqli_query($baglanti, $sorgu);
$satir = mysqli_fetch_array($sec);

?>

<div id="page-inner"> 

<form action="?sayfa=h-duzenle" method="post" enctype="multipart/form-data">
	
	<input class="form-control form-control-lg mb-3" type="text" name="haber-basligi" placeholder="Hakkımızda" value="Hakkımızda" readonly>
	
	<textarea id="metin" name="metin" required><?php echo $satir["metin"] ?></textarea>
	
	<button type="submit" class="btn btn-primary">Sayfa Güncelle</button>
	
</form>
	
</div>

<script>CKEDITOR.replace('metin');</script>