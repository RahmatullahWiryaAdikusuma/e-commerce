<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$nama_customer = $_POST['nama_customer'];
$id_customer = $_POST['id_customer'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$query = mysqli_query($koneksi,"select * from customer where nama_customer='$nama_customer' and id_customer='$id_customer'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($query);
 
if($cek > 0){
	$_SESSION['nama_customer'] = $nama_customer;
	$_SESSION['status'] = "login";
	header("location:halaman-customer.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>