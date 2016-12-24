<?php
@session_start();

$_SESSION['NIP'] = '';
unset($_SESSION['NIP']);
session_unset();
session_destroy();
header("location: ../staff/index.php");

?>