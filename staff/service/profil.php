<html>
<head>
	<title>Profil</title>
	<?php
		include 'inc/import.php';
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
		<div id="content-page">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<a href="#" id="menu-toggle">Show</a>
						<h3>Profil</h3>
						<form class="form" method="post" action="profile_proses.php">
							<div class="form-group">
									<label for="nama">NIP</label>
									<input type="text" name="nip" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
									<label for="nama">Nama Lengkap</label>
									<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
									<label for="nama">Alamat</label>
									<input type="text" name="alamat" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
									<label for="nama">Tempat Lahir</label>
									<input type="text" name="tempatlahir" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
									<label for="nama">Tanggal Lahir</label>
									<input type="text" name="tgllahir" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
									<label for="nama">No Handphone</label>
									<input type="text" name="nohp" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
									<label for="nama">Tipe Akun</label>
									<select class="form-control" name="tipeakun">
										<option value="Showroom">Admin Showroom</option>
										<option value="Service">Admin Service</option>									
									</select>
							</div>
							<div class="form-group">
									<label for="nama">Username</label>
									<input type="text" name="username" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
									<label for="nama">Password</label>
									<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
									<label for="foto">Upload Foto</label>
								    <input type="file" name="upload" id="exampleInputFile"><br>
									<p class="help-block">Maksimum ukuran foto 3 MB</p>
							</div>
							<input type="submit" value="Simpan">
						</form>
						
					</div>
				</div>
			</div>
		</div>

	</div>

	<!--berisi toggle action untuk wrapper-->
    <script src="js/js-essential.js"></script>
</body>
</html>