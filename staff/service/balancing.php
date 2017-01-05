<?php
session_start();

if (!@$_SESSION['service']){
	header("location: ../index.php");
}
include "koneksi.php";
?>

<html>

	<title>ITEM BALANCING</title>
	<?php
	include 'inc/import.php';
	?>
	<link rel="stylesheet" type="text/css" href="css/template.css">
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
		<div class="container-fluid" >
			<div class="row " id="">
				<div class="col-lg-12 ">
					<div class="row bekgron">
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 "> <!--col-lg-pull-11 col-md-pull-10 col-sm-pull-11-->
							<a href="#" id="menu-toggle"> <i class="geser-kanan glyphicon glyphicon-align-justify glyphicon-sedang"></i></a>
						</div>
						<div class="col-lg-11 col-md-11 col-sm-2 visible-xs-block, hidden-xs"> <!--col-lg-push-1 col-md-push-1 col-sm-push-1-->
							<h3 class="center">ITEM JASA</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="content">
					<form action="" method="post">
						<h4> Data Jasa </h4>
						Id Balancing <input type="text" name="id_balancing" >
						Nama Balancing : <input type="text" name="nama">
						Harga : <input type="text" name="harga">
						<input type="submit" name="simpan" value="Simpan">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!--berisi toggle action untuk wrapper-->
<script src="js/js-essential.js"></script>

<?php
	if (isset($_POST['simpan'])){
		$id = $_POST['id_balancing'];
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

</body>
</html>