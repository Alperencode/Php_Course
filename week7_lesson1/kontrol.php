<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<div class="container">
	<?php
		$email = $_POST["email"];
	 	$sifre = $_POST["sifre"];
		echo $email."<br>";
		echo $sifre;
	?>
	</div>
</body>
</html>