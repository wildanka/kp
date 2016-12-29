<!DOCTYPE html>
<?php
session_start();

if (!@$_SESSION['service']){
	header("location: ../index.php");
}
	include "koneksi.php";
	$link = koneksi_db();
?>

<html>
<head>

</head>
<body>

<form action="" method="post">
	<table width="100%">
		<tr>
			<td width="50%">
				<input type="text" size="50" name="cari" placeholder="Cari Data Berdasarkan Nama Item"></input>
				<input type="submit" name='caridata' value="Cari Data"></input>
			</td>
			<td width="50%" align="right">
				Filter By : <select name="paket">
								<option value="jasa">Jasa</option>
								<option value="sparepart">Sparepart</option>
								<option value="balancing_4_roda">Balancing</option>
								<option value="spooring">Spooring</option>
								<option value="service_ac">Service AC</option>
							</select>
				<input type="submit" name="ok" value="Filter"></input>	
			</td>
		</tr>
	</table>
</form>
<hr>

<?php
if((!isset($_POST['ok'])) && (!isset($_POST['caridata']))){
?>
<h2 align="center"> Data Item Paket </h2>
<?php

	$query_tampil_semua_data = "SELECT * FROM jasa UNION 
								SELECT * FROM sparepart UNION 
								SELECT * FROM balancing_4_roda UNION 
								SELECT * FROM spooring UNION SELECT * FROM service_ac;";
	$res_semua_data = mysqli_query($link,$query_tampil_semua_data);
	if($res_semua_data)
	{
		?>
			<table width="100%" border="1">
				<tr>
					<td align="center">Id Item</td>
					<td align="center">Nama Item</td>
					<td align="center">Harga(Rp)</td>
					<td></td>
				</tr>
			<?php		
				$i=0;
				while($data=mysqli_fetch_array($res_semua_data)){
					$i++;
			?>
				<tr>
					<td><?php echo $data['id_jasa'];?></td>
					<td><?php echo $data['nama'];?></td>
					<td><?php echo $data['harga'];?></td>
				</tr>	
			<?php
		}
		?>
			</table>
		<?php
	}
// menampilkan data cari
}else if (isset($_POST['caridata'])){
	$key_cari = $_POST['cari'];
	$query_cari_data = "SELECT * FROM jasa WHERE nama='$key_cari' UNION
						SELECT * FROM sparepart WHERE nama='$key_cari' UNION
						SELECT * FROM balancing_4_roda WHERE nama='$key_cari' UNION
						SELECT * FROM spooring WHERE nama='$key_cari' UNION
						SELECT * FROM service_ac WHERE nama='$key_cari'";
	$result_cari = mysqli_query($link,$query_cari_data);

	if ($result_cari) {
		?>
			<table width="100%" border="1">
				<tr>
					<td align="center">Id Item</td>
					<td align="center">Nama Item</td>
					<td align="center">Harga(Rp)</td>
					<td></td>
				</tr>
			<?php		
				$i=0;
				while($data=mysqli_fetch_array($result_cari)){
					$i++;
			?>
				<tr>
					<td><?php echo $data['id_jasa'];?></td>
					<td><?php echo $data['nama'];?></td>
					<td><?php echo $data['harga'];?></td>
					<td>
						<?php
							$karakter = $data['id_jasa'];
							$id_ = substr($karakter,0,1);
							$id_2 = substr($karakter,0,2);
							if($id_ == 'j'){
								echo "
										<a href='edit_jasa.php?id_jasa=$karakter'>
										<img src='img/edit.png'/></a>";
								}else if(($id_ == 'S') && ($id_2 != 'SP')){
									echo "
										<a href='edit_sparepart.php?id_sparepart=$karakter'>
										<img src='img/edit.png'/></a>";
									}else if($id_2 == 'SP'){
										echo "
											<a href='edit_spooring.php?id_spooring=$karakter'>
											<img src='img/edit.png'/></a>";
										}else if($id_ == 'B'){
											echo "
											<a href='edit_balancing.php?id_balancing=$karakter'>
											<img src='img/edit.png'/></a>";
											}else{
												echo "
													<a href='edit_service_ac.php?id_service_ac=$karakter'>
													<img src='img/edit.png'/></a>";
											}
						?>
					</td>
				</tr>	
			<?php
		}
		?>
			</table>
		<?php
	}else{
		echo "Error : ".mysqli_query($link);
	}
//menampilkan data berdasarkan kategori
}else if(isset($_POST['ok'])){
		$select= $_POST['paket'];
		$query = "SELECT * FROM $select";
		$result = mysqli_query($link,$query);
		if($result){
		?>
			<table>
				<tr>
					<td>Id</td>
					<td>Nama Item</td>
					<td>Harga(Rp)</td>
					<td></td>
				</tr>
		<?php		
			$i=0;
			while($data=mysqli_fetch_array($result)){
				$i++;
		?>
				<tr>
				<?php
				if ($select=='jasa'){
				?>
					<td><?php echo $data['id_jasa'];?></td>
					<td>
						<?php echo $data['nama'];?>
					</td>
					<td><?php echo $data['harga'];?></td>
					<td>
						<?php
							echo "
									<a href='edit_jasa.php?id_jasa=$data[id_jasa]'>
									<img src='img/edit.png'/></a>
								";
						
						?>
					</td>
				<?php
				}else if ($select=='sparepart'){
				?>
					<td><?php echo $data['id_sparepart'];?></td>
					<td><?php echo $data['nama'];?></td>
					<td><?php echo $data['harga'];?></td>
					<td>
						<?php
								echo "
										<a href='edit_sparepart.php?id_sparepart=$data[id_sparepart]'>
										<img src='img/edit.png'/></a>
									";
							
							?>
					</td>
				<?php
				}else if ($select=='spooring'){
				?>
					<td><?php echo $data['id_spooring'];?></td>
					<td><?php echo $data['nama'];?></a></td>
					<td><?php echo $data['harga'];?></td>
					<td>
						<?php
							echo "
									<a href='edit_spooring.php?id_spooring=$data[id_spooring]'>
									<img src='img/edit.png'/></a>
								";
						
						?>
					</td>
				<?php
				}else if ($select=='balancing_4_roda'){
				?>
					<td><?php echo $data['id_balancing'];?></td>
					<td><?php echo $data['nama'];?></a></td>
					<td><?php echo $data['harga'];?></td>
					<td>
						<?php
							echo "
									<a href='edit_balancing.php?id_balancing=$data[id_balancing]'>
									<img src='img/edit.png'/></a>
								";
						
						?>
					</td>
				<?php
				}else{
				?>
					<td><?php echo 	$data['id_service_ac'];?></td>
					<td><?php echo $data['nama'];?></a></td>
					<td><?php echo $data['harga'];?></td>
					<td>
						<?php
							echo "
									<a href='edit_service_ac.php?id_service_ac=$data[id_service_ac]'>
									<img src='img/edit.png'/></a>
								";
						
						?>
					</td>
				<?php
					}
				?>
				</tr>
				

		<?php
			}
		}
	}
?>
</table>   
</body>
</html>