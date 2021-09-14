<?php
	include("fonksiyonlar.php");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Beltek Haber</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
	<link href="fonts/ionicons.css" rel="stylesheet">

	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	
	<link href="common/styles.css" rel="stylesheet">
</head>
<body>
	
	<header style="position: sticky">
		<div class="bg-191">
			<div class="container">	
				<div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">
				
					<ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
						<li><a class="pl-0 pl-sm-10" href="#">Hakkımızda</a></li>
						<li><a href="#">İletişim</a></li>
					</ul>
					<ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
						<li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="ion-social-google"></i></a></li>
						<li><a href="#"><i class="ion-social-instagram"></i></a></li>
					</ul>
					
				</div><!-- top-menu -->
			</div><!-- container -->
		</div><!-- bg-191 -->
		
		<div class="container">
			<a class="logo" href="index.php"><img src="images/logo.png" alt="Logo"></a>
			
			<a class="right-area src-btn" href="#" >
				<i class="active src-icn ion-search"></i>
				<i class="close-icn ion-close"></i>
			</a>
			<div class="src-form">
				<form>
					<input type="text" placeholder="Anahtar Kelime">
					<button type="submit"><i class="ion-search"></i></button>
				</form>
			</div><!-- src-form -->
			
			<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
			
			<ul class="main-menu" id="main-menu">
				<li><a href="index.php">ANA SAYFA</a></li>		
				<li><a href="?sayfa=haberler&kategori=bilim">BİLİM</a></li>
				<li><a href="?sayfa=haberler&kategori=teknoloji">TEKNOLOJİ</a></li>
				<li><a href="?sayfa=haberler&kategori=spor">SPOR</a></li>
				<li><a href="?sayfa=haberler&kategori=sanat">SANAT</a></li>
				<li><a href="?sayfa=haberler&kategori=saglik">SAĞLIK</a></li>
				<li class="drop-down"><a href="#">KULLANICI PANELİ<i class="ion-arrow-down-b"></i></a>
					<ul class="drop-down-menu drop-down-inner">
						<li><a href="?sayfa=uyeOl">ÜYE OL</a></li>
						<li><a href="?sayfa=oturumAc">OTURUM AÇ</a></li>
					</ul>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div><!-- container -->
	</header>
	
		<?php
			$sayfa = @$_GET["sayfa"];
			$kategori = @$_GET["kategori"];
	
			if($sayfa==null){
				include("main.php");
			}
			else{
				include($sayfa.".php");
			}
	
		?>
	
	<footer class="bg-191 color-ccc">
		
		<div class="container">
			<div class="pt-50 pb-20 pos-relative">
				<div class="abs-tblr pt-50 z--1 text-center">
					<div class="h-80 pos-relative"><img class="opacty-1 h-100 w-auto" src="images/map.png" alt=""></div>
				</div>
				<div class="row">
				
					<div class="col-sm-4">
						<div class="mb-30">
							<a href="#"><img src="images/logo.png" alt="logo"></a>
							<p class="mtb-20 color-ccc">Site Açıklaması</p>
							<p class="color-ash">
								Copyright &copy;<script>document.write(new Date().getFullYear());</script>
							</p>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->
					
					<div class="col-sm-4">
						<div class="mb-30">
							<h5 class="color-primary mb-20"><b>EN ÇOK OKUNAN HABERLER</b></h5>
							<div class="mb-20">
								<a class="color-white" href="#"><b>Bilim 1</b></a>
								<h6 class="mt-10">4 Şubat 2019</h6>
							</div>
							<div class="brdr-ash-1 opacty-2 mr-30"></div>
							<div class="mt-20">
								<a class="color-white" href="#"><b>Teknoloji 3</b></a>
								<h6 class="mt-10">3 Şubat 2019</h6>
							</div>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->
					
					<div class="col-sm-4">
						<div class="mb-30">
							<h5 class="color-primary mb-20"><b>EN ÇOK YORUM ALAN HABERLER</b></h5>
							<div class="mb-20">
								<a class="color-white" href="#"><b>Sanat 2</b></a>
								<h6 class="mt-10">2 Şubat 2019</h6>
							</div>
							<div class="brdr-ash-1 opacty-2 mr-30"></div>
							<div class="mt-20">
								<a class="color-white" href="#"><b>Spor 1</b></a>
								<h6 class="mt-10">1 Şubat 2019</h6>
							</div>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->
					
				</div><!-- row -->
			</div><!-- ptb-50 -->
			
			<div class="brdr-ash-1 opacty-2"></div>
			
			<div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">
			
				<ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
					<li><a class="pl-0 pl-sm-10" href="#">Hakkımızda</a></li>
					<li><a href="#">İletişim</a></li>
				</ul>
				<ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
					<li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
					<li><a href="#"><i class="ion-social-twitter"></i></a></li>
					<li><a href="#"><i class="ion-social-google"></i></a></li>
					<li><a href="#"><i class="ion-social-instagram"></i></a></li>
				</ul>
				
			</div><!-- oflow-hidden -->
		</div><!-- container -->
	</footer>
	
	<!-- SCIPTS -->
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/tether.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.js"></script>
	
	<script src="common/scripts.js"></script>
	
</body>
</html>