<?php

	if(@$_SESSION["oturum"]==null){
		header("Location: index.php");
		exit();
	}

	$sorgu = "SELECT * FROM kullanicilar WHERE eposta='$kontrolEposta'";
	$bilgibul = mysqli_query($baglanti,$sorgu);
	$bilgi = mysqli_fetch_array($bilgibul);

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
			<input name="ad" class="form-control" required placeholder="Adınız" value="<?php echo $bilgi["ad"] ?>" type="text" id="ad">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-user"></i> </span>
			 </div>
			<input name="soyad" class="form-control" required placeholder="Soyadınız" value="<?php echo $bilgi["soyad"] ?>" type="text" id="soyad">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
			 </div>
			<input name="eposta" class="form-control" placeholder="e-Posta Adresiniz" value="<?php echo $bilgi["eposta"] ?>" type="email" id="eposta">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input name="esifre" type="password" required class="form-control" id="sifre" placeholder="Eski Şifre">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input title="Şifrenizi değiştirmek istemiyorsanız bu alanı boş bırakın" class="form-control" name="ysifre" placeholder="Yeni Şifre" type="password">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block">Güncelle</button>
		</div>
		<p class="text-center">Zaten Hesabınız mı Var? <a href="?sayfa=oturumAc">Oturum Aç</a></p>
	</form>
	</article>
	</div>

</div>
