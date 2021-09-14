<div class="header">
	<ol class="breadcrumb">
	Üye Güncelle
	</ol> 
</div>

<?php

	$id = $_GET["id"];

	$sorgu = "SELECT * FROM kullanicilar WHERE id='$id'";

	$bilgiBul = mysqli_query($baglanti, $sorgu);

	$bilgi = mysqli_fetch_array($bilgiBul);

	
?>

<div id="page-inner"> 

	<div class="card bg-light mb-40" style="max-width: 500px">
	<article class="card-body mx-auto">
		<form action="?sayfa=uye-duzenle" method="post">
			<input name="ad" type="text" required="required" class="form-control" id="ad" placeholder="Adınız" value="<?php echo $bilgi['ad']; ?>">

			<input name="soyad" type="text" required="required" class="form-control" id="soyad" placeholder="Soyadınız" value="<?php echo $bilgi['soyad'] ?>">


			<input name="eposta" type="email" required="required" class="form-control" id="eposta" placeholder="e-Posta Adresiniz" value="<?php echo $bilgi['eposta'] ?>">

			<input title="Şifreyi değiştirmek istemiyorsanız bu alanı boş bırakın" name="ysifre" class="form-control" placeholder="Yeni Şifre" type="password">

			<?php
	
			if($bilgi["yetki"]==1) echo '<input type="checkbox" name="yonetici" checked disabled>Yönetici';		
				else echo '<input type="checkbox" name="yonetici">Yönetici';	
			?>
			
			<input type="hidden" name="id" value="<?php echo $bilgi['id'] ?>">

			<button type="submit" class="btn btn-primary btn-block">Güncelle</button>
		</div>    
                                                               
	</form>
	</article>
	</div>

</div> 
