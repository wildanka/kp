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
$id_jasa=$_REQUEST['id_jasa'];
$sql="delete from paket_jasa where id_paket='$id_paket' AND id_mobil='$id_mobil' AND id_jasa='$id_jasa'";
$res=mysqli_query($link,$sql);
if($res){
	?>
	DATA PAKET JASA DENGAN ID JASA <?php echo $id_jasa; ?> TELAH DIHAPUS.
<?php
}
else{
	?>
	DATA PAKET JASA ID JASA <?php echo $id_jasa; ?> GAGAL DIHAPUS.
}
?>
</body>
</html>