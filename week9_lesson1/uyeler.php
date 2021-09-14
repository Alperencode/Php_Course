<div class="container">

	<h4 class="p-title"><b>Üyeler</b></h4>

	<div class="card bg-light mb-40">
	<article class="card-body">

		<?php
			
		include("ayarlar.php");

		$sorgu = "SELECT * FROM kullanicilar";
		
		$sec = mysqli_query($baglanti, $sorgu);
		
		$kayitSayisi = mysqli_num_rows($sec);
		
		echo $kayitSayisi;
		echo "<br>";
		
			$i=1;
			while($sonuc = mysqli_fetch_array($sec)){
				echo $i;
				echo ". ";
				echo $sonuc["ad"];
				echo " ";
				echo $sonuc["soyad"];
				echo "<br>";
				$i++;
			}
		
		
		?>

	</article>
	</div>

</div> 

