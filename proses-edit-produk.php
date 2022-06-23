<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['save'])){

    // ambil data dari formulir
    $idpr           = $_POST['id_produk'];
    $nproduk         = $_POST['nama_produk'];
    $kategori       = $_POST['id_kategori'];
    $jenis          = $_POST['jenis_kategori'];
    $stok           = $_POST['id_stok'];
    $jumlah         = $_POST['jumlah_stok'];

    // buat query update
    $sql = "UPDATE produk SET nama_produk='$nproduk', id_kategori='$kategori', jenis_kategori='$jenis', id_stok='$stok', jumlah_stok='$jumlah' WHERE id_produk=$idpr";
    $query = mysqli_query($koneksi, $sql);
    $produk = mysqli_fetch_assoc($query);
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: lihat-produk.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>