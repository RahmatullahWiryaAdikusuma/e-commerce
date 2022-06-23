 <!DOCTYPE html>
<html>
<head>
    <title> Formulir Pendaftaran Pegawai Baru | SINARINDO </title>
</head>

<body>
    <header>
        <h2>SINARINDO</h2>
        <h3>Formulir Pendaftaran Pegawai Baru</h3>
    </header> 

    <form action="proses-daftar-pegawai.php" method="POST">

        <fieldset>

        <p>
            <label for="nama_pegawai">Nama Pegawai: </label>
            <input type="text" name="nama_pegawai" placeholder="input nama..." />
        </p>
        <p>
            <label for="alamat_pegawai">Alamat Pegawai: </label>
            <input name="alamat_pegawai" placeholder="input alamat..."/>
        </p>
        <p>
            <label for="noTelp_pegawai">No Telp Pegawai: </label>
            <input type="text" name="noTelp_pegawai" placeholder="input notelp..." />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>