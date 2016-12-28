<!DOCTYPE html>
<html>
<head>
	<title>Edit Jasa</title>
	<?php
	session_start();
	if (!@$_SESSION['service']){
		header("location: ../index.php");
	}
	include "koneksi.php";
	$link = koneksi_db();
?>
</head>
<body>
<h4>Data Jasa Service</h4>
<?php
if(isset($_POST['edit'])){
	$id = $_REQUEST['id_jasa'];
	$nama = $_POST['nama_jasa'];
	$harga = $_POST['harga_jasa'];

	$query_update = "UPDATE jasa SET nama='$nama', harga=$harga WHERE id_jasa='$id';";
	$result_update = mysqli_query($link,$query_update);
	if ($result_update){
		echo "<script type='text/javascript'>
					alert('Data Jasa dengan Id = $id sudah berhasil di update!');
					window.location.href ='lihat_item_estimasi.php';
			  </script>";
	}else{
		echo "Error : ".mysqli_error($link);
	}
}
?>
<form action="" method="post">
<?php
	$id = $_REQUEST['id_jasa'];
	$query = "SELECT * FROM jasa WHERE id_jasa='$id';";
	$result = mysqli_query($link,$query);
	if($result)
	{
	?>
	<table>
			<?php
			while ($data=mysqli_fetch_array($result)) {
			?>
			<tr>
				<td>ID Jasa</td>
				<td>:</td>
				<td><?php echo $data['id_jasa'];?></td>
			</tr>
			<tr>
				<td>Nama Jasa</td>
				<td>:</td>
				<td><input type="text" name="nama_jasa" value='<?php echo $data['nama'];?>'></td>
			</tr>
			<tr>
				<td>Harga(Rp)</td>
				<td>:</td>
				<td><input type="text" name="harga_jasa" value='<?php echo $data['harga'];?>'></td>
			</tr>	
			<?php
			}
			?>
	</table>
	<input type="submit" name="edit" value="Edit" onclick="alert();"></input>
</form>
<?php
	}else
	{
		echo "Error : ".mysqli_error($link);
	}
?>
</body>
</html>