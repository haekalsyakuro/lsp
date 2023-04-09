<?php
session_start();
require 'function.php';
if(!isset($_SESSION["username"])){
    echo "
        <script type='text/javascript'>
            alert('Mohon maaf, anda belum login!')
            window.location = '../login/index.php';
        </script>";        
}
if($_SESSION['roles'] !="Admin"){
    echo "
    <script type='text/javascript'>
        alert('anda bukan admin')
        window.location = '../login/index.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>  
    <?php include '../layout/sidebar.php' ?>
    <div class="main">
        <h2>Selamat Datang, <?= $_SESSION['name']; ?></h2><hr>
        <center><p style="font-weight:bolder;font-family:Segoe UI;margin-top:120px;">INI ADALAH HALAMAN ADMIN</p></center>
        <center><p style="font-family:Segoe UI;margin-top:150px;">Anda Login sebagai <?= $_SESSION['roles']; ?></p></center>
    </div>
</body>
</html>