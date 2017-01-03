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
$id_balancing=$_POST['id_balancing'];
$id_balancing_lama=$_POST['id_balancing_lama'];
$link=koneksi_db();
$sql="UPDATE paket_balancing_4_roda SET id_balancing = '$id_balancing' WHERE id_paket = '$id_paket' AND id_mobil = '$id_mobil' AND id_balancing = '$id_balancing_lama'";
$res=mysqli_query($link,$sql);
if($res){
	?>
	DATA PAKET BALANCING TELAH BERHASIL DI UPDATE
	<?php
}
else{
	?>
	DATA PAKET BALANCING GAGAL DIUPDATE
	<?php
}
?>
</body>
</html>