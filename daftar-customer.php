<!DOCTYPE html>
<html>
<head>
    <title> Formulir Pendaftaran Customer Baru | SINARINDO </title>
</head>

<body>
    <header>
        <h2>SINARINDO</h2>
        <h3>Formulir Pendaftaran Customer Baru</h3>
    </header> 

    <form action="proses-daftar-customer.php" method="POST">

        <fieldset>

        <p>
            <label for="nama_cs">Nama Customer: </label>
            <input type="text" name="nama_customer" placeholder="input nama..." />
        </p>
        <p>
            <label for="alamat_cs">Alamat Customer: </label>
            <input name="alamat_customer" placeholder="input alamat..." />
        </p>
        <p>
            <label for="noTelp_cs">No Telp Customer: </label>
            <input type="text" name="noTelp_customer" placeholder="input notelp..." />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>