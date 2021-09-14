<?php

  $id = $_GET["id"];

  $onay = @$_GET["onay"];

if($onay != 1){

  $sorgu = "SELECT * FROM kullanicilar WHERE id=".$id;

  $sec = mysqli_query($baglanti,$sorgu);

  $satir = mysqli_fetch_array($sec);

  echo $satir["ad"]." ".$satir["soyad"]." adlı kullanıcıyı silmeyi onaylıyor musunuz?";

  echo  "<br>";

  echo '<a href="index.php?sayfa=uye-sil&id='.$id.'&onay=1">Onayla</a>';

  echo  "<br>";

  echo '<a href="index.php?sayfa=uyeler">Geri Dön</a>';
}
else if($onay == 1){

  $sorgu = "DELETE  FROM kullanicilar WHERE id=".$id;

  $sil = mysqli_query($baglanti,$sorgu);

  if($sil){
    echo "Silme işlemi başarılı";
    echo "<br>";
    echo "Yönlendiriliyorsunuz";
    header("Refresh:2; index.php?sayfa=uyeler");
  }
  else{
    echo "Silme işlemi başarısız";
  }
}
?>
