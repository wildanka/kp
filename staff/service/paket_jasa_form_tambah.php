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
    <?php include ('koneksi.php'); ?>
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
							<h3 class="center">PAKET JASA</h3>
						</div>
					</div>
				</div>
			</div>
            <?php
            $link = koneksi_db();
            ?>
			<div class="row">
				<div class="content">
                    <form method="post" action="paket_jasa_proses_tambah.php">
                        <table>
                            <tr>
                                <td colspan="2">Data Paket Jasa</td>
                            </tr>
                            <tr>
                                <td>Paket</td>
                                <td>
                                <select class="form-control" name="id_paket">
                                    <option value="" disabled selected hidden>Pilih Paket</option>
                                    <?php
                                    $res=mysqli_query($link,"select id_paket, nama from paket");
                                    while($data=mysqli_fetch_array($res))
                                    {
                                        echo "<option value=\"".$data['id_paket']."\">".$data['nama']."</option>";
                                    }
                                    ?>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jasa</td>
                                <td>
                                    <select class="form-control" name="id_jasa">
                                        <option value="" disabled selected hidden>Pilih Jasa</option>
                                        <?php
                                        $res=mysqli_query($link,"select id_jasa, nama from jasa");
                                        while($data=mysqli_fetch_array($res))
                                        {
                                            echo "<option value=\"".$data['id_jasa']."\">".$data['nama']."</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Mobil</td>
                                <td>
                                    <select class="form-control" name="id_mobil">
                                        <option value="" disabled selected hidden>Pilih Mobil</option>
                                        <?php
                                        $res=mysqli_query($link,"select id_mobil, nama from mobil");
                                        while($data=mysqli_fetch_array($res))
                                        {
                                            echo "<option value=\"".$data['id_mobil']."\">".$data['nama']."</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" value="Simpan">
                                    <input type="reset" value="Reset">
                                </td>
                            </tr>
                        </table>
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