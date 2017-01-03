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
$id_spooring=$_POST['id_spooring'];
$id_spooring_lama=$_POST['id_spooring_lama'];
$link=koneksi_db();
$sql="UPDATE paket_spooring SET id_spooring = '$id_spooring' WHERE id_paket = '$id_paket' AND id_mobil = '$id_mobil' AND id_spooring = '$id_spooring_lama'";
$res=mysqli_query($link,$sql);
if($res){
	?>
	DATA PAKET SPOORING TELAH BERHASIL DI UPDATE
	<?php
}
else{
	?>
	DATA PAKET SPOORING GAGAL DIUPDATE
	<?php
}
?>
</body>
</html>