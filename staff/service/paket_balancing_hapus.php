<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
	include("koneksi.php");
?>
</head>
<body>
<?php
$id_paket=$_REQUEST['id_paket'];
$id_mobil=$_REQUEST['id_mobil'];
$id_balancing=$_REQUEST['id_balancing'];
$sql="delete from paket_balancing_4_roda where id_paket='$id_paket' AND id_mobil='$id_mobil' AND id_balancing='$id_balancing'";
$res=mysqli_query($link,$sql);
if($res){
	?>
	DATA PAKET JASA DENGAN ID JASA <?php echo $id_balancing; ?> TELAH DIHAPUS.
<?php
}
else{
	?>
	DATA PAKET JASA ID JASA <?php echo $id_balancing; ?> GAGAL DIHAPUS.
}
?>
</body>
</html>