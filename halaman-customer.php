<?php 
include("config.php"); ?>

<!DOCTYPE html >
<html>
    <head>
        <title>Penjualan Barang | SinarIndo </title>
    </head>

    <body>
        <header>
            <h3> Customer yang telah mendaftar</h3>
        </header>
        <nav>
            <a href="daftar-customer.php">[+] Tambah baru</a>
        </nav>
        <nav>
        <a href="lihat-produk.php"> [>] Lihat Produk</a>
        </nav>
      <br>
      <table border="1">
          <thead>
              <tr>
                 <th>ID CUSTOMER</th>
                 <th>NAMA CUSTOMER</th>
                 <th>ALAMAT CUSTOMER</th>
                 <th>NO.TELP CUSTOMER</th>
                 <th>Tindakan</th>
              </tr>   
          </thead>
          <tbody>

          <?php
          $sql = "SELECT * FROM customer";
          $query = mysqli_query($koneksi, $sql);

          while ($customer = mysqli_fetch_array($query)){
              echo "<tr>";

              echo "<td>".$customer['id_customer']."</td>";
              echo "<td>".$customer['nama_customer']."</td>";
              echo "<td>".$customer['alamat_customer']."</td>";
              echo "<td>".$customer['noTelp_customer']."</td>";

              echo "<td>";
              echo "<a href='edit-customer.php?id_customer=".$customer['id_customer']."'>EDIT CUSTOMER</a> | ";
              echo "<a href='hapus-customer.php?id_customer=".$customer['id_customer']."'>HAPUS CUSTOMER</a> | ";
              echo "</td>";
            }
            ?>

          </tbody>
      </table>

      <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>