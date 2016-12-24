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
	Id Jasa <input type="text" name="id_jasa" >
	Nama Jasa : <input type="text" name="nama">
	Harga : <input type="text" name="harga">
	<input type="submit" name="simpan" value="Simpan">
</form>
<?php
	if (isset($_POST['simpan'])){
		$id = $_POST['id_jasa'];
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