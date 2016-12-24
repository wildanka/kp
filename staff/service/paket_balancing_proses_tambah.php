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
$id_balancing=$_POST['id_balancing'];
$id_mobil=$_POST['id_mobil'];
$link=koneksi_db();
$sql="insert into paket_balancing_4_roda values ('$id_paket','$id_balancing','$id_mobil')";
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