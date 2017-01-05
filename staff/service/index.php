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
								<h3 class="center">HALAMAN UTAMA</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="content">
						<h3>DASBOR</h3>
						<hr>
						<p>tararahu tararahu tararahu tararahu tararahu tararahu tararahu tararahu tararahu tararahu tararahu tararahu tararahu
							tararahu tararahu tararahu tararahu tararahu tararahu tararahu
							tararahu tararahu tararahu tararahu tararahu tararahu tararahu tararahu
						</p>

					</div>
				</div>
			</div>
		</div>
	</div>

    <!--berisi toggle action untuk wrapper-->
    <script src="js/js-essential.js"></script>
</body>
</html>