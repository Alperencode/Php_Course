<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dosya Gönder</title>
</head>

<body>
	
	<?php
	
	/*	 Kullanıcıdan file tipinde tek bir inputla bir çok dosya alıp, dosya türlerine göre belgeler klasöründeki ilgili klasöre yüklenilmesini sağlayınız.
	Word, Excel, PDF, Image, Diger
	*/
	
	?>
	
	<form action="kontrol.php" method="post" enctype="multipart/form-data">
	  	<input name="dosya[]" type="file" id="dosya[]" multiple id="dosya">
		<br>
		<input type="submit" name="submit" />
    </form>
	
</body>
</html>