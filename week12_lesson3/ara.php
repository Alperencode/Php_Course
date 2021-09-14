<div class="container">
	<div class="row">

		<div class="col-md-12 col-lg-12">

			<h4 class="p-title"><b>Arama Sonuçları</b></h4>
			<div class="row">
				<?php
					// ALTER TABLE haberler ADD FULLTEXT(baslik, metin)
					$ara = @$_GET["ara"];
					// $sorgu = "SELECT * FROM haberler WHERE MATCH (baslik, metin) AGAINST ('*$ara*'IN BOOLEAN MODE)";
					// $sorgu = "SELECT * FROM haberler WHERE baslik LIKE '%$ara%' or metin LIKE '%ara%'";
					$sorgu = "SELECT * FROM haberler WHERE zaman LIKE '%-02-%'";
					$sec = mysqli_query($baglanti, $sorgu);
					while($satir = mysqli_fetch_array($sec)){
						echo '<a href="?sayfa=haber&hid='.$satir["id"].'"><div class="col-sm-4">
					   			<img style="height:200px" src="manset/'.$satir["resim"].'" alt="">
							  	<h4 class="pt-20"><a href="?sayfa=haber&hid='.$satir["id"].'"><b>'.$satir["baslik"].'</b></a></h4>
							  			<ul class="list-li-mr-20 pt-10 mb-30">
							  					<li class="color-lite-black">'.tarihYaz($satir["zaman"]).'</li>
						  						<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>'.$satir["yorumSayisi"].'</li>
						  				</ul>
						  		</div></a>';
					}
				?>


			</div>

		</div>

	</div>

</div>
