<?php
require '../../functions.php';


$product = query("SELECT * FROM product");

$id = $_GET['id'];
$p = query("SELECT * FROM product WHERE id = $id")[0];


if (isset($_POST['ubah'])) {
  //  cek apakah data berhasil ditambahkan atau tidak
     if (ubah($_POST) > 0){
      echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = '../dashboard/dashboard.php';
            </script>";
     }
      }
  


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container col-8">
        <h1>Edit Data</h1>

    <form action="" method="POST">
      <input type="hidden" name="id" value="<?= $p['id']; ?>">
    <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" autofocus required value="<?= $p['nama']; ?>">
  </div>
  <div class="mb-3">
    <label for="harga" class="form-label">Harga</label>
    <input type="text" class="form-control" id="harga" name="harga"  autofocus required value="<?= $p['harga']; ?>">
    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="deskripsi" name="deskripsi" autofocus required value="<?= $p['deskripsi']; ?>">
    </div>
    <div class="mb-3">
    <label for="gambar" class="form-label">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar" autofocus required value="<?= $p['gambar']; ?>">
  </div>


  <button type="submit" name="ubah" class="btn btn-danger">Ubah</button>
    </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>