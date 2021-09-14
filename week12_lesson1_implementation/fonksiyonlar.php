<?php
	
	function temizle($data) {
		$data = strip_tags($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = str_replace("%","",$data);
		$data = str_replace("'"," ",$data);
		$data = str_replace("chr(34)"," ",$data);
		$data = str_replace("chr(39)"," ",$data);
		$data = str_replace("="," ",$data);
		$data = str_replace("&"," ",$data);
		$data = str_replace("¿"," ",$data);
		return $data;
	};

	function tarihYaz($tarih){
		
		$tarih = date('j M Y - H:i', strtotime($tarih));

		$ae = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		$at = array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
		
		return(str_replace($ae,$at,$tarih));
	}
	
?>