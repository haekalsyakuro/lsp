<?php include 'layout/navbar.php'; ?>

<?php

if (empty($_SESSION["cart"] || isset($_SESSION["cart"]))) {
    echo "<script>alert('keranjang kosong, silahkan berbelanja terlebih dahulu');</script>";
    echo "<script>location='index.php';</script>";
}

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

<div class="container">
    <?php foreach ($_SESSION["cart"] as $id_produk => $hasil) : ?>
        <?php
        $data = query("SELECT * FROM produk WHERE id_produk = $id_produk")[0];
        $subtotalHarga = $hasil * $data["harga_produk"];
        ?>

        <div class="card-cart">
            <div class="child-cart">
                <img src="foto/<?php echo $data["foto_produk"]; ?>" alt="">
            </div>
            <div class="text-card">
                <h3>Nama Produk : <?= $data['nama_produk']; ?></h3>
                <h3>Kuantitas : <?= $hasil; ?></h3>
                <h3>Harga Satuan : Rp <?= number_format($data["harga_produk"]); ?></h3>
                <h3 style="margin-top: 10px">Total Harga : Rp <?= number_format($subtotalHarga); ?></h3>
                
                <a href="checkout.php" class="btn btn-primary">Checkout Produk</a>
                <a href="cart-delete.php?id=<?= $data["id_produk"]; ?>" class="btn btn-danger">Hapus</a>
                <a href="cart-edit.php?id=<?= $data["id_produk"]; ?>" class="btn btn-warning">Edit</a>
            </div><br><hr>
        </div>
    <?php endforeach; ?>
</div>