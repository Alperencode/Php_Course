<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<form action="?sayfa=haber-kaydet" method="post" enctype="multipart/form-data">

	<input type="text" name="baslik" placeholder="Haber Başlığı">

	<textarea id="haber-metni" name="metin"></textarea>

		<select name="kategori">

				<option>Bilim</option>
				<option>Teknoloji</option>
				<option>Spor</option>
				<option>Sanat</option>
				<option>Sağlık</option>

		</select>

	<input type="file" name="resim"  />

	<button type="submit" value="Haber Ekle">Haber Ekle</button>

</form>

            <script>
                CKEDITOR.replace( 'haber-metni' );
            </script>
