-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2020 at 01:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diethousesemarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id` int(11) NOT NULL,
  `picture` int(11) NOT NULL,
  `captions` int(11) NOT NULL,
  `other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_item`
--

CREATE TABLE `tb_item` (
  `id_produk` int(11) NOT NULL,
  `kdbrg` varchar(250) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `nmbrg` varchar(250) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `deskripsi` varchar(250) DEFAULT NULL,
  `tgl_stok` varchar(100) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `kalori` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_item`
--

INSERT INTO `tb_item` (`id_produk`, `kdbrg`, `kategori`, `jenis`, `nmbrg`, `stok`, `harga`, `deskripsi`, `tgl_stok`, `gambar`, `kalori`, `rating`) VALUES
(2, 'DHS01', '8', NULL, 'Mac n Cheese', 6, 500001, 'Makaroni Enyoi', NULL, 'macCheese.jpeg', 0, 0),
(3, 'DHS02', NULL, NULL, 'Mi Ayam', 158, 150000, 'Makaroni dengan mici', NULL, 'miAyam.jpg', 0, 0),
(4, 'DHS03', NULL, NULL, 'Nugget Ayam', 38, 150000, 'Makaroni dengan mici', NULL, 'nugget.jpeg', 0, 0),
(5, 'DHS04', NULL, NULL, 'Ayam Goreng Enak', 24, 150000, 'Makaroni dengan mici', NULL, '13082019152423ayam.jpg', 0, 0),
(6, '20200519DHS522056', '5', '2', 'mouse', 12, 87000, 'mouse wireless', '2020-05-19 20:56:41', '9d460e0401702fead6d505c1966ddd53.jpg', 0, 0),
(7, '20200528DHS220948', '2', '2', 'Ayam Goreng Enak', 12, 85000, 'enak sekali', '2020-05-28 09:48:34', '73e2d1b7639883485cd01a4d67914926.jpg', 0, 0),
(8, '20200528DHS221136', '2', '2', 'Bukan Makanan', 12, 290000, 'Tidak Bisa dimakan ok?', '2020-05-28 11:36:28', '519497b683331f7f19cc5c6b7d8861f7.jpg', 0, 0),
(9, '20200528DHS211137', '2', '1', 'z', 44, 31111, 'cccc', '2020-05-28 11:37:47', 'd55bb38561e7f7d7d83a30a445684ebe.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_logsys`
--

CREATE TABLE `tb_logsys` (
  `id_log` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `edit_by` int(11) DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL,
  `tgl_action` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_logsys`
--

INSERT INTO `tb_logsys` (`id_log`, `id_transaksi`, `edit_by`, `action`, `tgl_action`) VALUES
(17, 11, 1, 'Acc Transaksi', '2020-05-13 15:09:46'),
(18, NULL, 1, 'Acc Transaksi', '2020-05-13 15:09:59'),
(19, 11, 1, 'Acc Transaksi', '2020-05-13 15:11:26'),
(20, 11, 1, 'Delivery', '2020-05-13 15:12:34'),
(21, 16, 1, 'Acc Transaksi', '2020-05-14 14:44:35'),
(22, 13, 1, 'Acc Transaksi', '2020-05-14 14:44:40'),
(23, 15, 1, 'Del Transaksi', '2020-05-14 14:44:49'),
(24, 13, 1, 'Delivery', '2020-05-14 14:45:01'),
(25, 14, 1, 'Del Transaksi', '2020-06-11 15:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_checkout` int(11) NOT NULL,
  `foto_pembayaran` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `tanggal_checkout` varchar(11) NOT NULL,
  `acc_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_checkout`, `foto_pembayaran`, `id_user`, `total_pembayaran`, `tanggal_checkout`, `acc_status`) VALUES
(1, '9faea94a90ad6357517444b67f68153c.jpg', 1, 2250000, '2020', 0),
(2, '465a16ba1f76053a4e022d31ed26026b.jpg', 1, 2250000, '2020', 0),
(3, 'e77342f5252c46f563d1ffe550912ca2.jpg', 11, 0, '2020-06-11 ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `stat` varchar(20) DEFAULT NULL,
  `jmlJual` int(11) DEFAULT NULL,
  `tgl_transaksi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_produk`, `id_user`, `stat`, `jmlJual`, `tgl_transaksi`) VALUES
(11, 3, 1, '3', 7, '2020-05-13 13:29:19'),
(12, 3, 1, '1', 1, '2020-05-14 14:43:55'),
(13, 3, 1, '3', 2, '2020-05-14 14:44:05'),
(14, 2, 1, '13', 17, '2020-05-14 14:44:13'),
(15, 4, 1, '13', 3, '2020-05-14 14:44:19'),
(16, 5, 1, '2', 3, '2020-05-14 14:44:26'),
(17, 3, 1, '1', 2, '2020-05-19 17:08:16'),
(18, 3, 12, '1', 5, '2020-05-21 12:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tgl_registrasi` datetime DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `f_name`, `l_name`, `username`, `password`, `email`, `telp`, `level`, `alamat`, `tgl_registrasi`, `foto`, `status`) VALUES
(1, 'ad', 'min', 'admin', 'admin', 'admin@dhs.com', '62811111', '2', 'Semarang Barat', NULL, '8bcafb3d15a6c331a38fa3534db7a42e.jpg', 3),
(11, 'MUHAMAD RIZKY', 'FEBRIAN', 'mrizkyff', 'admin', 'muhamadrizkyff@mhs.dinus.ac.id', '08', '1', 'Jalan Akasia Raya No. 2A Candirejo Permai RT 6, Tuntang', '2020-05-06 05:48:22', 'b1a76e38eb5e72407e5decd1219d2f10.jpg', 1),
(12, 'Akun', 'Trial', 'testing', 'testing', 'testing@gmail.com', '081231231212', '2', 'Semarang', '2020-05-21 12:30:32', 'e4526d5826a4e25576f4f19dff0bca17.jpg', 1),
(13, 'Debug', 'debug', 'debug', 'debug', 'debug@gmail.com', '08122121', '2', 'debug', '2020-05-28 11:35:13', '0faf555bbd1b11ba7091963160455683.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_logsys`
--
ALTER TABLE `tb_logsys`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_log` (`id_log`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_user` (`edit_by`),
  ADD KEY `id_transaksi_2` (`id_transaksi`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_checkout`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_logsys`
--
ALTER TABLE `tb_logsys`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_logsys`
--
ALTER TABLE `tb_logsys`
  ADD CONSTRAINT `tb_logsys_ibfk_2` FOREIGN KEY (`edit_by`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_logsys_ibfk_4` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tb_item` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
