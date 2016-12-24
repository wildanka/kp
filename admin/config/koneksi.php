<?php

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "daihatsu";

$koneksi = mysqli_connect($hostname, $username, $password, $database) or die(mysqli_error($koneksi));


/*function koneksi_db()
{
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "";
    $database= "daihatsu";

    //koneksi

    $link = mysqli_connect($hostname,$username,$password);
    if(!$link){
        die('Could not connect '.mysqli_error());
    }

    //Gunakan Database yang aktif
    $db = mysqli_select_db($link,$database);
    if(!$db){
        die('Error : '.mysqli_error());
    }

    return $link;
}*/

?>