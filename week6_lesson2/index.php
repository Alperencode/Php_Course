<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
	
<link href="css/main.css" rel="stylesheet" type="text/css" media="(min-width:481px)">
<link href="css/mobil.css" rel="stylesheet" type="text/css" media="(max-width:480px)">
	
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>	
<style type="text/css">

</style>	
</head>

<body>
	<div class="cerceve">
		<header>
			<div class="mobil-menu">
		<div style="background-color: white; border-bottom: 1px solid #FFF">
	 	<?php
		$sayi = rand(4,9);
		for($i=1;$i<=$sayi;$i++){
		echo '<div class="buton">MENÜ '.$i.'</div>';
		}
		?>
		</div>
	</div>
	<i class="ac-kapa fa fa-bars"></i>
	

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	
<script type="text/javascript">
var acikmi = 1;
$(".ac-kapa").click(function(){
  if ( acikmi == 1 ) {
    $('.mobil-menu').animate({left: '0px'}, 200);
    $('.ac-kapa').animate({left: '250px'}, 200);
    acikmi = 2;
  } else {
    $('.mobil-menu').animate({left: '-250px'},200);
    $('.ac-kapa').animate({left: '0px'}, 200);
    acikmi = 1;
  }
});
</script>
		</header>
		<nav>
		<div class="buton">ANA SAYFA</div>
		<?php
		$sayi = rand(4,9);
		for($i=1;$i<=$sayi;$i++){
		echo '<div class="buton">MENÜ '.$i.'</div>';
		}
		?>
		</nav>
		<section class="panel1">
			<div class="a"></div>
			<div class="b">
				<div class="b1"></div>
				<div class="b2"></div>			
			</div>
			<div class="c">
				<div class="c1"></div>
				<div class="c2"></div>
			</div>
		</section>
		<section class="panel2">
			<div class="b">
				<div class="b1"></div>
				<div class="b2"></div>			
			</div>
			<div class="a"></div>
			<div class="c">
				<div class="c1"></div>
				<div class="c2"></div>
			</div>
		</section>
		<section class="panel3">
			<div class="d"></div>
			<div class="e">
				<div class="e1"></div>
				<div class="e2"></div>
				<div class="e3"></div>
			</div>
			<div class="f"></div>
		</section>
	</div>
	<footer></footer>
</body>
</html>