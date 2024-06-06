<?php
require '../functions.php';

$keyword = $_GET['keyword'];


$product = query("SELECT * FROM product
                 WHERE 
                    nama LIKE '%$keyword%' OR
                    deskripsi LIKE '%$keyword%'")
                    ;


?>


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
