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
$id_sparepart=$_REQUEST['id_sparepart'];
$id_mobil=$_REQUEST['id_mobil'];
$link=koneksi_db();
$sql="SELECT paket.id_paket as idpaket, paket.`nama` as namapaket , sparepart.id_sparepart as idsparepart, sparepart.`nama` as namasparepart, sparepart.`harga` as hargasparepart, mobil.id_mobil as idmobil, mobil.`nama` as namamobil
FROM sparepart JOIN paket_sparepart ON sparepart.`id_sparepart` = paket_sparepart.`id_sparepart` 
JOIN paket ON paket_sparepart.`id_paket` = paket.`id_paket` 
JOIN mobil ON paket_sparepart.`id_mobil` =  mobil.`id_mobil`
WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket' AND sparepart.id_sparepart = '$id_sparepart'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)==1)
{
	$data=mysqli_fetch_array($res);
?>
<form method="POST" action="paket_proses_update.php">
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
			<td>ID Sparepart</td>
			<td><input type="text" name="id_sparepart" value="<?=$data['idsparepart']?>"></td>
		</tr>
		<tr>
			<td>Nama Sparepart</td>
			<td><input type="text" name="nama_sparepart" value="<?=$data['namasparepart']?>"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga_sparepart" value="<?=$data['hargasparepart']?>"></td>
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