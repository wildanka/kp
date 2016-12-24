<html>
<head>
	<title>Profil</title>
	<?php
		include 'inc/import.php';
		include 'koneksi.php';
	?>

	<style type="text/css">
		
	</style>
</head>
<body>
	<!-- Seluruh Halaman -->
	<div id="wrapper">
		<!-- Sidebar -->
		<?php
			include 'sidebar.php';
		?>

		<!-- bagian konten -->
		<?php
			/*if($_FILES['upload']['error']==0)
			{*/
				$link=koneksi_db();
				$nip=$_POST['nip'];
				$nama=$_POST['nama'];
				$alamat=$_POST['alamat'];
				$tempatlahir=$_POST['tempatlahir'];
				$tgllahir=$_POST['tgllahir'];
				$nohp=$_POST['nohp'];
				$tipe_akun=$_POST['tipeakun'];
				$username=$_POST['username'];
				$password=$_POST['password'];
				/*$upload=$_FILES['upload']['name'];
				$namafilebaru="img/".$upload;
				if(move_uploaded_file($_FILES['upload']['tmp_name'],$namafilebaru)==true)
				{*/
					$sql="INSERT INTO admin VALUES ('$nip','$nama','$alamat','$tempatlahir','$tgllahir','$nohp','$tipe_akun','$username','$password',null)";

					$res=mysqli_query($link,$sql);
					if($res)
					{
						?>
							INPUT BERHASIL
						<?php
					}
					else
					{
						?>
							INPUT GAGAL
						<?php
					}
				/*}*/
/*			}
			else
			{
				?>
					UPLOAD GAGAL
				<?php
			}*/
		?>

	</div>

	<!--berisi toggle action untuk wrapper-->
    <script src="js/js-essential.js"></script>
</body>
</html>