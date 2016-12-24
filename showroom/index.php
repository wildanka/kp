<!--/**
* Created by PhpStorm.
* User: HP
* Date: 10/20/2016
* Time: 1:53 AM
*/-->


<html>
<head>
    <title>Tunas Daihatsu Bandung</title>
    <meta charset="UTF-8">
    <link href="../img/tunas.png" rel="shortcut icon" />

    <!--import bootstrap css-->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/bootcards-desktop.css">


    <!--import jquery-->
    <script src="../js/jquery.min.js"></script>

    <!--import js-->
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/bootcards.min.js"></script>

    <link rel="stylesheet" href="css/styling.css">


    <style>
        .naik{
            margin-top: -22px;
        }

        #list_mobil{
            background-color: #f2f3e7;
            padding-top: 25px;
            padding-bottom: 15px;
        }
        .center{
            text-align: center;
            align-content: center;
        }
        .productName{
            font-size: 12px;
        }

        .bonus1{
            padding-right: 5px;
            margin-left: -15px;
        }
        .bonus2{
            padding-right: 5px;
        }

        a{
            color: #0f0f0f;
        }

        a:hover{
            color: #1d94d2;
            text-decoration: none;
        }
        .col-xs-1{

        }
        .panel{
            background-color: #2D2D2D;
        }
/*        .panel-body{
            background-color: ;
        }*/

        .jenis-mobil{
            font-family: fantasy;
            color: #f2ebd8;
            font-size: 20px;
            margin-top: 8px;
        }

        .harga-mobil{
            font-family: fantasy;
            color: #f2ebd8;
            font-size: 15px;
            margin-top: -9px;
        }

        .jenis-mobil:hover{
            font-family: fantasy;
            color: #000000;
            font-size: 20px;
            margin-top: 8px;
        }

        .harga-mobil:hover{
            font-family: fantasy;
            color: #030202;
            font-size: 15px;
            margin-top: -9px;
        }



        .col-sm-3{
            margin-left: -13px;
        }

 /*       #item-cards-1 .bootcards-summary-item, #item-cards-2 .bootcards-summary-item {
            background: #777777;
            display: block;
            border-radius: 4px;
            padding: 25px 10px;
            text-align: center;
            position: relative;
            height: 230px;
        }*/

    </style>
    <script>
        $(function(){
            $("#item-cards-1").hover(function(){
               $(".harga-mobil").css("color","#000000");
            }, function () {
               $(".harga-mobil").css("color","#ffffff");
            }

            );
        });
    </script>
</head>
<body>
    <?php
        include "navbar.php";
    ?>

    <?php
       /* include "list.html";*/
    ?>
    <div class="container-fluid panel panel-default naik">
        <div class="center">
            <h1>PRODUK</h1>
            <a id="item-cards-3" >asdasdsa</a>
        </div>
    </div>

        <div class="panel panel-default bootcards-summary naik">

            <div class="panel-body container">
                <div class="row">
                    <div class="col-xs-6 col-sm-3">
                        <!--<a class="bootcards-summary-item" href="/notes">-->
                        <div id="item-cards-1">
                            <a class="bootcards-summary-item" href="#">
                                <img src="sirion1.png" height="125" width="200">
                                <p class="jenis-mobil" id="jenis-mobil-1">SIRION</p>
                                <p class="harga-mobil">Harga Mulai dari Rp. 95.000.000 </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <!--<a class="bootcards-summary-item" href="/companies">-->
                        <a class="bootcards-summary-item" href="#">
                            <img src="sirion1.png" height="125" width="200">
                            <h3>20 <span>Companies</span></h3>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <!--<a class="bootcards-summary-item" href="/notes">-->
                        <a class="bootcards-summary-item" href="#">
                            <img src="sirion1.png" height="125" width="200">
                            <h1>187 <span>Notes</span></h1>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <!--<a class="bootcards-summary-item" href="/notes">-->
                        <a class="bootcards-summary-item" href="#">
                            <img src="sirion1.png" height="125" width="200">
                            <h1>187 <span>Notes</span></h1>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-3">
                        <!--<a class="bootcards-summary-item" href="/contacts">-->
                        <a class="bootcards-summary-item" href="#">
                            <img src="sirion1.png" height="125" width="200">
                            <h1>40 <span>Contacts</span></h1>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <!--<a class="bootcards-summary-item" href="/companies">-->
                        <a class="bootcards-summary-item" href="#">
                            <img src="sirion1.png" height="125" width="200">
                            <h3>20 <span>Companies</span></h3>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <!--<a class="bootcards-summary-item" href="/notes">-->
                        <a class="bootcards-summary-item" href="#">
                            <img src="sirion1.png" height="125" width="200">
                            <p class="jenis-mobil">SIRION</p>
                            <p class="harga-mobil">Harga Mulai dari Rp. 95.000.000 </p>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <!--<a class="bootcards-summary-item" href="/notes">-->
                        <a class="bootcards-summary-item" href="#">
                            <img src="sirion1.png" height="125" width="200">
                            <h1>187 <span>Notes</span></h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>





</body>
</html>

