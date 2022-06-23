<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_pegawai']) ){
    header('Location: halaman-pegawai.php');
}

//ambil id dari query string
$id = $_GET['id_pegawai'];

$sql = "SELECT * FROM pegawai WHERE id_pegawai=$id";
$query = mysqli_query($koneksi, $sql);
$pegawai = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Pegawai | SINARINDO</title>
</head>

<body>
    <header>
        <h2>SINARINDO</h2>
        <h3>Formulir Edit Pegawai</h3>
    </header>

    <form action="proses-edit-pegawai.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $pegawai['id_pegawai'] ?>" />

        <p>
            <label for="nama">Nama Pegawai: </label>
            <input type="text" name="nama_pegawai" placeholder="" value="<?php echo $pegawai['nama_pegawai'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat Pegawai: </label>
            <input type="text" name="alamat" placeholder="" value="<?php echo $pegawai['alamat_pegawai'] ?>" />
        </p>
        <p>
            <label for="noTelp_pegawai">noTelp pegawai: </label>
            <input type="text" name="noTelp_pegawai" placeholder="" value="<?php echo $pegawai['noTelp_pegawai'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>