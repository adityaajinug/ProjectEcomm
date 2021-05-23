-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2021 at 11:44 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecc`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `stok`, `gambar`) VALUES
(1, 'Samsung Galaxy A52', '2000000', 90, 'samsung.jpg'),
(2, 'Xiaomi Redmi Note 9', '2500000', 85, 'xirednote9.jpg'),
(3, 'Realme 6', '3500000', 5, 'realme6.jpg'),
(4, 'Nokia 6', '1500000', 10, 'nokia6.jpg'),
(5, 'Asus Zenfone Max Pro 1', '1150000', 20, 'asuszenfonmaxprom1.jpg'),
(6, 'Xiaomi Poco M3', '8000000', 40, 'xiaomipocom3.jpg'),
(7, 'Samsung A20s', '3150000', 48, 'samsunga20s.jpg'),
(8, 'Iphone 12 Pro Max', '16000000', 34, 'iphone12promax.jpg'),
(9, 'Oppo A5s', '5000000', 70, 'oppoa5s.jpg'),
(10, 'Oppo A53', '8000000', 69, 'oppoa53.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk_jual`
--

CREATE TABLE `produk_jual` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `stok` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_jual`
--

INSERT INTO `produk_jual` (`id`, `id_produk`, `nama_produk`, `harga`, `stok`) VALUES
(1, 1, 'Samsung A52', '2000000', 1),
(2, 2, 'Xiaomi Redmi Note 9', '2500000', 10),
(3, 2, 'Xiaomi Redmi Note 9\r\n', '2500000', 5);

--
-- Triggers `produk_jual`
--
DELIMITER $$
CREATE TRIGGER `dijual_produk` AFTER INSERT ON `produk_jual` FOR EACH ROW BEGIN
	UPDATE produk SET stok=stok-NEW.stok
    WHERE id = NEW.id_produk;
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `produk_masuk`
--

CREATE TABLE `produk_masuk` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `stok` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_masuk`
--

INSERT INTO `produk_masuk` (`id`, `id_produk`, `nama_produk`, `harga`, `stok`) VALUES
(1, 1, 'Samsung Galaxy A52', '2000000', 88),
(2, 2, 'Xiaomi Redmi Note 9', '2500000', 98);

--
-- Triggers `produk_masuk`
--
DELIMITER $$
CREATE TRIGGER `ada_produk` AFTER INSERT ON `produk_masuk` FOR EACH ROW BEGIN
	UPDATE produk SET stok = stok+NEW.stok
    WHERE id = NEW.id_produk;
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL,
  `role_id` int(2) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `date_created`, `role_id`, `img`) VALUES
(1, 'aditya', 'adityaajinug@gmail.com', '$2y$10$BDOK4DBycNkdxQg3GkqlxeFhsDICOs/0DKb322tkFvFSb7vvTcnQW', 1621755491, 1, 'default.jpg'),
(2, 'aji', 'aji@gmail.com', '$2y$10$Dr36.VXFtqV/MVY57nqKDOzkRM91CCXZcmYCHNcx5sOXVx3/37XA6', 1621760217, 2, 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_jual`
--
ALTER TABLE `produk_jual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_masuk`
--
ALTER TABLE `produk_masuk`
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
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk_jual`
--
ALTER TABLE `produk_jual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk_masuk`
--
ALTER TABLE `produk_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
