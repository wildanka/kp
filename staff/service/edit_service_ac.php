<!DOCTYPE html>
<html>
<head>
	<title>Edit Item Balancing</title>
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
<h4>Data Item Balancing</h4>
<?php
if(isset($_POST['edit'])){
	$id = $_REQUEST['id_service_ac'];
	$nama = $_POST['nama_service_ac'];
	$harga = $_POST['harga_service_ac'];

	$query_update = "UPDATE service_ac SET nama='$nama', harga=$harga WHERE id_service_ac='$id';";
	$result_update = mysqli_query($link,$query_update);
	if ($result_update){
		echo "<script type='text/javascript'>
					alert('Data Service AC dengan Id = $id sudah berhasil di update!');
					window.location.href ='lihat_item_estimasi.php';
			  </script>";
	}else{
		echo "Error : ".mysqli_error($link);
	}
}
?>
<form action="" method="post">
<?php
	$id = $_REQUEST['id_service_ac'];
	$query = "SELECT * FROM service_ac WHERE id_service_ac='$id';";
	$result = mysqli_query($link,$query);
	if($result)
	{
	?>
	<table>
			<?php
			while ($data=mysqli_fetch_array($result)) {
			?>
			<tr>
				<td>ID Service AC </td>
				<td>:</td>
				<td><?php echo $data['id_service_ac'];?></td>
			</tr>
			<tr>
				<td>Nama Item</td>
				<td>:</td>
				<td><input type="text" name="nama_service_ac" value='<?php echo $data['nama'];?>'></td>
			</tr>
			<tr>
				<td>Harga(Rp)</td>
				<td>:</td>
				<td><input type="text" name="harga_service_ac" value='<?php echo $data['harga'];?>'></td>
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