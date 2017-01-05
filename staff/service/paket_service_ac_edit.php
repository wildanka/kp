<!DOCTYPE html>
<html>
<head>
<?php
include("koneksi.php"); 
?>
	<title></title>
</head>
<body>
<?php
$id_paket=$_REQUEST['id_paket'];
$id_service_ac=$_REQUEST['id_service_ac'];
$id_mobil=$_REQUEST['id_mobil'];
$link=koneksi_db();
$sql="SELECT paket.id_paket as idpaket, paket.`nama` as namapaket, service_ac.id_service_ac as idserviceac, service_ac.`nama` as namaserviceac, service_ac.`harga` as hargaserviceac, mobil.id_mobil as idmobil, mobil.`nama` as namamobil
FROM service_ac JOIN `paket_service_ac` ON service_ac.`id_service_ac` = paket_service_ac.`id_service_ac` 
JOIN paket ON paket_service_ac.`id_paket` = paket.`id_paket` 
JOIN mobil ON paket_service_ac.`id_mobil` =  mobil.`id_mobil`
WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket' AND service_ac.id_service_ac = '$id_service_ac'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)==1)
{
	$data=mysqli_fetch_array($res);
	$harga=$data['hargaserviceac'];
	$service_ac=$data['namaserviceac'];
?>
<form method="POST" action="paket_service_ac_proses_update.php">
	<table>
		<tr>
			<td>ID Mobil</td>
			<td><input type="text" name="id_mobil" value="<?=$data['idmobil']?>"></td>
		</tr>
		<tr>
			<td>Nama Mobil</td>
			<td><input type="text" name="nama_mobil" value="<?=$data['namamobil']?>"></td>
		</tr>
		<tr>
			<td>ID Paket</td>
			<td><input type="text" name="id_paket" value="<?=$data['idpaket']?>"></td>
		</tr>
		<tr>
			<td>Nama Paket</td>
			<td><input type="text" name="nama_paket" value="<?=$data['namapaket']?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="id_servic_ac_lama" value="<?=$data['idserviceac']?>"></td>
		</tr>
		<tr>
			<td>Service AC</td>
			<td>
				<select name="id_service_ac" >
						<option value="<?=$data['idserviceac']?>"><?=$data['namaserviceac']?>
						<?php
						$res1=mysqli_query($link,"select id_service_ac, nama from service_ac order by nama");
						while($data=mysqli_fetch_array($res1))
						{
							echo "<option value=\"".$data['id_service_ac']."\">".$data['nama']."</option>";
						}
						?>
						</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga_service_ac" value="<?php echo "$harga"?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="" value="UPDATE"></td>
		</tr>
	</table>
</form>
<?php
}
else {
	?>
	DATA TIDAK DITEMUKAN
	<?php
}
?>
</body>
</html>