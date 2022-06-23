<?php

include("config.php");

if( isset($_GET['id_pegawai']) ){

    // ambil id dari query string
    $id = $_GET['id_pegawai'];

    // buat query hapus
    $sql = "DELETE FROM pegawai WHERE id_pegawai=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: halaman-pegawai.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>