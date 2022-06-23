<?php 
include("config.php"); ?>

<!DOCTYPE html >
<html>
    <head>
        <title>Penjualan Barang | SinarIndo </title>
    </head>

    <body>
        <header>
            <h3>Produk Yang Terdaftar</h3>
        </header>
        <nav>
            <a href="daftar-produk.php"> [+] Tambah baru</a>    
        </nav>
        <nav>
        <a href="lihat-transaksi.php"> [>] Lihat Transaksi</a>
        </nav>

      <br>
      <table border="1">
          <thead>
              <tr>
                 <th>ID PRODUK</th>
                 <th>NAMA PRODUK</th>
                 <th>ID KATEGORI</th>
                 <th>JENIS KATEGORI</th>
                 <th>ID STOK</th>
                 <th>JUMLAH STOK</th>
                 <th>Tindakan</th>
              </tr>   
          </thead>
          <tbody>

          <?php
          $sql = "SELECT * FROM produk";
          $query = mysqli_query($koneksi, $sql);

          while ($produk = mysqli_fetch_array($query)){
              echo "<tr>";

              echo "<td>".$produk['id_produk']."</td>";
              echo "<td>".$produk['nama_produk']."</td>";
              echo "<td>".$produk['id_kategori']."</td>";
              echo "<td>".$produk['jenis_kategori']."</td>";
              echo "<td>".$produk['id_stok']."</td>";
              echo "<td>".$produk['jumlah_stok']."</td>";

              echo "<td>";
              echo "<a href='beli-produk.php?id_produk=".$produk['id_produk']."'>BELI PRODUK</a> | ";
              echo "</td>";
            }
            ?>

          </tbody>
      </table>

      <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>