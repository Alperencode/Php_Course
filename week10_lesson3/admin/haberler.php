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
                                            <th>Tarih</th>
                                            <th>Güncelle</th>
                                            <th>Sil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
<?php

	$sorgu = "SELECT * FROM haberler";
	$haberler = mysqli_query($baglanti, $sorgu);
	while($haber = mysqli_fetch_array($haberler)){
	echo '<tr>';
	echo '<td>'.$haber["baslik"].'</td>';
	
		
	$eID = $haber["ekleyen"];

	$esorgu = "SELECT * FROM kullanicilar WHERE id='$eID'";
	$esonuc = mysqli_query($baglanti, $esorgu);
	$esatir = mysqli_fetch_array($esonuc);
		
	echo '<td>'.$esatir["ad"].' '.$esatir["soyad"].'</td>';
	echo '<td>'.$haber["zaman"].'</td>';
	echo '<td><a class="btn btn-success" href="?sayfa=haber-guncelle&id='.$haber["id"].'">GÜNCELLE</a></td>';
	echo '<td>';

	echo '<a class="btn btn-danger" href="?sayfa=haber-sil&id='.$haber["id"].'">SİL</a>';

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

