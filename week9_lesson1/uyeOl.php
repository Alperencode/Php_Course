<?php
	if(@$_SESSION["oturum"]!=null){
		header("Location: index.php");
		exit();
	}
?>
<div class="container">

	<h4 class="p-title"><b>Hesap Oluştur</b></h4>

	<div class="card bg-light mb-40">
	<article class="card-body mx-auto">
		<form action="?sayfa=uyeKaydet" method="post">
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-user"></i> </span>
			 </div>
			<input name="ad" class="form-control" placeholder="Adınız" type="text" id="ad">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-user"></i> </span>
			 </div>
			<input name="soyad" class="form-control" placeholder="Soyadınız" type="text" id="soyad">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
			 </div>
			<input name="eposta" class="form-control" placeholder="e-Posta Adresiniz" type="email" id="eposta">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input name="sifre" type="password" class="form-control" id="sifre" placeholder="Şifreniz">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input class="form-control" placeholder="Şifreniz (Tekrar)" type="password">
		</div>                                
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block">Hesap Oluştur</button>
		</div>    
		<p class="text-center">Zaten Hesabınız mı Var? <a href="?sayfa=oturumAc">Oturum Aç</a></p>                                                                 
	</form>
	</article>
	</div>

</div> 
