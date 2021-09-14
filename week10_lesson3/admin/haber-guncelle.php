<div class="header">
	<ol class="breadcrumb">
	Haber Ekle
	</ol> 
</div>

<?php

$id = $_GET["id"];
$sorgu = "SELECT * FROM haberler WHERE id='$id'";
$sec = mysqli_query($baglanti, $sorgu);
$satir = mysqli_fetch_array($sec);

?>

<div id="page-inner"> 

<form action="?sayfa=haber-duzenle" method="post" enctype="multipart/form-data">
	
	<input class="form-control form-control-lg mb-3" type="text" name="haber-basligi" placeholder="Haber Başlığı" value="<?php echo $satir["baslik"] ?>" required>
	
	<textarea id="haber-metni" name="haber-metni" required><?php echo $satir["metin"] ?></textarea>
	<br>	
	
	Kategori: <br><select name="kategori" required>
		<option <?php if($satir["kategori"] == "Bilim") echo "selected"; ?>>Bilim</option>
		<option <?php if($satir["kategori"] == "Teknoloji") echo "selected"; ?>>Teknoloji</option>
		<option <?php if($satir["kategori"] == "Spor") echo "selected"; ?>>Spor</option>
		<option <?php if($satir["kategori"] == "Sanat") echo "selected"; ?>>Sanat</option>
		<option <?php if($satir["kategori"] == "Sağlık") echo "selected"; ?>>Sağlık</option>
	</select>

	<br><br>
	
	<img height="50px"  src="../manset/<?php echo $satir["resim"]; ?>">
	
	<br><br>
	
	Manşet Resmi: <input type="file" name="resim">

	<br><br>
	<input type="hidden" name="id" value="<?php echo $satir["id"]; ?>">
	<button type="submit" class="btn btn-primary">Haber Güncelle</button>
	
</form>
	
</div>

<script>CKEDITOR.replace('haber-metni');</script>