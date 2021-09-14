<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Uygulama 2</title>
</head>

<body>
	
	<?php
	
	/*	Kullanıcıdan alınan alt ve üst değer arasında rastgele 5 sayı üretip alt alta yazdırınız. Üretilen rastgele sayıların birbirleri ile aynı olmaması gerekmektedir. 
	*/
		
	?>
	
	<form id="form1" name="form1" method="post" action="kontrol.php">
		<input type="number" name="alt" id="alt" placeholder="Alt Değer" /><br>
		<input type="number" name="ust" id="ust" placeholder="Üst Değer" /><br>
		<input type="submit" name="submit" value="Rastgele 5 Sayı Oluştur" /><br>
	</form>
	
</body>
</html>