<?php
require '../../functions.php';

$product = query("SELECT * FROM product");

if (isset($_POST['cari'])) {
    $product = cari($_POST['keyword']);
}

if (!is_array($product)) {
    $product = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Food & Culinary Kiboynaru</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="../../asset/css/index.css">

</head>
<body>

<!-- navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Food & Culinary</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#home">About</a></li>
              <li><a class="dropdown-item" href="#product">product</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search" action="../../login.php" method="get">
          <button class="btn btn-outline-success" type="submit">Logout</button>
        </form>
      </div>
    </div>
  </nav>

<form class="d-flex" role="search" style="padding: 50px;" method="POST" action="">
    <input class="form-control me-3 shadow-lg p-2 mb-2 bg-body-tertiary rounded" type="search" placeholder="Search" aria-label="Search" name="keyword" id="keyword">
    <button class="btn btn-danger" type="submit" name="cari" id="tombol-cari">Search</button>
  </form>

<!-- content -->
<div class="content" id="home">
  <h1>Selamat Datang</h1>
  <h2>PUSAKA MAKANAN <span>KHAS JAWA BARAT</span></h2>
  <p>Yuk, coba makanan khas Jawa Barat</p>
</div>
</div>



<!-- product -->
<div id="container">
<section id="product">
<div class="container">
    <div class="d-flex flex-wrap">
        <?php if (is_array($product) && count($product) > 0) : ?>
            <?php foreach($product as $p) : ?>
                <div class="card m-2" style="width: 500px; height:500px">
                    <img src="../../asset/img/<?= $p['gambar']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $p['nama']; ?></h5>
                        <p class="card-text"><?= $p['harga']; ?></p>
                        <p class="card-text"><?= $p['deskripsi']; ?></p>
                        <a href="../../admin/detail/detail_user.php?id=<?= $p['id']; ?>" class="btn btn-danger">Selengkapnya</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Tidak ada produk yang ditemukan.</p>
        <?php endif; ?>
    </div>
</div>
</section>
</div>

<!-- footer -->
    <footer>
    <section class="footer">
        <div class="row mx-3 mt-3">
          <div class="col-md-9">
            <p>Copyright © 2024 Food & Culinary</p>
          </div>
          <div class="col">
            <p>Aditya Eka Heriyawan</p>
          </div>
        </div>
        <br>
      </section>
    </footer>

<script src="../../asset/js/script.js"></script>

<!-- bootsrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
