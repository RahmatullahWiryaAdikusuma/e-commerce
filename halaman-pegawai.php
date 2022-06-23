<?php 
include("config.php"); ?>

<!DOCTYPE html >
<html>
    <head>
        <title>Penjualan Barang | SinarIndo </title>
    </head>

    <body>
        <header>
            <h3>Pegawai yang telah mendaftar</h3>
        </header>
        <nav>
            <a href="daftar-pegawai.php"> [+] Tambah baru</a>    
        </nav>
        <nav>
        <a href="lihat-produk.php"> [>] Lihat Produk</a>
        </nav>

      <br>
      <table border="1">
          <thead>
              <tr>
                 <th>ID PEGAWAI</th>
                 <th>NAMA PEGAWAI</th>
                 <th>ALAMAT PEGAWAI</th>
                 <th>NO.TELP PEGAWAI</th>
                 <th>Tindakan</th>
              </tr>   
          </thead>
          <tbody>

          <?php
          $sql = "SELECT * FROM pegawai";
          $query = mysqli_query($koneksi, $sql);

          while ($pegawai = mysqli_fetch_array($query)){
              echo "<tr>";

              echo "<td>".$pegawai['id_pegawai']."</td>";
              echo "<td>".$pegawai['nama_pegawai']."</td>";
              echo "<td>".$pegawai['alamat_pegawai']."</td>";
              echo "<td>".$pegawai['noTelp_pegawai']."</td>";

              echo "<td>";
              echo "<a href='edit-pegawai.php?id_pegawai=".$pegawai['id_pegawai']."'>EDIT PEGAWAI</a> | ";
              echo "<a href='hapus-pegawai.php?id_pegawai=".$pegawai['id_pegawai']."'>HAPUS PEGAWAI</a> | ";
              echo "</td>";
            }
            ?>

          </tbody>
      </table>

      <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>