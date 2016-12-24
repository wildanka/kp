<!DOCTYPE html>
<html>
<head>
<?php
	include("koneksi.php")
?>
	<title></title>
</head>
<body>
<?php
$nip=$_POST['nip'];
$link=koneksi_db();
$sql="select * from admin where nip='$nip'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)==1)
{
	$data=mysqli_fetch_array($res);

}
?>
<form method="POST" action="profil_proses_update.php">
	<table>
		<tr>
			<td colspan="2">EDIT PROFIL</td>
		</tr>
		<tr>
			<td>NIP</td>
			<td><input name="nip" value="<?=$data['NIP']?>" readonly></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td><input name="nama" value="<?=$data['Nama_Lengkap']?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input name="alamat" value="<?=$data['Alamat']?>"></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td><input name="tempatlahir" value="<?=$data['Tempat_Lahir']?>"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input name="tgllahir" value="<?=$data['Tanggal_Lahir']?>"></td>
		</tr>
		<tr>
			<td>No HP</td>
			<td><input name="nohp" value="<?=$data['No_Handphone']?>"></td>
		</tr>
		<tr>
			<td>Tipe Akun</td>
			<td><input name="tipeakun" value="<?=$data['Bagian']?>"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input name="username" value="<?=$data['Username']?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input name="password" value="<?=$data['Password']?>"></td>
		</tr>
			<td>
					<input type="submit" value="Update">
			</td>
	</table>
</form>

</body>
</html>