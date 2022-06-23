<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $idcs = $_POST['id_customer'];
    $nama_cs = $_POST['nama_customer'];
    $alamat_cs = $_POST['alamat_customer'];
    $noTelp_cs = $_POST['noTelp_customer'];
    // buat query
    $sql = "INSERT INTO customer (id_customer, nama_customer, alamat_customer, noTelp_customer) VALUE ('$idcs', '$nama_cs', '$alamat_cs' , '$noTelp_cs')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: halaman-customer.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: halaman-customer.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>