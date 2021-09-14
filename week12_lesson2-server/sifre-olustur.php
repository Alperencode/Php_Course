<?php
	if(@$_SESSION["oturum"]!=null){
		header("Location: index.php");
		exit();
	}
?>
<div class="container">

	<h4 class="p-title"><b>Şifre Oluştur</b></h4>

	<?php

	$anahtar = $_GET["anahtar"];

	$sorgu = "SELECT * FROM kullanicilar WHERE anahtar='$anahtar'";
	$sec = mysqli_query($baglanti, $sorgu);
	$kayitSayisi = mysqli_num_rows($sec);

	if($kayitSayisi!=1){

		echo '<div class="alert alert-danger" role="alert">';

		echo "<h4 class='alert-heading'>Bir Hata Oluştu</h4>";

		echo '<hr>';

		echo "Bu link artık geçerli değil.";

		echo '</div>';
	}

	?>

	<div class="card bg-light mb-40" style="<?php if($kayitSayisi!=1) echo "display:none" ?>">
	<article class="card-body mx-auto">
		<form action="?sayfa=sifre-kaydet" method="post">
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input name="sifre" type="password" class="form-control" id="sifre" placeholder="Şifreniz" required>
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input class="form-control" placeholder="Şifreniz (Tekrar)" type="password" id="sifret" required>
		</div>
			<input type="hidden" name="anahtar" value="<?php echo $anahtar ?>">
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block" onClick="sifreKontrol()">Şifre Oluştur</button>
		</div>
	</form>
	</article>
	</div>

</div>

<script type="text/javascript">

	function sifreKontrol(){
		var sifre1 = document.getElementById("sifre").value;
		var sifre2 = document.getElementById("sifret").value;
		if(sifre1 != sifre2){
			alert("Şifreleriniz uyuşmuyor!");
			document.getElementById("sifret").value = "";
		}

	}

</script>
