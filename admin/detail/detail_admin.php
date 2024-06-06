<?php

require '../../functions.php';

$id = $_GET['id'];

$product = query("SELECT * FROM product WHERE id = $id");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../asset/css/navbar.css">
    <style>
        .container{
            text-align: center;
            align-items: center;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .container h1{
            text-align: center;
            margin-top: 0px;
        }
        .container a{
            margin-bottom: 10px;
        }
        .card-img-top {
            width: 100%;
            height: 250px;
            object-fit: cover; 
        }
        .card:hover {
            transform: scale(1.05);
            transition: 0.3s;
        }
        footer {
            background-color: #940000;
            color: #fff;
            padding: 10px;
            width: 100%;
        }
    </style>
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
                        <li><a class="dropdown-item" href="#">About</a></li>
                        <li><a class="dropdown-item" href="#product">Product</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search" action="../../login.php" method="get">
                <button class="btn btn-outline-success" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>



<!-- product -->
<section id="product">
    <div class="container">
        <h1>Dashboard</h1>
        <a href="../add_data/tambah.php" class="btn btn-danger">Tambah Data</a>
        <div class="d-flex flex-wrap justify-content-center">
            <?php if (is_array($product) && count($product) > 0) : ?>
                <?php foreach($product as $p) : ?>
                    <div class="card m-2" style="width: 25rem;">
                        <img src="../../asset/img/<?= $p['gambar']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $p['nama']; ?></h5>
                            <p class="card-text"><?= $p['harga']; ?></p>
                            <p class="card-text"><?= $p['deskripsi']; ?></p>
                            <a href="../../admin/edit_data/edit.php?id=<?= $p['id'];?>" class="badge text-bg-warning text-decoration-none">edit</a>
                            <a href="../../admin/delete/hapus.php?id=<?= $p['id'];?>" onclick="return confirm('Yakin?')" class="badge text-bg-danger text-decoration-none">delete</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>Tidak ada produk yang ditemukan.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

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

<!-- bootsrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
