<div class="container">
	<div class="row">

		<div class="col-md-12 col-lg-12">

			<h4 class="p-title"><b>HABERLER</b></h4>
			<div class="row">
				<?php
					$sorgu = "SELECT * FROM haberler WHERE kategori='$kategori'";
					$sec = mysqli_query($baglanti, $sorgu);
					while($satir = mysqli_fetch_array($sec)){
						echo '<div class="col-sm-4">
								<img style="height:200px" src="manset/'.$satir["resim"].'" alt="">
								<h4 class="pt-20"><a href="#"><b>'.$satir["baslik"].'</b></a></h4>
								<ul class="list-li-mr-20 pt-10 mb-30">
									<li class="color-lite-black">'.date('d M Y', strtotime($satir["zaman"])).'</li>
									<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>'.$satir["yorumSayisi"].'</li>
								</ul>
							</div>';
					}
				?>
				

			</div>

		</div>

	</div>

</div>

				