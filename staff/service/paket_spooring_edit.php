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
$id_spooring=$_REQUEST['id_spooring'];
$id_mobil=$_REQUEST['id_mobil'];
$link=koneksi_db();
$sql="SELECT paket.id_paket as idpaket, paket.`nama` as namapaket, spooring.id_spooring as idspooring, spooring.`nama` as namaspooring, spooring.`harga` as hargaspooring, mobil.id_mobil as idmobil, mobil.`nama` as namamobil
FROM spooring JOIN `paket_spooring` ON spooring.`id_spooring` = paket_spooring.`id_spooring` 
JOIN paket ON paket_spooring.`id_paket` = paket.`id_paket` 
JOIN mobil ON paket_spooring.`id_mobil` =  mobil.`id_mobil`
WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket' AND spooring.id_spooring='$id_spooring'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)==1)
{
	$data=mysqli_fetch_array($res);
	$harga=$data['hargaspooring'];
	$spooring=$data['namaspooring'];
?>
<form method="POST" action="paket_spooring_proses_update.php">
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
			<td><input type="hidden" name="id_spooring_lama" value="<?=$data['idspooring']?>"></td>
		</tr>
		<tr>
			<td>Spooring</td>
			<td>
				<select name="id_spooring" >
						<option value="<?=$data['idspooring']?>"><?=$data['namaspooring']?>
						<?php
						$res1=mysqli_query($link,"select id_spooring, nama from spooring order by nama");
						while($data=mysqli_fetch_array($res1))
						{
							echo "<option value=\"".$data['id_spooring']."\">".$data['nama']."</option>";
						}
						?>
						</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga_spooring" value="<?php echo "$harga"?>"></td>
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