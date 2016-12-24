<?php
@session_start();
include "config/koneksi.php";

include 'cek_session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Privileged Access</title>
</head>
<body>
<div class="container">
    <p>
        Login to verify
    </p>
    <form method="post">
        <table>
            <tr>
                <td>
                    <input type="text" name="username" placeholder="username">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="password" placeholder="password">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Login" name="login"></td>
            </tr>
        </table>
    </form>

</div>
</body>
</html>

<?php

    $username = @$_POST['username'];
    $password = @$_POST['password'];
    $login = @$_POST['login'];

    if($login){
        if($username == "" || $password == ""){ //bila kosong
            ?>
            <script type="text/javascript">alert("Username atau Password kosong")</script>
            <?php
        }else{ //bila tidak kosong

            $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'; ";
            $sql = mysqli_query($link, $query);
            $data = mysqli_fetch_array($sql); //memasukkan data hasil query ke dalam array
            $cek= mysqli_num_rows($sql); //menghitung akun yang ditemukan dari hasil pencarian query

            //login gagal atau berhasil
            if ($cek > 0 ){ //bila data ditemukan (berhasil)
                if ($data['Bagian'] == 'Showroom'){
                    header("location: view/admin_service.html");
                } else if ($data['Bagian'] == 'Service'){
                    header("location: view/admin_showroom.html");
                }
            }

            else { //bila data tidak ditemukan (gagal login)
                  echo "<center>login gagal</center>";
                ?>
                  <script type="text/javascript">
                    window.alert("Login gagal, Username atau Password salah");
                  </script>
                <?php
            }
        }
    }
?>