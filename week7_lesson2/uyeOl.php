<div class="container">

	<h4 class="p-title"><b>Hesap Oluştur</b></h4>

	<div class="card bg-light mb-40">
	<article class="card-body mx-auto">
		<form action="?sayfa=uyeKaydet" method="POST">
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-user"></i> </span>
			 </div>
			<input name="ad" class="form-control" placeholder="Adınız" type="text">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-user"></i> </span>
			 </div>
			<input name="soyad" class="form-control" placeholder="Soyadınız" type="text">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
			 </div>
			<input name="eposta" class="form-control" placeholder="e-Posta Adresiniz" type="email">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input name="sifre" class="form-control" placeholder="Şifreniz" type="password">
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
