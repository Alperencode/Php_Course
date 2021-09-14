<div class="header">
	<ol class="breadcrumb">
	Ana Sayfa
	</ol> 
</div>

<?php
	$sorgu = mysqli_query($baglanti, "SELECT * FROM haberler");
	$toplamHaber = mysqli_num_rows($sorgu);

	$sayilar = array(array("Bilim",0), 
					array("Teknoloji",0),
					array("Spor",0),
					array("Sanat",0),
					array("Sağlık",0));

	$sorgu = mysqli_query($baglanti,"SELECT * FROM yorumlar WHERE onay ='0'");
	$o1 = mysqli_num_rows($sorgu); // Onaysız yorum sayısı

	$sorgu = mysqli_query($baglanti,"SELECT * FROM yorumlar WHERE onay ='1'");
	$o2 = mysqli_num_rows($sorgu); // Onaylı yorum sayısı
?>

<div id="page-inner">    
	<div class="row">
	<div class="col-md-12">

		<div class="panel panel-default">
		<div class="panel-body">
		<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover" >
			<thead>
				<tr>
				<th width="300">Bilgi</th>
				<th>Sayı</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td>Toplam Haber Sayısı</td>
				<td><?php echo $toplamHaber; ?></td>
				</tr>
				<?php
				for($i=0;$i<count($sayilar);$i++){
					$kategori = $sayilar[$i][0];
					$sorgu = mysqli_query($baglanti, "SELECT * FROM haberler WHERE kategori='$kategori'");
					$sayilar[$i][1] = mysqli_num_rows($sorgu);
					echo "<tr>
					<td>Toplam ".$sayilar[$i][0]." Kategorisi Haber Sayısı</td>
					<td>".$sayilar[$i][1]."</td>
					</tr>";
				}
				?>
				<tr>
				<td>Onay Bekleyen Yorum Sayısı</td>
				<td><?php echo $o1; ?></td>
				</tr>
				<tr>
				<td>Onaylı Yorum Sayısı</td>
				<td><?php echo $o2; ?></td>
				</tr>
			</tbody>
		</table>
		</div>

		</div>
		</div>
		
	</div>
	</div>
	
</div>
