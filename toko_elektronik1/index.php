<?php include 'layout/navbar.php'; ?>
<?php
$data = query("SELECT * FROM produk");
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="hero">
    <div class="hero-text">
        <?php if (isset($_SESSION["username"])) : ?>
            <h1 style="font-family:Arial;">  Selamat Datang di Toko Laptop </34>

        <?php endif; ?>
        <?php if (!isset($_SESSION["username"])) : ?>
            <h4 style="font-family:arial;font-size:20px;">Pilih Laptop Yang Anda Cari</h4>
            </ul>
        <?php endif; ?>
    </div>
</div>

<div class="container">
    <div class="text-produk">
        <h2 style="font-weight:bolder;font-family:Arial;">Produk Tersedia.</h2>
        <hr>
    </div>
    <div class="wrapper-produk">
        <?php foreach ($data as $produk) : ?>
            <div class="produk">
                <a href="detail.php?id=<?= $produk["id_produk"]; ?> ">
                    <table class="table"><img src="foto/<?= $produk["foto_produk"]; ?>"></table>
                    <h2><?= $produk["nama_produk"]; ?></h2>
                    <p>Rp. <?= number_format($produk["harga_produk"]); ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>