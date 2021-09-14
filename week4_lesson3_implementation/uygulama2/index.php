<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Uygulaması 2</title>
</head>

<body>
	
	<?php 
	
	//	İşlem sonucunu aynı sayfada gösteren bir yapı kurunuz.
	// Silindir : pi.r karesi. h 
	// Koni : pi.r karesi. h / 3
	
	?>
	
	<form id="form1" name="form1" method="post" action="index.php">
		<p>
			Taban Yarıçapı:
			<input type="number" name="taban" id="taban" value="<?php echo @$_POST["taban"] ?>"> 
			cm
		</p>
		<p>
			Yükseklik:
			<input type="number" name="yukseklik" id="yukseklik" value="<?php echo @$_POST["yukseklik"] ?>">
		  cm
		</p>
		<p>
			Şekil:
			<select name="sekil" id="sekil" >
			  <option value="Silindir" <?php
	
				if(@$_POST["sekil"] == "Silindir"){
				echo "selected";
				}								 
				?> >
				  
				  Silindir</option>
			  <option value="Koni" <?php
											 
				if(@$_POST["sekil"] == "Koni"){
				echo "selected";
				}								 
				?> >
				  Koni</option>
			</select>
		</p>
		<p>
			<input type="submit" name="submit" id="submit" value="Hacmi Hesapla">
		</p>
	</form>
			<?php 
			$sekil = @$_POST["sekil"];
			$taban = @$_POST["taban"];
			$yukseklik = @$_POST["yukseklik"];
			$silindir= 3.14*$taban**2*$yukseklik;
			$koni= 3.14*$taban**2*$yukseklik/3;
			if($sekil == "Silindir"){
				echo $silindir;
			}
			if($sekil == "Koni"){
				echo $koni;
			}
			
		?>
	
</body>
</html>