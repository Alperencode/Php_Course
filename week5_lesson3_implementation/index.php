<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arayüz Geliştirme I | Uygulama</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Uygulama</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Menü 1<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Menü 2</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menü 3</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Menü 4</a>
                <a class="dropdown-item" href="#">Menü 5</a>
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
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators"> <!-- Döngü -->
			<?php
			for($i=0;$i<=4;$i++){
            echo '<li data-target="#carouselExampleControls" data-slide-to="'.$i.'"';
			if($i==0){
				echo 'class="active"></li>';
			}
			else{
			echo '></li>'; 
			} 
			}
			?>
            </ol>
            <div class="carousel-inner">     <!-- Döngü --> <!-- if --> 
			<?php
			for($y=1;$y<=5;$y++){
            echo '<div class="carousel-item ';
			if($y==1) echo 'active';
				echo'">';
				echo '<img class="d-block w-100" src="images/slider'.$y.'.jpg" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Başlık '.$y.'</h5>
                  <p>Açıklama '.$y.'</p>
                </div>
              	</div>';
			}
			?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Geri</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">İleri</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <hr>
	  
	  <?php
	  
	  $resimler = array("gazi-1.jpg", "gazi-2.jpg", "gazi-3.jpg", "gazi-4.jpg", "gazi-5.jpg", "gazi-6.jpg");
	  
	  $basliklar = array("Gazi Üniversitesi", "Teknoloji Fakültesi", "Mimarlık Fakültesi", "Mühendislik Fakültesi", "Spor Bilimleri Fakültesi", "Gazi Eğitim Fakültesi");
	  
	  $aciklamalar = array("Açıklama 1", "Açıklama 2", "Açıklama 3", "Açıklama 4", "Açıklama 5", "Açıklama 6");
	  
	  ?>
	  
    <div class="container"><!-- Döngü -->
	<div class="row text-center">
	<?php

    for($z=0;$z<=5;$z++){    
		echo '<div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/'.$resimler[$z].'" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">';
			  echo $basliklar[$z].'</h5>';
              echo '<p class="card-text">'.$aciklamalar[$z].'</p>
              <a href="#" class="btn btn-primary">Siteye Git</a>
            </div>
          </div>
        </div>';
		}
	?> 
	</div>
    </div>
    <hr>
    <div class="container text-white bg-dark p-4">
      <div class="row">
		  Gazi Üniversitesi - BELTEK Kursları - &copy; 2019
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>