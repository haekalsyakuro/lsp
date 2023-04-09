<?php include 'layout/navbar.php'; ?>

<?php

$id = $_GET['id'];
$transaksi = query("SELECT * FROM transaksi WHERE id_transaksi = '$id'")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<link rel="stylesheet" href="style/detail.css">
<div class="container">
    <div class="main">
        <h2 class="judul">Data Transaksi</h2>
        <hr>
        <div class="detail-transaksi">
            <tr>
                <div class="transaksi">
                    <?php
                    if ($transaksi["status"] == "proses") { ?>
                        <button class="proses">Pesanan kamu lagi di proses nih, di tunggu ya</button>
                    <?php
                    } elseif ($transaksi["status"] == "dikirim") { ?>
                        <button class="dikirim">Produkmu udah dikirim nih, di tunggu ya</button>
                    <?php
                    } elseif ($transaksi["status"] == "ditolak") { ?>
                        <button class="ditolak">Pesananmu di tolak, coba cek lagi pesanan kamu deh</button>
                    <?php
                    }
                    ?>
                    <h3>Nama Pembeli: <?= $transaksi["name"]; ?></h3>
                    <h3>Alamat: <?= $transaksi["alamat"]; ?></h3>
                    <h3>Nomor Handphone: <?= $transaksi["no_hp"]; ?></h3>
                    <h3>Nama Produk: <?= $transaksi["nama_produk"]; ?></h3>
                    <h3>Harga: <?= number_format($transaksi["harga_produk"]); ?></h3>
                    <h3>SubTotal: <?= number_format($transaksi["subtotal"]); ?></h3>
                    <h3>Status: <?= $transaksi["status"]; ?></h3>
                </div>
            </tr>
            <div class="foto-transaksi">
                <img src="foto/<?= $transaksi['foto_produk']; ?>" width="250px" class="foto-produk">
            </div>
        </div>
    </div>
</div>