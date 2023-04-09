-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 02:45 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printer`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` int(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `foto`, `harga`, `stok`, `deskripsi`) VALUES
(8, 'Printer2', 'printer2.jpg', 60000, 2, 'Diskon 150%'),
(9, 'Printer3', 'printer3.jpg', 450000, 39, 'Diskon 5%'),
(10, 'Printer4', 'printer4.jpg', 100000, 10, 'Diskon 150%'),
(11, 'Printer5', 'printer5.jpg', 100000, 99, 'Diskon 10%'),
(12, 'Printer6', 'printer6.jpg', 585000, 89, 'Diskon 150%'),
(13, 'Printer7', 'printer7.jpg', 100000, 88, 'Diskon 100%'),
(14, 'Printer8', 'printer8.jpg', 500000, 97, 'Harga Normal'),
(15, 'Printer9', 'printer9.png', 100000, 777, 'Harga Normal'),
(16, 'Printer10', 'printer10.jpg', 990000, 99, 'Harga Tidak Diskon');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_whatsapp` int(22) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(22) NOT NULL,
  `subtotal` int(22) NOT NULL,
  `foto` text NOT NULL,
  `status` enum('proses','terverifikasi','ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `nama_lengkap`, `alamat`, `nomor_whatsapp`, `nama_produk`, `harga`, `subtotal`, `foto`, `status`) VALUES
(7, '0000-00-00', 'test', 'test', 0, 'Printer1', 100000, 1, 'printer1.png', 'terverifikasi'),
(8, '0000-00-00', 'test', 'test', 0, 'Printer4', 100000, 1, 'printer4.jpg', 'ditolak'),
(9, '0000-00-00', 'test', 'test', 0, 'Printer2', 120000, 1, 'printer2.jpg', 'proses'),
(10, '0000-00-00', 'test', 'test', 0, 'Printer1', 100000, 400000, 'printer1.png', 'proses'),
(11, '0000-00-00', 'test', 'test', 0, 'Printer1', 100000, 400000, 'printer1.png', 'proses'),
(12, '0000-00-00', 'test', 'test', 0, 'Printer1', 100000, 400000, 'printer1.png', 'proses'),
(13, '0000-00-00', 'PP', 'Jl Mardani', 0, 'Printer2', 60000, 200000, 'printer1.png', 'proses'),
(14, '0000-00-00', 'PP', 'Jl Mardani', 0, 'Printer2', 60000, 300000, 'printer2.jpg', 'proses'),
(15, '2023-03-31', 'PP', 'testi', 0, 'Printer9', 100000, 100000, 'printer9.png', 'terverifikasi'),
(16, '2023-03-31', 'PP', 'qibar', 0, 'Printer4', 100000, 100000, 'printer9.png', 'proses'),
(17, '2023-03-31', 'PP', 'qibar', 0, 'Printer4', 100000, 100000, 'printer4.jpg', 'ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` text,
  `roles` enum('Admin','Customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `foto`, `roles`) VALUES
(1, 'Cek', 'ZidanAdmin', 'Dan', 'pp.jpg', 'Admin'),
(14, 'PP', 'pemuda', '123', 'DSC_0951.JPG', 'Customer'),
(15, 'Jafar', 'Jafar', '123', 'WhatsApp Image 2023-03-20 at 09.50.02.jpeg', 'Customer'),
(16, 'fayi', 'fayi', '123', 'Startled-bro.png', 'Customer'),
(17, 'testo', 'test', '123', 'Screenshot 2020-09-16 081639.png', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
