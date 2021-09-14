<div class="header">
	<ol class="breadcrumb">
	Yorumlar
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
                                            <th>Ad</th>
                                            <th>Soyad</th>
                                            <th>Yorum</th>
                                            <th>İşlem Yap</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
										<?php
										
										$sorgu = "SELECT yorumlar.*, kullanicilar.id AS kid, kullanicilar.ad, kullanicilar.soyad FROM yorumlar INNER JOIN kullanicilar ON yorumlar.kid = kullanicilar.id WHERE onay=1 ORDER BY id DESC";
									
										$yorumlar = mysqli_query($baglanti, $sorgu);
										while($yorum = mysqli_fetch_array($yorumlar)){
											echo '<tr>';
												echo '<td>'.$yorum["ad"].'</td>';
												echo '<td>'.$yorum["soyad"].'</td>';
												echo '<td>'.$yorum["yorum"].'</td>';
												echo '<td><a class="btn btn-primary" href="?sayfa=yorum-islem&id='.$yorum["id"].'">İŞLEM YAP</a></td>';									
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

