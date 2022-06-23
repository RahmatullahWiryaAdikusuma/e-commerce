<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $idpr           = $_POST['id_produk'];
    $produk         = $_POST['nama_produk'];
    $kategori       = $_POST['id_kategori'];
    $jenis          = $_POST['jenis_kategori'];
    $stok           = $_POST['id_stok'];
    $jumlah         = $_POST['jumlah_stok'];
    // buat query
    $sql = "INSERT INTO produk (id_produk, nama_produk, id_kategori, jenis_kategori, id_stok, jumlah_stok) VALUE ('$idpr', '$produk', '$kategori' , '$jenis', '$stok', '$jumlah')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: lihat-produk.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: lihat-produk.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>