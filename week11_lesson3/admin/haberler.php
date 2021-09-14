<div class="header">
	<ol class="breadcrumb">
	Haberler
	</ol> 
</div>

<div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Haber Başlığı</th>
                                            <th>Ekleyen</th>
											<th>Kategori</th>
                                            <th>Tarih</th>
                                            <th>Güncelle</th>
                                            <th>Sil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
<?php
										
	$sorgu = "SELECT haberler.*, kullanicilar.id AS kid, kullanicilar.ad, kullanicilar.soyad FROM haberler INNER JOIN kullanicilar ON haberler.ekleyen = kullanicilar.id";
	$veriler = mysqli_query($baglanti, $sorgu);
	while($veri = mysqli_fetch_array($veriler)){
	echo '<tr>';
	echo '<td>'.$veri["baslik"].'</td>';
	echo '<td>'.$veri["ad"].' '.$veri["soyad"].'</td>';
	echo '<td>'.$veri["kategori"].'</td>';
	echo '<td>'.$veri["zaman"].'</td>';
	echo '<td><a class="btn btn-success" href="?sayfa=haber-guncelle&id='.$veri["id"].'">GÜNCELLE</a></td>';
	echo '<td>';

	echo '<a class="btn btn-danger" href="?sayfa=haber-sil&id='.$veri["id"].'">SİL</a>';

	echo '</td>';

	echo '</tr>';
	}


?>

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>

