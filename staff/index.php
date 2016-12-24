<?php

@session_start();
include 'inc/koneksi.php';

if (@$_SESSION['showroom']) {
  header("location: showroom/index.php");
} else if (@$_SESSION['service']) {
  header("location: service/index.php");
} else {
  header("location: login.php");
}
?>