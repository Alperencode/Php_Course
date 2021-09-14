<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Uygulama 3</title>
</head>

<body>
	
	<?php
	
	/*	"iller" dizi değişkenindeki değerleri bir döngü ile seçim listesine (select-option) ekleyiniz.
	*/
	
	$iller = array("Adana", "Adıyaman", "Afyon", "Ağrı", "Amasya", "Ankara", "Antalya", "Artvin", "Aydın", "Balıkesir", "Bilecik", "Bingöl", "Bitlis", "Bolu", "Burdur", "Bursa", "Çanakkale", "Çankırı", "Çorum", "Denizli", "Diyarbakır", "Edirne", "Elazığ", "Erzincan", "Erzurum", "Eskişehir", "Gaziantep", "Giresun", "Gümüşhane", "Hakkari", "Hatay", "Isparta", "Mersin", "İstanbul", "İzmir", "Kars", "Kastamonu", "Kayseri", "Kırklareli", "Kırşehir", "Kocaeli", "Konya", "Kütahya", "Malatya", "Manisa", "Kahramanmaraş", "Mardin", "Muğla", "Muş", "Nevşehir", "Niğde", "Ordu", "Rize", "Sakarya", "Samsun", "Siirt", "Sinop", "Sivas", "Tekirdağ", "Tokat", "Trabzon", "Tunceli", "Şanlıurfa", "Uşak", "Van", "Yozgat", "Zonguldak", "Aksaray", "Bayburt", "Karaman", "Kırıkkale", "Batman", "Şırnak",
	"Bartın", "Ardahan", "Iğdır", "Yalova", "Karabük", "Kilis", "Osmaniye", "Düzce");
	?>
	
<form id="form1" name="form1" method="post">
  <p>
    <label for="select">Şehir:</label>
    <select name="select" id="select">
	<?php 
		foreach($iller as $liste){
			echo "<option>$liste</option>";
		}
		/*for($i=0;$i<=count($iller);$i++){
			echo "<option>".$liste."</option>";
		}*/
	?>
      

    </select>
  </p>
</form>
</body>
</html>