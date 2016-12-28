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
	<h4> Lihat Data Item Berdasarkan :  </h4>
	Filter By : <select name="paket">
		<option value="jasa">Jasa</option>
		<option value="sparepart">Sparepart</option>
		<option value="balancing_4_roda">Balancing</option>
		<option value="spooring">Spooring</option>
		<option value="service_ac">Service AC</option>
	</select>
	<input type="submit" name="ok" value="Filter"></input>	
</form>
<?php
if(!isset($_POST['paket'])){
	$query_tampil_semua_data = "SELECT * FROM jasa UNION 
								SELECT * FROM sparepart UNION 
								SELECT * FROM balancing_4_roda UNION 
								SELECT * FROM spooring UNION SELECT * FROM service_ac;";
	$res_semua_data = mysqli_query($link,$query_tampil_semua_data);
	if($res_semua_data)
	{
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
}else{
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