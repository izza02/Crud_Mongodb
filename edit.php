<?php session_start();
   require 'config.php';
   if (isset($_GET['id'])) {
      $mhs = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   }
   if(isset($_POST['submit'])){
      $collection->updateOne(
          ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
          ['$set' => ['Nama' => $_POST['Nama'], 'Alamat' => $_POST['Alamat'], 
                      'Judul_Buku' => $_POST['Judul_Buku'],'Tgl_Peminjaman' => $_POST['Tgl_Peminjaman'],'Tgl_Pengembalian' => $_POST['Tgl_Pengembalian'],
          ]]
      );
      $_SESSION['success'] = "Data berhasil diubah";
      header("Location: index.php");
   }
?>
   <body style="background-color: #F5FFFA;">
</body>
<!DOCTYPE html>
<html>
   <head>
      <title>MongoDB</title>
      <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
         <br>
         <CENTER><h1>Edit Data Peminjaman</h1></CENTER>
         <form method="POST">
            <div class="form-group">
                <label for="Nama"><strong>Nama:</strong></label>
                <input type="text" class="form-control" name="Nama" required="" placeholder="">
                <label for="Alamat"><strong>Alamat:</strong></label>
                <input type="text" class="form-control" name="Alamat" required="" placeholder="">
                <label for="Judul_Buku"><strong>Judul_Buku:</strong></label>
                <input type="text" class="form-control" name="Judul_Buku" placeholder="">
                <label for="Tgl_Peminjaman"><strong>Tgl_Peminjaman:</strong></label>
                <input type="text" class="form-control" name="Tgl_Peminjaman" placeholder="">
  <label for="Tgl_Pengembalian"><strong>Tgl_Pengembalian:</strong></label>
                <input type="text" class="form-control" name="Tgl_Pengembalian" placeholder="">            
                
                <br>
                <button type="submit" name="submit" class="btn btn-success">Ubah</button>
                <a href="index.php" class="btn btn-primary">Kembali</a>
            </div>
         </form>
      </div>
   </body>
</html>