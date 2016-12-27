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
$link=koneksi_db();
?>
<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
<table>
	<tr>
		<td>Mobil</td>
		<td>
			<select name="id_mobil">
			   <option value="">
			   	<?php
			   	$res=mysqli_query($link,"select id_mobil, nama from mobil");
			   	while($data=mysqli_fetch_array($res))
			   	{
			   		echo "<option value=\"".$data['id_mobil']."\">".$data['nama']."</option>";
			   	}
			   	?>
			   </option>
			</select>
		</td>
	</tr>
	<tr>
		<td>ID Paket</td>
		<td>
			<select name="id_paket">
				<option value="">	
				<?php
			   	$res=mysqli_query($link,"select id_paket, nama from paket");
			   	while($data=mysqli_fetch_array($res))
			   	{
			   		echo "<option value=\"".$data['id_paket']."\">".$data['nama']."</option>";
			   	}
			   	?>
				</option>
			</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="lihat" value="Lihat"></td>
	</tr>
</table>
</form>

<?php 
if(isset($_POST['lihat']))
{
$id_mobil=$_POST['id_mobil'];
$id_paket=$_POST['id_paket'];
$sql="SELECT paket.`nama` as namapaket , jasa.`nama` as namajasa, jasa.`harga` as hargajasa, mobil.`nama` as namamobil
FROM jasa JOIN paket_jasa ON jasa.`id_jasa` = paket_jasa.`id_jasa` 
JOIN paket ON paket_jasa.`id_paket` = paket.`id_paket` 
JOIN mobil ON paket_jasa.`id_mobil` =  mobil.`id_mobil`
WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket' 

UNION

SELECT paket.`nama` as namapaket , sparepart.`nama` as namasparepart, sparepart.`harga` as hargasparepart, mobil.`nama` as namamobil
FROM sparepart JOIN paket_sparepart ON sparepart.`id_sparepart` = paket_sparepart.`id_sparepart` 
JOIN paket ON paket_sparepart.`id_paket` = paket.`id_paket` 
JOIN mobil ON paket_sparepart.`id_mobil` =  mobil.`id_mobil`
WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket'  

UNION

SELECT paket.`nama` as namapaket, balancing_4_roda.`nama` as namabalancing, balancing_4_roda.`harga` as hargabalancing, mobil.`nama` as namamobil
FROM balancing_4_roda JOIN paket_balancing_4_roda ON balancing_4_roda.`id_balancing` = paket_balancing_4_roda.`id_balancing` 
JOIN paket ON paket_balancing_4_roda.`id_paket` = paket.`id_paket` 
JOIN mobil ON paket_balancing_4_roda.`id_mobil` =  mobil.`id_mobil`
WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket'  

UNION

SELECT paket.`nama` as namapaket, spooring.`nama` as namaspooring, spooring.`harga` as namaspooring, mobil.`nama` as namamobil
FROM spooring JOIN `paket_spooring` ON spooring.`id_spooring` = paket_spooring.`id_spooring` 
JOIN paket ON paket_spooring.`id_paket` = paket.`id_paket` 
JOIN mobil ON paket_spooring.`id_mobil` =  mobil.`id_mobil`
WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket'  

UNION

SELECT paket.`nama` as namapaket, service_ac.`nama` as namaserviceac, service_ac.`harga` as hargaserviceac, mobil.`nama` as namamobil
FROM service_ac JOIN `paket_service_ac` ON service_ac.`id_service_ac` = paket_service_ac.`id_service_ac` 
JOIN paket ON paket_service_ac.`id_paket` = paket.`id_paket` 
JOIN mobil ON paket_service_ac.`id_mobil` =  mobil.`id_mobil`
WHERE mobil.`id_mobil`= '$id_mobil' AND paket.`id_paket` = '$id_paket'";

$res=mysqli_query($link,$sql);
if($res)
{
?>
	<table>
		<tr>
			<td>Paket</td>
			<td>Item</td>
			<td>Harga</td>
			<!-- add list here -->
		</tr>
		<?php 
		$i=0;
		while ($data=mysqli_fetch_array($res)) {
			$i++;
		?>
			<tr>
				<td><?php echo $data['namapaket'];?></td>
				<td><?php echo $data['namajasa'];?></td>
				<td><?php echo $data['hargajasa'];?></td>
				<!-- add list here -->
			</tr>
		<?php
		}
		?>
		<?php 
		$j=0;
		while ($data=mysqli_fetch_array($res)) {
			$j++;
		?>
			<tr>
				<td><?php echo $data['namapaket'];?></td>
				<td><?php echo $data['namasparepart'];?></td>
				<td><?php echo $data['hargasparepart'];?></td>
				<!-- add list here -->
			</tr>
		<?php
		}
		?>
		<?php 
		$k=0;
		while ($data=mysqli_fetch_array($res)) {
			$k++;
		?>
			<tr>
				<td><?php echo $data['namapaket'];?></td>
				<td><?php echo $data['namabalancing_4_roda'];?></td>
				<td><?php echo $data['hargabalancing_4_roda'];?></td>
				<!-- add list here -->
			</tr>
		<?php
		}
		?>
		<?php 
		$l=0;
		while ($data=mysqli_fetch_array($res)) {
			$l++;
		?>
			<tr>
				<td><?php echo $data['namapaket'];?></td>
				<td><?php echo $data['namaspooring'];?></td>
				<td><?php echo $data['hargaspooring'];?></td>
				<!-- add list here -->
			</tr>
		<?php
		}
		?>
		<?php 
		$m=0;
		while ($data=mysqli_fetch_array($res)) {
			$m++;
		?>
			<tr>
				<td><?php echo $data['namapaket'];?></td>
				<td><?php echo $data['namaserviceac'];?></td>
				<td><?php echo $data['hargaserviceac'];?></td>
				<!-- add list here -->
			</tr>
		<?php
		}
		?>
	</table>
<?php
}
}
?>
</body>
</html>
