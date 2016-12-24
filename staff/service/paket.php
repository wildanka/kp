<?php
session_start();

if (!@$_SESSION['service']){
	header("location: ../index.php");
}
include "koneksi.php";
?>

<html>
<head>

</head>
<body>

<form action="" method="post">
	<h4> Data Jasa </h4>
	Id paket <input type="text" name="id_paket" >
	Nama paket: <input type="text" name="nama">
	Waktu Pengerjaan : <input type="text" name="harga">
	<input type="submit" name="simpan" value="Simpan">
</form>
<?php
	if (isset($_POST['simpan'])){
		$id = $_POST['id_paket'];
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
	
		$link = koneksi_db();
	
		$result = mysqli_query($link,"INSERT INTO jasa VALUES('$id','$nama','$harga')");
	
		if ($result) {
			echo "yeaaa data berasil di input ";
		}else{
			echo "data gagal".mysqli_error($link);
		}
	}
?>
    <!--berisi toggle action untuk wrapper-->
    
</body>
</html>