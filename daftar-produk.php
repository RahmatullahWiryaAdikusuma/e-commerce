<!DOCTYPE html>
<html>
<head>
    <title> Formulir Penambahan Produk Baru | SINARINDO </title>
</head>

<body>
    <header>
        <h2>SINARINDO</h2>
        <h3>Formulir Penambahan Produk Baru</h3>
    </header> 

    <form action="proses-daftar-produk.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama Produk: </label>
            <input type="text" name="nama_produk" placeholder="input produk..." />
        </p>
        <p>
            <label for="kategori">Id Kategori: </label>
            <input name="id_kategori" placeholder="input id kategori..."/>
        </p>
        <p>
            <label for="jenis">Jenis Kategori: </label>
            <input type="text" name="jenis_kategori" placeholder="input jenis kategori..." />
        </p>
        <p>
            <label for="stok">Id Stok: </label>
            <input type="text" name="id_stok" placeholder="input id stok..." />
        </p>
        <p>
            <label for="jumlah">Jumlah Stok: </label>
            <input type="text" name="jumlah_stok" placeholder="input jumlah stok..." />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>