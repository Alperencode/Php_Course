<?php

$kategori = array("Bilim", "Teknoloji", "Spor", "Sanat", "Sağlık"); 

for($i=0; $i<count($kategori); $i++){
	
	$sorgu = "SELECT MAX(id) AS id FROM haberler WHERE kategori = '$kategori[$i]'";
	$sec = mysqli_query($baglanti, $sorgu);
	$satir = mysqli_fetch_array($sec);

	$idler[$i] = $satir["id"];
	
}

rsort($idler);

print_r($idler);



?>