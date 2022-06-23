<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_customer']) ){
    header('Location: halaman-customer.php');
}

//ambil id dari query string
$id_customer = $_GET['id_customer'];

$sql = "SELECT * FROM customer WHERE id_customer=id_customer";
$query = mysqli_query($koneksi, $sql);
$customer = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Customer | SINARINDO</title>
</head>

<body>
    <header>
        <h2>SINARINDO</h2>
        <h3>Formulir Edit Customer</h3>
    </header>

    <form action="proses-edit-cust.php" method="POST">

        <fieldset>

            <input type="hidden" name="id_customer" value="<?php echo $customer['id_customer'] ?>" />

        <p>
            <label for="nama_cs">Nama Customer: </label>
            <input type="text" name="nama_customer" placeholder="" />
        </p>
        <p>
            <label for="alamat_cs">Alamat Customer: </label>
            <input type="text" name="alamat_customer" placeholder="" />
        </p>
        <p>
            <label for="noTelp_cs">No.Telp Customer: </label>
            <input type="text" name="noTelp_customer" placeholder="" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>     