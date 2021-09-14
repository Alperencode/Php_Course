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
	
	function burcBul($ay,$gun){
		if(($ay==01  && $gun >= 22) or ($ay==02 and $gun <= 19)){
			echo "Kova";
		}
		elseif(($ay== 02 and $gun >= 20) or ($ay==03 and $gun <=20)){
			echo "Balık";
		}
		elseif(($ay== 3 and $gun >= 21) or ($ay==04 and $gun <=20)){
			echo "Koç";
		}
		elseif(($ay== 4 and $gun >= 21) or ($ay==05 and $gun <=21)){
			echo "Boğa";
		}
		elseif(($ay== 5 and $gun >= 22) or ($ay==06 and $gun <=22)){
			echo "İkizler";
		}
		elseif(($ay== 6 and $gun >= 23) or ($ay==7 and $gun <=22)){
			echo "Yengeç";
		}		
		elseif(($ay== 7 and $gun >= 23) or ($ay==8 and $gun <=22)){
			echo "Aslan";
		}
		elseif(($ay== 8 and $gun >= 23) or ($ay==9 and $gun <=22)){
			echo "Başak";
		}
		elseif(($ay== 9 and $gun >= 23) or ($ay==10 and $gun <=22)){
			echo "Terazi";
		}
		elseif(($ay== 10 and $gun >= 23) or ($ay==11 and $gun <=21)){
			echo "Akrep";
		}
		elseif(($ay== 11 and $gun >= 22) or ($ay==12 and $gun <=21)){
			echo "Yay";
		}	
		elseif(($ay== 12 and $gun >= 22) or ($ay==1 and $gun <=21)){
			echo "Oğlak";
		}						
	}
	
	?>
	
	<form id="form1" name="form1" method="post" action="index.php">
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
	burcBul($ay,$gun);
		
	}
	
	?>
	
</body>
</html>