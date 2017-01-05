<html>
<head>
	<title></title>
<?php
	include("koneksi.php");
?>
</head>
<body>
<?php
$link = koneksi_db();
$id_paket=$_REQUEST['id_paket'];
$id_mobil=$_REQUEST['id_mobil'];
$id_sparepart=$_REQUEST['id_sparepart'];
$sql="delete from paket_sparepart where id_paket='$id_paket' AND id_mobil='$id_mobil' AND id_sparepart='$id_sparepart'";
$res=mysqli_query($link,$sql);
if($res){
	?>
	DATA PAKET JASA DENGAN ID JASA <?php echo $id_sparepart; ?> TELAH DIHAPUS.
<?php
}
else{
	?>
	DATA PAKET JASA ID JASA <?php echo $id_sparepart; ?> GAGAL DIHAPUS.
<?php
}
?>
</body>
</html>