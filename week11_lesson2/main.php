<style type="text/css">
@media (max-width: 700px) {
	.carousel-image{
		max-height:300px;
		object-fit: cover;
	}
}
@media (min-width: 700px) {
	.carousel-image{
		height:394px;
		object-fit: cover;
	}
}
</style>

<div class="container">
		<div class="h-600x h-sm-auto">
			<div class="h-2-3 h-sm-auto oflow-hidden">
		
				<div class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
<?php

$kategori = array("Bilim", "Teknoloji", "Spor", "Sanat", "Sağlık"); 

for($i=0; $i<count($kategori); $i++){
$sorgu = "SELECT MAX(id) AS id FROM haberler WHERE kategori = '$kategori[$i]'";
$sec = mysqli_query($baglanti, $sorgu);
$satir = mysqli_fetch_array($sec);
$idler[$i] = $satir["id"];
}

rsort($idler);
	  
	  for($i=0; $i<5; $i++){
		  $sorgu = "SELECT * FROM haberler WHERE id = '$idler[$i]'";
		  $sec = mysqli_query($baglanti, $sorgu);
		  $satir = mysqli_fetch_array($sec);
		  
		  if($i!=0) echo '<div class="carousel-item">';
		  else echo '<div class="carousel-item active">';
		  echo '<img class="carousel-image" src="manset/'.$satir["resim"].'" alt="">
					<div class="carousel-caption d-none d-md-block">
						<h5>'.$satir["baslik"].'</h5>
					</div>
				</div>';
		  
	  }

?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
				</div><!-- w-1-3 -->
				
				<div class="float-left float-sm-none w-1-3 w-sm-100 h-100 h-sm-600x">
				<?php
					$sorgu = "SELECT * FROM haberler WHERE kategori = 'Teknoloji'  ORDER BY id DESC LIMIT 1, 1";	
					$sec = mysqli_query($baglanti, $sorgu);
					$satir = mysqli_fetch_array($sec);
				?>
					<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" href="#">
						
							<div class="img-bg bg bg-grad-layer-6" style="background-image: url('manset/<?php echo $satir["resim"] ?>')"></div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b><?php echo $satir["baslik"] ?></b></h4>
								<ul class="list-li-mr-20">
