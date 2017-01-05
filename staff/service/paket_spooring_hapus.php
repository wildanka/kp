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
$id_spooring=$_REQUEST['id_spooring'];
$sql="delete from paket_spooring where id_paket='$id_paket' AND id_mobil='$id_mobil' AND id_spooring='$id_spooring'";
$res=mysqli_query($link,$sql);
if($res){
	?>
	DATA PAKET JASA DENGAN ID JASA <?php echo $id_spooring; ?> TELAH DIHAPUS.
<?php
}
else{
	?>
	DATA PAKET JASA ID JASA <?php echo $id_spooring; ?> GAGAL DIHAPUS.
<?php
}
?>
</body>
</html>