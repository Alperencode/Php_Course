	<section>
		<div class="container">
			<div class="row">

				<?php

				$hid = @$_POST["hid"];

				$sorgu = "SELECT * FROM haberler WHERE id='$hid'";
				$sec = mysqli_query($baglanti, $sorgu);
				$satir = mysqli_fetch_array($sec);

				$kontrol = "SELECT * FROM yorumlar WHERE hid='$hid' ORDER BY id DESC LIMIT 1";
				$kontrol = mysqli_query($baglanti,$kontrol);
				$kontrol = mysqli_fetch_array($kontrol);

					if($kontrol["kid"] == $uye['id']){
						echo "Son yorum sizindi";
						exit();
					}


				?>

				<div class="col-md-12 col-lg-8">
					<?php

					if(@$_POST["yorum"]!=null){


						$yorum = $_POST["yorum"];
						$uid = $uye["id"];
						$zaman = date("Y-m-d H:i:s");

						if($uye["yetki"]==0){
							$sorgu = "INSERT INTO yorumlar (kid, hid, yorum, zaman, onay) VALUES ('$uid', '$hid', '$yorum', '$zaman', 0)";
						}
						else if($uye["yetki"]==1){
							$sorgu = "INSERT INTO yorumlar (kid, hid, yorum, zaman, onay) VALUES ('$uid', '$hid', '$yorum', '$zaman', 1)";
						}


						$ekle = mysqli_query($baglanti, $sorgu);

						if($ekle){

							echo '<div class="alert alert-success" role="alert">';

							if($uye["yetki"]==0){
								echo '<h4 class="alert-heading">Yorumunuz alınmıştır. Yönetici onayından sonra yayınlanacaktır.</h4>';
							}
							else if($uye["yetki"]==1){
								echo '<h4 class="alert-heading">Yorumunuz yayınlanmıştır.</h4>';
								mysqli_query($baglanti, "UPDATE haberler SET yorumSayisi = yorumSayisi + 1 WHERE id = '$hid'");
							}

							echo '<hr>';

							echo "Yönlendiriliyorsunuz";

							header("Refresh:2; index.php?sayfa=haber&hid=$hid#yorum");

							echo '</div>';

						}
						else{

							echo '<div class="alert alert-danger" role="alert">';

							echo '<h4 class="alert-heading">Yorumunuz sistemsel bir arızadan dolayı kaydedilememiştir.</h4>';

							echo '<hr>';

							echo "Yönlendiriliyorsunuz";

							header("Refresh:2; index.php?sayfa=haber&hid=$hid#yorum");

							echo '</div>';

						}
					}

					?>
				</div><!-- col-md-9 -->

				<div class="d-none d-md-block d-lg-none col-md-3"></div>
				<div class="col-md-6 col-lg-4">
					<div class="pl-20 pl-md-0">

						<div class="mtb-0">
							<h4 class="p-title"><b>İlginizi Çekebilecek Diğer Haberler</b></h4>

							<?php

							$sorgu = "SELECT * FROM haberler WHERE id = '$hid'";
							$sec = mysqli_query($baglanti, $sorgu);
							$satir = mysqli_fetch_array($sec);
							$ktgr = $satir["kategori"];

							$sorgu = "SELECT * FROM haberler WHERE kategori='$ktgr' AND NOT id='$hid' ORDER BY id DESC LIMIT 5";
							$sec = mysqli_query($baglanti, $sorgu);
							while($satir = mysqli_fetch_array($sec)){
								echo '<a class="oflow-hidden pos-relative mb-20 dplay-block" href="?sayfa=haber&hid='.$satir["id"].'">
										<div class="wh-100x abs-tlr"><img src="manset/'.$satir["resim"].'" alt=""></div>
										<div class="ml-120 min-h-100x">
											<h5><b>'.$satir["baslik"].'</b></h5>
											<h6 class="color-lite-black pt-10">'.date('d M Y', strtotime($satir["zaman"])).'</h6>
										</div>
									</a>';
							}

							?>

						</div><!-- mtb-50 -->

					</div><!--  pl-20 -->
				</div><!-- col-md-3 -->

			</div><!-- row -->

		</div><!-- container -->
	</section>
