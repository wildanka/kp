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
$id_balancing=$_REQUEST['id_balancing'];
$id_mobil=$_REQUEST['id_mobil'];
$link=koneksi_db();
$sql="SELECT paket.id_paket as idpaket, paket.`nama` as namapaket, balancing_4_roda.id_balancing as idbalancing, balancing_4_roda.`nama` as namabalancing, balancing_4_roda.`harga` as hargabalancing, mobil.id_mobil as idmobil, mobil.`nama` as namamobil
FROM balancing_4_roda JOIN paket_balancing_4_roda ON balancing_4_roda.`id_balancing` = paket_balancing_4_roda.`id_balancing` 
JOIN paket ON paket_balancing_4_roda.`id_paket` = paket.`id_paket` 
JOIN mobil ON paket_balancing_4_roda.`id_mobil` =  mobil.`id_mobil`
WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket' AND balancing_4_roda.id_balancing = '$id_balancing'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)==1)
{
	$data=mysqli_fetch_array($res);
	$harga=$data['hargabalancing'];
	$balancing=$data['namabalancing'];
?>
<form method="POST" action="paket_balaning_proses_update.php">
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
			<td><input type="hidden" name="id_balancing_lama" value="<?=$data['idbalancing']?>"></td>
		</tr>
		<tr>
			<td>Balancing</td>
			<td>
				<select name="id_balancing" >
						<option value="<?=$data['idbalancing']?>"><?=$data['namabalancing']?>
						<?php
						$res1=mysqli_query($link,"select id_balancing, nama from balancing_4_roda order by nama");
						while($data=mysqli_fetch_array($res1))
						{
							echo "<option value=\"".$data['id_balancing']."\">".$data['nama']."</option>";
						}
						?>
						</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga_balancing" value="<?php echo "$harga"?>"></td>
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