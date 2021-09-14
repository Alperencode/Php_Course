<?php
	if(@$_SESSION["oturum"]!=null){
		header("Location: index.php");
		exit();
	}
?>
<div class="container">

	<h4 class="p-title"><b>Oturum Aç</b></h4>

	<div class="card bg-light mb-40">
	<article class="card-body mx-auto">
		<form action="index.php?sayfa=giris" method="post">
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
			 </div>
			<input name="eposta" class="form-control" placeholder="e-Posta Adresiniz" type="email" id="eposta" required>
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input name="sifre" type="password" class="form-control" id="sifre" placeholder="Şifreniz" required>
		</div>
			<div>
				<input class="form-check-label" type="checkbox" name="cerez"> Oturum Açık Kalsın 
			</div>	
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block">Oturum Aç</button>
		</div>    
		<p class="text-center">Hesabınız Yok mu? <a href="?sayfa=uyeOl">Hesap Oluştur</a></p>                                                                 
	</form>
	</article>
	</div> 
	
</div> 
