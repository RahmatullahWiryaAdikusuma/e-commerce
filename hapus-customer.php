<?php

include("config.php");

if( isset($_GET['id_customer']) ){

    // ambil id dari query string
    $idcs = $_GET['id_customer'];

    // buat query hapus
    $sql = "DELETE FROM customer WHERE id_customer=$idcs";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: halaman-customer.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>