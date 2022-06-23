<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$nama = $_POST['nama_pegawai'];
$id = $_POST['id_pegawai'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$query = mysqli_query($koneksi,"select * from pegawai where nama_pegawai='$nama' and id_pegawai='$id'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($query);
 
if($cek > 0){
	$_SESSION['nama_pegawai	'] = $nama;
	$_SESSION['status'] = "login";
	header("location:halaman-pegawai.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>