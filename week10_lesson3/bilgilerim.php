<?php
	if(@$_SESSION["oturum"]==null){
		header("Location: index.php");
		exit();
	}

	$sorgu = "SELECT * FROM kullanicilar WHERE eposta='$kontrolEposta'";

	$bilgiBul = mysqli_query($baglanti, $sorgu);

	$bilgi = mysqli_fetch_array($bilgiBul);

	
?>
<div class="container">

	<h4 class="p-title"><b>Bilgilerimi Güncelle</b></h4>

	<div class="card bg-light mb-40">
	<article class="card-body mx-auto">
		<form action="?sayfa=uyeGuncelle" method="post">
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-user"></i> </span>
			 </div>
			<input name="ad" type="text" required="required" class="form-control" id="ad" placeholder="Adınız" value="<?php echo $bilgi['ad']; ?>">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-user"></i> </span>
			 </div>
			<input name="soyad" type="text" required="required" class="form-control" id="soyad" placeholder="Soyadınız" value="<?php echo $bilgi['soyad'] ?>">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
			 </div>
			<input name="eposta" type="email" required="required" class="form-control" id="eposta" placeholder="e-Posta Adresiniz" value="<?php echo $bilgi['eposta'] ?>">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input name="esifre" type="password" required="required" class="form-control" id="sifre" placeholder="Eski Şifreniz">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input title="Şifrenizi değiştirmek istemiyorsanız bu alanı boş bırakın" name="ysifre" class="form-control" placeholder="Yeni Şifreniz" type="password">
		</div>                                
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block">Güncelle</button>
		</div>    
                                                               
	</form>
	</article>
	</div>

</div> 
