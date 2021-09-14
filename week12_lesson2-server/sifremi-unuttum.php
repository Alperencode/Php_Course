<?php
	if(@$_SESSION["oturum"]!=null){
		header("Location: index.php");
		exit();
	}
?>
<div class="container">

	<h4 class="p-title"><b>Şifremi Unuttum</b></h4>

	<div class="card bg-light mb-40">
	<article class="card-body mx-auto">
		<form action="index.php?sayfa=sifre-sifirla" method="post">
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
			 </div>
			<input name="eposta" class="form-control" placeholder="e-Posta Adresiniz" type="email" id="eposta" required>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block">Şifremi Sıfırla</button>
		</div>                                                                   
	</form>
	</article>
	</div> 
	
</div> 
