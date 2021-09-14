 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alan Hesaplama</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="index.php">

<p>
  <label for="number">Genişlik</label>
  <input type="number" name="genislik" id="number" value="<?php echo $_POST["genislik"] ?>">
</p>
<p>
  <label for="number2">Yükseklik:</label>
  <input type="number" name="yukseklik" id="number2" value="<?php echo $_POST["yukseklik"] ?>">
</p>
<p>
  <label>
    <input name="sekil" type="radio" id="sekil" value="ucgen"
	<?php if(@$_POST["sekil"] == "ucgen") echo "checked" ?>> 
    Üçgen</label>
  <br>
  <label>
    <input type="radio" name="sekil" value="dortgen" id="sekil1"
	<?php if(@$_POST["sekil"] == "dortgen") echo "checked" ?>>
    Dörtgen</label>
  <br>
</p>
<p>
  <input type="submit" name="submit" id="submit" value="Hesapla">
</p>

</form>
	<?php
	if(isset($_POST["submit"])){
		$sekil = $_POST["sekil"];
		// echo $sekil."<br>";
		if($sekil == "ucgen" ){	
		$alan = ($_POST["genislik"] * $_POST["yukseklik"] / 2);
		}
		else{
			$alan = $_POST["genislik"] * $_POST["yukseklik"];
		}
		echo $alan;	
	}
	?>
</body>
</html>