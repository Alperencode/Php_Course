<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formlar</title>
</head>

<body>
<form action="kontrol.php" id="form1" name="form1" method="post">
	<fieldset>
		<legend>Kullanıcı Bilgileri</legend>
<table width="500" border="0" cellspacing="5" cellpadding="0">
	  <tbody>
	    <tr>
	      <td width="150">Adı:</td>
	      <td width="344"><input name="ad" type="text" autofocus="autofocus" required id="ad" maxlength="10">
		  </td>
        </tr>
	    <tr>
	      <td>Soyadı:</td>
	      <td><input type="text" name="soyad" id="soyad"></td>
        </tr>
	    <tr>
	      <td>Şifre:</td>
	      <td><input type="password" name="sifre" id="sifre"></td>
        </tr>
	    <tr>
	      <td>e-Posta:</td>
	      <td><input type="email" name="eposta" id="eposta"></td>
        </tr>
  </tbody>
</table>
</fieldset>
	
  <fieldset>
	<legend>Üyelik Bilgileri</legend>
		
    <table width="500" border="0" cellspacing="5" cellpadding="0">
	      <tbody>
	        <tr>
	          <td width="150">Doğum Tarihi:</td>
	          <td width="335">
				  <input name="dogumTarihi" type="date" id="dogumTarihi" max="2000-01-01" min="1900-01-01"></td>
            </tr>
	        <tr>
	          <td>Doğum Yılı:</td>
	          <td>
				  <input name="dogumYili" type="number" id="dogumYili" max="2000" min="1900" value="19"></td>
            </tr>
	        <tr>
	          <td>Doğum Yeri:</td>
	          <td>
				  <select name="dogumYeri" id="dogumYeri">
	            <option>Ankara</option>
	            <option selected>İstanbul</option>
	            <option>İzmir</option>
              </select></td>
            </tr>
	        <tr>
	          <td>Adres:</td>
	          <td>
				  <textarea style="resize: none" name="adres" rows="4" id="adres">
				  Mah. Sk.
				  </textarea>
			  </td>
            </tr>
	        <tr>
	          <td>Ülke: </td>
	          <td>
				  <input name="ulke" id="ulke" list="ulkeler" >
				  <datalist id="ulkeler">
				  	<option>Türkiye</option>
				  	<option>Azerbaycan</option>
				  	<option>KKTC</option>
			    </datalist>
			  </td>
            </tr>
      </tbody>
    </table>
	</fieldset>
	
  <fieldset><legend>Hobileriniz</legend>
	<p>
		  <label>
		    <input type="checkbox" name="hobileriniz[]" value="Futbol" id="hobileriniz_0">
		    Futbol</label>
		  <br>
		  <label>
		    <input type="checkbox" name="hobileriniz[]" value="Basketbol" id="hobileriniz_1">
		    Basketbol</label>
		  <br>
		  <label>
  <input type="checkbox" name="hobileriniz[]" value="Sinema" id="hobileriniz_2">
		    Sinema</label>
		  <br>
		  <label>
		    <input type="checkbox" name="hobileriniz[]" value="Tiyatro" id="hobileriniz_3">
		    Tiyatro</label><br>
		</p>
    </fieldset>
	
  <fieldset><legend>Telefon Markanız</legend><p>
	<label>
		    <input type="radio" name="telefon" value="Sony" id="telefon_0">
Sony</label>
		  <br>
		  <label>
		    <input type="radio" name="telefon" value="iPhone"  id="telefon_1">
		    iPhone</label>
		  <br>
		  <label>
		    <input type="radio" name="telefon" value="Samsung"  id="telefon_2">
		    Samsung</label>
		  <br>
		  <label>
		    <input type="radio" name="telefon" value="Lenovo"  id="telefon_3">
		    Lenovo</label>
		  <br>	</p>
		
	  Memnuniyet Düzeyiniz: 0<input name="memnuniyet" type="range" id="memnuniyet" max="10" min="0">10
	</fieldset>
	<input type="submit" value="Gönder">
</form>
</body>
</html>