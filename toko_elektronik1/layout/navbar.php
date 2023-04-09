<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Beranda</title>
    <link rel="stylesheet" href="style/index.css">
</head>

<body>

    <div class="navbar" style="padding-right:10000px">
        <div class="nav-logo">
        </div>
        <div class="nav-links">
            <ul>
                <button class="btn btn-light"><li>
                    <a href="index.php">Beranda</a>
                </li></button>
                <button class="btn btn-light"> <li>
                    <a href="cart.php">Keranjang</a>
                </li></button>
                <button class="btn btn-light"> <li>
                    <a href="dashboard.php">Dasboard</a>
                </li><br/><button>
                <?php if(isset($_SESSION["username"])): ?>
                    <li>
                    <a href="logout.php" class="btn btn-light">Logout</a>
                </li>
                <?php endif; ?>
                <?php if (!isset($_SESSION["username"])) : ?>
                    <li class="nav-active"><a href="login/index.php">Login</a></li>
                    <li class="nav-active"><a href="register/index.php">Sigin</a></li>
            </ul>
        <?php endif; ?>
        </div>
    </div>
</body>

</html>