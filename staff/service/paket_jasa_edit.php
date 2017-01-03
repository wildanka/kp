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
$id_jasa=$_REQUEST['id_jasa'];
$id_mobil=$_REQUEST['id_mobil'];
$link=koneksi_db();
$sql="SELECT paket.id_paket as idpaket, paket.`nama` as namapaket , jasa.id_jasa as idjasa, jasa.`nama` as namajasa, jasa.`harga` as hargajasa, mobil.id_mobil as idmobil, mobil.`nama` as namamobil
FROM jasa JOIN paket_jasa ON jasa.`id_jasa` = paket_jasa.`id_jasa` 
JOIN paket ON paket_jasa.`id_paket` = paket.`id_paket` 
JOIN mobil ON paket_jasa.`id_mobil` =  mobil.`id_mobil`
WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket' AND jasa.id_jasa = '$id_jasa'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)==1)
{
	$data=mysqli_fetch_array($res);
	$harga=$data['hargajasa'];
	$jasa=$data['namajasa'];
?>
<form method="POST" action="paket_jasa_proses_update.php">
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
			<td><input type="hidden" name="id_jasa_lama" value="<?=$data['idjasa']?>"></td>
		</tr>
		<tr>
			<td>Jasa Baru</td>
			<td>
				<select name="id_jasa" >
						<option value="<?=$data['idjasa']?>"><?=$data['namajasa']?>
						<?php
						$res1=mysqli_query($link,"select id_jasa, nama from jasa order by nama");
						while($data=mysqli_fetch_array($res1))
						{
							echo "<option value=\"".$data['id_jasa']."\">".$data['nama']."</option>";
						}
						?>
						</option>
				</select>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga_jasa" value="<?php echo "$harga"?>"></td>
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