<?php
include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_produk']) ){
    header('Location: liat-produk.php');
}

//ambil id dari query string
$idpr = $_GET['id_produk'];

$sql = "SELECT * FROM produk WHERE id_produk=$idpr";
$query = mysqli_query($koneksi, $sql);
$produk = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Produk | SINARINDO</title>
</head>

<body>
    <header>
        <h2>SINARINDO</h2>
        <h3>Formulir Edit Produk</h3>
    </header>

    <form action="proses-edit-produk.php" method="POST">

        <fieldset>

            <input type="hidden" name="id_produk" value="<?php echo $produk['id_produk'] ?>" />

        <p>
            <label for="produk">Nama Produk: </label>
            <input type="text" name="nama_produk" placeholder="" />
        </p>
        <p>
            <label for="kategori">Id Kategori: </label>
            <input type="text" name="id_kategori" placeholder="" />
        </p>
        <p>
            <label for="jenis">Jenis Kategori: </label>
            <input type="text" name="jenis_kategori" placeholder="" />
        </p>
        <p>
            <label for="stok">Id Stok: </label>
            <input type="text" name="id_stok" placeholder="" />
        </p>
        <p>
            <label for="jumlah">Jumlah Stok: </label>
            <input type="text" name="jumlah_stok" placeholder="" />
        </p>
        <p>
            <input type="submit" value="save" name="save" />
        </p>

        </fieldset>


    </form>

    </body>
</html>