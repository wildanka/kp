<?php
session_start();

if (!@$_SESSION['service']){
	header("location: ../index.php");
}

?>

<html>
<head>
	<title>Service</title>
	<?php
		include 'inc/import.php';
	?>
</head>
<body>
<form action="" method="post">
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
						<input type="submit" name="Edit1" id="Edit1" value="Jasa">
						<input type="submit" name="Edit2" id="Edit2" value="Sparepart">
						<input type="submit" name="Edit3" id="Edit3" value="Balancing">
						<hr>				
						<?php
						if (isset($_POST['Edit1']))
						{
							include "jasa.php";
							}

?>
					</div>
				</div>
			</div>
		</div>

	</div>
</form>

    <!--berisi toggle action untuk wrapper-->
    <script src="js/js-essential.js"></script>
</body>
</html>