	<section>
		<div class="container">
			<div class="row">
				
				<?php
				
				$hid = @$_GET["hid"];
				
				$sorgu = "SELECT * FROM haberler WHERE id='$hid'";
				$sec = mysqli_query($baglanti, $sorgu);
				$satir = mysqli_fetch_array($sec);
				
				?>
			
				<div class="col-md-12 col-lg-8">
					<img src="manset/<?php echo $satir["resim"] ?>" alt="">
					<h3 class="mt-30"><b><?php echo $satir["baslik"] ?></b></h3>
					<ul class="list-li-mr-20 mtb-15">
						<li><?php echo tarihYaz($satir["zaman"]) ?></li>
						<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php echo $satir["yorumSayisi"] ?></li>
					</ul>
					
					<?php echo $satir["metin"] ?>
				
					<div style="margin-top: 20px; margin-bottom: 20px;" class="brdr-ash-1 opacty-5"></div>
					
					<?php echo ($satir["okunmaSayisi"]+1)." kez görüntülendi."; ?>
					
					<h4 class="p-title mt-20"><b><a name="yorum">Yorumlar</a></b></h4>
					
					<?php
					
					
						$sorgu = "SELECT yorumlar.*, kullanicilar.id AS kid, kullanicilar.ad, kullanicilar.soyad FROM yorumlar INNER JOIN kullanicilar ON yorumlar.kid = kullanicilar.id WHERE hid='$hid' AND onay=1  ORDER BY id DESC";
						$sec = mysqli_query($baglanti, $sorgu);
						$ys=mysqli_num_rows($sec);
						while($satir = mysqli_fetch_array($sec)){
							echo '<div class="sided-70 mb-40">
										<h5><b>'.$satir["ad"].' '.$satir["soyad"].'</b> <span class="font-8 color-ash">'.tarihYaz($satir["zaman"]).'</span></h5>
										<p class="mtb-15">'.$satir["yorum"].'</p>
								</div>';
						}
					
						if($ys==0) echo "Henüz yorum yapılmadı. İlk yorum yapan siz olun.";
					
					?>
					
					
					
					
					<h4 class="p-title mt-40"><b>Siz de Yorum Yazın</b></h4>
					
					<?php
					if(@$_SESSION["oturum"]==null){
						echo 'Yorum yapabilmek için oturum açmanız gerekmektedir.';
					}
					else{
						echo '<form action="?sayfa=yorum" method="post" class="form-block form-plr-15 form-h-45 form-mb-20 form-brdr-lite-white mb-md-50">
						<textarea name="yorum" style="resize: none" class="ptb-10" placeholder="Yorumunuz" required></textarea>
						<input type="hidden" name="hid" value="'.$hid.'" />
						<button class="btn-fill-primary plr-30" rows="4" cols="50" type="submit"><b>Yorum Yap</b></button>
					</form>';
					}
					
					?>
				</div><!-- col-md-9 -->
				
				<div class="d-none d-md-block d-lg-none col-md-3"></div>
				<div class="col-md-6 col-lg-4">
					<div class="pl-20 pl-md-0">
						
						<div class="mtb-0">
							<h4 class="p-title"><b>İlginizi Çekebilecek Diğer Haberler</b></h4>
							
							<?php 
							
							$hid = @$_GET["hid"];
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
											<h6 class="color-lite-black pt-10">'.tarihYaz($satir["zaman"]).'</h6>
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

<?php

	$sorgu = "UPDATE haberler SET okunmaSayisi=okunmaSayisi+1 WHERE id='$hid'";
	mysqli_query($baglanti, $sorgu);

?>