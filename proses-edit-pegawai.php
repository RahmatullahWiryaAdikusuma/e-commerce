<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama_pegawai'];
    $alamat = $_POST['alamat'];
    $noTelp_pegawai = $_POST['noTelp_pegawai'];

    // buat query update
    $sql = "UPDATE pegawai SET nama_pegawai='$nama', alamat_pegawai='$alamat', noTelp_pegawai='$noTelp_pegawai' WHERE id_pegawai=$id";
    $query = mysqli_query($koneksi, $sql);
    $pegawai = mysqli_fetch_assoc($query);
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: halaman-pegawai.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>