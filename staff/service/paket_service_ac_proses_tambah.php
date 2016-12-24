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
$id_service_ac=$_POST['id_service_ac'];
$id_mobil=$_POST['id_mobil'];
$link=koneksi_db();
$sql="insert into paket_serice_ac values ('$id_paket','$id_service_ac','$id_mobil')";
$res=mysqli_query($link,$sql);
if($res)
{
	?>
	DATA TELAH DISIMPAN
	<?php
}
else
{
	?>
	DATA GAGAL DISIMPAN
	<?php
}
?>
</body>
</html>