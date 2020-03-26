-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2019 at 06:51 PM
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
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
`id` int(11) NOT NULL,
  `kdbrg` varchar(250) DEFAULT NULL,
  `nmbrg` varchar(250) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `deskripsi` varchar(250) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `kdbrg`, `nmbrg`, `stok`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'DHS01', 'Mac n Cheese', 29, 50000, 'Makaroni dengan saus keju, susu, dan krim. Disajikan dengn daging asap, jamur, dan brokoli.', 'macCheese.jpeg'),
(2, 'DHS02', 'Mi Ayam', 10, 51000, 'Makaroni dengan saus keju, susu, dan krim. Disajikan dengn daging asap, jamur, dan brokoli.', 'miAyam.jpg'),
(3, 'DHS03', 'Nugget Ayam', 10, 51000, 'Makaroni dengan saus keju, susu, dan krim. Disajikan dengn daging asap, jamur, dan brokoli.', 'nugget.jpeg'),
(5, 'DHS04', 'Ayam Goreng Enak', 23, 90000, 'Ayam Goreng enak disajika', '13082019152423ayam.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
  `nonota` varchar(30) DEFAULT NULL,
  `nmbrg` varchar(30) DEFAULT NULL,
  `jmlJual` int(11) DEFAULT NULL,
  `hargaJual` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `tgl` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`nonota`, `nmbrg`, `jmlJual`, `hargaJual`, `total`, `tgl`) VALUES
('nota-1', 'Ayam Goreng Enak', 5, 90000, 450000, '13/08/2019'),
('nota-2', 'Mac n Cheese', 1, 50000, 50000, '13/08/2019');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `telp`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'telp', 'Admin'),
(3, 'user', 'user', 'user', 'user', 'telp', 'User'),
(4, 'user', 'user', 'user', 'user', '', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
