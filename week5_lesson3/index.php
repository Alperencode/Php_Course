<!doctype html>
<html>
	<head>
		
		<meta charset="utf-8">
		<title>Arayüz Geliştirme I</title>
		<link href="css/main.css" rel="stylesheet" type="text/css">
		
	</head>
	
	<body>
		
	<div class="cerceve">
			
			<div class="baslik">
				Burası Başlık alanı
			</div>

			<div class="icerik">
				Burası İlk içerik alanı
			</div>
			<?php
		
			for($i=0;$i<=5;$i++){
				echo '<div class="kutular">';
					for($y=1;$y<=4;$y++){
					echo '<div class="kutu"></div>';
					}
					echo '</div>';
			}
		?>
			
	</div>
		
	</body>
</html>