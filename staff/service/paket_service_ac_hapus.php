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
$id_service_ac=$_REQUEST['id_service_ac'];
$sql="delete from paket_service_ac where id_paket='$id_paket' AND id_mobil='$id_mobil' AND id_service_ac='$id_service_ac'";
$res=mysqli_query($link,$sql);
if($res){
	?>
	DATA PAKET JASA DENGAN ID JASA <?php echo $id_service_ac; ?> TELAH DIHAPUS.
<?php
}
else{
	?>
	DATA PAKET JASA ID JASA <?php echo $id_service_ac; ?> GAGAL DIHAPUS.
}
?>
</body>
</html>