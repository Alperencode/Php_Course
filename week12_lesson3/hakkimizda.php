<div class="container">
	<div class="row">

		<div class="col-md-12 col-lg-12">

			<h4 class="p-title"><b>Hakkımızda</b></h4>
			<div class="row">
				<?php
					$sorgu = "SELECT * FROM icerik WHERE sayfa='hakkimizda'";
					$sec = mysqli_query($baglanti, $sorgu);
					$satir = mysqli_fetch_array($sec);
					echo $satir["metin"];
				?>
				

			</div>

		</div>

	</div>

</div>

				