<li><?php echo date('d M Y', strtotime($satir["zaman"])) ?></li>
									<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>
										<?php echo $satir["kategori"] ?></li>
									<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>	  <?php echo $satir["yorumSayisi"] ?></li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					<?php
					$sorgu = "SELECT * FROM haberler WHERE kategori = 'Sanat' ORDER BY id DESC LIMIT 1, 1";	
					$sec = mysqli_query($baglanti, $sorgu);
					$satir = mysqli_fetch_array($sec);
					?>
					<div class="pl-5 ptb-5 pl-sm-0 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" href="#">
						
							<div class="img-bg bg bg-grad-layer-6" style="background-image: url('manset/<?php echo $satir["resim"] ?>')"></div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b><?php echo $satir["baslik"] ?></b></h4>
								<ul class="list-li-mr-20">
									<li><?php echo date('d M Y', strtotime($satir["zaman"])) ?></li>
									<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $satir["kategori"] ?></li>
									<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php echo $satir["yorumSayisi"] ?></li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					
				</div><!-- float-left -->

			</div><!-- h-2-3 -->
			
			<div class="h-1-3 oflow-hidden">
					<?php
					$sorgu = "SELECT * FROM haberler WHERE kategori = 'Bilim' ORDER BY id DESC LIMIT 1, 1";	
					$sec = mysqli_query($baglanti, $sorgu);
					$satir = mysqli_fetch_array($sec);
					?>
				<div class="pr-5 pr-sm-0 pt-5 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<div class="img-bg bg bg-grad-layer-6" style="background-image: url('manset/<?php echo $satir["resim"] ?>')"></div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b><?php echo $satir["baslik"] ?></b></h4>
							<ul class="list-li-mr-20">
								<li><?php echo date('d M Y', strtotime($satir["zaman"])) ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $satir["kategori"] ?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php echo $satir["yorumSayisi"] ?></li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				<?php
					$sorgu = "SELECT * FROM haberler WHERE kategori = 'Sağlık' ORDER BY id DESC LIMIT 1, 1";	
					$sec = mysqli_query($baglanti, $sorgu);
					$satir = mysqli_fetch_array($sec);
					?>
				<div class="plr-5 plr-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<div class="img-bg bg bg-grad-layer-6" style="background-image: url('manset/<?php echo $satir["resim"] ?>')"></div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b><?php echo $satir["baslik"] ?></b></h4>
							<ul class="list-li-mr-20">
								<li><?php echo date('d M Y', strtotime($satir["zaman"])) ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $satir["kategori"] ?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php echo $satir["yorumSayisi"] ?></li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				<?php
					$sorgu = "SELECT * FROM haberler WHERE kategori = 'Spor' ORDER BY id DESC LIMIT 1, 1";	
					$sec = mysqli_query($baglanti, $sorgu);
					$satir = mysqli_fetch_array($sec);
					?>
				<div class="pl-5 pl-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<div class="img-bg bg bg-grad-layer-6" style="background-image: url('manset/<?php echo $satir["resim"] ?>')"></div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b><?php echo $satir["baslik"] ?></b></h4>
							<ul class="list-li-mr-20">
								<li><?php echo date('d M Y', strtotime($satir["zaman"])) ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $satir["kategori"] ?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php echo $satir["yorumSayisi"] ?></li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
			</div><!-- h-2-3 -->
		</div><!-- h-100vh -->
	</div><!-- container -->
	
	
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					<h4 class="p-title"><b>BİLİM</b></h4>
					<div class="row">
					<?php
						$sorgu = "SELECT * FROM haberler WHERE kategori = 'Bilim' ORDER BY id DESC LIMIT 2,1";
						$sec = mysqli_query($baglanti, $sorgu);
						$satir = mysqli_fetch_array($sec);
					?>
						<div class="col-sm-6">
							<img src="manset/<?php echo $satir["resim"] ?>" alt="">
							<h4 class="pt-20"><a href="#"><b><?php echo $satir["baslik"] ?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 pb-20">
								<li class="color-lite-black"><?php echo date('d M Y', strtotime($satir["zaman"])) ?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b><?php echo $satir["yorumSayisi"] ?></b></li>
							</ul>
							<p><?php echo $satir["metin"] ?></p>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<?php
								$sorgu = "SELECT * FROM haberler WHERE kategori =  'Bilim' ORDER BY id DESC LIMIT 3, 4";
								$sec = mysqli_query($baglanti, $sorgu);
								while($satir=mysqli_fetch_array($sec)){
									echo '<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="manset/'.$satir["resim"].'" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>'.$satir["baslik"].'</b></h5>
									<p>'.$satir["metin"].'</p>
									<ul class="list-li-mr-20 pt-0">
										<li class="color-lite-black pt-10">4 Şubat 2019</li>
										<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b>'.$satir["yorumSayisi"].'</b></li>
									</ul>
								</div>
							</a>';
								}
							?>
							<!-- oflow-hidden -->
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
					<h4 class="p-title"><b>TEKNOLOJİ</b></h4>
					<div class="row">
					<?php
						$sorgu = "SELECT * FROM haberler WHERE kategori = 'Teknoloji' ORDER BY id DESC LIMIT 2,1";
						$sec = mysqli_query($baglanti, $sorgu);
						$satir = mysqli_fetch_array($sec);
					?>
						<div class="col-sm-6">
							<img src="manset/<?php echo $satir["resim"] ?>" alt="">
							<h4 class="pt-20"><a href="#"><b><?php echo $satir["baslik"] ?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 pb-20">
								<li class="color-lite-black"><?php echo date('d M Y', strtotime($satir["zaman"])) ?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b><?php echo $satir["yorumSayisi"] ?></b></li>
							</ul>
							<p><?php echo $satir["metin"] ?></p>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<?php
								$sorgu = "SELECT * FROM haberler WHERE kategori =  'Teknoloji' ORDER BY id DESC LIMIT 3, 4";
								$sec = mysqli_query($baglanti, $sorgu);
								while($satir=mysqli_fetch_array($sec)){
									echo '<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="manset/'.$satir["resim"].'" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>'.$satir["baslik"].'</b></h5>
									<p>'.$satir["metin"].'</p>
									<ul class="list-li-mr-20 pt-0">
										<li class="color-lite-black pt-10">4 Şubat 2019</li>
										<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b>'.$satir["yorumSayisi"].'</b></li>
									</ul>
								</div>
							</a>';
								}
							?>
							<!-- oflow-hidden -->
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
					
					
					
					
									<h4 class="p-title"><b>SPOR</b></h4>
					<div class="row">
					<?php
						$sorgu = "SELECT * FROM haberler WHERE kategori = 'Spor' ORDER BY id DESC LIMIT 2,1";
						$sec = mysqli_query($baglanti, $sorgu);
						$satir = mysqli_fetch_array($sec);
					?>
						<div class="col-sm-6">
							<img src="manset/<?php echo $satir["resim"] ?>" alt="">
							<h4 class="pt-20"><a href="#"><b><?php echo $satir["baslik"] ?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 pb-20">
								<li class="color-lite-black"><?php echo date('d M Y', strtotime($satir["zaman"])) ?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b><?php echo $satir["yorumSayisi"] ?></b></li>
							</ul>
							<p><?php echo $satir["metin"] ?></p>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<?php
								$sorgu = "SELECT * FROM haberler WHERE kategori =  'Spor' ORDER BY id DESC LIMIT 3, 4";
								$sec = mysqli_query($baglanti, $sorgu);
								while($satir=mysqli_fetch_array($sec)){
									echo '<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="manset/'.$satir["resim"].'" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>'.$satir["baslik"].'</b></h5>
									<p>'.$satir["metin"].'</p>
									<ul class="list-li-mr-20 pt-0">
										<li class="color-lite-black pt-10">4 Şubat 2019</li>
										<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b>'.$satir["yorumSayisi"].'</b></li>
									</ul>
								</div>
							</a>';
								}
							?>
							<!-- oflow-hidden -->
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
					
									<h4 class="p-title"><b>SANAT</b></h4>
					<div class="row">
					<?php
						$sorgu = "SELECT * FROM haberler WHERE kategori = 'Sanat' ORDER BY id DESC LIMIT 2,1";
						$sec = mysqli_query($baglanti, $sorgu);
						$satir = mysqli_fetch_array($sec);
					?>
						<div class="col-sm-6">
							<img src="manset/<?php echo $satir["resim"] ?>" alt="">
							<h4 class="pt-20"><a href="#"><b><?php echo $satir["baslik"] ?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 pb-20">
								<li class="color-lite-black"><?php echo date('d M Y', strtotime($satir["zaman"])) ?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b><?php echo $satir["yorumSayisi"] ?></b></li>
							</ul>
							<p><?php echo $satir["metin"] ?></p>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<?php
								$sorgu = "SELECT * FROM haberler WHERE kategori =  'Sanat' ORDER BY id DESC LIMIT 3, 4";
								$sec = mysqli_query($baglanti, $sorgu);
								while($satir=mysqli_fetch_array($sec)){
									echo '<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="manset/'.$satir["resim"].'" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>'.$satir["baslik"].'</b></h5>
									<p>'.$satir["metin"].'</p>
									<ul class="list-li-mr-20 pt-0">
										<li class="color-lite-black pt-10">4 Şubat 2019</li>
										<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b>'.$satir["yorumSayisi"].'</b></li>
									</ul>
								</div>
							</a>';
								}
							?>
							<!-- oflow-hidden -->
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
			<h4 class="p-title"><b>SAĞLIK</b></h4>
					<div class="row">
					<?php
						$sorgu = "SELECT * FROM haberler WHERE kategori = 'Sağlık' ORDER BY id DESC LIMIT 2,1";
						$sec = mysqli_query($baglanti, $sorgu);
						$satir = mysqli_fetch_array($sec);
					?>
						<div class="col-sm-6">
							<img src="manset/<?php echo $satir["resim"] ?>" alt="">
							<h4 class="pt-20"><a href="#"><b><?php echo $satir["baslik"] ?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 pb-20">
								<li class="color-lite-black"><?php echo date('d M Y', strtotime($satir["zaman"])) ?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b><?php echo $satir["yorumSayisi"] ?></b></li>
							</ul>
							<p><?php echo $satir["metin"] ?></p>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<?php
								$sorgu = "SELECT * FROM haberler WHERE kategori =  'Sağlık' ORDER BY id DESC LIMIT 3, 4";
								$sec = mysqli_query($baglanti, $sorgu);
								while($satir=mysqli_fetch_array($sec)){
									echo '<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="manset/'.$satir["resim"].'" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>'.$satir["baslik"].'</b></h5>
									<p>'.$satir["metin"].'</p>
									<ul class="list-li-mr-20 pt-0">
										<li class="color-lite-black pt-10">4 Şubat 2019</li>
										<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b>'.$satir["yorumSayisi"].'</b></li>
									</ul>
								</div>
							</a>';
								}
							?>
							<!-- oflow-hidden -->
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
				</div><!-- col-md-9 -->
				
				<div class="d-none d-md-block d-lg-none col-md-3"></div>
				<div class="col-md-6 col-lg-4">
					<div class="pl-20 pl-md-0">
						
						<div class="mt-0 mb-50">
							<h4 class="p-title"><b>EN ÇOK OKUNAN HABERLER</b></h4>
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-1-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bilim 1</b></h5>
									<h6 class="color-lite-black pt-10">4 Şubat 2019</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-2-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Teknoloji 1</b></h5>
									<h6 class="color-lite-black pt-10">3 Şubat 2019</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-3-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Sanat 2</b></h5>
									<h6 class="color-lite-black pt-10">2 Şubat 2019</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-4-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Spor 3</b></h5>
									<h6 class="color-lite-black pt-10">1 Şubat 2019</h6>
								</div>
							</a><!-- oflow-hidden -->
							
						</div><!-- mtb-50 -->
						
						<div class="mt-0 mb-50">
							<h4 class="p-title"><b>EN ÇOK YORUM ALAN HABERLER</b></h4>
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-1-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bilim 1</b></h5>
									<h6 class="color-lite-black pt-10">4 Şubat 2019</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-2-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Teknoloji 1</b></h5>
									<h6 class="color-lite-black pt-10">3 Şubat 2019</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-3-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Sanat 2</b></h5>
									<h6 class="color-lite-black pt-10">2 Şubat 2019</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-4-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Spor 3</b></h5>
									<h6 class="color-lite-black pt-10">1 Şubat 2019</h6>
								</div>
							</a><!-- oflow-hidden -->
							
						</div><!-- mtb-50 -->

						
					</div><!--  pl-20 -->
				</div><!-- col-md-3 -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section>
	