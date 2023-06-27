<?php session_start(); ?>
<!DOCTYPE html>
<html>
 <head>
  <title>MongoDB</title>
  <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
 </head>
 <body>
  <div class="container">
   <br>
   <CENTER><h1>PEMINJAMAN BUKU PERPUSTAKAAN</h1></CENTER>
   <a href="create.php" class="btn btn-success">Tambah Data</a>
   <?php
    if (isset($_SESSION['success'])) {
     echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
    }
   ?>
   <body style="background-color: #F5FFFA;">
</body>
   <table class="table">
    <thead>
     <tr>
      <th style="background-color: #B0C4DE;" scope="col">Nama</th>
      <th style="background-color: #B0C4DE;" scope="col">Alamat</th>
      <th style="background-color: #B0C4DE;" scope="col">Judul_Buku</th>
      <th style="background-color: #B0C4DE;"scope="col">Tgl_Peminjaman</th>
      <th style="background-color: #B0C4DE;" scope="col">Tgl_Pengembalian</th>
      <th style="background-color: #B0C4DE;" scope="col">Aksi</th>
                        
                        
     </tr>
    </thead>
    <?php
     require 'config.php';
     $peminjamanbuku = $collection->find();
     foreach ($peminjamanbuku as $kb) {
      echo "<tr>";
      echo "<th scope='row'>".$kb->Nama."</th>";
      echo "<td>".$kb->Alamat."</td>";
      echo "<td>".$kb->Judul_Buku."</td>";
      echo "<td>".$kb->Tgl_Peminjaman."</td>";
      echo "<td>".$kb->Tgl_Pengembalian."</td>";
      echo "<td>";
      echo "<a href = 'edit.php?id=".$kb->_id."'class='btn btn-primary'>EDIT</a>";
      echo "<a href = 'hapus.php?id=".$kb->_id."'class='btn btn-danger'>HAPUS</a>";
      echo "</td>";
      echo "</tr>";
     }
    ?>
   </table>
  </div>
 </body>
</html>