<html>
<head>
	<title>Tampilkan Paket</title>
	<?php
		include "koneksi.php";
		include 'inc/import.php';
	?>
	<link rel="stylesheet" type="text/css" href="css/template.css">


</head>
<body>
<?php 
$link=koneksi_db();
?>
<!--seluruh halaman-->
	<div id="wrapper">

        <!--Sidebar-->
        <?php
            include "sidebar.php";
        ?>

		<!-- bagian konten -->
		<div id="content-page">
			<div class="container-fluid" >
				<div class="row" id="">
					<div class="col-lg-12 ">
						<div class="row bekgron">
							<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 "> <!--col-lg-pull-11 col-md-pull-10 col-sm-pull-11-->
								<a href="#" id="menu-toggle"> <i class="glyphicon glyphicon-align-justify glyphicon-sedang"></i></a>
							</div>
							<div class="col-lg-11 col-md-11 col-sm-2 visible-xs-block, hidden-xs"> <!--col-lg-push-1 col-md-push-1 col-sm-push-1-->
								<h3 class="center">Lihat Paket</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="content">
						<h3>Lihat Data Paket</h3>
						<hr>
						<!-- konten utama -->
						<form class="form-horizontal" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
							<div class="form-group">
								<label class="col-sm-2 control-label">Mobil</label>
								<div class="col-md-4">
									<select class="form-control" name="id_mobil">
										<option value="" disabled selected hidden>Pilih Mobil</option>
										<?php
										$res=mysqli_query($link,"select id_mobil, nama from mobil");
										while($data=mysqli_fetch_array($res))
										{
											echo "<option value=\"".$data['id_mobil']."\">".$data['nama']."</option>";
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Paket</label>
								<div class="col-md-4">
									<select class="form-control" name="id_paket">
										<option value="" disabled selected hidden>Pilih Paket</option>
										<?php
										$res=mysqli_query($link,"select id_paket, nama from paket");
										while($data=mysqli_fetch_array($res))
										{
											echo "<option value=\"".$data['id_paket']."\">".$data['nama']."</option>";
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<input type="submit" name="lihat" value="Lihat">
								</div>
							</div>
						</form>

						<!--<table border="1">
							<tr>
								<td>Mobil</td>
								<td>
								</td>
							</tr>
							<tr>
								<td>Paket</td>
								<td>

								</td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="lihat" value="Lihat"></td>
							</tr>
						</table>-->

						<?php 
						if(isset($_POST['lihat']))
						{
						$id_mobil=$_POST['id_mobil'];
						$id_paket=$_POST['id_paket'];
						$sql1="SELECT paket.id_paket as idpaket, paket.`nama` as namapaket , jasa.id_jasa as idjasa, jasa.`nama` as namajasa, jasa.`harga` as hargajasa, mobil.id_mobil as idmobil, mobil.`nama` as namamobil
						FROM jasa JOIN paket_jasa ON jasa.`id_jasa` = paket_jasa.`id_jasa` 
						JOIN paket ON paket_jasa.`id_paket` = paket.`id_paket` 
						JOIN mobil ON paket_jasa.`id_mobil` =  mobil.`id_mobil`
						WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket'"; 
						$sql2="SELECT paket.id_paket as idpaket, paket.`nama` as namapaket , sparepart.id_sparepart as idsparepart, sparepart.`nama` as namasparepart, sparepart.`harga` as hargasparepart, mobil.id_mobil as idmobil, mobil.`nama` as namamobil
						FROM sparepart JOIN paket_sparepart ON sparepart.`id_sparepart` = paket_sparepart.`id_sparepart` 
						JOIN paket ON paket_sparepart.`id_paket` = paket.`id_paket` 
						JOIN mobil ON paket_sparepart.`id_mobil` =  mobil.`id_mobil`
						WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket'";
						$sql3="SELECT paket.id_paket as idpaket, paket.`nama` as namapaket, spooring.id_spooring as idspooring, spooring.`nama` as namaspooring, spooring.`harga` as hargaspooring, mobil.id_mobil as idmobil, mobil.`nama` as namamobil
						FROM spooring JOIN `paket_spooring` ON spooring.`id_spooring` = paket_spooring.`id_spooring` 
						JOIN paket ON paket_spooring.`id_paket` = paket.`id_paket` 
						JOIN mobil ON paket_spooring.`id_mobil` =  mobil.`id_mobil`
						WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket'";
						$sql4="SELECT paket.id_paket as idpaket, paket.`nama` as namapaket, balancing_4_roda.id_balancing as idbalancing, balancing_4_roda.`nama` as namabalancing, balancing_4_roda.`harga` as hargabalancing, mobil.id_mobil as idmobil, mobil.`nama` as namamobil
						FROM balancing_4_roda JOIN paket_balancing_4_roda ON balancing_4_roda.`id_balancing` = paket_balancing_4_roda.`id_balancing` 
						JOIN paket ON paket_balancing_4_roda.`id_paket` = paket.`id_paket` 
						JOIN mobil ON paket_balancing_4_roda.`id_mobil` =  mobil.`id_mobil`
						WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket'";
						$sql5="SELECT paket.id_paket as idpaket, paket.`nama` as namapaket, service_ac.id_service_ac as idserviceac, service_ac.`nama` as namaserviceac, service_ac.`harga` as hargaserviceac, mobil.id_mobil as idmobil, mobil.`nama` as namamobil
						FROM service_ac JOIN `paket_service_ac` ON service_ac.`id_service_ac` = paket_service_ac.`id_service_ac` 
						JOIN paket ON paket_service_ac.`id_paket` = paket.`id_paket` 
						JOIN mobil ON paket_service_ac.`id_mobil` =  mobil.`id_mobil`
						WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket'";
						$res1=mysqli_query($link,$sql1);
						$res2=mysqli_query($link,$sql2);
						$res3=mysqli_query($link,$sql3);
						$res4=mysqli_query($link,$sql4);
						$res5=mysqli_query($link,$sql5);
						if($res1)
						{
						?>
							<table>
								<tr>
									<td>Paket</td>
									<td>Item</td>
									<td>Harga</td>
								</tr>

								<?php 
								$i=0;
								while ($data1=mysqli_fetch_array($res1)) {
									$i++;
								?>
									<tr>
										<td><?php echo $data1['namapaket'];?></td>
										<td><?php 
										echo "<a href='paket_jasa_edit.php?id_paket=$data1[idpaket]&id_mobil=$data1[idmobil]&id_jasa=$data1[idjasa]'>";?>
										<?php echo $data1['namajasa'];?></a></td>
										<td><?php echo $data1['hargajasa'];?></td>
										<td><?php echo "<a href='paket_jasa_hapus.php?id_paket=$data1[idpaket]&id_mobil=$data1[idmobil]&id_jasa=$data1[idjasa]'><img src='hapus.png' border='0'></a>";?></td>
									</tr>
								<?php
								}
								?>
						<?php
						}
						if($res2)
						{
						?>
								<?php 
								$i=0;
								while ($data2=mysqli_fetch_array($res2)) {
									$i++;
								?>
									<tr>
										<td><?php echo $data2['namapaket'];?></td>
										<td><?php 
										echo "<a href='paket_sparepart_edit.php?id_paket=$data2[idpaket]&id_mobil=$data2[idmobil]&id_sparepart=$data2[idsparepart]'>";?>
										<?php echo $data2['namasparepart'];?></a></td>
										<td><?php echo $data2['hargasparepart'];?></td>
										<td><?php echo "<a href='paket_sparepart_hapus.php?id_paket=$data2[idpaket]&id_mobil=$data2[idmobil]&id_sparepart=$data2[idsparepart]'><img src='hapus.png' border='0'></a>";?></td>
									</tr>
								<?php
								}
								?>
						<?php
						}
						if($res3)
						{
						?>
								<?php 
								$i=0;
								while ($data3=mysqli_fetch_array($res3)) {
									$i++;
								?>
									<tr>
										<td><?php echo $data3['namapaket'];?></td>
										<td><?php 
										echo "<a href='paket_spooring_edit.php?id_paket=$data3[idpaket]&id_mobil=$data3[idmobil]&id_spooring=$data3[idspooring]'>";?>
										<?php echo $data3['namaspooring'];?></td>
										<td><?php echo $data3['hargaspooring'];?></td>
										<td><?php echo "<a href='paket_spooring_hapus.php?id_paket=$data3[idpaket]&id_mobil=$data3[idmobil]&id_spooring=$data3[idspooring]'><img src='hapus.png' border='0'></a>";?></td>
									</tr>
								<?php
								}
								?>
						<?php
						}
						if($res4)
						{
						?>
								<?php 
								$i=0;
								while ($data4=mysqli_fetch_array($res4)) {
									$i++;
								?>
									<tr>
										<td><?php echo $data['namapaket'];?></td>
										<td><?php
											echo "<a href='paket_balancing_edit.php?id_paket=$data4[idpaket]&id_mobil=$data4[idmobil]&id_balancing=$data4[idbalancing]'>";?>
										<?php echo $data4['namabalancing'];?></td>
										<td><?php echo $data4['hargabalancing'];?></td>
										<td><?php echo "<a href='paket_balancing_hapus.php?id_paket=$data4[idpaket]&id_mobil=$data4[idmobil]&id_balancing=$data4[idbalancing]'><img src='hapus.png' border='0'></a>";?></td>
									</tr>
								<?php
								}
								?>
						<?php
						}
						if($res5)
						{
						?>
								<?php 
								$i=0;
								while ($data5=mysqli_fetch_array($res5)) {
									$i++;
								?>
									<tr>
										<td><?php echo $data['namapaket'];?></td>
										<td><?php
											echo "<a href='paket_service_ac_edit.php?id_paket=$data5[idpaket]&id_mobil=$data5[idmobil]&id_service_ac=$data5[idserviceac]'>";?>
										<?php echo $data5['namaserviceac'];?></td>
										<td><?php echo $data5['hargaserviceac'];?></td>
										<td><?php echo "<a href='paket_service_ac_hapus.php?id_paket=$data5[idpaket]&id_mobil=$data5[idmobil]&id_service_ac=$data5[idserviceac]'><img src='hapus.png' border='0'></a>";?></td>
									</tr>
								<?php
								}
								?>
							</table>
						<?php
						}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--berisi toggle action untuk wrapper-->
    <script src="js/js-essential.js"></script>

</body>
</html>