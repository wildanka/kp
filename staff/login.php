<?php
@session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	//cek username dan password
	if (!empty($username) && !empty($password)) {
		$query =  "SELECT * FROM admin WHERE Username='$username' AND Password='$password' ";
		$login = mysqli_query($koneksi, $query);
		$data = mysqli_fetch_array($login);
		
		$cekLogin = mysqli_num_rows($login);
		//bila data ditemukan
		if ($cekLogin != 0) {

			//cek sessionnya
			if ($data['Bagian'] == 'Service') {
				$_SESSION['service'] = $data['NIP'];
				header('Location: service/');
			} else if ($data['Bagian'] == 'Showroom') {
				$_SESSION['showroom'] = $data['NIP'];
				header('Location: showroom/');
			}

		} else {
			echo "Data tidak ditemukan";
		}
	}
}
?>

<html>
<head>
	<title>Login</title>
</head>
<body>
	<table>
		<form method="POST" action="">
			<tr>
				<td><label>Username</label></td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="login" value="Login"></td>
			</tr>
		</form>
	</table>
</body>
</html>

<?php
	
?>

