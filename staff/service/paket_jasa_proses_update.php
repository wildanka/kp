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
$id_jasa=$_POST['id_jasa'];
$id_jasa_lama=$_POST['id_jasa_lama'];
$link=koneksi_db();
$sql="UPDATE paket_jasa SET id_jasa = '$id_jasa' WHERE id_paket = '$id_paket' AND id_mobil = '$id_mobil' AND id_jasa = '$id_jasa_lama'";
$res=mysqli_query($link,$sql);
if($res){
	?>
	DATA PAKET JASA TELAH BERHASIL DI UPDATE
	<?php
}
else{
	?>
	DATA PAKET JASA GAGAL DIUPDATE
	<?php
}
?>
</body>
</html>