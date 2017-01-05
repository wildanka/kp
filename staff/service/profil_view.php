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
    <title>Profil</title>
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
                            <h3 class="center">PROFIL</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content">
                    <h3>Profil</h3>
                    <hr class="tebal">
                    <?php
                    $nip = $_SESSION['service'];
                    $query = "SELECT * FROM admin WHERE nip='$nip'";
                    $result = mysqli_query($link,$query);
                    if ($result){
                        while ($data = mysqli_fetch_array($result)){
                            $nip = $data['NIP'];
                            $nama_lengkap = $data['Nama_Lengkap'];
                            $alamat = $data['Alamat'];
                            $tempat_lahir = $data['Tempat_Lahir'];
                            $tanggal_lahir = $data['Tanggal_Lahir'];
                            $no_handphone = $data['No_Handphone'];
                            $bagian = $data['Bagian'];
                            $username = $data['Username'];
                            $password = $data['Password'];
                            $foto_profil = $data['Foto_Profil'];
                        }
                    }

                    ?>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="img/Screenshot_3.jpg" class="img-responsive posisi_foto_profil" width="350px" height="400px">
                        </div>
                        <div class="col-md-6 ">
                            <table class="table">
                                <thead>
                                <tr class="row">
                                    <th colspan="3">Detail Profil</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="row">
                                    <td class="col-md-3">NIP </td>
                                    <td class="col-md-1 geser-kanan">:</td>
                                    <td class="col-md-6"><?php echo $nip; ?></td>
                                </tr>
                                <tr class="row">
                                    <td class="col-md-3">Nama Lengkap</td>
                                    <td class="col-md-1 geser-kanan">:</td>
                                    <td class="col-md-6"><?php echo $nama_lengkap; ?></td>
                                </tr>
                                <tr class="row">
                                    <td class="col-md-3">Alamat </td>
                                    <td class="col-md-1 geser-kanan">:</td>
                                    <td class="col-md-6"><?php echo $alamat; ?></td>
                                </tr>
                                <tr class="row">
                                    <td class="col-md-3">Tempat Lahir </td>
                                    <td class="col-md-1 geser-kanan">:</td>
                                    <td class="col-md-6"><?php echo $tempat_lahir; ?></td>
                                </tr>
                                <tr class="row">
                                    <td class="col-md-3">Tanggal Lahir</td>
                                    <td class="col-md-1 geser-kanan">:</td>
                                    <td class="col-md-6"><?php echo $tanggal_lahir; ?></td>
                                </tr>
                                <tr class="row">
                                    <td class="col-md-3">Bagian</td>
                                    <td class="col-md-1 geser-kanan">:</td>
                                    <td class="col-md-6"><?php echo $bagian; ?></td>
                                </tr>
                                <tr class="row">
                                    <td class="col-md-3">Username</td>
                                    <td class="col-md-1 geser-kanan">:</td>
                                    <td class="col-md-6"><?php echo $username; ?></td>
                                </tr>
                                <tr class="row">
                                    <td class="col-md-3">Password </td>
                                    <td class="col-md-1 geser-kanan">:</td>
                                    <td class="col-md-6"><?php echo $password; ?></td>
                                </tr>
                                <tr class="row">
                                    <td class="col-md-3">Foto Profil</td>
                                    <td class="col-md-1 geser-kanan">:</td>
                                    <td class="col-md-6"><?php echo $foto_profil; ?></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--berisi toggle action untuk wrapper-->
<script src="js/js-essential.js"></script>
</body>
</html>