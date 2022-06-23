<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id = $_POST['id_pegawai'];
    $nama = $_POST['nama_pegawai'];
    $alamat = $_POST['alamat_pegawai'];
    $noTelp_pegawai = $_POST['noTelp_pegawai'];
    // buat query
    $sql = "INSERT INTO pegawai (id_pegawai, nama_pegawai, alamat_pegawai, noTelp_pegawai) VALUE ('$id', '$nama', '$alamat' , '$noTelp_pegawai')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: halaman-pegawai.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: halaman-pegawai.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>