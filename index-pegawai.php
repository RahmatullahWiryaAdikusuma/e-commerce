<!DOCTYPE html>
<html>
<head>
	<title>PENJUALAN BERBASIS ONLINE</title>
</head>
<body>
	<h2>Halaman Pegawai</h2>
	
	<br/>
 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="pegawai"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 
	<h4>Selamat datang, <?php echo $_SESSION['nama_pegawai']; ?>! anda telah login.</h4>
 
	<br/>
	<br/>
 
	<a href="logout.php">LOGOUT</a>
 
 
</body>
</html>
