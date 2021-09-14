<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Uygulama 4</title>
</head>

<body>
	
	<?php
	
	/*	Girilen doğum tarihine göre burç bulan "burcBul()" fonksiyonunu -gün ve ay değerlerini parametreler ile yakalatarak- çalışır hâle getiriniz.
	
	*/
	
	function burcBul(){
		
	}
		
	?>
	
	<form id="form1" name="form1" method="post">
		Doğum Tarihiniz: <input type="date" name="tarih" value="<?php echo $_POST["tarih"]; ?>" />
		<input type="submit" name="submit" />
	</form>
	<br>
	
	<?php
	
	if(isset($_POST["submit"]))
	{
		$tarih = $_POST["tarih"];
		$dizi = explode("-",$tarih);
		$gun = $dizi[2];
		$ay = $dizi[1];
		$yil = $dizi[0];
		echo "Doğum Tarihi : $gun/$ay/$yil<br>";
		
	echo "Burcunuz: ";
	burcBul();
		
	}
	
	?>
	
</body>
</html>