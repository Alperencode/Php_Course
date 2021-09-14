            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Ad</th>
                                            <th>Soyad</th>
                                            <th>e-Posta</th>
                                            <th>Güncelle</th>
                                            <th>Sil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
										<?php
										
										$sorgu = "SELECT * FROM kullanicilar";
										$uyeler = mysqli_query($baglanti, $sorgu);
										while($uye = mysqli_fetch_array($uyeler)){
											echo '<tr>';
												echo '<td>'.$uye["ad"].'</td>';
												echo '<td>'.$uye["soyad"].'</td>';
												echo '<td>'.$uye["eposta"].'</td>';
												echo '<td><a class="btn btn-success" href="?sayfa=uye-guncelle&id='.$uye["id"].'">GÜNCELLE</a></td>';
												echo '<td>';
											if($uye["yetki"]==0){
											echo '<a class="btn btn-danger" href="?sayfa=uye-sil&id='.$uye["id"].'">SİL</a>';
											}
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

