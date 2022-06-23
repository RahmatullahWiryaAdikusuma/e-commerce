<?php

include("config.php");

if( isset($_GET['id_produk']) ){

    // ambil id dari query string
    $idpr = $_GET['id_produk'];

    // buat query hapus
    $sql = "DELETE FROM produk WHERE id_produk=$idpr";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: lihat-produk.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>