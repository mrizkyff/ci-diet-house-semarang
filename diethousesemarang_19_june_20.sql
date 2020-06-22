-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 04:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diethousesemarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_item`
--

CREATE TABLE IF NOT EXISTS `tb_item` (
`id_produk` int(11) NOT NULL,
  `kdbrg` varchar(250) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `nmbrg` varchar(250) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `deskripsi` varchar(250) DEFAULT NULL,
  `tgl_stok` varchar(100) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_item`
--

INSERT INTO `tb_item` (`id_produk`, `kdbrg`, `kategori`, `jenis`, `nmbrg`, `stok`, `harga`, `deskripsi`, `tgl_stok`, `gambar`) VALUES
(2, 'DHS01', '8', NULL, 'Mac n Cheese', -11, 500001, 'Makaroni Enyoi', NULL, 'macCheese.jpeg'),
(3, 'DHS02', NULL, NULL, 'Mi Ayam', 163, 150000, 'Makaroni dengan mici', NULL, 'miAyam.jpg'),
(4, 'DHS03', NULL, NULL, 'Nugget Ayam', 38, 150000, 'Makaroni dengan mici', NULL, 'nugget.jpeg'),
(5, 'DHS04', NULL, NULL, 'Ayam Goreng Enak', 24, 150000, 'Makaroni dengan mici', NULL, '13082019152423ayam.jpg'),
(6, '20200519DHS522056', '5', '2', 'mouse', 12, 87000, 'mouse wireless', '2020-05-19 20:56:41', '9d460e0401702fead6d505c1966ddd53.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_logsys`
--

CREATE TABLE IF NOT EXISTS `tb_logsys` (
`id_log` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `edit_by` int(11) DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL,
  `tgl_action` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

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
(24, 13, 1, 'Delivery', '2020-05-14 14:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
`id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `stat` varchar(20) DEFAULT NULL,
  `jmlJual` int(11) DEFAULT NULL,
  `tgl_transaksi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_produk`, `id_user`, `stat`, `jmlJual`, `tgl_transaksi`) VALUES
(11, 3, 1, '3', 7, '2020-05-13 13:29:19'),
(12, 3, 1, '1', 1, '2020-05-14 14:43:55'),
(13, 3, 1, '3', 2, '2020-05-14 14:44:05'),
(14, 2, 1, '1', 17, '2020-05-14 14:44:13'),
(15, 4, 1, '13', 3, '2020-05-14 14:44:19'),
(16, 5, 1, '2', 3, '2020-05-14 14:44:26'),
(17, 3, 1, '1', 2, '2020-05-19 17:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `f_name`, `l_name`, `username`, `password`, `email`, `telp`, `level`, `alamat`, `tgl_registrasi`, `foto`, `status`) VALUES
(1, NULL, NULL, 'admin', 'admin', 'admin', 'telp', '2', 'Jl. Akasia Raya No. 2A Candirejo Permai', NULL, NULL, 3),
(11, 'MUHAMAD RIZKY', 'FEBRIAN', 'mrizkyff', 'admina', 'muhamadrizkyff@gmail.co.id', '08123455678', '1', 'Jalan Akasia Raya No. 2A Candirejo Permai RT 6', '2020-05-06 05:48:22', 'f065fea9d74d2286b8d8efbb8dcc6731.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
 ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_logsys`
--
ALTER TABLE `tb_logsys`
 ADD PRIMARY KEY (`id_log`), ADD KEY `id_log` (`id_log`), ADD KEY `id_transaksi` (`id_transaksi`), ADD KEY `id_user` (`edit_by`), ADD KEY `id_transaksi_2` (`id_transaksi`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
 ADD PRIMARY KEY (`id_transaksi`), ADD KEY `id_produk` (`id_produk`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_logsys`
--
ALTER TABLE `tb_logsys`
MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
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
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tb_item` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
