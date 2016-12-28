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

	<style>
		/*
		which color? you can try one of these
		1b6d85
		1ba89c
		*/
		#menu-toggle{
			position: absolute;
			margin: 1px 0px 0px -20px;
			background-color: #06181a;
			opacity: 0.9;
			color: #fff;
			padding: 17px 20px 21px 20px ;
			border-radius: 0px;
		}

		#menu-toggle:hover{
			background-color: #1bb7ab;
		}

		.header-judul{
			position: static;
		}

		.content{
			position: static;
			padding: 20px;
			margin-top: 50px;
		}
		.center{
			text-align: center;
		}

		.glyphicon-sedang{
			font-size: 1.5em;
		}

		.bekgron{
			background-color: #06181a;
			opacity: 0.9;
			padding: 0.5%;
			margin: -15px;
			color: #fff;
		}
	</style>
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
				<div class="row header-judul ">
					<div class="col-lg-12 ">
						<div class="row bekgron">
							<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 "> <!--col-lg-pull-11 col-md-pull-10 col-sm-pull-11-->
								<a href="#" id="menu-toggle"> <span class=" glyphicon glyphicon-align-justify glyphicon-sedang"></span></a>
							</div>
							<div class="col-lg-11 col-md-11 col-sm-2 visible-xs-block, hidden-xs"> <!--col-lg-push-1 col-md-push-1 col-sm-push-1-->
								<h3 class="center">Halaman utama</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="content">
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
