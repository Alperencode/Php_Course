<?php

$geciciAdres = $_FILES['resim']['tmp_name'];

$uzanti = substr($_FILES["resim"]["name"],-4,4);

$yeniAd = uniqid().$uzanti;

$baslik = addslashes($_POST["haber-basligi"]);

$metin = $_POST["haber-metni"];

$kategori = $_POST["kategori"];

$eID = $satir["id"];

$sorgu = "INSERT INTO haberler (baslik, metin, kategori, resim, ekleyen) VALUES ('$baslik', '$metin', '$kategori', '$yeniAd', '$eID')";

$kayit = mysqli_query($baglanti, $sorgu);

$yeniAdres = "../manset/".$yeniAd;

$yukle = move_uploaded_file($geciciAdres, $yeniAdres);

if($kayit and $yukle){
	echo "Kayıt başarılı";
}
else echo "Kayıtta problem var";

?>