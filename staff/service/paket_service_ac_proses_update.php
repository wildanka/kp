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
$id_service_ac=$_POST['id_service_ac'];
$id_service_ac_lama=$_POST['id_service_ac_lama'];
$link=koneksi_db();
$sql="UPDATE paket_service_ac SET id_service_ac = '$id_service_ac' WHERE id_paket = '$id_paket' AND id_mobil = '$id_mobil' AND id_service_ac = '$id_service_ac_lama'";
$res=mysqli_query($link,$sql);
if($res){
	?>
	DATA PAKET SERVICE AC TELAH BERHASIL DI UPDATE
	<?php
}
else{
	?>
	DATA PAKET SERVICE AC GAGAL DIUPDATE
	<?php
}
?>
</body>
</html>