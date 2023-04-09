<?php include'layout/navbar.php'; ?>

<?php

    if(empty($_SESSION["cart"] || isset($_SESSION["cart"]))) {
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
<?php
$totalBelanja = 0; ?>
<?php foreach ($_SESSION['cart'] as $produk => $result): ?>

<?php $data = query("SELECT * FROM produk WHERE id_produk = '$produk'")[0];
    $totalHarga = $result * $data["harga_produk"];
    ?>

<?php endforeach; ?>
<div class="container">
    <div class="card-checkout" style="margin-top: 50px;">
        <form action="" method="post">
            <img src="foto/<?=$data["foto_produk"]; ?>"><br>  
            <!-- Nama User -->
            <label>Nama Penerima</label>
            <input type="text" name="name" class="form-control" value="<?=$_SESSION['name']; ?>">

            <!-- Alamat -->
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat">

            <!-- Nomor Telepon -->
            <label>Nomor Telepon</label>
            <input type="text" name="no_hp" class="form-control" id="no_hp">
                
            <!-- Nama Produk -->
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" value="
            <?=$data["nama_produk"]; ?>">

            <!-- Harga Satuan -->
            <label>Harga Satuan</label>
            <input type="text" name="harga_satuan" class="form-control" value="
            <?= number_format($data['harga_produk']); ?>">

            <!-- Total Harga -->
            <label>Total Harga</label>
            <input type="text" name="subtotal" class="form-control"
            value="<?= $totalHarga = $result * $data["harga_produk"] ?>">

            <!-- Foto Produk -->
            <input type="hidden" name="foto_produk" value="<?=$data['foto_produk']; ?>">

            <!-- Tombol Submit -->
            <button type="submit" name="checkout" class="btn btn-success">Kirim</button>
        </form>
    </div>
</div>

<?php
if(isset($_POST['checkout'])){
    if(checkoutProduk($_POST) > 0){
        echo "
        <script>
        alert('Pembelian Berhasil!');
        location='index.php';
        </script>
        ";
    }else{
        echo mysqli_error($dbconnect);
    }
}
?>