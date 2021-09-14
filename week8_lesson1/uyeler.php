<div class="container">

	<h4 class="p-title"><b>Üyeler</b></h4>

	<div class="card bg-light mb-40">
	<article class="card-body">

		<?php
		
		$eposta = temizle($_POST["eposta"]);
		$sifre = temizle($_POST["sifre"]);
		$sifre = md5($sifre);
		
		include("ayarlar.php");

		$sorgu = "SELECT * FROM kullanicilar ORDER BY ad";
		
		$sec = mysqli_query($baglanti, $sorgu);
		
		$kayitSayisi= mysqli_num_rows($sec);
		
		echo $kayitSayisi."<br>";
			
		$i = 1;
		
			while($sonuc = mysqli_fetch_array($sonuc)){
			sort(mysqli_fetch_array($sonuc));
			echo " ".$i.".";	
			echo "Hoşgeldiniz ".$sec["ad"];
			echo "<br>";
			echo $sonuc["soyad"];
			echo "<br>";
				$i++;
			}
		
		?>

	</article>
	</div>

</div> 
