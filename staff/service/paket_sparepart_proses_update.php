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
$id_paket=$_POST['id_paket'];
$id_mobil=$_POST['id_mobil'];
$id_sparepart=$_POST['id_sparepart'];
$id_sparepart_lama=$_POST['id_sparepart_lama'];
$link=koneksi_db();
$sql="UPDATE paket_sparepart SET id_sparepart = '$id_sparepart' WHERE id_paket = '$id_paket' AND id_mobil = '$id_mobil' AND id_sparepart = '$id_sparepart_lama'";
$res=mysqli_query($link,$sql);
if($res){
	?>
	DATA PAKET SPAREPART TELAH BERHASIL DI UPDATE
	<?php
}
else{
	?>
	DATA PAKET SPAREPART GAGAL DIUPDATE
	<?php
}
?>
</body>
</html>