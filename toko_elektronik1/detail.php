<?php include 'layout/navbar.php'; ?>
<?php
$id = $_GET["id"];
$data = query("SELECT * FROM produk WHERE id_produk = $id")[0];
?>

<div class="container">
    <div class="text-produk">
        <h2>Produk Terbaru</h2>
    </div><hr>

    <div class="wrapper-detail-produk">
        <div class="item">
            <img src="foto/<?=$data["foto_produk"]; ?>">
        </div>
        <form action="" method="post">
            <div class="detail-produk">
                <h4 class="nama-produk">Nama Produk:&nbsp;<?= $data["nama_produk"];?></h4>
                <p class="harga_produk">Harga: Rp. <?=$data["harga_produk"];?></p>
                <p class="deskripsi_produk">Deskripsi:&nbsp;<?=$data["deskripsi_produk"];?></p><br><br>
                <p class="stok_produk">Stok &nbsp;<?=$data["stok_produk"];?></p>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
                <label>Jumlah</label>
                <input type="number" name="qty" value="1">

                <button type="submit" name="beli" class="btn btn-success">Beli</button>
            </div>
        </form>
    </div>
</div><hr>

<?php
    if (isset($_POST["beli"])) {
        $qty = $_POST["qty"];
        if($qty > $data["stok_produk"]){
            echo '
        <script type="text/javascript">
        alert("Produk yang dipesan melebihi batas stok yang tersedia")</script>';

        echo '
        <script type="text/javascript">
            location = "index.php";
        </script>';
        }

        $_SESSION["cart"][$id] = $qty;

        echo '
        <script type="text/javascript">
        alert("Produk telah ditambahkan ke dalam keranjang")</script>';

        echo '
        <script type="text/javascript">
            location = "cart.php";
        </script>';
    }
?>