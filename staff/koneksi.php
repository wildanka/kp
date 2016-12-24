<?php
	$hostname = "127.0.0.1";
	$username = "root";
	$password = "";
	$database = "daihatsu";

	$koneksi = mysqli_connect($hostname,$username,$password,$database) or die(mysqli_error($koneksi));
	
?>

