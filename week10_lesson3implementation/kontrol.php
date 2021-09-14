<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dosya Yükle</title>
</head>

<body>
	
	<?php
	
	$dosyaSayisi = count($_FILES["dosya"]["name"]);
	
	
	for($i=0; $i<$dosyaSayisi;$i++){
		$dosyaAdi = $_FILES["dosya"]["name"][$i];

		$geciciAdres = $_FILES["dosya"]["tmp_name"][$i];
		$boyut = $_FILES["dosya"]["size"][$i];
		$hataKodu = $_FILES["dosya"]["error"][$i];
		$tip = $_FILES["dosya"]["type"][$i];

		if($tip=="image/jpeg"){

		$yeniAdres="belgeler/image/".$dosyaAdi;
			move_uploaded_file($geciciAdres,$yeniAdres);
		
		}
		else if($tip=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){

		$yeniAdres="belgeler/excel/".$dosyaAdi;
			move_uploaded_file($geciciAdres,$yeniAdres);
		
		}
		elseif($tip=="application/pdf"){

		$yeniAdres="belgeler/pdf/".$dosyaAdi;
			move_uploaded_file($geciciAdres,$yeniAdres);
		
		}
		elseif($tip=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"){

		$yeniAdres="belgeler/word/".$dosyaAdi;
			move_uploaded_file($geciciAdres,$yeniAdres);
		
		}
		else{
			$yeniAdres="belgeler/diger/".$dosyaAdi;
			move_uploaded_file($geciciAdres,$yeniAdres);
		}
		}
		if($dosyaSayisi==0){
			echo "Lütfen bir dosya yükleyiniz!";
			header("Refresh:2; index.php");
		}
	?>
	
</body>
</html>