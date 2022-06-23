<!DOCTYPE html>
<html>
<head>
	<title>Login As Pegawai</title>
</head>
<body>
	<h2>Login Pegawai</h2>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['login'])){
		if($_GET['login'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['login'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['login'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman pegawai";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cek-login-pegawai.php">
		<table>
			<tr>
				<td>Nama Pegawai</td>
				<td>:</td>
				<td><input type="text" name="nama_pegawai" placeholder="Masukkan Nama..."></td>
			</tr>
			<tr>
				<td>Id Pegawai</td>
				<td>:</td>
				<td><input type="password" name="id_pegawai" placeholder="Masukkan Id..."></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN" name="login"></td>

			</tr>
		</table>			
	</form>
</body>
</html>