<?php

if (@$_SESSION['admin']) {
  header("location: admin/index.php");
} else if (@$_SESSION['kasir']) {
  header("location: kasir/index.php");
}

?>