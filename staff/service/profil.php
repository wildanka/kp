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
						<form class="form">
							<div class="form-group">
									<label for="nama">NIP</label>
									<input type="text" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
									<label for="nama">Nama Lengkap</label>
									<input type="text" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
									<label for="nama">Tempat Lahir</label>
									<input type="text" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
									<label for="nama">Tanggal Lahir</label>
									<input type="text" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
									<label for="nama">Tanggal Masuk Kerja</label>
									<input type="text" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
									<label for="nama">No Handphone</label>
									<input type="text" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
									<label for="nama">Tipe Akun</label>
									<select class="form-control">
										<option>Admin Showroom</option>
										<option>Admin Service</option>									
									</select>
							</div>
							<div class="form-group">
									<label for="nama">Username</label>
									<input type="text" class="form-control" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
									<label for="nama">Password</label>
									<input type="password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
									<label for="foto">Upload Foto</label>
								    <input type="file" id="exampleInputFile"><br>
									<p class="help-block">Maksimum ukuran foto 3 MB</p>
							</div>
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