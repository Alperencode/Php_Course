<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	 <link rel="stylesheet" href="css/main.css" />

    <title>Deneme</title>
  </head>
  <body>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	   <div class="container">
  <a class="navbar-brand" href="#">Alperen</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">İletişim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Hakkımızda</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Haberler
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Spor</a>
          <a class="dropdown-item" href="#">Teknoloji</a>
          <a class="dropdown-item" href="#">Sanat</a>
          <a class="dropdown-item" href="#">Sağlık</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Aranacak Kelime" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
    </form>
  </div>
  </div>
</nav>

	<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
		<?php
	  $resimler = array("gazi-1.jpg", "gazi-2.jpg", "gazi-3.jpg", "gazi-4.jpg", "gazi-5.jpg", "gazi-6.jpg");
		for($i=1; $i<=5; $i++){
      if($i==1) echo '<div class="carousel-item active">';
	  else echo '<div class="carousel-item">';
        echo '<img src="resimler/'.$resimler[$i].'" class="d-block w-100" alt="..." height="300">
        <div class="carousel-caption d-none d-md-block">
          <h5>Başlık '.$i.'</h5>
          <p>Açıklama '.$i.'</p>
        </div>
      </div>';
		}
		?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Önceki</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Sonraki</span>
    </a>
  </div>
</div>

	  <hr>

<div class="row">
<?php

	$basliklar = array("Gazi Üniversitesi", "Teknoloji Fakültesi", "Mimarlık Fakültesi", "Mühendislik Fakültesi", "Spor Bilimleri Fakültesi", "Gazi Eğitim Fakültesi");

	$aciklamalar = array("Açıklama 1", "Açıklama 2", "Açıklama 3", "Açıklama 4", "Açıklama 5", "Açıklama 6");

	for($j=0; $j<=5; $j++){
	echo '<div class="col-sm-4">
		<div class="card text-center">
		<img class="card-img-top" src="resimler/'.$resimler[$j].'" alt="Card image cap">
		  <div class="card-body">
			<h5 class="card-title">'.$basliklar[$j].'</h5>
			<p class="card-text">'.$aciklamalar[$j].'</p>
			<a href="#" class="btn btn-primary">Siteye Git</a>
		  </div>
		</div>
	</div>';
	}
?>
</div>

	  <hr>

<nav class="navbar navbar-dark bg-dark">
   <div class="container"><span class="navbar-brand mb-0 h1">Alperen Ağa - 2019</span></div>
</nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
