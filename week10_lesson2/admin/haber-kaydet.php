<?php

$geciciAdres = $_FILES['resim']['tmp_name'];

$uzanti = substr($_FILES["resim"]["name"],-4,4);

$baslik = $_POST["haber-basligi"];

$metin = $_POST["haber-metni"];

$kategori = $_POST["kategori"];

?>