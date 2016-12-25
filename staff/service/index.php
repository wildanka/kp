<?php
session_start();

if (!@$_SESSION['service']){
	header("location: ../index.php");
}

echo "tes";

?>

<html>
<head>
	<title>Service</title>
	<?php
		include 'inc/import.php';
	?>
</head>
<body>
	<!--seluruh halaman-->
	<div id="wrapper">

        <!--Sidebar-->
        <?php
            include "sidebar.php";
        ?>

		<!-- bagian konten -->
		<div id="content-page">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<a href="#" id="menu-toggle">Show</a>
						<h3>Data Estimasi Harga</h3>
						<p> Halaman untuk menambah, mengedit dan menghapus data estimasi harga, Silahkan pilih data : 
						<p> <a href="#"> - Jasa </a></p>
						<p> <a href="#"> - Data Sparepart </a></p>
						<p> <a href="#"> - Data Jasa </a></p>
						<p> <a href="#"> - Data Jasa </a></p>
						<p> <a href="#"> - Data Jasa </a></p>
											
					</div>
				</div>
			</div>
		</div>

	</div>

    <!--berisi toggle action untuk wrapper-->
    <script src="js/js-essential.js"></script>
</body>
</html>
