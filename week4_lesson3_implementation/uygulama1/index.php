<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Uygulaması 1</title>
</head>

<body>
	
	<?php
	
	/*	Kullanıcıdan bir form aracığıyla notlarını ve ders bilgisini alınız. Aşağıdaki kurallara göre uygun sonucu kontrol.php'de ekrana yazdırınız.
		
		Kurallar:
		1. Vize ve final notları 0'dan küçük, 100'den büyük olamaz
		2. Dersler bir açılır listeden seçilebilir olmalı (Türkçe, Matematik)
		3. Kullanıcı herhangi bir alanı boş geçememeli
		4. Sayfa yüklendiğinde imleç vize alanına odaklanmalı
		5. Ortalama vizenin yüzde 40'ı finalin yüzde 60'ı alınarak hesaplanmalı
		6. Kullanıcının seçtiği ders Türkçe ise ortalaması 50 ve üzeri olanlar için "Geçti", 50'nin altında olanlar için "Kaldı" çıktısı üretilmeli
		7. Kullanıcının seçtiği ders Matematik ise ortalaması 60 ve üzeri olanlar için "Geçti", 60'ın altında olanlar için "Kaldı" çıktısı üretilmeli
		8. kontrol.php'de kullanıcının vize puanı, final puanı, seçtiği dersin adı, seçtiği dersin baraj puanı, ortalaması ve geçip kalma durumu aşağıdaki gibi olmalıdır.
			Olası ekran görüntüsü	->	Vize: 80
										Final: 60
										Seçtiğiniz Ders: Matematik
										Dersin Baraj Puanı: 60
										Ortalamanız: 68
										Durum: Geçti
	
	*/
	
	
	
	
	?>
	
<form id="form1" name="form1" method="post" action="kontrol.php">
  <p>
    <label for="number">Vize</label>
    <input name="vize" type="number" autofocus required="required" id="number" max="100" min="0">
  </p>
  <p>
    <label for="number2">Final</label>
    <input name="final" type="number" required="required" id="number2" max="100" min="0">
  </p>
  <p>
    <label for="select">Seçtiğiniz Ders:</label>
    <select name="ders" id="select">
      <option>Türkçe</option>
      <option>Matematik</option>
    </select>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Hesapla">
  </p>
</form>
</body>
</html>