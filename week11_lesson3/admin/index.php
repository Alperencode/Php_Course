<?php

include("../ayarlar.php");
include("../fonksiyonlar.php");

session_start();

$kontrolEposta = $_SESSION["oturum"];
$sorgu = "SELECT * FROM kullanicilar WHERE eposta='$kontrolEposta'";
$satir = mysqli_query($baglanti, $sorgu);
$satir = mysqli_fetch_array($satir);


if($satir["yetki"]!=1){
	header("Location: ../index.php");
	exit();
}

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Beltek Haber - Yönetim Paneli</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
	
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="" /></a>
				
		<div id="sideNav" href="">
		<i class="fa fa-bars icon"></i> 
		</div>
            </div>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a <?php if(@$_GET["sayfa"]==null) echo 'class="active-menu"'; ?>  href="index.php"><i class="fa fa-home"></i>Ana Sayfa</a>
                    </li>
                    
                    <li>
                        <a <?php if(@$_GET["sayfa"]=="uyeler") echo 'class="active-menu"'; ?> href="?sayfa=uyeler"><i class="fa fa-table"></i>Üyeler</a>
                    </li>
					
					<li>
                        <a <?php if(@$_GET["sayfa"]=="haber-ekle") echo 'class="active-menu"'; ?> href="?sayfa=haber-ekle"><i class="fa fa-edit"></i>Haber Ekle</a>
                    </li>
					
					<li>
                        <a <?php if(@$_GET["sayfa"]=="haberler") echo 'class="active-menu"'; ?> href="?sayfa=haberler"><i class="fa fa-edit"></i>Haberler</a>
                    </li>
					
					<li>
                        <a <?php if(@$_GET["sayfa"]=="yorumlar") echo 'class="active-menu"'; ?> href="?sayfa=yorumlar"><i class="fa fa-edit"></i>Yorumlar</a>
                    </li>
					
					<li>
                        <a href="../" target="_blank"><i class="fa fa-rocket"></i>Proje Sayfası</a>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
					<?php
						$sayfa = @$_GET["sayfa"];
						$kategori = @$_GET["kategori"];

						if($sayfa==null){
							include("main.php");
						}
						else{
							include($sayfa.".php");
						}

					?>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 
	
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    	</script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

</body>

</html>