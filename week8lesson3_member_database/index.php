<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Üyeler</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.container{
	margin-top: 75px;
}
</style>
</head>

<body>

	<?php
		include("ayarlar.php");

		$sorgu = "SELECT * FROM kullanicilar";

		$sec = mysqli_query($baglanti,$sorgu);
		echo '<center>';
		echo '<div class="container">';
		echo '<table class="table table-striped">';
		echo '<thead>';

		echo '<tr>';
		echo '<td>Sıra No</td>';
		echo '<td>Ad</td>';
		echo '<td>Soyad</td>';
		echo '<td>ePosta</td>';
		echo '<td>Şifre</td>';
		echo '<td>Yetki</td>';
		echo '</tr>';

 		echo '</thead>';
		$sira = 1;

			while($satir = mysqli_fetch_array($sec)){
					echo '<tbody>';
					echo '<tr>';
					echo '<tr>';
					echo '<td>'.$sira.'</td>';
					echo '<td>'.$satir["ad"].'</td>';
					echo '<td>'.$satir["soyad"].'</td>';
					echo '<td>'.$satir["eposta"].'</td>';
					echo '<td>'.$satir["sifre"].'</td>';
					echo '<td>'.$satir["yetki"].'</td>';
					echo '</tr>';
					echo '</tbody>';
					$sira++;
			}

		echo '</table>';
		echo '</center>';



	?>
