<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Üyeler</title>
</head>

<body>
	<?php
	
		include("ayarlar.php");
	
		$sorgu = "SELECT * FROM kullanicilar ORDER BY dogumYeri";
	
		$sec = mysqli_query($baglanti, $sorgu);
	
		$veriler = mysqli_num_rows($sec);
		
		echo "<center>".'<table border="1">';
		$sira = 1 ;
		echo '<tr>';
			echo '<td>Sıra No</td>';
			echo '<td>Ad</td>';
			echo '<td>Soyad</td>';
			echo '<td>ePosta</td>';
			echo '<td>Doğum Yeri</td>';
			echo '<td>Doğum Tarihi</td>';
		echo '</tr>';
	
		$secad = $satir["ad"] ;
		$secsoyad = $satir["soyad"];
		$seceposta = $satir["eposta"];
		$secdogumyeri = $satir["dogumYeri"];
		$secdogumtarihi = $satir["dogumTarihi"];
	
		while($satir = mysqli_fetch_array($sec)){
			
		echo "<tr>";
			
			echo "<td>".$sira."</td>";
			echo "<td>".$secad."</td>";
			echo "<td>".$secsoyad."</td>";
			echo "<td>".$seceposta."</td>";
			echo "<td>".$secdogumyeri."</td>";
			echo "<td>".$secdogumtarihi."</td>";
			$sira++;
		echo "</tr>";	
		}
	
		echo "<center>"."</table>";
		
		

		
	
	?>

<center>
	
			<!--- Tablo Yeri --->
	
</center>
</body>
</html>