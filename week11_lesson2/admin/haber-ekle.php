<div class="header">
	<ol class="breadcrumb">
	Haber Ekle
	</ol> 
</div>

<div id="page-inner"> 

<form action="?sayfa=haber-kaydet" method="post" enctype="multipart/form-data">
	
	<input class="form-control form-control-lg mb-3" type="text" name="haber-basligi" placeholder="Haber Başlığı" required>
	
	<textarea id="haber-metni" name="haber-metni" required></textarea>

	<br>	
	
	Kategori: <br><select name="kategori" required>
		<option>Bilim</option>
		<option>Teknoloji</option>
		<option>Spor</option>
		<option>Sanat</option>
		<option>Sağlık</option>
	</select>

	<br><br>
	
	Manşet Resmi: <input type="file" name="resim" required>

	<br><br>
	
	<button type="submit" class="btn btn-primary">Haber Ekle</button>
	
</form>
	
</div>

<script>CKEDITOR.replace('haber-metni');</script>