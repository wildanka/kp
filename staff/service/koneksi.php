<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function koneksi_db()
{
	$host = "127.0.0.1";
	$user = "root";
	$password = "";
	$database = "daihatsu";

	$link = mysqli_connect($host,$user,$password,$database);
	mysqli_select_db($link,$database);
	if(!$link)
	echo "Error : ".mysli_error();
	return $link;
}	
?>
</body>
</html>
