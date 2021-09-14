<?php

$rad = $_FILES['resim']['name'];
$tip = $_FILES['resim']['type'];
$boyut = $_FILES['resim']['size'];
$ga = $_FILES['resim']['tmp_name'];
$_FILES['resim']['error'];

$baslik = $_POST["baslik"];

$metin = $_POST["metin"];

$kategori = $_POST["kategori"];

echo "<h1 style='color:red'>".$baslik."</h1> <br>";

echo $metin."<br>";

echo $kategori."<br>";

echo $_FILES['resim']['name']."<br>";

echo $rad."<br>";

echo $tip."<br>";

echo $ga."<br>";

$ya = "dosyalar/yeni.png";

move_uploaded_file($ga,$ya);

?>
