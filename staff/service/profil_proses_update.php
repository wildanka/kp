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
$nip=$_POST['nip'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tempatlahir=$_POST['tempatlahir'];
$tgllahir=$_POST['tgllahir'];
$nohp=$_POST['nohp'];
$tipeakun=$_POST['tipeakun'];
$username=$_POST['username'];
$password=$_POST['password'];
$link=koneksi_db();
$sql="update admin set Nama_Lengkap='$nama', Alamat='$alamat', Tempat_Lahir='$tempatlahir', Tanggal_Lahir='$tgllahir', No_Handphone='$nohp', Bagian='$tipeakun', Username='$username', Password='$password' where NIP='$nip'";
$res=mysqli_query($link,$sql);
if($res)
{
	?>
	DATA PROFIL DENGAN NIP <?=$nip?> TELAH DIUPDATE
	<?php
}
else
{
	?>
	DATA PROFIL DENGAN NIP <?=$nip?> GAGAL DIUPDATE
	<?php
}
?>
</body>
</html>