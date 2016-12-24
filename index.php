<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Tunas Daihatsu</title>
    <link href="img/tunas.png" rel="shortcut icon" />
    <!--import bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--import jquery-->
    <script src="js/jquery.min.js"></script>
    <!--import bootstrap js-->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styling.css">
</head>
<body>

    <!--Navbar-->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="row">
                <!--Logo-->
                <div class="navbar-header">
                    <div class="navbar-header">
                        <img src="img/logo%20daihatsu.png" >
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuDropdown">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <!--Menu-->
                <div class="collapse navbar-collapse" id="menuDropdown">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php" id="beranda">Beranda</a></li>
                        <li><a href="showroom/index.php">Showroom</a></li>
                        <!--dropdown-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bengkel <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="service/index.php" class="menu"> Promo Booking Service</a></li>
                                <li><a href="#" class="menu"> Estimasi Harga Service</a></li>
                                <li><a href="#" class="menu"> Tata Cara Service</a></li>
                            </ul>
                        </li>

                        <li><a href="kontak.php" class="tes">Kontak</a></li>
                        <li><a>News</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!--Carousel-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/sigra2.jpg" >
                <div class="carousel-caption">
                    <!--isi dengan caption-->
                </div>
            </div>
            <div class="item">
                <img src="img/set_daihatsu.jpg" alt="...">
                <div class="carousel-caption">
                    <!--isi dengan caption-->
                </div>
            </div>
            <div class="item">
                <img src="img/daihatsu_rame.jpg" alt="...">
                <div class="carousel-caption">
                    <!--isi dengan caption-->
                </div>
            </div>
            <div class="item">
                <img src="img/tunas_era.jpg" alt="...">
                <div class="carousel-caption">
                    <!--isi dengan caption-->
                </div>
            </div>
            <!--isi dengan caption-->
        </div>

        <!-- Controls -->
        <span class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left background-carousel" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </span>
        <span class="right carousel-control " href="#carousel-example-generic" role="button" data-slide="next">
            <div class="background-carousel">
                <span class="glyphicon glyphicon-chevron-right background-carousel" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </div>
        </span>
    </div>

    <!-- Layanan pilihan -->
    <div class="layanan">
        <div class="container">
            <div class="row layananQuicklink">
                <div class="col-md-4 col-sm-10">
                    <img class="quicklink1 img-responsive" src="img/showroom.jpg">
                </div>
                <div class="col-md-4 col-sm-10">
                    <img class="quicklink2 img-responsive" src="img/penawaran_menarik.jpg">
                </div>
                <div class="col-md-4 col-sm-110heet">
                    <img class="quicklink3 img-responsive" src="img/layanan_bengkel.jpg">
                </div>
            </div>
        </div>


    </div>


</body>
</html>
