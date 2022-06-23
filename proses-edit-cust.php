<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $idcs = $_POST['id_customer'];
    $nama_cs = $_POST['nama_customer'];
    $alamat_cs = $_POST['alamat_customer'];
    $noTelp_cs = $_POST['noTelp_customer'];

    // buat query update
    $sql = "UPDATE customer SET nama_customer='$nama_cs', alamat_customer='$alamat_cs', noTelp_customer='$noTelp_cs' WHERE id_customer=$idcs";
    $query = mysqli_query($koneksi, $sql);
    $customer = mysqli_fetch_assoc($query);
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman cust.php
        header('Location: halaman-customer.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>