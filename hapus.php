<?php session_start();
   require 'config.php';
   if (isset($_GET['id'])) {
      $kb = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   }
   if(isset($_POST['submit'])){
         require 'config.php';
   $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   $_SESSION['success'] = "Data Berhasil dihapus";
   header("Location: index.php");
   }
?>
   <body style="background-color: #F5FFFA;">
</body>
<!DOCTYPE html>
<html>
   <head>
      <title>APLIKASI INTERAKTIF</title>
      <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
         <br>
         <CENTER><h1>Hapus Data</h1></CENTER>
         <h3> Yang bernama <?php echo "$kb->Nama"; ?> dengan Nama <?php echo "$kb->Nama"; ?> ? </h3>
         <form method="POST">
            <div class="form-group">
               <input type="hidden" value="<?php echo "$kb->Nama"; ?>" class="form-control" name="Nama">
               <a href="index.php" class="btn btn-primary">Kembali</a>
               <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
            </div>
         </form>
      </div>
   </body>
</html>
